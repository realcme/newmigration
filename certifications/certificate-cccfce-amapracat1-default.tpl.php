<?php
$img_url = $cert_img_url ? $cert_img_url : base_path().path_to_theme().'/img/';
$issue_date = strftime("%B %d, %Y", strtotime($certificate['dateearned']));

$degree = $certificate['degree'];
if ($degree) $degree = ', '.$degree;
$issue_date = strftime("%B %d, %Y", strtotime($certificate['dateearned']));

if ($certificate['creditearned'] > 1) {
    $pratext = ' <i>AMA PRA Category 1 Credits&trade;</i>';
} else {
    $pratext = ' <i>AMA PRA Category 1 Credit&trade;</i>';
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language; ?>" xml:lang="<?php print $language; ?>">

<head>
    <title><?php print $head_title; ?></title>
</head>
<body>
<div style="font-size:14.0px;font-family: Georgia, serif;clear: both;margin: 0px;padding: 0px;">
    <table style="width:95%;">

        <tr>
            <td colspan="2" align="left" style="padding-top:40px">
                <img src="<?php print $img_url?>cleveland-clinic-header-logo-pcmec.png" style="width:100%;"></img>
            </td>
        </tr>

        <tr>
            <td colspan="2" align="center"  style="padding-top:40px;font-size: 11px;">
                The Cleveland Clinic Foundation Center for Continuing Education certifies that
            </td>
        </tr>

        <tr>
            <td colspan="2" align="center"  style="font-size: 20px; padding: 40px 0 0 0; margins: 0 0 0 0;">
                <?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?>
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
                on <?php print $issue_date ?>. This activity was designated for <?php print $certificate['creditearned'].$pratext ?>.
            </td>
        </tr>

        <tr>
            <td colspan="2" align="center"  style="padding-top:40px;font-size: 11px;">
                The Cleveland Clinic Foundation Center for Continuing Medical Education is accredited by the Accreditation Council for Continuing Medical Education to provide continuing medical education for physicians.
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
</html>