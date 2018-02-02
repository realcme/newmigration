<div class="node <?php print $node_classes ?>" id="node-<?php print $node->nid; ?>"><div class="node-inner">

<?php
  global $user;
  if (!$user->uid) { // this user is not logged in
    drupal_set_message("Access Denied: Please Login");
    $dest = drupal_get_destination();
    drupal_goto('user/login', $dest); // this remembers where the user is coming from
  }
?>
  <?php if ($page == 0): ?>
    <h2 class="title">
      <a href="<?php print $node_url; ?>"><?php print $title; ?></a>
    </h2>
  <?php endif; ?>

  <?php if ($unpublished) : ?>
    <div class="unpublished"><?php print t('Unpublished'); ?></div>
  <?php endif; ?>

  <?php if ($picture) print $picture; ?>
  
<?php
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
    $logoname = str_replace(' ', '', strtolower($type)).'logo.gif';
    $img_path = get_cmecompanion_cdn_base_url().drupal_get_path('module', 'moodle').'/img/';
    $course_icon_url = $img_path.$logoname;    
?>
  <div class="rcmcontent">
    <div id="coursedata" style="background-image: url(<?php print base_path().$node->field_icon[0]['filepath'] ?>); background-repeat: no-repeat; background-position: 10px 5px;">
      <table width="99%" align="center">
        <tr>
          <td class="td-title"><?php print t('Title') ?>:</td>
          <td class="td-bold"><?php print $node->title ?></td>
        </tr>
        <tr>
          <td class="td-title"><?php print t('Topic') ?>:</td>
          <td><?php print $topic ?></td>
        </tr>
        <tr>
          <td class="td-title"><?php print t('Relevant Terms') ?>:</td>
          <td><?php print $field_additional_topics[0][view]  ?></td>
        </tr>
        <tr>
          <td class="td-title"><?php print t('Primary Audience') ?>:</td>
          <td><?php print $field_audience[0][view] ?></td>
        </tr>
        <tr>
          <td class="td-title"><?php print t('Faculty Chair') ?>:</td>
          <td><?php print $field_faculty[0][view] ?></td>
        </tr>
        <tr>
          <td class="td-title"><?php print t('Launch Date') ?>:</td>
          <td><?php print $field_active_begin_date[0][view] ?></td>
        </tr>
<?php 
  $s = theme('all_credits', unserialize($field_all_credits[0][value]), FALSE);
  if (!empty($s)) {
?>        
        <tr>
          <td class="td-title"><?php print t('Credits') ?>:</td>
          <td><?php print $s; ?></td>
        </tr>
<?php 
  }
  $s = $field_credit_expire[0][view];
  if (!empty($s)) {
?>        
        <tr>
          <td class="td-title"><?php print t('Credit Expiration Date') ?>:</td>
          <td><?php print $s; ?></td>
        </tr>
<?php } 
  $s = $field_patient_list[0][value];
  if (!empty($s)) {
?>            
            <tr>
              <td class="td-title"><?php print t('Patients Seen') ?>:</td>
              <td><?php print theme('patient_list', $s) ?></td>
            </tr>
<?php } 
  if ($node->field_activity_group[0]['nid']) {
  	$group = node_load($node->field_activity_group[0]['nid']);
  	if ($group->field_group_type[0]['value'] == ACTIVITY_GROUP_TYPE_CURRICULUM) {
?>            
            <tr>
              <td class="td-title"><?php print t('Curriculum Name') ?>:</td>
              <td><?php print theme('activity_group', $node->field_activity_group[0]['nid']) ?></td>
            </tr>
<?php } ?> 
<?php } ?> 
            <tr>
              <td colspan="2" align="right"><?php print l(t('Related Activities'), 'cmeplanner/relactivities/'.$node->nid);?></td>
            </tr>
      </table>
    </div>    
    <div style="clear:both;"></div>    
<?php if ($field_learning_objective[0][value]) { ?>
    <div id="coursedetail">
      <h3>Learning Objectives</h3>
      <div><?php print $field_learning_objective[0][value] ?></div>
    </div>  
    <div style="clear:both;"></div>    
<?php } ?>    
    <div>
      <?php $c = $node->content; print $c['og_membership_form']['#value']; ?>
    </div>  
  </div>
</div></div> <!-- /node-inner, /node -->
