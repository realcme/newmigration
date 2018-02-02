<body>
<div style="font-size:11.0pt;font-family:Times New Roman, Times, serif;color: #000000;width: 626px;clear: both;margin:auto">
<table width="620px" style="border: none;padding:5px">
          <tr>
            <td align="center" colspan="2" style="padding-top:20px;">
              <table style="width:100%;">
                <tr>
                  <td align="left" valign="top" style="width:25%;padding-top:5px"><img src="<?php print $img_url?>mli_logo3.jpg"></img></td>
                  <td align="center" valign="top" style="width:50%;padding-top:5px;font-weight:bold;font-size:14pt;color:#B8B8B8;">
                  Medical Learning Institute, Inc.<br/>
                  <span style="font-size:12pt">Leaders in Medical Accreditation</span></td>
                  <td align="right" valign="top" style="width:25%;padding-top:5px"><img src="<?php print $img_url?>acpe_logo.png"></img></td>
                </tr>
                </table>
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:20px;font-weight:normal;font-size:12pt">STATEMENT OF CONTINUING PHARMACY EDUCATION CREDIT</td>
          </tr>  
          <tr>
            <td align="center" colspan="2" style="padding-top:25px;"><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></td>
          </tr> 
          <tr>
            <td align="center" colspan="2" style="padding-top:25px;">Has participated in the <?php print $certificate['@uantype']?></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:20px;font-weight:bold;font-style:italic"><?php print $certificate['course_title'] ?></td>
          </tr>      
          <tr>
            <td align="center" colspan="2" style="padding-top:25px;"><?php print ucwords($certificate['@ed']) ?></td>
          </tr>    
          <tr>
            <td align="center" colspan="2" style="padding-top:30px;font-size:9pt">
              <table>
                <tr>
                  <td align="left" valign="top" style="padding-top:5px;padding-right:8px">
                  <?php print $certificate['@uan'] ?><br/>
                  Contact Hours Issued: <?php print $earnedcredit?>  (<?php print $ceu?> CEU) <br/><br/>
                  <?php print $certificate['@acpe_program']?>
                  </td>
                  <td align="center" valign="top" style="padding-top:5px"><img src="<?php print $img_url?>mli_signature.jpg"></img><br/>
                    Continuing Education Administrator <br/>
                    Original Signature Date: <?php print $release_date?></td>
                  <td align="right" valign="top" style="padding-top:5px;padding-left:8px">
                    Date of Issuing of Credit: <?php print $issue_date?><br/>
                    Original Release Date: <?php print $release_date?>
                  </td>
                </tr>
                </table>
            </td>
          </tr>
          <tr>
            <td align="left" colspan="2" style="padding-top:30px;font-size:10pt">The Medical Learning Institute Inc is accredited by the Accreditation Council for Pharmacy Education as a provider of continuing pharmacy education.</td>
          </tr>    
          <tr>
            <td align="center" colspan="2" style="padding-top:25px;font-size:10pt;color:#B8B8B8">203 Main Street, #249, Flemington, NJ  08822 – 609.333.1693 (t) – 609.333.1694 (f) 
            </td>
          </tr>      
</table>
</div>
<script>print();</script>
</body>
