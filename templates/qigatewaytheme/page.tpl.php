<?php
$img_path = base_path() . path_to_subtheme();
?>
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

  <!-- PLAYER CSS EDIT : for matching quesitons text was wraping around images -->
  <style>
    /*.cme-text span, .cme-text div span {*/
    .nowrap-fix, #nowrap-fix {
      display: block;
      margin-left: 73px;
    }

    td span#nowrap-fix {
      margin-left: 0px !important;
    }

  </style>
</head>

<body class="<?php print $body_classes; ?>">

	<div id="qiheader">
		<div class="container">
			<div id="top-row" class="row">
				<div id="home-logo-container" class="span4">
                                    <a href="/cms/"><img src="<?php echo $img_path?>/img/QIGateway_RGB.png" id="logo" alt="CIR-PEI"></a>
				</div>
				<div class="span8">
					<div id="home-blurb">
						<h1>QI Gateway</h1>
						<h2>
							Plan, Execute & Publish!  Online quality improvement training for busy residents who 
                                                        want to improve patient care.
						</h2>
					</div>
				</div>
                                <div>
                                        <img src="<?php echo $img_path; ?>/img/doctors.jpg" style="width: 100px;">
                                </div>
			</div>
			<div class="row">
				<div id="home-testimonial-top" class="span12"></div>
			</div>
		</div>
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

  <div id="qifooter">

    <div class="container">

      <table>
        <tr>
          <td>
                <h4>Learn more</h4>
                <ul>
                    <li><a href="/cms/about/">About Us</a></li>
                    <li><a href="/cms/pep/">Plan, Execute &amp; Publish!</a></li>
                    <li><a href="/cms/acknowledgements/">Acknowledgements</a></li>
                </ul>          
          </td>
          <td>&nbsp;</td>
          <td><img src="http://qigateway.org/img/logo-knockout.png" width="177" height="111" alt="QI Gateway"></td>
          <td><a href="http://www.cirseiu.org/"><img src="http://qigateway.org/img/cirseiu-logo.png" alt="CIR-SEIU"></a></td>
          <td><img src="<?php echo $img_path ?>/img/peilogo2.png" alt="PEI-CIR" style="height: 120px;"></td>
        </tr>
      </table>

    </div>
 </div> <!--  footer -->
</body>
</html>