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
<div style="font-size:12.0pt;font-family:Times New Roman, Times, serif;color: #000000;clear: both;width: 600px;margin: auto;padding: 0px;">
<table width="600px">
          <tr>
            <td align="left" style="padding-top:5px">
            <img src="<?php print $img_url?>ers_logo.gif" style="width: 288px; height: 70px;"></img>
            </td>
            <td align="right" style="padding-top:5px">
              <span style='font-size:10.0pt;'>3015 Shannon Lakes North Suite 303<br/>Tallahassee, FL 32309<br/>850-906-0779 850-893-1845 fax</span></td>
          </tr>          
          <tr>
            <td align="left" colspan="2" style="padding-top:5px">
            Participant Information<br/><br/>
            <?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?><br/>
            <?php print $certificate['address'] ?>
            </td>
          </tr>           
          <tr>
            <td align="left" colspan="2" style="padding-top:10px;font-weight:bold">Program Information</td>
          </tr>         
          <tr>
            <td align="center" colspan="2" style="padding-top:5px">
              <table cellspacing="0">
                <tr style="font-weight:bold;">
                  <td style="border-bottom: 2px solid black; text-align: left">Program <br/>Description </td>
                  <td style="border-bottom: 2px solid black; text-align: left">Completion Date </td>
                  <td style="border-bottom: 2px solid black; text-align: left">CE hour</td>
                </tr>
                <tr>
                  <td style="border-bottom: 2px solid black; text-align: left; vertical-align: top; padding-right: 10px"><?php print $certificate['course_title'] ?></td>
                  <td style="border-bottom: 2px solid black; text-align: left; vertical-align: top"><?php print $certificate['dateearned'] ?></td>
                  <td style="border-bottom: 2px solid black; text-align: left; vertical-align: top"><?php print $certificate['amapracat1'] ?></td>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td align="left" colspan="2" style="padding-top:15px; font-weight:bold">Total CE Issued: <?php print $certificate['creditearned'] ?> hour enduring.           
            </td>
          </tr>
          <tr>
            <td align="left" colspan="2" style="padding-top:5px">
            <span style="font-weight:bold">Authorized Signature</span><br/>
            <img src="<?php print $img_url?>ers_signature.gif" style="width: 248px; height: 77px;"></img><br/>
            <span style="font-style:italic">Steve Glass, RPh, FASHP, CMP, CAE<br/>President</span>
            </td>
          </tr>       
          <tr>
            <td align="left" colspan="2" style="padding-top:5px;font-weight: bold">Educational Review Systems, Inc.<br/>
              Issue Date: <?php print $certificate['dateearned'] ?>
            </td>
          </tr>
</table>
</div>
<script>print();</script>
</body>
