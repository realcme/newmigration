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
        <div id="spirelogo">
		        <a href="http://spirelearning.com/index.php"><img src="<?php print $img_path ?>/img/00_spire_logo.jpg" alt="SPIRE LEARNING HOME" /></a>
		    </div><!-- close logo -->
    		<div id="spirenav">			
    			<ul>
    				<li id="home"><a href="http://spirelearning.com/index.php">HOME</a></li>
    				<li id="capabilities" ><a href="http://spirelearning.com/capabilities.php">CAPABILITIES</a></li>
    				<li id="process" ><a href="http://spirelearning.com/process.php">PROCESS</a></li>
    				<li id="about" ><a href="http://spirelearning.com/about.php">ABOUT</a></li>
    				<li id="showcase" style="display:none;"><a href="http://spirelearning.com/showcase.php">SHOWCASE</a></li>
    				<li id="cme_library" ><a href="http://spirelearning.com/cme_library.php">CME LIBRARY</a></li>
    				<li id="cme_archive" ><a href="http://spirelearning.com/cme_archive.php">CME ARCHIVE</a></li>
    				<li id="request_a_program" ><a href="http://spirelearning.com/request_a_program.php">REQUEST A PROGRAM</a></li>
    				<li id="calendar" ><a href="http://spirelearning.com/calendar.php">CALENDAR</a></li>
    				<li id="contact_us" ><a href="http://spirelearning.com/contact_us.php">CONTACT US</a></li>
    			</ul>
    		</div><!-- end spirenav -->
        
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
    
    	<div id="spirefooter">
    			<p><a href="http://spirelearning.com/index.php">HOME</a>&nbsp;|&nbsp;
    			<a href="http://spirelearning.com/capabilities.php">CAPABILITIES</a>&nbsp;|&nbsp;
    			<a href="http://spirelearning.com/process.php">PROCESS</a>&nbsp;|&nbsp;
    			<a href="http://spirelearning.com/about.php">ABOUT</a>&nbsp;|&nbsp;
    			
    			<span style="display:none;"><a href="showcase.php">SHOWCASE</a>&nbsp;|&nbsp;</span>
    			
    			<a href="http://spirelearning.com/cme_library.php">CME LIBRARY</a>&nbsp;|&nbsp;
    			<a href="http://spirelearning.com/cme_archive.php">CME ARCHIVE</a>&nbsp;|&nbsp;
    			<a href="http://spirelearning.com/request_a_program.php">REQUEST A PROGRAM</a>&nbsp;|&nbsp;
    			<a href="http://spirelearning.com/calendar.php">CALENDAR</a>&nbsp;|&nbsp;
    			<a href="http://spirelearning.com/contact_us.php">CONTACT US</a>&nbsp;|&nbsp;
    			<a href="http://spirelearning.com/terms.php">POLICIES &amp; TERMS OF USE</a></p>
    			<p style="margin-top:5px;color:#231F20">Content &copy; <?=date("Y");?> Spire Learning. All Rights Reserved&nbsp;|&nbsp;Site design by <a href="http://5after9.com" target="_blank">5 AFTER 9</a></p>
    	</div><!-- end spirefooter --><br />

  </div></div> <!-- /#page-inner, /#page -->

</body>
</html>
