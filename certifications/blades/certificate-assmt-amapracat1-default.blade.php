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
<div style="font-size:12.0pt;font-family:Times New Roman, Times, serif;color: #000000;width: 620px;margin: auto;clear: both;">
<table width="620px">
          <tr>
            <td align="left" colspan="2" style="padding-top:5px"><img src="<?php print $img_url?>assmt_top.png" ></img></td>
          </tr>
          <tr>
            <td align="left" colspan="2" style="padding-top:0px"><img src="<?php print $img_url?>assmt_logo.png" ></img></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:5px;font-size:18pt;"><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?><?php print $degree ?></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:5px;">has participated in the enduring material activity entitled</td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:10px;font-weight: bold;"><?php print $certificate['course_title'] ?></td>
          </tr>   
          <tr>
            <td align="center" colspan="2" style="padding-top:10px;"><?php print $certificate['dateearned'] ?></td>
          </tr>    
          <tr>
            <td align="center" colspan="2" style="padding-top:10px;">This enduring material activity was designated for  <?php print $max?>.</td>
          </tr>    
          <tr>
            <td align="center" colspan="2" style="padding-top:20px;padding-bottom:20px;font-size:10pt">
              The Atlanta School of Sleep Medicine &amp; Technology is accredited by the Accreditation Council for Continuing Medical Education to provide continuing medical education for physicians.
              <br/><br/> 
              The Atlanta School of Sleep Medicine &amp; Technology designates this enduring material activity for a maximum of <?php print $max?>.  Physicians should claim only the credit commensurate with the extent of their participation in the activity.
            </td>
          </tr>         
          <tr>
            <td align="left" style="padding:15px 20px;width: 50%" >
              <img src="<?php print $img_url?>assmt_signature1.png"></img>
              <br/>
              <div style="padding-left: 15px;text-align:left">
              Gail Reid, M.Ed.<br/>
              Program Manager      
              </div>
            </td>
            <td align="left" style="padding:15px 20px;width: 50%">
              <img src="<?php print $img_url?>assmt_signature2.png"></img>
              <br/>
              <div style="padding-left: 15px;text-align:left">
              Russel Rosenberg, Ph.D.<br/>
              Director                 
              </div>
            </td>
          </tr>   
          <tr>
            <td align="left" colspan="2" style="padding-top:5px"><img src="<?php print $img_url?>assmt_bottom.png" ></img></td>
          </tr>   
</table>
</div>
<script>print();</script>
</body>
