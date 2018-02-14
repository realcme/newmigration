<?php

if ($certificate['amapracat1'] > 1) {
    $pratext = ' <i>AMA PRA Category 1 Credits&trade;</i>';
} else {
    $pratext = ' <i>AMA PRA Category 1 Credit&trade;</i>';
}
$img_url = $cert_img_url ? $cert_img_url : base_path().path_to_theme().'/img/';
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
<body style="padding:0; margin:0;">

<!-- Containter -->
<div style="font-size:11.0pt;font-family:Arial, Times, serif;color: #000000;margin:0px; padding:0;">


    <table style="width: 100%" cellpadding="0" cellspacing="0">

        <tr><td style="padding-top: 10px;" valign="top" align="center"><img src="<?php echo $img_url;?>/hme-logo.png"></img></td></tr>

        <tr><td style="font-size:20.0pt; font-weight: bold; padding-top: 10px; padding-bottom: 20px;" align="center">CERTIFICATE OF PARTICIPATION</td></tr>

        <tr><td style="font-size:11.0pt;" align="center">Haymarket Medical Education certifies that</td></tr>

        <tr><td style="padding: 10px 0;font-size:16.0pt; font-weight: bold;" align="center"><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></td></tr>
        <tr><td style="font-size:11.0pt;" align="center">has participated in the enduring material titled</td></tr>

        <tr><td style="padding: 10px 0;margin: 10px 0;font-size:12.0pt; font-weight: bold;" align="center"><?php print $certificate['course_title'] ?></td></tr>

        <tr><td style="font-size:11.0pt;" align="center">on <?php print date("F d, Y", strtotime($certificate['dateearned'])); ?></td></tr>

        <tr><td style="font-size:11.0pt;" align="center">This activity is designated for <?php print $certificate['amapracat1'].$pratext ?></td></tr>

        <tr><td style="font-size:9.0pt;padding-top: 20px;" align="center">Haymarket Medical Education is accredited by the Accreditation Council for Continuing Medical Education (ACCME)<br />to provide continuing medical education for physicians.</td></tr>

        <tr><td  style="padding: 30px;" align="center"><img src="<?php echo $img_url;?>/hme-julie-a-tagliaareni-signature.png" style="width:200px" ></img><br /><div style="border-bottom: 1px solid black; width: 400px;"></div> </td></tr>

        <tr><td style="font-size:11.0pt;" align="center"><div style="hight:10px; width:300px;"></div><br />Julie A. Tagliareni</td></tr>

        <tr><td style="font-size:11.0pt;" align="center">Director, CME and Compliance</td></tr>

        <tr><td style="font-size:6.5pt;" align="center"><div style="margin-top: 50px;">140 East Ridgewod Ave., Suite 370S | Paramus, NJ 07652 | (201 799-4800 (Phone) | (201) 799-4820 (Fax)</div></td></tr>
        

    </table>
</div>
<script>print();</script>
</body>
</html>