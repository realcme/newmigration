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
        <img src="<?php print $img_url;?>uLouiville_logo.png" alt="University of Louisville"/>
        <p>This document certifies that</p>
        <h3><?php print $certificate['firstname'];?> <?php print $certificate['lastname'];?></h3>
	<p>On <?php print $issue_date;?> the individual listed above successfully completed the University of Louisville Continuing Medical Education &amp; Professional Development course listed below:</p>
	<h3 style="margin-bottom:0"><?php print $certificate['course_title'];?></h3>
	<p style="margin:0">Louisville KY</p>
        <img src="<?php print $img_url;?>uLouiville_signature.png" alt="W. Daniel Cogan, Ed.D." />
        <p>W. Daniel Cogan, Ed.D., Assistant Dean<br>Continuing Medical Education &amp; Professional Development</p>
	<p>**********************************************************</p>
	<h3>CERTIFICATE OF ATTENDANCE</h3>
        <p>This document certifies that the individual listed above has successfully completed a University of Louisville Continuing Medical Education &amp; Professional Development course, which was designated for up to claimed <b><?php print $certificate['creditclaimed'];?> contact hours</b> of Nursing Credit.</p>
	<br>
	<p>The University of Louisville School of Medicine's Continuing Medical Education &amp; Professional Development office is accredited by the Accreditation Council for Continuing Medical Education to provide continuing medical education for physicians.</p>
        <h4 style="text-transform:uppercase">please print and/or save this document and keep it on file for purposes of audit, or file it with your licensure board if required.</h4>
    </div>
  </div>
</div>
</body>
