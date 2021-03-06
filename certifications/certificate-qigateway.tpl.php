<?php
$img_url = $cert_img_url ? $cert_img_url : base_path().path_to_theme().'/img/';
$issue_date = strftime("%B %d, %Y", strtotime($certificate['dateearned']));
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language; ?>" xml:lang="<?php print $language; ?>">

<head>
    <title><?php print $head_title; ?></title>
</head>
<body>
<div style="font-size:14.0px;font-family: Georgia, serif;clear: both;margin: 0px;padding: 0px;">
    <table style="width:95%; border: 4px solid black;">

        <tr>
            <td colspan="2" align="center" style="padding-top:40px">
                <img src="<?php print $img_url?>qigateway-logo.png" style="width:250px;"></img>
            </td>
        </tr>

        <tr>
            <td colspan="2" align="center"  style="padding-top:40px;font-size: 24px; font-weight: bold; text-transform:uppercase;">
                CERTIFICATE OF COMPLETION
            </td>
        </tr>

        <tr>
            <td colspan="2" align="center"  style="font-size: 18px;font-style: italic; padding: 40px 0 0 0; margins: 0 0 0 0;">
                   <?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?>
            </td>
        </tr>

        <tr>
            <td colspan="2" align="center"  style="font-size: 22px; font-weight: bold; padding: 40px 0 0 0; margins: 0 0 0 0;">
                Course Title
            </td>
        </tr>

        <tr>
            <td colspan="2" align="center"  style="font-size: 16px;line-height: 200%;padding: 5px 0 0 0; margins: 0 0 0 0;">
                <span style="font-style: italic;">Plan, Execute and Publish!</span><br /><?php print $certificate['course_title'] ?>
            </td>
        </tr>

        <tr>
            <td colspan="2" align="center"  style="padding-top:40px;font-size: 18px;font-weight: bold;">
                Date
            </td>
        </tr>

        <tr>
            <td colspan="2" align="center" style="font-size: 16px;padding: 5px 0 0 0; margins: 0 0 0 0;">
                <?php print $issue_date ?>
            </td>
        </tr>

        <tr>
            <td colspan="2" align="center" style="padding-top:20px;font-size: 18px; font-weight: bold;">
                Activity Type
            </td>
        </tr>

        <tr>
            <td colspan="2" align="center" style="font-size: 16px;padding: 5px 0 0 20px; margins: 0 0 0 0;">
                On-Line Educational Activity
            </td>
        </tr>

        <tr>
            <td align="center"  width="50%" style="padding: 20px 0 0 0px; margins: 0 0 0 0;">

            </td>
            <td align="left" width="45%" style="font-size: 12px;padding: 20px 0 40px 0; margins: 0 0 0 0;">
                <img src="<?php print $img_url?>hillary-tompkins-md-signature.png"></img><br />
                Hillary Tompkins MD<br />
                President, CIR Policy and Education Initiative
            </td>
        </tr>

    </table>
</div>
<script>print();</script>
</body>
</html>