<?php
$pratext = ' <i>AMA PRA Category 1 Credit(s)&trade;</i>';
$img_url = $cert_img_url ? $cert_img_url : base_path().path_to_theme().'/img/';
$date = strftime("%B %d, %Y", strtotime($certificate['dateearned']));
$degree = ($certificate['profession'] == 'PHY') ? ", MD" : ""; 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language; ?>" xml:lang="<?php print $language; ?>">

<head>
  <title><?php print $head_title; ?></title>
</head>
<body>
<div style="font-size:11.0pt;font-family:Times New Roman, Times, serif;color: #000000;width: 600px;margin: auto;clear: both;">
<table width="600px">    
          <tr>
            <td colspan="3" style="padding-top:10px;text-align:left">
            <?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?><?php print $degree ?><br/>
            <?php print $certificate['address'] ?>
						</td>
          </tr>
          <tr>
            <td colspan="3" style="padding-top:50px;text-align:center">The Annenberg Center for Health Sciences at Eisenhower <br />
            is accredited by the Accreditation Council for Continuing Medical Education <br />
            to provide continuing medical education for physicians
            </td>
          </tr>  
          <tr>
            <td colspan="3" style="padding-top:15px;text-align:center">The Annenberg Center for Health Sciences at Eisenhower certifies that</td>
          </tr> 
          <tr>
            <td colspan="3" style="padding-top:5px;text-align:center;font-weight:bold"><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?><?php print $degree ?></td>
          </tr>          
          <tr>
            <td colspan="3" style="padding-top:5px;text-align:center;">has participated in the <?php print $certificate['@anbrgtype'] ?> activity titled</td>
          </tr>          
          <tr>
            <td colspan="3" style="padding-top:15px;text-align:center;font-weight:bold;"><?php print $certificate['course_title'] ?></td>
          </tr>          
          <tr>
            <td colspan="3" style="padding-top:15px;text-align:center;"><?php print $certificate['@anbrgadr']?> on <?php print $date?></td>
          </tr>
          <tr>
            <td colspan="3" style="padding-top:10px;text-align:center;">and is awarded <?php print $certificate['creditearned'].$pratext?>.</td>
          </tr>
          <tr>
            <td colspan="3" style="padding-top:20px;text-align:center;">This activity has been planned and implemented in accordance with the Essential Areas and policies of the Accreditation Council for Continuing Medical Education through
								the joint providership of the Annenberg Center for Health Sciences at Eisenhower and Impact Education, LLC.</td>
          </tr> 
          <tr>
            <td colspan="3" style="padding-top:0px;padding-bottom:40px;"> 
            </td>
          </tr>       
          <tr>
            <td align="left" style="width:30%;margin-bottom:0px;text-align:left;border-bottom:1px solid black;">
            	<img src="<?php print $img_url?>anbrg_signature.png"></img>
            </td>
            <td style="width:20%">&nbsp;</td>
            <td style="margin-bottom:0px;text-align:left;border-bottom:1px solid black">&nbsp;</td>
          </tr>              
          <tr>
            <td align="left" style="width:30%;text-align:left;">
              Charles E. Willis, MBA<br />
              Director, Continuing Education <br />  
            </td>
            <td style="width:20%">&nbsp;</td>
            <td style="padding-bottom:10px;margin-bottom:0px;text-align:left;">Participants Signature</td>
          </tr>       
</table>
</div>
<script>print();</script>
</body>
</html>