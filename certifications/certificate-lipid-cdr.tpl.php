<?php
$pratext = ' <i>AMA PRA Category 1 Credit(s)&trade;</i>';
$img_url = $cert_img_url ? $cert_img_url : base_path().path_to_theme().'/img/';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language; ?>" xml:lang="<?php print $language; ?>">

<head>
  <title><?php print $head_title; ?></title>
</head>
<body>
<div style="font-size:10.0pt;font-family:Arial, Times, serif;color: #000000;clear: both;margin: auto;width: 600px;padding: 0px;">
<table width="600px" style="border: 4px solid black;">
          <tr>
            <td style="text-align:center;vertical-align: top;padding-top: 10px;"><img src="<?php print $img_url?>and_logo.jpg" />
            </td>
            <td style="text-align:center;vertical-align: top;padding-top: 10px;" >
            	<table>
            		<tr>
            			<td colspan="3" style="text-align: center;font-weight:bold">Continuing Professional Education Certificate of Attendance<br/>
            			- Attendee Copy -
            			</td>
            		</tr>
            		<tr>
            			<td colspan="3" style="text-align: left;">
            			  <table>
            			    <tr>
            			      <td>Participant Name:</td>
            			      <td style="border-bottom: 1px solid black;"><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></td>
            			    </tr>
            			  </table>
            			</td>
            		</tr>
            		<tr>
            			<td colspan="3" style="text-align: left;">
            			  <table>
            			    <tr>
            			      <td>Registration Number:</td>
            			      <td style="border-bottom: 1px solid black;"><?php print $certificate['state_license_number'] ?></td>
            			    </tr>
            			  </table>
            			</td>
            		</tr>
            		<tr>
            			<td colspan="3" style="text-align: left;">
            			  <table>
            			    <tr>
            			      <td style="vertical-align: bottom">Activity&nbsp;Title:</td>
            			      <td style="border-bottom: 1px solid black;"><?php print $certificate['course_title'] ?></td>
            			    </tr>
            			  </table>
            			</td>
            		</tr>
            		<tr>
            			<td colspan="3" style="text-align: left;">
            			  <table>
            			    <tr>
            			      <td>Activity Number:</td>
            			      <td style="border-bottom: 1px solid black;"><?php print $certificate['@cdr_session_number'] ?></td>
            			    </tr>
            			  </table>
            			</td>
            		</tr>
            		<tr>
            			<td colspan="3" style="text-align: left;">
            			  <table>
            			    <tr>
            			      <td>Date Completed:</td>
            			      <td style="border-bottom: 1px solid black;"><?php print $certificate['dateearned'] ?></td>
            			    </tr>
            			  </table>
            			</td>
            		</tr>
            		<tr>
            			<td colspan="3" style="text-align: left;">
            			  <table>
            			    <tr>
            			      <td>Number of CPEUs Awarded:</td>
            			      <td style="border-bottom: 1px solid black;"><?php print $certificate['creditearned'] ?></td>
            			    </tr>
            			  </table>
            			</td>
            		</tr>
            		<tr>
            			<td colspan="3" style="text-align: left;">
            			  <table>
            			    <tr>
            			      <td><sup>*</sup>Learning Need Code(s):</td>
            			      <td style="border-bottom: 1px solid black;"><?php print $certificate['@cdr_learning_need_code'] ?></td>
            			      <td style="padding-left: 30px">CPE Level:</td>
            			      <td style="border-bottom: 1px solid black;"><?php print $certificate['@cdr_cpe_level'] ?></td>
            			    </tr>
            			  </table>
            			</td>
            		</tr>
            		<tr>
            			<td colspan="3" style="text-align: right;">
            			  <table width="100%">
            			    <tr>
            			      <td style="text-align: right;">Provider Code:</td>
            			      <td style="text-align: center;border-bottom: 1px solid black;">NL002</td>
            			    </tr>
            			  </table>
            			</td>
            		</tr>
            		
            		<tr>
            			<td></td>
            		</tr>
            	</table>
            </td>
          </tr>
          <tr>
            <td colspan="2" style="text-align:left;">
            <img src="<?php print $img_url?>lipid_signature_3.jpg" />  <br/>
            <span style="font-weight:bold">Provider Signature</span>
            </td>
          </tr>     
          <tr>
            <td colspan="2" style="text-align:right;">
							<span style="font-weight:bold">RETAIN ORIGINAL COPY FOR YOUR RECORDS.</span><br />
							<span style="font-style:italic">*Refer to your Professional Development Portfolio Learning Needs Assessment Form (Step 2)</span>
            </td>
          </tr>   
</table>
</div>
<script>print();</script>
</body>
</html>