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
<div style="font-size:11.0pt;font-family:Times New Roman, Times, serif;color: #000000;clear: both;width: 620px;margin: auto;padding: 0px;">
<table style="border: 1px solid #007EA3; border-collapse: separate;" width="620px">
  <tr>
    <td>
      <table width="100%" style="border: 3px solid #007EA3; border-collapse: separate;">
        <tr>
          <td>
            <table width="100%" style="border: 1px solid #007EA3; border-collapse: separate;">
                <tr>
                  <td align="center" colspan="2" style="padding-top:10px"><img src="<?php print $img_url ?>partners_logo.jpg"></img></td>
                </tr>          
                <tr>
                  <td align="center" colspan="2" style="padding-top:25px;">Partners HealthCare System is accredited by the Accreditation Council for Continuing Medical Education (ACCME) to provide continuing medical education for physicians.                  
                  </td>
                </tr>
                <tr>
                  <td align="center" colspan="2" style="padding:15px 10px 10px 10px;">Partners HealthCare System certifies that</td>
                </tr>          
                <tr>
                  <td align="center" colspan="2" style="padding-top:20px;font-weight:bold"><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?><?php print $degree?></td>
                </tr>          
                <tr>
                  <td align="center" colspan="2" style="padding-top:20px">has participated in the <?php print $ed?> titled</td>
                </tr>          
                <tr>
                  <td align="center" colspan="2" style="padding-top:10px"><span style='font-weight:bold;'><?php print $certificate['course_title'] ?></span></td>
                </tr>          
                <tr>
                  <td align="center" colspan="2" style="padding-top:15px"><?php print $certificate['@location']?> on <?php print $certificate['dateearned'] ?>         
                  </td>
                </tr>
                <tr>
                  <td align="center" colspan="2" style="padding-top:15px">This activity was designated for <?php print $certificate['creditearned'].$pratext ?>           
                  </td>
                </tr>
                <tr>
                  <td align="right" colspan="2" style="padding-top:35px;padding-bottom:20px">
                  <div style="width:300px;text-align:left;font-size:10pt">
                    <img src="<?php print $img_url ?>partners_signature.png"></img>	<br/>
                    Robert J. Birnbaum, MD, PhD<br/>
                    Director, Continuing Professional Development<br/>
                    Partners HealthCare System<br/>
                  </div>
                  </td>
                </tr>  
                <tr>
                  <td align="left" colspan="2" style="padding-top:15px;">
                  <div style="width:250px;text-align:left;font-size:8pt;color:#808080">
                    <span style="color:#B0B0B0;font-weight:bold">Partners HealthCare System<br/></span>
                    Office of Continuing Professional Development<br/>
                    100 Cambridge Street, 20th Floor<br/>
                    Boston, Ma 02114<br/>
                  </div>
                  </td>
                </tr>  
            </table>
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
</div>
<script>print();</script>
</body>
