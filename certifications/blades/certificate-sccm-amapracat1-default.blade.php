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
<div align="middle" style="font-size:12.0pt;font-family:Times New Roman, Times, serif;color: #000000;width: 626px;clear: both;">
<table width="600px">
          <tr>
            <td align="middle" colspan="2" style="padding-top:15px; max-width:250px;">
            	<img align="middle" style="max-width:250px;"  src="<?php print $img_url?>sccm_logo.png"></img>
            </td>
          </tr>
          
          <tr>
            <td align="middle" colspan="2" style="padding-top:5px; font-size: 10pt;">The Society of Critical Care Medicine certifies that 
            the participant has participated in the activity listed below.</td>
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
            <td align="middle" colspan="2" style="padding-top:15px; font-size: 10pt;"> Accreditation Statement: The Society of Critical Care Medicine is accredited by the Accreditation 
            Council for Continuing Medical Education (ACCME) to provide continuing medical education for physicians 
            and designated this activity for <?php print $certificate['creditearned']; ?> <i>AMA PRA Category 1 Credit(s)&trade;</i></td>
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
