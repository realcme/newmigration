<?php
  global $user;
  $img_path = base_path() . path_to_subtheme();
?>  
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="https://www.w3.org/1999/xhtml" lang="<?php print $language; ?>" xml:lang="<?php print $language; ?>">

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

  <div id="page"><div id="page-inner">


    <a name="top" id="navigation-top"></a>
    <div style="display: none" id="skip-to-nav"><a href="#navigation"><?php print t('Skip to Navigation'); ?></a></div>

    <div id="header"><div id="header-inner" class="clear-block">

            <div id="logo"><a href="http://www.naceonline.com" title="<?php print t('Home'); ?>" target="_blank"><img src="<?php print $img_path ?>/img/new_images/logo.png" alt="<?php print t('Home'); ?>" id="logo-image" /></a></div>

      <?php if ($header): ?>
        <div id="header-blocks">
          <?php print $header; ?>
        </div> <!-- /#header-blocks -->
      <?php endif; ?>

    </div></div> <!-- /#header-inner, /#header --> 
<div id="top_nav">
<ul id="top_nav_links">
	<li class=""><a href="http://naceonline.com/page_Home-Study-Courses.php" target="_blank"><span id="top_nav_text">Online Mental Health CE Courses</span></a>
	  <div class="dropdown-content">
	    <a href="#">Link 1</a>
	    <a href="#">Link 2</a>
	    <a href="#">Link 3</a>    
	  </div>
	  </li>
    <li class=""><a href="http://naceonline.com/CME-Courses/catalog.php" target="_blank"><span id="top_nav_text">Online CME<br />Courses</span></a>
      <div class="dropdown-content">
	    <a href="#">Link 1</a>
	    <a href="#">Link 2</a>
	    <a href="#">Link 3</a>
	  </div>
	 </li>
    <li class=""><a href="http://naceonline.com/CME-Courses/catalog-University-of-Miami.php" target="_blank"><span id="top_nav_text">State Required and Prep Courses</span></a>
          <div class="dropdown-content">
	    <a href="#">Link 1</a>
	    <a href="#">Link 2</a>
	    <a href="#">Link 3</a>
	  </div>
	</li>
    <li class=""><a href="http://naceonline.com/CME-Courses/catalog-conferences.php" target="_blank"><span id="top_nav_text">Live Medical Conferences</span></a>
          <div class="dropdown-content">
	    <a href="#">Link 1</a>
	    <a href="#">Link 2</a>
	    <a href="#">Link 3</a>
	  </div>
	</li>
    <li class="" style="line-height:30px; border-right:none;"><a href="http://naceonline.com/mission.php"><span id="top_nav_text">About NACE</span></a>
          <div class="dropdown-content">
	    <a href="#">Link 1</a>
	    <a href="#">Link 2</a>
	    <a href="#">Link 3</a>
	  </div>
	</li>
</ul>
</div>



    <div id="page-main"><div id="main-inner" class="clear-block<?php if ($search_box || $primary_links || $secondary_links || $navbar) { print ' with-navbar'; } ?>">

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
          <?php }?>
          <!-- Accordion Menu Start -->
            <div id="list1">            
            <?php print $sidebar_right; ?>
            <!-- END SIDEBAR RIGHT -->
            </div>
          </div>
      <!--  altcontainer2 -->
        </div></div> <!-- /#sidebar-right-inner, /#sidebar-right -->

    </div></div> <!-- /#main-inner, /#main -->

    
<div id="footer">
<center>
	<small>
		©COPYRIGHT 2017. NATIONAL ASSOCIATION FOR CONTINUING EDUCATION INC., ALL RIGHTS RESERVED. 
	</small>
</center>
<br />
<br />
<center>
       <small> Copyright © RealCME, LLC 2008-2017.  All Rights Reserved.  <a href="/cms/privacypolicy">Privacy Policy</a>&nbsp; <a href="/cms/termsofservice">Terms of Service</a>&nbsp; <a href="/cms/support-center">Support</a></small><br><br>
<img src="/cms/sites/all/themes/zen/rmeitheme/img/footerlogo.png" alt="" class="center">
       

<div id="bottom_links">
<ul>


    <li><a href="/cms/contact-us">Contact Us</a></li>
    <li><a href="/tos.php">Terms of Use</a></li>   
    <li><a href="/privacy.php">Privacy Statement</a></li>
    <li><a href="/sitemap.php">Sitemap</a></li>
</ul>
</center>
</div> 

</div>    <!-- Close Footer -->

 

    <?php if ($closure_region): ?>
      <div id="closure-blocks"><?php print $closure_region; ?></div>
    <?php endif; ?>

    <?php print $closure; ?>

  </div>
  </div> <!-- /#page-inner, /#page -->

</body>
</html>