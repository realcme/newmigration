<?php
  global $user;
  $img_path = base_path() . path_to_subtheme();
  $mm_img_path = base_path() . path_to_subtheme().'/img/mm/';
?>  
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language; ?>" xml:lang="<?php print $language; ?>">

<head>
  <title><?php print $head_title; ?> - Modern Medicine</title>
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
  
<script language="javascript">

function _hbxStrip(a){

            a = a.split("|").join("");

            a = a.split("&").join("");

            a = a.split("'").join("");

            a = a.split("#").join("");

            a = a.split("$").join("");

            a = a.split("%").join("");

            a = a.split("^").join("");

            a = a.split("*").join("");

            a = a.split(":").join("");

            a = a.split("!").join("");

            a = a.split("<").join("");

            a = a.split(">").join("");

            a = a.split("~").join("");

            a = a.split(";").join("");

            a = a.split(" ").join("+");

            return a;    

}

</script>

<script language="javascript">
  function processAcorCookie(){
    //reading and splitting the whole cookie
    if (document.cookie && document.cookie !=""){
      var whole_cookie = unescape(document.cookie);
      var each_cookie = whole_cookie.split(";");
    
      //sorting loop
      for (i = 0; i < each_cookie.length; i++){
        if (each_cookie[i].indexOf("ACOR=") > -1){          
          var acorCookie = each_cookie[i].split("{")[1];            
          acorCookie = acorCookie.substring(0, acorCookie.length-1);        
          return acorCookie.split(",");           
        }
      }//ends FOR
    }
    return null;      
  }//ends process_cookie() function
  
  function getAcorData(dataArray, name){
    if(dataArray && dataArray.length > 0){
      for(i = 0; i < dataArray.length; i++) {     
        if(dataArray[i].indexOf(name)>=0){    
          return dataArray[i].substring(dataArray[i].indexOf("=")+1);
        }
      }
    }
  }
</script>
<script language="javaScript" type="text/javascript">
         var site = "modernmedicine";
</script>
<script language="javaScript" type="text/javascript" src="http://www.modernmedicine.com/modernmedicine/sitewide/js/accipiterHead.js"></script>
<script language="javaScript" type="text/javascript" src="http://www.modernmedicine.com/modernmedicine/sitewide/js/acorCookieData.js"></script>
<script language="javaScript" type="text/javascript" src="http://www.modernmedicine.com/modernmedicine/sitewide/js/onload.js"></script>
<script language="javaScript" type="text/javascript" src="http://www.modernmedicine.com/modernmedicine/sitewide/js/renderAds.js"></script>

<script language="javaScript" type="text/javascript">
var pageName = escape("RealCME");
var mlcTextString = escape("RealCME");
document.write ('<script type="text/javascript" src="http://www.modernmedicine.com/modernmedicine/sitewide/components/hitBox.jsp?title=' + pageName + '&mlc=' + mlcTextString + '"><\/script>');
</script>

</head>

<body class="<?php print $body_classes; ?>">

  <div id="topspace">&nbsp;</div>
  <div id="page"><div id="page-inner">
    
    <div id="header"><div id="header-inner" class="clear-block">
    

        <div id="logo-title">
            <div id="logo"><a href="http://modernmedicine.realcme.com/" title="Modern Medicine" rel="home"><img src="<?php print $img_path ?>/img/logo.gif" alt=Modern Medicine" id="logo-image" /></a></div>
        </div> <!-- /#logo-title -->
        

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
          <?php if ($sidebar_right) {?>
            <div id="companionlogo">
              <img src="<?php print $img_path ?>/img/logo-companion.gif" id="logo-companion" alt="CMECompanion" class="" />
            </div>     
          <?php } ?> 
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
       <!-- <?php print $footer_message; ?> --><img src="<?php print $img_path ?>/img/footerlogo.png" alt="" class="center" />
       </center>
      </div>

    </div></div> <!-- /#footer-inner, /#footer -->

    <?php if ($closure_region): ?>
      <div id="closure-blocks"><?php print $closure_region; ?></div>
    <?php endif; ?>

    <?php print $closure; ?>


  </div>
  
  <div style="clear: both"></div>

  </div> <!-- /#page-inner, /#page -->

</body>
</html>
