<body>
<div style="font-size:12.0pt;font-family:Arial, Times, serif;color: #000000;clear: both;width: 600px;margin: auto;padding: 0px;">
<table width="600px" style="border: none;">
          <tr>
            <td align="center" colspan="2" style="padding:5px"><span style='font-size:14.0pt;font-weight:bold;text-decoration:underline;'>CERTIFICATE OF CONTINUING EDUCATION ATTENDANCE</span></td>
          </tr>          
</table>
<table width="600px" style="border: 1px solid #CCC;">
  <tr>
    <td>
      <table width="100%" style="border: 1px solid #CCC;">          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><span style='font-size:14.0pt;font-weight: bold;'><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></span>
            </td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px">has attended and successfully completed the educational activity</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><span style='font-weight:bold;'><?php print $certificate['course_title'] ?></span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:25px">This program has been granted <?php print $certificate['aanp'] ?> contact hours of 
              continuing education by the American Academy of Nurse Practitioners. <?php print $number?>
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:20px;padding-bottom:20px;font-size:10.0pt;font-style:italic">Participant: Please claim only the portion of this program that you attended/successfully completed.           
            </td>
          </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td>
      <table width="100%" style="border: none;">          
          <tr>
            <td align="center" style="padding-top:0px;padding-bottom:0px;border: 1px solid #CCC;"><?php print $certificate['dateearned']?></td>
            <td align="left" style="padding-right:30px;padding-top:20px;padding-bottom:10px;margin-bottom:0px;border: 1px solid #CCC;">
              <img src="<?php print $img_url?>naccme_signature.png"></img><br />
              John T. Savage, MS, CCMEP<br />
              Director, Medical Education<br />

            </td>      
          </tr>
      </table>
    </td>
  </tr>
</table>
</div>
<script>print();</script>
</body>
