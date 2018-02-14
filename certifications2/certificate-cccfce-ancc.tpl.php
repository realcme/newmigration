<body>
<div style="font-size:14.0px;font-family: Georgia, serif;clear: both;margin: 0px;padding: 0px;">
    <table style="width:95%;">

        <tr>
            <td align="left" style="padding-top:40px">
                <img src="<?php print $img_url?>cleveland-clinic-header-logo2.png"></img>
            </td>
        </tr>

        <tr>
            <td align="center"  style="padding-top:40px;font-size: 18px;">
                Certificate of Completion<br />This is to certify that
            </td>
        </tr>

        <tr>
            <td align="center"  style="font-size: 20px; padding: 40px 0 0 0; margins: 0 0 0 0;">
                 <?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?><span style="border-bottom: 1px solid black; width: 400px; display: block;"></span>
            </td>
        </tr>
        <tr>
            <td align="center" valign="top"  style="font-size: 12px; padding: 0 0 0 0; margins: 0 0 0 0;">
                (Name of attendee)
            </td>
        </tr>

        <tr>
            <td align="center" valign="center"  style="font-size: 14px; padding: 20px 0 0 0; margins: 0 0 0 0;">
                Successfully Completed:
            </td>
        </tr>

        <tr>
            <td align="center"  style="font-size: 18px;padding: 40px 0 0 0; margins: 0 0 0 0;">
                <?php print $certificate['course_title'] ?><span style="border-bottom: 1px solid black; width: 400px; display: block;"></span>
            </td>
        </tr>
        <tr>
            <td align="center" valign="top"  style="font-size: 18px; padding: 0 0 0 0; margins: 0 0 0 0;">
                (Course Title / CC#)
            </td>
        </tr>

        <tr>
            <td align="center"  style="padding-top:40px;font-size: 16px;font-weight: bold;">
                Date of event: <?php print $issue_date ?>.
            </td>
        </tr>

        <tr>
            <td align="center"  style="padding-top:40px;font-size: 18px;">
                Has been awarded <?php print $certificate['creditearned']; ?> contact hours
            </td>
        </tr>

        <tr>
            <td align="center"  style="padding-top:40px;font-size: 12px;">
                Cleveland Clinic<br />
                Office of Nursing Education and Professional Practice Development<br />
                9500 Euclid Avenue<br />
                Cleveland, Ohio 44195
            </td>
        </tr>

        <tr>
            <td align="center"  style="padding-top:40px;font-size: 12px;font-weight: bold;">
                Cleveland Clinic Enterprise is accredited as a provider of continuing nursing education by the American Nurses Credentialing Center's Commission on Accreditation.
            </td>
        </tr>

    </table>
</div>
<script>print();</script>
</body>
