<body>
<div style="font-size:11.0pt;font-family:Arial, Times, serif;width: 600px;margin: auto;">
<table width="600px" style="border: none">
    <tr>
      <td align="center" colspan="2">
        <img width="200" src="<?php print $img_url?>cmsc_logo.png"></img><br/>
        certifies that
      </td>
    </tr>
    <tr>
      <td colspan="2" align="center" style="font-size: 24px;padding-top:12px;font-weight: bold">
<?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?>
</td>
    </tr>
    <tr>
      <td colspan="2" align="center" style="font-size: 18px; padding-top:12px;border-top: 1px solid #000">
has participated in the enduring educational activity titled
      </td>
    </tr>
    <tr>
      <td colspan="2" align="center" style="font-size: 24px;padding-top:12px;font-weight:bold"><?php print $certificate['course_title'] ?></td>
    </tr>
    <tr>
      <td colspan="2" align="center" style="font-size: 18px;padding-top:35px">
       at <?php print $certificate['url'] ?> on <?php print $certificate['dateearned'] ?><br/>
       and is awarded <?php printf("%.1f", $certificate['creditearned']) ?> <i>AMA PRA Category 1 Credit(s)™</i>
    </td>
    </tr>

    <tr>
    <td colspan="2" align="center" style="padding-top:22px">
        <img width="200" style="border-bottom: 1px solid #000" src="<?php print $img_url?>cmsc_signature.png"></img><br/>
        Laurie Scudder, DNP, NP<br/>
        Director, Continuing Professional Education<br/>
    </td>
    </tr>
    <tr>
    <td colspan="2" align="center" style="padding-top:22px;font-weight:bold">
CMSC is accredited by the Accreditation Council for Continuing Medical Education<br/>
to provide continuing medical education for physicians.
    </td>
    </tr>

</table>
</div>
<script>print();</script>
</body>
