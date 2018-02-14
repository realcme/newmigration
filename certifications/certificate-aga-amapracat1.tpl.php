<?php
$pratext = ' <i>AMA PRA Category 1 Credit(s)&trade;</i>';
$img_url = $cert_img_url ? $cert_img_url : base_path().path_to_theme().'/img/';
$credit = $certificate['creditearned'];
if (strpos($credit, '.') === false) $credit .= '.00';
$date_earned = strftime("%A, %B %d, %Y", strtotime($certificate['dateearned']));
$support = $certificate['@support'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language; ?>" xml:lang="<?php print $language; ?>">

<head>
  <title><?php print $head_title; ?></title>
</head>
<body>
<div style="font-size:12.0pt;font-family:Times New Roman, Times, serif;color: #000000;width: 626px;clear: both;margin:auto">
<table width="620px" style="border: 7px solid #004D89;padding:5px">
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><img src="<?php print $img_url?>aga_logo.png" style="width:158px"></img></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:5px;font-size:16pt;font-weight:bold">CME CERTIFICATE</td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:10px;font-weight:bold">The AGA Institute certifies that
            </td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:5px;font-weight:bold;"><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px;font-weight:bold">has participated in the educational activity titled</td>
          </tr>       
          <tr>
            <td align="center" colspan="2" style="padding-top:3px;font-weight:bold;font-style:italic"><?php print $certificate['course_title'] ?></td>
          </tr>       
          
          <tr>
            <td align="center" colspan="2" style="padding-top:3px;font-weight:bold">and is awarded <?php print $credit.$pratext?></td>
          </tr>          
          <tr>
            <td align="left" colspan="2" style="padding-top:15px;font-size:10.0pt">
            The AGA Institute is accredited by the Accreditation Council for Continuing Medical Education to provide continuing medical education for physicians.
            <br/><br/>
            The AGA Institute designates this educational activity for a maximum of <?php print $certificate['amapracat1'].$pratext?>. Each physician should only claim credit
            commensurate with the extent of their participation in the activity.
            <br/><br/>
            In accordance with the ACCME’s Standards for Commercial Support of Continuing Medical Education, all faculty and planning partners must disclose any
            financial relationship(s) or other relationship(s) held within the past 12 months. The AGA Institute implements a mechanism to identify and resolve all
            conflicts of interest prior to delivering the educational activity to learners.
            </td>
          </tr>  
          <tr>
              <td align="center" colspan="2" style="padding-top:25px;font-size:11pt;font-weight:bold">
                Michael Camilleri, MD, AGAF President
                <br/>
                AGA Institute, 4930 Del Ray Avenue, Bethesda, MD 20814 | 1.301.654.2055 | <a target="_blank" href="http://www.gastro.org">www.gastro.org</a>
            </td>
          </tr>          
</table>
</div>
<script>print();</script>
</body>
</html>