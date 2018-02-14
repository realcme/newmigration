<body>
<div style="font-size:11.0pt;font-family:Arial, Times, serif;color: #000000;width: 626px; margin:auto;clear: both;">
<table width="600px">
          <tr>
            <td align="center" colspan="2" style="padding-top:5px">
              <table>
                <tr>
                  <td><img src="<?php print $img_url?>umms_logo.png"></img></td>
                  <td>
                    <span style="font-size: 10pt">
	                  <span style="font-weight: bold;white-space:nowrap;">Office of Continuing Medical Education</span><br/>
	                  <span style="font-weight: bold;">Department of Medical Education</span><br/>
										G1200 Towsley Center <br/>
										1500 East Medical Center Drive SPC 5201<br/>
										Ann Arbor, MI  48109-5201<br/>
                    </span>
                  </td>
                  <td align="right">
                    <span style="font-size: 10pt">
	                  <span style="white-space:nowrap;">Phone: (800) 800-0666</span><br/>
										Fax: (734) 615-6129<br/>
										Email: OCME@umich.edu<br/>
										http://cme.med.umich.edu<br/>
                    </span>
                  </td>
                </tr>
              </table>
              </td>
          </tr>
          <tr>
            <td align="left" colspan="2" style="padding-top:25px">Print or electronically save this page to document your CME participation.</td>
          </tr> 
          <tr>
            <td align="left" colspan="2" style="padding-top:25px"><?php print $certificate['dateearned'] ?></td>
          </tr> 
          <tr>
            <td align="left" colspan="2" style="padding-top:5px"><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?><br/><?php print $certificate['address']?></td>
          </tr>
          <tr>
            <td align="left" colspan="2" style="padding-top:10px">Dear <?php print $certificate['fullname'] ?></td>
          </tr> 
          <tr>
            <td align="left" colspan="2" style="padding-top:15px">
            Non-Physician Record of Attendance:<br/><br/>
            The University of Michigan Medical School certifies that on <?php print $certificate['dateearned'] ?> 
            you participated in the continuing medical education on-line activity entitled 
            <span style="font-style:italic">"<?php print $certificate['course_title'] ?>"</span>.
            <br/><br/>
            Please print and retain this letter as your documentation of participation.
            <br/><br/>
            We appreciate your participation in this CME activity and hope you will consider participating in our future CME activities.  
            If I can be of further assistance, you are most welcome to contact me.
            <br/><br/>
            Sincerely, 
            </td>
          </tr>             
          <tr>
            <td align="left" colspan="2" style="padding-top:15px">
              <img src="<?php print $img_url?>umms_signature.png"></img><br />
              <span style='padding-bottom:0px;'>Pam Little</span><br />
              <span style='padding-top:0px'>Administrative Associate</span><br />
            </td>
          </tr>          
</table>
</div>
<script>print();</script>
</body>
