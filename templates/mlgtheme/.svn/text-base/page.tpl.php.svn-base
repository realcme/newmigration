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
<div id="mlgwrapper">
  <div id="mlgheader" >
    <div class="top-block">
      <div class="top-holder">
        <div class="toolbar-left">  
          <ul class="sf-js-enabled">
            <li id="menu-item-468" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-468"><a href="http://www.medlearninggroup.com/" >Home</a></li>
            <li id="menu-item-467" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-467"><a href="http://www.medlearninggroup.com/contact-us/" >Contact Us</a></li>
          </ul>
        </div><!-- end toolbar-left -->
        <div class="toolbar-right">
    			<div class="textwidget"><p><a href="http://www.medlearninggroup.com/?p=1175" >Blog</a> | <b>866-484-3942</b> </p></div>
  		  </div><!-- end toolbar-right -->
      </div><!-- end top-holder -->
    </div><!-- end top-block -->
    <div class="header-holder">
      <div class="rays">
        <div class="header-area">
          <a href="http://www.medlearninggroup.com" class="logo"><img src="http://www.medlearninggroup.com/wp-content/uploads/2013/04/MLG-Logo_reversed-no-circle.png" alt="Med Learning Group" /></a>
          <nav>
            <ul id="menu-main-nav">
              <li id="item-77" class="menu-item menu-item-type-post_type menu-item-object-page parent">
                <a title="about MLG" href="http://www.medlearninggroup.com/sample-page-2/" ><span><strong>About Us</strong></span></a>
                <div class="drop">
                  <div class="t"></div>
                  <div class="c">
                    <ul class="sub-menu" style="display: block; left: 0px;">
                      <li id="item-79" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://www.medlearninggroup.com/sample-page-2/test-1/" ><span>Mission Statement</span></a></li>
                      <li id="item-113" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://www.medlearninggroup.com/sample-page-2/acccreditation/" ><span>Acccreditation</span></a></li>
                      <li id="item-1223" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://www.medlearninggroup.com/ultimate-medical-academy/" ><span>Ultimate Medical Academy</span></a></li>
                    </ul>
                  </div>
                  <div class="b"></div>
                </div>
              </li>
              <li id="item-114" class="menu-item menu-item-type-post_type menu-item-object-page"><a title="collaborations" href="http://www.medlearninggroup.com/partnerships/" ><span><strong>Partnerships</strong></span></a></li>
              <li id="item-81" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://www.medlearninggroup.com/test-2/" ><span><strong>The Value <br />Proposition</strong></span></a></li>
              <li id="item-1302" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-10 current_page_item"><a href="http://www.medlearninggroup.com/cme-programming/" ><span><strong>CME <br/>Programming</strong></span></a></li>
              <li id="item-111" class="menu-item menu-item-type-post_type menu-item-object-page"><a title="what people say" href="http://www.medlearninggroup.com/testimonials/" ><span><strong>Testimonials</strong></span></a></li>
            </ul>
          </nav>
        </div><!-- header-area -->
      </div><!-- end rays -->
    </div><!-- end header-holder -->
  </div><!-- end mlgheader -->


  <div id="mlgmain">
    <div class="mlgmain-area">
  
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
           <?php print $footer_message; ?><img src="<?php print $img_path ?>/img/footerlogo.gif" alt="" class="center" />
           </center>
          </div>
    
        </div></div> <!-- /#footer-inner, /#footer -->
    
        <?php if ($closure_region): ?>
          <div id="closure-blocks"><?php print $closure_region; ?></div>
        <?php endif; ?>
    
        <?php print $closure; ?>
    
      </div></div> <!-- /#page-inner, /#page -->
    
    </div><!-- main-area -->
    <div id="mlgfooter">
      <div class="footer-area">
        <div class="footer-wrapper">
          <div class="footer-holder">
            <div class="one_fourth"><h3>Quick Links</h3>
              <ul class="sub-menu">
                <li id="menu-item-978" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-978"><a href="http://www.medlearninggroup.com/" >Home</a></li>
                <li id="menu-item-981" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-981"><a href="http://www.medlearninggroup.com/sample-page-2/" >About Med Learning Group</a></li>
                <li id="menu-item-980" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-980"><a href="http://www.medlearninggroup.com/partnerships/" >Partnerships</a></li>
                <li id="menu-item-977" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-977"><a href="http://www.medlearninggroup.com/test-2/" >The Value Proposition</a></li>
                <li id="menu-item-1158" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1158"><a href="http://www.medlearninggroup.com/current-cme/" >CME Programming</a></li>
                <li id="menu-item-1078" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1078"><a href="http://www.medlearninggroup.com/testimonials/" >Testimonials</a></li>
                <li id="menu-item-976" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-976"><a href="http://www.medlearninggroup.com/contact-us/" >Contact Us</a></li>
                <li id="menu-item-988" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-988"><a href="http://www.medlearninggroup.com/privacy-policy/" >Privacy Policy</a></li>
              </ul>
            </div>
            <div class="one_fourth"><h3>Useful Resources</h3>
              <div class="textwidget"><p class="xoxo blogroll">
                <img src="http://s3.truethemes.net/theme-xml-content/wp-karma/footer-useful-link.png"> Accreditation Council for Continuing Medical Education. <br/>Visit the <a href="http://www.accme.org/" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','http://www.accme.org']);" target="_blank">ACCME website</a><br/><br />
                <img src="http://s3.truethemes.net/theme-xml-content/wp-karma/footer-useful-link.png">Alliance for Continuing Education in the Health Professions.  <br/>Visit <a href="http://www.acehp.org/" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','http://www.acehp.org']);" target="_blank">the ACEHP website</a><br/></p>
              </div>
    		    </div>
    		    <div class="one_fourth"><h3>Connect with Us</h3>
    		      <div class="textwidget"><p><a href="http://www.medlearninggroup.com/?feed=rss2"  target="_blank">
    		        <img src="http://www.medlearninggroup.com/wp-content/uploads/2013/05/feed-32x32.png" border="0" /></a>&nbsp;<a href="https://www.facebook.com/pages/Med-Learning-Group/120223761508172" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','http://www.facebook.com']);" target="_blank"><img src="http://www.medlearninggroup.com/wp-content/uploads/2013/05/facebook-32x32.png" border="0" /></a></p>
              </div>
    		    </div>
    		    <div class="one_fourth_last">
              <h3>Join our Newsletter</h3>			
              <div class="textwidget">
                <div id='contact-form-widget-4'>
                  <form action='http://www.medlearninggroup.com/' method='post' class='contact-form commentsblock'>
                    <div>
                  		<label for='widget-4-name' class='name'>Name<span>(required)</span></label><br />
                  		<input type='text' name='widget-4-name' id='widget-4-name' value='' class='name'/>
                  	</div>
                    <div>
                  		<label for='widget-4-email' class='grunion-field-label email'>Email<span>(required)</span></label><br />
                  		<input type='text' name='widget-4-email' id='widget-4-email' value='' class='email'/>
                  	</div>
                    <p class='contact-submit'>
                  		<input type='submit' value='SUBMIT' class='ka-form-submit'/><br />
                  		<input type="hidden" id="_wpnonce" name="_wpnonce" value="3fdf9a50ad" />
                  		<input type="hidden" name="_wp_http_referer" value="http://www.medlearninggroup.com/cme-programming/cme-programming/" /><br />
                  		<input type='hidden' name='contact-form-id' value='widget-4' />
    	              </p>
                  </form>
                </div><!-- end contact-form-widget-4 -->
              </div>
    	    	</div>
          </div><!-- footer-holder -->
        </div><!-- end footer-wrapper -->
      </div><!-- end footer-area -->
    </div><!-- end footer -->
  
  
    <div id="footer_bottom">
      <div class="info">
        <div id="foot_left">&nbsp;<div class="textwidget"><p>Copyright © 2013 Med Learning Group. All rights reserved.</p></div></div><!-- end foot_left -->
        <div id="foot_right">
          <div class="top-footer"><a href="#" class="link-top">top</a></div>
          <ul>
            <li id="menu-item-955" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-955"><a href="http://www.medlearninggroup.com/" >Home</a></li>
            <li id="menu-item-957" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-957"><a href="http://www.medlearninggroup.com/sample-page-2/" >About Med Learning Group</a></li>
            <li id="menu-item-1159" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1159"><a href="http://www.medlearninggroup.com/current-cme/" >CME Programming</a></li>
            <li id="menu-item-954" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-954"><a href="http://www.medlearninggroup.com/contact-us/" >Contact Us</a></li>
            <li id="menu-item-990" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-990"><a href="http://www.medlearninggroup.com/privacy-policy/" >Privacy Policy</a></li>
          </ul>
        </div><!-- end foot_right -->
      </div><!-- end info -->
    </div><!-- end footer_bottom -->

  </div><!-- main --> 
  
</div><!-- end mlgwrapper -->
</body>
</html>