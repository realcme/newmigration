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
            <span style='font-weight:bold;'>Boston University</span> School of Medicine<br/>
              Continuing Medical Education<br/>
              72 East Concord Street, A402<br/>
              Boston, Massachusetts 02118<br/>
              T 617-638-4605 &nbsp;&nbsp; F 617-638-4905<br/>
              www.bu.edu/cme<br/>
            
            </td>
            <td align="right" style="padding-top:5px;">
              <img src="<?php print $img_url?>bu_logo.png" style="width: 132px; height: 59px;"></img>
            </td>
          </tr>          
          <tr>
            <td align="left" colspan="2" style="padding-top:10px;font-size:10.0pt">
            <?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?><br/>
            <?php print $certificate['address'] ?>
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:20px;font-size:14.0pt">Boston University School of Medicine</td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:10px">certifies that</td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:10px;font-weight:bold;"><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:10px">has participated in the enduring material titled</td>
          </tr>  
          <tr>
            <td align="center" colspan="2" style="padding-top:10px;font-weight:bold;"><?php print $certificate['course_title'] ?></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:10px;">and is awarded <?php print $amountearnerd ?> contact hours.</td>
          </tr>        
          <tr>
            <td align="left" colspan="2" style="padding-top:20px;font-size:10.0pt;padding-left:200px">
              <table cellspacing="0">
                <tr><td style="text-align: left">Date Completed: <?php print $certificate['dateearned'] ?>  </td></tr>
                <tr><td style="text-align: left">Maximum Contact Hours: <?php print $amountmax ?> </td></tr>
                <tr><td style="text-align: left">Total Contact Hours Reported: <?php print $amountearnerd ?></td></tr>
              </table>
            </td>
          </tr>        
          <tr>
            <td align="left" colspan="2" style="padding:20px 15px 15px 15px; font-size:8.0pt">
            
            This activity has been planned and implemented in accordance with the Essential Areas and Policies of 
            the Accreditation Council for Continuing Medical Education (ACCME) through the joint sponsorship of Boston University School of Medicine and 
            <?php print $certificate['@bu_sponsor']?>. 
            
            Boston University School of Medicine is accredited by the Accreditation Council for Continuing Medical Education to provide continuing medical education for physicians.
            </td>
          </tr>         
          <tr>
            <td align="left" colspan="2" style="padding:0px 15px 15px 15px;font-size:8.0pt;">
            Boston University School of Medicine designates this enduring material for a maximum of <?php print $amountmax ?> contact hours. 
            Physicians should claim only the credit commensurate with the extent of their participation in the activity.
            </td>
          </tr>   
          <tr>
            <td align="left" colspan="2" style="padding:0px 15px 15px 15px;font-size:8.0pt;">
            <div style="float: left; padding-right: 4px;width:60px;height:80px"><img src="<?php print $img_url?>acpe_logo.png" style="width: 55px; height: 49px;"></img></div>
            The University of Rhode Island, College of Pharmacy, is accredited by the Accreditation Council for Pharmacy Education as a provider of 
            continuing pharmacy education. Attendance and completion program evaluations are required for issuance of a statement of credit.
            <br/>
            <span style="font-weight:bold">  
            UAN : <?php print $certificate['@uan']?> &nbsp;&nbsp; <?php print $amountmax ?> Contact Hours (<?php print $ceuapproved?> CEUs) &nbsp;&nbsp; <br/>
            Expiration Date: <?php print $expiration_date?>
            </span>
            <br/>
            This is a <?php print $certificate['@uantype']?> learning activity.
            </td>
          </tr>   
          <tr>
            <td align="right" colspan="2" style="padding-top:5px">
            <img src="<?php print $img_url?>bu_signature.jpg" style="width: 155px; height: 52px;"></img><br/>
            </td>
          </tr>   
</table>
</div>
<script>print();</script>
</body>
