<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-us" xml:lang="en-us">
<head><title>ProvaEducation</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" href="http://i.realcme.com/cms/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="/cms/sites/all/themes/zen/provaeducationtheme/print.css" type="text/css"
          media="print"/>
    <style type="text/css" media="all">@import "/cms/../cmsdata/css/cb98e0b62aeca67f621444a7349828b1.css";</style>
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
<div id="header">
    <div id="header-inner" class="clear-block"> <!-- Masthead Start -->
        <div id="masthead"><a title="Prova Education" href="http://provaeducation.com/Index.asp" onfocus="blur();"><img
                        src="/cms/sites/all/themes/zen/provaeducationtheme/img/Prova_Logo.gif" id="Top" width="198"
                        height="100" alt="" usemap="Prova Education"/></a>
            <div id="primarynav">
                <ul>
                    <li style="border-left: solid 0px #950030;"><a href="http://provaeducation.com/Index.asp"
                                                                   title="Home" onfocus="blur();">Home</a></li>
                    <li><a href="http://provaeducation.com/CME_Programs.asp" title="CME Activities" onfocus="blur();">CME
                            Activities</a></li>
                    <li><a href="http://provaeducation.com/Faculty.asp" title="Our Faculty" onfocus="blur();">Our
                            Faculty</a></li>
                    <li><a href="http://provaeducation.com/CME_Events_ListView.asp?EventType=Online" title="Online CME"
                           onfocus="blur();">Online CME</a></li>
                    <li><a href="http://provaeducation.com/About_Us.asp" title="About Us" onfocus="blur();">About Us</a>
                    </li>
                    <li><a href="http://provaeducation.com/Contact_Us.asp" title="Contact Us" onfocus="blur();">Contact
                            Us</a></li>
                </ul>
                <span class="safarifix">.</span>
                <p class="safarifix"></p></div>
        </div> <!-- Masthead End -->
        <!-- <div id="logo-title"> <div id="logo"><a href="/cms/../" title="Home" rel="home"><img src="/cms/sites/all/themes/zen/provaeducationtheme/img/logo.gif" alt="Home" id="logo-image" /></a></div> </div> -->
        <!-- /#logo-title --> </div>
</div> <!-- /#header-inner, /#header -->
<div id="page">
    <div id="page-inner">
        <div id="main">
            <div id="main-inner" class="clear-block with-navbar">
                <div id="content">
                    <div id="content-inner">
                        <div id="content-area">
                            <div class='view view-all-activities'>
                                <form action="http://provaeducation.realcme.com/cms/allactivities"
                                      accept-charset="UTF-8" method="get" id="views-filters">
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
                                                        src="http://provaeducation.realcme.com/cms/../cmsdata/course_icons/icon_bill.gif"
                                                        alt="icon_bill.gif" title="icon_bill.gif" width="43" height="43"
                                                        class="imagefield imagefield-field_icon"/><br/>Bill
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/118845">Bill
                                                    Visit 1: A 70-year-old patient presenting with metastatic renal cell
                                                    carcinoma</a></td>
                                            <td class="view-field view-field-term-node-1-name">Hematology-Oncology</td>
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
                                                rowspan="3" align="center" valign="top"><img
                                                        src="http://provaeducation.realcme.com/cms/../cmsdata/course_icons/icon_dawn.gif"
                                                        alt="icon_dawn.gif" title="icon_dawn.gif" width="43" height="43"
                                                        class="imagefield imagefield-field_icon"/><br/>Dawn
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/37785">Dawn
                                                    Visit 1: A 38-Year-Old Female Presenting with Chronic Pain</a></td>
                                            <td class="view-field view-field-term-node-1-name">Pain Management</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Bill McCarberg, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">25-Aug-10</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">24-Aug-11</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                dawn
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td class="view-field view-field-node-title"><a href="/cms/node/51849">Dawn
                                                    Visit 2: A 38-Year-Old Female Presenting with Chronic Pain,
                                                    Returning for Follow-Up</a></td>
                                            <td class="view-field view-field-term-node-1-name">Pain Management</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Bill McCarberg, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">27-Oct-10</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">26-Oct-11</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                dawn
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="view-field view-field-node-title"><a href="/cms/node/67949">Dawn
                                                    Visit 3: A 38-Year-Old Female Presenting with Chronic Pain,
                                                    Returning for Second Follow-Up</a></td>
                                            <td class="view-field view-field-term-node-1-name">Pain Management</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Bill McCarberg, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">07-Dec-10</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.25&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">06-Dec-11</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                dawn
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
                                                        src="http://provaeducation.realcme.com/cms/../cmsdata/course_icons/icon_ethan_0.gif"
                                                        alt="icon_ethan.gif" title="icon_ethan.gif" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/>Ethan
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/178984">Ethan
                                                    Visit 1: 9-Month-Old Hemophilia Patient</a></td>
                                            <td class="view-field view-field-term-node-1-name">Hematology-Oncology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                David Becton, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">07-Nov-11</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">07-Nov-12</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                ethan
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td class="view-field view-field-node-title"><a href="/cms/node/194796">Ethan
                                                    Visits 2 - 3: 9-Month-Old Hemophilia Patient - Follow-Up</a></td>
                                            <td class="view-field view-field-term-node-1-name">Hematology-Oncology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                David Becton, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">19-Dec-11</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.25&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">19-Dec-12</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                ethan
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="view-field view-field-node-title"><a href="/cms/node/195039">Ethan
                                                    Visits 4 - 5: 9-Month-Old Hemophilia Patient - Follow-Up #2</a></td>
                                            <td class="view-field view-field-term-node-1-name">Hematology-Oncology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                David Becton, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">20-Dec-11</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.25&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">20-Dec-12</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                ethan
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
                                                        src="http://provaeducation.realcme.com/cms/../cmsdata/course_icons/icon_fred_0.gif"
                                                        alt="icon_fred.gif" title="icon_fred.gif" width="43" height="43"
                                                        class="imagefield imagefield-field_icon"/><br/>Fred
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/118634">Fred
                                                    Visit 1: A 67-year-old patient presenting with a renal mass</a></td>
                                            <td class="view-field view-field-term-node-1-name">Hematology-Oncology</td>
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
                                                        src="http://provaeducation.realcme.com/cms/../cmsdata/course_icons/3D6684.jpg"
                                                        alt="3D6684.jpg" title="3D6684.jpg" width="28" height="43"
                                                        class="imagefield imagefield-field_icon"/><br/>Genetic Profiling
                                                in Early-Stage Breast Cancer
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/92300">Genetic
                                                    Profiling in Early-Stage Breast Cancer 1: Neo-Adjuvant Chemotherapy
                                                    for Operable Breast Cancer</a></td>
                                            <td class="view-field view-field-term-node-1-name">Hematology-Oncology</td>
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
                                                        src="http://provaeducation.realcme.com/cms/../cmsdata/course_icons/icon_jd.gif"
                                                        alt="icon_jd.gif" title="icon_jd.gif" width="43" height="43"
                                                        class="imagefield imagefield-field_icon"/><br/>J.D.
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/106784">J.D.
                                                    Visit 1: A 36-Month-Old Boy Presenting for Assessment of Respiratory
                                                    Distress</a></td>
                                            <td class="view-field view-field-term-node-1-name">Infectious Diseases</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Stephen Pelton, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">15-Apr-11</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">14-Apr-12</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                jd
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
                                                        src="http://provaeducation.realcme.com/cms/../cmsdata/course_icons/icon_karen.gif"
                                                        alt="icon_karen.gif" title="icon_karen.gif" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/>Karen
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/70076">Karen
                                                    Visit 1: A 49-Year-Old Female with Early Stage Breast Cancer</a>
                                            </td>
                                            <td class="view-field view-field-term-node-1-name">Hematology-Oncology</td>
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
                                            <td class="view-field view-field-term-node-1-name">Hematology-Oncology</td>
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
                                                        src="http://provaeducation.realcme.com/cms/../cmsdata/course_icons/icon_marisol_0.gif"
                                                        alt="icon_marisol.gif" title="icon_marisol.gif" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/>Marisol
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/218511">Marisol
                                                    Visit 1: Disparities in Care of Type 2 Diabetes in Hispanics</a>
                                            </td>
                                            <td class="view-field view-field-term-node-1-name">Diabetology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Ruchi Mathur, MD, FRCPC
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">16-Feb-12</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">15-Feb-13</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                marisol
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
                                                        src="http://provaeducation.realcme.com/cms/../cmsdata/course_icons/icon_monica.gif"
                                                        alt="icon_monica.gif" title="icon_monica.gif" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/>Monica
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/126762">Monica
                                                    Visit 1: A 36-Year-Old Female with Early Stage Breast Cancer</a>
                                            </td>
                                            <td class="view-field view-field-term-node-1-name">Hematology-Oncology</td>
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
                                            <td class="view-field view-field-term-node-1-name">Hematology-Oncology</td>
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
                                                        src="http://provaeducation.realcme.com/cms/../cmsdata/course_icons/2012icon.jpg"
                                                        alt="2012icon.jpg" title="2012icon.jpg" width="43" height="43"
                                                        class="imagefield imagefield-field_icon"/><br/>Prevention of
                                                Pneumococcal Disease in Children
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/195590">Prevention
                                                    of Pneumococcal Disease in Children 1: The Next Generation of
                                                    PCV</a></td>
                                            <td class="view-field view-field-term-node-1-name">Infectious Diseases</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Stephen Pelton, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">22-Dec-11</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">21-Dec-12</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                preventionofpneumococcaldiseaseinchildren
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
                                                        src="http://provaeducation.realcme.com/cms/../cmsdata/course_icons/icon_sophia_0.gif"
                                                        alt="icon_sophia.gif" title="icon_sophia.gif" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/>Sophia
                                            </td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/203437">Sophia
                                                    Visit 1: A 6-year-old Girl with Marked Short Stature</a></td>
                                            <td class="view-field view-field-term-node-1-name">Endocrinology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Craig A. Alter, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">05-Jan-12</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">04-Jan-13</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                sophia
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
                                        src="/cms/sites/all/themes/zen/provaeducationtheme/img/logo-companion.gif"
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
                        <br/><br/> <img src="/cms/sites/all/themes/zen/provaeducationtheme/img/footerlogo.png" alt=""
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
</div> <!-- /#page-inner, /#page --> <!-- Footer Start -->
<div id="omnia-footer"><p><span id="footercopy"><strong> &copy; 2018 Prova Education</strong> | 877.776.8211 | 500 Office Center Drive | Suite 300 | Fort Washington, PA 19034</span>
        <span id="footernav"><a title="terms" href="http://provaeducation.com/Terms.asp"
                                onfocus="blur();">terms</a> | <a title="contact"
                                                                 href="http://provaeducation.com/Contact_Us.asp"
                                                                 onfocus="blur();">contact</a> </span></p></div>
<!-- Footer End --> </body>
</html>
