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
<div style="font-size:12.0pt;font-family:Arial, Times, serif;color: #000000;clear: both;width: 600px;margin: auto;padding: 0px;">
<table width="600px" style="border: 2px solid #000000">
  <tr><td>
    <table style="border: 5px solid #000000; width:100%">
      <tr><td>
        <table style="border: none;width: 100%">          
          <tr>
            <td align="right" colspan="2" style="padding-left:20px;padding-bottom:0px;margin-bottom:0px">
              <img src="<?php print $img_url?>cis_logo.jpg"></img><br />
              <span style='font-size:10.0pt;'>
                225 Dunn Street<br/>
                Houma, LA  70360<br />
                Phone 985-873-5670<br />
                Email: harriet.breaux@cardio.com</span><br /><br />
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="border-top:1px solid #000000;border-bottom:1px solid #000000;padding-top: 15px;padding-bottom: 15px;font-weight:bold;">CME CERTIFICATE</td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:15px;font-size:16px;font-style:italic;font-weight:bold">Cardiovascular Institute of the South</td>
          </tr>        
          <tr>
            <td align="center" colspan="2" style="padding-top:15px;font-weight:bold">certifies that</td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><span style="font-weight:bold;text-decoration:underline"><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px">has participated in the educational activity titled:</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px;font-weight:bold"><?php print $certificate['course_title'] ?></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px">on <?php print $certificate['dateearned'] ?> and is awarded</td>
          </tr>         
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><?php print $certificate['creditearned'].$pratext ?></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:10px">&nbsp;</td>
          </tr>          
          <tr>
            <td align="right" valign="bottom" colspan="2" style="padding-left:20px;padding-bottom:0px;margin-bottom:0px">
              <img src="<?php print $img_url?>cis_signature.jpg"></img><br />
              <span style='font-size:10.0pt;border-top: 1px solid #CCCCCC'>Harriet Breaux, CME Coordinator</span><br />
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
