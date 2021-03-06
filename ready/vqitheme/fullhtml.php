<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="https://www.w3.org/1999/xhtml" lang="en-us" xml:lang="en-us">
<head><title>VQI</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" href="http://i.realcme.com/cms/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="/cms/sites/all/themes/zen/vqitheme/print.css" type="text/css" media="print"/>
    <style type="text/css" media="all">@import "/cms/../cmsdata/css/570cb88fd959339cfcf84ba117c97b6c.css";</style>
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
<div id="page">
    <div id="page-inner"><a name="top" id="navigation-top"></a>
        <div style="display: none" id="skip-to-nav"><a href="#navigation">Skip to Navigation</a></div>
        <div id="header">
            <div id="header-inner" class="clear-block">
                <div id="logo"><a href="/cms/" title="Home" rel="home"><img
                                src="/cms/sites/all/themes/zen/vqitheme/img/new_images/logo.png" alt="Home"
                                id="logo-image"/></a></div>
            </div>
        </div> <!-- /#header-inner, /#header -->
        <div id="top_nav">
            <ul id="top_nav_links">
                <li class=""><a href="/aboutus.php">About Us</a></li>
                <li class=""><a href="/providers.php">Offerings</a></li>
                <li class=""><a href="/platform.php">Platform</a></li>
                <li class=""><a href="/news-releases/">News</a></li>
                <li class="last "><a href="/jobs.php">Jobs</a></li>
            </ul>
        </div>
        <div id="page-main">
            <div id="main-inner" class="clear-block with-navbar">
                <div id="content">
                    <div id="content-inner">
                        <div id="content-header"></div> <!-- /#content-header -->
                        <div id="content-area">
                            <div class='view view-listing-all'>
                                <div class='view-header view-header-listing-all'>
                                    <div id="displaypromotions" style="display: none;">
                                        <div id="displaypromotions_header" style="display: none;">FEATURED ACTIVITIES
                                        </div>
                                        <div id="displaypromotions_nid" style="display: none;">0</div>
                                    </div>
                                </div>
                                <div class='listing-tabs'>
                                    <form action="http://vqi.realcme.com/cms/listingall" accept-charset="UTF-8"
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
                                <div class='view-content view-content-listing-all'>
                                    <table>
                                        <thead>
                                        <tr>
                                            <th class="view-cell-header view-field-node-data-field-icon-field-icon-fid"></th>
                                            <th sort="asc" class="view-cell-header view-field-node-title">Activity</th>
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
                                            <td colspan="13" align="left" valign="top" class="listingtopic">Quality
                                                Improvement
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td class="view-field view-field-node-data-field-icon-field-icon-fid"
                                                align="center" valign="top"><img
                                                        src="http://vqi.realcme.com/cms/../cmsdata/course_icons/icon_567261.jpg"
                                                        alt="icon_567261.jpg" title="icon_567261.jpg" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/></td>
                                            <td class="view-field view-field-node-title"><a
                                                        href="/cms/node/776265?utm_source=activitylist&amp;utm_medium=web&amp;utm_content=all&amp;utm_campaign=">Are
                                                    You Ready for MACRA: What are the Factors that Influence Heart
                                                    Failure Readmissions?</a></td>
                                            <td class="view-field view-field-term-node-1-name">Quality Improvement</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Amit Singh Tibb, MD, FCCP
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">12-May-17</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                1&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single">12-May-18</span></td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                567261
                                            </td>
                                            <td class="view-field view-field-node-data-field-patient-statement-field-patient-statement-value"></td>
                                            <td class="view-field view-field-node-data-field-course-desc-field-course-desc-value"></td>
                                            <td class="view-field view-field-term-node-3-name"></td>
                                            <td class="view-field view-field-node-data-field-activity-group-field-activity-group-nid">
                                                <a href="/cms/node/725876">rg_725874</a></td>
                                            <td class="view-field view-field-content-type-activity-group-field-group-name-value">
                                                Heart Failure QI
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="view-field view-field-node-data-field-icon-field-icon-fid"
                                                align="center" valign="top"><img
                                                        src="http://vqi.realcme.com/cms/../cmsdata/course_icons/icon_530830_0.jpg"
                                                        alt="icon_530830.jpg" title="icon_530830.jpg" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/></td>
                                            <td class="view-field view-field-node-title"><a
                                                        href="/cms/node/725874?utm_source=activitylist&amp;utm_medium=web&amp;utm_content=all&amp;utm_campaign=">Preparing
                                                    for MACRA: Achieving Quality in the Management of Heart Failure</a>
                                            </td>
                                            <td class="view-field view-field-term-node-1-name">Quality Improvement</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Amit Singh Tibb, MD, FCCP
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">26-Oct-16</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                1&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single">26-Oct-18</span></td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                530830
                                            </td>
                                            <td class="view-field view-field-node-data-field-patient-statement-field-patient-statement-value"></td>
                                            <td class="view-field view-field-node-data-field-course-desc-field-course-desc-value"></td>
                                            <td class="view-field view-field-term-node-3-name"></td>
                                            <td class="view-field view-field-node-data-field-activity-group-field-activity-group-nid">
                                                <a href="/cms/node/725876">rg_725874</a></td>
                                            <td class="view-field view-field-content-type-activity-group-field-group-name-value">
                                                Heart Failure QI
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
                            <div id="companionlogo"><img src="/cms/sites/all/themes/zen/vqitheme/img/logo-companion.gif"
                                                         id="logo-companion" alt="CMECompanion" class=""/></div>
                            <!-- Accordion Menu Start -->
                            <div id="list1"> <!-- SIDEBAR RIGHT -->
                                <div id="block-cmeprofile-1"
                                     class="block block-cmeprofile region-odd odd region-count-1 count-1">
                                    <div class="block-inner">
                                        <div class="content">
                                            <div><span class="left cmeloginregistration"> <p>These activities require <a
                                                                href="http://comp.realcme.com/cms/user/register?TB_iframe=true&width=655"
                                                                class="thickbox" id="registration_link">registration</a>. Registration time is less than two minutes, and will provide you access to your personal CMECompanion toolset.</p> <p>If you are already registered, please <a
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
                                </div> <!-- /block-inner, /block --> <!-- END SIDEBAR RIGHT --> </div>
                        </div> <!-- altcontainer2 --> </div>
                </div> <!-- /#sidebar-right-inner, /#sidebar-right --> </div>
        </div> <!-- /#main-inner, /#main -->
        <div id="footer">
            <div id="copyright"> &copy; 2008-2018 RealCME. All rights reserved.</div>
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
        </div> <!-- Close Footer -->
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
</div> <!-- /#page-inner, /#page --> </body>
</html>
