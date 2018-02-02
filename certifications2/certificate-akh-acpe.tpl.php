<body>
<div style="font-size:11.0pt;font-family:Arial, Times, serif;width: 600px;margin: auto;">
<table width="600px" style="border: none">
    <tr>
      <td colspan="2" align="center" style="padding-top:12px;font-weight: bold;color:#000080">Statement of Continuing Education Credit</td>
    </tr>
    <tr>
      <td colspan="2" align="center" style="padding-top:4px;border-bottom:1px solid #000080">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2" align="center" style="padding-top:20px;font-weight: bold;"><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></td>
    </tr>
    <tr>
      <td colspan="2" align="left" style="padding-top:12px;">License #: <?php print $certificate['state_license_number']?></td>
    </tr>
    <tr>
      <td colspan="2" align="center" style="padding-top:12px;">AKH Inc., Advancing Knowledge in Healthcare certifies that the individual listed has participated in the enduring independent study activity titled:</td>
    </tr>
    <tr>
      <td colspan="2" align="center" style="padding-top:12px;font-weight:bold"><?php print $certificate['course_title'] ?></td>
    </tr>
    <tr>
      <td colspan="2" align="center" style="padding-top:12px;">on <?php print $issue_date ?></td>
    </tr>
    <tr>
      <td colspan="2" align="left" style="padding-top:20px;">
        <div style="float: left; vertical-align: top; padding-right:5px"><img src="<?php print $img_url ?>acpe_logo.png"></img></div>
        AKH Inc., Advancing Knowledge in Healthcare is accredited by the Accreditation Council for Pharmacy Education (ACPE) as a provider of continuing pharmacy education.<br />
      </td>
    </tr>
    <tr>
      <td colspan="2" align="left" style="padding-top:20px;">
        AKH Inc., Advancing Knowledge in Healthcare approves this <?php print $certificate['@uantype']?> activity for <?php print $certificate['acpe']?> contact hour<?php print $pluralapproved?> (<?php print $ceuapproved ?> CEU(s)).<br/>
      </td>
    </tr>
    <tr>
      <td align="left" style="padding-top:10px;vertical-align: top">
        UAN: <?php print $certificate['@uan']?> <br /> 
        Release Date: <?php print $akh_release_date?> <br /> 
        Program Expiration Date: <?php print $akh_expiration_date?><br /><br/>
        <strong>Awarded credit: </strong> <?php print $certificate['creditearned'] ?> contact hours
      </td>
       <td align="left" style="padding-top:10px;font-style:italic;font-size:10pt;vertical-align: top">
       This is not an official statement of credit. 
       To receive your official statement of credit you must go to your NABP e-profile to print an individual statement of credit or a transcript. 
       Statements will be available 60 days after completing this continuing education activity.
       </td>
    </tr>
    <tr>
      <td colspan="2" align="left" style="padding-top:20px;">&nbsp;</td>
    </tr>
    
    <tr>                  
      <td style="width: 50%;vertical-align: top; text-align: left;padding-left: 5px; font-size:10pt">
        <img src="<?php print $img_url?>akh_signature.png"></img><br />  
        Steve Eckert <br />
        President and CEO<br />
        <br />
        Issue Date: <?php print $issue_date ?> <br />
        Unique Certificate ID: <?php print $certificate['refid'] ?><br />
        AKH Identifier: <?php print $certificate['@akhid']?> <br />
      </td>
      <td style="width: 50%;vertical-align: top;text-align: center;padding-bottom: 5px;padding-left: 10px; font-size:10pt">
        <img src="<?php print $img_url?>akh_logo.png" style="width:150px;"></img><br />  
        P.O. Box 24104<br />
        Jacksonville, FL 32241-4104<br />
        904-683-8843<br />
        Fax 1-866-352-6285<br />
      </td>
    </tr>
</table>
</div>
<script>print();</script>
</body>
