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
<table id="layout">
<tr>
	<td id="left_shadow"> </td>
  <td id="page_td">
  <div id="page"><div id="page-inner">

    <div id="header"><div id="header-inner" class="clear-block">
    
    
        <div id="logo-title">
            <div id="logo">
            <a href="<?php print $base_path."../"; ?>" title="<?php print t('Home'); ?>" rel="home"><img src="<?php print $img_path ?>/img/header.gif" alt="<?php print t('Home'); ?>" id="logo-image" /></a>
           	</div>
        </div> <!-- /#logo-title -->
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="topnav">
          <tr>
            <td class="nav">&nbsp;<a href="Home.aspx" class="navlink" >HOME</a></td>
            <td class="nav">&nbsp;|&nbsp;<a class="navlink" href="http://web.educationalconcepts.net/edconwebsite/info/About.aspx" >ABOUT US</a></td>
            <td class="nav">&nbsp;|&nbsp;<a class="navlink" href="http://web.educationalconcepts.net/edconwebsite/info/Home.aspx">CME/CE ACTIVITIES</a></td>
            <td class="nav">&nbsp;|&nbsp;<a class="navlink" href="http://web.educationalconcepts.net/edconwebsite/info/ActivityRequest.aspx">REQUEST A PROGRAM</a></td>
            <td class="nav">&nbsp;|&nbsp;<a class="navlink" href="http://web.educationalconcepts.net/edconwebsite/info/au_featured_websites.aspx">FEATURED PROGRAMS</a></td>
            <td class="nav">&nbsp;|&nbsp;<a class="navlink" href="http://charlotte.educationalconcepts.net/edconcert/" target="_blank">CME/CE CREDITS</a></td>
            <td class="nav">&nbsp;|&nbsp;<a class="navlink" href="http://web.educationalconcepts.net/edconwebsite/info/Contact.aspx">CONTACT US</a>&nbsp;</td>

          </tr>
      </table>        
        

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
<div id="ecg-footer">
      <a onclick="MM_openBrWindow('http://web.educationalconcepts.net/hardware_software/','','scrollbars=yes,width=700,height=400')" href="#">Hardware/Software Requirement </a>
      <a onclick="MM_openBrWindow('http://www.educationalconcepts.net/privacy/privacy.htm','','scrollbars=yes,width=720,height=400')" href="#">
       Privacy Policy</a></div>    

    <?php if ($closure_region): ?>
      <div id="closure-blocks"><?php print $closure_region; ?></div>
    <?php endif; ?>

    <?php print $closure; ?>

  </div></div> <!-- /#page-inner, /#page -->
  </td>
	<td id="right_shadow"> </td>
</tr>
</table>

</body>
</html>
