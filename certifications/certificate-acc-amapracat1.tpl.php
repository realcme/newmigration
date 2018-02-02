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
<div style="font-size:12.0pt;font-family:Times New Roman,Times,serif;color: #000000;width: 600px;margin: auto;clear: both;">
<table width="600px">
          <tr>
            <td align="center" colspan="2">
              <table>
                <tr>
                  <td rowspan="2"><img src="<?php print $img_url?>acc_logo.png"></img></td>
                  <td align="center" style="padding-top:15px"><span style='font-size:18.0pt; font-weight: bold'>American College of Cardiology Foundation</span></td>
                 </tr>
                  <tr>
                    <td align="center" style="padding-top:5px"><span style='font-size:14.0pt; font-weight: bold'>Continuing Medical Education for Enduring Materials</span></td>
                  </tr>
                </table>
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:15px">
            The American College of Cardiology Foundation (ACCF) is accredited by the Accreditation Council for Continuing Medical Education to provide continuing medical education for physicians. <br />
            The ACCF takes responsibility for the content, quality, and scientific integrity of this CME activity.</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px">The American College of Cardiology Foundation (ACCF) certifies that</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><span style='font-weight:bold'><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></span></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:15px">is awarded <?php print $certificate['amapracat1'].$pratext ?> on <?php print $certificate['dateearned']?><br /> for participation in the following activity(ies).</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px">The ACCF designates this/these educational activity/activities for a maximum of <br /> 
            <span style='font-weight:bold'><?php print $certificate['amapracat1'] ?></span> <?php print $pratext?>.<br /> 
            Physicians should only claim credit commensurate with the extent of their participation in the activity.</td>
          </tr>  
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><?php print $certificate['course_title'] ?></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:10px">Date of Participation: <?php print $certificate['dateearned'] ?> <br /> Hours claimed: <?php print $certificate['creditearned']?>. Maximum possible: <?php print $certificate['amapracat1'] ?>.</td>
          </tr>  
          <tr>
            <td align="center" colspan="2" style="padding-top:25px">Date Certificate Issued: <?php print $certificate['dateearned'] ?></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:0px;padding-top:10px">American College of Cardiology Foundation <br />
2400 N Street, NW <br />
Washington, DC 20037 <br />
800-253-4636, ext. 5603</td>
          </tr>
        </table>
</div>
<script>print();</script>
</body>
</html>
