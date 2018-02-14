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
<div style="font-size:10.0pt;font-family: Arial, Helvetica, sans-serif;color: #000000;clear: both;margin: auto;width: 600px;padding: 0px;">
<table width="600px" style="border: none;">
  <tr>
    <td align="right" colspan="2" style="padding-left:30px;padding-top:10px;">
      <table width="100%"><tr><td align="left"><img src="<?php print $img_url?>unmc_logo.png"/></td>
      <td align="right">NEBRASKA'S HEALTH SCIENCE CENTER <br/> COLLEGE OF NURSING <br/><br/> Continuing Nursing Education </td>
      </tr></table>
    </td>
  </tr>        
  <tr>
    <td align="center" colspan="2" style="padding-top:6px;padding-bottom:20px;font-weight:bold">CREDIT CERTIFICATE</td>
  </tr>     
  <tr>
    <td align="left" valign="top" style="width:50%;"><?php print $certificate['fullname'] ?><br/><?php print $certificate['address'] ?> </td>
    <td align="right" valign="top" style="font-weight:bold;font-size:8pt;">
      <table style="border-width: 0px;border-collapse: collapse;">
      <tr><td style="border: 2px solid #cccccc;padding:2px">IMPORTANT – PLEASE READ</td></tr>
      <tr><td style="border: 2px solid #cccccc;padding:2px">This course was provided for continuing education credit as listed below. Place this original certificate with your permanent records. This certificate may be used as required by associations, licensing boards, or other agencies.</td></tr>
      </table>
    </td>
  </tr>            
  <tr>
    <td align="left" colspan="2" style="padding-top:6px;font-weight:bold"><?php print $certificate['course_title'] ?></td>
  </tr>             
  <tr>
    <td align="left" colspan="2" style="padding-top:6px;"><?php print $certificate['@anccjob'] ?><br/> Certificate Issued: <?php print $certificate['dateearned'] ?></td>
  </tr>        
  <tr>
    <td align="left" colspan="2" style="padding-left:30px;padding-top:10px;">
      <table>
        <tr><td><img src="<?php print $img_url?>unmc_logo3.png"></img></td>
        <td>The University of Nebraska Medical Center College of Nursing Continuing Nursing Education is
accredited as a provider of continuing nursing education by the American Nurses Credentialing
Center's Commission on Accreditation.<br/><br/>
This activity is provided for <?php print $certificate['ancc']?>  contact hours under ANCC criteria.<br/>
This activity is provided for <?php print $certificate['pharmacology']?> pharmacology contact hour.</td></tr>
      </table>
    </td>
  </tr>               
  <tr>
    <td align="left" colspan="2" style="padding-top:6px;font-size:8pt">Note: ANCC accreditation criteria compute 1.5 contact hours for each 90 minutes of learning activity. Self-paced learning activities are based on the estimated time
required for completion.</td>
  </tr>                
  <tr>
    <td align="left" colspan="2" style="padding-top:6px;">
    The University of Nebraska Medical Center College of Nursing Continuing Nursing Education has been awarded
Accreditation with Distinction, the highest recognition awarded by the American Nurses Credentialing Center’s
Accreditation program. This distinction is valid through 2016.</td>
  </tr>     
                 
  <tr>
    <td align="center" colspan="2" style="padding-top:6px;font-size:9pt;">
    <table><tr><td>
    CONTINUING NURSING EDUCATION <br/>
985330 Nebraska Medical Center <br/>
Omaha, NE 68198-5330 <br/>
Phone (402) 559-1994 - Fax (402) 559-4303 <br/>
    </td><td>
    <img src="<?php print $img_url?>unmc_logo2.png"></img>
    </td></tr></table>
    </td>
  </tr>     
  
</table>
</div>
<script>print();</script>
</body>
</html>