<?php
if ($certificate['creditearned'] > 1) {
  $pratext = ' <i>AMA PRA Category 1 Credits&trade;</i>';
} else {
  $pratext = ' <i>AMA PRA Category 1 Credit&trade;</i>';
}
$img_url = $cert_img_url ? $cert_img_url : base_path().path_to_theme().'/img/';
$issue_date = strftime("%m/%d/%Y", strtotime($certificate['dateearned']));
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language; ?>" xml:lang="<?php print $language; ?>">

<head>
  <title><?php print $head_title; ?></title>
</head>
<body>
<div style="font-size:12.0pt;font-family:Verdana, Times, serif;color: #000000;clear: both;margin: auto;padding: 0px;">
  <div style="width:620px;background-color:#FDB141"><img src="<?php print $img_url?>antidote_logo.png"></img>
  <table style="border: 5px solid #FDB141; width:620px;padding: 0px;background-color:#FFFFFF">
    <tr><td>
      <table style="border: 2px solid #FDB141; width:100%;border-top: none;">
        <tr>
          <td align="center" colspan="2" style="padding-top:10px;">Antidote Education Company certifies that</td>
        </tr>          
        <tr>
          <td align="center" colspan="2" style="padding-top:10px"><span style='font-weight:bold;text-decoration:underline'><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></span></td>
        </tr>          
        <tr>
          <td align="center" colspan="2" style="padding-top:5px;font-size:10.0pt">has participated in the educational activity entitled</td>
        </tr>          
        <tr>
          <td align="center" colspan="2" style="padding-top:20px"><span style='font-weight:bold;'><?php print $certificate['course_title'] ?></span></td>
        </tr>        
        <tr>
          <td align="center" colspan="2" style="padding-top:15px">on</td>
        </tr>
        <tr>
          <td align="center" colspan="2" style="padding-top:10px"><?php print $issue_date ?></td>
        </tr>   
        <tr>
          <td align="center" colspan="2" style="padding-top:15px;font-size:10.0pt;">Antidote Education Company is accredited by the Accreditation Council for Continuing Medical Education 
          to provide continuing medical education for physicians.  
          Antidote designates this enduring material for a maximum of <?php print $certificate['amapracat1'].$pratext ?>. 
          Physicians should claim only the credit commensurate with the extent of their participation in the activity.</td>
        </tr>
        <?php if ($certificate['profession'] == 'PA') { ?>    
        <tr>
          <td align="center" colspan="2" style="padding-top:10px;font-size:10.0pt;">AAPA accepts certificates of participation for educational activities certified for <?php print $pratext?> from organizations accredited by ACCME. 
          Physician assistants may receive a maximum of <?php print $certificate['amapracat1'] ?> hours of Category I credit for completing this program.</td>
        </tr>          
        <?php } ?>
        <tr>
          <td align="center" colspan="2" style="padding-top:10px;">&nbsp;</td>
        </tr>      
        <tr>
          <td align="left" valign="bottom" style="width:50%;padding-left:20px;padding-bottom:0px;margin-bottom:0px;font-size:10.0pt">
          I participated in <?php print $certificate['creditearned'] ?> hours of this activity.
          <br/>
          <br/>
          <br/>
          <div style="text-align:right;width:100%"><?php print $issue_date ?></div>
          <hr style="border: 0;color: #A0A0A0;background-color: #A0A0A0;height:1px;width:100%;" />
          <div style="text-align:left;float:left;">Participant Signature	</div>
          <div style="text-align:right;float:right;">Date</div>
          </td>
          <td align="right" valign="bottom" style="width:50%;padding-left:20px;padding-bottom:0px;margin-bottom:0px;font-size:10.0pt">
            <img src="<?php print $img_url?>antidote_signature.png" ></img><br/>
            <hr style="border: 0;color: #A0A0A0;background-color: #A0A0A0;height:1px;width: 90%;" />
            <div>
              Michael A. Crouch<br/>
              President, Antidote Education Company
            </div>
          </td>
        </tr>      
        <tr>
          <td align="center" colspan="2" style="padding-top:10px;">&nbsp;</td>
        </tr>          
      </table>  
    </td></tr>  
  </table>  
  </div>
</div>
<script>print();</script>
</body>
</html>