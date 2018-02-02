<?php
$pratext = ' <i>AMA PRA Category 1 Credit(s)&trade;</i>';
$img_url = $cert_img_url ? $cert_img_url : base_path().path_to_theme().'/img/';
//
/**************************************************/
/* STYLES MUST BE INLINED (GMAIL REQUIREMENT)     */
/**************************************************/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language; ?>" xml:lang="<?php print $language; ?>">

<head>
  <title><?php print $head_title; ?></title>
</head>
<body>
<div style="font-size:11.0pt;font-family:Times New Roman, Times, serif;color: #000000;clear: both;width: 620px;margin: auto;padding: 0px;">
<table cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="3" valign="bottom" align="center"  style="width: 604px;margin: 0px;padding: 0px; height: 50px;line-height: 0px">
      <img src="<?php print $img_url?>car_border_top.jpg" width="604px" height="50px"></img>
    </td>
  </tr>
  <tr>
    <td valign="top" align="left" style="width: 40px;padding: 0px 0px 0px 0px; line-height: 0px">
      <img src="<?php print $img_url?>car_border_left.jpg" width="40px" height="550px"></img>
    </td>
    <td valign="top" align="center" style="width: 522px;">
    
<table>
          <tr>
            <td align="center" colspan="2" style="padding-top:0px"><img src="<?php print $img_url?>car_logo.jpg"></img></td>
          </tr> 
          <tr>
            <td align="center" colspan="2" style="padding-top:25px;color:#31598c;">CERTIFICATE OF ATTENDANCE
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:20px">
              The American College of Cardiology Foundation (ACCF) certifies that
            </td>
          </tr>              
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><span style='font-weight: bold;'><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></span>
            </td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px;"><span style="font-style:italic;">participated in the educational activity titled</span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:5px; font-weight: bold"><?php print $certificate['course_title'] ?></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:5px;">on  <?php print $certificate['dateearned'] ?>
            </td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:25px;">
              This activity was designated for a maximum of <?php print $certificate['amapracat1'].$pratext ?>.
            </td>
          </tr>  
          <tr>
            <td align="center" colspan="2" style="padding-top:10px;font-style:italic; ">
            Karen N. Thompson, Associate Director <br />
            CME Accreditation &amp; Compliance
            </td>      
          </tr>
</table>

    </td>
    <td valign="top" align="right" style="width: 42px;padding: 0px 0px 0px 0px; line-height: 0px">
      <img src="<?php print $img_url?>car_border_right.jpg" width="42px" height="550px"></img>
    </td>
  </tr>
  <tr>
    <td colspan="3" valign="top" align="center"  style="width: 604px;margin: 0px;padding: 0px; height: 51px;line-height: 0px">
      <img src="<?php print $img_url?>car_border_bottom.jpg" width="604px" height="51px"></img>
    </td>
  </tr>
</table>
</div>
<script>print();</script>
</body>
</html>