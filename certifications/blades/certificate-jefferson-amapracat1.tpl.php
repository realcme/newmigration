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
<div style="font-size:12.0pt;font-family:Arial, Times, serif;color: #000000;clear: both;margin: auto;width: 600px;padding: 0px;">
<table width="600px" style="border: 0px;">
          <tr>
            <td align="center" colspan="2" style="padding:15px 20px"><span style='font-weight: bold'>Certificate of Participation</span></td>
          </tr>  			        
          <tr>
            <td align="center" colspan="2">
              <table width="100%" style="border: 2px solid black;">
			          <tr>
			            <td align="center" colspan="2" style="padding:15px 20px"><span style='font-weight: bold'><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></span></td>
			          </tr>  
			        
			          <tr>
			            <td align="center" colspan="2" style="padding:10px 20px"><span style='font-weight: bold;'><?php print $certificate['course_title'] ?></span></td>
			          </tr>    
			          
			                  
			          <tr>
			            <td align="left" colspan="2" style="padding:10px 20px"><span style='font-weight: normal;'>Activity date completed:  <?php print $certificate['dateearned'] ?></span></td>
			          </tr>    
			          <tr>
			            <td align="left" colspan="2" style="padding:10px 20px"><span style='font-weight: norma;'>Credits Claimed:  <?php print $certificate['creditearned'].$pratext ?></span></td>
			          </tr>     
			          <tr>
			            <td align="left" colspan="2" style="padding:10px 20px"><span style='font-weight: bold; font-style: italic'>Jefferson Medical College of Thomas Jefferson University is accredited by the ACCME to provide continuing medical education for physicians.</span></td>
			          </tr>    
              </table>
            </td>
          </tr>
          <tr>
            <td align="left" colspan="2" style="padding:25px 20px">

You will be able to download a PDF of your official Jefferson CME Certificate for this activity.
To receive your official CME Certificate from Jefferson, please follow the directions found at: <br />
 <br />
http://jeffline.jefferson.edu/jeffcme/RAPID <br />
<br />
If you have any questions, please email us at jeffersoncme@jefferson.edu

            </td>
          </tr>  
          <tr>
            <td align="center" colspan="2" style="padding-top:5px">
Office of Continuing Medical Education <br />
Jefferson Medical College <br />
1020 Locust Street / Suite M5 <br />
Philadelphia, PA 19107 <br />
Telephone: 888-JEFFCME   &nbsp;&nbsp;&nbsp;&nbsp;  Fax:  215-923-3212 <br />
Jeffersoncme@jefferson.edu <br />
http://jeffline.jefferson.edu/jeffcme <br />
            
            </td>
          </tr>          

</table>
</div>
<script>print();</script>
</body>
