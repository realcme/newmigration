<body>
<div style="font-size:12.0pt;font-family:Arial, Times, serif;color: #000000;clear: both;margin: 0px;padding: 0px;">
    <table style="border: 2px solid #000000; width:600px">
      <tr><td>
        <table style="border: 1px solid #000000; width:100%">
          <tr>
            <td align="center" colspan="2" style="font-size:10pt">
              <div style="float: left">
                <img style="margin-left:-8px;margin-top:-8px" src="<?php print $img_url?>cmeoutfitters_corner.png"></img>
              </div>
              <img src="<?php print $img_url?>cmeoutfitters_logo.png"></img><br/>
              1395 Piccard Drive, Suite 370 - Rockville, MD 20850<br/>
              www.cmeoutfitters.com - 877.CME.PROS
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:25px">CME Outfitters, LLC, is accredited by the Accreditation Council for Continuing Medical Education, to provide continuing medical education for physicians.</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><span style='font-weight: bold'>CME Outfitters, LLC, certifies that</span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><span style='font-weight: bold'><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:20px">has participated in the educational activity titled</td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><?php print $certificate['course_title']?></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px">on <span style='font-weight:bold;'><?php print $certificate['dateearned'] ?></span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><span style='font-weight:bold;'>This activity was designated for <?php print $certificate['amapracat1'].$pratext ?>.</span></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:10px">&nbsp;</td>
          </tr>          
          <tr>
            <td align="center" valign="bottom" style="padding-left:10px;padding-bottom:0px;margin-bottom:0px">
              <table>
                <tr><td align="center"><img src="<?php print $img_url?>cmeoutfitters_signature.png"></img></td></tr>
                <tr><td align="center"><span style='font-size:10.0pt;font-weight:bold;'>Managing Partner</span><br /></td></tr>
              </table>
            </td>
            <td align="right" valign="bottom" style="padding-right:20px;padding-bottom:0px;margin-bottom:0px">
              <table>
                <tr><td align="center"><span style='font-size:10.0pt;font-weight:bold;'><?php print $today?></span><br /></td></tr>
                <tr><td align="center"><span style='font-size:10.0pt;font-weight:bold;'>Signature / Printed Date</span><br /></td></tr>
              </table>
            </td>
          </tr>          
        </table>  
      </td></tr>  
    </table>  
</div>
<script>print();</script>
</body>
