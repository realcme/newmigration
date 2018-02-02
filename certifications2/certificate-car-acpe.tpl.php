<body>
<div style="font-size:11.0pt;font-family:Arial,Helvetica,sans-serif;color: #000000;clear: both; width:620px; margin: auto;padding: 0px;">
        <table style="border: 1px solid #4E85C5; padding:0px">
          <tr>
            <td align="center" valign="top" colspan="2">
                <img width="620px" height="117px" src="<?php print $img_url?>car_acpe_header.png" style="margin: 0px;padding: 0px"></img>
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:5px">Med-IQ certifies that</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><span style='font-weight: bold; color: #34506F;'><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:20px">has participated in the educational activity titled</td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding:10px"><span style='font-weight:bold; color: #34506F;'><?php print $certificate['course_title']?></span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding:10px"><span style='font-weight:bold;  color: #34506F;'>on <?php print $certificate['dateearned'] ?></span></td>
          </tr>          
          <tr>
            <td align="left" colspan="2" style="padding:10px 10px 0px 10px; font-size:10.0pt;">
            <div style="float: left; padding-right: 4px"><img src="<?php print $img_url?>acpe_logo.png" style="width: 55px; height: 49px;"></img></div>
            Med-IQ is accredited by the Accreditation Council for Pharmacy Education as a provider of continuing pharmacy education. 
            This activity is certified for up to <?php print $certificate['acpe'] ?> contact hour(s) (<?php print $certificate['acpe'] ?> CEUs)
            of credit for pharmacists. ACPE <?php print $certificate['@upn'] ?>. 
            The program is designed for all pharmacists.
            </td>
          </tr>        
          <tr>
            <td align="left" colspan="2" style="padding:0px 10px; font-size:10.0pt;">This document must be retained for a period of four (4) years after the course concludes.</td>
          </tr>   
          <tr>
            <td align="center" colspan="2" style="padding-top:10px">&nbsp;</td>
          </tr>          
          <tr>
            <td align="left" valign="bottom" style="padding-left:10px;padding-bottom:0px;margin-bottom:0px">
              <img width="170px" height="83px" src="<?php print $img_url?>car_mediq_logo.jpg"></img><br />
              www.med-iq.com 
            </td>
            <td align="right" valign="bottom" style="padding-right:20px;padding-bottom:0px;margin-bottom:0px">
              <img width="230px" height="112px" src="<?php print $img_url?>car_mediq_signature.jpg"></img><br />
              <?php print $certificate['dateearned'] ?>
            </td>
          </tr>          
        </table>  
</div>
<script>print();</script>
</body>
