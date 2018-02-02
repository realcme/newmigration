<?php
$pratext = ' <i>AMA PRA Category 1 Credit(s)&trade;</i>';
$img_url = $cert_img_url ? $cert_img_url : base_path().path_to_theme().'/img/';
$ancc = $certificate['ancc'];
if ($ancc && !strpos($ancc, '.')) $ancc = $ancc.'.0';
$creditearned = $certificate['creditearned'];
if ($creditearned && !strpos($creditearned, '.')) $creditearned = $creditearned.'.0';
$pharmacology = $certificate['pharmacology'];
if ($pharmacology && !strpos($pharmacology, '.')) $pharmacology = $pharmacology.'.0';

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
<div style="font-size:11.0pt;font-family:Arial, Verdana, sans-serif;color: #000000;clear: both;width: 600px;margin: auto;padding: 0px;">
<table width="600px">
          <tr>
            <td align="left" style="padding-top:5px;font-size:8.0pt">
            <span style='font-weight:bold;'>Boston University</span> School of Medicine<br/>
              Continuing Medical Education<br/>
              72 East Concord Street, A402<br/>
              Boston, Massachusetts 02118<br/>
              T 617-638-4605 &nbsp;&nbsp; F 617-638-4905<br/>
              www.bu.edu/cme<br/>
            
            </td>
            <td align="right" style="padding-top:5px;">
              <img src="<?php print $img_url?>bu_logo.png" style="width: 132px; height: 59px;"></img>
            </td>
          </tr>          
          <tr>
            <td align="left" colspan="2" style="padding-top:10px;font-size:10.0pt">
            <?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?><br/>
            <?php print $certificate['address'] ?>
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:20px;">Continuing Nursing Education Provider Unit <br/>Boston University School of Medicine</td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:10px">certifies that</td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:10px;font-weight:bold;"><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:10px">has participated in the educational activity titled</td>
          </tr>  
          <tr>
            <td align="center" colspan="2" style="padding-top:10px;font-weight:bold;"><?php print $certificate['course_title'] ?></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:10px;">and is awarded <?php print $creditearned ?> CNE contact hours.</td>
          </tr>        
          <tr>
            <td align="left" colspan="2" style="padding-top:20px;font-size:10.0pt;padding-left:180px">
              <table cellspacing="0">
                <tr><td style="text-align: left">Date Completed: </td><td style="padding-left: 10px;text-align: left"> <?php print $certificate['dateearned'] ?>  </td></tr>
                <tr><td style="text-align: left">Maximum Contact Hours: </td><td style="padding-left: 10px;text-align: left"> <?php print $ancc?> CNE </td></tr>
                <tr><td style="text-align: left">Total Contact Hours:</td><td style="padding-left: 10px;text-align: left"> <?php print $ancc ?></td></tr>
                <tr><td style="text-align: left">Pharmacology Credits:</td><td style="padding-left: 10px;text-align: left"> <?php print $pharmacology ?> contact hours</td></tr>
              </table>
            </td>
          </tr>     
          <tr>
            <td align="left" colspan="2" style="padding:20px 15px 15px 15px; font-size:10.0pt">
            Continuing Nursing Education Provider Unit, Boston University School of Medicine, is accredited as a provider of continuing nursing education 
            by the American Nurses Credentialing Center's Commission on Accreditation. 
            <br/>
            </td>
          </tr>
          <tr>
            <td align="right" colspan="2" style="padding-top:5px">
            <img src="<?php print $img_url?>bu_signature.jpg" style="width: 155px; height: 52px;"></img><br/>
            </td>
          </tr>   
</table>
</div>
<script>print();</script>
</body>
</html>