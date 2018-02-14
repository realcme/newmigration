<body>
<div style="font-size:12.0pt;font-family:sans-serif, CenturyGothic, AppleGothic, 'Century Gothic' ;clear: both;margin: 0px;padding: 0px;">
 <table style="width:95%; border:5px solid;">
	 <tr>
	 <td align="center" colspan="2" style="padding-top:5px">
		   <img src="<?php print $img_url?>topec-header.jpg" style="width:160px;"></img>
	 </td>
   </tr>
   <tr>
	 <td align="center" colspan="2" style="padding-top:10px;font-size: 14pt; font-weight:bold;">
		 CERTIFICATE of PARTICIPATION
	 </td>
   </tr>          
   <tr>
	 <td align="center" colspan="2" style="padding: 20px 0 0 ; margins: 0 0 0 0;">
		 The Omnia-Prova Education Collaborative, Inc. (“TOPEC”) certifies that 
	 </td>
   </tr>          
   <tr>
	 <td align="center" colspan="2" style="color: #000; padding: 5px 0 0 0; margins: 0 0 0 0;">
	 	<div style="border-bottom: 1px solid #000;width:80%;margin: 0 auto;">
	 	<?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?><?php print $degree?>
	 	</div>
	 </td>
   </tr>
   <tr>
	 <td align="center" colspan="2" style="padding: 5px 0 0 5px; margins: 0 0 0 0;">
		 has participated in the enduring activity titled
	 </td>
   </tr>          

   <tr>
		<td align="center" colspan="2" style="color: #000; padding: 20px 0 0 0; margins: 0 0 0 0;">
	 	<div style="border-bottom: 1px solid #000;width:60%;margin: 0 auto;">
		 <?php print $certificate['course_title'] ?>
		</div>
	 </td>
   </tr>          
   <tr>
	 <td align="center" colspan="2" style="padding: 5px 0 0 20px; margins: 0 0 0 0;">on
	 	 	<span style="border-bottom: 1px solid #000;width:40%;margin: 0 auto;">
	 	<?php print $issue_date ?>
	 	</span>
	 </td>
   </tr>                 
   <tr>
	 <td align="center" colspan="2" style="padding: 20px 0 0 0; margins: 0 0 0 0;color:#000;">
	 	This activity was designated for <?php print $certificate['creditearned'].$pratext ?>
	 </td>
   </tr>      
   
     <tr>
	 <td align="center" colspan="2" style="padding: 10px 0 0 0; margins: 0 0 0 0;color:#000;font-size: 9pt;">
	 	The Omnia-Prova Education Collaborative, Inc. designates this enduring activity for a maximum of <?php print $certificate['amapracat1'].$pratext ?>.</td>
   </tr>
  <tr>
	 <td align="center" colspan="2" style="font-style: italic; padding: 10px 0 20px 0; margins: 0 0 0 0;color:#000;font-size: 9pt;">
	 	The Omnia-Prova Education Collaborative, Inc. is accredited by the Accreditation Council for Continuing Medical Education (ACCME) to provide continuing medical education for physicians.
	 </td>
   </tr>
   
   <tr>

	 <td align="right" valign="bottom" style="padding-left:20px;padding-bottom:0px;margin-bottom:0px;color:#333399;text-align:center;font-size:10pt">
	   <div style="width:100px;text-align:center; padding-bottom: 20px;">
	   <img src="<?php print $img_url?>omma-logo.jpg" style="width:100px;"></img><br/>
	   </div>
	 </td>
	 <td align="right" valign="middle" style="padding-left:20px;padding-bottom:0px;margin-bottom:0px;color:#333399;text-align:center;font-size:10pt">
	   <div style="width:100px;text-align:center; float:right; padding-bottom: 17px;">
	   <img src="<?php print $img_url?>prova-logo.jpg" style="width:100px; float:right; margin-right:15px;"></img><br/>
	   </div>
	 </td>
   </tr>          



 </table>  
</div>
<script>print();</script>
</body>
