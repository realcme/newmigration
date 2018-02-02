<?php
$pratext = ' <i>AMA PRA Category 1 Credit(s)&trade;</i>';
$img_url = $cert_img_url ? $cert_img_url : base_path().path_to_theme().'/img/';
$credit = $certificate['creditearned'];
if (strpos($credit, '.') === false) $credit .= '.00';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language; ?>" xml:lang="<?php print $language; ?>">

<head>
  <title><?php print $head_title; ?></title>
</head>
<body>
<div style="font-size:12.0pt;font-family:Times New Roman, Times, serif;color: #000000;width: 626px;clear: both;">
<table width="600px">

          
          <tr align="center">
            <td align="center" colspan="2" style="padding-top:25px; font-size: 12pt; font-weight:bold; border-bottom:2px solid black; color:darkblue;">Statement of Continuing Education Credit</td>
          </tr>      
          <tr align="center">
            <td align="center" colspan="2" style="padding-top:10px; font-size: 10pt; font-weight:bold;"><?php print $certificate['firstname'] ?>
             <?php print $certificate['lastname'] ?></td>
          </tr>          
          <tr align="center">
            <td align="center" colspan="2" style="padding-top:10px; font-size: 10pt;">
            is awarded <?php print $credit ?> Contact Hours for participating in the enduring activity titled:
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:10px; font-size: 10pt; font-weight:bold;"><?php print $certificate['course_title'] ?></td>
          </tr>   
          <tr>
            <td align="center" colspan="2" style="padding-top:10px; font-size: 10pt;">on <?php print date('Y/m/j',strtotime($certificate['dateearned']))?></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px; font-size: 10pt;">Enduring Independent Study Activity</td>
          </tr>
          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px; font-size: 10pt;">
            	AKH, Inc., Advancing Knowledge in Healthcare is accredited as a provider of continuing nursing education by the 
            	American Nurses Credentialing Center's Commission on Accreditation.
            </td>
          </tr>          
          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px; font-size: 10pt;">
            	This activity is awarded <?php print $certificate['ancc'] ?> Contact Hour.
			</td>
          </tr>    
          
          <tr>
            <td align="center" colspan="2" style="padding-top:30px; font-size: 10pt;">
            	Please keep this original statement of continuing education for your records for 4 years.
			</td>
          </tr>  

          <tr>
            <td align="left" style="padding-top:5px; font-size: 10pt; border:2px dotted black;">
            <span style="margin-left: 5px;">
                <img style="max-width:80px;" src="<?php print $img_url?>sccm_ancc_sig_v2.png" /> <br />
                </span>
                <span style="margin-left: 5px;">Steve Eckert </span><br />
				<span style="margin-left: 5px;">President and CEO </span><br />
				<span style="margin-left: 5px;">Issue Date:  <?php print date('Y/m/j',strtotime($certificate['dateearned']))?> </span><br />
				<span style="margin-left: 5px;">Unique Certificate ID: {$_submission_id} </span><br />
				<span style="margin-left: 5px;">AKH Identifier:  21713 </span><br />
				
            </td>
            <td align="center" style="padding-top:5px; font-size: 10pt; width:50%; border:2px dotted black;">
            	<img style="max-width:60px;" src="<?php print $img_url?>sccm_akh_logo.png"/> <br />
            	P.O. Box 24104 <br />
				Jacksonville, FL 32241-4104 <br />
				904-683-8843 <br />
				Fax 866-352-6285 <br />
            </td>
          </tr>      
     
</table>
</div>
<script>print();</script>
</body>
</html>