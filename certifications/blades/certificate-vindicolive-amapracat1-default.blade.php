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
<body style="padding: 0; margin: 0;">
  <div style="font-size:11.0pt;font-family: Times, serif;width: 600px;margin: auto; text-align: center;">
    <div style="width: 100%;">
      <div class="content" style="width:100%">
        <h3>Participation Certificate</h3>
	<p>This continuing medical education activity is provided by</p>
        <img src="<?php print $img_url;?>vindico_logo.png" alt="Vindico" />
        <p>This is to certify that</p>
        <h3><?php print $certificate['firstname'];?> <?php print $certificate['lastname'];?></h3>
	<p>has participated in the educational activity</p>
	<h4><?php print $certificate['course_title'];?></h4>
	<p>On</p>
	<h4><?php print $issue_date;?></h4>
	<p>and has been awarded <?php print $certificate['creditearned'];?> <i>Participation Credit(s).</i></p>

	<p style="margin-top:30px;">Vindico Medical Education is accredited by the Accreditation Council for Continuing Medical Education to provide coninuing medical education for physicians.</p>
	<p>Vindico Medical Education designates this live activity for a maximum of <?php print $certificate['amapracat1'];?> <i>AMA PRA Category 1 Credit(s)&trade;</i>. Physicians should claim only the credit commensurate with the extent of their participation in the activity.</p>
	<p>Thank you for your participation in this educational activity. We have received and scored your quiz, and you have achieved a passing grade.</p>
	<p style="margin-top:30px;"><?php print strtoupper($certificate['firstname']);?> <?php print strtoupper($certificate['lastname']);?> <br/> <?php print strtoupper($certificate['address']); ?></p>
	<p style="font-size:10px; margin-top: 30px;">Vindico Medical Education &bull; 6900 Grove Road, Bldg. 100 &bull; Thorofare, NJ 08086 &bull; (856)994-9400</p>
    </div>
  </div>
</div>
</body>
