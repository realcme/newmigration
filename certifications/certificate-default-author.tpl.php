<?php
// This is the defaut text shown in the Authoring Tool when no certificate is available
$pratext = ' <i>AMA PRA Category 1 Credit(s)&trade;</i>';
$img_url = $cert_img_url ? $cert_img_url : base_path().path_to_theme().'/img/';

if ($certificate['accreditor']) { 
	$text = "There is no certificate available for the selected accreditor and the selected credit type.";
} else {
	$text = "No accreditor has been selected yet. Please select an accreditor and click SAVE before doing the preview.";	
}
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
<div style="font-size:12.0pt;font-family:Arial, Times, serif;color: #000000;clear: both;width: 600px;margin: auto;padding: 0px;">
<table width="600px" style="border: 4px solid #404040;">
	<tr><td><?php print $text ?></td></tr>
</table>
</div>
</body>
</html>