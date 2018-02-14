<body>
<div style="font-size:12.0pt;font-family:Times New Roman, Times, serif;color: #000000;width: 626px;clear: both;">
<table width="600px">
          <tr>
            <td align="center" colspan="2" style="padding-top:5px;">
            	<table><tr><td style="width:300;border-bottom: #A0A0A0 solid 1px"><img src="<?php print $img_url?>upenn_logo.png"></img></td></tr></table></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:5px;font-size:16pt;font-weight:bold">CERTIFICATE OF PARTICIPATION</td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:10px;">The Perelman School of Medicine at the University of Pennsylvania certifies that</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:5px;font-weight:bold"><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px;">has participated in the enduring material titled</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:3px;font-weight:bold"><?php print $certificate['course_title'] ?></td>
          </tr>         
          <tr>
            <td align="center" colspan="2" style="padding-top:3px;">on <br /> <span style="font-weight:bold"><?php print $certificate['dateearned'] ?></span> </td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:3px;">Program last reviewed and released online on <br /> <span style="font-weight:bold"><?php print $certificate['begin_date'] ?></span></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:3px;">Program expires on <br /> <span style="font-weight:bold"><?php print $certificate['expiration_date'] ?></span></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:3px;">This activity was designated for <span style="font-weight:bold"><?php print $certificate['creditearned']?></span><?php print $pratext?></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px;font-size:10.0pt">
            This activity has been planned and implemented in accordance with the Essential Areas and policies of the Accreditation Council for Continuing Medical Education (ACCME) through the joint sponsorship of the Perelman School of Medicine at the University of Pennsylvania, Athena Education Group, LLC, and RealCME. The Perelman School of Medicine at the University of Pennsylvania is accredited by the ACCME to provide continuing medical education for physicians.
            </td>
          </tr>  
          <tr>
              <td align="center" colspan="2" style="padding-top:25px;font-size:11pt;font-weight:bold">
              	<img src="<?php print $img_url?>upenn_signature.png"></img><br/>
              	Zalman S Agus, MD <br/>
								Associate Dean, Continuing Medical Education
            </td>
          </tr>          
</table>
</div>
<script>print();</script>
</body>
