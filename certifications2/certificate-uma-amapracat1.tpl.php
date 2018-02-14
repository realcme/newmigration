<body>
<div style="font-size:12.0pt;font-family:Arial, Times, serif;color: #000000;width: 626px;clear: both;">
<table width="600px">
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><img src="<?php print $img_url?>uma_logo.png"></img></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:5px;font-size:16.0pt;">Ultimate Medical Academy</td>
          </tr>        
          <tr>
            <td align="center" colspan="2" style="padding-top:1px;">certifies that</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px;font-weight:bold"><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px;">has participated in the enduring web activity titled</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:2px;font-weight:bold"><?php print $certificate['course_title'] ?></td>
          </tr>               
          <tr>
            <td align="center" colspan="2" style="padding-top:2px;">and is awarded <br/> <?php print $amountearnerd.$pratext?></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px;">
              Date Completed: <?php print $certificate['dateearned'] ?><br/>
              Maximum Credits: <?php print $amountmax?><br/>
              Total Credits Reported:  <?php print $amountearnerd?>
              </td>
          </tr>            
          <tr>
            <td align="center" colspan="2" style="padding-top:15px;font-size:8.0pt">
            Ultimate Medical Academy is accredited by the Accreditation Council for Continuing Medical Education to provide continuing medical education for physicians.
            <br/><br/>
            Ultimate Medical Academy designates this enduring web activity for a maximum of <?php print $amountmax.$pratext?>. Physicians should only claim credit commensurate with the extent of their participation in the activity.
            </td>
          </tr>            
          <tr>
            <td align="center" colspan="2" style="padding-top:15px;">&nbsp;</td>
          </tr>   
          <tr>
            <td align="center" valign="bottom" style="width:50%;padding-left:20px;padding-bottom:0px;margin-bottom:0px">
              <img src="<?php print $img_url?>uma_signature1.png"></img><br />
              <div style="position:relative;bottom:0px">
              <span style='padding-bottom:0px;'>Nicole M. Anzuoni, Esq.</span><br />
              <span style='padding-top:0px;'>Director of CME, UMA</span>
              </div>
            </td>
            <td align="center" valign="bottom" style="width:50%;padding-left:20px;padding-bottom:0px;margin-bottom:0px">
              <img src="<?php print $img_url?>uma_signature2.png"></img><br />
              <div style="position:relative;bottom:0px">
              <span style='padding-bottom:0px;'>Kelly A. Kraines</span><br />
              <span style='padding-top:0px;'>Chief Learning Officer/VP, UMA </span>
              </div>
            </td>
          </tr>      
</table>
</div>
<script>print();</script>
</body>
