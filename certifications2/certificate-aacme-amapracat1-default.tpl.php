<body>
<div style="font-size:11.0pt;font-family:Arial, Times, serif;width: 600px;margin: auto;">
<table width="600px" style="border: none">
    <tr>
      <td align="center" colspan="2">
        <img src="<?PHP print $img_url . 'aacme_logo.png'; ?>"></img>
      </td>
    </tr>
    <tr>
      <td colspan="2" align="center" style="padding-top:30px">Certifies that </td>
    </tr>
    <tr>
      <td colspan="2" align="center" style="padding-top:10px;font-weight:bold; font-size: 20px;"><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></td>
    </tr>
    <tr>
      <td colspan="2" align="center" style="padding-top:10px">has participated in the educational activity titled</td>
    </tr>
    <tr>
      <td colspan="2" align="center" style="padding-top:10px;font-weight:bold; font-size: 18px;"><?php print $certificate['course_title'] ?></td>
    </tr>
    <tr>
      <td colspan="2" align="center" style="padding-top:10px;font-weight:bold;"><?php print $certificate['url'] ?></td>
    </tr>
    <tr>
      <td colspan="2" align="center" style="padding-top:10px;font-weight:bold;"><?php print $date ?></td>
    </tr>
    <tr>
      <td colspan="2" align="center" style="padding-top:20px;"></td>
    </tr>
    <tr>
      <td colspan="2" align="center" style="padding-top:20px;">This educational activity was designated for a maximum of <?php print $cert_amt; print $pratext;?>; <?php print $brn; ?></td>
    </tr>
    <tr>
      <td colspan="2" align="center" style="padding-top:20px;">American Academy of CME, Inc. is accredited by the Accreditation Council for Continuing Medical Education to provide continuing medical education for physicians.</td>
    </tr>
    <tr>
      <td colspan="2" align="center" style="padding-top:20px;"><?php print $upn; ?></td>
    </tr>
    <tr>
      <td colspan="2" align="center" style="padding-top:20px;font-weight:bold;"><i>This is a certificate of participation only.</i></td>
    </tr>
    <tr>
      <td colspan="2" align="center" style="padding-top:40px;font-size:10px;">2275 West County Line Road │ Suite 6-329 │ Jackson, NJ 08527 │ Tel 609-921-6622 │ Fax 609-921-6428 │ CEServices@academycme.org</td>
    </tr>

</table>
</div>
<script>print();</script> 
</body>
