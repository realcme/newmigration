<?php
$pratext = ' <i>AMA PRA Category 1 Credit(s)&trade;</i>';
$img_url = $cert_img_url ? $cert_img_url : base_path().path_to_theme().'/img/';
$date_earned = strftime("%B %d, %Y", strtotime($certificate['dateearned']));
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language; ?>" xml:lang="<?php print $language; ?>">

<head>
  <title><?php print $head_title; ?></title>
</head>
<body>
<div style="font-size:12.0pt;font-family:Arial, Times, serif;color: #000000;clear: both;margin: auto;width: 600px;padding: 0px;">
    <table style="border: 1px solid black; width:600px">
      <tr><td>
        <table style="border: 4px solid #000080;width:100%">
          <tr>
            <td align="center" colspan="2" style="padding-top:15px;font-size:18pt;font-family:italic">Certificate of Attendance</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:25px">This certificate is awarded for attendance at the</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px;font-size:11.0pt"><?php print $certificate['course_title'] ?></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:20px"><span style="font-weight:bold;"><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding:30px">This day of <?php print $date_earned ?></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" valign="bottom" style="padding-left:30px;padding-bottom:10px;margin-bottom:0px">
               American Psychiatric Nurses Association<br/><br/>
              <img src="<?php print $img_url?>apna_logo.png"></img><br />
            </td>
          </tr>       
        </table>  
      </td></tr>  
    </table> 
</div>
<script>print();</script>
</body>
</html>