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
<div style="width: 593px;height: 129px;margin: auto;">
  <img src="<?php print $img_url?>eos_logo.png" style="width: 593px; height: 129px;"></img>
</div>
<div style="font-size:12.0pt;font-family:Arial, Times, serif;color: #000000;width: 600px;margin: auto;clear: both;">
<table width="600px">
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><span style='font-weight: bold'>education | outcomes | science* </span></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:5px">certifies that</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><span style='font-size:14.0pt;font-weight:bold'><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></span></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:5px">has participated in the educational activity titled</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><span style='font-weight: bold'><?php print $certificate['course_title'] ?></span></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:20px"><span style='font-weight: bold'>Original Release Date:</span> <?php print $certificate['begin_date'] ?></td>
          </tr>     
          <tr>
            <td align="center" colspan="2" style="padding-top:20px">and is awarded <?php print $certificate['creditearned'].$pratext ?></td>
          </tr>  
          <tr>
            <td align="left" colspan="2" style="padding-top:20px"><span style='font-weight:bold'>education | outcomes | science</span> designates this educational activity for a maximum  of <?php print $certificate['amapracat1'].$pratext ?>.  
            Physicians should only claim credit commensurate with the extent of their participation in the activity.</td>
          </tr>                
          <tr>
            <td align="center" colspan="2" style="padding-top:0px;padding-bottom:10px">&nbsp;</td>
          </tr>         
          <tr>
            <td align="left" valign="bottom" style="padding-left:20px;padding-bottom:10px;margin-bottom:0px">
              <div style="float: left"><img src="<?php print $img_url?>eos_signature.png"></img></div><br />
              <div style="clear: both"></div>
              <div style="float: left">
              <span style='font-size:11.0pt;padding-bottom:0px;font-weight:bold'>Pesha Rubinstein</span><br />
              <span style='font-size:11.0pt;padding-top:0px'>Senior Director, CME</span><br />
              <span style='font-size:11.0pt;padding-top:0px'>*Formerly the Health Science Center for CME</span><br />
              </div>
            </td>
            <td><?php print $certificate['dateearned'] ?></td>
          </tr>
          <tr>
            <td align="center" colspan="2">
              <div style="position:relative;bottom:2px">
                <span style='font-size:10.0pt;font-weight:bold'>Certificate ID: <?php print $certificate['refid'] ?></span><br />
               </div>
            </td>
          </tr>          
</table>
</div>
<script>print();</script>
</body>
</html>