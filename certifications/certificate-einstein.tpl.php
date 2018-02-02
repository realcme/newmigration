<?php
if ($certificate['creditearned'] > 1) {
    $pratext = ' <i>AMA PRA Category 1 Credits&trade;</i>';
} else {
    $pratext = ' <i>AMA PRA Category 1 Credit&trade;</i>';
}
$img_url = $cert_img_url ? $cert_img_url : base_path() . path_to_theme() . '/img/';
$degree = $certificate['degree'];

if ($degree)
    $degree = ', ' . $degree;
$issue_date = strftime("%B %d, %Y", strtotime($certificate['dateearned']));

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"
	lang="<?php print $language; ?>" xml:lang="<?php print $language; ?>">

<head>
<title><?php print $head_title; ?></title>
</head>
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
</html>