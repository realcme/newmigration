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


    <a name="top" id="navigation-top"></a>

    <div id="headerwrap"><div id="header"><div id="header-inner" class="clear-block">
<div id="textjh">
	Presented by the Johns Hopkins University School of Medicine.<br/>
	</div>
	<div id="logojh">
	
		</div>
      <?php if ($header): ?>
        <div id="header-blocks">
          <?php print $header; ?>
        </div> <!-- /#header-blocks -->
      <?php endif; ?>

    </div></div></div> <!-- /#header-inner,
	background: url('sites/all/themes/zen/jhasimtheme/img/mainmenu.gif') repeat-x; /#header -->
			<div id="menubar">
				<div id="menuwrap">

	<table width="100%" height="35" cellspacing="0" cellpadding="0" border="0" class="mainmenubg">
	                    <tbody><tr>
	                      <td valign="middle" colspan="2"><script src="sites/all/themes/zen/jhasimtheme/asimmenu.js" type="text/javascript"></script><!--%%%%%%%%%%%% QuickMenu Styles [Keep in head for full validation!] %%%%%%%%%%%--><style type="text/css">/*!!!!!!!!!!! QuickMenu Core CSS [Do Not Modify!] !!!!!!!!!!!!!*/.qmmc .qmdivider{display:block;font-size:1px;border-width:0px;border-style:solid;position:relative;z-index:1;}.qmmc .qmdividery{float:left;width:0px;}.qmmc .qmtitle{display:block;cursor:default;white-space:nowrap;position:relative;z-index:1;}.qmclear {font-size:1px;height:0px;width:0px;clear:left;line-height:0px;display:block;float:none !important;}.qmmc {position:relative;zoom:1;z-index:10;}.qmmc a, .qmmc li {float:left;display:block;white-space:nowrap;position:relative;z-index:1;}.qmmc div a, .qmmc ul a, .qmmc ul li {float:none;}.qmsh div a {float:left;}.qmmc div{visibility:hidden;position:absolute;}.qmmc .qmcbox{cursor:default;display:block;position:relative;z-index:1;}.qmmc .qmcbox a{display:inline;}.qmmc .qmcbox div{float:none;position:static;visibility:inherit;left:auto;}/*!!!!!!!!!!! QuickMenu Styles [Please Modify!] !!!!!!!!!!!*//* QuickMenu 0 */#qm0{background-color:#666666;border-width:0px 0px;border-style:solid;border-color:#cccccc;}#qm0 a{padding:8px 1.30em 8px;color:#ffffff;font-family:Arial;font-size:0.82em;text-decoration:none;font-weight:bold;font-variant:normal;} body #qm0 .qmactive, body #qm0 .qmactive:hover{text-decoration:none;}#qm0 div{padding:8px;margin:1px 0px 0px;background-color:#666;border-width:0px;border-style:none;}#qm0 div a{padding:2px 40px 2px 5px;background-color:transparent;color:#ffffff;font-size:11px;font-variant:normal;border-width:1px;border-style:solid;border-color:#666666;}#qm0 div a:hover{color:#f2c30d;text-decoration:underline;z-index:-1;}#qm0 div a:hover{color:#a25551;text-decoration:none;}body #qm0 div .qmactive, body #qm0 div .qmactive:hover{background-color:#ffffff;color:#a25551;text-decoration:none;border-color:#525252;}#qm0 .qmtitle{margin:2px 5px 4px;color:#333333;font-family:Arial;font-size:11px;font-weight:bold;}#qm0 .qmdividerx{border-top-width:1px;margin:5px 4px;border-color:#525252;}ul#qm0 ul .qmparent{background-image:url(qmimages/arrow_10.gif);}ul#qm0 .qmparent{background-image:url(qmimages/arrow_7.gif);background-repeat:no-repeat;background-position:95% 55%;}ul#qm0 ul li:hover &gt; a.qmparent{background-color:#ffffff;color:#333333;text-decoration:none;border-color:#525252;}ul#qm0 ul{margin:0px;background-color:#666666;border-width:1px;border-style:solid;border-color:#525252;}ul#qm0 ul a{padding:2px 40px 2px 5px;}ul#qm0 a{padding:5px 20px;}ul#qm0 ul ul{margin:0px 0px 0px -1px;}div#qm0 div div{margin:0px 0px 0px -1px;}div#qm0 div div a.qmc_b, ul#qm0 ul ul a.qmc_b{color:#ff0000;}</style><style type="text/css">.qmfv{visibility:visible !important;}.qmfh{visibility:hidden !important;}</style><script type="text/javascript">qmad=new Object();qmad.bvis="";qmad.bhide="";</script><style type="text/css">.qmvibcssmenu{}#qm0 .qm-ibcss-static span{background-color:#ffffff;border-color:#cccccc;}div#qm0  .qm-ibcss-hover span{background-color:#a25551;border-color:#525252;}body div#qm0  .qm-ibcss-active span{background-color:#a25551;border-color:#525252;}#qm0 div .qm-ibcss-static span{background-color:#666666;border-color:#525252;}div#qm0  div .qm-ibcss-hover span{background-color:#666666;border-color:#525252;}body div#qm0  div .qm-ibcss-active span{background-color:#a25551;border-color:#FFFFFF;}</style><div class="qmmc" id="qm0" style="z-index: 11;"><a title="Home Page" href="http://jhasim.com/index.cfm">HOME </a><a title="View CME Programs" href="http://jhasim.com/template.cfm?TEMPLATE=include_viewprograms.cfm" class="qmparent"><span class="qm-ibcss-static" style="display: block; position: relative; font-size: 1px; line-height: 0px; z-index: 1; left: 44px; top: 16px;" qmvbefore="1" isibulletcss="1"></span>CME ACTIVITIES</a><div style="z-index: 21; left: 64px; top: 30px; opacity: 0;" class=""><span class="qmrcorner" style="position: absolute; display: block; top: 0px; left: 0px; width: 294px; height: 461px; visibility: inherit;"><span style="background-color:#525252;display:block;font-size:1px;overflow:hidden;line-height:0px;height:1px;margin-left:0px;margin-right:9px;"></span><span style="background-color:#666666;border-color:#525252;border-width:0px 3px 0px 1px;border-style:solid;display:block;overflow:hidden;font-size:1px;line-height:0px;height:1px;margin-left:0px;margin-right:6px;"></span><span style="background-color:#666666;border-color:#525252;border-width:0px 2px 0px 1px;border-style:solid;display:block;overflow:hidden;font-size:1px;line-height:0px;height:1px;margin-left:0px;margin-right:4px;"></span><span style="background-color:#666666;border-color:#525252;border-width:0px 1px 0px 1px;border-style:solid;display:block;overflow:hidden;font-size:1px;line-height:0px;height:1px;margin-left:0px;margin-right:3px;"></span><span style="background-color:#666666;border-color:#525252;border-width:0px 1px 0px 1px;border-style:solid;display:block;overflow:hidden;font-size:1px;line-height:0px;height:2px;margin-left:0px;margin-right:2px;"></span><span style="background-color:#666666;border-color:#525252;border-width:0px 1px 0px 1px;border-style:solid;display:block;overflow:hidden;font-size:1px;line-height:0px;height:3px;margin-left:0px;margin-right:1px;"></span><span style="background-color: rgb(102, 102, 102); border-color: rgb(82, 82, 82); overflow: hidden; line-height: 0px; font-size: 1px; display: block; border-style: solid; border-width: 0px 1px; height: 443px;" qmrcmid="1"></span><span style="background-color:#666666;border-color:#525252;border-width:0px 1px 0px 1px;border-style:solid;display:block;overflow:hidden;font-size:1px;line-height:0px;height:3px;margin-left:1px;margin-right:1px;"></span><span style="background-color:#666666;border-color:#525252;border-width:0px 1px 0px 1px;border-style:solid;display:block;overflow:hidden;font-size:1px;line-height:0px;height:2px;margin-left:2px;margin-right:2px;"></span><span style="background-color:#666666;border-color:#525252;border-width:0px 1px 0px 1px;border-style:solid;display:block;overflow:hidden;font-size:1px;line-height:0px;height:1px;margin-left:3px;margin-right:3px;"></span><span style="background-color:#666666;border-color:#525252;border-width:0px 2px 0px 2px;border-style:solid;display:block;overflow:hidden;font-size:1px;line-height:0px;height:1px;margin-left:4px;margin-right:4px;"></span><span style="background-color:#666666;border-color:#525252;border-width:0px 3px 0px 3px;border-style:solid;display:block;overflow:hidden;font-size:1px;line-height:0px;height:1px;margin-left:6px;margin-right:6px;"></span><span style="background-color:#525252;display:block;font-size:1px;overflow:hidden;line-height:0px;height:1px;margin-left:9px;margin-right:9px;"></span></span><a title="Addiction Medicine" href="http://jhasim.com/template.cfm?TEMPLATE=include_viewzone.cfm&amp;ID=59&amp;pageName=Zone-Addiction%20Medicine">Addiction Medicine</a><a title="Adolescent Medicine/Pediatrics" href="http://jhasim.com/template.cfm?TEMPLATE=include_viewzone.cfm&amp;ID=28&amp;pageName=Zone-Adolescent%20Medicine%20/%20Pediatrics">Adolescent Medicine/Pediatrics</a><a title="Cardiology" href="http://jhasim.com/template.cfm?TEMPLATE=include_viewzone.cfm&amp;ID=9&amp;pageName=Zone-Cardiology">Cardiology</a><a title="Critical Care" href="http://jhasim.com/template.cfm?TEMPLATE=include_viewzone.cfm&amp;ID=20&amp;pageName=Zone-Critical%20Care/Emergency%20Medicine">Critical Care</a><a title="Dermatology" href="http://jhasim.com/template.cfm?TEMPLATE=include_viewzone.cfm&amp;ID=19&amp;pageName=Zone-Dermatology">Dermatology</a><a title="Endocrinology/Diabetes" href="http://jhasim.com/template.cfm?TEMPLATE=include_viewzone.cfm&amp;ID=21&amp;pageName=Zone-Endocrinology/Diabetes">Endocrinology/Diabetes</a><a title="Gastroenterology" href="http://jhasim.com/template.cfm?TEMPLATE=include_viewzone.cfm&amp;ID=22&amp;pageName=Zone-Gastroenterology">Gastroenterology</a><a title="Hospitalists" target="_blank" href="http://www.jhcme.com/site/index.cfm">Hospitalists</a><a title="Infectious Diseases" href="http://jhasim.com/template.cfm?TEMPLATE=include_viewzone.cfm&amp;ID=8&amp;pageName=Zone-Infectious%20Diseases">Infectious Diseases</a><a title="Interventional Cardiology/Electrophysiology" href="http://jhasim.com/template.cfm?TEMPLATE=include_viewzone.cfm&amp;ID=23&amp;pageName=Zone-Interventional%20Cardiology/Electrophysiology">Interventional Cardiology/Electrophysiology</a><a title="Managed Care" href="http://jhasim.com/template.cfm?TEMPLATE=include_viewzone.cfm&amp;ID=24&amp;pageName=Zone-Managed%20Care">Managed Care</a><a title="Musculoskeletal" href="http://jhasim.com/template.cfm?TEMPLATE=include_viewzone.cfm&amp;ID=74&amp;pageName=Zone-Musculoskeletal">Musculoskeletal</a><a title="Nephrology" href="http://jhasim.com/template.cfm?TEMPLATE=include_viewzone.cfm&amp;ID=25&amp;pageName=Zone-Nephrology">Nephrology</a><a title="Neurology" href="http://jhasim.com/template.cfm?TEMPLATE=include_viewzone.cfm&amp;ID=17&amp;pageName=Zone-Neurology">Neurology</a><a title="Oncology/Hematology" href="http://jhasim.com/template.cfm?TEMPLATE=include_viewzone.cfm&amp;ID=26&amp;pageName=Zone-Oncology/Hematology">Oncology/Hematology</a><a title="Ophthalmology" target="_blank" href="http://jhasio.com/template.cfm?TEMPLATE=include_viewprograms.cfm">Ophthalmology</a><a title="Pain Management" href="http://jhasim.com/template.cfm?TEMPLATE=include_viewzone.cfm&amp;ID=27&amp;pageName=Zone-Pain%20Management">Pain Management</a><a title="Psychiatry" href="http://jhasim.com/template.cfm?TEMPLATE=include_viewzone.cfm&amp;ID=29&amp;pageName=Zone-Psychiatry">Psychiatry</a><a title="Pulmonary Medicine" href="http://jhasim.com/template.cfm?TEMPLATE=include_viewzone.cfm&amp;ID=1&amp;pageName=Zone-Pulmonary%20Medicine">Pulmonary Medicine</a><a title="Rheumatology" href="http://jhasim.com/template.cfm?TEMPLATE=include_viewzone.cfm&amp;ID=60&amp;pageName=Zone-Rheumatology">Rheumatology</a><a title="Surgery/Transplantation" href="http://jhasim.com/template.cfm?TEMPLATE=include_viewzone.cfm&amp;ID=30&amp;pageName=Zone-Surgery/Transplantation">Surgery/Transplantation</a><a title="Urology" href="http://jhasim.com/template.cfm?TEMPLATE=include_viewzone.cfm&amp;ID=31&amp;pageName=Zone-Urology">Urology</a><a title="Women's Health" href="http://jhasim.com/template.cfm?TEMPLATE=include_viewzone.cfm&amp;ID=13&amp;pageName=Zone-Women's%20Health">Women's Health</a></div><a title="General Information" href="http://jhasim.com" class="qmparent"><span class="qm-ibcss-static" style="display: block; position: relative; font-size: 1px; line-height: 0px; z-index: 1; left: 41px; top: 16px;" qmvbefore="1" isibulletcss="1"></span>GENERAL INFO</a><div style="z-index: 21;"><span class="qmtitle"></span><a title="Accreditation" href="http://jhasim.com/template.cfm?TEMPLATE=include_accreditation.cfm&amp;PageName=Accreditation">Accreditation</a><a title="Privacy Policy" href="http://jhasim.com/template.cfm?TEMPLATE=include_privacypolicy.cfm&amp;PageName=Privacy%20Policy">Privacy Policy</a><a title="CME Licensing" href="http://jhasim.com/template.cfm?TEMPLATE=include_cmelicensing.cfm&amp;PageName=CME%20Licensing">CME Licensing</a><a title="State CME Requirements" href="http://jhasim.com/template.cfm?TEMPLATE=phys_cme_req.cfm&amp;PageName=State%20CME%20Requirements">State CME Requirements</a></div><a title="About Us" href="http://jhasim.com" class="qmparent"><span class="qm-ibcss-static" style="display: block; position: relative; font-size: 1px; line-height: 0px; z-index: 1; left: 28px; top: 16px;" qmvbefore="1" isibulletcss="1"></span>ABOUT US</a><div style="z-index: 21;"><span class="qmtitle"></span><a title="About Us" href="http://jhasim.com/template.cfm?TEMPLATE=include_aboutus.cfm&amp;PageName=About%20Us">Who We Are</a><a title="Contact Us" href="http://jhasim.com/template.cfm?TEMPLATE=include_contactus.cfm">Contact Us</a><a title="E-Mail JHASIM Webmaster" href="mailto:webmaster@jhasim.com">Contact Support</a><a title="View FAQ" href="http://jhasim.com/template.cfm?TEMPLATE=include_help.cfm">View FAQ</a></div><a title="View Account Information" href="http://jhasim.com/template.cfm?TEMPLATE=include_account.cfm&amp;mode=info" class="qmparent"><span class="qm-ibcss-static" style="display: block; position: relative; font-size: 1px; line-height: 0px; z-index: 1; left: 37px; top: 16px;" qmvbefore="1" isibulletcss="1"></span>MY ACCOUNT</a><div style="z-index: 21;"><a title="Account Information" href="http://jhasim.com/template.cfm?TEMPLATE=include_account.cfm&amp;mode=info">Account Information</a><a title="Check CME History" href="http://jhasim.com/template.cfm?TEMPLATE=include_account.cfm&amp;mode=ce">Download CME Certificates</a><span class="qmdivider qmdividerx"></span>
	
	
<!--	<a title="E-Mail JHASIM Webmaster" href="mailto:webmaster@jhasim.com">Contact Support</a></div><a title="E-Mail JHASIM Webmaster" href="mailto:webmaster@jhasim.com">CONTACT SUPPORT</a>
	--><script type="text/javascript">qm_create(0,false,0,500,false,false,false,false,false);</script></div></td>
	                    </tr>
	                  </tbody></table>
								</div>
				</div>

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

</body>
</html>
