<?php
  
  drupal_set_title($field_group_name[0]['value']);
  
  $theme_path = path_to_subtheme();
  drupal_add_css($theme_path  . '/css/groupstatus.css', 'theme', 'all', FALSE);
  
  $arrow_active = "<img src='".path_to_subtheme()."/img/arrow_active.png'></img>";
  $arrow_completed = "<img src='".path_to_subtheme()."/img/arrow_disabled.png'></img>";
?>

<div class="node <?php print $node_classes ?>" id="node-<?php print $node->nid; ?>"><div class="node-inner">
<?php  print theme('homelinks', NULL); ?>


  <?php if ($unpublished) : ?>
    <div class="unpublished"><?php print t('Unpublished'); ?></div>
  <?php endif; ?>

  <?php if (count($taxonomy)): ?>
    <div class="taxonomy"><?php print t(' in ') . $terms; ?></div>
  <?php endif; ?>

<br />
<div id="intro-text">
  <div id="intro-text-title">
    <img class="curric-logo" src="<?php print base_path() . $field_icon[0]['filepath'] ?>" alt="" border="0" />
    <div class="curric-title"><?php print $field_group_name[0]['value'] ?></div>
  </div>
  <div class="curric-intro-text"><?php print $field_group_description[0]['value'] ?></div>
</div>
<div style='clear: both'></div>

<?php 

  global $brand;
  global $user;
  $allrecords = $user ? healthcourse_records() : NULL; // TODO: list per curriculum - not healthcourse specific
  $result = '';

  
  $img_path = base_path().drupal_get_path('module', 'cmecoursepromotion')."/img";
  $df = "%b %d, %Y";
  
  $data = array();
  $node_array = $node->field_activities;
  //print_r($node_array);
  foreach ($node_array as $item) {
    $aid = $item['nid'];
    if (!$aid) {
      continue;
    }
    $activity = CMEMemcache::get_node($aid);
    if (!$activity) {
      continue;   
    }
    if (cmecurriculum_hide_from_list($activity)) {
      if (!$user || $user->uid != 1) {
        continue;
      }
    }
    $key = $activity->created.'-'.$aid; // order by creation date
    $data[$key] = array(
        'title' => $activity->title,
        'icon_path' => base_path().$activity->field_icon[0]['filepath'],
        'credits' => theme('all_credits', unserialize($activity->field_all_credits[0][value]), FALSE),
    );
    $status = '';
    $status_text = '';
    if ($user->uid) {
      //error_log("User is logged in");
      // User is logged in
      if ($allrecords && $allrecords[$aid]) {
        $status = $allrecords[$aid]['status'];
        if ($status == 'scheduled') $status = '';
      }
      if (!$status) {
        $conditions = get_proceed_conditions($activity);
        if ($conditions['can_proceed']) {
          $status = 'open';
          $status_text = t('Active');
          $data[$key]['goto'] = l($arrow_active, "node/$aid", array(), NULL, NULL, FALSE, TRUE);
        } else {
          $status = 'forbidden';
          $status_text = t('You must complete the previous activity before you can begin this activity.');
          //$data[$key]['goto'] = $arrow_disabled;
        }
      } else {
        // Started or Completed
        $status_text = '';
        
        if ($status == 'completed') {
          //$status_text = t('Completed on %date', array('%date' => strftime($df, strtotime($allrecords[$aid]['completion_date']))));
          $status_text = t('Completed');
          $data[$key]['score'] = $allrecords[$aid]['score'] ? $allrecords[$aid]['score'].'%' : "0%";
          $data[$key]['goto'] = l($arrow_completed, "node/$aid", array(), NULL, NULL, FALSE, TRUE);
        } else {
          $status_text = t('Active');
          $data[$key]['goto'] = l($arrow_active, "node/$aid", array(), NULL, NULL, FALSE, TRUE);
        }
        
      }
      $data[$key]['statustext'] = $status_text;
      $data[$key]['status'] = $status;
    } else {
      $data[$key]['status'] = 'needlogin';
      //$data[$key]['goto'] = l(t('Login'), "node/$aid");
    }
    $data[$key]['lo'] = $activity->field_learning_objective[0]['value'];
  }
  
  ksort($data);
//  print_r($data);
  foreach ($data as $key => $item) {
    // status:
    // started - completed - open - forbidden
    $result .= "<div class=\"ag-record ".$item['status']."\">\n";
    
    $result .= "<div class=\"ag-record-icon\"><img src=\"".$item['icon_path']."\"></img></div>\n";

    $result .= "<div class=\"ag-record-info\">\n";
    $result .= "<div class=\"ag-record-title\">".$item['title']."</div>\n";
    $result .= "<div class=\"ag-record-lo\">".$item['lo']."</div>\n";
    if ($item['credits']) {
      $result .= "<div class=\"ag-record-credits\"><div class=\"ag-record-credits-title\">".t('Credit').":</div><div class=\"ag-record-credits-value\">".$item['credits']."</div></div>\n";
    }
    $result .= "</div>\n";
    
    $result .= "<div class=\"ag-record-action\">\n";
    
    $result.= $item['goto']? "<div class='ag-record-goto'>".$item['goto']."</div>" : "";
    $result .= $item['statustext'] ? "<div class='ag-record-status'><b>Status</b>: ".$item['statustext']."</div>" : '';
//    $result .= $item['score'] ? "<div class='ag-record-status'><b>Score</b>: ".$item['score']."</div>" : '';
    $result .= "</div>\n";
    
    
    $result .= "</div>\n<div style='clear: both'></div>\n";
    
    
  }
  
//var_dump($node->field_activities);
  



echo $result;

?>













  <?php if ($links): ?>
    <div class="links">
      <?php print $links; ?>
    </div>
  <?php endif; ?>

</div></div> <!-- /node-inner, /node -->
