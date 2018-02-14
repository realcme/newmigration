<?php
global $user, $brand;
$img_path = base_path() . path_to_subtheme();
$filter_uri = explode('?', $_SERVER['REQUEST_URI']);
$get_uri = explode('/', $filter_uri[0]);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language; ?>" xml:lang="<?php print $language; ?>">

<head>
    <title><?php print $head_title; ?></title>
    <?php print $head; ?>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <?php print $styles; ?>
    <link rel="stylesheet" href="/cms/sites/all/themes/zen/patientcoachtheme/css/patientcoach.css" type="text/css" />
    <!--[if IE]>
    <link rel="stylesheet" href="<?php print $base_path . $directory; ?>/ie.css" type="text/css">
    <?php if ($subtheme_directory && file_exists($subtheme_directory .'/ie.css')): ?>
    <link rel="stylesheet" href="<?php print $base_path . $subtheme_directory; ?>/ie.css" type="text/css">
    <?php endif; ?>
    <![endif]-->
    <?php print $scripts; ?>
    <script>
        $(document).ready(function() {
            $(".cme-recommend-to-peer").hide();
            $(".cme-mastery-report").hide();
        });
    </script>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/cms/sites/all/themes/zen/patientcoachtheme/css/overwrite.css" type="text/css" />

    <script src="https://use.fontawesome.com/968260b1ae.js"></script>

</head>

<body class="<?php print $body_classes; ?>">
<!-- TESTING_THIS -->
<div id="page">
    <div id="logo-title">
        <div id="logo"><a href="<?php print $base_path."../"; ?>" title="<?php print t('Home'); ?>" rel="home">ReardenCME</a>
        </div>
    </div>
    <div class="nav">
        <?php if ($header): ?>
            <div id="header-blocks">
                <?php print $header; ?>
            </div> <!-- /#header-blocks -->
        <?php endif; ?>
    </div>
    <div id="header"></div>

    <div id="page-inner">
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
                                <?php print $breadcrumb; ?>
                                <?php if ($title): ?>
                                    <h1 class="title"><?php print $title; ?></h1>
                                <?php endif; ?>
                                <?php print $messages; ?>
                                <?php if ($tabs): ?>
                                    <div class="tabs"><?php print $tabs; ?></div>
                                <?php endif; ?>
                                <?php print $help; ?>
                            </div> <!-- /#content-header -->
                        <?php endif; ?>


                        <div id="content-area">
                            <!-- GET_URL : <?php echo $get_uri[2]; ?> -->
                            <?php $get_uri[2] = str_replace(' ', '', $get_uri[2]); ?>
                            <?php if ( $get_uri[2] == '' ) { ?>

                            <div class="header-content">
                                <div style="display: table;">

                                    <div style="display: table-cell; width: 700px; border-right: solid 10px #ffffff;  padding: 10px; font-family: 'Montserrat', sans-serif !important; font-size: 14px; line-height: 20px;">
                                        <h1>Welcome To Patient Coach</h1>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                    <div id="bg-image" style="display: table-cell; padding: 5px; width: 300px; ">
                                    </div>


                                </div>

                            </div>

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

                <?php if ($search_box || $primary_links || $secondary_links || $navbar): ?>
                    <div id="navbar"><div id="navbar-inner">

                            <a name="navigation" id="navigation"></a>

                            <?php if ($search_box): ?>
                                <div id="search-box">
                                    <?php print $search_box; ?>
                                </div> <!-- /#search-box -->
                            <?php endif; ?>

                            <?php if ($primary_links): ?>
                                <div id="primary">
                                    <?php print theme('links', $primary_links); ?>
                                </div> <!-- /#primary -->
                            <?php endif; ?>

                            <?php if ($secondary_links): ?>
                                <div id="secondary">
                                    <?php print theme('links', $secondary_links); ?>
                                </div> <!-- /#secondary -->
                            <?php endif; ?>

                            <?php print $navbar; ?>

                        </div></div> <!-- /#navbar-inner, /#navbar -->
                <?php endif; ?>

                <?php if ($sidebar_left): ?>
                    <div id="sidebar-left"><div id="sidebar-left-inner">
                            <?php print $sidebar_left; ?>
                        </div></div> <!-- /#sidebar-left-inner, /#sidebar-left -->
                <?php endif; ?>

                <?php if ($sidebar_right): ?>
                    <div id="sidebar-right"><div id="sidebar-right-inner">
                            <?php print $sidebar_right; ?>
                        </div></div> <!-- /#sidebar-right-inner, /#sidebar-right -->
                <?php endif; ?>

            </div></div> <!-- /#main-inner, /#main -->

    </div> <!-- /#page-inner, /#page -->

    <div id="footer"><div id="footer-inner">

            <div id="footer-message"><?php print $footer_message; ?></div>

        </div></div> <!-- /#footer-inner, /#footer -->

    <?php if ($closure_region): ?>
        <div id="closure-blocks"><?php print $closure_region; ?></div>
    <?php endif; ?>

    <?php print $closure; ?>

</div>

</body>
</html>
