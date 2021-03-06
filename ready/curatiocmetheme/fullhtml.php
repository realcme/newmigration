<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-us" xml:lang="en-us">
<head><title>Curatio CME</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" href="http://i.realcme.com/cms/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="/cms/sites/all/themes/zen/curatiocmetheme/print.css" type="text/css" media="print"/>
    <style type="text/css" media="all">@import "/cms/../cmsdata/css/b4e17e44b68691441706504e783b0003.css";</style>
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
    <div id="page-inner">
        <div id="header">
            <div id="header-inner" class="clear-block">
                <div id="logo-title">
                    <div id="logo"><a href="/cms/../" title="Home" rel="home"><img
                                    src="/cms/sites/all/themes/zen/curatiocmetheme/img/curatio-logo.jpg" alt="Home"
                                    id="logo-image"/></a></div>
                </div> <!-- /#logo-title -->
                <div style="clear: both">
                    <ul id="navPrimary">
                        <li class="first" id="navOndemandCmeActivities"><a
                                    href="http://www.curatiocme.com/site/index.cfm/on-demand-cme-activities/">On-Demand
                                CME Activities</a>
                            <ul>
                                <li class="first" id="navDermatology"><a
                                            href="http://www.curatiocme.com/site/index.cfm/on-demand-cme-activities/dermatology/">Dermatology</a>
                                </li>
                                <li id="navEndocrinology"><a
                                            href="http://www.curatiocme.com/site/index.cfm/on-demand-cme-activities/endocrinology/">Endocrinology</a>
                                </li>
                                <li id="navGastroenterology"><a
                                            href="http://www.curatiocme.com/site/index.cfm/on-demand-cme-activities/gastroenterology/">Gastroenterology</a>
                                </li>
                                <li id="navHematologyoncology"><a
                                            href="http://www.curatiocme.com/site/index.cfm/on-demand-cme-activities/hematology-oncology/">Hematology-Oncology</a>
                                </li>
                                <li id="navOphthalmology"><a
                                            href="http://www.curatiocme.com/site/index.cfm/on-demand-cme-activities/ophthalmology/">Ophthalmology</a>
                                </li>
                                <li id="navOsteoporosis"><a
                                            href="http://www.curatiocme.com/site/index.cfm/on-demand-cme-activities/osteoporosis/">Osteoporosis</a>
                                </li>
                                <li id="navPain"><a
                                            href="http://www.curatiocme.com/site/index.cfm/on-demand-cme-activities/pain/">Pain</a>
                                </li>
                                <li id="navRheumatology"><a
                                            href="http://www.curatiocme.com/site/index.cfm/on-demand-cme-activities/rheumatology/">Rheumatology</a>
                                </li>
                                <li id="navUrology"><a
                                            href="http://www.curatiocme.com/site/index.cfm/on-demand-cme-activities/urology/">Urology</a>
                                </li>
                                <li class="last" id="navWomensHealth"><a
                                            href="http://www.curatiocme.com/site/index.cfm/on-demand-cme-activities/womens-health/">Women's
                                        Health</a></li>
                            </ul>
                        </li>
                        <li id="navPodcasts"><a href="http://www.curatiocme.com/site/index.cfm/podcasts1/">Podcasts</a>
                        </li>
                        <li id="navTherapeuticWebSites"><a
                                    href="http://www.curatiocme.com/site/index.cfm/therapeutic-web-sites/">Therapeutic
                                Web Sites</a></li>
                        <li class="last" id="navCurrentMedicalEvidence"><a
                                    href="http://www.curatiocme.com/site/index.cfm/current-medical-evidence/">Current
                                Medical Evidence</a></li>
                    </ul>
                </div>
            </div>
        </div> <!-- /#header-inner, /#header -->
        <div id="main">
            <div id="main-inner" class="clear-block with-navbar">
                <div id="content">
                    <div id="content-inner">
                        <div id="content-area">
                            <div class='view view-all-activities'>
                                <form action="http://curatiocme.realcme.com/cms/allactivities" accept-charset="UTF-8"
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
                                                        src="http://curatiocme.realcme.com/cms/../cmsdata/course_icons/icon_alan.gif"
                                                        alt="icon_alan.gif" title="icon_alan.gif" width="43" height="43"
                                                        class="imagefield imagefield-field_icon"/><br/>Alan
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/40298">Alan
                                                    Visit 1: A 50-Year-Old African-American Man Presenting Symptoms With
                                                    NSCLC</a></td>
                                            <td class="view-field view-field-term-node-1-name">Hematology-Oncology</td>
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
                                                rowspan="2" align="center" valign="top"><img
                                                        src="http://curatiocme.realcme.com/cms/../cmsdata/course_icons/icon_alec_0.gif"
                                                        alt="icon_alec.gif" title="icon_alec.gif" width="43" height="43"
                                                        class="imagefield imagefield-field_icon"/><br/>Alec
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/305705">Alec
                                                    Visit 1: A 62-year-old man presenting with low back pain</a></td>
                                            <td class="view-field view-field-term-node-1-name">Hematology-Oncology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Paul G. Richardson, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">29-Nov-12</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                1&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">29-Nov-13</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                alec
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td class="view-field view-field-node-title"><a href="/cms/node/335899">Alec
                                                    Visits 2 - 3: A 62-year-old man diagnosed with multiple myeloma
                                                    after presenting with back pain, fatigue, and malaise</a></td>
                                            <td class="view-field view-field-term-node-1-name">Hematology-Oncology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Paul G. Richardson, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">29-Nov-12</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                1&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">29-Nov-13</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                alec
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
                                                        src="http://curatiocme.realcme.com/cms/../cmsdata/course_icons/curatio-myeloma-icon.jpg"
                                                        alt="curatio-myeloma-icon.jpg" title="curatio-myeloma-icon.jpg"
                                                        width="43" height="43"
                                                        class="imagefield imagefield-field_icon"/><br/></td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/368334">Clinical
                                                    Decision Points in Multiple Myeloma</a></td>
                                            <td class="view-field view-field-term-node-1-name">Hematology-Oncology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Paul G. Richardson, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">29-Nov-12</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                1&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">29-Nov-13</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                265677
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
                                                        src="http://curatiocme.realcme.com/cms/../cmsdata/course_icons/icon_helene.gif"
                                                        alt="icon_helene.gif" title="icon_helene.gif" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/>Helene
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/37350">Helene
                                                    Visit 1: An Elderly Female with Stage IIIA Non–Small-Cell Lung
                                                    Cancer</a></td>
                                            <td class="view-field view-field-term-node-1-name">Hematology-Oncology</td>
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
                                        <tr class="odd">
                                            <td colspan="7" align="center" valign="top"><img
                                                        src="/cms/sites/all/modules/moodle/img/listing-separator.gif"
                                                        alt="" class="separator"/></td>
                                        </tr>
                                        <tr class="even">
                                            <td class="view-field view-field-node-data-field-icon-field-icon-fid"
                                                rowspan="2" align="center" valign="top"><img
                                                        src="http://curatiocme.realcme.com/cms/../cmsdata/course_icons/icon_joanne_3.gif"
                                                        alt="icon_joanne.gif" title="icon_joanne.gif" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/>Joanne
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/35423">Joanne
                                                    Visit 1: An Older Female Presenting With Worsening Joint Pain</a>
                                            </td>
                                            <td class="view-field view-field-term-node-1-name">Rheumatology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Leonard Fromer, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">09-Aug-10</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">09-Aug-11</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                joanne
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="view-field view-field-node-title"><a href="/cms/node/35432">Joanne
                                                    Visit 2: An Older Female With Worsening Joint Pain, Returning For
                                                    Follow-Up</a></td>
                                            <td class="view-field view-field-term-node-1-name">Rheumatology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Leonard Fromer, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">09-Aug-10</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">09-Aug-11</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                joanne
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
                                                        src="http://curatiocme.realcme.com/cms/../cmsdata/course_icons/icon_marty_0.gif"
                                                        alt="icon_marty.gif" title="icon_marty.gif" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/>Marty
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/511753">Marty
                                                    Visit 1: Clinical Challenges in the Management of Schizophrenia-A
                                                    20-year-old man with schizophrenia</a></td>
                                            <td class="view-field view-field-term-node-1-name">Psychiatry</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Peter J. Weiden, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">08-May-14</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                1&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">08-May-15</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                marty
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td class="view-field view-field-node-title"><a href="/cms/node/511762">Marty
                                                    Visits 2 - 3: Clinical Challenges in the Management of
                                                    Schizophrenia-A 20-year-old man with schizophrenia</a></td>
                                            <td class="view-field view-field-term-node-1-name">Psychiatry</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Peter J. Weiden, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">08-May-14</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">08-May-15</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                marty
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="view-field view-field-node-title"><a href="/cms/node/511793">Marty
                                                    Visits 4 - 5: Clinical Challenges in the Management of
                                                    Schizophrenia-A 22-year-old man with schizophrenia</a></td>
                                            <td class="view-field view-field-term-node-1-name">Psychiatry</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Peter J. Weiden, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">08-May-14</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">08-May-15</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                marty
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
                                                        src="http://curatiocme.realcme.com/cms/../cmsdata/course_icons/icon_novelapproachesinmigrainetherapy_0.jpg"
                                                        alt="icon_novelapproachesinmigrainetherapy.jpg"
                                                        title="icon_novelapproachesinmigrainetherapy.jpg" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/>Novel
                                                Approaches in Migraine Therapy
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/290816">Novel
                                                    Approaches in Migraine Therapy: Diagnosis and Treatment of Acute and
                                                    Chronic Migraine</a></td>
                                            <td class="view-field view-field-term-node-1-name">Neurology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Sheena K. Aurora, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">02-Nov-12</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                1&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">02-Nov-13</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                novelapproachesinmigrainetherapy
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
                                                        src="http://curatiocme.realcme.com/cms/../cmsdata/course_icons/icon_405408.gif"
                                                        alt="icon_405408.gif" title="icon_405408.gif" width="29"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/></td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/589620">Rheumatoid
                                                    Arthritis: Current Studies, Therapeutic Options and Mechanisms of
                                                    Action</a></td>
                                            <td class="view-field view-field-term-node-1-name">Rheumatology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Gregg J. Silverman, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">17-Mar-15</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                1&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">17-Mar-16</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                405408
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
                                        src="/cms/sites/all/themes/zen/curatiocmetheme/img/logo-companion.gif"
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
                        <br/><br/> <img src="/cms/sites/all/themes/zen/curatiocmetheme/img/footerlogo.png" alt=""
                                        class="center"/></center>
                </div>
            </div>
        </div> <!-- /#footer-inner, /#footer -->
        <div id="curatio-footer">
            <div class="wrap clearfix"><span class="left">Curatio CME Institute is accredited by the Accreditation Council for Continuing Medical Education (ACCME) to provide continuing medical education for physicians.</span>
                <span class="right">&copy; 2018 Curatio CME Institute<br/> <a
                            href="http://www.curatiocme.com/site/?LinkServID=940B9082-5056-A25C-5635C5537CCBA743 ">Contact Us</a></span>
            </div>
            <div style="clear: both"></div>
        </div>
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
