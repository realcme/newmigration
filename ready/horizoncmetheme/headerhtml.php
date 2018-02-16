<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-us" xml:lang="en-us">
<head><title>Horizon CME | STAGING</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" href="http://i.realcme.net/cms/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="/cms/sites/all/themes/zen/horizoncmetheme/print.css" type="text/css" media="print"/>
    <!--[if IE]>
    <link rel="stylesheet" href="/cms/sites/all/themes/zen/ie.css" type="text/css"> <![endif]--> <!-- FIND_ME -->
    <script type="text/javascript" src="/cms/misc/jquery.js"></script>
    <script type="text/javascript" src="/cms/misc/drupal.js"></script>
    <script type="text/javascript" src="/cms/sites/all/modules/jquery_update/compat.js"></script>
    <script type="text/javascript" src="/cms/sites/all/modules/custom/cmebase/js/allscripts.js?v=1"></script>
    <script type="text/javascript">Drupal.extend({
            settings: {
                "googleanalytics": {
                    "trackOutgoing": 1,
                    "trackMailto": 1,
                    "trackDownload": 1,
                    "trackDownloadExtensions": "7z|aac|avi|csv|doc|exe|flv|gif|gz|jpe?g|js|mp(3|4|e?g)|mov|pdf|phps|png|ppt|rar|sit|tar|torrent|txt|wma|wmv|xls|xml|zip",
                    "LegacyVersion": 0
                }
            }
        });</script>
    <script> $(document).ready(function () {
            function getWindowHeight(win, doc) {
                var myHeight = 0;
                if ((win.innerHeight) && (typeof(win.innerHeight) == 'number')) {
                    myHeight = win.innerHeight;
                } else if (doc.documentElement && (doc.documentElement.clientHeight)) {
                    myHeight = doc.documentElement.clientHeight;
                } else if (doc.body && (doc.body.clientHeight)) {
                    myHeight = doc.body.clientHeight;
                }
                return myHeight;
            }

            $.cookie('win_height', getWindowHeight(window, window.document), {path: '/', domain: '.realcme.net'});
            var newrefurl = window.location + '';
            pos = newrefurl.indexOf('?comp=');
            if (pos > 0) {
                newrefurl = newrefurl.substring(0, pos);
            }
            $.cookie('ref_url', newrefurl, {path: '/', domain: '.realcme.net'});
            $.cookie('cdn_url', 'http://i.realcme.net/cms/', {path: '/', domain: '.realcme.net'});
            $(window).resize(function () {
                function getWindowHeight(win, doc) {
                    var myHeight = 0;
                    if ((win.innerHeight) && (typeof(win.innerHeight) == 'number')) {
                        myHeight = win.innerHeight;
                    } else if (doc.documentElement && (doc.documentElement.clientHeight)) {
                        myHeight = doc.documentElement.clientHeight;
                    } else if (doc.body && (doc.body.clientHeight)) {
                        myHeight = doc.body.clientHeight;
                    }
                    return myHeight;
                }

                $.cookie('win_height', getWindowHeight(window, window.document), {path: '/', domain: '.realcme.net'});
            });
        }); </script>
    <link rel='stylesheet' id='gdlr-date-picker-css'
          href='//ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/themes/smoothness/jquery-ui.css?ver=4.3.1'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='Raleway-google-font-css'
          href='http://fonts.googleapis.com/css?family=Raleway%3A100%2C200%2C300%2Cregular%2C500%2C600%2C700%2C800%2C900&#038;subset=latin&#038;ver=4.3.1'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='Montserrat-google-font-css'
          href='http://fonts.googleapis.com/css?family=Montserrat%3Aregular%2C700&#038;subset=latin&#038;ver=4.3.1'
          type='text/css' media='all'/> <!-- Bootstrap & Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" media="all"
          href="https://horizoncme.mededmanager.com/assets/horizoncme/application-da6106e28c921aa8ac3bf19b50631a4e2e6d8d224ed5fd2c85848d786cb587a0.css"/>
    <meta name="csrf-param" content="authenticity_token"/>
    <meta name="csrf-token"
          content="xfbBvec23RclIpENIwnSvScZA2Y2oYOXWSWXg9SoD8rz5YgKNm5PFlaWzQa+gLeNbq3W/BwNhhtYRPH3jxJlzg=="/>
    <script src="https://horizoncme.mededmanager.com/assets/horizoncme/application-48c6a0ef94f58753f4bb39f74514c4b4c6f554ef368e4903a9a8ec838484d5f7.js"></script>
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script>$(document).ready(function () {
            Stripe.setPublishableKey("pk_live_iJM3aBecXnSQsXcUNv0ymLFK");
        }); </script>
    <link rel="icon" type="image/png"
          href="https://horizoncme.mededmanager.com/assets/horizoncme/cropped-HorizonCME_logo_SMALL-01-1-32x32-26725898637a53ec5a74dec7d33411ff946098dad91faa40f32ffde90ec75f4a.png"
          sizes="32x32"/>
    <link rel="icon" type="image/png"
          href="https://horizoncme.mededmanager.com/assets/horizoncme/cropped-HorizonCME_logo_SMALL-01-1-192x192-6775f3783308c18cf1aadc8e6234f29440052cfbcff007b8439dab9d83928bbb.png"
          sizes="192x192"/>
    <link rel="apple-touch-icon-precomposed" type="image/png"
          href="https://horizoncme.mededmanager.com/assets/horizoncme/cropped-HorizonCME_logo_SMALL-01-1-180x180-046365559f3e1e2c20785c96062250182a390d07efedbb09c495707b53f303cb.png"/>
    <meta name="msapplication-TileImage"
          content="/assets/horizoncme/cropped-HorizonCME_logo_SMALL-01-1-270x270-9725c0c20dff3ac3049e36f820cca242d8de9262dae6c6bb233f570144ec68f8.png"/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat%3A700%2C400" rel="stylesheet" property="stylesheet"
          type="text/css" media="all"/>
    <style> body {
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
        } </style>
</head>
<body class="not-front not-logged-in one-sidebar sidebar-right page-listingall section-listingall">
<header>
    <div class="container">
        <div class="row">
            <div class="col-6 col-md-9"><a href="https://horizoncme.mededmanager.com/"><img class="img-fluid" id="logo"
                                                                                            src="https://horizoncme.mededmanager.com/assets/horizoncme/horizon-cme-logo-b68f92e16f9766cb902b2d17fe20e9b99a0213efa1a52456703f035cc56ae06c.png"
                                                                                            alt="Horizon cme logo"></a>
                <ul class="nav hidden-md-down" id="nav">
                    <li class="nav-item"><a class="nav-link" href="/store/all/search"><strong>CME PRograms</strong>
                            <small>Current Activities</small>
                        </a></li>
                    <li class="nav-item dropdown"><a data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                                                     aria-expanded="false" class="nav-link"><strong>About Us</strong>
                            <small>Why Horizon CME</small>
                        </a>
                        <div class="dropdown-menu"><a class="dropdown-item"
                                                      href="https://horizoncme.mededmanager.com/store/pages/about-horizon-cme">About
                                Horizon CME</a> <a class="dropdown-item"
                                                   href="https://horizoncme.mededmanager.com/store/pages/our-services">Our
                                Services</a> <a class="dropdown-item"
                                                href="https://horizoncme.mededmanager.com/store/pages/awards-and-publications">Awards
                                &amp; Publications</a></div>
                    </li>
                    <li class="nav-item"><a href="https://horizoncme.mededmanager.com/store/pages/contact"
                                            class="nav-link"><strong>Contact</strong>
                            <small>Get In Touch</small>
                        </a></li>
                </ul>
            </div>
            <div class="col-6 col-md-3">
                <div class="hidden-lg-up" id="nav-mobile-holder"><em class="fa fa-bars"></em></div>
            </div>
        </div>
    </div>
</header>
<style type="text/css" media="all">@import "/cms/../cmsdata/css/60af4f73475fcf4f324117870f1f6e55.css";</style>
<style> div.listing-tabs div.form-item input[type="text"] {
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
    } </style>
<div id="page">
    <div id="page-inner"><a name="top" id="navigation-top"></a>
        <div id="skip-to-nav"><a href="#navigation">Skip to Navigation</a></div>
        <div id="header">
            <div id="header-inner" class="clear-block">
                <!-- <div id="logo-title"> <div id="logo"><a href="/cms/../" title="Home" rel="home"><img src="/cms/sites/all/themes/zen/horizoncmetheme/img/logo.gif" alt="Home" id="logo-image" /></a></div> </div> -->
                <!-- /#logo-title --> </div>
        </div> <!-- /#header-inner, /#header -->
        <div id="main">
            <div id="main-inner" class="clear-block with-navbar">
                <div id="content">
                    <div id="content-inner">
                        <div id="content-header"></div> <!-- /#content-header -->
                        <div id="content-area">
                            <div class='view view-listing-all'>
                                <div class='listing-tabs'>
                                    <form action="http://horizoncme.realcme.net/cms/listingall" accept-charset="UTF-8"
                                          method="get" id="views-filters">
                                        <div>
                                            <table>
                                                <thead>
                                                <tr>
                                                    <th>Enter keywords</th>
                                                    <th></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr class="odd">
                                                    <td>
                                                        <div class='listing-tab-group'><a href='/cms/listingfeatured'>
                                                                <div class='first listing-tab'> Featured</div>
                                                            </a> <a href='/cms/listingcurriculum'>
                                                                <div class='listing-tab'> Curricula</div>
                                                            </a> <a href='/cms/listingall'>
                                                                <div class='listing-tab selected'> All</div>
                                                            </a> <a href='/cms/listingarchived'>
                                                                <div class='listing-tab'> Archived</div>
                                                            </a>
                                                            <div class='last listing-filter'>
                                                                <div class="form-item"><input type="text"
                                                                                              maxlength="255"
                                                                                              name="filter0"
                                                                                              id="edit-filter0"
                                                                                              size="10" value="Search"
                                                                                              placeholder="Search"
                                                                                              class="form-text"/></div>
                                                            </div>
                                                    </td>
                                                    <td><input type="submit" id="edit-submit" value=""
                                                               class="form-submit"/></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </form>
                                </div>
                                <div class='view-empty view-empty-listing-all'><p>There are no available activities
                                        yet.</p></div>
                            </div>
                            <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/></div> <!-- -->
                    </div>
                </div> <!-- /#content-inner, /#content -->
                <div id="sidebar-right">
                    <div id="sidebar-right-inner">
                        <div id="altcontainer2">
                            <div id="companionlogo"><img
                                        src="/cms/sites/all/themes/zen/horizoncmetheme/img/logo-companion.gif"
                                        id="logo-companion" alt="CMECompanion" class=""/></div>
                            <!-- Accordion Menu Start -->
                            <div id="list1">
                                <div id="block-cmeprofile-1"
                                     class="block block-cmeprofile region-odd odd region-count-1 count-1">
                                    <div class="block-inner">
                                        <div class="content">
                                            <div><span class="left cmeloginregistration"> <p>These activities require <a
                                                                href="http://comp.realcme.net/cms/user/register?TB_iframe=true&width=655"
                                                                class="thickbox" id="registration_link">registration</a>. Registration time is less than two minutes, and will provide you access to your personal CMECompanion toolset.</p> <p>If you are already registered, please <a
                                                                href="http://comp.realcme.net/cms/user?TB_iframe=true&width=655"
                                                                class="thickbox" id="login_link">log in</a>.</p> <div
                                                            class="left" style="padding: 10px 0px 5px 5px;"> <span
                                                                style="cursor:pointer"
                                                                onClick="$('#companion_description').slideToggle('slow'); $('#comp_info_plus').toggle(); $('#comp_info_minus').toggle();"> <span
                                                                    style="font-size: 12px"
                                                                    id="comp_info_plus"> (+)</span><span
                                                                    id="comp_info_minus"
                                                                    style="display: none; font-size: 12px"> (&ndash;)</span> <span
                                                                    style="text-decoration: underline;">What is CMECompanion?</span></span> <div
                                                                id="companion_description"
                                                                style="padding-top:10px; display:none;">These activities are supported by CMECompanion, a personal toolset developed by RealCME for tracking your progress on particular topics in real time. Use it to set up and track goals, review topic and program scores, compare scores with peers, track earned credit, and schedule follow up activities.<br><br> Questions? Please contact “Support” at the bottom of the page. </div> </div> </span>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- /block-inner, /block --> </div>
                        </div> <!-- altcontainer2 --> </div>
                </div> <!-- /#sidebar-right-inner, /#sidebar-right --> </div>
        </div> <!-- /#main-inner, /#main -->
        <div id="footer">
            <div id="footer-inner">
                <div id="footer-message">
                    <center>
                        <small> Copyright &copy; RealCME, Inc. 2008-2017. All Rights Reserved. <a
                                    href="/cms/privacypolicy">Privacy Policy</a>&nbsp; <a href="/cms/termsofservice">Terms
                                of Service</a>&nbsp; <a href="/cms/support-center">Support</a></small>
                        <br/><br/> <img src="/cms/sites/all/themes/zen/horizoncmetheme/img/footerlogo.png" alt=""
                                        class="center"/></center>
                </div>
            </div>
        </div> <!-- /#footer-inner, /#footer -->
        <script type="text/javascript" src="/cms/sites/all/modules/google_analytics/googleanalytics.js"></script>
        <script type="text/javascript">var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
            document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));</script>
        <script type="text/javascript">try {
                var pageTracker = _gat._getTracker("UA-9136459-4");
                pageTracker._setDomainName("realcme.com");
                pageTracker._setAllowLinker(true);
                pageTracker._trackPageview();
            } catch (err) {
            }</script>
    </div>
</div> <!-- /#page-inner, /#page -->
