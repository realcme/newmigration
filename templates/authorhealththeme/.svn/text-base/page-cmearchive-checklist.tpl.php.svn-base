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
  <link rel="stylesheet" href="<?php print $base_path . $subtheme_directory; ?>/css/authoringthemedefault.css" type="text/css">
  <link rel="stylesheet" href="<?php print $base_path . $subtheme_directory; ?>/css/checklist.css" type="text/css">


  <!--[if IE]>
    <link rel="stylesheet" href="<?php print $base_path . $directory; ?>/ie.css" type="text/css">
    <?php if ($subtheme_directory && file_exists($subtheme_directory .'/ie.css')): ?>
      <link rel="stylesheet" href="<?php print $base_path . $subtheme_directory; ?>/ie.css" type="text/css">
    <?php endif; ?>
  <![endif]-->
  <?php print $scripts; ?>
  <?php print phptemplate_cookie_js(); ?> 
  <?php print phptemplate_opencomp_js(); ?> 
  <?php print phptemplate_toolkit_js(); ?> 

<script type="text/javascript"><!--//--><![CDATA[//><!--

sfHover = function() {
	var sfEls = document.getElementById("toolkit").getElementsByTagName("li");
	for (var i=0; i<sfEls.length; i++) {
		sfEls[i].onmouseover=function() {
			this.className+=" sfhover";
		}
		sfEls[i].onmouseout=function() {
			this.className=this.className.replace(new RegExp(" sfhover\\b"), "");
		}
	}
}
if (window.attachEvent) window.attachEvent("onload", sfHover);

var old_tb_show = tb_show;
tb_show = function(caption, url, imageGroup) {
  old_tb_show(caption, url, imageGroup);
  if (0 < url.indexOf('/globaltool/')) $("#TB_closeWindowButton").hide();
  $("#TB_overlay").unbind('click');
}

//--><!]]></script>
  
</head>

<body class="<?php print $body_classes; ?>">

  <div id="page"><div id="page-inner">


    <a name="top" id="navigation-top"></a>

    <div id="header"><div id="header-inner" class="clear-block">

       <div id="logo-title">
            <div id="logo"><a href="<?php print $base_path; ?>" title="<?php print t('Home'); ?>" rel="home"><img src="<?php print $img_path ?>/img/logo.png" alt="<?php print t('Home'); ?>" id="logo-image" /></a></div>
            <?php print theme('partner_logo');?>
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

	<!-- #content-header -->

        <?php if ($breadcrumb or $title or $tabs or $help or $messages): ?>

    			<div id="content-header">
		    		<?php print theme('author_default_header', $title); ?>
            <?php // print $breadcrumb; ?>
            <?php if ($user->uid == 1) { print $messages;} ?>
            <?php if ($tabs): ?>
              <div class="tabs"><?php print $tabs; ?></div>
            <?php endif; ?>
            <?php print $help; ?>
          </div> <!-- /#content-header -->
        <?php endif; ?>


        <div>
         <table id="checklist_content">
         <tr>
          <td><?php print $content; ?></td>
         </tr>
         </table>
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


    </div></div> <!-- /#main-inner, /#main -->

		<div id="author-page-bottom"></div>

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

</body>
</html>
