<?php
$pratext = ' <strong><i>AMA PRA Category 1 Credit(s)&trade;</i></strong>';
$img_url = $cert_img_url ? $cert_img_url : base_path().path_to_theme().'/img/';
$ancc = $certificate['ancc'];
if ($ancc && !strpos($ancc, '.')) $ancc = $ancc.'.0';
$creditearned = $certificate['creditearned'];
if ($creditearned && !strpos($creditearned, '.')) $creditearned = $creditearned.'.0';
$pharmacology = $certificate['pharmacology'];
if ($pharmacology && !strpos($pharmacology, '.')) $pharmacology = $pharmacology.'.0';

if ($certificate['pharmacology'] == $certificate['ancc']) {
  $txt = "Contact Hours: $ancc all of which are eligible for Pharmacotherapeutic credit.";
} else {
  $txt = "Contact Hours: $ancc out of which $pharmacology are eligible for Pharmacotherapeutic credit.";
}
$degree = ($certificate['degree']) ? ", ".$certificate['degree'] : "";
$score = ($certificate['score']? $certificate['score']: "0")."%";
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
            <span style='font-weight:bold;'>Boston University School of Medicine</span><br/>
              The Barry M. Manuel Office of Continuing Medical Education<br/><br/>
              72 East Concord Street, A402, Boston, MA 02118-2307<br/>
              T 617.638.4605  F 617.638.4905  &nbsp;&nbsp;  E cme@bu.edu <br/> 
              www.bu.edu/cme<br/>
            </td>
            <td align="right" style="padding-top:5px;">
              <img src="<?php print $img_url?>bu_logo.png" style="width: 132px; height: 59px;"></img>
            </td>
          </tr>          
          <tr>
            <td align="left" colspan="2" style="padding-top:10px;font-size:10.0pt">
            <?php print $certificate['firstname'] ?> <?php print $certificate['lastname'].$degree ?><br/>
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
            <td align="center" colspan="2" style="padding-top:10px;font-weight:bold;"><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?><?php print $degree?></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:10px">has participated in the educational activity titled</td>
          </tr>  
          <tr>
            <td align="center" colspan="2" style="padding-top:10px;font-weight:bold;"><?php print $certificate['course_title'] ?></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:10px;">and is awarded <?php print $creditearned ?> contact hours.</td>
          </tr>
          <tr>
            <td align="left" colspan="2" style="padding-top:20px;font-size:10.0pt;padding-left:180px">
              <table cellspacing="0">
                <tr><td style="text-align: left">Date Completed: </td><td style="padding-left: 10px;text-align: left"> <?php print $certificate['dateearned'] ?>  </td></tr>
                <tr><td style="text-align: left">Maximum Contact Hours: </td><td style="padding-left: 10px;text-align: left"> <?php print $ancc?> </td></tr>
                <tr><td style="text-align: left">Pharmacology  Contact Hours:</td><td style="padding-left: 10px;text-align: left"> <?php print $pharmacology ?></td></tr>
                <tr><td style="text-align: left">Score:</td><td style="padding-left: 10px;text-align: left; border-top:1px solid #000;"> <?php print $score ?></td></tr>
              </table>
            </td>
          </tr>      
          <tr>
            <td align="left" colspan="2" style="padding:20px 15px 15px 15px; font-size:8.0pt">
              Continuing Nursing Education Provider Unit, Boston University School of Medicine, is accredited as a provider of continuing nursing education by the American Nurses Credentialing Center’s Commission on Accreditation.
            <br/>
            </td>
          </tr>         
          <tr>
            <td align="right" colspan="2" style="padding-top:5px;font-size:10pt">
            <img src="<?php print $img_url?>bu_signature.png" style="width: 155px;"></img><br/>
            <span style="text-decoration:overline">Daniel P. Alford, MD, MPH, FACP, FASAM</span><br/>
            Assistant Dean<br/>
            Associate Professor of Medicine<br/>
            </td>
          </tr>   
</table>
</div>
<script>print();</script>
</body>
</html>