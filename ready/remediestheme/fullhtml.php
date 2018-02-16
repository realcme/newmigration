<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-us" xml:lang="en-us">
<head><title>Remedies CME</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" href="http://i.realcme.com/cms/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="/cms/sites/all/themes/zen/remediestheme/print.css" type="text/css" media="print"/>
    <style type="text/css" media="all">@import "/cms/../cmsdata/css/fb01e0546e65668125110c3ddb8d8c15.css";</style>
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
<div id="page">
    <div id="page-inner"><a name="top" id="navigation-top"></a>
        <div id="skip-to-nav"><a href="#navigation">Skip to Navigation</a></div>
        <div id="header">
            <div id="header-inner" class="clear-block">
                <div id="logo-title">
                    <div id="logo"><a href="http://www.remediescme.com" title="Home" rel="home"><img
                                    src="/cms/sites/all/themes/zen/remediestheme/img/remedies_logo.png" alt="Home"
                                    id="logo-image"/></a></div>
                    <div id="rems"><a href="/cms/">home</a></div>
                </div> <!-- /#logo-title --> </div>
        </div> <!-- /#header-inner, /#header -->
        <div id="main">
            <div id="main-inner" class="clear-block with-navbar">
                <div id="content">
                    <div id="content-inner">
                        <div id="content-area">
                            <div class='view view-all-activities'>
                                <form action="http://remedies.realcme.com/cms/allactivities" accept-charset="UTF-8"
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
                                                    <div class="form-item"><input type="text" maxlength="255"
                                                                                  name="filter0" id="edit-filter0"
                                                                                  size="10" value="" class="form-text"/>
                                                    </div>
                                                </td>
                                                <td><input type="submit" id="edit-submit" value="Submit"
                                                           class="form-submit"/></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </form>
                                <div class='view-content view-content-all-activities'>
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
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="odd">
                                            <td class="view-field view-field-node-data-field-icon-field-icon-fid"
                                                rowspan="1" align="center" valign="top"><img
                                                        src="http://remedies.realcme.com/cms/../cmsdata/course_icons/icon_albert_0.gif"
                                                        alt="icon_albert.gif" title="icon_albert.gif" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/>Albert
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/424001">Albert
                                                    Visit 1: Persistent Low Back Pain</a></td>
                                            <td class="view-field view-field-term-node-1-name">Pain Management</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Michael R. Clark, MD, MPH
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">25-Jul-13</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">29-Oct-14</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                albert
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td colspan="7" align="center" valign="top"><img
                                                        src="/cms/sites/all/modules/moodle/img/listing-separator.gif"
                                                        alt="" class="separator"/></td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="view-field view-field-node-data-field-icon-field-icon-fid"
                                                rowspan="1" align="center" valign="top"><img
                                                        src="http://remedies.realcme.com/cms/../cmsdata/course_icons/icon_betty_0.gif"
                                                        alt="icon_betty.gif" title="icon_betty.gif" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/>Betty
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/424013">Betty
                                                    Visit 1: Managing Opioid Therapy</a></td>
                                            <td class="view-field view-field-term-node-1-name">Pain Management</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Michael R. Clark, MD, MPH
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">25-Jul-13</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">29-Oct-14</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                betty
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td colspan="7" align="center" valign="top"><img
                                                        src="/cms/sites/all/modules/moodle/img/listing-separator.gif"
                                                        alt="" class="separator"/></td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="view-field view-field-node-data-field-icon-field-icon-fid"
                                                rowspan="1" align="center" valign="top"><img
                                                        src="http://remedies.realcme.com/cms/../cmsdata/course_icons/icon__125.png"
                                                        alt="icon_.png" title="icon_.png" width="43" height="43"
                                                        class="imagefield imagefield-field_icon"/><br/></td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/450805">Is
                                                    My Patient Abusing Opioids?</a></td>
                                            <td class="view-field view-field-term-node-1-name">Pain Management</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Gordon A. Irving, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">29-Oct-13</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">29-Oct-14</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                334958
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td colspan="7" align="center" valign="top"><img
                                                        src="/cms/sites/all/modules/moodle/img/listing-separator.gif"
                                                        alt="" class="separator"/></td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="view-field view-field-node-data-field-icon-field-icon-fid"
                                                rowspan="1" align="center" valign="top"><img
                                                        src="http://remedies.realcme.com/cms/../cmsdata/course_icons/icon__126.png"
                                                        alt="icon_.png" title="icon_.png" width="43" height="43"
                                                        class="imagefield imagefield-field_icon"/><br/></td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/450811">My
                                                    First-Choice Opioid Is Not Working. Now What?</a></td>
                                            <td class="view-field view-field-term-node-1-name">Pain Management</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Gordon A. Irving, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">29-Oct-13</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">29-Oct-14</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                337199
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td colspan="7" align="center" valign="top"><img
                                                        src="/cms/sites/all/modules/moodle/img/listing-separator.gif"
                                                        alt="" class="separator"/></td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="view-field view-field-node-data-field-icon-field-icon-fid"
                                                rowspan="1" align="center" valign="top"><img
                                                        src="http://remedies.realcme.com/cms/../cmsdata/course_icons/icon__13.gif"
                                                        alt="icon_.gif" title="icon_.gif" width="43" height="43"
                                                        class="imagefield imagefield-field_icon"/><br/></td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/401252">Navigating
                                                    Opioid REMS, Part 1: Appropriate Assessment and Initiation of Opioid
                                                    Treatment (Monograph)</a></td>
                                            <td class="view-field view-field-term-node-1-name">Pain Management</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Charles E. Argoff, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">09-May-13</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                1.25&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">29-Oct-14</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                290716
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td colspan="7" align="center" valign="top"><img
                                                        src="/cms/sites/all/modules/moodle/img/listing-separator.gif"
                                                        alt="" class="separator"/></td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="view-field view-field-node-data-field-icon-field-icon-fid"
                                                rowspan="1" align="center" valign="top"><img
                                                        src="http://remedies.realcme.com/cms/../cmsdata/course_icons/icon__43.png"
                                                        alt="icon_.png" title="icon_.png" width="43" height="43"
                                                        class="imagefield imagefield-field_icon"/><br/></td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/401259">Navigating
                                                    Opioid REMS, Part 1: Appropriate Assessment and Initiation of Opioid
                                                    Treatment (Webinar)</a></td>
                                            <td class="view-field view-field-term-node-1-name">Pain Management</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Charles E. Argoff, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">09-May-13</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                1.25&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">09-May-14</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                293464
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td colspan="7" align="center" valign="top"><img
                                                        src="/cms/sites/all/modules/moodle/img/listing-separator.gif"
                                                        alt="" class="separator"/></td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="view-field view-field-node-data-field-icon-field-icon-fid"
                                                rowspan="1" align="center" valign="top"><img
                                                        src="http://remedies.realcme.com/cms/../cmsdata/course_icons/icon__14.gif"
                                                        alt="icon_.gif" title="icon_.gif" width="43" height="43"
                                                        class="imagefield imagefield-field_icon"/><br/></td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/401256">Navigating
                                                    Opioid REMS, Part 2: Tailoring Treatment for Safe, Effective Pain
                                                    Management (Monograph)</a></td>
                                            <td class="view-field view-field-term-node-1-name">Pain Management</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Charles E. Argoff, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">09-May-13</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                1.25&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">29-Oct-14</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                291577
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td colspan="7" align="center" valign="top"><img
                                                        src="/cms/sites/all/modules/moodle/img/listing-separator.gif"
                                                        alt="" class="separator"/></td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="view-field view-field-node-data-field-icon-field-icon-fid"
                                                rowspan="1" align="center" valign="top"><img
                                                        src="http://remedies.realcme.com/cms/../cmsdata/course_icons/icon__44.png"
                                                        alt="icon_.png" title="icon_.png" width="43" height="43"
                                                        class="imagefield imagefield-field_icon"/><br/></td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/401262">Navigating
                                                    Opioid REMS, Part 2: Tailoring Treatment for Safe, Effective Pain
                                                    Management (Webinar)</a></td>
                                            <td class="view-field view-field-term-node-1-name">Pain Management</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Bill H. McCarberg, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">09-May-13</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                1.25&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">09-May-14</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                293549
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
                                        src="/cms/sites/all/themes/zen/remediestheme/img/logo-companion.gif"
                                        id="logo-companion" alt="CMECompanion" class=""/></div>
                            <!-- Accordion Menu Start -->
                            <div id="list1">
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
                                </div> <!-- /block-inner, /block --> </div>
                        </div> <!-- altcontainer2 --> </div>
                </div> <!-- /#sidebar-right-inner, /#sidebar-right --> </div>
        </div> <!-- /#main-inner, /#main -->
        <div id="footer">
            <div id="footer-inner">
                <div id="footer-message">
                    <center>
                        <small> Copyright &copy; RealCME, LLC 2008-2018. All Rights Reserved. <a
                                    href="/cms/privacypolicy">Privacy Policy</a>&nbsp; <a href="/cms/termsofservice">Terms
                                of Service</a>&nbsp; <a href="/cms/support-center">Support</a></small>
                        <br/><br/> <img src="/cms/sites/all/themes/zen/remediestheme/img/footerlogo.png" alt=""
                                        class="center"/> <br/> <br/>
                        <small> Copyright &copy; 2018 Applied Clinical education unless otherwise noted. CMEZone.com is
                            part of McMahon Group.</br/> All rights reserved.<br/> Reproduction in whole or in part
                            without permission is prohibited.
                        </small>
                    </center>
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
</div> <!-- /#page-inner, /#page --> </body>
</html>
