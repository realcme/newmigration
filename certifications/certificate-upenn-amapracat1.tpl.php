<?php
$pratext = ' <i>AMA PRA Category 1 Credit(s)&trade;</i>';
$img_url = $cert_img_url ? $cert_img_url : base_path().path_to_theme().'/img/';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language; ?>" xml:lang="<?php print $language; ?>">

<head>
  <title><?php print $head_title; ?></title>
</head>
<body>
<div style="font-size:12.0pt;font-family:Times New Roman, Times, serif;color: #000000;width: 626px;clear: both;">
<table width="600px">
          <tr>
            <td align="center" colspan="2" style="padding-top:5px;">
            	<table><tr><td style="width:300;border-bottom: #A0A0A0 solid 1px"><img src="<?php print $img_url?>upenn_logo.png"></img></td></tr></table></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:5px;font-size:16pt;font-weight:bold"><i>AMA PRA CATEGORY 1 CREDIT&trade;</i> CERTIFICATE</td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:10px;">The Perelman School of Medicine at the University of Pennsylvania certifies that</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:5px;font-weight:bold"><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px;">has participated in the enduring material titled</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:3px;font-weight:bold"><?php print $certificate['course_title'] ?></td>
          </tr>         
          <tr>
            <td align="center" colspan="2" style="padding-top:3px;">on <br /> <span style="font-weight:bold"><?php print $certificate['dateearned'] ?></span> </td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:3px;">Program last reviewed and released online on <br /> <span style="font-weight:bold"><?php print $certificate['begin_date'] ?></span></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:3px;">Program expires on <br /> <span style="font-weight:bold"><?php print $certificate['expiration_date'] ?></span></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:3px;">and is awarded <span style="font-weight:bold"><?php print $certificate['creditearned']?></span><?php print $pratext?></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px;font-size:10.0pt">
            This activity has been planned and implemented in accordance with the Essential Areas and policies of the Accreditation Council for Continuing Medical Education (ACCME) through the joint sponsorship of the Perelman School of Medicine at the University of Pennsylvania, Athena Education Group, LLC, and RealCME. The Perelman School of Medicine at the University of Pennsylvania is accredited by the ACCME to provide continuing medical education for physicians.
            <br/><br/>
            The Perelman School of Medicine at the University of Pennsylvania designates this enduring material for a maximum of <?php print $certificate['amapracat1'].$pratext?>. Physicians should claim only the credit commensurate with the extent of their participation in the activity.
            </td>
          </tr>  
          <tr>
              <td align="center" colspan="2" style="padding-top:25px;font-size:11pt;font-weight:bold">
              	<img src="<?php print $img_url?>upenn_signature.png"></img><br/>
              	Zalman S Agus, MD <br/>
								Associate Dean, Continuing Medical Education
            </td>
          </tr>          
</table>
</div>
<script>print();</script>
</body>
</html>