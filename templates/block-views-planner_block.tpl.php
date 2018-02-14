<?php
$icon_base_path = base_path().drupal_get_path('module', 'cmemembership').'/img/';
$plannerViewURL = cmecompanion_dialog_url('cmeplanner/upcoming');
$plannerSearchURL = cmecompanion_dialog_url('cmeplanner/search');
?>
<div id="block-<?php print $block->module .'-'. $block->delta; ?>" class="block <?php print $block_classes; ?>">
  <div class="block-inner">
              <h3 id="planner"><img src="<?php print $icon_base_path; ?>nav-planner.gif" alt="" width="161" height="40" /></h3>
              <div class="divbg" style="display:none;padding-top:10px;margin-top:-6px;">
<?php if (strpos($block->content, 'no_planned_programs') === false) { ?>
                <p style="clear:both;"><strong><?php print t('Planned Programs'); ?></strong></p>
                <?php print $block->content; ?>
                <div class="planner-item nav-full">&raquo; <a href="<?php print $plannerViewURL; ?>" class="thickbox"><?php print t('Full Planner'); ?></a></div>
<?php } else { ?>
                <p style="clear:both;"><strong><?php print t('No Planned Programs'); ?></strong></p>
                <div class="planner-item nav-full">&raquo; <a href="<?php print $plannerSearchURL; ?>" class="thickbox"><?php print t('Schedule a Program'); ?></a></div>
<?php } ?>
                <div class="nav-bottom-img"></div>
              </div>
  </div>
</div> 
<!-- /block-inner, /block -->
