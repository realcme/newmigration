<?php
$pratext = ' <i>AMA PRA Category 1 Credit(s)&trade;</i>';
$img_url = $cert_img_url ? $cert_img_url : base_path().path_to_theme().'/img/';
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
<div style="font-size:12.0pt;font-family:Times New Roman, Times, serif;color: #000000;clear: both;width: 600px;margin: auto;padding: 0px;">
<table width="600px">
          <tr>
            <td align="left" style="padding-top:5px">
            <img src="<?php print $img_url?>ufl_logo.png" style="width: 226px; height: 42px;"></img>
            </td>
            <td align="right" style="padding-top:5px">&nbsp;</td>
          </tr>          
          <tr>
            <td align="left" style="padding-top:5px; color:#0021A5">
              <span style="font-weight: bold">College of Medicine</span><br />
              Continuing Medical Education
            </td>
            <td align="right" style="padding-top:5px; color:#0021A5">
              720 SE 2nd Ave  Ste. 575<br />
              PO Box 100233<br />
              Gainesville, FL 32610-0233<br />
              352-733-0064<br />
              352-733-0007 Fax<br />
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><?php print $certificate['dateearned'] ?></td>
          </tr>
          <tr>
            <td align="left" colspan="2" style="padding-top:10px"><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?><br />
            <?php print $certificate['address'] ?>
            </td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px">The University of Florida College of Medicine</td>
          </tr>            
          <tr>
            <td align="center" colspan="2" style="padding-top:10px">certifies that</td>
          </tr>           
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:10px">has participated in the enduring material titled</td>
          </tr>  
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><span style="font-weight: bold"><?php print $certificate['course_title'] ?></span></td>
          </tr>   
          <tr>
            <td align="center" colspan="2" style="padding-top:10px">and is awarded <?php print $certificate['creditearned'].$pratext ?></td>
          </tr>  
          <tr>
            <td align="left" colspan="2" style="padding-top:25px">
            <img src="<?php print $img_url?>ufl_signature.png" style="width: 172px; height: 43px;"></img><br/>
              Marvin A. Dewar, M.D., JD<br />
              Vice President, Affiliations &amp; Medical Affairs<br />
              Associate Dean for Continuing Education<br />
            </td>
          </tr>
          <tr>
            <td align="left" colspan="2" style="padding-top:45px;color:#0021A5;">
                <span style="font-style:italic">The Foundation for The Gator Nation</span><br />
								<span style="font-size: 8pt;">An Equal Opportunity Institution</span>
            </td>
          </tr>
</table>
</div>
<script>print();</script>
</body>
</html>