<body>
<div style="font-size:10.0pt;font-family:verdana, arial, sans-serif;color: #000000;clear: both;width: 600px;margin: auto;padding: 0px;">
<table width="600px">
          <tr>
            <td align="left" colspan="2" style="padding-top:5px">
            <img src="<?php print $img_url?>mario_logo.png" style="width: 224px; height: 87px;"></img>
            </td>
          </tr>  
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><span style='font-weight:bold;'>"<?php print $certificate['course_title'] ?>"</span></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:10px">UAN #<?php print $certificate['@uan']?> <br/> (<?php print $certificate['@uantype']?>)</td>
          </tr>
          <tr>
            <td align="left" colspan="2" style="padding-top:20px"><img src="<?php print $img_url?>mario_acpe_logo.png" style="width: 280px; height: 88px;"></img></td>
          </tr>  
          <tr>
            <td align="center" colspan="2" style="padding-top:25px; border: 1px solid black;">
            This program is approved for <?php print $certificate['acpe']?> CEUs (<?php print $certificate['acpe']?> contact hours) continuing education credits.
            <br/>
            <br/>
            <span style="font-weight:bold;">Initial Release Date:  <?php print $certificate['begin_date']?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Expiration Date: <?php print $certificate['expiration_date']?></span>
            <br/>
            <br/>
              <img src="<?php print $img_url?>mario_signature.png" style="width: 186px; height: 57px;"></img>
            <br/>
            <br/>
            <br/>
            <br/>
            </td>
          </tr>         
          <tr>
            <td align="left" colspan="2" style="padding-top:15px"> Name: <strong><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></strong></td>
          </tr>         
          <tr>
            <td align="center" colspan="2" style="padding-top:15px;">Date of Participation: <?php print $certificate['dateearned'] ?>
            </td>
          </tr>       
          <tr>
            <td align="center" colspan="2" style="padding-top:35px;font-weight:bold">Thank you for your interest in Rutgers, The State University of New Jersey, <br/> Ernest Mario School of Pharmacy.
            </td>
          </tr>
          
          
          
</table>
</div>
<script>print();</script>
</body>
