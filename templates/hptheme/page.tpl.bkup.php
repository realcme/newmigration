<?php
global $user, $brand;
$img_path = base_path() . path_to_subtheme();
$filter_uri = explode('?', $_SERVER['REQUEST_URI']);
$get_uri = explode('/', $filter_uri[0]);


?>
<!DOCTYPE html>
<html lang="en">

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
    <?php if ( !$user->uid ) { ?>
        <style>
            #sidebar-right {
                display: none;
            }

        </style>
    <?php } ?>
    <style>
        .listing-tabs {
            /*display: none;*/
        }
        #page-main {
            top: 0px;
        }
        ul.primary {
            background: none;
        }
        .hero-unit {
            margin-bottom: 0px !important;
        }
        body {
            background-color: #056696 !important;
        }
        #copyright {
            color: white;
        }

        #bottom_links a {
            color: white !important;
        }
        #bottom_links ul li {
            border-left: 1px solid #fff;
        }

        div.listing-tabs {
            background-color: transparent;
            border: none;
            padding: 0;
            white-space: nowrap;
        }

        .wp-widget .form-item {
            font-family: Arial,verdana,sans-serif;
        }



    </style>

    <?php
    if ( $get_uri[2] != 'play' ) { ?>
        <link href="/cms/sites/all/themes/zen/hptheme/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <?php } else { ?>
        <link href="/cms/sites/all/themes/zen/hptheme/bootstrap/css/bootstrap-custom.css" rel="stylesheet" media="screen">
    <?php } ?>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- BOOTSTRAP OVERWITE -->
    <style>
        .navbar .nav > li > a {
            padding: 15px 15px !important;

        }
        .navbar {
            margin-top: 10px !important;
            font-family: 'Montserrat', sans-serif;
        }

        input[type="text"], input[type="password"] {
            margin-bottom: 0px !important;
            background-image: url("<?php print $img_path ?>/img/header-bg.png");
            font-family: 'Montserrat', sans-serif !important;
            font-size: 16px !important;
            padding-top: 5px !important;
            padding-bottom: 5px !important;
        }

        .navbar-search input[type="text"] {
            padding-top: 5px !important;
            padding-bottom: 5px !important;
            width: 320px;
        }

        h1, h2 {
            font-size: 105% !important;
            font-weight: bold !important;
            text-transform: uppercase !important;
        }
        h1 {
            font-size: 160% !important;
        }

        h1, h2, h3 {
            line-height: 1.22em !important;
        }

        <?php
        if ( !$user->uid &&
        (
        $get_uri[2] == 'listingall' ||
        $get_uri[2] == 'listingcurriculum' ||
        $get_uri[2] == 'listingarchived' ||
        $get_uri[2] == 'listingall' ||
        $get_uri[2] == ''
        ) &&
        $get_uri[2] != 'support-center' &&
        $get_uri[2] != 'contact-us'
        ) { ?>
        #page-main {
            background-image: url("<?php print $img_path ?>/img/header-bg.png");
            background-repeat: no-repeat;
            background-size: 100% 370px;
            border: 1px solid #fff;

        }

        <?php } else { ?>

        #page-main {
            background-image: none;
            border: 1px solid #ccc;

        }
        <?php } ?>

    </style>
</head>

<body class="<?php print $body_classes; ?>">

<div id="page">
    <div id="page-inner">


        <a name="top" id="navigation-top"></a>
        <div style="display: none" id="skip-to-nav"><a href="#navigation"><?php print t('Skip to Navigation'); ?></a></div>

        <div id="header"><div id="header-inner" class="clear-block">

                <div id="logo"><a href="<?php print $base_path; ?>" title="<?php print t('Home'); ?>" rel="home"><img src="<?php print $img_path ?>/img/realcme-hp-logo-254x56.png" alt="<?php print t('Home'); ?>" id="logo-image" /></a>
                </div>

                <div class="navbar pull-right">

                    <ul class="nav nav-pills">
                        <li><a href="<?php echo base_path();?>">HOME</a></li>
                        <li><a href="<?php echo base_path();?>support-center">SUPPORT</a></li>
                        <li><a href="<?php echo base_path();?>contact-us">CONTACT US</a></li>
                        <?php if ( !$user->uid ) { ?>
                            <li><a href="<?php echo base_path();?>user">LOGIN</a></li>
                        <?php } ?>
                        <?php if ( $user->uid ) { ?>
                            <li><a href="<?php echo base_path();?>user/<?=$user->uid;?>/">PROFILE SETTINGS</a></li>

                        <?php } ?>
                    </ul>

                </div>



                <?php if ($header): ?>
                    <div id="header-blocks">
                        <?php print $header; ?>
                    </div> <!-- /#header-blocks -->
                <?php endif; ?>

            </div></div> <!-- /#header-inner, /#header -->
        <?php /*
<div id="top_nav">
<ul id="top_nav_links">
	<li class=""><a href="/aboutus.php">About Us</a></li>
    <li class=""><a href="/providers.php">Offerings</a></li>
    <li class=""><a href="/platform.php">Platform</a></li>
    <li class=""><a href="/news-releases/">News</a></li>
    <li class="last "><a href="/jobs.php">Jobs</a></li>
</ul>
</div>*/ ?>

        <div id="page-main"><div id="main-inner" class="clear-block<?php if ($search_box || $primary_links || $secondary_links || $navbar) { print ' with-navbar'; } ?>">

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




                            <?php
                            if ( !$user->uid &&
                                (
                                    $get_uri[2] == 'listingall' ||
                                    $get_uri[2] == 'listingcurriculum' ||
                                    $get_uri[2] == 'listingarchived' ||
                                    $get_uri[2] == 'listingall' ||
                                    empty($get_uri[2])
                                ) &&
                                (
                                    $get_uri[2] != 'support-center' ||
                                    $get_uri[2] != 'contact-us'
                                )
                            ) { ?>

                                <style>
                                    #user-login, input.login-input {
                                        padding: 5px;
                                    }

                                    div.tabs {
                                        margin: 0;
                                    }

                                </style>


                                <div style="display: table;width: 960px; font-family: 'Helvetica Neue'; font-size: 14pt;">



                                    <div style="display: table-cell; width:635px; height: 270px; padding: 10px 10px 0px 10px;">

                                        <p style="font-size: 30pt; font-family: 'Montserrat', sans-serif; color: #056696; padding-bottom: 0px;">Welcome to Real<strong>CME</strong><br />Health Professional.</p>
                                        <p style="padding-bottom: 0px;">If you are an EpocratesCME registered user and you're visiting RealCME Health Professional for the first time, welcome! Your account is available to you as always.  Just use the same email address you used on EpocratesCME and <a href="/cms/user/password/">REQUEST NEW PASSWORD</a> for security purposes.  Then you'll be all set--you will have full access to your certificates and all CME activities.</p>
                                        <p style="padding-bottom: 0px;">If you are a new user, please take a moment to <a href="/cms/user/register/">CREATE NEW ACCOUNT</a> and choose from the robust variety of CME activities below!</p>

                                    </div>

                                    <div style="display: table-cell; width:325px; vertical-align: top; border: solid 1px #eee; border-radius: 15px; background-color:#ffffff;">
                                        <div id="content-area">

                                            <div style="padding-left: 15px;">
                                                <form action="/cms/user?destination=listingall"  accept-charset="UTF-8" method="post">
                                                    <div><div class="form-item">
                                                            <label for="edit-name">USERNAME or EMAIL <span class="form-required" title="This field is required.">*</span></label>
                                                            <input type="text" maxlength="60" name="name" id="edit-name"  size="40" style="width: 280px;" value="" tabindex="1" class="form-text login-input required" />

                                                        </div>
                                                        <div class="form-item">
                                                            <label for="edit-pass">PASSWORD <span class="form-required" title="This field is required.">*</span></label>
                                                            <input type="password" name="pass" id="edit-pass"  size="40" style="width: 280px;"  tabindex="2" class="form-text login-input required" />

                                                        </div>
                                                        <input type="hidden" name="form_id" id="edit-user-login" value="user_login"  />
                                                        <button type="submit" class="btn btn-primary btn-default">LOGIN</button>
                                                        <!--input type="submit" name="op" id="edit-submit" value="Log in"  tabindex="3" class="form-submit" /-->

                                                    </div></form></div>

                                            <a href="/cms/user/register/"><div style="border: 1px solid #ccc; text-align: center; font-family: 'Montserrat', sans-serif; font-size: 14pt; padding: 10px 0; border-left: none; border-right: none;">CREATE NEW ACCOUNT</div></a>
                                            <a href="/cms/user/password/"><div style="text-align: center; font-family: 'Montserrat', sans-serif; font-size: 14pt; padding: 10px 0;">REQUEST NEW PASSWORD</div></a>

                                        </div>
                                    </div>

                                </div>




                            <?php } else { ?>
                                <?php
                                if ($user->uid &&
                                    (
                                        $get_uri[2] == 'listingall' ||
                                        $get_uri[2] == 'listingcurriculum' ||
                                        $get_uri[2] == 'listingarchived' ||
                                        $get_uri[2] == 'listingall' ||
                                        $get_uri[2] == 'node' ||
                                        $get_uri[2] == 'play' ||
                                        empty($get_uri[2])
                                    ) &&
                                    (
                                        $get_uri[2] != 'support-center' ||
                                        $get_uri[2] != 'contact-us'
                                    )
                                ) { ?>

                                    <style>
                                        #user-login, input.login-input {
                                            padding: 5px;
                                        }

                                        div.tabs {
                                            margin: 0;
                                        }

                                    </style>


                                    <div style="display: table;width: 770px; font-family: 'Helvetica Neue'; font-size: 14pt;">


                                        <div style="display: table-cell; width:635px; height: 125px; padding: 10px 10px 0px 10px;">

                                            <?php if (
                                                $get_uri[2] != 'node' &&
                                                $get_uri[2] != 'play'
                                            ) { ?>
                                                <p style="font-size: 20pt; font-family: 'Montserrat', sans-serif; color: #056696; padding-bottom: 0px;">
                                                    Welcome to Real<strong>CME</strong><br/>Health Professional.</p>
                                            <?php } ?>

                                            <?php if ( $get_uri[2] == 'node' || $get_uri[2] == 'play' ) { ?>
                                            <div style="padding: 10px; border: 1px solid #cccccc; background-color: #EFEFEF; font-size: 10pt;">
                                                <?php } ?>

                                                <p style="padding-bottom: 0px;">If you are an EpocratesCME registered user and you're visiting
                                                    RealCME Health Professional for the first time, welcome! Your account is available to you as
                                                    always. If you haven't done so yet, please take the time to <a href="/cms/user/<?=$user->uid;?>/edit">Change Your Profile Password</a>.  Then you'll be all set--you will have full access to your certificates and all CME activities.</p>


                                                <?php if ( $get_uri[2] == 'node' || $get_uri[2] == 'play' ) { ?></div><?php } ?>
                                        </div>

                                    </div>
                                    <?php if ( $get_uri[2] != 'play' ) { ?><hr /><?php } ?>


                                <?php }
                            }?>



                            <?php if (
                                $get_uri[3] != 'register' &&
                                $get_uri[3] != 'password' &&
                                $get_uri[2] != 'user' &&
                                $get_uri[2] != 'support-center' &&
                                $get_uri[2] != 'contact-us' &&
                                $get_uri[2] != 'node' &&
                                $get_uri[2] != 'play' &&
                                $get_uri[2] != 'termsofservice' &&
                                $get_uri[2] != 'privacypolicy'
                            ) { ?>
                                <div class="navbar activity-nav">
                                    <div class="navbar-inner">
                                        <ul class="nav">
                                            <li><a href="/cms/listingfeatured">FEATURED</a></li>
                                            <li><a href="/cms/listingcurriculum">CURRICULA</a></li>
                                            <li><a href="/cms/listingall">ALL</a></li>
                                            <li><a href="/cms/listingarchived">ARCHIVED</a></li>
                                            <form class="navbar-search pull-left">
                                                <input id="edit-filter0" type="text" name="filter0" class="search-query" placeholder="Search">
                                            </form>
                                        </ul>
                                    </div>
                                </div>
                            <?php } ?>



                            <?php $html_text = '<hr /><p style="font-family: \'Montserrat\', sans-serif; font-size:12pt; padding-bottom: 0px;">';?>
                            <?php if ( isset($get_uri[3]) && $get_uri[3] != '' && $get_uri[3] == 'password' ) { ?>
                <?php echo $html_text; ?>
                Please enter your email address below to request a new password.  Once you submit, please check your email.  Thank you!
                  </p><hr />
              <?php } ?>
                            <?php if ( isset($get_uri[3]) && $get_uri[3] != '' && $get_uri[3] == 'register' ) { ?>
              <?php echo $html_text; ?>
                 Please use the form below to create a new account.
                </p><hr />
              <?php } ?>

                            <?php if ( !isset($get_uri[3])  && $get_uri[2] == 'user' ) { ?>
              <?php echo $html_text; ?>
             Please use the form below to login to your RealCME Health Professional account.
                </p><hr />
                  <?php } ?>



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
                            <?php if ($sidebar_right) { ?>
                                <div id="companionlogo">
                                    <img src="<?php print $img_path ?>/img/logo-companion.gif" id="logo-companion" alt="CMECompanion" class="" />
                                </div>
                            <?php }?>
                            <!-- Accordion Menu Start -->
                            <div id="list1">
                                <!-- SIDEBAR RIGHT -->
                                <?php print $sidebar_right; ?>
                                <!-- END SIDEBAR RIGHT -->
                            </div>
                        </div>
                        <!--  altcontainer2 -->
                    </div></div> <!-- /#sidebar-right-inner, /#sidebar-right -->

            </div></div> <!-- /#main-inner, /#main -->


        <div id="footer">
            <div id="copyright">
                &copy; 2008-<?=date("Y");?> RealCME. All rights reserved.
            </div>

            <div id="bottom_links">
                <ul>

                    <li class="first_link"><a href="/">Home</a></li>
                    <li><a href="/cms/support-center">Support</a></li>
                    <li><a href="/privacy.php">Privacy Statement</a></li>
                    <li><a href="/tos.php">Terms of Use</a></li>
                    <li><a href="/sitemap.php">Sitemap</a></li>
                    <li><a href="/cms/contact-us">Contact Us</a></li>
                </ul>
            </div>

        </div>    <!-- Close Footer -->



        <?php if ($closure_region): ?>
            <div id="closure-blocks"><?php print $closure_region; ?></div>
        <?php endif; ?>

        <?php print $closure; ?>

    </div>
</div> <!-- /#page-inner, /#page -->
<script>
    $(document).ready( function() {
        $("a#login_link").hide();
        //$(".listing-tabs").hide();

        // Activity Menu Switch
        $(".listing-tabs").html(" ");
        $(".listing-tabs").append( $(".activity-nav") );


        var pageTitle = "<?php echo $get_uri[3];?>";
        switch(pageTitle) {
            case "password":
                $("h1.title").html("Request New Password")
                break;
            case "register":
                $("h1.title").html("Create Account")
        }

        <?php if ( $get_uri[2] == 'user' ) { ?>
        var actionAttr = $("form#user-login").attr('action');
        $("form#user-login").attr('action', actionAttr+"?destination=listingall" );

        var actionAttr = $("form#user-register").attr('action');
        $("form#user-register").attr('action', actionAttr+"?destination=listingall" );
        <?php } ?>

    });
</script>
<?php if (!$user->uid &&
    (
        $get_uri[2] != 'node'
    )
) { ?>

<?php } ?>
</body>
</html>