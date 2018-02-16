<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-us" xml:lang="en-us">
<head><title>OncologySTAT | STAGING</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" href="http://i.realcme.net/cms/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="/cms/sites/all/themes/zen/oncologystattheme/print.css" type="text/css" media="print"/>
    <style type="text/css" media="all">@import "/cms/../cmsdata/css/2b61a1277317ded79154dead67d3619d.css";</style>
    <!--[if IE]>
    <link rel="stylesheet" href="/cms/sites/all/themes/zen/ie.css" type="text/css"> <![endif]-->
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
</head>
<body class="front not-logged-in one-sidebar sidebar-right">
<div id="page">
    <div id="page-inner">
        <div id="masthead" class="clearfix">
            <div class="oncologylogo"><a href="http://www.oncologystat.com/index.html"><span
                            class="oov">OncologyStat<sup>&reg;</sup> One Source, Many Resources. By Elsevier</span></a>
            </div>
        </div>
        <div id="blue-bar">
            <div style="float: left">The Oncology Virtual Practice</div>
            <div class="powered_by" style="float:right">Powered by RealCME</div>
        </div>
        <div id="header">
            <div id="header-inner" class="clear-block"></div>
        </div> <!-- /#header-inner, /#header -->
        <div id="main">
            <div id="main-inner" class="clear-block with-navbar">
                <div id="content">
                    <div id="content-inner">
                        <div id="content-area">
                            <div class='view view-all-activities'>
                                <form action="http://oncologystat.realcme.net/cms/allactivities" accept-charset="UTF-8"
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
                                                Date
                                            </th>
                                            <th class="view-cell-header view-field-node-data-field-series-field-series-value"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="odd">
                                            <td class="view-field view-field-node-data-field-icon-field-icon-fid"
                                                rowspan="1" align="center" valign="top"><img
                                                        src="http://oncologystat.realcme.net/cms/../cmsdata/course_icons/icon_alan.gif"
                                                        alt="icon_alan.gif" title="icon_alan.gif" width="43" height="43"
                                                        class="imagefield imagefield-field_icon"/><br/>Alan
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/40298">Alan
                                                    Visit 1: A 50-Year-Old African-American Man Presenting Symptoms With
                                                    NSCLC</a></td>
                                            <td class="view-field view-field-term-node-1-name">Oncology/ Hematology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Mary Pinder-Schenck, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">14-Sep-10</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">14-Sep-11</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                alan
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
                                                        src="http://oncologystat.realcme.net/cms/../cmsdata/course_icons/icon_bill.gif"
                                                        alt="icon_bill.gif" title="icon_bill.gif" width="43" height="43"
                                                        class="imagefield imagefield-field_icon"/><br/>Bill
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/118845">Bill
                                                    Visit 1: A 70-year-old patient presenting with metastatic renal cell
                                                    carcinoma</a></td>
                                            <td class="view-field view-field-term-node-1-name">Oncology/ Hematology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Sumanta Kumar Pal, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">20-May-11</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.75&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">19-May-12</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                bill
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
                                                        src="http://oncologystat.realcme.net/cms/../cmsdata/course_icons/icon_epoc_194.png"
                                                        alt="icon_epoc.png" title="icon_epoc.png" width="43" height="43"
                                                        class="imagefield imagefield-field_icon"/><br/></td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/77579">Employing
                                                    Targeted Therapies for Treatment of Advanced Non–Small Cell Lung
                                                    Cancer (NSCLC)</a></td>
                                            <td class="view-field view-field-term-node-1-name">Oncology/ Hematology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Corey J. Langer, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">07-Jan-11</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">07-Jan-12</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                employing_targeted_therapies_treatment_nsclc
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
                                                        src="http://oncologystat.realcme.net/cms/../cmsdata/course_icons/icon_fred_0.gif"
                                                        alt="icon_fred.gif" title="icon_fred.gif" width="43" height="43"
                                                        class="imagefield imagefield-field_icon"/><br/>Fred
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/118634">Fred
                                                    Visit 1: A 67-year-old patient presenting with a renal mass</a></td>
                                            <td class="view-field view-field-term-node-1-name">Oncology/ Hematology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Sumanta Kumar Pal, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">17-Mar-11</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.75&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">17-Mar-12</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                fred
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
                                                        src="http://oncologystat.realcme.net/cms/../cmsdata/course_icons/3D6684.jpg"
                                                        alt="3D6684.jpg" title="3D6684.jpg" width="28" height="43"
                                                        class="imagefield imagefield-field_icon"/><br/>Genetic Profiling
                                                in Early-Stage Breast Cancer
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/92300">Genetic
                                                    Profiling in Early-Stage Breast Cancer 1: Neo-Adjuvant Chemotherapy
                                                    for Operable Breast Cancer</a></td>
                                            <td class="view-field view-field-term-node-1-name">Oncology/ Hematology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Eleftherios (Terry) P. Mamounas, MD, MPH, FACS
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">01-Mar-11</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">01-Mar-12</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                geneticprofilinginearly-stagebreastcancer
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
                                                        src="http://oncologystat.realcme.net/cms/../cmsdata/course_icons/icon_helene.gif"
                                                        alt="icon_helene.gif" title="icon_helene.gif" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/>Helene
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/37350">Helene
                                                    Visit 1: An Elderly Female with Stage IIIA Non–Small-Cell Lung
                                                    Cancer</a></td>
                                            <td class="view-field view-field-term-node-1-name">Oncology/ Hematology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Mary Pinder-Schenck, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">23-Aug-10</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">23-Aug-11</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                helene
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
                                                        src="http://oncologystat.realcme.net/cms/../cmsdata/course_icons/icon_james.gif"
                                                        alt="icon_james.gif" title="icon_james.gif" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/>James
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/80444">James
                                                    Visit 1: A 65-year-old man presenting with newly diagnosed non-small
                                                    cell lung cancer</a></td>
                                            <td class="view-field view-field-term-node-1-name">Oncology/ Hematology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Christopher G. Azzoli, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">20-Jan-11</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.75&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">20-Jan-12</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                james
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td class="view-field view-field-node-title"><a href="/cms/node/80702">James
                                                    Visit 2: A 65-year-old man returning after treatment for non–small
                                                    cell lung cancer</a></td>
                                            <td class="view-field view-field-term-node-1-name">Oncology/ Hematology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Christopher G. Azzoli, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">21-Jan-11</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.75&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">21-Jan-12</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                james
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
                                                        src="http://oncologystat.realcme.net/cms/../cmsdata/course_icons/icon-jane.gif"
                                                        alt="icon-jane.gif" title="icon-jane.gif" width="43" height="43"
                                                        class="imagefield imagefield-field_icon"/><br/>Jane
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/8943">Jane
                                                    Visit 1 - Postmenopausal woman with suspected metastatic breast
                                                    cancer</a></td>
                                            <td class="view-field view-field-term-node-1-name">Oncology/ Hematology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Monica N. Fornier, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">17-Dec-09</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">16-Dec-10</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                jane
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="view-field view-field-node-title"><a href="/cms/node/22878">Jane
                                                    Visit 2: Postmenopausal Woman With Metastatic Breast Cancer and
                                                    Ongoing Treatment</a></td>
                                            <td class="view-field view-field-term-node-1-name">Oncology/ Hematology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Monica N. Fornier, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">09-Jun-10</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.75&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">08-Jun-11</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                jane
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
                                                        src="http://oncologystat.realcme.net/cms/../cmsdata/course_icons/icon_karen.gif"
                                                        alt="icon_karen.gif" title="icon_karen.gif" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/>Karen
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/70076">Karen
                                                    Visit 1: A 49-Year-Old Female with Early Stage Breast Cancer</a>
                                            </td>
                                            <td class="view-field view-field-term-node-1-name">Oncology/ Hematology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Clifford A. Hudis, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">14-Dec-10</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">14-Dec-11</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                karen
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td class="view-field view-field-node-title"><a href="/cms/node/92182">Karen
                                                    Visit 2: A 49-Year-Old Female with Early Stage Breast Cancer,
                                                    Returning for Follow-up</a></td>
                                            <td class="view-field view-field-term-node-1-name">Oncology/ Hematology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Clifford A. Hudis, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">28-Feb-11</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">28-Feb-12</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                karen
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
                                                        src="http://oncologystat.realcme.net/cms/../cmsdata/course_icons/iStock_000006926155_0.jpg"
                                                        alt="iStock_000006926155_0.jpg"
                                                        title="iStock_000006926155_0.jpg" width="43" height="32"
                                                        class="imagefield imagefield-field_icon"/><br/>Mechanism of
                                                Action and Biological Activity of Emerging Therapies in Non-small Cell
                                                Lung Cancer
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/19845">Mechanism
                                                    of Action and Biological Activity of Emerging Therapies in Non-small
                                                    Cell Lung Cancer: The Road Ahead</a></td>
                                            <td class="view-field view-field-term-node-1-name">Oncology/ Hematology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                David S. Ettinger, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">20-May-10</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">19-May-11</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                mechanismofactionandbiologicalactivityofemergingtherapiesinnon-smallcelllungcancer
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
                                                        src="http://oncologystat.realcme.net/cms/../cmsdata/course_icons/icon_monica.gif"
                                                        alt="icon_monica.gif" title="icon_monica.gif" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/>Monica
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/126762">Monica
                                                    Visit 1: A 36-Year-Old Female with Early Stage Breast Cancer</a>
                                            </td>
                                            <td class="view-field view-field-term-node-1-name">Oncology/ Hematology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Rowan T. Chlebowski, MD, PhD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">09-Jun-11</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">09-Jun-12</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                monica
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="view-field view-field-node-title"><a href="/cms/node/159364">Monica
                                                    Visit 2: A 36-Year-Old Female with Early Stage Breast Cancer,
                                                    Returning for Follow-up</a></td>
                                            <td class="view-field view-field-term-node-1-name">Oncology/ Hematology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Rowan T. Chlebowski, MD, PhD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">13-Sep-11</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">13-Sep-12</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                monica
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
                                                        src="http://oncologystat.realcme.net/cms/../cmsdata/course_icons/3280kidney.jpg"
                                                        alt="3280kidney.jpg" title="3280kidney.jpg" width="39"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/>Targeted
                                                Therapies for Advanced Renal Cell Cancer
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/19088">New
                                                    Developments with Targeted Therapies for Patients with Advanced
                                                    Renal Cell Cancer: Targeted Therapy for Clear-Cell RCC</a></td>
                                            <td class="view-field view-field-term-node-1-name">Oncology/ Hematology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Ronald Bukowski, M.D.
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">11-May-10</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">10-May-11</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                newdevelopmentswithtargetedtherapiesforpatientswithadvancedrenalcellcancer
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
                                                        src="http://oncologystat.realcme.net/cms/../cmsdata/course_icons/icon-bensinger.gif"
                                                        alt="icon-bensinger.gif" title="icon-bensinger.gif" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/>William
                                                Bensinger, MD
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/88398">Practical
                                                    Aspects of HSCT for Hematologic Malignancies: Addison, Owen</a></td>
                                            <td class="view-field view-field-term-node-1-name">Oncology/ Hematology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                William I. Bensinger, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">15-Feb-11</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                1&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">15-Feb-12</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                williambensingermd
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
                                                        src="http://oncologystat.realcme.net/cms/../cmsdata/course_icons/RealCME-profilepic.jpg"
                                                        alt="RealCME-profilepic.jpg" title="RealCME-profilepic.jpg"
                                                        width="45" height="45"
                                                        class="imagefield imagefield-field_icon"/><br/></td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/226283">Treatment
                                                    Advances in Lymphoma: What&#039;s New from ASH 2011</a></td>
                                            <td class="view-field view-field-term-node-1-name">Oncology/ Hematology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Bruce D. Cheson, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">13-Mar-12</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">12-Mar-13</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                1
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
                                        src="/cms/sites/all/themes/zen/oncologystattheme/img/logo-companion.gif"
                                        id="logo-companion" alt="CMECompanion" class=""/>
                                <div id="logo-companion-text">Powered by RealCME</div>
                            </div> <!-- Accordion Menu Start -->
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
                        <br/><br/> <img src="/cms/sites/all/themes/zen/oncologystattheme/img/footerlogo.png" alt=""
                                        class="center"/></center>
                </div>
            </div>
        </div> <!-- /#footer-inner, /#footer -->
        <div id="user">
            <ul>
                <li class="cme-home"><a href="http://www.oncologystat.com/cme/index.html">CME Home</a></li>
            </ul>
        </div>
        <div id="copyright"></div>
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
