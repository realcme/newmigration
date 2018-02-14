<?php
$pratext = ' <i>AMA PRA Category 1 Credit(s)&trade;</i>';
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

<body>
<div style="font-size:12.0pt;font-family:Times New Roman, Times, serif;color: #000000;clear: both;width: 620px;margin: auto;padding: 0px;">
<table width="600px" >
  <tr>
    <td align="left">          
      <b><?php print $certificate['dateearned'] ?></b>
      <br /><br />
      <?php print $certificate['fullname'] ?><br />
      <?php print $certificate['address'] ?>
      <br/>
      <br/>
      To Whom It May Concern:
      <br/>
      <br/>
      Imedex, LLC certifies that <?php print $certificate['fullname'] ?> has participated in the educational activity titled:
      <br/>
      <br/>

    </td>
  </tr>
  <tr>
    <td align="center">          
      <b><?php print $certificate['course_title'] ?></b><br/>
      <?php print $certificate['begin_date'] ?> - <?php print $certificate['expiration_date'] ?>
      <br/><br/>
    </td>
  </tr>
  <tr>
    <td align="left">          
      and is designated for <?php print $certificate['amapracat1'].$pratext ?><br/><br/>
    </td>
  </tr>
  <tr>
    <td align="center">          
      
      <img src = "<?php print $img_url ?>imx_signature.jpg" width="146px" height="52px" ></img><br/>
      ___________________________________________<br />
      Chritopher Bolwell<br/>
      Senior Director, Medical Affairs<br/>
      Imedex, LLC
      <br />
    </td>
  </tr>
  
	<tr>
		<td align="center">
    <div style="float: left"><img src="<?php print $img_url ?>imx_image003.gif" width="119px" height="84px" ></img></div>
    Imedex <sup>&reg;</sup>, LLC is accredited by the Accredition Council for Continuing Medical Education to provide continuing medical education for physicians.<br /><br />
      If you have questions or concerns, please contact Imedex's CME office<br />
      (770)751-7332 or meetings@imedex.com</td>
   </tr>
</table>
</div>
<script>print();</script>	
</body>
</html>