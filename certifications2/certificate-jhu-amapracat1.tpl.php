<body>
<div style="font-size:11.0pt;font-family:Arial, Times, serif;color: #000000;clear: both;margin: auto;width: 600px;padding: 0px;">
  <div style="position: absolute; top: 0px; left:0px; padding: 10px">
    <table style="width: 100%;">
            <tr>
              <td align="left" colspan="2"><img src="<?php print $img_url?>jhu_logo2.jpg" style="width: 467px; height: 112px;"></img></td>
            </tr>
            <tr>
              <td align="center" colspan="2" style="padding-top:5px"><span style='font-size:14.0pt;'>Certificate of Credit</span></td>
            </tr>                      
            <tr>
              <td align="center" colspan="2" style="padding-top:5px"><span style='font-size:14.0pt;'>The Johns Hopkins University School of Medicine</span></td>
            </tr>          
            <tr>
              <td align="center" colspan="2" style="padding-top:10px">certifies that</td>
            </tr>          
            <tr>
              <td align="center" colspan="2" style="padding-top:15px"><span style='font-size:14.0pt; font-weight: bold;'><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></span></td>
            </tr>          
            <tr>
              <td align="center" colspan="2" style="padding-top:10px">has participated in the enduring material titled</td>
            </tr>          
            <tr>
              <td align="center" colspan="2" style="padding-top:10px"><span style='font-weight:bold;'><?php print $certificate['course_title'] ?></span></td>
            </tr>          
            <tr>
              <td align="center" colspan="2" style="padding-top:15px">on  <?php print $certificate['dateearned'] ?> and is awarded <?php print $certificate['creditearned'].$pratext ?>           
              </td>
            </tr>
            <tr>
              <td align="center" colspan="2" style="padding-top:0px;padding-bottom:0px">&nbsp;</td>
            </tr> 
            <tr>
              <td align="left" style="width:50%;padding-right:30px;padding-bottom:0px;margin-bottom:0px;font-size: 10pt">
                <b>Release Date: <?php print $certificate['begin_date'] ?><br />
                Expiration Date:  <?php print $certificate['expiration_date'] ?><br />
                Certificate ID: <?php print $certificate['refid'] ?></b>
                <br />
                <br />
                <?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?><br/><?php print $certificate['address']?>                
              </td>
              <td align="right" valign="bottom" style="width:50%;padding-left:20px;padding-bottom:0px;margin-bottom:0pxfont-size: 10pt">
                <img src="<?php print $img_url?>jhu_signature.png"></img><br />
                <div style="position:relative;bottom:20px">
                <b><span style="color: #336699">Todd Dorman, MD, FCCM</span></b><br />
                <b><span style="color: #336699;font-style:italic"><small>Associate Dean and Director of</small></span></b><br />
                <b><span style="color: #336699;font-style:italic"><small>Continuing Medical Education</small></span></b><br />
                </div>
              </td>
            </tr>
            <tr>
              <td align="center" colspan="2">
                <div style="position:relative;bottom:5px;">
                  <br />
                  <span style="color: #336699;font-size: 8pt">The Johns Hopkins University School of Medicine is accredited by the Accreditation Council for Continuing Medical Education to provide continuing medical education for physicians.</span>
                 </div>
              </td>
            </tr>          
    </table>
  </div>
  <div style="z-index: -1; margin: auto; text-align:center; padding-top:170px"><img src="<?php print $img_url?>jhu_background.png"></img></div>
</div>
<script>print();</script>
</body>
