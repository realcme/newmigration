<?php
$pratext = ' <i>AMA PRA Category 1 Credit(s)&trade;</i>';
$img_url = $cert_img_url ? $cert_img_url : base_path().path_to_theme().'/img/';
$credit = $certificate['creditearned'];
if (strpos($credit, '.') === false) $credit .= '.00';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language; ?>" xml:lang="<?php print $language; ?>">

<head>
  <title><?php print $head_title; ?></title>
</head>
<body>
<div align="middle" style="font-size:12.0pt;font-family:Times New Roman, Times, serif;color: #000000;width: 626px;clear: both;">
<table width="600px">
          <tr>
            <td align="middle" colspan="2" style="padding-top:15px; max-width:250px;">
            	<img align="middle" style="max-width:250px;"  src="<?php print $img_url?>sccm_logo.png"></img>
            </td>
          </tr>
          
          <tr>
            <td align="middle" colspan="2" style="padding-top:5px; font-size: 10pt;">The Society of Critical Care Medicine certifies that 
            the participant has satisfied the course requirements.</td>
          </tr>
          <tr>
            <td align="middle" colspan="2" style="padding-top:15px;font-size: 10pt;">Today's Date: <?php print date('m/j/Y') ?></td>
          </tr>          
          <tr>
            <td align="middle" colspan="2" style="padding-top:10px; font-size: 10pt;">Name: <?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></td>
          </tr>          
          <tr>
            <td align="middle" colspan="2" style="padding-top:10px; font-size: 10pt;">Completion Date: <?php print date('Y/m/j',strtotime($certificate['dateearned']))?></td>
          </tr>          
          <tr>
            <td align="middle" colspan="2" style="padding-top:10px; font-size: 10pt;">Activity Name: <?php print $certificate['course_title'] ?></td>
          </tr>         
          <tr>
            <td align="middle" colspan="2" style="padding-top:10px; font-size: 10pt;">Number of Credits: <?php print $credit ?> </td>
          </tr>
          
          <tr>
            <td align="middle" colspan="2" style="padding-top:25px; font-size: 10pt;">Accreditation Statement: The Society of Critical Care Medicine 
            is accredited by the Accreditation Council for Continuing Medical Education (ACCME) to provide continuing medical 
            education for physicians.</td>
          </tr>    
          <tr>
            <td align="middle" colspan="2" style="padding-top:15px; font-size: 10pt;"> Designation Statement: The Society of Critical Care Medicine designates this
             online educational activity for a maximum of <?php print $certificate['amapracat1']?><i> AMA PRA Category 1 Credit(s) TM </i>listed above. 
             Each physician should claim only those hours of credit that he/she actually spent in the educational activity.</td>
          </tr>  
          <tr>
              <td align="left" colspan="2" style="padding-top:100px; font-size: 10pt;">
                <img style="max-width:200px;" src="<?php print $img_url?>sccm_signature.png"/>
            </td>
          </tr>      
     
</table>
</div>
<script>print();</script>
</body>
</html>