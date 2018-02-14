<?php
  global $user;
  $img_path = base_path() . path_to_subtheme();
  $firstname = $content['firstname'];
  $lastname = $content['lastname'];
  $fullname = $content['fullname'];
  $address = $content['address'];
  $profession = $content['profession'];
  $title = $content['course_title'];
  $amapracat1 = $content['amapracat1'];
  $begin_date = $content['begin_date']; // date course was released
  $expiration_date = $content['expiration_date']; // date credit expires
  $pratext = ' <i>AMA PRA Category 1 Credit(s)&trade;</i>'; // Some people want the (s), some don't...
  if (floatval($amapracat1) > 1) {
    $amapracat1_str = $amapracat1.' <i>AMA PRA Category 1 Credits&trade;</i>';
  } else {
    $amapracat1_str = $amapracat1.' <i>AMA PRA Category 1 Credit&trade;</i>';
  }
  $date = $content['dateearned'];
  $refid = $content['refid'];
  $img_url = base_path().path_to_subtheme().'/images/certificate/';
  
  $state = $content['state'];
  $licno = $content['state_license_number'];  
  $claimedtype = $content['claimedtype'];
  $claimedhours = $content['claimedhours'];
  $isclaimed = !empty($claimedtype);

  $today = strftime("%d-%b-%y", time());
  
  // Check whether NP should be given the PHY certificate or the Nurse certificate 
  $np_as_nur = $profession == 'NP' && ($claimedtype != 'amapracat1');
  $np_as_phy = $profession == 'NP' && ($claimedtype == 'amapracat1');
  
  
  // HACK for AKH-LIPID
  $accreditor = $content['accreditor'];  
  
  if ($accreditor == 'lipid-akh') {
    if ($profession == 'NUR' || $np_as_nur || $profession == 'PHA' || $profession == 'DT') {
      $accreditor = 'akh';
    } else {
      $accreditor = 'lipid';
    }
  } else if ($accreditor == 'naccme-ucc') {
    $cpme = $content['cpme'];
    if ($profession == 'POD' && floatval($cpme) > 0) {
      $accreditor = 'naccme';
    } else {
      $accreditor = 'ucc';
    }
  }
?>  
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language; ?>" xml:lang="<?php print $language; ?>">

<head>
  <title><?php print $head_title; ?></title>
  <style>
    div.printclass {
      font-size:12.0pt;
      font-family:"Times New Roman", Times, serif;
    }
    div.smdcprintclass {
      font-size:12.0pt;
      font-family:Arial, Times, serif;
      color: #000000;
      width: 626px;
      clear: both;
    }
    div.smdcprinttopleft {
      width: 197px;
      height: 64px;
      float: left;
    }
    div.smdcprinttopright {
      width: 249px;
      height: 54px;
      float: right;
    }
    div.jhuprintclass {
      font-size:10.0pt;
      font-family:Arial, Times, serif;
      color: #000000;
      clear: both;
      margin: 0px;
      padding: 0px;
    }
    div.joslinprintclass {
      font-size:10.0pt;
      font-family:Arial, Times, serif;
      color: #000000;
      clear: both;
      margin: 0px;
      padding: 0px;
    }
    div.joslinprinttopleft {
      float: left;
      width: 250px; 
      height: 60px;
      margin: 0px 0px 0px 10px ;
      padding: 0px;
    }
    div.dannemillerprinttopleft {
      float: left;
      width: 410px; 
      height: 210px;
      margin: 0px 0px 0px 10px ;
      padding: 10px 0px 0px 0px;
      font-size: 14.0pt;
      font-weight: bold;
      font-family: Times, Arial, serif;
      color: #AAAAAA;
    }
    div.dannemillerprinttopright {
      float: left;
      width: 174px; 
      height: 184px;
      margin: 0px 0px 0px 10px ;
      padding: 0px;
    }
    div.dannemillerprintclass {
      font-size:10.0pt;
      font-family:Arial, Times, serif;
      color: #000000;
      width: 626px;
      clear: both;
    }
    div.dannemillerprintclass table {
      border: 1px solid #AAAAAA;
    }
    div.dannemillerprintclass td {
      border: 1px solid #AAAAAA;
      padding-right: 3px;
      padding-left: 3px;
    }
    div.dannemillerprintfooter {
      float: left;
      width: 626px; 
      margin: 0px 0px 0px 10px ;
      padding: 10px 0px 0px 0px;
      font-size: 10.0pt;
      font-family: Times, Arial, serif;
      color: #AAAAAA;
      text-align: center;
    }
    .dannemillercert {
      font-size: 24.0pt;
    }
    div.arcmesaprintclass {
      font-size:12.0pt;
      font-family:Arial, Times, serif;
      color: #000000;
      width: 600;
      clear: both;
    }
    div.arcmesaprinttop {
      width: 575px;
      height: 70px;
      margin: auto;
    }
    div.lipidprintclass {
      font-size:12.0pt;
      font-family:"Times New Roman", Times, serif;
      clear: both;
      margin: 0px;
      padding: 0px;      
    }
    div.accprintclass {
      font-size:12.0pt;
      font-family:"Times New Roman", Times, serif;
      color: #000000;
      width: 600;
      clear: both;
    }
    div.accprinttop {
      width: 575px;
      height: 70px;
      margin: auto;
    }
    div.dimeprintclass {
      font-size:12.0pt;
      font-family:Arial, Times, serif;
      color: #000000;
      width: 600;
      clear: both;
    }
    div.dimeprinttop {
      width: 600px;
      height: 146px;
      margin: auto;
    }
    div.akhprintclass {
      font-size:10.0pt;
      font-family:Arial, Times, serif;
    }
    .akhleft {
      width: 50%; 
      vertical-align: top; 
      text-align: left; 
      padding-bottom: 5px;
    }
    .akhright {
      width: 50%; 
      vertical-align: top; 
      text-align: left;
      padding-left: 5px;
    }
    div.cisprintclass {
      font-size:12.0pt;
      font-family:Arial, Times, serif;
      color: #000000;
      clear: both;
      margin: 0px;
      padding: 0px;
    }
    div.cisprinttopleft {
      float: left;
      width: 250px; 
      height: 60px;
      margin: 0px 0px 0px 10px ;
      padding: 0px;
    }
    div.cisprinttopright {
      float: right;
      width: 250px; 
      height: 60px;
      margin: 0px 0px 0px 10px ;
      padding: 0px;
    }
    div.eosprintclass {
      font-size:12.0pt;
      font-family:Arial, Times, serif;
      color: #000000;
      width: 600;
      clear: both;
    }
    div.eosprinttop {
      width: 593px; 
      height: 129px;
      margin: auto;
    }
    div.uccprintclass {
      font-size:12.0pt;
      font-family:Arial, Times, serif;
      color: #000000;
      width: 626px;
      clear: both;
    }
    div.naccmeprintclass {
      font-size:10.0pt;
      font-family:Arial, Times, serif;
      color: #000000;
      width: 626px;
      clear: both;
    } 
    div.purdueprintclass {
      font-size:10.0pt;
      font-family:Arial, Times, serif;
      color: #000000;
      width: 626px;
      clear: both;
    } 
    div.cedarsinaiprintclass {
      font-size:10.0pt;
      font-family:Arial, Times, serif;
      color: #000000;
      clear: both;
      margin: 0px;
      padding: 0px;
    }
    div.defaultprintclass {
      font-size:10.0pt;
      font-family:Arial, Times, serif;
      color: #000000;
      clear: both;
      margin: 0px;
      padding: 0px;
    }
    div.defaultprinttopleft {
      float: left;
      width: 250px; 
      height: 60px;
      margin: 0px 0px 0px 10px ;
      padding: 0px;
    }
    div.einsteinprintclass {
      font-size:10.0pt;
      font-family:Arial, Times, serif;
      color: #000000;
      clear: both;
      margin: 0px;
      padding: 0px;
    }
    div.npwhprintclass {
      font-size:11.0pt;
      font-family:Arial, Times, serif;
      color: #000000;
      width: 600;
      clear: both;
    }
    div.npwhprinttop {
      margin: auto;
    }    
    div.arhpprintclass {
      font-size:11.0pt;
      font-family:Arial, Times, serif;
      color: #000000;
      width: 600;
      clear: both;
    }
    div.cmeoutfittersprintclass {
      font-size:10.0pt;
      font-family:Arial, Times, serif;
      color: #000000;
      clear: both;
      margin: 0px;
      padding: 0px;
    }
    div.bcmprintclass {
      font-size:10.0pt;
      font-family:Arial, Times, serif;
      color: #000000;
      width: 600;
      clear: both;
    }
    div.bcmprinttop {
      margin: auto;
    }
  </style>
</head>
<body>
<center>
<?php if ($accreditor == 'smdc') { ?>
<div class="smdcprinttopleft">
  <img src="<?php print $img_url?>smdc_logo.png" style="width: 197px; height: 64px;"></img>
</div>
<div class="smdcprinttopright">
  <img src="<?php print $img_url?>smdc_address.png" style="width: 249px; height: 54px;"></img>
</div>
<div class="smdcprintclass">
<table width="600px">
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><span style='font-size:26.0pt;'>CME Credit Certificate </span></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><span style='font-size:16.0pt;'>SMDC Health System</span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><span style='font-size:14.0pt;'>certifies that</span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><strong><span style='font-size:16.0pt'><?php print $firstname ?> <?php print $lastname ?></span></strong></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><span style='font-size:14.0pt;'>has participated in the educational activity titled</span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><span style='font-size:14.0pt;'><strong><?php print $title ?></strong></span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><span style='font-size:12.0pt;'>This activity was designated for <?php print $amapracat1_str ?>           
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:0px;padding-bottom:30px">&nbsp;</td>
          </tr>         
          <tr>
            <td align="left" width="50%" style="padding-top:20px;padding-right:30px;padding-bottom:30px;margin-bottom:0px;"><span style='font-size:11.0pt;border-top: 2px solid;'>Participant's signature</span>
            </td>
            <td align="right" valign="bottom" width="50%" style="padding-left:20px;padding-bottom:20px;margin-bottom:0px">
              <img src="<?php print $img_url?>smdc_signature.png"></img><br />
              <div style="position:relative;bottom:10px">
              <b><span style='font-size:11.0pt;padding-bottom:0px;font-weight:bold;'>Thomas Elliott, MD, FACP</span></b><br />
              <b><span style='font-size:11.0pt;padding-top:0px'>Medical Director, Division of</span></b><br />
              <b><span style='font-size:11.0pt;padding-top:0px'>Education and Research</span></b><br />
              </div>
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2">
              <div style="position:relative;bottom:2px">
                <b><span style='letter-spacing:2.0pt'>Certificate ID: <?php print $refid ?></span></b><br />
                <b><span style='letter-spacing:2.0pt'>Issue date: </span></b><strong><span style='font-size:14.0pt'><?php print $date ?></span></strong>
               </div>
            </td>
          </tr>          
</table>
</div>

<?php } else if ($accreditor == 'arcmesa') { ?>
<div class="arcmesaprinttop">
  <img src="<?php print $img_url?>arcmesa_address_logo.jpg" style="width: 575px; height: 70px;"></img>
</div>
<div class="arcmesaprintclass">
<table width="600px">
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><span style='font-size:22.0pt; color: #096D61; font-weight: bold'>Certificate of Completion</span></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><span style='font-size:12.0pt;'>This certifies that</span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><strong><span style='font-size:14.0pt'><?php print $firstname ?> <?php print $lastname ?></span></strong></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><span style='font-size:12.0pt;'>has participated in the CME Program</span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><span style='font-size:12.0pt;'><strong><?php print $title ?></strong></span></td>
          </tr>
          <tr>
            <td align="left" colspan="2" style="padding-top:20px"><span style='font-size:12.0pt;'><b>Date completed:</b> <?php print $date ?></span></td>
          </tr>  
<?php if ($profession == 'PHY') {
        $text1 = "<b>Profession:</b> Physician";
        $text2 = "<b>Credit Designation:</b> ";
      } else { 
        $text1 = "<u><b>Continuing Medical Education Accreditation</b></u>";
        $text2 = "";
      } ?>                  
          <tr>
            <td align="left" colspan="2" style="padding-top:10px"><span style='font-size:12.0pt;'>
              <?php print $text1 ?><br />
              ArcMesa Educators is accredited by the Accreditation Council for Continuing Medical Education to provide continuing medical education for physicians.            </span></td>
          </tr>                 
          <tr>
            <td align="left" colspan="2" style="padding-top:10px"><span style='font-size:12.0pt;'>
              <?php print $text2 ?>ArcMesa designates this educational activity for a maximum of <?php print $amapracat1_str?>. Physicians should only claim credit commensurate with the extent of their participation in the activity.              
            </span></td>
          </tr>  
<?php if ($profession == 'PHY') { ?>
          <tr>
            <td align="left" colspan="2" style="padding-top:10px"><span style='font-size:12.0pt;'>
              <table style="border: none">
                <tr><td style="padding-right: 8px; text-align: left;"><b>License State(s)</b></td><td style="padding-right: 8px; text-align: left;"><b>License Number(s)</b></td><td style="padding-right: 8px; text-align: left;"><b>Approval No.</b></td><td style="padding-right: 8px; text-align: left;"><b>Credit(s}</b></td></tr>
                <tr><td style="padding-right: 8px; text-align: left;"><?php print $state?></td><td style="padding-right: 8px; text-align: left;"><?php print $licno?></td><td style="padding-right: 8px; text-align: left;">NA</td><td style="padding-right: 8px; text-align: left;"><?php print $amapracat1?></td></tr>
              </table>               
            </span></td>
          </tr>  
<?php } ?>                  
          <tr>
            <td align="center" colspan="2" style="padding-top:0px;padding-bottom:10px">&nbsp;</td>
          </tr>         
          <tr>
            <td align="left" valign="bottom" colspan="2" style="padding-left:20px;padding-bottom:0px;margin-bottom:0px">
              <div style="float: left">
              <span style='font-size:11.0pt;padding-top:0px'>Verified by:</span><br />
              <b><span style='font-size:11.0pt;padding-bottom:0px;font-weight:bold;'>Michael L. Santiago, MD</span></b><br />
              <span style='font-size:11.0pt;padding-top:0px'>Associate Medical Director</span><br />
              <span style='font-size:11.0pt;padding-top:0px'>ArcMesa Educators, LLC</span><br />
              </div>
              <div style="float: left"><img src="<?php print $img_url?>arcmesa_signature.jpg"></img></div><br />
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2">
              <div style="position:relative;bottom:2px">
                <b><span style='font-size:10.0pt;'>Certificate ID: <?php print $refid ?></span></b><br />
               </div>
            </td>
          </tr>          
</table>
</div>
<?php } else if ($accreditor == 'acc') { 
$acc_title = '';
$acc_desc = '';
$acc_cert = '';
$acc_summary = '';
$acc_design = '';
if ($profession == 'PHY' || $np_as_phy) {
  $claim = $claimedhours > 0 ?  $claimedhours : $amapracat1;
  $acc_title = 'Continuing Medical Education for Enduring Materials';
  $acc_desc = 'The American College of Cardiology Foundation (ACCF) is accredited by the Accreditation Council for Continuing Medical Education to provide continuing medical education for physicians. <br /> ';
  $acc_desc .= 'The ACCF takes responsibility for the content, quality, and scientific integrity of this CME activity.';
  $acc_cert = "is awarded $amapracat1 $pratext on $date <br />for participation in the following activity(ies).";
  $acc_summary = "Hours claimed: $claim. Maximum possible: $amapracat1.";
  $acc_design = "The ACCF designates this/these educational activity/activities for a maximum of <br /> <b>$amapracat1</b> $pratext.<br /> Physicians should only claim credit commensurate with the extent of their participation in the activity.";
} else if ($profession == 'NUR' || $np_as_nur) {
  $ancc = $content['ancc'];
  $claim = $claimedhours > 0 ?  $claimedhours : $ancc;
  $acc_title = 'CE Credit Statement';
  $acc_desc = 'The American College of Cardiology Foundation (ACCF) is accredited as a provider of continuing nursing education by the American Nurses Credentialing Center\'s Commission on Accreditation.';
  $acc_cert = "is awarded <b>$ancc</b> contact hours on $date for participation in the following activity(ies).";
  $acc_summary = "Credits Earned: up to $ancc.<br /> Credits Claimed: $claim.";
  $acc_design = '';
} else {
  $ancc = $content['ancc'];
  $claim = $claimedhours > 0 ?  $claimedhours : $ancc;
  $acc_title = 'Certificate of Participation';
  $acc_desc = 'The American College of Cardiology Foundation (ACCF) is accredited by the Accreditation Council for Continuing Medical Education to provide continuing medical education for physicians.';
  $acc_cert = 'has participated in the educational activity(ies) listed below.';
  $acc_summary = "Hours claimed: $claim. Maximum possible: $ancc.";
  $acc_design = "The ACCF designates this activity for a maximum of <b>$ancc</b> ANCC continuing education hours. Attendees should only claim credits commensurate with the extent of their participation in the activity.";  
}
?>
<div class="accprintclass">
<table width="600px">
          <tr>
            <td align="center" colspan="2">
              <table>
                <tr>
                  <td rowspan="2"><img src="<?php print $img_url?>acc_logo.png"></img></td>
                  <td align="center" style="padding-top:15px"><span style='font-size:18.0pt; font-weight: bold'>American College of Cardiology Foundation</span></td>
                 </tr>
                  <tr>
                    <td align="center" style="padding-top:5px"><span style='font-size:14.0pt; font-weight: bold'><?php print $acc_title;?></span></td>
                  </tr>
                </table>
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><span style='font-size:12.0pt;'><?php print $acc_desc;?></span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><span style='font-size:12.0pt;'>The American College of Cardiology Foundation (ACCF) certifies that  </span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><strong><span style='font-size:12.0pt'><?php print $firstname ?> <?php print $lastname ?></span></strong></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><span style='font-size:12.0pt;'><?php print $acc_cert;?></span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><span style='font-size:12.0pt;'><?php print $acc_design;?></span></td>
          </tr>  
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><span style='font-size:12.0pt;'><?php print $title ?></span></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><span style='font-size:12.0pt;'>Date of Participation: <?php print $date ?> <br /> <?php print $acc_summary?></span></td>
          </tr>  
          <tr>
            <td align="center" colspan="2" style="padding-top:25px"><span style='font-size:12.0pt;'>Date Certificate Issued: <?php print $date ?></span></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:0px;padding-top:10px">American College of Cardiology Foundation <br />
2400 N Street, NW <br />
Washington, DC 20037 <br />
800-253-4636, ext. 5603</td>
          </tr>
        </table>
</div>

<?php } else if ($accreditor == 'jhu') { ?>
<div class="jhuprintclass">
  <div style="z-index: -1; margin: auto; padding-top:170px"><img src="<?php print $img_url?>jhu_background.png"></img></div>
  <div style="position: absolute; top: 0px; left:0px; padding: 10px">
    <table style="width: 100%;">
            <tr>
              <td align="left" colspan="2" style="padding-top:5px"><img src="<?php print $img_url?>jhu_logo.png" style="width: 198px; height: 209px;"></img></td>
            </tr>
            <tr>
              <td align="center" colspan="2" style="padding-top:5px"><span style='font-size:14.0pt;'>The Johns Hopkins University School of Medicine</span></td>
            </tr>          
            <tr>
              <td align="center" colspan="2" style="padding-top:10px"><span style='font-size:12.0pt;'>certifies that</span></td>
            </tr>          
            <tr>
              <td align="center" colspan="2" style="padding-top:15px"><strong><span style='font-size:14.0pt'><?php print $firstname ?> <?php print $lastname ?></span></strong></td>
            </tr>          
            <tr>
              <td align="center" colspan="2" style="padding-top:10px"><span style='font-size:12.0pt;'>has participated in the educational activity titled</span></td>
            </tr>          
            <tr>
              <td align="center" colspan="2" style="padding-top:10px"><span style='font-size:12.0pt;'><strong><?php print $title ?></strong></span></td>
            </tr>          
            <tr>
              <td align="center" colspan="2" style="padding-top:15px"><span style='font-size:12.0pt;'>on  <?php print $date ?> and is awarded <?php print $amapracat1_str ?>           
              </td>
            </tr>
            <tr>
              <td align="center" colspan="2" style="padding-top:0px;padding-bottom:0px">&nbsp;</td>
            </tr> 
            <tr>
              <td align="left" width="50%" style="padding-right:30px;padding-bottom:0px;margin-bottom:0px">
                <b>Release Date: <?php print $begin_date ?><br />
                Expiration Date:  <?php print $expiration_date ?><br />
                Certificate ID: <?php print $refid ?></b>
              </td>
              <td align="right" valign="bottom" width="50%" style="padding-left:20px;padding-bottom:0px;margin-bottom:0px">
                <img src="<?php print $img_url?>jhu_signature.png"></img><br />
                <div style="position:relative;bottom:20px">
                <b><span style="color: #336699">Todd Dorman, MD, FCCM</span></b><br />
                <b><span style="color: #336699"><small>Associate Dean and Director of</small></span></b><br />
                <b><span style="color: #336699"><small>Continuing Medical Education</small></span></b><br />
                </div>
              </td>
            </tr>
            <tr>
              <td align="center" colspan="2">
                <div class="jhu" style="position:relative;bottom:5px">
                  <br />
                  <span style="color: #336699"><b><small>The Johns Hopkins University School of Medicine is accredited by the Accreditation Council for Continuing Medical Education to provide continuing medical education for physicians.</small></b></span>
                 </div>
              </td>
            </tr>          
    </table>
  </div>
</div>

<?php } else if ($accreditor == 'joslin') { ?>
<div class="joslinprintclass">
<table width="600px" style="border: 4px solid #404040;">
          <tr>
            <td align="center" colspan="2">
              <div class="joslinprinttopleft">
                 <img src="<?php print $img_url?>joslin_logo.png" style="width: 331px; height: 48px;"></img>
              </div>
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2">
              <div class="joslin" style="position:relative;bottom:5px">
                <br />
                <span><b><small>Joslin Diabetes Center, Boston, is accredited by the Accreditation Council for Continuing Medical Education to provide continuing medical education for physicians.</small></b></span>
               </div>
            </td>
          </tr>  
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><span style='font-size:14.0pt;'>Joslin Diabetes Center certifies that</span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><strong><span style='font-size:14.0pt'><?php print $firstname ?> <?php print $lastname ?></span></strong></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><span style='font-size:12.0pt;'><em>has participated in the educational activity titled</em></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><span style='font-size:12.0pt;'><strong><?php print $title ?></strong></span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><span style='font-size:12.0pt;'>on  <?php print $date ?>.           
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><span style='font-size:12.0pt;'>This activity was designated for <?php print $amapracat1_str ?>           
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:0px;padding-bottom:0px">&nbsp;</td>
          </tr> 
          <tr>
            <td align="center" colspan="2" valign="bottom" style="padding-left:20px;padding-bottom:0px;margin-bottom:0px">
              <img src="<?php print $img_url?>joslin_signature.gif"></img><br />
              <div style="position:relative;bottom:0px">
              <b><span>Richard S. Beaser, MD</span></b><br />
              <b><span><small>Medical Executive Director</small></span></b><br />
              <b><span><small>Professional Education</small></span></b><br />
              <b><span><small>Joslin Diabetes Center</small></span></b><br />
               </div>
            </td>
          </tr> 
          <tr>
            <td align="left" colspan="2" style="padding-right:30px;padding-top:20px;padding-bottom:10px;margin-bottom:0px">
              <b>Certificate ID: <?php print $refid ?></b>
            </td>      
</table>
</div>

<?php } else if ($accreditor == 'dannemiller') { 
$text = ''; 
if ($profession == 'PHY' || $np_as_phy) {
  $text = "The Dannemiller Memorial Educational Foundation certifies that the above individual has participated in the educational activity titled <strong>$title</strong> on $date and is awarded $amapracat1_str.";
} else if ($profession == 'NUR' || $np_as_nur) {
  $aanp = $content['aanp'];
  if (floatval($aanp) > 0) {
    $pharmacology = $content['pharmacology'];
    if ($pharmacology > 0) {
      $text = "The Dannemiller Memorial Educational Foundation certifies that the above individual has participated in the educational activity titled <strong>$title</strong> on $date.";
      $text .= "<br /><br />";      
      $text .= "This program has been approved for $aanp contact hours of continuing education (which includes $pharmacology hours of pharmacology) by the American Academy of Nurse Practitioners."; 
    } else {
      $text = "The Dannemiller Memorial Educational Foundation certifies that the above individual has participated in the educational activity titled <strong>$title</strong> on $date.";
      $text .= "<br /><br />";      
      $text .= "This program has been approved for $aanp contact hours of continuing education by the American Academy of Nurse Practitioners."; 
    }
  }
}
if (empty($text)) {
  // use default
  $text = "The Dannemiller Memorial Educational Foundation certifies that the above individual has participated in the educational activity titled <strong>$title</strong> on $date. This activity was designated for $amapracat1_str.";
}
?>
<div class="dannemillerprinttopleft">
Dannemiller Memorial Educational Foundation <br /><br />
<span class="dannemillercert">Certificate</span><br />
</div>
<div class="dannemillerprinttopright">
   <img src="<?php print $img_url?>dannemiller_logo.png" style="width: 198px; height: 209px;"></img>
</div>
<div class="dannemillerprintclass">
<table width="600px">
          <tr>
            <td align="left" style="padding-top:5px"><?php print $fullname ?><br /> <?php print $address ?></td>
          </tr>          
          <tr>
            <td align="center" style="padding-top:30px"></td>
          </tr>          
          <tr>
            <td align="left" style="padding-top:10px;padding-bottom:20px"><?php print $text ?>
            <br /><br />Certificate ID: <?php print $refid ?>
            </td>
          </tr>          
          <tr>
            <td align="left" valign="bottom" width="50%" style="padding-left:20px;padding-bottom:0px;margin-bottom:0px">
              <img src="<?php print $img_url?>dannemiller_signature.png"></img><br />
              <div style="position:relative;bottom:10px">
              <span>John C. Drummond, M.D., FRCP(C)</span><br />
              <span>Chairman, Education Committee </span><br />
              </div>
            </td>
          </tr>          
</table>
</div>
<div class="dannemillerprintfooter">
  <span>5711 Northwest Parkway - Suite 100 - San Antonio, Texas 78249-3360 -</span><br /> 
  <span>210-641-8311 - 1-800-328-2308 - Fax 210-697-9318</span>
</div>

<?php } else if ($accreditor == 'lipid') { ?>
<?php if ($profession == 'PHY') {
        $text1 = "online <br/> and is awarded $amapracat1_str.";
      } else { 
        $text1 = "online. <br/> This activity was designated for $amapracat1_str.";
      } 
?>                  

<div class="lipidprintclass">
  <div style="z-index: -1; position: absolute; top: 0px; left:10px; width: 604px;height: 652px;"><img src="<?php print $img_url?>lipid_bg.jpg"></img></div>
  <div style="position: absolute; top: 0px; left:30px; padding: 10px">

  <table style="border: none; width: 550px">
    <tr>
      <td align="center" colspan="2" style="padding-top:25px">
        <img src="<?php print $img_url?>lipid_logo.jpg"></img><br />
        <b><span style='font-size:16.0pt;'>NATIONAL LIPID ASSOCIATION</span></b></td>
    </tr>
    <tr>
      <td align="center" colspan="2" style="padding-top:10px">certifies that</td>
    </tr>          
    <tr>
      <td align="center" colspan="2" style="padding-top:6px"><strong><span style='font-size:14.0pt'><?php print $firstname ?> <?php print $lastname ?></span></strong></td>
    </tr>          
    <tr>
      <td align="center" colspan="2" style="padding-top:10px"><span style='font-size:12.0pt;'>has participated in the educational activity titled</span></td>
    </tr>          
    <tr>
      <td align="center" colspan="2" style="padding-top:10px"><span style='font-size:12.0pt;'><strong><?php print $title ?></strong></span></td>
    </tr>          
    <tr>
      <td align="center" colspan="2" style="padding-top:15px"><span style='font-size:12.0pt;'><?php print $text1 ?>  </span>          
      </td>
    </tr>          
    <tr>
      <td align="left" valign="bottom" width="50%" style="padding-left:20px;padding-bottom:0px;margin-bottom:0px">
        <img src="<?php print $img_url?>lipid_signature_1.jpg"></img><br />
        <div style="position:relative;bottom:10px">
          Peter H. Jones, MD<br />
          <em>Medical Director</em><br />
          National Lipid Association<br />
        </div>
      </td>
      <td align="left" valign="bottom" width="50%" style="padding-left:20px;padding-bottom:0px;margin-bottom:0px">
        <img src="<?php print $img_url?>lipid_signature_2.jpg"></img><br />
        <div style="position:relative;bottom:10px">
          Nicola A. Sirdevan, MPA<br />
          <em>Professional Education Director</em><br />
          National Lipid Association<br />
        </div>
      </td>
    </tr>
    <tr>
      <td align="left" colspan="2" style="padding-top:30px">
        <div style="position:relative;bottom:20px">
          <span>Issue date: </span><?php print $date ?><br />
          <span>Certificate ID: <?php print $refid ?></span>
         </div>
      </td>
    </tr>  
    <tr>
      <td align="center" colspan="2" style="padding-top:10px; color: #AAAAAA;" >
        <small>
        National Lipid Association &nbsp;&nbsp; 6816 Southpoint Parkway, Suite 1000 &nbsp;&nbsp;  Jacksonville, FL 32216<br />
        &nbsp;&nbsp; (904) 998-0854 &nbsp;&nbsp; www.lipid.org
        </small>
      </td>
    </tr>          
  </table>  
</div>
</div>
<?php } else if ($accreditor == 'cedarsinai') {?>
<?php 
  if ($profession == 'PHY') {
        $text1 = "Cedars-Sinai Medical Center certifies that $firstname $lastname, M.D. has participated in the educational activity titled";
        $text2 = "on $date and is awarded $amapracat1_str.";
  } else { 
        $text1 = "Cedars-Sinai Medical Center certifies that $firstname $lastname has participated in the educational activity titled";
        $text2 = "on $date.<br/><br/> This activity was designated for $amapracat1_str.";
  }
  if (substr(strtolower($title), 0, 6) == 'louise') {
    if (strpos(strtolower($title), 'visit 1') > 0) {
      $number = '92011469-A';
    } else if (strpos(strtolower($title), 'visit 2') > 0) {
      $number = '92011469-B';      
    } else if (strpos(strtolower($title), 'visit 3') > 0) {
      $number = '92011469-C';      
    }
  } else if (substr(strtolower($title), 0, 10) == 'traversing') {
    $number = '92431470';
  }
?>      
<div class="cedarsinaiprintclass">
    <table style="border: 3px solid black; width:100%">
      <tr><td>
        <table style="border: 1px solid black;">
            <tr>
              <td align="center" colspan="2" style="padding-top:25px"><img src="<?php print $img_url?>cedarsinai_logo.png"></img></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><b><span style="font-size:18.0pt;font-family:'times new roman'"><em>Certificate of Participation</em></span></b></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:25px"><span style="font-size:12.0pt;font-weight:bold;"><?php print $text1 ?></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><span style="font-size:14.0pt;font-weight:bold"><?php print $title ?></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><span style="font-size:12.0pt;font-weight:bold;"><?php print $text2 ?></td>
          </tr>          
          <tr>
            <td align="left" colspan="2" style="padding:30px"><span style="font-size:12.0pt;">Course Number: <?php print $number ?></span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" valign="bottom" style="padding-left:20px;padding-bottom:10px;margin-bottom:0px">
              <img src="<?php print $img_url?>cedarsinai_signature.png"></img><br />
              <div style="position:relative;bottom:20px">
              Ellen Wilson Green, MS<br />
              Director, Medical Education<br />
              </div>
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding:10px">Cedars-Sinai Medical Center is accredited by the Accreditation Council for <br/> Continuing Medical Education to provide continuing medical education for physicians.</td>
          </tr>          
        </table>  
      </td></tr>  
    </table> 
</div>
<?php } else if ($accreditor == 'cme2') {?>
<div class="printclass">
<table width="600px" style="border: 2px solid #993300;">
  <tr><td>
    <table style="border: 5px solid #993300; width:100%">
      <tr><td>
        <table style="border: 2px solid #993300;">
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><b><span style='font-size:16.0pt;letter-spacing:4.0pt'>CONTINUING MEDICAL EDUCATION</span></b></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><b><span style='font-size:16.0pt;letter-spacing:2.0pt'>CERTIFICATE</span></b></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><b><span style='font-size:16.0pt;letter-spacing:2.0pt'>&nbsp;</span></b></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><b><span style='font-size:12.0pt;letter-spacing:4.0pt'>cme<sup>2</sup>certifies that</span></b></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:6px"><strong><span style='font-size:16.0pt'><?php print $firstname ?> <?php print $lastname ?></span></strong></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><span style='font-size:12.0pt;letter-spacing:2.0pt'>Has participated in the educational activity titled</span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><span style='font-size:12.0pt;letter-spacing:2.0pt'><strong><?php print $title ?></strong></span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><span style='font-size:12.0pt;letter-spacing:1.0pt'>This activity was designated for <?php print $amapracat1_str ?>            
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><b><span style='font-size:16.0pt;letter-spacing:2.0pt'>&nbsp;</span></b></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding: 10px 40px 0px 30px"><span style='font-size:12.0pt;letter-spacing:4.0pt'><span style='font-size:10.0pt;letter-spacing:1.0pt'>cme<sup>2</sup> is accredited by the Accreditation Council for Continuing Medical Education to provide continuing medical education for physicians.</span></span></td>
          </tr>          
          <tr>
            <td align="left" valign="bottom" width="50%" style="padding-left:20px;padding-bottom:0px;margin-bottom:0px">
              <img src="<?php print $img_url?>cme2_signature.jpg"></img><br />
              <div style="position:relative;bottom:40px">
              <b><span style='font-size:12.0pt;letter-spacing:3.0pt;padding-bottom:0px'>Jane Perrotta</span></b><br />
              <b><span style='font-size:12.0pt;letter-spacing:3.0pt;padding-top:0px'>Clinical Director, cme<sup>2</sup></span></b><br />
              <b><span style='letter-spacing:3.0pt'><?php print $date ?></span></b>
              </div>
            </td>
            <td align="right" width="50%" style="padding-right:30px;padding-bottom:0px;margin-bottom:0px"><img src="<?php print $img_url?>cme2_logo_2.png"></img>
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2">
              <div style="position:relative;bottom:20px">
                <b><span style='letter-spacing:2.0pt'>Certificate ID: <?php print $refid ?></span></b><br />
                <b><span style='letter-spacing:2.0pt'>Issue date: </span></b><strong><span style='font-size:14.0pt'><?php print $date ?></span></strong>
               </div>
            </td>
          </tr>          
        </table>  
      </td></tr>  
    </table>  
  </td></tr>  
</table>
</div>
<?php } else if ($accreditor == 'dime') { ?>
<?php 
      $aanp = $content['aanp'];
      $ph = $content['pharmacology'];
      $aapa = $content['aapa'];
      $ancc = $content['ancc'];
      $certificate_type = '';
      if ($isclaimed) {
        $val = $claimedhours;
        if ($profession == 'PHY' && $claimedtype == 'amapracat1') {
          $certificate_type = 'cert_amapracat1';
        } else if ($np_as_nur && $claimedtype == 'aanp') {
          $certificate_type = 'cert_aanp';
        } else if ($profession == 'PA' && $claimedtype == 'aapa') {
          $certificate_type = 'cert_aapa';
        } else if ($claimedtype == 'ancc') {
          $certificate_type = 'cert_ancc';
        }
      } else {
        if ($profession == 'PHY' && floatval($amapracat1) > 0) {
          $certificate_type = 'cert_amapracat1';
          $val = $amapracat1;
        } else if ($np_as_nur && floatval($aanp) > 0) {
          $certificate_type = 'cert_aanp';
          $val = $aanp;
        } else if (($profession == 'NUR' ||$profession == 'NP' )  && floatval($ancc) > 0) {
          $certificate_type = 'cert_ancc';
          $val = $ancc;
        } else if ($profession == 'PA' && floatval($aapa) > 0) {
          $certificate_type = 'cert_aapa';
          $val = $aapa;
        }
      }
  
      $switch = false;
      $text4 = '';
      if ($certificate_type == 'cert_amapracat1') {
        $val = $isclaimed ? $claimedhours : $amapracat1;
        $text0 = "The Discovery Institute of Medical Education certifies that";
        $text1 = "and is awarded <b>$val</b> $pratext";
        $text2 = "has participated in the educational activity titled";
        $text3 = "The Discovery Institute of Medical Education is accredited by the Accreditation Council for Continuing Medical Education to provide continuing medical education for physicians.";        
      } else if ($certificate_type == 'cert_aanp') {
        $pid = "";
        $haystack = strtolower("xx ".$title);
        if (strpos($haystack, 'sue visit ') > 0 ) {
          $pid = "Program ID #0911395";
        }
        $text0 = "This is to certify that";
        $text2 = "has attended and successfully completed the educational activity";
        $text1 = "for $val contact hours";
        $text3 = "This program has been granted $aanp contact hours of continuing education"; 
        if (floatval($ph) > 0) $text3 .= " (which includes $ph pharmacology hours)";
        $text3 .= " by the American Academy of Nurse Practicioners. $pid";
        $switch = true;
      } else if ($certificate_type == 'cert_aapa') {
        $text0 = "This is to certify that";
        $text2 = "has attended and successfully completed the educational activity";
        $text1 = "for $val hours of AAPA Category 1 CME Credit";
        $text3 = "This program has been reviewed and is approved for a maximum of $aapa hours of AAPA Category 1 CME credit by the Physician Assistant Review Panel. Approval is valid for 1 year(s) from the issue date of $begin_date. Participants may submit the self-assessment at any time during that period. This program was planned in accordance with AAPA’s CME Standards for Enduring Material Programs and for Commercial Support of Enduring Material Programs.";
        $switch = true;
      } else if ($certificate_type == 'cert_ancc') {
        $text0 = "The Discovery Institute of Medical Education certifies that";
        $text2 = "has successfully completed";
        $text1 = "for $val contact hours";
        $text3 = "DIME is an approved provider of continuing nursing education by the Illinois Nurses Association, an accredited approver by the American Nurses Credentialing Center’s Commission on Accreditation.";
        $text4 = "INA-CE Approval Number:<br/>0313-007- XXXXX"; //TODO: get number from activity
        $switch = true;
      } else { 
        $text0 = "The Discovery Institute of Medical Education certifies that";
        $text1 = "This activity was designated for <b>$amapracat1</b> $pratext";
        $text2 = "has participated in the educational activity titled";
        $text3 = "The Discovery Institute of Medical Education is accredited by the Accreditation Council for Continuing Medical Education to provide continuing medical education for physicians.";        
      } ?>   
<div class="dimeprinttop">
  <img src="<?php print $img_url?>dime_logo.png" style="width: 600px; height: 146px;"></img>
</div>
<div class="dimeprintclass">
<table width="600px">
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><?php print $text0 ?></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><strong><span style='font-size:14.0pt; font-weight: bold'><?php print $firstname ?> <?php print $lastname ?></span></strong></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><span style='font-size:12.0pt;'><?php print $text2 ?></span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><span style='font-size:12.0pt;'><strong><?php print $title ?></strong></span></td>
          </tr>         
<?php if (!$switch) { ?>          
          <tr>
            <td align="center" colspan="2" style="padding-top:20px"><span style='font-size:12.0pt;'>on <?php print $date ?></span></td>
          </tr>                 
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><span style='font-size:12.0pt;'><?php print $text1 ?></span></td>
          </tr>         
<?php } else { ?>
          <tr>
            <td align="center" colspan="2" style="padding-top:20px"><span style='font-size:12.0pt;'><?php print $text1 ?></span></td>
          </tr>         
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><span style='font-size:12.0pt;'>on <?php print $date ?></span></td>
          </tr>                 
<?php } ?>    
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><span style='font-size:12.0pt;'><?php print $text3 ?></span></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:0px;padding-bottom:10px">&nbsp;</td>
          </tr>         
<?php if (strlen($text4) > 0) {?>
          <tr>
            <td align="left" valign="bottom" style="padding-left:20px;padding-bottom:20px;margin-bottom:0px">
            <img src="<?php print $img_url?>dime_signature.jpg"></img><br />
            Meredith Herzog  <?php print $date ?><br />
            Manager, Certification Services<br />
            DIME<br />            
            </td>
            <td align="right" style="padding-top:15px"><span style='font-size:12.0pt;'><?php print $text4 ?></span></td>
          </tr>
<?php } else { ?>                          
          <tr>
            <td align="left" valign="bottom" colspan="2" style="padding-left:20px;padding-bottom:20px;margin-bottom:0px">
            <img src="<?php print $img_url?>dime_signature.jpg"></img><br />
            Meredith Herzog  <?php print $date ?><br />
            Manager, Certification Services<br />
            DIME<br />            
            </td>
          </tr>
<?php }  ?>          
          <tr>
            <td align="left" colspan="2">
              <div style="position:relative;bottom:2px">
                <b><span style='font-size:10.0pt;'>Certificate ID: <?php print $refid ?></span></b><br />
               </div>
            </td>
          </tr>          
</table>
</div>
<?php } else if ($accreditor == 'akh') {?>
<?php 
$uan = '';
$akhid = '';
$akh_release_date = $content['begin_date'];
$akh_expiration_date = $expiration_date;
$uantype = 'knowledge-based';
$haystack = strtolower("xx ".$title);
if (strpos($haystack, ' margy visit 1') > 0 ) {
  $uan = '077-999-09-037-H01-P';
  $akhid = '11010 WB0909';
} else if (strpos($haystack, ' margy visit 2') > 0 ) {
  $uan = '077-999-09-039-H01-P';
  $akhid = '10992 WB1009';
} else if (strpos($haystack, ' raj visit 1') > 0 ) {
  $uan = '077-999-09-038-H01-P';
  $akhid = '10991 WB0909';
} else if (strpos($haystack, ' raj visit 2') > 0 ) {
  $uan = '077-999-09-040-H01-P';
  $akhid = '10993 WB1009';
} else if (strpos($haystack, ' joseph visit 1') > 0 ) {
  $uantype = 'knowledge-based';
  $uan = '0077-9999-10-010-H01-P';
  $akhid = '11055WB0210';
  $akh_release_date = "Feb-25-10";
  $akh_expiration_date = "Feb-25-11";
} else if (strpos($haystack, ' joseph visit 2') > 0 ) {
  $uantype = 'knowledge-based';
  $uan = '0077-9999-10-011-H01-P';
  $akhid = '11056WB0410';
  //$akh_release_date = "Feb-25-10";
  //$akh_expiration_date = "Feb-25-11";
} else if (strpos($haystack, ' howard visit 2') > 0 ) {
  $uantype = 'knowledge-based';
  $uan = '0077-9999-10-012-H01-P';
  $akhid = '11054WB0210';
  $akh_release_date = "Feb-25-10";
  $akh_expiration_date = "Feb-25-11";
}
if ($profession == 'PHA') { 
  $plural = ($content['acpe'] > 1) ? "s" : '';
  $ceu = $content['acpe'] / 10.0;
  $lic_data = "License #: $licno";
  $logo =  $img_url."acpe_logo.png";
  $accreditation_text = "AKH Inc. is accredited by the Accreditation Council for Pharmacy Education (ACPE) as a provider of continuing pharmacy education.<br /><br />";
  $provider_id = "";
  $study = "Enduring Independent Study Activity";
  $award = "Awarded credit: ".$content['acpe']."&nbsp;contact hour$plural (".$ceu."&nbsp;CEUs)";
  $credit_text =  "UAN: $uan $uantype <br /> Release Date: ". $akh_release_date."<br /> Program Expiration Date: ".$akh_expiration_date."<br />";
} else if ($profession == 'DT') {
  $plural = ($content['cdr'] > 1) ? "s" : '';
  $lic_data = "License (or certification) #:$licno";
  $logo =  $img_url."cdr_logo.png";
  $accreditation_text = "AKH Inc. is a Continuing Professional Education (CPE) Accredited Provider with the Commission on Dietetic Registration (CDR).<br />";
  $provider_id = "CDR Accredited Provider #AN008.";
  $study = "Independent Study"; 
  $credit_text =  "Registered dietitians (RDs) and dietetic technicians, registered (DTRs) will receive ".$content['cdr']."&nbsp;continuing professional education unit$plural (CPEUs) for completion of this program/material.";
  $award = $content['cdr']." CPEs Awarded.";
} else {   
  // NURSE
  $plural = ($content['ancc'] > 1) ? "s" : '';
  $ceu = $content['ancc'] / 10.0;
  $lic_data = "License #: $licno";
  $logo =  $img_url."akh_ancc.jpg";
  $accreditation_text = "AKH Inc. is accredited as a provider of continuing nursing education by the American Nurses Credentialing Center's Commission on Accreditation (ANCC-COA).";
  $provider_id = "";
  $study = "Enduring Independent Study Activity";
  $award = "Awarded credit: ".$content['ancc']." contact hour$plural";
  $credit_text = "This activity is approved for ".$content['ancc']."&nbsp;contact hour$plural (".$ceu."&nbsp;CEUs). Accreditation applies solely to educational activities and does not imply approval or endorsement of any commercial product by the ANCC-COA.";
} 
?>                    
<div class="akhprintclass">
<table width="600px" style="border: 2px solid #303030 ">
  <tr><td>
        <table style="border: 2px solid #303030">
          <tr>
            <td align="center" style="padding-top:12px"><span style='font-weight: bold'>Statement of Continuing Education Credit</span></td>
          </tr>
          <tr>
            <td align="center" style="padding-top:12px">
            <table style="border-spacing: 8px">
              <tr>
                <td class="akhleft">
                <div style="float: left; vertical-align: top; padding-right:5px"><img src="<?php print $logo?>"></img>
                </div>
                <?php print $accreditation_text?><br /><br />
                <div style="clear: both"></div>
                <?php print $provider_id?><br />
                </td>
                <td  class="akhright" style="vertical-align: middle;">
                    <strong><?php print $firstname ?> <?php print $lastname ?></strong> <br />
                    <?php print $lic_data?><br />
                </td>
              </tr>
              <tr>                  
                <td class="akhleft">
                  <?php print $credit_text?>
                </td>
                <td class="akhright">
                    AKH Inc. certifies that the individual listed has participated in the educational activity titled: <br /><br />
                    <strong><?php print $title ?></strong><br />
                </td>
              </tr>
              <tr>                  
                <td class="akhleft">
                <?php print $award ?>
                </td>
                <td class="akhright">
                    on <?php print $date ?> <br /><br />
                    <?php print $study?><br /><br />
                </td>
              </tr>
              <tr>                  
                <td class="akhleft" style="padding-left: 10px">
                  <img src="<?php print $img_url?>akh_logo.png"></img><br />  
                  P.O. Box 2187<br />
                  Orange Park, FL 32073<br />
                  800-462-8165<br />
                  904-264-0674<br />
                  Fax 904-215-0534<br />
                </td>
                <td class="akhright">
                  <img src="<?php print $img_url?>akh_signature.png"></img><br />  
                  Helen M. Holman, DNP, RN-BC, CCMEP <br />
                  Issue Date: <?php print $date ?> <br />
                  Unique Certificate ID: <?php print $refid ?><br />
                  AKH Identifier:  <?php print $akhid?> <br />
                </td>
              </tr>
            </table>
            </td>
          </tr>
          
<!-- 
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><b><span style='font-size:16.0pt;letter-spacing:2.0pt'>CERTIFICATE</span></b></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><b><span style='font-size:16.0pt;letter-spacing:2.0pt'>&nbsp;</span></b></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><b><span style='font-size:12.0pt;letter-spacing:4.0pt'>cme<sup>2</sup>certifies that</span></b></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:6px"><strong><span style='font-size:16.0pt'><?php print $firstname ?> <?php print $lastname ?></span></strong></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><span style='font-size:12.0pt;letter-spacing:2.0pt'>Has participated in the educational activity titled</span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><span style='font-size:12.0pt;letter-spacing:2.0pt'><strong><?php print $title ?></strong></span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><span style='font-size:12.0pt;letter-spacing:1.0pt'>This activity was designated for <?php print $amapracat1_str ?>            
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><b><span style='font-size:16.0pt;letter-spacing:2.0pt'>&nbsp;</span></b></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding: 10px 40px 0px 30px"><span style='font-size:12.0pt;letter-spacing:4.0pt'><span style='font-size:10.0pt;letter-spacing:1.0pt'>cme<sup>2</sup> is accredited by the Accreditation Council for Continuing Medical Education to provide continuing medical education for physicians.</span></span></td>
          </tr>          
          <tr>
            <td align="left" valign="bottom" width="50%" style="padding-left:20px;padding-bottom:0px;margin-bottom:0px">
              <img src="<?php print $img_url?>cme2_signature.jpg"></img><br />
              <div style="position:relative;bottom:40px">
              <b><span style='font-size:12.0pt;letter-spacing:3.0pt;padding-bottom:0px'>Jane Perrotta</span></b><br />
              <b><span style='font-size:12.0pt;letter-spacing:3.0pt;padding-top:0px'>Clinical Director, cme<sup>2</sup></span></b><br />
              <b><span style='letter-spacing:3.0pt'>  </span></b>
              </div>
            </td>
            <td align="right" width="50%" style="padding-right:30px;padding-bottom:0px;margin-bottom:0px"><img src="<?php print $img_url?>cme2_logo_2.png"></img>
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2">
              <div style="position:relative;bottom:20px">
                <b><span style='letter-spacing:2.0pt'>Certificate ID: <?php print $refid ?></span></b><br />
                <b><span style='letter-spacing:2.0pt'>Issue date: </span></b><strong><span style='font-size:14.0pt'><?php print $date ?></span></strong>
               </div>
            </td>
          </tr>          

 -->
        </table>  
  </td></tr>  
</table>
</div>
<?php } else if ($accreditor == 'pcen') {?>
<?php 
        $h = $claimedhours > 0 ?  $claimedhours : $amapracat1;
        if ($profession == 'PHY') {
          if (floatval($h) > 1) {
            $claim_str = $h.' <i>AMA PRA Category 1 Credits&trade;</i>';
          } else {
            $claim_str = $h.' <i>AMA PRA Category 1 Credit&trade;</i>';
          }
          $design = "Primary Care Network designates this educational activity for a maximum of $amapracat1_str. Physicians should only claim credit commensurate with the extent of their participation in the activity.";
          $claim = "Physician was awarded $claim_str.";
        } else {
          if (floatval($h) > 1) {
            $claim_str = $h.' hours';
          } else {
            $claim_str = $h.' hour';
          }
          $design = "This activity was designated for a maximum of $amapracat1_str.";          
          $claim = "Clinician participated in $claim_str of this activity.";
        }
?> 
<div class="printclass">
<table width="600px" style="border: 2px solid #000000">
  <tr><td>
    <table style="border: 5px solid #000000; width:100%">
      <tr><td>
        <table style="border: 2px solid #000000;">
          <tr>
            <td align="center" colspan="2">
                <img src="<?php print $img_url?>pcen.jpg"></img>
            </td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><b><span style='font-size:12.0pt;'>This is to certify that</span></b></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:6px"><strong><span style='font-size:14.0pt'><?php print $firstname ?> <?php print $lastname ?></span></strong></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><span style='font-size:12.0pt;'>Has participated in the educational activity entitled</span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><span style='font-size:12.0pt;'><strong><?php print $title ?></strong></span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><b><span style='font-size:12.0pt;'><?php print $date ?></span></b></td>
          </tr>                    
          <tr>
            <td align="left" colspan="2" style="padding-top:20px"><span style='font-size:12.0pt;'>Primary Care Network, Inc., is accredited by the Accreditation Council for Continuing Medical Education to provide continuing medical education for physicians.</span></td>
          </tr>          
          <tr>
            <td align="left" colspan="2" style="padding-top:15px"><span style='font-size:12.0pt;'> <?php print $design?></span>            
            </td>
          </tr>
          <tr>
            <td align="left" colspan="2" style="padding-top:15px"><span style='font-size:12.0pt;font-weight: bold;'><?php print $claim;?></span>            
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><b><span style='font-size:16.0pt;letter-spacing:2.0pt'>&nbsp;</span></b></td>
          </tr>          
          <tr>
            <td align="right" valign="bottom" colspan="2" style="padding-left:20px;padding-bottom:0px;margin-bottom:0px">
              <img src="<?php print $img_url?>pcen_signature.png"></img><br />
              <b><span style='font-size:12.0pt;'>Sandy Bihlmeyer, MEd, CCMEP</span></b><br />
              <b><span style='font-size:12.0pt;'>Executive Director, Primary Care Network</span></b><br />
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:20px;">
                <span style='font-size:10.0pt;'>Primary Care Network  3805 S. Kansas Expy., Suite C   Springfield, MO 65807  <br/> Phone: 417-841-3658   Fax: 417-841-3609   www.primarycarenet.org</span>
            </td>
          </tr>          
        </table>  
      </td></tr>  
    </table>  
  </td></tr>  
</table>
</div>
<?php } else if ($accreditor == 'einstein') {?>
<?php 
      $amapracat1 = $content['amapracat1'];
      $val = $amapracat1;
      $certificate_type = '';
      if ($isclaimed) {
        if ( ($profession == 'PHY' || $np_as_phy) && $claimedtype == 'amapracat1') {
          $certificate_type = 'cert_amapracat1';
          $val = $claimedhours;
        }
      } else {
        if ($profession == 'PHY' && floatval($amapracat1) > 0) {
          $certificate_type = 'cert_amapracat1';
        }
      }

      if ($certificate_type == 'cert_amapracat1') {    
        $text1 = "on $date and is awarded";
      } else {
        $text1 = "on $date. This activity was designated for";
      }
      $text2 = $val." ".$pratext;
?> 
<div class="einsteinprintclass">
  <div style="z-index: -1; margin: auto; padding-top:100px"><img src="<?php print $img_url?>einstein_background.png"></img></div>
  <div style="position: absolute; top: 0px; left:0px; padding: 10px">
    <table style="border: 5px solid #000000; width:100%;">
      <tr><td>
        <table style="border: 2px solid #000000; width:100%">
          <tr>
            <td align="center" colspan="2" style="padding-top:25px">
                  <img src="<?php print $img_url?>einstein_logo.gif"></img>
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><span style='font-size:12.0pt;'><strong><?php print $firstname ?> <?php print $lastname ?></strong></span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><span style='font-size:12.0pt;'>HAS PARTICIPATED IN THE <BR/> EDUCATIONAL ACTIVITY TITLED</span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><span style='font-size:12.0pt;'><strong><?php print $title ?></strong></span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><span style='font-size:12.0pt;'><strong>CME Internet Activity</strong></span></td>
          </tr>         
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><b><span style='font-size:12.0pt;'><?php print $text1 ?></span></b></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><b><span style='font-size:12.0pt;'><?php print $text2 ?></span></b></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><b><span style='font-size:16.0pt;letter-spacing:2.0pt'>&nbsp;</span></b></td>
          </tr>          
          <tr>
            <td align="right" valign="bottom" colspan="2" style="padding-left:20px;padding-bottom:0px;margin-bottom:0px">
              <table>
                <tr><td align="center"><img src="<?php print $img_url?>einstein_signature.gif"></img></td></tr>
                <tr><td align="center"><b><span style='font-size:10.0pt;'>Victor B. Hatcher, Ph.D.,</span></b></td></tr>
                <tr><td align="center"><b><span style='font-size:10.0pt;'>Associate Dean</span></b><br /></td></tr>
              </table>
            </td>
          </tr>          
        </table>  
      </td></tr>  
    </table>  
  </div>
</div>
<?php } else if ($accreditor == 'cmeoutfitters') {?>
<?php 
      $text1 = "This activity was designated for $amapracat1_str";
?> 
<div class="cmeoutfittersprintclass">
    <div style="position: absolute;"><img src="<?php print $img_url?>cmeoutfitters_corner.png"></img></div>
    <table style="border: 2px solid #000000; width:100%">
      <tr><td>
        <table style="border: 1px solid #000000; width:100%">
          <tr>
            <td align="center" colspan="2">
                <img src="<?php print $img_url?>cmeoutfitters_logo.png"></img><br/>
                1395 Piccard Drive, Suite 370 - Rockville, MD 20850<br/>
                www.cmeoutfitters.com - 877.CME.PROS
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:25px"><span style='font-size:12.0pt;'>CME Outfitters, LLC, is accredited by the Accreditation Council for Continuing Medical Education, to provide continuing medical education for physicians.</span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><span style='font-size:12.0pt;font-weight: bold'>CME Outfitters, LLC, certifies that</span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><span style='font-size:12.0pt;'><strong><?php print $firstname ?> <?php print $lastname ?></strong></span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:20px"><span style='font-size:12.0pt;'>has participated in the educational activity titled</span></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><span style='font-size:12.0pt;'><?php print $title?></span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><span style='font-size:12.0pt;'>on <strong><?php print $date ?></strong></span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><b><span style='font-size:12.0pt;'><?php print $text1 ?>.</span></b></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><b><span style='font-size:16.0pt;letter-spacing:2.0pt'>&nbsp;</span></b></td>
          </tr>          
          <tr>
            <td align="center" valign="bottom" style="padding-left:10px;padding-bottom:0px;margin-bottom:0px">
              <table>
                <tr><td align="center"><img src="<?php print $img_url?>cmeoutfitters_signature.png"></img></td></tr>
                <tr><td align="center"><b><span style='font-size:10.0pt;'>Managing Partner</span></b><br /></td></tr>
              </table>
            </td>
            <td align="right" valign="bottom" style="padding-right:20px;padding-bottom:0px;margin-bottom:0px">
              <table>
                <tr><td align="center"><b><span style='font-size:10.0pt;'><?php print $today?></span></b><br /></td></tr>
                <tr><td align="center"><b><span style='font-size:10.0pt;'>Signature / Printed Date</span></b><br /></td></tr>
              </table>
            </td>
          </tr>          
        </table>  
      </td></tr>  
    </table>  
</div>
<?php } else if ($accreditor == 'cis') { 
  $certtitle = ($profession == 'PHY') ? 'CME CERTIFICATE' : 'Certificate of Participation';
  $amapracat1 = $content['amapracat1'];
  $val = $amapracat1;
  $certificate_type = '';
  if ($isclaimed) {
    if ( ($profession == 'PHY' || $np_as_phy) && $claimedtype == 'amapracat1') {
      $certificate_type = 'cert_amapracat1';
      $val = $claimedhours;
    }
  } else {
    if ($profession == 'PHY' && floatval($amapracat1) > 0) {
      $certificate_type = 'cert_amapracat1';
    }
  }

  if ($certificate_type == 'cert_amapracat1') {
    $text1 = "on $date and is awarded";
  } else {
    $text1 = "on $date. This activity was designated for";
  }
  $text2 = $val." ".$pratext;

?>
<div class="cisprintclass">
<table width="600px" style="border: 2px solid #000000">
  <tr><td>
    <table style="border: 5px solid #000000; width:100%">
      <tr><td>
        <table style="border: none;width: 100%">          
          <tr>
            <td align="right" colspan="2" style="padding-left:20px;padding-bottom:0px;margin-bottom:0px">
              <img src="<?php print $img_url?>cis_logo.jpg"></img><br />
              <span style='font-size:10.0pt;'>
                225 Dunn Street<br/>
                Houma, LA  70360<br />
                Phone 985-873-5670<br />
                Email: harriet.breaux@cardio.com</span><br /><br />
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="border-top:1px solid #000000;border-bottom:1px solid #000000;padding-top: 15px;padding-bottom: 15px"><b><?php print $certtitle;?></b></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:15px;font-size:16px;font-style:italic"><b>Cardiovascular Institute of the South</b></td>
          </tr>        
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><b>certifies that</b></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><u><strong><?php print $firstname ?> <?php print $lastname ?></strong></u></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px">has participated in the educational activity titled:</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><strong><?php print $title ?></strong></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><?php print $text1 ?></td>
          </tr>         
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><?php print $text2 ?></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:10px">&nbsp;</td>
          </tr>          
          <tr>
            <td align="right" valign="bottom" colspan="2" style="padding-left:20px;padding-bottom:0px;margin-bottom:0px">
              <img src="<?php print $img_url?>cis_signature.jpg"></img><br />
              <span style='font-size:10.0pt;border-top: 1px solid #CCCCCC'>Harriet Breaux, CME Coordinator</span><br />
            </td>
          </tr>          
        </table>  
      </td></tr>  
    </table>  
  </td></tr>  
</table>
</div>
<?php } else if ($accreditor == 'eos') { ?>
<div class="eosprinttop">
  <img src="<?php print $img_url?>eos_logo.png" style="width: 593px; height: 129px;"></img>
</div>
<div class="eosprintclass">
<table width="600px">
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><span style='font-size:12.0pt; font-weight: bold'>education | outcomes | science* </span></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><span style='font-size:12.0pt;'>certifies that</span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><strong><span style='font-size:14.0pt'><?php print $firstname ?> <?php print $lastname ?></span></strong></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><span style='font-size:12.0pt;'>has participated in the educational activity titled</span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><span style='font-size:12.0pt;'><strong><?php print $title ?></strong></span></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:20px"><span style='font-size:12.0pt;'><b>Original Release Date:</b> <?php print $begin_date ?></span></td>
          </tr>  
<?php if ($profession == 'PHY') {
  $claim = $claimedhours > 0 ?  $claimedhours : $amapracat1; 
?>                  
          <tr>
            <td align="center" colspan="2" style="padding-top:20px"><span style='font-size:12.0pt;'>and is awarded <?php print $claim ?><?php print $pratext ?></span></td>
          </tr>  
          <tr>
            <td align="left" colspan="2" style="padding-top:20px"><span style='font-size:12.0pt;'><strong>education | outcomes | science</strong> designates this educational activity for a maximum  of <?php print $amapracat1 ?> <?php print $pratext ?>.  Physicians should only claim credit commensurate with the extent of their participation in the activity.</span></td>
          </tr>  
<?php } else { ?>                  
          <tr>
            <td align="left" colspan="2" style="padding-top:20px"><span style='font-size:12.0pt;'>This activity was designated for <?php print $amapracat1 ?> <?php print $pratext ?>.</span></td>
          </tr>  
<?php } ?>                  
          <tr>
            <td align="center" colspan="2" style="padding-top:0px;padding-bottom:10px">&nbsp;</td>
          </tr>         
          <tr>
            <td align="left" valign="bottom" style="padding-left:20px;padding-bottom:10px;margin-bottom:0px">
              <div style="float: left"><img src="<?php print $img_url?>eos_signature.png"></img></div><br />
              <div style="clear: both"></div>
              <div style="float: left">
              <b><span style='font-size:11.0pt;padding-bottom:0px;'>Pesha Rubinstein</span></b><br />
              <span style='font-size:11.0pt;padding-top:0px'>Senior Director, CME</span><br />
              <span style='font-size:11.0pt;padding-top:0px'>*Formerly the Health Science Center for CME</span><br />
              </div>
            </td>
            <td><?php print $date ?></td>
          </tr>
          <tr>
            <td align="center" colspan="2">
              <div style="position:relative;bottom:2px">
                <b><span style='font-size:10.0pt;'>Certificate ID: <?php print $refid ?></span></b><br />
               </div>
            </td>
          </tr>          
</table>
</div>
<?php } else if ($accreditor == 'ucc') { ?>
<?php if ($profession == 'PHY') {
        $claim = $claimedhours > 0 ?  $claimedhours : $amapracat1;
        $text1 = "Participated in the CME activity";
        $text2 = "and is awarded $claim $pratext";
      } else {
        $text1 = "has participated in the CME activity";
        $text2 = "This activity was designated for $amapracat1_str";
      }
?>
<div class="uccprintclass">
<table width="600px">
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><img src="<?php print $img_url?>ucc_logo.png"></img></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><strong>CERTIFICATE OF PARTICIPATION</strong></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><strong>The University of Cincinnati College of Medicine</strong></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><strong>certifies that</strong></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><strong><?php print $firstname ?> <?php print $lastname ?></strong></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><strong><?php print $text1?></strong></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><strong><?php print $title ?></strong></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><strong><?php print $date ?></strong></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><strong><?php print $text2?></strong></td>
          </tr>   
          <tr>
            <td align="left" width="50%" style="padding-top:20px;padding-right:30px;padding-bottom:0px;margin-bottom:0px;">
              <span style='font-size:12.0pt;padding-bottom:0px;font-weight:bold;'>University of Cincinnati <br /> College of Medicine</span>
            </td>
            <td align="right" valign="bottom" width="50%" style="padding-left:20px;padding-bottom:0px;margin-bottom:0px">
              <img src="<?php print $img_url?>ucc_signature.png"></img><br />
              <div style="position:relative;bottom:40px">
              <b><span style='font-size:12.0pt;padding-bottom:0px;font-weight:bold;'>John R. Kues, Ph.D.</span></b><br />
              <b><span style='font-size:12.0pt;padding-top:0px'>Assistant Dean, CME</span></b>
              </div>
            </td>
          </tr>
          <tr>
              <td align="center" colspan="2" style="padding-top:0px">
              <span style='font-size:10.0pt;padding-bottom:0px;font-weight:bold;'>
              The University of Cincinnati College of Medicine is accredited by the Accreditation Council for Continuing Medical Education (ACCME) to sponsor continuing medical education for physicians.
              <br /><br />
              Office of CME:  (513) 558-7350
              <br />
              weiganka@uc.edu
              </span>
            </td>
          </tr>          
</table>
</div>
<?php } else if ($accreditor == 'naccme') { 

      $amapracat1 = $content['amapracat1'];
      $ancc = $content['ancc']; // Nurse
      $acpe = $content['acpe']; // Pharmacist
      $cpme = $content['cpme']; // Podiatrist
      
      $certificate_type = '';
      if ($isclaimed) {
        $val = $claimedhours;
        if ( ($profession == 'PHY' || $np_as_phy) && $claimedtype == 'amapracat1') {
          $certificate_type = 'cert_amapracat1';
        } else if ( ($profession == 'NUR' || $np_as_nur) && $claimedtype == 'ancc') {
          $certificate_type = 'cert_ancc';
        } else if ($profession == 'PHA' && $claimedtype == 'acpe') {
          $certificate_type = 'cert_acpe';
        } else if ($profession == 'POD' && $claimedtype == 'cpme') {  
          $certificate_type = 'cert_cpme';
        }
      } else {
        if ($profession == 'PHY' && floatval($amapracat1) > 0) {
          $certificate_type = 'cert_amapracat1';
          $val = $amapracat1;
        } else if ( ($profession == 'NUR' || $profession == 'NP') && floatval($ancc) > 0) {
          $certificate_type = 'cert_ancc';
        } else if ($profession == 'PHA' && floatval($acpe) > 0) {
          $certificate_type = 'cert_acpe';
        } else if ($profession == 'POD' && floatval($cpme) > 0) {  
          $certificate_type = 'cert_cpme';
        }
      }

      if ($certificate_type == 'cert_cpme') {         
        // Podiatrist credit
        $cpme = $content['cpme'];
        // Hack - trim the title to remove the visit number (credit is given for a curriculum, not just 1 activity)
        $isfirstvisit = strpos(strtolower($title), 'visit 1') > 0;
        //$title = substr($title, 0, strripos($title, ":"));
        if ($isfirstvisit) {
          $text = "This certificate is not valid for continuing education contact hours. A valid certificate for 1 contact hour will be issued upon successful completion of visit 1 and visit 2.";
        } else {
          $text = "NACCME is approved by the Council on Podiatric Medical Education as a sponsor of continuing education in podiatric medicine. This program is approved for $cpme continuing education contact hour.";
        }
?>
<div class="naccmeprintclass">
<table width="600px">
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><img src="<?php print $img_url?>naccme_logo.png"></img></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:20px">The North American Center for Continuing Medical Education, LLC, certifies that</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><strong><?php print $firstname ?> <?php print $lastname ?></strong></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px">has participated in the educational activity titled</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><strong><?php print $title ?></strong></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><strong><?php print $date ?></strong></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:25px"><?php print $text?></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:25px">&nbsp;</td>
          </tr>   
          <tr>
            <td align="center" colspan="2" valign="bottom" style="padding-left:20px;padding-bottom:20px;margin-bottom:0px">
              <img src="<?php print $img_url?>naccme_signature.png"></img><br />
              <div style="position:relative;bottom:30px">
              <b><span style='font-size:12.0pt;padding-bottom:0px;font-weight:bold;'>John T. Savage, MS, CCMEP</span></b><br />
              <b><span style='font-size:12.0pt;padding-top:0px'>Director, Medical Education</span></b><br />
              </div>
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2">
              <div style="position:relative;bottom:2px">
              <span style='font-size:10.0pt;padding-bottom:0px;font-weight:bold;'>
              300 Rike Drive, Suite A • Millstone Township, NJ 08535 
              <br />Ph 609.371.1137 - Fx 609.371.2733
              </span>
               </div>
            </td>
          </tr>          
</table>
</div>
<?php 
    } else if ($certificate_type == 'cert_acpe') { 
        $uan = '';
        $ed = '';
        $haystack = strtolower("xx ".$title);        
        if (strpos($haystack, strtolower('Optimizing VTE Prophylaxis in the Inpatient Setting')) > 0) {
          $uan = '276-000-09-044-H01-P';
          $ed = 'This educational activity is an application-based activity.';
        } else if (strpos($haystack, strtolower('Jim Visit 1')) > 0) {
          $uan = '276-000-09-045-H01-P';
          $ed = 'This educational activity is a knowledge-based activity.';
        } else if (strpos($haystack, strtolower('Mark Visit 1')) > 0) {
          $uan = '276-000-10-005-H01-P';
          $ed = 'This educational activity is a knowledge-based activity.';
        } else if (strpos($haystack, strtolower('Stanley Visit 1')) > 0) {
          $uan = '276-000-10-006-H01-P';
          $ed = 'This educational activity is a knowledge-based activity.';
        }
        $ceu = $content['acpe'] / 10.0;
        $logo =  $img_url."acpe_logo.png";
?>
<div class="naccmeprintclass">
<table width="600px">
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><img src="<?php print $img_url?>naccme_logo.png"></img></td>
          </tr>
          <tr>
            <td align="center" colspan="2">
              <div style="position:relative;bottom:2px;color:navy;">
              <span style='font-size:12.0pt;padding-bottom:0px;font-weight:bold;'>DOCUMENTATION OF CREDIT</span><br/>
              <span style='font-size:10.0pt;padding-bottom:0px;font-weight:bold;'>
              <br />NACCME
              <br />300 Rike Drive, Suite A, Millstone Township, New Jersey 08535 
              <br />Phone (609) 371-1137 - Fax (609) 371-2733
              <br /><br />
              </span>
               </div>
            </td>
          </tr>    
          <tr>
            <td align="center" colspan="2" style="background-color:navy;color:white">EDUCATIONAL ACTIVITY INFORMATION</td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:20px">
              <table width=100%>
                <tr style='font-size:10.0pt;padding-bottom:0px;font-weight:bold;color:navy;vertical-align:top'>
                    <td>UAN</td><td>Title</td><td>Date</td><td>CEUs</td>
                </tr>
                <tr style='font-size:10.0pt;padding-bottom:0px;font-weight:bold;background-color:navy;'>
                    <td colspan="4">&nbsp;</td>
                </tr>
                <tr style='font-size:10.0pt;padding-bottom:0px;vertical-align:top;'>
                    <td style='padding-left:3px;padding-right:3px'><?php print $uan?></td>
                    <td style='padding-left:3px;padding-right:3px'><?php print $title?></td>
                    <td style='padding-left:3px;padding-right:3px'><?php print $date?></td>
                    <td style='padding-left:3px;padding-right:3px'><?php print $ceu?></td>
                </tr>
                </table>
            </td>
          </tr>          
          <tr>
            <td align="left" colspan="2" style="padding-top:10px"><?php print $ed;?></td>
          </tr>           
          <tr>
            <td align="left" colspan="2" style="padding-top:20px;"><span style="color:navy;font-weight:bold;">Participant Information:</span><br/>
              <?php print $firstname ?> <?php print $lastname ?><br/><?php print $address?></td>
          </tr>    
          <tr>
            <td align="center" colspan="2" style="padding-top:10px">&nbsp;</td>
          </tr>   
          <tr>
            <td align="right" colspan="2" valign="bottom" style="padding-left:20px;padding-bottom:10px;margin-bottom:0px;color:navy;font-weight:bold;">
              Authorized by: <br/>
              <img src="<?php print $img_url?>naccme_signature.png"></img><br />
              <div style="position:relative;bottom:30px">
              John T. Savage, MS, CCMEP<br />
              Director, Medical Education<br />
              Date Printed: <?php print $date?><br />
              </div>
            </td>
          </tr>             
          <tr>
            <td align="left" colspan="2" style="padding-top:20px;">
              <div>
                <div style="width: 520px; float: left; vertical-align: top; padding-right:5px"><span style="color:navy;font-weight:bold;">North American Center for Continuing Medical Education, LLC (NACCME) is accredited by the Accreditation Council for Pharmacy Education as a provider of continuing pharmacy education (ACPE Provider #276).</span><br/></div>
                <div style="float: right; vertical-align: top; padding-right:5px"><img src="<?php print $logo?>"></img></div>
                </div>
            </td>
          </tr>     
</table>
</div>
<?php      
    } else { 
      // phy - nur default - 
      if ($certificate_type == 'cert_amapracat1') {
        $text = "and is awarded $val $pratext<br/><br/>";
        $text .= "NACCME is accredited by the Accreditation Council for Continuing Medical Education to provide continuing medical education for physicians.<br/><br/>";
        $text .= "NACCME designates this educational activity for a maximum of $amapracat1_str.<br/><br/>";
        $text .= "Physicians should only claim credit commensurate with the extent of their participation in the activity. This activity has been planned and produced in accordance with the ACCME Essential Areas and Policies.";
      } else if ($certificate_type == 'cert_ancc') {
        $text = "North American Center for Continuing Medical Education, LLC (NACCME) is an approved provider of continuing nursing education by the Pennsylvania State Nurses Association, an accredited approver by the American Nurses Credentialing Center’s Commission on Accreditation.<br/><br/>";
        $text .= "This continuing nursing education activity was approved for $ancc contact hour(s).<br/><br/>";
        $text .= "Provider approved by the California Board of Registered Nursing, Provider Number 13255, for $ancc contact hour(s).<br/><br/>";
        $text .= "This certificate must be retained by the licensee for a period of four years after the course ends.";
      } else {
        $text = "NACCME is accredited by the Accreditation Council for Continuing Medical Education to provide continuing medical education for physicians.<br/><br/>";
        $text .= "This activity was designated for $amapracat1_str.";
      }
      
?>
<div class="naccmeprintclass">
<table width="600px">
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><img src="<?php print $img_url?>naccme_logo.png"></img></td>
          </tr>
          <tr>
            <td align="left" colspan="2" style="padding-top:20px"><?php print $firstname ?> <?php print $lastname ?><br/><?php print $address?></td>
          </tr> 
          <tr>
            <td align="center" colspan="2" style="padding-top:20px">North American Center for Continuing Medical Education, LLC (NACCME) certifies that</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><strong><?php print $firstname ?> <?php print $lastname ?></strong></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px">has participated in the educational activity titled</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><strong><?php print $title ?></strong></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><strong>on <?php print $date ?></strong></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:25px"><?php print $text?></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:25px">&nbsp;</td>
          </tr>   
          <tr>
            <td align="center" colspan="2" valign="bottom" style="padding-left:20px;padding-bottom:10px;margin-bottom:0px">
              <img src="<?php print $img_url?>naccme_signature.png"></img><br />
              <div style="position:relative;bottom:30px">
              <b><span style='padding-bottom:0px;font-weight:bold;'>John T. Savage, MS, CCMEP</span></b><br />
              <b><span style='padding-top:0px'>Director, Medical Education</span></b><br />
              </div>
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2">
              <div style="position:relative;bottom:2px">
              <span style='font-size:10.0pt;padding-bottom:0px;font-weight:bold;'>
              300 Rike Drive, Suite A • Millstone Township, NJ 08535 
              <br />Ph 609.371.1137 - Fx 609.371.2733
              </span>
               </div>
            </td>
          </tr>          
</table>
</div>
<?php   
    }
?>    
<?php } else if ($accreditor == 'purdue') { 

  if ($profession == 'PHY') {
        $text1 = "CERTIFICATE";
        $text2 = "on $date <br/> and is awarded $amapracat1_str.";
  } else { 
        $text1 = "CERTIFICATE OF PARTICIPATION";
        $text2 = "on $date.<br/> This activity was designated for <br />$amapracat1_str.";
  }
?>
<div class="purdueprintclass">
<table width="600px">
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><img src="<?php print $img_url?>purdue_logo.png"></img></td>
          </tr>
          <tr>
            <td align="left" colspan="2" style="padding-top:20px"><?php print $date ?></td>
          </tr>
          <tr>
            <td align="left" colspan="2" style="padding-top:20px"><?php print $firstname ?> <?php print $lastname ?><br/><?php print $address?></td>
          </tr> 
          <tr>
            <td align="center" colspan="2" style="padding-top:20px"><span style="font-size:16pt;font-weight:bold"><?php print $text1 ?></span></td>
          </tr> 
          <tr>
            <td align="center" colspan="2" style="padding-top:20px">Purdue University certifies that </td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><strong><?php print $firstname ?> <?php print $lastname ?></strong></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:5px">has participated in the educational activity titled</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><strong><?php print $title ?></strong></td>
          </tr>        
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><?php print $text2?></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:5px">&nbsp;</td>
          </tr>   
          <tr>
            <td align="center" colspan="2" valign="bottom" style="padding-left:20px;padding-bottom:10px;margin-bottom:0px">
              <img src="<?php print $img_url?>purdue_signature.png"></img><br />
              <div style="position:relative;bottom:5px">
              <span style='padding-bottom:0px;'>Robert W. Bennett</span><br />
              <span style='padding-top:0px;'>Director, CME Program</span><br />
              </div>
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:5px">
              <div style="position:relative;bottom:2px">
              <span style='font-size:10.0pt;padding-bottom:0px;font-weight:bold;'>
              College of Pharmacy, Nursing and Health Sciences<br />
              School of Pharmacy and Pharmaceutical Sciences<br />
              Division of Continuing Education<br />
              <br />
              601 Stadium Mall Dr.,  PUSH 336<br />
              West Lafayette, IN 47907-2052<br />
              Telephone:  765/494-5457     Fax:   765/494-0802<br />
              </span>
               </div>
            </td>
          </tr>          
</table>
</div>
<?php } else if ($accreditor == 'arhp') { ?>
<?php 

  $npwh = $content['npwh'];
  $certificate_type = '';
  if ($isclaimed) {
    if ($profession == 'PHY' && $claimedtype == 'amapracat1') {
      $certificate_type = 'cert_amapracat1';
    } else if ($np_as_nur && $claimedtype == 'npwh') {
      $certificate_type = 'cert_npwh';
    }
  } else {
    if ($profession == 'PHY' && floatval($amapracat1) > 0) {
      $certificate_type = 'cert_amapracat1';
    } else if ($np_as_nur && floatval($npwh) > 0) {
      $certificate_type = 'cert_npwh';
    }
  }
  if ($certificate_type == 'cert_npwh') {
    $pharmacology = $npwh / 2;
    $claim = $claimedhours > 0 ?  $claimedhours : "_____";
    $claimph = $claimedhours > 0 ?  ($claimedhours / 2) : "_____";
    $offering = "xx-xx";
?>
<div class="npwhprinttop">
  <img src="<?php print $img_url?>arhp_logo.png" ></img>
  <img src="<?php print $img_url?>npwh_logo.gif" ></img>
</div>
<div class="npwhprintclass">
<table width="600px">
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><span style='font-size:14.0pt; font-weight: bold; font-style:italic'>CONTINUING EDUCATION CERTIFICATE</span></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:5px">The Association of Reproductive Health Professionals certifies that</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><strong><span style='font-size:12.0pt'><?php print $firstname ?> <?php print $lastname ?></span></strong></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><span style=''>has completed the continuing education program entitled</span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><span style='font-weight:bold'><?php print $title ?></span></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><span style=''>for a total of <?php print $npwh ?> contact hour(s)</span></td>
          </tr>    
          <tr>
            <td align="center" colspan="2">
              <img src="<?php print $img_url?>npwh_signature.png"></img><br />
              <b>Susan Wysocki, RNC, NP</b><br />
              <b>NPWH President and CEO</b>
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:20px;font-style:italic;font-size:10pt">
              This activity has been evaluated and approved by the Continuing Education Approval Program of the National Association of Nurse Practitioners in Women’s Health (NPWH) offering <?php print $npwh ?> contact hour(s) of continuing education credit including <?php print $pharmacology ?> pharmacology hour(s).
              <br /><br />
              Offering No. <?php print $offering?>
              <br />
              Each participant should claim only those contact hours that he/she actually spent in the educational activity. I claim <?php print $claim?> (CE)/ <?php print $claimph?> (pharm) contact hours.
              <br />
              <br />
              ______________________________________ Signature
              </td>
          </tr>      
          <tr>
            <td align="center" colspan="2" style="padding-top:20px">
              Association of Reproductive Health Professionals (ARHP)<br/>
              1901 L Street, NW, Suite 300 | Washington, DC 20036<br/>
              Phone: (202) 466-3825&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E-mail: arhp@arhp.org&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Web: www.arhp.org<br/>
            </td>
          </tr>       
</table>
</div>
<?php } else if ($certificate_type == 'cert_amapracat1') { ?>
<?php $val = $isclaimed ? $claimedhours : $amapracat1; ?>
<div class="arhpprintclass">
<table width="600px">
          <tr>
            <td align="center" style="padding-top:5px;border: 1px solid #CCCCCC;margin-right: 0px;"><img src="<?php print $img_url?>arhp_logo.png" ></img></td>
            <td align="center" style="padding-top:5px;border: 1px solid #CCCCCC;margin-left: 0px;">
              The Association of Reproductive Health Professionals certifies that <br/><br/>
              <strong><?php print $firstname ?> <?php print $lastname ?></strong> <br/><br/>
              has participated in the educational activity titled<br/><br/>
              <strong><?php print $title ?></strong><br/><br/>
              and is awarded <?php print $val?> hour(s) of <?php print $pratext?><br/><br/>
              on <?php print $date ?>.
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:15px">The Association of Reproductive Health Professionals (ARHP) is accredited by the Accreditation Council for Continuing Medical Education to sponsor continuing medical education for physicians.</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px">Physicians should only claim credit commensurate with the extent of their participation in this activity.</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px">ARHP designates this continuing medical education activity for up to <?php print $amapracat1?> hour(s) of <?php print $pratext?>.</td>
          </tr>
          <tr>
            <td align="center" colspan="2">
              <img src="<?php print $img_url?>arhp_signature.png"></img><br />
              Eve Espy, MD<br />
              Education Chair, ARHP
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:20px">
              Association of Reproductive Health Professionals (ARHP)<br/>
              1901 L Street, NW, Suite 300 | Washington, DC 20036<br/>
              Phone: (202) 466-3825&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E-mail: arhp@arhp.org&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Web: www.arhp.org<br/>
            </td>
          </tr>       
</table>
</div>
<?php } else { ?>
<div class="arhpprintclass">
<table width="600px">
          <tr>
            <td align="center" style="padding-top:5px;border: 1px solid #CCCCCC;margin-right: 0px;"><img src="<?php print $img_url?>arhp_logo.png" ></img></td>
            <td align="center" style="padding-top:5px;border: 1px solid #CCCCCC;margin-left: 0px;">
              The Association of Reproductive Health Professionals certifies   the attendance of  <br/><br/>
              <strong><?php print $firstname ?> <?php print $lastname ?></strong> <br/><br/>
              at  <br/><br/>
              <strong><?php print $title ?></strong><br/><br/>
              on  <br/><br/>
              <?php print $date ?>
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:15px">The Association of Reproductive Health Professionals (ARHP) is accredited by the Accreditation Council for Continuing Medical Education to sponsor continuing medical education for physicians.</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px">ARHP designates this continuing medical education activity for up to <?php print $amapracat1?> hour(s) of <?php print $pratext?>.</td>
          </tr>
          <tr>
            <td align="center" colspan="2">
              <img src="<?php print $img_url?>arhp_signature.png"></img><br />
              Eve Espy, MD<br />
              Education Chair, ARHP
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:20px">
              Association of Reproductive Health Professionals (ARHP)<br/>
              1901 L Street, NW, Suite 300 | Washington, DC 20036<br/>
              Phone: (202) 466-3825&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E-mail: arhp@arhp.org&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Web: www.arhp.org<br/>
            </td>
          </tr>       
</table>
</div>
<?php   }  ?>
<?php } else if ($accreditor == 'bcm') { ?>
<?php 
  $certificate_type = '';
  if ($isclaimed) {
    if ($profession == 'PHY' && $claimedtype == 'amapracat1') {
      $certificate_type = 'cert_amapracat1';
    } else if ($np_as_phy) {
      $certificate_type = 'cert_amapracat1';
    }
    $val = $claimedhours;
  } else {
    if ($profession == 'PHY' && floatval($amapracat1) > 0) {
      $certificate_type = 'cert_amapracat1';
    }
    $val = $amapracat1;
  }
  if ($certificate_type == 'cert_amapracat1') {
    $text1 = 'CREDIT CERTIFICATE';
    $text2 = "on $date,<br/>and is awarded $val $pratext.";
  } else {
    $text1 = 'CERTIFICATE OF PARTICIPATION';
    $text2 = "on $date.<br/>The activity was designated for $val $pratext";
  }
  $text3 = "The term of approval for this enduring material is $begin_date through $expiration_date.";
?>
<div class="bcmprinttop">
  <img src="<?php print $img_url?>bcm_logo.png"></img>
</div>
<div class="bcmprintclass">
<table width="520px">
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><span style='font-size:18.0pt;font-weight: bold'><?php print $text1?></span></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><span style='font-size:12.0pt;font-weight:bold;'>Baylor College of Medicine</span> <span style='font-size:12.0pt;'>certifies that</span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><strong><span style='font-size:14.0pt'><?php print $firstname ?> <?php print $lastname ?></span></strong></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:5px">has participated in the educational activity titled</td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><span style='font-weight:bold;'><?php print $title ?></span></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><?php print $text2 ?></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:20px">Baylor College of Medicine is accredited by the Accreditation Council for Continuing Medical Education to provide continuing medical education for physicians.</td>
          </tr> 
          <tr>
            <td align="center" colspan="2" style="padding-top:20px">Baylor College of Medicine designates this educational activity <br/>for a maximum of <?php print $amapracat1?> <?php print $pratext?>. <br/>Physicians should only claim credit commensurate with the extent of their participation in the activity.</td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:20px"><?php print $text3 ?></td>
          </tr> 
          <tr>
            <td align="center" colspan="2" style="padding-top:0px;padding-bottom:20px;"> 
            </td>
          </tr>         
          <tr>
            <td align="left" valign="bottom" colspan="2" style="padding-left:20px;padding-bottom:10px;margin-bottom:0px">
              <div style="float: left">
              Michael Fordis, M.D.<br />
              Senior Associate Dean<br />
              Director, Office of<br />
              Continuing Medical Education<br />  
              </div>
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2"><img src="<?php print $img_url?>bcm_separator.png"></img></td>
          </tr> 
          <tr>
            <td align="center" colspan="2"><span style='font-size:9.0pt;font-weight:bold;'>KEEP THIS CERTIFICATE for your records.  
            A fee of $15.00 will be charged for a duplicate certificate. Direct inquiries to: Baylor College of Medicine, 
            Office of Continuing Medical Education, One Baylor Plaza, MS: BCM155 Houston, Texas 77030 USA Phone: 713.798.8237</span>
            </td>
          </tr>          
</table>
</div>

<?php } else { ?>
<div class="defaultprintclass">
<table width="600px" style="border: 4px solid #404040;">
          <tr>
            <td align="center" colspan="2" style="padding-top:5px"><span style='font-size:14.0pt;'>CONTINUING MEDICAL EDUCATION CERTIFICATE</span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><strong><span style='font-size:14.0pt'><?php print $firstname ?> <?php print $lastname ?></span></strong></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><span style='font-size:12.0pt;'><em>has participated in the educational activity titled</em></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:10px"><span style='font-size:12.0pt;'><strong><?php print $title ?></strong></span></td>
          </tr>          
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><span style='font-size:12.0pt;'>on  <?php print $date ?>.           
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:15px"><span style='font-size:12.0pt;'>This activity was designated for <?php print $amapracat1_str ?>           
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:0px;padding-bottom:0px">&nbsp;</td>
          </tr>  
          <tr>
            <td align="left" colspan="2" style="padding-right:30px;padding-top:20px;padding-bottom:10px;margin-bottom:0px">
              <b>Certificate ID: <?php print $refid ?></b>
            </td>      
</table>
</div>
<?php } ?>
</center>
<script>
  print();
</script>
</body>
</html>