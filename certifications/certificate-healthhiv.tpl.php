<?php
$pratext = ' <i>AMA PRA Category 1 Credit(s)&trade;</i>';
$img_url = $cert_img_url ? $cert_img_url : base_path().path_to_theme().'/img/';
$date_earned = strftime("%d/%m/%Y", strtotime($certificate['dateearned']));
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language; ?>" xml:lang="<?php print $language; ?>">

<head>
  <title><?php print $head_title; ?></title>
</head>
<body>
<div style="font-size:12.0pt;font-family:Arial, Verdana, sans-serif;color: #828385;width: 600px;margin: auto;clear: both;">
<table width="600px" style="border: 7px solid #828385;">
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><img src="<?php print $img_url?>healthhiv_logo.png"></img></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:25px;font-size:16pt;font-weight:bold">Certificate of Proficiency in HIV Primary Care</td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:15px;font-weight:bold;">HealthHIV certifies that</td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:15px;font-weight:bold;color:#404040;"><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:10px;font-weight:bold;">has completed</td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:15px;font-weight: bold;"><?php print $certificate['course_title'] ?></td>
          </tr>  
          <tr>
            <td align="center" colspan="2" style="padding-top:10px;font-weight:bold;">on</td>
          </tr>        
          <tr>
            <td align="center" colspan="2" style="padding-top:15px;font-weight:bold;color:#404040"> <?php print $date_earned ?></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:25px;font-weight:bold;color:#404040"> &nbsp;</td>
          </tr>     
          <tr>
            <td align="center" style="width: 50%;vertical-align:top" >  
              <img src="<?php print $img_url?>healthhiv_signature1.png" style="width:220px;height:75px;"></img><br/>         	
              Brian Hujdich<br />
							Executive Director,<br />
							HealthHIV<br />
            </td>
            <td align="center" valign="bottom" style="padding-left:20px;padding-bottom:10px;margin-bottom:0px;vertical-align:top">
              <img src="<?php print $img_url?>healthhiv_signature2.png" style="width:220px;height:75px;"></img><br/>
              Donna Eliane Sweet, MD, MACP<br />
							Vice Chair, Board of Directors<br />
							HealthHIV<br />
            </td>
          </tr>    
</table>
</div>
<script>print();</script>
</body>
</html>