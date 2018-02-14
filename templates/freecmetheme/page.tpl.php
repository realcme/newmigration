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

	<div class="document">

		<header class="main-header">

  		<div class="main-header__logo">
  			<a href="/"><img alt="FreeCME" src="http://www.freeCME.com/ext/resources/images/logo.png" />
  			</a>
  		</div>
  
  		<div class="main-header__content-desktop">
  
  			<div class="main-header__social-icons">
  				<section class="editorial-content home-social-links">
  
  				<div class="editorial-content__details">
  					<div class="editorial-content__body">
  						<p>Follow Us:</p> &nbsp; 
  						<a href="https://www.linkedin.com/company/ahc-media-llc">
  						  <img class="social-media-icon-header__linkedin" src="<?php print $img_path?>/img/freecme/linkedin.png" />
  						</a>
  						<a href="https://www.facebook.com/freecme.atlanta">
  						  <img class="social-media-icon-header__facebook" src="<?php print $img_path?>/img/freecme/facebook_icon.png" />
  						</a>
  						<a href="https://twitter.com/freecmeonline">
  						  <img class="social-media-icon-header__twitter" src="<?php print $img_path?>/img/freecme/twitter_icon.png" />
  						</a>
  						<!-- <a href="#" class="social-media-icon-header__facebook"></a>
              <a href="#" class="social-media-icon-header__twitter"></a> -->
  					</div>
  					<div class="editorial-content__link"></div>
  				</div>
  				</section>
  
  			</div>
  
  			<div class="main-header__main-search-box">
  				<form id="main-search-box" method="get" action="http://www.freeCME.com/search">
  					<div class="field-set">
  						<input class="header-search-field" type="text" name="q"
  							placeholder="Search Courses"> <input
  							class="header-search-button button" type="submit" value="GO">
  					</div>
  				</form>
  			</div>
  
  <!-- 
  			<div class="main-header__secondary-navigation">
  				<a class="user-logged-out hide" href="/user/login">Member Login</a>
  				<a class="user-logged-in hide"
  					href="https://learning.freecme.com/mycme/mycme.do?method=notme">Logout</a>
  				<a class="user-logged-in hide" href="/user/profile">My Profile</a> <a
  					class="user-logged-in hide"
  					href="https://learning.freecme.com/mycme">My Courses</a>
  			</div>
   -->
  			<div class="main-header__primary-navigation">
  				<div class="navigation-1">
  					<div class='navigation' id='primaryNav'>
  						<ul class='level1'>
  							<li class='level1-li first'><a href="http://www.freeCME.com/" class="link2">Home</a></li>
  							<li class='level1-li'><a href="https://learning.freecme.com/s/catalog" class="link2">Courses</a></li>
  							<li class='level1-li'><a href="http://www.freeCME.com/specialties" class="link2">Specialties</a></li>
  							<li class='level1-li'><a href="http://www.freecme.com/events class="link2">Events</a></li>
  							<li class='level1-li'><a href="http://www.freeCME.com/about" class="link2">About Us</a></li>
  						</ul>
  					</div>
  				</div>
  			</div>
  
  		</div>

		</header>


		<div id="page">
			<div id="page-inner">


				<a name="top" id="navigation-top"></a>
				<div id="skip-to-nav">
					<a href="#navigation"><?php print t('Skip to Navigation'); ?> </a>
				</div>

				<div id="header">
					<div id="header-inner" class="clear-block">
						<!--
        <div id="logo-title">
            <div id="logo"><a href="<?php print $base_path."../"; ?>" title="<?php print t('Home'); ?>" rel="home"><img src="<?php print $img_path ?>/img/logo.gif" alt="<?php print t('Home'); ?>" id="logo-image" /></a></div>
        </div> -->
						<!-- /#logo-title -->

						<?php if ($header): ?>
						<div id="header-blocks">
							<?php print $header; ?>
						</div>
						<!-- /#header-blocks -->
						<?php endif; ?>

					</div>
				</div>
				<!-- /#header-inner, /#header -->

				<div id="main">
					<div id="main-inner"
						class="clear-block<?php if ($search_box || $primary_links || $secondary_links || $navbar) { print ' with-navbar'; } ?>">

						<div id="content">
							<div id="content-inner">

								<?php if ($mission): ?>
								<div id="mission">
									<?php print $mission; ?>
								</div>
								<?php endif; ?>

								<?php if ($content_top): ?>
								<div id="content-top">
									<?php print $content_top; ?>
								</div>
								<!-- /#content-top -->
								<?php endif; ?>

								<?php if ($breadcrumb or $title or $tabs or $help or $messages): ?>
								<div id="content-header">
									<?php // print $breadcrumb; ?>
									<?php if ($title): ?>
									<h1 class="title">
										<?php print $title; ?>
									</h1>
									<?php endif; ?>
									<?php if ($user->uid == 1) { print $messages;} ?>
									<?php if ($tabs): ?>
									<div class="tabs">
										<?php print $tabs; ?>
									</div>
									<?php endif; ?>
									<?php print $help; ?>
								</div>
								<!-- /#content-header -->
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
								</div>
								<!-- /#content-bottom -->
								<?php endif; ?>

							</div>
						</div>
						<!-- /#content-inner, /#content -->

						<?php if ($sidebar_left): ?>
						<div id="sidebar-left">
							<div id="sidebar-left-inner">
								<?php //print $sidebar_left; ?>
							</div>
						</div>
						<!-- /#sidebar-left-inner, /#sidebar-left -->
						<?php endif; ?>

						<div id="sidebar-right">
							<div id="sidebar-right-inner">

								<div id="altcontainer2">
									<div id="companionlogo">
										<img src="<?php print $img_path ?>/img/logo-companion.gif"
											id="logo-companion" alt="CMECompanion" class="" />
									</div>
									<!-- Accordion Menu Start -->
									<div id="list1">
										<?php print $sidebar_right; ?>
									</div>
								</div>
								<!--  altcontainer2 -->
							</div>
						</div>
						<!-- /#sidebar-right-inner, /#sidebar-right -->

					</div>
				</div>
				<!-- /#main-inner, /#main -->

				<div id="footer">
					<div id="footer-inner">

						<div id="footer-message">
							<center>
								<?php print $footer_message; ?>
								<img src="<?php print $img_path ?>/img/footerlogo.png" alt=""
									class="center" />
							</center>
						</div>

					</div>
				</div>
				<!-- /#footer-inner, /#footer -->

				<?php if ($closure_region): ?>
				<div id="closure-blocks">
					<?php print $closure_region; ?>
				</div>
				<?php endif; ?>

				<?php print $closure; ?>

			</div>
		</div>
		<!-- /#page-inner, /#page -->


		<footer class="main-footer">

  		<div class="main-footer__content">
  			<div class="main-footer__primary-navigation">
  				<div class='navigation' id='footerNav'>
  					<ul class='level1'>
  						<li class='level1-li first'><a
  							href="https://learning.freecme.com/s/catalog" class="link2">Courses</a>
  						</li>
  						<li class='level1-li'><a href="http://www.freecme.com/specialties" class="link2">Specialties</a>
  						</li>
  						<li class='level1-li'><a href="http://www.freecme.com/events" class="link2">Events</a>
  						</li>
  						<li class='level1-li'><a href="http://www.freecme.com/about" class="link2">About Us</a>
  						</li>
  						<li class='level1-li'><a href="http://www.freecme.com/faq" class="link2">FAQ</a></li>
  						<li class='level1-li'><a href="http://www.freecme.com/contact_us" class="link2">Contact
  								Us</a></li>
  						<li class='level1-li last'><a href="http://www.freecme.com/user/login" class="link2">Member
  								Login</a></li>
  					</ul>
  				</div>
  			</div>
  
  			<section class="editorial-content home-footer-1">
  
  			<div class="editorial-content__details">
  				<div class="editorial-content__body">
  					<p>AHC Media LLC, a Relias Learning Company, freeCME.com® • 
  					111 Corning Road • Raleigh, NC 27518 • 1-800-688-2421</p>
  					<p>
  						<a href="/copyright">Copyright</a> © 2004-Present. All rights
  						reserved. <a href="/privacy-policy">Privacy Policy</a> | <a
  							href="/terms-of-use">Terms of Use</a>
  					</p>
  				</div>
  				<div class="editorial-content__link"></div>
  			</div>
  			</section>
  
  		</div>
  
  		<div class="main-footer__logo">
  			<a href="/"><img alt="FreeCME"
  				src="http://www.freeCME.com/ext/resources/images/logo-footer.png" /> </a>
  		</div>

		</footer>

	</div> <!-- document -->
</body>
</html>
