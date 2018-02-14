<body>
<div style="font-size:12.0pt;font-family:verdana, arial, sans-serif;color: #000000;width: 626px;clear: both;">
<table width="600px">
          <tr>
            <td align="center" colspan="2" style="padding-top:25px;font-size:18pt;">Med Learning Group</td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:5px;">certifies that</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px;font-weight:bold"><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px;">has participated in the enduring activity titled</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:3px;font-weight:bold"><?php print $certificate['course_title'] ?></td>
          </tr>   
          <tr>
            <td align="center" colspan="2" style="padding-top:3px;">and is awarded <br/> <?php print $amapracat1.$pratext?></td>
          </tr>         
          <tr>
            <td align="center" colspan="2" style="padding-top:20px;">
              Date Completed: <?php print $certificate['dateearned']; ?><br/>
              Maximum Credits: <?php print $amapracat1;?><br/>
              Total Credits Reported: <?php print $creditearned ;?>
           </td>
          </tr>       
          <tr>
            <td align="center" colspan="2" style="padding-top:15px;font-size:8.0pt">
Med Learning Group is accredited by the Accreditation Council for Continuing<br/>
Medical Education to provide continuing medical education for physicians
                        <br/><br/>
Med Learning Group designates this enduring activity for <br/>
a maximum of <?php print $amapracat1.$pratext?>. <br/>
Physicians should only claim credit commensurate with the extent of their participation in the activity.
            </td>
          </tr>  
          <tr>
              <td align="center" style="padding-top:25px;font-size:8pt;width:50%">
              <img src="<?php print $img_url?>mlg_logo3.jpg" width="200"></img>
              </td>
              <td align="center" style="padding-top:25px;font-size:8pt;">
              <img src="<?php print $img_url?>mlg-lauren-welch-signature.png"></img>
              <div style="text-align:center;width:200px">
                Lauren Welch<br/>
                VP of Outcomes and Accreditation<br/>
                Med Learning Group<br/>
                </div>
            </td>
          </tr>          
</table>
</div>
<script>print();</script>
</body>
