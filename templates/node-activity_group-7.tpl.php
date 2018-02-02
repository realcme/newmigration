<?php

  $theme_path = path_to_theme();
  error_log($theme_path);
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
global $brand;
global $user;
$allrecords = $user ? activity_group_records($node->nid) : NULL; 
//print_r($allrecords);
$df = "%b %d, %Y";

$data = array();
$node_array = $node->field_activities;
//print_r($node_array);

$checkdistro = cmebase_need_check_distribution($brand, $user);

foreach ($node_array as $item) {
  $aid = $item['nid'];
  if (!$aid) {
    continue;
  }
  $activity = CMEMemcache::get_node($aid);
  if (!$activity) {
    continue;
  }
  // Exclude activities that are not on the current brand
  if ($checkdistro && !brand_allows($brand, $activity)) continue;
  
  $type = CMEMemcache::get_activity_type($aid);
  $alabel = 'course';
  $title = $activity->title;
  if (cmecurriculum_hide_from_list($activity)) {
    if ($user->uid && $user->uid == 1) {
      // cmsadmin
      $key = "Z-$aid";
    } else {
      continue;
    }
  } else if (is_picme_course_type($type, 'b')) {
    if ($user->uid && $user->uid == 1) {
      // cmsadmin
      $key = "B-$aid";
      $alabel = 'Stage B';
      $title = 'Stage B';
    } else {
      continue;
    }
  } else {
    if (is_picme_course_type($type, 'a')) {
      $key = "A-$aid";
      $alabel = 'Stage A';
      $title = 'Stage A';
    } else if (is_picme_course_type($type, 'c')) {
      $key = "C-$aid";
      $alabel = 'Stage C';
      $title = 'Stage C';
    } else {
      $key = "B-$aid";
    }
  }
  $data[$key] = array(
      'title' => $title,
      'icon_path' => base_path().$activity->field_icon[0]['filepath'],
      'is_picme' => is_picme_course_type($type),
      'alabel' => $alabel,
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
      if ($conditions['can_proceed'] || $conditions['show_enrollment']) {
        $status = 'open';
        $data[$key]['goto'] = l(t('Start !label', array('!label' => $alabel)), "node/$aid");
      } else {
        if ($user->uid == 1) {
          // cmsadmin
          $status = 'open';
          $data[$key]['goto'] = l(t('Start !label', array('!label' => $alabel)), "node/$aid");
        } else {
          $status = 'forbidden';
        }
      }
    } else {
      // Started or Completed
      $status_text = $perf = $cert = $pdf = '';

      if ($status == 'completed') {
        //$issue_date = strftime("%m/%d/%Y", strtotime($certificate['dateearned']));
        $status_text = t('Completed on %date', array('%date' => strftime($df, strtotime($allrecords[$aid]['completion_date']))));
        if (!$data[$key]['is_picme']) {
          $perf = t("Your Score").": ".$allrecords[$aid]['score'].'%';//theme('health_bar_score', $allrecords[$aid]['score'], $allrecords[$aid]['community_score']);
        }
        if ($allrecords[$aid]['certificate']) {
          $url = get_cmecertificate_base_url().CMECREDIT_PRINT_CERTIFICATE.'/'.$user->uid.'/'.$aid;
          $onclick = "onClick=\"window.open('".$url."','certificate','width=650px,height=700px,scrollbars=yes,resizable=yes,toolbar=no,location=no,menubar=yes')\"";
          $cert =  '<a href="#" '.$onclick.'>'.t('Print certificate').'</a>';
          $pdf = theme('show_print', $user->uid, $aid, NULL, 'pdf');
        }
        $data[$key]['goto'] = l(t('Review !label', array('!label' => $alabel)), "node/$aid");
      } else {
        $perf = '';//<div class="barchart"><div class="lscore barscore-text">'.t('Your score').': </div><div class="lscore barscore-value">'.t('Incomplete').'</div></div>';
        $status_text = t('Started on %date',
            array('%date' => strftime($df, strtotime($allrecords[$aid]['start_date'])))
        );
        $data[$key]['goto'] = l(t('Complete !label', array('!label' => $alabel)), "node/$aid");
      }

      $data[$key]['statustext'] = $status_text;
      $data[$key]['perf'] = $perf;
      $data[$key]['cert'] = $cert;
      $data[$key]['pdf'] = $pdf;
    }
    $data[$key]['status'] = $status;
  } else {
    $data[$key]['status'] = 'needlogin';
    $data[$key]['goto'] = '';
  }
  $data[$key]['lo'] = $activity->field_learning_objective[0]['value'];
}

ksort($data);
//print_r($data);
foreach ($data as $key => $item) {
  // status:
  // started - completed - open - forbidden
  $result .= "<div class=\"curriculum-record ".$item['status']."\">\n";
  $result .= "<div class=\"curriculum-record-icon\"><img src=\"".$item['icon_path']."\"></img></div>\n";
  $result .= "<div class=\"curriculum-record-title\">".$item['title']."</div>\n";

  $result .= "<div class=\"curriculum-record-lo\">".$item['lo']."</div>\n";
  $result .= $item['statustext'] ? "<div class='curriculum-record-status'>".$item['statustext']."</div>" : '';

  $result.= $item['perf'] ? "<div class='curriculum-record-perf'>".$item['perf']."</div>" : '';
  //$result.= $item['cert'] ? "<div class='curriculum-record-cert curriculum-record-btn'>".$item['cert']."</div>" : '';
  $result.= $item['pdf'] ? "<div class='curriculum-record-pdf'>".$item['pdf']."</div>" : '';
  
  $result.= $item['goto']? "<div class='curriculum-record-goto curriculum-record-btn'>".$item['goto']."</div>" : '';
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