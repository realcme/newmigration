<?php
  global $user;
  $img_path = base_path() . path_to_subtheme();
  $cmeplanet_path = base_path() . path_to_subtheme().'/cmeplanet_files/';
?>  
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language; ?>" xml:lang="<?php print $language; ?>">

<head>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <?php print $styles; ?>

  <style type="text/css">
  /* Needed for aggregation in IE6 */
  #sidebar-right  {
    margin-left: 560px; /* Width of content + sidebar-left. */
    _margin-left: 560px;
  }
  </style>
  
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

      <div id="top_pic" style="padding-top: 5px;"></div>
      <div id="cmeplanetheader">
        <a href="http://www.cmeplanet.com/"><div id="cmeplanetheader_link"></div></a>
      </div> <!-- /#header-inner, /#header -->

  <div id="page" class="center"><div id="page-inner">




      <table id="main" width="965" border="0" cellpadding="0" cellspacing="0">
        <tbody><tr valign="top">
          <td class="left_shadow"><br>
          </td>
          <td class="wrapper">
           
            <div id="mainbody">
            
              <div id="tabbar">
                <table width="100%">
                  <tbody><tr>
                  <td><a href="http://www.cmeplanet.com"><img id="cmeplanethome" src="<?php print $img_path ?>/img/cmeplanet-home.png"></img></a></td>
                    <td style="padding-left: 10px; padding-top: 5px;" valign="top" align="left">  
                      <form action="http://www.cmeplanet.com/index.php?option=logout" method="post" name="logout">
                      <span class="tabbar_login"></span><span class="tabbar_login"></span>&nbsp;
                      <input name="Submit" class="button" value="Logout" type="submit">
                        <input name="option" value="logout" type="hidden">
                      <input name="op2" value="logout" type="hidden">
                      <input name="lang" value="english" type="hidden">
                      <input name="return" value="http://www.cmeplanet.com/index.php" type="hidden">
                        <input name="message" value="0" type="hidden">
                    </form>
                    </td>
                    <td style="padding-top: 5px;" valign="top" align="right">
                      <form action="http://www.cmeplanet.com/index.php?option=com_search&amp;Itemid=5" method="get">
                        <div class="search">
                          <input name="searchword" id="mod_search_searchword" maxlength="20" alt="search" class="inputbox" size="20" value=" " onblur="if(this.value=='') this.value=' ';" onfocus="if(this.value==' ') this.value='';" type="text"><input value="Search" class="button" type="submit">
                        </div>
                        <input name="option" value="com_search" type="hidden">
                        <input name="Itemid" value="5" type="hidden"> 
                      </form>
                    </td>
                  </tr>
                </tbody></table>
              </div>
              <img src="<?php print $cmeplanet_path; ?>spacer.png" alt="" title="" width="5" height="16">
              
      <?php if ($header): ?>
        <div id="header-blocks">
          <?php print $header; ?>
        </div> <!-- /#header-blocks -->
      <?php endif; ?>
              
              
              <div id="borderound">
                <div class="top">
                </div>
                <div class="middle">
                  <table width="100%" align="center" border="0" cellpadding="0" cellspacing="0" style="padding: 0px; margin: 0px">
                    <tbody><tr valign="top">

             
            <td class="maincol" colspan=3 style="padding: 0px">
            
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



                      </td>
                 </tr>
                  </tbody></table>
                </div>
                <div class="cmeplanetbottom">
                </div>
              </div>
            </div>
            <div id="footer_divider">
            </div>
          </td>
          <td class="right_shadow"><br>
          </td>
        </tr>
        <tr>
          <td class="cmeplanetbottom" colspan="3" align="center" style="padding: 0px">
                <table class="moduletable" cellpadding="0" cellspacing="0">
        <tbody><tr>
      <td  style="padding: 0px">
      <span id="cmeplanetfooter">
        &copy; 2008 Voxmedia International <span style="color: rgb(255, 255, 255);">&nbsp;|&nbsp;</span> 
        <a href="http://www.cmeplanet.com/images/terms_conditions.pdf" target="_blank" title="blocked::http://www.cmeplanet.com/images/terms_conditions.pdf">Privacy Policy</a>
        <span style="color: rgb(255, 255, 255);">&nbsp;| </span>For assistance with this website contact&nbsp;
        <span style="color: rgb(255, 255, 255);">
 <script language='JavaScript' type='text/javascript'>
 <!--
 var prefix = '&#109;a' + 'i&#108;' + '&#116;o';
 var path = 'hr' + 'ef' + '=';
 var addy61748 = 'w&#101;bm&#97;st&#101;r' + '&#64;';
 addy61748 = addy61748 + 'cm&#101;pl&#97;n&#101;t' + '&#46;' + 'c&#111;m';
 var addy_text61748 = 'w&#101;bm&#97;st&#101;r' + '&#64;' + 'cm&#101;pl&#97;n&#101;t' + '&#46;' + 'c&#111;m';
 document.write( '<a ' + path + '\'' + prefix + ':' + addy61748 + '\'>' );
 document.write( addy_text61748 );
 document.write( '<\/a>' );
 //-->\n </script><script language='JavaScript' type='text/javascript'>
 <!--
 document.write( '<span style=\'display: none;\'>' );
 //-->
 </script>This e-mail address is being protected from spam bots, you need JavaScript enabled to view it
 <script language='JavaScript' type='text/javascript'>
 <!--
 document.write( '</' );
 document.write( 'span>' );
 //-->
 </script>

        </span></span></span>      </td>
    </tr>
    </tbody></table>
              </td>
        </tr>
      </tbody></table>






  </div></div> <!-- /#page-inner, /#page -->

</body>
</html>
