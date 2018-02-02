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
<div style="font-size:10.0pt;font-family:Arial, Times, serif;color: #000000;width: 626px;clear: both;margin:auto">
<table width="620px" style="border: none;padding:5px">
          <tr>
            <td align="left"  colspan="2" valign="top" style="padding-top:10px"><img src="<?php print $img_url?>cafp_logo.jpg"></img></td>
          </tr>
          <tr>
            <td align="left" colspan="2" style="padding-top:10px;font-weight:normal;">
                <?php print $date_earned?><br /><br />
              <?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?><br />
              <?php print $certificate['address']?><br />
            </td>
          </tr>
          <tr>
            <td align="left" colspan="2" style="padding-top:25px;font-weight:bold;font-size:16pt">CERTIFICATE OF PARTICIPATION</td>
          </tr>   
          <tr>
            <td align="left" colspan="2" style="padding-top:20px;">This certificate verifies that the person listed above has successfully completed the 
              online educational activity titled<br /><br /> <strong><?php print $certificate['course_title'] ?></strong></td>
          </tr>  
          <tr>
            <td align="left" colspan="2" style="padding-top:20px;">
            The CAFP is accredited by the Accreditation Council for Continuing Medical Education to provide continuing education for physicians.  
            The CAFP designates this educational activity for a maximum of <?php print $certificate['amapracat1'].$pratext ?> 
            and is accredited through <?php print $date_expire?>.<br /><br />

                The California Board of Registered Nursing certifies CAFP as a continuing education provider (number 1809).  This certificate must be retained for a period of four years after the conclusion of the course.<br /><br />

                Clinicians should only claim credit commensurate with the extent of their participation in the activity.
            </td>
          </tr>  
          <tr>
            <td align="left" colspan="2" style="padding-top:25px;">
              <img src="<?php print $img_url?>cafp_signature1.jpg"></img><br/>
              Carol Havens, MD, Chair, CAFP Committee on Continuing Professional Development
            </td>
          </tr>    
          <tr>
            <td align="left" colspan="2" style="padding-top:15px;padding-bottom:15px;">
                <img src="<?php print $img_url?>jerri-l-davis-signature.png"></img><br/>
                Jerri L. Davis, CHCP<br/>
                Director of Continuing Professional Development, California Academy of Family Physicians
            </td>
          </tr>   
          <tr>
            <td align="left" colspan="2" style="padding-top:5px;font-size:9pt;border-top:1px solid black">1520 Pacific Avenue  /  San Francisco  CA  94109  /  415 345 8667  /  f 415 345 8668  /  cafp@familydocs.org</td>
          </tr>
</table>
</div>
<script>print();</script>
</body>
