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
<div style="font-size:10.0pt;font-family:Arial, Times, serif;color: #000000;clear: both;margin: auto;width: 600px;padding: 0px;">
<table width="600px" style="border: 4px solid black;">
         
          <tr>
            <td colspan="2" style="text-align:center;font-weight:bold; padding-bottom:20px"><span style="font-style:italic;">Continuing Professional Education</span><br /> Certificate of Attendance
            </td>
          </tr>   
          <tr>
            <td style="text-align:center;vertical-align: middle"><img src="<?php print $img_url?>and_logo.jpg" />
            </td>
            <td style="text-align:center;vertical-align: top;" >
            	<table>
            		<tr>
            			<td colspan="3" style="text-align: left;"><?php print $certificate['course_title'] ?></td>
            		</tr>
            		<tr>
            			<td colspan="3" style="text-align: left;border-top: 1px solid black;font-weight:bold;padding-bottom:10px">Session Title</td>
            		</tr>
            		<tr>
            			<td colspan="3" style="text-align: left;"><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></td>
            		</tr>
            		<tr>
            			<td colspan="3" style="text-align: left;border-top: 1px solid black;font-weight:bold;padding-bottom:10px">Participant Name</td>
            		</tr>
            		<tr>
            			<td style="">&nbsp;</td>
            			<td style="">&nbsp;</td>
            			<td style=""><?php print $certificate['@cdr_session_number'] ?>&nbsp;</td>
            		</tr>
            		<tr>
            			<td style="border-top: 1px solid black;font-weight:bold;padding-bottom:10px">RD/DTR ID Number</td>
            			<td style="">&nbsp;</td>
            			<td style="border-top: 1px solid black;font-weight:bold;padding-bottom:10px">Session Number</td>
            		</tr>
            		<tr>
            			<td style=""><?php print $certificate['dateearned'] ?></td>
            			<td style="">&nbsp;</td>
            			<td style="">&nbsp;</td>
            		</tr>
            		<tr>
            			<td style="border-top: 1px solid black;padding-bottom:10px">Date Completed</td>
            			<td style="">&nbsp;</td>
            			<td style="">&nbsp;</td>
            		</tr>
            		<tr>
            			<td style=""><?php print $certificate['creditearned'] ?></td>
            			<td style=""><?php print $certificate['@cdr_cpe_level'] ?>&nbsp;</td>
            			<td style=""><?php print $certificate['@cdr_learning_need_code'] ?>&nbsp;</td>
            		</tr>
            		<tr>
            			<td style="border-top: 1px solid black;padding-bottom:10px">CPEUs Awarded</td>
            			<td style="border-top: 1px solid black;padding-bottom:10px">CPE Level</td>
            			<td style="border-top: 1px solid black;padding-bottom:10px">Learning Need Code<sup>*</sup></td>
            		</tr>
            		<tr>
            			<td style="">&nbsp;</td>
            			<td colspan="2" style="padding-top: 5px"><img src="<?php print $img_url?>pgim_signature_2.png" />
            			
            			</td>
            		</tr>
            		<tr>
            			<td style="">&nbsp;</td>
            			<td colspan="2" style="border-top: 1px solid black;">
            			  Allison Hughes<br />
										Director of Operations<br />
										Postgraduate Institute for Medicine</td>
            		</tr>
            		
            		<tr>
            			<td></td>
            		</tr>
            	</table>
            </td>
          </tr>  
          <tr>
            <td colspan="2" style="text-align:left;">
							<span style="font-weight:bold">RETAIN ORIGINAL COPY FOR YOUR RECORDS.</span><br />
							<span style="font-style:italic">*Refer to your Professional Development Portfolio Learning Needs Assessment Form (Step 2)</span>
            </td>
          </tr>   
</table>
</div>
<script>print();</script>
</body>
