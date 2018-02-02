    <body style="font-size: 10pt; font-family: Arial, Helvetica, sans-serif;">
        <!-- Fancy little border -->
        <div style="border:2px solid black; padding:2px; width:620px; display: block; margin: 0 auto;">
            <div style="border:4px solid black; padding: 25px; width:562px; display: block;">
                <img src="<?php print $img_url?>pscom_logo.png" style="width:220px; height: auto; display: inline; float: left;"></img>
                <div style="clear: left; padding-top: 25px; font-weight:bold;">
                    Continuing Education
                </div>
                <table style="margin-top: 25px;">
                  <tr>
                    <td>This cerifies that</td>
                  </tr>
                  <tr>
                    <td style="font-weight: bold; margin-top: 25px;"><?php print $certificate['firstname']; ?> <?php print $certificate['lastname']; ?></td>      
                  </tr>
                  <tr>
                    <td >has completed the enduring material titled</td>        
                  </tr>
                  <tr>
                    <td style="font-weight: bold; margin-top: 25px;"><?php print $certificate['course_title']; ?></td> 
                  </tr>
                  <tr>
                    <td >and is awarded</td>        
                  </tr>
                  <tr>
                    <td style="font-weight: bold; margin-top: 25px;"><?php print $certificate['creditearned']; ?> <i>AMA PRA Category 1 Credit(s)&trade;</i></td> 
                  </tr>
                  <tr>
                  	<td style="margin-top: 25px;"><?php print strftime("%A, %B %d, %Y", strtotime($certificate['dateearned'])); ?></td>
                  </tr>
                </table>

                <div style="margin-top: 15px; font-weight: bold;">
                  Course #: <?php print $certificate['@uan']?> 
                </div>
                 
                 
                 <!-- TO CONTINUE FORM HERE -->
                 <div style="margin-top: 25px;">
                 	<img src="<?php print $img_url?>pscom_sig.png" style="width:200px; height: auto; display: inline;  border-bottom:1px solid black;"></img>
                </div>
                <span style="font-weight:bold; font-size:10px;">William L. Hennrikus, MD, Associate Dean for Continuing Medical Education</span>
                
                <div style="/*border:1px grey solid;*/ margin-top: 25px;">
                <br />
                  Penn State College of Medicine is accredited by the Accreditation Council for Continuing Medical Education (ACCME) to provide continuing medical education for physicians.

				<br />
                <br />
                
                Penn State College of Medicine  • Department of Continuing Education  •  P.O. Box 851  •  Hershey, PA  17033
                </div>
                
            </div>
        </div>
        
        <script>print();</script>
    </body>
