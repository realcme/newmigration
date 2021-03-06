<?php
$pratext = ' <i>AMA PRA Category 1 Credit(s)&trade;</i>';
$img_url = $cert_img_url ? $cert_img_url : base_path().path_to_theme().'/img/';
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
<div style="font-size:12.0pt;font-family:Arial, Verdana, sans-serif;color: #000000;clear: both;width: 600px;margin: auto;padding: 0px;">
<table width="600px">
          <tr>
            <td align="center" colspan="2" style="padding-top:30px;font-weight:bold;font-size:14.0pt">CERTIFICATE OF PARTICIPATION</td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:20px">is hereby granted to:</td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:20px;font-weight:bold;"><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></td>
          </tr>  
          <tr>
            <td align="center" colspan="2" style="padding-top:20px;font-weight:bold;">
              <hr style="border: 0;color: #B5AEAE;background-color: #B5AEAE;height: 2px;width: 60%;" />
              <br/>
              <?php print $certificate['course_title'] ?>
              <br/><br/>
              <hr style="border: 0;color: #B5AEAE;background-color: #B5AEAE;height: 2px;width: 60%;" />
            </td>
          </tr>   
          <tr>
            <td align="center" colspan="2" style="padding-top:20px;font-size:11pt">"The Mission of the Mid-Atlantic Alliance for Continuing Medical Education (MAACME) 
            is to support and enhance the practice of continuing education in healthcare in the Mid-Atlantic Region, through educational and informational 
            activities and collaborations"<br/>
            www.maacme.org</td>
          </tr>    
          <tr>
            <td align="center" colspan="2" style="padding-top:30px;font-weight:bold;">
              <hr style="border: 0;color: #000000;background-color: #000000;height: 2px;width: 60%;" />
            MAACME Conference Planning Committee<br/><br/>
            <img src="<?php print $img_url?>maacme_logo.png" style="width: 138px; height: 118px;"></img>
            </td>
          </tr> 
</table>
</div>
<script>print();</script>
</body>
</html>