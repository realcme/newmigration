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
<div style="font-size:12.0pt;font-family: Times New Roman,Times,serif;color: #000000;clear: both;margin: auto;width: 600px;padding: 0px;">
<table width="600px" style="border: 1px solid black;">
  <tr><td>
    <table style="border: 2px solid black; width:100%">
      <tr><td>
        <table style="border: 1px solid black;padding:30px; 10px">
          <tr>
            <td align="center" colspan="2" style="padding-top:15px">
              <span style="font-weight:bold;">
              Perelman School of Medicine<br/>
  						University of Pennsylvania<br/>
  						</span>
  						<span style="font-style:italic;">
              Office of Human Research<br/>
              </span>
              <span style="font-size:10.0pt;">
              3620 Hamilton Walk<br/>
              150 Anatomy-Chemistry Bldg<br/>
              Philadelphia, PA 19104-6061<br/>
              215-746-7406<br/>
              </span>
            </td>
          </tr>
          <tr>
            <td align="left" colspan="2" style="padding-left:30px;padding-top:10px;font-weight:bold">This Is To Certify That:</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:6px;font-weight:bold"><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></td>
          </tr>          
          <tr>
            <td align="left" colspan="2" style="padding-left:30px;padding-top:10px;font-weight:bold">Has Completed the Following Continuing Education Activity:</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px; padding-bottom: 30px">
							<table>
								<tr><td align="left">Course Title:</td><td align="left" style="padding-left: 15px"><?php print $certificate['course_title'] ?></td></tr>
								<tr><td align="left">Location:</td><td align="left" style="padding-left: 15px">Online</td></tr>
								<tr><td align="left">Completion Date:</td><td align="left" style="padding-left: 15px"><?php print $certificate['dateearned'] ?></td></tr>
								<tr><td align="left">Contact Hours:</td><td align="left" style="padding-left: 15px"><?php print $certificate['creditearned'] ?></td></tr>
							</table>
						</td>
          </tr>        
          <tr>
          	<td>The Perelman School of Medicine at the University of Pennsylvania, Office of Human Research, is an approved provider of continuing education by the Pa State Nurses Association, an accredited approver by the American Nurses Credentialing Center’s Commission on Accreditation.</td>
          	<td>
              	<img src="<?php print $img_url?>upenn_signature2.png"></img><br/>
              	Michael A. Warner<br/>
								Director, Research Education and Training
          	</td>
          </tr>   
        </table>  
      </td></tr>  
    </table>  
  </td></tr>  
</table>
</div>
<script>print();</script>
</body>
