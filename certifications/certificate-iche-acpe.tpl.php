<?php
$pratext = ' <i>AMA PRA Category 1 Credit(s)&trade;</i>';
$img_url = $cert_img_url ? $cert_img_url : base_path().path_to_theme().'/img/';
$ed = $certificate['@ed'] ?  $certificate['@ed'] : "enduring material";
$date = (strtolower(trim($ed)) == 'live activity') ? $certificate['begin_date'] : $certificate['dateearned'];
$ceu = $certificate['acpe'] / 10.0;
$earnedceu = $certificate['creditearned'] / 10.0;
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
            <td align="center" colspan="2" style="padding-top:15px"><span style='font-weight:bold;font-size: 14pt'>CONTINUING EDUCATION CERTIFICATE</span></td>
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
            <td align="center" colspan="2" style="padding-top:10px;">and is awarded <span style="font-weight:bold"><?php print $certificate['creditearned'] ?> hour (<?php print $earnedceu ?> CEU)</span> of continuing education credit.      
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding:10px;">
            The Institute for Continuing Healthcare Education is accredited by the Accreditation Council for Pharmacy Education (ACPE) as a provider of continuing pharmacy education. This program is acceptable for <?php print $certificate['acpe'] ?> hour (<?php print $ceu ?> CEU) of continuing education credit in states that recognize ACPE accredited providers.
            </td>
          </tr>      
          <tr>
            <td align="center" colspan="2" style="padding:10px;">
            All faculty for this continuing education activity are competent in the subject matter and qualified by experience, training, and/or preparation to the tasks and methods of delivery.
            </td>
          </tr>      
          <tr>
            <td align="center" colspan="2" style="padding:10px;">
               <span style="font-style:italic;">Activity Type: <?php print $certificate['@uantype']?> </span> - <span style="font-weight:bold;">ACPE # <?php print $certificate['@uan']?></span>
            </td>
          </tr>              
          <tr>
            <td align="left" valign="bottom" style="widh:50%;padding-left:20px;padding-bottom:10px;margin-bottom:0px">
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
            <td align="center" colspan="2" style="padding-top:10px;font-size:8pt"> Tel: 215-446-8088 &bull; www.iche.edu       
            </td>
          </tr>               
    </table>  
  </td></tr>  
</table>
</div>
<script>print();</script>
</body>
</html>