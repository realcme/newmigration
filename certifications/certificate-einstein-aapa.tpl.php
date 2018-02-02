<?php
if ($certificate['creditearned'] > 1) {
  $pratext = ' <i>AMA PRA Category 1 Credits&trade;</i>';
} else {
  $pratext = ' <i>AMA PRA Category 1 Credit&trade;</i>';
}
$img_url = $cert_img_url ? $cert_img_url : base_path().path_to_theme().'/img/';
$degree = $certificate['degree'];

if ($degree) $degree = ', '.$degree;
$issue_date = strftime("%B %d, %Y", strtotime($certificate['dateearned']));


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language; ?>" xml:lang="<?php print $language; ?>">

<head>
  <title><?php print $head_title; ?></title>
</head>
<body>
<div style="font-size:12.0pt;font-family:'Times New Roman', Times, serif;color: #000000;clear: both;margin: 0px;padding: 0px;">
  <div style="position: absolute; top: 0px; left:0px; padding: 10px">
<table style="border: 5px solid #333399; width:580px; height:347px; padding:10px;">
<tr>
<td align="center">
        <img src="<?php print $img_url; ?>einstein_logo.png"></img>
        <p style="margin-top:-110px; margin-bottom:60px; text-align:center">
        <?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?><?php print $degree?>
        <br /><br />
        </p>
			<?php print $certificate['course_title'] ?>
			<br />
			at www.realcme.com
			<br />
			on <?php print $issue_date ?>.  This activity was designated for
			<br />
			<?php print $certificate['creditearned'].$pratext ?>.
			<br />
			AAPA accepts certificates of participation for educational activities certified for AMA PRA Category <?php print $certificate['creditearned']?> Credit&trade; 
			from organizations accredited by ACCME. Physician assistants may receive a maximum of <?php print $certificate['aapa']?> hours of Category I credit for 
			completing this program.
			<br />
       <div style="width:200px; float:right; padding-right: 30px">
                        <img src="<?php print $img_url; ?>einstein_signature.gif"></img>
                        <br />
                        Victor B. Hatcher, Ph.D.,
                        <br />
                        Associate Dean
        </div>
</td>
</tr>
</table>
        <div style="color:#333399;font-size:8pt;padding-left:30px">Visit our web page at www.mecme.org</div>
        </div>
</div>
<script>print();</script>
</body>
</html>