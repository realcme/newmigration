<body>
<div style="font-size:10.0pt;font-family:Arial, Times, serif;color: #000000;width: 626px; margin:auto;clear: both;">
<table width="600px">
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><img src="<?php print $img_url?>naccme_logo.png"></img></td>
          </tr>
          <tr>
            <td align="left" colspan="2" style="padding-top:20px"><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?><br/><?php print $certificate['address']?></td>
          </tr> 
          <tr>
            <td align="center" colspan="2" style="padding-top:20px">North American Center for Continuing Medical Education, LLC (NACCME) certifies that</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><strong><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></strong></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px">has participated in the educational activity titled</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><strong><?php print $certificate['course_title'] ?></strong></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><strong>on <?php print $certificate['dateearned'] ?></strong></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:25px">
              and is awarded <?php print $certificate['creditearned'].$pratext?><br/><br/>
              NACCME is accredited by the Accreditation Council for Continuing Medical Education to provide continuing medical education for physicians.<br/><br/>
              NACCME designates this educational activity for a maximum of <?php print $certificate['amapracat1'].$pratext?>.<br/><br/>
              Physicians should only claim credit commensurate with the extent of their participation in the activity. 
              This activity has been planned and produced in accordance with the ACCME Essential Areas and Policies.            
            </td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:25px">&nbsp;</td>
          </tr>   
          <tr>
            <td align="center" colspan="2" valign="bottom" style="padding-left:20px;padding-bottom:10px;margin-bottom:0px">
              <img src="<?php print $img_url?>naccme_signature.png"></img><br />
              <div style="position:relative;bottom:30px">
              <b><span style='padding-bottom:0px;font-weight:bold;'>John T. Savage, MS, CCMEP</span></b><br />
              <b><span style='padding-top:0px'>Director, Medical Education</span></b><br />
              </div>
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2">
              <div style="position:relative;bottom:2px">
              <span style='font-size:10.0pt;padding-bottom:0px;font-weight:bold;'>
              300 Rike Drive, Suite A • Millstone Township, NJ 08535 
              <br />Ph 609.371.1137 - Fx 609.371.2733
              </span>
               </div>
            </td>
          </tr>          
</table>
</div>
<script>print();</script>
</body>
