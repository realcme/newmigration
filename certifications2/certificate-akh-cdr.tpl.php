<body>
<div style="font-size:10.0pt;font-family:Arial, Times, serif;width: 600px;margin: auto;">
<table width="600px" style="border: 2px solid #303030 ">
  <tr><td>
        <table style="border: 2px solid #303030">
          <tr>
            <td align="center" style="padding-top:12px"><span style='font-weight: bold'>Statement of Continuing Education Credit</span></td>
          </tr>
          <tr>
            <td align="center" style="padding-top:12px">
            <table style="border-spacing: 8px">
              <tr>
                <td style="width: 50%;vertical-align: top;text-align: left;padding-bottom: 5px;">
                <img src="<?php print $img_url?>cdr_logo.png"></img><br/>
                AKH Inc. is a Continuing Professional Education (CPE) Accredited Provider with the Commission on Dietetic Registration (CDR).
                </td>
                <td  style="vertical-align: middle;width: 50%;text-align: left;padding-left: 5px;">
                    <strong><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></strong> 
                </td>
              </tr>
              <tr>                  
                <td style="width: 50%;vertical-align: top;text-align: left;padding-bottom: 5px;">
                   CDR Accredited Provider #AN008.<br />
                </td>
                <td style="width: 50%;vertical-align: top;text-align: left;padding-left: 5px;">
                    AKH Inc. certifies that the individual listed has participated in the enduring activity titled: 
                    
                </td>
              </tr>
              <tr>                  
                <td style="width: 50%;vertical-align: top;text-align: left;padding-bottom: 5px;">
                  Registered dietitians (RDs) and dietetic technicians, registered (DTRs) will receive <br/> 
                  <?php print $certificate['cdr'] ?> continuing professional education unit<?php print $plural?> (CPEUs) for completion of this program/material.
                  <br />
                  <span style="font-weight:bold">Awarded credit:</span> <?php print $certificate['cdr']?>&nbsp;CPEs.
                </td>
                <td style="width: 50%;vertical-align: top;text-align: center;padding-left: 5px;font-weight:bold">
                    <?php print $certificate['course_title'] ?><br />
                </td>
              </tr>
              <tr>                  
                <td style="width: 50%;vertical-align: top;text-align: left;padding-bottom: 5px;padding-left: 10px; font-size:8pt">
                  <img src="<?php print $img_url?>akh_logo.png" style="width:150px;"></img><br />  
                  P.O. Box 2187<br />
                  Orange Park, FL 32067-2187<br />
                  904-683-8843<br />
                  Fax 1-866-352-6285<br />
                </td>
                <td style="width: 50%;vertical-align: top;text-align: left;padding-left: 5px; font-size:8pt">
                  <img src="<?php print $img_url?>akh_signature.png"></img><br />  
                  Steve Eckert <br />
                  President and CEO<br />
                  Issue Date: <?php print $issue_date ?> <br />
                  Unique Certificate ID: <?php print $certificate['refid'] ?><br />
                  AKH Identifier: <?php print $certificate['@akhid']?> <br />
                </td>
              </tr>
            </table>
            </td>
          </tr>
        </table>  
  </td></tr>  
</table>
</div>
<script>print();</script>
</body>
