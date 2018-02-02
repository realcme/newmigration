<?php
$pratext = ' <i>AMA PRA Category 1 Credit(s)&trade;</i>';
$img_url = $cert_img_url ? $cert_img_url : base_path().path_to_theme().'/img/';
$ceu = $certificate['acpe'] / 10.0;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language; ?>" xml:lang="<?php print $language; ?>">

<head>
  <title><?php print $head_title; ?></title>
</head>
<body>
<div style="font-size:10.0pt;font-family:Arial, Times, serif;color: #000000;width: 626px; margin:auto;clear: both;">
<table width="600px">
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><img src="<?php print $img_url?>naccme_logo.png"></img></td>
          </tr>
          <tr>
            <td align="center" colspan="2">
              <div style="position:relative;bottom:2px;color:navy;">
              <span style='font-size:12.0pt;padding-bottom:0px;font-weight:bold;'>DOCUMENTATION OF CREDIT</span><br/>
              <span style='font-size:10.0pt;padding-bottom:0px;font-weight:bold;'>
              <br />NACCME
              <br />300 Rike Drive, Suite A, Millstone Township, New Jersey 08535 
              <br />Phone (609) 371-1137 - Fax (609) 371-2733
              <br /><br />
              </span>
               </div>
            </td>
          </tr>    
          <tr>
            <td align="center" colspan="2" style="background-color:navy;color:white">EDUCATIONAL ACTIVITY INFORMATION</td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:20px">
              <table width="100%">
                <tr style='font-size:10.0pt;padding-bottom:0px;font-weight:bold;color:navy;vertical-align:top'>
                    <td>UAN</td><td>Title</td><td>Date</td><td>CEUs</td>
                </tr>
                <tr style='font-size:10.0pt;padding-bottom:0px;font-weight:bold;background-color:navy;'>
                    <td colspan="4">&nbsp;</td>
                </tr>
                <tr style='font-size:10.0pt;padding-bottom:0px;vertical-align:top;'>
                    <td style='padding-left:3px;padding-right:3px'><?php print $certificate['@uan']?></td>
                    <td style='padding-left:3px;padding-right:3px'><?php print $certificate['course_title']?></td>
                    <td style='padding-left:3px;padding-right:3px'><?php print $certificate['dateearned']?></td>
                    <td style='padding-left:3px;padding-right:3px'><?php print $ceu?></td>
                </tr>
                </table>
            </td>
          </tr>          
          <tr>
            <td align="left" colspan="2" style="padding-top:10px"><?php print $certificate['@ed'];?></td>
          </tr>           
          <tr>
            <td align="left" colspan="2" style="padding-top:20px;"><span style="color:navy;font-weight:bold;">Participant Information:</span><br/>
              <?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?><br/><?php print $certificate['address']?></td>
          </tr>    
          <tr>
            <td align="center" colspan="2" style="padding-top:10px">&nbsp;</td>
          </tr>   
          <tr>
            <td align="right" colspan="2" valign="bottom" style="padding-left:20px;padding-bottom:10px;margin-bottom:0px;color:navy;font-weight:bold;">
              Authorized by: <br/>
              <img src="<?php print $img_url?>naccme_signature.png"></img><br />
              <div style="position:relative;bottom:30px">
              John T. Savage, MS, CCMEP<br />
              Director, Medical Education<br />
              Date Printed: <?php print $certificate['dateearned']?><br />
              </div>
            </td>
          </tr>             
          <tr>
            <td align="left" colspan="2" style="padding-top:20px;">
              <div>
                <div style="width: 520px; float: left; vertical-align: top; padding-right:5px"><span style="color:navy;font-weight:bold;">North American Center for Continuing Medical Education, LLC (NACCME) is accredited by the Accreditation Council for Pharmacy Education as a provider of continuing pharmacy education (ACPE Provider #276).</span><br/></div>
                <div style="float: right; vertical-align: top; padding-right:5px"><img src="<?php print $img_url?>acpe_logo.png"></img></div>
                </div>
            </td>
          </tr>     
</table>
</div>
<script>print();</script>
</body>
</html>