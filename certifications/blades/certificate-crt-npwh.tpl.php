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
            <td align="center" colspan="2" style="padding-top:5px"><span style='font-size:32.0pt;font-weight: bold'>NPWH</span></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><span style='font-size:24.0pt;'>Continuing Education Certificate</span></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:5px">This is to certify that</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><span style='font-size:14.0pt;font-weight: bold;'><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?><?php print $occupation ?></span>
            </td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px">completed the continuing education program entitled</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><span style='font-weight:bold;'><?php print $certificate['course_title'] ?></span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px">for a total of <?php print $certificate['npwh'] ?> contact hours including pharmacology.
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:15px;">
            Susan Wysocki, WHNP-BC, FAANP <br/>
            NPWH President and CEO
            </td>
          </tr>  
          <tr>
            <td align="center" colspan="2" style="padding-top:15px;">
              Approved by the Continuing Education Approval Program of the National Association of Nurse Practitioners in Women’s Health (NPWH) 
              Activity No. <?php print $number?> 
            </td>
          </tr>  
          <tr>
            <td align="center" colspan="2" style="padding-top:15px;padding-bottom:0px">
              Each participant should claim only those contact hours that he/she actually spent in the educational activity. <br />
              <span style="font-weight: bold">
              I claim <?php print $claim?> (CE)/ <?php print $claimph?> (pharm) contact hours.
              <br />
              <br />
              ______________________________________ Signature
              </span>
            </td>
          </tr>  
          <tr>
            <td align="center" colspan="2" style="padding-top:20px;padding-bottom:0px;font-weight:bold">
              NPWH<br />
              505 C Street, NE<br />
              Washington, DC 20002<br />
              Phone:  202-543-9693 <br />
            </td>
          </tr> 
</table>
</div>
<script>print();</script>
</body>
