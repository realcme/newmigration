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
<div style="font-size:10.0pt;font-family:verdana, arial, sans-serif;color: #000000;clear: both;width: 600px;margin: auto;padding: 0px;">
<table width="600px">
          <tr>
            <td align="center" colspan="2" style="padding-top:5px">
            <img src="<?php print $img_url?>umaryland_logo.jpg" style="width: 353px; height: 100px;"></img>
            </td>
          </tr>  
          <tr>
            <td align="center" colspan="2" style="padding-top:30px;font-weight:bold;">CERTIFICATE OF ATTENDANCE</td>
          </tr>
          <tr>
            <td align="left" colspan="2" style="padding-top:30px">
            The University of Maryland School of Medicine certifies that <span style='font-weight:bold;'><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></span>
            has participated in the enduring material titled <span style='font-weight:bold;'><?php print $certificate['course_title'] ?></span> on <?php print $certificate['dateearned'] ?>.
            The activity was designated for <?php print $certificate['amapracat1'] ?> <?php print $pratext?>.
            </td>
          </tr>
          <tr>
            <td align="left" colspan="2" style="padding-top:30px">The University of Maryland School of Medicine is accredited by the Accreditation Council for Continuing Medical Education to provide continuing medical education for physicians.</td>
          </tr>
          <tr>
            <td align="left" style="padding-top:35px;padding-left:10px;width:40%;vertical-align:top;">
              <span style='font-weight:bold;'><?php print $certificate['@director'] ?></span><br/>
              <span style='font-size:8pt;'>Activity Director</span>
            </td>
            <td align="left" style="padding-top:35px;padding-left:10px;width:60%;vertical-align:top;">
              <span style='font-weight:bold;'>Nancy R. Lowitt, MD</span><br/>
              <span style='font-size:8pt;'>Associate Dean<br/>
              Office of Faculty Affairs and Professional Development</span>
            </td>
            </tr>
          
          
          
</table>
</div>
<script>print();</script>
</body>
