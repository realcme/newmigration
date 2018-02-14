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
    <div id="skip-to-nav"><a href="#navigation"><?php print t('Skip to Navigation'); ?></a></div>

    <div id="header"><div id="header-inner" class="clear-block">
        <div id="logo-title">
        
        
        <table cellpadding="0" cellspacing="0" border="0" >
          <tr>
            <td rowspan="2" valign="bottom"><img src="<?php print $img_path ?>/images/logoARHP.gif" alt="Association of Reproductive Health Professionals" title="Association of Reproductive Health Professionals" width="147" height="118" border="0" /></td>
            <td valign="top" align="left"><img src="<?php print $img_path ?>/images/logoTagline.gif" alt="Association of Reproductive Health Professionals" title="Association of Reproductive Health Professionals" width="268" height="86" border="0" /></td>
          </tr>
          <tr>
            <td valign="top">
              <table cellpadding="0" cellspacing="0" border="0">
                <tr>
                  <td><a href="http://www.arhp.org/Topics"><img src="<?php print $img_path ?>/images/navReproductiveHealthTopics.gif" onmouseover="this.src='<?php print $img_path ?>/images/navReproductiveHealthTopicsOver.gif';" onmouseout="this.src='<?php print $img_path ?>/images/navReproductiveHealthTopics.gif';" alt="Reproductive Health Topics" title="Reproductive Health Topics" width="174" height="32" border="0" /></a></td>
                  <td><a href="http://www.arhp.org/Publications-and-Resources"><img src="<?php print $img_path ?>/images/navPublicationsResources.gif" onmouseover="this.src='<?php print $img_path ?>/images/navPublicationsResourcesOver.gif';" onmouseout="this.src='<?php print $img_path ?>/images/navPublicationsResources.gif';" alt="Publications &amp; Resources" title="Publications &amp; Resouces" width="149" height="32" border="0" /></a></td>
                  <td><a href="http://www.arhp.org/Professional-Education"><img src="<?php print $img_path ?>/images/navProfessionalEducation.gif" onmouseover="this.src='<?php print $img_path ?>/images/navProfessionalEducationOver.gif';" onmouseout="this.src='<?php print $img_path ?>/images/navProfessionalEducation.gif';" alt="Professional Education" title="Professional Education" width="139" height="32" border="0" /></a></td>
                  <td><a href="http://www.arhp.org/Newsroom"><img src="<?php print $img_path ?>/images/navNewsroom.gif" onmouseover="this.src='<?php print $img_path ?>/images/navNewsroomOver.gif';" onmouseout="this.src='<?php print $img_path ?>/images/navNewsroom.gif';" alt="Newsroom" title="Newsroom" width="72" height="32" border="0" /></a></td>
                  <td><a href="http://www.arhp.org/Membership"><img src="<?php print $img_path ?>/images/navMembership.gif" onmouseover="this.src='<?php print $img_path ?>/images/navMembershipOver.gif';" onmouseout="this.src='<?php print $img_path ?>/images/navMembership.gif';" alt="Membership" title="Membership" width="85" height="32" border="0" /></a></td>
                  <td><a href="http://www.arhp.org/Policy-and-Advocacy"><img src="<?php print $img_path ?>/images/navPolicyAdvocacy.gif" onmouseover="this.src='<?php print $img_path ?>/images/navPolicyAdvocacyOver.gif';" onmouseout="this.src='<?php print $img_path ?>/images/navPolicyAdvocacy.gif';" alt="Policy &amp; Advocacy" title="Policy &amp; Advocacy" width="118" height="32" border="0" /></a></td>
                  <td><a href="http://www.arhp.org/About-Us"><img src="<?php print $img_path ?>/images/navAboutUs.gif" onmouseover="this.src='<?php print $img_path ?>/images/navAboutUsOver.gif';" onmouseout="this.src='<?php print $img_path ?>/images/navAboutUs.gif';" alt="About Us" title="About Us" width="78" height="32" border="0" /></a></td>
                </tr>
              </table>
            </td>

          </tr>
					<tr>
          	<td colspan="8">
            <table width="100%">
            <tr>
            <td valign="top" id="interiorHdrContainer" valign="top">
              <table cellpadding="0" cellspacing="0" border="0" width="100%" ID="Table8">
                <tr>
                  <td><img src="<?php print $img_path ?>/images/interiorHdrLeft-noNav.gif" width="9" height="43" border="0" /></td>
                  <td id="interiorHdr">MEDICAL EDUCATION OPPORTUNITIES</td>
  
                  <td><img src="<?php print $img_path ?>/images/interiorHdrRight.gif" width="6" height="43" border="0" /></td>
                </tr>
              </table>
            </td>
            </tr>
            </table>
            </td>
            
					</tr>
          
        </table>

        </div>  <!-- /#logo-title -->

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
       <div style="float:left; color: black">
							<small>
              Association of Reproductive Health Professionals - East<br />
							1901 L Street, NW, Suite 300, Washington, DC 20036<br />
							(202) 466-3825 | <a href="mailto:ARHP@arhp.org">ARHP@arhp.org</a>
              </small>
						</div>

						<div style="float:left;padding-left:20px; color: black">
							<small>
							Association of Reproductive Health Professionals - West<br />
							1330 Broadway, Suite 1100, Oakland, CA 96412<br />
							(510) 986-8990 | <a href="mailto:ARHP@arhp.org">ARHP@arhp.org</a><br />
							</small>
						</div>
            <div style="clear: both;"><br/></div>
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
