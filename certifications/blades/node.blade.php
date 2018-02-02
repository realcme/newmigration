<?php
$name=$page_settings['name'];
$head_title="Head
Title";
$certificate=[
'begin_date'=>'01/01/2017',
'dateearned'=>'01/01/2017',
'expiration_date'=>'01/01/2017',
'creditearned'=>'01/01/2017',
'course_title'=>'title',
]
?>
<?php
// $Id: node.tpl.php,v 1.1 2010-04-08 21:05:44 valerie Exp $
?>
<div class="<?php print $node_classes ?>" id="node-<?php print $node->nid; ?>">
	<div class="node-inner">
		
    <?php if ($page == 0): ?>
	    <h2 class="title node-title">
				<a href="<?php echo $node_url ?>"><?php echo $title; ?></a>
			</h2>
    <?php endif; ?>
    
    <?php if ($picture): ?>
	    <div class="picture"><?php echo $picture; ?></div>
	  <?php endif; ?>
    
  	<?php if ($submitted): ?>
  	  <div class="submitted"><?php print $submitted; ?></div>
  	<?php endif; ?>
    
  	<?php if (count($taxonomy)): ?>
      <div class="taxonomy"><?php echo $terms; ?></div>
  	<?php endif; ?>
        
    <div class="content">
      <?php echo $content; ?>
    </div>
    
    <?php if ($links): ?> 
	    <div class="links"><?php echo $links; ?></div>
	  <?php endif; ?>
	
	</div> <!-- /node-inner -->
</div> <!-- /node -->
