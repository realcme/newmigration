<?php 
$pratext = ' <i>AMA PRA Category 1 Credit(s)&trade;</i>';
$img_url = $cert_img_url ? $cert_img_url : base_path().path_to_theme().'/img/';
$activity = $certificate['@act'] ? $certificate['@act'] : 'enduring material';
$issue_date = strftime("%B %d, %Y", strtotime($certificate['dateearned']));
$hours = $certificate['claimedhours'] == '' ? 0 : $certificate['claimedhours'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language; ?>" xml:lang="<?php print $language; ?>">

<head>
  <title><?php print $head_title; ?></title>
</head>

<body style="padding: 0; margin: 0;">
<div style="font-size:11.0pt;font-family: Times, serif;width: 600px;margin: auto; text-align: center;">
  <div style="width: 100%;">
    <div class="content" style="width:100%">
      <img style="position: relative;left: -22px;" src="<?php print $img_url;?>uLouiville_logo.png" />
      <h3>This document certifies that</h3>
      <span><p><?php print $certificate['firstname'];?> <?php print $certificate['lastname'];?></p></span>
      <p>On <?php print $issue_date;?> the individual listed above successfully completed the University of Louisville 
      Continuing Medical Education & Professional Development course listed below:</p>

      <p><b><?php print $certificate['course_title'];?></b><br>in Louisville, KY</p>
      <img src="<?php print $img_url;?>uLouiville_signature.png" />
      <p><b>W. Daniel Cogan, Ed.D., Assistant Dean<br>Continuing Medical Education & Professional Development</b></p>

      <p style="margin: 20px;">**************************************************</p>

      <p>The University of Louisville School of Medicine's Continuing Medical Education & Professional Development office designates this <?php print $activity;?> for a maximum of <?php print $certificate['amapracat1'];?> <i>AMA PRA Category 1 Credits™</i>. Physicians should claim only the credit commensurate with the extent of their  participation in the activity.</p>

      <p>This document certifies that the individual listed above claimed <b><?php print $certificate['creditearned']; ?> hours</b> of Category 1 credit towards the American Medical Association's (AMA)  Physician's Recognition Award.</p>

      <p>The University of Louisville School of Medicine's Continuing Medical Education & Professional Development office is accredited by the Accreditation Council for Continuing Medical Education to provide continuing medical education for physicians.</p>

      <p style="text-transform:uppercase; font-weight:600;">PLEASE PRINT AND/OR SAVE THIS DOCUMENT AND KEEP IT ON FILE FOR PURPOSES OF AUDIT, OR FILE IT WITH YOUR LICENSURE BOARD IF REQUIRED.</p>
    </div>
  </div>
</div>
</body>