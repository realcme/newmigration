<?php
$pratext = ' <i>AMA PRA Category 1 Credit(s)&trade;</i>';
$img_url = $cert_img_url ? $cert_img_url : base_path().path_to_theme().'/img/';
$credit = $certificate['creditearned'];
if (strpos($credit, '.') === false) $credit .= '.00';
$date_earned = strftime("%A, %B %d, %Y", strtotime($certificate['dateearned']));
$support = $certificate['@support'];

$firstname = $certificate['firstname'];
$lastname = $certificate['lastname'];
$courseTitle = $certificate['course_title'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language; ?>" xml:lang="<?php print $language; ?>">

<head>
    <title><?php print $head_title; ?></title>
</head>
<body>
<div style="font-size:12.0pt;font-family:Times New Roman, Times, serif;color: #000000;width: 626px;clear: both;margin:auto">
    <table width="620px" style="padding:5px">
        <tr>
            <td align="center" colspan="2" style="padding-top:5px"><img src="<?php print $img_url?>rushumc-logo.png" style="width:158px"></img></td>
        </tr>
        <tr>
            <td align="center" colspan="2" style="padding-top:5px"><img src="<?php print $img_url?>rushumc-accredited-provider.png" style="width:158px"></img></td>
        </tr>
        <tr>
            <td align="center" colspan="2" style="padding-top:5px;font-size:12pt;">Certificate of Participation</td>
        </tr>
        <tr>
            <td align="left" colspan="2" style="padding-top:15px;font-size:11.0pt">
                In support of improving patient care, Rush University Medical Center is accredited by the American Nurses Credentialing Center (ANCC), the Accreditation Council for Pharmacy Education (ACPE), and the Accreditation Council for Continuing Medical Education (ACCME) to provide continuing education for the healthcare team.
                <br/><br/>
                Rush University Medical Center designates this live activity for a maximum of <strong><?php print $certificate['ancc'].$pratext?></strong>. Physicians should only claim credit
                commensurate with the extent of their participation in the activity.
                <br/><br/>
                ANCC Credit Designation - Nurses <br />
                The maximum number of hours awarded for this CE activity is <strong><?php print $certificate['ancc']?></strong> contact hours.
                <br><br>
                This activity is being presented without bias and with commercial support.
                <br><br>
                Rush University Medical Center designates this knowledge based CPE activity (0622-0000-17-037-L01-P) for <strong><?php print $certificate['ancc']?></strong> contact hours for pharmacists.
                <br><br>
                Rush University certifies that <strong><?php print $firstname." ".$lastname ?></strong>: <br>
                Has participated in the following activity entitled <strong><?php print $courseTitle ?></strong>
                <br><br>
                On: <strong><?php print $date_earned ?></strong>
                <br><br>
                and is awarded <strong><i><?php print $certificate['ancc'].$pratext?></i></strong>
                <br><br>
                or is awarded <strong><?php print $certificate['ancc']?></strong> Continuing Nursing Education contant hours.
                <br><br>
                or is awarded <strong><?php print $certificate['ancc']?></strong> Continuing Pharmacy Education contant hours.
                <br><br>
            </td>
        </tr>
        <tr>
            <td align="left" colspan="2" style="padding-top:5px"><img src="<?php print $img_url?>rush-university-deutsch-signature.png" style="width:158px"></img></td>
            <br/><br />
        </tr>
        <tr align="left" colspan="2">
            <td style="font-size: 14px;">
                Rush University Interprofessional Continuing Education, 710 S Paulina St, JRB234, Chicago IL 60612
            </td>
        </tr>
    </table>
</div>
<script>print();</script>
</body>
</html>