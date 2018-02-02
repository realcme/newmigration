<?php
  global $user;
  $img_path = base_path() . path_to_subtheme();
?>  
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language; ?>" xml:lang="<?php print $language; ?>">

<head>
  <title><?php print $head_title; ?> - Primary Care Education</title>
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

<!-- Start Header -->

<table class="pcen" width="996" border="0" align="center" cellpadding="0" cellspacing="0">
	<tr style="height: 181px;">
		<td colspan="3" class="pcen"><img src="<?php print $img_path; ?>/img/primarycarelogo.png" alt="" border="0" /></td>
	</tr>
    <tr>
    	<td colspan="3" class="pcen">
        <table id="menubar" width="100%">
        <td><a href="http://www.primarycareed.com/index.html"><img src="<?php print $img_path; ?>/img/homebg.png" alt="" border="0" /></a></td>
        <td><a href="http://www.primarycareed.com/Live_Conferences.html"><img src="<?php print $img_path; ?>/img/liveconferences.png" alt="" border="0" /></a></td>
        <td><a href="http://primarycareed.realcme.com/cms"><img src="<?php print $img_path; ?>/img/cmeondemand.png" alt="" border="0" /></a></td>
        <td><a href="http://www.primaryissues.org/"><img src="<?php print $img_path; ?>/img/primaryissues.png" alt="" border="0" /></a></td>
        <td><a href="http://www.primarycareed.com/about_us.html"><img src="<?php print $img_path; ?>/img/aboutus.png" alt="" border="0" /></a></td>
       	</table>
       </td>
    </tr>

	<tr>
		<td id="pcen_left"></td>
		<td id="pcen_center">
<!-- Header -->
<!-- Start Body -->


  <div id="page"><div id="page-inner">


    <a name="top" id="navigation-top"></a>
    <div id="skip-to-nav"><a href="#navigation"><?php print t('Skip to Navigation'); ?></a></div>

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
<!-- End Body -->
<!-- Start Footer -->
		</td>
		<td id="pcen_right"></td>
	</tr>
   
</table>
<br />
<br />
<div id="copyright">
       &#169; 2010 Primary Care Education
</div>
<br />
<br />

<!-- End ImageReady Slices -->

<map name="Map"><area shape="rect" coords="517,121,582,143" href="http://www.primarycareed.com/">
<area shape="rect" coords="612,117,686,144" href="http://www.primarycareed.com/conferences.html">
<area shape="rect" coords="713,117,801,144" href="http://www.primarycareed.com/Online_CME.html">
<area shape="rect" coords="824,116,897,144" href="http://www.primarycareed.com/about_us.html">
</map>
<!-- End Footer -->
</body>
</html>
