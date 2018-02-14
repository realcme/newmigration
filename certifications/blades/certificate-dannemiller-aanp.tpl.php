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
<div style="width:620px;">
<div style="float: left;width:410px; height: 210px;margin: 0px;padding: 10px 0px 0px 0px;font-size: 14.0pt;font-weight: bold;font-family: Times, Arial, serif;color: #AAAAAA;">
Dannemiller Memorial Educational Foundation <br /><br />
<span style="font-size: 24.0pt;">Certificate</span><br />
</div>
<div style="float: left;width: 200px; height: 184px;margin: 0px 0px 0px 10px ;padding: 0px;">
   <img src="<?php print $img_url?>dannemiller_logo.png" style="width: 198px; height: 209px;"></img>
</div>
</div>
<div style="font-size:10.0pt;font-family:Arial, Times, serif;color: #000000;width: 626px;clear: both;">
<table style="width:600px;border: 1px solid #AAAAAA;">
          <tr>
            <td align="left" style="border: 1px solid #AAAAAA;padding-right: 3px;padding-left: 3px;padding-top:5px"><?php print $certificate['fullname'] ?><br /> <?php print $certificate['address'] ?></td>
          </tr>          
          <tr>
            <td align="center" style="border: 1px solid #AAAAAA;padding-right: 3px;padding-left: 3px;padding-top:30px"></td>
          </tr>          
          <tr>
            <td align="left" style="border: 1px solid #AAAAAA;padding-right: 3px;padding-left: 3px;padding-top:10px;padding-bottom:20px">
            The Dannemiller Memorial Educational Foundation certifies that the above individual has participated in the educational activity titled 
            <strong><?php print $certificate['course_title']?></strong> on <?php print $certificate['dateearned']?>. 
            <br /><br />
            This program has been approved for <?php print $certificate['aanp']?> contact hours of continuing education <?php print $phtext ?> by the American Academy of Nurse Practitioners.   
            <br /><br />Certificate ID: <?php print print $certificate['refid'] ?>
            </td>
          </tr>          
          <tr>
            <td align="left" valign="bottom" style="border: 1px solid #AAAAAA;padding-right: 3px;width:50%;padding-left:20px;padding-bottom:0px;margin-bottom:0px">
              <img src="<?php print $img_url?>dannemiller_signature.png"></img><br />
              <div style="position:relative;bottom:10px">
              <span>John C. Drummond, M.D., FRCP(C)</span><br />
              <span>Chairman, Education Committee </span><br />
              </div>
            </td>
          </tr>          
</table>
</div>
<div style="float: left;width: 626px;margin: 0px 0px 0px 10px;padding: 10px 0px 0px 0px;font-size: 10.0pt;font-family: Times, Arial, serif;color: #AAAAAA;text-align: center;">
  <span>5711 Northwest Parkway - Suite 100 - San Antonio, Texas 78249-3360 -</span><br /> 
  <span>210-641-8311 - 1-800-328-2308 - Fax 210-697-9318</span>
</div>
<script>print();</script>
</body>
