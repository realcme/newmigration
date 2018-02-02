<?php

  $theme_path = path_to_subtheme();
  drupal_add_css($theme_path  . '/css/groupstatus.css', 'theme', 'all', TRUE);
  
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
  <?php if ($field_icon[0]['filepath']) :  ?>
    <img class="curric-logo" src="<?php print base_path() . $field_icon[0]['filepath'] ?>" alt="" border="0" />
  <?php  endif; ?>
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
    $data[$aid] = array(
        'title' => $activity->title,
        'icon_path' => base_path().$activity->field_icon[0]['filepath'],
        
    );
    $status = '';
    if ($user->uid) {
      // User is logged in
      if ($allrecords && $allrecords[$aid]) {
        $status = $allrecords[$aid]['status'];
        if ($status == 'scheduled') $status = '';
      }
      if (!$status) {
        $conditions = get_proceed_conditions($activity);
        if ($conditions['can_proceed']) {
          $status = 'open';
           $data[$aid]['goto'] = l(t('Start course'), "node/$aid");
        } else {
          $status = 'forbidden';
        }
      } else {
        // Started or Completed
        $status_text = $perf = $cert = $pdf = '';
        
        if ($status == 'completed') {
          //$issue_date = strftime("%m/%d/%Y", strtotime($certificate['dateearned']));
          $status_text = t('Completed on %date', array('%date' => strftime($df, strtotime($allrecords[$aid]['completion_date']))));
          $perf = theme('health_bar_score', $allrecords[$aid]['score'], $allrecords[$aid]['community_score']);
          if ($allrecords[$aid]['certificate']) {
            $url = get_cmecertificate_base_url().CMECREDIT_PRINT_CERTIFICATE.'/'.$user->uid.'/'.$aid;
            $onclick = "onClick=\"window.open('".$url."','certificate','width=650px,height=700px,scrollbars=yes,resizable=yes,toolbar=no,location=no,menubar=yes')\"";
            $cert =  '<a href="#" '.$onclick.'>'.t('Print certificate').'</a>';
            $url .= '/pdf';
            $pdf =  '<a href="'.$url.'" target="_blank">'.t('Download certificate').'</a>';            
          }
          $data[$aid]['goto'] = l(t('Review course'), "node/$aid");
        } else {
          $perf = '<div class="barchart"><div class="lscore barscore-text">'.t('Your score').': </div><div class="lscore barscore-value">'.t('Incomplete').'</div></div>';
          $status_text = t('Started on %date',
              array('%date' => strftime($df, strtotime($allrecords[$aid]['start_date'])))
          );
          $data[$aid]['goto'] = l(t('Complete course'), "node/$aid");
        }
        
        $data[$aid]['statustext'] = $status_text;
        $data[$aid]['perf'] = $perf;
        $data[$aid]['cert'] = $cert;
        $data[$aid]['pdf'] = $pdf;
      }
      $data[$aid]['status'] = $status;
    } else {
      $data[$aid]['status'] = 'needlogin';
      $data[$aid]['goto'] = l(t('Login'), "node/$aid");
    }
    $data[$aid]['lo'] = $activity->field_learning_objective[0]['value'];
  }
  
  ksort($data);
//  print_r($data);
  foreach ($data as $key => $item) {
    // status:
    // started - completed - open - forbidden
    $result .= "<div class=\"healthcourse-record ".$item['status']."\">\n";
    $result .= "<div class=\"healthcourse-record-icon\"><img src=\"".$item['icon_path']."\"></img></div>\n";
    $result .= "<div class=\"healthcourse-record-title\">".$item['title']."</div>\n";
    
    $result .= "<div class=\"healthcourse-record-lo\">".$item['lo']."</div>\n";
    $result .= $item['statustext'] ? "<div class='healthcourse-record-status'>".$item['statustext']."</div>" : '';
    
    $result.= $item['perf'] ? "<div class='healthcourse-record-perf'>".$item['perf']."</div>" : '';
    $result .= "<div class=\"healthcourse-record-action\">\n";
    $result.= $item['pdf'] ? "<div class='healthcourse-record-pdf healthcourse-record-btn'>".$item['pdf']."</div>" : '';
    $result.= $item['cert'] ? "<div class='healthcourse-record-cert healthcourse-record-btn'>".$item['cert']."</div>" : '';
    $result.= $item['goto']? "<div class='healthcourse-record-goto healthcourse-record-btn'>".$item['goto']."</div>" : '';
    $result .= "</div></div>\n<div style='clear: both'></div>\n";
    
    
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
