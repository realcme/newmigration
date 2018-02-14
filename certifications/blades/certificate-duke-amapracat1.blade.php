<?php
$name=$page_settings['name'];
$head_title="Head
Title";
$certificate=[
'begin_date'=>'01/01/2017',
'dateearned'=>'01/01/2017',
'expiration_date'=>'01/01/2017',
'creditearned'=>'01/01/2017',
'course_title'=>'title',
]
?>
<body>
<div style="font-size:11.0pt;font-family:Arial, Times, serif;color: #000000;width: 600px;margin: auto;clear: both;">
<table width="600px" style="border: 2px solid #1F497D;">
  <tr>
   <td>
     <table width="100%" style="border: 7px solid #1F497D;">   
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><img src="<?php print $img_url?>duke_logo.jpg" style="width: 474; height: 96;"></img></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:10px;font-size:18pt;font-weight:bold;font-family: Times New Roman;font-style:italic;">Statement of Credit</td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:15px;font-weight:bold;">The Duke University School of Medicine is accredited by the Accreditation Council for Continuing Medical Education to provide continuing medical education for physicians.</td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:20px;">The Duke University School of Medicine certifies that</td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:10px;font-weight:bold;font-size:14pt;"><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?><?php print $degree?></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:10px;">has attended and successfully completed the <?php print $ed?></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:10px;font-weight:bold;font-size:12pt;"><?php print $certificate['course_title'] ?></td>
          </tr>    
          <tr>
            <td align="center" colspan="2" style="padding-top:10px;">on <?php print $certificate['dateearned'] ?> and is awarded <?php print $certificate['creditearned'].$pratext?>.</td>
          </tr>   
          <tr>
            <td align="center" style="width: 50%" > &nbsp;</td>
            <td align="right" style="padding-top:15px;padding-right:20px">
              <img src="<?php print $img_url?>duke_signature.png" width="300px" height="59px"></img>
              <br/>
              <span style="font-style:italic">Chitra Subramaniam, Ph.D</span><br/>
							Director, Continuing Medical Education<br/>
							Duke University School of Medicine              
            </td>
          </tr>  
          <tr>
            <td align="center" colspan="2" style="padding-top:40px">&nbsp;</td>
          </tr>    
     </table>
   </td>
 </tr> 
</table>
</div>
<script>print();</script>
</body>
