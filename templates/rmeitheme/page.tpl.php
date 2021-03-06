<?php
  global $user;
  $img_path = base_path() . path_to_subtheme();
  $rmei_path = "http://www.rmei.com/";
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

<div id="rmeicontainer"> <div id="homeWrapper">
	  <div id="rmeiheader">
			<a id="rmeilogo" href="http://rmei.com"><img src="<?php print $img_path; ?>/img/rmei/top_RMEI-logo.jpg" alt="RMEI logo" title="RMEI" /></a>
      <table id="utilContainer" cellspacing="0" cellpadding="0">
          <tr>
              <td valign="bottom">
                  <ul id="utilities">
                      <li><a href="http://rmei.com/index.htm">Home</a></li><li>|</li><li><a href="http://rmei.com/index.php?option=com_content&view=article&id=121&Itemid=1131">
      
                          Contact Us</a></li><li>|</li><li>1.866.770.RMEI (7634)</li></ul>
              </td>
              <td height="18" class="searchInput">
                  <form action="<?php print $rmei_path?>search.htm" method="post">
                  <input style="float: left;display: block;" id="searchBox" type="text" name="Keywords" value="" />
                  <input type="image" src="<?php print $img_path; ?>/img/rmei/search_btn.gif" style="display: block;" />
                  </form>
              </td>
      
          </tr>
      </table>
      <div id="topNav">    
      <!--START MENU-->
      <div id="ctl00_Header1_HorizontalNavigation1_Menu" class="menu RadMenu_Default ">
      	<span id="ctl00_Header1_HorizontalNavigation1_MenuStyleSheetHolder" style="display:none;"></span>
      	<ul class="horizontal rootGroup">
      		<li class="item first"><a href="<?php print $rmei_path?>allergy-immunology-hereditary-angioedema.htm" id="ctl00_Header1_HorizontalNavigation1_Menu_m0" class="link"><img alt="" src="<?php print $img_path?>/img/rmei/topnav_therapeutic_off.gif" class="leftImage" /><span class="text"></span></a>
        		<div class="slide">
        			<ul class="vertical group level1">
        				<li class="item first"><a href="<?php print $rmei_path?>allergy-immunology-hereditary-angioedema.htm" id="ctl00_Header1_HorizontalNavigation1_Menu_m0_m0" class="link"><span class="text">Allergy / Immunology</span></a>
          				<div class="slide">
          					<ul class="vertical group level2">
          						<li class="item first"><a href="<?php print $rmei_path?>allergy-immunology-hereditary-angioedema.htm" id="ctl00_Header1_HorizontalNavigation1_Menu_m0_m0_m0" class="link"><span class="text">Hereditary Angioedema</span></a></li><li class="item last"><a href="<?php print $rmei_path?>allergy-immunology-angioedema.htm" id="ctl00_Header1_HorizontalNavigation1_Menu_m0_m0_m1" class="link"><span class="text">Angioedema</span></a></li>
          					</ul>
          				</div>
        				</li>
        				<li class="item"><a href="<?php print $rmei_path?>endocrinology-diabetes.htm" id="ctl00_Header1_HorizontalNavigation1_Menu_m0_m1" class="link"><span class="text">Endocrinology</span></a>
        					<div class="slide">
          					<ul class="vertical group level2">
          						<li class="item first last"><a href="<?php print $rmei_path?>endocrinology-diabetes.htm" id="ctl00_Header1_HorizontalNavigation1_Menu_m0_m1_m0" class="link"><span class="text">Diabetes</span></a></li>
          					</ul>
        					</div>
        				</li>
        				<li class="item"><a href="<?php print $rmei_path?>gastroenterology-clostridium-difficile-infection.htm" id="ctl00_Header1_HorizontalNavigation1_Menu_m0_m2" class="link"><span class="text">Gastroenterology</span></a>
        					<div class="slide">
          					<ul class="vertical group level2">
          						<li class="item first last"><a href="<?php print $rmei_path?>gastroenterology-inflammatory-bowel-diseases.htm" id="ctl00_Header1_HorizontalNavigation1_Menu_m0_m2_m0" class="link"><span class="text">Inflammatory Bowel Diseases</span></a></li>
          					</ul>
        					</div>
        			  </li>
        			  <li class="item"><a href="<?php print $rmei_path?>hematology-oncology-glioblastoma.htm" id="ctl00_Header1_HorizontalNavigation1_Menu_m0_m3" class="link"><span class="text">Hematology / Oncology</span></a>
        			  	<div class="slide">
          					<ul class="vertical group level2">
          						<li class="item first"><a href="<?php print $rmei_path?>hematology-oncology-glioblastoma.htm" id="ctl00_Header1_HorizontalNavigation1_Menu_m0_m3_m0" class="link"><span class="text">Glioblastoma</span></a></li><li class="item"><a href="<?php print $rmei_path?>hematology-oncology-breasr-cancer.htm" id="ctl00_Header1_HorizontalNavigation1_Menu_m0_m3_m1" class="link"><span class="text">Breast Cancer</span></a></li><li class="item"><a href="<?php print $rmei_path?>hematology-oncology-leukemia.htm" id="ctl00_Header1_HorizontalNavigation1_Menu_m0_m3_m2" class="link"><span class="text">Leukemia</span></a></li><li class="item"><a href="<?php print $rmei_path?>hematology-oncology-lymphoma.htm" id="ctl00_Header1_HorizontalNavigation1_Menu_m0_m3_m3" class="link"><span class="text">Lymphoma</span></a></li><li class="item"><a href="<?php print $rmei_path?>hematology-oncology-myeloma.htm" id="ctl00_Header1_HorizontalNavigation1_Menu_m0_m3_m4" class="link"><span class="text">Myeloma</span></a></li><li class="item"><a href="<?php print $rmei_path?>hematology-oncology-pediatric-hematologic-malignacies.htm" id="ctl00_Header1_HorizontalNavigation1_Menu_m0_m3_m5" class="link"><span class="text">Pediatric Hematologic Malignancies</span></a></li><li class="item last"><a href="<?php print $rmei_path?>hematology-oncology-prostate-cancer.htm" id="ctl00_Header1_HorizontalNavigation1_Menu_m0_m3_m6" class="link"><span class="text">Prostate Cancer</span></a></li>
          					</ul>
        					</div>
        			  </li>
        			  <li class="item"><a href="<?php print $rmei_path?>infectious-diseases-clostridium-difficile-infection.htm" id="ctl00_Header1_HorizontalNavigation1_Menu_m0_m4" class="link"><span class="text">Infectious Diseases</span></a>
        			  	<div class="slide">
        						<ul class="vertical group level2">
        							<li class="item first"><a href="<?php print $rmei_path?>infectious-diseases-clostridium-difficile-infection.htm" id="ctl00_Header1_HorizontalNavigation1_Menu_m0_m4_m0" class="link"><span class="text"><em>Clostridium difficile</em> Infection</span></a></li><li class="item"><a href="<?php print $rmei_path?>infectious-diseases-cmv-infection.htm" id="ctl00_Header1_HorizontalNavigation1_Menu_m0_m4_m1" class="link"><span class="text">CMV Infection</span></a></li><li class="item last"><a href="<?php print $rmei_path?>infectious-diseases-invasive-fungal-infections.htm" id="ctl00_Header1_HorizontalNavigation1_Menu_m0_m4_m2" class="link"><span class="text">Invasive Fungal Infections</span></a></li>
        						</ul>
        					</div>
        				</li>
        				<li class="item last"><a href="<?php print $rmei_path?>transplant-solid-organ-transplantation.htm" id="ctl00_Header1_HorizontalNavigation1_Menu_m0_m5" class="link"><span class="text">Transplant</span></a>
        					<div class="slide">
          					<ul class="vertical group level2">
          						<li class="item first"><a href="<?php print $rmei_path?>transplant-solid-organ-transplantation.htm" id="ctl00_Header1_HorizontalNavigation1_Menu_m0_m5_m0" class="link"><span class="text">Solid Organ Transplantation</span></a></li><li class="item last"><a href="<?php print $rmei_path?>transplant-stem-cell-transplantation.htm" id="ctl00_Header1_HorizontalNavigation1_Menu_m0_m5_m1" class="link"><span class="text">Stem Cell Transplantation</span></a></li>
          					</ul>
        					</div>
        				</li>
        			</ul>
        		</div>
      		</li>
      		<li class="item"><a href="<?php print $rmei_path?>continuing-education-opportunities-regional-live-meetings.htm" id="ctl00_Header1_HorizontalNavigation1_Menu_m1" class="link"><img alt="" src="<?php print $img_path?>/img/rmei/topnav_education_off.gif" class="leftImage" /><span class="text"></span></a>
      			<div class="slide">
        			<ul class="vertical group level1">
        				<li class="item first"><a href="<?php print $rmei_path?>continuing-education-opportunities-regional-live-meetings.htm" id="ctl00_Header1_HorizontalNavigation1_Menu_m1_m0" class="link"><span class="text">Regional Live Meetings</span></a></li><li class="item"><a href="<?php print $rmei_path?>continuing-education-opportunities-online-activities.htm" id="ctl00_Header1_HorizontalNavigation1_Menu_m1_m1" class="link"><span class="text">Online Activities</span></a></li><li class="item"><a href="<?php print $rmei_path?>continuing-education-opportunities-podcasts.htm" id="ctl00_Header1_HorizontalNavigation1_Menu_m1_m2" class="link"><span class="text">Virtual Lectures/Podcasts</span></a></li><li class="item"><a href="<?php print $rmei_path?>continuing-education-opportunities-symposia.htm" id="ctl00_Header1_HorizontalNavigation1_Menu_m1_m3" class="link"><span class="text">Symposia</span></a></li><li class="item"><a href="<?php print $rmei_path?>continuing-education-opportunities-teleconferences-webcasts.htm" id="ctl00_Header1_HorizontalNavigation1_Menu_m1_m4" class="link"><span class="text">Teleconferences/Webcasts</span></a></li><li class="item last"><a href="<?php print $rmei_path?>continuing-education-opportunities-print-materials.htm" id="ctl00_Header1_HorizontalNavigation1_Menu_m1_m5" class="link"><span class="text">Print Materials</span></a></li>
        			</ul>
      			</div>
      		</li>
      		<li class="item"><a href="<?php print $rmei_path?>rmei-difference-therapeutic-expertise.htm" id="ctl00_Header1_HorizontalNavigation1_Menu_m2" class="link"><img alt="" src="<?php print $img_path?>/img/rmei/topnav_difference_off.gif" class="leftImage" /><span class="text"></span></a>
      			<div class="slide">
      				<ul class="vertical group level1">
      					<li class="item first"><a href="<?php print $rmei_path?>rmei-difference-therapeutic-expertise.htm" id="ctl00_Header1_HorizontalNavigation1_Menu_m2_m0" class="link"><span class="text">Therapeutic Expertise</span></a></li><li class="item"><a href="<?php print $rmei_path?>rmei-difference-participant-recruitment-and-retention.htm" id="ctl00_Header1_HorizontalNavigation1_Menu_m2_m1" class="link"><span class="text">Participant Recruitment & Retention</span></a></li><li class="item"><a href="<?php print $rmei_path?>rmei-difference-educational-design.htm" id="ctl00_Header1_HorizontalNavigation1_Menu_m2_m2" class="link"><span class="text">Educational Design</span></a></li><li class="item"><a href="<?php print $rmei_path?>rmei-difference-sustainable-outcomes.htm" id="ctl00_Header1_HorizontalNavigation1_Menu_m2_m3" class="link"><span class="text">Sustainable Outcomes</span></a></li><li class="item last"><a href="<?php print $rmei_path?>rmei-difference-commitment-to-compliance.htm" id="ctl00_Header1_HorizontalNavigation1_Menu_m2_m4" class="link"><span class="text">Commitment to Compliance</span></a></li>
      				</ul>
      			</div>
      		</li>
      		<li class="item last"><a href="<?php print $rmei_path?>about-us-company.htm" id="ctl00_Header1_HorizontalNavigation1_Menu_m3" class="link"><img alt="" src="<?php print $img_path?>/img/rmei/topnav_about_off.gif" class="leftImage" /><span class="text"></span></a>
        		<div class="slide">
        			<ul class="vertical group level1">
        				<li class="item first"><a href="<?php print $rmei_path?>about-us-company.htm" id="ctl00_Header1_HorizontalNavigation1_Menu_m3_m0" class="link"><span class="text">Company</span></a></li><li class="item"><a href="<?php print $rmei_path?>about-us-accredited-providers.htm" id="ctl00_Header1_HorizontalNavigation1_Menu_m3_m1" class="link"><span class="text">Accredited Providers</span></a></li><li class="item"><a href="<?php print $rmei_path?>about-us-news.htm" id="ctl00_Header1_HorizontalNavigation1_Menu_m3_m2" class="link"><span class="text">In the News</span></a></li><li class="item"><a href="<?php print $rmei_path?>/about-us-careers.htm" id="ctl00_Header1_HorizontalNavigation1_Menu_m3_m3" class="link"><span class="text">Careers</span></a></li><li class="item"><a href="<?php print $rmei_path?>about-us-contact-us.htm" id="ctl00_Header1_HorizontalNavigation1_Menu_m3_m4" class="link"><span class="text">Contact Us</span></a></li><li class="item last"><a href="<?php print $rmei_path?>about-us-join-our-network.htm" id="ctl00_Header1_HorizontalNavigation1_Menu_m3_m5" class="link"><span class="text">Join Our Network</span></a></li>
        			</ul>
        		</div>
      		</li>
      	</ul>
      	<input type="hidden" id="ctl00_Header1_HorizontalNavigation1_Menu_Hidden" name="ctl00$Header1$HorizontalNavigation1$Menu" /><script type="text/javascript">window["ctl00_Header1_HorizontalNavigation1_Menu"] = new RadMenu("ctl00_Header1_HorizontalNavigation1_Menu");window["ctl00_Header1_HorizontalNavigation1_Menu"].Initialize({"Skin":"Default","Enabled":true},{"ctl00_Header1_HorizontalNavigation1_Menu_m0":{"ImageOverUrl":"<?php print $img_path?>/img/rmei/topnav_therapeutic_on.gif"},"ctl00_Header1_HorizontalNavigation1_Menu_m0_m0":{"GroupSettings":{"OffsetY":-1}},"ctl00_Header1_HorizontalNavigation1_Menu_m0_m1":{"GroupSettings":{"OffsetY":-1}},"ctl00_Header1_HorizontalNavigation1_Menu_m0_m2":{"GroupSettings":{"OffsetY":-1}},"ctl00_Header1_HorizontalNavigation1_Menu_m0_m3":{"GroupSettings":{"OffsetY":-1}},"ctl00_Header1_HorizontalNavigation1_Menu_m0_m4":{"GroupSettings":{"OffsetY":-1}},"ctl00_Header1_HorizontalNavigation1_Menu_m0_m5":{"GroupSettings":{"OffsetY":-1}},"ctl00_Header1_HorizontalNavigation1_Menu_m1":{"ImageOverUrl":"<?php print $img_path?>/img/rmei/topnav_education_on.gif"},"ctl00_Header1_HorizontalNavigation1_Menu_m1_m0":{"GroupSettings":{"OffsetY":-1}},"ctl00_Header1_HorizontalNavigation1_Menu_m1_m1":{"GroupSettings":{"OffsetY":-1}},"ctl00_Header1_HorizontalNavigation1_Menu_m1_m2":{"GroupSettings":{"OffsetY":-1}},"ctl00_Header1_HorizontalNavigation1_Menu_m1_m3":{"GroupSettings":{"OffsetY":-1}},"ctl00_Header1_HorizontalNavigation1_Menu_m1_m4":{"GroupSettings":{"OffsetY":-1}},"ctl00_Header1_HorizontalNavigation1_Menu_m1_m5":{"GroupSettings":{"OffsetY":-1}},"ctl00_Header1_HorizontalNavigation1_Menu_m1_m6":{"GroupSettings":{"OffsetY":-1}},"ctl00_Header1_HorizontalNavigation1_Menu_m2":{"ImageOverUrl":"<?php print $img_path?>/img/rmei/topnav_difference_on.gif"},"ctl00_Header1_HorizontalNavigation1_Menu_m2_m0":{"GroupSettings":{"OffsetY":-1}},"ctl00_Header1_HorizontalNavigation1_Menu_m2_m1":{"GroupSettings":{"OffsetY":-1}},"ctl00_Header1_HorizontalNavigation1_Menu_m2_m2":{"GroupSettings":{"OffsetY":-1}},"ctl00_Header1_HorizontalNavigation1_Menu_m2_m3":{"GroupSettings":{"OffsetY":-1}},"ctl00_Header1_HorizontalNavigation1_Menu_m2_m4":{"GroupSettings":{"OffsetY":-1}},"ctl00_Header1_HorizontalNavigation1_Menu_m3":{"ImageOverUrl":"<?php print $img_path?>/img/rmei/topnav_about_on.gif"},"ctl00_Header1_HorizontalNavigation1_Menu_m3_m0":{"GroupSettings":{"OffsetY":-1}},"ctl00_Header1_HorizontalNavigation1_Menu_m3_m1":{"GroupSettings":{"OffsetY":-1}},"ctl00_Header1_HorizontalNavigation1_Menu_m3_m2":{"GroupSettings":{"OffsetY":-1}},"ctl00_Header1_HorizontalNavigation1_Menu_m3_m3":{"GroupSettings":{"OffsetY":-1}},"ctl00_Header1_HorizontalNavigation1_Menu_m3_m4":{"GroupSettings":{"OffsetY":-1}},"ctl00_Header1_HorizontalNavigation1_Menu_m3_m5":{"GroupSettings":{"OffsetY":-1}}});</script>
      </div><!--END MENU-->
      </div><!-- topNav -->      
		</div> <!-- rmeiheader -->
		
		<div id="homeMain">
			<div id="homeTop">
			
		

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


  </div></div> <!-- /#page-inner, /#page -->
  
  	</div> <!-- homeTop -->
    <div id="homeBottom">
  				<div class="clear"></div>
  			</div>
  
  </div> <!-- homeMain -->
  <div id="rmeifooter">
			<ul>
				<li><a href="http://rmei.com/index.php?option=com_content&view=article&id=121&Itemid=1131">Contact Us</a></li>
				<li>|</li>
				<li><a href="http://rmei.com/copyright.htm">Copyright</a></li>
				<li>|</li>
				<li><a href="http://rmei.com/privacy-policy.htm">Privacy Policy</a></li>
				<li>|</li>
				<li><a href="http://rmei.com/sitemap.htm">Site Map</a></li>
			</ul>
		</div>
		<div class="clear"></div>
  
  </div> <!-- homeWrapper -->
	</div> <!-- rmeicontainer -->

</body>
</html>
