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
            <?php print $certificate['firstname'] ?> <?php print $certificate['lastname'].$degree ?><br/>
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
            <td align="center" colspan="2" style="padding-top:10px;font-weight:bold;"><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'].$degree ?></td>
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
            <td align="center" colspan="2" style="padding-top:10px; font-style: italic;line-height: 1.5;">
            <strong>This is not an official ACPE certificate</strong><br>
            CE participant data will be submitted to the CPE Monitor immediately upon completion of the post-test although the data may not appear in your CPE Monitor account for 1-2 days. CE statements and transcripts are available at mycpemonitor.net. Please verify that your ACPE data has been reported accurately.
            </td>
          </tr>        
          <tr>
            <td align="left" colspan="2" style="padding:20px 15px 15px 15px; font-size:8.0pt">            
            Boston University School of Medicine is accredited by the Accreditation Council for Continuing Medical Education to provide continuing medical education for physicians.
            </td>
          </tr>         
          <tr>
            <td align="left" colspan="2" style="padding:0px 15px 15px 15px;font-size:8.0pt;">
            Boston University School of Medicine designates this enduring material for a maximum of <?php print $amountmax.$pratext ?>. 
            Physicians should claim only the credit commensurate with the extent of their participation in the activity.<br/><br/>
            
            <span style='font-style:italic'>Accreditation Provider Number: 0000185</span><br/><br/>
            </td>
          </tr>   
          <tr>
            <td align="left" colspan="2" style="padding:0px 15px 15px 15px;font-size:8.0pt;">
            <div style="float: left; padding-right: 4px;width:60px;height:80px"><img src="<?php print $img_url?>acpe_logo.png" style="width: 55px; height: 49px;"></img></div>
            The University of Rhode Island, College of Pharmacy, is accredited by the Accreditation Council for Pharmacy Education as a provider of 
            continuing pharmacy education. Participation and completion of online program evaluations and self-assessment tools at the conclusion of the program are required to earn credit.
     		This knowledge-based activity is approved for <?php print $amountmax ?> Contact Hours (<?php print $ceuapproved?> CEUs). UAN : <?php print $certificate['@uan']?> <br/>
            Expiration Date: <?php print $expiration_date?>
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
