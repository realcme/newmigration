<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-us" xml:lang="en-us">
<head><title>SMDC | STAGING</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" href="http://i.realcme.net/cms/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="/cms/sites/all/themes/zen/smdctheme/print.css" type="text/css" media="print"/>
    <style type="text/css" media="all">@import "/cms/../cmsdata/css/127547583cd237502b20255a041657c2.css";</style>
    <link rel="stylesheet" href="/cms/sites/all/themes/zen/smdctheme/smdc_files/newdcsmall.css" type="text/css">
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
    <script src="/cms/sites/all/themes/zen/smdctheme/smdc_files/mainJavaScriptSmall.js" language="javascript"
            type="text/javascript"></script>
</head>
<body class="not-front not-logged-in one-sidebar sidebar-right page-listingall section-listingall">
<div id="page">
    <div id="page-inner">
        <div id="header">
            <div id="header-inner" class="clear-block">
                <div id="logo-title">
                    <div id="logo"><a href="/cms/../" title="Home" rel="home"><img
                                    src="/cms/sites/all/themes/zen/smdctheme/img/logo.png" alt="Home" id="logo-image"/></a>
                    </div>
                </div> <!-- /#logo-title --> </div>
        </div> <!-- /#header-inner, /#header -->
        <div id="topNavBar">
            <div><img src="/cms/sites/all/themes/zen/smdctheme/smdc_files/searchnew.gif"
                      style="position: absolute; left: 15px; top: 15px;" width="44" height="9">
                <div id="searchform"
                     style="position: absolute; left: 0px; width: 250px; top: 0px; height: 26px; z-index: 1;">
                    <form name="form0" action="http://search.smdc.org/search" method="get">
                        <table width="300">
                            <tbody>
                            <tr valign="middle">
                                <td width="200"><input name="q" id="searchField" type="text"> <input name="site"
                                                                                                     value="default_collection"
                                                                                                     type="hidden">
                                    <input name="client" value="default_frontend" type="hidden"> <input
                                            name="proxystylesheet" value="default_frontend" type="hidden"> <input
                                            name="output" value="xml_no_dtd" type="hidden"></td>
                                <td width="100" align="center"><input id="goButton" name="submit"
                                                                      src="/cms/sites/all/themes/zen/smdctheme/smdc_files/goButton21px.gif"
                                                                      onclick="doSearch();" type="image" align="middle">
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
                <img src="/cms/sites/all/themes/zen/smdctheme/smdc_files/contactUs67by9.gif"
                     onclick="window.location='http://www.duluthclinic.org/contactus/contactus.asp'"
                     style="position: absolute; left: 275px; top: 14px;" width="67" border="0" height="9">
                <div id="topRightNav"
                     style="position: absolute; right: 0px; width: 512px; top: 35px; height: 28px; z-index: 1;">
                    <table style="position: relative; top: 0px; left: 0px; z-index: 1;" width="512" border="0"
                           cellpadding="0" cellspacing="0">
                        <tbody>
                        <tr>
                            <td style="z-index: 1;" class="normalTopRightNav" width="19" height="28"></td>
                            <td class="normalTopRightNav"
                                onmouseover="if (this.className!='highlightedTopRightNav') {this.className='hoverTopRightNav'; this.previousSibling.className='hoverTopRightNav';}"
                                onmouseout="if (this.className !='highlightedTopRightNav') {this.className='normalTopRightNav'; this.previousSibling.className='normalTopRightNav';}"
                                onclick="window.location='http://www.duluthclinic.org/specialtycenters/specialtycenters.htm';">
                                Specialty Centers
                            </td>
                            <td class="normalTopRightNav">|</td>
                            <td class="normalTopRightNav"
                                onmouseover="if (this.className!='highlightedTopRightNav') {this.className='hoverTopRightNav'; this.previousSibling.className='hoverTopRightNav';}"
                                onmouseout="if (this.className !='highlightedTopRightNav') {this.className='normalTopRightNav'; this.previousSibling.className='normalTopRightNav';}"
                                onclick=" window.location='http://www.duluthclinic.org/otherspecialties/otherspecialties.htm';">
                                Medical Specialties
                            </td>
                            <td class="normalTopRightNav">|</td>
                            <td class="normalTopRightNav"
                                onmouseover="if (this.className!='highlightedTopRightNav') {this.className='hoverTopRightNav'; this.previousSibling.className='hoverTopRightNav';}"
                                onmouseout="if (this.className !='highlightedTopRightNav') {this.className='normalTopRightNav'; this.previousSibling.className='normalTopRightNav';}"
                                onclick="window.location='http://www.duluthclinic.org/cliniclocations/cliniclocations.htm';">
                                Clinic Locations
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <table id="topMenu" border="0" cellpadding="0" cellspacing="0">
                    <tbody>
                    <tr>
                        <td onmouseover="highlightTopTopRight(this);" onmouseout="unhighlightTopTopRight(this);"
                            onclick="window.open('http://www.smdc.org/ouraffiliates/ouraffiliates.htm');" width="105">
                            Our Affiliates
                        </td>
                        <td style="color: rgb(255, 255, 255); font-weight: normal; cursor: default;"
                            onmouseover="highlightTopTopRight(this);" onmouseout="unhighlightTopTopRight(this);"
                            onclick="window.open('http://www.smdc.org/patientresources/makinganappointment.htm');"
                            width="140"> Patient Resources
                        </td>
                        <td style="color: rgb(255, 255, 255); font-weight: normal; cursor: default;"
                            onmouseover="highlightTopTopRight(this);" onmouseout="unhighlightTopTopRight(this);"
                            onclick="window.open('http://www.smdc.org/employment/employment.htm');" width="95">
                            Employment
                        </td>
                        <td style="color: rgb(255, 255, 255); font-weight: normal; cursor: default;"
                            onmouseover="highlightTopTopRight(this);" onmouseout="unhighlightTopTopRight(this);"
                            onclick="window.open('http://www.smdc.org/volunteering/volunteering.htm');" width="99">
                            Volunteering
                        </td>
                        <td style="color: rgb(255, 255, 255); font-weight: normal; cursor: default;"
                            onmouseover="highlightTopTopRight(this);" onmouseout="unhighlightTopTopRight(this);"
                            onclick="window.open('http://www.smdc.org/foundationjoint/jointfoundations.htm');"
                            width="146"> Foundation/Giving
                        </td>
                    </tr>
                    </tbody>
                </table>
                <div id="topLeftNav"
                     style="position: absolute; left: 3px; top: 35px; height: 28px; width: 462px; z-index: 4;">
                    <div id="backgroundForTopLeft"
                         style="position: absolute; left: 0px; top: 0px; height: 28px; width: 462px; z-index: 2;">
                        <table width="462" border="0" cellpadding="0" cellspacing="0">
                            <tbody>
                            <tr>
                                <td class="leftPurpleTabRounded" style="width: 18px; height: 28px;"></td>
                                <td class="topPurpleMiddle" width="97"></td>
                                <td width="1"></td>
                                <td class="topBlueMiddle" width="95"></td>
                                <td width="1"></td>
                                <td class="topBlueMiddle" width="113"></td>
                                <td width="1"></td>
                                <td class="topBlueMiddle" width="120"></td>
                                <td class="blueTabRightRounded" width="19"><img
                                            src="/cms/sites/all/themes/zen/smdctheme/smdc_files/blueTabRight19by28.gif">
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div id="topLeftText"
                         style="font-family: Arial,Helvetica,sans-serif; font-size: 11px; font-weight: bold; color: rgb(255, 255, 255); z-index: 5; position: absolute; top: 0px; left: 0px; width: 462px; height: 28px;">
                        <table width="462" border="0" cellpadding="0" cellspacing="0">
                            <tbody>
                            <tr>
                                <td style="text-align: left; padding-left: 22px; color: rgb(255, 255, 255); cursor: default;"
                                    onmouseover="highlightTopLeftNav(this);" onmouseout="unhighlightTopLeftNav(this);"
                                    onclick="window.location='http://www.duluthclinic.org/findaphysician/findaphysician.asp';"
                                    width="115" align="center" height="28"><img
                                            src="/cms/sites/all/themes/zen/smdctheme/smdc_files/yellowCircleBlueArrowPurple13by13.gif"
                                            style="position: absolute; top: 8px; left: 6px; visibility: visible;"
                                            width="13" height="13"><img
                                            src="/cms/sites/all/themes/zen/smdctheme/smdc_files/yellowCircleCyanArrowPurple13by13.gif"
                                            style="visibility: hidden; position: absolute; top: 8px; left: 6px;"
                                            width="13" height="13">Find a Physician
                                </td>
                                <td width="1"></td>
                                <td style="text-align: left; padding-left: 23px;"
                                    onmouseover="highlightTopLeftNav(this);" onmouseout="unhighlightTopLeftNav(this);"
                                    onclick="window.location='http://www.duluthclinic.org/urgentcare/urgentcare.htm';"
                                    width="95" align="center" height="28"><img
                                            src="/cms/sites/all/themes/zen/smdctheme/smdc_files/yellowCircleBlueArrowBlue13by13.gif"
                                            style="position: absolute; top: 8px; left: 120px;" width="13"
                                            height="13"><img
                                            src="/cms/sites/all/themes/zen/smdctheme/smdc_files/yellowCircleCyanArrowBlue13by13.gif"
                                            style="visibility: hidden; position: absolute; top: 8px; left: 120px;"
                                            width="13" height="13">Urgent Care
                                </td>
                                <td width="1"></td>
                                <td style="text-align: left; padding-left: 23px; color: rgb(255, 255, 255); cursor: default;"
                                    onmouseover="highlightTopLeftNav(this);" onmouseout="unhighlightTopLeftNav(this);"
                                    onclick="window.open('http://www.smdc.org/nurseonline/nurseonline.htm');"
                                    width="113" align="center" height="28"><img
                                            src="/cms/sites/all/themes/zen/smdctheme/smdc_files/yellowCircleBlueArrowBlue13by13.gif"
                                            style="position: absolute; top: 8px; left: 216px; visibility: visible;"
                                            width="13" height="13"><img
                                            src="/cms/sites/all/themes/zen/smdctheme/smdc_files/yellowCircleCyanArrowBlue13by13.gif"
                                            style="visibility: hidden; position: absolute; top: 8px; left: 216px;"
                                            width="13" height="13">Nurse On-Line
                                </td>
                                <td width="1"></td>
                                <td style="text-align: left; padding-left: 22px; color: rgb(255, 255, 255); cursor: default;"
                                    onmouseover="highlightTopLeftNav(this);" onmouseout="unhighlightTopLeftNav(this);"
                                    onclick="window.location='http://www.duluthclinic.org/rxrefills/prescriptionrefills.htm';"
                                    width="139" align="center" height="28"><img
                                            src="/cms/sites/all/themes/zen/smdctheme/smdc_files/yellowCircleBlueArrowBlue13by13.gif"
                                            style="position: absolute; top: 8px; left: 329px; visibility: visible;"
                                            width="13" height="13"><img
                                            src="/cms/sites/all/themes/zen/smdctheme/smdc_files/yellowCircleCyanArrowBlue13by13.gif"
                                            style="visibility: hidden; position: absolute; top: 8px; left: 329px;"
                                            width="13" height="13">Pharmacy/Rx Refills
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div id="main">
            <div id="main-inner" class="clear-block with-navbar">
                <div id="content">
                    <div id="content-inner">
                        <div id="content-header"></div> <!-- /#content-header -->
                        <div id="content-area">
                            <div class='view view-listing-all'>
                                <div class='listing-tabs'>
                                    <form action="http://smdc.realcme.net/cms/listingall" accept-charset="UTF-8"
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
                                <div class='view-empty view-empty-listing-all'><p>There are no available activities
                                        yet.</p></div>
                            </div>
                        </div> <!-- --> </div>
                </div> <!-- /#content-inner, /#content -->
                <div id="sidebar-right">
                    <div id="sidebar-right-inner">
                        <div id="altcontainer2">
                            <div id="companionlogo"><img
                                        src="/cms/sites/all/themes/zen/smdctheme/img/logo-companion.gif"
                                        id="logo-companion" alt="CMECompanion" class=""/></div>
                            <!-- Accordion Menu Start -->
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
                        <br/><br/> <img src="/cms/sites/all/themes/zen/smdctheme/img/footerlogo.png" alt=""
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
        <div id="smdc_footer" class="smdc_footer">
            <table width="100%" border="0" cellpadding="0" cellspacing="0">
                <tbody>
                <tr>
                    <td width="30%" align="left"><a href="http://www.duluthclinic.org/webprivacy/webprivacy.htm">Privacy
                            Statement</a>&nbsp;|&nbsp;<a
                                href="http://www.duluthclinic.org/termsofusage/termsofusage.htm">Terms of Usage</a></td>
                    <td width="70%" align="right">400 East 3rd Street, Duluth, MN 55805 &#8226;
                        218&#8211;786&#8211;8364
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div> <!-- /#page-inner, /#page -->  
