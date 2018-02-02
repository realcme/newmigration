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
<div style="font-size:12.0pt;font-family:Times New Roman, Times, serif;color: #000000;clear: both;width: 620px;margin: auto;padding: 0px;">

<table style="border: 20px solid #857951;" border="0" cellpadding="0" cellspacing="0" width="620px">
  <tr>
    <td align="center" style="padding: 0px">
      <table style="border: 2px solid white; width: 100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td align="center" style="padding: 0px">
            <table style="border: 6px solid #e86900; width: 100%" cellpadding="3" cellspacing="3">
              <tr>
                <td align="center">
                  <table style="background-color: #ffffff" border="0" cellpadding="0" cellspacing="0">
                   <tr>
                    <td align="center" valign="top"><img src="<?php print $img_url?>pcme_logo.gif" height="124px" width="238px" /></td>
                   </tr>
                   <tr>
                    <td align="center" valign="top">
                      The Potomac Center for Medical Education certifies that<br /><br />
                      <span style="font-size: 16pt;">
                      <?php print $certificate['fullname'] ?></span><br /><br />
                      completed the enduring material titled<br /><br />
                      <b><?php print $certificate['course_title'] ?></b><br /><br />
                      on <?php print $certificate['dateearned'] ?>.<br /><br />
                      The activity was designated for <?php print $certificate['amapracat1'].$pratext ?>. <br />
                    </td>
                   </tr>
                   <tr>
                    <td align="center" valign="top" style="padding-top:10px;padding-bottom:25px"><img src="<?php print $img_url?>pcme_signature.png" width="276px" height="102px"></img>
                    </td>
                  </tr>
                 </table>
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