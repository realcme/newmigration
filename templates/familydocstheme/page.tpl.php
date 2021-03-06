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

<div id="featured-bg-outer"><div id="featured-bg"><div id="featured-bg-inner"><div id="featured-bg-sub-inner">
  <!-- header-top row: width = grid_width -->
  
  <!-- header-group row: width = grid_width -->
  <div id="header-group-wrapper" class="header-group-wrapper full-width">
    <div id="header-group" class="header-group row grid12-12 clearfix">
      <div id="header-group-inner" class="header-group-inner inner clearfix">
        <div id="header-group-sub-inner" class="header-group-sub-inner inner clearfix">
          <div id="header-group-sub-sub-inner" class="header-group-sub-sub-inner inner clearfix">

            <!-- navigation_bar row: width = grid_width -->
            <div id="navigation-bar" class="navigation-bar row" style="padding-bottom: 19.5px; padding-top: 19.5px;">
              <div id="navigation-bar-inner" class="navigation-bar-inner inner clearfix">
                <div id="block-menu-primary-links" class="block block-menu odd first grid12-12 fusion-inline-menu">
                  <div class="inner clearfix">
                    <div class="content clearfix">
                      <ul class="menu">
                        <li class="expanded first active-trail"><a href="http://www.familydocs.org/professional-development" title="">Professional Development</a>
                          <ul class="menu" style="display:none;position:absolute">
                            <li class="collapsed first"><a href="http://www.familydocs.org/professional-development/about-cme" title="">About CME</a></li>
                            <li class="collapsed"><a href="http://www.familydocs.org/professional-development/annual-scientific-assembly" title="Annual Scientific Assembly">Annual Scientific Assembly</a></li>
                            <li class="leaf"><a href="http://www.familydocs.org/professional-development/cme-leaders-faculty" title="">CME Leaders + Faculty</a></li>
                            <li class="collapsed"><a href="http://www.familydocs.org/covered-california" title="Covered California">Covered California</a></li>
                            <li class="expanded last active-trail"><a href="http://www.familydocs.org/professional-development/online-enduring" title="" class="active">Online + Enduring</a>
                              <ul class="menu"  style="display:none;position:absolute">
                                <li class="leaf first"><a href="http://www.familydocs.org/professional-development/online-enduring/e-spotlight-series" title="CAFP CMe-Spotlight Series">CMe-Spotlight Series</a></li>
                                <li class="leaf"><a href="http://www.familydocs.org/professional-development/online-enduring/collaboration" title="Online + Enduring: Collaboration">Collaboration</a></li>
                                <li class="collapsed last"><a href="http://www.familydocs.org/professional-development/online-enduring/department-of-transportation" title="Department of Transportation: Training Details">DOT Training Details</a></li>
                              </ul>
                            </li>
                          </ul>
                        </li>
                        <li class="expanded"><a href="http://www.familydocs.org/advocacy" title="">Advocacy</a>
                          <ul class="menu" style="display:none;position:absolute">
                            <li class="collapsed first"><a href="http://www.familydocs.org/resources/advocacy-action-center" title="">Advocacy Action Center</a></li>
                            <li class="leaf"><a href="http://www.familydocs.org/all-member-advocacy-meeting" title="">All Member Advocacy Meeting</a></li>
                            <li class="leaf"><a href="http://www.familydocs.org/resources/advocacy/key-contact" title="">Become a Key Contact</a></li>
                            <li class="collapsed"><a href="http://www.familydocs.org/advocacy/fp-pac" title="">Family Physicians Political Action Committee</a></li>
                            <li class="leaf"><a href="http://www.familydocs.org/advocacy/health-care-reform" title="">Health Care Reform</a></li>
                            <li class="leaf"><a href="http://www.familydocs.org/advocacy/priority-legislation" title="">Positions on Legislation</a></li>
                            <li class="leaf last"><a href="http://www.familydocs.org/resources/advocacy/state-budget-resource-center" title="">State Budget Resource Center</a></li>
                          </ul>
                        </li>
                        <li class="expanded"><a href="http://www.familydocs.org/practice-resources" title="">Practice Resources</a>
                          <ul class="menu" style="display:none;position:absolute">
                            <li class="collapsed first"><a href="http://www.familydocs.org/practice-resources/aco" title="">Accountable Care Organizations</a></li>
                            <li class="collapsed"><a href="http://www.familydocs.org/practice-resources/hit" title="">Health Information Technology</a></li>
                            <li class="collapsed"><a href="http://www.familydocs.org/practice-resources/pcmh" title="">Patient Centered Medical Home</a></li>
                            <li class="collapsed"><a href="http://www.familydocs.org/practice-resources/finance-center" title="">Practice Finance Center</a></li>
                            <li class="leaf last"><a href="http://www.familydocs.org/medi-cal-access-reporting-survey" title="Medi-Cal Access Reporting Survey">Medi-Cal Access Reporting Survey</a></li>
                          </ul>
                        </li>
                        <li class="expanded"><a href="http://www.familydocs.org/students-residents" title="">Students + Residents</a>
                          <ul class="menu" style="display:none;position:absolute">
                            <li class="leaf first"><a href="http://www.familydocs.orghttps://residency.familydocs.org" title="">CA Residency Program Directory</a></li>
                            <li class="leaf"><a href="http://www.familydocs.org/students-residents/leadership" title="">Leadership</a></li>
                            <li class="leaf"><a href="http://www.familydocs.org/students-residents/programs" title="">Programs</a></li>
                            <li class="leaf"><a href="http://www.familydocs.org/students-residents/resources" title="">Resources</a></li>
                            <li class="collapsed last"><a href="http://www.familydocs.org/students-residents/events" title="">Student and Resident Events</a></li>
                          </ul>
                        </li>
                        <li class="expanded last"><a href="http://www.familydocs.org/membership" title="">Membership</a>
                          <ul class="menu" style="display:none;position:absolute">
                            <li class="leaf first"><a href="http://www.familydocs.org/get-involved" title="">Get Involved</a></li>
                            <li class="leaf"><a href="http://www.familydocs.org/membership/join-cafp-today" title="">Join CAFP Today</a></li>
                            <li class="collapsed"><a href="http://www.familydocs.org/membership/benefits" title="">Member Benefits</a></li>
                            <li class="leaf"><a href="http://www.familydocs.org/membership/move-ca" title="">Moving to California</a></li>
                            <li class="leaf"><a href="http://www.familydocs.org/membership/renew" title="">Renew Membership</a></li>
                            <li class="leaf"><a href="http://www.familydocs.org/membership/subscribe" title="Join CAFP Mailing List">Subscribe to CAFP News</a></li>
                            <li class="collapsed last"><a href="http://www.familydocs.org/2014YearFP" title="2014: Year of the Family Physician">2014: Year of the Family Physician</a></li>
                          </ul>
                        </li>
                      </ul>    
                    </div>
                  </div><!-- /block-inner -->
                </div><!-- /block -->
                </div><!-- /navigation-bar-inner -->
              </div><!-- /navigation-bar -->
    
              <div id="header-site-info" class="header-site-info block">
                <div id="header-site-info-inner" class="header-site-info-inner inner">
                  <div id="cafplogo" class="pngfix">
                    <a href="/" title="Home"><img src="<?php print $img_path ?>/img/fam_logo.png" alt="Home" height="70" width="190" /></a>
                  </div>
                </div><!-- /header-site-info-inner -->
              </div><!-- /header-site-info -->
        
          </div>
        </div>
      </div><!-- /header-group-sub-sub-inner, /header-group-sub-inner, /header-group-inner -->

    </div><!-- /header-group -->
  </div><!-- /header-group-wrapper -->

    <!-- preface-upper-top row: width = grid_width -->
</div></div></div></div>
      



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

    <!-- footer row/footer_two: width = grid_width -->
 <div id="footer-wrapper-main"><div id="footer-wrapper-inner"><div id="footer-wrapper-sub-inner">
    <div id="footer-wrapper" class="footer-wrapper full-width">
      <div id="cafpfooter" class="cafpfooter row grid12-12">
        <div id="footer-inner" class="footer-inner inner clearfix">
        
          <div id="block-block-52" class="block block-block odd first  grid12-3">
            <div class="inner clearfix">
              <h2 class="title block-title"><span>News + Publications</span></h2>
              <div class="content clearfix">
                <ul class="arrow line">
                  <li class="first"><a href="http://www.familydocs.org/academy-in-action">Academy in Action</a></li>
                  <li><a href="http://www.familydocs.org/practice-management-news">Practice Management News</a></li>
                  <li><a href="http://www.familydocs.org/cafp-magazine"><em><span data-scayt_word="CFP" data-scaytid="2">CFP</span></em> Magazine</a></li>
                  <li><a href="http://fmrevolution.org/">Blogs + Podcasts</a></li>
                  <li class="last"><a href="http://www.familydocs.org/headliners/press-releases">Press Releases</a></li>
                </ul>
              </div>
            </div><!-- /block-inner -->
          </div><!-- /block -->

          <div id="block-block-30" class="block block-block even   grid12-3">
            <div class="inner clearfix">
              <h2 class="title block-title"><span>Resources</span></h2>
              <div class="content clearfix">
                <ul class="arrow line">
                  <li class="first"><a href="http://www.familydocs.org/resources/advocacy-action-center">Advocacy Action Center</a></li>
                  <li><a href="http://www.familydocs.org/resources/clinical-tools">Clinical Tools and Flowcharts</a></li>
                  <li><a href="http://www.familydocs.org/resources/coding-billing">Coding and Billing</a></li>
                  <li><a href="http://www.familydocs.org/resources/contract-review-service">Contract Review Service</a></li>
                  <li><a href="http://www.familydocs.org/resources/maintenance-of-certification">Maintenance of Certification</a></li>
                  <li><a href="http://www.familydocs.org/medi-cal-access-reporting-survey"><span data-scayt_word="Medi-Cal" data-scaytid="2">Medi-Cal</span> Access Reporting Survey</a></li>
                  <li class="last"><a href="http://www.familydocs.org/resources/public-health">Public Health</a></li>
                </ul>
              </div>
            </div><!-- /block-inner -->
          </div><!-- /block -->

          <div id="block-block-4" class="block block-block odd  image-fade grid12-3">
            <div class="inner clearfix">
              <h2 class="title block-title"><span>Contribute </span></h2>
              <div class="content clearfix">
                <ul class="arrow line">
                  <li class="first"><a href="https://rally.org/cafpf"><span data-scayt_word="CAFP" data-scaytid="2">CAFP</span> Foundation</a></li>
                  <li><a href="https://rally.org/fp-pac">Family Physicians PAC</a></li>
                  <li><a href="http://fmrevolution.org/">Family Medicine Revolution</a></li>
                  <li class="last"><a href="http://www.cafpfoundation.org/programs/fffm/">Future Faces of Family Medicine</a></li>
                </ul>
              </div>
            </div><!-- /block-inner -->
          </div><!-- /block -->

          <div id="block-block-47" class="block block-block even  last  grid12-3">
            <div class="inner clearfix">
              <h2 class="title block-title"><span>Membership</span></h2>
              <div class="content clearfix">
                <ul class="arrow line">
                  <li class="first"><a href="https://aafp.org/checkmydues">Renew Membership</a></li>
                  <li><a href="http://www.familydocs.org/professional-development/annual-scientific-assembly/registration">2014 <span data-scayt_word="ASA" data-scaytid="1">ASA</span> Registration</a></li>
                  <li><a href="http://www.familydocs.orgmembership/subscribe">Join <span data-scayt_word="CAFP" data-scaytid="3">CAFP</span> Mailing List</a></li>
                  <li><a href="http://www.familydocs.org/events"><span data-scayt_word="CAFP" data-scaytid="4">CAFP</span> Events Calendar</a></li>
                  <li class="last"><a href="http://www.familydocs.org/2014YearFP">2014 Year of the Family Physician</a></li>
                </ul>
              </div>
            </div><!-- /block-inner -->
          </div><!-- /block -->
  
        </div><!-- /footer-inner -->
      </div><!-- /footer -->
    </div><!-- /footer-wrapper -->
    <div id="footer-two-wrapper" class="footer-two-wrapper full-width">
      <div id="footer-two" class="footer-two row grid12-12">
        <div id="footer-two-inner" class="footer-two-inner inner clearfix">
         
          <div id="block-menu-menu-footer-menu" class="block block-menu odd first grid12-8 fusion-right fusion-right-content fusion-inline-menu">
            <div class="inner clearfix">
              <div class="content clearfix">
                <ul class="menu">
                  <li class="leaf first"><a href="http://www.familydocs.org/about-cafp" title="">About CAFP</a></li>
                  <li class="leaf"><a href="http://www.familydocs.org/awards" title="">Awards</a></li>
                  <li class="leaf"><a href="http://www.familydocs.org/get-involved" title="">Get Involved</a></li>
                  <li class="leaf"><a href="http://www.familydocs.org/leadership">Leadership</a></li>
                  <li class="leaf"><a href="http://www.familydocs.org/contact" title="Contact">Contact Us</a></li>
                  <li class="leaf last"><a href="http://www.familydocs.org/membership/subscribe" title="">Subscribe</a></li>
                </ul>    
              </div>
            </div><!-- /block-inner -->
          </div><!-- /block -->

          <div id="block-block-60" class="block block-block even  grid12-3">
            <div class="inner clearfix">
              <div class="content clearfix">
                <p>&nbsp;
                <a href="http://www.facebook.com/familydocs"><img src="<?php print $img_path ?>/img/cafp/facebook500WHITE.png" style="margin-right: 10px;" height="30" width="30" /></a>
                <a _mce_href="http://www.youtube.com/user/familydocs" _mce_shape="rect" href="http://www.youtube.com/user/familydocs" shape="rect"><img _mce_src="https://imgssl.constantcontact.com/ui/images1/ic_tube_22.png" alt="View our videos on YouTube" src="<?php print $img_path ?>/img/cafp/youtubeWHITE.png" title="View our videos on YouTube" align="null" border="0" height="30" width="30" /></a> &nbsp; 
                <a href="https://twitter.com/cafp_familydocs"><img src="<?php print $img_path ?>/img/cafp/twitterWHITE.png" style="margin-right: 10px;" height="30" width="30" /></a> 
                <a href="http://www.linkedin.com/company/california-academy-of-family-physicians"><img src="<?php print $img_path ?>/img/cafp/linkedinWHITE.png" style="margin-right: 10px;" height="30" width="30" /></a> 
                <a href="http://www.flickr.com/photos/24812088@N06/"><img src="<?php print $img_path ?>/img/cafp/flickrWHITE2.png" style="margin-right: 10px;" height="30" width="30" /></a></p>
              </div>
            </div><!-- /block-inner -->
          </div><!-- /block -->

          <div id="block-block-27" class="block block-block odd  grid12-7 fusion-right fusion-right-content">
            <div class="inner clearfix">
              <div class="content clearfix">
                <p><span style="font-size:11px;">&copy;<a href="http://www.familydocs.org/copyright"> 2014 The California Academy of Family Physicians, San Francisco, CA, USA. All rights reserved.</a></span></p>
              </div>
            </div><!-- /block-inner -->
          </div><!-- /block -->
          
        </div><!-- /footer-two-inner -->
      </div><!-- /footer-two -->
    </div><!-- /footer-two-wrapper -->

</div></div></div>
  
  
</body>
</html>
