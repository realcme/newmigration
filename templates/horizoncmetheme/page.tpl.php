<?php
global $user;
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
    <!-- FIND_ME -->

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

    <?php /*
    <link rel='stylesheet' id='contact-form-7-css'  href='http://www.horizoncme.com/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=4.3' type='text/css' media='all' />
    <link rel='stylesheet' id='font-awesome-css'  href='http://www.horizoncme.com/wp-content/plugins/goodlayers-lms/font-awesome/css/font-awesome.min.css?ver=4.3.1' type='text/css' media='all' />
    <!--[if lt IE 8]>
    <link rel='stylesheet' id='font-awesome-ie7-css'  href='http://www.horizoncme.com/wp-content/plugins/goodlayers-lms/font-awesome-ie7.min.css?ver=4.3.1' type='text/css' media='all' />
    <![endif]-->
 */ ?>
    <link rel='stylesheet' id='gdlr-date-picker-css'  href='//ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/themes/smoothness/jquery-ui.css?ver=4.3.1' type='text/css' media='all' />
    <?php /*
    <link rel='stylesheet' id='lms-style-css'  href='http://www.horizoncme.com/wp-content/plugins/goodlayers-lms/lms-style.css?ver=4.3.1' type='text/css' media='all' />
    <link rel='stylesheet' id='lms-style-custom-css'  href='http://www.horizoncme.com/wp-content/plugins/goodlayers-lms/lms-style-custom.css?ver=4.3.1' type='text/css' media='all' />
    <link rel='stylesheet' id='post_grid_style-css'  href='http://www.horizoncme.com/wp-content/plugins/post-grid/css/style.css?ver=4.3.1' type='text/css' media='all' />

    <link rel='stylesheet' id='style-css'  href='http://www.horizoncme.com/wp-content/themes/clevercourse/style.css?ver=4.3.1' type='text/css' media='all' />
 */ ?>
    <link rel='stylesheet' id='Raleway-google-font-css'  href='http://fonts.googleapis.com/css?family=Raleway%3A100%2C200%2C300%2Cregular%2C500%2C600%2C700%2C800%2C900&#038;subset=latin&#038;ver=4.3.1' type='text/css' media='all' />
    <link rel='stylesheet' id='Montserrat-google-font-css'  href='http://fonts.googleapis.com/css?family=Montserrat%3Aregular%2C700&#038;subset=latin&#038;ver=4.3.1' type='text/css' media='all' />
    <!-- Bootstrap & Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" media="all" href="https://horizoncme.mededmanager.com/assets/horizoncme/application-da6106e28c921aa8ac3bf19b50631a4e2e6d8d224ed5fd2c85848d786cb587a0.css" />
    <meta name="csrf-param" content="authenticity_token" />
    <meta name="csrf-token" content="xfbBvec23RclIpENIwnSvScZA2Y2oYOXWSWXg9SoD8rz5YgKNm5PFlaWzQa+gLeNbq3W/BwNhhtYRPH3jxJlzg==" />

    <script src="https://horizoncme.mededmanager.com/assets/horizoncme/application-48c6a0ef94f58753f4bb39f74514c4b4c6f554ef368e4903a9a8ec838484d5f7.js"></script>
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script>$(document).ready(function(){
            Stripe.setPublishableKey("pk_live_iJM3aBecXnSQsXcUNv0ymLFK");
        });
    </script>

    <link rel="icon" type="image/png" href="https://horizoncme.mededmanager.com/assets/horizoncme/cropped-HorizonCME_logo_SMALL-01-1-32x32-26725898637a53ec5a74dec7d33411ff946098dad91faa40f32ffde90ec75f4a.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="https://horizoncme.mededmanager.com/assets/horizoncme/cropped-HorizonCME_logo_SMALL-01-1-192x192-6775f3783308c18cf1aadc8e6234f29440052cfbcff007b8439dab9d83928bbb.png" sizes="192x192" />
    <link rel="apple-touch-icon-precomposed" type="image/png" href="https://horizoncme.mededmanager.com/assets/horizoncme/cropped-HorizonCME_logo_SMALL-01-1-180x180-046365559f3e1e2c20785c96062250182a390d07efedbb09c495707b53f303cb.png" />
    <meta name="msapplication-TileImage" content="/assets/horizoncme/cropped-HorizonCME_logo_SMALL-01-1-270x270-9725c0c20dff3ac3049e36f820cca242d8de9262dae6c6bb233f570144ec68f8.png" />

    <link href="https://fonts.googleapis.com/css?family=Montserrat%3A700%2C400" rel="stylesheet" property="stylesheet" type="text/css" media="all" />

    <?php /*
    <link rel='stylesheet' id='superfish-css'  href='http://www.horizoncme.com/wp-content/themes/clevercourse/plugins/superfish/css/superfish.css?ver=4.3.1' type='text/css' media='all' />
    <link rel='stylesheet' id='dlmenu-css'  href='http://www.horizoncme.com/wp-content/themes/clevercourse/plugins/dl-menu/component.css?ver=4.3.1' type='text/css' media='all' />


    <link rel='stylesheet' id='style-responsive-css'  href='http://www.horizoncme.com/wp-content/themes/clevercourse/stylesheet/style-responsive.css?ver=4.3.1' type='text/css' media='all' />
    <link rel='stylesheet' id='style-custom-css'  href='http://www.horizoncme.com/wp-content/themes/clevercourse/stylesheet/style-custom.css?ver=4.3.1' type='text/css' media='all' />


    <link rel='stylesheet' id='ms-custom-css'  href='http://www.horizoncme.com/wp-content/uploads/masterslider/custom.css?ver=1.3' type='text/css' media='all' /> */ ?>


    <style>
        body {
            background: white !important;
        }

        .gdlr-header-inner {
            border-bottom: 1px solid #cccccc;
        }

        .icon-search::before, .icon-lock::before, .icon-envelope::before, .icon-phone::before {
            content: "" !important;
        }

        .body-wrapper {
            overflow: visible !important;
        }

        table tr td {
            border-bottom-style: none !important;
            border-bottom-width: 0px !important;
            padding: 5px 5px !important;
        }

        table {
            text-align: left;
        }


    </style>

</head>

<body class="<?php print $body_classes; ?>">
<header>
    <div class="container">
        <div class="row">
            <div class="col-6 col-md-9">
                <a href="https://horizoncme.mededmanager.com/"><img class="img-fluid" id="logo" src="https://horizoncme.mededmanager.com/assets/horizoncme/horizon-cme-logo-b68f92e16f9766cb902b2d17fe20e9b99a0213efa1a52456703f035cc56ae06c.png" alt="Horizon cme logo"></a>
                <ul class="nav hidden-md-down" id="nav">
                    <li class="nav-item"><a class="nav-link" href="/store/all/search"><strong>CME PRograms</strong><small>Current Activities</small></a></li>
                    <li class="nav-item dropdown"><a data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" class="nav-link"><strong>About Us</strong><small>Why Horizon CME</small></a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="https://horizoncme.mededmanager.com/store/pages/about-horizon-cme">About Horizon CME</a>
                            <a class="dropdown-item" href="https://horizoncme.mededmanager.com/store/pages/our-services">Our Services</a>
                            <a class="dropdown-item" href="https://horizoncme.mededmanager.com/store/pages/awards-and-publications">Awards &amp; Publications</a>
                        </div>
                    </li>
                    <li class="nav-item"><a href="https://horizoncme.mededmanager.com/store/pages/contact" class="nav-link"><strong>Contact</strong><small>Get In Touch</small></a></li>
 <?php /*
 <li class="nav-item"><a class="nav-link" href="https://horizoncme.mededmanager.com/store/all/search"><em class="fa fa-search"></em></a></li>
 */ ?>
                </ul>
            </div>
            <div class="col-6 col-md-3">
                <div class="hidden-lg-up" id="nav-mobile-holder">
                    <em class="fa fa-bars"></em>
                </div>
                <?php /*
                <ul class="nav hidden-md-down" id="nav-login">
                    <li class="nav-item"><a class="nav-link" href="https://horizoncme.mededmanager.com/users/sign_in"><strong>Login</strong></a></li>
                    <li class="nav-item"><a class="nav-link" href="https://horizoncme.mededmanager.com/my-cart"><em class="fa fa-shopping-basket"></em></a></li>
                </ul>
 */ ?>
            </div>
        </div>
    </div>
</header>
<?php print $styles; ?>

<style>
    div.listing-tabs div.form-item input[type="text"] {
        border: 0 none !important;
        margin-right: 6px !important;
    }
    .listing-tabs .form-item input {


    }

    tr.odd .form-item, tr.even .form-item {
        white-space: nowrap !important;
    }

    input[type="text"] {
        background-color: white !important;
        color: black !important;
        padding: 0px !important;
    }

    div.listing-tabs #edit-submit {
        background: transparent url("images/magnifying_glass.png") no-repeat scroll center bottom !important;
        border: medium none !important;
        cursor: pointer !important;
        height: 16px !important;
        margin: 0 !important;
        width: 16px !important;
    }

</style>


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
                            <br />
                            <br />
                            <br />
                            <br />
                            <br />
                            <br />
                            <br />
                            <br />
                            <br />
                            <br />
                            <br />
                            <br />
                            <br />
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
        <?php /*
          <script type="text/javascript" src="/cms/sites/all/themes/zen/horizontheme/js/googleanalytics.js"></script>
          <script type="text/javascript">var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));</script>
          <script type="text/javascript">try{var pageTracker = _gat._getTracker("UA-9136459-4");pageTracker._setVar("RealCME Author:Administrator:PHA::us:realcme:0");pageTracker._setDomainName("realcme.com"); pageTracker._setAllowLinker(true);pageTracker._trackPageview();} catch(err) {}</script> */ ?>



    </div></div> <!-- /#page-inner, /#page -->

<?php /*
<script type='text/javascript' src='http://www.horizoncme.com/wp-includes/js/jquery/jquery.js?ver=1.11.3'></script>
<script type='text/javascript' src='http://www.horizoncme.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.2.1'></script>

<script type='text/javascript' src='http://www.google.com/jsapi?ver=4.3.1'></script>
<script type='text/javascript' src='http://www.horizoncme.com/wp-content/themes/clevercourse/plugins/superfish/js/superfish.js?ver=1.0'></script>
<script type='text/javascript' src='http://www.horizoncme.com/wp-includes/js/hoverIntent.min.js?ver=1.8.1'></script>
<script type='text/javascript' src='http://www.horizoncme.com/wp-content/themes/clevercourse/plugins/dl-menu/modernizr.custom.js?ver=1.0'></script>
<?php /*<script type='text/javascript' src='http://www.horizoncme.com/wp-content/themes/clevercourse/plugins/dl-menu/jquery.dlmenu.js?ver=1.0'></script>
<script type='text/javascript' src='http://www.horizoncme.com/wp-content/themes/clevercourse/plugins/jquery.easing.js?ver=1.0'></script>


<script type='text/javascript' src='http://www.horizoncme.com/wp-content/themes/clevercourse/javascript/gdlr-script.js?ver=1.0'></script>*/ ?>



</body>
</html>
