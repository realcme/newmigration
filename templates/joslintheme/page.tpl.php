<?php
  global $user;
  $img_path = base_path() . path_to_subtheme();
  
  $return_url = "";
  if (preg_match('/\/cms\/node/', $_SERVER['REQUEST_URI'])) {
  	$path = explode('/', $_SERVER['REQUEST_URI']);
  	$nodeid = $path[count($path)-1];
  	$return_url = "?ActivityId=" . $nodeid;
  }
  $redirect_url = "http://www.jpec.joslin.org/JPECWeb/RedirectLogin.aspx" . $return_url;
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
  <script type="text/javascript">
  $(document).ready(function() {

    $("#registration_link").unbind(); 
  	$("#registration_link").attr("href", "<?php print $redirect_url; ?>");
    $("#login_link").unbind(); 
  	$("#login_link").attr("href", "<?php print $redirect_url; ?>");
    $(".login_link_activity").unbind(); 
  	$(".login_link_activity").attr("href", "<?php print $redirect_url; ?>");
  	/*
	$("#logout_link").unbind().click(function () {
												$.ajax({url: '/cms/logout', complete: function(data) {
                                window.location = "<?php print $epoc_base_url; ?>/webEntry.do?log=o";
                               }});
    }); 
  	$("#logout_link").removeAttr("href");
    $(".profile-item a").unbind().removeAttr('href').click(function openepoccmewindow(){
      var windowForepoccme = window.open("<?php print $epoc_base_url; ?>/profile.do","epoccmewin","locationbar=0,menubar=0,status=0,resizable=1,toolbar=0,scrollbars=1,top=0,left=650,height=590,width=580");
      windowForepoccme.focus();
    });		
	*/
		
  });	

	</script></head>

<body class="<?php print $body_classes; ?>">

  <div id="page">
    <div id="branded_header">
	</div>
    <div id="branded_banner">
      <div style="float: left;">
        <a href="http://jpec.joslin.org/JPECWeb/MyJpec.aspx">
          <img src="<?php print $img_path ?>/img/logo.jpg" alt="Joslin Professional Education Consortium" style="vertical-align: middle;" />
        </a><br />
      </div>
      <div style="float: left; width:auto;">
        <div style="height: 38px">
        </div>
        <div id="header_title" style="height: 30px; padding-top: 26px; font-family:Arial,Helvetica,sans-serif; font-size:20px; margin-left:15px; color: #FFFFFF">
        Joslin Virtual Clinic
        </div>
        <div style="height: 16px; padding-top:8px; font-family:Arial,Helvetica,sans-serif; font-size:13px; font-weight:bold; margin-left:15px;">
            <a href="http://jpec.joslin.org/JPECWeb/MyJpec.aspx" style="color:#E1E0C7; font-weight:bold; text-decoration:none;">My JPEC</a>
        </div>
      </div>
    </div> <!-- /#branded_header -->

  <div id="page-inner">

    <div id="header"><div id="header-inner" class="clear-block">

        <!-- If a simple logo brand, uncomment and place logo and optional link below
        <div id="logo-title">
            <div id="logo">
              <a href="<?php print $base_path; ?>" title="<?php print t('Home'); ?>" rel="home"><img src="<?php print $img_path ?>/img/logo.gif" alt="<?php print t('Home'); ?>" id="logo-image" /></a>
            </div>
            <br />
        </div>
          -->
 		<!-- /#logo-title -->

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
    

    </div>

    <div id="branded_footer">
	</div> <!--  /#branded_footer -->    

  </div> <!-- /#page-inner, /#page -->
</body>
</html>
