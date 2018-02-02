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
<div style="font-size:12.0pt;font-family:Times New Roman, Times, serif;color: #000000;clear: both;width: 600px;margin: auto;padding: 0px;">
<table style="border: 3px solid #000066">
  <tr>
    <td align="left" style="width: 125px"><img src="<?php print $img_url?>per_logo.gif" width="125px" height="94px" /></td>
    <td align="left" style="padding-top: 30px;padding-left:20px">
      <span style="font-size:28pt;font-weight: bold;">Certificate of Credit</span>
    </td>
  </tr>
  <tr>
    <td colspan="2" align="center" style="padding-top: 0px"><span style="font-size:18pt;font-weight: bold;font-style: italic;">Physicians' Education Resource</span></td>
  </tr>
  <tr>
    <td colspan="2" align="center" style="padding-top: 10px">certifies that</td>
  </tr>
  <tr>
    <td colspan="2" align="center" style="padding-top: 10px">
      <span style="font-size:22px; text-decoration:underline;"><?php print $certificate['fullname'] ?></span>
    </td>
  </tr>
  <tr>
    <td colspan="2" align="center" style="padding-top: 15px">
      has participated in the educational activity titled
    </td>
  </tr>
  <tr>
    <td colspan="2" align="center" style="padding-top: 15px">
      <span style="font-size:14pt;"><?php print $certificate['course_title'] ?> &mdash; <?php print $certificate['dateearned'] ?></span>
    </td>
  </tr>
  <tr>
    <td colspan="2" align="center" style="padding-top: 15px">
      and is awarded <?php print $certificate['creditearned'].$pratext ?> toward the AMA Physician's Recognition Award.
    </td>
  </tr>
  <tr>
    <td colspan="2" align="center" style="padding-top: 15px">
      <img src="<?php print $img_url?>per_signature.jpg" /><br />
      Director of CME
    </td>
  </tr>
  <tr>
    <td colspan="2" align="center" style="padding-top: 15px">
      Physicians' Education Resource<br />
      3535 Worth Street, Sammons Tower, Ste 4802<br />
      Dallas, TX 75246<br />
      214/818-7462
    </td>
  </tr>
</table>
</div>

<script>print();</script>	
</body>
