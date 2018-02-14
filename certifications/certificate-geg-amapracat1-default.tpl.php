<?php
if ($certificate['creditearned'] > 1) {
  $c = $certificate['creditearned'].' <i>AMA PRA Category 1 Credits&trade;</i>';
} else {
  $c = $certificate['creditearned'].' <i>AMA PRA Category 1 Credit&trade;</i>';
}
$act = $certificate['@act'] ?  $certificate['@act'] : "enduring material";
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
<div style="font-size:11.0pt;font-family:Arial, Times, serif;color: #000000;clear: both;width: 610px;margin: auto;padding: 0px;">
<table style="border: 1px solid #CCCCCC; width:100%" >   
  <tr>
    <td>
      <table  style="border: 3px solid #CCCCCC; width: 100%" >
          <tr>
            <td align="left" colspan="2" style="padding-top:5px"><img src="<?php print $img_url?>geg_logo.png" style="width: 278px; height: 110px;"></img></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px;padding-bottom:25px"><span style='font-size:24.0pt;font-weight: bold'>Certificate of Participation</span></td>
          </tr>                    
          <tr>
            <td align="center" colspan="2" style="padding: 5px 10px">Global Education Group certifies that</td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding: 5px 10px"><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?> </td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding: 5px 10px">has participated in the <?php print $act?> titled </td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding: 5px 10px"> <span style="font-weight: bold;"><?php print $certificate['course_title'] ?></span> </td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding: 5px 10px">on  <?php print $certificate['dateearned'] ?>. This activity was awarded <?php print $c ?>.   
            </td>
          </tr>    
          <tr>
            <td align="center" colspan="2" style="padding-top:15px">
            <img src="<?php print $img_url?>geg_signature.gif" style="width: 121px; height: 86px;"></img><br/>
              <span style="font-weight: bold;">Stephen M. Lewis, MA, CCMEP</span><br />
              General Manager, Global Education Group
          </td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:20px;padding-bottom:0px;font-size:6pt;color:#CCCCCC">
              <table>
              <tr>
              <td align="center" valign="top">Partnership. Performance. Improvement.</td>              
              <td align="center" valign="top"><img src="<?php print $img_url?>geg_blue.png"></img></td>              
              <td align="left" valign="top">Phone 303.395.1782<br/>Fax 303.648.5311</td>            
              <td align="center" valign="top"><img src="<?php print $img_url?>geg_blue.png"></img></td>     
              <td align="left" valign="top">5575 S Sycamore Street, Suite 200 <br/>Littleton, Colorado 80120</td>            
              <td align="center" valign="top"><img src="<?php print $img_url?>geg_blue.png"></img></td>     
              <td align="left" valign="top">inquire@globaleducationgroup.com<br/>www.globaleducationgroup.com</td>
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