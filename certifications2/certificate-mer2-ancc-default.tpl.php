<body>
<div style="font-size:11.0pt;font-family:Times New Roman,Times,serif;color: #000000;clear: both;margin: auto;width: 600px;padding: 0px;">
    <table style="border: 3px solid black; width:600px">
      <tr><td>
        <table style="border: 1px solid black;">
          <tr>
              <td align="left" valign="top"><img src="<?php print $img_url?>mer_logo.png"></img></td>
              <td align="center" style="white-space: nowrap;">CME CERTIFICATE OF PARTICIPATION</td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:15px">
            Medical Education Resources, Inc.<br/>
						9785 S Maroon Circle, Suite 100<br/>
						Englewood, CO 80112<br/>
						</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px">Course Title:  <span style="font-weight: bold;text-decoration: underline"><?php print $certificate['course_title'] ?></span>
            <br/> Date: <?php print $certificate['dateearned'] ?> </td>
          </tr>         
          <tr>
            <td align="left" colspan="2" style="padding:5px"><span style="font-weight: bold;">Physician Accreditation</span><br/>
							This activity has been planned and implemented in accordance with the Essential Areas and policies of the Accreditation Council for Continuing Medical Education through the joint sponsorship of Medical Education Resources and Consensus Medical Communications.  Medical Education Resources is accredited by the ACCME to provide continuing medical education for physicians.
							<br/>
							<span style="font-weight: bold;">Credit Designation</span><br/>
							Medical Education Resources certifies that the individual listed below has participated in the enduring material titled 
							<span style="font-style: italic;"><?php print $certificate['course_title'] ?></span>  
							on the date listed below. This activity was designated for <?php print $amamax.$pratext ?>.  
							<br/>
							<span style="font-weight: bold;">Nursing Accreditation</span><br/>
							Medical Education Resources is accredited as a provider of continuing nursing education by the American Nurses Credentialing Center’s Commission on Accreditation.
							<br/><br/>
							This CE activity provides <?php print $anccmax?> contact hours of continuing nursing education.  
							<br/><br/>
							Medical Education Resources is a provider of continuing nursing education by the California Board of Registered Nursing, Provider #CEP 12299, for <?php print $anccmax?> contact hours. 
							<br/><br/>
							<?php print $info?>
            </td>
          </tr>           
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><span style="font-weight: bold;text-decoration: underline"><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></span><br/>
            has completed the activity listed above.</td>
          </tr>           
          <tr>
            <td align="center" valign="bottom" style="padding-left:20px;padding-bottom:0px;margin-bottom:0px">
              <img src="<?php print $img_url?>mer_signature.png"></img><br/>              
              Education Director, MER
            </td>
            <td align="center" ><span style="text-decoration: underline"><?php print $certificate['dateearned']?></span><br/>Date</td>
          </tr>
          <tr>
            <td align="left" colspan="2" style="padding:5px;font-size:10pt">
            Release date: <?php print $certificate['begin_date']?> <br/>
            Expiration Date: <?php print $certificate['expiration_date']?>
            </td>
          </tr>          
        </table>  
      </td></tr>  
    </table> 
</div>
<script>print();</script>
</body>
