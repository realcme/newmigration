<?php
$pratext = ' <i>AMA PRA Category 1 Credit(s)&trade;</i>';
$img_url = $cert_img_url ? $cert_img_url : base_path().path_to_theme().'/img/';
$date = strftime("%B %d, %Y", strtotime($certificate['dateearned']));
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language; ?>" xml:lang="<?php print $language; ?>">

<head>
  <title><?php print $head_title; ?></title>
</head>
<body>
<div style="font-size:11.0pt;font-family:Arial, Times, serif;color: #000000;width: 600px;margin: auto;clear: both;">
<table width="600px">
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><img src="<?php print $img_url?>uwm_logo.png" style="width: 254; height: 168;"></img></td>
          </tr>
          <tr>
            <td align="left" colspan="2" style="padding-top:5px"><?php print $date?></td>
          </tr>          
          <tr>
            <td align="left" colspan="2" style="padding-top:5px">
							<?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?><br/>
							<?php print $certificate['address'] ?>
					  </td>
          </tr>
          <tr>
            <td align="left" colspan="2" style="padding-top:10px">
            Dear Participant:
						<br/><br/>
						The University of Wisconsin School of Medicine and Public Health certifies that
            <?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?> 
            has participated in the enduring material titled <span style="font-style: italic"><?php print $certificate['course_title'] ?></span> 
            on <?php print $date?> 
            and is awarded <?php print $certificate['creditearned'].$pratext?>.
						<br/><br/>
						Sincerely yours,
						</td>
          </tr>      
          <tr>
            <td align="left" valign="bottom" colspan="2" style="padding-bottom:30px;margin-bottom:0px">
            <img src="<?php print $img_url?>uwm_signature.png" width="123px" height="60px"></img><br />
						George C. Mejicano, MD<br/>
						Associate Dean, <br/>
						Office of Continuing Professional Development<br/>
						in Medicine and Public Health<br/>      
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="border-top: 1px solid red; font-family:Times New Roman;font-size: 10pt;padding-top: 5px">
						<span style="font-weight: bold;">Office of Continuing Professional Development in Medicine and Public Health</span><br/>
						University of Wisconsin School of Medicine and Public Health<br/>
						2701 International Lane, Suite 208, Madison, Wisconsin  53704<br/>
						608.240.2147&nbsp;&nbsp;Fax: 608.240.6040&nbsp;&nbsp;Email: ocpd@mailplus.wisc.edu&nbsp;&nbsp;www.ocpd.wisc.edu
            </td>
          </tr>          
</table>
</div>
<script>print();</script>
</body>
</html>