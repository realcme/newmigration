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
<table width="602px" style="border: 2px solid #404040;">
  <tr>
    <td>
      <table width="600px" style="border: 4px solid #404040;">
          <tr>
            <td align="center" colspan="2">
               <img src="<?php print $img_url?>joslin_logo.png" style="width: 331px; height: 48px;"></img>
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2">
              <div style="position:relative;bottom:5px">
                <br />
                <span style="font-size:8pt;">is accredited by the Accreditation Council for Continuing Medical Education to provide continuing medical education for physicians.</span>
               </div>
            </td>
          </tr>  
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><span style='font-size:14.0pt;'>JOSLIN DIABETES CENTER CERTIFIES THAT</span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><span style='font-size:14.0pt;font-weight: bold'><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px">has participated in the <?php print $act?> titled</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px;font-weight: bold;"><?php print $certificate['course_title'] ?></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px;font-weight: bold;">on  <?php print $certificate['dateearned'] ?>.           
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:15px">This activity was designated for <?php print $certificate['amapracat1'].$pratext ?>           
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:0px;padding-bottom:0px">&nbsp;</td>
          </tr> 
          <tr>
            <td align="center" colspan="2" valign="bottom" style="padding-left:20px;padding-bottom:0px;margin-bottom:0px;font-size:10pt">
              <img src="<?php print $img_url?>joslin_signature.gif"></img><br />
              <div style="position:relative;bottom:0px">
              <b><span>Richard S. Beaser, MD</span></b><br />
              <b><span><small>Medical Executive Director, Professional Education</small></span></b><br />
              <b><span><small>Joslin Diabetes Center</small></span></b><br />
               </div>
            </td>
          </tr> 
          <tr>
            <td align="left" colspan="2" style="padding-right:30px;padding-top:20px;padding-bottom:10px;margin-bottom:0px;font-size:10pt">
              <b>Certificate ID: <?php print $certificate['refid'] ?></b>
            </td>      
          </tr> 
      </table>
     </td>
   </tr>
 </table>
</div>
<script>print();</script>
</body>
