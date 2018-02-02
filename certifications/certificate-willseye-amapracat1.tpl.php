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
$date_earned = strftime("%B %d, %Y", strtotime($certificate['dateearned']));
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
            <td align="center" colspan="2" style="padding-top:5px"><img src="<?php print $img_url?>willseye_logo.jpg"></img><br/>Philadelphia, PA</td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:20px;">Wills Eye Hospital certifies the physician named below has participated in the following activity 
            and is awarded the indicated number of <?php print $pratext?>.
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:10px;font-size:12pt;font-weight:bold"><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?><?php print $degree ?></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:5px;">Has participated in</td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:20px;font-size:12pt;font-weight:bold"><?php print $certificate['course_title'] ?></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:20px;font-size:12pt;">on <span style="font-weight:bold"><?php print $date_earned ?></span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px;">and has been awarded <?php print $certificate['creditearned'].$pratext ?> </td>
          </tr>        
          <tr>
            <td align="center" colspan="2" style="padding-top:20px;">The Wills Eye Hospital is accredited by the ACCME to provide <br/> continuing medical education for physicians.</td>
          </tr>        
          <tr>
            <td align="center" colspan="2" style="padding-top:20px;">The Wills Eye Hospital designates this educational activity for a <br/> maximum of <?php print $certificate['amapracat1'].$pratext ?> </td>
          </tr>   
          <tr>
              <td align="center" colspan="2" style="padding-top:15px;font-size:10pt">
              <img src="<?php print $img_url?>willseye_signature.png"></img><br/>
              Ralph C. Eagle, Jr., MD, Director <br/>
              Department of Continuing Medical Education<br/>
              Wills Eye Hospital<br/>
              <br/>
            </td>
          </tr>  
</table>
</div>
<script>print();</script>
</body>
</html>