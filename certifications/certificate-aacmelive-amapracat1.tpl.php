<?PHP
$pratext = ' <i>AMA PRA Category 1 Credit(s)&trade;</i>';
$img_url = $cert_img_url ? $cert_img_url : base_path().path_to_theme().'/img/';
$date = strftime("%B %d, %Y", strtotime($certificate['dateearned']));
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
      <td align="center" colspan="2">
        <img src="<?PHP print $img_url . 'aacme_logo.png'; ?>"></img>
      </td>
    </tr>
    <tr>
      <td colspan="2" align="center" style="padding-top:30px">Certifies that</td>
    </tr>
    <tr>
      <td colspan="2" align="center" style="padding-top:10px;font-weight:bold; font-size: 20px;"><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></td>
    </tr>
    <tr>
      <td colspan="2" align="center" style="padding-top:10px">has participated in the live activity titled</td>
    </tr>
    <tr>
      <td colspan="2" align="center" style="padding-top:10px;font-weight:bold; font-size: 18px;"><?php print $certificate['course_title'] ?></td>
    </tr>
    <tr>
      <td colspan="2" align="center" style="padding-top:50px;font-weight:bold;">
<span style="border-top: 1px solid #000;">Please provide date of activity attended.</span>
</td>
    </tr>
    <tr>
      <td colspan="2" align="center" style="padding-top:50px;font-weight:bold;">
<span style="border-top: 1px solid #000;">Please provide City/State of activity attended. </span>
</td>
    </tr>
    <tr>
      <td colspan="2" align="center" style="padding-top:40px;font-weight:bold;">and is awarded a maximum of <?php printf("%4.2f", $certificate['amapracat1']) ?> <?PHP print $pratext?>.</td>
    </tr>
    <tr>
      <td colspan="2" align="center" style="padding-top:20px;font-weight:bold;">Physicians should claim only the credit commensurate with the extent of their participation in the activity.</td>
    </tr>
    <tr>
      <td style="padding-top:40px;">NUMBER OF CREDIT(S) CLAIMED: <?php printf("%4.2f", $certificate['creditearned']) ?></td>
      <td></td>
    </tr>
    <tr>
      <td colspan="2" align="center" style="padding-top:40px;font-size:10px;">2275 West County Line Road │ Suite 6-329 │ Jackson, NJ 08527 │ Tel 609-921-6622 │ Fax 609-921-6428 │ CEServices@academycme.org</td>
    </tr>

</table>
</div>
<script>print();</script>
</body>
</html>
