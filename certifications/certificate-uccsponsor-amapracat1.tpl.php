<?php
$pratext = ' <i>AMA PRA Category 1 Credit(s)&trade;</i>';
$img_url = $cert_img_url ? $cert_img_url : base_path().path_to_theme().'/img/';
$ucc_release_date = $certificate['begin_date'];
$ucc_expiration_date = $certificate['expiration_date'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language; ?>" xml:lang="<?php print $language; ?>">

<head>
  <title><?php print $head_title; ?></title>
</head>
<body>
<div style="font-size:11.0pt;font-family:Arial, Times, serif;color: #000000;width: 626px;clear: both;">
<table width="600px" style="border: 1px black solid">
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><img src="<?php print $img_url?>ucc_logo.png"></img></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:5px;font-weight:bold">CERTIFICATE OF ATTENDANCE</td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:10px;font-weight:bold">The University of Cincinnati</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:5px;font-weight:bold">certifies that</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px;font-weight:bold"><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px;">has participated in the educational activity</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:5px;font-weight:bold"><?php print $certificate['course_title'] ?></td>
          </tr>            
          <tr>
            <td align="center" colspan="2" style="padding-top:5px;">on <br/><span style="font-weight:bold"><?php print $certificate['dateearned'] ?></span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px;font-size:10.0pt;">And is awarded <?php print $certificate['creditearned'].$pratext?> </td>
          </tr>   
          <tr>
            <td align="left" style="width:50%;padding:20px 10px;margin-bottom:0px;font-weight:bold;">
              University of Cincinnati <br /><br /><br />    
              Material Approval Date:	<?php print $ucc_release_date?><br /><br />  
              Material Expiration Date: <?php print $ucc_expiration_date?>	
            </td>
            <td align="left" valign="middle" style="width:50%;padding-left:20px;padding-bottom:0px;margin-bottom:0px;font-weight:bold;">
              <img src="<?php print $img_url?>ucc_signature.png"></img><br />
              <div style="position:relative;bottom:40px">
              <span style="font-style:italic">John R. Kues, Ph.D.</span><br />
              Associate Dean, <br/>
              Continuous Professional <br/>Development
              </div>
            </td>
          </tr>         
          <tr>
            <td colspan="2" style="padding-top:0px;text-align:center;font-size:9.0pt;font-weight:bold;font-style:italic">
            This activity has been planned and implemented in accordance with the accreditation requirements and policies of the Accreditation Council for Continuing Medical Education (ACCME) through the joint providership of the University of Cincinnati and RMEI Medical Education, LLC.  The University of Cincinnati is accredited by the ACCME to provide continuing medical education for physicians.
            <br /><br />
            The University of Cincinnati designates this Enduring Material Activity for a maximum of <?php print $certificate['amapracat1'].$pratext?>.  Physicians should claim only the credit commensurate with the extent of their participation in the activity.
            <br /><br />
            </td>
          </tr> 
</table>
</div>
<script>print();</script>
</body>
</html>