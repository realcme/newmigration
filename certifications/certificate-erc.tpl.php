<?php
$pratext = ' <i>AMA PRA Category 1 Credit(s)&trade;</i>';
$theme_url = base_path().path_to_theme() ;
$img_url = $cert_img_url ? $cert_img_url : base_path().path_to_theme().'/img/';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language; ?>" xml:lang="<?php print $language; ?>">

<head>
  <title><?php print $head_title; ?></title>
  <style>
        @font-face { font-family: opensans; src: url('<?php print $theme_url?>/css/OpenSans-Regular.ttf'); } 
  </style>
</head>
<body>
<div style="font-size:12.0pt;font-family:opensans, Times New Roman,Times,serif;color: #000000;width: 600px;margin: auto;clear: both;">
<table width="600px">
          <tr>
            <td align="center" colspan="2">
              <table style="width: 100%;">
                <tr>
                  	<td align="center">
                  		<img style="width:100%" src="<?php print $img_url?>erc_logo.png"></img>
                  		</td>
                 </tr>
                  <tr>
                  <td align="center" style="padding-top:35px"><span style='font-size:18.0pt; font-weight: bold'>CERTIFICATE OF COMPLETION</span></td>
                    </tr>
                    <tr>
                    <td align="center" style="padding-top:25px"><span style='font-size:14.0pt; font-weight: normal'><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></span></td>
                  </tr>
                </table>
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:35px; font-weight: bolder; font-size: 16.0pt;">Activity</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px; font-weight: bold; font-size: 18.0pt;">ERC-242 Investigator Video Training &amp; Qualification <br />for Diagnosis of HSDD/FSAD for Subject Enrollment</td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:5px; font-size: 10.0pt;">Training prepared by Endoceutics Clinical Team in collaboration with Sheryl Kingsberg, Ph.D.</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:35px"><span style='font-weight:bolder'>Date</span></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><?php print $certificate['dateearned'] ?></td>
          </tr>  

  
          <tr>
            <td align="left" colspan="2" style="padding-top:85px;padding-left:33%;">
				<img style="width:67%; height:46%; max-width:235px; max-height:35px;" src="<?php print $img_url?>erc_sig.png"></img><br />
				</td></tr>
				<tr><td align="left" colspan="2" style="padding-left:33%;">
            <span style="font-weight: bold;">Sheryl A. Kingsberg, Ph.D.</span> <br />
            ERC-242 Study Co-Principal Investigator <br />
			</td>
          </tr>
          <tr>
          	<td align="left" colspan="2" style="padding-top:0px;padding-left:33%;">
          		University Hospitals Cleveland <br/>
				Case Western Reserve University School of Medicine
          	</td>
          </tr>
        </table>
</div>
<script>print();</script>
</body>
</html>