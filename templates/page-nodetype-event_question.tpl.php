<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language; ?>" xml:lang="<?php print $language; ?>">

<head>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <?php print $styles; ?>
  <!--[if IE]>
    <link rel="stylesheet" href="<?php print $base_path . $directory; ?>/ie.css" type="text/css">
    <?php if ($subtheme_directory && file_exists($subtheme_directory .'/ie.css')): ?>
      <link rel="stylesheet" href="<?php print $base_path . $subtheme_directory; ?>/ie.css" type="text/css">
    <?php endif; ?>
  <![endif]-->
  <?php print $scripts; ?>
</head>

<body class="<?php print $body_classes; ?>">
  <div style="background: transparent; border: 1px solid red; padding: 15px 0 15px 15px" id="xpage"><div id="page-inner">
    <div id="main"><div id="main-inner" class="clear-block">
      <div id="xcontent"><div id="content-inner">
        <?php if ($title or $tabs or $help or $messages): ?>
          <div id="content-header">
            <?php if ($title): ?>
              <h1 class="title"><?php print $title; ?></h1>
            <?php endif; ?>
              <?php global $user; if ($messages && $user->uid == 1) { print $messages;} ?>
          </div> <!-- /#content-header -->
        <?php endif; ?>

        <div id="content-area">
          <?php print $content; ?>
        </div>
      </div></div> <!-- /#content-inner, /#content -->
    </div></div> <!-- /#main-inner, /#main -->
    <?php if ($closure_region): ?>
      <div id="closure-blocks"><?php print $closure_region; ?></div>
    <?php endif; ?>
    <?php print $closure; ?>
  </div></div> <!-- /#page-inner, /#page -->
</body>
</html>