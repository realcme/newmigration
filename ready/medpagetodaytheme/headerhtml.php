<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="https://www.w3.org/1999/xhtml" lang="en-us" xml:lang="en-us">
<head><title>MedPage Today | STAGING</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" href="http://i.realcme.net/cms/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="/cms/sites/all/themes/zen/medpagetodaytheme/print.css" type="text/css" media="print"/>
    <style type="text/css" media="all">@import "/cms/../cmsdata/css/43d64896d8cf1f6b7216592e0ae78d30.css";</style>
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
    <script type="text/javascript"> $(document).ready(function () {
            $("#registration_link").unbind();
            $("#registration_link").attr("href", "https://api.medpagetoday.com/RealCME/Login?m=1&activityid=");
            $("#login_link").unbind();
            $("#login_link").attr("href", "https://api.medpagetoday.com/RealCME/Login?m=1&activityid=");
            $(".login_link_activity").unbind();
            $(".login_link_activity").attr("href", "https://api.medpagetoday.com/RealCME/Login?m=1&activityid=");
            $("#logout_link").unbind().click(function () {
                $.ajax({
                    url: '/cms/logout', complete: function (data) {
                        window.location = 'https://www.medpagetoday.com/auth/logout?site=realcme&branduserid=xxxx';
                    }
                });
            });
            $("#logout_link").removeAttr("href");
            $(".profile-item a").unbind().removeAttr('href').click(function openepoccmewindow() {
                var windowForepoccme = window.open("https://api.medpagetoday.com/profile.do", "epoccmewin", "locationbar=0,menubar=0,status=0,resizable=1,toolbar=0,scrollbars=1,top=0,left=650,height=590,width=580");
                windowForepoccme.focus();
            });
        }); </script>
    <script id="mptHcp" src="http://clf1.medpagetoday.com/assets/scripts/js/hcp/uc.js" data-net-id="r582f4080caa2d"
            async></script>
</head>
<body class="front not-logged-in one-sidebar sidebar-right">
<div class="hdr-wrapper">
    <div class="innerHeader"></div>
    <div id="mptNavBar" class="mptHdr-module">
        <div class="mptLogo"><a href="https://www.medpagetoday.com/CME" class="logowrapp">
                <!--[if (gte IE 9)|!(IE)]><!--> <img class=" "
                                                     src="/cms/sites/all/themes/zen/medpagetodaytheme/img/MPT_logo.png"
                                                     alt="Medpage Today"
                                                     style="max-height: 40px; margin-top: -8px; width: 215px;">
                <!--<![endif]--> <!--[if lt IE 9]><img class="mptNav_logo-png"
                                                       src="https://clf1.medpagetoday.com/assets/images/logo_desktop.png"
                                                       alt="Medpage Today"/><![endif]--> </a></div>
    </div>
</div>
<div id="page">
    <div id="page-inner"><a name="top" id="navigation-top"></a>
        <div id="skip-to-nav"><a href="#navigation">Skip to Navigation</a></div>
        <div id="header">
            <div id="header-inner" class="clear-block">
                <!-- <div id="logo-title"> <div id="logo"><a href="/cms/../" title="Home" rel="home"><img src="/cms/sites/all/themes/zen/medpagetodaytheme/img/logo.gif" alt="Home" id="logo-image" /></a></div> </div> -->
                <!-- /#logo-title --> </div>
        </div> <!-- /#header-inner, /#header -->
        <div id="main">
            <div id="main-inner" class="clear-block with-navbar">
                <div id="content">
                    <div id="content-inner">
                        <div id="content-area">
                            <div id="displaypromotions">
                                <div id="displaypromotions_header" style="display: none;">FEATURED ACTIVITIES</div>
                                <div id="displaypromotions_nid" style="display: none;">0</div><!-- BEGIN PROMO -->
                                <div id="related-activities">
                                    <div id="related-activities-title" class="related-activities-title">FEATURED
                                        ACTIVITIES
                                    </div>
                                    <div class="related-activities-left testing">
                                        <div class="node">
                                            <div class="node-inner">
                                                <div class="rcmcontent">
                                                    <div class="related-patient-bg"
                                                         style="background-image: url(/cms/sites/all/modules/custom/cmecoursepromotion/img/related-patient-bg.gif); ">
                                                        <img src="/cms/../cmsdata/course_icons/icon_kayla_0.gif"
                                                             alt="kayla"
                                                             style="width: 43px; height: 43px; border: 0; margin: 0">
                                                    </div>
                                                    <div class="activity-subject">
                                                        <div class="activity-title activity-title-display"><span
                                                                    class="promo-link"><a id="lt-472909"
                                                                                          href="/cms/node/472909">Kayla Visit 1&#8482;: A 28-year-old Woman Presenting with Vision...</a></span>
                                                        </div>
                                                        <div class="certified-icon"
                                                             style="background-image: url(/cms/sites/all/modules/custom/cmecoursepromotion/img/CME-certified.gif); "></div>
                                                        <div class="certified-text">Neurology</div>
                                                    </div>
                                                    <div class="activity-info">&ldquo;I&rsquo;m having some vision
                                                        problems. My doctor sent me to you.&rdquo;
                                                    </div>
                                                    <div style="clear: both;"></div>
                                                    <div class="next-steps-related">
                                                        <div class="next-steps-icon"></div>
                                                        <div class="schedule-activity"></div>
                                                        <div class="next-steps-divider"></div>
                                                        <div class="next-steps-icon"><img
                                                                    src="/cms/sites/all/modules/custom/cmecoursepromotion/img/proceed-activity.gif"
                                                                    alt="Proceed To Activity"
                                                                    style="width: 29px; height: 29px; border: 0; margin: 0">
                                                        </div>
                                                        <div class="proceed-activity"><span class="promo-link"><a
                                                                        id="lp-472909" href="/cms/node/472909">Proceed To Activity</a></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- BOF #8380 and #8473, CMECompanion float glitch -->
                                        <script type="text/javascript"> $(function () {
                                                if ($('body').hasClass('node-type-course') && !$('body').hasClass('no-sidebars')) {
                                                    if ($('#main-inner').find('#sidebar-right').length > 0) {
                                                        $('#page-inner').addClass('clear-block');
                                                    } else {
                                                        $('#main-inner').removeClass('clear-block');
                                                        $('#page-inner, #page-main').addClass('clear-block');
                                                        if ($('#sidebar-right').offset().top !== 187) {
                                                            $('#sidebar-right').css('margin-top', 25);
                                                        }
                                                    }
                                                }
                                            }); </script><!-- EOF #8380 and #8473 --></div>
                                    <div class="related-activities-right testing">
                                        <div class="node">
                                            <div class="node-inner">
                                                <div class="rcmcontent">
                                                    <div class="related-patient-bg"
                                                         style="background-image: url(/cms/sites/all/modules/custom/cmecoursepromotion/img/related-patient-bg.gif); ">
                                                        <img src="/cms/../cmsdata/course_icons/17298607thumbnail.jpg"
                                                             alt="354340"
                                                             style="width: 43px; height: 43px; border: 0; margin: 0">
                                                    </div>
                                                    <div class="activity-subject">
                                                        <div class="activity-title activity-title-display"><span
                                                                    class="promo-link"><a id="lt-472916"
                                                                                          href="/cms/node/472916">Managing Multiple Skin Lesions Simultaneously</a></span>
                                                        </div>
                                                        <div class="certified-icon"
                                                             style="background-image: url(/cms/sites/all/modules/custom/cmecoursepromotion/img/CME-certified.gif); "></div>
                                                        <div class="certified-text">Oncology/ Hematology</div>
                                                    </div>
                                                    <div class="activity-info">Managing Multiple Skin Lesions
                                                        Simultaneously
                                                    </div>
                                                    <div style="clear: both;"></div>
                                                    <div class="next-steps-related">
                                                        <div class="next-steps-icon"></div>
                                                        <div class="schedule-activity"></div>
                                                        <div class="next-steps-divider"></div>
                                                        <div class="next-steps-icon"><img
                                                                    src="/cms/sites/all/modules/custom/cmecoursepromotion/img/proceed-activity.gif"
                                                                    alt="Proceed To Activity"
                                                                    style="width: 29px; height: 29px; border: 0; margin: 0">
                                                        </div>
                                                        <div class="proceed-activity"><span class="promo-link"><a
                                                                        id="lp-472916" href="/cms/node/472916">Proceed To Activity</a></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- BOF #8380 and #8473, CMECompanion float glitch -->
                                        <script type="text/javascript"> $(function () {
                                                if ($('body').hasClass('node-type-course') && !$('body').hasClass('no-sidebars')) {
                                                    if ($('#main-inner').find('#sidebar-right').length > 0) {
                                                        $('#page-inner').addClass('clear-block');
                                                    } else {
                                                        $('#main-inner').removeClass('clear-block');
                                                        $('#page-inner, #page-main').addClass('clear-block');
                                                        if ($('#sidebar-right').offset().top !== 187) {
                                                            $('#sidebar-right').css('margin-top', 25);
                                                        }
                                                    }
                                                }
                                            }); </script><!-- EOF #8380 and #8473 --></div>
                                    <div style="clear: both;"></div>
                                </div> <!-- END PROMO -->
                                <div style="clear: both;"></div>
                            </div>
                            <div class='listing-featured'>
                                <div class='listing-tabs'>
                                    <form action="http://medpagetoday.realcme.net/cms/listingall" accept-charset="UTF-8"
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
                                                                <div class='first listing-tab selected'> Featured</div>
                                                            </a> <a href='/cms/listingcurriculum'>
                                                                <div class='listing-tab'> Curricula</div>
                                                            </a> <a href='/cms/listingall'>
                                                                <div class='listing-tab'> All</div>
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
                                <div class='listing-featured-table'>
                                    <table id="listing-featured" align="center">
                                        <thead>
                                        <tr>
                                            <th></th>
                                            <th>Title</th>
                                            <th>Credits</th>
                                            <th>Expiration date</th>
                                            <th>Topic</th>
                                            <th>Launch Date</th>
                                            <th>Statement</th>
                                            <th>Faculty</th>
                                            <th>Relevant Terms</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="odd">
                                            <td valign="top" style="font-weight: normal;"
                                                class="view-field-node-data-field-icon-field-icon-fid"><img
                                                        src="http://medpagetoday.realcme.net/cms/../cmsdata/course_icons/icon_kayla_0.gif"
                                                        alt="icon_kayla.gif" title="icon_kayla.gif" width="43"
                                                        height="43"/></td>
                                            <td valign="top" style="font-weight: normal;" class="view-field-node-title">
                                                <a href="/cms/node/472909?utm_source=activitylist&amp;utm_medium=web&amp;utm_content=feature&amp;utm_campaign=">Kayla
                                                    Visit 1&amp;#8482;: A 28-year-old Woman Presenting with Vision
                                                    Problems That May Indicate Multiple Sclerosis</a><br/>Neurology
                                            </td>
                                            <td valign="top" style="font-weight: normal;text-align: center"
                                                class="view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td valign="top" style="color:#aaa; font-style:italic;"
                                                class="view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                06-Jan-15
                                            </td>
                                            <td class="view-field-term-node-1-name">Neurology</td>
                                            <td class="view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                07-Jan-14
                                            </td>
                                            <td class="view-field-node-data-field-patient-statement-field-patient-statement-value">
                                                &ldquo;I&rsquo;m having some vision problems. My doctor sent me to you.&rdquo;
                                            </td>
                                            <td class="view-field-node-data-field-course-desc-field-course-desc-value"></td>
                                            <td class="view-field-node-data-field-faculty-field-faculty-value">Ben
                                                Thrower, MD
                                            </td>
                                            <td class="view-field-term-node-3-name">Multiple Sclerosis</td>
                                            <td class="view-field-node-data-field-activity-group-field-activity-group-nid">
                                                461513
                                            </td>
                                            <td class="view-field-content-type-activity-group-field-group-name-value">
                                                Patient-Centered Approaches in the Continuum of Multiple Sclerosis Care
                                            </td>
                                            <td class="related-activities"></td>
                                        </tr>
                                        <tr class="even">
                                            <td valign="top" style="font-weight: normal;"
                                                class="view-field-node-data-field-icon-field-icon-fid"><img
                                                        src="http://medpagetoday.realcme.net/cms/../cmsdata/course_icons/17298607thumbnail.jpg"
                                                        alt="17298607thumbnail.jpg" title="17298607thumbnail.jpg"
                                                        width="43" height="43"/></td>
                                            <td valign="top" style="font-weight: normal;" class="view-field-node-title">
                                                <a href="/cms/node/472916?utm_source=activitylist&amp;utm_medium=web&amp;utm_content=feature&amp;utm_campaign=">Managing
                                                    Multiple Skin Lesions Simultaneously</a><br/>Oncology/ Hematology
                                            </td>
                                            <td valign="top" style="font-weight: normal;text-align: center"
                                                class="view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.75&nbsp;AMA<br/>0.75&nbsp;ANCC<br/>0.75&nbsp;CA-BRN<br/></td>
                                            <td valign="top" style="color:#aaa; font-style:italic;"
                                                class="view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                07-Jan-15
                                            </td>
                                            <td class="view-field-term-node-1-name">Oncology/ Hematology</td>
                                            <td class="view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                07-Jan-14
                                            </td>
                                            <td class="view-field-node-data-field-patient-statement-field-patient-statement-value"></td>
                                            <td class="view-field-node-data-field-course-desc-field-course-desc-value"></td>
                                            <td class="view-field-node-data-field-faculty-field-faculty-value">Daniel
                                                Berg, MD
                                            </td>
                                            <td class="view-field-term-node-3-name">Basal Cell Carcinoma</td>
                                            <td class="view-field-node-data-field-activity-group-field-activity-group-nid">
                                                472922
                                            </td>
                                            <td class="view-field-content-type-activity-group-field-group-name-value">
                                                Diagnosis and Treatment of Basal Cell Carcinomas
                                            </td>
                                            <td class="related-activities"></td>
                                        </tr>
                                        <tr class="odd">
                                            <td valign="top" style="font-weight: normal;"
                                                class="view-field-node-data-field-icon-field-icon-fid"><img
                                                        src="http://medpagetoday.realcme.net/cms/../cmsdata/course_icons/icon__232.png"
                                                        alt="icon_.png" title="icon_.png" width="43" height="43"/></td>
                                            <td valign="top" style="font-weight: normal;" class="view-field-node-title">
                                                <a href="/cms/node/475796?utm_source=activitylist&amp;utm_medium=web&amp;utm_content=feature&amp;utm_campaign=">Maximizing
                                                    Therapeutic Safety and Efficacy in IBD: A Treat-to-Target
                                                    Approach</a><br/>Gastroenterology
                                            </td>
                                            <td valign="top" style="font-weight: normal;text-align: center"
                                                class="view-field-node-data-field-all-credits-field-all-credits-value"></td>
                                            <td valign="top" style="color:#aaa; font-style:italic;"
                                                class="view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                01-Jan-70
                                            </td>
                                            <td class="view-field-term-node-1-name">Gastroenterology</td>
                                            <td class="view-field-node-data-field-active-begin-date-field-active-begin-date-value"></td>
                                            <td class="view-field-node-data-field-patient-statement-field-patient-statement-value"></td>
                                            <td class="view-field-node-data-field-course-desc-field-course-desc-value"></td>
                                            <td class="view-field-node-data-field-faculty-field-faculty-value"></td>
                                            <td class="view-field-term-node-3-name"></td>
                                            <td class="view-field-node-data-field-activity-group-field-activity-group-nid">
                                                475601
                                            </td>
                                            <td class="view-field-content-type-activity-group-field-group-name-value">
                                                Maximizing Therapeutic Safety and Efficacy in IBD: A Treat-to-Target
                                                Approach
                                            </td>
                                            <td class="related-activities"></td>
                                        </tr>
                                        <tr class="even">
                                            <td valign="top" style="font-weight: normal;"
                                                class="view-field-node-data-field-icon-field-icon-fid"><img
                                                        src="http://medpagetoday.realcme.net/cms/../cmsdata/course_icons/icon__155.png"
                                                        alt="icon_.png" title="icon_.png" width="43" height="43"/></td>
                                            <td valign="top" style="font-weight: normal;" class="view-field-node-title">
                                                <a href="/cms/node/466114?utm_source=activitylist&amp;utm_medium=web&amp;utm_content=feature&amp;utm_campaign=">Optimizing
                                                    Patient Outcomes Through Stem Cell Mobilization</a><br/>Oncology/
                                                Hematology
                                            </td>
                                            <td valign="top" style="font-weight: normal;text-align: center"
                                                class="view-field-node-data-field-all-credits-field-all-credits-value">1&nbsp;AMA<br/>
                                            </td>
                                            <td valign="top" style="color:#aaa; font-style:italic;"
                                                class="view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                19-Dec-14
                                            </td>
                                            <td class="view-field-term-node-1-name">Oncology/ Hematology</td>
                                            <td class="view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                20-Dec-13
                                            </td>
                                            <td class="view-field-node-data-field-patient-statement-field-patient-statement-value"></td>
                                            <td class="view-field-node-data-field-course-desc-field-course-desc-value"></td>
                                            <td class="view-field-node-data-field-faculty-field-faculty-value">William
                                                I. Bensinger, MD
                                            </td>
                                            <td class="view-field-term-node-3-name">Hematopoietic Stem Cell
                                                Transplantation, Multiple Myeloma, Non-Hodgkin's Lymphoma, Stem Cell
                                                Mobilization
                                            </td>
                                            <td class="view-field-node-data-field-activity-group-field-activity-group-nid">
                                                466116
                                            </td>
                                            <td class="view-field-content-type-activity-group-field-group-name-value">
                                                Successful Stem Cell Mobilization Strategy
                                            </td>
                                            <td class="related-activities"></td>
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
                                        src="/cms/sites/all/themes/zen/medpagetodaytheme/img/logo-companion.gif"
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
                        <br/><br/> <img src="/cms/sites/all/themes/zen/medpagetodaytheme/img/footerlogo.png" alt=""
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
</div> <!-- /#page-inner, /#page --> <!-- JIRA-313 -->
<script id="mptHcp" src="http://clf1.medpagetoday.com/assets/scripts/js/hcp/uc.js" data-net-id="r582f4080caa2d"
        async></script> <!-- -->  
