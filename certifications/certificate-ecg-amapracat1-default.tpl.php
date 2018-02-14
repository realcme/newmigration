<?php
$pratext = ' <i>AMA PRA Category 1 Credit(s)&trade;</i>';
$img_url = $cert_img_url ? $cert_img_url : base_path().path_to_theme().'/img/';
$occupation = ($certificate['profession'] == 'OTH') ? "" : ', '.$certificate['professionlabel'];
$ed = $certificate['@ed'] ?  $certificate['@ed'] : "enduring material";
//
/**************************************************/
/* STYLES MUST BE INLINED (GMAIL REQUIREMENT)     */
/**************************************************/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language; ?>" xml:lang="<?php print $language; ?>">

<head>
  <title><?php print $head_title; ?></title>
</head>
<body>
<div style="font-size:11.0pt;font-family:Arial, Times, serif;color: #000000;clear: both;width: 600px;margin: auto;padding: 0px;">
<table width="600px" style="border: 2px solid black;">
          <tr>
            <td align="center" colspan="2" style="padding-top:20px"><span style='font-size: 14pt;font-weight: bold;'>CERTIFICATE OF</span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><span style='font-size: 14pt;font-weight: bold;'>PARTICIPATION</span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:20px"><span style='font-style:italic;'>Educational Concepts Group, LLC verifies that</span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:20px"><span style='font-size:14.0pt;font-weight: bold;'><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></span>
            </td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><span style='font-style:italic;'>has participated in the <?php print $ed?>  titled</span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><span style='font-weight:bold;'><?php print $certificate['course_title'] ?></span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px;padding-bottom:15px">on  <?php print $certificate['dateearned'] ?> <br /><br/>
              This activity was designated for <?php print $certificate['creditearned'].$pratext?>
            </td>
          </tr>
          <tr>
            <td align="left" style="padding-top:15px; padding-left: 20px; font-size: 8pt; width: 50%; vertical-align: top;">
	            <img src="<?php print $img_url?>ecg_logo.png" style="width: 179px; height: 86px;"></img><br/>
	            <div style="padding-left: 15px">
              Educational Concepts Group, LLC<br/>
              1300 Parkwood Circle SE<br/>
              Suite 325<br/>
              Atlanta, GA 30339<br/>
              1.770.933.1681 - Main<br/>
              1.770.933.1692 - Fax<br/>
              www.educationalconcepts.net<br/>
              </div>
            </td>
            <td align="left" style="padding: 15px;font-size: 8pt; width: 50%; vertical-align: top;">
              &nbsp;<br/>
              Educational Concepts Group, LLC is accredited by the Accreditation Council for Continuing Medical Education to provide continuing medical education for physicians.
              <img src="<?php print $img_url?>ecg_signature.png" style="width: 231px; height: 56px; padding-top: 10px"></img><br/>
	            Tina Stacy, PharmD, BCOP, CCMEP<br/>
	            President<br/>
	            Educational Concepts Group, LLC<br/>
            </td>
          </tr>         
          <tr>
            <td align="center" colspan="2" style="padding-top:25px"><span style='font-size:8pt;'>©2013 Designed and produced by Educational Concepts Group, LLC</span></td>
          </tr>  
          
</table>
</div>
<script>print();</script>
</body>
</html>