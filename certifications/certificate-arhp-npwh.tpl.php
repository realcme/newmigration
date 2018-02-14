<?php
$pratext = ' <i>AMA PRA Category 1 Credit(s)&trade;</i>';
$img_url = $cert_img_url ? $cert_img_url : base_path().path_to_theme().'/img/';
$pharmacology = $certificate['npwh'] / 2;
$claim = $certificate['isclaimed'] ?  $certificate['creditearned'] : "_____";
$claimph = $certificate['isclaimed'] ?  ($certificate['creditearned'] / 2) : "_____";
$offering = $certificate['@npwh_offering'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language; ?>" xml:lang="<?php print $language; ?>">

<head>
  <title><?php print $head_title; ?></title>
</head>
<body>
<div style="font-size:9.0pt;font-family:Arial, Times, serif;color: #000000;width: 625px;margin: auto;">
<div style="width:550px;clear:both;margin:auto;">
  <img src="<?php print $img_url?>npwh_logo.png" ></img>
  <img src="<?php print $img_url?>arhp_logo2.png" ></img>
</div>
<table width="600px">
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><span style='font-size:14.0pt; font-weight: bold; font-style:italic'>Continuing Education Certificate</span></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:5px">This is to certify that</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><strong><span style='font-size:12.0pt'><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></span></strong></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:5px">completed the continuing education program entitled</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><span style='text-decoration:underline'><?php print $certificate['course_title'] ?></span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px; font-weight: bold">on <?php print $certificate['dateearned'] ?><br />
            offered by The Association of Reproductive Health Professionals</td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:10px">for a total of <?php print $certificate['npwh'] ?> contact hour(s) including <?php print $pharmacology ?> pharmacology hour(s)</td>
          </tr>    
          <tr>
            <td align="right" style="padding-top:15px;font-size:8pt">
              <img src="<?php print $img_url?>npwh_signature.png"></img><br />
            </td>
            <td align="left" style="padding-top:15px;font-size:8pt;padding-left:10px">
              Susan Wysocki, RNC, NP<br />
              NPWH President and CEO<br />
              <?php print $certificate['dateearned'] ?>
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:20px;">
              This Activity has been evaluated and approved by the Continuing Education Approval Program of the National Association of Nurse Practitioner in Women’s Health for <?php print $certificate['npwh'] ?> contact hours of continuing education credit including <?php print $pharmacology ?> contact hours of pharmacology content.
              <br /><br />
              NPWH Activity No. <?php print $offering?>
              <br />
              Each participant should claim only those contact hours that he/she actually spent in the educational activity. 
              <br />
              <br />
              
              I claim <?php print $claim?> (CE)/ <?php print $claimph?> (pharm) contact hours.____________________ Signature
              </td>
          </tr>      
          <tr>
            <td align="left" style="padding-top:15px;font-size:8pt;padding-left:10px">
            Nurse Practitioners in Women’s Health (NPWH)<br />
            505 C Street, NE <br/>
            Washington, DC 20002<br />
            Phone: 202-543-9693<br />
            <br />
            </td>
            <td align="left" style="padding-top:15px;font-size:8pt">
            Association of Reproductive Health Professionals (ARHP)<br />
            1901 L Street, NW, Suite 300 <br /> 
            Washington, DC 20036<br />
            Phone: (202) 466-3825<br/>
            E-mail: arhp@arhp.org&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Web: www.arhp.org<br />
            </td>
          </tr>       
</table>
</div>
<script>print();</script>
</body>
</html>