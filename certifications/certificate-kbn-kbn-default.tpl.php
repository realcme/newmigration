<?php
$img_url = $cert_img_url ? $cert_img_url : base_path().path_to_theme().'/img/';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language; ?>" xml:lang="<?php print $language; ?>">

<head>
  <title><?php print $certificate['course_title'];?></title>
  <style>
    .bottom {
      width: 33%;
      float: left;
    }
  </style>
</head>

<body style="padding: 0; margin: 0;">
  <div style="font-size:11.0pt;font-family: Times, serif;width: 600px;margin: auto; text-align: center;">
    <div style="width: 100%;">
      <div class="content" style="width:100%">
        <img src="<?php print $img_url;?>University_Louisville_Hospital.png" />
        <p>530 South Jackson Street, Louisville, Kentucky 40202</p>
        <h3><?php print $certificate['firstname'];?> <?php print $certificate['lastname'];?></h3>
	<p>Has successfully completed the continuing education activity</p>
	<h2><?php print $certificate['course_title'];?></h2>
	<br>
	<br>
	<p>And is entitled to receive <?php print $certificate['creaditearned'];?> Contact Hours</p>
	<br>
	<div>
	  <div class="bottom">
            <p><?php print $certificate['dateearned']; ?></p>
	    <hr />
	    <p>Date</p>
          </div>
	  <div class="bottom">
            <p><?php print $certificate['@provider'];?></p>
	    <hr />
	    <p>KBN Approved</p>
          </div>
	  <div class="bottom">
            <p>Sherle Niner, MSN, RN</p>
	    <hr />
	    <p>Nurse Administrator, Continuing Education</p>
          </div>
	</div>
      </div>
    </div>
  </div>
</div>
</body>
<script>
  print();
</script>
</html>