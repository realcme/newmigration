<body>
<div style="font-size:12.0pt;font-family:Arial, Times, serif;color: #000000;clear: both;width: 600px;margin: auto;padding: 0px;">
<table width="600px" style="border: 4px solid #404040;">
          <tr>
            <td align="center" colspan="2" style="padding-top:35px"><span style='font-size: 14pt;'>Statement of Participation</span></td>
          </tr>       
          <tr>
            <td align="center" colspan="2" style="padding-top:30px"><span style='font-style:italic;'>The Postgraduate Institute for Medicine certifies that</span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><span style='font-size:14.0pt;font-weight: bold;'><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?><?php print $occupation ?></span>
            </td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><span style='font-style:italic;'>has participated in the live activity titled</span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><span style='font-weight:bold;'><?php print $certificate['course_title'] ?></span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px;padding-bottom:25px"> on  <?php print $certificate['dateearned'] ?> and 
              is awarded <?php print $certificate['creditearned'].$pratext ?>.
            </td>
          </tr>
          <tr>
            <td align="center" style="padding-top:15px; padding-left: 20px"><img src="<?php print $img_url?>pgim_logo.jpg" style="width: 250px; height: 59px;"></img></td>
            <td align="left" style="padding: 15px;font-size: 8pt;">The Postgraduate Institute for Medicine is accredited by the Accreditation Council for Continuing Medical Education (ACCME) to provide continuing medical education for physicians.</td>
          </tr>
          <tr>
            <td align="center" style="padding-top:5px">&nbsp;</td>
            <td align="center" style="padding-top:5px"><img src="<?php print $img_url?>pgim_signature.jpg" style="width: 250px; height: 47px;"></img></td>
          </tr>
          <tr>
            <td align="center" style="padding-top:5px; font-size: 8pt">
              <div style="text-align: left; padding-left: 20px">
              Postgraduate Institute for Medicine<br/>
              304 Inverness Way South, Suite 100<br/>
              Englewood, CO 80112<br/>
              (303) 799-1930<br/>
              (303) 858-8848 - Fax<br/>
              </div>
            </td>
            <td align="left" style="padding-top:5px; font-size: 8pt">
              Trace Hutchison, PharmD<br/>
              Director of Medical Education<br/>
              Postgraduate Institute for Medicine<br/>
            </td>
          </tr>
</table>
</div>
<script>print();</script>
</body>
