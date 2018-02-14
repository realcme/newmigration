<?php
$pratext = ' <i>AMA PRA Category 1 Credit(s)&trade;</i>';
$img_url = $cert_img_url ? $cert_img_url : base_path().path_to_theme().'/img/';

$plural = ($certificate['ancc'] != 1) ? "s" : '';
$ceu = $certificate['ancc'] / 10.0;
$florida = '';
if (strtoupper($certificate['state']) == 'FL') {
  $florida = "AKH Inc. is approved as a provider of nursing continuing education credit through the Florida BON 50-2560.<br/>";
}
if ($certificate['pharmacology'] > 0) {
  $s = ($certificate['pharmacology'] > 1) ? 's' : '';
  $ph = " which includes ".$certificate['pharmacology']." contact hour(s) of pharmacology.<br/>Program ID #".$certificate['@akhid'];
} else {
  $ph = "";
}
$issue_date = strftime("%m/%d/%Y", strtotime($certificate['dateearned']));
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language; ?>" xml:lang="<?php print $language; ?>">

<head>
  <title><?php print $head_title; ?></title>
</head>
<body>
<div style="font-size:11.0pt;font-family:Arial, Times, serif;width: 600px;margin: auto;">
<table width="600px" style="border: none">
    <tr>
      <td colspan="2" align="center" style="padding-top:12px;font-weight: bold;color:#000080">Statement of Continuing Education Credit</td>
    </tr>
    <tr>
      <td colspan="2" align="center" style="padding-top:4px;border-bottom:1px solid #000080">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2" align="center" style="padding-top:20px;font-weight: bold;"><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></td>
    </tr>
    <tr>
      <td colspan="2" align="center" style="padding-top:12px;">License #: <?php print $certificate['state_license_number']?></td>
    </tr>
    <tr>
      <td colspan="2" align="center" style="padding-top:12px;">AKH Inc. certifies that the individual listed has participated in the enduring activity titled:</td>
    </tr>
    <tr>
      <td colspan="2" align="center" style="padding-top:12px;font-weight:bold"><?php print $certificate['course_title'] ?></td>
    </tr>
    <tr>
      <td colspan="2" align="center" style="padding-top:12px;">on <?php print $issue_date ?></td>
    </tr>
    <tr>
      <td colspan="2" align="center" style="padding-top:12px;">Enduring Independent Study Activity</td>
    </tr>
    <tr>
      <td colspan="2" align="left" style="padding-top:20px;">
<!--         <div style="float: left; vertical-align: top; padding-right:5px"><img src="<?php print $img_url?>akh_ancc.jpg"></img></div>-->
         AKH, Inc., Advancing Knowledge in Healthcare is accredited as a provider of continuing nursing education by the American Nurses Credentialing Center's Commission on Accreditation.<br />
         <?php print $florida?>
         This activity is awarded <?php print $certificate['ancc']?>&nbsp;Contact Hour<?php print $plural ?>.   
         <div style="clear: both"></div>
      </td>
    </tr>
    <tr>
      <td colspan="2" align="left" style="padding-top:12px;"><strong>Awarded credit: </strong> <?php print $certificate['creditearned'] ?> Contact Hour<?php print $plural ?></td>
    </tr>
    <tr>
      <td colspan="2" align="left" style="padding-top:20px;">Please keep this original statement of continuing education for your records for 4 years.</td>
    </tr>

    <tr>
      <td colspan="2" align="left" style="padding-top:20px;">&nbsp;</td>
    </tr>
    
    <tr>                  
      <td style="width: 50%;vertical-align: top; text-align: left;padding-left: 5px; font-size:10pt">
        <img src="<?php print $img_url?>akh_signature.png"></img><br />  
        Steve Eckert <br />
        President and CEO<br />
        <br />
        Issue Date: <?php print $issue_date ?> <br />
        Unique Certificate ID: <?php print $certificate['refid'] ?><br />
        AKH Identifier: <?php print $certificate['@akhid']?> <br />
      </td>
      <td style="width: 50%;vertical-align: top;text-align: center;padding-bottom: 5px;padding-left: 10px; font-size:10pt">
        <img src="<?php print $img_url?>akh_logo.png" style="width:150px;"></img><br />  
        P.O. Box 24104<br />
        Jacksonville, FL 32241-4104<br />
        904-683-8843<br />
        Fax 1-866-352-6285<br />
      </td>
    </tr>
</table>
</div>
<script>print();</script>
</body>
</html>