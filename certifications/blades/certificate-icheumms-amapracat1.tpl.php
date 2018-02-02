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
<div style="font-size:10.0pt;font-family:Arial, Times, serif;color: #000000;width: 626px; margin:auto;clear: both;">
<table width="600px">
          <tr>
            <td align="center" colspan="2" style="padding-top:25px; font-size: 14pt">University of Michigan Medical School <br/> Office of Continuing Medical Education
					  </td>
          </tr> 
          <tr>
            <td align="center" colspan="2" style="padding-top:10px; font-style: italic;">certifies</td>
          </tr> 
          <tr>
            <td align="center" colspan="2" style="padding-top:5px;font-weight: bold;"><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:10px">participated in the enduring material CME activity</td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:10px;font-weight: bold;"><?php print $certificate['course_title'] ?></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:10px">on</td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><?php print $certificate['dateearned'] ?></td>
          </tr> 
          <tr>
            <td align="center" colspan="2" style="padding-top:15px">jointly sponsored by the University of Michigan Medical School and the Institute for Continuing Healthcare Education</td>
          </tr>             
          <tr>
            <td align="center" colspan="2" style="padding-top:15px">This activity was designated for <?php print $certificate['amapracat1'].$pratext ?></td>
          </tr>  
          <tr>
            <td align="left" colspan="2" style="padding-top:5px; font-size:8pt"><span style="font-weight: bold">Provider:</span> This activity has been planned and implemented in accordance with the Essential Areas and Policies of the Accreditation Council for Continuing Medical Education (ACCME) through the joint sponsorship of the University of Michigan Medical School and the Institute for Continuing Healthcare Education.  The University of Michigan Medical School is accredited by the Accreditation Council for Continuing Medical Education to sponsor continuing medical educational activity for physicians. </td>
          </tr>           
          <tr>
            <td align="left" colspan="2" style="padding-top:5px; font-size:8pt"><span style="font-weight: bold">Credit:</span> The University of Michigan Medical School designates this enduring material CME activity for a maximum of <?php print $certificate['amapracat1'].$pratext ?>.  Physicians should claim only the credit commensurate with the extent of their participation in the activity.</td>
          </tr>           
          <tr>
            <td align="left" colspan="2" style="padding-top:5px; font-size:8pt"><span style="font-weight: bold">Attendance documentation:</span> <span style="text-decoration: underline">Retain this certificate for your personal records.</span>  It verifies satisfactory completion of the activity. </td>
          </tr>
          <tr>
            <td align="left" colspan="2" style="padding-top:5px; font-size:8pt">
            A record of your attendance is also on file at:<br/>
            <div style="padding-left: 5px">
            Department of Medical Education<br/> 
            G1212 Towsley Center, SPC 5201<br/> 
            1500 E. Medical Center Drive<br/> 
            Ann Arbor, Michigan 48109-5201<br/> 
            Phone:  (734) 936-1664<br/>    
            </div>         
						</td>
          </tr>
</table>
</div>
<script>print();</script>
</body>
