<body>
<div style="font-size:10.0pt;font-family:Arial, sans-serif;color: #000000;width: 626px;clear: both;">
<table width="600px">
          <tr>
            <td align="center" colspan="2" style="padding-top:0px"><img src="<?php print $img_url?>njh_logo.png"></img></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:5px;font-weight:bold">CERTIFICATE OF COMPLETION</td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:10px;font-weight:bold">National Jewish Health<br />certifies that</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:5px;font-weight:bold"><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px;">has participated in the educational activity</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:3px;font-weight:bold"><?php print $certificate['course_title'] ?></td>
          </tr>         
          <tr>
            <td align="center" colspan="2" style="padding-top:3px;font-weight:bold">on <?php print $certificate['dateearned'] ?></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:3px;">This participant attended <?php print $credit?> hour(s) of an activity designated for a maximum of  <?php print $credit.$pratext?></td>
          </tr>
          <tr>
              <td align="center" colspan="2" style="padding-top:25px;font-size:10pt;">
              <img src="<?php print $img_url?>njh_signature.png"></img><br/>
              Harold Nelson, MD<br/>
              Chair, CME Committee
            </td>  
          </tr>  
          <tr>
              <td align="center" colspan="2" style="font-size:10pt;font-weight:bold;">
              Professional Education<br/>
              1400 Jackson Street<br/>
              Denver, CO 80206<br/>
              800-423-8891 x1000<br/>
              303-398-1000<br/>
            </td>
          </tr>          
</table>
</div>
<script>print();</script>
</body>
