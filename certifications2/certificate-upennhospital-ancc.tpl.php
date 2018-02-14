<body>
<div style="font-size:12.0pt;font-family: Times New Roman,Times,serif;color: #000000;clear: both;margin: auto;width: 600px;padding: 0px;">
<table width="600px" style="border: 1px solid black;">
  <tr><td>
    <table style="border: 2px solid black; width:100%">
      <tr><td>
        <table style="border: 1px solid black;padding:5px; 10px">
          <tr>
            <td align="center" colspan="2" style="padding-top:15px">
            <table>
              <tr>
              <td align="center"><img src="<?php print $img_url?>upennh_logo.png"></img><br/></td>
              <td align="center">
              <span style="font-weight:bold;">
              HOSPITAL OF THE UNIVERSITY OF PENNSYLVANIA<br/>
  						</span>
  						<span style="font-weight:bold;font-style:italic;">
              Department of Nursing Education, Innovation &amp; Professional Development<br/>
              </span>
              <span style="font-size:10.0pt;">
              103 Penn Tower<br/>
              One Convention Blvd.<br/>
              Philadelphia, PA 19104<br/>
              215-662-2603<br/>
              </span></td>
              </tr>
            </table>
            </td>
          </tr>
          <tr>
            <td align="left" colspan="2" style="padding-left:30px;padding-top:10px;font-style:italic">This Is To Certify That:</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:6px;font-weight:bold"><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></td>
          </tr>          
          <tr>
            <td align="left" colspan="2" style="padding-left:30px;padding-top:10px;font-style:italic">Has Completed the Following Continuing Education Activity:</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px; padding-bottom: 0px">
							<table>
								<tr><td style="text-align:left;vertical-align:top" >Course Title:</td><td style="text-align:left;vertical-align:top;padding-left: 15px;font-weight:bold;font-style:italic;"><?php print $certificate['course_title'] ?></td></tr>
								<tr><td style="text-align:left;vertical-align:top" >Location:</td><td style="text-align:left;vertical-align:top;padding-left: 15px">Hospital of the University of Pennsylvania, Philadelphia, PA 19104<br/><?php print $certificate['url'] ?></td></tr>
								<tr><td style="text-align:left;vertical-align:top" >Date(s):</td><td style="text-align:left;vertical-align:top;padding-left: 15px"><?php print $certificate['dateearned'] ?></td></tr>
								<tr><td style="text-align:left;vertical-align:top" >Contact Hours:</td><td style="text-align:left;vertical-align:top;padding-left: 15px"><?php print $certificate['creditearned'] ?> contact hours</td></tr>
							</table>
						</td>
          </tr>           
          <tr>
            <td align="left" colspan="2" style="padding-left:30px;padding-top:10px;padding-bottom:30px;font-weight:bold">Online tools activity can be accessed from http://www.med.upenn.edu/cme/pip_online_tools/</td>
          </tr>        
          <tr>
          	<td style="vertical-align:bottom">
          	The Hospital of the University of Pennsylvania, Department of Nursing Education, Innovation and
          	Professional Development is an approved provider of continuing nursing education by the PA State
          	Nurses Association, an accredited approver by the American Nurses Credentialing Center’s
          	Commission on Accreditation.
          	</td>
          	<td style="width:30%;vertical-align:top;font-size:11pt">
              	<img src="<?php print $img_url?>upennh_signature.png"></img><br/>
              	Patricia A. Smith, MSN, RN, BC<br/>
								PSNA Program Planner
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
