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
<div class="c11">
<center>
<table style="width:600px; height:100%;">
<tr>
<td colspan="3" class="c1"><img src="http://pahvirtualclinic.healthcourse.com/cms/sites/all/themes/zen/pahvirtualclinictheme/img/pahinsight_logo.png" alt="PAHINSIGHT Virtual Clinic" /></td>
</tr>
<tr>
<td colspan="3" class="c3"><?php print $certificate['firstname'] . ' ' . $certificate['lastname'];?></td>
</tr>
<tr>
<td colspan="3" class="c4">Rearden Health Partners certificates that the individual listed has participated in the learning activity titled:</td>
</tr>
<tr>
<td colspan="3" class="c5"><strong><?php print $certificate['course_title'];?></strong></td>
</tr>
<tr>
<td align="left" class="c6"><img src="<?php print $img_url;?>rhp_signature.png" alt="Jim Metropoulos" /></td>
<td class="c7"> </td>
<td class="c8"> </td>
</tr>
<tr>
	<td align="left" class="c9">Jim Metropoulos, MD<br />
	Chief Medical Officer<br />
	Rearden Health Partners<br /></td>
	<td class="c7"> </td>
	<td class="c10"> </td>
</tr>
<tr>
<td class="c2"><img style="width: 165px;" src="http://pahvirtualclinic.com/wp-content/uploads/2014/07/Rearden_Health_Partners_Logo.png" alt="Rearden Health Partners" /></td>
<td class="c2"><img style="width: 165px;" src="http://pahvirtualclinic.com/wp-content/uploads/2014/07/UT-Logo.png" alt="United Theraputics" /></td>
<td class="c2"><img style="width: 165px;" src="http://pahvirtualclinic.com/wp-content/uploads/2014/08/Remodulin_Small-logo.jpg" alt="Remodulin" /></td>

</tr>
</table>
</center>
</div>
</body>
