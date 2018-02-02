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
<div class="c12">
<table width="600px">
<tr>
<td colspan="3" class="c1">
  <?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?><?php print $degree ?><br/>
  <?php print $certificate['address'] ?>
</td>
</tr>
<tr>
<td colspan="3" class="c2"><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></td>
</tr>
<tr>
<td colspan="3" class="c3">has participated in the educational activity titled</td>
</tr>
<tr>
<td colspan="3" class="c4"><?php print $certificate['course_title'];?> </td>
</tr>
<tr>
<td colspan="3" class="c5">on <?php print $date; ?></td>
</tr>
<tr>
<td></td>
</tr>
<tr>
<td colspan="3" class="c6">Annenberg Center for Health Sciences at Eisenhower is accredited as a provider of<br />
continuing nursing education by the American Nurses Credentialing Center's<br />
Commission of Accreditation.<br />
<?php print $certificate['ancc'];?> contact hour(s) may be earned for successful completion of this activity.<br />
<?php if ($certificate['pharmacology'] > 0) { ?>
            For the advanced practice nurse, this activity has <?php print $certificate['pharmacology']?> contact hours of pharmacotherapy content.  <br /><br />
<?php } ?>
<br /></td>
</tr>
<tr>
<td align="left" class="c7"><img src="<?php print $img_url;?>anbrg_signature.png" alt="Charles E. Willis" /></td>
<td class="c8"> </td>

<td class="c9"> </td>
</tr>
<tr>
<td align="left" class="c10">Charles E. Willis, MBA<br />
Director, Continuing Education<br /></td>
<td class="c8"> </td>
<td class="c11">Participants Signature</td>
</tr>
</table>
</div>
<script type="text/javascript">
//<![CDATA[
print();
//]]>
</script>
</body>
