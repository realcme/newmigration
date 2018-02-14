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
<div style="font-size:11.0pt;font-family:Arial, Times, serif;color: #000000;width: 625px; margin: auto;clear: both;">
<table width="600px">
          <tr>
            <td align="center" style="padding-top:5px;border: none;margin-right: 0px;"><img src="<?php print $img_url?>arhp_logo.png" ></img></td>
            <td align="center" style="padding-top:5px;border: none;margin-left: 0px;">
              The Association of Reproductive Health Professionals certifies the attendance of   <br/><br/>
              <strong><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></strong> <br/><br/>
              at  <br/><br/>
              <strong><?php print $certificate['course_title'] ?></strong><br/><br/>
              on  <br/><br/>
              <?php print $certificate['dateearned'] ?>
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:30px;padding-bottom:20px">
            The Association of Reproductive Health Professionals (ARHP)  is accredited by the Accreditation Council for Continuing Medical Education to 
            provide continuing medical education for physicians. 
            ARHP designated this enduring material for a maximum of <?php print $certificate['amapracat1']?>  credit hours of <?php print $pratext?>.
            </td>
          </tr>     
          <tr>
            <td align="center"  style="vertical-align: bottom"><img src="<?php print $img_url ?>arhp_signature1.png" width="255px" height="68px"></img></td>
            <td align="center"  style="vertical-align: bottom"><img src="<?php print $img_url ?>arhp_signature2.png" width="330px" height="49px"></img></td>
          </tr>     
          <tr>
            <td align="center" style="font-size: 10pt">
              Sandy Worthington, MSN, WHNP, CNM<br />
              Education  Co-Chair, ARHP
            </td>
            <td align="center" style="font-size: 10pt">
              David Turok, MD<br />
              Education  Co-Chair, ARHP
            </td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:20px"><?php print $certificate['dateearned']?></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:50px;font-size: 10pt">
              Association of Reproductive Health Professionals (ARHP)<br/>
              1901 L Street, NW, Suite 300 | Washington, DC 20036<br/>
              Phone: (202) 466-3825&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E-mail: arhp@arhp.org&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Web: www.arhp.org<br/>
            </td>
          </tr>     
          
          
          
</table>
</div>
<script>print();</script>
</body>
</html>