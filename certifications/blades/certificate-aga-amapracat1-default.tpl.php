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
<div style="font-size:12.0pt;font-family:Times New Roman, Times, serif;color: #000000;width: 626px;clear: both;margin:auto;">
<table width="620px" style="border: 7px solid #004D89;padding:5px">
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><img src="<?php print $img_url?>aga_logo.png" style="width:158px"></img></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:15px;font-weight:bold;font-size:24px;">CERTIFICATE OF PARTICIPATION</td>
          </tr>          
            <tr>
                <td align="center" colspan="2" style="padding-top:10px;font-weight:bold">The AGA Institute certifies that</td>
          </tr> 
          <tr>
            <td align="center" colspan="2" style="padding-top:5px;font-weight:bold;"><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px;font-weight:bold">has participated in the educational activity titled</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:3px;font-weight:bold"><?php print $certificate['course_title'] ?></td>
          </tr>             
          <tr>
            <td align="center" colspan="2" style="padding-top:15px;font-weight:bold">This activity was designated for a maximum of <?php print $credit.$pratext?></td>
          </tr>     
          <tr><td>&nbsp;</td></tr>
          <tr><td>&nbsp;</td></tr>
          <tr><td>&nbsp;</td></tr>
          <tr><td>&nbsp;</td></tr>
          <tr><td>&nbsp;</td></tr>
    
          <tr>
              <td align="center" colspan="2" style="padding-top:25px;font-size:11pt;font-weight:bold">
                Michael Camilleri, MD, AGAF President
                <br/>
                AGA Institute, 4930 Del Ray Avenue, Bethesda, MD 20814 | 1.301.654.2055 | <a target="_blank" href="http://www.gastro.org">www.gastro.org</a>
            </td>
          </tr>         
</table>
</div>
<script>print();</script>
</body>
