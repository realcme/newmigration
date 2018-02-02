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
<div style="font-size:12.0pt;font-family: Arial,Times New Roman,Times,serif;color: #000000;clear: both;margin: auto;width: 600px;padding: 0px;">
<table width="600px" style="border: 1px solid black;">
  <tr><td>
    <table style="border: 1px solid black; width:100%">
      <tr><td>
        <table style="border: 1px solid black;">
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><img src="<?php print $img_url?>integrity_logo.png" style="width: 150px; height: 150px;"></img></td>
          </tr>      
          <tr>
            <td align="center" colspan="2" style="padding-top:10px;font-size:11.0pt;">Integrity Continuing Education, Inc., certifies that:</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:6px"><span style='font-weight:bold;font-size:16.0pt'><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?><?php print $degree ?></span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px;font-size:11.0pt;">has participated in the online activity:</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><span style='font-weight:bold;'><?php print $certificate['course_title'] ?></span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px;font-size:11.0pt;"><span style='font-weight:bold;'>on</span></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><span style='font-weight:bold;'><?php print $certificate['dateearned'] ?></span></td>
          </tr>   
          <tr>
            <td align="center" colspan="2" style="padding-top:10px;font-size:11.0pt;">and is awarded</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><span style='font-weight:bold;'><?php print $certificate['creditearned'].$pratext ?></span>          
            </td>
          </tr>          
          <tr>
            <td align="left" style="width:40%;padding-bottom:0px;margin-bottom:0px;padding-left:3px;font-size:9.0pt;">
            	Integrity Continuing Education, Inc. is  
accredited by the Accreditation Council for
Continuing Medical Education (ACCME) to 
provide continuing medical education for physicians.
            </td>
            <td align="right" valign="bottom" style="width:60%;padding-left:20px;padding-bottom:0px;margin-bottom:0px;padding-right:3px;font-size:9.0pt;">
              <img src="<?php print $img_url?>integrity_signature.png"></img><br />
Patrick S. Cahiwat<br />
Executive Vice President<br />
Integrity Continuing Education, Inc.<br />
106 Apple Street, Ste 300 &bull; Tinton Falls, NJ 07724<br />
Phone: 732-212-9777 &bull; Fax: 732-212-8777<br />
www.practitionersedge.com<br />
            </td>
          </tr>  
        </table>  
      </td></tr>  
    </table>  
  </td></tr>  
</table>
</div>
<script>print();</script>
</body>
