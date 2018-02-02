<?php
$pratext = ' <i>AMA PRA Category 1 Credit(s)&trade;</i>';
$img_url = $cert_img_url ? $cert_img_url : base_path().path_to_theme().'/img/';
$title = $certificate['@ancctitle'] ? $certificate['@ancctitle'] : $certificate['course_title']
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language; ?>" xml:lang="<?php print $language; ?>">

<head>
  <title><?php print $head_title; ?></title>
</head>
<body>
<div style="font-size:11.0pt;font-family:Times New Roman, Times, serif;color: #000000;width: 626px;clear: both;margin:auto">
<table width="620px" style="border: none;padding:5px">
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><img src="<?php print $img_url?>apna_logo.png"></img></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:10px;font-size:14pt;font-weight:bold">Certificate of Successful Completion of a <br/>Continuing Nursing Education Activity</td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:20px;"><?php print $title ?></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:20px;">
            <span style="font-weight:bold;"><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></span>
            <br/>
            <?php print $certificate['address'] ?> 
            </td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px;">Earned <?php print $certificate['creditearned'] ?> contact hours in psychopharmacology.</td>
          </tr>  
          <tr>
              <td align="center" colspan="2" style="padding-top:15px;">
              <img src="<?php print $img_url?>apna_signature.png"></img><br/>
              Patricia L. Black, PhD(c), RN<br/>
              APNA Associate Executive Director<br/>
              <span style="font-style:italic">Accredited with Distinction through: November 30, 2017</span><br/>
            </td>
          </tr>    
          <tr>
            <td align="center" colspan="2" style="padding-top:25px;font-size:10pt">American Psychiatric Nurses Association &nbsp;&nbsp;|&nbsp;&nbsp; 3141 Fairview Park Dr., Suite 625 &nbsp;&nbsp;|&nbsp;&nbsp; Falls Church, VA 22042</td>
          </tr>       
          <tr>
            <td align="center" colspan="2" style="padding-top:15px;font-size:10pt;font-style:italic">The American Psychiatric Nurses Association is accredited as a provider of continuing nursing education by the American Nurses Credentialing Center’s Commission on Accreditation.</td>
          </tr>       
</table>
</div>
<script>print();</script>
</body>
</html>