<?php
// $Id: block.tpl.php,v 1.1 2010-04-08 21:05:44 valerie Exp $
?>
<div class="block <?php echo $block_classes; ?> clearfix" id="block-<?php echo $block->module; ?>-<?php echo $block->delta; ?>">
  <div class="block-inner">

    <?php if ($block->subject): ?>
		  <h3 class="title block-title"><?php echo $block->subject; ?></h3>
		<?php endif; ?>

    <div class="content">
      <?php echo $block->content; ?>
    </div>
    
	  <?php print $edit_links; ?>

  </div> <!-- /block-inner -->
</div> <!-- /block -->
