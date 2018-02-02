<body>
<div style="font-size:11.0pt;font-family:family:Times New Roman, Times, serif;color: #000000;width: 600px;margin: auto;clear: both;">
<table width="600px" style="border: 7px solid grey;">
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><img src="<?php print $img_url?>endo_logo.png" style="width: 330; height: 142;"></img></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:5px;font-size:16pt;font-weight:bold">THE ENDOCRINE SOCIETY</td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:5px;font-style:italic">certifies that</td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:5px;font-weight: bold; text-decoration:underline"><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:5px;font-style:italic">has participated in the enduring material titled</td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:10px;font-weight: bold;"><?php print $certificate['course_title'] ?></td>
          </tr>              
          <tr>
            <td align="center" colspan="2" style="padding-top:10px;font-style:italic">on <?php print $date_earned ?>. <br/>This activity was designated for <?php print $certificate['creditearned'].$pratext?>.</td>
          </tr>   
          <tr>
            <td align="center" colspan="2" style="padding-top:15px;font-style:italic">            
            The Endocrine Society is accredited by the Accreditation Council for Continuing Medical Education to provide continuing medical education for physicians.
            The Endocrine Society designates this enduring material for a maximum of <?php print $certificate['amapracat1'].$pratext?>.
            Physicians should claim only the credit commensurate with the extent of their participation in the activity.
            </td>
          </tr>         
          <tr>
            <td align="center" style="width: 50%" > &nbsp;</td>
            <td align="center" style="padding-top:15px;">
              <img src="<?php print $img_url?>endo_signature.png" width="121px" height="59px"></img>
            </td>
          </tr>         
          <tr>
            <td align="center" style="width: 50%" >            	
            <br/>
						<br/>
						Washington, DC<br/>
            </td>
            <td align="center" valign="bottom" style="padding-left:20px;padding-bottom:10px;margin-bottom:0px">
              Wanda Johnson, CMP, CAE<br />
							Senior Director, Meetings &amp; Education<br />
							The Endocrine Society<br />
            </td>
          </tr>    
</table>
</div>
<script>print();</script>
</body>
