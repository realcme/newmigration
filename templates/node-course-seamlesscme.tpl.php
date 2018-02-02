<?php if (module_exists('cmeseamless')) {?>
<div class="node<?php print ($sticky) ? " sticky" : ""; ?>"><div class="node-inner">
  <?php
	
  	define(EXPIRATION_TEXT, "The accreditation for this activity has expired.");
    $img_path = base_path().drupal_get_path('module', 'moodle').'/img/';
    $topic = '';
    $type = '';
    $topic_vid = get_vocabulary_topic_id();
    $type_vid = get_vocabulary_type_id();
    
    foreach ($node->taxonomy as $term) {
      if ($term->vid == $topic_vid) {
        $topic = $term->name;
      } 
      else if ($term->vid == $type_vid) {
        $type = $term->name;
      }
    }
       
    global $user;
    // TODO better logic here
    $view_information_only = ($user->uid != 1); 
    
  ?>  
  
  
  
  <div class="rcmcontent">
  
  <?php
    global $user;
    if ($teaser) {
      //print_r($node);
      print $node->teaser;   
    } else if ($view_information_only) {
    	
    	// add stuff for tablets/iPad
			$imgpath = base_path() . path_to_subtheme();
			drupal_set_html_head('<meta name="apple-mobile-web-app-capable" content="yes" />');
			drupal_set_html_head('<meta name="viewport" content="width=768 initial-scale=1.0 maximum-scale=1.33333 user-scalable=1" />');
			drupal_set_html_head('<meta name="apple-mobile-web-app-capable" content="yes" />');
			drupal_set_html_head('<link rel="apple-touch-icon" href="' . $imgpath . '/img/touch_icon_small.png" />');
			drupal_set_html_head('<link rel="apple-touch-icon" href="' . $imgpath . '/img/touch_icon_medium.png" sizes="72x72" />');
			drupal_set_html_head('<link rel="apple-touch-icon" href="' . $imgpath . '/img/touch_icon_big.png" sizes="114x114" />');

			drupal_add_css(drupal_get_path('module', 'cmeseamless').'/css/seamlesscme.css');
      $is_presenter = FALSE;
      $is_consoleadmin = FALSE;
      $check_presentation = FALSE;
      if ($user->uid && module_exists('cmeseamless')) {
        $is_presenter = cmeseamless_is_presenter($node->nid, $user);
        $is_consoleadmin = cmeseamless_is_consoleadmin($node->nid, $user);
        if (!$is_presenter) {
          $poll = variable_get('cmeseamless_check_proceed_poll_frequency', DEFAULT_CHECK_PROCEED_POLL_FREQUENCY);
          if (!$poll) $poll = DEFAULT_CHECK_PROCEED_POLL_FREQUENCY;

          // Javascript to refresh the console here
          drupal_add_js(array(
	    			'seamlesscmecheckproceedurl' => cmeseamless_presentation_progress_path($node->nid),
	    			'seamlesscmepollseconds' => $poll,
          ), 'setting');
          drupal_add_js(drupal_get_path('module', 'cmeseamless').'/jquery.cmeseamless.frontmatter.js');
          $check_presentation = TRUE;
        }
      }
  ?>
  <?php if ($page == 0): ?>
    <h2><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
  <?php endif; ?>
      <div id="rcmcontent">      

				<?php print theme('seamlesscme_header', $node); ?>

<?php if ($check_presentation) {  ?>  
    		<div id="btn-wait-top">Please Wait for Presenter...</div>
    		<div id="btn-proceed-top" style="display: none;">
    			  <?php require(drupal_get_path('module', 'cmemembership').'/node-course-proceed.inc'); ?>      
        </div> 
<?php } else { ?>    		
        <div id="btn-proceed-top">
    			  <?php require(drupal_get_path('module', 'cmemembership').'/node-course-proceed.inc'); ?>
        </div> 
<?php }?>
        <div class="left" style="width: 100%">

<?php if ($field_faculty_text[0][value]) {  ?>                        
          <h1>Faculty</h1>
          <div class="bg-grad left padding-top:0px" ><?php print strtr($field_faculty_text[0][value], array('@bio_url' => $img_path.'btn-bio.gif')); ?></div>
<?php } ?>

<?php if (!$is_presenter && ($field_learning_objective[0][value])):  ?>            
      
          <h1>Learning Objectives</h1>
          <div class="bg-grad" ><?php print $field_learning_objective[0][value] ?></div>
<?php endif; ?>
          
        </div>
<?php if (!$is_presenter):  ?>            
        <div id="rcmcontent_requirement" class="left small topspace-20"><?php print $field_statement_text[0][value]; ?></div>
<?php endif; ?>
     
      </div><!-- rcm_content -->

<?php if ($is_consoleadmin) { ?>
			  <div class="left" style="padding-top:10px">
<?php   if (variable_get('cmeseamless_allow_reset', 0) && user_access(SEAMLESSCME_MANAGE_PERM)) { ?>			   
			    <div style="float: left; width: 150px"><?php print drupal_get_form('cmeseamless_reset_form', $node->nid); ?></div>
<?php   } ?>			    
			    <div style="float: left; width: 100px; padding-top:2px"><a target="_blank" href="<?php print base_path()."seamlesscme/console/".$node->nid;?>">Console</a></div>
			    <div style="float: left; width: 100px; padding-top:2px"><a href="<?php print base_path()."logout";?>">Logout</a></div>
			  </div>
<?php } ?>
  <?php
    } else {
      print $content;
    }
   ?>
  </div>
</div></div>

<?php } else { ?>

<div class="node<?php print ($sticky) ? " sticky" : ""; ?>"><div class="node-inner">
<?php

define(EXPIRATION_TEXT, "The accreditation for this activity has expired.");
$img_path = base_path().drupal_get_path('module', 'moodle').'/img/';
$topic = '';
$type = '';
$topic_vid = get_vocabulary_topic_id();
$type_vid = get_vocabulary_type_id();

foreach ($node->taxonomy as $term) {
  if ($term->vid == $topic_vid) {
    $topic = $term->name;
  }
  else if ($term->vid == $type_vid) {
    $type = $term->name;
  }
}
 
global $user;
// TODO better logic here
$view_information_only = ($user->uid != 1);

?>
  
  
  
  <div class="rcmcontent">
  
  <?php
    global $user;
    if ($teaser) {
      //print_r($node);
      print $node->teaser;   
    } else if ($view_information_only) {
  ?>
  <?php if ($page == 0): ?>
    <h2><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
  <?php endif; ?>
      <div id="rcmcontent">      
        <div id="header">
          <?php print theme('homelinks', $node->nid); ?>                    
          <?php print theme('nodes_promotions',$node->nid, 'FEATURED ACTIVITIES'); ?>
        </div>
        <div style="clear:both;"><p></p></div>

        <div id="coursedata" style="background-image: url(<?php print base_path().$node->field_icon[0]['filepath'] ?>); background-repeat: no-repeat; background-position: 40px 15px;">
          <table width="99%" align="center">
            <tr>
              <td class="td-title" width="120"><?php print t('Title')?>:</td>
              <td><h2><?php print $title ?></h2></td>
            </tr>
            <tr>
              <td class="td-title"><?php print t('Topic')?>:</td>
              <td><?php print $topic ?></td>
            </tr>
            <?php if ($field_additional_topics[0][view]):  ?>
            <tr>
              <td class="td-title"><?php print t('Relevant Terms')?>:</td>
              <td><?php print $field_additional_topics[0][view] ?></td>
            </tr>
            <?php endif; ?>
            <?php if ($field_audience[0][view]):  ?>            
            <tr>
              <td class="td-title"><?php print t('Primary Audience')?>:</td>
              <td><?php print $field_audience[0][view] ?></td>
            </tr>
            <?php endif; ?>            
            <tr>
              <td class="td-title"><?php print t('Launch Date')?>:</td>
              <td><?php print $field_active_begin_date[0][view] ?></td>
            </tr>
<?php
  $s = theme('all_credits', unserialize($field_all_credits[0][value]), FALSE); 
  $note = $field_credit_note[0][view];
  if (!empty($s) || !empty($note)) {    
?>            
            <tr>
              <td class="td-title"><?php print t('Credits')?>:</td>
              <td><?php print $s ?><em><?php print $note ?></em></td>
            </tr>
<?php 
  }
  $s = $field_credit_expire[0][view];
  if (!empty($s)) {
	  preg_match('/>(.*)</', $s, $matches);
	  $exp_date = $matches[1];
	  $exp_timestamp = strtotime($exp_date);
	  if ($exp_timestamp < time())
	  	$s = '<span style="color:red">' . EXPIRATION_TEXT . '</span>';
?>            
            <tr>
              <td class="td-title"><?php print t('Expiration Date')?>:</td>
              <td><?php print $s ?></td>
            </tr>
<?php }
  $s = $field_patient_list[0][value];
  if (!empty($s)) {
?>            
            <tr>
              <td class="td-title"><?php print t('Patients Seen')?>:</td>
              <td><?php print theme('patient_list', $s) ?></td>
            </tr>
<?php } 
  if ($node->field_activity_group[0]['nid']) {
  	$group = node_load($node->field_activity_group[0]['nid']);
  	if ($group->field_group_type[0]['value'] == ACTIVITY_GROUP_TYPE_CURRICULUM) {
  	
?>            
            <tr>
              <td class="td-title"><?php print t('Curriculum Name')?>:</td>
              <td><?php print theme('activity_group', $node->field_activity_group[0]['nid']) ?></td>
            </tr>
<?php } ?>     
<?php } ?>     
          </table>
        </div>        
        <div id="btn-proceed-top">
<?php
      // logic for navigation below the course info box
			if ($field_nav_hide_top_proceed[0]['value'] != "1") {
	      require(drupal_get_path('module', 'cmemembership').'/node-course-proceed.inc');      
			}
?>      
        </div>    
        <div id="text-proceed" style="display: none; float: right; width: 100%; margin-right:5px;">
        
<?php
  if ($user->uid) { 
?>
          <b>Please review this information, and click "Proceed" below</b>
<?php } else { ?>
          <b>Please review this information, and proceed below</b>
<?php } ?>
        </div>
        <div class="left" style="width: 100%">
<?php if (($field_learning_objective[0][value]) && ($type != 'Survey')):  ?>            
      
          <h1>Learning Objectives</h1>
          <div class="bg-grad" ><?php print $field_learning_objective[0][value] ?></div>
<?php endif; ?>

<?php if ($field_faculty_text[0][value]):  ?>                        
          <h1>Faculty</h1>
          <div class="bg-grad left padding-top:0px" ><?php print strtr($field_faculty_text[0][value], array('@bio_url' => $img_path.'btn-bio.gif')); ?></div>
<?php endif; ?>
          
        </div>
      
        <div id="rcmcontent_requirement" class="left small topspace-20"><?php print $field_statement_text[0][value]; ?></div>
        <div id="btn-proceed-bottom">
<?php
      require(drupal_get_path('module', 'cmemembership').'/node-course-proceed.inc');
?>  
        </div>
     
      </div><!-- rcm_content -->


  <?php
    } else {
      print $content;
    }
   ?>
  </div>
</div></div>



<?php } ?>