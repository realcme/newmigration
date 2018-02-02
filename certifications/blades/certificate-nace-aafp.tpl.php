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
<div style="font-size:11.0pt;font-family:Arial, Times New Roman, Times, sans-serif;color: #000000;clear: both;width: 620px;margin: auto;padding: 0px;">

<table width="620px" border="0" cellpadding="5" cellspacing="0">
  <tr>
    <td align="center" style="font-size: 13pt;padding-top: 30px;font-weight:bold">CERTIFICATE OF COMPLETION</td>
  </tr>
  <tr>
    <td align="center" style="padding-top: 10px">
      <img src="<?php print $img_url ?>nace_logo.jpg" width="424px" height="69px"></img>
    </td>
  </tr>
  <tr>
    <td align="center" style="padding-top: 10px">
      300 Northwest 70th Avenue, Suite 102 &bull; Plantation, Florida 33317<br /><a href="http://www.naceonline.com">www.naceonline.com</a>
    </td>
  </tr>
  <tr>
    <td align="center" style="padding-top: 10px">
      The National Association for Continuing Education <br /><br />certifies that
    </td>
  </tr>
  <tr>
    <td align="center" style="padding-top: 10px">
      <?php print $certificate['fullname'] ?>
    </td>
  </tr>
  <tr>
    <td align="center" style="padding-top: 10px">
      participated in the continuing education program
    </td>
  </tr>
  <tr>
    <td align="center" style="padding-top: 10px">
      <?php print $certificate['course_title'] ?> <br />
      <?php print $date_earned ?>
    </td>
  </tr>
  <tr>
    <td align="center" style="padding-top: 10px">
    This activity has been reviewed and is acceptable for up to <?php print $aafp ?> Prescribed credit hours*  <br/>
    by the American Academy of Family Physicians.
    </td>
  </tr>
  <tr>
    <td align="center" style="padding-top: 10px">
      <img width="297px" height="61px" src="<?php print $img_url ?>nace_signature.jpg"></img>
      <br />Michelle Frisch, MPH, CCMEP, Vice President<br /><br />
    </td>
  </tr>
  <tr>
    <td align="center" style="padding-top: 10px">
        <small>* This enduring activity,  <?php print $certificate['course_title'] ?>, from <?php echo $begin_date ?> - <?php echo $expiration_date; ?>, has been reviewed 
        and is acceptable for up to <?php print $aafp ?> Prescribed credit(s) by the American Academy of Family Physicians. Physicians should 
        claim only the credit commensurate with the extent of their participation in the activity.
        </small>
    </td>
  </tr>
</table>
</div>
<script>print();</script>	
</body>
