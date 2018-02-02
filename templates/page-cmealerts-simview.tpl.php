<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language; ?>" xml:lang="<?php print $language; ?>">

<head>
  <title><?php print $head_title; ?></title>
  <link rel='stylesheet' href='<?php print base_path() . path_to_theme() . '/mail.css'; ?>' type='text/css'>
</head>
<body>
<?php 
  $i = 1;
  foreach ($content['alert'] as $msg) { 
?>
  <div>
    <strong>Alert <?php print $i?>: <?php print $msg['subject']?></strong><br/><br/>
    <?php print $msg['text']?>
    <br/><br/>
  </div>
<?php
    $i++;  
  }
?>
</body>
</html>