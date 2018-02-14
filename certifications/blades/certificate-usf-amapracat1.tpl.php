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
<div style="font-size:11.0pt;font-family:Arial, Times, serif;color: #000000;clear: both;margin: auto;width: 600px;padding: 0px;">
    <table style="border: 3px solid #D6AD00; width:600px">
      <tr><td>
        <table style="border: 1px solid #D6AD00;width:100%">
            <tr>
              <td align="center" colspan="2" style="padding-top:25px;color:#005828;font-size:14.0pt;font-family:'Comic Sans MS', cursive, sans-serif;font-weight:bold;">Certificate of Completion</td>
          </tr>        
            <tr>
              <td align="center" colspan="2" style="color:#005828;font-weight:bold"><img src="<?php print $img_url?>usf_logo.jpg"></img><br/>certifies that</td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:25px;font-weight:bold;"> <?php print $certificate['fullname']?></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px">has participated in the Enduring Material titled:</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px;font-weight:bold"><?php print $certificate['course_title'] ?></td>
          </tr>        
          <tr>
            <td align="center" colspan="2" style="padding-top:10px">completed on  <?php print $certificate['dateearned'] ?> </td>
          </tr>         
          <tr>
            <td align="center" colspan="2" style="padding-top:10px">and is awarded <?php print $certificate['creditearned'].$pratext ?>.</td>
          </tr> 
          <tr>
            <td align="center" colspan="2" style="padding-top:10px;padding-bottom:20px;font-size:10pt;color:#005828;font-style:italic">USF Health is accredited by the Accreditation Council for Continuing Medical Education to provide Continuing Medical Education for physicians.
            </td>
          </tr>                
          <tr>
            <td align="left" style="width:60%;font-size:9pt;vertical-align:middle;color:#005828;padding-left:10px">
              <img src="<?php print $img_url ?>usf_signature.png" ></img><br/>
              <hr style="border: 0;color: #000000;background-color: #000000;height:1px;width: 90%;" />
              <div style="padding-left:10pt;">
                Deborah Sutherland, PhD, Associate Vice President<br/>
                USF Health, Continuing Professional Development
              </div>
            </td>
            <td align="center" style="width:40%;font-size:9pt;vertical-align:middle;">
              <?php print $certificate['dateearned'] ?> <br/>
              <hr style="border: 0;color: #000000;background-color: #000000;height:1px;width: 90%;" />
              <div style="padding-left:10pt;color:#005828;">
                Date
              </div>
            </td>
          </tr> 
          <tr>
            <td align="center" colspan="2" style="padding-top:20px;">&nbsp;</td>
          </tr>     
        </table>  
      </td></tr>  
    </table> 
</div>
<script>print();</script>
</body>
