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
<div style="font-size:12.0pt;font-family:Arial, Times, serif;color: #000000;clear: both;width: 620px;margin: auto;padding: 0px;">
<table cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="3" valign="bottom" align="center"  style="width: 600px;margin: 0px;padding: 0px; height: 63px;line-height: 0px">
      <img src="<?php print $img_url?>mer2_border_top.png" width="600px" height="63px"></img>
    </td>
  </tr>
  <tr>
    <td valign="top" align="right" style="width:40px;padding: 0px 0px 0px 0px; line-height: 0px">
      <img src="<?php print $img_url?>mer2_border_left.png" width="40px" height="560px"></img>
    </td>
    <td valign="top" align="center" style="width: 514px;">
    
<table>
          <tr>
            <td align="center" colspan="2" style="padding-top:0px; font-weight:bold;font-size:18.0pt;">Certificate of Participation</td>
          </tr>           
          <tr>
            <td align="center" colspan="2" style="padding-top:20px">Medical Education Resources, Inc. <br/> <span style='font-style: italic;'>Certifies that</span>
            </td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><span style='font-weight: bold;'><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></span>
            </td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px;">has participated in the enduring material titled</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px; font-weight: bold"><?php print $certificate['course_title'] ?> </td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px; font-weight: bold">on  <?php print $certificate['dateearned'] ?></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px;">
              This activity was designated for  <?php print $certificate['creditearned'].$pratext ?>           
            </td>
          </tr>
          <tr>
            <td align="left" colspan="2" style="padding-top:20px;padding-bottom:0px;font-size:11.0pt">Medical Education Resources designates this enduring material for a maximum of <?php print $certificate['amapracat1'].$pratext ?>.<br/>
            Physicians should claim only the credit commensurate with the extent of their participation in the activity.
            </td>
          </tr>  
          <tr>
            <td align="center" colspan="2" style="padding-top:20px;padding-bottom:0px; font-size: 10pt;">
              <img src="<?php print $img_url?>mer2_signature.png"></img><br/>
            </td>
          </tr>  
</table>

    </td>
    <td valign="top" align="left" style="width: 46px;padding: 0px 0px 0px 0px; line-height: 0px">
      <img src="<?php print $img_url?>mer2_border_right.png" width="46px" height="560px"></img>
    </td>
  </tr>
  <tr>
    <td colspan="3" valign="top" align="center"  style="width: 600px;margin: 0px;padding: 0px; height: 116px;line-height: 0px">
      <img src="<?php print $img_url?>mer2_border_bottom.png" width="600px" height="116px"></img>
    </td>
  </tr>
</table>
</div>
<script>print();</script>
</body>
</html>