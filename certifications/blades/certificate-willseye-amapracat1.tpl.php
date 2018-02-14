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
            <td align="center" colspan="2" style="padding-top:5px"><img src="<?php print $img_url?>willseye_logo.jpg"></img><br/>Philadelphia, PA</td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:20px;">Wills Eye Hospital certifies the physician named below has participated in the following activity 
            and is awarded the indicated number of <?php print $pratext?>.
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:10px;font-size:12pt;font-weight:bold"><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?><?php print $degree ?></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:5px;">Has participated in</td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:20px;font-size:12pt;font-weight:bold"><?php print $certificate['course_title'] ?></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:20px;font-size:12pt;">on <span style="font-weight:bold"><?php print $date_earned ?></span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px;">and has been awarded <?php print $certificate['creditearned'].$pratext ?> </td>
          </tr>        
          <tr>
            <td align="center" colspan="2" style="padding-top:20px;">The Wills Eye Hospital is accredited by the ACCME to provide <br/> continuing medical education for physicians.</td>
          </tr>        
          <tr>
            <td align="center" colspan="2" style="padding-top:20px;">The Wills Eye Hospital designates this educational activity for a <br/> maximum of <?php print $certificate['amapracat1'].$pratext ?> </td>
          </tr>   
          <tr>
              <td align="center" colspan="2" style="padding-top:15px;font-size:10pt">
              <img src="<?php print $img_url?>willseye_signature.png"></img><br/>
              Ralph C. Eagle, Jr., MD, Director <br/>
              Department of Continuing Medical Education<br/>
              Wills Eye Hospital<br/>
              <br/>
            </td>
          </tr>  
</table>
</div>
<script>print();</script>
</body>
