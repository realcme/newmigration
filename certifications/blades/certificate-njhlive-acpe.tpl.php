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
<div style="font-size:12.0pt;font-family:Arial, sans-serif;color: #000000;width: 626px;clear: both;">
<table width="600px">
          <tr>
            <td align="center" colspan="2" style="padding-top:0px"><img src="<?php print $img_url?>njh_logo.png"></img></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:15px;">You successfully completed the activity</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:20px;font-weight:bold"><?php print $certificate['course_title'] ?></td>
          </tr>  
          <tr>
            <td align="center" colspan="2" style="padding-top:20px;">
            Your NABP number and DOB (MM/DD) provided to us will be entered into the CPE Monitor within 2 weeks of this meeting’s conclusion, which will then show your awarded CPE credits in your NABP e-profile.</td>
          </tr>   
          <tr>
            <td align="center" colspan="2" style="padding-top:20px;font-size:11pt">
           You will also have the opportunity to receive additional credit by participating in an online follow-up activity. You will receive an email regarding this educational activity which will provide additional credits for CME, nursing CE and CPE.</td>
          </tr> 
</table>
</div>
<script>print();</script>
</body>
