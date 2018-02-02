<?php
$pratext = ' <i>AMA PRA Category 1 Credit(s)&trade;</i>';
$img_url = $cert_img_url ? $cert_img_url : base_path().path_to_theme().'/img/';
$amountearnerd = $certificate['creditearned'];
$proper_time = date('m/d/Y',strtotime($certificate['dateearned']));
if (!strpos($amountearnerd, '.')) {
    $amountearnerd = $amountearnerd.'.0';
}
$anccmax = $certificate['ancc'];
if (!strpos($anccmax, '.')) {
    $anccmax = $anccmax.'.0';
}
$range = strftime("%B %Y", strtotime($certificate['begin_date']))." - ". strftime("%B %Y", strtotime($certificate['expiration_date']));
$info = $certificate['@mer_info'];
if ($info) {
    // find links
    $arr = array();
    foreach (explode(' ', $info) as $word) {
        if (substr($word, 0, 4) == 'http') {
            $arr[] = "<a href=\"$word\">$word</a>";
        } else {
            $arr[] = $word;
        }
    }
    $info = implode(" ", $arr);
}
//
/**************************************************/
/* STYLES MUST BE INLINED (GMAIL REQUIREMENT)     */
/**************************************************/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language; ?>" xml:lang="<?php print $language; ?>">

<head>
    <title><?php print $head_title; ?></title>
</head>
<body>
<div style="font-size:10.0pt;font-family:Arial, Times, serif;color: #000000;clear: both;width: 620px;margin: auto;padding: 0px;">
    <table cellpadding="0" cellspacing="0">
        <tr>
            <td colspan="3" valign="bottom" align="center"  style="width: 601px;margin: 0px;padding: 0px; height: 36px;line-height: 0px">
                <img src="<?php print $img_url?>mer-cert-border-top.png" width="680px" height="36px"></img>
            </td>
        </tr>
        <tr>
            <td valign="top" align="left" style="width: 21px;padding: 0px 0px 0px 0px; line-height: 0px; margin-right: 5px;">
                <img src="<?php print $img_url?>mer-cert-border-left.png" width="18px" height="450px"></img>
            </td>
            <td valign="top" align="center" style="width: 559px;">

                <table>
                    <tr>
                        <td align="center" colspan="2" style="padding-top:0px;font-size:36pt;font-weight: bold;">Certificate of Credit</td>
                    </tr>
                    <tr>
                        <td align="center" colspan="2" style="padding-top:10px;">Medical Education Resources, Inc. <br/>
                            <span style="font-style: italic">Certifies that</span>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" colspan="2" style="padding-top:15px;font-weight: bold;font-size: 24pt;"><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" colspan="2" style="padding-top:10px;">has participated in the enduring material titled
                        </td>
                    </tr>
                    <tr>
                        <td align="center" colspan="2" style="padding-top:10px;font-weight: bold;font-size: 18pt;"><?php print $certificate['course_title'] ?><br/>
                            On <?php print $proper_time?>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" colspan="2" style="padding-top:10px;">is awarded <?php print $amountearnerd?> Contact Hours</td>
                    </tr>
                    <tr>
                        <td align="left" colspan="2" style="padding-top:35px;font-size:8pt">
                            Medical Education Resources is accredited as a provider of continuing nursing education by the American Nurses Credentialing Center’s Commission on Accreditation.
                            <br/><br/>
                            This activity provides <?php print $anccmax?> contact hour of continuing nursing education.
                            <br/><br/>
                            Medical Education Resources is a provider of continuing nursing education by the California Board of Registered Nursing, Provider #CEP12299.
                            This CE activity provides <?php print $anccmax?> contact hour of continuing nursing education.

                        </td>
                    </tr>
                </table>


            </td>
            <td valign="top" align="right" style="width: 21px;padding: 0px 0px 0px 0px; line-height: 0px; margin-left: 5px;">
                <img src="<?php print $img_url?>mer-cert-border-right.png" width="15px" height="450px"></img>
            </td>
        </tr>
        <tr>
            <td colspan="3" valign="top" align="center"  style="width: 601px;margin: 0px;padding: 0px; height: 36px;line-height: 0px">
                <img src="<?php print $img_url?>mer-cert-border-bottom.png" width="680px" height="80px"></img>
            </td>
        </tr>
    </table>
</div>
<script>print();</script>
</body>
</html>
