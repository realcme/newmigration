<?php
$pratext = ' <i>AMA PRA Category 1 Credit(s)&trade;</i>';
$img_url = $cert_img_url ? $cert_img_url : base_path().path_to_theme().'/img/';
$amount = $certificate['amapracat1'];
if (!strpos($amount, '.')) {
  $amount = $amount.'.0';
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language; ?>" xml:lang="<?php print $language; ?>">

<head>
  <title><?php print $head_title; ?></title>
</head>
<body>
<div style="font-size:12.0pt;font-family:family:Helvetica, Times, serif;color: #000000;width: 600px;margin: auto;clear: both;">
<table width="600px" style="border: 1px solid black;">
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><img src="<?php print $img_url?>dannemiller2_logo.png" style="width: 366; height: 103;"></img></td>
          </tr>
          <tr>
            <td align="left" colspan="2" style="padding-top:15px;padding-left: 10px"><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?><br /> <?php print $certificate['address'] ?></td>
          </tr>
          <tr>
            <td align="left" colspan="2" style="padding-top:15px;padding-left: 10px">
            Dannemiller certifies that the above individual has participated in the enduring educational activity titled 
            "<?php print $certificate['course_title'] ?>" on <?php print $certificate['dateearned'] ?>. 
            This activity was designated for <?php print $amount.$pratext?>.
						</td>
          </tr>        
          <tr>
            <td align="left" colspan="2" style="padding-top:25px;padding-left: 10px">
              <img src="<?php print $img_url?>dannemiller_signature_2.jpg" width="200px" height="77px"></img><br />
              Michelle Montgomery, MA, CCMEP <br />
							Director of Continuing Education<br />
							Dannemiller <br />
            </td>
          </tr>            
          <tr>
            <td align="center" colspan="2"  style="padding-top:25px;font-size:10.0pt;" >            	
            5711 Northwest Parkway – Suite 100 – San Antonio, Texas 78249-3360 <br/> 210-641-8311 – 1-800-328-2308 – Fax 210-697-9318
            </td>
          </tr>    
</table>
</div>
<script>print();</script>
</body>
</html>