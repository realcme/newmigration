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
<div style="font-size:12.0pt;font-family:Arial, Times, serif;color: #000000;width: 626px;clear: both;">
<table width="600px">
          <tr>
            <td align="left" colspan="2" style="padding-top:5px"><img src="<?php print $img_url?>nyu_logo.png"></img></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:30px;font-weight:bold">CERTIFICATE OF ATTENDANCE</td>
          </tr> 
          <tr>
            <td align="center" colspan="2" style="padding-top:30px;">The NYU Post-Graduate Medical School certifies that</td>
          </tr>        
          <tr>
            <td align="center" colspan="2" style="padding-top:20px;font-weight:bold"><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:20px;">has participated in <?php print $certificate['creditearned']?> hours of the enduring material titled</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:20px;font-weight:bold"><?php print $certificate['course_title'] ?></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:20px;">on <?php print $certificate['dateearned'] ?>. This activity was designated for <?php print $certificate['amapracat1'].$pratext?></td>
          </tr>   
          <tr>
            <td align="center" style="width:50%;padding-top:50px;padding-right:30px;padding-bottom:0px;margin-bottom:0px;">
             <img src="<?php print $img_url?>nyu_logo2.png"></img><br />
            </td>
            <td align="center" valign="bottom" style="width:50%;padding-left:20px;padding-bottom:0px;margin-bottom:0px">
              <img src="<?php print $img_url?>nyu_signature.jpg"></img><br />
              <span style='text-decoration:overline'>Norman Sussman, M.D. </span><br/>
              Associate Dean for<br />
              Post-Graduate Medical Programs
            </td>
          </tr>
          <tr>
              <td align="center" colspan="2" style="padding-top:40px">
              <div style='font-size:10.0pt;padding-bottom:0px;font-family:Times New Roman;color:#696969;text-align:left;padding-left:20px'>
              NYU Post-Graduate Medical School • Continuing Medical Education Department
              <br />
              545 First Avenue, New York, NY 10016 <br/>
              &bull; 212.263.5295 tel &bull; 212.263.5293 fax &bull; http://cme.med.nyu.edu
              </div>
            </td>
          </tr>          
</table>
</div>
<script>print();</script>
</body>
