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
<div style="font-size:14.0pt;font-family:'Century Gothic', CenturyGothic, AppleGothic, sans-serif;color: steelblue;clear: both;margin: 0px;padding: 0px;">
 <table style="width:95%;">
	 <tr>
	 <td align="center" colspan="2" style="padding-top:25px">
		   <img src="<?php print $img_url?>horizoncme_logo.png" style="width:250px;"></img>
	 </td>
   </tr>
   <tr>
	 <td align="center" colspan="2" style="padding-top:10px;font-size: 24pt; text-transform:uppercase;">
		 CERTIFICATE OF ATTENDANCE
	 </td>
   </tr>          
   <tr>
	 <td align="center" colspan="2" style="padding: 20px 0 0 ; margins: 0 0 0 0;">
		 Horizon CME certifies that
	 </td>
   </tr>          
   <tr>
	 <td align="center" colspan="2" style="color: #000; padding: 20px 0 0 0; margins: 0 0 0 0;">
	 	<div style="border-bottom: 1px solid #000;width:80%;margin: 0 auto;">
	 	<?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?><?php print $degree?>
	 	</div>
		<span style="font-weight: 800;">
			Name of Participant
		</span>
	 </td>
   </tr>
   <tr>
	 <td align="center" colspan="2" style="padding: 20px 0 0 20px; margins: 0 0 0 0;">
		 has participated in the enduring educational activity titled
	 </td>
   </tr>          

   <tr>
		<td align="center" colspan="2" style="color: #000; padding: 20px 0 0 0; margins: 0 0 0 0;">
	 	<div style=" /*  border-bottom: 1px solid #000;  width:60%; */margin: 0 auto; font-weight:bold;">
		 <?php print $certificate['course_title'] ?>
		</div>
	 </td>
   </tr>          
         
   <tr>
	 <td align="center" colspan="2" style="padding: 20px 0 0 0; margins: 0 0 0 0;color:#000;">
	 This activity was designated for <?php print $certificate['amapracat1'].$pratext ?> <br />
	 This learner participated for <?php print $certificate['creditearned'] ?> hours.
	 </td>
   </tr>      
   <tr>
	 <td align="right" valign="bottom" style="padding-left:20px;padding-bottom:0px;margin-bottom:0px;color:#333399;text-align:center;font-size:10pt">
	   <div style="width:200px;">
	   <img src="<?php print $img_url?>horizoncme_signature.png" style="width:150px;"></img><br/>
	   <span style="text-align: left;" align="left">
		   	Brian Lee, PharmD<br/> 
		   	Medical Director<br/>
		   	Horizon CME <br />
		   	www.horizoncme.com
	   	</span>
	   </div>
	 </td>
	 <td align="right" valign="middle" style="padding-left:20px;padding-bottom:0px;margin-bottom:0px;color:#333399;text-align:center;font-size:10pt">
	   <div style="width:200px;text-align:center;">
	   <img src="<?php print $img_url?>horizoncme_logo2.png" style="width:150px;"></img><br/>
	   </div>
	 </td>
   </tr>          
  <tr>
	 <td align="center" colspan="2" style="padding: 10px 0 0 0; margins: 0 0 0 0;color:#000;font-size: 8pt;">
	 	This activity has been planned and implemented in accordance with the accreditation requirements and policies of the Accreditation Council for Continuing Medical Education (ACCME).
	 </td>
   </tr>
  <tr>
	 <td align="center" colspan="2" style="padding: 10px 0 0 0; margins: 0 0 0 0;color:#000;font-size: 8pt;">
	 	Horizon CME designates this online activity for a maximum of <?php print $certificate['amapracat1'].$pratext ?>. Physicians should claim only the credit commensurate with the extent of their participation in the activity.
	 </td>
   </tr>

 </table>  
</div>
<script>print();</script>
</body>
</html>