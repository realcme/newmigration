<body>
<div style="font-size:12.0pt;font-family:Times New Roman, Times, serif;color: #000000;width: 620px;margin: auto;clear: both;">
<table width="620px">
          <tr>
            <td align="left" colspan="2" style="padding-top:5px"><img src="<?php print $img_url?>assmt_top.png" ></img></td>
          </tr>
          <tr>
            <td align="left" colspan="2" style="padding-top:0px"><img src="<?php print $img_url?>assmt_logo.png" ></img></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:5px;font-size:18pt;"><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:5px;">has participated in the enduring material activity entitled</td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:10px;font-weight: bold;"><?php print $certificate['course_title'] ?></td>
          </tr>   
          <tr>
            <td align="center" colspan="2" style="padding-top:10px;"><?php print $certificate['dateearned'] ?></td>
          </tr>   
          <tr>
            <td align="center" colspan="2" style="padding-top:20px;padding-bottom:20px;font-size:10pt">
            This program is approved for <?php print $max?> of continuing education by the American Association of Nurse Practitioners. Program ID <?php print $certificate['@aanp_pid']?>
            <br/>
            <br/>
            This program was planned in accordance with AANP CE Standards and Policies and AANP Commercial Support Standards.
            </td>
          </tr>         
          <tr>
            <td align="left" style="padding:15px 20px;width: 50%" >
              <img src="<?php print $img_url?>assmt_signature1.png"></img>
              <br/>
              <div style="padding-left: 15px;text-align:left">
              Gail Reid, M.Ed.<br/>
              Program Manager      
              </div>
            </td>
            <td align="left" style="padding:15px 20px;width: 50%">
              <img src="<?php print $img_url?>assmt_signature2.png"></img>
              <br/>
              <div style="padding-left: 15px;text-align:left">
              Russel Rosenberg, Ph.D.<br/>
              Director                 
              </div>
            </td>
          </tr>    
          <tr>
            <td align="left" colspan="2" style="padding-top:5px"><img src="<?php print $img_url?>assmt_bottom.png" ></img></td>
          </tr>  
</table>
</div>
<script>print();</script>
</body>
