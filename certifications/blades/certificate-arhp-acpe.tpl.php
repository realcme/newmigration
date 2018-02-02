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
<div style="font-size:11.0pt;font-family:Arial, Times, serif;color: #000000;width: 625px; margin: auto;clear: both;">
<table width="600px">
          <tr>
            <td align="center" style="padding-top:5px;border: 1px solid #CCCCCC;margin-right: 0px;"><img src="<?php print $img_url?>arhp_logo.png" ></img></td>
            <td align="center" style="padding-top:5px;border: 1px solid #CCCCCC;margin-left: 0px;">
              The Association of Reproductive Health Professionals confirms that <br/><br/>
              <strong><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></strong> <br/><br/>
              has participated in the educational activity titled<br/><br/>
              <strong><?php print $certificate['course_title'] ?></strong><br/><br/>
              and is awarded <?php print $certificate['creditearned']?> contact hours (# CEUs) of <br/>
              continuing education credit ACPE Universal Program Number <?php print $program_number?> <br/><br/>.
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:15px">
              <div>
              <div style="float: left"><img src="<?php print $img_url?>acpe_logo.png" ></img></div>
              The Association of Reproductive Health Professionals is accredited by the Accreditation Council for Pharmacy Education as a provider of continuing pharmacy education.
              </div>
              </td>
          </tr>          
          <tr>
            <td align="center" colspan="2"  style="padding-top:25px">
              <img src="<?php print $img_url?>arhp_signature.png"></img><br />
              Eve Espy, MD<br />
              Education Chair, ARHP<br />
              <?php print $certificate['dateearned']?>
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:20px">
              Association of Reproductive Health Professionals (ARHP)<br/>
              1901 L Street, NW, Suite 300 | Washington, DC 20036<br/>
              Phone: (202) 466-3825&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E-mail: arhp@arhp.org&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Web: www.arhp.org<br/>
            </td>
          </tr>       
</table>
</div>
<script>print();</script>
</body>
