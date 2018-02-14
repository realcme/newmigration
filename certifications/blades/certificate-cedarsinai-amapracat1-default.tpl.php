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
<div style="font-size:12.0pt;font-family:Arial, Times, serif;color: #000000;clear: both;margin: auto;width: 600px;padding: 0px;">
    <table style="border: 3px solid black; width:600px">
      <tr><td>
        <table style="border: 1px solid black;">
            <tr>
              <td align="center" colspan="2" style="padding-top:25px"><img src="<?php print $img_url?>cedarsinai_logo.png"></img></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><b><span style="font-size:18.0pt;font-family:'times new roman'"><em>Certificate of Participation</em></span></b></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:25px"><span style="font-weight:bold;">Cedars-Sinai Medical Center certifies that <?php print $certificate['firstname'] ?> <?php print $certificate['lastname']?> has participated in the educational activity titled</span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><span style="font-size:14.0pt;font-weight:bold"><?php print $certificate['course_title'] ?></span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><span style="font-weight:bold;">on <?php print $certificate['dateearned']?>.<br/><br/> This activity was designated for <?php print $certificate['amapracat1'].$pratext ?>.</span></td>
          </tr>          
          <tr>
            <td align="left" colspan="2" style="padding:30px">Course Number: <?php print $certificate['@number'] ?></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" valign="bottom" style="padding-left:20px;padding-bottom:10px;margin-bottom:0px">
              <img src="<?php print $img_url?>cedarsinai_signature.png"></img><br />
              <div style="position:relative;bottom:20px">
              Ellen Wilson Green, MS<br />
              Director, Medical Education<br />
              </div>
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding:10px;font-size:10pt">Cedars-Sinai Medical Center is accredited by the Accreditation Council for <br/> Continuing Medical Education to provide continuing medical education for physicians.</td>
          </tr>          
        </table>  
      </td></tr>  
    </table> 
</div>
<script>print();</script>
</body>
