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
  style="font-size: 12.0pt; font-family: Times New Roman, Times, serif; color: #000000; clear: both; width: 600px; margin: auto; padding: 0px;">

<table
  style="border-width: 3px; border-spacing: 2px; border-style: double; border-color: gray; border-collapse: separate;"
  width="600px">
  <tr>
    <td align="center">

    <p style="font-style: italic; margin-top: 30px">This is to certify that</p>
    <p style="border-bottom: 1px black solid; width: 90%; margin: 20px 0;"><?php print $certificate['fullname'] ?></p>
    <p>has participated in the educational activity entitled</p>
    <p style="font-weight: bold;"><?php print $certificate['course_title'] ?></p>
    <p style="font-size: 12pt;">An Internet-based activity on</p>
    <p style="border-bottom: 1px black solid; width: 50%;"><?php print $certificate['dateearned'] ?></p>
    <p style="font-style: italic;">This educational activity was designated for a maximum of <br />
    <?php print $certificate['amapracat1'].$pratext ?>.<br />
    <br />
    SciMed is accredited by the Accreditation Council for Continuing
    Medical Education to provide continuing medical education for
    physicians.</p>
    <p style="text-align: right; padding-right: 10px"><img src="<?php print $img_url ?>scimed_signature.jpg" width="270px" height="80px" /><br />
      <?php print $certificate['dateearned'] ?></p>

    <img src="<?php print $img_url ?>scimed_logo.gif" />

    <p>SciMed 420 Lexington Ave, Suite 902 New York, NY 10170 <br />
    tel 212 &bull; 661 &bull; 8333 fax 212 &bull; 661 &bull; 8338</p>


    </td>
  </tr>
</table>
</div>
<script>print();</script>
</body>
