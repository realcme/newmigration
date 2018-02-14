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
<div style="margin: auto;padding: 0px;width:620px; border: 2px #4b544e solid; padding:0px; text-align:center;font-size:17px; font-family:'times new roman'; line-height:1.5em;">
<table width="620px" cellpadding="0" cellspacing="0">
    <tr>
      <td colspan="2" align="left">
        <img src="<?php print $img_url ?>scepter_logo.gif" width="620px" height="101px" />
      </td>
    </tr>
    <tr>
      <td colspan="2" align="left">&nbsp;Program Completion Date: <?php print $certificate['dateearned'] ?>
      </td>
    </tr>
    <tr>
      <td colspan="2" align="center" style="padding-top: 35px"><span style="font-size: 14pt;font-weight:bold;"><?php print $certificate['course_title'] ?></span>
      </td>
    </tr>
    <tr>
      <td colspan="2" align="center" style="padding-top: 35px"><span style="font-size: 14pt;font-weight:bold;"><?php print $certificate['fullname'] ?></span>
      </td>
    </tr>
    <tr>
      <td colspan="2" align="center" style="padding-top: 15px">is awarded <?php print $certificate['creditearned'].$pratext ?>.</td>
    </tr>
    <tr>
      <td colspan="2" align="right" style="padding-top: 35px;padding-bottom:40px">
        <div style="width:200px;text-align: left;font-size: 10pt">
          <img src="<?php print $img_url ?>scepter_signature_sharine.gif" width="183px" height="70px" /><br/>
          Authorized signature of the provider<br />
          Sharine Newby<br />
          CME Manager
        </div>
      </td>
    </tr>
    <tr>
      <td align="left" style="font-size: 10pt">8 Skyline Drive &bull; Hawthorne, NY 10532 &bull; sceptercme.com &bull; &copy; 2008 Scepter&trade;</td>
      <td align="right"><img src="<?php print $img_url ?>scepter_orangebox.gif" width="26px" height="28px"/></td>
    </tr>
</table>
</div>
<script>print();</script> 
</body>
