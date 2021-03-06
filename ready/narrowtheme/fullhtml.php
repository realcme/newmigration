<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-us" xml:lang="en-us">
<head><title>Narrow</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" href="http://i.realcme.com/cms/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="/cms/sites/all/themes/zen/narrowtheme/print.css" type="text/css" media="print"/>
    <style type="text/css" media="all">@import "/cms/../cmsdata/css/e308fce340d5f6301f43fed575069b26.css";</style>
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
<body class="front not-logged-in two-sidebars">
<div id="page">
    <div id="page-inner"><a name="top" id="navigation-top"></a>
        <div id="skip-to-nav"><a href="#navigation">Skip to Navigation</a></div>
        <div id="header">
            <div id="header-inner" class="clear-block">
                <div id="logo-title">
                    <div id="logo"><a href="/cms/" title="Home" rel="home"><img
                                    src="/cms/sites/all/themes/zen/narrowtheme/img/logo.gif" alt="Home"
                                    id="logo-image"/></a></div>
                </div> <!-- /#logo-title --> </div>
        </div> <!-- /#header-inner, /#header -->
        <div id="main">
            <div id="main-inner" class="clear-block with-navbar">
                <div id="content">
                    <div id="content-inner">
                        <div id="content-area">
                            <div class='view view-all-activities'>
                                <form action="http://narrow.realcme.com/cms/allactivities" accept-charset="UTF-8"
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
                                            <td rowspan="4" align="center" valign="top"><img
                                                        src="http://narrow.realcme.com/cms/../cmsdata/course_icons/icon-alice.gif"
                                                        alt="icon-alice.gif" title="icon-alice.gif" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/>Alice
                                            </td>
                                            <td class="view-field view-field-node-title"></td>
                                            <td colspan="5" align="left" class="view-field mainrow"><a
                                                        href="/cms/node/1744">Alice Visit 1 - The Brain-Bladder Behavior
                                                    Connection</a></td>
                                        </tr>
                                        <tr class="even">
                                            <td class="view-field view-field-node-title"></td>
                                            <td class="view-field view-field-term-node-1-name">Urology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Joel E. Streim, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">23-Dec-08</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">31-Dec-09</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                alice
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="view-field view-field-node-title"></td>
                                            <td colspan="5" align="left" class="view-field mainrow"><a
                                                        href="/cms/node/1746">Alice Visit 2 - The Brain-Bladder Behavior
                                                    Connection</a></td>
                                        </tr>
                                        <tr class="even">
                                            <td class="view-field view-field-node-title"></td>
                                            <td class="view-field view-field-term-node-1-name">Urology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Joel E. Streim, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">23-Dec-08</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">31-Dec-09</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                alice
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td colspan="6" align="center" valign="top"><img
                                                        src="/cms/sites/all/modules/moodle/img/listing-separator-companion.gif"
                                                        alt="" class="separator"/></td>
                                        </tr>
                                        <tr class="even">
                                            <td rowspan="2" align="center" valign="top"><img
                                                        src="http://narrow.realcme.com/cms/../cmsdata/course_icons/icon-bethany.gif"
                                                        alt="icon-bethany.gif" title="icon-bethany.gif" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/>Bethany
                                            </td>
                                            <td class="view-field view-field-node-title"></td>
                                            <td colspan="5" align="left" class="view-field mainrow"><a
                                                        href="/cms/node/226">Bethany Visit 1 - Practical Influenza
                                                    Prevention for the Pediatric Practice: Pre-School Age Child</a></td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="view-field view-field-node-title"></td>
                                            <td class="view-field view-field-term-node-1-name">Pediatrics</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Julia A. McMillan, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">22-Aug-08</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">31-Aug-09</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                bethany
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td colspan="6" align="center" valign="top"><img
                                                        src="/cms/sites/all/modules/moodle/img/listing-separator-companion.gif"
                                                        alt="" class="separator"/></td>
                                        </tr>
                                        <tr class="odd">
                                            <td rowspan="2" align="center" valign="top"><img
                                                        src="http://narrow.realcme.com/cms/../cmsdata/course_icons/icon-caroline.gif"
                                                        alt="icon-caroline.gif" title="icon-caroline.gif" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/>Caroline
                                            </td>
                                            <td class="view-field view-field-node-title"></td>
                                            <td colspan="5" align="left" class="view-field mainrow"><a
                                                        href="/cms/node/1274">Caroline Visit 1 - Practical Influenza
                                                    Prevention in for the Pediatric Practice: High-Risk
                                                    Considerations</a></td>
                                        </tr>
                                        <tr class="even">
                                            <td class="view-field view-field-node-title"></td>
                                            <td class="view-field view-field-term-node-1-name">Pediatrics</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Julia A. McMillan, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">15-Nov-08</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">30-Nov-09</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                caroline
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td colspan="6" align="center" valign="top"><img
                                                        src="/cms/sites/all/modules/moodle/img/listing-separator-companion.gif"
                                                        alt="" class="separator"/></td>
                                        </tr>
                                        <tr class="even">
                                            <td rowspan="2" align="center" valign="top"><img
                                                        src="http://narrow.realcme.com/cms/../cmsdata/course_icons/icon-claire.gif"
                                                        alt="icon-claire.gif" title="icon-claire.gif" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/>Claire
                                            </td>
                                            <td class="view-field view-field-node-title"></td>
                                            <td colspan="5" align="left" class="view-field mainrow"><a
                                                        href="/cms/node/3263">Claire Visit 1 - Elderly Female Presenting
                                                    with Onset of Resistant Hypertension</a></td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="view-field view-field-node-title"></td>
                                            <td class="view-field view-field-term-node-1-name">Geriatrics</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Laurie Bailey, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">17-Apr-09</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.75&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">30-Apr-10</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                claire
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td colspan="6" align="center" valign="top"><img
                                                        src="/cms/sites/all/modules/moodle/img/listing-separator-companion.gif"
                                                        alt="" class="separator"/></td>
                                        </tr>
                                        <tr class="odd">
                                            <td rowspan="2" align="center" valign="top"><img
                                                        src="http://narrow.realcme.com/cms/../cmsdata/course_icons/icon-grace.gif"
                                                        alt="icon-grace.gif" title="icon-grace.gif" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/>Grace
                                            </td>
                                            <td class="view-field view-field-node-title"></td>
                                            <td colspan="5" align="left" class="view-field mainrow"><a
                                                        href="/cms/node/278">Grace Visit 1 - Practical Influenza
                                                    Prevention for the Pediatric Practice: School - Aged Children</a>
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td class="view-field view-field-node-title"></td>
                                            <td class="view-field view-field-term-node-1-name">Pediatrics</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Julia A. McMillan, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">02-Oct-08</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">31-Oct-09</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                grace
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td colspan="6" align="center" valign="top"><img
                                                        src="/cms/sites/all/modules/moodle/img/listing-separator-companion.gif"
                                                        alt="" class="separator"/></td>
                                        </tr>
                                        <tr class="even">
                                            <td rowspan="2" align="center" valign="top"><img
                                                        src="http://narrow.realcme.com/cms/../cmsdata/course_icons/icon-kendra.gif"
                                                        alt="icon-kendra.gif" title="icon-kendra.gif" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/>Kendra
                                            </td>
                                            <td class="view-field view-field-node-title"></td>
                                            <td colspan="5" align="left" class="view-field mainrow"><a
                                                        href="/cms/node/3649">Kendra Visit 1 - 50-Year-Old Woman With
                                                    Severe Treatment-Resistant Depression, Type II Diabetes, and
                                                    Hypertension</a></td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="view-field view-field-node-title"></td>
                                            <td class="view-field view-field-term-node-1-name">Diabetology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Wayne Katon, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">29-May-09</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                1&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">31-May-10</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                kendra
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td colspan="6" align="center" valign="top"><img
                                                        src="/cms/sites/all/modules/moodle/img/listing-separator-companion.gif"
                                                        alt="" class="separator"/></td>
                                        </tr>
                                        <tr class="odd">
                                            <td rowspan="4" align="center" valign="top"><img
                                                        src="http://narrow.realcme.com/cms/../cmsdata/course_icons/icon-laura.gif"
                                                        alt="icon-laura.gif" title="icon-laura.gif" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/>Laura
                                            </td>
                                            <td class="view-field view-field-node-title"></td>
                                            <td colspan="5" align="left" class="view-field mainrow"><a
                                                        href="/cms/node/1070">Laura Visit 1 - Opioid Management
                                                    Education</a></td>
                                        </tr>
                                        <tr class="even">
                                            <td class="view-field view-field-node-title"></td>
                                            <td class="view-field view-field-term-node-1-name">Pain Management</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Thomas E. Elliott, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">28-Oct-08</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.75&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">31-Oct-09</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                laura
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="view-field view-field-node-title"></td>
                                            <td colspan="5" align="left" class="view-field mainrow"><a
                                                        href="/cms/node/1074">Laura Visit 2 - Opioid Management
                                                    Education</a></td>
                                        </tr>
                                        <tr class="even">
                                            <td class="view-field view-field-node-title"></td>
                                            <td class="view-field view-field-term-node-1-name">Pain Management</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Thomas E. Elliott, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">28-Oct-08</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.75&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">31-Oct-09</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                laura
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td colspan="6" align="center" valign="top"><img
                                                        src="/cms/sites/all/modules/moodle/img/listing-separator-companion.gif"
                                                        alt="" class="separator"/></td>
                                        </tr>
                                        <tr class="even">
                                            <td rowspan="4" align="center" valign="top"><img
                                                        src="http://narrow.realcme.com/cms/../cmsdata/course_icons/icon-melanoma.gif"
                                                        alt="icon-melanoma.gif" title="icon-melanoma.gif" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/>Management
                                                of Melanoma
                                            </td>
                                            <td class="view-field view-field-node-title"></td>
                                            <td colspan="5" align="left" class="view-field mainrow"><a
                                                        href="/cms/node/203">Management of Melanoma, Phase 1</a></td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="view-field view-field-node-title"></td>
                                            <td class="view-field view-field-term-node-1-name">Hematology-Oncology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Jonathan S. Zager, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">20-Jun-08</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">20-Jun-09</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                melanoma
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td class="view-field view-field-node-title"></td>
                                            <td colspan="5" align="left" class="view-field mainrow"><a
                                                        href="/cms/node/205">Management of Melanoma, Phase 2</a></td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="view-field view-field-node-title"></td>
                                            <td class="view-field view-field-term-node-1-name">Hematology-Oncology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Jonathan S. Zager, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">28-Jul-08</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">18-Jul-09</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                melanoma
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td colspan="6" align="center" valign="top"><img
                                                        src="/cms/sites/all/modules/moodle/img/listing-separator-companion.gif"
                                                        alt="" class="separator"/></td>
                                        </tr>
                                        <tr class="odd">
                                            <td rowspan="4" align="center" valign="top"><img
                                                        src="http://narrow.realcme.com/cms/../cmsdata/course_icons/icon-marie.gif"
                                                        alt="icon-marie.gif" title="icon-marie.gif" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/>Marie
                                            </td>
                                            <td class="view-field view-field-node-title"></td>
                                            <td colspan="5" align="left" class="view-field mainrow"><a
                                                        href="/cms/node/329">Marie Visit 1 - Diabetic Patient with
                                                    Fatigue, Headaches and Leg Pain</a></td>
                                        </tr>
                                        <tr class="even">
                                            <td class="view-field view-field-node-title"></td>
                                            <td class="view-field view-field-term-node-1-name">Diabetology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Sherita H. Golden, MD, MHS
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">29-Aug-08</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">31-Aug-09</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                marie
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="view-field view-field-node-title"></td>
                                            <td colspan="5" align="left" class="view-field mainrow"><a
                                                        href="/cms/node/332">Marie Visit 2 - Depression and Diabetes</a>
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td class="view-field view-field-node-title"></td>
                                            <td class="view-field view-field-term-node-1-name">Diabetology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Sherita H. Golden, MD, MHS
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">01-Nov-08</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">30-Nov-09</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                marie
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td colspan="6" align="center" valign="top"><img
                                                        src="/cms/sites/all/modules/moodle/img/listing-separator-companion.gif"
                                                        alt="" class="separator"/></td>
                                        </tr>
                                        <tr class="even">
                                            <td rowspan="2" align="center" valign="top"><img
                                                        src="http://narrow.realcme.com/cms/../cmsdata/course_icons/icon-flu.gif"
                                                        alt="icon-flu.gif" title="icon-flu.gif" width="43" height="43"
                                                        class="imagefield imagefield-field_icon"/><br/>Practical
                                                Influenza Prevention for the Pediatric Practice
                                            </td>
                                            <td class="view-field view-field-node-title"></td>
                                            <td colspan="5" align="left" class="view-field mainrow"><a
                                                        href="/cms/node/224">Practical Influenza Prevention for the
                                                    Pediatric Practice: Are You Ready For Flu Season? Phase 1</a></td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="view-field view-field-node-title"></td>
                                            <td class="view-field view-field-term-node-1-name">Pediatrics</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Julia A. McMillan, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">23-Jul-08</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">31-Jul-09</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                influenza
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td colspan="6" align="center" valign="top"><img
                                                        src="/cms/sites/all/modules/moodle/img/listing-separator-companion.gif"
                                                        alt="" class="separator"/></td>
                                        </tr>
                                        <tr class="odd">
                                            <td rowspan="4" align="center" valign="top"><img
                                                        src="http://narrow.realcme.com/cms/../cmsdata/course_icons/icon-robert.gif"
                                                        alt="icon-robert.gif" title="icon-robert.gif" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/>Robert
                                            </td>
                                            <td class="view-field view-field-node-title"></td>
                                            <td colspan="5" align="left" class="view-field mainrow"><a
                                                        href="/cms/node/72">Robert Visit 1 - Cardiovascular residual
                                                    risk assessment and disease prevention</a></td>
                                        </tr>
                                        <tr class="even">
                                            <td class="view-field view-field-node-title"></td>
                                            <td class="view-field view-field-term-node-1-name">Cardiology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Michel P. Hermans, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">01-Jun-08</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">02-Jun-09</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                robert
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="view-field view-field-node-title"></td>
                                            <td colspan="5" align="left" class="view-field mainrow"><a
                                                        href="/cms/robert-visit-2">Robert Visit 2 - Residual risk
                                                    assessment and treatment follow up</a></td>
                                        </tr>
                                        <tr class="even">
                                            <td class="view-field view-field-node-title"></td>
                                            <td class="view-field view-field-term-node-1-name">Cardiology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Michel P. Hermans, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">21-Aug-08</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">21-Aug-09</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                robert
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td colspan="6" align="center" valign="top"><img
                                                        src="/cms/sites/all/modules/moodle/img/listing-separator-companion.gif"
                                                        alt="" class="separator"/></td>
                                        </tr>
                                        <tr class="even">
                                            <td rowspan="4" align="center" valign="top"><img
                                                        src="http://narrow.realcme.com/cms/../cmsdata/course_icons/icon-sarah.gif"
                                                        alt="icon-sarah.gif" title="icon-sarah.gif" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/>Sarah
                                            </td>
                                            <td class="view-field view-field-node-title"></td>
                                            <td colspan="5" align="left" class="view-field mainrow"><a
                                                        href="/cms/node/1982">Sarah Visit 1 - Treating fibromyalgia with
                                                    concomitant conditions </a></td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="view-field view-field-node-title"></td>
                                            <td class="view-field view-field-term-node-1-name">Pain Management</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Muhammad B. Yunus, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">26-Jan-09</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                1&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">31-Jan-10</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                sarah
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td class="view-field view-field-node-title"></td>
                                            <td colspan="5" align="left" class="view-field mainrow"><a
                                                        href="/cms/node/1985">Sarah Visit 2 - Have we been able to
                                                    manage the FMS and reduce risks?</a></td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="view-field view-field-node-title"></td>
                                            <td class="view-field view-field-term-node-1-name">Pain Management</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Muhammad B. Yunus, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">26-Jan-09</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                1&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">31-Jan-10</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                sarah
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> <!-- --> </div>
                </div> <!-- /#content-inner, /#content -->
                <div id="sidebar-left">
                    <div id="sidebar-left-inner"></div>
                </div> <!-- /#sidebar-left-inner, /#sidebar-left -->
                <div id="sidebar-right">
                    <div id="sidebar-right-inner">
                        <div id="altcontainer2">
                            <div id="companionlogo"><img
                                        src="/cms/sites/all/themes/zen/narrowtheme/img/logo-companion.gif"
                                        id="logo-companion" alt="CMECompanion" class=""/></div>
                            <!-- Accordion Menu Start -->
                            <div id="list1">
                                <div id="block-cmeprofile-1"
                                     class="block block-cmeprofile region-odd even region-count-1 count-2">
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
                        <br/><br/> <img src="/cms/sites/all/themes/zen/narrowtheme/img/footerlogo.png" alt=""
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
