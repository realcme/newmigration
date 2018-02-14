<body>
<div style="font-size:11.0pt;font-family:Times New Roman, Times, serif;color: #000000;clear: both;margin: auto;width: 625px;padding: 0px;">
    <table style="border: 1px solid black; width:600px;padding:10px">
      <tr><td align="center"  valign="middle">
            <table width="100%" style="border: 1px solid black;padding:5px">
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><img src="<?php print $img_url?>uc-san-diego-som-logo.jpg" width="236" style="width: 236px;"></img></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:25px"><span style='font-size:16.0pt;'>Physician Certificate of Credit</span></td>
          </tr>          
          <tr>
            <td align="left" colspan="2" style="padding-top:25px">
              University of California, San Diego School of Medicine Continuing Medical Education certifies that 
              <span style='font-weight: bold;'><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?> </span>
              has participated in the <?php print $activity?> titled 
              <span style='font-weight: bold;'><?php print $certificate['course_title'] ?></span> 
              <?php /* print $certificate['@location']
              on <span style='font-weight: bold;'><?php print $date?></span> */?>
              and is awarded <span style='white-space:nowrap;'><span style='font-weight: bold;'><?php $n = $certificate['creditearned']; print number_format($n, ($n == 1) ? 1 : 2, '.', ''); ?></span> <?php print $pratext?></span>.
            </td>
          </tr> 
          <tr>
            <td align="center" colspan="2" style="padding-top:25px;">
              <table style="border-collapse: collapse;">
                <tr>
                  <td valign="top" align="left" style="border: 1px solid #CCCCCC;padding:5px;font-weight:bold;">Credit Approval</td>
                  <td valign="top" align="left" style="border: 1px solid #CCCCCC;padding:5px;font-weight:bold;">Number&nbsp;of&nbsp;Credits&nbsp;Approved</td>
                </tr>
                <tr>
                  <td valign="top" align="left" style="border: 1px solid #CCCCCC;padding:5px;"><?php print $pratext?></td>
                  <td valign="top" align="left" style="border: 1px solid #CCCCCC;padding:5px;">Up to <?php $n = $certificate['amapracat1']; print number_format($n, ($n == 1) ? 1 : 2, '.', ''); ?></td>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td align="left" colspan="2" style="padding-top:15px;">
              Venue: Internet <br/>
              Start Date: <?php print $certificate['begin_date'] ?> - Expiration Date:  <?php print $certificate['expiration_date'] ?>
            </td>
          </tr> 
          <tr>
            <td align="center" colspan="2" style="padding-top:25px;padding-bottom:80px;font-size:9pt;font-style:italic">Physicians should claim only the credit commensurate with the extent of their participation in the activity.</td>
          </tr>          
          <tr>
            <td align="center" style="width:50%;padding-top:0px;padding-bottom:0px;"><img src="<?php print $img_url?>marc-riedl.png" width="250" style="width: 150px;"></img></td>
            <td align="center" style="width:30%;padding-top:0px;padding-bottom:0px;">&nbsp;</td>
          </tr>  
          <tr>
            <td align="left" style="width:50%;padding-top:0px;padding-bottom:0px;border-top:1px solid black;">
                Marc Riedl, MD, MS<br/>
                Professor of Medicine<br/>
                Clinical Director, US HAEA Angioedema Center<br />
                Division of Rheumatology, Allergy and Immunology<br />
                University of California, San Diego<br/>
                San Diego, CA
            </td>
            <td align="left" style="width:50%;padding-top:0px;padding-bottom:0px;border-top:1px solid black; vertical-align: top;">
            Participant Signature</td>
          </tr>  
        </table>
    </td>
  </tr>
</table>
</div>
<script>print();</script>
</body>
