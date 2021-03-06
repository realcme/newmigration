<body>
<div style="font-size:14.0px;font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;clear: both;margin: 0px;padding: 0px;">
    <table style="width:95%; border: 10px solid #feeca1">

        <tr>
            <td colspan="2" align="center" style="padding-top:40px">
                <img src="<?php print $img_url?>john-hopkins-nursing-logo.png"></img>
            </td>
        </tr>

        <tr>
            <td colspan="2" align="center"  style="font-size: 28px; font-weight:bold;padding: 5px 0 0 0; margins: 0 0 0 0;">
                <?php print $certificate['course_title'] ?>
            </td>
        </tr>

        <tr>
            <td colspan="2" align="center"  style="padding-top:20px;font-size: 28px; color: #38608f">
                Certificate of Completion
            </td>
        </tr>

        <tr>
            <td colspan="2" align="center"  style="padding-top:20px;font-size: 20px; color: #38608f">
               is awarded to
            </td>
        </tr>

        <tr>
            <td colspan="2" align="center"  style="font-size: 36px;color:#38608f; padding: 20px 0 0 0; margins: 0 0 0 0;">
                <?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?><?php print $degree?>
            </td>
        </tr>

        <tr>
            <td colspan="2" align="center"  style="padding-top:30px;font-size: 20px;">
                <?php print $issue_date ?>
            </td>
        </tr>



        <tr>
            <td colspan="2" align="center"  style="padding-top:40px;font-size: 14px;">
                This <?php print $certificate['creditearned']; ?> contact hour educational activity is provided by<br /> the institute for Johns Hopkins Nursing (PO103).<br />The institute for Johns Hopkins Nursing is accredited as<br /> a provider of continuing nursing education<br />by the American Nurses Credentialing Center's Commission on Accreditation.
            </td>
        </tr>

        <tr>
            <td colspan="2" align="right"  style="padding-top:40px;font-size: 12px; padding-right: 10px;">
                <img src="<?php print $img_url?>debra-l-case-signature.png" width="115" style="border-bottom: 1px solid black;"></img><br />
                Debra L. Case, RN, MS, Executive Director<br />
                The Institute for Johns Hopkins Nursing<br />
                www.hopkinsmedicine.org/ijhn
            </td>
        </tr>




    </table>
</div>
<script>print();</script>
</body>
