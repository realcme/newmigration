<?php
$pratext = ' <i>AMA PRA Category 1 Credit(s)&trade;</i>';
$img_url = $cert_img_url ? $cert_img_url : base_path().path_to_theme().'/img/';
$occupation = ($certificate['profession'] == 'OTH') ? "" : ', '.$certificate['professionlabel'];
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
<div style="font-size:12.0pt;font-family:Arial, Times, serif;color: #000000;clear: both;width: 600px;margin: auto;padding: 0px;">
<table width="600px">
          <tr>
            <td align="center" colspan="2" style="padding-top:5px">
            <div style="float: left;"><img src="<?php print $img_url ?>tafp_logo.jpg" width="195px" height="185px" /></div>
            <br /><br /><br /><span style="font-size:16.0pt;">The Texas Academy of Family Physicians <br /> certifies that</span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:0px"><span style='font-size:14.0pt;font-weight: bold;'><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?><?php print $occupation?></span>
            </td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><span style='font-weight:bold;'>has participated in the educational activity titled</span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><span style='font-weight:bold;'><?php print $certificate['course_title'] ?></span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><span style='font-weight:bold;'>on  <?php print $certificate['dateearned'] ?>
            and is awarded <?php print $certificate['creditearned'].$pratext ?> and <?php print $certificate['creditearned']?>  AAFP Prescribed Credits.</span>
            </td>
          </tr>          
          <tr>
            <td align="left" colspan="2" style="padding-top:10px">This activity has been planned and implemented in accordance with the Essentials and Standards of the Accreditation Council for Continuing Medical Education through the joint sponsorship of the Texas Academy of Family Physicians and TCL Institute, LLC. The Texas Academy of Family Physicians is accredited by the ACCME to provide continuing medical education for physicians.</td>
          </tr>
          <tr>
            <td align="center" style="padding-top:0px;padding-bottom:0px"><br /><br />Please visit www.totalmeded.com for additional CME opportunities on fibromyalgia and a variety of other topics.</td>
            <td align="center" style="padding-top:0px;padding-bottom:0px;white-space: nowrap;">
            <img src="<?php print $img_url ?>tafp_signature.jpg" width="247px" height="131px" /><br />
            <span style="font-weight: bold">Clare A. Hawkins, MD</span><br /> 
            <span style="font-weight: bold;font-style: italic">Chair, TAFP Commission on Annual Session and CME</span>
            </td>
          </tr>
</table>
</div>
<script>print();</script>
</body>
</html>