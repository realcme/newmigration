<?php
$pratext = ' <i>AMA PRA Category 1 Credit(s)&trade;</i>';
$img_url = $cert_img_url ? $cert_img_url : base_path().path_to_theme().'/img/';
$creditearned = $certificate['creditearned'];

if ($creditearned && !strpos($creditearned, '.')) $creditearned = $creditearned.'.0';

$date_earned = strftime("%B %d, %Y", strtotime($certificate['dateearned']));


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
<div style="font-size:11.0pt;font-family:Arial, Times New Roman, Times, sans-serif;color: #000000;clear: both;width: 620px;margin: auto;padding: 0px;">

<table width="620px" border="0" cellpadding="5" cellspacing="0">
  <tr>
    <td align="center" style="font-size: 13pt;padding-top: 30px;font-weight:bold">CERTIFICATE OF COMPLETION
    </td>
  </tr>
  <tr>
    <td align="center" style="padding-top: 10px">
      <img src="<?php print $img_url ?>nace_logo.jpg" width="424px" height="69px"></img>
    </td>
  </tr>
  <tr>
    <td align="center" style="padding-top: 10px">
      300 Northwest 70th Avenue, Suite 102 &bull; Plantation, Florida 33317<br /><a href="http://www.naceonline.com">www.naceonline.com</a>
    </td>
  </tr>
  <tr>
    <td align="center" style="padding-top: 10px">
      The National Association for Continuing Education certifies that
    </td>
  </tr>
  <tr>
    <td align="center" style="padding-top: 10px">
      <?php print $certificate['fullname'] ?>
    </td>
  </tr>
  <tr>
    <td align="center" style="padding-top: 10px">
      has participated in the enduring material titled
    </td>
  </tr>
  <tr>
    <td align="center" style="padding-top: 10px">
      <?php print $certificate['course_title'] ?>
    </td>
  </tr>
  <tr>
    <td align="center" style="padding-top: 10px">
      <?php print $date_earned ?>
    </td>
  </tr>
  <tr>
    <td align="center" style="padding-top: 10px">
      and is awarded <?php print $creditearned.$pratext ?>.
    </td>
  </tr>
  <tr>
    <td align="center" style="padding-top: 10px">
      <img width="297px" height="61px" src="<?php print $img_url ?>nace_signature.jpg"></img>
      <br />Michelle Frisch, MPH, CCMEP, Vice President<br /><br />
    </td>
  </tr>
</table>
</div>
<script>print();</script>	
</body>
</html>