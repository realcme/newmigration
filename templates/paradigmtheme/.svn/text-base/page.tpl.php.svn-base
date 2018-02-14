<?php
global $user;
$base_url = "http://www.paradigmmc.com/";
$img_path = base_path() . path_to_subtheme();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language; ?>" xml:lang="<?php print $language; ?>">


<head>
    <title><?php print $head_title; ?></title>


    <?php print $head; ?>

    <!--[if IE]>
    <link rel="stylesheet" href="<?php print $base_path . $directory; ?>/ie.css" type="text/css">
    <?php if ($subtheme_directory && file_exists($subtheme_directory .'/ie.css')): ?>
    <link rel="stylesheet" href="<?php print $base_path . $subtheme_directory; ?>/ie.css" type="text/css">
    <?php endif; ?>
    <![endif]-->
    <?php print $scripts; ?>
    <?php print phptemplate_cookie_js(); ?>
    <?php print phptemplate_opencomp_js(); ?>
<?php /*
    <script type="text/javascript" src="/cms/misc/jquery.js"></script>
    <script type="text/javascript" src="/cms/misc/drupal.js"></script>
    <script type="text/javascript" src="/cms/sites/all/modules/jquery_update/compat.js"></script>
    <script type="text/javascript" src="/cms/sites/all/themes/zen/horizoncmetheme/js/allscripts.js"></script>

    <script type="text/javascript">Drupal.extend({ settings: { "googleanalytics": { "trackOutgoing": 1, "trackMailto": 1, "trackDownload": 1, "trackDownloadExtensions": "7z|aac|avi|csv|doc|exe|flv|gif|gz|jpe?g|js|mp(3|4|e?g)|mov|pdf|phps|png|ppt|rar|sit|tar|torrent|txt|wma|wmv|xls|xml|zip", "LegacyVersion": 0 } } });</script>
    <script>
        rcme(document).ready(function() {
            rcme.cookie('win_height', getWindowHeight(window, window.document), { path: '/', domain: '.myrealcme.com' });
            var newrefurl = window.location + '';
            pos = newrefurl.indexOf('?comp=');
            if (pos > 0) { newrefurl = newrefurl.substring(0, pos);}
            rcme.cookie('ref_url', newrefurl, { path: '/', domain: '.myrealcme.com' });
            rcme.cookie('cdn_url', 'http://i.myrealcme.com/cms/', { path: '/', domain: '.myrealcme.com' });
            rcme(window).resize(function(){ rcme.cookie('win_height', getWindowHeight(window, window.document), { path: '/', domain: '.myrealcme.com' });
            });

            jQuery(".block-inner .content h3").on('click', function() {
            });
        });
    </script>
 */ ?>

    <!-- EXTERNAL CSS -->
    <!-- Google Font -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans|Lato' rel='stylesheet' type='text/css'>


    <!-- Primary CSS -->
    <link rel="stylesheet" href="<?=$base_url;?>/css/style_02.css" type="text/css" media="all" />
    <link rel="stylesheet" href="<?=$base_url;?>/css/_mobile.css" type="text/css" media="all" />


    <!-- Color Scheme CSS -->
    <link rel="stylesheet" href="<?=$base_url;?>/css/karma-political-blue.css" type="text/css" media="all" />
    <link rel="stylesheet" href="<?=$base_url;?>/css/secondary-political-blue.css" type="text/css" media="all" />
    <link rel="stylesheet" href="<?=$base_url;?>/css/_font-awesome.css" type="text/css" media="all" />

    <!--[if IE 9]>
    <style media="screen">
        #footer,
        .header-holder
        {
            behavior: url(js/PIE/PIE.htc);
        }
    </style>
    <![endif]-->
    <!--[if lte IE 8]>
    <script type='text/javascript' src='/js/html5shiv.js'></script>
    <style media="screen">
        /* uncomment for IE8 rounded corners
        #menu-main-nav .drop ul a,
        #menu-main-nav .drop,
        #menu-main-nav ul.sub-menu,
        #menu-main-nav .drop .c,
        #menu-main-nav li.parent, */
        #footer,
        .header-holder,
        #horizontal_nav ul li,
        #horizontal_nav ul a,
        #tt-gallery-nav li,
        #tt-gallery-nav a,
        ul.tabset li,
        ul.tabset a,
        .karma-pages a,
        .karma-pages span,
        .wp-pagenavi a,
        .wp-pagenavi span,
        .post_date,
        .post_comments,
        .ka_button,
        .flex-control-paging li a,
        .colored_box,
        .tools,
        .karma_notify
        .opener,
        .callout_button,
        .testimonials {
            behavior: url(js/PIE/PIE.htc);
        }
    </style>
    <!--[endif]-->

    <style>
        .top-block ul.sf-menu
        a.sf-with-ul::after {
            content:"" !important;
        }

        .navi-description, .sf-menu li a {
            font-family: "Open Sans",Arial,sans-serif !important;
            font-weight: normal !important;
            color: #689bb1 !important;

        }
        .info{

            width: 800px !important;
        }

        .comment-date, em {
            color: #666 !important;
        }

        #content ul, .content_full_width ul {
            margin: 0 0 20px 0px;
        }

    </style>

    <!-- END EXTERNAL CSS -->


</head>

<body class="<?php print $body_classes; ?>">

<header role="banner" id="header">
    <div class="top-block">
        <div class="top-holder">


            <!-- ***************** - Top Toolbar Left Side - ***************** -->
            <div class="toolbar-left">
                <ul>
                    <li><a href="<?=$base_url;?>/index.shtml">Home</a></li>
                    <li><a href="http://www.paradigmmc.com/ce.shtml" target="_new">Course Catalog</a></li>
                    <li>
                        <a href="<?=$base_url;?>/learningcenters.shtml">Our Learning Centers</a>
                        <ul class="sub-menu">
                            <li><a href="http://www.AestheticCare.org" target="_new"><span>AestheticCare</span></a></li>
                            <li><a href="http://www.Contemporary-Aesthetics.com" target="_new"><span>Contemporary-Aesthetics</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?=$base_url;?>/about/index.shtml">About Us</a>
                        <ul class="sub-menu">
                            <li><a href="<?=$base_url;?>/about/capabilities.shtml"><span>Capabilities</span></a></li>
                            <li><a href="<?=$base_url;?>/about/awards.shtml"><span>Awards</span></a></li>
                            <li><a href="<?=$base_url;?>/about/links.shtml"><span>Medical Education Partners</span></a></li>
                            <li><a href="<?=$base_url;?>/about/jobs.shtml"><span>Job Listings</span></a></li>
                            <!---li><a href="<?=$base_url;?>/about/terms.shtml"><span>Terms of Use and Privacy Policy</span></a></li--->



                        </ul>
                    </li>
                    <li><a href="#mailinglist">Join Mailing List</a></li>
                </ul>
            </div><!-- END toolbar-left -->




            <!-- ***************** - Top Toolbar Right Side - ***************** -->
            <div class="toolbar-right">
                <!---ul class="social_icons tt_vector_social_icons tt_no_social_title tt_image_social_icons">
                   <li><a href="#" class="rss" title="RSS Feed">RSS</a></li>
                   <li><a href="#" class="twitter" title="Twitter">Twitter</a></li>
                   <li><a href="#" class="facebook" title="Facebook">Facebook</a></li>
                   <li><a href="mailto:contactus@paradigmmc.com" class="email" title="Email">Email</a></li>
                   <li><a href="#" class="linkedin" title="LinkedIn">LinkedIn</a></li>
                   <li><a href="#" class="google +" title="Google +">Google+</a></li>
                   <li><a href="#" class="dribbble" title="Dribbble">Dribbble</a></li>
                   <li><a href="#" class="skype" title="Skype">Skype</a></li>
                </ul--->
            </div><!-- END toolbar-right -->
        </div><!-- END top-holder -->
    </div><!-- END top-block -->



    <div class="header-holder">
        <div class="header-overlay">
            <div class="header-area">
                <a href="<?=$base_url;?>/index.shtml" class="logo"><img src="<?=$base_url;?>/images/paradigm.png" alt="Paradigm Medical Communications, LLC" class="tt-retina-logo" width="400" height="99" /></a>



                <!-- ***************** - Main Menu - ***************** -->
                <nav role="navigation">
                    <BR>
                    <ul id="menu-main-nav">
                        <li>
                            <a href="<?=$base_url;?>/expertise/therapeuticexpertise.shtml"><span><strong>Therapeutic Expertise</strong><span class="navi-description">major areas of expertise</span></span></a>
                            <ul class="sub-menu">
                                <li><a href="<?=$base_url;?>/expertise/aestheticmedicine.shtml"><span>Aesthetic Medicine</span></a></li>
                                <li><a href="<?=$base_url;?>/expertise/cardiology.shtml"><span>Cardiology</span></a></li>
                                <li><a href="<?=$base_url;?>/expertise/dermatology.shtml"><span>Dermatology</span></a></li>
                                <li><a href="<?=$base_url;?>/expertise/diabetes.shtml"><span>Diabetes</span></a></li>
                                <li><a href="<?=$base_url;?>/expertise/febrile_neutropenia.shtml"><span>Febrile Neutropenia</span></a></li>
                                <li><a href="<?=$base_url;?>/expertise/fibromyalgia.shtml"><span>Fibromyalgia</span></a></li>

                                <li><a href="<?=$base_url;?>/expertise/gastroenterology.shtml"><span>Gastroenterology</span></a></li>
                                <li><a href="<?=$base_url;?>/expertise/hypertension.shtml"><span>Hypertension</span></a></li>
                                <li><a href="<?=$base_url;?>/expertise/hyponatremia.shtml"><span>Hyponatremia</span></a></li>
                                <li><a href="<?=$base_url;?>/expertise/infectiousdisease.shtml"><span>Infectious Disease</span></a></li>
                                <li><a href="<?=$base_url;?>/expertise/migraine.shtml"><span>Migraine</span></a></li>
                                <li><a href="<?=$base_url;?>/expertise/ndooab.shtml"><span>NDO/OAB</span></a></li>
                                <li><a href="<?=$base_url;?>/expertise/oncology.shtml"><span>Oncology</span></a></li>
                                <li><a href="<?=$base_url;?>/expertise/ophthalmology.shtml"><span>Ophthalmology</span></a></li>
                                <li><a href="<?=$base_url;?>/expertise/respiratorydisease.shtml"><span>Respiratory Disease</span></a></li>
                                <li><a href="<?=$base_url;?>/expertise/thrombosis.shtml"><span>Thrombosis</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?=$base_url;?>/expertise/educationalformats.shtml"><span><strong>Educational Formats</strong><span class="navi-description">current programs</span></span></a>
                            <ul class="sub-menu">
                                <li><a href="<?=$base_url;?>/expertise/handson.shtml"><span>Hands-on Workshops</span></a></li>
                                <li><a href="<?=$base_url;?>/expertise/hospital.shtml"><span>Hospital-based/Grand Rounds</span></a></li>
                                <li><a href="<?=$base_url;?>/expertise/internet.shtml"><span>Internet Activities</span></a></li>
                                <li><a href="<?=$base_url;?>/expertise/liveregionalmeetings.shtml"><span>Live Regional Meetings</span></a></li>
                                <li><a href="<?=$base_url;?>/expertise/printactivities.shtml"><span>Print Activities</span></a></li>
                                <li><a href="<?=$base_url;?>/expertise/satellitesymposia.shtml"><span>Satellite Symposia</span></a></li>
                                <li><a href="<?=$base_url;?>/expertise/multiplatform.shtml"><span>Multi-platform Initiatives</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?=$base_url;?>/grandrounds"><span><strong>Grand Rounds</strong><span class="navi-description">schedule today</span></span></a>
                        </li>
                    </ul>
                </nav>
            </div><!-- END header-area -->
        </div><!-- END header-overlay -->
    </div><!-- END header-holder -->
</header><!-- END header -->

<?php print $styles; ?>
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

        <div id="footer" style="background: none !important; border: none !important;"><div id="footer-inner">

                <div id="footer-message">
                    <center style="color: black !important;">
                        <?php print $footer_message; ?><img src="<?php print $img_path ?>/img/footerlogo.png" alt="" class="center" />
                    </center>
                </div>

            </div></div> <!-- /#footer-inner, /#footer -->

        <?php if ($closure_region): ?>
            <div id="closure-blocks"><?php print $closure_region; ?></div>
        <?php endif; ?>

        <?php print $closure; ?>
        <?php /*
        <script type="text/javascript" src="/cms/sites/all/themes/zen/horizontheme/js/googleanalytics.js"></script>
        <script type="text/javascript">var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));</script>
        <script type="text/javascript">try{var pageTracker = _gat._getTracker("UA-9136459-4");pageTracker._setVar("RealCME Author:Administrator:PHA::us:realcme:0");pageTracker._setDomainName("realcme.com"); pageTracker._setAllowLinker(true);pageTracker._trackPageview();} catch(err) {}</script>
 */ ?>

    </div></div> <!-- /#page-inner, /#page -->
<?php /*
<!-- ***************** - JavaScript Starts Here - ***************** -->
<script type="text/javascript" src="/cms/sites/all/themes/zen/paradigmtheme/js/custom-main.js"></script>
<!--script type="text/javascript" src="<?=$base_url;?>js/custom-main.js"></script-->
<script type="text/javascript" src="<?=$base_url;?>js/superfish.js"></script>

<script type="text/javascript" src="<?=$base_url;?>js/scrollWatch.js"></script>





<script>
    jQuery(document).ready(function () {
        jQuery('.tt-parallax-text').fadeIn(1000); //delete this to remove fading content

        var $window = jQuery(window);
        jQuery('section[data-type="background"]').each(function () {
            var $bgobj = jQuery(this);

            jQuery(window).scroll(function () {
                var yPos = -($window.scrollTop() / $bgobj.data('speed'));
                var coords = '50% ' + yPos + 'px';
                $bgobj.css({
                    backgroundPosition: coords
                });
            });
        });
    });
</script>
 */ ?>



</body>
</html>
