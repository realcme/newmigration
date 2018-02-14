<body>
<div style="font-size:10.0pt;font-family: verdana, arial, sans-serif;color: #000000;clear: both;margin: auto;width: 620px;padding: 0px;">
<table width="620px" style="border: 4px solid #CC0000;">
  <tr><td>
    <table style="border: 2px solid #CC0000; width:100%">
          <tr>
            <td align="center" colspan="2" style="padding-top:0px"><img src="<?php print $img_url?>iche_logo.png"></img></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><span style='font-weight:bold;font-size: 14pt'>CONTINUING EDUCATION CERTIFICATE</span></td>
          </tr>          
          <tr>
            <td align="left" colspan="2" style="padding-top:15px;padding-left:10px">
            <?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?><br />
            <?php print $certificate['address'] ?> <br />
            <?php print $certificate['mail'] ?>
            </td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px">The Institute for Continuing Healthcare Education certifies that</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:6px">
              <span style='font-weight:bold;'><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></span><br />
              <img src="<?php print $img_url?>iche_separator.png"></img>
            </td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:0px">has participated in the <?php print $ed?> entitled</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding:10px"><span style='font-weight:bold;'><?php print $certificate['course_title'] ?></span></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:0px">on</td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><span style='font-weight:bold;'><?php print $date ?></span></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:10px;">and is awarded <?php print $certificate['creditearned'].$pratext ?>        
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding:10px;">The Institute for Continuing Healthcare Education is accredited by the Accreditation Council for Continuing Medical Education to provide continuing medical education for physicians.<br /><br /> 
              The Institute for Continuing Healthcare Education designates this enduring material for a maximum of <?php print $certificate['amapracat1'].$pratext ?>. Physicians should only claim credit commensurate with the extent of their participation in the activity.
            </td>
          </tr>                    
          <tr>
            <td align="left" valign="bottom" style="widh:50%;padding-left:20px;padding-bottom:10px;margin-bottom:0px">
              <img src="<?php print $img_url?>iche_signature_2.png"></img><br />
              <div style="">
              Cathy Pagano, CCMEP		<br />			
              President<br />
              Institute for Continuing Healthcare Education<br />
              </div>            </td>
            <td align="right" style="widh:50%;padding-right:30px;padding-bottom:0px;margin-bottom:5px"><?php print $date ?><br />Date Issued
            </td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px;font-size:8pt"> 601 Walnut Street, Suite 275, Philadelphia, PA 19106 &bull; Tel: 866-242-8084 &bull; www.iche.edu       
            </td>
          </tr>               
    </table>  
  </td></tr>  
</table>
</div>
<script>print();</script>
</body>
