<?PHP
$pratext = ' <i>AMA PRA Category 1 Credit(s)&trade;</i>';
$img_url = $cert_img_url ? $cert_img_url : base_path().path_to_theme().'/img/';
$date = strftime("%B %d, %Y", strtotime($certificate['dateearned']));
$act = $certificate['@act'] ?  $certificate['@act'] : "eductional";
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
<img height="100" src="<?PHP print $img_url . 'cpe_acc.png'; ?>"></img>

      </td>
    </tr>
    <tr>
      <td colspan="2" align="center" style="padding-top:30px">Certifies that</td>
    </tr>
    <tr>
      <td colspan="2" align="center" style="padding-top:10px;font-weight:bold; font-size: 20px;"><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></td>
    </tr>
    <tr>
      <td colspan="2" align="center" style="padding-top:10px">has participated in the <?php print $act ?> titled</td>
    </tr>
    <tr>
      <td colspan="2" align="center" style="padding-top:10px;font-weight:bold; font-size: 18px;"><?php print $certificate['course_title'] ?></td>
    </tr>
    <tr>
      <td colspan="2" align="center" style="padding-top:10px;font-weight:bold;"><?PHP print $certificate['url'] ?></td>
    </tr>
    <tr>
      <td colspan="2" align="center" style="padding-top:10px;font-weight:bold;"><?php print $date ?></td>
    </tr>
    <tr>
      <td colspan="2" align="center" style="padding-top:20px;">
Registered Dietitians (RD) and Registered Dietitian Technicians (DTR) will receive <?php printf("%4.2f", $certificate['amapracat1']) ?> Continuing Professional Education Units (CPEUs) for completion of this program.
      </td>
    </tr>
    <tr>
      <td colspan="2" align="center" style="padding-top:20px;font-weight:bold;">

<img src="<?PHP print $img_url . 'aacme_sign_cdr.png'; ?>"></img><br/>
This program is approved by the Commission of Dietetic Registration.<br/>
CDR Provider # AM311
      </td>
    </tr>
    <tr>
      <td colspan="2" align="center" style="padding-top:40px;font-size:10px;">2275 West County Line Road │ Suite 6-329 │ Jackson, NJ 08527 │ Tel 609-921-6622 │ Fax 609-921-6428 │ CEServices@academycme.org</td>
    </tr>

</table>
</div>
<script>print();</script>  
</body>
</html>
