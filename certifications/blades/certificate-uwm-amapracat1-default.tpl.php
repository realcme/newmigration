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
<div style="font-size:11.0pt;font-family:Arial, Times, serif;color: #000000;width: 600px;margin: auto;clear: both;">
<table width="600px">
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><img src="<?php print $img_url?>uwm_logo.png" style="width: 254; height: 168;"></img></td>
          </tr>
          <tr>
            <td align="left" colspan="2" style="padding-top:5px"><?php print $date?></td>
          </tr>          
          <tr>
            <td align="left" colspan="2" style="padding-top:5px">
							<?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?><br/>
							<?php print $certificate['address'] ?>
					  </td>
          </tr>
          <tr>
            <td align="left" colspan="2" style="padding-top:10px">
            Dear Participant:
						<br/><br/>
						The University of Wisconsin School of Medicine and Public Health certifies that
            <?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?> 
            has participated in the enduring material titled <span style="font-style: italic"><?php print $certificate['course_title'] ?></span> 
            on <?php print $date?>. This activity was designated for  <?php print $certificate['amapracat1'].$pratext?>.
            <br/> 
            You have earned  <?php print $certificate['creditearned'].$pratext?>.
						<br/><br/>
						University of Wisconsin Continuing Education Hours:  <?php print $certificate['creditearned'] ?> hour(s) (10 hours equal 1 CEU)
						<br/><br/>
						Sincerely yours,
						</td>
          </tr>      
          <tr>
            <td align="left" valign="bottom" colspan="2" style="padding-bottom:10px;margin-bottom:0px">
            <img src="<?php print $img_url?>uwm_signature.png" width="123px" height="60px"></img><br />
						George C. Mejicano, MD<br/>
						Associate Dean, <br/>
						Office of Continuing Professional Development<br/>
						in Medicine and Public Health<br/>      
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="border-top: 1px solid red; font-family:Times New Roman;font-size: 10pt;padding-top: 5px">
						<span style="font-weight: bold;">Office of Continuing Professional Development in Medicine and Public Health</span><br/>
						University of Wisconsin School of Medicine and Public Health<br/>
						2701 International Lane, Suite 208, Madison, Wisconsin  53704<br/>
						608.240.2147&nbsp;&nbsp;Fax: 608.240.6040&nbsp;&nbsp;Email: ocpd@mailplus.wisc.edu&nbsp;&nbsp;www.ocpd.wisc.edu
            </td>
          </tr>          
</table>
</div>
<script>print();</script>
</body>
