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

<body class="MasterBody <?php print $body_classes; ?>">



<div class="Master">
    <div class="MasterHeader">
            <div class="MasterLogin_container">
            <!-- 
            <iframe id="iframeUserStatus" frameborder="0" src="http://www.rockpointe.com/UserStatus/UserStatus.aspx" style="width:100%;background-color:transparent;" allowtransparency="true"></iframe>
             -->
        </div>
    
        <a style="width:300px;height:100%;display:inline-block;" href="http://www.rockpointe.com"></a>
    </div>

    <div class="MasterContent">

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
  
  </div><!-- MasterContent -->
  
  <script>

	function popUpWin(path) {
		//alert("popUpWin: " + path);
		var sURL = path;
		var features = 'toolbar=0,location=0,status=1,menubar=0,scrollbars=1,resizable=1,width=1024,height=800,left=' + top.window.screenLeft + ',top=' + top.window.screenTop;
		windownew = window.open(sURL, "new_window", features);
		try { windownew.focus(); } catch (ex) { }
	}
            
  </script>
    <div class="MasterFooter">
        © 2012 Rockpointe Corporation | <a href="javascript:top.popUpWin('http://www.rockpointe.com/INFO_CONTENT/PrivacyStatement.aspx', 700, 400)">Privacy Statement</a> | <a href="javascript:top.popUpWin('http://www.rockpointe.com/INFO_CONTENT/LegalInformation.aspx', 700, 400)">Legal Information</a>
    </div>
</div> <!-- Master -->


</body>
</html>
