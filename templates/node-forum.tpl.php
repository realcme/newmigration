<div class="node <?php print $node_classes ?>" id="node-<?php print $node->nid; ?>"><div class="node-inner">
<?php $author = user_load(array('uid' => $node->uid)); ?>
<div class="forum-box-outer">
<div class="forum-box">
  <?php if ($page == 0): ?>
    <h2 class="title">
      <a href="<?php print $node_url; ?>"><?php print $node->title; ?></a>
    </h2>
  <?php endif; ?>

  <?php if ($unpublished) : ?>
    <div class="unpublished"><?php print t('Unpublished'); ?></div>
  <?php endif; ?>

  <?php if ($picture) print $picture; ?>

  <?php if ($submitted): ?>
    <div class="submitted">
      <?php print theme('forum_author', $author, $node); ?> 
    </div>
  <?php endif; ?>

  <div class="content">
    <?php print $content; ?>
  </div>
</div></div>
  <?php if ($links): ?>
    <div class="links">
      <?php print $links; ?>
    </div>
  <?php endif; ?>

</div></div> <!-- /node-inner, /node -->
