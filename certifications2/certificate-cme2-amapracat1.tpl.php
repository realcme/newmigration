<body>
<div style="font-size:12.0pt;font-family: Times New Roman,Times,serif;color: #000000;clear: both;margin: auto;width: 600px;padding: 0px;">
<table width="600px" style="border: 2px solid #993300;">
  <tr><td>
    <table style="border: 5px solid #993300; width:100%">
      <tr><td>
        <table style="border: 2px solid #993300;">
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><span style='font-weight:bold;font-size:16.0pt;letter-spacing:4.0pt'>CONTINUING MEDICAL EDUCATION</span></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><span style='font-weight:bold;font-size:16.0pt;letter-spacing:2.0pt'>CERTIFICATE</span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><span style='font-weight:bold;font-size:16.0pt;'>&nbsp;</span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><span style='font-weight:bold;letter-spacing:4.0pt'>cme<sup>2</sup>certifies that</span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:6px"><span style='font-weight:bold;font-size:16.0pt'><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><span style='letter-spacing:2.0pt'>Has participated in the educational activity titled</span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><span style='font-weight:bold;letter-spacing:2.0pt'><?php print $certificate['course_title'] ?></span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><span style='letter-spacing:1.0pt'>This activity was designated for <?php print $certificate['amapracat1'].$pratext ?></span>            
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><span style='font-weight:bold;font-size:16.0pt;letter-spacing:2.0pt'>&nbsp;</span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding: 10px 40px 0px 30px"><span style='font-size:10.0pt;letter-spacing:1.0pt'>cme<sup>2</sup> is accredited by the Accreditation Council for Continuing Medical Education to provide continuing medical education for physicians.</span></td>
          </tr>          
          <tr>
            <td align="left" valign="bottom" style="widh:50%;padding-left:20px;padding-bottom:0px;margin-bottom:0px">
              <img src="<?php print $img_url?>cme2_signature.jpg"></img><br />
              <div style="position:relative;bottom:40px">
              <b><span style='font-size:12.0pt;letter-spacing:3.0pt;padding-bottom:0px'>Jane Perrotta</span></b><br />
              <b><span style='font-size:12.0pt;letter-spacing:3.0pt;padding-top:0px'>Clinical Director, cme<sup>2</sup></span></b><br />
              <b><span style='letter-spacing:3.0pt'><?php print $certificate['dateearned'] ?></span></b>
              </div>
            </td>
            <td align="right" style="widh:50%;padding-right:30px;padding-bottom:0px;margin-bottom:0px"><img src="<?php print $img_url?>cme2_logo_2.png"></img>
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2">
              <div style="position:relative;bottom:20px">
                <b><span style='letter-spacing:2.0pt'>Certificate ID: <?php print $certificate['refid'] ?></span></b><br />
                <b><span style='letter-spacing:2.0pt'>Issue date: </span></b><strong><span style='font-size:14.0pt'><?php print $certificate['dateearned'] ?></span></strong>
               </div>
            </td>
          </tr>          
        </table>  
      </td></tr>  
    </table>  
  </td></tr>  
</table>
</div>
<script>print();</script>
</body>
