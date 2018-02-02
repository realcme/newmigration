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
<div style="font-size:10.0pt;font-family:Arial, Times, serif;color: #000000;width: 626px;clear: both;">
<table width="600px">
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><img src="<?php print $img_url?>purdue_logo.png"></img></td>
          </tr>
          <tr>
            <td align="left" colspan="2" style="padding-top:20px"><?php print $certificate['dateearned'] ?></td>
          </tr>
          <tr>
            <td align="left" colspan="2" style="padding-top:20px"><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?><br/><?php print $certificate['address']?></td>
          </tr> 
          <tr>
            <td align="center" colspan="2" style="padding-top:20px"><span style="font-size:16pt;font-weight:bold">CERTIFICATE</span></td>
          </tr> 
          <tr>
            <td align="center" colspan="2" style="padding-top:20px">Purdue University certifies that </td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><strong><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></strong></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:5px">has participated in the educational activity titled</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><strong><?php print $certificate['course_title'] ?></strong></td>
          </tr>        
          <tr>
            <td align="center" colspan="2" style="padding-top:5px">on <?php print $certificate['dateearned'] ?> <br/> and is awarded <?php print $certificate['amapracat1'].$pratext?>.</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:5px">&nbsp;</td>
          </tr>   
          <tr>
            <td align="center" colspan="2" valign="bottom" style="padding-left:20px;padding-bottom:10px;margin-bottom:0px">
              <img src="<?php print $img_url?>purdue_signature.png"></img><br />
              <div style="position:relative;bottom:5px">
              <span style='padding-bottom:0px;'>Marlene O. Heeg</span><br />
              <span style='padding-top:0px;'>Director, CME Program</span><br />
              </div>
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:5px">
              <div style="position:relative;bottom:2px">
              <span style='font-size:10.0pt;padding-bottom:0px;font-weight:bold;'>
              College of Pharmacy<br />
              Division of Continuing Education<br />
              <br />
              601 Stadium Mall Dr.,  PUSH 336<br />
              West Lafayette, IN 47907-2052<br />
              Telephone:  765/494-5457     Fax:   765/494-0802<br />
              </span>
               </div>
            </td>
          </tr>          
</table>
</div>
<script>print();</script>
</body>
</html>