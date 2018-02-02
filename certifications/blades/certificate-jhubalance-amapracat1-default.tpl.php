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
            <td align="center" colspan="2" style="padding-top:5px"><img src="<?php print $img_url?>jhubalance_logo.gif"></img></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:15px">The Johns Hopkins University School of Medicine <br/>certifies that </td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><span style='font-size:14.0pt;font-weight: bold;'><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></span>
            </td>
          </tr>          
          <tr>
            <td align="left" colspan="2" style="padding-top:10px">has participated in the educational activity titled
                  <span style='font-weight:bold;'><?php print $certificate['course_title'] ?></span> on <?php print $certificate['dateearned']?>.
                  This activity was designated for <?php print $certificate['amapracat1'].$pratext?>.          
            </td>
          </tr>  
          <tr>
            <td align="left" colspan="2" style="padding-right:30px;padding-top:30px;padding-bottom:10px;margin-bottom:0px;">
                Release Date: <?php print $certificate['begin_date'] ?><br />
                Expiration Date:  <?php print $certificate['expiration_date'] ?><br />
            </td>      
          </tr>
          <tr>
            <td align="left" colspan="2" style="padding-right:30px;padding-top:20px;padding-bottom:10px;margin-bottom:0px;">
                <?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?><br />
                <?php print $certificate['address'] ?><br />
            </td>      
          </tr>
</table>
</div>
<script>print();</script>
</body>
