<body>
<div style="font-size:12.0pt;font-family:Arial, Times, serif;color: #000000;clear: both;width: 620px;margin: auto;padding: 0px;">
<table cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="3" valign="bottom" align="center"  style="width: 601px;margin: 0px;padding: 0px; height: 63px;line-height: 0px">
        <img src="<?php print $img_url?>mer_ancc_header.jpg" width="601" height="36"></img>
    </td>
  </tr>
  <tr>
    <td valign="top" align="left" style="width:40px;padding: 0px 0px 0px 0px; line-height: 0px">
      <img src="<?php print $img_url?>mer_ancc_left.jpg" height="560px"></img>
    </td>
    <td valign="top" align="center" style="width: 514px;">
    
<table>
          <tr>
            <td align="center" colspan="2" style="padding-top:0px; font-weight:bold;font-size:18.0pt;">Certificate of Credit</td>
          </tr>           
          <tr>
            <td align="center" colspan="2" style="padding-top:20px">Medical Education Resources, Inc. <br/> <span style='font-style: italic;'>Certifies that</span>
            </td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><span style='font-weight: bold;'><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></span>, <?php print $certificate['professionlabel']; ?>
            </td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px;">has participated in the enduring material titled</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px; font-weight: bold"><?php print $certificate['course_title'] ?> </td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px; font-weight: bold">on  <?php print strftime("%B %d, %Y", strtotime($certificate['dateearned']));//$certificate['dateearned'] ?></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px;">
              and is awarded <?php print $certificate['creditearned'].$pratext ?>           
            </td>
          </tr>
          <tr>
            <td align="left" colspan="2" style="padding-top:20px;padding-bottom:0px;font-size:11.0pt;">Medical Education Resources designates this enduring material for a maximum of <?php print $certificate['amapracat1'].$pratext ?>.<br/>
            Physicians should claim only the credit commensurate with the extent of their participation in the activity.
            </td>
          </tr>  
          <tr>
            <td align="center" colspan="2" style="padding-top:20px;padding-bottom:0px; font-size: 10pt;">
              <img src="<?php print $img_url?>mer_signature.png"></img><br/>              
              Nathan Scott - Education Director<br/> 
              &nbsp;<?php //print $certificate['dateearned']?>
            </td>
          </tr>
          <tr>
              <td align="left" valign="top"><img src="<?php print $img_url?>mer_logo-new.jpg" height="59"></img></td>
              <td align="left" style="font-size: 10pt">Medical Education Resources, Inc. <br/> 9785 S Maroon Circle, Suite 100, Englewood, CO 80112</td>
          </tr>
</table>

    </td>
    <td valign="top" align="right" style="width: 46px;padding: 0px 0px 0px 0px; line-height: 0px">
      <img src="<?php print $img_url?>mer_ancc_right.jpg" height="560px"></img>
    </td>
  </tr>
  <tr>
    <td colspan="3" valign="top" align="center"  style="width: 601px;margin: 0px;padding: 0px; height: 36px;line-height: 0px">
      <img src="<?php print $img_url?>mer_ancc_footer.jpg" width="601px" height="36px"></img>
    </td>
  </tr>
</table>
</div>
<script>print();</script>
</body>
