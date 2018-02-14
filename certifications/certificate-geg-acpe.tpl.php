<?php
$pratext = ' <i>AMA PRA Category 1 Credit(s)&trade;</i>';
$ed = $certificate['@ed'] ?  $certificate['@ed'] : "This is an Internet-based activity.";
$img_url = $cert_img_url ? $cert_img_url : base_path().path_to_theme().'/img/';
$ceuapproved = $certificate['acpe'] / 10.0;
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
<table style="border: 1px solid #CCCCCC; width:100%" >   
  <tr>
    <td>
      <table  style="border: 3px solid #CCCCCC; width: 100%" >
          <tr>
            <td align="left" colspan="2" style="padding-top:5px"><img src="<?php print $img_url?>geg_logo.gif" style="width: 219px; height: 90px;"></img></td>
          </tr>      
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><span style='font-size:18.0pt;'>Statement of Continuing Education Credit</span></td>
          </tr>                    
          <tr>
            <td align="center" colspan="2" style="padding-top:5px">Global Education Group certifies that</td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?> has participated in the
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:10px">educational activity titled 
            <span style="font-weight: bold;"><?php print $certificate['course_title'] ?></span> 
            on  <?php print $certificate['dateearned'] ?>.   
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:10px">Global Education Group designates this continuing education activity 
            for <?php print $certificate['acpe'] ?> contact hour(s) (<?php print $ceuapproved ?>&nbsp;CEUs) of the Accreditation Council for Pharmacy Education. 
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:20px">Universal Program Number <span style="font-weight: bold;"><?php print $certificate['@upn'] ?></span></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><?php print $ed?></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:10px">
            <div style="float: left"><img src="<?php print $img_url?>acpe_logo.png" style="width: 55px; height: 49px;"></img></div>
            Global Education Group is accredited by the Accreditation Council for Pharmacy Education as a provider of continuing pharmacy education.
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:15px">
            <img src="<?php print $img_url?>geg_signature.gif" style="width: 121px; height: 86px;"></img><br/>
              <span style="font-weight: bold;">Stephen M. Lewis, MA</span><br />
              President, Global Education Group<br />
              (Date Certificate Issued: <?php print $certificate['dateearned'] ?>)
          </td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:10px;padding-bottom:0px">
            <img src="<?php print $img_url?>geg_footer.png" style="width: 620px;"></img>
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