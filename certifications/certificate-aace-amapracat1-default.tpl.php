<?php
  $img_url = $cert_img_url ? $cert_img_url : base_path().path_to_theme().'/img/';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title><?php print $head_title; ?></title>
    </head>
    <body style="font-size: 10pt; font-family: Arial, Helvetica, sans-serif;">
        <!-- Fancy little border -->
        <div style="border:2px solid black; padding:2px; width:620px; display: block; margin: 0 auto;">
            <div style="border:4px solid black; padding: 25px; width:562px; display: block;">
                <img src="<?php print $img_url?>aace-logo.png" style="width:100px; height: auto; display: inline; float: left;"></img>
                <img src="<?php print $img_url?>aace-header-non-physician.png" style="width:435px; height: auto; display: inline; float: left; margin-left: 25px;"></img>
                <div style="clear: left; padding-top: 25px; text-align: center;">
                  The American Association of Clinical Endocrinologists (AACE) certifies that 
                    <span style="text-decoration: underline"><?php print $certificate['firstname']; ?> <?php print $certificate['lastname']; ?></span>
                    has participated in the following online continuing medical education activity:
                </div>
                <table style="margin-top: 25px;">
                  <tr>
                    <td style="font-weight: bold;">Program Title:</td>         <td><?php print $certificate['course_title']; ?></td>
                  </tr>
                  <tr>
                    <td style="font-weight: bold;">Date of Release:</td>       <td><?php print strftime("%A, %B %d, %Y", strtotime($certificate['begin_date'])); ?></td>
                  </tr>
                  <tr>
                    <td style="font-weight: bold;">Date Completed:</td>        <td><?php print strftime("%A, %B %d, %Y", strtotime($certificate['dateearned'])); ?></td>
                  </tr>
                  <tr>
                    <td style="font-weight: bold;">Date Activity Expires:</td> <td><?php print strftime("%A, %B %d, %Y", strtotime($certificate['expiration_date'])); ?></td>
                  </tr>
                </table>
                
                <div style="text-align: center; margin-top: 25px; font-weight: bold;">
                  This activity was designated for <?php print $certificate['creditearned']; ?> <i>AMA PRA Category 1 Credit(s)&trade;</i>
                </div>
                
                <div style="text-align: center; margin-top: 25px;">
                  The American Association of Clinical Endocrinologists (AACE) is accredited by the Accreditation 
                  Council for Continuing Medical Education to provide continuing medical education for physicians.
                  <br><br>
                  The American Association of Clinical Endocrinologists (AACE) designates this enduring material 
                  for a maximum of <i><?php print $certificate['creditearned']; ?> AMA PRA Category 1 Credits&trade;</i>. Physicians should claim only the credit 
                  commensurate with the extent of their participation in the activity.
                </div>
                
                <div style="margin-top: 10px; text-align: center; font-weight: bold;">
                  <img src="<?php print $img_url?>aace-signature.png" style="width:300px; height: auto;"></img>
                  <br>
                  Felice A. Caldarella, MD, FACP, CDE, FACE
                  <br>
                  CME Accreditation Committee Chair
                </div>
                
            </div>
        </div>
        
        <script>print();</script>
    </body>
</html>