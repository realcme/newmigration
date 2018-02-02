<body>
<div style="font-size:11.0pt;font-family:arial, Times New Roman, Times, serif;color: #000000;clear: both;width: 620px;margin: auto;padding: 0px;">
    <table style="width: 624px; margin: 0px;padding: 0px;">
		<tr><td style=" margin: 0px; padding: 0px;">
    <table style="border: 2px solid black; width: 620px;">
        <tr>
        <td align="left" colspan="2" style="padding-top:10px;padding-left:10px;">
          National Lipid Association<br/>
          6816 Southpoint Pkwy, Ste 1000<br/>
          Jacksonville FL 32216<br/>
        </td>
      </tr>
      <tr>
        <td align="center" colspan="2" style="padding-top:25px">
          <img src="<?php print $img_url?>lipid_logo.jpg" style="height: 50%"></img>
          </td>
      </tr>       
      <tr>
        <td align="center" colspan="2" style="padding-top:5px;font-family:'Times New Roman', Times, serif;font-size:18pt; text-transform: uppercase;">
          National Lipid Association
          </td>
      </tr>       
      <tr>
        <td align="center" colspan="2" style="padding-top:10px;font-family:'Times New Roman', Times, serif;font-size:15pt; text-transform: uppercase;">
          STATEMENT OF PARTICIPATION
          </td>
      </tr>      
      <tr>
        <td align="center" colspan="2" style="padding-top:6px;font-weight:bold;font-style:italic"><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></td>
      </tr>          
      <tr>
        <td align="center" colspan="2" style="padding-top:10px">The NLA certifies that the individual listed has participated in the Educational Activity titled:</td>
      </tr>          
      <tr>
        <td align="center" colspan="2" style="padding-top:10px"><span style='font-style:italic;'><?php print $certificate['course_title'] ?></span></td>
      </tr>    
      <tr>
        <td align="center" colspan="2" style="padding-top:15px;font-size:10.0pt;"><span style='font-style:italic;'>
        NLA designates this continuing education activity for <?php print $certificate['ancc']?> Contact Hour.
         </span>         
        </td>
      </tr>          
      <tr>
        <td align="left" valign="bottom" style="width:55%;font-size:10.0pt;padding-left:20px;padding-top:25px;margin-bottom:0px">
          <img src="<?php print $img_url?>lipid_signature_5.jpg"></img><br />
            Linda C. Hemphill, MD, FNLA<br />
            ICE Committee Chair<br />
            National Lipid Association<br />
        </td>
        <td align="left" valign="bottom" style="width:45%;font-size:10.0pt;padding-left:20px;padding-top:25px;margin-bottom:0px">
          <img src="<?php print $img_url?>lipid_signature_3.jpg"></img><br />
            Christopher W. DeVille, CHCP<br />
            ICE Director<br />
            National Lipid Association<br />
        </td>
      </tr>
	  <tr style="padding-top:25px;">
	  	<td style="width:55%;padding-left:20px;padding-top:40px;font-size:10.0pt;vertical-align:top">
        	Activity Type: <?php print $certificate['@nlatype'] ?><br/>
        	Claimed Credit: <?php print $certificate['creditearned'] ?> Contact Hours<br />
        	Date Activity Completed: <?php print $proper_time ?><br />
        </td>
	  	<td style="width:45%;padding-left:20px;padding-top:40px;font-size:10.0pt;vertical-align:top">
	  	    
	  	        <img src="<?php print $img_url?>lipid_a.jpg" style="max-height:60px; padding-left:20px;"></img><br />
	  	</td>
	  </tr>	
      <tr>
        <td align="left" style="width:55%;padding-left:20px;padding-top:10px;font-size:10.0pt;vertical-align:top">
			The licensee must retain this certificate for a period of 4 years after participating in the course.
        </td>
        <td align="left" style="width:45%;padding-left:20px;padding-top:10px;font-size:10.0pt;vertical-align:top">
        In support of improving patient care, The National Lipid Association is jointly accredited by the 
        Accreditation Council for Continuing Medical Education (ACCME), the Accreditation Council for Pharmacy 
        Education (ACPE), and the American Nurses Credentialing Center (ANCC) to provide continuing education for 
        the healthcare team.<br /><br />
        </td>
      </tr>  
    </table></td></tr></table>  

  </div>
<script>print();</script>
</body>
