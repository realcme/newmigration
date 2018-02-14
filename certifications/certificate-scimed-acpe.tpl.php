<?php
$pratext = ' <i>AMA PRA Category 1 Credit(s)&trade;</i>';
$img_url = $cert_img_url ? $cert_img_url : base_path().path_to_theme().'/img/';
$upn = $certificate['@upn'];
//
/**************************************************/
/* STYLES MUST BE INLINED (GMAIL REQUIREMENT)     */
/**************************************************/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"
  lang="<?php print $language; ?>" xml:lang="<?php print $language; ?>">

<head>
<title><?php print $head_title; ?></title>
</head>

<body>
<div
  style="font-size: 12.0pt; font-family: Times New Roman, Times, serif; color: #000000; clear: both; width: 600px; margin: auto; padding: 0px;">

<table
  style="border-width: 3px; border-spacing: 2px; border-style: double; border-color: gray; border-collapse: separate;"
  width="600px">
  <tr>
    <td align="center">
    <p style="margin-top: 10px">Universal Program Number: <?php print $upn ?></p>
    <p style="font-style: italic; margin-top: 15px">Statement of Credit</p>
    <p style="border-bottom: 1px black solid; width: 90%; margin: 20px 0;"><?php print $certificate['fullname'] ?></p>
    <p>has participated in the educational activity entitled</p>
    <p style="font-weight: bold;"><?php print $certificate['course_title'] ?></p>
    <p style="font-size: 12pt;">An Internet-based activity on</p>
    <p style="border-bottom: 1px black solid; width: 50%;"><?php print $certificate['dateearned'] ?></p>
    <p>SCIMED IS ACCREDITED BY THE ACCREDITATION COUNCIL FOR PHARMACY
    EDUCATION AS A PROVIDER OF CONTINUING PHARMACY EDUCATION.</p>
    <p style="text-align: center;"><img src="<?php print $img_url ?>acpe_logo.png" width="55px" height="49px" /> <br />
    Number of credit hours claimed: <?php print $certificate['creditearned'] ?>
    </p>
    <p style="text-align: right; padding-right: 10px"><img src="<?php print $img_url ?>scimed_signature.jpg" width="270px" height="80px" /><br />
      <?php print $certificate['dateearned'] ?></p>

    <img src="<?php print $img_url ?>scimed_logo.gif" />

    <p>SciMed 420 Lexington Ave, Suite 902 New York, NY 10170 <br />
    tel 212 &bull; 661 &bull; 8333 fax 212 &bull; 661 &bull; 8338</p>

    </td>
  </tr>
</table>
</div>
<script>print();</script>
</body>

</html>
