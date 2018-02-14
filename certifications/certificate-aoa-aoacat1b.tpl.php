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
<div style="font-size:11.0pt;font-family: Arial, Times, serif;color: #000000;width: 600px;margin: auto;clear: both;">
<table width="600px" style="border: 7px solid #993366;">
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><img src="<?php print $img_url?>aoa_logo.jpg" style="width: 303; height: 153;"></img></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:20px;font-size:16pt;font-weight:bold">Certificate of Continuing Medical Education Participation</td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:20px;font-size:16pt;font-weight:bold">Awarded to</td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:5px;font-size:16pt;font-weight: bold;"><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:5px;font-weight: bold;">AOA ID: <span style='text-decoration:underline'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:15px;font-style: italic;">You have just completed the activity entitled</td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:10px;font-weight: bold;font-style: italic;"><?php print $certificate['course_title'] ?></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px;font-style:italic">This activity was designated for 
            <?php print $certificate['aoacat1b'] ?> CME credit(s) in Category 1-B and will be submitted to the American Osteopathic Association (AOA).
          </td>
          </tr>      
          <tr>
            <td align="left" style="padding-top:30px;padding-left:10px;font-weight: bold;width: 50%" >Program Number: <?php print $certificate['@aoa_pn'] ?> </td>
            <td align="right" style="padding-top:30px;padding-right:10px;font-weight: bold;width: 50%">Issue Date: <?php print $certificate['dateearned'] ?></td>
          </tr>    
</table>
</div>
<script>print();</script>
</body>
</html>