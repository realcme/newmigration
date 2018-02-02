<?php

  $theme_path = path_to_theme();
  drupal_add_css($theme_path  . '/css/curriculum.css', 'theme', 'all', FALSE);
  
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
<?php  
?>

<?php 

  global $brand;
  global $cookie_domain;
  global $user;
  $result = '';

//var_dump($node->field_activities);
  
  
  $node_array = $node->field_activities;
  
  //#8261, comment:30 hardcode activity sort
  //$node_array = array($node_array[0], $node_array[1], $node_array[2]);
  
  if (count($node_array) > 0) {


    if ($user->uid) {
      // Display notes from curriculum
      // First find any activity in this curriculum
      foreach ($node_array as $node) {
        if ($node['nid'] != 0) {
          $aid = $node['nid'];
        }
      }
      if ($aid) {
        $reflections = cmechartnotes_get_reflections($user->uid, $aid, TRUE);
        $result = '<div id="curricdata">'.theme('reflections', $reflections, TRUE).'</div>';
      }
    }

    
		$checkdistro = cmebase_need_check_distribution($brand, $user);

	  $result .= "<div id=\"related-activities\">"."\n";
    $result .= "\t"."<div id=\"related-activities-title\" class=\"related-activities-title\">$header</div>"."\n";
    $i = 0;
    foreach ($node_array as $node) {
	    if ($node['nid'] == 0) break;

	    $activity = CMEMemcache::get_node($node['nid']);
	    if (!$activity) continue;
	    
	    //Exclude activities that are not on the current brand
	    if ($checkdistro && !brand_allows($brand, $activity)) continue;

	    $class = ($i%2) ? "related-activities-right" : "related-activities-left";
	     

      // COURSE TEASER
      $img_path = base_path().drupal_get_path('module', 'cmecoursepromotion')."/img";
      
      if ($user->uid) {
        $link_schedule = "node/$activity->nid";
      }
      $link_proceed  = base_path()."node/$activity->nid";
      
			if (cmecurriculum_hide_from_list($activity)) {
			  if (!$user || $user->uid != 1) {
				  continue;
			  }
			}
			
      $result .= "\n";
      $result .= "<div class=\"$class\">"."\n";

      $description = $activity->field_patient_statement[0]['value'];
      if (empty($description)) {
        $description = $activity->field_course_desc[0]['value'];
      }
      if (empty($description)) {
        $description = $activity->og_description;
      }
      
//var_dump($activity);
  $trimmed_desc = trim_pretty_string($description, 120, '...');
  $len = strlen($trimmed_desc);
  if ((substr($trimmed_desc, 0, 1) == '"') && (substr($trimmed_desc, $len-1, 1) != '"')) { 
    // Close quote
    $trimmed_desc .= '"';
  }
  
    $credits = theme('all_credits', unserialize($activity->field_all_credits[0][value]), FALSE); 

  
  
  $trimmed_title = trim_pretty_string($activity->title, 70, '...');
  $icon_path = base_path().$activity->field_icon[0]['filepath'];
  $result .= "\t"."<div class=\"related-patient-bg\" style=\"background-image: url($img_path/related-patient-bg.gif); \"><img src=\"$icon_path\" alt=\"$patient_name\" style=\"width: 43px; height: 43px; border: 0; margin: 0\"></div>"."\n";
  $result .= "\t"."<div class=\"activity-subject\">"."\n";
  $result .= "\t\t"."<div class=\"activity-title\"><span class=\"promo-link\"><a id=\"lt-$nid\" href=\"$link_proceed\">$trimmed_title</a></span></div>"."\n";
  $result .= "\t\t"."<div class=\"faculty-leader\">{$activity->field_faculty[0][value]}</div>"."\n";
  $result .= "\t\t"."<div class=\"credit\">$credits</div>"."\n";  
  $result .= "\t"."</div>"."\n";
  $result .= "\t"."<div class=\"activity-info\">$trimmed_desc</div>"."\n";
  $result .= "\t"."<div style=\"clear: both;\"></div>"."\n";
  $result .= "\t"."<div class=\"next-steps-related\">"."\n";
  if ($link_schedule) {
    $l = cmecompanion_popup_link('Schedule Activity', $link_schedule);
    $result .= "\t\t"."<div class=\"next-steps-icon\"><img src=\"$img_path/schedule-activity.gif\" alt=\"Schedule Activity\" style=\"width: 29px; height: 29px; border: 0; margin: 0\"></div>"."\n";
    $result .= "\t\t"."<div class=\"schedule-activity\"><span class=\"promo-link\" id=\"ls-$nid\">$l</span></div>"."\n";
    $result .= "\t\t"."<div class=\"next-steps-divider\" style=\"background-image: url($img_path/activity-divider.gif); \"></div>"."\n";
  } else {
    $result .= "\t\t"."<div class=\"next-steps-icon\"></div>"."\n";
    $result .= "\t\t"."<div class=\"schedule-activity\"></div>"."\n";
    $result .= "\t\t"."<div class=\"next-steps-divider\"></div>"."\n";
  }
  $result .= "\t\t"."<div class=\"next-steps-icon\"><img src=\"$img_path/proceed-activity.gif\" alt=\"Proceed To Activity\" style=\"width: 29px; height: 29px; border: 0; margin: 0\"></div>"."\n";
  $result .= "\t\t"."<div class=\"proceed-activity\"><span class=\"promo-link\"><a id=\"lp-$nid\" href=\"$link_proceed\">Proceed To Activity</a></span></div>"."\n";
  $result .= "\t"."</div>"."\n";


      $result .= "</div>"."\n";
      if ($i%2) {
        $result .=  "<div style=\"clear: both;\"></div>"."\n";
      }
      $i++;
    }
    $result .=  "</div>"."\n";
    $result .=  "<div style=\"clear: both;\"></div>"."\n";
  }


echo $result;

?>













  <?php if ($links): ?>
    <div class="links">
      <?php print $links; ?>
    </div>
  <?php endif; ?>

</div></div> <!-- /node-inner, /node -->
