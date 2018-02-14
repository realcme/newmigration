<?php 
  $theme_path = path_to_theme();
  drupal_add_css( $theme_path . '/alerts.css', 'theme', 'all', FALSE);
  //drupal_add_js(drupal_get_path('module', 'cmeadmin').'/alerts.cmeadmin.js');
?>

<div class="node <?php print $node_classes ?>" id="node-<?php print $node->nid; ?>"><div class="node-inner">

  <?php if ($page == 0): ?>
    <h2 class="title">
      <a href="<?php print $node_url; ?>"><?php print $title; ?></a>
    </h2>
  <?php endif; ?>

  <?php if ($unpublished) : ?>
    <div class="unpublished"><?php print t('Unpublished'); ?></div>
  <?php endif; ?>

  <?php if ($picture) print $picture; ?>

  <?php if (count($taxonomy)): ?>
    <div class="taxonomy"><?php print t(' in ') . $terms; ?></div>
  <?php endif; ?>

  <div class="content"> 
    <?php 
      //print $content; 

      // echo(variable_to_html($node));
      
      // name, title, type, enabled
      $name = $node->title;
      $description = $node->field_alert_description[0]['value'];
      $typeval = $node->field_alert_type[0]['value'];
      $type = $node->field_alert_type[0]['view'];
      $alert_type = $node->field_alert_type[0]['value'];
      $enabled = $node->field_alert_enabled[0]['value'];
      $b = $node->field_alert_brand[0]['view'];
      // condition
      $condition = $node->field_activity_qualifier[0]['value'] ? $node->field_activity_qualifier[0]['view'] : '';
      // when
      $count = $node->field_timespan[0]['value'];
      $units = $node->field_timespan_units[0]['view'];
      $offset = $node->field_timespan_offset[0]['view'];
      $types = all_alert_types();
      $suffix = $types[$typeval]['suffix'];
      
      if ($count == 1)
        $units = preg_replace("/s$/", "", $units);
        
      if ($alert_type == ALERT_TYPE_SURVEY) {
        $type .= '<br />Survey is: ' . $node->field_survey_id[0]['view'] . '.'  ;
      } else if ($alert_type == ALERT_TYPE_LAUNCH) { 
        $type .= '. Sent when ' . strtolower($node->field_activity_qualifier[0]['view']) . '.'  ;
      }
      
      $resend = $node->field_alert_resend[0]['view'];
      if ($resend) {  
        $every = $node->field_resend_timespan[0]['view'];
        $runits = $node->field_resend_timespan_units[0]['view'];
        if ($every == 1) $runits = preg_replace("/s$/", "", $runits);
      }
      
      // activity ident
      $activity_type = $node->field_activity_type[0]['value'];
      $activity_id = $node->field_activity_id[0]['value'];

      switch ($activity_type) {
      	case ALERT_SCOPE_ALL:
      		$activity = 'Any activity';
      		break;
      	case ALERT_SCOPE_ONE:
      		$n = node_load($activity_id);
      		$title = $n ? $n->title : $activity_id;
    		  $activity = 'Activity: ' . $title;
          break;
        case ALERT_SCOPE_TYPE:
        	$activity = 'Any ' . $activity_id . ' activity';
          break;
        case ALERT_SCOPE_GROUP:
          $n = node_load($activity_id);
        	$activity = 'Activities in the "' . $n->title . '" group';
          break;
      }

      // subject, header, message, footer
      $subject = $node->field_subject[0]['value'];
      $text_header = $node->field_plain_header[0]['value'];
      $html_header = $node->field_html_header[0]['value'];
      $text_message = $node->field_plain_message[0]['value'];
      $html_message = $node->field_html_message[0]['value'];
      $text_footer = $node->field_plain_footer[0]['value'];
      $html_footer = $node->field_html_footer[0]['value'];
      
      if ($types[$typeval]['digested']) $typeval = 0;
      $fieldset = 'cmealerts_' . $typeval;

      if ($subject == DEFAULT_ALERT_SETTING) {
      	$subject_default = ' *';
      	$subject = variable_get('cmealerts_' . $typeval . '_subject', '');
      }
      if ($text_header == DEFAULT_ALERT_SETTING) {
        $text_header_default = ' *';
        $text_header = variable_get('cmealerts_' . $typeval . '_text_header', '');
      }
      if ($html_header == DEFAULT_ALERT_SETTING) {
        $html_header_default = ' *';
        $html_header = variable_get('cmealerts_' . $typeval . '_html_header', '');
      }
      if ($text_footer == DEFAULT_ALERT_SETTING) {
        $text_footer_default = ' *';
        $text_footer = variable_get('cmealerts_' . $typeval . '_text_footer', '');
      }
      if ($html_footer == DEFAULT_ALERT_SETTING) {
        $html_footer_default = ' *';
        $html_footer = variable_get('cmealerts_' . $typeval . '_html_footer', '');
      }

      $class = 'even';
    ?>
    <table class='alert-table'>
      <tr class='<?php $class = ($class == 'even' ? 'odd' : 'even'); print $class ?>'>
        <td nowrap='nowrap' width='120'><strong>Alert Name:</strong></td>
        <td><strong><?php print $name ?></strong></td>
      </tr>
      <tr class='<?php $class = ($class == 'even' ? 'odd' : 'even'); print $class ?>'>
        <td><strong>Type:</strong></td>
        <td><?php print $type ?></td>
      </tr>
      <tr class='<?php $class = ($class == 'even' ? 'odd' : 'even'); print $class ?>'>
        <td><strong>Description:</strong></td>
        <td><?php print $description ?></td>
      </tr>  
      <tr class='<?php $class = ($class == 'even' ? 'odd' : 'even'); print $class ?>'>
        <td><strong>Enabled:</strong></td>
        <td><?php print $enabled ? t('yes') : t('no') ?></td>
      </tr>
      <tr class='<?php $class = ($class == 'even' ? 'odd' : 'even'); print $class ?>'>
        <td><strong>Sent:</strong></td>
        <td><?php print "$count $units $offset $suffix" ?></td>
      </tr>
      <?php if ($condition) { ?>
      <tr class='<?php $class = ($class == 'even' ? 'odd' : 'even'); print $class ?>'>
        <td><strong>Condition:</strong></td>
        <td> <?php print $condition?></td>
      </tr>      
      <?php } ?>
      <?php  if ($resend): ?>
      <tr class='<?php $class = ($class == 'even' ? 'odd' : 'even'); print $class ?>'>
        <td><strong>Resend:</strong></td>
        <td><?php print "$resend more time(s) every $every $runits after that" ?></td>
      </tr>
      <?php endif; ?>
      <?php  if ($b): ?>
      <tr class='<?php $class = ($class == 'even' ? 'odd' : 'even'); print $class ?>'>
        <td><strong>Brand:</strong></td>
        <td><?php print $b ?></td>
      </tr>
      <?php endif; ?>
      <tr class='<?php $class = ($class == 'even' ? 'odd' : 'even'); print $class ?>'>
        <td><strong>Applies to:</strong></td>
        <td><?php print $activity ?></td>
      </tr>

      <tr class='<?php $class = ($class == 'even' ? 'odd' : 'even'); print $class ?> sep'>
        <td><strong>Subject:<?php print $subject_default ?></strong></td>
        <td><textarea class='text-content' rows='1' readonly='readonly'><?php print $subject ?></textarea></td>
      </tr>

      <tr class='<?php $class = ($class == 'even' ? 'odd' : 'even'); print $class ?> sep'>
        <td><strong>Plain-text header:<?php print $text_header_default ?></strong></td>
        <td><textarea class='text-content' rows='8' readonly='readonly'><?php print $text_header ?></textarea></td>
      </tr>
      <tr class='<?php $class = ($class == 'even' ? 'odd' : 'even'); print $class ?>'>
        <td><strong>HTML header:<?php print $html_header_default ?></strong></td>
        <td><?php print $html_header ?></td>
      </tr>

      <tr class='<?php $class = ($class == 'even' ? 'odd' : 'even'); print $class ?> sep'>
        <td><strong>Plain-text message:</strong></td>
        <td><textarea class='text-content' rows='12' readonly='readonly'><?php print $text_message ?></textarea></td>
      </tr>
      <tr class='<?php $class = ($class == 'even' ? 'odd' : 'even'); print $class ?>'>
        <td><strong>HTML message:</strong></td>
        <td><?php print $html_message ?></td>
      </tr>

      <tr class='<?php $class = ($class == 'even' ? 'odd' : 'even'); print $class ?> sep'>
        <td><strong>Plain-text footer:<?php print $text_footer_default ?></strong></td>
        <td><textarea  class='text-content' rows='8' readonly='readonly'><?php print $text_footer ?></textarea></td>
      </tr>
      <tr class='<?php $class = ($class == 'even' ? 'odd' : 'even'); print $class ?>'>
        <td><strong>HTML footer:<?php print $html_footer_default ?></strong></td>
        <td><?php print $html_footer ?></td>
      </tr>

    </table>
    <div>* = default setting<br />&nbsp; </div>
    <input type='button' onclick='location.href="/cmeadmin/alerts"' value='Done' /><br /><br />
    
    <?php 
      //print variable_to_html($node); 
    ?>
  </div>

  <?php if ($submitted): ?>
    <div class="submitted">
      <?php print $submitted; ?>
    </div>
  <?php endif; ?>

  <?php if ($links): ?>
    <div class="links">
      <?php print $links; ?>
    </div>
  <?php endif; ?>

</div></div> <!-- /node-inner, /node -->
