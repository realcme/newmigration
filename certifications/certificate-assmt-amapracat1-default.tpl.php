<?php
$pratext = ' <i>AMA PRA Category 1 Credit(s)&trade;</i>';
$img_url = $cert_img_url ? $cert_img_url : base_path().path_to_theme().'/img/';
$degree = "";
switch ($certificate['profession']) {
  case 'PHY':
    $degree = ", MD";
    break;
  case 'DO':
    $degree = ", DO";
    break;
}
$p = $certificate['creditearned'] > 1 ? 's' : '';
$earned =  $certificate['creditearned'].str_replace('(s)', $p, $pratext);
$p = $certificate['amapracat1'] > 1 ? 's' : '';
$max =  $certificate['amapracat1'].str_replace('(s)', $p, $pratext);



//background-image: -ms-linear-gradient(left, #FFFFFF 0%, #DFF1FB 100%);background-image: -moz-linear-gradient(left, #FFFFFF 0%, #DFF1FB 100%);background-image: -o-linear-gradient(left, #FFFFFF 0%, #DFF1FB 100%);background-image: -webkit-gradient(linear, left top, right top, color-stop(0, #FFFFFF), color-stop(1, #DFF1FB));background-image: -webkit-linear-gradient(left, #FFFFFF 0%, #DFF1FB 100%);background-image: linear-gradient(to right, #FFFFFF 0%, #DFF1FB 100%);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language; ?>" xml:lang="<?php print $language; ?>">

<head>
  <title><?php print $head_title; ?></title>
</head>
<body>
<div style="font-size:12.0pt;font-family:Times New Roman, Times, serif;color: #000000;width: 620px;margin: auto;clear: both;">
<table width="620px">
          <tr>
            <td align="left" colspan="2" style="padding-top:5px"><img src="<?php print $img_url?>assmt_top.png" ></img></td>
          </tr>
          <tr>
            <td align="left" colspan="2" style="padding-top:0px"><img src="<?php print $img_url?>assmt_logo.png" ></img></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:5px;font-size:18pt;"><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?><?php print $degree ?></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:5px;">has participated in the enduring material activity entitled</td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:10px;font-weight: bold;"><?php print $certificate['course_title'] ?></td>
          </tr>   
          <tr>
            <td align="center" colspan="2" style="padding-top:10px;"><?php print $certificate['dateearned'] ?></td>
          </tr>    
          <tr>
            <td align="center" colspan="2" style="padding-top:10px;">This enduring material activity was designated for  <?php print $max?>.</td>
          </tr>    
          <tr>
            <td align="center" colspan="2" style="padding-top:20px;padding-bottom:20px;font-size:10pt">
              The Atlanta School of Sleep Medicine &amp; Technology is accredited by the Accreditation Council for Continuing Medical Education to provide continuing medical education for physicians.
              <br/><br/> 
              The Atlanta School of Sleep Medicine &amp; Technology designates this enduring material activity for a maximum of <?php print $max?>.  Physicians should claim only the credit commensurate with the extent of their participation in the activity.
            </td>
          </tr>         
          <tr>
            <td align="left" style="padding:15px 20px;width: 50%" >
              <img src="<?php print $img_url?>assmt_signature1.png"></img>
              <br/>
              <div style="padding-left: 15px;text-align:left">
              Gail Reid, M.Ed.<br/>
              Program Manager      
              </div>
            </td>
            <td align="left" style="padding:15px 20px;width: 50%">
              <img src="<?php print $img_url?>assmt_signature2.png"></img>
              <br/>
              <div style="padding-left: 15px;text-align:left">
              Russel Rosenberg, Ph.D.<br/>
              Director                 
              </div>
            </td>
          </tr>   
          <tr>
            <td align="left" colspan="2" style="padding-top:5px"><img src="<?php print $img_url?>assmt_bottom.png" ></img></td>
          </tr>   
</table>
</div>
<script>print();</script>
</body>
</html>