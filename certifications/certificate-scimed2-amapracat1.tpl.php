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
<div style="font-size:12.0pt;font-family:Arial, Times, serif;color: #000000;clear: both;margin: auto;width: 600px;padding: 0px;">
<table width="600px" style="border: none">
          <tr>
            <td align="left" colspan="2" style="padding-top:15px">
               <img src="<?php print $img_url?>scimed2_logo.png" style="width: 137px; height: 97px;"></img>
            </td>
          </tr>
          <tr>
            <td align="left" colspan="2" style="padding-top:25px"><?php print $certificate['dateearned'] ?></td>
          </tr>          
          <tr>
            <td align="left" colspan="2" style="padding-top:20px"><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?><br/>
            <?php print $certificate['address'] ?>
            </td>
          </tr>           
          <tr>
            <td align="left" colspan="2" style="padding-top:15px">Dear <?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?>:</td>
          </tr>          
          <tr>
            <td align="left" colspan="2" style="padding-top:10px">
            SciMed certifies that <?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?> has participated in the enduring material titled
            <span style="font-style: italic"><?php print $certificate['course_title'] ?></span>
            on <?php print $certificate['dateearned'] ?> and is awarded 
            <?php print $certificate['creditearned'].$pratext ?>. 
            </td>
          </tr>          
          <tr>
            <td align="left" colspan="2" style="padding-top:10px">SciMed is accredited by the Accreditation Council for Continuing Medical Education (ACCME) to provide continuing medical education for physicians.
            </td>
          </tr>          
          <tr>
            <td align="left" colspan="2" style="padding-top:15px">Sincerely,           
            </td>
          </tr>
          <tr>
            <td align="left" colspan="2" style="padding-top:10px;padding-bottom:0px"> <img src="<?php print $img_url?>scimed2_signature.png"></img></td>
          </tr>
          <tr>
            <td align="left" colspan="2" style="padding-top:10px;padding-bottom:0px">
						Andrea Schatz-Anderer<br/>
						Senior Vice President, Program Services
						</td>
          </tr> 
</table>
</div>
<script>print();</script>
</body>
</html>