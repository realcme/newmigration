<?php
$pratext = ' <i>AMA PRA Category 1 Credit(s)&trade;</i>';
$img_url = $cert_img_url ? $cert_img_url : base_path().path_to_theme().'/img/';
$credit = $certificate['creditearned'];
$degree = $certificate['profession'] == 'OPT' ? ', OD': '';
if (strpos($credit, '.') === false) $credit .= '.0';

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
<div style="font-size:11.0pt;font-family:Arial, Times, serif;color: #000000;clear: both;width: 610px;margin: auto;padding: 0px;">
    <table style="border: 1px solid #CCCCCC; width:100%" >
        <tr>
            <td>
                <table  style="border: 3px solid #CCCCCC; width: 100%" >
                    <tr>
                        <td align="left" colspan="2" style="padding-top:5px"><img src="<?php print $img_url?>geg_logo.png" style="width: 278px; height: 100px;"></img></td>
                    </tr>
                    <tr>
                        <td align="center" colspan="2" style="padding-top:15px;padding-bottom:25px"><span style='font-size:24.0pt;font-weight: bold'>Certificate of Participation</span></td>
                    </tr>
                    <tr>
                        <td align="center" colspan="2" style="padding: 5px 10px">
                            Global Education Group certifies that<br />
                            <?php print $certificate['firstname'] ?> <?php print $certificate['lastname']; ?><?php print $degree; ?><br />
                            has participated in the enduring material titled <?php print $certificate['course_title'] ?> at <br />
                            www.realcme.com/cms/ on <?php print $certificate['dateearned'];  ?>. This course has been accredited<br />
                            for <?php print $certificate['creditearned']; ?> hour(s) of Continuing Education credit by COPE.<br />
                            Course ID: <?php print $certificate['@cope_cid']; ?>, Event ID: <?php print $certificate['@cope_eid']; ?>, Instructor: <?php print $certificate['@director']; ?><br />
                            State of License: <?php print $certificate['state'] ?><br />
                            License #<?php print $certificate['state_license_number']; ?><br />
                            Address: <?php print $certificate['address'] ?>

                        </td>
                    </tr>
                    <tr>
                        <td align="center" colspan="2" style="padding-top:15px">
                            <img src="<?php print $img_url?>geg_signature.gif" style="width: 121px; height: 86px;"></img><br/>
                            Stephen M. Lewis, MA, CCMEP<br />
                            General Manager, Global Education Group
                        </td>
                    </tr>
                    <tr>
                        <td align="center" colspan="2" style="padding-top:20px;padding-bottom:0px;font-size:6pt;color:#CCCCCC">
                            <table>
                                <tr>
                                    <td align="center" valign="top">Partnership. Performance. Improvement.</td>
                                    <td align="center" valign="top"><img src="<?php print $img_url?>geg_blue.png"></img></td>
                                    <td align="left" valign="top">Phone 303.395.1782<br/>Fax 303.648.5311</td>
                                    <td align="center" valign="top"><img src="<?php print $img_url?>geg_blue.png"></img></td>
                                    <td align="left" valign="top">5575 S Sycamore Street, Suite 200 <br/>Littleton, Colorado 80120</td>
                                    <td align="center" valign="top"><img src="<?php print $img_url?>geg_blue.png"></img></td>
                                    <td align="left" valign="top">inquire@globaleducationgroup.com<br/>www.globaleducationgroup.com</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</div>
<script>print();</script>
</body>
</html>