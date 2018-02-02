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
    
    $proceed_conditions = array();
    if ($user->uid) {
      $proceed_conditions = get_proceed_conditions($node);
    }
    
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
<?php } ?>
          </table>
        </div>        
        <?php print theme('admin_course', $nid);?>
<?php 
  if ($user->uid) {
    if ($proceed_conditions['can_proceed']) {
      global $brand;
      $proceed_url = base_path().'cmeplanner/proceed/'.$node->nid.'/'.$brand;
?>
				<div style="padding-bottom:20px;padding-top:10px;float:right;">
					<div style="float:left;"><a href="<?php print $proceed_url?>"><img src="<?php print $img_path ?>btn-proceed-picme.gif" alt="Proceed" /></a></div>
					<div style="float:left;padding-top:7px"><a href="<?php print $proceed_url?>">Proceed to Stage C</a></div>
			  </div>			
<?php       
    } else if ($proceed_conditions['show_enrollment']) {
?>      
     <div id="reassess-form"><?php print drupal_get_form('cmepicme_reassessmentform', $nid);?></div>
<?php         
    }
  } 
?>
        
        <div class="left">
<?php if ($field_learning_objective[0][value]) :  ?>            
          <h1>Learning Objectives</h1>
          <div class="bg-grad"><?php print $field_learning_objective[0][value] ?></div>
<?php endif; ?>

<?php if ($field_faculty_text[0][value]):  ?>                        
          <h1>Faculty</h1>
          <div class="bg-grad left padding-top:0px"><?php print strtr($field_faculty_text[0][value], array('@bio_url' => $img_path.'btn-bio.gif')); ?></div>
<?php endif; ?>
       <div style="clear: both;"></div>           
<?php if ($field_introduction[0][value]) { ?>        
       <div class="picme-intro">
        <div class="picme-intro-title">Introduction</div>
        <div class="picme-intro-text"><?php print $field_introduction[0][value] ?></div>
      </div>        
<?php
  }
?>
        </div>
      
        <div id="rcmcontent_requirement" class="left small topspace-20"><?php print $field_statement_text[0][value]; ?></div>
      </div><!-- rcm_content -->


  <?php
    } else {
      print $content;
    }
   ?>
  </div>
</div></div>
