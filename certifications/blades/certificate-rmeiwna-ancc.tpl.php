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
<div style="font-size:12.0pt;font-family:Times New Roman, Times, serif;color: #230B31;clear: both;margin: 0px;padding: 0px;">
  <table style="border: 5px solid #004D89; width:600px;">
    <tr><td>
      <table style="border: 2px solid #004D89; width:100%">
        <tr>
          <td align="center" colspan="2" style="padding-top:25px">
                <img src="<?php print $img_url?>rmeiwna_logo.png"></img>
          </td>
        </tr>         
        <tr>
          <td align="center" colspan="2" style="padding-top:5px;padding-bottom:20px"><span style='font-weight:bold;'>CNE CERTIFICATE</span></td>
        </tr>
        <tr>
          <td align="center" colspan="2" style="padding-top:10px">
            <span style='font-weight:bold;font-size:14pt'><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></span>
             <hr style="border: 0;color: #230B31;background-color: #230B31;height:1px;width: 90%;" />
          </td>
        </tr>          
        <tr>
          <td align="center" colspan="2" style="padding-top:10px">has participated in the educational activity titled</td>
        </tr>          
        <tr>
          <td align="center" colspan="2" style="padding-top:10px"><span style='font-weight:bold;font-style:italic'><?php print $certificate['course_title'] ?></span></td>
        </tr>          
        <tr>
          <td align="center" colspan="2" style="padding-top:10px">on <?php print $date_earned ?></td>
        </tr>         
        <tr>
          <td align="center" colspan="2" style="padding-top:5px"> and is awarded <?php print $certificate['creditearned']?> contact hours.</td>
        </tr>
        <tr>
          <td align="center" colspan="2" style="padding:20px 20px;font-size:10pt">This continuing nursing education activity was approved by the Wisconsin Nurses Association, an accredited approver by
  the American Nurses Credentialing Center’s Commission on Accreditation.
          </td>
        </tr>          
        <tr>
          <td align="center" valign="bottom" colspan="2" style="font-weight:bold;font-size:11pt">
                RMEI, LLC <br/>
Laurel Office Plaza | 101 Laurel Road | Suite 200 | Voorhees, NJ 08043 <br/>
Phone: 856.672.3300 | Fax: 856.546.7030 | www.RMEI.com <br/>
          </td>
        </tr>          
      </table>  
    </td></tr>  
  </table>  
</div>
<script>print();</script>
</body>
