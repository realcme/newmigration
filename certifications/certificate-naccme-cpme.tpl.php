<?php
$pratext = ' <i>AMA PRA Category 1 Credit(s)&trade;</i>';
$img_url = $cert_img_url ? $cert_img_url : base_path().path_to_theme().'/img/';
$ceu = $certificate['acpe'] / 10.0;
$invalid = $certificate['@invalid'];
if (strlen($invalid) > 0) {
  $text = $invalid;
} else {
  $text = "NACCME is approved by the Council on Podiatric Medical Education as a sponsor of continuing education in podiatric medicine. This program is approved for ".$certificate['cpme']." continuing education contact hour.";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language; ?>" xml:lang="<?php print $language; ?>">

<head>
  <title><?php print $head_title; ?></title>
</head>
<body>
<div style="font-size:10.0pt;font-family:Arial, Times, serif;color: #000000;width: 626px; margin:auto;clear: both;">
<table width="600px">
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><img src="<?php print $img_url?>naccme_logo.png"></img></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:20px">The North American Center for Continuing Medical Education, LLC, certifies that</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><strong><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></strong></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px">has participated in the educational activity titled</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><strong><?php print $certificate['course_title'] ?></strong></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><strong><?php print $certificate['dateearned'] ?></strong></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:25px"><?php print $text?></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:25px">&nbsp;</td>
          </tr>   
          <tr>
            <td align="center" colspan="2" valign="bottom" style="padding-left:20px;padding-bottom:20px;margin-bottom:0px">
              <img src="<?php print $img_url?>naccme_signature.png"></img><br />
              <div style="position:relative;bottom:30px">
              <span style='font-size:12.0pt;padding-bottom:0px;font-weight:bold;'>John T. Savage, MS, CCMEP</span><br />
              <span style='font-size:12.0pt;padding-top:0px;font-weight:bold;'>Director, Medical Education</span><br />
              </div>
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2">
              <div style="position:relative;bottom:2px">
              <span style='font-size:10.0pt;padding-bottom:0px;font-weight:bold;'>
              300 Rike Drive, Suite A • Millstone Township, NJ 08535 
              <br />Ph 609.371.1137 - Fx 609.371.2733
              </span>
               </div>
            </td>
          </tr>          
</table>
</div>
<script>print();</script>
</body>
</html>