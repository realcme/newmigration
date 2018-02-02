<body>
<div style="font-size:12.0pt;font-family:Times New Roman, Times, serif;color: #000000;clear: both;width: 600px;margin: auto;padding: 0px;">
<table width="600px" style="border: 2px solid black;">
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><span style='font-size:32.0pt;'>AAPA</span></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><span style='font-size:24.0pt;'>Continuing Education Certificate</span></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:5px">This is to certify that</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><span style='font-size:14.0pt;font-weight: bold;'><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?><?php print $occupation ?></span>
            </td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px">completed the continuing education program entitled</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><span style='font-weight:bold;'><?php print $certificate['course_title'] ?></span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px">for a total of <?php print $certificate['creditearned'] ?> AAPA Category 1 CME credit.
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:25px;">
            Dorothy Caputo, MA, APRN, BC-ADM, CDE
            </td>
          </tr>  
          <tr>
            <td align="left" colspan="2" style="padding-top:20px;font-size: 10pt">
              <div style="float: left;"><img src="<?php print $img_url?>curatio_aapa_logo.jpg"></img></div>
              This program has been reviewed and is approved for a maximum of  <?php print $certificate['aapa'] ?>  hours of AAPA Category 1 CME credit by the Physician Assistant Review Panel. 
              Approval is valid for 1 year from the issue date of <?php print $releasedate ?>. 
              Participants may submit the self-assessment at any time during that period.<br/><br/>
              This program was planned in accordance with AAPA’s CME Standards for Enduring Material Programs and for Commercial Support of Enduring Material Programs.            </td>
          </tr> 
          <tr>
            <td align="center" colspan="2" style="padding-top:20px;padding-bottom:0px;font-weight:bold">
              EduPro Resources LLC<br/>
              490 South Laurel Avenue<br/>
              West Keansburg, NJ 07734 <br/>
            </td>
          </tr> 
</table>
</div>
<script>print();</script>
</body>
