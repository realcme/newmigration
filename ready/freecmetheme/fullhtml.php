<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-us" xml:lang="en-us">
<head><title>FreeCME</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" href="http://i.realcme.com/cms/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="/cms/sites/all/themes/zen/freecmetheme/print.css" type="text/css" media="print"/>
    <style type="text/css" media="all">@import "/cms/../cmsdata/css/41ecaa7bd28d4e4b01a4cb431f911f58.css";</style>
    <!--[if IE]>
    <link rel="stylesheet" href="/cms/sites/all/themes/zen/ie.css" type="text/css"> <![endif]-->
    <script type="text/javascript" src="/cms/misc/jquery.js"></script>
    <script type="text/javascript" src="/cms/misc/drupal.js"></script>
    <script type="text/javascript" src="/cms/sites/all/modules/jquery_update/compat.js"></script>
    <script type="text/javascript" src="/cms/sites/all/modules/custom/cmebase/js/allscripts.js?v=1"></script>
    <script type="text/javascript" src="/cms/sites/all/modules/custom/cmeauthoradmin/jquery.cmeauthoradmin.js"></script>
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

            $.cookie('win_height', getWindowHeight(window, window.document), {path: '/', domain: '.realcme.com'});
            var newrefurl = window.location + '';
            pos = newrefurl.indexOf('?comp=');
            if (pos > 0) {
                newrefurl = newrefurl.substring(0, pos);
            }
            $.cookie('ref_url', newrefurl, {path: '/', domain: '.realcme.com'});
            $.cookie('cdn_url', 'http://i.realcme.com/cms/', {path: '/', domain: '.realcme.com'});
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

                $.cookie('win_height', getWindowHeight(window, window.document), {path: '/', domain: '.realcme.com'});
            });
        }); </script>
</head>
<body class="front not-logged-in one-sidebar sidebar-right">
<div class="document">
    <header class="main-header">
        <div class="main-header__logo"><a href="/"><img alt="FreeCME"
                                                        src="http://www.freeCME.com/ext/resources/images/logo.png"/>
            </a></div>
        <div class="main-header__content-desktop">
            <div class="main-header__social-icons">
                <section class="editorial-content home-social-links">
                    <div class="editorial-content__details">
                        <div class="editorial-content__body"><p>Follow Us:</p> &nbsp; <a
                                    href="https://www.linkedin.com/company/ahc-media-llc"> <img
                                        class="social-media-icon-header__linkedin"
                                        src="/cms/sites/all/themes/zen/freecmetheme/img/freecme/linkedin.png"/> </a> <a
                                    href="https://www.facebook.com/freecme.atlanta"> <img
                                        class="social-media-icon-header__facebook"
                                        src="/cms/sites/all/themes/zen/freecmetheme/img/freecme/facebook_icon.png"/>
                            </a> <a href="https://twitter.com/freecmeonline"> <img
                                        class="social-media-icon-header__twitter"
                                        src="/cms/sites/all/themes/zen/freecmetheme/img/freecme/twitter_icon.png"/> </a>
                            <!-- <a href="#" class="social-media-icon-header__facebook"></a> <a href="#" class="social-media-icon-header__twitter"></a> -->
                        </div>
                        <div class="editorial-content__link"></div>
                    </div>
                </section>
            </div>
            <div class="main-header__main-search-box">
                <form id="main-search-box" method="get" action="http://www.freeCME.com/search">
                    <div class="field-set"><input class="header-search-field" type="text" name="q"
                                                  placeholder="Search Courses"> <input
                                class="header-search-button button" type="submit" value="GO"></div>
                </form>
            </div>
            <!-- <div class="main-header__secondary-navigation"> <a class="user-logged-out hide" href="/user/login">Member Login</a> <a class="user-logged-in hide" href="https://learning.freecme.com/mycme/mycme.do?method=notme">Logout</a> <a class="user-logged-in hide" href="/user/profile">My Profile</a> <a class="user-logged-in hide" href="https://learning.freecme.com/mycme">My Courses</a> </div> -->
            <div class="main-header__primary-navigation">
                <div class="navigation-1">
                    <div class='navigation' id='primaryNav'>
                        <ul class='level1'>
                            <li class='level1-li first'><a href="http://www.freeCME.com/" class="link2">Home</a></li>
                            <li class='level1-li'><a href="https://learning.freecme.com/s/catalog"
                                                     class="link2">Courses</a></li>
                            <li class='level1-li'><a href="http://www.freeCME.com/specialties"
                                                     class="link2">Specialties</a></li>
                            <li class='level1-li'><a href="http://www.freecme.com/events class=" link2">Events</a></li>
                            <li class='level1-li'><a href="http://www.freeCME.com/about" class="link2">About Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div id="page">
        <div id="page-inner"><a name="top" id="navigation-top"></a>
            <div id="skip-to-nav"><a href="#navigation">Skip to Navigation </a></div>
            <div id="header">
                <div id="header-inner" class="clear-block">
                    <!-- <div id="logo-title"> <div id="logo"><a href="/cms/../" title="Home" rel="home"><img src="/cms/sites/all/themes/zen/freecmetheme/img/logo.gif" alt="Home" id="logo-image" /></a></div> </div> -->
                    <!-- /#logo-title --> </div>
            </div> <!-- /#header-inner, /#header -->
            <div id="main">
                <div id="main-inner" class="clear-block with-navbar">
                    <div id="content">
                        <div id="content-inner">
                            <div id="content-area">
                                <div id="displaypromotions">
                                    <div id="displaypromotions_header" style="display: none;">FEATURED ACTIVITIES</div>
                                    <div id="displaypromotions_nid" style="display: none;">0</div><!-- BEGIN PROMO -->
                                    <div id="related-activities">
                                        <div id="related-activities-title" class="related-activities-title">FEATURED
                                            ACTIVITIES
                                        </div>
                                        <div class="related-activities-left testing">
                                            <div class="node">
                                                <div class="node-inner">
                                                    <div class="rcmcontent">
                                                        <div class="related-patient-bg"
                                                             style="background-image: url(/cms/sites/all/modules/custom/cmecoursepromotion/img/related-patient-bg.gif); ">
                                                            <img src="/cms/../cmsdata/course_icons/icon_570728.jpg"
                                                                 alt="570728"
                                                                 style="width: 43px; height: 43px; border: 0; margin: 0">
                                                        </div>
                                                        <div class="activity-subject">
                                                            <div class="activity-title activity-title-display"><span
                                                                        class="promo-link"><a id="lt-790342"
                                                                                              href="/cms/node/790342">Get Smart: General Drug Information about Opioids Analgesics</a></span>
                                                            </div>
                                                            <div class="certified-icon"
                                                                 style="background-image: url(/cms/sites/all/modules/custom/cmecoursepromotion/img/CME-certified.gif); "></div>
                                                            <div class="certified-text">Pain Management</div>
                                                        </div>
                                                        <div class="activity-info">Get Smart: General Drug Information
                                                            about Opioids Analgesics
                                                        </div>
                                                        <div style="clear: both;"></div>
                                                        <div class="next-steps-related">
                                                            <div class="next-steps-icon"></div>
                                                            <div class="schedule-activity"></div>
                                                            <div class="next-steps-divider"></div>
                                                            <div class="next-steps-icon"><img
                                                                        src="/cms/sites/all/modules/custom/cmecoursepromotion/img/proceed-activity.gif"
                                                                        alt="Proceed To Activity"
                                                                        style="width: 29px; height: 29px; border: 0; margin: 0">
                                                            </div>
                                                            <div class="proceed-activity"><span class="promo-link"><a
                                                                            id="lp-790342" href="/cms/node/790342">Proceed To Activity</a></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- BOF #8380 and #8473, CMECompanion float glitch -->
                                            <script type="text/javascript"> $(function () {
                                                    if ($('body').hasClass('node-type-course') && !$('body').hasClass('no-sidebars')) {
                                                        if ($('#main-inner').find('#sidebar-right').length > 0) {
                                                            $('#page-inner').addClass('clear-block');
                                                        } else {
                                                            $('#main-inner').removeClass('clear-block');
                                                            $('#page-inner, #page-main').addClass('clear-block');
                                                            if ($('#sidebar-right').offset().top !== 187) {
                                                                $('#sidebar-right').css('margin-top', 25);
                                                            }
                                                        }
                                                    }
                                                }); </script><!-- EOF #8380 and #8473 --></div>
                                        <div class="related-activities-right testing">
                                            <div class="node">
                                                <div class="node-inner">
                                                    <div class="rcmcontent">
                                                        <div class="related-patient-bg"
                                                             style="background-image: url(/cms/sites/all/modules/custom/cmecoursepromotion/img/related-patient-bg.gif); ">
                                                            <img src="/cms/../cmsdata/course_icons/icon_598568.jpg"
                                                                 alt="598568"
                                                                 style="width: 43px; height: 43px; border: 0; margin: 0">
                                                        </div>
                                                        <div class="activity-subject">
                                                            <div class="activity-title activity-title-display"><span
                                                                        class="promo-link"><a id="lt-813221"
                                                                                              href="/cms/node/813221">Navigating the Challenges of Prescribing PCSK9 Inhibitors in Patients...</a></span>
                                                            </div>
                                                            <div class="certified-icon"
                                                                 style="background-image: url(/cms/sites/all/modules/custom/cmecoursepromotion/img/CME-certified.gif); "></div>
                                                            <div class="certified-text">Cardiology</div>
                                                        </div>
                                                        <div class="activity-info">The use of PCSK9 inhibitors (PSCK9Is)
                                                            in certain patients with hypercholesterolemia
                                                        </div>
                                                        <div style="clear: both;"></div>
                                                        <div class="next-steps-related">
                                                            <div class="next-steps-icon"></div>
                                                            <div class="schedule-activity"></div>
                                                            <div class="next-steps-divider"></div>
                                                            <div class="next-steps-icon"><img
                                                                        src="/cms/sites/all/modules/custom/cmecoursepromotion/img/proceed-activity.gif"
                                                                        alt="Proceed To Activity"
                                                                        style="width: 29px; height: 29px; border: 0; margin: 0">
                                                            </div>
                                                            <div class="proceed-activity"><span class="promo-link"><a
                                                                            id="lp-813221" href="/cms/node/813221">Proceed To Activity</a></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- BOF #8380 and #8473, CMECompanion float glitch -->
                                            <script type="text/javascript"> $(function () {
                                                    if ($('body').hasClass('node-type-course') && !$('body').hasClass('no-sidebars')) {
                                                        if ($('#main-inner').find('#sidebar-right').length > 0) {
                                                            $('#page-inner').addClass('clear-block');
                                                        } else {
                                                            $('#main-inner').removeClass('clear-block');
                                                            $('#page-inner, #page-main').addClass('clear-block');
                                                            if ($('#sidebar-right').offset().top !== 187) {
                                                                $('#sidebar-right').css('margin-top', 25);
                                                            }
                                                        }
                                                    }
                                                }); </script><!-- EOF #8380 and #8473 --></div>
                                        <div style="clear: both;"></div>
                                        <div class="related-activities-left testing">
                                            <div class="node">
                                                <div class="node-inner">
                                                    <div class="rcmcontent">
                                                        <div class="related-patient-bg"
                                                             style="background-image: url(/cms/sites/all/modules/custom/cmecoursepromotion/img/related-patient-bg.gif); ">
                                                            <img src="/cms/../cmsdata/course_icons/icon_585059.png"
                                                                 alt="585059"
                                                                 style="width: 43px; height: 43px; border: 0; margin: 0">
                                                        </div>
                                                        <div class="activity-subject">
                                                            <div class="activity-title activity-title-display"><span
                                                                        class="promo-link"><a id="lt-790884"
                                                                                              href="/cms/node/790884">Improving the Psoriatic Disease Continuum</a></span>
                                                            </div>
                                                            <div class="certified-icon"
                                                                 style="background-image: url(/cms/sites/all/modules/custom/cmecoursepromotion/img/CME-certified.gif); "></div>
                                                            <div class="certified-text">Dermatology</div>
                                                        </div>
                                                        <div class="activity-info">Improving the Psoriatic Disease
                                                            Continuum
                                                        </div>
                                                        <div style="clear: both;"></div>
                                                        <div class="next-steps-related">
                                                            <div class="next-steps-icon"></div>
                                                            <div class="schedule-activity"></div>
                                                            <div class="next-steps-divider"></div>
                                                            <div class="next-steps-icon"><img
                                                                        src="/cms/sites/all/modules/custom/cmecoursepromotion/img/proceed-activity.gif"
                                                                        alt="Proceed To Activity"
                                                                        style="width: 29px; height: 29px; border: 0; margin: 0">
                                                            </div>
                                                            <div class="proceed-activity"><span class="promo-link"><a
                                                                            id="lp-790884" href="/cms/node/790884">Proceed To Activity</a></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- BOF #8380 and #8473, CMECompanion float glitch -->
                                            <script type="text/javascript"> $(function () {
                                                    if ($('body').hasClass('node-type-course') && !$('body').hasClass('no-sidebars')) {
                                                        if ($('#main-inner').find('#sidebar-right').length > 0) {
                                                            $('#page-inner').addClass('clear-block');
                                                        } else {
                                                            $('#main-inner').removeClass('clear-block');
                                                            $('#page-inner, #page-main').addClass('clear-block');
                                                            if ($('#sidebar-right').offset().top !== 187) {
                                                                $('#sidebar-right').css('margin-top', 25);
                                                            }
                                                        }
                                                    }
                                                }); </script><!-- EOF #8380 and #8473 --></div>
                                        <div class="related-activities-right testing">
                                            <div class="node">
                                                <div class="node-inner">
                                                    <div class="rcmcontent">
                                                        <div class="related-patient-bg"
                                                             style="background-image: url(/cms/sites/all/modules/custom/cmecoursepromotion/img/related-patient-bg.gif); ">
                                                            <img src="/cms/../cmsdata/course_icons/icon_610444_0.jpg"
                                                                 alt="610444"
                                                                 style="width: 43px; height: 43px; border: 0; margin: 0">
                                                        </div>
                                                        <div class="activity-subject">
                                                            <div class="activity-title activity-title-display"><span
                                                                        class="promo-link"><a id="lt-836397"
                                                                                              href="/cms/node/836397">Menopause and Sexual Health: Dyspareunia Therapeutic Advances</a></span>
                                                            </div>
                                                            <div class="certified-icon"
                                                                 style="background-image: url(/cms/sites/all/modules/custom/cmecoursepromotion/img/CME-certified.gif); "></div>
                                                            <div class="certified-text">Womens Health</div>
                                                        </div>
                                                        <div class="activity-info">ISSWSH Symposium Highlights</div>
                                                        <div style="clear: both;"></div>
                                                        <div class="next-steps-related">
                                                            <div class="next-steps-icon"></div>
                                                            <div class="schedule-activity"></div>
                                                            <div class="next-steps-divider"></div>
                                                            <div class="next-steps-icon"><img
                                                                        src="/cms/sites/all/modules/custom/cmecoursepromotion/img/proceed-activity.gif"
                                                                        alt="Proceed To Activity"
                                                                        style="width: 29px; height: 29px; border: 0; margin: 0">
                                                            </div>
                                                            <div class="proceed-activity"><span class="promo-link"><a
                                                                            id="lp-836397" href="/cms/node/836397">Proceed To Activity</a></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- BOF #8380 and #8473, CMECompanion float glitch -->
                                            <script type="text/javascript"> $(function () {
                                                    if ($('body').hasClass('node-type-course') && !$('body').hasClass('no-sidebars')) {
                                                        if ($('#main-inner').find('#sidebar-right').length > 0) {
                                                            $('#page-inner').addClass('clear-block');
                                                        } else {
                                                            $('#main-inner').removeClass('clear-block');
                                                            $('#page-inner, #page-main').addClass('clear-block');
                                                            if ($('#sidebar-right').offset().top !== 187) {
                                                                $('#sidebar-right').css('margin-top', 25);
                                                            }
                                                        }
                                                    }
                                                }); </script><!-- EOF #8380 and #8473 --></div>
                                        <div style="clear: both;"></div>
                                    </div> <!-- END PROMO -->
                                    <div style="clear: both;"></div>
                                </div>
                                <div class='listing-featured'>
                                    <div class='listing-tabs'>
                                        <form action="http://freecme.realcme.com/cms/listingall" accept-charset="UTF-8"
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
                                                            <div class='listing-tab-group'><a
                                                                        href='/cms/listingfeatured'>
                                                                    <div class='first listing-tab selected'> Featured
                                                                    </div>
                                                                </a> <a href='/cms/listingcurriculum'>
                                                                    <div class='listing-tab'> Curricula</div>
                                                                </a> <a href='/cms/listingall'>
                                                                    <div class='listing-tab'> All</div>
                                                                </a> <a href='/cms/listingarchived'>
                                                                    <div class='listing-tab'> Archived</div>
                                                                </a>
                                                                <div class='last listing-filter'>
                                                                    <div class="form-item"><input type="text"
                                                                                                  maxlength="255"
                                                                                                  name="filter0"
                                                                                                  id="edit-filter0"
                                                                                                  size="10"
                                                                                                  value="Search"
                                                                                                  placeholder="Search"
                                                                                                  class="form-text"/>
                                                                    </div>
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
                                    <div class='listing-featured-table'>
                                        <table id="listing-featured" align="center">
                                            <thead>
                                            <tr>
                                                <th></th>
                                                <th>Title</th>
                                                <th>Credits</th>
                                                <th>Expiration date</th>
                                                <th>Topic</th>
                                                <th>Launch Date</th>
                                                <th>Statement</th>
                                                <th>Faculty</th>
                                                <th>Relevant Terms</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr class="odd">
                                                <td valign="top" style="font-weight: normal;"
                                                    class="view-field-node-data-field-icon-field-icon-fid"><img
                                                            src="http://freecme.realcme.com/cms/../cmsdata/course_icons/icon_570728.jpg"
                                                            alt="icon_570728.jpg" title="icon_570728.jpg" width="43"
                                                            height="38"/></td>
                                                <td valign="top" style="font-weight: normal;"
                                                    class="view-field-node-title"><a
                                                            href="/cms/node/790342?utm_source=activitylist&amp;utm_medium=web&amp;utm_content=feature&amp;utm_campaign=">Get
                                                        Smart: General Drug Information about Opioids
                                                        Analgesics</a><br/>Pain Management
                                                </td>
                                                <td valign="top" style="font-weight: normal;text-align: center"
                                                    class="view-field-node-data-field-all-credits-field-all-credits-value">
                                                    0.5&nbsp;AMA<br/>0.5&nbsp;ANCC<br/></td>
                                                <td valign="top" style=""
                                                    class="view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                    26-Jun-18
                                                </td>
                                                <td class="view-field-term-node-1-name">Pain Management</td>
                                                <td class="view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                    27-Jun-17
                                                </td>
                                                <td class="view-field-node-data-field-patient-statement-field-patient-statement-value"></td>
                                                <td class="view-field-node-data-field-course-desc-field-course-desc-value"></td>
                                                <td class="view-field-node-data-field-faculty-field-faculty-value">
                                                    Yvonne M. D'Arcy, MS, CRNP, CNS
                                                </td>
                                                <td class="view-field-term-node-3-name"></td>
                                                <td class="view-field-node-data-field-activity-group-field-activity-group-nid">
                                                    782352
                                                </td>
                                                <td class="view-field-content-type-activity-group-field-group-name-value">
                                                    Risk Evaluation and Mitigation Strategy (REMS)
                                                </td>
                                                <td class="related-activities"><a
                                                            href="/cms/node/780099?utm_source=activitylist&amp;utm_medium=web&amp;utm_content=feature&amp;utm_campaign=">Get
                                                        Smart: Assessing Patients for Treatment with Opioid Analgesic
                                                        Therapy</a><a
                                                            href="/cms/node/788753?utm_source=activitylist&amp;utm_medium=web&amp;utm_content=feature&amp;utm_campaign=">Get
                                                        Smart: Counseling Patients and Caregivers About the Safe Use of
                                                        Opioid Analgesics</a><a
                                                            href="/cms/node/782350?utm_source=activitylist&amp;utm_medium=web&amp;utm_content=feature&amp;utm_campaign=">Get
                                                        Smart: Evaluating and Initiating Opioid Analgesic Therapy</a><a
                                                            href="/cms/node/784276?utm_source=activitylist&amp;utm_medium=web&amp;utm_content=feature&amp;utm_campaign=">Get
                                                        Smart: Managing Therapy with Opioid Analgesics</a><a
                                                            href="/cms/node/794545?utm_source=activitylist&amp;utm_medium=web&amp;utm_content=feature&amp;utm_campaign=">Get
                                                        Smart: Specific Drug Information for Extended-Release and
                                                        Long-Acting Opioids</a></td>
                                            </tr>
                                            <tr class="even">
                                                <td valign="top" style="font-weight: normal;"
                                                    class="view-field-node-data-field-icon-field-icon-fid"><img
                                                            src="http://freecme.realcme.com/cms/../cmsdata/course_icons/icon_598568.jpg"
                                                            alt="icon_598568.jpg" title="icon_598568.jpg" width="48"
                                                            height="48"/></td>
                                                <td valign="top" style="font-weight: normal;"
                                                    class="view-field-node-title"><a
                                                            href="/cms/node/813221?utm_source=activitylist&amp;utm_medium=web&amp;utm_content=feature&amp;utm_campaign=">Navigating
                                                        the Challenges of Prescribing PCSK9 Inhibitors in Patients with
                                                        Persistent Elevated LDL-C</a><br/>Cardiology
                                                </td>
                                                <td valign="top" style="font-weight: normal;text-align: center"
                                                    class="view-field-node-data-field-all-credits-field-all-credits-value">
                                                    1&nbsp;AMA<br/>1&nbsp;ACPE<br/>1&nbsp;ANCC<br/>1&nbsp;CDR<br/></td>
                                                <td valign="top" style=""
                                                    class="view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                    19-Sep-18
                                                </td>
                                                <td class="view-field-term-node-1-name">Cardiology</td>
                                                <td class="view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                    19-Sep-17
                                                </td>
                                                <td class="view-field-node-data-field-patient-statement-field-patient-statement-value"></td>
                                                <td class="view-field-node-data-field-course-desc-field-course-desc-value">
                                                    The use of PCSK9 inhibitors (PSCK9Is) in certain patients with
                                                    hypercholesterolemia
                                                </td>
                                                <td class="view-field-node-data-field-faculty-field-faculty-value">James
                                                    Underberg, MS, MD, FACPM, FACP, FASH, FASPC, FNLA (Chair)
                                                </td>
                                                <td class="view-field-term-node-3-name"></td>
                                                <td class="view-field-node-data-field-activity-group-field-activity-group-nid">
                                                    813223
                                                </td>
                                                <td class="view-field-content-type-activity-group-field-group-name-value">
                                                    Navigating the Challenges of Prescribing PCSK9 Inhibitors in
                                                    Patients with Persistent Elevated...
                                                </td>
                                                <td class="related-activities"><a
                                                            href="/cms/node/850795?utm_source=activitylist&amp;utm_medium=web&amp;utm_content=feature&amp;utm_campaign=">Experts
                                                        in the Hot Seat: Navigating PCSK9 Inhibitor Prescribing in
                                                        Persistent Elevated LDL-C</a></td>
                                            </tr>
                                            <tr class="odd">
                                                <td valign="top" style="font-weight: normal;"
                                                    class="view-field-node-data-field-icon-field-icon-fid"><img
                                                            src="http://freecme.realcme.com/cms/../cmsdata/course_icons/icon_585059.png"
                                                            alt="icon_585059.png" title="icon_585059.png" width="43"
                                                            height="43"/></td>
                                                <td valign="top" style="font-weight: normal;"
                                                    class="view-field-node-title"><a
                                                            href="/cms/node/790884?utm_source=activitylist&amp;utm_medium=web&amp;utm_content=feature&amp;utm_campaign=">Improving
                                                        the Psoriatic Disease Continuum</a><br/>Dermatology
                                                </td>
                                                <td valign="top" style="font-weight: normal;text-align: center"
                                                    class="view-field-node-data-field-all-credits-field-all-credits-value">
                                                    0.5&nbsp;AMA<br/></td>
                                                <td valign="top" style=""
                                                    class="view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                    28-Jun-18
                                                </td>
                                                <td class="view-field-term-node-1-name">Dermatology</td>
                                                <td class="view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                    29-Jun-17
                                                </td>
                                                <td class="view-field-node-data-field-patient-statement-field-patient-statement-value"></td>
                                                <td class="view-field-node-data-field-course-desc-field-course-desc-value"></td>
                                                <td class="view-field-node-data-field-faculty-field-faculty-value">
                                                    Leonard H. Calabrese, DO
                                                </td>
                                                <td class="view-field-term-node-3-name"></td>
                                                <td class="view-field-node-data-field-activity-group-field-activity-group-nid">
                                                    790886
                                                </td>
                                                <td class="view-field-content-type-activity-group-field-group-name-value">
                                                    Individualizing Treatment for Patients with Psoriatic Disease:
                                                    Optimizing Quality of Life and...
                                                </td>
                                                <td class="related-activities"></td>
                                            </tr>
                                            <tr class="even">
                                                <td valign="top" style="font-weight: normal;"
                                                    class="view-field-node-data-field-icon-field-icon-fid"><img
                                                            src="http://freecme.realcme.com/cms/../cmsdata/course_icons/icon_610444_0.jpg"
                                                            alt="icon_610444.jpg" title="icon_610444.jpg" width="42"
                                                            height="42"/></td>
                                                <td valign="top" style="font-weight: normal;"
                                                    class="view-field-node-title"><a
                                                            href="/cms/node/836397?utm_source=activitylist&amp;utm_medium=web&amp;utm_content=feature&amp;utm_campaign=">Menopause
                                                        and Sexual Health: Dyspareunia Therapeutic Advances</a><br/>Womens
                                                    Health
                                                </td>
                                                <td valign="top" style="font-weight: normal;text-align: center"
                                                    class="view-field-node-data-field-all-credits-field-all-credits-value">
                                                    0.75&nbsp;AMA<br/>0.75&nbsp;ANCC<br/></td>
                                                <td valign="top" style=""
                                                    class="view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                    03-Dec-18
                                                </td>
                                                <td class="view-field-term-node-1-name">Womens Health</td>
                                                <td class="view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                    04-Dec-17
                                                </td>
                                                <td class="view-field-node-data-field-patient-statement-field-patient-statement-value"></td>
                                                <td class="view-field-node-data-field-course-desc-field-course-desc-value">
                                                    ISSWSH Symposium Highlights
                                                </td>
                                                <td class="view-field-node-data-field-faculty-field-faculty-value"></td>
                                                <td class="view-field-term-node-3-name"></td>
                                                <td class="view-field-node-data-field-activity-group-field-activity-group-nid">
                                                    836399
                                                </td>
                                                <td class="view-field-content-type-activity-group-field-group-name-value">
                                                    Menopause and Sexual Health: An Update on Dyspareunia and Female
                                                    Sexual Dysfunction
                                                </td>
                                                <td class="related-activities"><a
                                                            href="/cms/node/848453?utm_source=activitylist&amp;utm_medium=web&amp;utm_content=feature&amp;utm_campaign=">Menopause
                                                        and Sexual Health: Practices, Patient Attitudes and Treatment
                                                        Gaps</a></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div> <!-- --> </div>
                    </div> <!-- /#content-inner, /#content -->
                    <div id="sidebar-right">
                        <div id="sidebar-right-inner">
                            <div id="altcontainer2">
                                <div id="companionlogo"><img
                                            src="/cms/sites/all/themes/zen/freecmetheme/img/logo-companion.gif"
                                            id="logo-companion" alt="CMECompanion" class=""/></div>
                                <!-- Accordion Menu Start -->
                                <div id="list1">
                                    <div id="block-cmeprofile-1"
                                         class="block block-cmeprofile region-odd odd region-count-1 count-1">
                                        <div class="block-inner">
                                            <div class="content">
                                                <div><span class="left cmeloginregistration"> <p>These activities require <a
                                                                    href="http://comp.realcme.com/cms/user/register?TB_iframe=true&width=655"
                                                                    class="thickbox"
                                                                    id="registration_link">registration</a>. Registration time is less than two minutes, and will provide you access to your personal CMECompanion toolset.</p> <p>If you are already registered, please <a
                                                                    href="http://comp.realcme.com/cms/user?TB_iframe=true&width=655"
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
                            <small> Copyright &copy; RealCME, LLC 2008-2018. All Rights Reserved. <a
                                        href="/cms/privacypolicy">Privacy Policy</a>&nbsp; <a
                                        href="/cms/termsofservice">Terms of Service</a>&nbsp; <a
                                        href="/cms/support-center">Support</a></small>
                            <br/><br/> <img src="/cms/sites/all/themes/zen/freecmetheme/img/footerlogo.png" alt=""
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
    <footer class="main-footer">
        <div class="main-footer__content">
            <div class="main-footer__primary-navigation">
                <div class='navigation' id='footerNav'>
                    <ul class='level1'>
                        <li class='level1-li first'><a href="https://learning.freecme.com/s/catalog" class="link2">Courses</a>
                        </li>
                        <li class='level1-li'><a href="http://www.freecme.com/specialties" class="link2">Specialties</a>
                        </li>
                        <li class='level1-li'><a href="http://www.freecme.com/events" class="link2">Events</a></li>
                        <li class='level1-li'><a href="http://www.freecme.com/about" class="link2">About Us</a></li>
                        <li class='level1-li'><a href="http://www.freecme.com/faq" class="link2">FAQ</a></li>
                        <li class='level1-li'><a href="http://www.freecme.com/contact_us" class="link2">Contact Us</a>
                        </li>
                        <li class='level1-li last'><a href="http://www.freecme.com/user/login" class="link2">Member
                                Login</a></li>
                    </ul>
                </div>
            </div>
            <section class="editorial-content home-footer-1">
                <div class="editorial-content__details">
                    <div class="editorial-content__body"><p>AHC Media LLC, a Relias Learning Company, freeCME.com® • 111
                            Corning Road • Raleigh, NC 27518 • 1-800-688-2421</p>
                        <p><a href="/copyright">Copyright</a> © 2004-Present. All rights reserved. <a
                                    href="/privacy-policy">Privacy Policy</a> | <a href="/terms-of-use">Terms of Use</a>
                        </p></div>
                    <div class="editorial-content__link"></div>
                </div>
            </section>
        </div>
        <div class="main-footer__logo"><a href="/"><img alt="FreeCME"
                                                        src="http://www.freeCME.com/ext/resources/images/logo-footer.png"/>
            </a></div>
    </footer>
</div> <!-- document --> </body>
</html>
