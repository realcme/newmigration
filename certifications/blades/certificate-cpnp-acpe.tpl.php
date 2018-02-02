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
<div style="font-size:11.0pt;font-family:Times New Roman,Times,serif;color: #000000;clear: both;width: 600px;margin: auto;padding: 0px;">
<table width="600px">
          <tr>
            <td align="left" colspan="2" style="padding-top:5px">
              <table>
                <tr>
                  <td align="left" width="50px" ><img src="<?php print $img_url?>cpnp_logo.png"></img></td>
                  
                  <td align="left" style="font-size:10pt;" > <span style='font-weight:bold;'>CPNP</span> <br/>
                      8055 O Street<br/>
                      Suite S113<br/>
                      Lincoln, NE 68510<br/>
                      Phone: 402-476-1677<br/>
                      Fax: 888-551-7617<br/>
                      Email: info@cpnp.org<br/>
                      Website: cpnp.org
                  </td>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td align="left" colspan="2" style="padding-top:5px;border: 1px solid black;">
              <table>
                <tr>
                  <td align="center" colspan="2" style="padding-top:10px;font-size:12pt;">Transcript of Continuing Pharmaceutical Education Credit</td>
                </tr> 
                <tr>
                  <td align="left" colspan="2" style="padding-top:10px">
                    Date Issued: <?php print $certificate['dateearned'] ?><br/><br/>
                    <strong><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></strong><br/>
                    <?php print $certificate['address'] ?> <br/>
                    Licence No: <?php print $certificate['state_license_number'] ?>
                  </td>
                </tr>  
                
                <tr>
                  <td align="center" colspan="2" style="padding-top:0px;padding-bottom:60px">
                    <table width="100%">
                      <tr style='font-size:10.0pt;padding-bottom:0px;font-weight:bold;vertical-align:top;'>
                          <td colspan="4">
                            <hr style="border: 0;color: #000000;background-color: #000000;height:2px;;margin:0px 0px 2px 0px" />
                            <hr style="border: 0;color: #000000;background-color: #000000;height:1px;margin:0px" />
                          </td>
                      </tr>
                      <tr style='font-size:10.0pt;padding-bottom:0px;vertical-align:top;'>
                          <td>ACPE#</td><td>Program Name</td><td>Program Date</td><td>Contact Hours</td>
                      </tr>
                      <tr style='font-size:10.0pt;padding-bottom:0px;font-weight:bold;vertical-align:top;'>
                          <td colspan="4"><hr style="border: 0;color: #000000;background-color: #000000;height:1px;;margin:0px" /></td>
                      </tr>
                      <tr style='font-size:10.0pt;padding-bottom:0px;vertical-align:top;'>
                          <td style='padding-left:3px;padding-right:3px'><?php print $certificate['@uan']?></td>
                          <td style='padding-left:3px;padding-right:3px'><?php print $certificate['course_title']?></td>
                          <td style='padding-left:3px;padding-right:3px'><?php print $certificate['dateearned']?></td>
                          <td style='padding-left:3px;padding-right:3px'><?php print $amountearned?></td>
                      </tr>
                      <tr style='font-size:10.0pt;padding-bottom:80px;vertical-align:top;'>
                          <td style='padding-left:3px;padding-right:3px'>&nbsp;</td>
                          <td style='padding-left:3px;padding-right:3px'><strong>TOTAL CONTACT HOURS</strong></td>
                          <td style='padding-left:3px;padding-right:3px'>&nbsp;</td>
                          <td style='padding-left:3px;padding-right:3px'><strong><?php print $amountearned?></strong></td>
                      </tr>
                    </table>
                  </td>
                </tr>
                
                <tr>
                  <td align="center" colspan="2" style="padding-top:0px">
                    <table width="100%">
                      <tr style='font-size:10.0pt;padding-bottom:0px;font-weight:bold;vertical-align:top;'>
                          <td colspan="4"><hr style="border: 0;color: #000000;background-color: #000000;height:1px;;margin:0px" /></td>
                      </tr>
                      <tr style='font-size:10.0pt;padding-bottom:0px;vertical-align:top;'>
                        <td colspan="2"><img src="<?php print $img_url?>acpe_logo.png"></img></td>
                        <td colspan="2">The College of Psychiatric and Neurologic Pharmacists is accredited by the Accreditation Council for Pharmacy Education as a provider of continuing pharmacy education.</td>
                      </tr>
                      <tr style='font-size:10.0pt;padding-bottom:0px;font-weight:bold;vertical-align:top;'>
                          <td colspan="4"><hr style="border: 0;color: #000000;background-color: #000000;height:1px;;margin:0px" /></td>
                      </tr>
                      <tr>
                        <td colspan="2">&nbsp;</td>
                        <td width="180px"><img src="<?php print $img_url?>cpnp_signature.png"></img></td>
                        <td align="center">Date signed: <?php print $certificate['dateearned'] ?></td>
                      </tr>
                      <tr style='font-size:10.0pt;padding-bottom:0px;font-weight:bold;vertical-align:top;'>
                          <td colspan="4"><hr style="border: 0;color: #000000;background-color: #000000;height:1px;;margin:0px" /></td>
                      </tr>
                      <tr style="font-size:8pt">
                        <td colspan="2"><img src="<?php print $img_url?>cpnp_logo_small.png"></img></td>
                        <td colspan="2">Mary C. Borovicka, Pharm.D., BCPS, BCPP <br/>
                          ACPE Continuing Pharmacy <br/>
                          Education Administrator <br/>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
            </table>
          </td>
        </tr>  
          
</table>
</div>
<script>print();</script>
</body>
