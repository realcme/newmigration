<?php
  global $user;
  $img_path = base_path() . path_to_subtheme();
  $home_url = base_path();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language; ?>" xml:lang="<?php print $language; ?>">

<head>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <?php print $styles; ?>
  <link rel="stylesheet" href="<?php print $base_path . $subtheme_directory; ?>/css/revisions.css" type="text/css">

  <!--[if IE]>
    <link rel="stylesheet" href="<?php print $base_path . $directory; ?>/ie.css" type="text/css">
    <?php if ($subtheme_directory && file_exists($subtheme_directory .'/ie.css')): ?>
      <link rel="stylesheet" href="<?php print $base_path . $subtheme_directory; ?>/ie.css" type="text/css">
    <?php endif; ?>
  <![endif]-->
  <?php print $scripts; ?>


</head>

<body class="node_revisions <?php print $body_classes; ?>">

  <div id="page"><div id="page-inner">


    <a name="top" id="navigation-top"></a>

    <div id="header"><div id="header-inner" class="clear-block">

			<div id="page-title"><?php print $title?>
			</div>

        <!--
        <div id="logo-title">
            <div id="logo"><a href="<?php print $base_path."../"; ?>" title="<?php print t('Home'); ?>" rel="home"><img src="<?php print $img_path ?>/img/logo.gif" alt="<?php print t('Home'); ?>" id="logo-image" /></a></div>
        </div> --> <!-- /#logo-title -->

      <?php if ($header): ?>
        <div id="header-blocks">
          <?php print $header; ?>
        </div> <!-- /#header-blocks -->
      <?php endif; ?>

    </div></div> <!-- /#header-inner, /#header -->

    <div id="main"><div id="main-inner" class="clear-block<?php if ($search_box || $primary_links || $secondary_links || $navbar) { print ' with-navbar'; } ?>">

      <div id="content">

        <?php if ($content_top): ?>
          <div id="content-top">
            <?php print $content_top; ?>
          </div> <!-- /#content-top -->
        <?php endif; ?>


            <!--
        <?php if ($breadcrumb or $title or $tabs or $help or $messages): ?>
            <?php // print $breadcrumb; ?>
            <?php print $messages; ?>
            <?php if ($tabs): ?>
              <div class="tabs"><?php print $tabs; ?></div>
            <?php endif; ?>
            <?php print $help; ?>
          </div>
        <?php endif; ?>
             -->

			<div id="revisions-top"></div>

        <div id="content-area">
          <?php print $content; ?>
        </div>

			<div id="revisions-bottom"></div>

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

      </div> <!-- /#content-inner, /#content -->


    </div></div> <!-- /#main-inner, /#main -->

    <?php if ($closure_region): ?>
      <div id="closure-blocks"><?php print $closure_region; ?></div>
    <?php endif; ?>

    <?php print $closure; ?>

  </div></div> <!-- /#page-inner, /#page -->

</body>
</html>