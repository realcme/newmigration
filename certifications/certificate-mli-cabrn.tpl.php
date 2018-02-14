<?php
$pratext = ' <i>AMA PRA Category 1 Credit(s)&trade;</i>';
$img_url = $cert_img_url ? $cert_img_url : base_path().path_to_theme().'/img/';
$earnedcredit = $certificate['creditearned'];
if (strpos($earnedcredit, '.') === false) $earnedcredit .= '.0';
$credit = $certificate['cabrn'];
if (strpos($credit, '.') === false) $credit .= '.0';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language; ?>" xml:lang="<?php print $language; ?>">

<head>
  <title><?php print $head_title; ?></title>
</head>
<body>
<div style="font-size:11.0pt;font-family:Times New Roman, Times, serif;color: #000000;width: 626px;clear: both;margin:auto">
<table width="620px" style="border: none;padding:5px">
          <tr>
            <td align="left" style="padding-top:0px"><img src="<?php print $img_url?>mli_logo.jpg"></img></td>
            <td align="right" style="padding-top:0px;color:#B8B8B8"><span style="font-weight:bold">Medical learning Institute, Inc.</span><br/>
            <span style="font-size:8pt;"> LEADERS IN MEDICAL ACCREDITATION</span></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:20px;font-weight:bold"><?php print $certificate['course_title'] ?></td>
          </tr>   
          <tr>
            <td align="left" colspan="2" style="padding-top:20px;">
            
              <table>
                <tr>
                  <td valign="top">CE Activity Provider NAME:</td>
                  <td valign="top" style="padding-left:10px;">Medical Learning Institute Inc</td>
                </tr>
                <tr>
                  <td valign="top">CE Activity Provider Address:</td>
                  <td valign="top" style="padding-left:10px;">203 Main Street, Suite 249 <br/>Flemington, NJ 08822</td>
                </tr>
                <tr>
                  <td valign="top">DATE:</td>
                  <td valign="top" style="padding-left:10px;"><?php print $certificate['dateearned'] ?></td>
                </tr>
                <tr>
                  <td valign="top">LOCATION:</td>
                  <td valign="top" style="padding-left:10px;"><?php print $certificate['@location'] ?></td>
                </tr>
                <tr>
                  <td valign="top">PARTICIPANT NAME:</td>
                  <td valign="top" style="padding-left:10px;"><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></td>
                </tr>               	
              </table>
            </td>
          </tr>   
          <tr>
            <td align="left" colspan="2" style="padding-top:15px;">has been awarded <?php print $earnedcredit ?> CE contact hour for successful completion of this educational activity.</td>
          </tr>
          <tr>
            <td align="left" colspan="2" style="padding-top:15px;">
            Medical Learning Institute Inc <br/>
            Provider approved by the California Board of Registered Nursing, Provider Number 15106, for <?php print $credit ?> contact hour.
            </td>
          </tr>
          <tr>
            <td align="left" colspan="2" style="padding-top:15px;">
              <span style="font-weight:bold"> Registered License Number.</span>  
                When nursing credit is offered, The California Code of Regulations: Section 1458 Course Verification, requires your registered nurse license number. We have that listed as:
                <br/>
                <span style="font-family: serif;font-weight:bold;font-size:9pt"> Registered License Number:</span>  <?php print $certificate['state_license_number']?>
            </td>
          </tr>
          <tr>
              <td align="left" colspan="2" style="padding-top:15px;">
              <img src="<?php print $img_url?>mli_signature.jpg"></img><br/>
              Kristin Gusack, RD CCMEP<br/>
              Administratively Responsible for CE Activity
            </td>
          </tr>    
          <tr>
            <td align="center" colspan="2" style="padding-top:10px;font-size:8pt">This certificate must be retained by the licensee for a period of four years following the completion of this educational activity</td>
          </tr>       
          <tr>
            <td align="center" colspan="2" style="padding-top:10px;font-size:8pt;color:#B8B8B8">203 MAIN STREET, SUITE 249, FLEMINGTON, NJ 08822<br/>
            Tel: 609.333.1693 &bull; Fax: 609.333.1694 &bull; www.mlicme.org  
            </td>
          </tr>       
</table>
</div>
<script>print();</script>
</body>
</html>