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
<div style="width: 575px;height: 70px;">
  <img src="<?php print $img_url?>arcmesa_address_logo.jpg" style="width: 575px; height: 70px;"></img>
</div>
<div style="font-size:12.0pt;font-family:Arial, Times, serif;color: #000000;width: 600;clear: both;">
<table width="600px">
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><span style='font-size:22.0pt; color: #096D61; font-weight: bold'>Certificate of Completion</span></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:5px">This certifies that</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><span style='font-size:14.0pt; font-weight: bold;'><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></span></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:5px">has participated in the CME Program</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><span style='font-weight: bold;'><?php print $certificate['course_title'] ?></span></td>
          </tr>
          <tr>
            <td align="left" colspan="2" style="padding-top:20px"><span style='font-weight: bold;'>Date completed:</span> <?php print $certificate['dateearned'] ?></td>
          </tr>  
          <tr>
            <td align="left" colspan="2" style="padding-top:10px"><span style='font-size:12.0pt;text-decoration:underline;font-weight:bold'>
              Continuing Medical Education Accreditation<br />
              ArcMesa Educators is accredited by the Accreditation Council for Continuing Medical Education to provide continuing medical education for physicians.</span></td>
          </tr>                 
          <tr>
            <td align="left" colspan="2" style="padding-top:10px"><span style='font-size:12.0pt;'>
              ArcMesa designates this educational activity for a maximum of <?php print $certificate['amapracat1'].$pratext ?>. Physicians should only claim credit commensurate with the extent of their participation in the activity.              
            </span></td>
          </tr>  
          <tr>
            <td align="center" colspan="2" style="padding-top:0px;padding-bottom:10px">&nbsp;</td>
          </tr>         
          <tr>
            <td align="left" valign="bottom" colspan="2" style="padding-left:20px;padding-bottom:0px;margin-bottom:0px">
              <div style="float: left">
              <span style='font-size:11.0pt;padding-top:0px'>Verified by:</span><br />
              <b><span style='font-size:11.0pt;padding-bottom:0px;font-weight:bold;'>Michael L. Santiago, MD</span></b><br />
              <span style='font-size:11.0pt;padding-top:0px'>Associate Medical Director</span><br />
              <span style='font-size:11.0pt;padding-top:0px'>ArcMesa Educators, LLC</span><br />
              </div>
              <div style="float: left"><img src="<?php print $img_url?>arcmesa_signature.jpg"></img></div><br />
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2">
              <div style="position:relative;bottom:2px">
                <b><span style='font-size:10.0pt;'>Certificate ID: <?php print $certificate['refid'] ?></span></b><br />
               </div>
            </td>
          </tr>          
</table>
</div>
<script>print();</script>
</body>
</html>