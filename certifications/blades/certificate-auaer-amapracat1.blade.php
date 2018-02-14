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
<div style="font-size:10.0pt;font-family:Times New Roman, Times, serif;color: #1D2A63;clear: both;width: 620px;margin: auto;padding: 0px;">
<table cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="3" valign="bottom" align="center"  style="width: 609px;margin: 0px;padding: 0px; height: 67px;line-height: 0px">
      <img src="<?php print $img_url?>auaer_border_top.png" width="609px" height="68px"></img>
    </td>
  </tr>
  <tr>
    <td valign="top" align="right" style="width: 52px;padding: 0px 0px 0px 0px; line-height: 0px">
      <img src="<?php print $img_url?>auaer_border_left.png" width="52px" height="588px"></img>
    </td>
    <td valign="top" align="center" style="width: 505px;">
    
<table>
          <tr>
            <td align="center" colspan="2" style="padding-top:0px; font-size:18pt">Certificate of Credit</td>
          </tr>           
          <tr>
            <td align="center" colspan="2" style="padding-top:10px">The American Urological Association Education &amp; Research, Inc. certifies that
            </td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><span style='font-weight: bold;'><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></span>
            </td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px;">has participated in the enduring material titled</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px; font-style: italic"><?php print $certificate['course_title'] ?></td>
          </tr>          
          <tr>          
            <td align="center" colspan="2" style="padding-top:10px;">on  <?php print $certificate['dateearned'] ?><br/><br/>
              and is awarded <?php print $certificate['amapracat1'].$pratext ?>.      
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:5px;padding-bottom:0px;font-size: 8pt">
            Physicians should claim only the credit commensurate with the extent of their participation in the activity.<br/><br/>
            <?php if ($certificate['amapracat1']) { ?>
            <span style="font-weight: bold;">Accreditation</span><br/>
            The American Urological Association Education and Research, Inc. is accredited by the Accreditation Council for Continuing Medical Education (ACCME) to provide continuing medical education for physicians.
						<br/><br/>
						<?php } ?>
            <?php if ($certificate['aafp']) { ?>
						<span style="font-weight: bold;">American Academy of Family Physicians</span><br/>
						This Enduring Material activity, Primary Care Update in Urology, has been reviewed and is acceptable for up to <?php print $certificate['aafp']?> Prescribed credit(s) 
						by the American Academy of Family Physicians. AAFP certification begins <?php print $d?>. 
						Term of approval is for one year from this date with the option of yearly renewal. 
						Physicians should claim only the credit commensurate with the extent of their participation in the activity.
						<?php } ?>
 						</td>
          </tr>  
          <tr>
            <td align="center" colspan="2" style="padding-top:5px;padding-bottom:0px; font-size:8pt;">
            	<table>
            		<tr>
									<td style="padding-left: 10px;text-align: left"><img src="<?php print $img_url?>auaer_signature1.png"></img><br/>
									Elspeth M. McDougall, MD, FRCSC, MHPE<br/>
									Chair, Education Council</td>
									<td  style="padding-left: 10px;text-align: left"><img src="<?php print $img_url?>auaer_signature2.png"></img><br/>
									Sheila Stark, PhD<br/>
									Director, Office of Education<br/>
									</td>            		
            		</tr>
            	</table>
            
            
            </td>      
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:0px;padding-bottom:0px; font-size: 10pt;">
            	<img src="<?php print $img_url?>auaer_logo.png"></img>
            </td>      
          </tr>
</table>

    </td>
    <td valign="top" align="left" style="width: 52px;padding: 0px 0px 0px 0px; line-height: 0px">
      <img src="<?php print $img_url?>auaer_border_right.png" width="52px" height="588px"></img>
    </td>
  </tr>
  <tr>
    <td colspan="3" valign="top" align="center"  style="width: 609px;margin: 0px;padding: 0px; height: 69px;line-height: 0px">
      <img src="<?php print $img_url?>auaer_border_bottom.png" width="609px" height="69px"></img>
    </td>
  </tr>
</table>
</div>
<script>print();</script>
</body>
