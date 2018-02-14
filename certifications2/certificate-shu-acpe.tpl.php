<body>
<div style="font-size:11.0pt;font-family:Arial, Times, serif;color: #000000;width: 626px; margin:auto;clear: both;">
<table width="600px">
          <tr>
            <td align="center" style="padding-top:5px"><img src="<?php print $img_url?>shu_logo.png"></img></td>
            <td align="left" style="padding-top:5px">1775 N. Sector Court<br/>
                Winchester, VA 22601<br/>
                P: 540-665-1282<br/>
                F: 540-665-1283<br/>
                pharmacy.su.edu<br/>
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="font-size:14.0pt;font-weight: bold;padding-top:25px">Continuing Pharmacy Education Activity Transcript
              <hr style="border: 0;color: #000000;background-color: #000000;height:1px;width: 90%;" />
            </td>
          </tr>    
          <tr>
            <td align="left" colspan="2" style="padding-top:15px"><?php print $certificate['firstname'] ?> 
            <?php print $certificate['lastname'] ?><br/>
            <?php print $certificate['address']?><br/>
            NABP ID: <?php print $certificate['state_license_number']?><br/>
            Birth Month/Day: <?php print str_pad($certificate['birth_month'],2,"0", STR_PAD_LEFT)?>/<?php print str_pad($certificate['birth_day'],2,"0", STR_PAD_LEFT)?><br/>
            </td>
          </tr>   
          <tr>
            <td align="left" colspan="2" style="padding-top:10px"><span style="font-weight:bold">COMPLETION DATE:</span><?php print $date?>
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:20px">
              <table width="100%" style="border: 1px solid #000;border-collapse:collapse">
                <tr style='padding-bottom:0px;font-weight:bold;vertical-align:top'>
                    <td style='border: 1px solid #000;padding:2px;'>UAN</td>
                    <td style='border: 1px solid #000;padding:2px;'>Title</td>
                    <td style='border: 1px solid #000;padding:2px;'>Type</td>
                    <td style='border: 1px solid #000;padding:2px;'>Hours</td>
                </tr>
                <tr style='padding-bottom:0px;vertical-align:top;'>
                    <td style='border: 1px solid #000;padding:2px;'><?php print $certificate['@uan']?></td>
                    <td style='border: 1px solid #000;padding:2px;'><?php print $certificate['course_title']?></td>
                    <td style='border: 1px solid #000;padding:2px;'><?php print $certificate['@uantype']?></td>
                    <td style='border: 1px solid #000;padding:2px;'><?php print $certificate['creditearned']?></td>
                </tr>
                </table>
            
            </td>
          </tr>               
          <tr>
            <td align="center" colspan="2" style="padding-top:20px">&nbsp;</td>
          </tr>  
          <tr>
            <td align="left" colspan="2" valign="top"><span style="font-weight:bold;font-style:italic">
              PLEASE NOTE: This transcript is for your reference only and does not constitute an official statement of credit. Your NABP ID, birth month/day, and appropriate UAN for pharmacist or technician will be uploaded to CPE Monitor by the end of October 2013. If an official statement of credit is required, please contact Alla Marks at amarks@su.edu.
            </span>
            </td>
          </tr>            
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><hr style="border: 0;color: #000000;background-color: #000000;height:1px;width: 90%;" /></td>
          </tr>        
          <tr>
            <td align="left" colspan="2" style="padding-top:20px;">
              <div>
                <div style="float: left; vertical-align: top; padding-right:5px"><img src="<?php print $img_url?>acpe_logo.png"></img></div>
                <div style="font-size:9.0pt;width: 520px; float: left; vertical-align: top; padding-right:5px">Shenandoah University Bernard J. Dunn School of Pharmacy is accredited by the Accreditation Council for Pharmacy Education as a provider of continuing pharmacy education.</div>
                </div>
            </td>
          </tr>     
</table>
</div>
<script>print();</script>
</body>
