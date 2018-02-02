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
$ed = $certificate['@ed'] ? $certificate['@ed'] : "educational activity";
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
<table style="border: 1px solid #007EA3; border-collapse: separate;" width="620px">
  <tr>
    <td>
      <table width="100%" style="border: 3px solid #007EA3; border-collapse: separate;">
        <tr>
          <td>
            <table width="100%" style="border: 1px solid #007EA3; border-collapse: separate;">
                <tr>
                  <td align="center" colspan="2" style="padding-top:10px"><img src="<?php print $img_url ?>partners_logo.jpg"></img></td>
                </tr>          
                <tr>
                  <td align="center" colspan="2" style="padding-top:25px;">Partners HealthCare System is accredited by the Accreditation Council for Continuing Medical Education (ACCME) to provide continuing medical education for physicians.
                  </td>
                </tr>
                <tr>
                  <td align="center" colspan="2" style="padding:15px 10px 10px 10px;">Partners HealthCare System certifies that</td>
                </tr>          
                <tr>
                  <td align="center" colspan="2" style="padding-top:20px;font-weight:bold"><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?><?php print $degree?></td>
                </tr>          
                <tr>
                  <td align="center" colspan="2" style="padding-top:20px">has participated in the <?php print $ed?> titled</td>
                </tr>          
                <tr>
                  <td align="center" colspan="2" style="padding-top:10px"><span style='font-weight:bold;'><?php print $certificate['course_title'] ?></span></td>
                </tr>          
                <tr>
                  <td align="center" colspan="2" style="padding-top:15px"><?php print $certificate['@location']?> on <?php print $certificate['dateearned'] ?>         
                  </td>
                </tr>
                <tr>
                  <td align="center" colspan="2" style="padding-top:15px">and is awarded <?php print $certificate['creditearned'].$pratext ?>           
                  </td>
                </tr>
                <tr>
                  <td align="right" colspan="2" style="padding-top:35px;padding-bottom:20px">
                  <div style="width:300px;text-align:left;font-size:10pt">
                    <img src="<?php print $img_url ?>partners_signature.png"></img>	<br/>
                    Robert J. Birnbaum, MD, PhD<br/>
                    Director, Continuing Professional Development<br/>
                    Partners HealthCare System<br/>
                  </div>
                  </td>
                </tr>  
                <tr>
                  <td align="left" colspan="2" style="padding-top:15px;">
                  <div style="width:250px;text-align:left;font-size:8pt;color:#808080">
                    <span style="color:#B0B0B0;font-weight:bold">Partners HealthCare System<br/></span>
                    Office of Continuing Professional Development<br/>
                    100 Cambridge Street, 20th Floor<br/>
                    Boston, Ma 02114<br/>
                  </div>
                  </td>
                </tr>  
            </table>
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
</div>
<script>print();</script>
</body>
</html>