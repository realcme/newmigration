<?php
$pratext = ' <i>AMA PRA Category 1 Credit(s)&trade;</i>';
$img_url = $cert_img_url ? $cert_img_url : base_path().path_to_theme().'/img/';
$ceu = $certificate['acpe'] / 10.0;
$date = strftime("%m/%d/%Y", strtotime($certificate['dateearned']));
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language; ?>" xml:lang="<?php print $language; ?>">

<head>
  <title><?php print $head_title; ?></title>
</head>
<body>
<div style="font-size:11.0pt;font-family:Arial, Times, serif;color: #000000;width: 626px; margin:auto;clear: both;">
<table width="600px">
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><img src="<?php print $img_url?>shu_logo.png"></img></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="font-size:14.0pt;font-weight: bold;padding-top:25px">Certificate
            </td>
          </tr>     
          <tr>
            <td align="center" colspan="2" style="padding-top:30px;font-weight: bold;"><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></td>
          </tr>    
          <tr>
            <td align="center" colspan="2" style="padding-top:10px">has completed</td>
          </tr>  
          <tr>
            <td align="center" colspan="2" style="padding-top:20px;font-weight: bold;"><?php print $certificate['course_title']?></td>
          </tr>  
          <tr>
            <td align="center" colspan="2" style="padding-top:30px;font-size:12pt;font-weight:bold;font-style:italic">This certificate does not constitute a statement of 
            <br/> continuing pharmacy education credit</td>
          </tr>  
          <tr>
            <td align="left" colspan="2" style="padding-top:40px"><?php print $date?><br/>
            <span style="text-decoration:overline">Date Completed</span>
            </td>
          </tr>
</table>
</div>
<script>print();</script>
</body>
</html>