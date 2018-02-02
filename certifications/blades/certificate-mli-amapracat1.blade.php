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
<div style="font-size:11.0pt;font-family:Times New Roman, Times, serif;color: #000000;width: 626px;clear: both;margin:auto">
<table width="620px" style="border: none;padding:5px">
          <tr>
            <td align="left" valign="top" style="padding-top:5px"><img src="<?php print $img_url?>mli_logo2.jpg"></img></td>
            <td align="right" valign="top" style="padding-top:5px;color:#B8B8B8;font-size:10pt">203 Main Street, Suite 249<br/>
              Flemington , NJ 08822<br/>
             (609) 333-1693 (t)<br/>
             (609) 333-1694 (f)<br/>
              www.mlicme.org<br/>
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:20px;font-weight:normal;font-size:16pt">STATEMENT OF CREDIT</td>
          </tr>  
          <tr>
            <td align="center" colspan="2" style="padding-top:20px;font-weight:bold"><?php print $certificate['course_title'] ?></td>
          </tr>  
          <tr>
            <td align="left" colspan="2" style="padding-top:25px;">The Medical Learning Institute Inc certifies that</td>
          </tr>  
          <tr>
            <td align="center" colspan="2" style="padding-top:25px;"><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></td>
          </tr>   
          <tr>
            <td align="left" colspan="2" style="padding-top:25px;">has participated in the <?php print $certificate['@ed']?> titled 
            <span style="font-weight:bold">"<?php print $certificate['course_title'] ?>"</span>
            on <?php print $certificate['dateearned'] ?> and is awarded <?php print $certificate['creditearned'].$pratext ?>.</td>
          </tr>    
          <tr>
            <td align="left" colspan="2" style="padding-top:20px;">The Medical Learning Institute Inc is accredited by the Accreditation Council for Continuing Medical Education to provide continuing medical education for physicians.</td>
          </tr>  
          <tr>
              <td align="center" colspan="2" style="padding-top:25px;">
              <img src="<?php print $img_url?>mli_signature.jpg"></img><br/>
              Executive Director
            </td>
          </tr>    
          <tr>
            <td align="center" colspan="2" style="padding-top:30px;font-size:10pt">Please keep this document for your personal records</td>
          </tr>
</table>
</div>
<script>print();</script>
</body>
