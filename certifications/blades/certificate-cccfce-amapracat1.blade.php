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
<div style="font-size:14.0px;font-family: Georgia, serif;clear: both;margin: 0px;padding: 0px;">
    <table style="width:95%;">

        <tr>
            <td colspan="2" align="left" style="padding-top:40px">
                <img src="<?php print $img_url?>cleveland-clinic-header-cop.png" style="width:100%;"></img>
            </td>
        </tr>

        <tr>
            <td colspan="2" align="center"  style="padding-top:40px;font-size: 11px;">
                The Cleveland Clinic Foundation Center for Continuing Education certifies that
            </td>
        </tr>

        <tr>
            <td colspan="2" align="center"  style="font-size: 20px; padding: 40px 0 0 0; margins: 0 0 0 0;">
                <?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?>, <?php print $certificate['professionlabel']; ?>
            </td>
        </tr>

        <tr>
            <td colspan="2" align="center"  style="padding-top:40px;font-size: 11px;">
                has participated in the internet enduring material titled
            </td>
        </tr>

        <tr>
            <td colspan="2" align="center"  style="font-size: 18px;padding: 5px 0 0 0; margins: 0 0 0 0;">
                <?php print $certificate['course_title'] ?>
            </td>
        </tr>

        <tr>
            <td colspan="2" align="center"  style="padding-top:40px;font-size: 11px;">
                on <?php print $issue_date ?> and is awarded <?php print $certificate['creditearned'].$pratext ?><br />
                The Cleveland Clinic Foundation Center for Continuing Medical Education Certificate to provide continuing medical education for physicians.
            </td>
        </tr>

        <tr>
            <td colspan="2" align="left"  style="padding-top:40px;font-size: 14px;">
                <img src="<?php print $img_url?>alexander-rae-grant-signature.png" width="115"></img><br />
                Alexander Rae-Grant, MD / Director, Center for Continuing Medical Education
            </td>
        </tr>




    </table>
</div>
<script>print();</script>
</body>
