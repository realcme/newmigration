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
<div style="font-size:12.0pt;font-family:Arial, Times, serif;color: #000000;clear: both;margin: auto;width: 600px;padding: 0px;">
    <table style="width: 100%;">
            <tr>
              <td align="left" style="vertical-align: top;"><img src="<?php print $img_url?>jhuasim_logo.gif" style="width: 172px; height: 189px;"></img></td>
              <td align="center" style="vertical-align: top;"><span style='font-size:16.0pt;font-weight:bold;'>CERTIFICATE OF ATTENDANCE</span></td>
            </tr>
            <tr>
              <td align="left" colspan="2" style="padding-top:0px;vertical-align:top;font-size:10.0pt;">
              Office of Continuing Medical Education<br/>
              Johns Hopkins University School of Medicine<br/>
              Turner 20, 720 Rutland Avenue<br/>
              Baltimore, Maryland 21205-2195
              </td>
            </tr>          
            
            <tr>
              <td align="center" colspan="2" style="padding-top:10px"><span style='font-size:14.0pt;font-weight:bold;'>The Johns Hopkins University School of Medicine</span></td>
            </tr>    
            <tr>
              <td align="center" colspan="2" style="padding-top:5px">certifies that</td>
            </tr>          
            <tr>
              <td align="center" colspan="2" style="padding-top:15px"><span style='font-size:14.0pt; font-weight: bold;'><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></span></td>
            </tr>          
            <tr>
              <td align="left" colspan="2" style="padding-top:10px">has participated in the educational activity titled
              <span style='font-weight:bold;'><?php print $certificate['course_title'] ?></span>
              on <span style='font-weight:bold;'><?php print $certificate['dateearned'] ?></span>
              and is awarded <?php print $certificate['creditearned'].$pratext ?>
              </td>
            </tr>          
            <tr>
              <td align="left" colspan="2" style="padding-top:20px;font-size:10.0pt;">
                <ul>
                  <li>The Johns Hopkins University School of Medicine is accredited by the Accreditation Council for Continuing Medical Education to provide continuing medical education for physicians.</li>
                </ul>
              </td>
            </tr>
            <tr>
              <td align="left" colspan="2" style="padding-top:20px;padding-bottom:0px;font-size:10.0pt;">
Todd Dorman, M.D., FCCM<br/>
Associate Dean and Director for<br/>
Continuing Medical Education
              </td>
            </tr>         
    </table>
</div>
<script>print();</script>
</body>
</html>