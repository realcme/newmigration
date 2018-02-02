<body>
<div style="font-size:12.0pt;font-family:family:Helvetica, Times, serif;color: #000000;width: 600px;margin: auto;clear: both;">
<table width="600px" style="border: 1px solid black;">
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><img src="<?php print $img_url?>dannemiller2_logo.png" style="width: 366; height: 103;"></img></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:15px;"><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:15px;">STATE: <?php print $certificate['state'] ?>, &nbsp; &nbsp; &nbsp; LICENSE #: <?php print $certificate['state_license_number'] ?></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:15px;">Dannemiller certifies that the above individual has participated in the educational activity titled </td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:20px;"><?php print $certificate['course_title'] ?></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:10px;">on <?php print $certificate['dateearned'] ?> and earned <?php print $amountearned?> contact hour(s).</td>
          </tr>        
          <tr>
            <td align="center" colspan="2" style="padding-top:20px;">This activity is approved for  <?php print $cabrn?> continuing education contact hour(s).<br/> 
            Dannemiller is approved by the California Board of Registered Nursing, Provider Number 4229. 
            <br />
            <br />
            This document must be retained by the licensee for a period of four years after the course concludes. </td>
          </tr>           
          <tr>
            <td align="left" colspan="2" style="padding-top:25px;padding-left: 10px">
              <img src="<?php print $img_url?>dannemiller_signature_2.jpg" width="200px" height="77px"></img><br />
              Michelle Montgomery, MA, CCMEP <br />
							Director of Continuing Education<br />
							Dannemiller <br />
            </td>
          </tr>            
          <tr>
            <td align="center" colspan="2"  style="padding-top:25px;font-size:10.0pt;" >            	
            5711 Northwest Parkway – Suite 100 – San Antonio, Texas 78249-3360 <br/> 210-641-8311 – 1-800-328-2308 – Fax 210-697-9318
            </td>
          </tr>    
</table>
</div>
<script>print();</script>
</body>
