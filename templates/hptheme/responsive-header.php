<?php
global $user, $brand;
require_once("includes/Mobile_Detect.php");
$detect = new Mobile_Detect;

$device = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');
$version = $detect->getScriptVersion();

define('DEVICE', $device);

// For Testing Mobile via PC
//define('DEVICE', 'phone');

