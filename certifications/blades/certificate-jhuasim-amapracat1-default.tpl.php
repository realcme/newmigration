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
<div style="font-size:12.0pt;font-family:Arial, Times, serif;color: #000000;clear: both;margin: auto;width: 600px;padding: 0px;">
    <table style="width: 100%;">
            <tr>
              <td align="left" style="vertical-align: top;"><img src="<?php print $img_url?>jhuasim_logo.gif" style="width: 172px; height: 189px;"></img></td>
              <td align="center" style="vertical-align: top;"><span style='font-size:16.0pt;font-weight:bold;'>CERTIFICATE OF ATTENDANCE</span></td>
            </tr>
            <tr>
              <td align="left" colspan="2" style="padding-top:0px;vertical-align:top;font-size:10.0pt;">
              Office of Continuing Medical Education<br/>
              Johns Hopkins University School of Medicine<br/>
              Turner 20, 720 Rutland Avenue<br/>
              Baltimore, Maryland 21205-2195
              </td>
            </tr>          
            
            <tr>
              <td align="center" colspan="2" style="padding-top:10px"><span style='font-size:14.0pt;font-weight:bold;'>The Johns Hopkins University School of Medicine</span></td>
            </tr>    
            <tr>
              <td align="center" colspan="2" style="padding-top:5px">certifies that</td>
            </tr>          
            <tr>
              <td align="center" colspan="2" style="padding-top:15px"><span style='font-size:14.0pt; font-weight: bold;'><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></span></td>
            </tr>          
            <tr>
              <td align="left" colspan="2" style="padding-top:10px">has participated in the educational activity titled
              <span style='font-weight:bold;'><?php print $certificate['course_title'] ?></span>
              on <span style='font-weight:bold;'><?php print $certificate['dateearned'] ?></span>
              and is awarded <?php print $certificate['creditearned'].$pratext ?>
              </td>
            </tr>          
            <tr>
              <td align="left" colspan="2" style="padding-top:20px;font-size:10.0pt;">
                <ul>
                  <li>The Johns Hopkins University School of Medicine is accredited by the Accreditation Council for Continuing Medical Education to provide continuing medical education for physicians.</li>
                </ul>
              </td>
            </tr>
            <tr>
              <td align="left" colspan="2" style="padding-top:20px;padding-bottom:0px;font-size:10.0pt;">
Todd Dorman, M.D., FCCM<br/>
Associate Dean and Director for<br/>
Continuing Medical Education
              </td>
            </tr>         
    </table>
</div>
<script>print();</script>
</body>
