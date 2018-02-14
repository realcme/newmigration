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
<table width="600px" style="border: 4px solid #404040;">
          <tr>
            <td align="center" colspan="2" style="padding-top:15px">STATEMENT OF PARTICIPATION</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><span style='font-style:italic;'>The Postgraduate Institute for Medicine confirms that</span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><span style='font-size:14.0pt;font-weight: bold;'><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></span>
            </td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><span style='font-style:italic;'>has participated in the live activity titled</span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><span style='font-weight:bold;'><?php print $certificate['course_title'] ?></span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><?php print $certificate['dateearned'] ?>.           
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:15px">
            The Postgraduate Institute for Medicine designates this continuing education activity for <?php print $certificate['acpe']?> contact hour(s) 
            (<?php print $ceuapproved ?> CEUs) of the Accreditation Council for Pharmacy Education.
            <br /><br />
            <?php print $uan?><?php print $uantype?><span style="font-size: 11pt"><?php print $uantext?></span>
            </td>
          </tr>
          <tr>
            <td align="center" style="padding-top:15px; padding-left: 20px"><img src="<?php print $img_url?>pgim_logo.jpg" style="width: 250px; height: 59px;"></img></td>
            <td align="left" style="padding: 15px;font-size: 8pt;">
            <img src="<?php print $img_url ?>acpe_logo.png"></img><br />
The Postgraduate Institute for Medicine is accredited by the Accreditation Council for Pharmacy Education as a provider of continuing pharmacy education.</td>
          </tr>
          <tr>
            <td align="center" style="padding-top:5px"><img src="<?php print $img_url?>pgim_signature.jpg" style="width: 250px; height: 47px;"></img></td>
            <td align="center" style="padding-top:5px">&nbsp;</td>
          </tr>
          <tr>
            <td align="center" style="padding-top:5px; font-size: 8pt;vertical-align: top">
              <div style="text-align: left; padding-left: 20px">
              Trace Hutchison, PharmD<br/>
              Director of Medical Education<br/>
              Postgraduate Institute for Medicine<br/>
              304 Inverness Way South, Suite 100<br/>
              Englewood, CO 80112<br/>
              (303) 799-1930<br/>
              (303) 858-8848 - Fax<br/>
              </div>
            </td>
            <td align="left" style="padding-top:5px; font-size: 8pt;vertical-align: top">
            Date certificate issued: <?php print $certificate['dateearned'] ?> 
            </td>
          </tr>
</table>
</div>
<script>print();</script>
</body>
