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
                        <td align="center" colspan="2" style="padding-top:0px;font-size:36pt;font-weight: bold;">Certificate of Participation</td>
                    </tr>
                    <tr>
                        <td align="center" colspan="2" style="padding-top:10px;">Medical Education Resources, Inc. <br/>
                            <span style="font-style: italic">Certifies that</span>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" colspan="2" style="padding-top:15px;font-weight: bold;font-size: 24pt;"><?php print $certificate['firstname'] ?> <?php print str_replace(' ', '', $certificate['lastname']); ?>, <?php print $certificate['professionlabel']; ?>
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
                        <td align="center" colspan="2" style="padding-top:10px;">This activity was designed for <?php print $amountearnerd?> AMA PRA Category 1 Credit(s)&#8482;</td>
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
