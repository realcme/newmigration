<body style="padding: 0; margin: 0;">
<div style="font-size:11.0pt;font-family: Times, serif;width: 600px;margin: auto; text-align: center;">
  <div style="width: 100%;">
    <div class="content" style="width:100%">
      <img style="position: relative;left: -22px;" src="<?php print $img_url;?>uLouiville_logo.png" alt="University of Louisville"/>
      <h3>This document certifies that</h3>
      <p><span><?php print $certificate['firstname'];?> <?php print $certificate['lastname'];?></span></p>
      <p>On <?php print $issue_date;?> the individual listed above successfully completed the University of Louisville 
      Continuing Medical Education &amp; Professional Development course listed below:</p>

      <p><b><?php print $certificate['course_title'];?></b><br>in Louisville, KY</p>
      <img src="<?php print $img_url;?>uLouiville_signature.png" alt="W. Daniel Cogan, Ed.D." />
      <p><b>W. Daniel Cogan, Ed.D., Assistant Dean<br>Continuing Medical Education &amp; Professional Development</b></p>

      <p style="margin: 20px;">**************************************************</p>

      <h2>CERTIFICATE OF ATTENDANCE</h2>

      <p>This document certifies that the individual listed above has successfully completed a University&nbsp;of Louisville Continuing Medical Education &amp; Professional Development course, which was  designated for up to <i><?php print $certificate['amapracat1']; ?> AMA PRA Category 1 Credits™</i>.</p>

      <p>The University of Louisville School of Medicine's Continuing Medical Education &amp; Professional Development office is accredited by the Accreditation Council for Continuing Medical Education to provide continuing medical education for physicians.</p>

      <p style="text-transform:uppercase; font-weight:600;">PLEASE PRINT AND/OR SAVE THIS DOCUMENT AND KEEP IT ON FILE FOR PURPOSES OF AUDIT, OR FILE IT WITH YOUR LICENSURE BOARD IF REQUIRED.</p>
    </div>
  </div>
</div>
</body>
