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
<div style="font-size:12.0pt;font-family:Times New Roman,Times,serif;color: #000000;width: 600px;margin: auto;clear: both;">
<table width="600px" style="margin-top: -50px;">

                <tr>
                  <td align="center" style="padding-top:15px"><span style='font-size:18.0pt; font-weight: bold'>Continuing Medical Education Certificate</span></td>
                 </tr>
                <tr>
                  <td align="center"><img src="<?php print $img_url?>abc-logo.png"></img></td>
                 </tr>
                  <tr>
                    <td align="center" style="padding-top:30px"><span style='font-size:12.0pt;'>certifies that</span></td>
                  </tr>
 
          <br />
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?><?php print $occupation ?></td>
          </tr>
          <br />
          <tr>
            <td align="center" colspan="2" style="padding-top:15px">has participated in this enduring educational activity entitled</td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><?php print $certificate['course_title'] ?></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><?php print $certificate['dateearned'] ?> </td>
          </tr>  
          <br />
          <tr>
            <td align="center" colspan="2" style="padding-top:15px">and is awarded <?php print $certificate['amapracat1']. " " .$pratext ?>.</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px">The Association of Black Cardiologists (ABC) is accredited by the
					Accreditation Council for Continuing Medical Education to provide continuing medical education for physicians. The ABC designates this
					educational activity for a maximum of
            <span style='font-weight:bold'><?php print $certificate['amapracat1'] ?></span> <?php print $pratext?>.<br /> 
            Physicians should only claim credit commensurate with the extent of their participation in the activity.</td>
          </tr>  

			<tr>
				<td align="right" colspan="2" style="padding-top:25px">
					<img style="max-width: 175px;" src="<?PHP print $img_url . 'abc_signature.png'; ?>"></img>
				</td>
			</tr>

          <tr>
            <td align="right" colspan="2">
            	<span style='font-weight:bold'> 
	            	A.J. Conrad Smith, MD, FACC, FSCAI <br />
	            	Chair, Continuing Education Committee
            	</span>
			</td>
          </tr>
          </table>
          <br />
          <hr> </hr>
          
          <table width="600px">
          <tr>
            <td align="center" colspan="2" style="padding-top:0px;padding-top:10px">
            	Association of Black Cardiologists, Inc. <br />
				2400 N Street, NW . Suite 249 . Washington, DC 20037 <br />
				800-753-9222 <br />
				<a href="www.abcardio.org">www.abcardio.org</a>
			</td>
          </tr>
        </table>
</div>
<script>print();</script>
</body>
