<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-us" xml:lang="en-us">
<head><title>Cedars-Sinai</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" href="http://i.realcme.com/cms/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="/cms/sites/all/themes/zen/cedars-sinaitheme/print.css" type="text/css" media="print"/>
    <style type="text/css" media="all">@import "/cms/../cmsdata/css/66a12468d43437f9e3c071db47126fac.css";</style>
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
<div id="csmc-shroud">
    <div id="csmc-wrap">
        <div id="csmc-top">
            <div id="csmc-branding">
                <div id="csmc-logo"><a href="http://cedars-sinai.edu/index.aspx">Cedars-Sinai Medical Center</a></div>
                <ul id="csmc-main_nav">
                    <li id="csmc-patients"><a class="active" href="http://cedars-sinai.edu/Patients/">Patients</a></li>
                    <li id="csmc-professionals"><a class="active" href="http://cedars-sinai.edu/Medical-Professionals/">Medical
                            Professionals</a></li>
                    <li id="csmc-research"><a class="active" href="http://cedars-sinai.edu/Research-and-Education/">Research
                            &amp; Education</a></li>
                </ul>
                <div id="csmc-find">
                    <ul id="csmc-locate">
                        <li id="staff"><a href="http://cedars-sinai.edu/applications/mddb/">Medical Staff Directory</a>
                        </li>
                        <li id="maps"><a
                                    href="http://cedars-sinai.edu/Patients/Patient-and-Visitor-Resources/Getting-Here/">Maps</a>
                        </li>
                        <li id="contact"><a href="http://cedars-sinai.edu/contact-cedars-sinai.aspx">Contact Us</a></li>
                        <li id="support"><a href="http://cedars-sinai.edu/Giving/">Giving</a></li>
                    </ul>
                </div>
                <div id="csmc-search">
                    <form name="gs" id="suggestion_form" action="http://search.csmc.edu/search" method="get"><input
                                type="hidden" name="entqr" value="0"> <input type="hidden" name="ud" value="1"> <input
                                type="hidden" name="site" value="default_collection"> <input type="hidden" name="output"
                                                                                             value="xml_no_dtd"> <input
                                type="hidden" name="client" value="default_frontend"> <input type="hidden"
                                                                                             name="proxystylesheet"
                                                                                             value="default_frontend">
                        <input type="hidden" name="ie" value="UTF-8"> <input type="hidden" name="oe" value="UTF-8">
                        <input type="hidden" name="sort" value="date:D:L:d1"> <input type="text" name="q" class="query"
                                                                                     value="Search"
                                                                                     onfocus="this.value=(this.value=='Search')? '' : this.value;"
                                                                                     autocomplete="off"
                                                                                     onkeyup="ss_handleKey(event)"/>
                        <input type="submit" name="btnG" id="submitbutton" value="Go"/></form>
                </div>
                <span id="csmc-sizer"> <a class="reset" href="#" title="Reset default text size">A</a> <a
                            class="fontmed" href="#" title="Medium text size">A</a> <a class="fontmax" href="#"
                                                                                       title="Largest text size">A</a> </span>
            </div> <!-- csmc-branding -->
            <ul id="csmc-breadcrumb" class="orange">
                <li><a href="http://cedars-sinai.edu/index.aspx">Home</a></li>
                <li><a href="http://cedars-sinai.edu/Medical-Professionals/">Medical Professionals</a></li>
                <li>Continuing Medical Education</li>
            </ul>
        </div> <!-- csmc-top -->
        <div id="page">
            <div id="page-inner"><a name="top" id="navigation-top"></a>
                <div id="skip-to-nav"><a href="#navigation">Skip to Navigation</a></div>
                <div id="header">
                    <div id="header-inner" class="clear-block">
                        <!-- <div id="logo-title"> <div id="logo"><a href="/cms/../" title="Home" rel="home"><img src="/cms/sites/all/themes/zen/cedars-sinaitheme/img/logo.gif" alt="Home" id="logo-image" /></a></div> </div> -->
                        <!-- /#logo-title --> </div>
                </div> <!-- /#header-inner, /#header -->
                <div id="main">
                    <div id="main-inner" class="clear-block with-navbar">
                        <div id="content">
                            <div id="content-inner">
                                <div id="content-area">
                                    <div class='view view-all-activities'>
                                        <form action="http://cedars-sinai.realcme.com/cms/allactivities"
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
                                                                src="http://cedars-sinai.realcme.com/cms/../cmsdata/course_icons/icon__5.gif"
                                                                alt="icon_.gif" title="icon_.gif" width="43" height="43"
                                                                class="imagefield imagefield-field_icon"/><br/></td>
                                                    <td class="view-field view-field-node-title"><a
                                                                href="/cms/node/296277">Localized and Advanced
                                                            ER-Positive Breast Cancer</a></td>
                                                    <td class="view-field view-field-term-node-1-name">
                                                        Hematology-Oncology
                                                    </td>
                                                    <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                        William Audeh, MD
                                                    </td>
                                                    <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                        <span class="date-display-single">14-Nov-12</span></td>
                                                    <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                        1&nbsp;AMA<br/></td>
                                                    <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                        <span class="date-display-single"><span
                                                                    style="color:#aaa; font-style:italic;">13-Nov-13</span></span>
                                                    </td>
                                                    <td class="view-field view-field-node-data-field-series-field-series-value">
                                                        261560
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
                                                                src="http://cedars-sinai.realcme.com/cms/../cmsdata/course_icons/icon__8.gif"
                                                                alt="icon_.gif" title="icon_.gif" width="43" height="43"
                                                                class="imagefield imagefield-field_icon"/><br/></td>
                                                    <td class="view-field view-field-node-title"><a
                                                                href="/cms/node/331164">The Cedars-Sinai Virtual Tumor
                                                            Board Series: Chronic Myelogenous Leukemia</a></td>
                                                    <td class="view-field view-field-term-node-1-name">
                                                        Hematology-Oncology
                                                    </td>
                                                    <td class="view-field view-field-node-data-field-faculty-field-faculty-value">
                                                        Michael Lill, MD
                                                    </td>
                                                    <td class="view-field view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                        <span class="date-display-single">18-Dec-12</span></td>
                                                    <td class="view-field view-field-node-data-field-all-credits-field-all-credits-value">
                                                        1&nbsp;AMA<br/></td>
                                                    <td class="view-field view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                        <span class="date-display-single"><span
                                                                    style="color:#aaa; font-style:italic;">17-Dec-13</span></span>
                                                    </td>
                                                    <td class="view-field view-field-node-data-field-series-field-series-value">
                                                        264647
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
                                                src="/cms/sites/all/themes/zen/cedars-sinaitheme/img/logo-companion.gif"
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
                                <br/><br/> <img src="/cms/sites/all/themes/zen/cedars-sinaitheme/img/footerlogo.png"
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
        </div> <!-- /#page-inner, /#page -->
        <div id="csmc-bottom">
            <div id="csmc-site_info">
                <ul id="csmc-sub_nav">
                    <li><a href="http://cedars-sinai.edu/About-Us/" rel="nofollow">About Us</a></li>
                    <li><a href="http://cedars-sinai.edu/About-Us/News/" rel="nofollow">News</a></li>
                    <li><a href="http://cedars-sinai.edu/Careers/" rel="nofollow">Career Opportunities at
                            Cedars-Sinai</a></li>
                    <li><a href="http://cedars-sinai.edu/Community-Benefit/" rel="nofollow">Community Benefit</a></li>
                    <li><a href="http://cedars-sinai.edu/International-Patients/" rel="nofollow">International
                            Patients</a></li>
                </ul>
                <ul id="csmc-legal">
                    <li><a href="http://cedars-sinai.edu/Website-Terms-and-Conditions.aspx" rel="nofollow">Website Terms
                            and Conditions</a></li>
                    <li><a href="http://cedars-sinai.edu/Privacy-Policy.aspx" rel="nofollow">Privacy Policy</a></li>
                    <li><a href="/http://cedars-sinai.edustaff-link.html" rel="nofollow">Staff Link</a></li>
                    <li><a href="http://cedars-sinai.edu/sitemap.html" rel="nofollow">Sitemap</a></li>
                </ul>
                <div id="csmc-copyright">2012 &copy; Cedars-Sinai. All Rights Reserved.<br/>a 501(c)(3) non-profit
                    organization
                </div>
            </div>
        </div> <!-- /#csmc-bottom --> </div>
</div><!-- /#csmc-wrap,/#csmc-shroud --> </body>
</html>
