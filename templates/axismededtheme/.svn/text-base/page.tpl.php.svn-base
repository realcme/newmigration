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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
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

  <div id="page"><div id="page-inner">


    <a name="top" id="navigation-top"></a>
    <div id="skip-to-nav"><a href="#navigation"><?php print t('Skip to Navigation'); ?></a></div>

    <div id="header"><div id="header-inner" class="clear-block">
        
        <div id="logo-title" style="clear:both">
            <div id="logo"><a href="<?php print $base_path."../"; ?>" title="<?php print t('Home'); ?>" rel="home"><img src="<?php print $img_path ?>/img/axis_header.png" alt="<?php print t('Home'); ?>" id="logo-image" /></a></div>
        </div>
        <?php if ($header): ?>
        <div id="header-blocks">
          <?php print $header; ?>
        </div> <!-- /#header-blocks -->
        <?php endif; ?>
        
    </div></div> <!-- /#header-inner, /#header -->

        <!-- BEGIN AXISMedEd NAVIGATION -->
    <div id="navigation">
        <div id="topnav-inner">
          <nav id="main-menu" role="navigation">
        <ul class="menu"><li class="menu__item is-leaf first leaf"><a href="http://axismeded.com/" title="home" class="menu__link">Home</a></li>
<li class="menu__item is-active-trail is-expanded expanded active-trail"><a href="/content/about-us" class="menu__link">About Us</a><ul class="menu"><li class="menu__item is-leaf first leaf"><a href="http://axismeded.com/team" title="" class="menu__link">The Team</a></li>
<li class="menu__item is-leaf leaf"><a href="http://axismeded.com/content/privacy-policy" title="" class="menu__link">Privacy Policy</a></li>
<li class="menu__item is-leaf leaf"><a href="http://axismeded.com/content/permissions" class="menu__link">Permissions</a></li>
<li class="menu__item is-leaf leaf"><a href="http://axismeded.com/content/employment" class="menu__link">Employment</a></li>
<li class="menu__item is-leaf leaf"><a href="http://axismeded.com/content/mobile-terms" class="menu__link">Mobile Terms</a></li>
<li class="menu__item is-leaf last leaf"><a href="http://axismeded.com/content/terms-service-0" class="menu__link">Terms of Service</a></li>
</ul></li>
<li class="menu__item is-leaf leaf"><a href="http://axismeded.com/courses" title="" class="menu__link">Course Catalog</a></li>
<li class="menu__item is-collapsed collapsed"><a href="http://axismeded.com/" title="" class="menu__link"> Webinars</a></li>
<li class="menu__item is-leaf leaf"><a href="http://axismeded.com/content/advocacy-partners" class="menu__link">Advocacy Partners</a></li>
<li class="menu__item is-leaf leaf"><a href="http://axismeded.com/content/tosdmrc" title="" class="menu__link">OSDMRC</a></li>
<li class="menu__item is-leaf last leaf"><a href="http://axismeded.com/content/contact-us-1" class="menu__link">Contact Us</a></li>
</ul>      </nav>
    
        </div><!--/#topnav-inner-->
  </div><!-- /#navigation -->
    
    <div style='clear: both'></div>
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
          <?php if ($sidebar_right) {?>
            <div id="companionlogo">
              <img src="<?php print $img_path ?>/img/logo-companion.gif" id="logo-companion" alt="CMECompanion" class="" />
            </div>      
          <?php } ?>
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
    
    <div id="axisfooter">
      <a href="http://axismeded.com/visitor/axis-medical-education-continuing-education-for-physicians-nurses-and-other-health-professionals?en,0,,758">Home</a>
      <a href="http://axismeded.com/visitor/axis-about-us?en,0,,758">About Us</a>
      <a href="http://axismeded.com/visitor/axis-privacy-policy?en,0,,758">Privacy Policy</a>
      <a href="http://axismeded.com/visitor/axis-terms-of-service?en,0,,758">Terms of Service</a>
      <a href="http://axismeded.com/visitor/axis-permissions?en,0,,758">Permissions</a>
      <a href="http://axismeded.com/visitor/axis-employment-opportunities?en,0,,758">Employment</a>
      <a href="http://axismeded.com/visitor/axis--contact-us?en,0,,758">Contact Us</a>
      <a href="http://axismeded.com/visitor/mobile-terms?en,0,,758">Mobile Terms</a>
      <a href="https://www.facebook.com/"><img src="<?php print $img_path ?>/img/axis_facebook.png" alt="" /></a>
      <a href="https://twitter.com/"><img src="<?php print $img_path ?>/img/axis_twitter.png" alt="" /></a>
      <p class="axiscopy">&copy; Copyright <?= date("Y"); ?> AXIS Medical Education, Inc. (AXIS). All Rights Reserved.</p>
    </div>

  </div></div> <!-- /#page-inner, /#page -->

</body>
</html>
