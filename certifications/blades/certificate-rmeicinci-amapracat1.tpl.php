<?php
$name=$page_settings['name'];
$head_title="Head
Title";
$certificate=[
'begin_date'=>'01/01/2017',
'dateearned'=>'01/01/2017',
'expiration_date'=>'01/01/2017',
'creditearned'=>'01/01/2017',
'course_title'=>'title',
]
?>
<body>
<div style="font-size:12.0pt;font-family:Times New Roman,Times,serif;color: #000000;width: 600px;margin: auto;clear: both;">
    <table width="600px" style="margin-top: -50px;">

        <tr>
            <td align="center" colspan="2"><img style="max-width: 125px; height: auto;" src="<?php print $img_url?>cinci-logo.png"></img></td>
        </tr>
        <tr>
            <td align="center" colspan="2" style="padding-top: 15px;"><span style="font-weight: bold; font-size: 18px;">CERTIFICATE OF ATTENDANCE</span></td>
        </tr>
        <tr>
            <td align="center" colspan="2" style="padding-top: 15px;"><span style="font-weight: bold; font-size: 16px;">The University of Cincinnati</span></td>
        </tr>
        <tr>
            <td align="center" colspan="2" style="padding-top: 10px;"><span style="font-weight: bold; font-size: 12px;">certifies that</span></td>
        </tr>

        <br />
        <tr>
            <td align="center" colspan="2" style="padding-top:15px; font-weight: bold;"><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></td>
        </tr>
        <br />
        <tr>
            <td align="center" colspan="2" style="padding-top:15px">has participated in the educational activity</td>
        </tr>
        <tr>
            <td align="center" colspan="2" style="padding-top:15px; font-weight: bold; font-size: 18px;"><?php print $certificate['course_title'] ?></td>
        </tr>
        <tr>
            <td align="center" colspan="2">on</td>
        </tr>
        <tr>
            <td align="center" colspan="2" style="padding-top:10px; font-weight: bold;"><?php print $certificate['dateearned'] ?> </td>
        </tr>
        <br />
        <tr>
            <td align="center" colspan="2" style="padding-top:15px; font-size: 10px;">And is awarded <?php print $certificate['amapracat1']. " " .$pratext ?>.</td>
        </tr>

        <tr>
            <td align="left" colspan="1" style="padding-top: 20px;">
                <span style="font-weight: bold; font-size: 12px;">
                University of Cincinnati<br><br>
                Release Date: <?php print $release_date ?><br>
                Expiration Date: <?php print $expiration_date ?>
                </span>
            </td>
            <td align="right" colspan="1" style="padding-top: 20px;">
                <img style="max-width: 175px;" src="<?PHP print $img_url . 'cinci-kues-signature.png'; ?>"></img>
            </td>
        </tr>
    </table>
    <br />

    <table width="600px">
        <tr>
            <td align="center" colspan="2" style="line-height: 0.7;">
                <span style="font-size: 9px;font-style: italic; font-weight: bold; line-height: 0.5;">This activity has been planned and implemented in accordance with the accreditation requirements and policies of the Accreditation Council for Continuing Medical Education (ACCME) through the joint providership of the University of Cincinnati, the Crohn’s & Colitis Foundation, and RMEI Medical Education, LLC.  The University of Cincinnati is accredited by the ACCME to provide continuing medical education for physicians.</span>
            </td>
        </tr>
        <tr>
            <td align="center" colspan="2" style="line-height: 0.7; padding-top: 8px;">
                <span style="font-size: 9px;font-style: italic; font-weight: bold; line-height: 0.5;">The University of Cincinnati designates this enduring material activity for a maximum of <?php print $certificate['amapracat1']. " " .$pratext ?>.  Physicians should claim only the credit commensurate with the extent of their participation in the activity.</span>
            </td>
        </tr>
    </table>
</div>
<script>print();</script>
</body>
