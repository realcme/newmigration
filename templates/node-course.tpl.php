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
        $topic = t($term->name);
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
              <td class="td-title" width="180"><?php print t('Title')?>:</td>
              <td style="padding-right: 45px"><h2><?php print $node->title ?></h2></td>
            </tr>
            <?php if ($topic) {?>            
            <tr>
              <td class="td-title"><?php print t('Topic')?>:</td>
              <td><?php print $topic ?></td>
            </tr>
            <?php }?>            
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
            <?php if ($field_active_begin_date[0][view]) { ?>         
            <tr>
              <td class="td-title"><?php print t('Launch Date')?>:</td>
              <td><?php print $field_active_begin_date[0][view] ?></td>
            </tr>
            <?php }?>            
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
          
<?php  
if ($user->uid) { 
  $reflections = cmechartnotes_get_reflections($user->uid, $nid, TRUE);
  print theme('reflections', $reflections, TRUE);
}
?>
          
        </div>        

        
<?php print theme('admin_course', $nid);?>        
        
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
      
          <h1><?php print t('Learning Objectives')?></h1>
          <div class="bg-grad" ><?php print $field_learning_objective[0][value] ?></div>
<?php endif; ?>

<?php if ($field_faculty_text[0][value]):  ?>                        
          <h1><?php print t('Faculty')?></h1>
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
<!-- BOF #8380 and #8473, CMECompanion float glitch -->
<script type="text/javascript">
$(function(){
    if($('body').hasClass('node-type-course') && !$('body').hasClass('no-sidebars')){
        if($('#main-inner').find('#sidebar-right').length > 0){
            $('#page-inner').addClass('clear-block');
        }

        else {
            $('#main-inner').removeClass('clear-block');
            $('#page-inner, #page-main').addClass('clear-block');

            if($('#sidebar-right').offset().top !== 187){
                $('#sidebar-right').css('margin-top', 25);
            }
        }
    }
});
</script><!-- EOF #8380 and #8473 -->