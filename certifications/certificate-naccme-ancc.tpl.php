<?php
$pratext = ' <i>AMA PRA Category 1 Credit(s)&trade;</i>';
$img_url = $cert_img_url ? $cert_img_url : base_path().path_to_theme().'/img/';
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
            <td align="left" colspan="2" style="padding-top:20px"><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?><br/><?php print $certificate['address']?></td>
          </tr> 
          <tr>
            <td align="center" colspan="2" style="padding-top:20px">North American Center for Continuing Medical Education, LLC (NACCME) certifies that</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><strong><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></strong></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px">has participated in the educational activity titled</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><strong><?php print $certificate['course_title'] ?></strong></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><strong>on <?php print $certificate['dateearned'] ?></strong></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:25px">
              North American Center for Continuing Medical Education, LLC (NACCME) is an approved provider of continuing nursing education by the Pennsylvania State Nurses Association, an accredited approver by the American Nurses Credentialing Center’s Commission on Accreditation.<br/><br/>
              This continuing nursing education activity was approved for <?php print $certificate['ancc']?> contact hour(s).<br/><br/>
              Provider approved by the California Board of Registered Nursing, Provider Number 13255, for <?php print $certificate['ancc']?> contact hour(s).<br/><br/>
              This certificate must be retained by the licensee for a period of four years after the course ends.
            </td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:25px">&nbsp;</td>
          </tr>   
          <tr>
            <td align="center" colspan="2" valign="bottom" style="padding-left:20px;padding-bottom:10px;margin-bottom:0px">
              <img src="<?php print $img_url?>naccme_signature.png"></img><br />
              <div style="position:relative;bottom:30px">
              <b><span style='padding-bottom:0px;font-weight:bold;'>John T. Savage, MS, CCMEP</span></b><br />
              <b><span style='padding-top:0px'>Director, Medical Education</span></b><br />
              </div>
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2">
              <div style="position:relative;bottom:2px">
              <span style='font-size:10.0pt;padding-bottom:0px;font-weight:bold;'>
              300 Rike Drive, Suite A • Millstone Township, NJ 08535 
              <br />Ph 609.371.1137 - Fx 609.371.2733
              </span>
               </div>
            </td>
          </tr>          
</table>
</div>
<script>print();</script>
</body>
</html>