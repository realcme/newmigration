<?php
if ($teaser) {
  print $node->teaser;
} else {
  global $user, $brand;
  
  $img_path = base_path().drupal_get_path('module', 'cmecoursepromotion') . "/img/virtualclinic";
  
  // assemble all client-side-needed information into this:
  $context = array();
  
  // doctor info
  $doctor = array();
  if ($user->uid) {
    $fulltitle = theme('user_public_name', $user);
    $doctor['name'] = t('Welcome') . ' ' . $fulltitle;
    $doctor['icon'] = 'eclinic-icon-doctor.gif';
    $doctor['alt'] = 'eclinic-icon-doctor.gif';
    $doctor['title'] = $fulltitle;
  }
  $context['doctor'] = $doctor;
  
  // clinic info
  $clinic = array();
  $clinic['name'] = $title;		// node title
  $clinic['description'] = $body;	// node body
  if ($field_icon && $field_icon[0]) {
    $icon = $field_icon[0]['filepath'];
    $clinic['icon'] = base_path() . $icon;
    $clinic['alt'] = basename($icon);			//?
    $clinic['title'] = t('clinic logo');		//?
  }
  
  // now fetch all course-nodes from 'The Practice'
  $tid = taxonomy_get_term_by_name("The Practice");
  $result = taxonomy_select_nodes(array( $tid[0]->tid ), 'or', 0, FALSE);
  //print_r($result);
  
  // configured patient list
  $patient_list = array();
  if (isset($field_patient_list)) {
    $list = explode(",", $field_patient_list[0]['value']);
    foreach ($list as $p) {
      $p = trim($p);
      if (0 < strlen($p))
      $patient_list[] = "'".strtolower($p)."'";
    }
  }
  $sql = '';
  if (count($patient_list) > 0) {
    $tmp = implode(', ', $patient_list);
    $sql .= "select content_field_allowed_sites.nid from {content_field_allowed_sites} "."\n";
    $sql .= "inner join {content_type_course} on {content_field_allowed_sites}.nid = {content_type_course}.nid"."\n";
    $sql .= "where field_allowed_sites_value = '%s' and field_series_value in ($tmp) group by content_field_allowed_sites.nid";
  
    $result = db_query($sql, $brand, implode(', ', $patient_list));
    
    // work out the patient info for each course
    $patient = array();
    while ($data = db_fetch_object($result)) {
  
      $program_node = node_load($data->nid);
  
      $name = $program_node->field_series[0]['value'];
  
      // per patient
      if (!isset($patient[$name])) {
        // first time
        $patient[$name] = array();
        $patient[$name]['name'] = ucwords($name);
        // maybe there's a better way to do this icon lookup?
        $icon = db_result(db_query("SELECT filepath from {files} where fid=%s", $program_node->field_icon[0]['fid']));
        $patient[$name]['icon'] = base_path() . $icon;
        $patient[$name]['alt'] = $program_node->field_icon[0]['alt'];
        $patient[$name]['title'] = $program_node->field_icon[0]['title'];
        $patient[$name]['visit'] = array();
      }
  
      $visit_num = (int) $program_node->field_course_part[0]['value'];
  
      // per patient, each visit
      $visit = array();
      $visit['name'] = t("Visit") . " " . $visit_num;
      $visit['statement'] = $program_node->field_patient_statement[0]['value'];	// patient statement
      $visit['description'] = $program_node->og_description;		// course title
  
      // per-visit biometrics, localized
      $barray = array();
      $bio = explode(",", $program_node->field_patient_biometrics[0]['value']);
      foreach ($bio as $b) {
        $keyval = explode(":", trim($b));
        if (count($keyval) == 2)
        $barray[] = t(trim($keyval[0])) . ': ' . trim($keyval[1]);
      }
      $visit['biometrics'] = implode("<br>", $barray);
  
      //echo($visit['biometrics']);
  
      $membership = og_membership_get_node($program_node->nid, $user->uid);
      $visit['started'] = isset($membership) && !empty($membership->field_actual_begin[0]['value']);
      $visit['completed'] = isset($membership) && !empty($membership->field_end_date[0]['value']);
  
      $visit['link'] = base_path() . "node/" . $program_node->nid;
      $visit['schedule'] = cmecompanion_dialog_js('node/' . $program_node->nid);
      $visit['nid'] = $program_node->nid; // used for virtual clinic cookie
      $visit['clinicnid'] = $node->nid; // used for virtual clinic cookie
  
      // this will assign the visit associatively, but we'll sort-by-key later to get indexed
      $patient[$name]['visit'][$visit_num - 1] = $visit;
    }
  }
  // add all the patients to the clinic
  // sort the patient in the same order as initially
  $sortedpatient = array();
  $list = explode(",", $field_patient_list[0]['value']);
  foreach ($list as $p) {
    $p = trim($p);
    if (isset($patient[$p])) {
      $sortedpatient[$p] = $patient[$p];
    }
  }
  $patient = $sortedpatient;
  $clinic['patient'] = array();
  foreach ($patient as $p) {
    ksort($p['visit']);		// sort the visits by key (assoc-array -> indexed [IFF keys are numbered from zero] )
    $clinic['patient'][] = $p;
  }
  
  // add the clinic to the context, and then convert to json
  $context['clinic'] = $clinic;
  
  //stop using json_encode() and start using drupal_to_js()
  //$contextJSON = json_encode($context);
  $contextJSON = drupal_to_js($context);
  
  //-----------------------------------------
  $javascript = virtual_clinic_js($contextJSON, $img_path);
  
  // add our css and javascript to this node's page
  $subtheme_path = path_to_subtheme();
  drupal_add_css($subtheme_path  . '/css/virtualclinic.css', 'theme', 'all', FALSE);
  drupal_add_js($javascript, 'inline');
  
  //-----------------------------------------
}  
?>

<?php if (!$teaser) { ?>
<?php  print theme('homelinks', NULL); ?>
<?php  print theme('header_title', $nid); ?>
<br>
<div id="eclinic-wrapper">

<div id="intro-text">
  <div id="intro-text-title">
    <img class="eclinic-logo" src="" alt="" width="43" height="43" border="0" />
    <div class="eclinic-title"></div>
  </div>
  <div class="eclinic-intro-text"></div>
</div>

<div id="eclinic-box">

<div id="eclinic-header">
<div class="eclinic-header-left"></div>
<div class="eclinic-header-title"></div>
<div class="eclinic-header-date"></div>
</div>
<div id="eclinic">
<div id="eclinic-top-left">
<div class="patient-border"><img class="eclinic-patient" src="" alt=""
  width="43" height="43" border="0" /></div>
<div class="patient-info"></div>
</div>
<div id="eclinic-top-right">
<div id="eclinic-top-row">
<div class="doctor-name"></div>
<div class="number-patients-text">Patients in clinic:</div>
<div class="number-patients"></div>
</div>
<div id="eclinic-folders-row">
<div class="doctor-icon"><img id="doctor-image"
  src="<?php echo($img_path); ?>/eclinic-icon-no-login.gif" alt="Doctor"
  width="71" height="82" border="0"></div>
<div class="arrow-back"><img id="back-arrow"
  src="<?php echo($img_path); ?>/arrow-back.gif" alt="Previous Folder"
  title="Previous Folder" onclick="rollFolders(-1)" width="23"
  height="23" border="0"></div>
<div class="eclinic-folders">
<table id="eclinic-folders-table" width="291" height="81" border="0"
  cellspacing="0" cellpadding="0">
  <tr height="22">
    <td>
    <div class="folder-rollover"><span class="bold patient_name"></span>&nbsp;-
    [ <span class="patient_progress"></span>&nbsp;]</div>
    </td>
  </tr>
  <tr height="9" align=center valign="top">
    <td align="center" class="folders"><img
      src="<?php echo($img_path); ?>/folder-rollover-line.gif" alt=""
      width="1" height="7" border="0"></td>
  </tr>
  <tr height="50">
    <td>
    <div id="folders-div">
    <div id="folders-pane"></div>
    </div>
    </td>
  </tr>
</table>
</div>
<div class="arrow-next"><img id="next-arrow"
  src="<?php echo($img_path); ?>/arrow-next.gif" alt="Next Folder"
  title="Next Folder" onclick="rollFolders(1)" width="23" height="23"
  border="0"></div>
</div>
<div id="eclinic-pages"></div>
</div>
<div id="eclinic-bottom-left"></div>
<div id="eclinic-bottom-right">
<div class="eclinic-comment-info"><img
  src="<?php echo($img_path); ?>/small-folder.gif" alt="" height="16"
  width="21" border="0"><span id="visit-comment-info"></span></div>
<div class="eclinic-comment"><span id="visit-comment"></span></div>
<div id="next-steps">
<div id="schedule-img" class="next-steps-icon"><img
  src="<?php echo($img_path); ?>/schedule-activity.gif"
  alt="Schedule Activity" width="29" height="29" border="0"></div>
<div id="schedule-div" class="schedule-activity"><span
  class="eclinic-link"><a href="#">Schedule Activity</a></span></div>
<div id="schedule-divider" class="next-steps-divider" style="background-image: url(<?php print $img_path?>/activity-divider.gif)"></div>
<div id="proceed-img" class="next-steps-icon"><img
  src="<?php echo($img_path); ?>/proceed-activity.gif"
  alt="Proceed To Activity" width="29" height="29" border="0"></div>
<div id="proceed-div" class="proceed-activity"><span
  class="eclinic-link"><a href="#">Proceed To Activity</a></span></div>
</div>
</div>
</div>
</div>
</div>

<?php 
  print theme('nodes_promotions',$node->nid, 'RELATED ACTIVITIES'); 
} // not teaser
?>