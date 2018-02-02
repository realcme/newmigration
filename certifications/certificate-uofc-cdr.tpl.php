<?php
$pratext = ' <i>AMA PRA Category 1 Credit(s)&trade;</i>';
$img_url = $cert_img_url ? $cert_img_url : base_path().path_to_theme().'/img/';
if (!strpos($certificate['cdr'], '.')) {
    $cdr = $certificate['cdr'].'.0';
}
if (!strpos($certificate['creditearned'], '.')) {
    $creditearned = $certificate['creditearned'].'.0';
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language; ?>" xml:lang="<?php print $language; ?>">

<head>
    <title><?php print $head_title; ?></title>
</head>
<body>


<div style="font-size:12.0pt;font-family:verdana, arial, sans-serif;color: #000000;width: 824px;clear: both; border: 4px solid #000000;">

    <table width="824px">
        <tr>
            <td width="12px"></td>
            <td width="800px">

                <table width="800px">
                    <tr>
                        <td style="width:240px; vertical-align: top">

                            <table style="width: 240px;">
                                <tr>
                                    <td style="width: 50px">
                                    </td>
                                    <td style="width: 190px"><strong>Commission<br />on Dietetic<br />Registration</strong><br />
                                        <span style="font-size: 8px;">the credentialing agency for the<span>
                                    </td>
                                </tr>
                            </table>
                            <table style="width: 240px;">
                                <tr>
                                    <td><img src="<?php print $img_url?>logo-main-eatright.png" width="200" /></td>
                                </tr>
                            </table>


                        </td>

                        <td style="width:560px;">
                            <table style="width: 560px;">
                                <tr>
                                    <td align="center"><span><strong>Continuing Professional Education Certificate of Attendance<br />-Attendee Copy-</strong></span></td>
                                </tr>
                                <tr>
                                    <td><br />
                                        <table width="560px">
                                            <tr>
                                                <td>Participant Name: <strong><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></strong></td>
                                            </tr>
                                            <tr>
                                                <td>Registration Number: <strong></strong></td>
                                            </tr>
                                            <tr>
                                                <td>Activity Title: <strong><?php print $certificate['course_title'] ?></strong></td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>Activity Number: <strong>138105</strong></td>
                                            </tr>
                                            <tr>
                                                <td>Date Completed: <strong><?php print $certificate['dateearned'] ?></strong> &nbsp;&nbsp;&nbsp;&nbsp;Number of CPEUs Awarded: <strong><?php print $cdr;?></strong></td>
                                            </tr>
                                            <tr>
                                                <td>Learning Need Codes(s): <strong>6000,7130,1000,7200</strong> &nbsp;&nbsp;&nbsp;CPE Level: <strong>II</strong></td>
                                            </tr>
                                        </table>

                                    </td>
                                </tr>
                            </table>
                        </td>

                    </tr>
                </table>

                <br /><br />

                <table width="800px">
                    <tr>
                        <td style="width:230px; vertical-align: middle;">
                            <span style="font-size: 25px;">Mahira Z Bonomo</span></td>
                        <td>
                            <div style="font-size: 8px;">
                                <p>
                                    Digitally signed by Mahira Z bonomo<br />
                                    DN: cn=Mahira Z Bonomo, o=University of Chicago,<br />
                                    ou=CME, email=mbonomo@bsd.uchicago.edu, c=US<br />
                                    Date: 2017.12.19 15:32:48 -06'00'
                                </p>
                            </div>
                        </td>
                    </tr>
                </table>
                <table width="460px" style="border-top: solid 1px #000000;"><tr><td></td></tr></table>
                <table width="800px" style="">
                    <tr>
                        <td><strong>Provider Signature</strong></td>
                        <td align="right" style="font-size: 12px;"><strong>RETAIN ORIGINAL COPY FOR YOUR RECORDS</strong></td>
                    </tr>
                </table>
                <table width="800px" style="font-size: 12px;">
                    <tr>
                        <td align="right"><i>*Refer to your Professional Development Portfolio Learning Needs Assessment Form (Step 2)</i></td>
                    </tr>
                </table>


            </td>
            <td width="12px"></td>
        </tr>
    </table>

</div>
<br />
<div style="font-size:12.0pt;font-family:verdana, arial, sans-serif;color: #000000;width: 824px;clear: both; border: 4px solid #000000;">

    <table width="824px">
        <tr>
            <td width="12px"></td>
            <td width="800px">

                <table width="800px">
                    <tr>
                        <td style="width:240px; vertical-align: top">

                            <table style="width: 240px;">
                                <tr>
                                    <td style="width: 50px">
                                    </td>
                                    <td style="width: 190px"><strong>Commission<br />on Dietetic<br />Registration</strong><br />
                                        <span style="font-size: 8px;">the credentialing agency for the<span>
                                    </td>
                                </tr>
                            </table>
                            <table style="width: 240px;">
                                <tr>
                                    <td><img src="<?php print $img_url?>logo-main-eatright.png" width="200" /></td>
                                </tr>
                            </table>


                        </td>

                        <td style="width:560px;">
                            <table style="width: 560px;">
                                <tr>
                                    <td align="center"><span><strong>Continuing Professional Education Certificate of Attendance<br />-Licensure Copy-</strong></span></td>
                                </tr>
                                <tr>
                                    <td><br />
                                        <table width="560px">
                                            <tr>
                                                <td>Participant Name: <strong><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></strong></td>
                                            </tr>
                                            <tr>
                                                <td>Registration Number: <strong></strong></td>
                                            </tr>
                                            <tr>
                                                <td>Activity Title: <strong><?php print $certificate['course_title'] ?></strong></td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>Activity Number: <strong>138105</strong></td>
                                            </tr>
                                            <tr>
                                                <td>Date Completed: <strong><?php print $certificate['dateearned'] ?></strong> &nbsp;&nbsp;&nbsp;&nbsp;Number of CPEUs Awarded: <strong><?php print $cdr;?></strong></td>
                                            </tr>
                                            <tr>
                                                <td>Learning Need Codes(s): <strong>6000,7130,1000,7200</strong> &nbsp;&nbsp;&nbsp;CPE Level: <strong>II</strong></td>
                                            </tr>
                                        </table>

                                    </td>
                                </tr>
                            </table>
                        </td>

                    </tr>
                </table>

                <br /><br />

                <table width="800px">
                    <tr>
                        <td style="width:230px; vertical-align: middle;">
                            <span style="font-size: 25px;">Mahira Z Bonomo</span></td>
                        <td>
                            <div style="font-size: 8px;">
                                <p>
                                    Digitally signed by Mahira Z bonomo<br />
                                    DN: cn=Mahira Z Bonomo, o=University of Chicago,<br />
                                    ou=CME, email=mbonomo@bsd.uchicago.edu, c=US<br />
                                    Date: 2017.12.19 15:32:48 -06'00'
                                </p>
                            </div>
                        </td>
                    </tr>
                </table>
                <table width="460px" style="border-top: solid 1px #000000;"><tr><td></td></tr></table>
                <table width="800px" style="">
                    <tr>
                        <td><strong>Provider Signature</strong></td>
                        <td align="right" style="font-size: 12px;"><strong>RETAIN ORIGINAL COPY FOR YOUR RECORDS</strong></td>
                    </tr>
                </table>
                <table width="800px" style="font-size: 12px;">
                    <tr>
                        <td align="right"><i>*Refer to your Professional Development Portfolio Learning Needs Assessment Form (Step 2)</i></td>
                    </tr>
                </table>


            </td>
            <td width="12px"></td>
        </tr>
    </table>

</div>


<script>print();</script>
</body>
</html>