<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-us" xml:lang="en-us">
<head><title>Rockpointe</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" href="http://i.realcme.com/cms/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="/cms/sites/all/themes/zen/rockpointetheme/print.css" type="text/css" media="print"/>
    <style type="text/css" media="all">@import "/cms/../cmsdata/css/6be871022c1ea6333e327d6c6d563b83.css";</style>
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
<body class="MasterBody front not-logged-in one-sidebar sidebar-right">
<div class="Master">
    <div class="MasterHeader">
        <div class="MasterLogin_container">
            <!-- <iframe id="iframeUserStatus" frameborder="0" src="http://www.rockpointe.com/UserStatus/UserStatus.aspx" style="width:100%;background-color:transparent;" allowtransparency="true"></iframe> --> </div>
        <a style="width:300px;height:100%;display:inline-block;" href="http://www.rockpointe.com"></a></div>
    <div class="MasterContent">
        <div id="page">
            <div id="page-inner"><a name="top" id="navigation-top"></a>
                <div id="skip-to-nav"><a href="#navigation">Skip to Navigation</a></div>
                <div id="header">
                    <div id="header-inner" class="clear-block">
                        <!-- <div id="logo-title"> <div id="logo"><a href="/cms/../" title="Home" rel="home"><img src="/cms/sites/all/themes/zen/rockpointetheme/img/logo.gif" alt="Home" id="logo-image" /></a></div> </div> -->
                        <!-- /#logo-title --> </div>
                </div> <!-- /#header-inner, /#header -->
                <div id="main">
                    <div id="main-inner" class="clear-block with-navbar">
                        <div id="content">
                            <div id="content-inner">
                                <div id="content-area">
                                    <div class='view view-all-activities'>
                                        <form action="http://rockpointe.realcme.com/cms/allactivities"
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
                                                                                          name="filter0"
                                                                                          id="edit-filter0" size="10"
                                                                                          value="" class="form-text"/>
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
                                                    <th sort="asc" class="view-cell-header view-field-node-title">
                                                        Activity
                                                    </th>
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
                                                                src="http://rockpointe.realcme.com/cms/../cmsdata/course_icons/icon_anthonyt_0.gif"
                                                                alt="icon_anthonyt.gif" title="icon_anthonyt.gif"
                                                                width="43" height="43"
                                                                class="imagefield imagefield-field_icon"/><br/>Anthony
                                                        T.
                                                    </td>
                                                    <td class="view-field view-field-node-title"><a
                                                                href="/cms/node/173886">Anthony T. Visit 1: 58-year old
                                                            male RA patient with poor response to treatment</a></td>
                                                    <td class="view-field view-field-term-node-1-name">Rheumatology</td>
                                                    <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                        Philip J. Mease, MD
                                                    </td>
                                                    <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                        <span class="date-display-single">27-Oct-11</span></td>
                                                    <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                        1&nbsp;AMA<br/></td>
                                                    <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                        <span class="date-display-single"><span
                                                                    style="color:#aaa; font-style:italic;">27-Oct-12</span></span>
                                                    </td>
                                                    <td class="view-field view-field-node-data-field-series-field-series-value">
                                                        anthonyt
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
                                                                src="http://rockpointe.realcme.com/cms/../cmsdata/course_icons/icon_418250_0.jpg"
                                                                alt="icon_418250.jpg" title="icon_418250.jpg" width="43"
                                                                height="43"
                                                                class="imagefield imagefield-field_icon"/><br/></td>
                                                    <td class="view-field view-field-node-title"><a
                                                                href="/cms/node/568072">Breaking Down the Barriers to
                                                            Optimal Diabetes Outcomes: Considerations for GLP-1
                                                            Agonists</a></td>
                                                    <td class="view-field view-field-term-node-1-name">Diabetology</td>
                                                    <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                        Ellen Hirschman Miller, MD
                                                    </td>
                                                    <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                        <span class="date-display-single">09-Dec-14</span></td>
                                                    <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                        1&nbsp;AMA<br/></td>
                                                    <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                        <span class="date-display-single"><span
                                                                    style="color:#aaa; font-style:italic;">09-Dec-15</span></span>
                                                    </td>
                                                    <td class="view-field view-field-node-data-field-series-field-series-value">
                                                        418250
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
                                                                src="http://rockpointe.realcme.com/cms/../cmsdata/course_icons/icon_dorothys_0.gif"
                                                                alt="icon_dorothys.gif" title="icon_dorothys.gif"
                                                                width="43" height="43"
                                                                class="imagefield imagefield-field_icon"/><br/>Dorothy
                                                        S.
                                                    </td>
                                                    <td class="view-field view-field-node-title"><a
                                                                href="/cms/node/174201">Dorothy S. Visit 1: 37-year-old
                                                            female presenting with symptoms of rheumatoid arthritis</a>
                                                    </td>
                                                    <td class="view-field view-field-term-node-1-name">Rheumatology</td>
                                                    <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                        Philip J. Mease, MD
                                                    </td>
                                                    <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                        <span class="date-display-single">28-Oct-11</span></td>
                                                    <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                        1&nbsp;AMA<br/></td>
                                                    <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                        <span class="date-display-single"><span
                                                                    style="color:#aaa; font-style:italic;">28-Oct-12</span></span>
                                                    </td>
                                                    <td class="view-field view-field-node-data-field-series-field-series-value">
                                                        dorothys
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
                                                                src="http://rockpointe.realcme.com/cms/../cmsdata/course_icons/icon_ethel_0.gif"
                                                                alt="icon_ethel.gif" title="icon_ethel.gif" width="43"
                                                                height="43"
                                                                class="imagefield imagefield-field_icon"/><br/>Ethel
                                                    </td>
                                                    <td class="view-field view-field-node-title"><a
                                                                href="/cms/node/282738">Ethel Visit 1: An 80-year-old
                                                            woman with recent history of falls</a></td>
                                                    <td class="view-field view-field-term-node-1-name">Cardiology</td>
                                                    <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                        Mitchell Rosner, MD, FACP
                                                    </td>
                                                    <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                        <span class="date-display-single">10-Oct-12</span></td>
                                                    <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                        1&nbsp;AMA<br/></td>
                                                    <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                        <span class="date-display-single"><span
                                                                    style="color:#aaa; font-style:italic;">09-Oct-13</span></span>
                                                    </td>
                                                    <td class="view-field view-field-node-data-field-series-field-series-value">
                                                        ethel
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
                                                                src="http://rockpointe.realcme.com/cms/../cmsdata/course_icons/icon_fernanda_0.gif"
                                                                alt="icon_fernanda.gif" title="icon_fernanda.gif"
                                                                width="43" height="43"
                                                                class="imagefield imagefield-field_icon"/><br/>Fernanda
                                                    </td>
                                                    <td class="view-field view-field-node-title"><a
                                                                href="/cms/node/465677">Fernanda Visit 1: A 53-year-old
                                                            Hispanic woman with cardiometabolic risk factors</a></td>
                                                    <td class="view-field view-field-term-node-1-name">Endocrinology
                                                    </td>
                                                    <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                        Ellen Hirschman Miller, MD
                                                    </td>
                                                    <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                        <span class="date-display-single">18-Dec-13</span></td>
                                                    <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                        0.75&nbsp;AMA<br/></td>
                                                    <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                        <span class="date-display-single"><span
                                                                    style="color:#aaa; font-style:italic;">17-Dec-14</span></span>
                                                    </td>
                                                    <td class="view-field view-field-node-data-field-series-field-series-value">
                                                        fernanda
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
                                                                src="http://rockpointe.realcme.com/cms/../cmsdata/course_icons/icon__38.png"
                                                                alt="icon_.png" title="icon_.png" width="43" height="43"
                                                                class="imagefield imagefield-field_icon"/><br/></td>
                                                    <td class="view-field view-field-node-title"><a
                                                                href="/cms/node/398320">Hyponatremia Treatment Options:
                                                            Management of High-Risk Patients</a></td>
                                                    <td class="view-field view-field-term-node-1-name">Nephrology</td>
                                                    <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                        Mitchell H. Rosner, MD, FACP
                                                    </td>
                                                    <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                        <span class="date-display-single">30-Apr-13</span></td>
                                                    <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                        1&nbsp;AMA<br/></td>
                                                    <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                        <span class="date-display-single"><span
                                                                    style="color:#aaa; font-style:italic;">29-Apr-14</span></span>
                                                    </td>
                                                    <td class="view-field view-field-node-data-field-series-field-series-value">
                                                        287186
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
                                                                src="http://rockpointe.realcme.com/cms/../cmsdata/course_icons/icon__17.gif"
                                                                alt="icon_.gif" title="icon_.gif" width="43" height="43"
                                                                class="imagefield imagefield-field_icon"/><br/></td>
                                                    <td class="view-field view-field-node-title"><a
                                                                href="/cms/node/423750">Improving Earlier Initiation and
                                                            Overall Management of DMD Therapy in MS</a></td>
                                                    <td class="view-field view-field-term-node-1-name">Neurology</td>
                                                    <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                        Suhayl Dhib-Jalbut, MD
                                                    </td>
                                                    <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                        <span class="date-display-single">23-Jul-13</span></td>
                                                    <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                        1&nbsp;AMA<br/></td>
                                                    <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                        <span class="date-display-single"><span
                                                                    style="color:#aaa; font-style:italic;">22-Jul-14</span></span>
                                                    </td>
                                                    <td class="view-field view-field-node-data-field-series-field-series-value">
                                                        290349
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
                                                                src="http://rockpointe.realcme.com/cms/../cmsdata/course_icons/icon_managinghyponatremia_0.jpg"
                                                                alt="icon_managinghyponatremia.jpg"
                                                                title="icon_managinghyponatremia.jpg" width="43"
                                                                height="43"
                                                                class="imagefield imagefield-field_icon"/><br/>Managing
                                                        Hyponatremia
                                                    </td>
                                                    <td class="view-field view-field-node-title"><a
                                                                href="/cms/node/282746">Managing Hyponatremia: Elderly
                                                            Patients with Heart Failure</a></td>
                                                    <td class="view-field view-field-term-node-1-name">Cardiology</td>
                                                    <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                        Mitchell H. Rosner, MD, FACP
                                                    </td>
                                                    <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                        <span class="date-display-single">10-Oct-12</span></td>
                                                    <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                        1&nbsp;AMA<br/></td>
                                                    <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                        <span class="date-display-single"><span
                                                                    style="color:#aaa; font-style:italic;">09-Oct-13</span></span>
                                                    </td>
                                                    <td class="view-field view-field-node-data-field-series-field-series-value">
                                                        managinghyponatremia
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
                                                                src="http://rockpointe.realcme.com/cms/../cmsdata/course_icons/icon_397507.jpg"
                                                                alt="icon_397507.jpg" title="icon_397507.jpg" width="43"
                                                                height="43"
                                                                class="imagefield imagefield-field_icon"/><br/></td>
                                                    <td class="view-field view-field-node-title"><a
                                                                href="/cms/node/555341">New Insights into Managing
                                                            HIV-1: Guideline Recommendations, Individualized Treatment,
                                                            and Management of Comorbidities</a></td>
                                                    <td class="view-field view-field-term-node-1-name">Infectious
                                                        Diseases
                                                    </td>
                                                    <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                        Raphael J. Landovitz, MD, MSc
                                                    </td>
                                                    <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                        <span class="date-display-single">14-Oct-14</span></td>
                                                    <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                        1&nbsp;AMA<br/></td>
                                                    <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                        <span class="date-display-single"><span
                                                                    style="color:#aaa; font-style:italic;">13-Oct-15</span></span>
                                                    </td>
                                                    <td class="view-field view-field-node-data-field-series-field-series-value">
                                                        397507
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
                                                                src="http://rockpointe.realcme.com/cms/../cmsdata/course_icons/icon__237.png"
                                                                alt="icon_.png" title="icon_.png" width="43" height="43"
                                                                class="imagefield imagefield-field_icon"/><br/></td>
                                                    <td class="view-field view-field-node-title"><a
                                                                href="/cms/node/535804">Optimizing the Management of
                                                            High-Risk ACS Patients: Exploring Antiplatelet Approaches to
                                                            Improve Patient Outcomes</a></td>
                                                    <td class="view-field view-field-term-node-1-name">Cardiology</td>
                                                    <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                        Dominick J. Angiolillo, MD, PhD
                                                    </td>
                                                    <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                        <span class="date-display-single">31-Jul-14</span></td>
                                                    <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                        1&nbsp;AMA<br/></td>
                                                    <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                        <span class="date-display-single"><span
                                                                    style="color:#aaa; font-style:italic;">30-Jul-15</span></span>
                                                    </td>
                                                    <td class="view-field view-field-node-data-field-series-field-series-value">
                                                        389263
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
                                                                src="http://rockpointe.realcme.com/cms/../cmsdata/course_icons/icon__140.png"
                                                                alt="icon_.png" title="icon_.png" width="43" height="43"
                                                                class="imagefield imagefield-field_icon"/><br/></td>
                                                    <td class="view-field view-field-node-title"><a
                                                                href="/cms/node/465358">Optimizing the Use of DMD
                                                            Therapy in MS Management</a></td>
                                                    <td class="view-field view-field-term-node-1-name">Neurology</td>
                                                    <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                        Aaron E. Miller, MD
                                                    </td>
                                                    <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                        <span class="date-display-single">17-Dec-13</span></td>
                                                    <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                        1&nbsp;AMA<br/></td>
                                                    <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                        <span class="date-display-single"><span
                                                                    style="color:#aaa; font-style:italic;">16-Dec-14</span></span>
                                                    </td>
                                                    <td class="view-field view-field-node-data-field-series-field-series-value">
                                                        352381
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
                                                                src="http://rockpointe.realcme.com/cms/../cmsdata/course_icons/CETPicon.jpeg"
                                                                alt="CETPicon.jpeg" title="CETPicon.jpeg" width="43"
                                                                height="43"
                                                                class="imagefield imagefield-field_icon"/><br/></td>
                                                    <td class="view-field view-field-node-title"><a
                                                                href="/cms/node/279156">THE EMERGENT SCIENCE OF HDL AND
                                                            ITS METABOLISM: Mechanistic Understanding of CETP Antagonism
                                                            and Beyond</a></td>
                                                    <td class="view-field view-field-term-node-1-name">Cardiology</td>
                                                    <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                        Peter P. Toth, MD, PhD, FNLA*
                                                    </td>
                                                    <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                        <span class="date-display-single">01-Oct-12</span></td>
                                                    <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                        1&nbsp;AMA<br/>1&nbsp;ACPE<br/>1&nbsp;ANCC<br/>1&nbsp;CDR<br/>
                                                    </td>
                                                    <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                        <span class="date-display-single"><span
                                                                    style="color:#aaa; font-style:italic;">30-Sep-13</span></span>
                                                    </td>
                                                    <td class="view-field view-field-node-data-field-series-field-series-value">
                                                        248326
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
                                                                src="http://rockpointe.realcme.com/cms/../cmsdata/course_icons/icon_401446.jpg"
                                                                alt="icon_401446.jpg" title="icon_401446.jpg" width="43"
                                                                height="40"
                                                                class="imagefield imagefield-field_icon"/><br/></td>
                                                    <td class="view-field view-field-node-title"><a
                                                                href="/cms/node/560521">Updating and Advancing the
                                                            Management of DMD Therapy in Multiple Sclerosis</a></td>
                                                    <td class="view-field view-field-term-node-1-name">Neurology</td>
                                                    <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                        Suhayl Dhib-Jalbut, MD
                                                    </td>
                                                    <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                        <span class="date-display-single">06-Nov-14</span></td>
                                                    <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                        1&nbsp;AMA<br/></td>
                                                    <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                        <span class="date-display-single"><span
                                                                    style="color:#aaa; font-style:italic;">06-Nov-15</span></span>
                                                    </td>
                                                    <td class="view-field view-field-node-data-field-series-field-series-value">
                                                        401446
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
                                                src="/cms/sites/all/themes/zen/rockpointetheme/img/logo-companion.gif"
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
                                                                    class="left"
                                                                    style="padding: 10px 0px 5px 5px;"> <span
                                                                        style="cursor:pointer"
                                                                        onClick="$('#companion_description').slideToggle('slow'); $('#comp_info_plus').toggle(); $('#comp_info_minus').toggle();"> <span
                                                                            style="font-size: 12px" id="comp_info_plus"> (+)</span><span
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
                                            href="/cms/privacypolicy">Privacy Policy</a>&nbsp; <a
                                            href="/cms/termsofservice">Terms of Service</a>&nbsp; <a
                                            href="/cms/support-center">Support</a></small>
                                <br/><br/> <img src="/cms/sites/all/themes/zen/rockpointetheme/img/footerlogo.png"
                                                alt="" class="center"/></center>
                        </div>
                    </div>
                </div> <!-- /#footer-inner, /#footer -->
                <script type="text/javascript"
                        src="/cms/sites/all/modules/google_analytics/googleanalytics.js"></script>
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
        </div> <!-- /#page-inner, /#page --> </div><!-- MasterContent -->
    <script> function popUpWin(path) { //alert("popUpWin: " + path); var sURL = path; var features = 'toolbar=0,location=0,status=1,menubar=0,scrollbars=1,resizable=1,width=1024,height=800,left=' + top.window.screenLeft + ',top=' + top.window.screenTop; windownew = window.open(sURL, "new_window", features); try { windownew.focus(); } catch (ex) { } } </script>
    <div class="MasterFooter"> © 2012 Rockpointe Corporation | <a
                href="javascript:top.popUpWin('http://www.rockpointe.com/INFO_CONTENT/PrivacyStatement.aspx', 700, 400)">Privacy
            Statement</a> | <a
                href="javascript:top.popUpWin('http://www.rockpointe.com/INFO_CONTENT/LegalInformation.aspx', 700, 400)">Legal
            Information</a></div>
</div> <!-- Master --> </body>
</html>
