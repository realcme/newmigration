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
<div style="font-size:12.0pt;font-family:Times New Roman, Times, serif;color: #000000;clear: both;width: 620px;margin: auto;padding: 0px;">

<table style="border: 20px solid #857951;" border="0" cellpadding="0" cellspacing="0" width="620px">
  <tr>
    <td align="center" style="padding: 0px">
      <table style="border: 2px solid white; width: 100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td align="center" style="padding: 0px">
            <table style="border: 6px solid #e86900; width: 100%" cellpadding="3" cellspacing="3">
        		  <tr>
                <td align="center">
                  <table style="background-color: #ffffff" border="0" cellpadding="0" cellspacing="0">
            			 <tr>
                    <td align="center" valign="top"><img src="<?php print $img_url?>pcme_logo.gif" height="124px" width="238px" /></td>
                   </tr>
            	     <tr>
                    <td align="center" valign="top">
                      The Potomac Center for Medical Education certifies that<br /><br />
                      <span style="font-size: 16pt;">
                      <?php print $certificate['fullname'] ?></span><br /><br />
                      completed the enduring material titled<br /><br />
                      <b><?php print $certificate['course_title'] ?></b><br /><br />
                       on <?php print $certificate['dateearned'] ?><br /><br />
                      and is awarded <?php print $certificate['creditearned'].$pratext ?> <br /> toward the AMA Physician's Recognition Award.
                    </td>
                   </tr>
                   <tr>
                    <td align="center" valign="top" style="padding-top:10px;padding-bottom:25px"><img src="<?php print $img_url?>pcme_signature.png" width="276px" height="102px"></img>
                    </td>
                  </tr>
                 </table>
                </td>
              </tr>
            </table>
          </td>
        </tr>
     </table>
    </td>
  </tr>
</table>

</div>
<script>print();</script>	
</body>
