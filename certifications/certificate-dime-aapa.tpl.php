<?php
$pratext = ' <i>AMA PRA Category 1 Credit(s)&trade;</i>';
$img_url = $cert_img_url ? $cert_img_url : base_path().path_to_theme().'/img/';
$date = strftime("%A, %B %d, %Y", strtotime($certificate['dateearned']));
$date2 = strftime("%m/%d/%y", strtotime($certificate['dateearned']));
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language; ?>" xml:lang="<?php print $language; ?>">

<head>
  <title><?php print $head_title; ?></title>
</head>
<body>
<div style="width: 600px;height: 146px;margin: auto;">
  <img src="<?php print $img_url?>dime_logo.png" style="width: 600px; height: 146px;"></img>
</div>
<div style="font-size:12.0pt;font-family:Arial, Times, serif;color: #000000;width: 600px;margin: auto;clear: both;">
<table width="600px">
          <tr>
            <td align="center" colspan="2" style="padding-top:5px">This is to certify that</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><span style='font-size:14.0pt; font-weight: bold'><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></span></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:5px">has attended and successfully completed the educational activity</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><span style='font-weight: bold;'><?php print $certificate['course_title'] ?></span></td>
          </tr>         
          <tr>
            <td align="center" colspan="2" style="padding-top:20px">for <?php print $certificate['creditearned']?> hours of AAPA Category 1 CME Credit</td>
          </tr>         
          <tr>
            <td align="center" colspan="2" style="padding-top:10px">on <?php print $date ?></td>
          </tr>                 
          <tr>
            <td align="center" colspan="2" style="padding-top:15px">This program has been reviewed and is approved for a maximum of <?php print $certificate['aapa']?>  hours of AAPA Category 1 CME credit by the Physician Assistant Review Panel. 
            Approval is valid for 1 year(s) from the issue date of <?php print $certificate['begin_date']?>. 
            Participants may submit the self-assessment at any time during that period. This program was planned in accordance with AAPA’s CME Standards for Enduring Material Programs and for Commercial Support of Enduring Material Programs.</td>
          </tr>              
          <tr>
            <td align="center" colspan="2" style="padding-top:0px;padding-bottom:10px">&nbsp;</td>
          </tr>         
          <tr>
            <td align="left" valign="bottom" colspan="2" style="padding-left:20px;padding-bottom:20px;margin-bottom:0px">
            <img src="<?php print $img_url?>dime_signature.jpg"></img><br />
            Meredith Herzog  (<?php print $date2 ?>)<br />
            Senior Manager, Certification Services<br />
            DIME<br />            
            </td>
          </tr>
          <tr>
            <td align="left" colspan="2">
              <div style="position:relative;bottom:2px">
                <b><span style='font-size:10.0pt;'>Certificate ID: <?php print $certificate['refid'] ?></span></b><br />
               </div>
            </td>
          </tr>          
</table>
</div>
<script>print();</script>
</body>
</html>