<?php
$pratext = ' <i>AMA PRA Category 1 Credit(s)&trade;</i>';
$img_url = $cert_img_url ? $cert_img_url : base_path().path_to_theme().'/img/';
$credit = $certificate['cope'];
if (strpos($credit, '.') === false) $credit .= '.0';
$degree = $certificate['profession'] == 'OPT' ? ', OD': '';
$ed = $certificate['@ed'] ?  $certificate['@ed'] : "Online/Enduring";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language; ?>" xml:lang="<?php print $language; ?>">

<head>
  <title><?php print $head_title; ?></title>
</head>
<body>
<div style="font-size:11.0pt;font-family: verdana, arial, sans-serif;color: #000000;clear: both;margin: auto;width: 620px;padding: 0px;">
<table width="620px" style="border: 4px solid #CC0000;">
  <tr><td>
    <table style="border: 2px solid #CC0000; width:100%">
          <tr>
            <td align="center" colspan="2" style="padding-top:0px"><img src="<?php print $img_url?>iche_logo.png"></img></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-left:10px;padding-top:20px;font-weight:bold;"><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?><?php print $degree ?></td>
          </tr>    
          <tr>
            <td align="center" colspan="2" style="padding-left:10px;padding-top:20px"><span style='font-weight:bold;'>Certificate Of Completion</span></td>
          </tr>      
          <tr>
            <td align="left" colspan="2" style="padding-left:10px;padding-top:20px">
            <table>
              <tr><td style="vertical-align:top;text-align:left;padding-top:5px;">Course&nbsp;Title: </td><td style="vertical-align:top;padding-left:5px;padding-top:5px;font-weight:bold;"><?php print $certificate['course_title'] ?></td></tr>
              <tr><td style="vertical-align:top;text-align:left;padding-top:5px;">Course ID:</td><td style="vertical-align:top;padding-left:5px;padding-top:5px;font-weight:bold;"><?php print $certificate['@cope_cid'] ?></td></tr>
  		       	<tr><td style="vertical-align:top;text-align:left;padding-top:5px;">Event ID:</td><td style="vertical-align:top;padding-left:5px;padding-top:5px;font-weight:bold;"><?php print $certificate['@cope_eid']?></td></tr>
            </table>
            </td>
          </tr>     
          <tr>
            <td align="left" colspan="2" style="padding-left:10px;padding-top:20px">Date: <?php print $certificate['dateearned'] ?></td>
          </tr>     
          <tr>
            <td align="left" colspan="2" style="padding-left:10px;padding-top:20px">Activity Type: <?php print $ed?></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding:30px 10px;">This course has been accredited for <?php print $credit?> hours of 
            <br/> Continuing Education credit by COPE       
            </td>
          </tr>                  
          <tr>
            <td align="left" colspan="2" valign="bottom" style="widh:50%;padding-left:10px;padding-top:5px;padding-bottom:10px;margin-bottom:0px;">
              <img src="<?php print $img_url?>iche_signature_2.png"></img><br />
              <div style="font-size:10pt">
              Cathy Pagano, CCMEP		<br />			
              President<br />
              Institute for Continuing Healthcare Education<br />
              </div>
            </td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px;font-size:8pt">Tel: 215.446.8088 &bull; www.iche.edu       
            </td>
          </tr>               
    </table>  
  </td></tr>  
</table>
</div>
<script>print();</script>
</body>
</html>