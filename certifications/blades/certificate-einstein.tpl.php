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
	<div
		style="font-size: 12.0pt; font-family: 'Times New Roman', Times, serif; color: #000000; clear: both; margin: 0px; padding: 0px;">
		<div style="position: absolute; top: 0px; left: 0px; padding: 10px">
			<table
				style="border: 5px solid #333399; width: 580px; height: 347px; padding: 10px; color:#333399">
				<tr>
					<td align="center"><img style="width:580px;"
						src="<?php print $img_url; ?>ein_header_combined.png"></img>
						<div style="margin-top: -160px; text-align: center">
						
						
        						<span style="font-size: x-large;"><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></span>
						</div>
						<br />
						
						<h3 style="margin: 0; font-weight:0;">
							HAS SUCCESSFULLY COMPLETED THE <br />
							EDUCATIONAL ONLINE COURSE TITLED
						</h3>
						
                        <b style="font-size:x-large "><?php print $certificate['course_title'] ?></b>
                        <br />
                        
                        <div>at <a href="www.realcme.com/cms">patientcoach.com/cms</a></div>
                        
                        <br /> <br />
                        
                        <span style="font-size: large;"><?php print $issue_date; ?></span>
                        <br /> <br />
                        <br /> <br />



						<div style="width: 200px; float: right; padding-right: 30px; margin-top: -45px;">
							<img src="<?php print $img_url?>ein_com_sig.png"
								style="height: 70px; margin-top: -30px;"></img>
						</div>

                        <div style="color: #333399; font-size: 8pt; padding-left: 30px; float: left;">www.mecme.org</div>
                    </td>
				</tr>
			</table>

		</div>
	</div>
	<script>print();</script>
</body>
