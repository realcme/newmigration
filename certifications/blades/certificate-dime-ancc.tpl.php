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
<div style="width: 600px;height: 146px;margin: auto;">
  <img src="<?php print $img_url?>dime_logo.png" style="width: 600px; height: 146px;"></img>
</div>
<div style="font-size:12.0pt;font-family:Arial, Times, serif;color: #000000;width: 600px;margin: auto;clear: both;">
<table width="600px">
          <tr>
            <td align="center" colspan="2" style="padding-top:5px">The Discovery Institute of Medical Education certifies that</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><span style='font-size:14.0pt; font-weight: bold'><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></span></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:5px">has successfully completed</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><span style='font-weight: bold;'><?php print $certificate['course_title'] ?></span></td>
          </tr>         
          <tr>
            <td align="center" colspan="2" style="padding-top:20px">for <?php print $certificate['creditearned'] ?> contact hours</td>
          </tr>         
          <tr>
            <td align="center" colspan="2" style="padding-top:10px">on <?php print $date ?></td>
          </tr>                 
          <tr>
            <td align="center" colspan="2" style="padding-top:15px">DIME is an approved provider of continuing nursing education by the Illinois Nurses Association, an accredited approver by the American Nurses Credentialing Center’s Commission on Accreditation.</td>
          </tr>              
          <tr>
            <td align="center" colspan="2" style="padding-top:0px;padding-bottom:10px">&nbsp;</td>
          </tr>         
          <tr>
            <td align="left" valign="bottom" style="padding-left:20px;padding-bottom:20px;margin-bottom:0px">
            <img src="<?php print $img_url?>dime_signature.jpg"></img><br />
            Meredith Herzog  (<?php print $date2 ?>)<br />
            Senior Manager, Certification Services<br />
            DIME<br />            
            </td>
            <td align="right" style="padding-top:15px"><span style='font-size:12.0pt;'>INA-CE Approval Number:<br/><?php print $certificate['@ina'] ?></span></td>
          </tr>
          <tr>
            <td align="left" colspan="2">
              <div style="position:relative;bottom:2px">
                <b><span style='font-size:10.0pt;'>Certificate ID: <?php print $certificate['refid'] ?></span></b><br />
               </div>
            </td>
          </tr>          
</table>
</div>
<script>print();</script>
</body>
