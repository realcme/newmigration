<?php
$img_path = base_path() . path_to_subtheme();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language; ?>" xml:lang="<?php print $language; ?>">

<head>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <?php print $styles; ?>
  <link rel='stylesheet' id='tp-montserrat2-css'  href='http://fonts.googleapis.com/css?family=Montserrat%3A400%2C700&#038;ver=4.0' type='text/css' media='all' />
  <!--[if IE]>
    <link rel="stylesheet" href="<?php print $base_path . $directory; ?>/ie.css" type="text/css">
    <?php if ($subtheme_directory && file_exists($subtheme_directory .'/ie.css')): ?>
      <link rel="stylesheet" href="<?php print $base_path . $subtheme_directory; ?>/ie.css" type="text/css">
    <?php endif; ?>
  <![endif]-->
  <?php print $scripts; ?>
</head>

<body class="<?php print $body_classes; ?>">
	<div class="header-wrapper">
		<div class="header-v1">
			<header id="pahheader">
			<div class="avada-row" style="padding-top: 0; padding-bottom: 0;" data-padding-top="0" data-padding-bottom="0">
				<div class="logo" data-margin-right="10" data-margin-left="20px" data-margin-top="10px" data-margin-bottom="5px"
					style="margin-right: 10; margin-top: 10px; margin-left: 20px; margin-bottom: 5px;">
					<a href="<?php print base_path()?>"> <img
						src="<?php print $img_path?>/img/pah_insights_logo.png"
						alt="PAH Virtual Clinic" class="normal_logo" />
					</a>
				</div>
				<div class="mobile-nav-holder main-menu"></div>
			</div>
			</header>
		</div>
		<div class="init-sticky-header"></div>
	</div>

  <div id="page"><div id="page-inner">




			<div id="header"><div id="header-inner" class="clear-block">
    
      <?php if ($header): ?>
        <div id="header-blocks">
          <?php print $header; ?>
        </div> <!-- /#header-blocks -->
      <?php endif; ?>

    </div></div> <!-- /#header-inner, /#header -->

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

        <?php if ($breadcrumb or $title or $tabs or $help or $messages): ?>
          <div id="content-header">
            <?php print $breadcrumb; ?>
            <?php if ($title): ?>
              <h1 class="title"><?php print $title; ?></h1>
            <?php endif; ?>
            <?php print $messages; ?>
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

      <?php if ($search_box || $primary_links || $secondary_links || $navbar): ?>
        <div id="navbar"><div id="navbar-inner">

          <a name="navigation" id="navigation"></a>

          <?php if ($search_box): ?>
            <div id="search-box">
              <?php print $search_box; ?>
            </div> <!-- /#search-box -->
          <?php endif; ?>

          <?php if ($primary_links): ?>
            <div id="primary">
              <?php print theme('links', $primary_links); ?>
            </div> <!-- /#primary -->
          <?php endif; ?>

          <?php if ($secondary_links): ?>
            <div id="secondary">
              <?php print theme('links', $secondary_links); ?>
            </div> <!-- /#secondary -->
          <?php endif; ?>

          <?php print $navbar; ?>

        </div></div> <!-- /#navbar-inner, /#navbar -->
      <?php endif; ?>

      <?php if ($sidebar_left): ?>
        <div id="sidebar-left"><div id="sidebar-left-inner">
          <?php print $sidebar_left; ?>
        </div></div> <!-- /#sidebar-left-inner, /#sidebar-left -->
      <?php endif; ?>

      <?php if ($sidebar_right): ?>
        <div id="sidebar-right"><div id="sidebar-right-inner">
          <?php print $sidebar_right; ?>
        </div></div> <!-- /#sidebar-right-inner, /#sidebar-right -->
      <?php endif; ?>

    </div></div> <!-- /#main-inner, /#main -->

    <div id="footer"><div id="footer-inner">

      <div id="footer-message"><?php print $footer_message; ?></div>

    </div></div> <!-- /#footer-inner, /#footer -->

    <?php if ($closure_region): ?>
      <div id="closure-blocks"><?php print $closure_region; ?></div>
    <?php endif; ?>

    <?php print $closure; ?>



		</div></div> <!-- /#page-inner, /#page -->

					<footer class="footer-area">
			<div class="avada-row">
				<section
					class="fusion-columns row fusion-columns-3 columns columns-3"> <article
					class="fusion-column col col-lg-4 col-md-4 col-sm-4 ">
				<div id="text-14" class="footer-widget-col widget_text">
					<div class="textwidget">
						<br> <br> <br> <img
							src="http://pahvirtualclinic.com/wp-content/uploads/2014/07/Rearden_Health_Partners_Logo.png" />
					</div>
					<div style="clear: both;"></div>
				</div>
				</article> 
				<article class="fusion-column col col-lg-4 col-md-4 col-sm-4">
				<div id="text-15" class="footer-widget-col widget_text">
					<div class="textwidget">
						Brought to you by: <br> <br> <br> <img
							src="http://pahvirtualclinic.com/wp-content/uploads/2014/07/UT-Logo.png" />
						<br> <br> <br> <br>
					</div>
					<div style="clear: both;"></div>
				</div>
				</article> 
				<article class="fusion-column col col-lg-4 col-md-4 col-sm-4">
				<div id="text-16" class="footer-widget-col widget_text">
					<div class="textwidget">
						<br> <br> <img
							src="http://pahvirtualclinic.com/wp-content/uploads/2014/08/Remodulin_Small-logo.jpg" />
					</div>
					<div style="clear: both;"></div>
				</div>
				</article>

				<div class="fusion-clearfix"></div>
				</section>
			</div>
			</footer>
			<footer id="pahfooter">
			<div class="avada-row">
				<div class="copyright-area-content">
					<div class="copyright">
						<div>
							<center>&copy;2015 United Therapeutics Europe Limited. All rights
								reserved.</center>
							<br>
							<center>Remodulin is a registered trademark of United Therapeutics Corporation. (EU/REM/APR15/444) date of preparation April 2015</center>
						</div>
					</div>
				</div>
			</div>
			</footer>
</body>
</html>