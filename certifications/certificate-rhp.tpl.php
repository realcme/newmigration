<?php
$pratext = ' <i>AMA PRA Category 1 Credit(s)&trade;</i>';
$img_url = $cert_img_url ? $cert_img_url : base_path().path_to_theme().'/img/';
$act = $certificate['@act'] ?  $certificate['@act'] : "enduring material";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title><?php print $head_title; ?></title>

<style type="text/css">
  /*<![CDATA[*/
  div.c11 {font-size:10px;font-family:Arial, sans-serif;color: #000000;clear: both;margin: auto;width: 90%; padding: 0px;}
 td.c10 {padding-bottom:10px;margin-bottom:0px;text-align:left;}
	   td.c9 {width:30%;text-align:left; font-size: 12px;}
	   td.c8 {margin-bottom:0px;text-align:left;}
	   td.c7 {width:20%}
	   td.c6 {width:30%;margin-bottom:0px;text-align:left;}
	   td.c5 {padding-top:15px;text-align:center; padding-bottom: 14px; font-style: italic;font-size:12px;}
	   td.c4 {padding-top:15px;text-align:center; font-size:12px;}
	   td.c3 {padding-top:150px;text-align:center; font-family: 'Monotype Corsiva', Arial, sans-serif;font-size:18px; font-weight: bold; font-style:italic;}
	   td.c2 {padding-top:100px;padding-bottom:50px;text-align:center;width:33%;}
	   td.c1 {padding-top:10px;text-align:center}
	   /*]]>*/
</style>
</head>
<body>
<div class="c11">
<center>
<table style="width:600px; height:100%;">
<tr>
<td colspan="3" class="c1"><img src="http://pahvirtualclinic.healthcourse.com/cms/sites/all/themes/zen/pahvirtualclinictheme/img/pahinsight_logo.png" alt="PAHINSIGHT Virtual Clinic" /></td>
</tr>
<tr>
<td colspan="3" class="c3"><?php print $certificate['firstname'] . ' ' . $certificate['lastname'];?></td>
</tr>
<tr>
<td colspan="3" class="c4">Rearden Health Partners certificates that the individual listed has participated in the learning activity titled:</td>
</tr>
<tr>
<td colspan="3" class="c5"><strong><?php print $certificate['course_title'];?></strong></td>
</tr>
<tr>
<td align="left" class="c6"><img src="<?php print $img_url;?>rhp_signature.png" alt="Jim Metropoulos" /></td>
<td class="c7"> </td>
<td class="c8"> </td>
</tr>
<tr>
	<td align="left" class="c9">Jim Metropoulos, MD<br />
	Chief Medical Officer<br />
	Rearden Health Partners<br /></td>
	<td class="c7"> </td>
	<td class="c10"> </td>
</tr>
<tr>
<td class="c2"><img style="width: 165px;" src="http://pahvirtualclinic.com/wp-content/uploads/2014/07/Rearden_Health_Partners_Logo.png" alt="Rearden Health Partners" /></td>
<td class="c2"><img style="width: 165px;" src="http://pahvirtualclinic.com/wp-content/uploads/2014/07/UT-Logo.png" alt="United Theraputics" /></td>
<td class="c2"><img style="width: 165px;" src="http://pahvirtualclinic.com/wp-content/uploads/2014/08/Remodulin_Small-logo.jpg" alt="Remodulin" /></td>

</tr>
</table>
</center>
</div>
</body>
</html>