<body>
<div style="font-size:10.0pt;font-family:Arial, Times, serif;color: #000000;clear: both;margin: auto;width: 600px;padding: 0px;">
<table width="600px" style="border: 4px solid black;">
         
          <tr>
            <td colspan="2" style="text-align:center;font-weight:bold; padding-bottom:20px;">
              Continuing Professional Education Certificate of Attendance <br/>
              -- Attendee Copy --
            </td>
          </tr>   
          <tr>
            <td style="text-align:center;vertical-align: top"><img src="<?php print $img_url?>and_logo2.jpg" />
            </td>
            <td style="text-align:center;vertical-align: top;" >
            	<table>
            		<tr>
            			<td style="text-align: left;vertical-align:top;padding-right:20px">Participant Name:</td>
            			<td style="text-align: left;vertical-align:top;border-bottom: 1px solid black;font-weight:bold;"><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></td>
            			</tr>
              </table>
            	<table>
            		<tr>
            			<td style="text-align: left;vertical-align:top;padding-right:20px">RD/RDN/DTR Number:</td>
            			<td style="text-align: left;vertical-align:top;border-bottom: 1px solid black;font-weight:bold;"></td>
            			</tr>
              </table>
            	<table>
            		<tr>
            			<td style="text-align: left;vertical-align:top;padding-right:20px">Session Title:</td>
            			<td style="text-align: left;vertical-align:top;border-bottom: 1px solid black;font-weight:bold;"><?php print $certificate['course_title'] ?></td>
            			</tr>
              </table>
            	<table>
            		<tr>
            			<td style="text-align: left;vertical-align:top;padding-right:20px">Session Number:</td>
            			<td style="text-align: left;vertical-align:top;border-bottom: 1px solid black;font-weight:bold;"><?php print $certificate['@cdr_session_number'] ?></td>
            			</tr>
              </table>
            	<table>
            		<tr>
            			<td style="text-align: left;vertical-align:top;padding-right:10px">Date Completed:</td>
            			<td style="text-align: left;vertical-align:top;border-bottom: 1px solid black;font-weight:bold;"><?php print $certificate['dateearned'] ?></td>
            			<td style="text-align: left;vertical-align:top;padding-left:20px;padding-right:10px">CPEU's Awarded:</td>
            			<td style="text-align: left;vertical-align:top;border-bottom: 1px solid black;font-weight:bold;"><?php print $certificate['creditearned'] ?></td>
            			</tr>
              </table>
              <table>
            		<tr>
            			<td style="text-align: left;vertical-align:top;padding-right:10px">Learning Need Code:</td>
            			<td style="text-align: left;vertical-align:top;border-bottom: 1px solid black;font-weight:bold;"><?php print $certificate['@cdr_learning_need_code'] ?></td>
            			<td style="text-align: left;vertical-align:top;padding-left:20px;padding-right:10px">CPE Level:</td>
            			<td style="text-align: left;vertical-align:top;border-bottom: 1px solid black;font-weight:bold;"><?php print $certificate['@cdr_cpe_level'] ?></td>
            			</tr>
              </table>
            </td>
          </tr>  
          <tr>
            <td colspan="2" style="text-align:left;font-weight:bold; padding-bottom:20px;">
            <img src="<?php print $img_url?>pgim_signature_2.png" /><br/>
            			  Allison Hughes<br />
										Director of Operations<br />
										Postgraduate Institute for Medicine
            </td>
          </tr>             
          <tr>
            <td colspan="2" style="text-align:right;">
							<span style="font-size:8pt">RETAIN ORIGINAL COPY FOR YOUR RECORDS.</span><br />
							<span style="font-size:8pt;font-style:italic">*Refer to your Professional Development Portfolio Learning Needs Assessment Form (Step 2)</span>
            </td>
          </tr>   
</table>
</div>
<script>print();</script>
</body>
