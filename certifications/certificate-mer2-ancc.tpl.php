<?php
$pratext = ' <i>AMA PRA Category 1 Credit(s)&trade;</i>';
$img_url = $cert_img_url ? $cert_img_url : base_path().path_to_theme().'/img/';
$amountearnerd = $certificate['creditearned'];
if (!strpos($amountearnerd, '.')) {
  $amountearnerd = $amountearnerd.'.0';
}
$anccmax = $certificate['ancc'];
if (!strpos($anccmax, '.')) {
  $anccmax = $anccmax.'.0';
}
$range = strftime("%B %d, %Y", strtotime($certificate['dateearned']));//strftime("%B %Y", strtotime($certificate['begin_date']))." - ". strftime("%B %Y", strtotime($certificate['expiration_date']));
$info = $certificate['@mer_info'];
if ($info) {
  // find links
  $arr = array();
  foreach (explode(' ', $info) as $word) {
    if (substr($word, 0, 4) == 'http') {
      $arr[] = "<a href=\"$word\">$word</a>";
    } else {
      $arr[] = $word;
    }  
  }
  $info = implode(" ", $arr);
}
//
/**************************************************/
/* STYLES MUST BE INLINED (GMAIL REQUIREMENT)     */
/**************************************************/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language; ?>" xml:lang="<?php print $language; ?>">

<head>
  <title><?php print $head_title; ?></title>
</head>
<body>
<div style="font-size:10.0pt;font-family:Arial, Times, serif;color: #000000;clear: both;width: 620px;margin: auto;padding: 0px;">
<table cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="3" valign="bottom" align="center"  style="width: 601px;margin: 0px;padding: 0px; height: 36px;line-height: 0px">
      <img src="<?php print $img_url?>mer_ancc_header.jpg" width="601px" height="36px"></img>
    </td>
  </tr>
  <tr>
    <td valign="top" align="right" style="width: 21px;padding: 0px 0px 0px 0px; line-height: 0px">
      <img src="<?php print $img_url?>mer_ancc_left.jpg" width="21px" height="660px"></img>
    </td>
    <td valign="top" align="center" style="width: 559px;">
    
        <table>        
          <tr>
            <td align="center" colspan="2" style="padding-top:0px;font-size:16pt">Certificate of Credit</td>
          </tr>  
          <tr>
            <td align="center" colspan="2" style="padding-top:10px;">Medical Education Resources, Inc. <br/>
							<span style="font-style: italic">Certifies that</span>
            </td>
          </tr>    
          <tr>
            <td align="center" colspan="2" style="padding-top:10px;font-weight: bold;"><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?>, <?php print $certificate['professionlabel']; ?>
            </td>
          </tr>  
          <tr>
            <td align="center" colspan="2" style="padding-top:10px;">has participated in the educational activity titled
            </td>
          </tr>  
          <tr>
            <td align="center" colspan="2" style="padding-top:10px;font-weight: bold;"><?php print $certificate['course_title'] ?><br/><?php print $range?>
            </td>
          </tr>        
          <tr>
            <td align="center" colspan="2" style="padding-top:10px;">and is awarded <?php print $amountearnerd?> Contact Hours</td>
          </tr>         
          <tr>
            <td align="left" colspan="2" style="padding:10px;font-size:10pt">
							Medical Education Resources is accredited as a provider of continuing nursing education by the American Nurses Credentialing Center’s Commission on Accreditation.  
							<br/><br/>
							This activity provides <?php print $anccmax?> contact hours of continuing nursing education.
							<br/><br/>
              Medical Education Resources is a provider of continuing nursing education by the California Board of Registered Nursing, Provider #CEP12299.
              This CE activity provides <?php print $anccmax?> contact hours of continuing nursing education.
							<br/><br/>
							<?php //print $info?>
            </td>
          </tr>        
          <tr>
            <td align="center" colspan="2" valign="bottom" style="padding-left:0px;padding-bottom:0px;margin-bottom:0px;font-size:10pt">
              <img src="<?php print $img_url?>mer_signature.png"></img><br/>              
              Nathan Scott - Education Director<br/> 
              &nbsp;<?php //print $certificate['dateearned']?>
            </td>
          </tr>                  
          <tr>
              <td align="left" valign="top"><img src="<?php print $img_url?>mer_logo-new.jpg" height="59"></img></td>
              <td align="left" style="font-size: 10pt">Medical Education Resources, Inc. <br/> 9785 S Maroon Circle, Suite 100, Englewood, CO 80112</td>
          </tr>
        </table>  
        

    </td>
    <td valign="top" align="left" style="width: 21px;padding: 0px 0px 0px 0px; line-height: 0px">
      <img src="<?php print $img_url?>mer_ancc_right.jpg" width="21px" height="660px"></img>
    </td>
  </tr>
  <tr>
    <td colspan="3" valign="top" align="center"  style="width: 601px;margin: 0px;padding: 0px; height: 36px;line-height: 0px">
      <img src="<?php print $img_url?>mer_ancc_footer.jpg" width="601px" height="36px"></img>
    </td>
  </tr>
</table>
</div>
<script>print();</script>
</body>
</html>