<?php
  global $user;
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
  <?php print phptemplate_cookie_js(); ?> 
  <?php print phptemplate_opencomp_js(); ?> 
  
</head>

<body class="<?php print $body_classes; ?>">

	<div id="hmcmeheader">
		<div id="hmcmetop">
			<a href="http://healthmatterscme.com/Default.aspx"> <img src="<?php print $img_path?>/img/hmcme/logo.gif"
				alt="Healthmatters: A Continuing Medical Education Company" />
			</a>&nbsp;
			<p>
				<a href="http://facebook.com/healthmatterscme"
					title="Visit us on Facebook" target="_blank"><img
					src="<?php print $img_path?>/img/hmcme/fb.jpg" /> </a>&nbsp;<a
					href="https://twitter.com/HMC_CME" title="Visit us on Twitter"
					target="_blank"><img src="<?php print $img_path?>/img/hmcme/twitter.jpg" /> </a>&nbsp;&nbsp;|&nbsp;&nbsp;<a
					href="http://healthmatterscme.com/about.aspx">About HealthmattersCME</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a
					href="http://healthmatterscme.com/council.aspx">CME Council</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a
					href="http://healthmatterscme.com/contact.aspx">Contact</a>
			</p>
		</div>
		<div id="hmcmenav">
			<ul id="main_nav">
				<li><a href="http://healthmatterscme.com/Default.aspx" class="programs"
					style="border: one; height: 30px;">Home</a></li>
				<table id="ctl00_dlHeader" cellspacing="0" border="0"
					style="border-collapse: collapse; float: left;">
					<tr>
						<td class="mnu_selected1">
							<li id="userMenu" style='border-bottom: solid 3px #3385d4;'
							class='Hepatitis'><a id="ctl00_dlHeader_ctl00_lnkMenu"
								href="http://healthmatterscme.com/CmePrograms.aspx?id=1&index=0">Hepatitis</a>
						</li>
						</td>
						<td>
							<li id="userMenu" style='border-bottom: solid 3px #d90707;'
							class='HIV/AIDS'><a id="ctl00_dlHeader_ctl01_lnkMenu"
								href="http://healthmatterscme.com/CmePrograms.aspx?id=2&index=1">HIV/AIDS</a>
						</li>
						</td>
						<td>
							<li id="userMenu" style='border-bottom: solid 3px #669040;'
							class='PAH'><a id="ctl00_dlHeader_ctl02_lnkMenu"
								href="http://healthmatterscme.com/CmePrograms.aspx?id=60&index=2">PAH</a>
						</li>
						</td>
						<td>
							<li id="userMenu" style='border-bottom: solid 3px #ffaa00;'
							class='Psychiatry'><a id="ctl00_dlHeader_ctl03_lnkMenu"
								href="http://healthmatterscme.com/CmePrograms.aspx?id=86&index=3">Psychiatry</a>
						</li>
						</td>
						<td>
							<li id="userMenu" style='border-bottom: solid 3px #e66f0c;'
							class='Pulmonary Diseases'><a id="ctl00_dlHeader_ctl04_lnkMenu"
								href="http://healthmatterscme.com/CmePrograms.aspx?id=5&index=4">Pulmonary
									Diseases</a>
						</li>
						</td>
						<td>
							<li id="userMenu" style='border-bottom: solid 3px #000000;'
							class='Resources'><a id="ctl00_dlHeader_ctl05_lnkMenu"
								href="http://healthmatterscme.com/CmePrograms.aspx?id=85&index=5">Resources</a>
						</li>
						</td>
					</tr>
				</table>

			</ul>
			<ul id="minor_nav">
				<li class="twolines"><a href="http://healthmatterscme.com/LivePrograms.aspx"
					class="live_programs">Live<br /> Programs
				</a></li>
				<li><a href="http://healthmatterscme.com/Search.aspx" class="search">Search</a></li>
			</ul>
		</div>

	</div> <!-- hmcmeheader -->
	
	<div id="page"><div id="page-inner">


    <a name="top" id="navigation-top"></a>
    <div id="skip-to-nav"><a href="#navigation"><?php print t('Skip to Navigation'); ?></a></div>

    <div id="header"><div id="header-inner" class="clear-block">
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
            <?php // print $breadcrumb; ?>
            <?php if ($title): ?>
              <h1 class="title"><?php print $title; ?></h1>
            <?php endif; ?>
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

      <?php if ($sidebar_left): ?>
        <div id="sidebar-left"><div id="sidebar-left-inner">
          <?php //print $sidebar_left; ?>
        </div></div> <!-- /#sidebar-left-inner, /#sidebar-left -->
      <?php endif; ?>

        <div id="sidebar-right"><div id="sidebar-right-inner">
        
          <div id="altcontainer2">
            <div id="companionlogo">
              <img src="<?php print $img_path ?>/img/logo-companion.gif" id="logo-companion" alt="CMECompanion" class="" />
            </div>      
          <!-- Accordion Menu Start -->
            <div id="list1">            
            <?php print $sidebar_right; ?>
            </div>
          </div>
      <!--  altcontainer2 -->
        </div></div> <!-- /#sidebar-right-inner, /#sidebar-right -->

    </div></div> <!-- /#main-inner, /#main -->

    <div id="footer"><div id="footer-inner">
      
      <div id="footer-message">
       <center>
       <?php print $footer_message; ?><img src="<?php print $img_path ?>/img/footerlogo.png" alt="" class="center" />
       </center>
      </div>

    </div></div> <!-- /#footer-inner, /#footer -->

    <?php if ($closure_region): ?>
      <div id="closure-blocks"><?php print $closure_region; ?></div>
    <?php endif; ?>

    <?php print $closure; ?>

  </div></div> <!-- /#page-inner, /#page -->
    <div id="hmcmefooter">
        <div class="detail">
            <p class="left">
                <span>© Copyright 2009 HealthmattersCME</span>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://healthmatterscme.com/PrivacyPolicy.aspx">Privacy 
                Policy</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="http://healthmatterscme.com/TermsOfUse.aspx">Terms of Use</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a
                        href="http://healthmatterscme.com/SiteMap.aspx">Site Map</a></p>
            <p class="right">
                <a href="http://www.io-media.com" target="_blank">Site by IOMEDIA</a></p>
        </div>
    </div>
</body>
</html>
