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
<div align="center" style="font-size:12.0pt;font-family:Times New Roman, Times, serif;color: #000000;width: 626px;clear: both;">
<table align="center" width="600px">
          <tr>
            <td align="center" colspan="2" style="padding-top:15px; max-width:250px;">
            	<img align="center" style="max-width:250px;"  src="<?php print $img_url?>mims_logo.png"></img>
            </td>
          </tr>
          
          <tr>
            <td align="center" colspan="2" style="padding-top:5px; font-size: 10pt;">certifies that</td>
          </tr>        
          <tr>
            <td align="center" colspan="2" style="padding-top:10px; font-size: 10pt;"><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px; font-size: 10pt;">has participated in the educational activity entitled</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px; font-size: 10pt;"><?php print $certificate['course_title'] ?></td>
          </tr>         
          <tr>
            <td align="center" colspan="2" style="padding-top:10px; font-size: 10pt;">and has received</td>
          </tr>  
          <tr>
            <td align="center" colspan="2" style="padding-top:10px; font-size: 10pt;"><?php print $credit ?> Learning Credit(s)</td>
          </tr>
          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px; font-size: 10pt;">Date completed: <?php print date('Y/m/j',strtotime($certificate['dateearned']))?></td>
          </tr>   
          
</table>
          
<table width="600px">          
          <tr>
            <td align="left" colspan="3" style="padding-top:25px; font-size: 10pt;">Supported by an educational grant from <?php print $certificate['@ina'] ?>. 
            Date of preparation <?php print $certificate['@enduring_begin_date'] ?> 2017 <br /><br />
            
            This activity has been produced by the Haymarket Medical editorial team, under the guidance of the MIMS Learning expert faculty. <br />
            A recommended learning credit value is provided to assist the participant.  <br />
            This credit value is in line with the recommendations of the Royal College of General Practitioners. <br /><br />
            
            myCME is an educational website published in the USA by Haymarket Media Group, which also publishes MIMS Learning and GPonline in the UK.
            
            </td>
            <td colspan="1">
            	<img align="center" style="max-width:125px;"  src="<?php print $img_url?>mims_sig.png"></img>
            </td>
          </tr>
            
    
     
</table>
</div>
<script>print();</script>
</body>
