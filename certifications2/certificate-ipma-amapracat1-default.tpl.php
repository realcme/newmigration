<body>
<div style="font-size:12.0pt;font-family:Arial, Times, serif;color: #000000;clear: both;width: 600px;margin: auto;padding: 0px;">
<table width="600px">
          <tr>
            <td align="left" colspan="2" style="padding-top:5px"><img src="<?php print $img_url?>ipma_logo.jpg" style="width: 179px; height: 79px;"></img></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><span style='font-size:14.0pt;'>Certificate of Participation</span></td>
          </tr>          
          <tr>
            <td align="left" colspan="2" style="padding-top:15px">Date of Issue:  <?php print $certificate['dateearned'] ?></td>
          </tr>          
          <tr>
            <td align="left" colspan="2" style="padding-top:5px"><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?><?php print $occupation?></td>
          </tr>          
          <tr>
            <td align="left" colspan="2" style="padding-top:5px"><?php print $certificate['address'] ?></td>
          </tr>          
          <tr>
            <td align="left" colspan="2" style="padding-top:20px">This certificate verifies that the person listed above has successfully completed the CME activity entitled <span style="font-weight: bold"><?php print $certificate['course_title'] ?></span>. This activity has been planned and implemented in accordance with the Essential Areas and policies of the Accreditation Council for Continuing Medical Education. IPMA is accredited by the ACCME to provide continuing medical education for physicians.</td>
          </tr>
          <tr>
            <td align="left" colspan="2" style="padding-top:10px">IPMA certifies that the person listed above has participated in the education activity titled <span style="font-weight: bold"><?php print $certificate['course_title'] ?></span>. This activity was designated for <?php print $certificate['amapracat1'].$pratext?>.</td>
          </tr>          
          <tr>
            <td align="right" colspan="2" style="padding-top:25px"><img src="<?php print $img_url?>ipma_signature.gif" style="width: 182px; height: 40px;"></img><br/>
            Mary W. Ales, Executive Director
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:20px">
                Interstate Postgraduate Medical Association of North America, P. O. Box 5474, <br/>
                Madison, Wisconsin 53705 608-231-9045 www.ipmameded.org 1266 
            </td>
          </tr>
</table>
</div>
<script>print();</script>
</body>
