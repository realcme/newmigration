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

    <link rel="stylesheet" media="all" href="<?php print $base_path . $subtheme_directory; ?>/css/doitbetter.css" />

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
                <a href="">
                    <img class="img-fluid" id="logo" src="<?php print $img_path ?>/img/do-it-better-logo_692x69.png" alt="Do It Better logo" style="width:300px;">
                </a>
                <ul class="nav hidden-md-down" id="nav">
                    <?php /*
                    <li class="nav-item"><a class="nav-link" href="/store/all/search"><strong>CME PRograms</strong><small>Current Activities</small></a></li>
                    <li class="nav-item dropdown"><a data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" class="nav-link"><strong>About Us</strong><small>Why Horizon CME</small></a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="https://horizoncme.mededmanager.com/store/pages/about-horizon-cme">About Horizon CME</a>
                            <a class="dropdown-item" href="https://horizoncme.mededmanager.com/store/pages/our-services">Our Services</a>
                            <a class="dropdown-item" href="https://horizoncme.mededmanager.com/store/pages/awards-and-publications">Awards &amp; Publications</a>
                        </div>
                    </li>
                    <li class="nav-item"><a href="https://horizoncme.mededmanager.com/store/pages/contact" class="nav-link"><strong>Contact</strong><small>Get In Touch</small></a></li>
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

    </div></div> <!-- /#page-inner, /#page -->

</body>
</html>
