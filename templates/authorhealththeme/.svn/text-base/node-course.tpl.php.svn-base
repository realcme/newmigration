
<div class="node<?php print ($sticky) ? " sticky" : ""; ?>"><div class="node-inner">
  <?php
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
    $course_type_prefix = str_replace(' ', '', strtolower($type));
    $logoname = $course_type_prefix.'logo.png';
    $course_icon_url = base_path().drupal_get_path('module', 'moodle').'/img/'.$logoname;
    
    Global $user;
    // TODO better logic here
    $view_information_only = ($user->uid != 1); 
    
  ?>  
  
  <?php if ($page == 0): ?>
    <h2><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
  <?php endif; ?>
  
  
  <div class="rcmcontent">
  
  <?php
    Global $user;
    if ($view_information_only) {
       $credit = $field_cme_credit[0][view];
       $home_url = base_path();
  ?>
      <div id="rcmcontent">      
        <div id="header">
          <p><a href="<?php print $home_url?>"><?php print t('CME Activity Home')?></a></p>
          <p class="left"><img  style="margin-left:0px" src="<?php print $course_icon_url ?>" id="logo" alt="<?php print $type?>" /></p>
        </div>
        <div style="clear:both;"><p></p></div>

        <div id="coursedata">
          <table width="99%" align="center">
            <tr>
              <td class="td-title" width="120"><?php print t('Title')?>:</td>
              <td><h2><?php print $title ?></h2></td>
            </tr>
            <tr>
              <td class="td-title"><?php print t('Topic')?>:</td>
              <td><?php print $topic ?></td>
            </tr>
            <tr>
              <td class="td-title"><?php print t('Relevant Terms')?>:</td>
              <td><?php print $field_additional_topics[0][view] ?></td>
            </tr>
            <tr>
              <td class="td-title"><?php print t('Primary Audience')?>:</td>
              <td><?php print $field_audience[0][view] ?></td>
            </tr>
            <tr>
              <td class="td-title"><?php print t('Launch Date')?>:</td>
              <td><?php print $field_active_begin_date[0][view] ?></td>
            </tr>
            <tr>
              <td class="td-title"><?php print t('Credits')?>:</td>
              <td><?php print $credit ?> <em><?php print theme('all_credits', unserialize($field_all_credits[0][value]), FALSE); ?></td>
            </tr>
            <tr>
              <td class="td-title"><?php print t('Expiration Date')?>:</td>
              <td><?php print $field_credit_expire[0][view] ?></td>
            </tr>
          </table>
        </div>  
        <div style="clear: both;"></div>      
<?php
      // logic for navigation below the course info box
      require_once(drupal_get_path('module', 'cmemembership').'/node-course-proceed.inc');
?>          
        <div class="left">
          <h1>Learning Objectives</h1>
          <div class="bg-grad"><?php print $field_learning_objective[0][view] ?></div>
            
          <h1>Faculty</h1>
          <div class="bg-grad left padding-top:0px"><?php print t($field_faculty_text[0][value], array('@bio_url' => $img_path.'btn-bio.gif')); ?></div>
        </div>
      
        <div id="rcmcontent_requirement" class="left small topspace-20"><?php print t($field_statement_text[0][value], array('@bio_url' => $img_path.'btn-bio.gif')); ?></div>
        
<?php
      // Print link to course
      if ($user->uid) {
        if (!empty($proceed_url)) {
?>
        <div id="btn-proceed" class="left">
        </div>
<?php   } ?>
<?php } else { ?>
        <div id="btn-proceed" class="left">
        </div>
<?php } ?>      
      </div><!-- rcm_content -->


  <?php
    } else {
      print $content;
    }
   ?>
  </div>
</div></div>
