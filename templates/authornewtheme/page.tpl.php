<?php
  global $user, $cmedomain;
  $subtheme = path_to_subtheme();
  $img_path = base_path() . $subtheme;
  $subtheme = basename($subtheme);

  $home_url = get_cmeauthor_activities_home();
if (stristr($cmedomain, 'patientcoach'))
{
        $style_css =  "{$base_path}{$subtheme_directory}/css/style_patientcoach.css";
}
else
{
	$style_css = "{$base_path}{$subtheme_directory}/css/style.css";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language; ?>" xml:lang="<?php print $language; ?>">

<head>
  <title><?php print $head_title; ?></title>
	<link href='//fonts.googleapis.com/css?family=Raleway:400,500,600,700' rel='stylesheet' type='text/css'>
	<?php //print $head; ?>
  <?php print $styles; ?>
  <link rel="stylesheet" href="<?php print $base_path . $subtheme_directory; ?>/css/authoringthemedefault.css" type="text/css">
  <link rel="stylesheet" href="<?php print $base_path . $subtheme_directory; ?>/css/checklist.css" type="text/css">

  <link rel="stylesheet" href="<?php print $base_path . $subtheme_directory; ?>/css/html5reset-1.6.1.css" type="text/css">
  <link rel="stylesheet" href="<?php print $style_css ?>" type="text/css">

  <!--[if IE]>
    <link rel="stylesheet" href="<?php print $base_path . $directory; ?>/ie.css" type="text/css">
    <?php if ($subtheme_directory && file_exists($subtheme_directory .'/ie.css')): ?>
      <link rel="stylesheet" href="<?php print $base_path . $subtheme_directory; ?>/ie.css" type="text/css">
    <?php endif; ?>
  <![endif]-->
  <?php print $scripts; ?>
  <?php //print phptemplate_cookie_js(); ?>
  <?php print phptemplate_opencomp_js(); ?>
  <?php //print phptemplate_toolkit_js(); ?>

<script type="text/javascript"><!--//--><![CDATA[//><!--

tb_show = function(caption, url, imageGroup) {
  thickbox(url, Drupal.globalToolCallback, caption);
}

//--><!]]></script>
<?php
if (!stristr($cmedomain, 'realcme'))
{ 
?>
  <script>
    $(document).ready(function() {
        $(".cme-recommend-to-peer").hide();
        $(".cme-mastery-report").hide();
    });
  </script>
<?php } ?>
</head>

<body class="<?php print $body_classes; ?> <?php print $subtheme; ?>">

	<div id="page"><div id="page-inner">


    <a name="top" id="navigation-top"></a>

    <div id="main"><div id="main-inner" class="clear-block<?php if ($search_box || $primary_links || $secondary_links || $navbar) { print ' with-navbar'; } ?>">

      <div id="content"><div id="content-inner">

        <?php if ($mission): ?>
          <div id="mission"><?php print $mission; ?></div>
        <?php endif; ?>

        <?php if ($content_top): ?>
          <div id="content-top">
            <?php print $content_top; ?>
          </div> <!-- /#content-top -->
        <?php endif; ?>

	<!-- #content-header -->

      <?php if ($breadcrumb or $title or $tabs or $help or $messages): ?>

			<div id="content-header">

        <?php print theme('header'); ?>

        <?php // print $breadcrumb; ?>
        <?php if ($user->uid == 1) { print $messages;} ?>
        <?php if ($tabs): ?>
          <div class="tabs"><?php print $tabs; ?></div>
        <?php endif; ?>
      	<?php print $help; ?>

      </div> <!-- /#content-header -->
      <?php endif; ?>

      <div id="content-area">
      	<?php print $content; ?>
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

		<div id="author-page-bottom"></div>

    <?php print theme('footer'); ?>

		<!--  div id="footer"><div id="footer-inner">

      <div id="footer-message">
       <center>
       <?php print $footer_message; ?><img src="<?php print $img_path ?>/img/footerlogo.png" alt="" class="center" />
       </center>
      </div>

    </div></div> /#footer-inner, /#footer -->

    <?php if ($closure_region): ?>
      <div id="closure-blocks"><?php print $closure_region; ?></div>
    <?php endif; ?>

    <?php print $closure; ?>

  </div> <!-- /#page-inner, /#page -->

	<iframe style="display:none" id="target_iframe" name="target_iframe"></iframe>

</body>
</html>
