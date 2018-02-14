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
        <table style="text-align: left; width: 100%;" border="0" cellpadding="2" cellspacing="2">
                <tr>
                    <td style="vertical-align: top;"><img style="width: 191px; height: 61px;" alt="Rutgers" src="<?php print $img_url ?>rbhs-logo.png"></img></td>
                    <td style="vertical-align: top; width: 35%;"><small>
                            <span style="font-family: Arial; font-size: 10px">Center for Continuing and Outreach Education</span><br>
                            <span style="font-family: Arial; font-size: 10px">Rutgers, The State University of New Jersey</span><br>
                            <span style="font-family: Arial;  font-size: 10px">30 Bergen Street, ADMC 7</span><br>
                            <span style="font-family: Arial;  font-size: 10px">Newark, NJ 07101-1709</span></small><br>
                    </td>
                    <td style="vertical-align: top; width: 15%;"><small>
                            <span style="font-family: Arial;  font-size: 10px">ccoe.rbhs.rutgers.edu</span><br>
                            <span style="font-family: Arial; font-size: 10px">ccoe@ca.rutgers.edu</span><br>
                            <br>
                            <span style="font-family: Arial; font-size: 10px">p. 973-972-4267 </span><br>
                            <span style="font-family: Arial; font-size: 10px">f. 973-972-7128</span></small><br>
                    </td>
                </tr>
        </table>
        <br>
        <br>
        <?php echo date('F j, Y'); ?><br>
        <br>
        <br>
        <?php echo $certificate['fullname']; ?> <br>
        <?php echo $certificate['address']; ?><br>
        <br>
        <br>
        Rutgers,
        The State University of New Jersey certifies that <?php echo $certificate['fullname']; ?> has participated in
        the educational activity titled <b><i><?php echo $certificate['course_title'] ?></i></b> on 
        <?php echo strftime("%A, %B %d, %Y", strtotime($certificate['dateearned'])); ?>.
        <br><br>
        This activity was designated for <?php print $certificate['amapracat1'];?> 
        <i>AMA PRA Category 1 Credit(s)&trade;</i>.  This activity was awarded <?php printf("%4.2f", $certificate['creditearned']) ?> continuing nursing 
        education contact hours.
        <br>
        <br>
        Rutgers, The State University of New Jersey is accredited by the Accreditation Council for Continuing Medical Education to provide 
        continuing medical education for physicians.
        <br>
        <br>
        Rutgers, The State University of New Jersey - Center for Continuing and Outreach Education is an approved provider of continuing 
        nursing education by New Jersey State Nurses Association, an accredited approver by the American Nurses Credentialing Center's 
        Commission On Accreditation. Provider Number P173-12/12-15. <br>
        <br>
        <br>
        <br>
            <img style="width: 145px; height: 65px;" alt="Patrick Dwyer" src="<?php print $img_url ?>rbhs-signature.png"></img><br>
        <br>
        Patrick Dwyer
        <br>
        Director, Continuing Medical Education
        <br>
        <br>
        <?php echo $certificate['@act']; ?><br>
        <script>print();</script>
    </body>
