<?php

header('Location: http://hp.realcme.com/cms/');

  global $user;
	/*
	if (!($user->uid)) {
		if (!preg_match('/^comp=/', $_SERVER['QUERY_STRING'])) {
  		$return_url = "http://" . $_SERVER['SERVER_NAME'] . "/cms";
  		$redirect_url = "http://www.google.com"; //"https://www.beta.epocrates.com/webEntry.do?returl=" . $return_url; 
  		header("Location: $redirect_url");
  	  exit;		
		}
	}
		*/
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
    <?php /* ?>
    <link href="http://www.pri-med.com/pmo/css/home.css" rel="stylesheet" type="text/css" />
    <!--[if lte IE 7]><link rel="stylesheet" type="text/css" href="http://www.pri-med.com/pmo/css/styleie7.css" /><![endif]-->
    <!--[if lt IE 7]><link rel="stylesheet" type="text/css" href="http://www.pri-med.com/pmo/css/styleie6.css" /><![endif]-->
    <link href="http://www.pri-med.com/pmo/css/mainNav.css" rel="stylesheet" type="text/css" />
    <!--[if lte IE 6]><link href="http://www.pri-med.com/pmo/css/mainNavIE6.css" rel="stylesheet" type="text/css" /><![endif]-->
    <!--[if IE 7]><link href="http://www.pri-med.com/pmo/css/mainNavIE7.css" rel="stylesheet" type="text/css" /><![endif]-->
    <!--[if IE 8]><link href="http://www.pri-med.com/pmo/css/mainNavIE8.css" rel="stylesheet" type="text/css" /><![endif]-->
    <?php */ ?>

    <script src="<?php print $img_path; ?>/script/mainNav.js" type="text/javascript"></script>

    <script type="text/javascript">
        //<![CDATA[
			 var appPath = "<?php print $img_path; ?>";
			 $(document).ready(function(){
													$(".siloNav .regular img").mouseover(function() {
																																			this.src = this.src.replace("_off", "_roll");
																																			});
													$(".siloNav .regular img").mouseout(function() {
																																			this.src = this.src.replace("_roll", "_off");																																			
																																			});
																	
																	});
       /* document.addEvent('domready', function() {
            var globalNav = new navSet($$('.siloNav img'), $$('.siloNav a'), { url: document.location });
        }); */
        //]]>
    </script> 
</head>
<body class="<?php print $body_classes; ?>" id="home">

    <div class="clearfix pageLayout">
        <div id="masthead" class="clearfix">
            <div id="logo">
                <a href="http://www.pri-med.com/PMO/Home.aspx">
                    <img alt='Pri-Med: Knowledge That Touches Patients' src="<?php print $img_path; ?>/img/icon_logo.gif" /></a>
            </div>
        </div>
        <div class="clearfix siloNav">
            <ul class="clearfix">
                <li class="regular"><a id="A1" href="http://www.pri-med.com/PMO/Home.aspx">
                    <img alt="Home" src="<?php print $img_path; ?>/img/nav/home_off.gif" /></a></li>
                <li class="regular"><a id="Meetings" href="http://www.pri-med.com/PMO/LiveCME.aspx">
                    <img alt="Meetings" src="<?php print $img_path; ?>/img/nav/meetings_off.gif" /></a></li>
                <li class="regular"><a id="OnlineActivities" href="http://www.pri-med.com/PMO/AllActivities.aspx">
                    <img alt="Online Activities" src="<?php print $img_path; ?>/img/nav/onlineactivities_off.gif" /></a></li>
                <li class="regular"><a id="MedcialNews" href="http://www.pri-med.com/PMO/MedicalNewsLanding.aspx">
                    <img alt="Medical News" src="<?php print $img_path; ?>/img/nav/medicalnews_off.gif" /></a></li>
                <li class="regular"><a id="Resources" href="http://www.pri-med.com/PMO/Resources.aspx">
                    <img alt="Resources" src="<?php print $img_path; ?>/img/nav/resources_off.gif" /></a></li>
                <li class="regular"><a id="IndustryInformation" href="http://www.pri-med.com/PMO/IndustryInformation.aspx">
                    <img alt="Industry Information" src="<?php print $img_path; ?>/img/nav/industryinformation_off.gif" /></a></li>
                <li class="regular"><a id="Community" onClick="return false;" href="/PMO/Community.aspx"
                    onmouseover="mopen('m1')" onMouseOut="mclosetime()">
                    <img id="communityImg" alt="Community" src="<?php print $img_path; ?>/img/nav/community_off.gif" /></a>

                    <script type="text/javascript">
                        drawMenu();
                    </script>

                </li>
            </ul>
        </div>
        <div>
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
        </div>
        <div class="foot">
            <div id="siloNav" class="bot"></div>
            <div id="footer" class="clearfix nav">
                <ul>
                    <li>&copy;&nbsp;2012&nbsp;DBC Pri-Med LLC</li>
                    <li><a href="http://www.pri-med.com/PMO/PrivacyPolicy.aspx">Privacy &amp; Ethics Policy</a></li>
                    <li><a href="http://www.pri-med.com/PMO/TermsofUse.aspx">Terms of Use</a></li>
                    <li><a href="http://www.pri-med.com/industry/">For Exhibitors</a></li>
                    <li><a href="http://www.pmicme.org/">pmiCME</a></li>
                    <li><a href="http://www.pri-med.com/PMO/ContactUs.aspx">Contact Us</a></li>
					<li><a href="http://www.facebook.com/PriMedAlerts"><img border="0" src="<?php print $img_path ?>/img/facebookicon.jpg"></a>&nbsp;&nbsp;&nbsp;
					<a href="http://twitter.com/PriMed_Alerts"><img border="0" src="<?php print $img_path ?>/img/twittericon.jpg"></a>&nbsp;&nbsp;&nbsp;
					<a href="https://www.linkedin.com/uas/login?session_redirect=http%3A%2F%2Fwww%2Elinkedin%2Ecom%2FpostLogin%3Fsession_rikey%3D93rtzWCKQvI-28akL8YLwP7GinuL6YkB7Dofi_ErUoh3hq35Hn08Rx4wUaNBsKHwgMYKBiNr7qSn6c0LuLU9iR3we1irD1caNz-%26l%3Dhttp%253A%252F%252Fwww%252Elinkedin%252Ecom%252FgroupInvitation%253Fgid%253D1565217%2526sharedKey%253D5CA33A2F843F%2526ut%253D1hJR7TiAaIzR41%26id%3D0%26b%3Def069203-5443-4b92-a415-a7d11dd22353%26h%3Dffvj%26m%3DGET"><img border="0" src="<?php print $img_path ?>/img/linkedinicon.jpg"></a>&nbsp;&nbsp;&nbsp;
					<a href="http://www.youtube.com/user/PriMedAlerts"><img border="0" src="<?php print $img_path ?>/img/youtubeicon.jpg"></a>
                </ul>
            </div>
      <div id="footer-message">
       <center>
       <?php print $footer_message; ?><img src="<?php print $img_path ?>/img/footerlogo.png" alt="" class="center" />
       </center>
      </div>
            
        </div>
    </div>
</body>
</html>
