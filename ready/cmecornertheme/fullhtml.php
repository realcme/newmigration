<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-us" xml:lang="en-us">
<head><title>cmecorner</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" href="http://i.realcme.com/cms/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="/cms/sites/all/themes/zen/cmecornertheme/print.css" type="text/css" media="print"/>
    <style type="text/css" media="all">@import "/cms/../cmsdata/css/14ea4da56ee3286d9f6df45bc528062c.css";</style>
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
                <div id="cmecorner-title">
                    <div id="logo"><a href="http://www.cmecorner.com" title="cmecorner" rel="home"><img
                                    src="/cms/sites/all/themes/zen/cmecornertheme/img/cmecorner-logo.jpg"
                                    alt="cmecorner" id="logo-image"/></a></div>
                </div> <!-- /#logo-title --> </div>
        </div> <!-- /#header-inner, /#header -->
        <div id="main">
            <div id="main-inner" class="clear-block with-navbar">
                <div id="content">
                    <div id="content-inner">
                        <div id="content-area">
                            <div class='view view-all-activities'>
                                <form action="http://cmecorner.realcme.com/cms/allactivities" accept-charset="UTF-8"
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
                                                        src="http://cmecorner.realcme.com/cms/../cmsdata/course_icons/icon_alexander_0.gif"
                                                        alt="icon_alexander.gif" title="icon_alexander.gif" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/>Alexander
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/246700">Alexander
                                                    Visit 1: Young Male Presenting with Weight Loss, Fever, Cramping in
                                                    Abdomen</a></td>
                                            <td class="view-field view-field-term-node-1-name">Gastroenterology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                William J. Sandborn, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">30-May-12</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">30-May-13</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                alexander
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
                                                        src="http://cmecorner.realcme.com/cms/../cmsdata/course_icons/icon_allison_0.gif"
                                                        alt="icon_allison.gif" title="icon_allison.gif" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/>Allison
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/280162">Allison
                                                    Visit 1: A Middle-Aged Woman Experiencing Mild Breathlessness While
                                                    Climbing Stairs</a></td>
                                            <td class="view-field view-field-term-node-1-name">Pulmonary Disease</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Todd M. Bull, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">04-Oct-12</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">04-Oct-13</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                allison
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
                                                        src="http://cmecorner.realcme.com/cms/../cmsdata/course_icons/icon_519269.jpg"
                                                        alt="icon_519269.jpg" title="icon_519269.jpg" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/></td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/703360">Assessing
                                                    Asthma Severity: A Self-assessment and Clinical Overview</a></td>
                                            <td class="view-field view-field-term-node-1-name">Pulmonary Disease</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Michael E. Wechsler, MD, MMSc
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">16-Aug-16</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                1&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">30-Aug-17</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                519269
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
                                                        src="http://cmecorner.realcme.com/cms/../cmsdata/course_icons/icon_438876.jpg"
                                                        alt="icon_438876.jpg" title="icon_438876.jpg" width="43"
                                                        height="49" class="imagefield imagefield-field_icon"/><br/></td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/603916">Case
                                                    Challenges in Psoriasis and Psoriatic Arthritis</a></td>
                                            <td class="view-field view-field-term-node-1-name">Dermatology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Philip J. Mease, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">12-Jun-15</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.75&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">11-Jun-16</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                438876
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
                                                        src="http://cmecorner.realcme.com/cms/../cmsdata/course_icons/icon_599950.jpg"
                                                        alt="icon_599950.jpg" title="icon_599950.jpg" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/></td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/837676">Case
                                                    Challenges in the Use of Insulin in T2DM</a></td>
                                            <td class="view-field view-field-term-node-1-name">Endocrinology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Louis H. Philipson, MD, PhD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">07-Dec-17</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.75&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single">07-Dec-18</span></td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                599950
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
                                                        src="http://cmecorner.realcme.com/cms/../cmsdata/course_icons/icon_437924.jpg"
                                                        alt="icon_437924.jpg" title="icon_437924.jpg" width="43"
                                                        height="49" class="imagefield imagefield-field_icon"/><br/></td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/603906">Clinical
                                                    Review - Improving Outcomes in Patients with Psoriasis and Psoriatic
                                                    Arthritis</a></td>
                                            <td class="view-field view-field-term-node-1-name">Dermatology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Philip J. Mease, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">12-Jun-15</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.75&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">11-Jun-16</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                437924
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
                                                        src="http://cmecorner.realcme.com/cms/../cmsdata/course_icons/icon_conner_2.gif"
                                                        alt="icon_conner.gif" title="icon_conner.gif" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/>Conner
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/305248">Conner
                                                    Visit 1: Young man referred for treatment of spasticity resulting
                                                    from a traumatic brain injury 1 year earlier</a></td>
                                            <td class="view-field view-field-term-node-1-name">Neurology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Elizabeth Ann Moberg-Wolff, MD, FAAPMR
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">29-Nov-12</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">29-Nov-13</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                conner
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
                                                        src="http://cmecorner.realcme.com/cms/../cmsdata/course_icons/icon_contemporaryconsiderationsinthemanagementofms_0.jpg"
                                                        alt="icon_contemporaryconsiderationsinthemanagementofms.jpg"
                                                        title="icon_contemporaryconsiderationsinthemanagementofms.jpg"
                                                        width="43" height="43"
                                                        class="imagefield imagefield-field_icon"/><br/>Contemporary
                                                Considerations in the Management of MS
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/461508">Contemporary
                                                    Considerations in the Management of MS</a></td>
                                            <td class="view-field view-field-term-node-1-name">Neurology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Ben Thrower, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">10-Dec-13</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">10-Dec-14</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                contemporaryconsiderationsinthemanagementofms
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
                                                        src="http://cmecorner.realcme.com/cms/../cmsdata/course_icons/icon_elyse_0.gif"
                                                        alt="icon_elyse.gif" title="icon_elyse.gif" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/>Elyse
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/263151">Elyse
                                                    Visit 1: An Elderly Female with Age-related Macular Degeneration</a>
                                            </td>
                                            <td class="view-field view-field-term-node-1-name">Ophthalmology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                David S. Boyer, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">03-Aug-12</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.75&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">03-Aug-13</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                elyse
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
                                                        src="http://cmecorner.realcme.com/cms/../cmsdata/course_icons/icon_felicia_0.gif"
                                                        alt="icon_felicia.gif" title="icon_felicia.gif" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/>Felicia
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/357588">Felicia
                                                    Visit 1: A Middle-Aged Woman Presenting with Exertional Dyspnea</a>
                                            </td>
                                            <td class="view-field view-field-term-node-1-name">Pulmonary Disease</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Vallerie V. McLaughlin, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">03-Jan-13</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">03-Jan-14</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                felicia
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
                                                        src="http://cmecorner.realcme.com/cms/../cmsdata/course_icons/icon_431916.jpg"
                                                        alt="icon_431916.jpg" title="icon_431916.jpg" width="43"
                                                        height="49" class="imagefield imagefield-field_icon"/><br/></td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/599181">Improving
                                                    Outcomes in Patients with Psoriasis and Psoriatic Arthritis - A
                                                    Self-assessment Program</a></td>
                                            <td class="view-field view-field-term-node-1-name">Dermatology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Philip J. Mease, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">07-May-15</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.75&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">12-Jun-16</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                431916
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
                                                        src="http://cmecorner.realcme.com/cms/../cmsdata/course_icons/icon_kayla_0.gif"
                                                        alt="icon_kayla.gif" title="icon_kayla.gif" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/>Kayla
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/472909">Kayla
                                                    Visit 1: A 28-year-old Woman Presenting with Vision Problems That
                                                    May Indicate Multiple Sclerosis</a></td>
                                            <td class="view-field view-field-term-node-1-name">Neurology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Ben Thrower, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">07-Jan-14</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">06-Jan-15</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                kayla
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td class="view-field view-field-node-title"><a href="/cms/node/478706">Kayla
                                                    Visits 2 - 3: Assessing a young woman with RRMS</a></td>
                                            <td class="view-field view-field-term-node-1-name">Neurology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Ben Thrower, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">23-Jan-14</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">22-Jan-15</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                kayla
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td colspan="7" align="center" valign="top"><img
                                                        src="/cms/sites/all/modules/moodle/img/listing-separator.gif"
                                                        alt="" class="separator"/></td>
                                        </tr>
                                        <tr class="even">
                                            <td class="view-field view-field-node-data-field-icon-field-icon-fid"
                                                rowspan="1" align="center" valign="top"><img
                                                        src="http://cmecorner.realcme.com/cms/../cmsdata/course_icons/icon_599849.jpg"
                                                        alt="icon_599849.jpg" title="icon_599849.jpg" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/></td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/830714">Management
                                                    of T2DM: The Role of Insulin</a></td>
                                            <td class="view-field view-field-term-node-1-name">Endocrinology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Louis H. Philipson, MD, PhD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">21-Nov-17</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.75&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single">21-Nov-18</span></td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                599849
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td colspan="7" align="center" valign="top"><img
                                                        src="/cms/sites/all/modules/moodle/img/listing-separator.gif"
                                                        alt="" class="separator"/></td>
                                        </tr>
                                        <tr class="even">
                                            <td class="view-field view-field-node-data-field-icon-field-icon-fid"
                                                rowspan="1" align="center" valign="top"><img
                                                        src="http://cmecorner.realcme.com/cms/../cmsdata/course_icons/PAH_resized.jpg"
                                                        alt="PAH_resized.jpg" title="PAH_resized.jpg" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/></td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/263815">Opportunities
                                                    to Improve Outcomes in Patients with Pulmonary Arterial
                                                    Hypertension</a></td>
                                            <td class="view-field view-field-term-node-1-name">Pulmonary Disease</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Aryeh Fischer, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">07-Aug-12</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                1&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">07-Aug-13</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                246569
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td colspan="7" align="center" valign="top"><img
                                                        src="/cms/sites/all/modules/moodle/img/listing-separator.gif"
                                                        alt="" class="separator"/></td>
                                        </tr>
                                        <tr class="even">
                                            <td class="view-field view-field-node-data-field-icon-field-icon-fid"
                                                rowspan="1" align="center" valign="top"><img
                                                        src="http://cmecorner.realcme.com/cms/../cmsdata/course_icons/icon_optimalassessmentandtherapyforpatientswithspasticity_0.jpg"
                                                        alt="icon_optimalassessmentandtherapyforpatientswithspasticity.jpg"
                                                        title="icon_optimalassessmentandtherapyforpatientswithspasticity.jpg"
                                                        width="43" height="42"
                                                        class="imagefield imagefield-field_icon"/><br/>Optimal
                                                Assessment and Therapy for Patients with Spasticity
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/287026">Optimal
                                                    Assessment and Therapy for Patients with Spasticity: Considerations
                                                    for Effective Treatment</a></td>
                                            <td class="view-field view-field-term-node-1-name">Neurology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Zoltan Mari, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">22-Oct-12</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">22-Oct-13</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                optimalassessmentandtherapyforpatientswithspasticity
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td colspan="7" align="center" valign="top"><img
                                                        src="/cms/sites/all/modules/moodle/img/listing-separator.gif"
                                                        alt="" class="separator"/></td>
                                        </tr>
                                        <tr class="even">
                                            <td class="view-field view-field-node-data-field-icon-field-icon-fid"
                                                rowspan="1" align="center" valign="top"><img
                                                        src="http://cmecorner.realcme.com/cms/../cmsdata/course_icons/icon_522508.jpg"
                                                        alt="icon_522508.jpg" title="icon_522508.jpg" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/></td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/708116">Optimizing
                                                    Asthma Control: Individualizing Therapy</a></td>
                                            <td class="view-field view-field-term-node-1-name">Pulmonary Disease</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Monica Kraft, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">30-Aug-16</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                1&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">30-Aug-17</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                522508
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td colspan="7" align="center" valign="top"><img
                                                        src="/cms/sites/all/modules/moodle/img/listing-separator.gif"
                                                        alt="" class="separator"/></td>
                                        </tr>
                                        <tr class="even">
                                            <td class="view-field view-field-node-data-field-icon-field-icon-fid"
                                                rowspan="1" align="center" valign="top"><img
                                                        src="http://cmecorner.realcme.com/cms/../cmsdata/course_icons/icon_565426_2.jpg"
                                                        alt="icon_565426.jpg" title="icon_565426.jpg" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/></td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/771926">Psoriatic
                                                    Arthritis: Understanding the Patient Experience to Improve Patient
                                                    Satisfaction and Outcomes</a></td>
                                            <td class="view-field view-field-term-node-1-name">Rheumatology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Alan Menter, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">27-Apr-17</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.75&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single">27-Apr-18</span></td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                565426
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
                                                        src="http://cmecorner.realcme.com/cms/../cmsdata/course_icons/icon_sandy_0.gif"
                                                        alt="icon_sandy.gif" title="icon_sandy.gif" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/>Sandy
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/465365">Sandy
                                                    Visit 1: A 33-year-old woman starting treatment for newly diagnosed
                                                    rheumatoid arthritis</a></td>
                                            <td class="view-field view-field-term-node-1-name">Rheumatology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Michael York, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">17-Dec-13</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">16-Dec-14</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                sandy
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="view-field view-field-node-title"><a href="/cms/node/473516">Sandy
                                                    Visits 2 - 3: A 33-year-old woman diagnosed with rheumatoid
                                                    arthritis 6 months ago</a></td>
                                            <td class="view-field view-field-term-node-1-name">Rheumatology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Michael York, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">09-Jan-14</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">09-Jan-15</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                sandy
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
                                                        src="http://cmecorner.realcme.com/cms/../cmsdata/course_icons/icon_620638.jpg"
                                                        alt="icon_620638.jpg" title="icon_620638.jpg" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/></td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/841730">Team-based
                                                    Care for Patients with Type 2 Diabetes</a></td>
                                            <td class="view-field view-field-term-node-1-name">Endocrinology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Neda Laiteerapong, MD, MS, FACP
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">21-Dec-17</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                1&nbsp;AMA<br/>1&nbsp;CDR<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single">21-Dec-18</span></td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                620638
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
                                                        src="http://cmecorner.realcme.com/cms/../cmsdata/course_icons/icon_613363.jpg"
                                                        alt="icon_613363.jpg" title="icon_613363.jpg" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/></td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/851024">The
                                                    Role of the Pharmacist in T2D: The Evolution of Insulin Therapy</a>
                                            </td>
                                            <td class="view-field view-field-term-node-1-name">Diabetology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Joshua J. Neumiller, PharmD, CDE, FASCP
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">18-Jan-18</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                1&nbsp;ACPE<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single">18-Jan-19</span></td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                613363
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
                                        src="/cms/sites/all/themes/zen/cmecornertheme/img/logo-companion.gif"
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
                        <br/><br/> <img src="/cms/sites/all/themes/zen/cmecornertheme/img/footerlogo.png" alt=""
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
