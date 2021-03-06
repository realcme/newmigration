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
<script type="text/javascript">
$(function(){
	$('#nav>ul>li').each(function(){
		if($(this).children('div.submenu').length > 0)
		{
			$(this).hover(function(){
				$(this).find('a:first').addClass('hover');
				$(this).children('div.submenu').show();
			},
			function(){
				$(this).find('a:first').removeClass('hover');
				$(this).children('div.submenu').hide();
			});
		}		
	});	
});
</script>


  <div id="page"><div id="page-inner">

    <div id="header"><div id="header-inner" class="clear-block">
    
    <div id="logo">
      <a class="header" title="American Gastroenterological Association - Advancing the Science and Practice of Gastroenterology" href="/cms">American Gastroenterological Association - Advancing the Science and Practice of Gastroenterology</a></h1>
      <div class="menu" id="utility">
  <a title="Home" class="first" href="http://www.gastro.org/">Home</a> |
  <a title="My AGA" href="http://www.gastro.org/my-aga">My AGA</a> |
  <a title="Join or Renew" href="http://www.gastro.org/join-or-renew/join-aga">Join or Renew</a> |
  <a title="Store" href="https://netforum.gastro.org/eweb/DynamicPage.aspx?expires=yes&amp;webcode=COEMerchandiseSearch&amp;listall=1">Store</a> |
  <a title="Patient Center" href="http://www.gastro.org/patient-center">Patient Center</a> |
  <a title="Corporate Relations" href="http://www.gastro.org/corporate-relations">Corporate Relations</a> |
  <a title="Careers" href="http://www.gastro.org/careers">Careers</a> |
  <a title="AGA Foundation" href="http://www.FDHN.org">AGA Foundation</a> |
  <a title="Pressroom" href="http://www.gastro.org/pressroom">Pressroom</a> |
  <a title="Contact" href="http://www.gastro.org/about-aga/contact-us">Contact</a>
</div>
    </div>
    
<div id="nav">
    <ul>
      
      <li id="navpractice"><a title="Practice" href="http://www.gastro.org/practice" class="">Practice</a><div class="submenu" id="navpractice-submenu" style="display: none;">
  <ul>
    <li class="depth-1 first" id="section_5">
      <a href="http://www.gastro.org/practice/resource-library">Practice Resource Library</a>
    </li>
    <li class="depth-1" id="section_21">
      <a href="http://www.gastro.org/practice/medical-position-statements">Medical Position Statements</a>
    </li>
    <li class="depth-1" id="section_22">
      <a href="http://www.gastro.org/practice/quality-initiatives">Quality Initiatives</a>
    </li>
    <li class="depth-1" id="section_24">
      <a href="http://www.gastro.org/practice/practice-management">Practice Management</a>
    </li>
    <li class="depth-1" id="section_76">
      <a href="http://www.gastro.org/practice/digestive-health-outcomes-registry">AGA Digestive Health Outcomes Registry</a>
    </li>
    <li class="depth-1 last" id="section_131">
      <a href="http://www.gastro.org/corporate-relations/payor-policy-letters">Payor Policy &amp; Coverage Comment Letters</a>
    </li>
  </ul>
</div>

</li>
      
      <li id="navresearch"><a title="Research" href="http://www.gastro.org/research" class="">Research</a><div class="submenu" id="navresearch-submenu" style="display: none;">
  <ul>
    <li class="depth-1 first" id="section_26">
      <a href="http://www.gastro.org/research/research-resource-library">Research Resource Library</a>
    </li>
    <li class="depth-1" id="section_27">
      <a href="http://www.gastro.org/research/find-funding">Find Funding</a>
    </li>
    <li class="depth-1" id="section_29">
      <a href="http://www.gastro.org/research/publish-with-aga">Publish with AGA</a>
    </li>
    <li class="depth-1 last" id="page_1070">
      <a href="http://www.gastro.org/research/research-funding-opportunities">Other Research Funding Opportunities</a>
    </li>
  </ul>
</div>

</li>
      
      <li id="naveducation"><a title="Education &amp; Meetings" href="http://www.gastro.org/education-meetings">Education &amp; Meetings</a><div class="submenu" id="naveducation-submenu">
  <ul>
    <li class="depth-1 first" id="page_121">
      <a href="http://www.gastro.org/education-meetings/upcoming">Calendar of Events</a>
    </li>
    <li class="depth-1" id="section_73">
      <a href="http://www.gastro.org/education-meetings/live-meetings">Live Meetings</a>
    </li>
    <li class="depth-1" id="section_31">
      <a href="http://www.gastro.org/education-meetings/online-education">Online Education</a>
    </li>
    <li class="depth-1" id="section_126">
      <a href="http://www.gastro.org/education-meetings/educational-materials">Educational Materials</a>
    </li>
    <li class="depth-1" id="link_26">
      <a href="javascript:windowHandle = window.open('http://www.gilearn.org/library.cfm','windowname','width=800,height=600,resizable=yes,scrollbars=yes'); windowHandle.focus();">My Library</a>
    </li>
    <li class="depth-1" id="link_27">
      <a href="javascript:windowHandle = window.open('http://www.gilearn.org/cme.cfm','windowname','width=800,height=600,resizable=yes,scrollbars=yes'); windowHandle.focus();">My CME</a>
    </li>
    <li class="depth-1" id="link_28">
      <a href="javascript:windowHandle = window.open('http://www.gilearn.org/journalclub.cfm','windowname','width=800,height=600,resizable=yes,scrollbars=yes'); windowHandle.focus();">Journal Club</a>
    </li>
    <li class="depth-1" id="section_33">
      <a href="http://www.gastro.org/education-meetings/maintenance-of-certification">Maintenance of Certification</a>
    </li>
    <li class="depth-1" id="link_29">
      <a href="javascript:windowHandle = window.open('http://www.gilearn.org/licenses.cfm','windowname','width=800,height=600,resizable=yes,scrollbars=yes'); windowHandle.focus();">My Licenses</a>
    </li>
    <li class="depth-1" id="link_30">
      <a href="javascript:windowHandle = window.open('http://www.gilearn.org/pointofcare.cfm','windowname','width=800,height=600,resizable=yes,scrollbars=yes'); windowHandle.focus();">My Point of Care CME</a>
    </li>
    <li class="depth-1" id="link_31">
      <a href="javascript:windowHandle = window.open('http://www.gilearn.org/readings.cfm','windowname','width=800,height=600,resizable=yes,scrollbars=yes'); windowHandle.focus();">Suggested Readings</a>
    </li>
    <li class="depth-1" id="page_133">
      <a href="http://www.gastro.org/education-meetings/digestive-disease-week-ddw">Digestive Disease Week (DDW)</a>
    </li>
    <li class="depth-1 last" id="section_127">
      <a href="http://www.gastro.org/clinicalcongress">AGA Clinical Congress of Gastroenterology and Hepatology</a>
    </li>
  </ul>
</div>

</li>
      
      <li id="navadvocacy"><a title="Advocacy &amp; Regulations" href="http://www.gastro.org/advocacy-regulation">Advocacy &amp; Regulations</a><div class="submenu" id="navadvocacy-submenu">
  <ul>
    <li class="depth-1 first" id="section_35">
      <a href="http://www.gastro.org/advocacy-regulation/legislative-issues">Legislative Issues</a>
    </li>
    <li class="depth-1" id="section_45">
      <a href="http://www.gastro.org/advocacy-regulation/regulatory-issues">Regulatory Issues</a>
    </li>
    <li class="depth-1" id="section_46">
      <a href="http://www.gastro.org/advocacy-regulation/take-action">Take Action</a>
    </li>
    <li class="depth-1 last" id="section_47">
      <a href="http://www.gastro.org/advocacy-regulation/aga-political-action-committee">AGA Political Action Committee</a>
    </li>
  </ul>
</div>

</li>
      
      <li id="navgi"><a title="GI Fellowship" href="http://www.gastro.org/gi-fellowship">GI Fellowship</a><div class="submenu" id="navgi-submenu">
  <ul>
    <li class="depth-1 first" id="page_180">
      <a href="http://www.gastro.org/gi-fellowship/training-program-databases">Training Program Databases</a>
    </li>
    <li class="depth-1" id="section_71">
      <a href="http://www.gastro.org/gi-fellowship/gastroenterology-fellowship-match">Gastroenterology Fellowship Match</a>
    </li>
    <li class="depth-1" id="page_182">
      <a href="http://www.gastro.org/gi-fellowship/electronic-residency-application-service">Electronic Residency Application Service</a>
    </li>
    <li class="depth-1" id="page_183">
      <a href="http://www.gastro.org/gi-fellowship/gi-core-curriculum">GI Core Curriculum </a>
    </li>
    <li class="depth-1" id="page_184">
      <a href="http://www.gastro.org/gi-fellowship/aga-institute-gastroenterology-training-examination-gte">AGA Institute Gastroenterology Training Examination</a>
    </li>
    <li class="depth-1" id="page_185">
      <a href="http://www.gastro.org/gi-fellowship/resources-for-gi-fellows-fellowship">Resources for GI Fellows &amp; Fellowship</a>
    </li>
    <li class="depth-1" id="link_15">
      <a href="javascript:windowHandle = window.open('http://www.gilearn.org/readings.cfm','windowname','width=800,height=600,resizable=yes,scrollbars=yes'); windowHandle.focus();">Suggested Readings</a>
    </li>
    <li class="depth-1" id="link_23">
      <a href="javascript:windowHandle%20=%20window.open('http://www.gilearn.org/journalclub.cfm','windowname','width=800,height=600,resizable=yes,scrollbars=yes');%20windowHandle.focus();">Journal Club</a>
    </li>
    <li class="depth-1" id="link_16">
      <a href="javascript:windowHandle = window.open('http://www.gilearn.org/procedurelog.cfm','windowname','width=800,height=600,resizable=yes,scrollbars=yes'); windowHandle.focus();">My Procedure Log</a>
    </li>
    <li class="depth-1 last" id="section_49">
      <a href="http://www.gastro.org/gi-fellowship/educator-resources">Educator Resources</a>
    </li>
  </ul>
</div>

</li>
      
      <li id="navjournal"><a title="Journals &amp; Publications" href="http://www.gastro.org/journals-publications">Journals &amp; Publications</a><div class="submenu" id="navjournal-submenu">
  <ul>
    <li class="depth-1 first" id="section_81">
      <a href="http://www.gastro.org/journals-publications/gastroenterology">Gastroenterology</a>
    </li>
    <li class="depth-1" id="section_82">
      <a href="http://www.gastro.org/journals-publications/clinical-gastroenterology-hepatology">Clinical Gastroenterology and Hepatology</a>
    </li>
    <li class="depth-1" id="section_51">
      <a href="http://www.gastro.org/journals-publications/aga-edigest">AGA eDigest</a>
    </li>
    <li class="depth-1" id="section_52">
      <a href="http://www.gastro.org/journals-publications/aga-perspectives">AGA Perspectives</a>
    </li>
    <li class="depth-1" id="section_53">
      <a href="http://www.gastro.org/journals-publications/gi-hepatology-news">GI &amp; Hepatology News</a>
    </li>
    <li class="depth-1" id="section_54">
      <a href="http://www.gastro.org/journals-publications/gi-quality-practice-management-news">GI Quality and Practice Management News</a>
    </li>
    <li class="depth-1" id="page_205">
      <a href="http://www.gastro.org/journals-publications/aga-institute-press">AGA Press</a>
    </li>
    <li class="depth-1 last" id="page_206">
      <a href="http://www.gastro.org/journals-publications/advertise-with-aga">Advertise with AGA</a>
    </li>
  </ul>
</div>

</li>
      
      <li id="navcommunity"><a title="Community" href="http://www.gastro.org/community">Community</a><div class="submenu" id="navcommunity-submenu">
  <ul>
    <li class="depth-1 first" id="page_208">
      <a href="http://www.gastro.org/community/experts-opinions">Experts &amp; Opinions</a>
    </li>
    <li class="depth-1" id="page_209">
      <a href="http://www.gastro.org/community/discussion-forums">Discussion Forums</a>
    </li>
    <li class="depth-1" id="page_215">
      <a href="http://www.gastro.org/community/classifieds">Classifieds</a>
    </li>
    <li class="depth-1" id="section_57">
      <a href="http://www.gastro.org/community/awards-nominations">Awards &amp; Nominations</a>
    </li>
    <li class="depth-1" id="section_58">
      <a href="http://www.gastro.org/community/2009-award-winners/2010-award-winners">Recognition Award Winners</a>
    </li>
    <li class="depth-1" id="section_147">
      <a href="http://www.gastro.org/community/awards-nominations/fdhn-award-recipients">AGA Foundation Research Award Recipients</a>
    </li>
    <li class="depth-1" id="link_9">
      <a href="javascript:windowHandle = window.open('http://www.gilearn.org/journalclub.cfm','windowname','width=800,height=600,resizable=yes,scrollbars=yes'); windowHandle.focus();">Journal Club</a>
    </li>
    <li class="depth-1 last" id="link_10">
      <a href="https://netforum.gastro.org/eweb/DynamicPage.aspx?Site=AGA&amp;WebKey=a83de688-52b5-42f7-bd2f-7f2a93d54ce3">Member Directory</a>
    </li>
  </ul>
</div>

</li>
      
      <li id="navabout"><a title="About AGA" href="http://www.gastro.org/about-aga">About AGA</a><div class="submenu" id="navabout-submenu">
  <ul>
    <li class="depth-1 first" id="page_225">
      <a href="http://www.gastro.org/about-aga/governance-strategy">Strategic Plan</a>
    </li>
    <li class="depth-1" id="page_620">
      <a href="http://www.gastro.org/about-aga/governing-board">Governing Board</a>
    </li>
    <li class="depth-1" id="section_60">
      <a href="http://www.gastro.org/about-aga/committees">Committees</a>
    </li>
    <li class="depth-1" id="section_61">
      <a href="http://www.gastro.org/about-aga/council-sections">Council &amp; Sections</a>
    </li>
    <li class="depth-1" id="section_62">
      <a href="http://www.gastro.org/about-aga/reports-bylaws">Reports &amp; Bylaws</a>
    </li>
    <li class="depth-1" id="section_63">
      <a href="http://www.gastro.org/about-aga/aga-fellows-program">AGA Fellows Program</a>
    </li>
    <li class="depth-1" id="page_260">
      <a href="http://www.gastro.org/about-aga/national-office-staff">National Office Staff</a>
    </li>
    <li class="depth-1" id="page_298">
      <a href="http://www.gastro.org/about-aga/staff-contacts-for-frequently-asked-questions">Staff Contacts for Frequently Asked Questions</a>
    </li>
    <li class="depth-1" id="page_261">
      <a href="http://www.gastro.org/about-aga/aga-job-openings">AGA Job Openings</a>
    </li>
    <li class="depth-1 last" id="page_262">
      <a href="http://www.gastro.org/about-aga/contact-us">Contact Us</a>
    </li>
  </ul>
</div>

</li>
      
    </ul>
  </div>

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

    </div>
    
    <div id="footer"><div id="footer-inner">
      
      <div id="footer-message">
       <center>
       <?php print $footer_message; ?><img src="<?php print $img_path ?>/img/footerlogo.png" alt="" class="center" />
       </center>
      </div>

    </div></div> <!-- /#footer-inner, /#footer -->    
    </div> <!-- /#main-inner, /#main -->


<div id="gastro-footer">
<p style="float:left">&copy; 2010 American Gastroenterological Association. All rights reserved.</p>
    <p class="footer-links">
      <a href="/cms">Home</a> |
      <a href="http://www.gastro.org/privacy-policy" title="Read our privacy policy">Privacy Policy</a> |
      <a href="http://www.gastro.org/rss" title="Subscribe to the RSS feed">RSS Feed</a> |
      <a href="http://www.gastro.org/about-aga/contact-us" title="Get in touch">Contact Us</a>

    </p>

	</div>    

    <?php if ($closure_region): ?>
      <div id="closure-blocks"><?php print $closure_region; ?></div>
    <?php endif; ?>

    <?php print $closure; ?>

  </div></div> <!-- /#page-inner, /#page -->
</body>
</html>
