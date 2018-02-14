<?php
$icon_base_path = base_path().drupal_get_path('module', 'cmecredit').'/img/';
$trackerViewURL = cmecompanion_dialog_url('cmetracker/addcmecredit');
$trackerSetGoalURL = cmecompanion_dialog_url('cmetracker/setcmecreditgoal');

$track_data = cmecredit_block_get_goal_data();
//print_r($track_data);
$s1 = $track_data['percent_completed'];
$s2 = 100 - $s1;

?>
<div id="block-<?php print $block->module .'-'. $block->delta; ?>" class="block <?php print $block_classes; ?>">
  <div class="block-inner">
	           <h3 id="tracker"><img src="<?php print $icon_base_path; ?>nav-tracker.gif" alt="" width="161" height="40" /></h3>
	           <div class="divbg" style="display:none;padding-top:10px;margin-top:-6px;">
<?php if ($track_data['target_hours'] > 0) { ?>              
	             <p><strong><?php print t('Credits Completed'); ?></strong> <?php print $track_data['current_credit']; ?> / <?php print $track_data['target_hours']; ?></p>
	             <div id="barchart">
	               <div class="score" style="width: <?php print $s1; ?>px"></div>
	               <div class="score-blank" style="width: <?php print $s2; ?>px"></div>
	             </div>
<?php } else { ?>
	             <div class="spacer"></div>
	             <div class="tracker-item nav-full">&raquo; <a href="<?php print $trackerSetGoalURL;?>" class="thickbox"><?php print t('Set CME goals')?></a></div>
<?php } ?>
               <div class="spacer"></div>
              
<?php if (strpos($block->content, 'no_open_programs') === false) { ?>
                <p style="clear:both;"><strong><?php print t('Open Programs'); ?></strong></p>
                <?php print $block->content; ?>
<?php } ?>
                <div class="tracker-item nav-full">&raquo; <a href="<?php print $trackerViewURL; ?>" class="thickbox"><?php print t('Full Report'); ?></a></div>
                <div class="nav-bottom-img"></div>
              </div>
  </div>
</div> 
<!-- /block-inner, /block -->
