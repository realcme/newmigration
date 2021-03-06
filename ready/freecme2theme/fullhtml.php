<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-us" xml:lang="en-us">
<head><title>FreeCME2</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" href="http://i.realcme.com/cms/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="/cms/sites/all/themes/zen/freecme2theme/print.css" type="text/css" media="print"/>
    <style type="text/css" media="all">@import "/cms/../cmsdata/css/14ac8e3ba6aa58d9a910bc6d671d33ca.css";</style>
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
<body class="not-front not-logged-in one-sidebar sidebar-right page-listingall section-listingall">
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
                                        src="/cms/sites/all/themes/zen/freecme2theme/img/freecme/linkedin.png"/> </a> <a
                                    href="https://www.facebook.com/freecme.atlanta"> <img
                                        class="social-media-icon-header__facebook"
                                        src="/cms/sites/all/themes/zen/freecme2theme/img/freecme/facebook_icon.png"/>
                            </a> <a href="https://twitter.com/freecmeonline"> <img
                                        class="social-media-icon-header__twitter"
                                        src="/cms/sites/all/themes/zen/freecme2theme/img/freecme/twitter_icon.png"/>
                            </a>
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
                    <!-- <div id="logo-title"> <div id="logo"><a href="/cms/../" title="Home" rel="home"><img src="/cms/sites/all/themes/zen/freecme2theme/img/logo.gif" alt="Home" id="logo-image" /></a></div> </div> -->
                    <!-- /#logo-title --> </div>
            </div> <!-- /#header-inner, /#header -->
            <div id="main">
                <div id="main-inner" class="clear-block with-navbar">
                    <div id="content">
                        <div id="content-inner">
                            <div id="content-header"></div> <!-- /#content-header -->
                            <div id="content-area">
                                <div class='view view-listing-all'>
                                    <div class='view-header view-header-listing-all'>
                                        <div id="displaypromotions" style="display: none;">
                                            <div id="displaypromotions_header" style="display: none;">FEATURED
                                                ACTIVITIES
                                            </div>
                                            <div id="displaypromotions_nid" style="display: none;">0</div>
                                        </div>
                                    </div>
                                    <div class='listing-tabs'>
                                        <form action="http://freecme2.realcme.com/cms/listingall" accept-charset="UTF-8"
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
                                    <div class='view-content view-content-listing-all'>
                                        <table>
                                            <thead>
                                            <tr>
                                                <th class="view-cell-header view-field-node-data-field-icon-field-icon-fid"></th>
                                                <th sort="asc" class="view-cell-header view-field-node-title">Activity
                                                </th>
                                                <th class="view-cell-header view-field-term-node-1-name">Topic</th>
                                                <th class="view-cell-header view-field-node-data-field-faculty-field-faculty-value">
                                                    Faculty Chair
                                                </th>
                                                <th class="view-cell-header view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                    Launch Date
                                                </th>
                                                <th class="view-cell-header view-field-node-data-field-all-credits-field-all-credits-value">
                                                    Credit
                                                </th>
                                                <th class="view-cell-header view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                    Expiration Date
                                                </th>
                                                <th class="view-cell-header view-field-node-data-field-series-field-series-value"></th>
                                                <th class="view-cell-header view-field-node-data-field-patient-statement-field-patient-statement-value"></th>
                                                <th class="view-cell-header view-field-node-data-field-course-desc-field-course-desc-value"></th>
                                                <th class="view-cell-header view-field-term-node-3-name"></th>
                                                <th class="view-cell-header view-field-node-data-field-activity-group-field-activity-group-nid"></th>
                                                <th class="view-cell-header view-field-content-type-activity-group-field-group-name-value"></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr class="odd">
                                                <td colspan="13" align="left" valign="top" class="listingtopic">
                                                    Oncology
                                                </td>
                                            </tr>
                                            <tr class="even">
                                                <td class="view-field view-field-node-data-field-icon-field-icon-fid"
                                                    align="center" valign="top"><img
                                                            src="http://freecme2.realcme.com/cms/../cmsdata/course_icons/icon_609680.jpg"
                                                            alt="icon_609680.jpg" title="icon_609680.jpg" width="43"
                                                            height="43" class="imagefield imagefield-field_icon"/></td>
                                                <td class="view-field view-field-node-title"><a
                                                            href="/cms/node/817045?utm_source=activitylist&amp;utm_medium=web&amp;utm_content=all&amp;utm_campaign=">A
                                                        Comprehensive Approach to Managing HER2-Positive Breast
                                                        Cancer</a></td>
                                                <td class="view-field view-field-term-node-1-name">Oncology</td>
                                                <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                    Ruth M. O&amp;#39;Regan, MD
                                                </td>
                                                <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                    <span class="date-display-single">03-Oct-17</span></td>
                                                <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                    1&nbsp;AMA<br/></td>
                                                <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                    <span class="date-display-single">03-Oct-18</span></td>
                                                <td class="view-field view-field-node-data-field-series-field-series-value">
                                                    609680
                                                </td>
                                                <td class="view-field view-field-node-data-field-patient-statement-field-patient-statement-value"></td>
                                                <td class="view-field view-field-node-data-field-course-desc-field-course-desc-value">
                                                    A Comprehensive Approach to Managing HER2-Positive Breast Cancer
                                                </td>
                                                <td class="view-field view-field-term-node-3-name"></td>
                                                <td class="view-field view-field-node-data-field-activity-group-field-activity-group-nid">
                                                    <a href="/cms/node/817048">riq_611434</a></td>
                                                <td class="view-field view-field-content-type-activity-group-field-group-name-value">
                                                    A Comprehensive Approach to Managing HER2-Positive Breast Cancer
                                                </td>
                                            </tr>
                                            <tr class="odd">
                                                <td class="view-field view-field-node-data-field-icon-field-icon-fid"
                                                    align="center" valign="top"><img
                                                            src="http://freecme2.realcme.com/cms/../cmsdata/course_icons/icon_621749.jpg"
                                                            alt="icon_621749.jpg" title="icon_621749.jpg" width="43"
                                                            height="43" class="imagefield imagefield-field_icon"/></td>
                                                <td class="view-field view-field-node-title"><a
                                                            href="/cms/node/841654?utm_source=activitylist&amp;utm_medium=web&amp;utm_content=all&amp;utm_campaign=">A
                                                        Systematic, Patient-Centered Approach to Managing Metastatic
                                                        Gastric or GEJ Adenocarcinoma</a></td>
                                                <td class="view-field view-field-term-node-1-name">Oncology</td>
                                                <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                    Jaffer A. Ajani, MD
                                                </td>
                                                <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                    <span class="date-display-single">21-Dec-17</span></td>
                                                <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                    1&nbsp;AMA<br/></td>
                                                <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                    <span class="date-display-single">21-Dec-18</span></td>
                                                <td class="view-field view-field-node-data-field-series-field-series-value">
                                                    621749
                                                </td>
                                                <td class="view-field view-field-node-data-field-patient-statement-field-patient-statement-value"></td>
                                                <td class="view-field view-field-node-data-field-course-desc-field-course-desc-value"></td>
                                                <td class="view-field view-field-term-node-3-name"></td>
                                                <td class="view-field view-field-node-data-field-activity-group-field-activity-group-nid">
                                                    <a href="/cms/node/841656">riq_622613</a></td>
                                                <td class="view-field view-field-content-type-activity-group-field-group-name-value">
                                                    A Systematic, Patient-Centered Approach to Managing Metastatic
                                                    Gastric or GEJ Adenocarcinoma
                                                </td>
                                            </tr>
                                            <tr class="even">
                                                <td class="view-field view-field-node-data-field-icon-field-icon-fid"
                                                    align="center" valign="top"><img
                                                            src="http://freecme2.realcme.com/cms/../cmsdata/course_icons/icon_604670.jpg"
                                                            alt="icon_604670.jpg" title="icon_604670.jpg" width="43"
                                                            height="43" class="imagefield imagefield-field_icon"/></td>
                                                <td class="view-field view-field-node-title"><a
                                                            href="/cms/node/809098?utm_source=activitylist&amp;utm_medium=web&amp;utm_content=all&amp;utm_campaign=">A
                                                        Systematic, Patient-Centered Approach to Managing Patients with
                                                        CLL</a></td>
                                                <td class="view-field view-field-term-node-1-name">Oncology</td>
                                                <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                    Ian W. Flinn, MD, PhD
                                                </td>
                                                <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                    <span class="date-display-single">31-Aug-17</span></td>
                                                <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                    1.25&nbsp;AMA<br/>1.2&nbsp;ANCC<br/></td>
                                                <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                    <span class="date-display-single">31-Aug-18</span></td>
                                                <td class="view-field view-field-node-data-field-series-field-series-value">
                                                    604670
                                                </td>
                                                <td class="view-field view-field-node-data-field-patient-statement-field-patient-statement-value"></td>
                                                <td class="view-field view-field-node-data-field-course-desc-field-course-desc-value">
                                                    A Systematic, Patient-Centered Approach to Managing Patients with
                                                    CLL
                                                </td>
                                                <td class="view-field view-field-term-node-3-name"></td>
                                                <td class="view-field view-field-node-data-field-activity-group-field-activity-group-nid">
                                                    <a href="/cms/node/809100">riq_607050</a></td>
                                                <td class="view-field view-field-content-type-activity-group-field-group-name-value">
                                                    A Systematic, Patient-Centered Approach to Managing Patients with
                                                    CLL
                                                </td>
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
                                            src="/cms/sites/all/themes/zen/freecme2theme/img/logo-companion.gif"
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
                            <br/><br/> <img src="/cms/sites/all/themes/zen/freecme2theme/img/footerlogo.png" alt=""
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
