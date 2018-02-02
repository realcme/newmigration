<?php
  global $user;
  
	if (strpos($_SERVER['SERVER_NAME'], 'realcme.com')) {
		$epoc_link_url = 'http://www.epocrates.com';
		$epoc_online_url = 'https://online.epocrates.com/home';
		$epoc_base_url = 'https://www.epocrates.com';
		$protocol = "https://";
	} else {
		$epoc_link_url = 'http://www.beta.epocrates.com';		
		$epoc_online_url = 'http://online.beta.epocrates.com/home';
		$epoc_base_url = 'https://www.beta.epocrates.com';
		$protocol = "http://";
	}

  $return_url = $protocol . $_SERVER['SERVER_NAME'] . "/partner.php";
	if (preg_match('/\/cms\/node/', $_SERVER['REQUEST_URI'])) {
		$path = explode('/', $_SERVER['REQUEST_URI']);
		$nodeid = $path[count($path)-1];
		$return_url .= "?activityid=" . $nodeid;
	} 
	$redirect_url = $epoc_base_url . "/webEntry.do?returl=" . urlencode($return_url); 
	
	if (!($user->uid)) {
		if ( (!preg_match('/^comp=/', $_SERVER['QUERY_STRING'])) && (preg_match('/\/cms\/node/', $_SERVER['REQUEST_URI']))) {
  		//header("Location: $redirect_url");
  	  //exit;		
		}
	}	
	

	
  $img_path = base_path() . path_to_subtheme();
  if (isset($_SERVER['HTTP_HOST']))
  {
    $url_array = explode('.', $_SERVER['HTTP_HOST']);
    $domain = $url_array[1].'.'.$url_array[2];
  }

?>  
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language; ?>" xml:lang="<?php print $language; ?>">

<head>
  <title><?php print $head_title; ?></title>
  <meta name="apple-itunes-app" content="app-id=399842586"></meta>
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
		
  });	

	</script>
  <style>
    .notification {
      border: 2px solid #3b7d47;
      margin-bottom: 20px;
    }

  </style>
  
</head>

<body class="<?php print $body_classes; ?>">




  <div id="page"><div id="page-inner">
  
  
    <div id="epoc_header">
    
            <div id="epoc_logo"><a href="<?php print $epoc_link_url ?>/cme"><img src="<?php print $img_path ?>/img/logo.png" alt="Epocrates CME" /></a></div>
            <div id="sitelinks"><a target="_blank" href="<?php print $epoc_link_url ?>">Epocrates.com</a> | <a target="_blank" href="<?php print $epoc_online_url ?>">Epocrates Online</a></div>
            <ul id="nav">
                <li id="n_home"><a href="<?php print $epoc_link_url ?>/cme">CME HOME</a></li>
               <li id="n_mobile"><a href="http://www.epocrates.com/cmeMobile.do">MOBILE CME</a></li>
                <li id="n_online"><a href="/cms">ONLINE CME</a></li> 
                <li id="n_faq"><a href="<?php print $epoc_link_url ?>/cmeFaq.do">CME FAQ</a></li>
            </ul>

    </div> <!--  /#header -->  
  



    <div id="main"><div id="main-inner" class="clear-block<?php if ($search_box || $primary_links || $secondary_links || $navbar) { print ' with-navbar'; } ?>">

      <?php if ($header): ?>
        <div id="header-blocks">
          <?php print $header; ?>
        </div> <!-- /#header-blocks -->
      <?php endif; ?>

      <div id="content"><div id="content-inner">
        <div class="notification">
            <b>Please note Epocrates will no longer provide this CME offering after December 31, 2015.  However this free offering will continue to be available directly from RealCME and there will be no interruption to your account, including credits, certificates and new course offerings.</b>
            <br><br>
            Please directly access your account by clicking <a href="http://hp.realcme.com/cms/"><strong>RealCME Health Professional</strong></a> and use the same email address to log in to your account that you have used with EpocratesCME.  For security purposes, you will be asked to establish a new password.<br /><br />
        </div>
        
        <?php if ($mission): ?>
          <div class="mission"><?php print $mission; ?></div>
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

    </div> <!-- /#main-inner -->
    
    
    <div id="footer"><div id="footer-inner">
			<p class="note">
      Copyright &copy; 2010 Epocrates, Inc.  All Rights Reserved. 
      <a target="_blank" href="<?php print $epoc_link_url ?>/company/">Epocrates Inc.</a> 
      <a target="_blank" href="<?php print $epoc_base_url ?>/termsOfUse.do">Terms of Use</a> 
      <a target="_blank" href="<?php print $epoc_link_url ?>/privacy.do">Privacy Policy</a> 
      <a target="_blank" href="<?php print $epoc_link_url ?>/support">Support</a></p>
        		
      <a href="http://www.realcme.com/"><img src="<?php print $img_path ?>/img/footerlogo.png" style="width: 250px;top: 21px;"/></a>
    
    </div></div> <!-- /#footer-inner, /#footer -->
    
    
    
    </div> <!-- /#main -->


    <?php if ($closure_region): ?>
      <div id="closure-blocks"><?php print $closure_region; ?></div>
    <?php endif; ?>

    <?php print $closure; ?>

  </div></div> <!-- /#page-inner, /#page -->

</body>
</html>
