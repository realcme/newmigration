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

    <div id="header"><div id="header-inner" class="clear-block">
    	<div class="topHeader" style="background: #919191; max-width: 1024px; height: 35px; margin: 0 auto;">
	    	<div class="topTabs" style="margin: 10px 0 0 0; padding: 0; float: left; width: 70%;">
				<a href="/"><img src="<?php print $img_path ?>/img/Tab-SCCM.png" alt="SCCM.org" border="0" /></a>
		        <a href="http://my.sccm.org"><img src="<?php print $img_path ?>/img/Tab-MySCCM.png" alt="MySCCM" border="0" /></a>
		        <a href="http://www.learnicu.org"><img src="<?php print $img_path ?>/img/Tab-LearnICU.png" alt="LearnICU.org" border="0" /></a>
		        <a href="http://www.MyICUCare.org"><img src="<?php print $img_path ?>/img/Tab-Patients.png" alt="MyICUCare.org" border="0" /></a>
			</div>
        </div>
        <div id="logo-title" style="clear:both">
            <div id="logo"><a href="http://www.sccm.org/" title="<?php print t('Home'); ?>" rel="home"><img src="<?php print $img_path ?>/img/SCCM_logo.jpg" alt="<?php print t('Home'); ?>" id="logo-image" style="margin-bottom: 5px;" /></a></div>
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
        <ul class="menu">
        <li class="menu__item is-leaf first leaf"><a href="http://www.sccm.org/About-SCCM/Pages/default.aspx" title="home" class="menu__link">About SCCM</a></li>
				<li class="menu__item is-leaf leaf"><a href="http://www.sccm.org/Communications/Pages/default.aspx" title="" class="menu__link">Communications</a></li>
				<li class="menu__item is-collapsed collapsed"><a href="http://www.sccm.org/Education-Center/Pages/default.aspx" title="" class="menu__link"> Education Center</a></li>
				<li class="menu__item is-leaf leaf"><a href="http://www.sccm.org/Fundamentals/Pages/default.aspx" class="menu__link">Fundamentals</a></li>
				<li class="menu__item is-leaf leaf"><a href="http://www.sccm.org/Member-Center/Pages/default.aspx" title="" class="menu__link">Member Center</a></li>
				<li class="menu__item is-leaf leaf"><a href="http://www.sccm.org/Professional-Development/Pages/default.aspx" title="" class="menu__link">Professional Development</a></li>
				<li class="menu__item is-leaf last leaf"><a href="http://www.sccm.org/Research/Pages/default.aspx" class="menu__link">Research/Quality</a></li>
		</ul>      

</nav>
    
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
    
			<div style=" width: 100%; margin: 0 auto; background-color: #919191;
    font-size: 12px; color: #eee; padding: 0; border-top: 2px solid #666;">
			    <div>
			        <div class="footerLeft" style=" margin: 0 5px 0 0; float: left; width: 45%;">
			        © 2001-2017 Society of Critical Care Medicine. All rights reserved.
			        </div>
			        <div class="footerRight" style="margin: 0; text-align: right;">
			            <p>
			                Headquarters | 500 Midway Drive, Mount Prospect, IL 60056 USA<br />
			                Phone: +1 847 827-6869 | Fax: +1 847-439-7226 | Email: <a href="mailto:info@sccm.org">info@sccm.org</a><br />
			                <a href="http://www.sccmchina.org.cn" target="_blank">SCCM 中国</a>
			            </p>
			        </div>
			    </div>
			</div>

  </div></div> <!-- /#page-inner, /#page -->

</body>
</html>
