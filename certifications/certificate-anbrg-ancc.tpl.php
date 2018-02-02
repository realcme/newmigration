<?php
$pratext = ' <i>ANCC Category 1 Credit(s)&trade;</i>';
$img_url = $cert_img_url ? $cert_img_url : base_path().path_to_theme().'/img/';
$date = strftime("%B %d, %Y", strtotime($certificate['dateearned']));
$degree = ($certificate['profession'] == 'PHY') ? ", MD" : ""; 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
  <title><?php print $head_title;?></title>

<style type="text/css">
   /*<![CDATA[*/
   div.c12 {font-size:11.0pt;font-family:Times New Roman, Times, serif;color: #000000;width: 100%;margin: auto;clear: both;}
	    div {margin: 0 auto;}
            td.c11 {margin-bottom:0px;text-align:left;}
	    td.c10 {width:30%;text-align:left;}
	    td.c9 {margin-bottom:0px;text-align:left;border-bottom:1px solid black}
	    td.c8 {width:20%}
	    td.c7 {width:30%;margin-bottom:0px;text-align:left;border-bottom:1px solid black;}
	    td.c6 {padding-top:10px;text-align:center;}
	    td.c5 {padding-top:15px;text-align:center;}
	    td.c4 {padding-top:15px;text-align:center;font-weight:bold;}
	    td.c3 {padding-top:5px;text-align:center;}
	    td.c2 {padding-top:5px;text-align:center;font-weight:bold}
	    td.c1 {padding-top:10px;text-align:left}
	    img {float:left;}
	    /*]]>*/
</style>
</head>
<body>
<div class="c12">
<table width="600px">
<tr>
<td colspan="3" class="c1">
  <?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?><?php print $degree ?><br/>
  <?php print $certificate['address'] ?>
</td>
</tr>
<tr>
<td colspan="3" class="c2"><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></td>
</tr>
<tr>
<td colspan="3" class="c3">has participated in the educational activity titled</td>
</tr>
<tr>
<td colspan="3" class="c4"><?php print $certificate['course_title'];?> </td>
</tr>
<tr>
<td colspan="3" class="c5">on <?php print $date; ?></td>
</tr>
<tr>
<td></td>
</tr>
<tr>
<td colspan="3" class="c6">Annenberg Center for Health Sciences at Eisenhower is accredited as a provider of<br />
continuing nursing education by the American Nurses Credentialing Center's<br />
Commission of Accreditation.<br />
<?php print $certificate['ancc'];?> contact hour(s) may be earned for successful completion of this activity.<br />
<?php if ($certificate['pharmacology'] > 0) { ?>
            For the advanced practice nurse, this activity has <?php print $certificate['pharmacology']?> contact hours of pharmacotherapy content.  <br /><br />
<?php } ?>
<br /></td>
</tr>
<tr>
<td align="left" class="c7"><img src="<?php print $img_url;?>anbrg_signature.png" alt="Charles E. Willis" /></td>
<td class="c8"> </td>

<td class="c9"> </td>
</tr>
<tr>
<td align="left" class="c10">Charles E. Willis, MBA<br />
Director, Continuing Education<br /></td>
<td class="c8"> </td>
<td class="c11">Participants Signature</td>
</tr>
</table>
</div>
<script type="text/javascript">
//<![CDATA[
print();
//]]>
</script>
</body>
</html>