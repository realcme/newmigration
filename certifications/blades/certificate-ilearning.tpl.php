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
<table width="600px" style="border: 4px solid #404040;">
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><span style='font-size:14.0pt;'> iLearning Certificate of Completion </span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><span style='font-size:14.0pt;font-weight: bold;'><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></span>
            </td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><span style='font-style:italic;'>has participated in the educational activity titled</span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><span style='font-weight:bold;'><?php print $certificate['course_title'] ?></span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px">on  <?php print $certificate['dateearned'] ?>.           
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:0px;padding-bottom:0px">&nbsp;</td>
          </tr>  
          <tr>
            <td align="left" colspan="2" style="padding-right:30px;padding-top:20px;padding-bottom:10px;margin-bottom:0px;font-weight: bold;">
              Certificate ID: <?php print $certificate['refid'] ?>
            </td>      
          </tr>
</table>
</div>
<script>print();</script>
</body>
