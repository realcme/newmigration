<?php
$pratext = ' <i>AMA PRA Category 1 Credit(s)&trade;</i>';
$img_url = $cert_img_url ? $cert_img_url : base_path().path_to_theme().'/img/';
$credit = $certificate['creditearned'];
if (strpos($credit, '.') === false) $credit .= '.0';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language; ?>" xml:lang="<?php print $language; ?>">

<head>
  <title><?php print $head_title; ?></title>
</head>
<body>
<div style="font-size:12.0pt;font-family:Arial, sans-serif;color: #000000;width: 626px;clear: both;">
<table width="600px">
          <tr>
            <td align="center" colspan="2" style="padding-top:0px"><img src="<?php print $img_url?>njh_logo.png"></img></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:15px;">You successfully completed the activity</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:20px;font-weight:bold"><?php print $certificate['course_title'] ?></td>
          </tr>  
          <tr>
            <td align="center" colspan="2" style="padding-top:20px;">
            Your certificate will be emailed to you within 2 weeks following the conference.</td>
          </tr>   
          <tr>
            <td align="center" colspan="2" style="padding-top:20px;font-size:11pt">
            You will also have the opportunity to receive additional credit by participating in an online follow-up activity. You will receive an email regarding this educational activity which will provide additional credits for CME, nursing CE and CPE.</td>
          </tr> 
</table>
</div>
<script>print();</script>
</body>
</html>