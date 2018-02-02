<?php
  global $user;
  $subtheme = path_to_subtheme();
  $img_path = base_path() . $subtheme;
  $subtheme = basename($subtheme);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language; ?>" xml:lang="<?php print $language; ?>">

<head>
  <title><?php print $head_title; ?></title>
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700' rel='stylesheet' type='text/css'>
  <?php print $head; ?>
  <?php print $styles; ?>
  <link rel="stylesheet" href="<?php print $base_path . $subtheme_directory; ?>/css/globaltool.css" type="text/css">
  <!--[if IE]>
    <link rel="stylesheet" href="<?php print $base_path . $directory; ?>/ie.css" type="text/css">
    <?php if ($subtheme_directory && file_exists($subtheme_directory .'/ie.css')): ?>
      <link rel="stylesheet" href="<?php print $base_path . $subtheme_directory; ?>/ie.css" type="text/css">
    <?php endif; ?>
  <![endif]-->
  <?php print $scripts; ?>
  <?php print phptemplate_cookie_js(); ?>
  <?php print phptemplate_opencomp_js(); ?>

</head>

<body class="<?php print $body_classes; ?> <?php print $subtheme; ?>">

	<div id="gt-frame-header">
		<div id="gt-frame-top">
		<div id="gt-frame-top-left"><div id="gt-frame-top-right"></div></div>
		</div>
	</div>

  <div id="page"><div id="page-inner">

    <div id="main"><div id="main-inner" class="clear-block<?php if ($search_box || $primary_links || $secondary_links || $navbar) { print ' with-navbar'; } ?>">

      <div id="content"><div id="content-inner">


        <?php if ($content_top): ?>
          <div id="content-top">
            <?php print $content_top; ?>
          </div> <!-- /#content-top -->
        <?php endif; ?>

	<!-- #content-header -->

        <?php if ($breadcrumb or $title or $tabs or $help or $messages): ?>
          <div id="content-header">
            <?php // print $breadcrumb; ?>
            <?php if (($user->uid == 1) && $tabs): ?>
              <div class="tabs"><?php print $tabs; ?></div>
            <?php endif; ?>
            <?php print $help; ?>
          </div> <!-- /#content-header -->
        <?php endif; ?>

        <div id="content-area">
          <?php print theme('globaltool_header');?>
          <?php if ($user->uid == 1): ?>
             <?php print $messages; ?>
          <?php endif; ?>
          <?php print $content; ?>
          </div><!-- END GT CONTENT -->
        </div>

<!--
        <?php if ($feed_icons): ?>
          <div class="feed-icons"><?php print $feed_icons; ?></div>
        <?php endif; ?>
 -->

        <?php if ($content_bottom): ?>
          <div id="content-bottom">
            <?php print $content_bottom; ?>
          </div> <!-- /#content-bottom -->
        <?php endif; ?>

      </div></div> <!-- /#content-inner, /#content -->

    </div></div> <!-- /#main-inner, /#main -->

<div style="clear: both;"></div>

   <?php print $closure; ?>

  </div></div> <!-- /#page-inner, /#page -->


  </div>

	<div id="gt-frame-footer">
		<div id="gt-frame-bottom">
		  <div id="gt-frame-bottom-left">
		    <div style='float: relative' id="gt-frame-bottom-right">
          <input style="display:none; margin-top: 12px;" id="gt-save" name="op" value="Save" class="form-submit" type="button" />
          <div style="display:none; margin-top: 12px;" id="gt-cancel" class="gt-item-cancel"></div>
		    </div>
		  </div>
    </div>

</body>
</html>