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
<div style="font-size:12.0pt;font-family:Times New Roman,Times,serif;font-style: italic;color: #000000;clear: both;width: 620px;margin: auto;padding: 0px;">
      <table style="border: 5px solid black;"  width="620px">
        <tr>
          <td>
            <table width="100%" style="border: 2px solid black; ">
                <tr>
                  <td align="center" colspan="2" style="padding-top:5px"><img src="<?php print $img_url ?>utsmc_logo.png" width="394px" height="65px"></img></td>
                </tr>          
                <tr>
                  <td align="center" colspan="2" style="padding-top:10px;">THE UNIVERSITY OF TEXAS SOUTHWESTERN MEDICAL CENTER</td>
                </tr>          
                <tr>
                  <td align="center" colspan="2" style="padding-top:10px;">certifies that</td>
                </tr>          
                <tr>
                  <td align="center" colspan="2" style="padding-top:20px"><span style='font-size:16.0pt;'><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></span></td>
                </tr>          
                <tr>
                  <td align="center" colspan="2" style="padding-top:20px">has participated in the enduring material titled</td>
                </tr>          
                <tr>
                  <td align="center" colspan="2" style="padding-top:10px"><span style='font-size:14.0pt;'><?php print $certificate['course_title'] ?></span></td>
                </tr>          
                <tr>
                  <td align="center" colspan="2" style="padding-top:15px">on <?php print $certificate['dateearned'] ?>        
                  </td>
                </tr>
                <tr>
                  <td align="center" colspan="2" style="padding-top:15px">and is awarded <?php print $certificate['creditearned'].$pratext ?>           
                  </td>
                </tr>
                <tr>
                  <td align="center" colspan="2" style="padding-top:15px;padding-bottom:20px"><img src="<?php print $img_url ?>utsmc_logo2.png" width="111px" height="110px"></img></td>
                </tr>  
                <tr>
                  <td align="center" style="padding-bottom:0px">
                  	<table>
                  	  <tr>
                  	    <td align="right" valign="middle" style="margin: 0; padding: 0">Validation:</td>
                  	    <td align="left" valign="middle" style="margin: 0; padding: 0"><img src="<?php print $img_url ?>utsmc_signature1.png" width="124px" height="40px"></img></td></tr>
                  	</table> 
                  </td>
                  <td align="center" style="padding-bottom:0px">
                    <img src="<?php print $img_url ?>utsmc_signature2.png" width="182px" height="26px"></img><br/>
                  </td>
                </tr>   
                <tr>
                  <td align="center" style="padding-top:0px">
                    Sterling Hunking<br/>
									  Associate Director, Continuing Medical Education<br/>                  
                  </td>
                  <td align="center" style="padding-top:0px">
                    Susan M. Cox, M.D.<br/>
									  Associate Dean for Medical Education<br/>                    
                  </td>
                </tr>  
            </table>
          </td>
        </tr>
      </table>
</div>
<script>print();</script>
</body>
