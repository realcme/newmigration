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
<div style="font-size:11.0pt;font-family:Arial, Verdana, sans-serif;color: #000000;clear: both;width: 600px;margin: auto;padding: 0px;">
<table width="600px">
          <tr>
            <td align="left" style="padding-top:5px;font-size:8.0pt">
            <span style='font-weight:bold;'>Boston University School of Medicine</span><br/>
              The Barry M. Manuel Office of Continuing Medical Education<br/><br/>
              72 East Concord Street, A402, Boston, MA 02118-2307<br/>
              T 617.638.4605  F 617.638.4905  &nbsp;&nbsp;  E cme@bu.edu <br/> 
              www.bu.edu/cme<br/>
            </td>
            <td align="right" style="padding-top:5px;">
              <img src="<?php print $img_url?>bu_logo.png" style="width: 132px; height: 59px;"></img>
            </td>
          </tr>          
          <tr>
            <td align="left" colspan="2" style="padding-top:10px;font-size:10.0pt">
            <?php print $certificate['firstname'] ?> <?php print $certificate['lastname'].$degree ?><br/>
            <?php print $certificate['address'] ?>
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:20px;">Boston University School of Medicine</td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:10px">certifies that</td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:10px;font-weight:bold;"><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?> <?php print $degree?></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:10px">has participated in the enduring material titled</td>
          </tr>  
          <tr>
            <td align="center" colspan="2" style="padding-top:10px;font-weight:bold;"><?php print $certificate['course_title'] ?></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:10px">on <?php print $certificate['dateearned'] ?></td>
          </tr>  
          <tr>
            <td align="center" colspan="2" style="padding-top:10px;">The activity was designated for <?php print $amapracat1.$pratext ?></td>
          </tr>    
          <tr>
            <td align="left" colspan="2" style="padding-top:20px;font-size:10.0pt;padding-left:120px">
              <table cellspacing="0">
                <tr><td style="text-align: left">Maximum Credits: </td><td style="padding-left: 10px;text-align: left"> <?php print $amapracat1?> </td></tr>
                <tr><td style="text-align: left">Total Credits Reported:</td><td style="padding-left: 10px;text-align: left"> <?php print $creditearned ?></td></tr>
                <tr><td style="text-align: left">Total Credits Claimed:</td><td style="padding-left: 10px;text-align: left"> <?php print $creditearned ?></td></tr>
                <tr><td style="text-align: left">Score:</td><td style="padding-left: 10px;text-align: left; border-top:1px solid #000;"> <?php print $score ?></td></tr>                
              </table>
            </td>
          </tr>      
          <tr>
            <td align="left" colspan="2" style="padding:20px 15px 15px 15px; font-size:8.0pt">
               Boston University School of Medicine is accredited by the Accreditation Council for Continuing Medical Education to provide continuing medical education for physicians.<br/><br/>
              
              Boston University School of Medicine designates this enduring material for a maximum of <?php print $amapracat1 ?><strong><?php print $pratext ?></strong>.
              Physicians should claim only the credit commensurate with the extent of their participation in the activity.<br/><br/>
              
              <span style='font-style:italic'>Accreditation Provider Number: 0000185</span><br/><br/>
                            
            </td>
          </tr>       
          <tr>
            <td align="right" colspan="2" style="padding-top:5px;font-size:10pt">
            <img src="<?php print $img_url?>bu_signature.png" style="width: 155px;"></img><br/>
            <span style="text-decoration:overline">Daniel P. Alford, MD, MPH, FACP, FASAM</span><br/>
            Assistant Dean<br/>
            Associate Professor of Medicine<br/>
            </td>
          </tr>   
</table>
</div>
<script>print();</script>
</body>
