<body>
<div style="font-size:10.0pt;font-family:Arial, Times, serif;color: #000000;width: 626px;clear: both;margin:auto">
<table width="620px" style="border: none;padding:5px">
          <tr>
            <td align="left"  colspan="2" valign="top" style="padding-top:0px"><img src="<?php print $img_url?>cafp_logo.jpg"></img></td>
          </tr>
          <tr>
            <td align="left" colspan="2" style="padding-top:1px;font-weight:normal;">
              <?php print $date_earned?><br /><br />
              <?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?><br />
              <?php print $certificate['address']?><br />
            </td>
          </tr>
          <tr>
            <td align="left" colspan="2" style="padding-top:10px;font-weight:bold">CERTIFICATE OF PARTICIPATION</td>
          </tr>   
          <tr>
            <td align="left" colspan="2" style="padding-top:5px;">This certificate verifies that the person listed above has successfully completed the online educational activity titled:</td>
          </tr>    
          <tr>
            <td align="center" colspan="2" style="padding-top:10px;font-weight:bold"><?php print $certificate['course_title'] ?></td>
          </tr>  
          <tr>
            <td align="left" colspan="2" style="padding-top:10px;">
            This activity, <em><?php print $certificate['course_title'] ?></em>, has been reviewed and is acceptable 
            for up to <?php print $certificate['amapracat1'] ?> Prescribed credit(s) by the American Academy of Family Physicians. 
            AAFP accreditation begins <?php print $date_begin?>. Term of approval is for one year from this date. <br /><br />
            
            The CAFP is accredited by the Accreditation Council for Continuing Medical Education to provide continuing education for physicians.
            The CAFP designates this educational activity for a maximum of <?php print $certificate['amapracat1'].$pratext ?>.  <br /><br />
            
            AAFP Prescribed credit is accepted by the American Medical Association as equivalent to <?php print $pratext?> toward the AMA Physician's 
            Recognition Award.
            When applying for the AMA PRA, Prescribed credit earned must be reported as Prescribed, not as Category 1. <br /><br />

            Clinicians should only claim credit commensurate with the extent of their participation in the activity.
            

            </td>
          </tr>  
          <tr>
            <td align="left" colspan="2" style="padding-top:15px;">
              <img src="<?php print $img_url?>cafp_signature1.jpg"></img><br/>
              Carol Havens, MD, Chair, CAFP Committee on Continuing Professional Development
            </td>
          </tr>    
          <tr>
            <td align="left" colspan="2" style="padding-top:15px;padding-bottom:15px;">
              <img src="<?php print $img_url?>jerri-l-davis-signature.png"></img><br/>
              Jerri L. Davis, CHCP<br/>
              Director of Continuing Professional Development, California Academy of Family Physicians
            </td>
          </tr>   
          <tr>
            <td align="left" colspan="2" style="padding-top:5px;font-size:9pt;border-top:1px solid black">1520 Pacific Avenue  /  San Francisco  CA  94109  /  415 345 8667  /  f 415 345 8668  /  cafp@familydocs.org</td>
          </tr>
</table>
</div>
<script>print();</script>
</body>
