<?php
$pratext = ' <i>AMA PRA Category 1 Credit(s)&trade;</i>';
$img_url = $cert_img_url ? $cert_img_url : base_path().path_to_theme().'/img/';
$date_earned = strftime("%B %d, %Y", strtotime($certificate['dateearned']));
if (!strpos($certificate['creditearned'], '.')) {
    $creditearned = $certificate['creditearned'].'.0';
} else {
    $creditearned = $certificate['creditearned'];
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
<div style="font-size:11.0pt;font-family:Arial, Times, serif;color: #000000;clear: both;width: 620px;margin: auto;padding: 0px;">
<table style="border: 1px solid #C0C0C0;background-color:#C0C0C0" width="620px">
  <tr>
    <td>
      <table width="100%" style="border: 1px solid #808080;background-color:#808080" >
        <tr>
          <td>
            <table width="100%" style="border: 2px solid black;background-color:white;">
                <tr>
                  <td align="center" colspan="2" style="padding-top:5px"><img src="<?php print $img_url ?>uma_logo2.png"></img></td>
                </tr>          
                <tr>
                  <td align="center" colspan="2" style="padding:15px 10px 10px 10px;font-size:14pt;">Ultimate Medical Academy / Complete Conference Management
                  <br/><br/>
                  <span style="font-size:10pt">11440 North Kendall Drive, Suite 306, Miami, Florida 33176, 305-279-2263</span>
                 
                  </td>
                </tr> 
                <tr>
                  <td align="center" colspan="2" style="padding-top:20px"><span style='font-size:14.0pt;font-weight: bold;'><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></span> <hr/></td>
                </tr>          
                <tr>
                  <td align="center" colspan="2" style="padding-top:10px">has successfully completed</td>
                </tr>          
                <tr>
                  <td align="center" colspan="2" style="padding-top:10px"><span style='font-weight:bold;font-style:italic'><?php print $certificate['course_title'] ?></span></td>
                </tr>          
                <tr>
                  <td align="center" colspan="2" style="padding-top:15px"><?php print $date_earned ?></td>
                </tr>
                <tr>
                  <td align="center" colspan="2" style="padding-top:15px; font-weight:bold"><?php print $creditearned; ?> Contact Hours
                  </td>
                </tr>
                <tr>
                  <td align="center" colspan="2" style="padding-top:15px;padding-bottom:20px">Ultimate Medical Academy / Complete Conference Management is accredited as a provider of continuing nursing education by the American Nurses Credentialing Center’s Commission of Accreditation. #P0420</td>
                </tr>  
                <tr>
                  <td align="left" colspan="2" style="padding-top:15px;padding-bottom:20px;padding-left:10px;">
                  <div style="width:400px;text-align:left;font-size:10pt">
                  <img src="<?php print $img_url ?>uma-barbara-obrien-signature.png" width="200"></img><br/>
                  <span style="font-weight:bold;">Barbara O'Brien, RN, MSN, Cert.</span><br/>
                  <span style="font-style:italic;">President MHS</span><br/>
                  </div>
                  </td>
                </tr>  
            </table>
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
</div>
<script>print();</script>
</body>
</html>