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
<div style="font-size:12.0pt;font-family: Times New Roman,Times,serif;color: #000000;clear: both;width: 600px;margin: auto;padding: 0px;">
<table width="600px" style="border: 2px solid #000000">
  <tr><td>
    <table style="border: 5px solid #000000; width:100%">
      <tr><td>
        <table style="border: 2px solid #000000;">
          <tr>
            <td align="center" colspan="2">
                <img src="<?php print $img_url?>pcen.jpg"></img>
            </td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><span style='font-weight:bold;'>This is to certify that</span></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:6px"><span style='font-size:14.0pt;font-weight:bold;'><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px">Has participated in the educational activity entitled</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><span style='font-weight:bold;'><?php print $certificate['course_title'] ?></span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><span style='font-weight:bold;'><?php print $certificate['dateearned'] ?></span></td>
          </tr>                    
          <tr>
            <td align="left" colspan="2" style="padding-top:20px">Primary Care Network, Inc., is accredited by the Accreditation Council for Continuing Medical Education to provide continuing medical education for physicians.</td>
          </tr>          
          <tr>
            <td align="left" colspan="2" style="padding-top:15px">Primary Care Network designates this educational activity for a maximum of <?php print $certificate['amapracat1'].$pratext?>. 
            Physicians should only claim credit commensurate with the extent of their participation in the activity.          
            </td>
          </tr>
          <tr>
            <td align="left" colspan="2" style="padding-top:15px"><span style='font-weight: bold;'>Physician was awarded <?php print $certificate['creditearned']?> hour<?php print $plural?>.</span>            
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:10px">&nbsp;</td>
          </tr>          
          <tr>
            <td align="right" valign="bottom" colspan="2" style="padding-left:20px;padding-bottom:0px;margin-bottom:0px">
              <img src="<?php print $img_url?>pcen_signature.png"></img><br />
              <b><span style='font-size:12.0pt;'>Sandy Bihlmeyer, MEd, CCMEP</span></b><br />
              <b><span style='font-size:12.0pt;'>Executive Director, Primary Care Network</span></b><br />
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:20px;">
                <span style='font-size:10.0pt;'>Primary Care Network  3805 S. Kansas Expy., Suite C   Springfield, MO 65807  <br/> Phone: 417-841-3658   Fax: 417-841-3609   www.primarycarenet.org</span>
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
