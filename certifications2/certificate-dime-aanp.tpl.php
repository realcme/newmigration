<body>
<div style="width: 600px;height: 146px;margin: auto;">
  <img src="<?php print $img_url?>dime_logo.png" style="width: 600px; height: 146px;"></img>
</div>
<div style="font-size:12.0pt;font-family:Arial, Times, serif;color: #000000;width: 600px;margin: auto;clear: both;">
<table width="600px">
          <tr>
            <td align="center" colspan="2" style="padding-top:5px">This is to certify that</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><span style='font-size:14.0pt; font-weight: bold'><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></span></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:5px">has attended and successfully completed the educational activity</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><span style='font-weight: bold;'><?php print $certificate['course_title'] ?></span></td>
          </tr>         
          <tr>
            <td align="center" colspan="2" style="padding-top:20px">for <?php print $certificate['creditearned'] ?> contact hours</td>
          </tr>         
          <tr>
            <td align="center" colspan="2" style="padding-top:10px">on <?php print $date ?></td>
          </tr>                 
          <tr>
            <td align="center" colspan="2" style="padding-top:15px">This program has been granted <?php print $certificate['aanp']?> contact hours of continuing education <?php print $phtext?> by the American Academy of Nurse Practicioners. <?php print $certificate['@aanp_pid']?></td>
          </tr>              
          <tr>
            <td align="center" colspan="2" style="padding-top:0px;padding-bottom:10px">&nbsp;</td>
          </tr>         
          <tr>
            <td align="left" valign="bottom" colspan="2" style="padding-left:20px;padding-bottom:20px;margin-bottom:0px">
            <img src="<?php print $img_url?>dime_signature.jpg"></img><br />
            Meredith Herzog  (<?php print $date2 ?>)<br />
            Senior Manager, Certification Services<br />
            DIME<br />            
            </td>
          </tr>
          <tr>
            <td align="left" colspan="2">
              <div style="position:relative;bottom:2px">
                <b><span style='font-size:10.0pt;'>Certificate ID: <?php print $certificate['refid'] ?></span></b><br />
               </div>
            </td>
          </tr>          
</table>
</div>
<script>print();</script>
</body>
