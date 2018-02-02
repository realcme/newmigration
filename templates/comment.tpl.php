<div class="comment <?php print $comment_classes; ?>"><div class="comment-inner">
<?php $author = user_load(array('uid' => $comment->uid)); ?>
<div class="comment-header">
  <?php if ($comment->subject): ?>
    <h3 class="title"><?php print $comment->subject; if (!empty($new)): ?> <span class="new"><?php print $new; ?></span><?php endif; ?></h3>
  <?php elseif (!empty($new)): ?>
    <div class="new"><?php print $new; ?></div>
  <?php endif; ?>

  <?php if ($unpublished) : ?>
    <div class="unpublished"><?php print t('Unpublished'); ?></div>
  <?php endif; ?>

  <?php if ($picture) print $picture; ?>

  <div class="submitted">
 by <?php print theme('user_profile_popup_link', $author); ?> &mdash;
<?php print format_date($comment->timestamp); ?>
  </div>
</div>
  <div class="content">
    <?php print $content; ?>
  </div>

  <?php if ($links): ?>
    <div class="links">
      <?php print $links; ?>
    </div>
  <?php endif; ?>
</div></div> <!-- /comment-inner, /comment -->
