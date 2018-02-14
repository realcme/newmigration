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
<table width="600px">
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><span style='font-weight:bold;font-style:italic;'>Epocrates MobileCME&trade;</span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><span style='font-weight:bold;'>The Johns Hopkins University School of Medicine</span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:5px">certifies that</td>
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
            <td align="center" colspan="2" style="padding-top:15px">and is awarded <?php print $certificate['creditearned'] ?> Credit Hour(s). 
             <span style="font-weight:bold;">Request by Physicians cannot exceed <?php print $certificate['amapracat1'].$pratext ?> </span> toward the Physician's Recognition Award.
            </td>
          </tr>
          <tr>
            <td align="left" colspan="2" style="padding-top:15px;">
              Release Date: <span style="font-weight:bold;"><?php print $certificate['begin_date'] ?></span><br />
              Expiration Date:  <span style="font-weight:bold;"><?php print $certificate['expiration_date'] ?></span>
            </td>
          </tr>
          <tr>
            <td align="left" colspan="2" style="padding-top:15px;font-weight:bold;">
              <?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?>, <?php print $certificate['professionlabel']?><br />
              <?php print $certificate['address'] ?>
            </td>
          </tr>
          <tr>
            <td align="left" colspan="2" style="padding-top:15px;">
                Todd Dorman, MD, FCCM<br />
                Associate Dean and Director of<br />
                Continuing Medical Education
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:0px;padding-bottom:0px">&nbsp;</td>
          </tr>  
          <tr>
            <td align="left" colspan="2" style="font-size: 10pt;">The Johns Hopkins University School of Medicine is accredited by the
              Accreditation Council for Continuing Medical Education to provide continuing medical education for physicians.
            </td>      
          </tr>
</table>
</div>
<script>print();</script>
</body>
