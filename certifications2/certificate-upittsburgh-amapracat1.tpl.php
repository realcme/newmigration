<body>

<div style="font-size:12.0pt;font-family:Times New Roman, Times, serif;color: #000000;width: 626px;clear: both;margin:auto">
<table width="620px" style="border: 2.25pt solid #17365D;padding:15px">
          <tr>
            <td align="left" colspan="2" style="padding-top:5px"><img style="max-width: 250px;" src="<?php print $img_url?>upittsburgh_crohncolitis.png"></img></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:10px;font-weight:bold">University of Pittsburgh<br/>
              Center for Continuing Education in the Health Sciences</td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:20px;">This is to acknowledge that:</td>
          </tr>  
          <tr>
            <td align="center" colspan="2" style="padding-top:2px;font-weight:bold"><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></td>
          </tr>  
          <tr>
            <td align="center" colspan="2" style="padding-top:14px;">Participated in the Continuing Medical Education activity</td>
          </tr>     
          <tr>
            <td align="center" colspan="2" style="padding-top:2px;font-weight:bold"><?php print $certificate['course_title'] ?></td>
          </tr>    
          <tr>
            <td align="center" colspan="2" style="padding-top:14px;">Date of Completion: <span style='font-weight:bold'><?php print $date_earned?></span></td>
          </tr>      
          <tr>
            <td align="center" colspan="2" style="padding-top:15px;color:blue">For your credit transcript, please access our website 4 weeks post-completion at: http://ccehs.upmc.edu and follow the link to the Credit Transcript page.            
              <br/>
              <span style='font-weight:bold'>**NOTE**: If you did not provide the last 5 digits of your SSN you will not be able to access a CME credit transcript through UPMC.</span>
              </td>
          </tr>  
          <tr>
            <td align="left" colspan="2" style="padding-top:20px;font-weight:bold">
            This activity has been planned and implemented in accordance with the accreditation requirements and policies of the Accreditation Council for Continuing Medical Education (ACCME) 
            through the joint providership of the University of Pittsburgh School of Medicine and the Crohn's &amp; Colitis Foundation. 
            The University of Pittsburgh School of Medicine is accredited by the ACCME to provide continuing medical education for physicians.
            </td>
          </tr>   
          <tr>
            <td align="left" colspan="2" style="padding-top:20px;">The University of Pittsburgh School of Medicine designates this enduring material for a maximum of <span style='font-weight:bold'><?php print $certificate['amapracat1']?></span><?php print $pratext?>. 
            Each physician should only claim credit commensurate with the extent of their participation in the activity. </td>
          </tr>   
          <tr>
            <td align="left" colspan="2" style="padding-top:20px;">Other health care professionals are awarded (<span style='font-weight:bold'><?php print $ceu?></span>) continuing education units (CEU) which are equivalent to  <span style='font-weight:bold'><?php print $certificate['amapracat1']?></span> contact hours. </td>
          </tr>  
          <tr>
            <td align="left" colspan="2" style="padding-top:25px;">CourseID: <?php print $certificate['@number']?></td>
          </tr>       
</table>
</div>
<script>print();</script>
</body>
