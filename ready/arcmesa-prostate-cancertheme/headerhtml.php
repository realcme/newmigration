<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-us" xml:lang="en-us">
<head><title>Prostate e-Clinic | Arcmesa Prostate Cancer</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" href="http://i.realcme.net/cms/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="/cms/sites/all/themes/zen/arcmesa-prostate-cancertheme/print.css" type="text/css"
          media="print"/>
    <style type="text/css" media="all">@import "/cms/../cmsdata/css/e031ab68260e1bdc15e5b786c8f8b9c5.css";</style>
    <style type="text/css"
           media="all">@import "/cms/sites/all/themes/zen/arcmesa-prostate-cancertheme/css/virtualclinic.css";</style>
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
    <script type="text/javascript"> var width, top = window;
        var context = {
            "doctor": [], "clinic": {
                "name": "Prostate e-Clinic",
                "description": "<p>Join our innovative and dynamic Prostate eClinic. The experience begins with participants provided with the opportunity to review 1 or 2 Cases consisting of an initial and follow-up visit. Each Case visit will be unique and address different challenging issues faced by healthcare professionals managing patients with prostate cancer. Case 1 is a patient with localized prostate cancer while Case 2 involves a patient in the advanced stages of the disease. After completing both cases, join Dr. Gomella in a Virtual Grand Rounds as he discusses both cases through an interactive teaching discussion.</p>
                ", "icon
                ": " / cms /..
        /cmsdata/
        course_icons / prostate2_vc.jpg
        ", "
        alt
        ": "
        prostate2_vc.jpg
        ", "
        title
        ": "
        clinic
        logo
        ", "
        patient
        ": [ { "
        name
        ": "
        Peter
        ", "
        icon
        ": " / cms /
        ../cmsdata/
        course_icons / icon - peter.gif
        ", "
        alt
        ": "
        icon - peter.gif
        ", "
        title
        ": "
        icon - peter.gif
        ", "
        visit
        ": [ { "
        name
        ": "
        Visit
        1
        ", "
        statement
        ": "
        I
        was
        just
        diagnosed
        with prostate cancer
        and
        want
        to
        know
        what
        my
        treatment
        options
        are.
        ", "
        description
        ": "
        Peter
        Visit
        1 - A
        71 - Year - Old
        Recently
        Diagnosed
        with Prostate Cancer
        ", "
        biometrics
        ": "
        Age: 71 < br > PSA
        :
        21
        ng / ml
        ", "
        started
        ": false, "
        completed
        ": false, "
        link
        ": " / cms / node / 2573
        ", "
        schedule
        ": "
        tb_show(\'\', \'http://comp.realcme.net/cms/node/2573?TB_iframe=true&width=655\', \'\')", "nid": "2573", "clinicnid": "2592" }, { "name": "Visit 2", "statement": "“I went for a second opinion about my prostate cancer and am now ready to start my therapy.” ", "description": "Peter Visit 2 - A 71-Year-Old Recently Diagnosed with Prostate Cancer", "biometrics": "Age: 71<br>Gleason: 8", "started": false, "completed": false, "link": "/cms/node/2575", "schedule": "tb_show(\'\', \'http://comp.realcme.net/cms/node/2575?TB_iframe=true&width=655\', \'\')", "nid": "2575", "clinicnid": "2592" } ] }, { "name": "Tim", "icon": "/cms/../cmsdata/course_icons/icon-tim.gif", "alt": "icon-tim.gif", "title": "icon-tim.gif", "visit": [ { "name": "Visit 1", "statement": "\"I gained weight since I\'ve been on therapy, and am having other side effects. I am worried that my prostate cancer is getting out of control.\"", "description": "Tim Visit 1 - a 67-year-old with prostate cancer diagnosed 7 years ago", "biometrics": "Age: 67", "started": false, "completed": false, "link": "/cms/node/2569", "schedule": "tb_show(\'\', \'http://comp.realcme.net/cms/node/2569?TB_iframe=true&width=655\', \'\')", "nid": "2569", "clinicnid": "2592" }, { "name": "Visit 2", "statement": "“I still have fatigue. Also, I now have mid-back pain which is new but somewhat mild, and unlike the back pain I had in the past.”", "description": "Tim Visit 2 - a 67-year-old with prostate cancer diagnosed 7 years ago", "biometrics": "Age: 67<br>PSA: 19.3", "started": false, "completed": false, "link": "/cms/node/2571", "schedule": "tb_show(\'\', \'http://comp.realcme.net/cms/node/2571?TB_iframe=true&width=655\', \'\')", "nid": "2571", "clinicnid": "2592" } ] } ] } }; var doctor, clinic, patients; var fwidth = 42, pcount, vcount, vcount2, current; var vindex, aindex, visits, mid, start, visit; $(document).ready(function() { init(); $("h1.title").hide(); }); function init() { if (!context) return; // Uh oh // narrow/wide stuff width = parseInt($("#eclinic-box").css('
        width
        ')); mid = width / 2 - 78; $("#eclinic-folders-table").attr("width", width - 349); doctor = context.doctor; clinic = context.clinic; patients = clinic.patient; pcount = patients.length; vcount = Math.floor((width - 360) / 40); vcount2 = vcount >> 1; showDate(); // set up clinic context if (doctor.name) $("#doctor-image").attr({ src: "/cms/sites/all/modules/custom/cmecoursepromotion/img/virtualclinic/" + doctor.icon, title: doctor.title, alt: doctor.alt }); $(".eclinic-logo").attr({ src: clinic.icon, title: clinic.title, alt: clinic.alt }); $(".eclinic-intro-text").html(clinic.description); $(".eclinic-title").html(clinic.name); $(".eclinic-header-title").html(clinic.name); $(".number-patients").html("" + pcount); $(".doctor-name").html(doctor.name); $("#folders-div").css("width", (vcount certificates.txt certifications certifications2 footer_new footers footers.txt footers1 index.php jon.sh newpartner partners_scripts ready scripts templates templates.txt templates_footer.txt templates_imgs.txt test.sh txts website.txt fwidth) + "px"); $("#folders-pane").css("width", (pcount certificates.txt certifications certifications2 footer_new footers footers.txt footers1 index.php jon.sh newpartner partners_scripts ready scripts templates templates.txt templates_footer.txt templates_imgs.txt test.sh txts website.txt fwidth) + "px"); $("#folders-pane").css("background", "#FFF"); if (pcount == 0) { // misconfigured clinic $('.folder - rollover
        ').html("Sorry, there are no patients in this clinic."); // XXX localize $(".patient-border,.folders,#back-arrow,#next-arrow,#eclinic-bottom-left,#eclinic-bottom-right").hide(); return; } $("#proceed-div,#proceed-img").bind("click", proceed ); //function() { location.href = visit.link; }); if (doctor.name) $("#schedule-div,#schedule-img").bind("click", schedule ); // function() { eval(visit.schedule); }); else $("#schedule-div,#schedule-img,#schedule-divider").hide(); // render all the folders into the div current = 0; var left = (vcount2 - current) certificates.txt certifications certifications2 footer_new footers footers.txt footers1 index.php jon.sh newpartner partners_scripts ready scripts templates templates.txt templates_footer.txt templates_imgs.txt test.sh txts website.txt fwidth; $("#folders-pane").css("margin-left", left + "px"); var i = 0; for (var name in patients) { var patient = patients[name]; var top = patient.visit.length; var scount = 0, ccount = 0; for (var k = 0; k < top; k++) { if (patient.visit[k].started) scount++; if (patient.visit[k].completed) ccount++; } patient.progress = ccount + " of " + top + " " + (top == 1 ? "visit" : "visits") + " completed"; // XXX localize! patient.completed = ccount == top; var title = patient.name + " [" + patient.progress + "]"; $(document.createElement("div")) .addClass("folder-div") .attr({ title: title, id: "folder-div-" + i }) .css("cursor", "pointer") .bind("click", i, function(e) { setCurrent(e.data); }) .appendTo($("#folders-pane")); renderFolder(i, i == current); i++; } setCurrentDone(); } function showDate() { // XXX needs localization consideration var dp = (new Date()).toLocaleString().split('
        '); // like: Tuesday, December 23, 2008 12:17:51 PM if (dp[5] == undefined) { // if AM/PM is not supplied (ie, Safari), derive it from the hours var k = parseInt(dp[4]); dp[5] = (k < 12) ? "AM" : "PM"; if (12 < k) dp[4] = (k-12) + dp[4].substr(2); } // shorten that format by abbreviating the day and month to 3 letters and trim off the seconds var date = dp[0].substr(0,3) + ", " + dp[1].substr(0,3) + " " + dp[2] + " " + dp[3] + " " + dp[4].substr(0,dp[4].length-3) + " " + dp[5]; $(".eclinic-header-date").html(date); var secs = 60 - parseInt(dp[4].substr(dp[4].length-2)); setTimeout(showDate, 1000 certificates.txt certifications certifications2 footer_new footers footers.txt footers1 index.php jon.sh newpartner partners_scripts ready scripts templates templates.txt templates_footer.txt templates_imgs.txt test.sh txts website.txt secs); //update every minute } function openFolder() { // make the image for the animaing-open folder var im = "/cms/sites/all/modules/custom/cmecoursepromotion/img/virtualclinic/patient-folder-animated.gif"; var img = $(document.createElement("img")) .attr("src", im); $("#folder-div-" + current) .empty() .css("background-image", "") .append(img); // ~1/2 second of folder "opening" animation followed by fully opened setTimeout(function() { renderFolder(current, true); }, 450); } function renderFolder(n, open) { var cls = "half-icon"; var bg = "/cms/sites/all/modules/custom/cmecoursepromotion/img/virtualclinic/patient-folder.gif"; var im = patients[n].icon; if (open) { cls = "half-icon-open"; bg = bg.replace(/\.gif/g, "-open.gif"); //im = im.replace(/\.gif/g, "-open.gif"); im = "/cms/sites/all/modules/custom/cmecoursepromotion/img/virtualclinic/icon-patient-open.gif"; // generic til we shear images dynamically } // make the patient image for on top of folder var img = $(document.createElement("img")) .addClass(cls) //.attr( { src: im, alt: patients[n].alt } ); //, title: patients[n].title } ); .attr( { src: im } ); //, alt: patients[n].alt } ); //, title: patients[n].title } ); // div holds the opened or closed folder $("#folder-div-" + n) .empty() .css("background-image", "url(" + bg + ")") .append(img); } function rollFolders(delta) { // slide folders left or right if (delta < 0 && current == 0 || 0 < delta && current == pcount-1) return; setCurrent(current + delta); } function setCurrent(k) { if (k == current) return; // setCurrentDone(); else { renderFolder(current, false); current = k; var left = (vcount2 - current) certificates.txt certifications certifications2 footer_new footers footers.txt footers1 index.php jon.sh newpartner partners_scripts ready scripts templates templates.txt templates_footer.txt templates_imgs.txt test.sh txts website.txt fwidth; $("#folders-pane").animate({ marginLeft: left + "px" }, 500, $.easing.easinout, setCurrentDone); } } function setCurrentDone() { openFolder(); // animated folder opening $("#back-arrow").attr("src", "/cms/sites/all/modules/custom/cmecoursepromotion/img/virtualclinic/arrow-back" + (current == 0 ? "-off" : "") + ".gif"); $("#next-arrow").attr("src", "/cms/sites/all/modules/custom/cmecoursepromotion/img/virtualclinic/arrow-next" + (current == pcount - 1 ? "-off" : "") + ".gif"); // set up patient context var patient = patients[current]; renderPages(patient); $(".eclinic-patient").attr({ src: patient.icon, alt: patient.name, title: patient.name }); $(".patient_name").html(patient.name); $(".patient_progress").html(patient.progress); } function renderPages(patient) { $("#eclinic-pages").empty(); visits = patient.visit; var wid = visits.length certificates.txt certifications certifications2 footer_new footers footers.txt footers1 index.php jon.sh newpartner partners_scripts ready scripts templates templates.txt templates_footer.txt templates_imgs.txt test.sh txts website.txt 26; start = 13 + mid - wid / 2; //if (start < 0 || 320 < start + wid) start = 0; $(document.createElement("img")) .addClass("page-image") .attr({ id: "arrow-down", src: "/cms/sites/all/modules/custom/cmecoursepromotion/img/virtualclinic/arrow-down.gif" }) .css({ left: "-99px", top: "23px" }) .appendTo($("#eclinic-pages")); // draw all the visit pages vindex = 0; aindex = -1; while (vindex < visits.length) renderNextPage(); if (patient.completed) visitClick(0); } function renderNextPage() { if (visits.length <= vindex) return; // drawanother visit page & animate into position var im = "/cms/sites/all/modules/custom/cmecoursepromotion/img/virtualclinic/page-" + (visits[vindex].completed ? "check" : "pencil") + ".gif"; var left = start + vindex certificates.txt certifications certifications2 footer_new footers footers.txt footers1 index.php jon.sh newpartner partners_scripts ready scripts templates templates.txt templates_footer.txt templates_imgs.txt test.sh txts website.txt 26; var top = 32; $(document.createElement("img")) .addClass("page-image") .attr({ src: im, id: "visit" + vindex, title: visits[vindex].description }) .css({ left: mid + "px", top: "-24px" } ) .bind("click", vindex, function(e) { visitClick(e.data); }) .appendTo($("#eclinic-pages")) .animate({ left: left + "px", top: top + "px" }, 350, $.easing.easinout); if (!visits[vindex].completed && aindex < 0) visitClick(aindex = vindex); vindex++; } function visitClick(k) { var patient = patients[current]; visit = patient.visit[k]; // set up visit context $("#arrow-down").css("left", (start + k certificates.txt certifications certifications2 footer_new footers footers.txt footers1 index.php jon.sh newpartner partners_scripts ready scripts templates templates.txt templates_footer.txt templates_imgs.txt test.sh txts website.txt 26 + 9) + "px"); var link = "<a href='
        " + visit.link + "
        '>" + patient.name + " " + visit.name + "</a>"; $("#visit-comment-info").html(link); $("#visit-comment-info").click(function(){ $.cookie('
        vc - ' + visit.nid, visit.clinicnid, { path: ' / ', domain: '.realcme.net
        ' }); }); $("#visit-comment").html(visit.statement); $('.patient - info
        ').html(visit.biometrics); } function proceed() { $.cookie('
        vc - ' + visit.nid, visit.clinicnid, { path: ' / ', domain: '.realcme.net
        ' }); location.href = visit.link; } function schedule(){ $.cookie('
        vc - ' + visit.nid, visit.clinicnid, { path: ' / ', domain: '.realcme.net
        ' }); eval(visit.schedule); } </script>
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
</head>
<body class="front not-logged-in node-type-virtual_clinic one-sidebar sidebar-right">
<div id="page">
    <div id="page-inner">
        <div id="header">
            <div id="header-inner" class="clear-block">
                <div id="logo-title">
                    <div id="logo">
                        <table width="799" border="0" style="padding: 0px; margin: 0px; line-height: 0px">
                            <tr style="padding: 0px; line-height: 0px">
                                <td colspan="3" style="padding: 0px; line-height: 0px"><a href="http://www.arcmesa.org"
                                                                                          target="_top"><img
                                                src="/cms/sites/all/themes/zen/arcmesa-prostate-cancertheme/img/arcmesa.jpg"
                                                alt="ArcMesa Educators" width="160" height="38" vspace="5" border="0"/></a>
                                </td>
                            </tr>
                            <tr style="padding: 0px; line-height: 0px">
                                <td style="padding: 0px; line-height: 0px"><a href="#" title="Home" rel="home"><img
                                                src="/cms/sites/all/themes/zen/arcmesa-prostate-cancertheme/img/eClinic_graphic1.jpg"
                                                alt="prostate cancer eclinic" height="81" width="245" border="0"
                                                alt="Home"></a></td>
                                <td style="padding: 0px; line-height: 0px"><a href="#" title="Home" rel="home"><img
                                                src="/cms/sites/all/themes/zen/arcmesa-prostate-cancertheme/img/eClinic_graphic2.jpg"
                                                alt="prostate cancer eclinic" height="81" width="273" border="0"
                                                alt="Home"></a></td>
                                <td style="padding: 0px; line-height: 0px"><a href="#" title="Home" rel="home"><img
                                                src="/cms/sites/all/themes/zen/arcmesa-prostate-cancertheme/img/eClinic_graphic3.jpg"
                                                alt="multidisciplinary strategies" height="81" width="281" border="0"
                                                alt="Home"></a></td>
                            </tr>
                        </table>
                    </div>
                </div> <!-- /#logo-title --> </div>
        </div> <!-- /#header-inner, /#header -->
        <div id="main">
            <div id="main-inner" class="clear-block with-navbar">
                <div id="content">
                    <div id="content-inner">
                        <div id="content-header"><h1 class="title">Prostate e-Clinic</h1></div><!-- /#content-header -->
                        <div id="content-area">
                            <div class="homelinks">
                                <div class="left"><a href="/cms/">CME Library</a></div>
                                <div class="left" style="margin-left: 20px"></div>
                                <div style="clear: both;"></div>
                            </div>
                            <br>
                            <div id="eclinic-wrapper">
                                <div id="intro-text">
                                    <div id="intro-text-title"><img class="eclinic-logo" src="" alt="" width="43"
                                                                    height="43" border="0"/>
                                        <div class="eclinic-title"></div>
                                    </div>
                                    <div class="eclinic-intro-text"></div>
                                </div>
                                <div id="eclinic-box">
                                    <div id="eclinic-header">
                                        <div class="eclinic-header-left"></div>
                                        <div class="eclinic-header-title"></div>
                                        <div class="eclinic-header-date"></div>
                                    </div>
                                    <div id="eclinic">
                                        <div id="eclinic-top-left">
                                            <div class="patient-border"><img class="eclinic-patient" src="" alt=""
                                                                             width="43" height="43" border="0"/></div>
                                            <div class="patient-info"></div>
                                        </div>
                                        <div id="eclinic-top-right">
                                            <div id="eclinic-top-row">
                                                <div class="doctor-name"></div>
                                                <div class="number-patients-text">Patients in clinic:</div>
                                                <div class="number-patients"></div>
                                            </div>
                                            <div id="eclinic-folders-row">
                                                <div class="doctor-icon"><img id="doctor-image"
                                                                              src="/cms/sites/all/modules/custom/cmecoursepromotion/img/virtualclinic/eclinic-icon-no-login.gif"
                                                                              alt="Doctor" width="71" height="82"
                                                                              border="0"></div>
                                                <div class="arrow-back"><img id="back-arrow"
                                                                             src="/cms/sites/all/modules/custom/cmecoursepromotion/img/virtualclinic/arrow-back.gif"
                                                                             alt="Previous Folder"
                                                                             title="Previous Folder"
                                                                             onclick="rollFolders(-1)" width="23"
                                                                             height="23" border="0"></div>
                                                <div class="eclinic-folders">
                                                    <table id="eclinic-folders-table" width="291" height="81" border="0"
                                                           cellspacing="0" cellpadding="0">
                                                        <tr height="22">
                                                            <td>
                                                                <div class="folder-rollover"><span
                                                                            class="bold patient_name"></span>&nbsp;- [
                                                                    <span class="patient_progress"></span>&nbsp;]
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr height="9" align=center valign="top">
                                                            <td align="center" class="folders"><img
                                                                        src="/cms/sites/all/modules/custom/cmecoursepromotion/img/virtualclinic/folder-rollover-line.gif"
                                                                        alt="" width="1" height="7" border="0"></td>
                                                        </tr>
                                                        <tr height="50">
                                                            <td>
                                                                <div id="folders-div">
                                                                    <div id="folders-pane"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <div class="arrow-next"><img id="next-arrow"
                                                                             src="/cms/sites/all/modules/custom/cmecoursepromotion/img/virtualclinic/arrow-next.gif"
                                                                             alt="Next Folder" title="Next Folder"
                                                                             onclick="rollFolders(1)" width="23"
                                                                             height="23" border="0"></div>
                                            </div>
                                            <div id="eclinic-pages"></div>
                                        </div>
                                        <div id="eclinic-bottom-left"></div>
                                        <div id="eclinic-bottom-right">
                                            <div class="eclinic-comment-info"><img
                                                        src="/cms/sites/all/modules/custom/cmecoursepromotion/img/virtualclinic/small-folder.gif"
                                                        alt="" height="16" width="21" border="0"><span
                                                        id="visit-comment-info"></span></div>
                                            <div class="eclinic-comment"><span id="visit-comment"></span></div>
                                            <div id="next-steps">
                                                <div id="schedule-img" class="next-steps-icon"><img
                                                            src="/cms/sites/all/modules/custom/cmecoursepromotion/img/virtualclinic/schedule-activity.gif"
                                                            alt="Schedule Activity" width="29" height="29" border="0">
                                                </div>
                                                <div id="schedule-div" class="schedule-activity"><span
                                                            class="eclinic-link"><a
                                                                href="#">Schedule Activity</a></span></div>
                                                <div id="schedule-divider" class="next-steps-divider"
                                                     style="background-image: url(/cms/sites/all/modules/custom/cmecoursepromotion/img/virtualclinic/activity-divider.gif)"></div>
                                                <div id="proceed-img" class="next-steps-icon"><img
                                                            src="/cms/sites/all/modules/custom/cmecoursepromotion/img/virtualclinic/proceed-activity.gif"
                                                            alt="Proceed To Activity" width="29" height="29" border="0">
                                                </div>
                                                <div id="proceed-div" class="proceed-activity"><span
                                                            class="eclinic-link"><a
                                                                href="#">Proceed To Activity</a></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="displaypromotions">
                                <div id="displaypromotions_header" style="display: none;">RELATED ACTIVITIES</div>
                                <div id="displaypromotions_nid" style="display: none;">2592</div><!-- BEGIN PROMO -->
                                <div id="related-activities">
                                    <div id="related-activities-title" class="related-activities-title">RELATED
                                        ACTIVITIES
                                    </div>
                                    <div class="related-activities-left testing">
                                        <div class="node">
                                            <div class="node-inner">
                                                <div class="rcmcontent">
                                                    <div class="related-patient-bg"
                                                         style="background-image: url(/cms/sites/all/modules/custom/cmecoursepromotion/img/related-patient-bg.gif); ">
                                                        <img src="/cms/../cmsdata/course_icons/prostate2_vc_0.jpg"
                                                             alt="prostate cancer"
                                                             style="width: 43px; height: 43px; border: 0; margin: 0">
                                                    </div>
                                                    <div class="activity-subject">
                                                        <div class="activity-title activity-title-display"><span
                                                                    class="promo-link"><a id="lt-3186"
                                                                                          href="/cms/node/3186">Management of Newly Diagnosed Prostate Cancer</a></span>
                                                        </div>
                                                        <div class="certified-icon"
                                                             style="background-image: url(/cms/sites/all/modules/custom/cmecoursepromotion/img/CME-certified.gif); "></div>
                                                        <div class="certified-text">Oncology/ Hematology</div>
                                                    </div>
                                                    <div class="activity-info">Management of Newly Diagnosed Prostate
                                                        Cancer
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
                                                                        id="lp-3186" href="/cms/node/3186">Proceed To Activity</a></span>
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
                                            }); </script><!-- EOF #8380 and #8473 -->
                                        <script type="text/javascript"
                                                language="javascript"> <!-- $(document).ready(function() { $('#lt-3186').click(function(){ $.cookie('vc-3186', 2592, { path: '/', domain: '.realcme.net' }); }); $('#lp-3186').click(function(){ $.cookie('vc-3186', 2592, { path: '/', domain: '.realcme.net' }); }); $('#ls-3186').click(function(){ $.cookie('vc-3186', 2592, { path: '/', domain: '.realcme.net' }); }); }); --> </script>
                                    </div>
                                </div> <!-- END PROMO -->
                                <div style="clear: both;"></div>
                            </div>
                        </div> <!-- --> </div>
                </div> <!-- /#content-inner, /#content -->
                <div id="sidebar-right">
                    <div id="sidebar-right-inner">
                        <div id="altcontainer2">
                            <div id="companionlogo"><img
                                        src="/cms/sites/all/themes/zen/arcmesa-prostate-cancertheme/img/logo-companion.gif"
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
                        <br/><br/> <img src="/cms/sites/all/themes/zen/arcmesa-prostate-cancertheme/img/footerlogo.png"
                                        alt="" class="center"/> <br/>
                        <table width="800" cellspacing="0" cellpadding="3" border="0">
                            <tr>
                                <td align="center"><font size="1">Copyright &#x00A9; 2009 ArcMesa Educators, LLC. All
                                        Rights Reserved. | <a href="http://www.arcmesa.org/privacy.php">Privacy
                                            Statement</a></font><BR>
                                    <p align="center"><font size="1">All information content within shall be considered
                                            confidential property of ArcMesa Educators, LLC <BR> and should not be
                                            disclosed or redistributed to third parties without express permission.
                                        </font></p></td>
                            </tr>
                        </table>
                    </center>
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

