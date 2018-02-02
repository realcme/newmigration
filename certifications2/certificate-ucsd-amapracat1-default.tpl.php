<body>
<div style="font-size:11.0pt;font-family:Times New Roman, Times, serif;color: #000000;clear: both;margin: auto;width: 625px;padding: 0px;">
    <table style="border: 1px solid black; width:600px;padding:10px">
      <tr><td align="center"  valign="middle">
            <table width="100%" style="border: 1px solid black;padding:5px">
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><img src="<?php print $img_url?>uc-san-diego-som-logo.jpg" width="236" style="width: 236px;"></img></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:25px"><span style='font-size:16.0pt;'>Certificate of Attendance</span></td>
          </tr>          
          <tr>
            <td align="left" colspan="2" style="padding-top:25px">
              University of California, San Diego School of Medicine Continuing Medical Education certifies that 
              <span style='font-weight: bold;'><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?> </span>
              has participated in the <?php print $activity?> titled 
              <span style='font-weight: bold;'><?php print $certificate['course_title'] ?></span> 
              <?php /* print $certificate['@location']
              on <span style='font-weight: bold;'><?php print $date?></span>.*/?>
              This activity was designated for <span style='white-space:nowrap;'><span style='font-weight: bold;'><?php $n = $certificate['amapracat1']; print number_format($n, ($n == 1) ? 1 : 2, '.', ''); ?></span> <?php print $pratext?></span>.
            </td>
          </tr>
          <tr>
            <td align="left" colspan="2" style="padding-top:25px;font-weight:bold">Credits claimed: <?php $n = $certificate['creditearned']; print number_format($n, ($n == 1) ? 1 : 2, '.', ''); ?></td>
          </tr> 
          <tr>
            <td align="left" colspan="2" style="padding-top:15px;">
              Venue: Internet <br/>
              Start Date: <?php print $certificate['begin_date'] ?> - Expiration Date:  <?php print $certificate['expiration_date'] ?>
            </td>
          </tr> 
          <?php if (strpos($aacn, '@aacn') > 0 || intval($aacn) > 0) { ?>
          <tr>
            <td align="left" colspan="2" style="padding-top:25px;font-size:9pt;">
              <strong>AACN:</strong> This program has been approved for the American Association of Critical Care Nurses (AACN)
              for <?php print $aacn?> Contact Hours <?php print $aacnfile?>
            </td>
          </tr>                    
          <?php } ?>
          <?php if (strpos($aapa, '@aapa') > 0 || intval($aapa) > 0)  { ?>
          <tr>
            <td align="left" colspan="2" style="padding-top:25px;font-size:9pt;">
              <strong>AAPA:</strong> AAPA accepts certificates of participation for educational activities certified for <?php print $pratext?>
              from organizations accredited by ACCME or a recognized state medical society.
              Physician assistants may receive a maximum of <strong><?php print $aapa?></strong> hours of Category 1 credit for completing this program.
            </td>
          </tr>                    
          <?php } ?>
          <?php if (strpos($brn, '@brn') > 0 || intval($brn) > 0)  { ?>
          <tr>
            <td align="left" colspan="2" style="padding-top:25px;font-size:9pt;">
              <strong>Nurses:</strong> For the purpose of recertification, the American Nurses Credentialing Center accepts <?php print $pratext?> 
              issued by organizations accredited by the ACCME. For the purpose of relicensure, the California Board of Registered Nursing accepts 
              <?php print $pratext?> (report up to <strong><?php print $brn?></strong> hours of credit and list "CME Category 1" as the provider number).
            </td>
          </tr>                    
          <?php } ?>
          <tr>
            <td align="center" colspan="2" style="padding-top:25px;padding-bottom:50px;font-size:9pt;font-style:italic">Participants should claim only the credit commensurate with the extent of their participation in the activity.</td>
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
