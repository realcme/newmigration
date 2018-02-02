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

  <div id="page"><div id="page-inner">

    <div id="header"><div id="header-inner" class="clear-block">
        <div id="logo-title">
            <div id="logo"><a href="<?php print $base_path."../"; ?>" title="<?php print t('Home'); ?>" rel="home"><img src="<?php print $img_path ?>/img/logo.png" alt="<?php print t('Home'); ?>" id="logo-image" width="175" /></a></div>
        </div> <!-- /#logo-title -->
    
		<table cellspacing="0" cellpadding="0" border="0" class="right">
													<tr>
														<td><img width="7" height="40" src="<?php print $img_path ?>/img/space.gif" alt=""></td>
														<td bgcolor="#f1f2f4"><img width="130" height="40" src="<?php print $img_path ?>/img/space.gif" alt=""></td>
														<td><img width="7" height="40" src="<?php print $img_path ?>/img/space.gif" alt=""></td>
														<td bgcolor="#dddee2"><img width="130" height="40" src="<?php print $img_path ?>/img/space.gif" alt=""></td>
														<td><img width="7" height="40" src="<?php print $img_path ?>/img/space.gif" alt=""></td>
														<td bgcolor="#babdc2"><img width="135" height="40" src="<?php print $img_path ?>/img/space.gif" alt=""></td>
														<td><img width="7" height="40" src="<?php print $img_path ?>/img/space.gif" alt=""></td>
														<td bgcolor="#969da5" align="right"><img width="135" height="40" src="<?php print $img_path ?>/img/space.gif" alt=""></td>
													</tr>
											</table>    
    
        
        
       <!-- <div style="clear: both" id="header_bar"><img width="330"  src="<?php print $img_path ?>/img/topbanner.jpg" alt=""></div> -->


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
          <?php if ($sidebar_right) { ?>
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

  </div>
	<div id="iche-footer">
					<a target="ifrmContent" href="text/text_home_Copyright.aspx" onclick="linkOnClick('')" class="bottom_nav" id="lnkCopyright"><span id="lblCopyrightDate">Copyright &copy; 1997&ndash;<?php print date('Y') ?>	</span> Institute for Continuing Healthcare Education, Inc.</a>
					<a style="display: none;" class="bottom_nav" id="lnkTermsOfUse">Terms of use</a>
					<a style="display: none;" class="bottom_nav" id="lnkPrivacyPolicy">Privacy policy</a>&nbsp;&nbsp;
	</div>
  </div> <!-- /#page-inner, /#page -->
</body>
</html>