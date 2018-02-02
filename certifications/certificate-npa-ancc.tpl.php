<?php
$img_url = $cert_img_url ? $cert_img_url : base_path().path_to_theme().'/img/';
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
    <td align="center">
              <img src="<?php print $img_url?>npa_logo.png"></img><br/>
              <strong>Certificate of Successful Completion of<br/>
              An Approved Continuing Education Activity</strong>
    </td>
  </tr>
  <tr>
    <td align="center" style="font-size: 18px; border-bottom: 1px solid #000; padding-top: 20px;">
      <?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?>
    </td>
  </tr>
  <tr>
    <td align="center" style="padding-top: 20px;">
      Has Successfully Completed<br/>
    </td>
  </tr>
  <tr>
    <td align="center" style="font-size: 18px; padding-top: 20px;">
      <?php print $certificate['course_title'] ?>
    </td>
  </tr>
  <tr>
    <td align="center">
      URL: <?php print $certificate['url'] ?>
    </td>
  </tr>
  <tr>
    <td align="center" style="padding-top: 21px;">
<strong><?php print $certificate['@provider']; ?></strong><br/>
and<br/>
<strong>Nurse Practitioner Alternatives (NPA)</strong><br/>
<div style="font-size:10px">
PO Box 540<br/>
Ellicott City, MD 21041<br/>
866-901-6267; Fax 410-779-7915<br/>
</div>
    </td>
  </tr>
  <tr>
    <td align="center" style="padding-top: 20px; font-size: 11px">
              <img width="200" style="border-bottom:1px solid #000;" src="<?php print $img_url?>npa_signature.png"></img><br/>
<strong>Laurie Scudder, DNP, MSN</strong><br/>
President, NPA, Inc.<br/>
    </td>
  </tr>
  <tr>
    <td align="center" style="padding-top: 20px; font-size: 11px">
This Educational Activity is jointly provided by the <?php print $certificate['@provider']; ?><br/>
and Nurse Practitioner Alternatives<br/>
Nurse Practitioner Alternatives is accredited as a provider of continuing nursing education by the American Nurses <br/>
Credentialing Center’s (ANCC) Commission on Accreditation.<br/>
<br/>
This activity is awarded <?php printf("%.1f", $certificate['creditearned']) ?> contact hour of continuing nursing education for RNs and APNs;  (<?php printf("%.1f", $certificate['pharmacology']) ?> in pharmacology)<br/>
<br/>
<?php
// Logic for $certificate['@number'] token
// Do not show the value of $certificate['@number'] if there is no value for it set by user in
// "Certificate Tokens:" field.
$certificate['@number'] = trim($certificate['@number']);
$a = strlen(str_replace("@number", "", $certificate['@number']));
$b = strlen($certificate['@number']);
?>
      <table width="600px" style="border: none">
        <tr>
            <td width="300px" style="width: 300px;"> <?php print (  $a == $b ) ? "Code: ".$certificate['@number'] : ""; ?></td>
            <td width="300px" style="width: 300px;">Date: <?php print $certificate['dateearned'] ?></td>
        </tr>
      </table>


    </td>
  </tr>


</table>
</div>







<script>print();</script>
</body>
</html>
