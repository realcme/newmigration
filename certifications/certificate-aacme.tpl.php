<?PHP
$img_url = $cert_img_url ? $cert_img_url : base_path().path_to_theme().'/img/';
$date = strftime("%B %d, %Y", strtotime($certificate['dateearned']));
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language; ?>" xml:lang="<?php print $language; ?>">

<head>
    <title><?php print $head_title; ?></title>
</head>

<body>
<div style="font-size:11.0pt;font-family:Arial, Times, serif;width: 600px;margin: auto;">
    <table width="600px" style="border: none">
        <tr>
            <td align="center" colspan="2">
                <img src="<?PHP print $img_url . 'aacme_logo.png'; ?>"></img>
            </td>
        </tr>

        <tr>
            <td colspan="2" align="center" style="padding-top:30px">Certificate of Completion</td>
        </tr>

        <tr>
            <td colspan="2" align="center" style="padding-top:10px;font-weight:bold; font-size: 18px;"><?php print $certificate['course_title'] ?></td>
        </tr>

        <tr>
            <td colspan="2" align="center" style="padding-top:10px;font-weight:bold;">Date of Participation: <?php print $date ?></td>
        </tr>

        <tr>
            <td colspan="2" align="center" style="padding-top:20px;"></td>
        </tr>

        <tr>
            <td colspan="2" align="center" style="padding-top:20px;">Activity Type:</td>
        </tr>
        <tr>
            <td colspan="2" align="center" style="padding-top:20px;">Online Patient Education</td>
        </tr>
        <tr>
            <td colspan="2" align="center" style="padding-top:20px;font-weight:bold;">Available at: <?php print $certificate['url'] ?></td>
        </tr>


    </table>
</div>
<script>print();</script>
</body>
</html>
