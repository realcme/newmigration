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
<div style="font-size:12.0pt;font-family:Arial, Times, serif;color: #000000;clear: both;width: 600px;margin: auto;padding: 0px;">
<table width="600px">
          <tr>
            <td align="center" colspan="2" style="padding-top:5px">
            <div style="float: left;"><img src="<?php print $img_url ?>tafp_logo.jpg" width="195px" height="185px" /></div></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:0px">
            <span style="font-size:14.0pt;font-weight: bold;"><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?><?php print $occupation?></span><br/>
            <span style="font-weight: bold;"><?php print $certificate['address'] ?> </span>
            </td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><span style='font-weight:bold;'>
            The Texas Academy of Family Physicians certifies that the above individual has participated in the educational activity titled 
            <?php print $certificate['course_title'] ?> on <?php print $certificate['dateearned'] ?>. 
            This activity was designated for <?php print $certificate['amapracat1'].$pratext ?>.</span>
            </td>
          </tr>          
          <tr>
            <td align="center" style="padding-top:0px;padding-bottom:0px"><br /><br />Please visit www.totalmeded.com for additional CME opportunities on fibromyalgia and a variety of other topics.</td>
            <td align="center" style="padding-top:0px;padding-bottom:0px;white-space: nowrap;">
            <img src="<?php print $img_url ?>tafp_signature.jpg" width="247px" height="131px" /><br />
            <span style="font-weight: bold">Clare A. Hawkins, MD</span><br /> 
            <span style="font-weight: bold;font-style: italic">Chair, TAFP Commission on Annual Session and CME</span>
            </td>
          </tr>
</table>
</div>
<script>print();</script>
</body>
