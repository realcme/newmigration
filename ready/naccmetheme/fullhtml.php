<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-us" xml:lang="en-us">
<head><title>NACCME</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" href="http://i.realcme.com/cms/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="/cms/sites/all/themes/zen/naccmetheme/print.css" type="text/css" media="print"/>
    <style type="text/css" media="all">@import "/cms/../cmsdata/css/e97c96ce9e4f5722b819b5d0c6c824d7.css";</style>
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
                    <div id="logo"><a href="/cms/../" title="Home" rel="home"><img
                                    src="/cms/sites/all/themes/zen/naccmetheme/img/logo.png" alt="Home"
                                    id="logo-image"/></a></div>
                </div> <!-- /#logo-title --> </div>
        </div> <!-- /#header-inner, /#header -->
        <div id="main">
            <div id="main-inner" class="clear-block with-navbar">
                <div id="content">
                    <div id="content-inner">
                        <div id="content-area">
                            <div class='view view-all-activities'>
                                <form action="http://naccme.realcme.com/cms/allactivities" accept-charset="UTF-8"
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
                                                        src="http://naccme.realcme.com/cms/../cmsdata/course_icons/icon-alicia.gif"
                                                        alt="icon-alicia.gif" title="icon-alicia.gif" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/>Alicia
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/9072">Alicia
                                                    Visit 1 - 55-Year-Old Female Presenting with a Diabetic Foot
                                                    Ulcer</a></td>
                                            <td class="view-field view-field-term-node-1-name">Infectious Diseases</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                John Fleischli, DPM
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">22-Dec-09</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/>0.5&nbsp;CPME<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">22-Dec-10</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                alicia
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td class="view-field view-field-node-title"><a href="/cms/node/9077">Alicia
                                                    Visit 2 - 55-Year-Old Female Presenting with a Diabetic Foot
                                                    Ulcer</a></td>
                                            <td class="view-field view-field-term-node-1-name">Infectious Diseases</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                John Fleischli, DPM
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">22-Dec-09</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/>1&nbsp;CPME<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">22-Dec-10</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                alicia
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
                                                        src="http://naccme.realcme.com/cms/../cmsdata/course_icons/icon-andy.gif"
                                                        alt="icon-andy.gif" title="icon-andy.gif" width="43" height="43"
                                                        class="imagefield imagefield-field_icon"/><br/>Andy
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/8199">Andy
                                                    Visit 1 - 63-Year-Old Male Presenting with an Ulcer under His Left
                                                    Foot</a></td>
                                            <td class="view-field view-field-term-node-1-name">Infectious Diseases</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Robert G. Frykberg, DPM, MPH
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">25-Nov-09</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/>0.5&nbsp;CPME<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">30-Nov-10</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                andy
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="view-field view-field-node-title"><a href="/cms/node/8204">Andy
                                                    Visit 2 - 63-Year-Old Male Presenting with Diabetic Foot
                                                    Infection</a></td>
                                            <td class="view-field view-field-term-node-1-name">Infectious Diseases</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Robert G. Frykberg, DPM, MPH
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">25-Nov-09</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/>1&nbsp;CPME<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">30-Nov-10</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                andy
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
                                                        src="http://naccme.realcme.com/cms/../cmsdata/course_icons/icon_bridgette.gif"
                                                        alt="icon_bridgette.gif" title="icon_bridgette.gif" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/>Bridgette
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/22351">Bridgette
                                                    Visit 1: A Young Female Referred for Diminished Vision and
                                                    Complications</a></td>
                                            <td class="view-field view-field-term-node-1-name">Neurology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Howard L. Zwibel, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">07-Jun-10</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/>0.5&nbsp;ACPE<br/>0.5&nbsp;ANCC<br/>0.5&nbsp;AANP<br/>
                                            </td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">06-Jun-11</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                bridgette
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td class="view-field view-field-node-title"><a href="/cms/node/33419">Bridgette
                                                    Visit 2: A Young Female with a History of Relapsing-Remitting
                                                    Multiple Sclerosis: 3-month Follow-up</a></td>
                                            <td class="view-field view-field-term-node-1-name">Neurology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Howard L. Zwibel, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">28-Jul-10</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/>0.5&nbsp;ACPE<br/>0.5&nbsp;ANCC<br/>0.5&nbsp;AANP<br/>
                                            </td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">27-Jul-11</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                bridgette
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
                                                        src="http://naccme.realcme.com/cms/../cmsdata/course_icons/icon_carin.gif"
                                                        alt="icon_carin.gif" title="icon_carin.gif" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/>Carin
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/22364">Carin
                                                    Visit 1: A Young Female Presenting with Pain and Impaired Vision in
                                                    Her Left Eye</a></td>
                                            <td class="view-field view-field-term-node-1-name">Neurology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Kathleen Costello, MS, ANP-BC, MSCN
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">07-Jun-10</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/>0.5&nbsp;ACPE<br/>0.5&nbsp;ANCC<br/>0.5&nbsp;AANP<br/>
                                            </td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">06-Jun-11</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                carin
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="view-field view-field-node-title"><a href="/cms/node/32362">Carin
                                                    Visit 2: A Young Female with a History of Clinically Isolated
                                                    Syndrome: Delayed 3-month Follow-up</a></td>
                                            <td class="view-field view-field-term-node-1-name">Neurology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Kathleen Costello, MS, ANP-BC, MSCN
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">22-Jul-10</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/>0.5&nbsp;ACPE<br/>0.5&nbsp;ANCC<br/>0.5&nbsp;AANP<br/>
                                            </td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">21-Jul-11</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                carin
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td colspan="7" align="center" valign="top"><img
                                                        src="/cms/sites/all/modules/moodle/img/listing-separator.gif"
                                                        alt="" class="separator"/></td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="view-field view-field-node-data-field-icon-field-icon-fid"
                                                rowspan="3" align="center" valign="top"><img
                                                        src="http://naccme.realcme.com/cms/../cmsdata/course_icons/icon_carol.gif"
                                                        alt="icon_carol.gif" title="icon_carol.gif" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/>Carol
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/32014">Carol
                                                    Visit 1: 44-Year-Old Female with Pain, Swelling, and Stiffness in
                                                    Her Hands, Feet, and Shoulders</a></td>
                                            <td class="view-field view-field-term-node-1-name">Rheumatology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Jonathan Kay, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">20-Jul-10</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.75&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">19-Jul-11</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                carol
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td class="view-field view-field-node-title"><a href="/cms/node/38256">Carol
                                                    Visit 2: 44-Year-Old Female Returning for Follow-up Reporting
                                                    Persistent Swelling and Tenderness in Multiple Joints</a></td>
                                            <td class="view-field view-field-term-node-1-name">Rheumatology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Jonathan Kay, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">31-Aug-10</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.75&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">31-Aug-11</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                carol
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="view-field view-field-node-title"><a href="/cms/node/45325">Carol
                                                    Visit 3: A 44-Year-Old Female Being Treated for RA Discovers a Lump
                                                    In Her Right Armpit</a></td>
                                            <td class="view-field view-field-term-node-1-name">Rheumatology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Jonathan Kay, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">30-Sep-10</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">30-Sep-11</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                carol
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
                                                        src="http://naccme.realcme.com/cms/../cmsdata/course_icons/icon_cheryl.gif"
                                                        alt="icon_cheryl.gif" title="icon_cheryl.gif" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/>Cheryl
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/27542">Cheryl
                                                    Visit 1: A 67-year-old African-American female admitted to the ICU
                                                    due to complications of nosocomial pneumonia</a></td>
                                            <td class="view-field view-field-term-node-1-name">Critical Care</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Mark A. Munger, PharmD, FCCP
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">28-Jun-10</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;ACPE<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">27-Jun-11</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                cheryl
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
                                                        src="http://naccme.realcme.com/cms/../cmsdata/course_icons/icon-michota.gif"
                                                        alt="icon-michota.gif" title="icon-michota.gif" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/>Dr.
                                                Franklin A. Michota
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/9431">Dr.
                                                    Franklin A. Michota (ConsultService 1): Optimizing VTE Prophylaxis
                                                    in the Inpatient Setting</a></td>
                                            <td class="view-field view-field-term-node-1-name">Cardiology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Franklin A. Michota, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">29-Dec-09</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                1&nbsp;AMA<br/>1&nbsp;ACPE<br/>1&nbsp;ANCC<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">28-Dec-10</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                drmichota
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td colspan="7" align="center" valign="top"><img
                                                        src="/cms/sites/all/modules/moodle/img/listing-separator.gif"
                                                        alt="" class="separator"/></td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="view-field view-field-node-data-field-icon-field-icon-fid"
                                                rowspan="3" align="center" valign="top"><img
                                                        src="http://naccme.realcme.com/cms/../cmsdata/course_icons/icon_jessica.gif"
                                                        alt="icon_jessica.gif" title="icon_jessica.gif" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/>Jessica
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/31996">Jessica
                                                    Visit 1: 35-Year-Old White Female with Persistent Back and Foot
                                                    Pain</a></td>
                                            <td class="view-field view-field-term-node-1-name">Rheumatology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Philip Mease, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">20-Jul-10</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.75&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">19-Jul-11</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                jessica
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td class="view-field view-field-node-title"><a href="/cms/node/38242">Jessica
                                                    Visit 2: 35-Year-Old White Female Presenting for Follow-Up Following
                                                    Initial Diagnosis of SpA</a></td>
                                            <td class="view-field view-field-term-node-1-name">Rheumatology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Philip Mease, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">31-Aug-10</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">31-Aug-11</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                jessica
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="view-field view-field-node-title"><a href="/cms/node/45333">Jessica
                                                    Visit 3: A 35-Year-Old White Female Diagnosed with SpA is Being Seen
                                                    on Follow-up</a></td>
                                            <td class="view-field view-field-term-node-1-name">Rheumatology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Philip Mease, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">30-Sep-10</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">30-Sep-11</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                jessica
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
                                                        src="http://naccme.realcme.com/cms/../cmsdata/course_icons/jim.gif"
                                                        alt="jim.gif" title="jim.gif" width="43" height="43"
                                                        class="imagefield imagefield-field_icon"/><br/>Jim
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/9405">Jim
                                                    Visit 1: A 78-year-old male presenting for a post-discharge office
                                                    visit following hip fracture repair</a></td>
                                            <td class="view-field view-field-term-node-1-name">Cardiology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Franklin A. Michota, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">29-Dec-09</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/>0.5&nbsp;ACPE<br/>0.5&nbsp;ANCC<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">29-Dec-10</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                jim
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
                                                        src="http://naccme.realcme.com/cms/../cmsdata/course_icons/icon-mark_0.gif"
                                                        alt="icon-mark.gif" title="icon-mark.gif" width="43" height="43"
                                                        class="imagefield imagefield-field_icon"/><br/>Mark
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/10713">Mark
                                                    Visit 1: A 59-year-old male recently discharged from the hospital
                                                    following an open nephrectomy for renal cell carcinoma</a></td>
                                            <td class="view-field view-field-term-node-1-name">Cardiology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Franklin A. Michota, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">21-Jan-10</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/>0.5&nbsp;ACPE<br/>0.5&nbsp;ANCC<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">20-Jan-11</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                mark
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
                                                        src="http://naccme.realcme.com/cms/../cmsdata/course_icons/icon_raul.gif"
                                                        alt="icon_raul.gif" title="icon_raul.gif" width="43" height="43"
                                                        class="imagefield imagefield-field_icon"/><br/>Raul
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/37339">Raul
                                                    Visit 1: A Hispanic Male Presenting with Acute Decompensated Heart
                                                    Failure, Difficulty Breathing, and Weight Gain</a></td>
                                            <td class="view-field view-field-term-node-1-name">Critical Care</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Mark A. Munger, PharmD, FCCP
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">23-Aug-10</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;ACPE<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">22-Aug-11</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                raul
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
                                                        src="http://naccme.realcme.com/cms/../cmsdata/course_icons/stanley.gif"
                                                        alt="stanley.gif" title="stanley.gif" width="43" height="43"
                                                        class="imagefield imagefield-field_icon"/><br/>Stanley
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/10931">Stanley
                                                    Visit 1: A 67-year-old African-American male admitted to a
                                                    rehabilitation facility following an ischemic stroke</a></td>
                                            <td class="view-field view-field-term-node-1-name">Cardiology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Arthur P. Wheeler, MD, FCCP
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">26-Jan-10</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/>0.5&nbsp;ACPE<br/>0.5&nbsp;ANCC<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">25-Jan-11</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                stanley
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
                                        src="/cms/sites/all/themes/zen/naccmetheme/img/logo-companion.gif"
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
                        <br/><br/> <img src="/cms/sites/all/themes/zen/naccmetheme/img/footerlogo.png" alt=""
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
