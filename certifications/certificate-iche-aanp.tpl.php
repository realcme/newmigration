<?php
$img_url = $cert_img_url ? $cert_img_url : base_path().path_to_theme().'/img/';
$ed = $certificate['@ed'] ?  $certificate['@ed'] : "enduring activity";
$date = (strtolower(trim($ed)) == 'live activity') ? $certificate['begin_date'] : $certificate['dateearned'];
$number = '';
if ($certificate['@aanp_pid']) {
  $number = 'Program ID '.$certificate['@aanp_pid'];
}
$p1 = $certificate['creditearned'] > 1 ? 's' : '';
$p2 = $certificate['aanp'] > 1 ? 's' : '';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language; ?>" xml:lang="<?php print $language; ?>">

<head>
  <title><?php print $head_title; ?></title>
</head>
<body>
<div style="font-size:10.0pt;font-family: verdana, arial, sans-serif;color: #000000;clear: both;margin: auto;width: 620px;padding: 0px;">
<table width="620px" style="border: 4px solid #CC0000;">
  <tr><td>
    <table style="border: 2px solid #CC0000; width:100%">
          <tr>
            <td align="center" colspan="2" style="padding-top:0px"><img src="<?php print $img_url?>iche_logo.png"></img></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><span style='font-size: 14pt'>CONTINUING EDUCATION CERTIFICATE</span></td>
          </tr>      
          <tr>
            <td align="center" colspan="2" style="padding-top:10px">The Institute for Continuing Healthcare Education certifies that</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:6px">
              <span style='font-weight:bold;'><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></span><br />
              <img src="<?php print $img_url?>iche_separator.png"></img>
            </td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:0px">has participated in the <?php print $ed?> entitled</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding:10px"><span style='font-weight:bold;'><?php print $certificate['course_title'] ?></span></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:0px">on</td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><span style='font-weight:bold;'><?php print $date ?></span></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:10px;">and is awarded <?php print $certificate['creditearned'] ?> contact hour<?php print $p1?>.        
            </td>
          </tr>
          <tr>
            <td align="left" colspan="2" style="padding:20px 10px 10px 10px;">
This program is approved for <?php print $certificate['aanp'] ?>  contact hour<?php print $p2?> of continuing education by the American Association of Nurse Practitioners. <?php print $number ?> <br /><br />
<br />
This program was planned in accordance with AANP CE Standards and Policies and AANP Commercial Support Standards.
            </td>
          </tr>                    
          <tr>
            <td align="left" valign="bottom" style="widh:50%;padding-top:20px;padding-left:20px;padding-bottom:10px;margin-bottom:0px">
              <img src="<?php print $img_url?>iche_signature_2.png"></img><br />
              <div style="">
              Cathy Pagano, CCMEP		<br />			
              President<br />
              Institute for Continuing Healthcare Education<br />
              </div>            </td>
            <td align="right" style="widh:50%;padding-right:30px;padding-bottom:0px;margin-bottom:5px"><?php print $date ?><br />Date Issued
            </td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px;font-size:8pt"> Tel: 215.446.8088 &bull; www.iche.edu       
            </td>
          </tr>
    </table>  
  </td></tr>  
</table>
</div>
<script>print();</script>
</body>
</html>