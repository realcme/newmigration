<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-us" xml:lang="en-us">
<head><title>myCME|-|</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" href="http://i.realcme.com/cms/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="/cms/sites/all/themes/zen/mycmetheme/print.css" type="text/css" media="print"/>
    <style type="text/css" media="all">@import "/cms/../cmsdata/css/0e0f34a3ba5aa523d60f78019f773763.css";</style>
    <!--[if IE]>
    <link rel="stylesheet" href="/cms/sites/all/themes/zen/ie.css" type="text/css"> <![endif]-->
    <script type="text/javascript" src="/cms/misc/jquery.js"></script>
    <script type="text/javascript" src="/cms/misc/drupal.js"></script>
    <script type="text/javascript" src="/cms/sites/all/modules/jquery_update/compat.js"></script>
    <script type="text/javascript" src="/cms/sites/all/modules/custom/cmebase/js/allscripts.js?v=1"></script>
    <script type="text/javascript" src="/cms/sites/all/themes/zen/mycmetheme/js/mycme.js"></script>
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
    <script type="text/javascript"> $(document).ready(function () {
            $("#registration_link").unbind();
            $("#registration_link").attr("href", " http://www.mycme.com/register?chkreferer=true");
            $("#login_link").unbind();
            $("#login_link").attr("href", "http://www.mycme.com/login?chkreferer=true");
            $(".login_link_activity").unbind();
            $(".login_link_activity").attr("href", "http://www.mycme.com/login?chkreferer=true");
            $("#logout_link").unbind().click(function () {
                $.ajax({
                    url: '/cms/logout', complete: function (data) {
                        window.location = 'http://www.mycme.com/logout';
                    }
                });
            });
            $("#logout_link").removeAttr("href");
            $('.profile-item a').unbind('click').attr('href', 'http://www.mycme.com/account/');
        }); </script>
</head>
<body class="front not-logged-in one-sidebar sidebar-right">
<header id="globalHeader">
    <div id="headerTop" class="grid_12">
        <div id="headerAdWrapper" class="grid_10 omega"></div>
    </div>
</header> <!-- BEGIN MAIN NAVIGATION -->
<div class="stickyNav" id="mainNavContainer">
    <div id="mainNavWrapper">
        <div id="mainNavLogoWrapper">
            <div id="logoWrapper" class="grid_2"><a href="http://www.mycme.com"> <img
                            src="http://media.mycme.com/images/2013/09/05/mycme_new_logo_441577_453235.jpg"
                            alt="myCME.com" class="pngfix"> </a></div>
            <nav id="mainNav">
                <ul class="grid_9 regNav">
                    <li class="firstNavItem"><a href="http://www.mycme.com/topic-homepage/section/4160/"
                                                class="topNavItem exitSurveyLink"
                                                onclick="s_objectID = 'Nav-Courses http://www.mycme.com/topic-homepage/section/4160/';return this.s_oc ? this.s_oc(e) : true; ">
                            Courses </a>
                        <div class="dropdown4col" style="display: none;">
                            <div class="grid_3 dropdownCallout">
                                <div class="rawHTMLAsset"><p style="text-align: center;"><a
                                                href="http://www.mycme.com/medical-news/section/4772/"><img alt=""
                                                                                                            src="https://www.mycme.com/media/cme/images/2015/04/15/mptnewsnavbaricon_756910.jpg"></a>
                                    </p>
                                    <p style="text-align: center;"><span style="font-size: 16px;"><b></b></span></p> <a
                                            href="http://www.mycme.com/medical-news/section/4772/"><p
                                                style="text-align: center;"><span style="font-size: 16px;"><b>News for CME/CE Credit<br> </b></span>
                                        </p>
                                        <p style="text-align: center;"><span style="font-size: 16px;">Read medical news, earn credits.<br> </span>
                                        </p></a>
                                    <p style="text-align: center;"><span style="font-size: 16px;"></span></p></div>
                            </div>
                            <div class="grid_2 dropdownCallout noBorder">
                                <ul>
                                    <li class="navbarClmHeader">CME/CE by Category</li>
                                    <li><a href="http://www.mycme.com/case-clinic/section/1519/"
                                           onclick="s_objectID = 'Nav-Courses-CaseClinics http://www.mycme.com/case-clinic/section/1519/';return this.s_oc ? this.s_oc(e) : true; ">Case
                                            Clinics</a></li>
                                    <li><a href="http://www.mycme.com/clinical-advisor-cme-articles/section/1385/"
                                           onclick="s_objectID = 'Nav-Courses-TheClinicalAdvisor http://www.mycme.com/clinical-advisor-cme-articles/section/1385/';return this.s_oc ? this.s_oc(e) : true; ">The
                                            Clinical Advisor</a></li>
                                    <li><a href="http://www.mycme.com/series/section/2464/"
                                           onclick="s_objectID = 'Nav-Courses-EducationalSeries http://www.mycme.com/series/section/2464/';return this.s_oc ? this.s_oc(e) : true; ">Educational
                                            Series</a></li>
                                    <li><a href="http://www.mycme.com/oncology-nurse-advisor/section/1547/"
                                           onclick="s_objectID = 'Nav-Courses-OncologyNurseAdvisor http://www.mycme.com/oncology-nurse-advisor/section/1547/';return this.s_oc ? this.s_oc(e) : true; ">Oncology
                                            Nurse Advisor</a></li>
                                </ul>
                            </div>
                            <div class="grid_2 dropdownCallout noBorder">
                                <ul>
                                    <li class="navbarClmHeader">Popular Courses</li>
                                    <li>
                                        <a href="http://www.mycme.com/scope-of-pain-safe-and-competent-opioid-prescribing-education/activity/2160/"
                                           onclick="s_objectID = 'Nav-Courses-SCOPEofPainSafeOpioidPrescribing http://www.mycme.com/scope-of-pain-safe-and-competent-opioid-prescribing-education/activity/2160/';return this.s_oc ? this.s_oc(e) : true; ">SCOPE
                                            of Pain: Safe Opioid Prescribing</a></li>
                                    <li>
                                        <a href="http://www.mycme.com/preventing-vs-managing-pediatric-allergies-clinical-and-economic-impact-of-nutritional-and-environmental-interventions/activity/2244/"
                                           onclick="s_objectID = 'Nav-Courses-PreventingvsManagingPediatricAllergies http://www.mycme.com/preventing-vs-managing-pediatric-allergies-clinical-and-economic-impact-of-nutritional-and-environmental-interventions/activity/2244/';return this.s_oc ? this.s_oc(e) : true; ">Preventing
                                            vs. Managing Pediatric Allergies</a></li>
                                    <li>
                                        <a href="http://www.mycme.com/stroke-prevention-in-atrial-fibrillation-sharing-decision-making-for-optimal-anticoagulation/activity/2278/"
                                           onclick="s_objectID = 'Nav-Courses-StrokePreventioninAtrialFibrillation http://www.mycme.com/stroke-prevention-in-atrial-fibrillation-sharing-decision-making-for-optimal-anticoagulation/activity/2278/';return this.s_oc ? this.s_oc(e) : true; ">Stroke
                                            Prevention in Atrial Fibrillation</a></li>
                                    <li>
                                        <a href="http://www.mycme.com/diagnosis-and-management-of-binge-eating-disorder-practical-strategies-for-nurse-practitioners-and-other-clinicians-who-manage-womens-health/activity/2048/"
                                           onclick="s_objectID = 'Nav-Courses-BingeEatingDisorderPracticalStrategies http://www.mycme.com/diagnosis-and-management-of-binge-eating-disorder-practical-strategies-for-nurse-practitioners-and-other-clinicians-who-manage-womens-health/activity/2048/';return this.s_oc ? this.s_oc(e) : true; ">Binge
                                            Eating Disorder: Practical Strategies</a></li>
                                </ul>
                            </div>
                            <div class="grid_2 dropdownCallout noBorder">
                                <ul>
                                    <li class="navbarClmHeader">Hot Topics</li>
                                    <li><a href="http://www.mycme.com/cardiology/section/3465/"
                                           onclick="s_objectID = 'Nav-Courses-Cardiology http://www.mycme.com/cardiology/section/3465/';return this.s_oc ? this.s_oc(e) : true; ">Cardiology</a>
                                    </li>
                                    <li><a href="http://www.mycme.com/diabetes-and-endocrinology/section/3443/"
                                           onclick="s_objectID = 'Nav-Courses-Diabetes http://www.mycme.com/diabetes-and-endocrinology/section/3443/';return this.s_oc ? this.s_oc(e) : true; ">Diabetes</a>
                                    </li>
                                    <li><a href="http://www.mycme.com/obesity/section/4203/"
                                           onclick="s_objectID = 'Nav-Courses-Obesity http://www.mycme.com/obesity/section/4203/';return this.s_oc ? this.s_oc(e) : true; ">Obesity</a>
                                    </li>
                                    <li><a href="http://www.mycme.com/topic-homepage/section/4160/"
                                           onclick="s_objectID = 'Nav-Courses-VIEWALLCMECEBYTOPIC http://www.mycme.com/topic-homepage/section/4160/';return this.s_oc ? this.s_oc(e) : true; ">VIEW
                                            ALL CME/CE BY TOPIC</a></li>
                                </ul>
                            </div>
                            <div class="grid_2 dropdownCallout noBorder">
                                <ul>
                                    <li class="navbarClmHeader"></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li><a href="http://www.mycme.com/specialty-list-pages/section/4652/"
                           class="topNavItem exitSurveyLink"
                           onclick="s_objectID = 'Nav-Specialties http://www.mycme.com/specialty-list-pages/section/4652/';return this.s_oc ? this.s_oc(e) : true; ">
                            Specialties </a>
                        <div class="dropdown4col" style="display: none;">
                            <div class="grid_2 dropdownCallout noBorder">
                                <ul>
                                    <li><a href="http://www.mycme.com/allergy-and-respiratory/section/3467/"
                                           onclick="s_objectID = 'Nav-Specialties-AllergyRespiratory http://www.mycme.com/allergy-and-respiratory/section/3467/';return this.s_oc ? this.s_oc(e) : true; ">Allergy/Respiratory</a>
                                    </li>
                                    <li><a href="http://www.mycme.com/cardiology/section/3465/"
                                           onclick="s_objectID = 'Nav-Specialties-Cardiology http://www.mycme.com/cardiology/section/3465/';return this.s_oc ? this.s_oc(e) : true; ">Cardiology</a>
                                    </li>
                                    <li><a href="http://www.mycme.com/dermatology/section/4222/"
                                           onclick="s_objectID = 'Nav-Specialties-Dermatology http://www.mycme.com/dermatology/section/4222/';return this.s_oc ? this.s_oc(e) : true; ">Dermatology</a>
                                    </li>
                                    <li><a href="http://www.mycme.com/diabetes-and-endocrinology/section/3443/"
                                           onclick="s_objectID = 'Nav-Specialties-DiabetesEndocrinology http://www.mycme.com/diabetes-and-endocrinology/section/3443/';return this.s_oc ? this.s_oc(e) : true; ">Diabetes/Endocrinology</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="grid_2 dropdownCallout noBorder">
                                <ul>
                                    <li><a href="http://www.mycme.com/family-medicine/section/3472/"
                                           onclick="s_objectID = 'Nav-Specialties-FamilyMedicine http://www.mycme.com/family-medicine/section/3472/';return this.s_oc ? this.s_oc(e) : true; ">Family
                                            Medicine</a></li>
                                    <li><a href="http://www.mycme.com/gastroenterology/section/3471/"
                                           onclick="s_objectID = 'Nav-Specialties-Gastroenterology http://www.mycme.com/gastroenterology/section/3471/';return this.s_oc ? this.s_oc(e) : true; ">Gastroenterology</a>
                                    </li>
                                    <li><a href="http://www.mycme.com/hivaids-and-infectious-disease/section/3468/"
                                           onclick="s_objectID = 'Nav-Specialties-InfectiousDisease http://www.mycme.com/hivaids-and-infectious-disease/section/3468/';return this.s_oc ? this.s_oc(e) : true; ">Infectious
                                            Disease</a></li>
                                    <li><a href="http://www.mycme.com/internal-medicine/section/3473/"
                                           onclick="s_objectID = 'Nav-Specialties-InternalMedicine http://www.mycme.com/internal-medicine/section/3473/';return this.s_oc ? this.s_oc(e) : true; ">Internal
                                            Medicine</a></li>
                                </ul>
                            </div>
                            <div class="grid_2 dropdownCallout noBorder">
                                <ul>
                                    <li><a href="http://www.mycme.com/neurology/section/3470/"
                                           onclick="s_objectID = 'Nav-Specialties-Neurology http://www.mycme.com/neurology/section/3470/';return this.s_oc ? this.s_oc(e) : true; ">Neurology</a>
                                    </li>
                                    <li><a href="http://www.mycme.com/obgyn-and-womens-health/section/3442/"
                                           onclick="s_objectID = 'Nav-Specialties-ObGyn http://www.mycme.com/obgyn-and-womens-health/section/3442/';return this.s_oc ? this.s_oc(e) : true; ">Ob/Gyn</a>
                                    </li>
                                    <li><a href="http://www.mycme.com/oncology-specialty-page/section/3405/"
                                           onclick="s_objectID = 'Nav-Specialties-Oncology http://www.mycme.com/oncology-specialty-page/section/3405/';return this.s_oc ? this.s_oc(e) : true; ">Oncology</a>
                                    </li>
                                    <li><a href="http://www.mycme.com/pediatrics/section/3466/"
                                           onclick="s_objectID = 'Nav-Specialties-Pediatrics http://www.mycme.com/pediatrics/section/3466/';return this.s_oc ? this.s_oc(e) : true; ">Pediatrics</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="grid_2 dropdownCallout noBorder">
                                <ul>
                                    <li><a href="http://www.mycme.com/psychiatry-and-mental-health/section/3469/"
                                           onclick="s_objectID = 'Nav-Specialties-Psychiatry http://www.mycme.com/psychiatry-and-mental-health/section/3469/';return this.s_oc ? this.s_oc(e) : true; ">Psychiatry</a>
                                    </li>
                                    <li><a href="http://www.mycme.com/rheumatology/section/4147/"
                                           onclick="s_objectID = 'Nav-Specialties-Rheumatology http://www.mycme.com/rheumatology/section/4147/';return this.s_oc ? this.s_oc(e) : true; ">Rheumatology</a>
                                    </li>
                                    <li><a href="http://www.mycme.com/specialty-list-pages/section/4652/"
                                           onclick="s_objectID = 'Nav-Specialties-VIEWALLSPECIALTIES http://www.mycme.com/specialty-list-pages/section/4652/';return this.s_oc ? this.s_oc(e) : true; ">VIEW
                                            ALL SPECIALTIES</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li><a href="http://www.mycme.com/mycme-product-marketplace/section/4139/"
                           class="topNavItem exitSurveyLink"
                           onclick="s_objectID = 'Nav-Marketplace http://www.mycme.com/mycme-product-marketplace/section/4139/';return this.s_oc ? this.s_oc(e) : true; ">
                            Marketplace </a>
                        <div class="dropdown4col" style="display: none;">
                            <div class="grid_3 dropdownCallout">
                                <div class="rawHTMLAsset"><br>
                                    <p style="text-align: center;"><a
                                                href="http://www.mycme.com/mycme-product-marketplace/section/4139/"><img
                                                    alt=""
                                                    src="https://www.mycme.com/media/cme/images/2014/10/14/marketplaceicon_669991.png"></a>
                                    </p> <a href="http://www.mycme.com/mycme-product-marketplace/section/4139/"><p
                                                style="text-align: center;"><span
                                                    style="font-size: 16px;"><b></b></span></p></a><a
                                            href="http://www.mycme.com/mycme-product-marketplace/section/4139/"><p
                                                style="text-align: center;"><span style="font-size: 16px;"><b>myCME Marketplace </b></span>
                                        </p>
                                        <p style="text-align: center;"><span style="font-size: 16px;">Board Reviews, Intensive Reviews, State-Required CME/CE, and More!<br> </span>
                                        </p></a></div>
                            </div>
                            <div class="grid_2 dropdownCallout noBorder">
                                <ul>
                                    <li class="navbarClmHeader">Product Categories</li>
                                    <li><a href="http://www.mycme.com/exam-master-board-reviews/section/3999/"
                                           onclick="s_objectID = 'Nav-Marketplace-ExamPreparatoryQuestions http://www.mycme.com/exam-master-board-reviews/section/3999/';return this.s_oc ? this.s_oc(e) : true; ">Exam
                                            Preparatory Questions</a></li>
                                    <li>
                                        <a href="http://www.mycme.com/hospitalist-and-emergency-procedures/section/4806/"
                                           onclick="s_objectID = 'Nav-Marketplace-HospitalistandEmergencyProcedures http://www.mycme.com/hospitalist-and-emergency-procedures/section/4806/';return this.s_oc ? this.s_oc(e) : true; ">Hospitalist
                                            and Emergency Procedures</a></li>
                                    <li>
                                        <a href="http://www.mycme.com/pediatrics-for-the-practitioner-update/section/4830/"
                                           onclick="s_objectID = 'Nav-Marketplace-JohnsHopkinsPediatricsCourse http://www.mycme.com/pediatrics-for-the-practitioner-update/section/4830/';return this.s_oc ? this.s_oc(e) : true; ">Johns
                                            Hopkins Pediatrics Course</a></li>
                                    <li><a href="http://www.mycme.com/new-drug-briefs-for-mdpa/section/4432/"
                                           onclick="s_objectID = 'Nav-Marketplace-NewDrugBriefs http://www.mycme.com/new-drug-briefs-for-mdpa/section/4432/';return this.s_oc ? this.s_oc(e) : true; ">New-Drug
                                            Briefs</a></li>
                                    <li><a href="http://www.mycme.com/meetings-on-demand/section/4593/"
                                           onclick="s_objectID = 'Nav-Marketplace-MeetingsonDemand http://www.mycme.com/meetings-on-demand/section/4593/';return this.s_oc ? this.s_oc(e) : true; ">Meetings
                                            on Demand</a></li>
                                </ul>
                            </div>
                            <div class="grid_2 dropdownCallout noBorder">
                                <ul>
                                    <li class="navbarClmHeader"></li>
                                    <li><a href="http://www.mycme.com/pharmacology-ce-updates-for-nps/section/4398/"
                                           onclick="s_objectID = 'Nav-Marketplace-PharmacologyCEUpdateforNPs http://www.mycme.com/pharmacology-ce-updates-for-nps/section/4398/';return this.s_oc ? this.s_oc(e) : true; ">Pharmacology
                                            CE Update for NPs</a></li>
                                    <li><a href="http://www.mycme.com/np-pharmacology/section/2688/"
                                           onclick="s_objectID = 'Nav-Marketplace-PharmacologyCourses http://www.mycme.com/np-pharmacology/section/2688/';return this.s_oc ? this.s_oc(e) : true; ">Pharmacology
                                            Courses</a></li>
                                    <li><a href="http://www.mycme.com/business-of-medicine/section/5026/"
                                           onclick="s_objectID = 'Nav-Marketplace-PracticeManagement http://www.mycme.com/business-of-medicine/section/5026/';return this.s_oc ? this.s_oc(e) : true; ">Practice
                                            Management</a></li>
                                    <li><a href="http://www.mycme.com/mitigate-risk-in-your-practice/section/4378/"
                                           onclick="s_objectID = 'Nav-Marketplace-RiskManagement http://www.mycme.com/mitigate-risk-in-your-practice/section/4378/';return this.s_oc ? this.s_oc(e) : true; ">Risk
                                            Management</a></li>
                                    <li><a href="http://www.mycme.com/rutgers-landing-pages/section/2629/"
                                           onclick="s_objectID = 'Nav-Marketplace-RutgersPANCEPANREReview http://www.mycme.com/rutgers-landing-pages/section/2629/';return this.s_oc ? this.s_oc(e) : true; ">Rutgers
                                            PANCE/PANRE Review</a></li>
                                </ul>
                            </div>
                            <div class="grid_2 dropdownCallout noBorder">
                                <ul>
                                    <li class="navbarClmHeader"></li>
                                    <li><a href="http://www.mycme.com/self-assessment/section/4404/"
                                           onclick="s_objectID = 'Nav-Marketplace-SelfAssessment http://www.mycme.com/self-assessment/section/4404/';return this.s_oc ? this.s_oc(e) : true; ">Self-Assessment </a>
                                    </li>
                                    <li><a href="http://www.mycme.com/board-reviews/section/4153/"
                                           onclick="s_objectID = 'Nav-Marketplace-SpecialtyBoardReviews http://www.mycme.com/board-reviews/section/4153/';return this.s_oc ? this.s_oc(e) : true; ">Specialty
                                            Board Reviews</a></li>
                                    <li><a href="http://www.mycme.com/intensive-reviews/section/4155/"
                                           onclick="s_objectID = 'Nav-Marketplace-SpecialtyIntensiveReviews http://www.mycme.com/intensive-reviews/section/4155/';return this.s_oc ? this.s_oc(e) : true; ">Specialty
                                            Intensive Reviews</a></li>
                                    <li><a href="http://www.mycme.com/state-required-courses/section/3911/"
                                           onclick="s_objectID = 'Nav-Marketplace-StateRequiredCMECE http://www.mycme.com/state-required-courses/section/3911/';return this.s_oc ? this.s_oc(e) : true; ">State-Required
                                            CME/CE</a></li>
                                    <li><a href="http://www.mycme.com/wound-care-courses/section/3871/"
                                           onclick="s_objectID = 'Nav-Marketplace-WoundCare http://www.mycme.com/wound-care-courses/section/3871/';return this.s_oc ? this.s_oc(e) : true; ">Wound
                                            Care</a></li>
                                </ul>
                            </div>
                            <div class="grid_2 dropdownCallout noBorder">
                                <ul>
                                    <li class="navbarClmHeader"></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li><a href="http://www.mycme.com/resources/section/783/" class="topNavItem exitSurveyLink"
                           onclick="s_objectID = 'Nav-More http://www.mycme.com/resources/section/783/';return this.s_oc ? this.s_oc(e) : true; ">
                            More </a>
                        <div class="dropdown4col" style="display: none;">
                            <div class="grid_2 dropdownCallout noBorder">
                                <ul>
                                    <li class="navbarClmHeader">Learning Centers</li>
                                    <li><a href="http://www.mycme.com/copd-foundation/section/3842/"
                                           onclick="s_objectID = 'Nav-More-COPDLearningCenter http://www.mycme.com/copd-foundation/section/3842/';return this.s_oc ? this.s_oc(e) : true; ">COPD
                                            Learning Center</a></li>
                                    <li><a href="http://www.mycme.com/diabetes-learning-center/section/2912/"
                                           onclick="s_objectID = 'Nav-More-DiabetesLearningCenter http://www.mycme.com/diabetes-learning-center/section/2912/';return this.s_oc ? this.s_oc(e) : true; ">Diabetes
                                            Learning Center</a></li>
                                    <li>
                                        <a href="http://www.mycme.com/leukemia-and-lymphoma-learning-center/section/4275/"
                                           onclick="s_objectID = 'Nav-More-LeukemiaLymphomaLearningCenter http://www.mycme.com/leukemia-and-lymphoma-learning-center/section/4275/';return this.s_oc ? this.s_oc(e) : true; ">Leukemia
                                            &amp; Lymphoma Learning Center</a></li>
                                    <li><a href="http://www.mycme.com/obesity-learning-center/section/4359/"
                                           onclick="s_objectID = 'Nav-More-ObesityLearningCenter http://www.mycme.com/obesity-learning-center/section/4359/';return this.s_oc ? this.s_oc(e) : true; ">Obesity
                                            Learning Center</a></li>
                                    <li><a href="http://www.mycme.com/pediatric-nutrition-learning-center/section/3260/"
                                           onclick="s_objectID = 'Nav-More-PediatricNutritionLearningCenter http://www.mycme.com/pediatric-nutrition-learning-center/section/3260/';return this.s_oc ? this.s_oc(e) : true; ">Pediatric
                                            Nutrition Learning Center</a></li>
                                    <li><a href="http://www.mycme.com/psoriatic-disease-learning-center/section/4345/"
                                           onclick="s_objectID = 'Nav-More-PsoriaticDiseaseLearningCenter http://www.mycme.com/psoriatic-disease-learning-center/section/4345/';return this.s_oc ? this.s_oc(e) : true; ">Psoriatic
                                            Disease Learning Center</a></li>
                                </ul>
                            </div>
                            <div class="grid_2 dropdownCallout noBorder">
                                <ul>
                                    <li class="navbarClmHeader">Resources</li>
                                    <li><a href="http://www.mycme.com/clinical-charts-list/section/3463/"
                                           onclick="s_objectID = 'Nav-More-ClinicalChartsfromMPR http://www.mycme.com/clinical-charts-list/section/3463/';return this.s_oc ? this.s_oc(e) : true; ">Clinical
                                            Charts from MPR</a></li>
                                    <li><a href="http://www.mycme.com/state-licensing-cmece-requirements/section/3858/"
                                           onclick="s_objectID = 'Nav-More-CMECEStateLicenseRequirements http://www.mycme.com/state-licensing-cmece-requirements/section/3858/';return this.s_oc ? this.s_oc(e) : true; ">CME/CE
                                            State License Requirements</a></li>
                                    <li><a href="http://www.mycme.com/medical-news/section/4772/"
                                           onclick="s_objectID = 'Nav-More-DailyMedicalNews http://www.mycme.com/medical-news/section/4772/';return this.s_oc ? this.s_oc(e) : true; ">Daily
                                            Medical News</a></li>
                                    <li><a href="http://www.mycme.com/derm-dx/section/3500/"
                                           onclick="s_objectID = 'Nav-More-DermDxSlideshows http://www.mycme.com/derm-dx/section/3500/';return this.s_oc ? this.s_oc(e) : true; ">Derm
                                            Dx Slideshows</a></li>
                                </ul>
                            </div>
                            <div class="grid_2 dropdownCallout noBorder">
                                <ul>
                                    <li class="navbarClmHeader"></li>
                                    <li><a href="http://www.mycme.com/medical-calculators/section/3493/"
                                           onclick="s_objectID = 'Nav-More-MedicalCalculators http://www.mycme.com/medical-calculators/section/3493/';return this.s_oc ? this.s_oc(e) : true; ">Medical
                                            Calculators </a></li>
                                    <li><a href="http://www.mycme.com/app-20/section/4879/"
                                           onclick="s_objectID = 'Nav-More-myCMEApp http://www.mycme.com/app-20/section/4879/';return this.s_oc ? this.s_oc(e) : true; ">myCME
                                            App</a></li>
                                    <li><a href="http://www.mycme.com/mycme-bank-landing-page/section/4452/"
                                           onclick="s_objectID = 'Nav-More-myCMEBankApp http://www.mycme.com/mycme-bank-landing-page/section/4452/';return this.s_oc ? this.s_oc(e) : true; ">myCME
                                            Bank App</a></li>
                                </ul>
                            </div>
                            <div class="grid_2 dropdownCallout noBorder">
                                <ul>
                                    <li class="navbarClmHeader"></li>
                                    <li>
                                        <a href="http://www.mycme.com/patient-information-fact-sheets-list/section/3462/"
                                           onclick="s_objectID = 'Nav-More-PatientFactSheets http://www.mycme.com/patient-information-fact-sheets-list/section/3462/';return this.s_oc ? this.s_oc(e) : true; ">Patient
                                            Fact Sheets</a></li>
                                    <li>
                                        <a href="http://www.mycme.com/influenza-comorbidities-and-the-importance-of-immunization/article/384542/"
                                           onclick="s_objectID = 'Nav-More-PodcastFluVaccinesandComorbidities http://www.mycme.com/influenza-comorbidities-and-the-importance-of-immunization/article/384542/';return this.s_oc ? this.s_oc(e) : true; ">Podcast:
                                            Flu Vaccines and Comorbidities</a></li>
                                    <li><a href="http://www.mycme.com/toolcare-kits-and-resource-centers/section/3687/"
                                           onclick="s_objectID = 'Nav-More-ToolCareKitsandResourceCenters http://www.mycme.com/toolcare-kits-and-resource-centers/section/3687/';return this.s_oc ? this.s_oc(e) : true; ">Tool/Care
                                            Kits and Resource Centers</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="grid_3 nav-search-wrapper">
                    <form id="searchForm">
                        <div id="searchFieldWrapper"><input name="search" placeholder="Search myCME.com"
                                                            id="searchField"></div>
                        <input name="searchSubmit" value="Search" id="searchSubmit" class="buttonSearch" type="submit">
                    </form>
                </div>
            </nav>
        </div>
    </div>
</div> <!-- END MAIN NAVIGATION -->
<div id="page">
    <div id="page-inner"><a name="top" id="navigation-top"></a>
        <div id="skip-to-nav"><a href="#navigation">Skip to Navigation</a></div>
        <div id="header">
            <div id="header-inner" class="clear-block">
                <!-- <div id="logo-title"> <div id="logo"><a href="/cms/../" title="Home" rel="home"><img src="/cms/sites/all/themes/zen/mycmetheme/img/logo.gif" alt="Home" id="logo-image" /></a></div> </div> -->
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
                                                        <img src="/cms/../cmsdata/course_icons/icon_551782_0.jpg"
                                                             alt="551782"
                                                             style="width: 43px; height: 43px; border: 0; margin: 0">
                                                    </div>
                                                    <div class="activity-subject">
                                                        <div class="activity-title activity-title-display"><span
                                                                    class="promo-link"><a id="lt-782370"
                                                                                          href="/cms/node/782370">A Behavioral Modification Strategy for Newly Diagnosed OAB</a></span>
                                                        </div>
                                                        <div class="certified-icon"
                                                             style="background-image: url(/cms/sites/all/modules/custom/cmecoursepromotion/img/CME-certified.gif); "></div>
                                                        <div class="certified-text">Urology</div>
                                                    </div>
                                                    <div class="activity-info">Recommended lifestyle changes and
                                                        behavior techniques that can be effective in a patient with
                                                        modest new-onset OAB
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
                                                                        id="lp-782370" href="/cms/node/782370">Proceed To Activity</a></span>
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
                                                        <img src="/cms/../cmsdata/course_icons/icon_529618_4.jpg"
                                                             alt="529618"
                                                             style="width: 43px; height: 43px; border: 0; margin: 0">
                                                    </div>
                                                    <div class="activity-subject">
                                                        <div class="activity-title activity-title-display"><span
                                                                    class="promo-link"><a id="lt-772450"
                                                                                          href="/cms/node/772450">Effective Disease-Modifying Therapy for Allergic Rhinitis: Improving...</a></span>
                                                        </div>
                                                        <div class="certified-icon"
                                                             style="background-image: url(/cms/sites/all/modules/custom/cmecoursepromotion/img/CME-certified.gif); "></div>
                                                        <div class="certified-text">Allergy/ Immunology</div>
                                                    </div>
                                                    <div class="activity-info">Effective Disease-Modifying Therapy for
                                                        Allergic Rhinitis: Improving Patient Outcomes Through
                                                        Allergen-specific...
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
                                                                        id="lp-772450" href="/cms/node/772450">Proceed To Activity</a></span>
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
                                    <form action="http://mycme.realcme.com/cms/listingall" accept-charset="UTF-8"
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
                                                        src="http://mycme.realcme.com/cms/../cmsdata/course_icons/icon_551782_0.jpg"
                                                        alt="icon_551782.jpg" title="icon_551782.jpg" width="43"
                                                        height="43"/></td>
                                            <td valign="top" style="font-weight: normal;" class="view-field-node-title">
                                                <a href="/cms/node/782370?utm_source=activitylist&amp;utm_medium=web&amp;utm_content=feature&amp;utm_campaign=">A
                                                    Behavioral Modification Strategy for Newly Diagnosed OAB</a><br/>Urology
                                            </td>
                                            <td valign="top" style="font-weight: normal;text-align: center"
                                                class="view-field-node-data-field-all-credits-field-all-credits-value">
                                                0.5&nbsp;AMA<br/>0.5&nbsp;ANCC<br/>1&nbsp;CPD<br/></td>
                                            <td valign="top" style=""
                                                class="view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                30-May-18
                                            </td>
                                            <td class="view-field-term-node-1-name">Urology</td>
                                            <td class="view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                31-May-17
                                            </td>
                                            <td class="view-field-node-data-field-patient-statement-field-patient-statement-value"></td>
                                            <td class="view-field-node-data-field-course-desc-field-course-desc-value">
                                                Recommended lifestyle changes and behavior techniques that can be
                                                effective in a patient with modest new-onset OAB
                                            </td>
                                            <td class="view-field-node-data-field-faculty-field-faculty-value">Kyu-Sung
                                                Lee, MD, PhD
                                            </td>
                                            <td class="view-field-term-node-3-name"></td>
                                            <td class="view-field-node-data-field-activity-group-field-activity-group-nid">
                                                782364
                                            </td>
                                            <td class="view-field-content-type-activity-group-field-group-name-value">
                                                Case Clinic: Taking a More Aggressive Approach for Treatment of
                                                Persistent OAB Symptoms
                                            </td>
                                            <td class="related-activities"><a
                                                        href="/cms/node/802205?utm_source=activitylist&amp;utm_medium=web&amp;utm_content=feature&amp;utm_campaign=">Comprehensive
                                                    Approaches to OAB in the Elderly with Comorbidities</a></td>
                                        </tr>
                                        <tr class="even">
                                            <td valign="top" style="font-weight: normal;"
                                                class="view-field-node-data-field-icon-field-icon-fid"><img
                                                        src="http://mycme.realcme.com/cms/../cmsdata/course_icons/icon_557885.jpg"
                                                        alt="icon_557885.jpg" title="icon_557885.jpg" width="43"
                                                        height="26"/></td>
                                            <td valign="top" style="font-weight: normal;" class="view-field-node-title">
                                                <a href="/cms/node/764722?utm_source=activitylist&amp;utm_medium=web&amp;utm_content=feature&amp;utm_campaign=">Are
                                                    You Asking the Question? Strategies for Engaging the Patient in the
                                                    Diagnosis and Management of Opioid-Induced Constipation</a><br/>Gastroenterology
                                            </td>
                                            <td valign="top" style="font-weight: normal;text-align: center"
                                                class="view-field-node-data-field-all-credits-field-all-credits-value">1&nbsp;AMA<br/>1&nbsp;ANCC<br/>
                                            </td>
                                            <td valign="top" style=""
                                                class="view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                28-Mar-18
                                            </td>
                                            <td class="view-field-term-node-1-name">Gastroenterology</td>
                                            <td class="view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                28-Mar-17
                                            </td>
                                            <td class="view-field-node-data-field-patient-statement-field-patient-statement-value"></td>
                                            <td class="view-field-node-data-field-course-desc-field-course-desc-value">
                                                This two-part CME/CNE activity provides real-world case examples in the
                                                diagnosis and management of Opioid-Induced Constipation
                                            </td>
                                            <td class="view-field-node-data-field-faculty-field-faculty-value">H.
                                                Christian Weber, MD
                                            </td>
                                            <td class="view-field-term-node-3-name"></td>
                                            <td class="view-field-node-data-field-activity-group-field-activity-group-nid">
                                                764733
                                            </td>
                                            <td class="view-field-content-type-activity-group-field-group-name-value">
                                                Opioid-Induced Constipation
                                            </td>
                                            <td class="related-activities"></td>
                                        </tr>
                                        <tr class="odd">
                                            <td valign="top" style="font-weight: normal;"
                                                class="view-field-node-data-field-icon-field-icon-fid"><img
                                                        src="http://mycme.realcme.com/cms/../cmsdata/course_icons/icon_575648.jpg"
                                                        alt="icon_575648.jpg" title="icon_575648.jpg" width="43"
                                                        height="43"/></td>
                                            <td valign="top" style="font-weight: normal;" class="view-field-node-title">
                                                <a href="/cms/node/758856?utm_source=activitylist&amp;utm_medium=web&amp;utm_content=feature&amp;utm_campaign=">Clinical
                                                    Convergence®: Patient and Provider Perspectives on Optimal Care in
                                                    Bipolar Depression</a><br/>Psychiatry
                                            </td>
                                            <td valign="top" style="font-weight: normal;text-align: center"
                                                class="view-field-node-data-field-all-credits-field-all-credits-value">
                                                1.5&nbsp;AMA<br/>1.5&nbsp;ANCC<br/></td>
                                            <td valign="top" style=""
                                                class="view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                07-Mar-18
                                            </td>
                                            <td class="view-field-term-node-1-name">Psychiatry</td>
                                            <td class="view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                07-Mar-17
                                            </td>
                                            <td class="view-field-node-data-field-patient-statement-field-patient-statement-value"></td>
                                            <td class="view-field-node-data-field-course-desc-field-course-desc-value"></td>
                                            <td class="view-field-node-data-field-faculty-field-faculty-value">Deborah
                                                V. Thomas, EdD, APRN, PMHCNS-BC, PMHNP-BC, CMP
                                            </td>
                                            <td class="view-field-term-node-3-name"></td>
                                            <td class="view-field-node-data-field-activity-group-field-activity-group-nid">
                                                758858
                                            </td>
                                            <td class="view-field-content-type-activity-group-field-group-name-value">
                                                Clinical Convergence&reg;: Patient and Provider Perspectives on Optimal
                                                Care in Bipolar Depression
                                            </td>
                                            <td class="related-activities"></td>
                                        </tr>
                                        <tr class="even">
                                            <td valign="top" style="font-weight: normal;"
                                                class="view-field-node-data-field-icon-field-icon-fid"><img
                                                        src="http://mycme.realcme.com/cms/../cmsdata/course_icons/icon_529618_4.jpg"
                                                        alt="icon_529618.jpg" title="icon_529618.jpg" width="45"
                                                        height="41"/></td>
                                            <td valign="top" style="font-weight: normal;" class="view-field-node-title">
                                                <a href="/cms/node/772450?utm_source=activitylist&amp;utm_medium=web&amp;utm_content=feature&amp;utm_campaign=">Effective
                                                    Disease-Modifying Therapy for Allergic Rhinitis: Improving Patient
                                                    Outcomes Through Allergen-specific Immunotherapy</a><br/>Allergy/
                                                Immunology
                                            </td>
                                            <td valign="top" style="font-weight: normal;text-align: center"
                                                class="view-field-node-data-field-all-credits-field-all-credits-value">1&nbsp;AMA<br/>
                                            </td>
                                            <td valign="top" style=""
                                                class="view-field-node-data-field-credit-expire-field-credit-expire-value">
                                                27-Apr-18
                                            </td>
                                            <td class="view-field-term-node-1-name">Allergy/ Immunology</td>
                                            <td class="view-field-node-data-field-active-begin-date-field-active-begin-date-value">
                                                27-Apr-17
                                            </td>
                                            <td class="view-field-node-data-field-patient-statement-field-patient-statement-value"></td>
                                            <td class="view-field-node-data-field-course-desc-field-course-desc-value"></td>
                                            <td class="view-field-node-data-field-faculty-field-faculty-value">Deborah
                                                A. Gentile, MD
                                            </td>
                                            <td class="view-field-term-node-3-name"></td>
                                            <td class="view-field-node-data-field-activity-group-field-activity-group-nid">
                                                772459
                                            </td>
                                            <td class="view-field-content-type-activity-group-field-group-name-value">
                                                Seasonal Allergens
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
                                        src="/cms/sites/all/themes/zen/mycmetheme/img/logo-companion.gif"
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
                        <br/><br/> <img src="/cms/sites/all/themes/zen/mycmetheme/img/footerlogo.png" alt=""
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
</div> <!-- /#page-inner, /#page --> <!-- BEGIN FOOTER -->
<footer id="globalFooter">
    <div class="rawHTMLAsset">
        <div style="text-align: center;"><a href="http://www.mycme.com/">Home</a> | <a
                    href="http://www.mycme.com/about-haymarket-medical-education/section/403/">About myCME/HME</a> | <a
                    href="http://www.mycme.com/help-center/section/5210/">Contact Us</a>
            <!--| <a href="http://www.mycme.com/support/section/1286/">Web Support</a> --> </div>
        <p style="text-align: center;">© 2018 Haymarket Media, Inc.</p></div>
    </div> </footer>
<script> /Applications /
    Library / Network / System / Users / Volumes / bin / cores / dev / etc / home / installer.failurerequests / net / private
    /sbin /
    tmp / usr /
    var $
    (document).ready(function () {
        $('a#registration_link').unbind('click').attr('href', 'http://qa1.mycme.com/?register');
        $('a#login_link').unbind('click').attr('href', 'http://qa1.mycme.com/?login#');
        $('a#logout_link').unbind('click').attr('href', 'http://qa1.mycme.com/logout');
        $('.profile-item a').unbind('click').attr('href', 'http://qa1.mycme.com/account/');
    });
    certifications / certifications2 / footer_new / footers / footers1 / newpartner / partners_scripts / ready / scripts / templates / txts / </script>
<!-- END FOOTER --> </body>
</html>
