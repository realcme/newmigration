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
<div style="font-size:12.0pt;font-family:Georgia, 'Times New Roman', Times, serif;color: #000000;clear: both;width: 600px;margin: auto;padding: 0px;">

<table width="600px" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center" style="padding-bottom: 20px"><img src="<?php print $img_url?>pmd_seal.gif" width="122px" height="122px"></img></td>
	</tr>
  <tr>
  	<td height="12px" align="center" bgcolor="#8094a8"></td>
  </tr>
  <tr>
    <td align="center" width="100%">
      <table>
        <tr>
          <td colspan="2" align="center" style="padding-top:10px; font-style: italic;">Pri-Med Institute certifies that</td>
        </tr>
        <tr>
          <td align="left" style="width:10%;vertical-align:top;padding-top:10px; font-weight: bold;">Name:</td>
          <td align="left" style="vertical-align:top;padding-top:10px;"><?php print $certificate['fullname'] ?></td>
        </tr>
        <tr>
          <td colspan="2" align="center" style="padding-top:10px; font-style: italic;">has participated in the educational activity titled</td>
        </tr>
        <tr>
          <td align="left" style="vertical-align:top;width:10%;padding-top:10px; font-weight: bold;">Title:</td>
          <td align="left" style="vertical-align:top;padding-top:10px;"><?php print $certificate['course_title'] ?></td>
        </tr>
        <tr>
          <td align="left" style="width:10%;vertical-align:top;padding-top:10px; font-weight: bold;">On:</td>
          <td align="left" style="vertical-align:top;padding-top:10px; "><?php print $certificate['dateearned'] ?></td>
        </tr>
        <tr>
          <td colspan="2" align="center" style="padding-top:10px; font-style: italic;">The activity was designated for <?php print $certificate['amapracat1'].$pratext ?></td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td align="right" style="padding-top:10px; font-size: 10pt">
      <div style="text-align: left; width: 310px">
      <img src="<?php print $img_url?>pmd_signature.gif" width="301px" height="44px"></img><br />
      Marissa Seligman, PharmD<br />
      Chief Clinical &amp; Regulatory Affairs Officer and SVP<br/>
      Pri-Med Institute
      </div>
    </td>
  </tr>
	<tr>
		<td align="center" style="padding-top:10px;">
			<img src="<?php print $img_url?>pmd_logo.gif" width="211px" height="64px"></img>
    </td>
  </tr>
  <tr>
    <td align="center" style="padding-top:10px;font-size: 10pt">
			c/o M|C Communications, LLC - 101 Huntington Ave - Boston, MA  02199<br />
			<span style="font-weight: bold;">Tel.</span> 617.406.4000  
      <span style="font-weight: bold;">Fax.</span> 617.406.4100
      <span style="font-weight: bold;">Web.</span> pri-med.com
    </td>
  </tr>
  <tr>
    <td align="center" style="padding-top:15px;font-size: 10pt">We value your feedback. <a href="mailto:support@pri-med.com?subject=Epocrates Qualitative Comments">Email Pri-Med</a> to share your thoughts on this Pri-Med/Epocrates activity. Please reference the activity name in your email.
		</td>
  </tr>
</table>
</div>
<script>print();</script>
</body>
