<body>
<div style="font-size:12.0pt;font-family:Arial, Times, serif;color: #000000;clear: both;width: 600px;margin: auto;padding: 0px;">
<table width="600px" style="border: 4px solid #404040;">
          <tr>
            <td align="center" colspan="2" style="padding-top:15px">STATEMENT OF PARTICIPATION</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><span style='font-style:italic;'>The Postgraduate Institute for Medicine confirms that</span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><span style='font-size:14.0pt;font-weight: bold;'><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?><?php print $occupation ?></span>
            </td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><span style='font-style:italic;'>has participated in the educational activity titled</span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><span style='font-weight:bold;'><?php print $certificate['course_title'] ?></span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px">an <?php print $activity_type ?> on  <?php print $certificate['dateearned'] ?>.
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:15px">
            This educational activity for <?php print $certificate['ancc']?> contact hours<br />is provided by the Postgraduate Institute for Medicine.
            </td>
          </tr>
            <tr>
                <td align="center" colspan="2" style="padding-top:15px">For advanced practice nurse, this activity has <?php print $contact_hours;/*$certificate['pharmacology']*/?> contact hours of pharmacotherapy content. </td>
            </tr>
    <tr>
        <td align="center" colspan="2" style="padding-top:15px">In support of improving patient care, Postgraduate Institute for Medicine is jointly accredited by the Accreditation Council for Continuing Medical Education (ACCME), the Accreditation Council for Pharmacy Education (ACPE), and the American Nurses Credentialing Center (ANCC), to provide continuing education for the healthcare team.</td>
    </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:15px">
            Provider approved by the California Board of Registered Nursing, Provider<br />Number&nbsp;13485, for <?php print $certificate['ancc']?>  contact hours.
            </td>
          </tr>
          <tr>
            <td align="center" style="padding-top:15px; padding-left: 20px"><img src="<?php print $img_url?>pgim_logo.jpg" style="width: 250px; height: 59px;"></img></td>
            <td align="left" style="padding: 15px;font-size: 8pt;">The licensee must retain this certificate for a<br />period of 4 years after participating in the<br />course.</td>
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
