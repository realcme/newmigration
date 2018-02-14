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
<div style="font-size:11.0pt;font-family:Times New Roman, Times, serif;color: #000000;width: 626px;clear: both;margin:auto">
<table width="620px" style="border: none;padding:5px">
          <tr>
            <td align="left" valign="top" style="padding-top:5px"><img src="<?php print $img_url?>mli_logo2.jpg"></img></td>
            <td align="right" valign="top" style="padding-top:5px;color:#B8B8B8;font-size:10pt">203 Main Street, Suite 249<br/>
              Flemington , NJ 08822<br/>
             (609) 333-1693 (t)<br/>
             (609) 333-1694 (f)<br/>
              www.mlicme.org<br/>
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:20px;font-weight:normal;font-size:16pt">STATEMENT OF PARTICIPANT CREDIT</td>
          </tr>    
          <tr>
            <td align="center" colspan="2" style="padding-top:25px;">The Medical Learning Institute Inc certifies that <?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?>
             has participated in the educational <?php print $certificate['@ed']?> entitled</td>
          </tr>  
          <tr>
            <td align="center" colspan="2" style="padding-top:20px;font-weight:bold">"<?php print $certificate['course_title'] ?>"</td>
          </tr>    
          <tr>
            <td align="center" colspan="2" style="padding-top:25px;">on <?php print $certificate['dateearned'] ?>.</td>
          </tr>  
          <tr>
            <td align="center" colspan="2" style="padding-top:25px;">This activity was designated for <?php print $certificate['amapracat1'].$pratext ?>.</td>
          </tr>  
          <tr>
            <td align="center" colspan="2" style="padding-top:20px;">The Medical Learning Institute Inc is accredited by the Accreditation Council for Continuing Medical Education to provide continuing medical education for physicians.</td>
          </tr>  
          <tr>
              <td align="center" colspan="2" style="padding-top:25px;">
              <img src="<?php print $img_url?>mli_signature.jpg"></img><br/>
              Executive Director
            </td>
          </tr>    
          <tr>
            <td align="center" colspan="2" style="padding-top:30px;font-size:10pt">Please keep this document for your personal records</td>
          </tr>
</table>
</div>
<script>print();</script>
</body>
</html>