<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-us" xml:lang="en-us">
<head><title>Pain</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" href="http://i.realcme.com/cms/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="/cms/sites/all/themes/zen/paintheme/print.css" type="text/css" media="print"/>
    <style type="text/css" media="all">@import "/cms/../cmsdata/css/54f5a44410936e0dfd3479d94daaee6f.css";</style>
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
<div id="header-container">
    <div id="header">
        <div id="painlogo"></div> <!-- <div id="ddtopmenubar" class="mattblackmenu"> -->
        <!--<div id="ddtopmenubar" class="painmenutop"> <ul> <li><p> User <br /> Quick Links</p></li> <li><a class="divider" href=""><img src="sites/all/themes/zen/paintheme/img/practitioner_icon.png" alt="Practitioner Icon" />Professionals</a></li> <li><a href=""><img src="sites/all/themes/zen/paintheme/img/consumer_icon.png" alt="Practitioner Icon" />Consumers</a></li> </ul> </div>-->
        <div class="quickLinks"><p class="quiet small divider">User Quick<br/>Links<br/></p>
            <ul class="main">
                <li><a href="" class="divider"></a></li>
                <li><img id="quickimg" src="sites/all/themes/zen/paintheme/img/practitioner_icon.png"
                         alt="Practioner Icon"/></li>
                <li><a href=""> Professionals</a>
                    <ul class="small">
                        <li><a href="http://www.pain.com/go/default/practitioner/cme-center/">CME Center</a></li>
                        <li><a href="http://www.pain.com/go/default/practitioner/medical-library/doctors-tool-kit/">Doctor's
                                Tool Kit</a></li>
                        <li>
                            <a href="http://www.pain.com/go/default/practitioner/medical-library/news-for-the-medical-practitioner/">Pain
                                News</a></li>
                        <li><a href="http://www.pain.com/go/default/practitioner/medical-library/">Medical Library</a>
                        </li>
                        <li><a href="http://www.pain.com/go/default/practitioner/medical-library/government-actions/">Government
                                Actions</a></li>
                        <li>
                            <a href="http://www.pain.com/go/default/practitioner/pointcounter-point/">Point/Counterpoint</a>
                        </li>
                        <li>
                            <a href="http://www.pain.com/go/default/practitioner/live-from-the-convention-floor/events-calendar/">Events
                                Calendar</a></li>
                        <li><a href="http://www.pain.com/go/default/practitioner/live-from-the-convention-floor/">Convention
                                Floor Coverage</a></li>
                        <li><a href="http://www.pain.com/go/default/practitioner/exhibit-hall-3d/">3D Exhibit Hall</a>
                        </li>
                        <li><a href="http://www.pain.com/go/default/practitioner/pain-clinics/">Pain Clinics</a></li>
                    </ul>
                </li>
                <li><a href="" class="divider"></a></li>
                <li><img id="quickimg" src="sites/all/themes/zen/paintheme/img/consumer_icon.png" alt="Consumer Icon"/>
                </li>
                <li><a class href=""> Consumers</a>
                    <ul class="small">
                        <li><a href="http://www.pain.com/go/default/consumer/painful-conditions/">Painful Conditions</a>
                        </li>
                        <li><a href="http://www.pain.com/go/default/consumer/ask-the-expert/">Ask the Pain Doctor?</a>
                        </li>
                        <li><a href="http://www.pain.com/go/default/consumer/ask-the-pharmacist/">Ask the
                                Pharmacist?</a></li>
                        <li><a href="http://www.pain.com/go/default/consumer/in-the-news/">Patient News</a></li>
                        <li><a href="http://www.pain.com/go/default/consumer/library/">Library</a></li>
                        <li><a href="http://www.pain.com/go/default/consumer/pain-clinics/">Pain Clinics</a></li>
                        <li><a href="http://www.pain.com/go/default/consumer/community-forum/">Community Forum</a></li>
                        <li><a href="http://www.pain.com/go/default/consumer/drug-store/">Drug Store</a></li>
                        <li>
                            <a href="http://www.pain.com/go/default/consumer/complementary-alternative-therapies/">CAM</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div id="mainmenu">
            <ul>
                <li><a href="http://www.pain.com">HOME</a></li>
                <li><a href="http://www.pain.com/go/default/practitioner/cme-center/">CE/CME</a></li>
                <li><a href="http://www.pain.com/go/default/consumer/pain-clinics/">PAIN CLINICS</a></li>
                <li><a href="http://www.pain.com/go/default/about-paincom/">ABOUT US</a></li>
                <li><a href="http://www.pain.com/go/default/contact-us/">CONTACT US</a></li>
            </ul>
        </div>
    </div>
</div>
<div id="page">
    <div id="page-inner">
        <div id="header">
            <div id="header-inner" class="clear-block"></div>
        </div> <!-- /#header-inner, /#header -->
        <div id="main">
            <div id="main-inner" class="clear-block with-navbar">
                <div id="content">
                    <div id="content-inner">
                        <div id="content-area">
                            <div class='view view-all-activities'>
                                <form action="http://pain.realcme.com/cms/allactivities" accept-charset="UTF-8"
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
                                                        src="http://pain.realcme.com/cms/../cmsdata/course_icons/icon_alan.gif"
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
                                                        src="http://pain.realcme.com/cms/../cmsdata/course_icons/icon-alice.gif"
                                                        alt="icon-alice.gif" title="icon-alice.gif" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/>Alice
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/1744">Alice
                                                    Visit 1 - The Brain-Bladder Behavior Connection</a></td>
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
                                        <tr class="even">
                                            <td class="view-field view-field-node-title"><a href="/cms/node/1746">Alice
                                                    Visit 2 - The Brain-Bladder Behavior Connection</a></td>
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
                                            <td colspan="7" align="center" valign="top"><img
                                                        src="/cms/sites/all/modules/moodle/img/listing-separator.gif"
                                                        alt="" class="separator"/></td>
                                        </tr>
                                        <tr class="even">
                                            <td class="view-field view-field-node-data-field-icon-field-icon-fid"
                                                rowspan="1" align="center" valign="top"><img
                                                        src="http://pain.realcme.com/cms/../cmsdata/course_icons/neuron_image.JPG"
                                                        alt="neuron_image.JPG" title="neuron_image.JPG" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/>Best
                                                Practices in Identifying, Assessing, and Treating Alzheimer’s Disease
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/47928">Alzheimer&#039;s
                                                    Disease in Primary Care 1: Screening and Assessment Tools</a></td>
                                            <td class="view-field view-field-term-node-1-name">Geriatrics</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Diana Kerwin, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">11-Oct-10</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">11-Oct-11</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                alzheimersdiseaseinprimarycare
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
                                                        src="http://pain.realcme.com/cms/../cmsdata/course_icons/icon_andrew.gif"
                                                        alt="icon_andrew.gif" title="icon_andrew.gif" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/>Andrew
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/63317">Andrew
                                                    Visit 1: A middle-aged male with a history of major depressive
                                                    episodes</a></td>
                                            <td class="view-field view-field-term-node-1-name">Psychiatry</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Bradley N. Gaynes, MD, MPH
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">24-Nov-10</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.75&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">24-Nov-11</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                andrew
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="view-field view-field-node-title"><a href="/cms/node/71479">Andrew
                                                    Visit 2: A middle-aged male with treatment-resistant depression</a>
                                            </td>
                                            <td class="view-field view-field-term-node-1-name">Psychiatry</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Bradley N. Gaynes, MD, MPH
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">20-Dec-10</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                1&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">20-Dec-11</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                andrew
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
                                                        src="http://pain.realcme.com/cms/../cmsdata/course_icons/icon-arthur.gif"
                                                        alt="icon-arthur.gif" title="icon-arthur.gif" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/>Arthur
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/5076">Arthur
                                                    Visit 1 - Patient with persistent lower urinary tract symptoms
                                                    despite BPH treatment</a></td>
                                            <td class="view-field view-field-term-node-1-name">Urology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Allen D. Seftel, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">31-Jul-09</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                1&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">31-Jul-10</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                arthur
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td class="view-field view-field-node-title"><a href="/cms/node/6744">Arthur
                                                    Visit 2 - Patient with OAB and BPH complains of continued urgency
                                                    after TUMT</a></td>
                                            <td class="view-field view-field-term-node-1-name">Urology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Allen D. Seftel, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">31-Aug-09</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                1&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">31-Aug-10</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                arthur
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
                                                        src="http://pain.realcme.com/cms/../cmsdata/course_icons/icon-barbara.gif"
                                                        alt="icon-barbara.gif" title="icon-barbara.gif" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/>Barbara
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/4103">Barbara
                                                    Visit 1 - A 46 YO Female Presenting with Difficulty Sleeping and
                                                    Persistent Depression</a></td>
                                            <td class="view-field view-field-term-node-1-name">Psychiatry</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Glenn J. Treisman, MD, PhD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">29-Jun-09</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">30-Jun-10</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                barbara
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="view-field view-field-node-title"><a href="/cms/node/4115">Barbara
                                                    Visit 2 - A 46 YO Female Presenting with Depression and Continued
                                                    Insomnia</a></td>
                                            <td class="view-field view-field-term-node-1-name">Psychiatry</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Glenn J. Treisman, MD, PhD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">29-Jun-09</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">30-Jun-10</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                barbara
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
                                                        src="http://pain.realcme.com/cms/../cmsdata/course_icons/icon-bethany.gif"
                                                        alt="icon-bethany.gif" title="icon-bethany.gif" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/>Bethany
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/226">Bethany
                                                    Visit 1 - Practical Influenza Prevention for the Pediatric Practice:
                                                    Pre-School Age Child</a></td>
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
                                            <td colspan="7" align="center" valign="top"><img
                                                        src="/cms/sites/all/modules/moodle/img/listing-separator.gif"
                                                        alt="" class="separator"/></td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="view-field view-field-node-data-field-icon-field-icon-fid"
                                                rowspan="2" align="center" valign="top"><img
                                                        src="http://pain.realcme.com/cms/../cmsdata/course_icons/bob.gif"
                                                        alt="bob.gif" title="bob.gif" width="43" height="43"
                                                        class="imagefield imagefield-field_icon"/><br/>Bob
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/11416">Bob
                                                    Visit 1: A 61-Year-Old Man With Chronic Back Pain</a></td>
                                            <td class="view-field view-field-term-node-1-name">Pain Management</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Bruce D. Nicholson, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">02-Feb-10</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.75&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">17-Jun-11</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                bob
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td class="view-field view-field-node-title"><a href="/cms/node/25517">Bob
                                                    Visit 2: A 61-Year-Old Man With Chronic Back Pain</a></td>
                                            <td class="view-field view-field-term-node-1-name">Pain Management</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Bruce D. Nicholson, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">17-Jun-10</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.75&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">16-Jun-11</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                bob
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
                                                        src="http://pain.realcme.com/cms/../cmsdata/course_icons/icon-caroline.gif"
                                                        alt="icon-caroline.gif" title="icon-caroline.gif" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/>Caroline
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/1274">Caroline
                                                    Visit 1 - Practical Influenza Prevention in for the Pediatric
                                                    Practice: High-Risk Considerations</a></td>
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
                                            <td colspan="7" align="center" valign="top"><img
                                                        src="/cms/sites/all/modules/moodle/img/listing-separator.gif"
                                                        alt="" class="separator"/></td>
                                        </tr>
                                        <tr class="even">
                                            <td class="view-field view-field-node-data-field-icon-field-icon-fid"
                                                rowspan="1" align="center" valign="top"><img
                                                        src="http://pain.realcme.com/cms/../cmsdata/course_icons/icon-claire.gif"
                                                        alt="icon-claire.gif" title="icon-claire.gif" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/>Claire
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/3263">Claire
                                                    Visit 1 - Elderly Female Presenting with Onset of Resistant
                                                    Hypertension</a></td>
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
                                        <tr class="odd">
                                            <td colspan="7" align="center" valign="top"><img
                                                        src="/cms/sites/all/modules/moodle/img/listing-separator.gif"
                                                        alt="" class="separator"/></td>
                                        </tr>
                                        <tr class="even">
                                            <td class="view-field view-field-node-data-field-icon-field-icon-fid"
                                                rowspan="2" align="center" valign="top"><img
                                                        src="http://pain.realcme.com/cms/../cmsdata/course_icons/icon_dorothy.gif"
                                                        alt="icon_dorothy.gif" title="icon_dorothy.gif" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/>Dorothy
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/47989">Dorothy
                                                    Visit 1: A 78-year-old woman who presents with complaints of memory
                                                    problems</a></td>
                                            <td class="view-field view-field-term-node-1-name">Geriatrics</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Diana Kerwin, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">12-Oct-10</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">11-Oct-11</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                dorothy
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="view-field view-field-node-title"><a href="/cms/node/47998">Dorothy
                                                    Visit 2: A 78-year-old woman with worsening cognitive abilities</a>
                                            </td>
                                            <td class="view-field view-field-term-node-1-name">Geriatrics</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Diana Kerwin, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">13-Oct-10</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">12-Oct-11</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                dorothy
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
                                                        src="http://pain.realcme.com/cms/../cmsdata/course_icons/icon-michota.gif"
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
                                                rowspan="2" align="center" valign="top"><img
                                                        src="http://pain.realcme.com/cms/../cmsdata/course_icons/icon_emma.gif"
                                                        alt="icon_emma.gif" title="icon_emma.gif" width="43" height="43"
                                                        class="imagefield imagefield-field_icon"/><br/>Emma
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/29098">Emma
                                                    Visit 1: Middle-Aged Woman Presenting with a Persistent Cough</a>
                                            </td>
                                            <td class="view-field view-field-term-node-1-name">Pulmonary Disease</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Nicola A. Hanania, MD, MS
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">02-Jul-10</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                1&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">01-Jul-11</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                emma
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td class="view-field view-field-node-title"><a href="/cms/node/29108">Emma
                                                    Visit 2: 54-Year-Old Female Diagnosed with COPD, Returning for
                                                    Follow-up</a></td>
                                            <td class="view-field view-field-term-node-1-name">Pulmonary Disease</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Nicola A. Hanania, MD, MS
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">02-Jul-10</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                1&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">01-Jul-11</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                emma
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
                                                        src="http://pain.realcme.com/cms/../cmsdata/course_icons/fibro_avatar_0.gif"
                                                        alt="fibro_avatar.gif" title="fibro_avatar.gif" width="33"
                                                        height="48" class="imagefield imagefield-field_icon"/><br/>Fibromyalgia:
                                                Diagnosis, Management, & Co-morbidities
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/8109">Fibromyalgia
                                                    1: Properly Diagnosing and Managing Comorbidities</a></td>
                                            <td class="view-field view-field-term-node-1-name">Pain Management</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Michael R. Clark, MD, MPH
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">25-Nov-09</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">24-Nov-10</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                fibromyalgia
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="view-field view-field-node-title"><a href="/cms/node/8114">Fibromyalgia
                                                    2: Tailoring Therapy and Implementing a Multi-Disciplinary Team
                                                    Approach</a></td>
                                            <td class="view-field view-field-term-node-1-name">Pain Management</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Michael R. Clark, MD, MPH
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">25-Nov-09</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">24-Nov-10</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                fibromyalgia
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
                                                        src="http://pain.realcme.com/cms/../cmsdata/course_icons/icon-fran.gif"
                                                        alt="icon-fran.gif" title="icon-fran.gif" width="43" height="43"
                                                        class="imagefield imagefield-field_icon"/><br/>Fran
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/5193">Fran
                                                    Visit 1 - A 56-year-old Woman with a 5-year History of Progressive
                                                    Breathlessness Despite Pharmacologic Therapy</a></td>
                                            <td class="view-field view-field-term-node-1-name">Pulmonary Disease</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                James K. Stoller, MD, MS
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">18-Aug-09</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">31-Aug-10</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                fran
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td class="view-field view-field-node-title"><a href="/cms/node/5195">Fran
                                                    Visit 2 - 56-year-old Woman with Worsening Pulmonary Function</a>
                                            </td>
                                            <td class="view-field view-field-term-node-1-name">Pulmonary Disease</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                James K. Stoller, MD, MS
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">18-Aug-09</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">31-Aug-10</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                fran
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
                                                        src="http://pain.realcme.com/cms/../cmsdata/course_icons/icon-grace.gif"
                                                        alt="icon-grace.gif" title="icon-grace.gif" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/>Grace
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/278">Grace
                                                    Visit 1 - Practical Influenza Prevention for the Pediatric Practice:
                                                    School - Aged Children</a></td>
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
                                            <td colspan="7" align="center" valign="top"><img
                                                        src="/cms/sites/all/modules/moodle/img/listing-separator.gif"
                                                        alt="" class="separator"/></td>
                                        </tr>
                                        <tr class="even">
                                            <td class="view-field view-field-node-data-field-icon-field-icon-fid"
                                                rowspan="2" align="center" valign="top"><img
                                                        src="http://pain.realcme.com/cms/../cmsdata/course_icons/icon_gus.gif"
                                                        alt="icon_gus.gif" title="icon_gus.gif" width="43" height="43"
                                                        class="imagefield imagefield-field_icon"/><br/>Gus
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/59733">Gus
                                                    Visit 1: A Middle-aged Male Experiencing Greater Challenges with His
                                                    Diagnosis of COPD</a></td>
                                            <td class="view-field view-field-term-node-1-name">Pulmonary Disease</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Nicola A. Hanania, MD, MS, FCCP, FRCP(C), FACP
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">16-Nov-10</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                1&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">15-Nov-11</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                gus
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="view-field view-field-node-title"><a href="/cms/node/59750">Gus
                                                    Visit 2: A Middle-aged Male Presenting with Symptoms of Advanced
                                                    COPD</a></td>
                                            <td class="view-field view-field-term-node-1-name">Pulmonary Disease</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Nicola A. Hanania, MD, MS, FCCP, FRCP(C), FACP
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">16-Nov-10</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                1&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">15-Nov-11</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                gus
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
                                                        src="http://pain.realcme.com/cms/../cmsdata/course_icons/icon-harry.gif"
                                                        alt="icon-harry.gif" title="icon-harry.gif" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/>Harry
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/10046">Harry
                                                    Visit 1: 68-year-old male presents to his PCP for a routine annual
                                                    physical examination</a></td>
                                            <td class="view-field view-field-term-node-1-name">Geriatrics</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Charles Cefalu, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">22-Feb-10</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">21-Feb-11</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                harry
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td class="view-field view-field-node-title"><a href="/cms/node/13379">Harry
                                                    Visit 2: 68-year-old male with progressive dementia returns for
                                                    follow-up visit</a></td>
                                            <td class="view-field view-field-term-node-1-name">Geriatrics</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Charles Cefalu, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">22-Feb-10</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">21-Feb-11</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                harry
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
                                                        src="http://pain.realcme.com/cms/../cmsdata/course_icons/icon_helene.gif"
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
                                                rowspan="1" align="center" valign="top"><img
                                                        src="http://pain.realcme.com/cms/../cmsdata/course_icons/icon-howard.gif"
                                                        alt="icon-howard.gif" title="icon-howard.gif" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/>Howard
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/2983">Howard
                                                    Visit 1 - A 45-year-old male with hypercholesterolemia, psoriasis,
                                                    and a family history of cardiac disease</a></td>
                                            <td class="view-field view-field-term-node-1-name">Cardiology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Michael H. Davidson, MD, FACC, FACP
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">28-Mar-09</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">31-Mar-10</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                howard
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
                                                        src="http://pain.realcme.com/cms/../cmsdata/course_icons/icon-ian.gif"
                                                        alt="icon-ian.gif" title="icon-ian.gif" width="43" height="43"
                                                        class="imagefield imagefield-field_icon"/><br/>Ian
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/5333">Ian
                                                    Visit 1 - Chronic Dyspnea in a 42-Year-Old Man</a></td>
                                            <td class="view-field view-field-term-node-1-name">Pulmonary Disease</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                James K. Stoller, MD, MS
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">19-Aug-09</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">31-Aug-10</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                ian
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="view-field view-field-node-title"><a href="/cms/node/5336">Ian
                                                    Visit 2 - Worsening Pulmonary Functioning and Follow-Up</a></td>
                                            <td class="view-field view-field-term-node-1-name">Pulmonary Disease</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                James K. Stoller, MD, MS
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">19-Aug-09</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">31-Aug-10</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                ian
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
                                                        src="http://pain.realcme.com/cms/../cmsdata/course_icons/icon-jane.gif"
                                                        alt="icon-jane.gif" title="icon-jane.gif" width="43" height="43"
                                                        class="imagefield imagefield-field_icon"/><br/>Jane
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/8943">Jane
                                                    Visit 1 - Postmenopausal woman with suspected metastatic breast
                                                    cancer</a></td>
                                            <td class="view-field view-field-term-node-1-name">Hematology-Oncology</td>
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
                                        <tr class="even">
                                            <td class="view-field view-field-node-title"><a href="/cms/node/22878">Jane
                                                    Visit 2: Postmenopausal Woman With Metastatic Breast Cancer and
                                                    Ongoing Treatment</a></td>
                                            <td class="view-field view-field-term-node-1-name">Hematology-Oncology</td>
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
                                        <tr class="odd">
                                            <td colspan="7" align="center" valign="top"><img
                                                        src="/cms/sites/all/modules/moodle/img/listing-separator.gif"
                                                        alt="" class="separator"/></td>
                                        </tr>
                                        <tr class="even">
                                            <td class="view-field view-field-node-data-field-icon-field-icon-fid"
                                                rowspan="2" align="center" valign="top"><img
                                                        src="http://pain.realcme.com/cms/../cmsdata/course_icons/icon_jason.gif"
                                                        alt="icon_jason.gif" title="icon_jason.gif" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/>Jason
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/47134">Jason
                                                    Visit 1: A young man with schizophrenia recently discharged from
                                                    hospital</a></td>
                                            <td class="view-field view-field-term-node-1-name">Psychiatry</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Alex J. Kopelowicz, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">08-Oct-10</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.75&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">08-Oct-11</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                jason
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="view-field view-field-node-title"><a href="/cms/node/53224">Jason
                                                    Visit 2: A young man with schizophrenia with the goal of becoming a
                                                    CPA</a></td>
                                            <td class="view-field view-field-term-node-1-name">Psychiatry</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Alex J. Kopelowicz, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">02-Nov-10</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.75&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">02-Nov-11</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                jason
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
                                                        src="http://pain.realcme.com/cms/../cmsdata/course_icons/16_Male_50-60_W_OB.gif"
                                                        alt="16_Male_50-60_W_OB.gif" title="16_Male_50-60_W_OB.gif"
                                                        width="43" height="43"
                                                        class="imagefield imagefield-field_icon"/><br/>Javier
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/18600">Javier
                                                    Visit 1: A 54-year-old male with diabetes referred for insulin
                                                    initiation</a></td>
                                            <td class="view-field view-field-term-node-1-name">Diabetology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Charles Choe, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">06-May-10</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">05-May-13</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                javier
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td class="view-field view-field-node-title"><a href="/cms/node/69981">Javier
                                                    Visit 2: First follow-up visit after insulin initiation</a></td>
                                            <td class="view-field view-field-term-node-1-name">Diabetology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Charles Choe, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">14-Dec-10</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">13-Dec-13</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                javier
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
                                                        src="http://pain.realcme.com/cms/../cmsdata/course_icons/177_Male_40-50_W_OB.gif"
                                                        alt="177_Male_40-50_W_OB.gif" title="177_Male_40-50_W_OB.gif"
                                                        width="43" height="43"
                                                        class="imagefield imagefield-field_icon"/><br/>Jerome
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/19288">Jerome
                                                    Visit 1: A 52-year-old man with lower back pain of three years’
                                                    duration</a></td>
                                            <td class="view-field view-field-term-node-1-name">Pain Management</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Lesley M. Arnold, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">13-May-10</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">12-May-11</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                jerome
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="view-field view-field-node-title"><a href="/cms/node/50211">Jerome
                                                    Visit 2: A 52-year-old man with lower back pain, returning for
                                                    follow-up</a></td>
                                            <td class="view-field view-field-term-node-1-name">Pain Management</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Lesley M. Arnold, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">20-Oct-10</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">19-Oct-11</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                jerome
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
                                                        src="http://pain.realcme.com/cms/../cmsdata/course_icons/jim.gif"
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
                                                        src="http://pain.realcme.com/cms/../cmsdata/course_icons/icon-kendra.gif"
                                                        alt="icon-kendra.gif" title="icon-kendra.gif" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/>Kendra
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/3649">Kendra
                                                    Visit 1 - 50-Year-Old Woman With Severe Treatment-Resistant
                                                    Depression, Type II Diabetes, and Hypertension</a></td>
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
                                            <td colspan="7" align="center" valign="top"><img
                                                        src="/cms/sites/all/modules/moodle/img/listing-separator.gif"
                                                        alt="" class="separator"/></td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="view-field view-field-node-data-field-icon-field-icon-fid"
                                                rowspan="2" align="center" valign="top"><img
                                                        src="http://pain.realcme.com/cms/../cmsdata/course_icons/icon-laura.gif"
                                                        alt="icon-laura.gif" title="icon-laura.gif" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/>Laura
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/1070">Laura
                                                    Visit 1 - Opioid Management Education</a></td>
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
                                        <tr class="even">
                                            <td class="view-field view-field-node-title"><a href="/cms/node/1074">Laura
                                                    Visit 2 - Opioid Management Education</a></td>
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
                                            <td colspan="7" align="center" valign="top"><img
                                                        src="/cms/sites/all/modules/moodle/img/listing-separator.gif"
                                                        alt="" class="separator"/></td>
                                        </tr>
                                        <tr class="even">
                                            <td class="view-field view-field-node-data-field-icon-field-icon-fid"
                                                rowspan="3" align="center" valign="top"><img
                                                        src="http://pain.realcme.com/cms/../cmsdata/course_icons/icon-louise.gif"
                                                        alt="icon-louise.gif" title="icon-louise.gif" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/>Louise
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/acs">Louise Visit
                                                    1: A 65-year-old African-American woman with chest pain at rest</a>
                                            </td>
                                            <td class="view-field view-field-term-node-1-name">Cardiology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Sanjay Kaul, MD, FACC, FAHA
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">05-Mar-10</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">04-Mar-11</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                louise
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="view-field view-field-node-title"><a href="/cms/node/21662">Louise
                                                    Visit 2: A 65-year-old African-American woman with recent NSTEMI</a>
                                            </td>
                                            <td class="view-field view-field-term-node-1-name">Cardiology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Sanjay Kaul, MD, FACC, FAHA
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">03-Jun-10</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">02-Jun-11</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                louise
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td class="view-field view-field-node-title"><a href="/cms/node/46840">Louise
                                                    Visit 3: A 65-year-old African-American woman with NSTEMI, 3-month
                                                    follow-up</a></td>
                                            <td class="view-field view-field-term-node-1-name">Cardiology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Sanjay Kaul, MD, FACC, FAHA
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">07-Oct-10</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">06-Oct-11</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                louise
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
                                                        src="http://pain.realcme.com/cms/../cmsdata/course_icons/icon-melanoma.gif"
                                                        alt="icon-melanoma.gif" title="icon-melanoma.gif" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/>Management
                                                of Melanoma
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/203">Management
                                                    of Melanoma, Phase 1</a></td>
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
                                        <tr class="odd">
                                            <td class="view-field view-field-node-title"><a href="/cms/node/205">Management
                                                    of Melanoma, Phase 2</a></td>
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
                                            <td colspan="7" align="center" valign="top"><img
                                                        src="/cms/sites/all/modules/moodle/img/listing-separator.gif"
                                                        alt="" class="separator"/></td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="view-field view-field-node-data-field-icon-field-icon-fid"
                                                rowspan="2" align="center" valign="top"><img
                                                        src="http://pain.realcme.com/cms/../cmsdata/course_icons/icon-marie.gif"
                                                        alt="icon-marie.gif" title="icon-marie.gif" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/>Marie
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/329">Marie
                                                    Visit 1 - Diabetic Patient with Fatigue, Headaches and Leg Pain</a>
                                            </td>
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
                                        <tr class="even">
                                            <td class="view-field view-field-node-title"><a href="/cms/node/332">Marie
                                                    Visit 2 - Depression and Diabetes</a></td>
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
                                            <td colspan="7" align="center" valign="top"><img
                                                        src="/cms/sites/all/modules/moodle/img/listing-separator.gif"
                                                        alt="" class="separator"/></td>
                                        </tr>
                                        <tr class="even">
                                            <td class="view-field view-field-node-data-field-icon-field-icon-fid"
                                                rowspan="3" align="center" valign="top"><img
                                                        src="http://pain.realcme.com/cms/../cmsdata/course_icons/icon-marion.gif"
                                                        alt="icon-marion.gif" title="icon-marion.gif" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/>Marion
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/6402">Marion
                                                    Visit 1 - Early and Aggressive LDL-C Management: Perspectives on
                                                    Commonly Asked Questions</a></td>
                                            <td class="view-field view-field-term-node-1-name">Cardiology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                James Underberg, MD, MS, FACPM, FACP, FNLA
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">14-Sep-09</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">13-Sep-11</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                marion
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="view-field view-field-node-title"><a href="/cms/node/7021">Marion
                                                    Visit 2 - Early and Aggressive LDL-C Management: Perspectives on
                                                    Commonly Asked Questions</a></td>
                                            <td class="view-field view-field-term-node-1-name">Cardiology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                James Underberg, MD, MS, FACPM, FACP, FNLA
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">05-Oct-09</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">04-Oct-11</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                marion
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td class="view-field view-field-node-title"><a href="/cms/node/7219">Marion
                                                    Visit 3 - Early and Aggressive LDL-C Management: Perspectives on
                                                    Commonly Asked Questions</a></td>
                                            <td class="view-field view-field-term-node-1-name">Cardiology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                James Underberg, MD, MS, FACPM, FACP, FNLA
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">13-Oct-09</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">12-Oct-11</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                marion
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
                                                        src="http://pain.realcme.com/cms/../cmsdata/course_icons/icon-mark_0.gif"
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
                                        <tr class="odd">
                                            <td colspan="7" align="center" valign="top"><img
                                                        src="/cms/sites/all/modules/moodle/img/listing-separator.gif"
                                                        alt="" class="separator"/></td>
                                        </tr>
                                        <tr class="even">
                                            <td class="view-field view-field-node-data-field-icon-field-icon-fid"
                                                rowspan="2" align="center" valign="top"><img
                                                        src="http://pain.realcme.com/cms/../cmsdata/course_icons/icon-maryanne.gif"
                                                        alt="icon-maryanne.gif" title="icon-maryanne.gif" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/>MaryAnne
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/13383">MaryAnne
                                                    Visit 1: A middle-aged woman going through a troublesome divorce</a>
                                            </td>
                                            <td class="view-field view-field-term-node-1-name">Psychiatry</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Lesley M. Arnold, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">22-Feb-10</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                1&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">21-Feb-11</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                maryanne
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="view-field view-field-node-title"><a href="/cms/node/13389">MaryAnne
                                                    Visit 2: A middle-aged woman with persistent pain and depression</a>
                                            </td>
                                            <td class="view-field view-field-term-node-1-name">Psychiatry</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Lesley M. Arnold, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">22-Feb-10</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                1&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">21-Feb-11</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                maryanne
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
                                                        src="http://pain.realcme.com/cms/../cmsdata/course_icons/iStock_000006926155_0.jpg"
                                                        alt="iStock_000006926155_0.jpg"
                                                        title="iStock_000006926155_0.jpg" width="43" height="32"
                                                        class="imagefield imagefield-field_icon"/><br/>Mechanism of
                                                Action and Biological Activity of Emerging Therapies in Non-small Cell
                                                Lung Cancer
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/19845">Mechanism
                                                    of Action and Biological Activity of Emerging Therapies in Non-small
                                                    Cell Lung Cancer: The Road Ahead</a></td>
                                            <td class="view-field view-field-term-node-1-name">Hematology-Oncology</td>
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
                                        <tr class="even">
                                            <td colspan="7" align="center" valign="top"><img
                                                        src="/cms/sites/all/modules/moodle/img/listing-separator.gif"
                                                        alt="" class="separator"/></td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="view-field view-field-node-data-field-icon-field-icon-fid"
                                                rowspan="1" align="center" valign="top"><img
                                                        src="http://pain.realcme.com/cms/../cmsdata/course_icons/3280kidney.jpg"
                                                        alt="3280kidney.jpg" title="3280kidney.jpg" width="39"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/>Targeted
                                                Therapies for Advanced Renal Cell Cancer
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/19088">New
                                                    Developments with Targeted Therapies for Patients with Advanced
                                                    Renal Cell Cancer: Targeted Therapy for Clear-Cell RCC</a></td>
                                            <td class="view-field view-field-term-node-1-name">Hematology-Oncology</td>
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
                                                rowspan="2" align="center" valign="top"><img
                                                        src="http://pain.realcme.com/cms/../cmsdata/course_icons/icon-pamela.gif"
                                                        alt="icon-pamela.gif" title="icon-pamela.gif" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/>Pamela
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/1499">Pamela
                                                    Visit 1 - Six month history of aching and soreness</a></td>
                                            <td class="view-field view-field-term-node-1-name">Pain Management</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Paul J. Christo, MD, MBA
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">01-Dec-08</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                1&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">30-Nov-09</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                pamela
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td class="view-field view-field-node-title"><a href="/cms/node/1502">Pamela
                                                    Visit 2 - Why do I feel worse?</a></td>
                                            <td class="view-field view-field-term-node-1-name">Pain Management</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Paul J. Christo, MD, MBA
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">01-Dec-08</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                1&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">30-Nov-09</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                pamela
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
                                                        src="http://pain.realcme.com/cms/../cmsdata/course_icons/icon-peter.gif"
                                                        alt="icon-peter.gif" title="icon-peter.gif" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/>Peter
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/2573">Peter
                                                    Visit 1 - A 71-Year-Old Recently Diagnosed with Prostate Cancer</a>
                                            </td>
                                            <td class="view-field view-field-term-node-1-name">Hematology-Oncology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Howard M. Sandler, MD, MS
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">16-Mar-09</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">31-Mar-10</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                peter
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="view-field view-field-node-title"><a href="/cms/node/2575">Peter
                                                    Visit 2 - A 71-Year-Old Recently Diagnosed with Prostate Cancer</a>
                                            </td>
                                            <td class="view-field view-field-term-node-1-name">Hematology-Oncology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Howard M. Sandler, MD, MS
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">16-Mar-09</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">31-Mar-10</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                peter
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
                                                        src="http://pain.realcme.com/cms/../cmsdata/course_icons/icon-flu.gif"
                                                        alt="icon-flu.gif" title="icon-flu.gif" width="43" height="43"
                                                        class="imagefield imagefield-field_icon"/><br/>Practical
                                                Influenza Prevention for the Pediatric Practice
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/224">Practical
                                                    Influenza Prevention for the Pediatric Practice: Are You Ready For
                                                    Flu Season? Phase 1</a></td>
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
                                            <td colspan="7" align="center" valign="top"><img
                                                        src="/cms/sites/all/modules/moodle/img/listing-separator.gif"
                                                        alt="" class="separator"/></td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="view-field view-field-node-data-field-icon-field-icon-fid"
                                                rowspan="1" align="center" valign="top"><img
                                                        src="http://pain.realcme.com/cms/../cmsdata/course_icons/icon-rachel.gif"
                                                        alt="icon-rachel.gif" title="icon-rachel.gif" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/>Rachel
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/199">Rachel
                                                    Visit 1 - &quot;Irregular Periods and Increased Body Hair&quot;</a>
                                            </td>
                                            <td class="view-field view-field-term-node-1-name">Gynecology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Adam N Repole, MD, FACOG
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">22-Jun-08</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">22-Jun-09</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                rachel
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
                                                        src="http://pain.realcme.com/cms/../cmsdata/course_icons/icon-robert.gif"
                                                        alt="icon-robert.gif" title="icon-robert.gif" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/>Robert
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/72">Robert
                                                    Visit 1 - Cardiovascular residual risk assessment and disease
                                                    prevention</a></td>
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
                                        <tr class="even">
                                            <td class="view-field view-field-node-title"><a href="/cms/robert-visit-2">Robert
                                                    Visit 2 - Residual risk assessment and treatment follow up</a></td>
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
                                            <td class="view-field view-field-node-title"><a href="/cms/node/5207">Robert
                                                    Visit 3: Second follow-up visit for residual vascular risk
                                                    reduction</a></td>
                                            <td class="view-field view-field-term-node-1-name">Cardiology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Michel P. Hermans, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">05-Jan-10</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                1&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">04-Jan-11</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                robert
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
                                                        src="http://pain.realcme.com/cms/../cmsdata/course_icons/icon-rosita.gif"
                                                        alt="icon-rosita.gif" title="icon-rosita.gif" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/>Rosita
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/msihome">Rosita
                                                    Visit 1 - Metabolic Syndrome</a></td>
                                            <td class="view-field view-field-term-node-1-name">Cardiology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Frank M. Sacks, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">12-Sep-08</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">30-Sep-09</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                rosita
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td class="view-field view-field-node-title"><a href="/cms/node/2102">Rosita
                                                    Visit 2 - Metabolic Syndrome</a></td>
                                            <td class="view-field view-field-term-node-1-name">Cardiology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Frank M. Sacks, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">13-Feb-09</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">28-Feb-10</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                rosita
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
                                                        src="http://pain.realcme.com/cms/../cmsdata/course_icons/icon-sarah.gif"
                                                        alt="icon-sarah.gif" title="icon-sarah.gif" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/>Sarah
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/1982">Sarah
                                                    Visit 1 - Treating fibromyalgia with concomitant conditions </a>
                                            </td>
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
                                        <tr class="odd">
                                            <td class="view-field view-field-node-title"><a href="/cms/node/1985">Sarah
                                                    Visit 2 - Have we been able to manage the FMS and reduce risks?</a>
                                            </td>
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
                                            <td colspan="7" align="center" valign="top"><img
                                                        src="/cms/sites/all/modules/moodle/img/listing-separator.gif"
                                                        alt="" class="separator"/></td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="view-field view-field-node-data-field-icon-field-icon-fid"
                                                rowspan="2" align="center" valign="top"><img
                                                        src="http://pain.realcme.com/cms/../cmsdata/course_icons/stacey-image_0.gif"
                                                        alt="stacey-image.gif" title="stacey-image.gif" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/>Stacey
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/14887">Stacey
                                                    Visit 1: A 44-year-old female presenting with a three-year history
                                                    of widespread pain</a></td>
                                            <td class="view-field view-field-term-node-1-name">Pain Management</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Lesley M. Arnold, MD 
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">26-Mar-10</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">25-Mar-11</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                stacey
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td class="view-field view-field-node-title"><a href="/cms/node/16037">Stacey
                                                    Visit 2: A 44-year-old female who is sleeping better, but still
                                                    experiencing widespread pain</a></td>
                                            <td class="view-field view-field-term-node-1-name">Pain Management</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Leslie M. Arnold, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">08-Apr-10</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">07-Apr-11</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                stacey
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
                                                        src="http://pain.realcme.com/cms/../cmsdata/course_icons/stanley.gif"
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
                                        <tr class="odd">
                                            <td colspan="7" align="center" valign="top"><img
                                                        src="/cms/sites/all/modules/moodle/img/listing-separator.gif"
                                                        alt="" class="separator"/></td>
                                        </tr>
                                        <tr class="even">
                                            <td class="view-field view-field-node-data-field-icon-field-icon-fid"
                                                rowspan="1" align="center" valign="top"><img
                                                        src="http://pain.realcme.com/cms/../cmsdata/course_icons/icon_536180.png"
                                                        alt="icon_536180.png" title="icon_536180.png" width="43"
                                                        height="42" class="imagefield imagefield-field_icon"/><br/></td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/706754">Study
                                                    Session stress test</a></td>
                                            <td class="view-field view-field-term-node-1-name">Cardiology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value"></td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">25-Aug-16</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                1&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">30-Dec-16</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                536180
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td colspan="7" align="center" valign="top"><img
                                                        src="/cms/sites/all/modules/moodle/img/listing-separator.gif"
                                                        alt="" class="separator"/></td>
                                        </tr>
                                        <tr class="even">
                                            <td class="view-field view-field-node-data-field-icon-field-icon-fid"
                                                rowspan="3" align="center" valign="top"><img
                                                        src="http://pain.realcme.com/cms/../cmsdata/course_icons/icon-sue.gif"
                                                        alt="icon-sue.gif" title="icon-sue.gif" width="43" height="43"
                                                        class="imagefield imagefield-field_icon"/><br/>Sue
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/8321">Sue
                                                    Visit 1 - A 34-Year-Old Woman With Longstanding Psoriasis and Onset
                                                    of Stiffness and Foot Pain</a></td>
                                            <td class="view-field view-field-term-node-1-name">Dermatology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Abrar Qureshi, MD, MPH
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">03-Dec-09</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.75&nbsp;AMA<br/>0.75&nbsp;AANP<br/>0.75&nbsp;AAPA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">03-Dec-10</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                sue
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="view-field view-field-node-title"><a href="/cms/node/8325">Sue
                                                    Visit 2 - A 34-Year-Old Woman With Newly Diagnosed Psoriatic
                                                    Arthritis</a></td>
                                            <td class="view-field view-field-term-node-1-name">Rheumatology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                M. Elaine Husni, MD, MPH
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">03-Dec-09</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/>0.5&nbsp;AANP<br/>0.5&nbsp;AAPA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">03-Dec-10</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                sue
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td class="view-field view-field-node-title"><a href="/cms/node/8329">Sue
                                                    Visit 3 - A 34-Year-Old Woman With Newly Diagnosed Psoriatic
                                                    Arthritis Starting Therapy</a></td>
                                            <td class="view-field view-field-term-node-1-name">Dermatology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Abrar Qureshi, MD, MPH
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">03-Dec-09</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/>0.5&nbsp;AANP<br/>0.5&nbsp;AAPA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">03-Dec-10</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                sue
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
                                                        src="http://pain.realcme.com/cms/../cmsdata/course_icons/icon-tim.gif"
                                                        alt="icon-tim.gif" title="icon-tim.gif" width="43" height="43"
                                                        class="imagefield imagefield-field_icon"/><br/>Tim
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/2569">Tim
                                                    Visit 1 - a 67-year-old with prostate cancer diagnosed 7 years
                                                    ago</a></td>
                                            <td class="view-field view-field-term-node-1-name">Hematology-Oncology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Robert Dreicer, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">28-Feb-09</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">28-Feb-10</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                tim
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="view-field view-field-node-title"><a href="/cms/node/2571">Tim
                                                    Visit 2 - a 67-year-old with prostate cancer diagnosed 7 years
                                                    ago</a></td>
                                            <td class="view-field view-field-term-node-1-name">Hematology-Oncology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Robert Dreicer, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">28-Feb-09</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">28-Feb-10</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                tim
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
                                                        src="http://pain.realcme.com/cms/../cmsdata/course_icons/icon-tracey.gif"
                                                        alt="icon-tracey.gif" title="icon-tracey.gif" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/>Tracey
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/3804">Tracey
                                                    Visit 1 - A Middle-Aged Female Presenting with Depression</a></td>
                                            <td class="view-field view-field-term-node-1-name">Psychiatry</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Glenn J. Treisman, MD, PhD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">29-Jun-09</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">30-Jun-10</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                tracey
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td class="view-field view-field-node-title"><a href="/cms/node/4096">Tracey
                                                    Visit 2 - A Middle Age Female Presenting with Difficulty
                                                    Sleeping</a></td>
                                            <td class="view-field view-field-term-node-1-name">Psychiatry</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Glenn J. Treisman, MD, PhD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">29-Jun-09</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">30-Jun-10</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                tracey
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
                                                        src="http://pain.realcme.com/cms/../cmsdata/course_icons/lungs.png"
                                                        alt="lungs.png" title="lungs.png" width="43" height="43"
                                                        class="imagefield imagefield-field_icon"/><br/>Traversing the
                                                Clinical Challenges and Complexities of Asthma Assessment and Treatment
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/15537">Traversing
                                                    the Clinical Challenges and Complexities of Asthma Assessment and
                                                    Treatment: Improving Control of Asthma Symptoms</a></td>
                                            <td class="view-field view-field-term-node-1-name">Pulmonary Disease</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Zab Mosenifar, MD, FCCP, FACP
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">01-Apr-10</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">31-Mar-11</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                traversingtheclinicalchallengesandcomplexitiesofasthmaassessmentandtreatment
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
                                        src="/cms/sites/all/themes/zen/paintheme/img/logo-companion.gif"
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
<div id="footermenu">
    <div id="footer-inner">
        <div id="footer-message">
            <center>
                <small> Copyright &copy; RealCME, LLC 2008-2018. All Rights Reserved. <a href="/cms/privacypolicy">Privacy
                        Policy</a>&nbsp; <a href="/cms/termsofservice">Terms of Service</a>&nbsp; <a
                            href="/cms/support-center">Support</a></small>
                <br/><br/> <img src="/cms/sites/all/themes/zen/paintheme/img/footerlogo.png" alt="" class="center"/>
            </center>
        </div>
    </div>
</div> <!-- /#footer-inner, /#footer -->
<!-- <div id="footermenu"> <div id="footwrap"> <span class="small white copyright">&copy; 2010 Pain.com. All rights reserved. </span> </div> </div> -->
</body>
</html>
