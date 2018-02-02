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
<div style="font-size:12.0pt;font-family:Arial, Times, serif;color: #000000;clear: both;width: 600px;margin: auto;padding: 0px;">
<table width="600px">
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><img src="<?php print $img_url?>jhubalance_logo.gif"></img></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:15px">The Johns Hopkins University School of Medicine <br/> certifies that </td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><span style='font-size:14.0pt;font-weight: bold;'><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></span>
            </td>
          </tr>          
          <tr>
            <td align="left" colspan="2" style="padding-top:10px">has participated in the educational activity titled
                  <span style='font-weight:bold;'><?php print $certificate['course_title'] ?></span> on <?php print $certificate['dateearned'] ?>
                  and is awarded <?php print $certificate['creditearned'].$pratext?>.     
            </td>
          </tr>  
          <tr>
            <td align="left" colspan="2" style="padding-right:30px;padding-top:30px;padding-bottom:10px;margin-bottom:0px;">
                Release Date: <?php print $certificate['begin_date'] ?><br />
                Expiration Date:  <?php print $certificate['expiration_date'] ?><br />
            </td>      
          </tr>
          <tr>
            <td align="left" colspan="2" style="padding-right:30px;padding-top:20px;padding-bottom:10px;margin-bottom:0px;">
                <?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?><br />
                <?php print $certificate['address'] ?><br />
            </td>      
          </tr>
</table>
</div>
<script>print();</script>
</body>
</html>