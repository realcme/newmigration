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
<div style="font-size:12.0pt;font-family:Arial, Times, serif;color: #000000;clear: both;margin: auto;width: 620px;padding: 0px;">
<table width="620px" style="border: 2px solid #404040;">
  <tr>
    <td>
      <table width="618px" style="border: 4px solid #404040;">
          <tr>
            <td align="center" colspan="2" style="padding-top:15px">
               <img src="<?php print $img_url?>joslinhms_logo.png" width="587px" height="72px"></img>
            </td>
          </tr>  
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><span style='font-size:14.0pt;'>certifica que</span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:25px"><span style='font-size:18.0pt;font-weight: bold'><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px">Ha completado la actividad titulada </td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px;font-size:14.0pt;font-weight: bold;"><?php print $certificate['course_title'] ?></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px;">el <?php print $date_earned ?>.         
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:30px;padding-bottom:0px">&nbsp;</td>
          </tr> 
          <tr>
            <td align="center" colspan="2" valign="bottom" style="padding-left:20px;padding-bottom:20px;margin-bottom:0px;font-size:10pt">
              <img src="<?php print $img_url?>joslinhms_signature.jpg"></img><br />
              <div style="position:relative;bottom:0px">
              <b><span>Enrique Caballero, MD</span></b><br />
              <b><span><small>Director, Educaci&oacute;n Profesional Internacional  </small></span></b><br />
              <b><span><small>Joslin Diabetes Center</small></span></b><br />
               </div>
            </td>
          </tr> 
      </table>
     </td>
   </tr>
 </table>
</div>
<script>print();</script>
</body>
