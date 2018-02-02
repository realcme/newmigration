<?php
  global $user;
  $img_path = base_path() . path_to_subtheme();
?>  
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language; ?>" xml:lang="<?php print $language; ?>">

<head>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <?php print $styles; ?>
  <!--[if IE]>
    <link rel="stylesheet" href="<?php print $base_path . $directory; ?>/ie.css" type="text/css">
    <?php if ($subtheme_directory && file_exists($subtheme_directory .'/ie.css')): ?>
      <link rel="stylesheet" href="<?php print $base_path . $subtheme_directory; ?>/ie.css" type="text/css">
    <?php endif; ?>
  <![endif]-->
  <?php print $scripts; ?>
  <?php print phptemplate_cookie_js(); ?> 
  <?php print phptemplate_opencomp_js(); ?> 
  
</head>

<body class="<?php print $body_classes; ?>">
	<div style="text-align:center">
	
  <table style="margin: auto;width:960px" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td style="width:16px;text-align:left;vertical-align:top;padding:0" rowspan="6" class="wing_topleft">&nbsp;</td>
      <td style="width:928px;height:150px;text-align:left;vertical-align:top;background-color:#FFEEAC;padding:0;border:none">
      <a href="http://www.auanet.org/index.cfm">
      	<img src="<?php print $img_path?>/img/auanet/header_hp01.jpg" alt="Improving practice . . . Advancing patient care" width="928" height="150" border="0" class="print" />
      </a>
      </td>
      <td style="width:16px;text-align:left;vertical-align:top;padding:0" rowspan="6" class="wing_toprt">&nbsp;</td>
    </tr>
    <tr>
      <td style="width:928px;height:52px;text-align:left;vertical-align:top;padding:0">
        
    <ul id="p7menubar">
    <li><a class="blankleft"></a></li>
    
	  
      <li><a class="about" href="http://www.auanet.org/content/about-us/about-us.cfm"></a>
      <ul>              
      <li><a href="http://www.auanet.org/content/about-us/vision-and-mission.cfm">Vision &amp; Mission</a></li>
      <li><a href="http://www.auanet.org/content/about-us/board-of-directors.cfm">Board of Directors</a></li>             
      <li><a href="http://www.auanet.org/content/about-us/past-presidents.cfm">Past Presidents</a></li>	
      <li><a href="http://www.auanet.org/content/about-us/history.cfm">History</a></li>	
      <li><a href="http://www.auanet.org/content/about-us/governance-and-policies.cfm?sub=committees">Committees</a></li>
      <li><a href="http://www.auanet.org/content/about-us/annual-business-meeting.cfm">Annual Business Meeting</a></li> 
      <li><a href="http://www.auanet.org/content/about-us/governance-and-policies.cfm?sub=auabylaws">Bylaws</a></li>
      <li><a href="http://www.auanet.org/content/about-us/sections.cfm">Sections</a></li>  
      <li><a href="http://www.auanet.org/content/about-us/awards.cfm">Awards</a></li>
      <li><a href="http://www.auanet.org/content/about-us/aua-awards-recognition.cfm">Honors</a></li>
      <li><a href="http://www.auanet.org/content/about-us/commitment-to-transparency.cfm">Commitment to Transparency</a></li>
      <li><a href="http://www.auanet.org/content/about-us/scholarships-and-programs.cfm">Scholarships &amp; Programs</a></li>                 
       <li><a href="http://www.auanet.org/content/about-us/members.cfm">Membership Profile</a></li>     
       <li><a href="http://www.auanet.org/content/about-us/corporate-relations.cfm">Corporate Relations</a></li>
       <li><a href="http://www.auanet.org/content/about-us/aua-foundation.cfm">AUA Foundation</a></li>                                    
       <li><a href="http://www.auanet.org/content/about-us/what-is-urology.cfm">What is Urology</a></li>              
       <li><a href="http://www.auanet.org/content/about-us/the-future-of-urology.cfm">Future of Urology</a></li>              
       <li><a href="http://www.auanet.org/content/about-us/affiliated-organizations.cfm">Affiliated Organizations</a></li>
       <li><a href="http://www.auanet.org/content/about-us/sub-specialty-organizations.cfm">Sub-specialty Organizations</a></li>              
       <li><a href="http://www.auanet.org/content/about-us/museum.cfm">Didusch Museum</a></li>              
       <li><a href="http://www.auanet.org/content/about-us/mailing-list-rental.cfm">Mailing List Rental</a></li>              
       <li><a href="http://www.auanet.org/content/about-us/press-inquiries.cfm">Press Inquiries</a></li>
       <li><a href="http://careercenter.auanet.org/" target="new">Urology JobFinder</a></li>
       <li><a href="http://www.auanet.org/content/about-us/volunteer-opportunities/vo.cfm">Volunteer Opportunities</a></li>
       <li><a href="http://www.auanet.org/content/about-us/staff-job-openings.cfm">AUA Employment Opportunities</a></li>
       </ul>
     </li>
        
        
        <li><a class="edu" href="http://www.auanet.org/content/education-and-meetings/education-and-meetings.cfm"></a>
        <ul>
        <li><a href="http://www.auanet.org/content/education-and-meetings/educational-opportunities.cfm">Educational Calendar</a></li>
        <li><a href="http://www.aua2013.org" target="new">Annual Meeting 2013</a></li>
        <li><a href="http://www.aua2012.org" target="_new">Annual Meeting 2012</a></li>
        <!--<li><a href="http://www.aua2011.org" target="new">Annual Meeting 2011</a></li>-->
        <li><a href="http://www.auanet.org/content/education-and-meetings/on-line-education.cfm">Online Education</a></li>
	    <li><a href="http://www.auanet.org/eforms/elearning/core/">Urology Core Curriculum<sup><font color="#FF0000">New!</font></sup></a></li>
        <li><a href="http://www.auanet.org/content/education-and-meetings/med-stu-curriculum.cfm">National Medical Student  Curriculum</a></li>
        <li><a href="http://www.auanet.org/content/education-and-meetings/aium-ultrasound-guidelines.cfm">Ultrasound Accreditation</a></li>
        <li><a href="/eforms/cme/">CME Tests</a></li>              
        <li><a href="/eforms/sectioncme/">Section Meeting CME Requests</a></li>
        <li><a href="/eforms/transcripts/">CME Transcripts</a></li>
        <li><a href="/eforms/creditregistry/">Credit Registry</a></li>
        <li><a href="http://www.auanet.org/content/education-and-meetings/disclosures.cfm">Disclosures</a></li>
        <li><a href="http://www.auanet.org/eforms/committees/">Online Committee Acceptance</a></li>
        <li><a href="http://www.auanet.org/content/education-and-meetings/statements-and-policies.cfm">Statements &amp; Policies</a></li>
        <li><a href="http://www.auanet.org/content/education-and-meetings/scholarships-and-programs.cfm">Scholarships &amp; Programs</a></li>
        <li><a href="http://www.auanet.org/content/about-us/governance-and-policies.cfm?sub=committees#edu">Education Council</a></li>
        <li><a href="http://www.auanet.org/content/education-and-meetings/course-planning-resources.cfm">Course Planning Resources</a></li>
        <li><a href="http://www.auanet.org/content/education-and-meetings/section-submissions-for-course-of-choice.cfm">Section Submissions for Course of Choice</a></li>
        <li><a href="http://www.auanet.org/content/education-and-meetings/patient-education.cfm">Patient Education</a></li>
        <li><a href="http://www.auanet.org/content/education-and-meetings/online-education-pcp.cfm">Education for Primary Care Professionals</a></li>
        <li><a href="http://www.auanet.org/content/membership/join/allied-healthcare-professionals.cfm">Allied Healthcare Professionals</a></li>
        <li><a href="http://www.auanet.org/eforms/planning/index.cfm">2013 Annual Meeting Course Submissions</a></li>
        </ul>
        </li>
        
       
       <li><a class="guidelines" href="http://www.auanet.org/content/clinical-practice-guidelines/clinical-practice-guidelines.cfm"></a>
       <ul>
       <li><a href="http://www.auanet.org/content/clinical-practice-guidelines/who-we-are.cfm">Who We Are</a></li>
       <li><a href="http://www.auanet.org/content/clinical-practice-guidelines/clinical-guidelines.cfm">Clinical Guidance</a></li>
       <li><a href="http://www.auanet.org/content/clinical-practice-guidelines/clinical-guidelines.cfm#2">Best Practice Statements</a></li>
       <li><a href="http://www.auanet.org/content/clinical-practice-guidelines/clinical-guidelines.cfm#3">Other Documents</a></li>       <li><a href="http://www.auanet.org/content/clinical-practice-guidelines/definition-statements-and-guidelines.cfm">Definitions Statement</a></li>
       <li><a href="http://www.auanet.org/content/clinical-practice-guidelines/guidelines-process.cfm">Standard Operating Procedures Overview</a></li>
       <li><a href="http://www.auanet.org/content/education-and-meetings/disclosures/guidelines-coi.cfm">COI Disclosures</a></li>
	   <li><a href="http://www.auanet.org/content/clinical-practice-guidelines/clinical-guidelines/archived-guidelines.cfm">Archived Guidelines</a></li>
	   <li><a href="http://www.auanet.org/content/clinical-practice-guidelines/contact-us.cfm">Contact Information for Guidelines</a></li>
       </ul>
       </li>
        
        
        <li><a class="membership" href="http://www.auanet.org/content/membership/membership.cfm"></a>
        <ul>
        <li><a href="http://www.auanet.org/content/membership/about-membership.cfm">About AUA Membership</a></li>
        <li><a href="http://www.auanet.org/content/membership/join2.cfm"><strong><font color="#FF0000">Join</font></strong> the AUA!</a></li>
        <li><a href="http://www.auanet.org/content/membership/member-center.cfm" class="multi">AUA Member Center</a>
            <ul class="tier3">
            <li><a href="http://www.auanet.org/content/membership/member-center/pay-dues.cfm">Pay Dues</a></li>
            <li><a href="http://www.auanet.org/content/membership/member-center/find-a-member.cfm">Member Directory</a></li>
            </ul>
        <li><a href="http://www.auanet.org/content/membership/career-services.cfm">Career Services</a></li>
        <li><a href="http://www.auanet.org/content/membership/contact-us.cfm">Contact Us</a></li>
        </ul>
        </li>
        
        
        <li><a class="residency" href="http://www.auanet.org/content/residency/residency.cfm"></a>
        <ul>
        <li><a href="http://www.auanet.org/content/residency/what-is-urology.cfm">What is Urology?</a></li>              
        <li><a href="http://www.auanet.org/content/residency/residency-match.cfm">Residency Match 2012</a></li>
        <li><a href="http://www.auanet.org/content/residency/residency-timeline.cfm">Specialty Match Timelines</a></li>
        <li><a href="http://www.auanet.org/content/residency/residency-program.cfm">Residency Program</a></li>
        <li><a href="http://www.auanet.org/content/residency/residency-connection.cfm">Residency Connection</a></li>              
        <li><a href="http://www.auanet.org/content/residency/program-vacancies.cfm">Program Vacancies</a></li>
        <li><a href="http://www.auanet.org/content/residency/resident-education.cfm">Resident Education</a></li>
        <li><a href="http://www.auanet.org/content/residency/residents-committee.cfm">Residents Committee</a></li>
        <li><a href="http://www.auanet.org/content/residency/intl-residency-grant.cfm">International Residency Grant Program</a></li>
        </ul>
        </li>
        
        
        <li><a class="products" href="http://www.auanet.org/content/products/products.cfm"></a>
        <ul>
        <li><a href="http://www.auanet.org/content/products/the-journal-of-urology.cfm"><em>The Journal of Urology<sup>&reg;</sup></em></a></li>
        <li><a href="/appstore/">App Store</a></li>  
	    <li><a href="http://www.auanet.org/content/products/the-journal-of-urology-home-study-course.cfm"><em>The Journal of Urology<sup>&reg;</sup></em> Home Study Course</a></li>
        <li><a href="http://www.auanet.org/content/products/auanews.cfm"><em>AUANews</em></a></li>
        <li><a href="http://www.auanet.org/content/products/aua-update-series.cfm">AUA Update Series</a></li>
        <li><a href="http://www.auanet.org/content/products/self-assessment-study-program.cfm">Self-Assessment Study Program</a></li>
        <li><a href="http://www.auanet.org/content/products/clinical-guidelines.cfm">Clinical Guidelines</a></li>
        <li><a href="http://www.auanet.org/content/products/patient-information.cfm">Patient Education</a></li>
        
        <li><a href="http://www.auanet.org/content/products/dvds.cfm">DVDs/CD-ROMs</a></li>
        <li><a href="http://www.auanet.org/content/products/books.cfm">Books</a></li>
        <li><a href="http://www.auanet.org/content/membership/member-center/dues-faq.cfm">Membership Dues</a></li>     
        <!--<li><a href="http://www.auanet.org/content/products/membership-and-referral-directory.cfm">Membership &amp; Referral Directory</a></li>-->
        
        <li><a href="http://www.auanet.org/content/products/practice-managers-network.cfm">Practice Managers' Network</a></li>
   
        <li><a href="http://www.auanet.org/content/products/apparel-and-novelty-items.cfm">Apparel &amp; Novelty Items</a></li>
        <li><a href="http://www.auanet.org/content/products/corecurriculum.cfm">Urology Core Curriculum</a></li>
        </ul>
        </li>
        
        
        <li><a class="health" href="http://www.auanet.org/content/health-policy/health-policy.cfm"></a>
        <ul>
        <li><a href="http://www.auanet.org/content/health-policy/clinical-practice-guidelines.cfm">Clinical Practice Guidelines</a></li>
        <li><a href="http://www.auanet.org/content/health-policy/government-relations-and-advocacy.cfm">Government Relations and Advocacy</a></li>
        <li><a href="http://www.auanet.org/content/health-policy/practice-management.cfm">Practice Management</a></li>              <li><a href="http://www.auanet.org/content/health-policy/quality.cfm">Quality</a></li>  
        <li><a href="http://www.auanet.org/content/health-policy/regulation-and-reimbursement.cfm">Reimbursement and Regulation</a></li>
        <li><a href="http://www.auanet.org/content/health-policy/online-publications.cfm">Online Publications</a></li>
        </ul>
        </li>
            
        
        <li><a class="policies" href="http://www.auanet.org/content/aua-policies/aua-policies.cfm"></a>
        <ul>
        <li><a href="http://www.auanet.org/content/aua-policies/policy-statements.cfm">Policy Statements</a></li>
        <li><a href="http://www.auanet.org/content/aua-policies/code-of-ethics.cfm">Code of Ethics</a></li>
        <li><a href="http://www.auanet.org/content/aua-policies/position-statements.cfm">Position Statements</a></li>
        </ul>
        </li>
              
        
        <li><a class="international" href="http://www.auanet.org/content/international/international.cfm"></a>
        <ul>
	    <li><a href="http://www.auanet.org/content/international/resources.cfm">Additional AUA Resources</a></li>
        <li><a href="http://www.auanet.org/content/international/am.cfm">Annual Meeting</a></li>
        <li><a href="http://www.auanet.org/content/international/global-connections.cfm">AUA <em>Global Connections</em></a></li>
        <li><a href="http://www.auanet.org/content/international/guidelines.cfm">AUA Guidelines and Best Practice Statements</a></li>
        <li><a href="http://www.auanet.org/content/international/exchange-resident-programs.cfm">Exchange &amp; Resident Programs</a></li>
        <li><a href="http://www.auanet.org/content/international/volunteer-opportunities.cfm">Giving Back</a>
        <li><a href="http://www.auanet.org/content/international/international-academy-welcome.cfm">International Academy</a></li>
        <li><a href="http://www.auanet.org/content/international/intl-societies-and-orgs.cfm">International Societies and Organizations</a></li>
        <li><a href="http://www.auanet.org/content/international/world-ju.cfm"><em>Journal of Urology®</em></a></li>
        <li><a href="http://www.auanet.org/content/international/member-services.cfm">Member Services</a></li>
        <li><a href="http://www.auanet.org/content/international/news-and-notices.cfm">News and Notices</a>         
        <!--<li><a href="http://www.auanet.org/content/international/united-urology.cfm">United Urology: Together in Giving</a></li>-->
        </ul>
        </li>
        
        <li><a class="blankright"></a></li>
      </ul>

      </td>
    </tr>
    
      <tr>
        <td style="width:928;height:10;text-align:left;vertical-align:top;padding:0;background-color:#FFFFFF">&nbsp;</td>
      </tr>
    
		<tr>
        <td style="width:928;text-align:left;vertical-align:top;padding:0;background-color:#FFFFFF">
        
          <div id="page"><div id="page-inner">
        

    <a name="top" id="navigation-top"></a>
    <div id="skip-to-nav"><a href="#navigation"><?php print t('Skip to Navigation'); ?></a></div>

    <div id="header"><div id="header-inner" class="clear-block">
        <!--
        <div id="logo-title">
            <div id="logo"><a href="<?php print $base_path."../"; ?>" title="<?php print t('Home'); ?>" rel="home"><img src="<?php print $img_path ?>/img/logo.gif" alt="<?php print t('Home'); ?>" id="logo-image" /></a></div>
        </div> --> <!-- /#logo-title -->

      <?php if ($header): ?>
        <div id="header-blocks">
          <?php print $header; ?>
        </div> <!-- /#header-blocks -->
      <?php endif; ?>

    </div></div> <!-- /#header-inner, /#header -->

    <div id="main"><div id="main-inner" class="clear-block<?php if ($search_box || $primary_links || $secondary_links || $navbar) { print ' with-navbar'; } ?>">

      <div id="content"><div id="content-inner">

        <?php if ($mission): ?>
          <div id="mission"><?php print $mission; ?></div>
        <?php endif; ?>

        <?php if ($content_top): ?>
          <div id="content-top">
            <?php print $content_top; ?>
          </div> <!-- /#content-top -->
        <?php endif; ?>

        <?php if ($breadcrumb or $title or $tabs or $help or $messages): ?>
          <div id="content-header">
            <?php // print $breadcrumb; ?>
            <?php if ($title): ?>
              <h1 class="title"><?php print $title; ?></h1>
            <?php endif; ?>
            <?php if ($user->uid == 1) { print $messages;} ?>
            <?php if ($tabs): ?>
              <div class="tabs"><?php print $tabs; ?></div>
            <?php endif; ?>
            <?php print $help; ?>
          </div> <!-- /#content-header -->
        <?php endif; ?>

        <div id="content-area">
          <?php print $content; ?>
        </div>

<!-- 
        <?php if ($feed_icons): ?>
          <div class="feed-icons"><?php print $feed_icons; ?></div>
        <?php endif; ?>
 -->
 
        <?php if ($content_bottom): ?>
          <div id="content-bottom">
            <?php print $content_bottom; ?>
          </div> <!-- /#content-bottom -->
        <?php endif; ?>

      </div></div> <!-- /#content-inner, /#content -->

      <?php if ($sidebar_left): ?>
        <div id="sidebar-left"><div id="sidebar-left-inner">
          <?php //print $sidebar_left; ?>
        </div></div> <!-- /#sidebar-left-inner, /#sidebar-left -->
      <?php endif; ?>

        <div id="sidebar-right"><div id="sidebar-right-inner">
        
          <div id="altcontainer2">
            <div id="companionlogo">
              <img src="<?php print $img_path ?>/img/logo-companion.gif" id="logo-companion" alt="CMECompanion" class="" />
            </div>      
          <!-- Accordion Menu Start -->
            <div id="list1">            
            <?php print $sidebar_right; ?>
            </div>
          </div>
      <!--  altcontainer2 -->
        </div></div> <!-- /#sidebar-right-inner, /#sidebar-right -->

    </div></div> <!-- /#main-inner, /#main -->

    <div id="footer"><div id="footer-inner">
      
      <div id="footer-message">
       <center>
       <?php print $footer_message; ?><img src="<?php print $img_path ?>/img/footerlogo.png" alt="" class="center" />
       </center>
      </div>

    </div></div> <!-- /#footer-inner, /#footer -->

    <?php if ($closure_region): ?>
      <div id="closure-blocks"><?php print $closure_region; ?></div>
    <?php endif; ?>

    <?php print $closure; ?>
  </div></div> <!-- /#page-inner, /#page -->

<!--aua-->
</td></tr>
<tr><td style="width:928px;text-align:left;certical-align:top;padding:0">&nbsp;</td></tr>
<tr><td style="width:928px;text-align:left;certical-align:top;padding:0">&nbsp;</td></tr>
    <tr>
      <td style="width:15px;text-align:left;vertical-align:top;padding:0" class="wing_btmleft">&nbsp;</td>
      <td style="width:928px;text-align:left;certical-align:top;padding:0">
        <div id="auafooter">
          <div id="auafooterbottom">
            <ul>
              <li><a class='auafootermenu' href="http://www.auanet.org/content/contact/contact.cfm">Contact</a>&nbsp;&nbsp;&nbsp;I</li>
              <li><a class='auafootermenu' href="http://www.auanet.org/content/press/press.cfm">&nbsp;&nbsp;&nbsp;Press</a>&nbsp;&nbsp;&nbsp;I</li>
              <li><a class='auafootermenu' href="http://www.auanet.org/content/about-us/sections.cfm">&nbsp;&nbsp;&nbsp;Sections</a>&nbsp;&nbsp;&nbsp;I</li>
              <li><a class='auafootermenu' href="http://www.auafoundation.org/" target="new">&nbsp;&nbsp;&nbsp;AUA Foundation</a>&nbsp;&nbsp;&nbsp;I</li>
              <li><a class='auafootermenu' href="http://www.auafoundation.org/researchpage.asp" target="new">&nbsp;&nbsp;&nbsp;Research</a>&nbsp;&nbsp;&nbsp;I</li>
              <li><a class='auafootermenu' href="http://www.auanet.org/content/disclaimer/disclaimer.cfm">&nbsp;&nbsp;&nbsp;Disclaimers</a>&nbsp;&nbsp;&nbsp;I</li>
              <li><a class='auafootermenu' href="http://www.auanet.org/content/site-map/site-map.cfm">&nbsp;&nbsp;&nbsp;Site Map</a></li>
            </ul>
          </div>
        </div>
      </td>
      <td style="width:15px;text-align:left;vertical-align:top;padding:0" class="wing_btmrt">&nbsp;</td>
    </tr>
  </table>
  
</div> <!--  centering -->
</body>
</html>
