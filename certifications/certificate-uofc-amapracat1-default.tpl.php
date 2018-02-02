<?PHP
$pratext = ' <i>AMA PRA Category 1 Credit(s)&trade;</i>';
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
                <img src="<?PHP print $img_url . 'uofc_logo.png'; ?>" width="200"></img>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center" style="padding-top:10px;font-weight: bold;font-size: 32px;color:#000010">Certificate of Participation</td>
        </tr>
        <tr>
            <td colspan="2" align="center" style="padding-top:25px;font-weight:bold; font-size: 18px;">
                <?php print $date ?><br/>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center" style="padding-top:20px; font-weight:bold; font-size: 18px;">
                <?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?>, <?php print $certificate['profession'] ?>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center" style="padding-top:20px;font-weight:bold; font-size: 18px;"><?php print $certificate['course_title'] ?></td>
        </tr>
        <tr>
            <td colspan="2" align="center" style="padding-top:20px">
                The University of Chicago Pritzker School of Medicine certifies that
                <?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?>, <?php print $certificate['profession'] ?>
                has participated in the enduring material outlined above. This activity was designated for a maximum of
                <?php print($certificate['creditearned']) ?> <?PHP print $pratext?></td>
        </tr>
        <tr>
            <td colspan="2" align="center" style="padding-top:10px; ">
                The University of Chicago Pritzker School of Medicine is accredited by
                the Accreditation Council for Continuing Medical Education to provide continuing medical education for physicians.</td>
        </tr>
        <tr>
            <td colspan="2" align="center" style="padding-top:10px">Center for Continuing Medical Education<br/>
                5841 S. Maryland Ave. MC1137<br/>
                Chicago, IL 60637<br/>
                https://cme.uchicago.edu<br />
            </td>
        </tr>

    </table>
</div>
<script>print();</script>
</body>
</html>