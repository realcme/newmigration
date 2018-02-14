<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language; ?>" xml:lang="<?php print $language; ?>">

<head>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <?php print $styles; ?>
  <style>
  	body { background: transparent; overflow: hidden }
  	table { padding: 0; width: 100%; }
  	#edit-op0 { float: left; }
  	#edit-filter0 { width: 590px; }
  	#content-header h1 { color: #666, font-size: 14px; text-transform: none; }
  </style>
  <!--[if IE]>
    <link rel="stylesheet" href="<?php print $base_path . $directory; ?>/ie.css" type="text/css">
    <?php if ($subtheme_directory && file_exists($subtheme_directory .'/ie.css')): ?>
      <link rel="stylesheet" href="<?php print $base_path . $subtheme_directory; ?>/ie.css" type="text/css">
    <?php endif; ?>
  <![endif]-->
  <?php print $scripts; ?>
  
</head>

<body class="<?php print $body_classes; ?> subframe-body">
  <div id="subframe-page"><div id="page-inner">
    <div id="main"><div id="main-inner" class="clear-block<?php if ($search_box || $primary_links || $secondary_links || $navbar) { print ' with-navbar'; } ?>">
      <div id="subframe-content"><div id="content-inner">
        <?php if ($title or $tabs or $help or $messages): ?>
          <div id="content-header">
            <?php if ($title): ?>
              <h1 style="color: #666" class="title"><?php print $title; ?></h1>
            <?php endif; ?>
              <?php global $user; if ($messages && $user->uid == 1) { print $messages;} ?>
          </div> <!-- /#content-header -->
        <?php endif; ?>

        <div id="content-area">
          <?php print $content; ?>
        </div>

        <?php if ($content_bottom): ?>
          <div id="content-bottom">
            <?php print $content_bottom; ?>
          </div> <!-- /#content-bottom -->
        <?php endif; ?>

      </div></div> <!-- /#content-inner, /#content -->
    </div></div> <!-- /#main-inner, /#main -->
  </div></div> <!-- /#page-inner, /#page -->

</body>
</html>