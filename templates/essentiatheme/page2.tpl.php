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
  
  
  
  <script type="text/javascript">
window.setTimeout("displayFirstDiv();", 1000);

var ContentHeight = 0;
var TimeToSlide = 250.0;

var openAccordion = '';

function runAccordion(index)
{
  var nID = "Accordion" + index + "Content";
  if(openAccordion == nID)
    nID = '';
 
  setTimeout("animate(" + new Date().getTime() + "," + TimeToSlide + ",'" 
      + openAccordion + "','" + nID + "')", 33);
  
  openAccordion = nID;
}
function animate(lastTick, timeLeft, closingId, openingId)
{  
  var curTick = new Date().getTime();
  var elapsedTicks = curTick - lastTick;
  
  var opening = (openingId == '') ? null : document.getElementById(openingId);
  var closing = (closingId == '') ? null : document.getElementById(closingId);
 
  if(timeLeft <= elapsedTicks)
  {
    if(opening != null)
	{
          //var divh = document.getElementById(openingId).offsetHeight;
          //opening.style.height = divh + 'px';
          opening.style.height = 'auto';
	  document.getElementById(openingId + 'Arrow').innerHTML = '-';
	  }
    
    if(closing != null)
    {
      closing.style.display = 'none';
      closing.style.height = '0px';
	  document.getElementById(closingId + 'Arrow').innerHTML = '+';
    }
    return;
  }
 
  timeLeft -= elapsedTicks;
  var newClosedHeight = Math.round((timeLeft/TimeToSlide) * ContentHeight);
  if(opening != null)
  {
    if(opening.style.display != 'block')
      opening.style.display = 'block';
    opening.style.height = (ContentHeight - newClosedHeight) + 'px';
  }
  
  if(closing != null)
    closing.style.height = newClosedHeight + 'px';

  setTimeout("animate(" + curTick + "," + timeLeft + ",'" 
      + closingId + "','" + openingId + "')", 33);
}

if (!document.getElementsByClassName) {
	document.getElementsByClassName = function (cn) { 
		var rx = new RegExp("(?:^|\\s)" + cn+ "(?:$|\\s)");
		var allT = document.getElementsByTagName("*"), allCN = [], ac="", i = 0, a;
			while (a = allT[i=i+1]) {
			  ac=a.className;
			  if ( ac && ac.indexOf(cn) !==-1) {
				if(ac===cn){ allCN[allCN.length] = a; continue;   }
				rx.test(ac) ? (allCN[allCN.length] = a) : 0;
			  }
			}
		return allCN;
	}
}

function displayFirstDiv(){
if (document.getElementById("divCenterContent") != null) {
	document.getElementById("divCenterContent").style.display="inline";
}



var divs = document.getElementsByClassName("tabtext");

if (divs != null && divs.length > 0)
{
	for (var i = 0; i < divs.length; i++)
	{
		divs[i].style.display="block";
	}
}


if (document.getElementById("divFirst") != null){
 document.getElementById("divFirst").style.display="block";
}
window.setTimeout("displaySecondDiv();", 1500);
}


function displaySecondDiv() {
if (document.getElementById("div1") != null){
 document.getElementById("div1").style.display="block";
}
window.setTimeout("displayThirdDiv()", 1500);
}

function displayThirdDiv() {
if (document.getElementById("div2") != null){
 document.getElementById("div2").style.display="block";

if (document.getElementById("imgPin") != null) {
document.getElementById("imgPin").style.display="inline";
document.getElementById("imgPin").src = "/uploads/public/images/global/pin_icon.png"
}

if (document.getElementById("imgPinTitle") != null) {
 document.getElementById("imgPinTitle").style.display="inline";
 document.getElementById("imgPinTitle").src = "/uploads/public/images/global/pin_icon.png";
}
}
}

</script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-2555921-26']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<style>
.bigrightheader {
font-family: Arial;
font-size: 2em;
font-weight:bold;
color: #ffffff;
position: relative;
z-index: 1;
padding-top:12px;
text-align: center;
}

.plainrightheader {
font-family: Arial;
font-size: 1.20em;
font-weight:normal;
color: #000000;
position: relative;
z-index: 1;
width:100%;
text-align:center;
}

.whitemaglinks {
font-family: Arial;
font-size: 1.2em;
font-weight:bold;
color: #ffffff;
line-height: 1.75em;
}

a.whitemaglinks:link {
font-family: Arial;
font-size: 1.2em;
font-weight:bold;
color: #ffffff;
line-height: 1.75em;
}

a.whitemaglinks:visited{
font-family: Arial;
font-size: 1.2em;
font-weight:bold;
color: #ffffff;
line-height: 1.75em;
}

a.whitemaglinks:hover{
font-family: Arial;
font-size: 1.2em;
font-weight:bold;
color: #ffffff;
line-height: 1.75em;
text-decoration:underline;
}

a.whitemaglinks:active{
font-family: Arial;
font-size: 1.2em;
font-weight:bold;
color: #ffffff;
line-height: 1.75em;
text-decoration:underline;
}

a.distanceright2:link {
font-family: Arial;
font-size: 1.15em;
font-weight:bold;
color: #39c3e6;
line-height: 1.25em;
}

a.distanceright2:visited{
font-family: Arial;
font-size: 1.15em;
font-weight:bold;
color: #39c3e6;
line-height: 1.25em;
}

a.distanceright2:hover{
font-family: Arial;
font-size: 1.15em;
font-weight:bold;
color: #39c3e6;
line-height: 1.25em;
text-decoration:underline;
}

a.distanceright2:active{
font-family: Arial;
font-size: 1.15em;
font-weight:bold;
color: #39c3e6;
line-height: 1.25em;
text-decoration:underline;
}
.locationstabtext {
color:#535152;
    font-size:1.154em;
    line-height:1.5em;
margin-left:12px;
margin-top:12px;
/*padding-bottom:80px;*/
}
</style>

    <script type="text/javascript">
 
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-13157726-1']);
      _gaq.push(['_trackPageview']);
 
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
 
    </script>
    
</head>

<body class="<?php print $body_classes; ?>">

  <div id="page"><div id="page-inner">


  	<div id="ctl00_ctl00_cphBody_divTop" class="cpsty_Top">
  		<div id="ctl00_ctl00_cphBody_divHeader" class="cpsty_SiteTypes_Default_Header">
  		  <style>
          input.find_button1 {
          background: url(<?php print $img_path ?>/img/glassoff.png) no-repeat 0 0;
          width: 37px;
          height: 36px;
          display: block;
          border:none;
          margin-top:3px;
          text-indent: -9999px;
          }
          input.find_button1:hover {
          margin-top:3px;
          width: 37px;
          height: 36px;
          display: block;
          background: url(<?php print $img_path ?>/img/glasson.png) no-repeat 0 0;
          background-position: 0 0px;
          }
          input.find_button:active {
          }
          .shadedtopbg {
          background-image: url(<?php print $img_path ?>/img/main_top_bg.png);
          width: 957px;
          background-position: 0% 100%;
          background-repeat: repeat-x;
          }
        </style>
        <table cellspacing="0" cellpadding="0" class="cpsys_Table" style="width: 960px;">
          <tbody>
            <tr>
              <td style="width: 678px; padding-top: 28px; padding-left: 36px;"><a href="http://www.essentiainstitute.org/essentiainstitute/index.aspx">
              <img src="<?php print $img_path ?>/img/logo.gif" style="width: 530px; height: 68px;" alt="Essentia Institute of Rural Health" longdesc="a Center for Research and Education" /></a></td>
              <td>
                <div style="padding-right: 0px; margin-top: 16px; margin-bottom: 28px; margin-left: 2px;">
                  <!-- <span style="margin-left: 18px;"> -->
                  <!--a class="toplinks" href="/main/contactus.aspx">Contact Us</a--><!--a href="http://www.essentiainstitute.org/" class="toplinks" target="_blank">Essentia Institute of Rural Health<img alt="arrow" src="<?php print $img_path ?>/img/right_arrow.png" /></a-->
                  <!--div><a href="http://www.essentiainstitute.org/" class="tagline" target="_blank">A Center for Research &amp; Education</a></div-->
                  <!-- </span> -->
                  <div>
                    <div style="padding-top: 36px;">
                      <table cellspacing="0" cellpadding="0" class="cpsys_Table" style="height: 42px;">
                          <tbody>
                              <tr>
                                  <td valign="bottom" style="padding-left: 4px; background-image: url(<?php print $img_path ?>/img/search_bg.jpg); color: #9b9fa1; height: 42px;">
                                    <input type="text" onkeypress="if (event.keyCode == '13') { document.location.href='http://www.essentiainstitute.org/essentiainstitute/Search.aspx?search=' + this.value; return false; }" style="border: 0px solid #000000; margin-top: 10px; background-image: none; background-attachment: scroll; background-color: transparent; width: 190px; height: 20px; background-position: 0% 0%; background-repeat: repeat no-repeat;" onclick="if (this.value=='   Search') this.value='';" value="   Search" name="HtmlSearchCriteria" />
                                  </td>
                                  <td>
                                    <input type="button" class="find_button1" onclick="document.location.href='http://www.essentiainstitute.org/essentiainstitute/Search.aspx?search=' + document.forms[0].HtmlSearchCriteria.value; return false" alt="Search" src="/Uploads/Public/Images/Design/go_button.jpg" name="HtmlSearchGo" />
                                  </td>
                              </tr>
                          </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
        <table cellspacing="0" cellpadding="0" border="0" class="cpsys_Table" style="width: 100%;">
          <tbody>
            <tr>
                <td style="vertical-align: bottom; height: 20px; text-align: left;" colspan="2">
                <table width="969" cellspacing="0" cellpadding="0" border="0">
                    <tbody>
                        <tr>
                            <td valign="bottom" style="width: 6px;"><img alt="" src="<?php print $img_path ?>/img/main_top_left_bg.png" /></td>
                            <td valign="top" class="shadedtopbg"><span id="AddControlToContainer_ctl00_ctl00_DynamicNavigation8" style="display:none;">AddControlToContainer_ctl00_ctl00_DynamicNavigation8</span></td>
                            <td valign="bottom" style="width: 6px;"><img alt="" src="<?php print $img_path ?>/img/main_top_right_bg.png" /></td>
                        </tr>
                    </tbody>
                </table>
                </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  
<table id="ctl00_ctl00_DynamicNavigation9" class="cpsty_DynamicNavigation9 cpsty_DynamicNavigation9_StaticMenu rightmenu ctl00_ctl00_DynamicNavigation9_5 cpsty_DynamicNavigation9_Level1SubMenu ctl00_ctl00_DynamicNavigation9_16 ctl00_ctl00_DynamicNavigation9_2" cellpadding="0" cellspacing="0" border="0">
	<tr onmouseover="Menu_HoverRoot(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation9n0">
		<td><table class="cpsty_DynamicNavigation9_StaticMenuItem ctl00_ctl00_DynamicNavigation9_4 cpsty_DynamicNavigation9_Level1MenuItem quicklinksright1 ctl00_ctl00_DynamicNavigation9_7" cellpadding="0" cellspacing="0" border="0" width="100%">
			<tr>
				<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation9_1 cpsty_DynamicNavigation9_StaticMenuItem ctl00_ctl00_DynamicNavigation9_3 cpsty_DynamicNavigation9_Level1MenuItem quicklinksright1 ctl00_ctl00_DynamicNavigation9_6" href="/EssentiaInstitute/EducationandLibrary.aspx" target="_self" style="border-style:none;font-size:1em;">Education & Library  <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
			</tr>
		</table></td>
	</tr><tr>
		<td><table border="0" cellpadding="0" cellspacing="0" width="100%" class="cpsty_DynamicNavigation9_StaticMenu rightmenu ctl00_ctl00_DynamicNavigation9_5 cpsty_DynamicNavigation9_Level2SubMenu ctl00_ctl00_DynamicNavigation9_17">
			<tr onmouseover="Menu_HoverRoot(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation9n1">
				<td><table class="cpsty_DynamicNavigation9_StaticMenuItem ctl00_ctl00_DynamicNavigation9_4 cpsty_DynamicNavigation9_Level2MenuItem quicklinksright2  ctl00_ctl00_DynamicNavigation9_9 cpsty_DynamicNavigation9_StaticSelected ctl00_ctl00_DynamicNavigation9_22 cpsty_DynamicNavigation9_Level2Selected ctl00_ctl00_DynamicNavigation9_26" cellpadding="0" cellspacing="0" border="0" width="100%">
					<tr>
						<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation9_1 cpsty_DynamicNavigation9_StaticMenuItem ctl00_ctl00_DynamicNavigation9_3 cpsty_DynamicNavigation9_Level2MenuItem quicklinksright2  ctl00_ctl00_DynamicNavigation9_8 cpsty_DynamicNavigation9_StaticSelected ctl00_ctl00_DynamicNavigation9_21 cpsty_DynamicNavigation9_Level2Selected ctl00_ctl00_DynamicNavigation9_25" href="/EssentiaInstitute/ForLearners.aspx" target="_self" style="border-style:none;font-size:1em;">CME Activities <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
					</tr>
				</table></td>
			</tr><tr>
				<td><table border="0" cellpadding="0" cellspacing="0" width="100%" class="cpsty_DynamicNavigation9_StaticMenu rightmenu ctl00_ctl00_DynamicNavigation9_5 cpsty_DynamicNavigation9_Level3SubMenu rightmenu ctl00_ctl00_DynamicNavigation9_18">
					<tr onmouseover="Menu_HoverStatic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation9n2">
						<td><table class="cpsty_DynamicNavigation9_StaticMenuItem ctl00_ctl00_DynamicNavigation9_4 cpsty_DynamicNavigation9_Level3MenuItem quicklinksright3 ctl00_ctl00_DynamicNavigation9_11" cellpadding="0" cellspacing="0" border="0" width="100%">
							<tr>
								<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation9_1 cpsty_DynamicNavigation9_StaticMenuItem ctl00_ctl00_DynamicNavigation9_3 cpsty_DynamicNavigation9_Level3MenuItem quicklinksright3 ctl00_ctl00_DynamicNavigation9_10" href="/EssentiaInstitute/CourseOfferings.aspx" target="_self" style="border-style:none;font-size:1em;">Conferences <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
							</tr>
						</table></td>
					</tr><tr onmouseover="Menu_HoverStatic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation9n3">
						<td><table class="cpsty_DynamicNavigation9_StaticMenuItem ctl00_ctl00_DynamicNavigation9_4 cpsty_DynamicNavigation9_Level3MenuItem quicklinksright3 ctl00_ctl00_DynamicNavigation9_11" cellpadding="0" cellspacing="0" border="0" width="100%">
							<tr>
								<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation9_1 cpsty_DynamicNavigation9_StaticMenuItem ctl00_ctl00_DynamicNavigation9_3 cpsty_DynamicNavigation9_Level3MenuItem quicklinksright3 ctl00_ctl00_DynamicNavigation9_10" href="/EssentiaInstitute/FridayGrandRounds.aspx" target="_self" style="border-style:none;font-size:1em;">Friday Grand Rounds <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
							</tr>
						</table></td>
					</tr><tr onmouseover="Menu_HoverStatic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation9n4">
						<td><table class="cpsty_DynamicNavigation9_StaticMenuItem ctl00_ctl00_DynamicNavigation9_4 cpsty_DynamicNavigation9_Level3MenuItem quicklinksright3 ctl00_ctl00_DynamicNavigation9_11" cellpadding="0" cellspacing="0" border="0" width="100%">
							<tr>
								<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation9_1 cpsty_DynamicNavigation9_StaticMenuItem ctl00_ctl00_DynamicNavigation9_3 cpsty_DynamicNavigation9_Level3MenuItem quicklinksright3 ctl00_ctl00_DynamicNavigation9_10" href="/EssentiaInstitute/OutreachCME.aspx" target="_self" style="border-style:none;font-size:1em;">Outreach CME <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
							</tr>
						</table></td>
					</tr><tr onmouseover="Menu_HoverStatic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation9n5">
						<td><table class="cpsty_DynamicNavigation9_StaticMenuItem ctl00_ctl00_DynamicNavigation9_4 cpsty_DynamicNavigation9_Level3MenuItem quicklinksright3 ctl00_ctl00_DynamicNavigation9_11" cellpadding="0" cellspacing="0" border="0" width="100%">
							<tr>
								<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation9_1 cpsty_DynamicNavigation9_StaticMenuItem ctl00_ctl00_DynamicNavigation9_3 cpsty_DynamicNavigation9_Level3MenuItem quicklinksright3 ctl00_ctl00_DynamicNavigation9_10" href="/EssentiaInstitute/RegularlyScheduledSeries.aspx" target="_self" style="border-style:none;font-size:1em;">Reg. Scheduled Series <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
							</tr>
						</table></td>
					</tr><tr onmouseover="Menu_HoverStatic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation9n6">
						<td><table class="cpsty_DynamicNavigation9_StaticMenuItem ctl00_ctl00_DynamicNavigation9_4 cpsty_DynamicNavigation9_Level3MenuItem quicklinksright3 ctl00_ctl00_DynamicNavigation9_11" cellpadding="0" cellspacing="0" border="0" width="100%">
							<tr>
								<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation9_1 cpsty_DynamicNavigation9_StaticMenuItem ctl00_ctl00_DynamicNavigation9_3 cpsty_DynamicNavigation9_Level3MenuItem quicklinksright3 ctl00_ctl00_DynamicNavigation9_10" href="/EssentiaInstitute/CertificatesandEvaluations.aspx" target="_blank" style="border-style:none;font-size:1em;">Certs. and Evals. <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
							</tr>
						</table></td>
					</tr><tr onmouseover="Menu_HoverStatic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation9n7">
						<td><table class="cpsty_DynamicNavigation9_StaticMenuItem ctl00_ctl00_DynamicNavigation9_4 cpsty_DynamicNavigation9_Level3MenuItem quicklinksright3 ctl00_ctl00_DynamicNavigation9_11" cellpadding="0" cellspacing="0" border="0" width="100%">
							<tr>
								<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation9_1 cpsty_DynamicNavigation9_StaticMenuItem ctl00_ctl00_DynamicNavigation9_3 cpsty_DynamicNavigation9_Level3MenuItem quicklinksright3 ctl00_ctl00_DynamicNavigation9_10" href="/EssentiaInstitute/ConferenceMaterialsArchive.aspx" target="_self" style="border-style:none;font-size:1em;">Conf. Materials Archive <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
							</tr>
						</table></td>
					</tr><tr onmouseover="Menu_HoverStatic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation9n8">
						<td><table class="cpsty_DynamicNavigation9_StaticMenuItem ctl00_ctl00_DynamicNavigation9_4 cpsty_DynamicNavigation9_Level3MenuItem quicklinksright3 ctl00_ctl00_DynamicNavigation9_11" cellpadding="0" cellspacing="0" border="0" width="100%">
							<tr>
								<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation9_1 cpsty_DynamicNavigation9_StaticMenuItem ctl00_ctl00_DynamicNavigation9_3 cpsty_DynamicNavigation9_Level3MenuItem quicklinksright3 ctl00_ctl00_DynamicNavigation9_10" href="/EssentiaInstitute/CreditTranscripts.aspx" target="_blank" style="border-style:none;font-size:1em;">Credit Transcripts <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
							</tr>
						</table></td>
					</tr>
				</table></td>
			</tr><tr onmouseover="Menu_HoverRoot(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation9n9">
				<td><table class="cpsty_DynamicNavigation9_StaticMenuItem ctl00_ctl00_DynamicNavigation9_4 cpsty_DynamicNavigation9_Level2MenuItem quicklinksright2  ctl00_ctl00_DynamicNavigation9_9" cellpadding="0" cellspacing="0" border="0" width="100%">
					<tr>
						<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation9_1 cpsty_DynamicNavigation9_StaticMenuItem ctl00_ctl00_DynamicNavigation9_3 cpsty_DynamicNavigation9_Level2MenuItem quicklinksright2  ctl00_ctl00_DynamicNavigation9_8" href="/EssentiaInstitute/ForPresenters.aspx" target="_self" style="border-style:none;font-size:1em;">CME Resources <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
					</tr>
				</table></td>
			</tr><tr>
				<td><table border="0" cellpadding="0" cellspacing="0" width="100%" class="cpsty_DynamicNavigation9_StaticMenu rightmenu ctl00_ctl00_DynamicNavigation9_5 cpsty_DynamicNavigation9_Level3SubMenu rightmenu ctl00_ctl00_DynamicNavigation9_18">
					<tr onmouseover="Menu_HoverStatic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation9n10">
						<td><table class="cpsty_DynamicNavigation9_StaticMenuItem ctl00_ctl00_DynamicNavigation9_4 cpsty_DynamicNavigation9_Level3MenuItem quicklinksright3 ctl00_ctl00_DynamicNavigation9_11" cellpadding="0" cellspacing="0" border="0" width="100%">
							<tr>
								<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation9_1 cpsty_DynamicNavigation9_StaticMenuItem ctl00_ctl00_DynamicNavigation9_3 cpsty_DynamicNavigation9_Level3MenuItem quicklinksright3 ctl00_ctl00_DynamicNavigation9_10" href="/EssentiaInstitute/OutreachPresenterPlanningGuide.aspx" target="_blank" style="border-style:none;font-size:1em;">Outreach Planning Guide <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
							</tr>
						</table></td>
					</tr><tr onmouseover="Menu_HoverStatic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation9n11">
						<td><table class="cpsty_DynamicNavigation9_StaticMenuItem ctl00_ctl00_DynamicNavigation9_4 cpsty_DynamicNavigation9_Level3MenuItem quicklinksright3 ctl00_ctl00_DynamicNavigation9_11" cellpadding="0" cellspacing="0" border="0" width="100%">
							<tr>
								<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation9_1 cpsty_DynamicNavigation9_StaticMenuItem ctl00_ctl00_DynamicNavigation9_3 cpsty_DynamicNavigation9_Level3MenuItem quicklinksright3 ctl00_ctl00_DynamicNavigation9_10" href="/EssentiaInstitute/PresentationStandards.aspx" target="_blank" style="border-style:none;font-size:1em;">PowerPoint Standards <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
							</tr>
						</table></td>
					</tr><tr onmouseover="Menu_HoverStatic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation9n12">
						<td><table class="cpsty_DynamicNavigation9_StaticMenuItem ctl00_ctl00_DynamicNavigation9_4 cpsty_DynamicNavigation9_Level3MenuItem quicklinksright3 ctl00_ctl00_DynamicNavigation9_11" cellpadding="0" cellspacing="0" border="0" width="100%">
							<tr>
								<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation9_1 cpsty_DynamicNavigation9_StaticMenuItem ctl00_ctl00_DynamicNavigation9_3 cpsty_DynamicNavigation9_Level3MenuItem quicklinksright3 ctl00_ctl00_DynamicNavigation9_10" href="/EssentiaInstitute/PresentationSelfEvaluation.aspx" target="_blank" style="border-style:none;font-size:1em;">Presentation Criteria <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
							</tr>
						</table></td>
					</tr><tr onmouseover="Menu_HoverStatic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation9n13">
						<td><table class="cpsty_DynamicNavigation9_StaticMenuItem ctl00_ctl00_DynamicNavigation9_4 cpsty_DynamicNavigation9_Level3MenuItem quicklinksright3 ctl00_ctl00_DynamicNavigation9_11" cellpadding="0" cellspacing="0" border="0" width="100%">
							<tr>
								<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation9_1 cpsty_DynamicNavigation9_StaticMenuItem ctl00_ctl00_DynamicNavigation9_3 cpsty_DynamicNavigation9_Level3MenuItem quicklinksright3 ctl00_ctl00_DynamicNavigation9_10" href="/EssentiaInstitute/VideoconferenceTips.aspx" target="_blank" style="border-style:none;font-size:1em;">Videoconference Tips <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
							</tr>
						</table></td>
					</tr><tr onmouseover="Menu_HoverStatic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation9n14">
						<td><table class="cpsty_DynamicNavigation9_StaticMenuItem ctl00_ctl00_DynamicNavigation9_4 cpsty_DynamicNavigation9_Level3MenuItem quicklinksright3 ctl00_ctl00_DynamicNavigation9_11" cellpadding="0" cellspacing="0" border="0" width="100%">
							<tr>
								<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation9_1 cpsty_DynamicNavigation9_StaticMenuItem ctl00_ctl00_DynamicNavigation9_3 cpsty_DynamicNavigation9_Level3MenuItem quicklinksright3 ctl00_ctl00_DynamicNavigation9_10" href="/EssentiaInstitute/DisclosureForm.aspx" target="_self" style="border-style:none;font-size:1em;">Faculty Disclosure Form <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
							</tr>
						</table></td>
					</tr><tr onmouseover="Menu_HoverStatic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation9n15">
						<td><table class="cpsty_DynamicNavigation9_StaticMenuItem ctl00_ctl00_DynamicNavigation9_4 cpsty_DynamicNavigation9_Level3MenuItem quicklinksright3 ctl00_ctl00_DynamicNavigation9_11" cellpadding="0" cellspacing="0" border="0" width="100%">
							<tr>
								<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation9_1 cpsty_DynamicNavigation9_StaticMenuItem ctl00_ctl00_DynamicNavigation9_3 cpsty_DynamicNavigation9_Level3MenuItem quicklinksright3 ctl00_ctl00_DynamicNavigation9_10" href="/EssentiaInstitute/OutreachSiteInformation.aspx" target="_self" style="border-style:none;font-size:1em;">Outreach Site Info <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
							</tr>
						</table></td>
					</tr><tr onmouseover="Menu_HoverStatic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation9n16">
						<td><table class="cpsty_DynamicNavigation9_StaticMenuItem ctl00_ctl00_DynamicNavigation9_4 cpsty_DynamicNavigation9_Level3MenuItem quicklinksright3 ctl00_ctl00_DynamicNavigation9_11" cellpadding="0" cellspacing="0" border="0" width="100%">
							<tr>
								<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation9_1 cpsty_DynamicNavigation9_StaticMenuItem ctl00_ctl00_DynamicNavigation9_3 cpsty_DynamicNavigation9_Level3MenuItem quicklinksright3 ctl00_ctl00_DynamicNavigation9_10" href="/EssentiaInstitute/AudienceResponseSysGuide.aspx" target="_blank" style="border-style:none;font-size:1em;">Audience Response System <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
							</tr>
						</table></td>
					</tr><tr onmouseover="Menu_HoverStatic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation9n17">
						<td><table class="cpsty_DynamicNavigation9_StaticMenuItem ctl00_ctl00_DynamicNavigation9_4 cpsty_DynamicNavigation9_Level3MenuItem quicklinksright3 ctl00_ctl00_DynamicNavigation9_11" cellpadding="0" cellspacing="0" border="0" width="100%">
							<tr>
								<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation9_1 cpsty_DynamicNavigation9_StaticMenuItem ctl00_ctl00_DynamicNavigation9_3 cpsty_DynamicNavigation9_Level3MenuItem quicklinksright3 ctl00_ctl00_DynamicNavigation9_10" href="/EssentiaInstitute/CMEContactUs.aspx" target="_self" style="border-style:none;font-size:1em;">CME/CPD Contact <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
							</tr>
						</table></td>
					</tr><tr onmouseover="Menu_HoverStatic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation9n18">
						<td><table class="cpsty_DynamicNavigation9_StaticMenuItem ctl00_ctl00_DynamicNavigation9_4 cpsty_DynamicNavigation9_Level3MenuItem quicklinksright3 ctl00_ctl00_DynamicNavigation9_11" cellpadding="0" cellspacing="0" border="0" width="100%">
							<tr>
								<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation9_1 cpsty_DynamicNavigation9_StaticMenuItem ctl00_ctl00_DynamicNavigation9_3 cpsty_DynamicNavigation9_Level3MenuItem quicklinksright3 ctl00_ctl00_DynamicNavigation9_10" href="/EssentiaInstitute/Links.aspx" target="_self" style="border-style:none;font-size:1em;">Links <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
							</tr>
						</table></td>
					</tr>
				</table></td>
			</tr><tr onmouseover="Menu_HoverRoot(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation9n19">
				<td><table class="cpsty_DynamicNavigation9_StaticMenuItem ctl00_ctl00_DynamicNavigation9_4 cpsty_DynamicNavigation9_Level2MenuItem quicklinksright2  ctl00_ctl00_DynamicNavigation9_9" cellpadding="0" cellspacing="0" border="0" width="100%">
					<tr>
						<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation9_1 cpsty_DynamicNavigation9_StaticMenuItem ctl00_ctl00_DynamicNavigation9_3 cpsty_DynamicNavigation9_Level2MenuItem quicklinksright2  ctl00_ctl00_DynamicNavigation9_8" href="/EssentiaInstitute/ChangeProfile.aspx" target="_self" style="border-style:none;font-size:1em;">Change Profile <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
					</tr>
				</table></td>
			</tr><tr onmouseover="Menu_HoverRoot(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation9n20">
				<td><table class="cpsty_DynamicNavigation9_StaticMenuItem ctl00_ctl00_DynamicNavigation9_4 cpsty_DynamicNavigation9_Level2MenuItem quicklinksright2  ctl00_ctl00_DynamicNavigation9_9" cellpadding="0" cellspacing="0" border="0" width="100%">
					<tr>
						<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation9_1 cpsty_DynamicNavigation9_StaticMenuItem ctl00_ctl00_DynamicNavigation9_3 cpsty_DynamicNavigation9_Level2MenuItem quicklinksright2  ctl00_ctl00_DynamicNavigation9_8" href="/EssentiaInstitute/HealthSciencesEducation.aspx" target="_self" style="border-style:none;font-size:1em;">Health Sciences Education <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
					</tr>
				</table></td>
			</tr><tr>
				<td><table border="0" cellpadding="0" cellspacing="0" width="100%" class="cpsty_DynamicNavigation9_StaticMenu rightmenu ctl00_ctl00_DynamicNavigation9_5 cpsty_DynamicNavigation9_Level3SubMenu rightmenu ctl00_ctl00_DynamicNavigation9_18">
					<tr onmouseover="Menu_HoverStatic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" title="Go to Duluth Family Medicine Residency Program website" id="ctl00_ctl00_DynamicNavigation9n21">
						<td><table class="cpsty_DynamicNavigation9_StaticMenuItem ctl00_ctl00_DynamicNavigation9_4 cpsty_DynamicNavigation9_Level3MenuItem quicklinksright3 ctl00_ctl00_DynamicNavigation9_11" cellpadding="0" cellspacing="0" border="0" width="100%">
							<tr>
								<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation9_1 cpsty_DynamicNavigation9_StaticMenuItem ctl00_ctl00_DynamicNavigation9_3 cpsty_DynamicNavigation9_Level3MenuItem quicklinksright3 ctl00_ctl00_DynamicNavigation9_10" href="/EssentiaInstitute/FamilyMedicineResidency.aspx" target="_blank" style="border-style:none;font-size:1em;">Family Medicine Residency <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
							</tr>
						</table></td>
					</tr><tr onmouseover="Menu_HoverStatic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation9n22">
						<td><table class="cpsty_DynamicNavigation9_StaticMenuItem ctl00_ctl00_DynamicNavigation9_4 cpsty_DynamicNavigation9_Level3MenuItem quicklinksright3 ctl00_ctl00_DynamicNavigation9_11" cellpadding="0" cellspacing="0" border="0" width="100%">
							<tr>
								<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation9_1 cpsty_DynamicNavigation9_StaticMenuItem ctl00_ctl00_DynamicNavigation9_3 cpsty_DynamicNavigation9_Level3MenuItem quicklinksright3 ctl00_ctl00_DynamicNavigation9_10" href="/EssentiaInstitute/ObstetricFellowship.aspx" target="_self" style="border-style:none;font-size:1em;">Obstetric Fellowship <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
							</tr>
						</table></td>
					</tr><tr onmouseover="Menu_HoverStatic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation9n23">
						<td><table class="cpsty_DynamicNavigation9_StaticMenuItem ctl00_ctl00_DynamicNavigation9_4 cpsty_DynamicNavigation9_Level3MenuItem quicklinksright3 ctl00_ctl00_DynamicNavigation9_11" cellpadding="0" cellspacing="0" border="0" width="100%">
							<tr>
								<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation9_1 cpsty_DynamicNavigation9_StaticMenuItem ctl00_ctl00_DynamicNavigation9_3 cpsty_DynamicNavigation9_Level3MenuItem quicklinksright3 ctl00_ctl00_DynamicNavigation9_10" href="/EssentiaInstitute/PharmacyResidency.aspx" target="_self" style="border-style:none;font-size:1em;">Pharmacy Residency <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
							</tr>
						</table></td>
					</tr><tr onmouseover="Menu_HoverStatic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation9n24">
						<td><table class="cpsty_DynamicNavigation9_StaticMenuItem ctl00_ctl00_DynamicNavigation9_4 cpsty_DynamicNavigation9_Level3MenuItem quicklinksright3 ctl00_ctl00_DynamicNavigation9_11" cellpadding="0" cellspacing="0" border="0" width="100%">
							<tr>
								<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation9_1 cpsty_DynamicNavigation9_StaticMenuItem ctl00_ctl00_DynamicNavigation9_3 cpsty_DynamicNavigation9_Level3MenuItem quicklinksright3 ctl00_ctl00_DynamicNavigation9_10" href="/EssentiaInstitute/AcademicResearchProject.aspx" target="_self" style="border-style:none;font-size:1em;">Academic Research Project <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
							</tr>
						</table></td>
					</tr>
				</table></td>
			</tr><tr onmouseover="Menu_HoverRoot(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation9n25">
				<td><table class="cpsty_DynamicNavigation9_StaticMenuItem ctl00_ctl00_DynamicNavigation9_4 cpsty_DynamicNavigation9_Level2MenuItem quicklinksright2  ctl00_ctl00_DynamicNavigation9_9" cellpadding="0" cellspacing="0" border="0" width="100%">
					<tr>
						<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation9_1 cpsty_DynamicNavigation9_StaticMenuItem ctl00_ctl00_DynamicNavigation9_3 cpsty_DynamicNavigation9_Level2MenuItem quicklinksright2  ctl00_ctl00_DynamicNavigation9_8" href="/EssentiaInstitute/LibraryServices.aspx" target="_self" style="border-style:none;font-size:1em;">Library Services <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
					</tr>
				</table></td>
			</tr>
		</table></td>
	</tr>
</table><table id="ctl00_ctl00_DynamicNavigation8" class="cpsty_DynamicNavigation8 cpsty_DynamicNavigation8_StaticMenu hdnStaticMenu ctl00_ctl00_DynamicNavigation8_5 ctl00_ctl00_DynamicNavigation8_19 ctl00_ctl00_DynamicNavigation8_2" cellpadding="0" cellspacing="0" border="0">
	<tr>
		<td onmouseover="Menu_HoverStatic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation8n0"><table class="cpsty_DynamicNavigation8_StaticMenuItem hdnStaticMenu ctl00_ctl00_DynamicNavigation8_4 ctl00_ctl00_DynamicNavigation8_10" cellpadding="0" cellspacing="0" border="0" width="100%">
			<tr>
				<td style="white-space:nowrap;"><a class="ctl00_ctl00_DynamicNavigation8_1 cpsty_DynamicNavigation8_StaticMenuItem hdnStaticMenu ctl00_ctl00_DynamicNavigation8_3 ctl00_ctl00_DynamicNavigation8_9" href="/EssentiaInstitute/ClinicalTrials.aspx" target="_self" style="border-style:none;font-size:1em;">Clinical Trials</a></td>
			</tr>
		</table></td><td style="width:3px;"></td><td onmouseover="Menu_HoverStatic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation8n1"><table class="cpsty_DynamicNavigation8_StaticMenuItem hdnStaticMenu ctl00_ctl00_DynamicNavigation8_4 ctl00_ctl00_DynamicNavigation8_10" cellpadding="0" cellspacing="0" border="0" width="100%">
			<tr>
				<td style="white-space:nowrap;"><a class="ctl00_ctl00_DynamicNavigation8_1 cpsty_DynamicNavigation8_StaticMenuItem hdnStaticMenu ctl00_ctl00_DynamicNavigation8_3 ctl00_ctl00_DynamicNavigation8_9" href="/EssentiaInstitute/Researchers.aspx" target="_self" style="border-style:none;font-size:1em;">Researchers & Collaborators</a></td>
			</tr>
		</table></td><td style="width:3px;"></td><td onmouseover="Menu_HoverStatic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation8n2"><table class="cpsty_DynamicNavigation8_StaticMenuItem hdnStaticMenu ctl00_ctl00_DynamicNavigation8_4 ctl00_ctl00_DynamicNavigation8_10 cpsty_DynamicNavigation8_StaticSelected SelectedMenu ctl00_ctl00_DynamicNavigation8_25 ctl00_ctl00_DynamicNavigation8_29" cellpadding="0" cellspacing="0" border="0" width="100%">
			<tr>
				<td style="white-space:nowrap;"><a class="ctl00_ctl00_DynamicNavigation8_1 cpsty_DynamicNavigation8_StaticMenuItem hdnStaticMenu ctl00_ctl00_DynamicNavigation8_3 ctl00_ctl00_DynamicNavigation8_9 cpsty_DynamicNavigation8_StaticSelected SelectedMenu ctl00_ctl00_DynamicNavigation8_24 ctl00_ctl00_DynamicNavigation8_28" href="/EssentiaInstitute/EducationandLibrary.aspx" target="_self" style="border-style:none;font-size:1em;">Education & Library </a></td>
			</tr>
		</table></td><td style="width:3px;"></td><td onmouseover="Menu_HoverStatic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation8n3"><table class="cpsty_DynamicNavigation8_StaticMenuItem hdnStaticMenu ctl00_ctl00_DynamicNavigation8_4 ctl00_ctl00_DynamicNavigation8_10" cellpadding="0" cellspacing="0" border="0" width="100%">
			<tr>
				<td style="white-space:nowrap;"><a class="ctl00_ctl00_DynamicNavigation8_1 cpsty_DynamicNavigation8_StaticMenuItem hdnStaticMenu ctl00_ctl00_DynamicNavigation8_3 ctl00_ctl00_DynamicNavigation8_9" href="/EssentiaInstitute/HumanSubjectsProtection.aspx" target="_self" style="border-style:none;font-size:1em;">Human Subjects Protection</a></td>
			</tr>
		</table></td><td style="width:3px;"></td><td onmouseover="Menu_HoverStatic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation8n4"><table class="cpsty_DynamicNavigation8_StaticMenuItem hdnStaticMenu ctl00_ctl00_DynamicNavigation8_4 ctl00_ctl00_DynamicNavigation8_10" cellpadding="0" cellspacing="0" border="0" width="100%">
			<tr>
				<td style="white-space:nowrap;"><a class="ctl00_ctl00_DynamicNavigation8_1 cpsty_DynamicNavigation8_StaticMenuItem hdnStaticMenu ctl00_ctl00_DynamicNavigation8_3 ctl00_ctl00_DynamicNavigation8_9" href="/EssentiaInstitute/AboutUs1.aspx" target="_self" style="border-style:none;font-size:1em;">About Us</a></td>
			</tr>
		</table></td>
	</tr>
</table>

  <div id="ctl00_ctl00_DynamicNavigation8n0Items" class="ctl00_ctl00_DynamicNavigation8_0 cpsty_DynamicNavigation8_DynamicMenu DynamicMenu ctl00_ctl00_DynamicNavigation8_8 ctl00_ctl00_DynamicNavigation8_20">
	<table border="0" cellpadding="0" cellspacing="0">
		<tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation8n5">
			<td><table class="cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_7 ctl00_ctl00_DynamicNavigation8_12" cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation8_1 cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_6 ctl00_ctl00_DynamicNavigation8_11" href="/EssentiaInstitute/ClinicalTrials1.aspx" target="_self" style="border-style:none;font-size:1em;">Search Clinical Trials <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
				</tr>
			</table></td>
		</tr><tr>
			<td><img src="<?php print $img_path ?>/img/topnavigationborder.png" alt="" /></td>
		</tr><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation8n6">
			<td><table class="cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_7 ctl00_ctl00_DynamicNavigation8_12" cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation8_1 cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_6 ctl00_ctl00_DynamicNavigation8_11" href="/EssentiaInstitute/CancerStudies.aspx" target="_self" style="border-style:none;font-size:1em;">About Cancer Studies <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
				</tr>
			</table></td>
		</tr><tr>
			<td><img src="<?php print $img_path ?>/img/topnavigationborder.png" alt="" /></td>
		</tr><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation8n7">
			<td><table class="cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_7 ctl00_ctl00_DynamicNavigation8_12" cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation8_1 cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_6 ctl00_ctl00_DynamicNavigation8_11" href="/EssentiaInstitute/HeartVascularStudies.aspx" target="_self" style="border-style:none;font-size:1em;">About Heart/Vasc. Studies <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
				</tr>
			</table></td>
		</tr><tr>
			<td><img src="<?php print $img_path ?>/img/topnavigationborder.png" alt="" /></td>
		</tr><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation8n8">
			<td><table class="cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_7 ctl00_ctl00_DynamicNavigation8_12" cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation8_1 cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_6 ctl00_ctl00_DynamicNavigation8_11" href="/EssentiaInstitute/Participatinginaclinicaltrial.aspx" target="_self" style="border-style:none;font-size:1em;">Participation in trials <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
				</tr>
			</table></td>
		</tr><tr>
			<td><img src="<?php print $img_path ?>/img/topnavigationborder.png" alt="" /></td>
		</tr><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation8n9">
			<td><table class="cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_7 ctl00_ctl00_DynamicNavigation8_12" cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation8_1 cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_6 ctl00_ctl00_DynamicNavigation8_11" href="/EssentiaInstitute/Researchoversight.aspx" target="_self" style="border-style:none;font-size:1em;">Research Oversight <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
				</tr>
			</table></td>
		</tr><tr>
			<td><img src="<?php print $img_path ?>/img/topnavigationborder.png" alt="" /></td>
		</tr><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation8n10">
			<td><table class="cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_7 ctl00_ctl00_DynamicNavigation8_12" cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation8_1 cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_6 ctl00_ctl00_DynamicNavigation8_11" href="/EssentiaInstitute/Forsponsors.aspx" target="_self" style="border-style:none;font-size:1em;">For sponsors <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
				</tr>
			</table></td>
		</tr><tr>
			<td><img src="<?php print $img_path ?>/img/topnavigationborder.png" alt="" /></td>
		</tr><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation8n11">
			<td><table class="cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_7 ctl00_ctl00_DynamicNavigation8_12" cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation8_1 cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_6 ctl00_ctl00_DynamicNavigation8_11" href="/EssentiaInstitute/Nationalprogramaffiliations.aspx" target="_self" style="border-style:none;font-size:1em;">National affiliations <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
				</tr>
			</table></td>
		</tr><tr>
			<td><img src="<?php print $img_path ?>/img/topnavigationborder.png" alt="" /></td>
		</tr><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation8n12">
			<td><table class="cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_7 ctl00_ctl00_DynamicNavigation8_12" cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation8_1 cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_6 ctl00_ctl00_DynamicNavigation8_11" href="/EssentiaInstitute/Otherresources.aspx" target="_self" style="border-style:none;font-size:1em;">Clinical Trials Resources <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
				</tr>
			</table></td>
		</tr><tr>
			<td><img src="<?php print $img_path ?>/img/topnavigationborder.png" alt="" /></td>
		</tr>
	</table><div class="cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_7 ctl00_ctl00_DynamicNavigation8_12 ctl00_ctl00_DynamicNavigation8_0" id="ctl00_ctl00_DynamicNavigation8n0ItemsUp" onmouseover="PopOut_Up(this)" onmouseout="PopOut_Stop(this)" style="text-align:center;">
		<img src="/WebResource.axd?d=6OXYgwc9pKPEWBDIGbolV1bgBuXR_clay_Ag1K1TKFb5puPoR8uj_h9wQUm8eh-COiGFSOLlSjhkdUP8oEYvx7b1kGqfKKMzYdRkw602m1U1&amp;t=635018005510000000" alt="" />
	</div><div class="cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_7 ctl00_ctl00_DynamicNavigation8_12 ctl00_ctl00_DynamicNavigation8_0" id="ctl00_ctl00_DynamicNavigation8n0ItemsDn" onmouseover="PopOut_Down(this)" onmouseout="PopOut_Stop(this)" style="text-align:center;">
		<img src="/WebResource.axd?d=d8khCmRq78x3mmQ3TFPQeeHhoGMUDWHCF8W8t3jcwVXnxeSee6dpFGvouK8LUj6LzPGJWpPcDhkvrNWwKYjtOr8GAfSrn3ONnPK1e2hewkg1&amp;t=635018005510000000" alt="" />
	</div>
</div><div id="ctl00_ctl00_DynamicNavigation8n1Items" class="ctl00_ctl00_DynamicNavigation8_0 cpsty_DynamicNavigation8_DynamicMenu DynamicMenu ctl00_ctl00_DynamicNavigation8_8 ctl00_ctl00_DynamicNavigation8_20">
	<table border="0" cellpadding="0" cellspacing="0">
		<tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation8n13">
			<td><table class="cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_7 ctl00_ctl00_DynamicNavigation8_12" cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation8_1 cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_6 ctl00_ctl00_DynamicNavigation8_11" href="/EssentiaInstitute/AreasofResearch.aspx" target="_self" style="border-style:none;font-size:1em;">Areas of Research <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
				</tr>
			</table></td>
		</tr><tr>
			<td><img src="<?php print $img_path ?>/img/topnavigationborder.png" alt="" /></td>
		</tr><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation8n14">
			<td><table class="cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_7 ctl00_ctl00_DynamicNavigation8_12" cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation8_1 cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_6 ctl00_ctl00_DynamicNavigation8_11" href="/EssentiaInstitute/Capabilities.aspx" target="_self" style="border-style:none;font-size:1em;">Capabilities <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
				</tr>
			</table></td>
		</tr><tr>
			<td><img src="<?php print $img_path ?>/img/topnavigationborder.png" alt="" /></td>
		</tr><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation8n15">
			<td><table class="cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_7 ctl00_ctl00_DynamicNavigation8_12" cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation8_1 cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_6 ctl00_ctl00_DynamicNavigation8_11" href="/EssentiaInstitute/Researchers1.aspx" target="_self" style="border-style:none;font-size:1em;">Researchers <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
				</tr>
			</table></td>
		</tr><tr>
			<td><img src="<?php print $img_path ?>/img/topnavigationborder.png" alt="" /></td>
		</tr><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation8n16">
			<td><table class="cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_7 ctl00_ctl00_DynamicNavigation8_12" cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation8_1 cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_6 ctl00_ctl00_DynamicNavigation8_11" href="/EssentiaInstitute/Partnersaffiliations.aspx" target="_self" style="border-style:none;font-size:1em;">Partners/affiliations <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
				</tr>
			</table></td>
		</tr><tr>
			<td><img src="<?php print $img_path ?>/img/topnavigationborder.png" alt="" /></td>
		</tr><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation8n17">
			<td><table class="cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_7 ctl00_ctl00_DynamicNavigation8_12" cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation8_1 cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_6 ctl00_ctl00_DynamicNavigation8_11" href="/EssentiaInstitute/Publications.aspx" target="_self" style="border-style:none;font-size:1em;">Publications <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
				</tr>
			</table></td>
		</tr><tr>
			<td><img src="<?php print $img_path ?>/img/topnavigationborder.png" alt="" /></td>
		</tr><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation8n18">
			<td><table class="cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_7 ctl00_ctl00_DynamicNavigation8_12" cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation8_1 cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_6 ctl00_ctl00_DynamicNavigation8_11" href="/EssentiaInstitute/Recognitions.aspx" target="_self" style="border-style:none;font-size:1em;">Recognitions <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
				</tr>
			</table></td>
		</tr><tr>
			<td><img src="<?php print $img_path ?>/img/topnavigationborder.png" alt="" /></td>
		</tr><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation8n19">
			<td><table class="cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_7 ctl00_ctl00_DynamicNavigation8_12" cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation8_1 cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_6 ctl00_ctl00_DynamicNavigation8_11" href="/EssentiaInstitute/CCOP.aspx" target="_self" style="border-style:none;font-size:1em;">CCOP <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
				</tr>
			</table></td>
		</tr><tr>
			<td><img src="<?php print $img_path ?>/img/topnavigationborder.png" alt="" /></td>
		</tr><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation8n20">
			<td><table class="cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_7 ctl00_ctl00_DynamicNavigation8_12" cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation8_1 cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_6 ctl00_ctl00_DynamicNavigation8_11" href="/EssentiaInstitute/CommunityHealthAssessment.aspx" target="_self" style="border-style:none;font-size:1em;">Comm. Health Assessment <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
				</tr>
			</table></td>
		</tr><tr>
			<td><img src="<?php print $img_path ?>/img/topnavigationborder.png" alt="" /></td>
		</tr><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation8n21">
			<td><table class="cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_7 ctl00_ctl00_DynamicNavigation8_12" cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation8_1 cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_6 ctl00_ctl00_DynamicNavigation8_11" href="/EssentiaInstitute/HMORN.aspx" target="_self" style="border-style:none;font-size:1em;">HMO Research Network <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
				</tr>
			</table></td>
		</tr><tr>
			<td><img src="<?php print $img_path ?>/img/topnavigationborder.png" alt="" /></td>
		</tr><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation8n22">
			<td><table class="cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_7 ctl00_ctl00_DynamicNavigation8_12" cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation8_1 cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_6 ctl00_ctl00_DynamicNavigation8_11" href="/EssentiaInstitute/SPA.aspx" target="_self" style="border-style:none;font-size:1em;">Sponsored Programs Admin <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
				</tr>
			</table></td>
		</tr><tr>
			<td><img src="<?php print $img_path ?>/img/topnavigationborder.png" alt="" /></td>
		</tr><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation8n23">
			<td><table class="cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_7 ctl00_ctl00_DynamicNavigation8_12" cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation8_1 cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_6 ctl00_ctl00_DynamicNavigation8_11" href="/EssentiaInstitute/FinancialInterest.aspx" target="_self" style="border-style:none;font-size:1em;">Financial Interest - Grants <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
				</tr>
			</table></td>
		</tr><tr>
			<td><img src="<?php print $img_path ?>/img/topnavigationborder.png" alt="" /></td>
		</tr>
	</table><div class="cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_7 ctl00_ctl00_DynamicNavigation8_12 ctl00_ctl00_DynamicNavigation8_0" id="ctl00_ctl00_DynamicNavigation8n1ItemsUp" onmouseover="PopOut_Up(this)" onmouseout="PopOut_Stop(this)" style="text-align:center;">
		<img src="/WebResource.axd?d=6OXYgwc9pKPEWBDIGbolV1bgBuXR_clay_Ag1K1TKFb5puPoR8uj_h9wQUm8eh-COiGFSOLlSjhkdUP8oEYvx7b1kGqfKKMzYdRkw602m1U1&amp;t=635018005510000000" alt="" />
	</div><div class="cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_7 ctl00_ctl00_DynamicNavigation8_12 ctl00_ctl00_DynamicNavigation8_0" id="ctl00_ctl00_DynamicNavigation8n1ItemsDn" onmouseover="PopOut_Down(this)" onmouseout="PopOut_Stop(this)" style="text-align:center;">
		<img src="/WebResource.axd?d=d8khCmRq78x3mmQ3TFPQeeHhoGMUDWHCF8W8t3jcwVXnxeSee6dpFGvouK8LUj6LzPGJWpPcDhkvrNWwKYjtOr8GAfSrn3ONnPK1e2hewkg1&amp;t=635018005510000000" alt="" />
	</div>
</div><div id="ctl00_ctl00_DynamicNavigation8n2Items" class="ctl00_ctl00_DynamicNavigation8_0 cpsty_DynamicNavigation8_DynamicMenu DynamicMenu ctl00_ctl00_DynamicNavigation8_8 ctl00_ctl00_DynamicNavigation8_20">
	<table border="0" cellpadding="0" cellspacing="0">
		<tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation8n24">
			<td><table class="cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_7 ctl00_ctl00_DynamicNavigation8_12" cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation8_1 cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_6 ctl00_ctl00_DynamicNavigation8_11" href="/EssentiaInstitute/ForLearners.aspx" target="_self" style="border-style:none;font-size:1em;">CME Activities <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
				</tr>
			</table></td>
		</tr><tr>
			<td><img src="<?php print $img_path ?>/img/topnavigationborder.png" alt="" /></td>
		</tr><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation8n25">
			<td><table class="cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_7 ctl00_ctl00_DynamicNavigation8_12" cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation8_1 cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_6 ctl00_ctl00_DynamicNavigation8_11" href="/EssentiaInstitute/ForPresenters.aspx" target="_self" style="border-style:none;font-size:1em;">CME Resources <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
				</tr>
			</table></td>
		</tr><tr>
			<td><img src="<?php print $img_path ?>/img/topnavigationborder.png" alt="" /></td>
		</tr><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation8n26">
			<td><table class="cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_7 ctl00_ctl00_DynamicNavigation8_12" cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation8_1 cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_6 ctl00_ctl00_DynamicNavigation8_11" href="/EssentiaInstitute/HealthSciencesEducation.aspx" target="_self" style="border-style:none;font-size:1em;">Health Sciences Education <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
				</tr>
			</table></td>
		</tr><tr>
			<td><img src="<?php print $img_path ?>/img/topnavigationborder.png" alt="" /></td>
		</tr><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation8n27">
			<td><table class="cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_7 ctl00_ctl00_DynamicNavigation8_12" cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation8_1 cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_6 ctl00_ctl00_DynamicNavigation8_11" href="/EssentiaInstitute/LibraryServices.aspx" target="_self" style="border-style:none;font-size:1em;">Library Services <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
				</tr>
			</table></td>
		</tr><tr>
			<td><img src="<?php print $img_path ?>/img/topnavigationborder.png" alt="" /></td>
		</tr>
	</table><div class="cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_7 ctl00_ctl00_DynamicNavigation8_12 ctl00_ctl00_DynamicNavigation8_0" id="ctl00_ctl00_DynamicNavigation8n2ItemsUp" onmouseover="PopOut_Up(this)" onmouseout="PopOut_Stop(this)" style="text-align:center;">
		<img src="/WebResource.axd?d=6OXYgwc9pKPEWBDIGbolV1bgBuXR_clay_Ag1K1TKFb5puPoR8uj_h9wQUm8eh-COiGFSOLlSjhkdUP8oEYvx7b1kGqfKKMzYdRkw602m1U1&amp;t=635018005510000000" alt="" />
	</div><div class="cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_7 ctl00_ctl00_DynamicNavigation8_12 ctl00_ctl00_DynamicNavigation8_0" id="ctl00_ctl00_DynamicNavigation8n2ItemsDn" onmouseover="PopOut_Down(this)" onmouseout="PopOut_Stop(this)" style="text-align:center;">
		<img src="/WebResource.axd?d=d8khCmRq78x3mmQ3TFPQeeHhoGMUDWHCF8W8t3jcwVXnxeSee6dpFGvouK8LUj6LzPGJWpPcDhkvrNWwKYjtOr8GAfSrn3ONnPK1e2hewkg1&amp;t=635018005510000000" alt="" />
	</div>
</div><div id="ctl00_ctl00_DynamicNavigation8n24Items" class="ctl00_ctl00_DynamicNavigation8_0 cpsty_DynamicNavigation8_DynamicMenu DynamicMenu ctl00_ctl00_DynamicNavigation8_8 cpsty_DynamicNavigation8_Level3SubMenu DynamicMenu3 ctl00_ctl00_DynamicNavigation8_21">
	<table border="0" cellpadding="0" cellspacing="0">
		<tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation8n28">
			<td><table class="cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_7 cpsty_DynamicNavigation8_Level3MenuItem ctl00_ctl00_DynamicNavigation8_14" cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation8_1 cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_6 cpsty_DynamicNavigation8_Level3MenuItem ctl00_ctl00_DynamicNavigation8_13" href="/EssentiaInstitute/CourseOfferings.aspx" target="_self" style="border-style:none;font-size:1em;">Conferences <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
				</tr>
			</table></td>
		</tr><tr>
			<td><img src="<?php print $img_path ?>/img/topnavigationborder.png" alt="" /></td>
		</tr><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation8n29">
			<td><table class="cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_7 cpsty_DynamicNavigation8_Level3MenuItem ctl00_ctl00_DynamicNavigation8_14" cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation8_1 cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_6 cpsty_DynamicNavigation8_Level3MenuItem ctl00_ctl00_DynamicNavigation8_13" href="/EssentiaInstitute/FridayGrandRounds.aspx" target="_self" style="border-style:none;font-size:1em;">Friday Grand Rounds <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
				</tr>
			</table></td>
		</tr><tr>
			<td><img src="<?php print $img_path ?>/img/topnavigationborder.png" alt="" /></td>
		</tr><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation8n30">
			<td><table class="cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_7 cpsty_DynamicNavigation8_Level3MenuItem ctl00_ctl00_DynamicNavigation8_14" cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation8_1 cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_6 cpsty_DynamicNavigation8_Level3MenuItem ctl00_ctl00_DynamicNavigation8_13" href="/EssentiaInstitute/OutreachCME.aspx" target="_self" style="border-style:none;font-size:1em;">Outreach CME <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
				</tr>
			</table></td>
		</tr><tr>
			<td><img src="<?php print $img_path ?>/img/topnavigationborder.png" alt="" /></td>
		</tr><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation8n31">
			<td><table class="cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_7 cpsty_DynamicNavigation8_Level3MenuItem ctl00_ctl00_DynamicNavigation8_14" cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation8_1 cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_6 cpsty_DynamicNavigation8_Level3MenuItem ctl00_ctl00_DynamicNavigation8_13" href="/EssentiaInstitute/RegularlyScheduledSeries.aspx" target="_self" style="border-style:none;font-size:1em;">Reg. Scheduled Series <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
				</tr>
			</table></td>
		</tr><tr>
			<td><img src="<?php print $img_path ?>/img/topnavigationborder.png" alt="" /></td>
		</tr><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation8n32">
			<td><table class="cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_7 cpsty_DynamicNavigation8_Level3MenuItem ctl00_ctl00_DynamicNavigation8_14" cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation8_1 cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_6 cpsty_DynamicNavigation8_Level3MenuItem ctl00_ctl00_DynamicNavigation8_13" href="/EssentiaInstitute/CertificatesandEvaluations.aspx" target="_blank" style="border-style:none;font-size:1em;">Certs. and Evals. <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
				</tr>
			</table></td>
		</tr><tr>
			<td><img src="<?php print $img_path ?>/img/topnavigationborder.png" alt="" /></td>
		</tr><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation8n33">
			<td><table class="cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_7 cpsty_DynamicNavigation8_Level3MenuItem ctl00_ctl00_DynamicNavigation8_14" cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation8_1 cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_6 cpsty_DynamicNavigation8_Level3MenuItem ctl00_ctl00_DynamicNavigation8_13" href="/EssentiaInstitute/ConferenceMaterialsArchive.aspx" target="_self" style="border-style:none;font-size:1em;">Conf. Materials Archive <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
				</tr>
			</table></td>
		</tr><tr>
			<td><img src="<?php print $img_path ?>/img/topnavigationborder.png" alt="" /></td>
		</tr><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation8n34">
			<td><table class="cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_7 cpsty_DynamicNavigation8_Level3MenuItem ctl00_ctl00_DynamicNavigation8_14" cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation8_1 cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_6 cpsty_DynamicNavigation8_Level3MenuItem ctl00_ctl00_DynamicNavigation8_13" href="/EssentiaInstitute/CreditTranscripts.aspx" target="_blank" style="border-style:none;font-size:1em;">Credit Transcripts <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
				</tr>
			</table></td>
		</tr><tr>
			<td><img src="<?php print $img_path ?>/img/topnavigationborder.png" alt="" /></td>
		</tr>
	</table><div class="cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_7 cpsty_DynamicNavigation8_Level3MenuItem ctl00_ctl00_DynamicNavigation8_14 ctl00_ctl00_DynamicNavigation8_0" id="ctl00_ctl00_DynamicNavigation8n24ItemsUp" onmouseover="PopOut_Up(this)" onmouseout="PopOut_Stop(this)" style="text-align:center;">
		<img src="/WebResource.axd?d=6OXYgwc9pKPEWBDIGbolV1bgBuXR_clay_Ag1K1TKFb5puPoR8uj_h9wQUm8eh-COiGFSOLlSjhkdUP8oEYvx7b1kGqfKKMzYdRkw602m1U1&amp;t=635018005510000000" alt="" />
	</div><div class="cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_7 cpsty_DynamicNavigation8_Level3MenuItem ctl00_ctl00_DynamicNavigation8_14 ctl00_ctl00_DynamicNavigation8_0" id="ctl00_ctl00_DynamicNavigation8n24ItemsDn" onmouseover="PopOut_Down(this)" onmouseout="PopOut_Stop(this)" style="text-align:center;">
		<img src="/WebResource.axd?d=d8khCmRq78x3mmQ3TFPQeeHhoGMUDWHCF8W8t3jcwVXnxeSee6dpFGvouK8LUj6LzPGJWpPcDhkvrNWwKYjtOr8GAfSrn3ONnPK1e2hewkg1&amp;t=635018005510000000" alt="" />
	</div>
</div><div id="ctl00_ctl00_DynamicNavigation8n25Items" class="ctl00_ctl00_DynamicNavigation8_0 cpsty_DynamicNavigation8_DynamicMenu DynamicMenu ctl00_ctl00_DynamicNavigation8_8 cpsty_DynamicNavigation8_Level3SubMenu DynamicMenu3 ctl00_ctl00_DynamicNavigation8_21">
	<table border="0" cellpadding="0" cellspacing="0">
		<tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation8n35">
			<td><table class="cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_7 cpsty_DynamicNavigation8_Level3MenuItem ctl00_ctl00_DynamicNavigation8_14" cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation8_1 cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_6 cpsty_DynamicNavigation8_Level3MenuItem ctl00_ctl00_DynamicNavigation8_13" href="/EssentiaInstitute/OutreachPresenterPlanningGuide.aspx" target="_blank" style="border-style:none;font-size:1em;">Outreach Planning Guide <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
				</tr>
			</table></td>
		</tr><tr>
			<td><img src="<?php print $img_path ?>/img/topnavigationborder.png" alt="" /></td>
		</tr><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation8n36">
			<td><table class="cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_7 cpsty_DynamicNavigation8_Level3MenuItem ctl00_ctl00_DynamicNavigation8_14" cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation8_1 cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_6 cpsty_DynamicNavigation8_Level3MenuItem ctl00_ctl00_DynamicNavigation8_13" href="/EssentiaInstitute/PresentationStandards.aspx" target="_blank" style="border-style:none;font-size:1em;">PowerPoint Standards <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
				</tr>
			</table></td>
		</tr><tr>
			<td><img src="<?php print $img_path ?>/img/topnavigationborder.png" alt="" /></td>
		</tr><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation8n37">
			<td><table class="cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_7 cpsty_DynamicNavigation8_Level3MenuItem ctl00_ctl00_DynamicNavigation8_14" cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation8_1 cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_6 cpsty_DynamicNavigation8_Level3MenuItem ctl00_ctl00_DynamicNavigation8_13" href="/EssentiaInstitute/PresentationSelfEvaluation.aspx" target="_blank" style="border-style:none;font-size:1em;">Presentation Criteria <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
				</tr>
			</table></td>
		</tr><tr>
			<td><img src="<?php print $img_path ?>/img/topnavigationborder.png" alt="" /></td>
		</tr><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation8n38">
			<td><table class="cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_7 cpsty_DynamicNavigation8_Level3MenuItem ctl00_ctl00_DynamicNavigation8_14" cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation8_1 cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_6 cpsty_DynamicNavigation8_Level3MenuItem ctl00_ctl00_DynamicNavigation8_13" href="/EssentiaInstitute/VideoconferenceTips.aspx" target="_blank" style="border-style:none;font-size:1em;">Videoconference Tips <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
				</tr>
			</table></td>
		</tr><tr>
			<td><img src="<?php print $img_path ?>/img/topnavigationborder.png" alt="" /></td>
		</tr><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation8n39">
			<td><table class="cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_7 cpsty_DynamicNavigation8_Level3MenuItem ctl00_ctl00_DynamicNavigation8_14" cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation8_1 cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_6 cpsty_DynamicNavigation8_Level3MenuItem ctl00_ctl00_DynamicNavigation8_13" href="/EssentiaInstitute/DisclosureForm.aspx" target="_self" style="border-style:none;font-size:1em;">Faculty Disclosure Form <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
				</tr>
			</table></td>
		</tr><tr>
			<td><img src="<?php print $img_path ?>/img/topnavigationborder.png" alt="" /></td>
		</tr><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation8n40">
			<td><table class="cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_7 cpsty_DynamicNavigation8_Level3MenuItem ctl00_ctl00_DynamicNavigation8_14" cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation8_1 cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_6 cpsty_DynamicNavigation8_Level3MenuItem ctl00_ctl00_DynamicNavigation8_13" href="/EssentiaInstitute/OutreachSiteInformation.aspx" target="_self" style="border-style:none;font-size:1em;">Outreach Site Info <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
				</tr>
			</table></td>
		</tr><tr>
			<td><img src="<?php print $img_path ?>/img/topnavigationborder.png" alt="" /></td>
		</tr><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation8n41">
			<td><table class="cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_7 cpsty_DynamicNavigation8_Level3MenuItem ctl00_ctl00_DynamicNavigation8_14" cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation8_1 cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_6 cpsty_DynamicNavigation8_Level3MenuItem ctl00_ctl00_DynamicNavigation8_13" href="/EssentiaInstitute/AudienceResponseSysGuide.aspx" target="_blank" style="border-style:none;font-size:1em;">Audience Response System <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
				</tr>
			</table></td>
		</tr><tr>
			<td><img src="<?php print $img_path ?>/img/topnavigationborder.png" alt="" /></td>
		</tr><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation8n42">
			<td><table class="cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_7 cpsty_DynamicNavigation8_Level3MenuItem ctl00_ctl00_DynamicNavigation8_14" cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation8_1 cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_6 cpsty_DynamicNavigation8_Level3MenuItem ctl00_ctl00_DynamicNavigation8_13" href="/EssentiaInstitute/CMEContactUs.aspx" target="_self" style="border-style:none;font-size:1em;">CME/CPD Contact <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
				</tr>
			</table></td>
		</tr><tr>
			<td><img src="<?php print $img_path ?>/img/topnavigationborder.png" alt="" /></td>
		</tr><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation8n43">
			<td><table class="cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_7 cpsty_DynamicNavigation8_Level3MenuItem ctl00_ctl00_DynamicNavigation8_14" cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation8_1 cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_6 cpsty_DynamicNavigation8_Level3MenuItem ctl00_ctl00_DynamicNavigation8_13" href="/EssentiaInstitute/Links.aspx" target="_self" style="border-style:none;font-size:1em;">Links <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
				</tr>
			</table></td>
		</tr><tr>
			<td><img src="<?php print $img_path ?>/img/topnavigationborder.png" alt="" /></td>
		</tr>
	</table><div class="cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_7 cpsty_DynamicNavigation8_Level3MenuItem ctl00_ctl00_DynamicNavigation8_14 ctl00_ctl00_DynamicNavigation8_0" id="ctl00_ctl00_DynamicNavigation8n25ItemsUp" onmouseover="PopOut_Up(this)" onmouseout="PopOut_Stop(this)" style="text-align:center;">
		<img src="/WebResource.axd?d=6OXYgwc9pKPEWBDIGbolV1bgBuXR_clay_Ag1K1TKFb5puPoR8uj_h9wQUm8eh-COiGFSOLlSjhkdUP8oEYvx7b1kGqfKKMzYdRkw602m1U1&amp;t=635018005510000000" alt="" />
	</div><div class="cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_7 cpsty_DynamicNavigation8_Level3MenuItem ctl00_ctl00_DynamicNavigation8_14 ctl00_ctl00_DynamicNavigation8_0" id="ctl00_ctl00_DynamicNavigation8n25ItemsDn" onmouseover="PopOut_Down(this)" onmouseout="PopOut_Stop(this)" style="text-align:center;">
		<img src="/WebResource.axd?d=d8khCmRq78x3mmQ3TFPQeeHhoGMUDWHCF8W8t3jcwVXnxeSee6dpFGvouK8LUj6LzPGJWpPcDhkvrNWwKYjtOr8GAfSrn3ONnPK1e2hewkg1&amp;t=635018005510000000" alt="" />
	</div>
</div><div id="ctl00_ctl00_DynamicNavigation8n26Items" class="ctl00_ctl00_DynamicNavigation8_0 cpsty_DynamicNavigation8_DynamicMenu DynamicMenu ctl00_ctl00_DynamicNavigation8_8 cpsty_DynamicNavigation8_Level3SubMenu DynamicMenu3 ctl00_ctl00_DynamicNavigation8_21">
	<table border="0" cellpadding="0" cellspacing="0">
		<tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" title="Go to Duluth Family Medicine Residency Program website" id="ctl00_ctl00_DynamicNavigation8n44">
			<td><table class="cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_7 cpsty_DynamicNavigation8_Level3MenuItem ctl00_ctl00_DynamicNavigation8_14" cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation8_1 cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_6 cpsty_DynamicNavigation8_Level3MenuItem ctl00_ctl00_DynamicNavigation8_13" href="/EssentiaInstitute/FamilyMedicineResidency.aspx" target="_blank" style="border-style:none;font-size:1em;">Family Medicine Residency <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
				</tr>
			</table></td>
		</tr><tr>
			<td><img src="<?php print $img_path ?>/img/topnavigationborder.png" alt="" /></td>
		</tr><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation8n45">
			<td><table class="cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_7 cpsty_DynamicNavigation8_Level3MenuItem ctl00_ctl00_DynamicNavigation8_14" cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation8_1 cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_6 cpsty_DynamicNavigation8_Level3MenuItem ctl00_ctl00_DynamicNavigation8_13" href="/EssentiaInstitute/ObstetricFellowship.aspx" target="_self" style="border-style:none;font-size:1em;">Obstetric Fellowship <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
				</tr>
			</table></td>
		</tr><tr>
			<td><img src="<?php print $img_path ?>/img/topnavigationborder.png" alt="" /></td>
		</tr><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation8n46">
			<td><table class="cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_7 cpsty_DynamicNavigation8_Level3MenuItem ctl00_ctl00_DynamicNavigation8_14" cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation8_1 cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_6 cpsty_DynamicNavigation8_Level3MenuItem ctl00_ctl00_DynamicNavigation8_13" href="/EssentiaInstitute/PharmacyResidency.aspx" target="_self" style="border-style:none;font-size:1em;">Pharmacy Residency <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
				</tr>
			</table></td>
		</tr><tr>
			<td><img src="<?php print $img_path ?>/img/topnavigationborder.png" alt="" /></td>
		</tr><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation8n47">
			<td><table class="cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_7 cpsty_DynamicNavigation8_Level3MenuItem ctl00_ctl00_DynamicNavigation8_14" cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation8_1 cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_6 cpsty_DynamicNavigation8_Level3MenuItem ctl00_ctl00_DynamicNavigation8_13" href="/EssentiaInstitute/AcademicResearchProject.aspx" target="_self" style="border-style:none;font-size:1em;">Academic Research Project <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
				</tr>
			</table></td>
		</tr><tr>
			<td><img src="<?php print $img_path ?>/img/topnavigationborder.png" alt="" /></td>
		</tr>
	</table><div class="cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_7 cpsty_DynamicNavigation8_Level3MenuItem ctl00_ctl00_DynamicNavigation8_14 ctl00_ctl00_DynamicNavigation8_0" id="ctl00_ctl00_DynamicNavigation8n26ItemsUp" onmouseover="PopOut_Up(this)" onmouseout="PopOut_Stop(this)" style="text-align:center;">
		<img src="/WebResource.axd?d=6OXYgwc9pKPEWBDIGbolV1bgBuXR_clay_Ag1K1TKFb5puPoR8uj_h9wQUm8eh-COiGFSOLlSjhkdUP8oEYvx7b1kGqfKKMzYdRkw602m1U1&amp;t=635018005510000000" alt="" />
	</div><div class="cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_7 cpsty_DynamicNavigation8_Level3MenuItem ctl00_ctl00_DynamicNavigation8_14 ctl00_ctl00_DynamicNavigation8_0" id="ctl00_ctl00_DynamicNavigation8n26ItemsDn" onmouseover="PopOut_Down(this)" onmouseout="PopOut_Stop(this)" style="text-align:center;">
		<img src="/WebResource.axd?d=d8khCmRq78x3mmQ3TFPQeeHhoGMUDWHCF8W8t3jcwVXnxeSee6dpFGvouK8LUj6LzPGJWpPcDhkvrNWwKYjtOr8GAfSrn3ONnPK1e2hewkg1&amp;t=635018005510000000" alt="" />
	</div>
</div><div id="ctl00_ctl00_DynamicNavigation8n3Items" class="ctl00_ctl00_DynamicNavigation8_0 cpsty_DynamicNavigation8_DynamicMenu DynamicMenu ctl00_ctl00_DynamicNavigation8_8 ctl00_ctl00_DynamicNavigation8_20">
	<table border="0" cellpadding="0" cellspacing="0">
		<tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation8n48">
			<td><table class="cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_7 ctl00_ctl00_DynamicNavigation8_12" cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation8_1 cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_6 ctl00_ctl00_DynamicNavigation8_11" href="/EssentiaInstitute/AbouttheIRB.aspx" target="_self" style="border-style:none;font-size:1em;">About the IRB <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
				</tr>
			</table></td>
		</tr><tr>
			<td><img src="<?php print $img_path ?>/img/topnavigationborder.png" alt="" /></td>
		</tr><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation8n49">
			<td><table class="cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_7 ctl00_ctl00_DynamicNavigation8_12" cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation8_1 cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_6 ctl00_ctl00_DynamicNavigation8_11" href="/EssentiaInstitute/Forms.aspx" target="_self" style="border-style:none;font-size:1em;">Forms <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
				</tr>
			</table></td>
		</tr><tr>
			<td><img src="<?php print $img_path ?>/img/topnavigationborder.png" alt="" /></td>
		</tr><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation8n50">
			<td><table class="cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_7 ctl00_ctl00_DynamicNavigation8_12" cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation8_1 cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_6 ctl00_ctl00_DynamicNavigation8_11" href="/EssentiaInstitute/MeetingsandDeadlines.aspx" target="_self" style="border-style:none;font-size:1em;">Meetings and Deadlines <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
				</tr>
			</table></td>
		</tr><tr>
			<td><img src="<?php print $img_path ?>/img/topnavigationborder.png" alt="" /></td>
		</tr><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation8n51">
			<td><table class="cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_7 ctl00_ctl00_DynamicNavigation8_12" cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation8_1 cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_6 ctl00_ctl00_DynamicNavigation8_11" href="/EssentiaInstitute/IRBReviewProcess.aspx" target="_self" style="border-style:none;font-size:1em;">IRB Review Process <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
				</tr>
			</table></td>
		</tr><tr>
			<td><img src="<?php print $img_path ?>/img/topnavigationborder.png" alt="" /></td>
		</tr><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation8n52">
			<td><table class="cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_7 ctl00_ctl00_DynamicNavigation8_12" cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation8_1 cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_6 ctl00_ctl00_DynamicNavigation8_11" href="/EssentiaInstitute/Training.aspx" target="_self" style="border-style:none;font-size:1em;">Training <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
				</tr>
			</table></td>
		</tr><tr>
			<td><img src="<?php print $img_path ?>/img/topnavigationborder.png" alt="" /></td>
		</tr><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation8n53">
			<td><table class="cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_7 ctl00_ctl00_DynamicNavigation8_12" cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation8_1 cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_6 ctl00_ctl00_DynamicNavigation8_11" href="/EssentiaInstitute/GuidanceFAQs.aspx" target="_self" style="border-style:none;font-size:1em;">Guidance & FAQs <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
				</tr>
			</table></td>
		</tr><tr>
			<td><img src="<?php print $img_path ?>/img/topnavigationborder.png" alt="" /></td>
		</tr>
	</table><div class="cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_7 ctl00_ctl00_DynamicNavigation8_12 ctl00_ctl00_DynamicNavigation8_0" id="ctl00_ctl00_DynamicNavigation8n3ItemsUp" onmouseover="PopOut_Up(this)" onmouseout="PopOut_Stop(this)" style="text-align:center;">
		<img src="/WebResource.axd?d=6OXYgwc9pKPEWBDIGbolV1bgBuXR_clay_Ag1K1TKFb5puPoR8uj_h9wQUm8eh-COiGFSOLlSjhkdUP8oEYvx7b1kGqfKKMzYdRkw602m1U1&amp;t=635018005510000000" alt="" />
	</div><div class="cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_7 ctl00_ctl00_DynamicNavigation8_12 ctl00_ctl00_DynamicNavigation8_0" id="ctl00_ctl00_DynamicNavigation8n3ItemsDn" onmouseover="PopOut_Down(this)" onmouseout="PopOut_Stop(this)" style="text-align:center;">
		<img src="/WebResource.axd?d=d8khCmRq78x3mmQ3TFPQeeHhoGMUDWHCF8W8t3jcwVXnxeSee6dpFGvouK8LUj6LzPGJWpPcDhkvrNWwKYjtOr8GAfSrn3ONnPK1e2hewkg1&amp;t=635018005510000000" alt="" />
	</div>
</div><div id="ctl00_ctl00_DynamicNavigation8n48Items" class="ctl00_ctl00_DynamicNavigation8_0 cpsty_DynamicNavigation8_DynamicMenu DynamicMenu ctl00_ctl00_DynamicNavigation8_8 cpsty_DynamicNavigation8_Level3SubMenu DynamicMenu3 ctl00_ctl00_DynamicNavigation8_21">
	<table border="0" cellpadding="0" cellspacing="0">
		<tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation8n54">
			<td><table class="cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_7 cpsty_DynamicNavigation8_Level3MenuItem ctl00_ctl00_DynamicNavigation8_14" cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation8_1 cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_6 cpsty_DynamicNavigation8_Level3MenuItem ctl00_ctl00_DynamicNavigation8_13" href="/EssentiaInstitute/AuthorityPurpose.aspx" target="_self" style="border-style:none;font-size:1em;">Authority and Purpose <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
				</tr>
			</table></td>
		</tr><tr>
			<td><img src="<?php print $img_path ?>/img/topnavigationborder.png" alt="" /></td>
		</tr><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation8n55">
			<td><table class="cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_7 cpsty_DynamicNavigation8_Level3MenuItem ctl00_ctl00_DynamicNavigation8_14" cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation8_1 cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_6 cpsty_DynamicNavigation8_Level3MenuItem ctl00_ctl00_DynamicNavigation8_13" href="/EssentiaInstitute/Membership.aspx" target="_self" style="border-style:none;font-size:1em;">Membership <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
				</tr>
			</table></td>
		</tr><tr>
			<td><img src="<?php print $img_path ?>/img/topnavigationborder.png" alt="" /></td>
		</tr><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation8n56">
			<td><table class="cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_7 cpsty_DynamicNavigation8_Level3MenuItem ctl00_ctl00_DynamicNavigation8_14" cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation8_1 cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_6 cpsty_DynamicNavigation8_Level3MenuItem ctl00_ctl00_DynamicNavigation8_13" href="/EssentiaInstitute/Assurances.aspx" target="_self" style="border-style:none;font-size:1em;">Federalwide Assurance <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
				</tr>
			</table></td>
		</tr><tr>
			<td><img src="<?php print $img_path ?>/img/topnavigationborder.png" alt="" /></td>
		</tr>
	</table><div class="cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_7 cpsty_DynamicNavigation8_Level3MenuItem ctl00_ctl00_DynamicNavigation8_14 ctl00_ctl00_DynamicNavigation8_0" id="ctl00_ctl00_DynamicNavigation8n48ItemsUp" onmouseover="PopOut_Up(this)" onmouseout="PopOut_Stop(this)" style="text-align:center;">
		<img src="/WebResource.axd?d=6OXYgwc9pKPEWBDIGbolV1bgBuXR_clay_Ag1K1TKFb5puPoR8uj_h9wQUm8eh-COiGFSOLlSjhkdUP8oEYvx7b1kGqfKKMzYdRkw602m1U1&amp;t=635018005510000000" alt="" />
	</div><div class="cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_7 cpsty_DynamicNavigation8_Level3MenuItem ctl00_ctl00_DynamicNavigation8_14 ctl00_ctl00_DynamicNavigation8_0" id="ctl00_ctl00_DynamicNavigation8n48ItemsDn" onmouseover="PopOut_Down(this)" onmouseout="PopOut_Stop(this)" style="text-align:center;">
		<img src="/WebResource.axd?d=d8khCmRq78x3mmQ3TFPQeeHhoGMUDWHCF8W8t3jcwVXnxeSee6dpFGvouK8LUj6LzPGJWpPcDhkvrNWwKYjtOr8GAfSrn3ONnPK1e2hewkg1&amp;t=635018005510000000" alt="" />
	</div>
</div><div id="ctl00_ctl00_DynamicNavigation8n4Items" class="ctl00_ctl00_DynamicNavigation8_0 cpsty_DynamicNavigation8_DynamicMenu DynamicMenu ctl00_ctl00_DynamicNavigation8_8 ctl00_ctl00_DynamicNavigation8_20">
	<table border="0" cellpadding="0" cellspacing="0">
		<tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation8n57">
			<td><table class="cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_7 ctl00_ctl00_DynamicNavigation8_12" cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation8_1 cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_6 ctl00_ctl00_DynamicNavigation8_11" href="/EssentiaInstitute/Values.aspx" target="_self" style="border-style:none;font-size:1em;">Mission, Vision, and Values <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
				</tr>
			</table></td>
		</tr><tr>
			<td><img src="<?php print $img_path ?>/img/topnavigationborder.png" alt="" /></td>
		</tr><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation8n58">
			<td><table class="cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_7 ctl00_ctl00_DynamicNavigation8_12" cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation8_1 cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_6 ctl00_ctl00_DynamicNavigation8_11" href="/EssentiaInstitute/Researchers2.aspx" target="_self" style="border-style:none;font-size:1em;">Researchers <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
				</tr>
			</table></td>
		</tr><tr>
			<td><img src="<?php print $img_path ?>/img/topnavigationborder.png" alt="" /></td>
		</tr><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation8n59">
			<td><table class="cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_7 ctl00_ctl00_DynamicNavigation8_12" cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation8_1 cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_6 ctl00_ctl00_DynamicNavigation8_11" href="/EssentiaInstitute/BoardMembers.aspx" target="_self" style="border-style:none;font-size:1em;">Board Members <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
				</tr>
			</table></td>
		</tr><tr>
			<td><img src="<?php print $img_path ?>/img/topnavigationborder.png" alt="" /></td>
		</tr><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation8n60">
			<td><table class="cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_7 ctl00_ctl00_DynamicNavigation8_12" cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation8_1 cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_6 ctl00_ctl00_DynamicNavigation8_11" href="/EssentiaInstitute/LeadershipTeam.aspx" target="_self" style="border-style:none;font-size:1em;">Leadership Team <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
				</tr>
			</table></td>
		</tr><tr>
			<td><img src="<?php print $img_path ?>/img/topnavigationborder.png" alt="" /></td>
		</tr><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation8n61">
			<td><table class="cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_7 ctl00_ctl00_DynamicNavigation8_12" cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation8_1 cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_6 ctl00_ctl00_DynamicNavigation8_11" href="/EssentiaInstitute/Careers.aspx" target="_self" style="border-style:none;font-size:1em;">Career Opportunities <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
				</tr>
			</table></td>
		</tr><tr>
			<td><img src="<?php print $img_path ?>/img/topnavigationborder.png" alt="" /></td>
		</tr><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation8n62">
			<td><table class="cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_7 ctl00_ctl00_DynamicNavigation8_12" cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation8_1 cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_6 ctl00_ctl00_DynamicNavigation8_11" href="/EssentiaInstitute/SupportScientificResearch.aspx" target="_self" style="border-style:none;font-size:1em;">Support Our Research <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
				</tr>
			</table></td>
		</tr><tr>
			<td><img src="<?php print $img_path ?>/img/topnavigationborder.png" alt="" /></td>
		</tr><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation8n63">
			<td><table class="cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_7 ctl00_ctl00_DynamicNavigation8_12" cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation8_1 cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_6 ctl00_ctl00_DynamicNavigation8_11" href="/EssentiaInstitute/EIRHFactSheet.aspx" target="_self" style="border-style:none;font-size:1em;">EIRH Fact Sheet <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
				</tr>
			</table></td>
		</tr><tr>
			<td><img src="<?php print $img_path ?>/img/topnavigationborder.png" alt="" /></td>
		</tr><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(event)" id="ctl00_ctl00_DynamicNavigation8n64">
			<td><table class="cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_7 ctl00_ctl00_DynamicNavigation8_12" cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td style="white-space:nowrap;width:100%;"><a class="ctl00_ctl00_DynamicNavigation8_1 cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_6 ctl00_ctl00_DynamicNavigation8_11" href="/EssentiaInstitute/Demographics.aspx" target="_self" style="border-style:none;font-size:1em;">Demographics <img src="<?php print $img_path ?>/img/right_arrow.png" border="0" /></a></td>
				</tr>
			</table></td>
		</tr><tr>
			<td><img src="<?php print $img_path ?>/img/topnavigationborder.png" alt="" /></td>
		</tr>
	</table><div class="cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_7 ctl00_ctl00_DynamicNavigation8_12 ctl00_ctl00_DynamicNavigation8_0" id="ctl00_ctl00_DynamicNavigation8n4ItemsUp" onmouseover="PopOut_Up(this)" onmouseout="PopOut_Stop(this)" style="text-align:center;">
		<img src="/WebResource.axd?d=6OXYgwc9pKPEWBDIGbolV1bgBuXR_clay_Ag1K1TKFb5puPoR8uj_h9wQUm8eh-COiGFSOLlSjhkdUP8oEYvx7b1kGqfKKMzYdRkw602m1U1&amp;t=635018005510000000" alt="" />
	</div><div class="cpsty_DynamicNavigation8_DynamicMenuItem ctl00_ctl00_DynamicNavigation8_7 ctl00_ctl00_DynamicNavigation8_12 ctl00_ctl00_DynamicNavigation8_0" id="ctl00_ctl00_DynamicNavigation8n4ItemsDn" onmouseover="PopOut_Down(this)" onmouseout="PopOut_Stop(this)" style="text-align:center;">
		<img src="/WebResource.axd?d=d8khCmRq78x3mmQ3TFPQeeHhoGMUDWHCF8W8t3jcwVXnxeSee6dpFGvouK8LUj6LzPGJWpPcDhkvrNWwKYjtOr8GAfSrn3ONnPK1e2hewkg1&amp;t=635018005510000000" alt="" />
	</div>
</div>
  
  
  
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

</body>
</html>
