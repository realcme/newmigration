<?php
$pratext = ' <i>AMA PRA Category 1 Credit(s)&trade;</i>';
$img_url = $cert_img_url ? $cert_img_url : base_path().path_to_theme().'/img/';
$id = $certificate['@nlaid'];
if ($id) $id = "Activity ID: $id";
$expiration_date = strftime("%m %d, %Y", strtotime($certificate['expiration_date']));

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language; ?>" xml:lang="<?php print $language; ?>">

<head>
  <title><?php print $head_title; ?></title>
</head>
<body>
<div style="font-size:11.0pt;font-family:arial, Times New Roman, Times, serif;color: #000000;clear: both;width: 620px;margin: auto;padding: 0px;">
    <table style="border: 4px solid red; width: 624px; margin: 0px;padding: 0px;">
		<tr><td style=" margin: 0px; padding: 0px;">
    <table style="border: 2px solid black; width: 620px;">
      <tr>
        <td align="center" colspan="2" style="padding-top:25px">
          <img src="<?php print $img_url?>lipid_logo.jpg"></img><br />
          The National Lipid Association
          </td>
      </tr>
      <tr>
        <td align="center" colspan="2" style="padding-top:10px">certifies that</td>
      </tr>          
      <tr>
        <td align="center" colspan="2" style="padding-top:6px;font-weight:bold;font-style:italic"><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></td>
      </tr>          
      <tr>
        <td align="center" colspan="2" style="padding-top:10px">participated in the continuing education activity titled</td>
      </tr>          
      <tr>
        <td align="center" colspan="2" style="padding-top:10px"><span style='font-style:italic;'><?php print $certificate['course_title'] ?></span></td>
      </tr>    
      <tr>
        <td align="center" colspan="2" style="padding:15px 10px 0px 10px;">
        This Self-Assessment CME program has been reviewed and is approved for a maximum of <?php print $certificate['aapa']?> AAPA Category 1 Self-Assessment CME credits 
        by the Physician Assistant Review Panel. Approval is valid until <?php print $expiration_date?>. 
        Physician Assistants should claim only the credit commensurate with the extent of their participation in the activity. 
        This program was planned in accordance with AAPA's CME Standards.        
        </td>
      </tr>   
        <tr>
          <td align="center" colspan="2" style="padding-top:5px"><img src="<?php print $img_url?>aapa_logo.png"></img></td>
      </tr>             
      <tr>
        <td align="left" valign="bottom" style="width:55%;font-size:10.0pt;padding-left:20px;padding-top:5px;margin-bottom:0px">
          <img src="<?php print $img_url?>lipid_signature_4.jpg"></img><br />
            Robert A. Wild, MD, PhD, MPH, FNLA<br />
            CME Committee Chair<br />
            National Lipid Association<br />
        </td>
        <td align="left" valign="bottom" style="width:45%;font-size:10.0pt;padding-left:20px;padding-top:5px;margin-bottom:0px">
          <img src="<?php print $img_url?>lipid_signature_3.jpg"></img><br />
            Christopher W. DeVille<br />
            CME Director<br />
            National Lipid Association<br />
        </td>
      </tr>
      <tr>
        <td align="left" colspan="2" style="padding-left:20px;padding-top:10px;font-size:10.0pt;vertical-align:top">
        	Date Issued: <?php print $certificate['dateearned'] ?><br />
        	Claimed Credit: <?php print $certificate['creditearned'] ?> AAPA Category 1 Self-Assessment CME Credits<br />
        	<?php print $id ?>
        </td>
      </tr>  
      <tr>
        <td align="left" colspan="2" style="font-size:10pt; padding-top:20px; color: #AAAAAA;text-align: center" >
        National Lipid Association &nbsp;&nbsp;&nbsp; 6816 Southpoint Pkwy, Ste 1000 &nbsp;&nbsp;&nbsp; Jacksonville FL 32216
        <br/> 
				(904) 998-0854 &nbsp;&nbsp;&nbsp; www.lipid.org
        
        </td>
      </tr>          
    </table></td></tr></table>  
  </div>
<script>print();</script>
</body>
</html>