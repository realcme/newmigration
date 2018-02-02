<body>

<div style="font-size:12.0pt;font-family:Arial, Times, serif;color: #000000;width: 626px;margin: auto;clear: both;">
<div style="width: 197px;height: 64px;float: left;">
  <img src="<?php print $img_url?>smdc_logo.png" style="width: 197px; height: 64px;"></img>
</div>
<div style="width: 249px;height: 54px;float: right;">
  <img src="<?php print $img_url?>smdc_address.png" style="width: 249px; height: 54px;"></img>
</div>
<table width="600px">
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><span style='font-size:26.0pt;'>CME Credit Certificate </span></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><span style='font-size:16.0pt;'>SMDC Health System</span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><span style='font-size:14.0pt;'>certifies that</span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><strong><span style='font-size:16.0pt'><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></span></strong></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><span style='font-size:14.0pt;'>has participated in the educational activity titled</span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><span style='font-size:14.0pt;'><strong><?php print $certificate['course_title'] ?></strong></span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px">This activity was designated for <?php print $certificate['amapracat1'].$pratext ?>           
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:0px;padding-bottom:30px">&nbsp;</td>
          </tr>         
          <tr>
            <td align="left" style="width:50%;padding-top:20px;padding-right:30px;padding-bottom:30px;margin-bottom:0px;"><span style='font-size:11.0pt;border-top: 2px solid;'>Participant's signature</span>
            </td>
            <td align="right" valign="bottom" style="width:50%;padding-left:20px;padding-bottom:20px;margin-bottom:0px">
              <img src="<?php print $img_url?>smdc_signature.png"></img><br />
              <div style="position:relative;bottom:10px">
              <b><span style='font-size:11.0pt;padding-bottom:0px;font-weight:bold;'>Thomas Elliott, MD, FACP</span></b><br />
              <b><span style='font-size:11.0pt;padding-top:0px'>Medical Director, Division of</span></b><br />
              <b><span style='font-size:11.0pt;padding-top:0px'>Education and Research</span></b><br />
              </div>
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2">
              <div style="position:relative;bottom:2px">
                <b><span style='letter-spacing:2.0pt'>Certificate ID: <?php print $certificate['refid'] ?></span></b><br />
                <b><span style='letter-spacing:2.0pt'>Issue date: </span></b><strong><span style='font-size:14.0pt'><?php print $certificate['dateearned'] ?></span></strong>
               </div>
            </td>
          </tr>          
</table>
</div>
<script>print();</script>
</body>
