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
<div style="font-size:12.0pt;font-family:'Times New Roman', Times, serif;color: #000000;clear: both;margin: 0px;padding: 0px;">
  <div style="position: absolute; top: 0px; left:0px; padding: 10px">
<table style="border: 5px solid #333399; width:580px; height:347px; padding:10px;">
<tr>
<td align="center">
        <img src="<?php print $img_url; ?>einstein_logo.png"></img>
        <p style="margin-top:-110px; margin-bottom:60px; text-align:center">
        <?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?><?php print $degree?>
        <br /><br />
        </p>
			<?php print $certificate['course_title'] ?>
			<br />
			at www.realcme.com
			<br />
			on <?php print $issue_date ?>.  This activity was designated for
			<br />
			<?php print $certificate['creditearned'].$pratext ?>.
			<br />
			AAPA accepts certificates of participation for educational activities certified for AMA PRA Category <?php print $certificate['creditearned']?> Credit&trade; 
			from organizations accredited by ACCME. Physician assistants may receive a maximum of <?php print $certificate['aapa']?> hours of Category I credit for 
			completing this program.
			<br />
       <div style="width:200px; float:right; padding-right: 30px">
                        <img src="<?php print $img_url; ?>einstein_signature.gif"></img>
                        <br />
                        Victor B. Hatcher, Ph.D.,
                        <br />
                        Associate Dean
        </div>
</td>
</tr>
</table>
        <div style="color:#333399;font-size:8pt;padding-left:30px">Visit our web page at www.mecme.org</div>
        </div>
</div>
<script>print();</script>
</body>
