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
<div id="header-container">
    <div id="header">
        <div id="painlogo">
        </div>
       <!-- <div id="ddtopmenubar" class="mattblackmenu"> -->
       	<!--<div id="ddtopmenubar" class="painmenutop">
            
            <ul> 
            	<li><p> User <br /> Quick Links</p></li>           
              <li><a class="divider" href=""><img src="sites/all/themes/zen/paintheme/img/practitioner_icon.png" alt="Practitioner Icon" />Professionals</a></li>
              <li><a href=""><img src="sites/all/themes/zen/paintheme/img/consumer_icon.png" alt="Practitioner Icon" />Consumers</a></li>
            </ul>
    	   </div>-->
           <div class="quickLinks">
            	<p class="quiet small divider">User Quick<br/>Links<br/></p>

                <ul class="main">
                	<li><a href="" class="divider"></a></li>
                    <li><img id="quickimg" src="sites/all/themes/zen/paintheme/img/practitioner_icon.png" alt="Practioner Icon"/></li>
                	        
                    <li><a href=""> Professionals</a>

                	
                	<ul class="small">
                		<li><a href="http://www.pain.com/go/default/practitioner/cme-center/">CME Center</a></li>
                		<li><a href="http://www.pain.com/go/default/practitioner/medical-library/doctors-tool-kit/">Doctor's Tool Kit</a></li>
						<li><a href="http://www.pain.com/go/default/practitioner/medical-library/news-for-the-medical-practitioner/">Pain News</a></li>
						<li><a href="http://www.pain.com/go/default/practitioner/medical-library/">Medical Library</a></li>
                
						<li><a href="http://www.pain.com/go/default/practitioner/medical-library/government-actions/">Government Actions</a></li>

						<li><a href="http://www.pain.com/go/default/practitioner/pointcounter-point/">Point/Counterpoint</a></li>
						<li><a href="http://www.pain.com/go/default/practitioner/live-from-the-convention-floor/events-calendar/">Events Calendar</a></li>                
                		<li><a href="http://www.pain.com/go/default/practitioner/live-from-the-convention-floor/">Convention Floor Coverage</a></li>
                		<li><a href="http://www.pain.com/go/default/practitioner/exhibit-hall-3d/">3D Exhibit Hall</a></li>
						<li><a href="http://www.pain.com/go/default/practitioner/pain-clinics/">Pain Clinics</a></li>
                	</ul>
                    </li>

                   
			         	<li><a href="" class="divider"></a></li>
                   	<li><img id="quickimg" src="sites/all/themes/zen/paintheme/img/consumer_icon.png" alt="Consumer Icon"/></li>
                    <li><a class href=""> Consumers</a>
                    <ul class="small">
                    	<li><a href="http://www.pain.com/go/default/consumer/painful-conditions/">Painful Conditions</a></li>
    					<li><a href="http://www.pain.com/go/default/consumer/ask-the-expert/">Ask the Pain Doctor?</a></li>
    					<li><a href="http://www.pain.com/go/default/consumer/ask-the-pharmacist/">Ask the Pharmacist?</a></li>
    					<li><a href="http://www.pain.com/go/default/consumer/in-the-news/">Patient News</a></li>

    					<li><a href="http://www.pain.com/go/default/consumer/library/">Library</a></li>
    					<li><a href="http://www.pain.com/go/default/consumer/pain-clinics/">Pain Clinics</a></li>
    					<li><a href="http://www.pain.com/go/default/consumer/community-forum/">Community Forum</a></li>
    					<li><a href="http://www.pain.com/go/default/consumer/drug-store/">Drug Store</a></li>
    					<li><a href="http://www.pain.com/go/default/consumer/complementary-alternative-therapies/">CAM</a></li>
                	</ul>

                    </li>
            	</ul>
            </div>
                <div id="mainmenu">
   				<ul>
                	<li><a href="http://www.pain.com">HOME</a></li>
                    <li><a href="http://www.pain.com/go/default/practitioner/cme-center/">CE/CME</a></li>
                    <li><a href="http://www.pain.com/go/default/consumer/pain-clinics/">PAIN CLINICS</a></li>
                	<li><a href="http://www.pain.com/go/default/about-paincom/">ABOUT US</a></li>
                    <li><a href="http://www.pain.com/go/default/contact-us/">CONTACT US</a></li>

                   </ul> 
 		   </div>
        </div>
   
           

                           	
  	  </div>
  	
    
    
  
      
	
    
  	
   <div id="page"><div id="page-inner">


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



    <?php if ($closure_region): ?>
      <div id="closure-blocks"><?php print $closure_region; ?></div>
    <?php endif; ?>

    <?php print $closure; ?>

  </div></div> <!-- /#page-inner, /#page -->
  <div id="footermenu">

  <div id="footer-inner">
    <div id="footer-message">
     <center>
     <?php print $footer_message; ?><img src="<?php print $img_path ?>/img/footerlogo.png" alt="" class="center" />
     </center>
    </div>
  	</div></div> <!-- /#footer-inner, /#footer -->
  
<!--
<div id="footermenu">
	<div id="footwrap">
    	<span class="small white copyright">&copy; 2010 Pain.com. All rights reserved. </span>       
	</div>
	
</div>
-->
</body>
</html>
