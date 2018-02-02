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
<div style="font-size:11.0pt;font-family: times new roman, times, serif;color: #000000;clear: both;margin: auto;width: 620px;padding: 0px;">
<table width="620px" style="border: 3px solid black;">
  <tr><td>
    <table style="border: 1px solid black; width:100%">
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><span style='font-weight:bold;font-size: 14pt'>CONTINUING MEDICAL EDUCATION CERTIFICATE</span></td>
          </tr>   
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><span style='font-style: italic'>The University of California, Irvine School of Medicine</span> certifies that</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px">
              <span style='font-weight:bold;text-decoration:underline'><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></span><br />
            </td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px">has participated in the educational activity titled</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding:15px"><span style='font-weight:bold;'><?php print $certificate['course_title'] ?></span></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:15px">on <?php print $certificate['dateearned'] ?> and is awarded <?php print $certificate['creditearned'].$pratext ?>        
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding:15px;">The University of California, Irvine School of Medicine designates this educational activity for a maximum of  <?php print $certificate['amapracat1'].$pratext ?>. 
            </td>
          </tr>                    
          <tr>
            <td align="center" colspan="2" style="padding:15px;"><span style='font-style: italic'>The University of California, Irvine School of Medicine is accredited by the Accreditation Council for Continuing Medical Education to provide continuing medical education for physicians.</span> 
            </td>
          </tr>                    
          <tr>
            <td align="left" style="widh:50%;padding-left:15px;padding-right:30px;padding-bottom:0px;margin-bottom:5px"><img src="<?php print $img_url?>uci_logo.png"></img>
            </td>
            <td align="right" valign="bottom" style="widh:50%;padding-left:20px;padding-right:15px;padding-bottom:10px;margin-bottom:0px">
              <img src="<?php print $img_url?>uci_signature.png"></img><br />
              <div style="">
              Gerald A. Maguire, MD<br/>
              Senior Associate Dean, <br/>
              Office of Educational Affairs<br/>
              </div>
            </td>
          </tr>          
    </table>  
  </td></tr>  
</table>
</div>
<script>print();</script>
</body>
</html>