<body>
<div style="font-size:14.0pt;font-family:Arial, Times, serif;width: 600px;margin: auto;">
    <table width="600px" style="border: none">
        <!-- HEADER LOGO & TITLE -->
        <tr>
            <td align="center">
                <!-- HEADER LOGO -->
                <img src="<?php print $img_url?>oei-cmematters-logo.jpg" style="width:500px;margin-bottom: 20px;"></img><br />

                <!-- HEADER TITLE -->
                <strong style="font-size: 23px;">CERTIFICATE OF COMPLETION</strong>
            </td>
        </tr>
        <!-- PARTICIPANT NAME -->
        <tr>
            <td align="center" style="padding-top: 20px;">
                <?php print $certificate['firstname'] /* FIRST NAME */ ?> <?php print $certificate['lastname'] /* LAST NAME */ ?>
            </td>
        </tr>
        <!-- COURSE TITLE -->
        <tr>
            <td align="center" style="padding-top: 20px;">
                <strong>Course Title:</strong><br />
            </td>
        </tr>
        <tr>
            <td align="center">
                <?php print $certificate['course_title']; // COURSE TITLE ?>
            </td>
        </tr>
        <!-- DATE -->
        <tr>
            <td align="center" style="padding-top: 20px;">
                <strong>Date:</strong><br />
            </td>
        </tr>
        <tr>
            <td align="center">
                <?php print $certificate['dateearned']; // DATE ?>
            </td>
        </tr>
        <!-- ACTIVITY TYPE -->
        <tr>
            <td align="center" style="padding-top: 20px;">
                <strong>Activity Type:</strong><br />
            </td>
        </tr>
        <tr>
            <td align="center">
                Online Educational Activity
            </td>
        </tr>
        <tr>
            <td><br />
                <table width="600px" style="border:none;">
                    <tr>


                        <td align="left" style="font-size: 15px">
                            Cathy Pagano, CHCP<br />
                            <img src="<?php print $img_url?>cme_matter_signature.png" ></img><br />
                            President<br /><br />

                            CME MATTER LLC<br />
                            Tel: 201-522-3395<br />
                            <a href="http://www.cmematter.org">www.cmematters.org</a>
                        </td>

                        <td valign="top">

                            <table width="400px" style="border: 1px solid black;  background-color: #e2e2e2;">
                                <tr><td colspan="2" align="center" style="padding-bottom: 30px;  font-weight: bold">COMPLETION AUTHORIZATION</td></tr>
                                <tr>
                                    <td align="center" style="font-size: 15px; border-top: 1px solid black;padding-bottom: 30px;">Preceptor Name</td>
                                    <td align="center" style="font-size: 15px; border-top: 1px solid black;padding-bottom: 30px;">Practice Name</td>
                                </tr>
                                <tr>
                                    <td align="center" style="font-size: 15px; border-top: 1px solid black;">Date</td>
                                    <td align="center" style="font-size: 15px; border-top: 1px solid black;">Preceptor Signature</td>
                                </tr>
                            </table>

                        </td>
                    </tr>
                </table>




            </td>

        </tr>



        <!-- LOGO ICON -->
        <tr>
            <td align="right">
                <img src="<?php print $img_url?>cme_matters_logo_icon.jpg" style="width: 80px"></img>
            </td>
        </tr>

    </table>
</div>
<!-- PRINT JAVASCRIPT FUNCTION -->
<script>print();</script>
</body>
