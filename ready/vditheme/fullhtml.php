<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-us" xml:lang="en-us">
<head><title>SciMed - Virtual Diabetes Institute</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" href="http://i.realcme.com/cms/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="/cms/sites/all/themes/zen/vditheme/print.css" type="text/css" media="print"/>
    <style type="text/css" media="all">@import "/cms/../cmsdata/css/45d2780e1a12b97020351e9d6a188550.css";</style>
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
<body class="front not-logged-in no-sidebars">
<div id="page">
    <div id="page-inner"><a name="top" id="navigation-top"></a>
        <div id="skip-to-nav"><a href="#navigation">Skip to Navigation</a></div>
        <div id="header">
            <div id="header-inner" class="clear-block">
                <!-- <div id="logo-title"> <div id="logo"><a href="/cms/../" title="Home" rel="home"><img src="/cms/sites/all/themes/zen/vditheme/img/logo.gif" alt="Home" id="logo-image" /></a></div> </div> -->
                <!-- /#logo-title --> </div>
        </div> <!-- /#header-inner, /#header -->
        <div id="main">
            <div id="main-inner" class="clear-block with-navbar">
                <div id="content">
                    <div id="content-inner">
                        <div id="content-area">
                            <div class='view view-all-activities'>
                                <form action="http://vdi.realcme.com/cms/allactivities" accept-charset="UTF-8"
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
                                                rowspan="2" align="center" valign="top"><img
                                                        src="http://vdi.realcme.com/cms/../cmsdata/course_icons/icon_anthony.gif"
                                                        alt="icon_anthony.gif" title="icon_anthony.gif" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/>Anthony
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/135155">Anthony
                                                    Visit 1: A man with a high A1C is concerned he might soon have
                                                    diabetes</a></td>
                                            <td class="view-field view-field-term-node-1-name">Diabetology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Frank Lavernia, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">30-Jun-11</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">29-Jun-13</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                anthony
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td class="view-field view-field-node-title"><a href="/cms/node/135163">Anthony
                                                    Visit 2: Recently identified with prediabetes returns for follow up
                                                    visit</a></td>
                                            <td class="view-field view-field-term-node-1-name">Diabetology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Frank Lavernia, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">30-Jun-11</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">29-Jun-13</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                anthony
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td colspan="7" align="center" valign="top"><img
                                                        src="/cms/sites/all/modules/moodle/img/listing-separator.gif"
                                                        alt="" class="separator"/></td>
                                        </tr>
                                        <tr class="even">
                                            <td class="view-field view-field-node-data-field-icon-field-icon-fid"
                                                rowspan="2" align="center" valign="top"><img
                                                        src="http://vdi.realcme.com/cms/../cmsdata/course_icons/icon_carmen_0.gif"
                                                        alt="icon_carmen.gif" title="icon_carmen.gif" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/>Carmen
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/195740">Carmen
                                                    Visit 1: 47-year-old patient who was diagnosed with T2DM and
                                                    dyslipidemia</a></td>
                                            <td class="view-field view-field-term-node-1-name">Diabetology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Mark W. Stolar, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">22-Dec-11</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">21-Dec-13</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                carmen
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="view-field view-field-node-title"><a href="/cms/node/195754">Carmen
                                                    Visit 2: 47-year-old patient with T2DM and dyslipidemia, returning
                                                    for follow-up visit</a></td>
                                            <td class="view-field view-field-term-node-1-name">Diabetology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Mark W. Stolar, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">22-Dec-11</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">21-Dec-13</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                carmen
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td colspan="7" align="center" valign="top"><img
                                                        src="/cms/sites/all/modules/moodle/img/listing-separator.gif"
                                                        alt="" class="separator"/></td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="view-field view-field-node-data-field-icon-field-icon-fid"
                                                rowspan="2" align="center" valign="top"><img
                                                        src="http://vdi.realcme.com/cms/../cmsdata/course_icons/icon_patricia.gif"
                                                        alt="icon_patricia.gif" title="icon_patricia.gif" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/>Patricia
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/135233">Patricia
                                                    Visit 1: A woman with type 2 diabetes who is having symptoms
                                                    suggestive of hyperglycemia</a></td>
                                            <td class="view-field view-field-term-node-1-name">Diabetology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Louis Kuritzky, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">30-Jun-11</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">29-Jun-13</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                patricia
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td class="view-field view-field-node-title"><a href="/cms/node/135243">Patricia
                                                    Visit 2: A woman with type 2 diabetes returns for a follow-up
                                                    visit</a></td>
                                            <td class="view-field view-field-term-node-1-name">Diabetology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Louis Kuritzky, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">30-Jun-11</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">29-Jun-13</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                patricia
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td colspan="7" align="center" valign="top"><img
                                                        src="/cms/sites/all/modules/moodle/img/listing-separator.gif"
                                                        alt="" class="separator"/></td>
                                        </tr>
                                        <tr class="even">
                                            <td class="view-field view-field-node-data-field-icon-field-icon-fid"
                                                rowspan="2" align="center" valign="top"><img
                                                        src="http://vdi.realcme.com/cms/../cmsdata/course_icons/icon_viola_0.gif"
                                                        alt="icon_viola.gif" title="icon_viola.gif" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/>Viola
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/175146">Viola
                                                    Visit 1: 55-year-old African American with T2DM who was diagnosed
                                                    with hypertension 6 months ago</a></td>
                                            <td class="view-field view-field-term-node-1-name">Diabetology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Brent M. Egan, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">31-Oct-11</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">30-Oct-13</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                viola
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="view-field view-field-node-title"><a href="/cms/node/175157">Viola
                                                    Visit 2: 55-year-old African American with T2DM and hypertension,
                                                    returning for follow-up</a></td>
                                            <td class="view-field view-field-term-node-1-name">Diabetology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Brent M. Egan, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">31-Oct-11</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">30-Oct-13</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                viola
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td colspan="7" align="center" valign="top"><img
                                                        src="/cms/sites/all/modules/moodle/img/listing-separator.gif"
                                                        alt="" class="separator"/></td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="view-field view-field-node-data-field-icon-field-icon-fid"
                                                rowspan="2" align="center" valign="top"><img
                                                        src="http://vdi.realcme.com/cms/../cmsdata/course_icons/icon_wei.jpg"
                                                        alt="icon_wei.jpg" title="icon_wei.jpg" width="48" height="43"
                                                        class="imagefield imagefield-field_icon"/><br/>Wei
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/154873">Wei
                                                    Visit 1: 70-year-old Chinese American with T2DM who recently
                                                    suffered a mild myocardial infarction</a></td>
                                            <td class="view-field view-field-term-node-1-name">Diabetology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Charles P. Vega, Jr., MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">29-Aug-11</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">28-Aug-13</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                wei
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td class="view-field view-field-node-title"><a href="/cms/node/155274">Wei
                                                    Visit 2: 70-year-old Chinese American with T2DM returning for a
                                                    follow-up visit</a></td>
                                            <td class="view-field view-field-term-node-1-name">Diabetology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Charles P. Vega, Jr., MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">30-Aug-11</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">29-Aug-13</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                wei
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
                            <div id="companionlogo"></div> <!-- Accordion Menu Start -->
                            <div id="list1"></div>
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
                        <br/><br/> <img src="/cms/sites/all/themes/zen/vditheme/img/footerlogo.png" alt=""
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
</div> <!-- /#page-inner, /#page --> </body>
</html>
