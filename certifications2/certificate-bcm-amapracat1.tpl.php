<body>
<div style="font-size:10.0pt;font-family:Arial, Times, serif;color: #000000;width: 600px;margin: auto;clear: both;">
<table width="520px">
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><img src="<?php print $img_url?>bcm_logo.png"></img></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><span style='font-size:18.0pt;font-weight: bold'>CREDIT CERTIFICATE</span></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><span style='font-size:12.0pt;font-weight:bold;'>Baylor College of Medicine</span> <span style='font-size:12.0pt;'>certifies that</span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><strong><span style='font-size:14.0pt'><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?><?php print $degree ?></span></strong></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:5px">has participated in the educational activity titled</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><span style='font-weight:bold;'><?php print $certificate['course_title'] ?> <?php print $activity_number?></span></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:10px">on <?php print $date?>, <br/>and is awarded <?php print $amountearnerd.$pratext?>.</td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:20px">Baylor College of Medicine is accredited by the Accreditation Council for Continuing Medical Education to provide continuing medical education for physicians.</td>
          </tr> 
          <tr>
            <td align="center" colspan="2" style="padding-top:20px">Baylor College of Medicine designates this educational activity <br/>for a maximum of <?php print $amountmax.$pratext?>. <br/>Physicians should only claim credit commensurate with the extent of their participation in the activity.</td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:20px">The term of approval for this enduring material is <?php print $certificate['@enduring_begin_date'] ?> through <?php print $certificate['@enduring_end_date'] ?>.</td>
          </tr> 
          <tr>
            <td align="center" colspan="2" style="padding-top:0px;padding-bottom:20px;"> 
            </td>
          </tr>         
          <tr>
            <td align="left" valign="bottom" colspan="2" style="padding-left:20px;padding-bottom:10px;margin-bottom:0px">
              <div style="float: left">
              Michael Fordis, M.D.<br />
              Senior Associate Dean<br />
              Director, Office of<br />
              Continuing Medical Education<br />  
              </div>
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2"><img src="<?php print $img_url?>bcm_separator.png"></img></td>
          </tr> 
          <tr>
            <td align="center" colspan="2"><span style='font-size:9.0pt;font-weight:bold;'>KEEP THIS CERTIFICATE for your records.  
            A fee of $15.00 will be charged for a duplicate certificate. Direct inquiries to: Baylor College of Medicine, 
            Office of Continuing Medical Education, One Baylor Plaza, MS: BCM155 Houston, Texas 77030 USA Phone: 713.798.8237</span>
            </td>
          </tr>          
</table>
</div>
<script>print();</script>
</body>
