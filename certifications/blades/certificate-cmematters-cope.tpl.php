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
<div style="font-size:14.0pt;font-family:Arial, Times, serif;width: 600px;margin: auto;">
    <table width="600px" style="border: none">
        <!-- HEADER LOGO & TITLE -->
        <tr>
            <td align="center">
                <!-- HEADER LOGO -->
                <img src="<?php print $img_url?>ico-logo-250x87.png" style="margin-bottom: 20px;"></img><br/>

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
                <strong>Course Title:</strong><br/>
            </td>
        </tr>
        <tr>
            <td align="center">
                <?php print $certificate['course_title']; // COURSE TITLE ?>
            </td>
        </tr>
        <!-- COURSE ID -->
        <tr>
            <td align="center" style="padding-top: 20px;">
                <strong>Course ID:</strong>
            </td>
        </tr>
        <tr>
            <td align="center">
                <?php print $certificate['@cope_cid'] // TOKEN COURSE ID ?>
            </td>
        </tr>
        <!-- EVENT ID -->
        <tr>
            <td align="center" style="padding-top: 20px;">
                <strong>Event ID:</strong><br/>
            </td>
        </tr>
        <tr>
            <td align="center">
                <?php print $certificate['@cope_eid'] // TOKEN EVENT ID ?>
            </td>
        </tr>
        <!-- DATE -->
        <tr>
            <td align="center" style="padding-top: 20px;">
                <strong>Date:</strong><br/>
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
                <strong>Activity Type:</strong><br/>
            </td>
        </tr>
        <tr>
            <td align="center">
                Educational Activity
            </td>
        </tr>
        <!-- COPY INFORMAITON -->
        <tr>
            <td align="center" style="padding-top: 20px; font-size: 17px">
                This course has been accredited for <?php print $certificate['@maxtime']; ?> hour(s) of<br />
                Continuing Education credit by COPE.
            </td>
        </tr>

        <!-- COMPLETION AUTHORIZATION -->
        <tr>
            <td><br />
                <table width="600px" style="border:none;">
                    <tr>


                        <td align="left" style="font-size: 15px">
                        Dr. Stephanie Messner<br />
                        <img src="<?php print $img_url?>messner-s-signature.jpg" style="width:200px;" ></img><br />
                        Dean/Vice President of Academic Affairs<br />
                        Illinois College of Optometry
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



    </table>
</div>
<!-- PRINT JAVASCRIPT FUNCTION -->
<script>print();</script>

</body>
