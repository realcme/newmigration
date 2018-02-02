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
    $course_type_prefix = str_replace(' ', '', strtolower($type));
    $logoname = $course_type_prefix.'logo.gif';
    $course_icon_url = base_path().drupal_get_path('module', 'moodle').'/img/'.$logoname;
       
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
          <p class="left"><img  style="margin-left:0px" src="<?php print $course_icon_url ?>" id="logo" alt="<?php print $type?>" /></p>
        </div>
        <div style="clear:both;"><p></p></div>

        <div id="coursedata">
          <table width="99%" align="center">
            <tr>
              <td class="td-title-icon"><img src='<?php print base_path().$node->field_icon[0]['filepath'] ?>'></img></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td class="td-title"><?php print t('Title')?>:</td>
              <td class="td-title-text"><?php print $title ?></td>
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
            <!-- 
            <tr>
              <td class="td-title"><?php print t('Launch Date')?>:</td>
              <td><?php print $field_active_begin_date[0][view] ?></td>
            </tr>
             -->
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
            <!--  
            <tr>
              <td class="td-title"><?php print t('Expiration Date')?>:</td>
              <td><?php print $s ?></td>
            </tr>
             -->
<?php }?>     
 
            <?php if ($field_statement_text[0][value]) { ?>         
            <tr>
              <td class="td-title"><?php print t('Overview')?>:</td>
              <td><?php print $field_statement_text[0][value] ?></td>
            </tr>
            <?php }?>
          </table>
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
