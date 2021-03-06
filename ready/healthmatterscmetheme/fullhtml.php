<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-us" xml:lang="en-us">
<head><title>HealthMatters CME</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" href="http://i.realcme.com/cms/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="/cms/sites/all/themes/zen/healthmatterscmetheme/print.css" type="text/css"
          media="print"/>
    <style type="text/css" media="all">@import "/cms/../cmsdata/css/2729db9a5f33ef80df25b293c1caeb0c.css";</style>
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
<div id="hmcmeheader">
    <div id="hmcmetop"><a href="http://healthmatterscme.com/Default.aspx"> <img
                    src="/cms/sites/all/themes/zen/healthmatterscmetheme/img/hmcme/logo.gif"
                    alt="Healthmatters: A Continuing Medical Education Company"/> </a>&nbsp; <p><a
                    href="http://facebook.com/healthmatterscme" title="Visit us on Facebook" target="_blank"><img
                        src="/cms/sites/all/themes/zen/healthmatterscmetheme/img/hmcme/fb.jpg"/> </a>&nbsp;<a
                    href="https://twitter.com/HMC_CME" title="Visit us on Twitter" target="_blank"><img
                        src="/cms/sites/all/themes/zen/healthmatterscmetheme/img/hmcme/twitter.jpg"/> </a>&nbsp;&nbsp;|&nbsp;&nbsp;<a
                    href="http://healthmatterscme.com/about.aspx">About HealthmattersCME</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a
                    href="http://healthmatterscme.com/council.aspx">CME Council</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a
                    href="http://healthmatterscme.com/contact.aspx">Contact</a></p></div>
    <div id="hmcmenav">
        <ul id="main_nav">
            <li><a href="http://healthmatterscme.com/Default.aspx" class="programs" style="border: one; height: 30px;">Home</a>
            </li>
            <table id="ctl00_dlHeader" cellspacing="0" border="0" style="border-collapse: collapse; float: left;">
                <tr>
                    <td class="mnu_selected1">
                        <li id="userMenu" style='border-bottom: solid 3px #3385d4;' class='Hepatitis'><a
                                    id="ctl00_dlHeader_ctl00_lnkMenu"
                                    href="http://healthmatterscme.com/CmePrograms.aspx?id=1&index=0">Hepatitis</a></li>
                    </td>
                    <td>
                        <li id="userMenu" style='border-bottom: solid 3px #d90707;' class='HIV/AIDS'><a
                                    id="ctl00_dlHeader_ctl01_lnkMenu"
                                    href="http://healthmatterscme.com/CmePrograms.aspx?id=2&index=1">HIV/AIDS</a></li>
                    </td>
                    <td>
                        <li id="userMenu" style='border-bottom: solid 3px #669040;' class='PAH'><a
                                    id="ctl00_dlHeader_ctl02_lnkMenu"
                                    href="http://healthmatterscme.com/CmePrograms.aspx?id=60&index=2">PAH</a></li>
                    </td>
                    <td>
                        <li id="userMenu" style='border-bottom: solid 3px #ffaa00;' class='Psychiatry'><a
                                    id="ctl00_dlHeader_ctl03_lnkMenu"
                                    href="http://healthmatterscme.com/CmePrograms.aspx?id=86&index=3">Psychiatry</a>
                        </li>
                    </td>
                    <td>
                        <li id="userMenu" style='border-bottom: solid 3px #e66f0c;' class='Pulmonary Diseases'><a
                                    id="ctl00_dlHeader_ctl04_lnkMenu"
                                    href="http://healthmatterscme.com/CmePrograms.aspx?id=5&index=4">Pulmonary
                                Diseases</a></li>
                    </td>
                    <td>
                        <li id="userMenu" style='border-bottom: solid 3px #000000;' class='Resources'><a
                                    id="ctl00_dlHeader_ctl05_lnkMenu"
                                    href="http://healthmatterscme.com/CmePrograms.aspx?id=85&index=5">Resources</a></li>
                    </td>
                </tr>
            </table>
        </ul>
        <ul id="minor_nav">
            <li class="twolines"><a href="http://healthmatterscme.com/LivePrograms.aspx" class="live_programs">Live<br/>
                    Programs </a></li>
            <li><a href="http://healthmatterscme.com/Search.aspx" class="search">Search</a></li>
        </ul>
    </div>
</div> <!-- hmcmeheader -->
<div id="page">
    <div id="page-inner"><a name="top" id="navigation-top"></a>
        <div id="skip-to-nav"><a href="#navigation">Skip to Navigation</a></div>
        <div id="header">
            <div id="header-inner" class="clear-block">
                <!-- <div id="logo-title"> <div id="logo"><a href="/cms/../" title="Home" rel="home"><img src="/cms/sites/all/themes/zen/healthmatterscmetheme/img/logo.gif" alt="Home" id="logo-image" /></a></div> </div> -->
                <!-- /#logo-title --> </div>
        </div> <!-- /#header-inner, /#header -->
        <div id="main">
            <div id="main-inner" class="clear-block with-navbar">
                <div id="content">
                    <div id="content-inner">
                        <div id="content-area">
                            <div class='view view-all-activities'>
                                <form action="http://healthmatterscme.realcme.com/cms/allactivities"
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
                                                        src="http://healthmatterscme.realcme.com/cms/../cmsdata/course_icons/icon_405039.jpg"
                                                        alt="icon_405039.jpg" title="icon_405039.jpg" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/></td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/558450">Improving
                                                    CARE of Patients With Sleep Disorders: Etiology-Based Management
                                                    Strategies for ES</a></td>
                                            <td class="view-field view-field-term-node-1-name">Neurology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Phyllis C. Zee, MD, PhD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">28-Oct-14</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                2&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">28-Oct-15</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                405039
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
                                                        src="http://healthmatterscme.realcme.com/cms/../cmsdata/course_icons/icon_495281.jpg"
                                                        alt="icon_495281.jpg" title="icon_495281.jpg" width="48"
                                                        height="48" class="imagefield imagefield-field_icon"/><br/></td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/641637">Improving
                                                    Treatment Outcomes through Appropriate Pharmacotherapeutic Selection
                                                    and Patient Assessment for Readiness to Change</a></td>
                                            <td class="view-field view-field-term-node-1-name">Psychiatry</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Roger D. Weiss, MD, Chair
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">17-Dec-15</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                1&nbsp;AMA<br/>1&nbsp;APA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">17-Dec-16</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                495281
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
                                                        src="http://healthmatterscme.realcme.com/cms/../cmsdata/course_icons/icon_476014.jpg"
                                                        alt="icon_476014.jpg" title="icon_476014.jpg" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/></td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/628092">Optimizing
                                                    Differential Diagnosis and Treatment Strategies for Headaches and
                                                    Migraines</a></td>
                                            <td class="view-field view-field-term-node-1-name">Neurology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Stephen D. Silberstein, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">29-Oct-15</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                1&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">29-Oct-16</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                476014
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
                                                        src="http://healthmatterscme.realcme.com/cms/../cmsdata/course_icons/icon_481659.jpg"
                                                        alt="icon_481659.jpg" title="icon_481659.jpg" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/></td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/629759">Optimizing
                                                    Treatment Selection for Opioid Use Disorder: Tailoring Mat
                                                    Strategies to Improve Patient Outcomes</a></td>
                                            <td class="view-field view-field-term-node-1-name">Psychiatry</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Roger D. Weiss, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">05-Nov-15</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                1&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">05-Nov-16</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                481659
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
                                                        src="http://healthmatterscme.realcme.com/cms/../cmsdata/course_icons/icon_493149.jpg"
                                                        alt="icon_493149.jpg" title="icon_493149.jpg" width="43"
                                                        height="43" class="imagefield imagefield-field_icon"/><br/></td>
                                            <td class="view-field view-field-node-title"><a href="/cms/node/639170">Selecting
                                                    Evidence-Based Pharmacologic Therapy and Designing Multimodal
                                                    Treatment Plans for Migraine and Headache</a></td>
                                            <td class="view-field view-field-term-node-1-name">Neurology</td>
                                            <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                Stephen D. Silberstein, MD
                                            </td>
                                            <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                <span class="date-display-single">10-Dec-15</span></td>
                                            <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                1&nbsp;AMA<br/></td>
                                            <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                <span class="date-display-single"><span
                                                            style="color:#aaa; font-style:italic;">10-Dec-16</span></span>
                                            </td>
                                            <td class="view-field view-field-node-data-field-series-field-series-value">
                                                493149
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
                                        src="/cms/sites/all/themes/zen/healthmatterscmetheme/img/logo-companion.gif"
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
                        <br/><br/> <img src="/cms/sites/all/themes/zen/healthmatterscmetheme/img/footerlogo.png" alt=""
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
</div> <!-- /#page-inner, /#page -->
<div id="hmcmefooter">
    <div class="detail"><p class="left"><span>© Copyright 2009 HealthmattersCME</span>&nbsp;&nbsp;&nbsp;&nbsp;<a
                    href="http://healthmatterscme.com/PrivacyPolicy.aspx">Privacy Policy</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a
                    href="http://healthmatterscme.com/TermsOfUse.aspx">Terms of Use</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a
                    href="http://healthmatterscme.com/SiteMap.aspx">Site Map</a></p>
        <p class="right"><a href="http://www.io-media.com" target="_blank">Site by IOMEDIA</a></p></div>
</div>
</body>
</html>
