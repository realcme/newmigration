<?php
$pratext = ' <i>AMA PRA Category 1 Credit(s)&trade;</i>';
$img_url = $cert_img_url ? $cert_img_url : base_path().path_to_theme().'/img/';
$ceuapproved = $certificate['acpe'] / 10.0;
$uan = $certificate['@uan'] ? "Universal Activity Number – ".$certificate['@uan']."<br />" : ""; 
$uantype = $certificate['@uantype'] ? "Activity Type:  ".$certificate['@uantype']."<br />" : "";
$uantext = $certificate['@uantext'] ?  $certificate['@uantext']."<br />": "";

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
<div style="font-size:12.0pt;font-family:Arial, Times, serif;color: #000000;clear: both;width: 600px;margin: auto;padding: 0px;">
<table width="600px" style="border: 4px solid #404040;">
          <tr>
            <td align="center" colspan="2" style="padding-top:15px">STATEMENT OF PARTICIPATION</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><span style='font-style:italic;'>The Postgraduate Institute for Medicine confirms that</span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><span style='font-size:14.0pt;font-weight: bold;'><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></span>
            </td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><span style='font-style:italic;'>has participated in the educational activity titled</span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><span style='font-weight:bold;'><?php print $certificate['course_title'] ?></span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><?php print $certificate['dateearned'] ?>.           
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:15px">
            The Postgraduate Institute for Medicine designates this continuing education activity for <?php print $certificate['acpe']?> contact hour(s) 
            (<?php print $ceuapproved ?> CEUs) of the Accreditation Council for Pharmacy Education.
            <br /><br />
            <?php print $uan?><?php print $uantype?><span style="font-size: 11pt"><?php print $uantext?></span>
            </td>
          </tr>
          <tr>
            <td align="center" style="padding-top:15px; padding-left: 20px"><img src="<?php print $img_url?>pgim_logo.jpg" style="width: 250px; height: 59px;"></img></td>
            <td align="left" style="padding: 15px;font-size: 8pt;">
            <img src="<?php print $img_url ?>acpe_logo.png"></img><br />
The Postgraduate Institute for Medicine is accredited by the Accreditation Council for Pharmacy Education as a provider of continuing pharmacy education.</td>
          </tr>
          <tr>
            <td align="center" style="padding-top:5px"><img src="<?php print $img_url?>pgim_signature.jpg" style="width: 250px; height: 47px;"></img></td>
            <td align="center" style="padding-top:5px">&nbsp;</td>
          </tr>
          <tr>
            <td align="center" style="padding-top:5px; font-size: 8pt;vertical-align: top">
              <div style="text-align: left; padding-left: 20px">
              Trace Hutchison, PharmD<br/>
              Director of Medical Education<br/>
              Postgraduate Institute for Medicine<br/>
              304 Inverness Way South, Suite 100<br/>
              Englewood, CO 80112<br/>
              (303) 799-1930<br/>
              (303) 858-8848 - Fax<br/>
              </div>
            </td>
            <td align="left" style="padding-top:5px; font-size: 8pt;vertical-align: top">
            Date certificate issued: <?php print $certificate['dateearned'] ?> <br/><br/>
            <span style="font-style:italic;">
             This is not an official statement of credit. 
             To receive your official statement of credit you must go to your NABP e-profile to print an individual statement of credit or a transcript. 
             Statements will be available 60 days after completing this continuing education activity.
            </span>
            </td>
          </tr>
</table>
</div>
<script>print();</script>
</body>
</html>