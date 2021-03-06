<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-us" xml:lang="en-us">
<head><title>Peer Audience</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" href="http://i.realcme.com/cms/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="/cms/sites/all/themes/zen/pro-cmetheme/print.css" type="text/css" media="print"/>
    <style type="text/css" media="all">@import "/cms/../cmsdata/css/426365dad58b4119d5e14568d89e71e3.css";</style>
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
<body class="not-front not-logged-in one-sidebar sidebar-right page-listingall section-listingall">
<div id="page">
    <div id="page-inner"><a name="top" id="navigation-top"></a>
        <div style="display: none" id="skip-to-nav"><a href="#navigation">Skip to Navigation</a></div>
        <div id="header">
            <div id="header-inner" class="clear-block">
                <div id="logo"><a href="/cms/" title="Home" rel="home"><img
                                src="/cms/sites/all/themes/zen/pro-cmetheme/img/new_images/procme-logo.png" alt="Home"
                                id="logo-image"/></a></div>
            </div>
        </div> <!-- /#header-inner, /#header -->
        <!--<div id="top_nav"> <ul id="top_nav_links"> <li class=""><a href="/aboutus.php">About Us</a></li> <li class=""><a href="/providers.php">Offerings</a></li> <li class=""><a href="/platform.php">Platform</a></li> <li class=""><a href="/news-releases/">News</a></li> <li class="last "><a href="/jobs.php">Jobs</a></li> </ul> </div>-->
        <div id="page-main">
            <div id="main-inner" class="clear-block with-navbar">
                <div id="content">
                    <div id="content-inner">
                        <div id="content-header"></div> <!-- /#content-header -->
                        <div id="content-area">
                            <div class='view view-listing-all'>
                                <div class='view-header view-header-listing-all'>
                                    <div id="displaypromotions" style="display: none;">
                                        <div id="displaypromotions_header" style="display: none;">FEATURED ACTIVITIES
                                        </div>
                                        <div id="displaypromotions_nid" style="display: none;">0</div>
                                    </div>
                                </div>
                                <div class='listing-tabs'>
                                    <form action="http://pro-cme.realcme.com/cms/listingall" accept-charset="UTF-8"
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
                                                        <div class='listing-tab-group'><a href='/cms/listingfeatured'>
                                                                <div class='first listing-tab'> Featured</div>
                                                            </a> <a href='/cms/listingcurriculum'>
                                                                <div class='listing-tab'> Curricula</div>
                                                            </a> <a href='/cms/listingall'>
                                                                <div class='listing-tab selected'> All</div>
                                                            </a> <a href='/cms/listingarchived'>
                                                                <div class='listing-tab'> Archived</div>
                                                            </a>
                                                            <div class='last listing-filter'>
                                                                <div class="form-item"><input type="text"
                                                                                              maxlength="255"
                                                                                              name="filter0"
                                                                                              id="edit-filter0"
                                                                                              size="10" value="Search"
                                                                                              placeholder="Search"
                                                                                              class="form-text"/></div>
                                                            </div>
                                                    </td>
                                                    <td><input type="submit" id="edit-submit" value=""
                                                               class="form-submit"/></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </form>
                                </div>
                                <div class='view-content view-content-listing-all'>
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
                                            <th class="view-cell-header view-field-node-data-field-patient-statement-field-patient-statement-value"></th>
                                            <th class="view-cell-header view-field-node-data-field-course-desc-field-course-desc-value"></th>
                                            <th class="view-cell-header view-field-term-node-3-name"></th>
                                            <th class="view-cell-header view-field-node-data-field-activity-group-field-activity-group-nid"></th>
                                            <th class="view-cell-header view-field-content-type-activity-group-field-group-name-value"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="odd">
                                            <td colspan="13" align="left" valign="top" class="listingtopic">Allergy/
                                                Immunology
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td class="view-field view-field-node-data-field-icon-field-icon-fid"
                                                align="center" valign="top"><img
                                                        src="http://pro-cme.realcme.com/cms/../cmsdata/course_icons/icon_574671_0.jpg"
                                                        alt="icon_574671.jpg" title="icon_574671.jpg" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/></td>
                                            <td class="view-field view-field-node-title"><a
                                                        href="/cms/node/760557?utm_source=activitylist&amp;utm_medium=web&amp;utm_content=all&amp;utm_campaign=">Experts
                                                    in the Hot Seat: Precision Therapy with Emerging Cytokine Inhibitors
                                                    in Asthma</a></td>
                                            <td class="view-field view-field-term-node-1-name">Allergy/ Immunology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Bradley E. Chipps, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">14-Mar-17</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                1&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single">14-Mar-18</span></td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                574671
                                            </td>
                                            <td class="view-field view-field-node-data-field-patient-statement-field-patient-statement-value"></td>
                                            <td class="view-field view-field-node-data-field-course-desc-field-course-desc-value">
                                                The Future of Asthma Management: Precision Therapy with Emerging
                                                Cytokine Inhibitors
                                            </td>
                                            <td class="view-field view-field-term-node-3-name"></td>
                                            <td class="view-field view-field-node-data-field-activity-group-field-activity-group-nid">
                                                <a href="/cms/node/718105">riq_537887</a></td>
                                            <td class="view-field view-field-content-type-activity-group-field-group-name-value">
                                                The Future of Asthma Management: Precision Therapy with Emerging
                                                Cytokine Inhibitors
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="view-field view-field-node-data-field-icon-field-icon-fid"
                                                align="center" valign="top"><img
                                                        src="http://pro-cme.realcme.com/cms/../cmsdata/course_icons/icon_617595.jpg"
                                                        alt="icon_617595.jpg" title="icon_617595.jpg" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/></td>
                                            <td class="view-field view-field-node-title"><a
                                                        href="/cms/node/839006?utm_source=activitylist&amp;utm_medium=web&amp;utm_content=all&amp;utm_campaign=">First
                                                    Know Thyself: Improving Patient Outcomes in Moderate-to-Severe and
                                                    Difficult-to-Treat Pediatric Asthma</a></td>
                                            <td class="view-field view-field-term-node-1-name">Allergy/ Immunology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Bradley E. Chipps, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">12-Dec-17</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single">11-Dec-18</span></td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                617595
                                            </td>
                                            <td class="view-field view-field-node-data-field-patient-statement-field-patient-statement-value"></td>
                                            <td class="view-field view-field-node-data-field-course-desc-field-course-desc-value"></td>
                                            <td class="view-field view-field-term-node-3-name"></td>
                                            <td class="view-field view-field-node-data-field-activity-group-field-activity-group-nid">
                                                <a href="/cms/node/839009">riq_620040</a></td>
                                            <td class="view-field view-field-content-type-activity-group-field-group-name-value">
                                                Improving Patient Outcomes in Moderate-to-Severe and Difficult-to-Treat
                                                Pediatric Asthma
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td class="view-field view-field-node-data-field-icon-field-icon-fid"
                                                align="center" valign="top"><img
                                                        src="http://pro-cme.realcme.com/cms/../cmsdata/course_icons/icon_600947.jpg"
                                                        alt="icon_600947.jpg" title="icon_600947.jpg" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/></td>
                                            <td class="view-field view-field-node-title"><a
                                                        href="/cms/node/843473?utm_source=activitylist&amp;utm_medium=web&amp;utm_content=all&amp;utm_campaign=">Issues
                                                    and Updates in Hereditary Angioedema</a></td>
                                            <td class="view-field view-field-term-node-1-name">Allergy/ Immunology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Marc Riedl, MD, MS
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">27-Dec-17</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                1&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single">27-Dec-18</span></td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                600947
                                            </td>
                                            <td class="view-field view-field-node-data-field-patient-statement-field-patient-statement-value"></td>
                                            <td class="view-field view-field-node-data-field-course-desc-field-course-desc-value"></td>
                                            <td class="view-field view-field-term-node-3-name"></td>
                                            <td class="view-field view-field-node-data-field-activity-group-field-activity-group-nid">
                                                <a href="/cms/node/843475">riq_623246</a></td>
                                            <td class="view-field view-field-content-type-activity-group-field-group-name-value">
                                                Issues and Updates in Hereditary Angioedema
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="view-field view-field-node-data-field-icon-field-icon-fid"
                                                align="center" valign="top"><img
                                                        src="http://pro-cme.realcme.com/cms/../cmsdata/course_icons/icon_613119_0.jpg"
                                                        alt="icon_613119.jpg" title="icon_613119.jpg" width="48"
                                                        height="48" class="imagefield imagefield-field_icon"/></td>
                                            <td class="view-field view-field-node-title"><a
                                                        href="/cms/node/822785?utm_source=activitylist&amp;utm_medium=web&amp;utm_content=all&amp;utm_campaign=">New
                                                    Horizons: Finally, Approaches to Treating Moderate to Severe Atopic
                                                    Dermatitis</a></td>
                                            <td class="view-field view-field-term-node-1-name">Allergy/ Immunology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Jonathan Silverberg, MD, PhD, MPH
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">24-Oct-17</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                1&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single">24-Oct-18</span></td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                613119
                                            </td>
                                            <td class="view-field view-field-node-data-field-patient-statement-field-patient-statement-value"></td>
                                            <td class="view-field view-field-node-data-field-course-desc-field-course-desc-value"></td>
                                            <td class="view-field view-field-term-node-3-name"></td>
                                            <td class="view-field view-field-node-data-field-activity-group-field-activity-group-nid">
                                                <a href="/cms/node/771203">riq_588662</a></td>
                                            <td class="view-field view-field-content-type-activity-group-field-group-name-value">
                                                A Self-Assessment Program on Managing Atopic Dermatitis&amp;#8203; and
                                                Improving Patient Outcomes
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td class="view-field view-field-node-data-field-icon-field-icon-fid"
                                                align="center" valign="top"><img
                                                        src="http://pro-cme.realcme.com/cms/../cmsdata/course_icons/icon_586621.jpg"
                                                        alt="icon_586621.jpg" title="icon_586621.jpg" width="48"
                                                        height="48" class="imagefield imagefield-field_icon"/></td>
                                            <td class="view-field view-field-node-title"><a
                                                        href="/cms/node/771201?utm_source=activitylist&amp;utm_medium=web&amp;utm_content=all&amp;utm_campaign=">New
                                                    Horizons: Finally, Approaches to Treating Moderate-to-Severe Atopic
                                                    Dermatitis and Implications for Asthma</a></td>
                                            <td class="view-field view-field-term-node-1-name">Allergy/ Immunology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Bradley E. Chipps, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">25-Apr-17</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                1.25&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single">25-Apr-18</span></td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                586621
                                            </td>
                                            <td class="view-field view-field-node-data-field-patient-statement-field-patient-statement-value"></td>
                                            <td class="view-field view-field-node-data-field-course-desc-field-course-desc-value"></td>
                                            <td class="view-field view-field-term-node-3-name"></td>
                                            <td class="view-field view-field-node-data-field-activity-group-field-activity-group-nid">
                                                <a href="/cms/node/771203">riq_588662</a></td>
                                            <td class="view-field view-field-content-type-activity-group-field-group-name-value">
                                                A Self-Assessment Program on Managing Atopic Dermatitis&amp;#8203; and
                                                Improving Patient Outcomes
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td colspan="13" align="left" valign="top" class="listingtopic">
                                                Dermatology
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td class="view-field view-field-node-data-field-icon-field-icon-fid"
                                                align="center" valign="top"><img
                                                        src="http://pro-cme.realcme.com/cms/../cmsdata/course_icons/icon_623054_1.jpg"
                                                        alt="icon_623054.jpg" title="icon_623054.jpg" width="48"
                                                        height="48" class="imagefield imagefield-field_icon"/></td>
                                            <td class="view-field view-field-node-title"><a
                                                        href="/cms/node/842819?utm_source=activitylist&amp;utm_medium=web&amp;utm_content=all&amp;utm_campaign=">Follow-up
                                                    Assessment- A Self-Assessment Program on Managing Atopic Dermatitis​
                                                    and Improving Patient Outcomes</a></td>
                                            <td class="view-field view-field-term-node-1-name">Dermatology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value"></td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">21-Dec-17</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value"></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single">01-Nov-18</span></td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                623054
                                            </td>
                                            <td class="view-field view-field-node-data-field-patient-statement-field-patient-statement-value"></td>
                                            <td class="view-field view-field-node-data-field-course-desc-field-course-desc-value"></td>
                                            <td class="view-field view-field-term-node-3-name"></td>
                                            <td class="view-field view-field-node-data-field-activity-group-field-activity-group-nid">
                                                <a href="/cms/node/842821">rg_842819</a></td>
                                            <td class="view-field view-field-content-type-activity-group-field-group-name-value">
                                                A Learning Pathway in Atopic Dermatitis: Achieving Success in Assessment
                                                and Management to Improve Patient Outcomes
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td colspan="13" align="left" valign="top" class="listingtopic">
                                                Gastroenterology
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td class="view-field view-field-node-data-field-icon-field-icon-fid"
                                                align="center" valign="top"><img
                                                        src="http://pro-cme.realcme.com/cms/../cmsdata/course_icons/icon_619485_0.jpg"
                                                        alt="icon_619485.jpg" title="icon_619485.jpg" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/></td>
                                            <td class="view-field view-field-node-title"><a
                                                        href="/cms/node/839867?utm_source=activitylist&amp;utm_medium=web&amp;utm_content=all&amp;utm_campaign=">Clinical
                                                    Convergence®: Patient and Provider Perspectives in IBD 2018</a></td>
                                            <td class="view-field view-field-term-node-1-name">Gastroenterology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Millie D. Long, MD, MPH
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">14-Dec-17</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                1&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single">14-Dec-18</span></td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                619485
                                            </td>
                                            <td class="view-field view-field-node-data-field-patient-statement-field-patient-statement-value"></td>
                                            <td class="view-field view-field-node-data-field-course-desc-field-course-desc-value"></td>
                                            <td class="view-field view-field-term-node-3-name"></td>
                                            <td class="view-field view-field-node-data-field-activity-group-field-activity-group-nid">
                                                <a href="/cms/node/839869">riq_620472</a></td>
                                            <td class="view-field view-field-content-type-activity-group-field-group-name-value">
                                                Clinical Convergence&amp;reg;: Patient and Provider Perspectives in IBD
                                                2018
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="view-field view-field-node-data-field-icon-field-icon-fid"
                                                align="center" valign="top"><img
                                                        src="http://pro-cme.realcme.com/cms/../cmsdata/course_icons/icon_524975.jpg"
                                                        alt="icon_524975.jpg" title="icon_524975.jpg" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/></td>
                                            <td class="view-field view-field-node-title"><a
                                                        href="/cms/node/725331?utm_source=activitylist&amp;utm_medium=web&amp;utm_content=all&amp;utm_campaign=">IBD
                                                    in Clinical Practice: Anemia</a></td>
                                            <td class="view-field view-field-term-node-1-name">Gastroenterology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Jason K. Hou, MD, MS
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">25-Oct-16</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                1.25&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single">24-Jun-18</span></td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                524975
                                            </td>
                                            <td class="view-field view-field-node-data-field-patient-statement-field-patient-statement-value"></td>
                                            <td class="view-field view-field-node-data-field-course-desc-field-course-desc-value"></td>
                                            <td class="view-field view-field-term-node-3-name"></td>
                                            <td class="view-field view-field-node-data-field-activity-group-field-activity-group-nid">
                                                <a href="/cms/node/725333">riq_547298</a></td>
                                            <td class="view-field view-field-content-type-activity-group-field-group-name-value">
                                                IBD in Clinical Practice: Anemia
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td class="view-field view-field-node-data-field-icon-field-icon-fid"
                                                align="center" valign="top"><img
                                                        src="http://pro-cme.realcme.com/cms/../cmsdata/course_icons/icon_623877.jpg"
                                                        alt="icon_623877.jpg" title="icon_623877.jpg" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/></td>
                                            <td class="view-field view-field-node-title"><a
                                                        href="/cms/node/843505?utm_source=activitylist&amp;utm_medium=web&amp;utm_content=all&amp;utm_campaign=">IBD
                                                    in Clinical Practice: Diagnosis and Medical Treatment - 2017</a>
                                            </td>
                                            <td class="view-field view-field-term-node-1-name">Gastroenterology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Hans Herfarth, MD, PhD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">04-May-17</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                1&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single">04-May-18</span></td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                623877
                                            </td>
                                            <td class="view-field view-field-node-data-field-patient-statement-field-patient-statement-value"></td>
                                            <td class="view-field view-field-node-data-field-course-desc-field-course-desc-value">
                                                Case-based activity: See how well you can manage inflammatory bowel
                                                disease according to symptoms, duration, and severity of disease.
                                            </td>
                                            <td class="view-field view-field-term-node-3-name"></td>
                                            <td class="view-field view-field-node-data-field-activity-group-field-activity-group-nid">
                                                <a href="/cms/node/774282">riq_591157</a></td>
                                            <td class="view-field view-field-content-type-activity-group-field-group-name-value">
                                                Inflammatory Bowel Diseases in Clinical Practice: An Interactive
                                                Tutorial for Patient...
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="view-field view-field-node-data-field-icon-field-icon-fid"
                                                align="center" valign="top"><img
                                                        src="http://pro-cme.realcme.com/cms/../cmsdata/course_icons/icon_624072.jpg"
                                                        alt="icon_624072.jpg" title="icon_624072.jpg" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/></td>
                                            <td class="view-field view-field-node-title"><a
                                                        href="/cms/node/843493?utm_source=activitylist&amp;utm_medium=web&amp;utm_content=all&amp;utm_campaign=">IBD
                                                    in Clinical Practice: Long-term Disease Management and Surgery -
                                                    2017</a></td>
                                            <td class="view-field view-field-term-node-1-name">Gastroenterology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Miguel Regueiro, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">04-May-17</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single">04-May-18</span></td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                624072
                                            </td>
                                            <td class="view-field view-field-node-data-field-patient-statement-field-patient-statement-value"></td>
                                            <td class="view-field view-field-node-data-field-course-desc-field-course-desc-value">
                                                Choose acute and long-term medical therapy for inflammatory bowel
                                                disease and decide when surgery is indicated.
                                            </td>
                                            <td class="view-field view-field-term-node-3-name"></td>
                                            <td class="view-field view-field-node-data-field-activity-group-field-activity-group-nid">
                                                <a href="/cms/node/774282">riq_591157</a></td>
                                            <td class="view-field view-field-content-type-activity-group-field-group-name-value">
                                                Inflammatory Bowel Diseases in Clinical Practice: An Interactive
                                                Tutorial for Patient...
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td class="view-field view-field-node-data-field-icon-field-icon-fid"
                                                align="center" valign="top"><img
                                                        src="http://pro-cme.realcme.com/cms/../cmsdata/course_icons/icon_568761.jpg"
                                                        alt="icon_568761.jpg" title="icon_568761.jpg" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/></td>
                                            <td class="view-field view-field-node-title"><a
                                                        href="/cms/node/764609?utm_source=activitylist&amp;utm_medium=web&amp;utm_content=all&amp;utm_campaign=">IBD
                                                    in Clinical Practice: Malnutrition Update for Healthcare
                                                    Providers</a></td>
                                            <td class="view-field view-field-term-node-1-name">Gastroenterology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Caroline Hwang, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">28-Mar-17</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                1&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single">28-Mar-18</span></td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                568761
                                            </td>
                                            <td class="view-field view-field-node-data-field-patient-statement-field-patient-statement-value"></td>
                                            <td class="view-field view-field-node-data-field-course-desc-field-course-desc-value"></td>
                                            <td class="view-field view-field-term-node-3-name"></td>
                                            <td class="view-field view-field-node-data-field-activity-group-field-activity-group-nid">
                                                <a href="/cms/node/764611">riq_575111</a></td>
                                            <td class="view-field view-field-content-type-activity-group-field-group-name-value">
                                                IBD in Clinical Practice: Malnutrition Update for Healthcare Providers
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td colspan="13" align="left" valign="top" class="listingtopic">
                                                Hematology-Oncology
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td class="view-field view-field-node-data-field-icon-field-icon-fid"
                                                align="center" valign="top"><img
                                                        src="http://pro-cme.realcme.com/cms/../cmsdata/course_icons/icon_585954.jpg"
                                                        alt="icon_585954.jpg" title="icon_585954.jpg" width="42"
                                                        height="42" class="imagefield imagefield-field_icon"/></td>
                                            <td class="view-field view-field-node-title"><a
                                                        href="/cms/node/771882?utm_source=activitylist&amp;utm_medium=web&amp;utm_content=all&amp;utm_campaign=">A
                                                    Systematic, Patient-Centered Approach to Managing Advanced NSCLC</a>
                                            </td>
                                            <td class="view-field view-field-term-node-1-name">Hematology-Oncology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Jamie E. Chaft, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">27-Apr-17</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single">27-Apr-18</span></td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                585954
                                            </td>
                                            <td class="view-field view-field-node-data-field-patient-statement-field-patient-statement-value"></td>
                                            <td class="view-field view-field-node-data-field-course-desc-field-course-desc-value"></td>
                                            <td class="view-field view-field-term-node-3-name"></td>
                                            <td class="view-field view-field-node-data-field-activity-group-field-activity-group-nid">
                                                <a href="/cms/node/771884">riq_588392</a></td>
                                            <td class="view-field view-field-content-type-activity-group-field-group-name-value">
                                                A Systematic, Patient-Centered Approach to Managing Advanced NSCLC
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="view-field view-field-node-data-field-icon-field-icon-fid"
                                                align="center" valign="top"><img
                                                        src="http://pro-cme.realcme.com/cms/../cmsdata/course_icons/icon_574223_0.jpg"
                                                        alt="icon_574223.jpg" title="icon_574223.jpg" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/></td>
                                            <td class="view-field view-field-node-title"><a
                                                        href="/cms/node/762293?utm_source=activitylist&amp;utm_medium=web&amp;utm_content=all&amp;utm_campaign=">Clinical
                                                    Convergence®: New Management Approaches in Bladder Cancer from
                                                    Collaborative Care to Immunotherapy</a></td>
                                            <td class="view-field view-field-term-node-1-name">Hematology-Oncology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Elizabeth R. Plimack, MD, MS
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">21-Mar-17</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                1&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single">21-Mar-18</span></td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                574223
                                            </td>
                                            <td class="view-field view-field-node-data-field-patient-statement-field-patient-statement-value"></td>
                                            <td class="view-field view-field-node-data-field-course-desc-field-course-desc-value"></td>
                                            <td class="view-field view-field-term-node-3-name"></td>
                                            <td class="view-field view-field-node-data-field-activity-group-field-activity-group-nid">
                                                <a href="/cms/node/762295">riq_579420</a></td>
                                            <td class="view-field view-field-content-type-activity-group-field-group-name-value">
                                                Clinical Convergence: New Management Approaches in Bladder Cancer from
                                                Collaborative Care to...
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td colspan="13" align="left" valign="top" class="listingtopic">Oncology
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="view-field view-field-node-data-field-icon-field-icon-fid"
                                                align="center" valign="top"><img
                                                        src="http://pro-cme.realcme.com/cms/../cmsdata/course_icons/icon_582249.jpg"
                                                        alt="icon_582249.jpg" title="icon_582249.jpg" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/></td>
                                            <td class="view-field view-field-node-title"><a
                                                        href="/cms/node/768180?utm_source=activitylist&amp;utm_medium=web&amp;utm_content=all&amp;utm_campaign=">Reflecting
                                                    on Errors and Missed Opportunities in CLL</a></td>
                                            <td class="view-field view-field-term-node-1-name">Oncology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Ian W. Flinn, MD, PhD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">11-Apr-17</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                1&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single">11-Apr-18</span></td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                582249
                                            </td>
                                            <td class="view-field view-field-node-data-field-patient-statement-field-patient-statement-value"></td>
                                            <td class="view-field view-field-node-data-field-course-desc-field-course-desc-value">
                                                Reflecting on Errors and Missed Opportunities in CLL
                                            </td>
                                            <td class="view-field view-field-term-node-3-name"></td>
                                            <td class="view-field view-field-node-data-field-activity-group-field-activity-group-nid">
                                                <a href="/cms/node/768182">riq_584049</a></td>
                                            <td class="view-field view-field-content-type-activity-group-field-group-name-value">
                                                Reflecting on Errors and Missed Opportunities in CLL
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td colspan="13" align="left" valign="top" class="listingtopic">
                                                Rheumatology
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="view-field view-field-node-data-field-icon-field-icon-fid"
                                                align="center" valign="top"><img
                                                        src="http://pro-cme.realcme.com/cms/../cmsdata/course_icons/icon_586337.jpg"
                                                        alt="icon_586337.jpg" title="icon_586337.jpg" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/></td>
                                            <td class="view-field view-field-node-title"><a
                                                        href="/cms/node/773577?utm_source=activitylist&amp;utm_medium=web&amp;utm_content=all&amp;utm_campaign=">A
                                                    Guideline-Driven Approach to RA: Disease Monitoring, Treatment
                                                    Selection, and Patient Preference</a></td>
                                            <td class="view-field view-field-term-node-1-name">Rheumatology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Jeffrey R. Curtis, MD, MS, MPH
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">02-May-17</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                1&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single">02-May-18</span></td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                586337
                                            </td>
                                            <td class="view-field view-field-node-data-field-patient-statement-field-patient-statement-value"></td>
                                            <td class="view-field view-field-node-data-field-course-desc-field-course-desc-value"></td>
                                            <td class="view-field view-field-term-node-3-name"></td>
                                            <td class="view-field view-field-node-data-field-activity-group-field-activity-group-nid">
                                                <a href="/cms/node/773579">riq_588702</a></td>
                                            <td class="view-field view-field-content-type-activity-group-field-group-name-value">
                                                A Guideline-Driven Approach to RA: Disease Monitoring, Treatment
                                                Selection, and Patient...
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td class="view-field view-field-node-data-field-icon-field-icon-fid"
                                                align="center" valign="top"><img
                                                        src="http://pro-cme.realcme.com/cms/../cmsdata/course_icons/icon_620863.jpg"
                                                        alt="icon_620863.jpg" title="icon_620863.jpg" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/></td>
                                            <td class="view-field view-field-node-title"><a
                                                        href="/cms/node/842992?utm_source=activitylist&amp;utm_medium=web&amp;utm_content=all&amp;utm_campaign=">Clinical
                                                    Convergence®: Achieving Success in RA Assessment and Management</a>
                                            </td>
                                            <td class="view-field view-field-term-node-1-name">Rheumatology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Martin Jan Bergman, MD, FACR, FACP, FCPP
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">26-Dec-17</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                1&nbsp;AMA<br/>1&nbsp;ANCC<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single">26-Dec-18</span></td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                620863
                                            </td>
                                            <td class="view-field view-field-node-data-field-patient-statement-field-patient-statement-value"></td>
                                            <td class="view-field view-field-node-data-field-course-desc-field-course-desc-value"></td>
                                            <td class="view-field view-field-term-node-3-name"></td>
                                            <td class="view-field view-field-node-data-field-activity-group-field-activity-group-nid">
                                                <a href="/cms/node/818875">riq_612096</a></td>
                                            <td class="view-field view-field-content-type-activity-group-field-group-name-value">
                                                Achieving Success in RA Assessment and Management: A Learner Pathway to
                                                Improve Patient...
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="view-field view-field-node-data-field-icon-field-icon-fid"
                                                align="center" valign="top"><img
                                                        src="http://pro-cme.realcme.com/cms/../cmsdata/course_icons/icon_611862.jpg"
                                                        alt="icon_611862.jpg" title="icon_611862.jpg" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/></td>
                                            <td class="view-field view-field-node-title"><a
                                                        href="/cms/node/818873?utm_source=activitylist&amp;utm_medium=web&amp;utm_content=all&amp;utm_campaign=">Clinical
                                                    Reflections® Achieving Success in RA Assessment &amp; Management: A
                                                    Learner Pathway to Improve Patient Outcomes</a></td>
                                            <td class="view-field view-field-term-node-1-name">Rheumatology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Jeffrey R. Curtis, MD, MS, MPH (Chair)
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">12-Oct-17</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                1&nbsp;AMA<br/>1&nbsp;ANCC<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single">12-Oct-18</span></td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                611862
                                            </td>
                                            <td class="view-field view-field-node-data-field-patient-statement-field-patient-statement-value"></td>
                                            <td class="view-field view-field-node-data-field-course-desc-field-course-desc-value">
                                                This unique educational initiative harnesses the power of reflection and
                                                recognition
                                            </td>
                                            <td class="view-field view-field-term-node-3-name"></td>
                                            <td class="view-field view-field-node-data-field-activity-group-field-activity-group-nid">
                                                <a href="/cms/node/818875">riq_612096</a></td>
                                            <td class="view-field view-field-content-type-activity-group-field-group-name-value">
                                                Achieving Success in RA Assessment and Management: A Learner Pathway to
                                                Improve Patient...
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td class="view-field view-field-node-data-field-icon-field-icon-fid"
                                                align="center" valign="top"><img
                                                        src="http://pro-cme.realcme.com/cms/../cmsdata/course_icons/icon_623555.png"
                                                        alt="icon_623555.png" title="icon_623555.png" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/></td>
                                            <td class="view-field view-field-node-title"><a
                                                        href="/cms/node/843994?utm_source=activitylist&amp;utm_medium=web&amp;utm_content=all&amp;utm_campaign=">Effective
                                                    Practice Strategies to Achieve Earlier RA Diagnosis and Faster
                                                    Initiation of Care</a></td>
                                            <td class="view-field view-field-term-node-1-name">Rheumatology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Iain B. McInnes, MD, PhD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">28-Dec-17</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single">27-Dec-18</span></td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                623555
                                            </td>
                                            <td class="view-field view-field-node-data-field-patient-statement-field-patient-statement-value"></td>
                                            <td class="view-field view-field-node-data-field-course-desc-field-course-desc-value"></td>
                                            <td class="view-field view-field-term-node-3-name"></td>
                                            <td class="view-field view-field-node-data-field-activity-group-field-activity-group-nid">
                                                <a href="/cms/node/843897">riq_623387</a></td>
                                            <td class="view-field view-field-content-type-activity-group-field-group-name-value">
                                                Rheumatoid Arthritis: The Importance of Early Diagnosis and Timely
                                                Access to Treatment
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="view-field view-field-node-data-field-icon-field-icon-fid"
                                                align="center" valign="top"><img
                                                        src="http://pro-cme.realcme.com/cms/../cmsdata/course_icons/icon_567924.jpg"
                                                        alt="icon_567924.jpg" title="icon_567924.jpg" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/></td>
                                            <td class="view-field view-field-node-title"><a
                                                        href="/cms/node/754513?utm_source=activitylist&amp;utm_medium=web&amp;utm_content=all&amp;utm_campaign=">First
                                                    Know Thyself: A Self-Assessment Program on Management of Rheumatoid
                                                    Arthritis (RA)</a></td>
                                            <td class="view-field view-field-term-node-1-name">Rheumatology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Peter C. Taylor, MA, BM, BCh, PhD, FRCP, FRCPE
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">16-Feb-17</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single">16-Feb-18</span></td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                567924
                                            </td>
                                            <td class="view-field view-field-node-data-field-patient-statement-field-patient-statement-value"></td>
                                            <td class="view-field view-field-node-data-field-course-desc-field-course-desc-value"></td>
                                            <td class="view-field view-field-term-node-3-name"></td>
                                            <td class="view-field view-field-node-data-field-activity-group-field-activity-group-nid">
                                                <a href="/cms/node/754515">riq_570943</a></td>
                                            <td class="view-field view-field-content-type-activity-group-field-group-name-value">
                                                Targeting the Cytokine Pathway in RA Management: Implications for Novel
                                                and Emerging IL-6...
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td class="view-field view-field-node-data-field-icon-field-icon-fid"
                                                align="center" valign="top"><img
                                                        src="http://pro-cme.realcme.com/cms/../cmsdata/course_icons/icon_565426_2.jpg"
                                                        alt="icon_565426.jpg" title="icon_565426.jpg" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/></td>
                                            <td class="view-field view-field-node-title"><a
                                                        href="/cms/node/771926?utm_source=activitylist&amp;utm_medium=web&amp;utm_content=all&amp;utm_campaign=">Psoriatic
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
                                            <td class="view-field view-field-node-data-field-patient-statement-field-patient-statement-value"></td>
                                            <td class="view-field view-field-node-data-field-course-desc-field-course-desc-value">
                                                This activity will examine patient satisfaction and patient-centered
                                                care in PsA
                                            </td>
                                            <td class="view-field view-field-term-node-3-name"></td>
                                            <td class="view-field view-field-node-data-field-activity-group-field-activity-group-nid">
                                                <a href="/cms/node/771932">riq_588491</a></td>
                                            <td class="view-field view-field-content-type-activity-group-field-group-name-value">
                                                Understanding the Patient Experience to Improve Patient Satisfaction and
                                                Outcomes
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="view-field view-field-node-data-field-icon-field-icon-fid"
                                                align="center" valign="top"><img
                                                        src="http://pro-cme.realcme.com/cms/../cmsdata/course_icons/icon_622323.png"
                                                        alt="icon_622323.png" title="icon_622323.png" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/></td>
                                            <td class="view-field view-field-node-title"><a
                                                        href="/cms/node/843895?utm_source=activitylist&amp;utm_medium=web&amp;utm_content=all&amp;utm_campaign=">The
                                                    Impact of Earlier Diagnosis and Timelier Treatment of Rheumatoid
                                                    Arthritis on Patient Outcomes and Healthcare Systems</a></td>
                                            <td class="view-field view-field-term-node-1-name">Rheumatology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Marc D. Cohen, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">28-Dec-17</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single">27-Dec-18</span></td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                622323
                                            </td>
                                            <td class="view-field view-field-node-data-field-patient-statement-field-patient-statement-value"></td>
                                            <td class="view-field view-field-node-data-field-course-desc-field-course-desc-value">
                                                Assess your ability to diagnose and manage early rheumatoid arthritis;
                                                hear a discussion of practice strategies from an expert panel.
                                            </td>
                                            <td class="view-field view-field-term-node-3-name"></td>
                                            <td class="view-field view-field-node-data-field-activity-group-field-activity-group-nid">
                                                <a href="/cms/node/843897">riq_623387</a></td>
                                            <td class="view-field view-field-content-type-activity-group-field-group-name-value">
                                                Rheumatoid Arthritis: The Importance of Early Diagnosis and Timely
                                                Access to Treatment
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
                                        src="/cms/sites/all/themes/zen/pro-cmetheme/img/logo-companion.gif"
                                        id="logo-companion" alt="CMECompanion" class=""/></div>
                            <!-- Accordion Menu Start -->
                            <div id="list1"> <!-- SIDEBAR RIGHT -->
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
                                </div> <!-- /block-inner, /block --> <!-- END SIDEBAR RIGHT --> </div>
                        </div> <!-- altcontainer2 --> </div>
                </div> <!-- /#sidebar-right-inner, /#sidebar-right --> </div>
        </div> <!-- /#main-inner, /#main -->
        <div id="footer">
            <div id="copyright"> &copy; 2008-2018 RealCME. All rights reserved.</div>
            <div id="bottom_links">
                <ul>
                    <li class="first_link"><a href="/">Home</a></li>
                    <li><a href="/cms/support-center">Support</a></li>
                    <li><a href="/privacy.php">Privacy Statement</a></li>
                    <li><a href="/tos.php">Terms of Use</a></li>
                    <li><a href="/sitemap.php">Sitemap</a></li>
                    <li><a href="/cms/contact-us">Contact Us</a></li>
                </ul>
            </div> <!--BOF client footer -->
            <div id="footer-copyright"><p>&copy;Pro-CME Copyright 2018</p>
                <ul class="inline">
                    <li><a href="http://pro-c.me/privacy" target="_blank">Privacy Policy</a></li>
                    <li>|</li>
                    <li><a href="http://pro-c.me/contactus" target="_blank">Contact Us</a></li>
                </ul>
            </div> <!--EOF footer --> </div> <!-- Close Footer -->
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
