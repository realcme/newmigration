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
<div style="font-size:12.0pt;font-family:Arial, Times, serif;color: #000000;clear: both;width: 620px;margin: auto;padding: 0px;">
<table cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="3" valign="bottom" align="center"  style="width: 609px;margin: 0px;padding: 0px; height: 67px;line-height: 0px">
      <img src="<?php print $img_url?>curatio_border_top.png" width="609px" height="68px"></img>
    </td>
  </tr>
  <tr>
    <td valign="top" align="right" style="width: 52px;padding: 0px 0px 0px 0px; line-height: 0px">
      <img src="<?php print $img_url?>curatio_border_left.png" width="52px" height="588px"></img>
    </td>
    <td valign="top" align="center" style="width: 505px;">
    
<table>
          <tr>
            <td align="center" colspan="2" style="padding-top:0px"><img src="<?php print $img_url?>curatio_logo.jpg"></img></td>
          </tr>           
          <tr>
            <td align="center" colspan="2" style="padding-top:15px">Curatio CME Institute certifies that
            </td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><span style='font-weight: bold;'><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></span>
            </td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px;">has participated in the enduring material titled</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px; font-style: italic"><?php print $certificate['course_title'] ?></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:15px;">on  <?php print $certificate['dateearned'] ?> and is awarded</td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:15px;"><?php print $certificate['creditearned'].$pratext ?></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:0px;padding-bottom:0px">&nbsp;</td>
          </tr>  
          <tr>
            <td align="center" colspan="2" style="padding-top:0px;padding-bottom:0px; font-size: 10pt;">
              <img src="<?php print $img_url?>curatio_signature.png"></img><br/>
              Denise C. LaTemple, PhD<br/>
              President
            </td>
          </tr>  
          <tr>
            <td align="center" colspan="2" style="padding-top:5px;font-size: 8pt; font-style:italic; ">
              Curatio CME Institute is accredited by the Accreditation Council for Continuing Medical Education<br /> 
              to provide continuing medical education for physicians.
            </td>      
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:10px;font-size:10pt; color:#6B95AD; font-weight:bold; ">
              100 Campbell Boulevard, Suite 103, Exton, PA, 19341 <br/> Tel: 610-363-1619 &middot; Fax: 610-363-7410
            </td>      
          </tr>
</table>

    </td>
    <td valign="top" align="left" style="width: 52px;padding: 0px 0px 0px 0px; line-height: 0px">
      <img src="<?php print $img_url?>curatio_border_right.png" width="52px" height="588px"></img>
    </td>
  </tr>
  <tr>
    <td colspan="3" valign="top" align="center"  style="width: 609px;margin: 0px;padding: 0px; height: 69px;line-height: 0px">
      <img src="<?php print $img_url?>curatio_border_bottom.png" width="609px" height="69px"></img>
    </td>
  </tr>
</table>
</div>
<script>print();</script>
</body>
