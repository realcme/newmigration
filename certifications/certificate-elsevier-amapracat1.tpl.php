<?php
$pratext = ' <i>AMA PRA Category 1 Credit(s)&trade;</i>';
$img_url = $cert_img_url ? $cert_img_url : base_path().path_to_theme().'/img/';
$dateline = $certificate['@location'] ? "held ".$certificate['dateearned']." at ".$certificate['@location'] : "on ".$certificate['dateearned'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language; ?>" xml:lang="<?php print $language; ?>">

<head>
  <title><?php print $head_title; ?></title>
</head>
<body>
<div style="font-size:12.0pt;font-family:Times New Roman, Times, serif;color: #000000;width: 626px;clear: both;margin:auto">
<table width="620px" style="border: none;padding:5px">
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><img src="<?php print $img_url?>elsevier_logo.gif"></img></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:10px;font-size:14pt;">Office of Continuing Medical Education</td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:20px;">Certifies</td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:20px;font-weight:bold;"><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:20px;">participated in the educational activity titled</td>
          </tr>                              
          <tr>
            <td align="center" colspan="2" style="padding-top:20px;"><?php print $certificate['course_title'] ?></td>
          </tr>           
          <tr>
            <td align="center" colspan="2" style="padding-top:15px;"><?php print $dateline?></td>
          </tr>  
          <tr>
            <td align="center" colspan="2" style="padding-top:15px;">and is awarded <?php print $certificate['creditearned'].$pratext?>.</td>
          </tr>
          <tr>
              <td align="center" colspan="2" style="padding-top:25px;">
              <img src="<?php print $img_url?>elsevier_signature.png"></img><br/>
              Sandy Breslow<br/>
              Director of Operations, Elsevier Office of Continuing Medical Education
            </td>
          </tr>                                
          <tr>
            <td align="center" colspan="2" style="padding-top:20px;">&nbsp;</td>
          </tr>   
          <tr>
            <td align="left" colspan="2" style="padding-top:25px;padding-right:8px;font-size:9pt">
            The Elsevier Office of CME designates this educational material for a maximum of <?php print $certificate['amapracat1'].$pratext?>. 
            Physicians should only claim credit commensurate with the extent of their participation in the activity. <br/><br/>            
            The Elsevier Office of CME is accredited by the Accreditation Council for Continuing Medical Education to provide 
            continuing medical education for physicians.
            </td>
          </tr>       
</table>
</div>
<script>print();</script>
</body>
</html>