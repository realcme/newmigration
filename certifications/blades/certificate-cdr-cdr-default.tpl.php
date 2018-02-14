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
<div style="font-size:11.0pt;font-family:arial, Times New Roman, Times, serif;color: #000000;clear: both;width: 620px;margin: auto;padding: 0px;">
    <table style="width: 624px; margin: 0px;padding: 0px;">
		<tr><td style=" margin: 0px; padding: 0px;">
    <table style="border: 2px solid black; width: 620px;">
     
      <tr>
        <td align="center" colspan="2" style="padding-top:45px;font-family:'Times New Roman', Times, serif;font-size:14pt; text-transform: uppercase;">
          ATTENDANCE CERTIFICATE
          <br />
          <br />
          OF
          <br />
          <br />
          CONTINUING EDUCATION ACTIVITY
          </td>
      </tr>
      <tr>
        <td align="center" colspan="2" style="padding-top:16px;font-style:italic">The Postgraduate Institute for Medicine certifies that</td>
      </tr>        
      <tr>
        <td align="center" colspan="2" style="padding-top:16px;font-weight:bold;font-style:italic"><?php print $certificate['firstname'] . ' ' . $certificate['lastname'] . ', ' . $certificate['professionlabel'] ?></td>
      </tr>          
      <tr>
        <td align="center" colspan="2" style="padding-top:15px"><span style='font-style:italic;'>has participated in the enduring material titled</span></td>
      </tr>          
      <tr>
        <td align="center" colspan="2" style="padding-top:15px"><span style='font-style:italic;'><?php print $certificate['course_title'] ?></span></td>
      </tr>    
      <tr>
        <td align="center" colspan="2" style="padding-top:15px"><span style='font-style:italic;'>on <?php print $certificate['dateearned'] ?></span></td>
      </tr> 
      <tr>
        <td align="center" colspan="2" style="padding-top:15px;font-size:10.0pt;">The activity was designated for</td>
      </tr> 
      <tr>
        <td align="center" colspan="2" style="padding-top:20px;font-size:10.0pt;"><?php printf("%4.2f", $certificate['cdr']) ?> CPEUs by the Commission of Dietetic Registration</td>
      </tr>          
      <tr></tr>
      <tr align="center" style="display: block; padding-top:40px; margin:auto;">
        <td align="left" valign="bottom" style="/*outline:thin solid;*/ font-size:10.0pt;padding-left:5px;margin-bottom:0px; min-width:250px;">
          <img src="<?php print $img_url?>cdr-pim.png" style="/*border: thin solid;*/ max-width: 200px;"></img><br />

        </td>
        <td align="left" valign="bottom" style="/*outline:thin solid;*/ font-size:10.0pt;margin-bottom:0px;min-width:250px;padding-left:5px;">
        </td>
      </tr>
      <tr align="center" style="display: block; margin:auto; margin-top: -3px; ">
        <td align="left" style="/*outline:thin solid;*/padding-left:5px;padding-top:10px;font-size:10.0pt;vertical-align:bottom; min-width:250px;">
			Postgraduate Institute for Medicine <br />
			304 Inverness Way South, Suite 100 <br />
			Englewood, CO 80112 <br />
			(303) 799-1930 <br />
			(303) 858-8848 – Fax 
        </td>
        <td align="left" valign="bottom" style="/*outline:thin solid;*/padding-left:20px;padding-top:10px;font-size:10.0pt; min-width:250px;">
        <img src="<?php print $img_url?>cdr-sig1.png" style="/*border: thin solid;*/ max-width: 200px;"></img><br />
			Trace Hutchison, PharmD <br />
			Director of Medical Education <br />
			Postgraduate Institute for Medicine 
        </td>
      </tr>            
    </table></td></tr></table>  
  </div>
<script>print();</script>
</body>
