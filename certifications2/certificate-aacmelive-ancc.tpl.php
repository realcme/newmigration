<body>
<div style="font-size:11.0pt;font-family:Arial, Times, serif;width: 600px;margin: auto;">
<table width="600px" style="border: none">
    <tr>
      <td align="center" colspan="2">
        <img src="<?PHP print $img_url . 'aacme_logo.png'; ?>"></img>
      </td>
    </tr>
    <tr>
      <td colspan="2" align="center" style="padding-top:30px">Certifies that</td>
    </tr>
    <tr>
      <td colspan="2" align="center" style="padding-top:10px;font-weight:bold; font-size: 20px;"><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></td>
    </tr>
    <tr>
      <td colspan="2" align="center" style="padding-top:10px">has participated in the <?php print $act ?> titled</td>
    </tr>
    <tr>
      <td colspan="2" align="center" style="padding-top:10px;font-weight:bold; font-size: 18px;"><?php print $certificate['course_title'] ?></td>
    </tr>

    <tr>
      <td colspan="2" align="center" style="padding-top:50px;font-weight:bold;">
<span style="border-top: 1px solid #000;">Please provide date of activity attended.</span>
</td>
    </tr>
    <tr>
      <td colspan="2" align="center" style="padding-top:50px;font-weight:bold;">
<span style="border-top: 1px solid #000;">Please provide City/State of activity attended. </span>
</td>
    </tr>
    <tr>
      <td colspan="2" align="center" style="padding-top:20px;font-weight:bold;">and has been awarded  <?php printf("%4.2f", $certificate['creditearned']) ?> contact hours for successful completion of this activity.</td>
    </tr>
    <tr>
      <td colspan="2" align="center" style="padding-top:20px;font-weight:bold;">American  Academy of CME, Inc. is accredited as a provider of continuing nursing education by
the American Nurses Credentialing Center’s Commission on Accreditation.
</td>
    </tr>
    <tr colspan="2" align="center">
      <td style="padding-top:40px;">
        <img src="<?PHP print $img_url . 'aacme_sign.png'; ?>"></img>
</td>
    </tr>
    <tr>
      <td colspan="2" align="center" style="padding-top:40px;font-size:10px;">2275 West County Line Road │ Suite 6-329 │ Jackson, NJ 08527 │ Tel 609-921-6622 │ Fax 609-921-6428 │ CEServices@academycme.org</td>
    </tr>

</table>
</div>
<script>print();</script>
</body>
