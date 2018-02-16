<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-us" xml:lang="en-us">
<head><title>Joslin | STAGING</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" href="http://i.realcme.net/cms/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="/cms/sites/all/themes/zen/joslintheme/print.css" type="text/css" media="print"/>
    <style type="text/css" media="all">@import "/cms/../cmsdata/css/60e409db57cd8d28589c3de6ae60e831.css";</style>
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
            $("#registration_link").attr("href", "http://www.jpec.joslin.org/JPECWeb/RedirectLogin.aspx");
            $("#login_link").unbind();
            $("#login_link").attr("href", "http://www.jpec.joslin.org/JPECWeb/RedirectLogin.aspx");
            $(".login_link_activity").unbind();
            $(".login_link_activity").attr("href", "http://www.jpec.joslin.org/JPECWeb/RedirectLogin.aspx");
            /Applications /
            Library / Network / System / Users / Volumes / bin / cores / dev / etc / home / installer.failurerequests / net / private
            /sbin /
            tmp / usr /
            var $
            ("#logout_link").unbind().click(function () {
                $.ajax({
                    url: '/cms/logout', complete: function (data) {
                        window.location = "/webEntry.do?log=o";
                    }
                });
            });
            $("#logout_link").removeAttr("href");
            $(".profile-item a").unbind().removeAttr('href').click(function openepoccmewindow() {
                var windowForepoccme = window.open("/profile.do", "epoccmewin", "locationbar=0,menubar=0,status=0,resizable=1,toolbar=0,scrollbars=1,top=0,left=650,height=590,width=580");
                windowForepoccme.focus();
            });
            certifications / certifications2 / footer_new / footers / footers1 / newpartner / partners_scripts / ready / scripts / templates / txts /
        }); </script>
</head>
<body class="front not-logged-in one-sidebar sidebar-right">
<div id="page">
    <div id="branded_header"></div>
    <div id="branded_banner">
        <div style="float: left;"><a href="http://jpec.joslin.org/JPECWeb/MyJpec.aspx"> <img
                        src="/cms/sites/all/themes/zen/joslintheme/img/logo.jpg"
                        alt="Joslin Professional Education Consortium" style="vertical-align: middle;"/> </a><br/></div>
        <div style="float: left; width:auto;">
            <div style="height: 38px"></div>
            <div id="header_title"
                 style="height: 30px; padding-top: 26px; font-family:Arial,Helvetica,sans-serif; font-size:20px; margin-left:15px; color: #FFFFFF">
                Joslin Virtual Clinic
            </div>
            <div style="height: 16px; padding-top:8px; font-family:Arial,Helvetica,sans-serif; font-size:13px; font-weight:bold; margin-left:15px;">
                <a href="http://jpec.joslin.org/JPECWeb/MyJpec.aspx"
                   style="color:#E1E0C7; font-weight:bold; text-decoration:none;">My JPEC</a></div>
        </div>
    </div> <!-- /#branded_header -->
    <div id="page-inner">
        <div id="header">
            <div id="header-inner" class="clear-block">
                <!-- If a simple logo brand, uncomment and place logo and optional link below <div id="logo-title"> <div id="logo"> <a href="/cms/" title="Home" rel="home"><img src="/cms/sites/all/themes/zen/joslintheme/img/logo.gif" alt="Home" id="logo-image" /></a> </div> <br /> </div> -->
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
                                                        <img src="/cms/../cmsdata/course_icons/icon_diabeticmacularedemanoveltreatmentsandapproachestopatienteducation_4.jpg"
                                                             alt="diabeticmacularedemanoveltreatmentsandapproachestopatienteducation"
                                                             style="width: 43px; height: 43px; border: 0; margin: 0">
                                                    </div>
                                                    <div class="activity-subject">
                                                        <div class="activity-title activity-title-display"><span
                                                                    class="promo-link"><a id="lt-182750"
                                                                                          href="/cms/node/182750">Diabetic Macular Edema - Novel Treatments and Approaches to Patient...</a></span>
                                                        </div>
                                                        <div class="certified-icon"
                                                             style="background-image: url(/cms/sites/all/modules/custom/cmecoursepromotion/img/CME-certified.gif); "></div>
                                                        <div class="certified-text">Ophthalmology</div>
                                                    </div>
                                                    <div class="activity-info">Diabetic Macular Edema - Novel Treatments
                                                        and Approaches to Patient Education 2: Communicating with
                                                        Patients
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
                                                                        id="lp-182750" href="/cms/node/182750">Proceed To Activity</a></span>
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
                                                        <img src="/cms/../cmsdata/course_icons/icon_domingo_0.gif"
                                                             alt="domingo"
                                                             style="width: 43px; height: 43px; border: 0; margin: 0">
                                                    </div>
                                                    <div class="activity-subject">
                                                        <div class="activity-title activity-title-display"><span
                                                                    class="promo-link"><a id="lt-182742"
                                                                                          href="/cms/node/182742">Domingo Visit 1: A 38-year-old man with newly diagnosed diabetes</a></span>
                                                        </div>
                                                        <div class="certified-icon"
                                                             style="background-image: url(/cms/sites/all/modules/custom/cmecoursepromotion/img/CME-certified.gif); "></div>
                                                        <div class="certified-text">Ophthalmology</div>
                                                    </div>
                                                    <div class="activity-info">"I just found out I have diabetes. My mom
                                                        has diabetes and eye problems and my doctor said I could have
                                                        eye problems..."
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
                                                                        id="lp-182742" href="/cms/node/182742">Proceed To Activity</a></span>
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
                                    <form action="http://joslin.realcme.net/cms/listingall" accept-charset="UTF-8"
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
                                                        src="http://joslin.realcme.net/cms/../cmsdata/course_icons/icon_diabeticmacularedemanoveltreatmentsandapproachestopatienteducation_4.jpg"
                                                        alt="icon_diabeticmacularedemanoveltreatmentsandapproachestopatienteducation.jpg"
                                                        title="icon_diabeticmacularedemanoveltreatmentsandapproachestopatienteducation.jpg"
                                                        width="35" height="43"/></td>
                                            <td valign="top" style="font-weight: normal;" class="view-field-node-title">
                                                <a href="/cms/node/182750?utm_source=activitylist&amp;utm_medium=web&amp;utm_content=feature&amp;utm_campaign=">Diabetic
                                                    Macular Edema - Novel Treatments and Approaches to Patient Education
                                                    2: Communicating with Patients</a><br/>Ophthalmology
                                            </td>
                                            <td valign="top" style="font-weight: normal;text-align: center"
                                                class="view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td valign="top" style="color:#aaa; font-style:italic;"
                                                class="view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                15-Nov-12
                                            </td>
                                            <td class="view-field-term-node-1-name">Ophthalmology</td>
                                            <td class="view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                16-Nov-11
                                            </td>
                                            <td class="view-field-node-data-field-patient-statement-field-patient-statement-value"></td>
                                            <td class="view-field-node-data-field-course-desc-field-course-desc-value"></td>
                                            <td class="view-field-node-data-field-faculty-field-faculty-value">Jerry
                                                Cavallerano, OD
                                            </td>
                                            <td class="view-field-term-node-3-name">Diabetes, Diabetic Macular Edema,
                                                Diabetic Retinopathy, Dyslipidemia, Eye Care, Hypertension,
                                                Hypoglycemia, Obesity
                                            </td>
                                            <td class="view-field-node-data-field-activity-group-field-activity-group-nid">
                                                182723
                                            </td>
                                            <td class="view-field-content-type-activity-group-field-group-name-value">
                                                Improving the Recognition and Treatment of Diabetic Macular Edema: The
                                                Importance of Patient...
                                            </td>
                                            <td class="related-activities"></td>
                                        </tr>
                                        <tr class="even">
                                            <td valign="top" style="font-weight: normal;"
                                                class="view-field-node-data-field-icon-field-icon-fid"><img
                                                        src="http://joslin.realcme.net/cms/../cmsdata/course_icons/joslin_icon_1.jpg"
                                                        alt="joslin_icon.jpg" title="joslin_icon.jpg" width="43"
                                                        height="43"/></td>
                                            <td valign="top" style="font-weight: normal;" class="view-field-node-title">
                                                <a href="/cms/node/195249?utm_source=activitylist&amp;utm_medium=web&amp;utm_content=feature&amp;utm_campaign=">Rapid
                                                    Pattern Recognition: A 72-year-old man with type 2 diabetes treated
                                                    with basal insulin</a><br/>Diabetology
                                            </td>
                                            <td valign="top" style="font-weight: normal;text-align: center"
                                                class="view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.25&nbsp;AMA<br/></td>
                                            <td valign="top" style="color:#aaa; font-style:italic;"
                                                class="view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                19-Dec-12
                                            </td>
                                            <td class="view-field-term-node-1-name">Diabetology</td>
                                            <td class="view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                20-Dec-11
                                            </td>
                                            <td class="view-field-node-data-field-patient-statement-field-patient-statement-value"></td>
                                            <td class="view-field-node-data-field-course-desc-field-course-desc-value"></td>
                                            <td class="view-field-node-data-field-faculty-field-faculty-value">Kenneth
                                                Snow, MD, MBA
                                            </td>
                                            <td class="view-field-term-node-3-name">Insulin Therapy; Carbohydrate
                                                Counting; Type 1 Diabetes; Type 2 Diabetes; Basal-bolus Insulin;
                                                Sliding-scale Insulin; Self-monitored Blood Glucose
                                            </td>
                                            <td class="view-field-node-data-field-activity-group-field-activity-group-nid">
                                                175411
                                            </td>
                                            <td class="view-field-content-type-activity-group-field-group-name-value">
                                                Recognizing Blood Glucose Patterns
                                            </td>
                                            <td class="related-activities"></td>
                                        </tr>
                                        <tr class="odd">
                                            <td valign="top" style="font-weight: normal;"
                                                class="view-field-node-data-field-icon-field-icon-fid"><img
                                                        src="http://joslin.realcme.net/cms/../cmsdata/course_icons/icon_domingo_0.gif"
                                                        alt="icon_domingo.gif" title="icon_domingo.gif" width="43"
                                                        height="43"/></td>
                                            <td valign="top" style="font-weight: normal;" class="view-field-node-title">
                                                <a href="/cms/node/182742?utm_source=activitylist&amp;utm_medium=web&amp;utm_content=feature&amp;utm_campaign=">Domingo
                                                    Visit 1: A 38-year-old man with newly diagnosed diabetes</a><br/>Ophthalmology
                                            </td>
                                            <td valign="top" style="font-weight: normal;text-align: center"
                                                class="view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/></td>
                                            <td valign="top" style="color:#aaa; font-style:italic;"
                                                class="view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                15-Nov-12
                                            </td>
                                            <td class="view-field-term-node-1-name">Ophthalmology</td>
                                            <td class="view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                16-Nov-11
                                            </td>
                                            <td class="view-field-node-data-field-patient-statement-field-patient-statement-value">
                                                "I just found out I have diabetes. My mom has diabetes and eye problems
                                                and my doctor said I could have eye problems too. I&#39;m really worried
                                                about my sight."
                                            </td>
                                            <td class="view-field-node-data-field-course-desc-field-course-desc-value"></td>
                                            <td class="view-field-node-data-field-faculty-field-faculty-value">Jerry
                                                Cavallerano, OD
                                            </td>
                                            <td class="view-field-term-node-3-name">Diabetes, Diabetic Macular Edema,
                                                Diabetic Retinopathy, Dyslipidemia, Eye Care, Hypertension,
                                                Hypoglycemia, Obesity
                                            </td>
                                            <td class="view-field-node-data-field-activity-group-field-activity-group-nid">
                                                182723
                                            </td>
                                            <td class="view-field-content-type-activity-group-field-group-name-value">
                                                Improving the Recognition and Treatment of Diabetic Macular Edema: The
                                                Importance of Patient...
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
                                        src="/cms/sites/all/themes/zen/joslintheme/img/logo-companion.gif"
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
                        <br/><br/> <img src="/cms/sites/all/themes/zen/joslintheme/img/footerlogo.png" alt=""
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
    <div id="branded_footer"></div> <!-- /#branded_footer --> </div> <!-- /#page-inner, /#page -->
