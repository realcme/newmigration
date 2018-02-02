<?php
$pratext = ' <i>AMA PRA Category 1 Credit(s)&trade;</i>';
$img_url = $cert_img_url ? $cert_img_url : base_path().path_to_theme().'/img/';
$occupation = ($certificate['profession'] == 'OTH') ? "" : ', '.$certificate['professionlabel'];
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
<div style='font-size:12.0pt;font-family:"Palatino Linotype", "Book Antiqua", Palatino, serif;color: #000000;clear: both;width: 600px;margin: auto;padding: 0px;'>
<table width="600px" style="border: 1px solid #404040;">
          <tr>
            <td align="center" colspan="3" style="padding-top:35px"><span style='font-size: 22pt;font-style:italic;font-weight:bold'>New York Medical College</span></td>
          </tr>
          <tr>
            <td align="center" colspan="3" style="padding-top:10px"><span style='font-size: 14pt;font-style:italic;'>Continuing Medical Education</span></td>
          </tr>       
          <tr>
            <td align="center" colspan="3" style="padding-top:30px"><span style='font-style:italic;font-style:italic;'>Certifies that</span></td>
          </tr>          
          <tr>
            <td align="center" colspan="3" style="padding-top:15px"><span style='font-size:14.0pt;font-style:italic;font-weight: bold;'><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?><?php print $occupation ?></span>
            </td>
          </tr>          
          <tr>
            <td align="center" colspan="3" style="padding-top:10px"><span style='font-style:italic;'>has participated in the enduring material titled</span></td>
          </tr>          
          <tr>
            <td align="center" colspan="3" style="padding-top:15px"><span style='font-style:italic;font-weight:bold;'><?php print $certificate['course_title'] ?></span></td>
          </tr>          
          <tr>
            <td align="center" colspan="3" style="padding-top:15px;font-style:italic;font-weight:bold;"><?php print $certificate['dateearned'] ?>
            </td>
          </tr>
          <tr>
            <td align="center" colspan="3" style="padding-top:15px;padding-bottom:25px;font-style:italic;"> this activity was designated for <?php print $certificate['amapracat1'].$pratext ?>.
            </td>
          </tr>
          <tr>
            <td align="center" style="padding-top:5px; font-size: 8pt">
            <img src="<?php print $img_url?>nymc_signature1.png"></img>
              Kathy J. Kavanagh <br/>
              Director,  <br/>
              Continuing Medical Education <br/>
            </td>
            <td align="left" style="padding-top:5px; font-size: 8pt">
              <img src="<?php print $img_url?>nymc_logo.png"></img>
            </td>
            <td align="center" style="padding-top:5px; font-size: 8pt">
            <img src="<?php print $img_url?>nymc_signature2.png"></img>
              Joseph F. Dursi, M.D.<br/>
              Associate Dean,  <br/>
              Continuing Medical Education<br/>
            </td>
          </tr>
          <tr>
            <td align="center" colspan="3" style="padding-top:25px;padding-bottom:5px;font-style:italic;">Accreditation Council for Continuing Medical Education Provider No. 0000256
            </td>
          </tr>
</table>
</div>
<script>print();</script>
</body>
</html>