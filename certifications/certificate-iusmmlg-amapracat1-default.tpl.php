<?php
$pratext = ' <i>AMA PRA Category 1 Credit(s)&trade;</i>';
$img_url = $cert_img_url ? $cert_img_url : base_path().path_to_theme().'/img/';
$occupation = ($certificate['profession'] == 'OTH') ? "" : ', '.$certificate['professionlabel'];
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
<table style="border: 1px solid black; border-collapse: separate;" width="620px">
  <tr>
    <td>
      <table width="100%" style="border: 3px solid black; border-collapse: separate;">
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><img src="<?php print $img_url ?>iusm_logo.gif" width="400px" height="159px"></img></td>
          </tr>          

          <tr>
            <td align="center" colspan="2" style="padding-top:10px;font-style: italic;font-weight: bold">The Indiana University School of Medicine <br/>  Division of Continuing Medical Education certifies that:</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><span style='font-size:12.0pt;font-weight: bold;'><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?><?php print $occupation?></span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px">has completed the requirements for enduring materials for the following educational activity:
            </td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><span style='font-weight:bold;'><?php print $certificate['course_title'] ?></span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px">Completed on  <span style='font-weight:bold;'><?php print $certificate['dateearned'] ?></span>           
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:10px">and is designated <?php print $certificate['amapracat1'].$pratext ?>           
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:15px;padding-bottom:20px">The Indiana University School of Medicine is accredited by the Accreditation Council for Continuing Medical Education to provide continuing medical education for physicians.</td>
          </tr>  
          <tr>
            <td align="left" style="padding-left:10pt;font-size:8pt"><img src="<?php print $img_url ?>iusm_signature3.png" ></img><br/>
            <hr style="border: 0;color: #000000;background-color: #000000;height:1px;width: 90%;" />
            <div style="padding-left:10pt;">
            Alexander Djuricich, MD<br/>
            Associate Dean<br/>
            Continuing Medical Education<br/>			     	      			      
            Indiana University School of Medicine<br/>
            </div>
            </td>
            <td align="left" style="font-size:8pt"><img src="<?php print $img_url ?>iusm_signature4.png" ></img><br/>
            <hr style="border: 0;color: #000000;background-color: #000000;height:1px;width: 90%;" />
            <div style="padding-left:10pt;">
            Hassan Danesh, PhD<br/>
            Director<br/>
            Continuing Medical Education<br/>
            Indiana University School of Medicine<br/>
            </div>
            </td>
          </tr>  
          <tr>
            <td align="center" colspan="2" style="padding-top:15px;padding-bottom:10px;font-size:8pt;font-weight:bold">
            Co-Sponsored by Med Learning Group<br/>
            <img src="<?php print $img_url ?>mlg_logo2.jpg" />
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