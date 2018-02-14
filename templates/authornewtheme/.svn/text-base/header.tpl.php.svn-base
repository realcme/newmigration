<?php

// used to create sso token for desk.com
//include "include/desk-sso.inc.php";
//include "sso/desk-gateway.php";

$partner = cmeauthoradmin_get_partner();

$subtheme = path_to_subtheme();
$theme_path = base_path() . $subtheme;

$author_path = base_path() . drupal_get_path('module', 'cmeauthor');
$builder_path = base_path() . drupal_get_path('module', 'cmebuilder');
$dashboard_path = base_path() . drupal_get_path('module', 'cmedashboard');

$reset_css = $theme_path . '/css/html5reset-1.6.1.css';
$style_css =  $theme_path . '/css/style.css';
global $user;

/*
// Logic for sso desk login support link on sidebar
if ($user->uid) {
	$to = "https://healthcourse.desk.com/?b_id=8742";
	$token_url_curl = desk_sso($user->uid, $user->mail, $user->name, $to);
} else {
	$token_url_curl = "#";
}*/


?>
<div id="header">
	<ul>
		<li ><a class="menu" href="#menu"></a><li>
		<li ><a class="back" href="#back"></a><li>
		<li class="divider"><li>
		<li class="spacer"><li>
		<li class="link dashboard"><a title="Go to my Dashboard" href="/cms">Dashboard</a><li>
		<li class="link courses"><a title="List All Courses" href="/cms/courses">Courses</a><li>
<?php if (cmeauthoradmin_can_access_advanced_features()): ?>
		<li class="link templates"><a title="List All Templates" href="/cms/templates">Templates</a><li>
<?php endif; ?>
		<li class="right"><a class="logo" href="#"></a><li>
		<li class="right partner" data-nid="<?php print $partner->nid; ?>"><?php print $partner->title; ?><li>
	</ul>
</div>
<?php if ($user->uid): ?>
<ul id="sidemenu">
	<li id="submenu"><a href="#gt-submenu">Author Tool Kit</a>
		<ul id="toolkit">
			<li class="gt-curriculum_auth">Repeated Measures</li>
			<li class="gt-faculty_auth">Faculty</li>
			<li class="gt-learn-obj_auth">Learning Objectives</li>
			<li class="gt-qual-meas_auth">Quality Measures</li>
			<li class="gt-consultant_auth">Consultants</li>
			<li class="gt-patient_auth">Patients</li>
			<li class="gt-reference_auth">References</li>
			<li class="gt-fine-print_auth">Front Matter Statements</li>
			<li class="gt-eval-ques_auth">Evaluation Questions</li>
			<li class="gt-metric_auth">Metrics</li>
			<li class="gt-picmelite_auth">CSA Questions</li>
		</ul>
	</li>
	<li><a href="<?php print get_cmeauthor_activities_home();?>">All Public Activities</a></li>
	<?php if (cmeauthoradmin_is_partner_manager($user->uid)) { ?>
	<li class="gt-account-management">User Accounts</li>
	<?php } ?>
	<li><a href="<?php print base_path()?>cmeauthoradmin/profile">Profile Settings</a></li>
	<li><a href="/cms/desksupport" target="_blank">Help/Support</a></li>
	<?php if (user_access('cross-partner management')) { ?>
	<li><a href="<?php print base_path()?>cmeauthoradmin/managepartner">Partner Settings</a></li>
	<?php } ?>
    <li><a href="<?php print base_path()?>logout">Logout</a></li>
</ul>
<?php else: ?>
<ul id="sidemenu">
	<li><a href="/cms/desksupport" target="_blank">Help/Support</a></li>
	<li><a href="<?php print base_path()?>cmeauthoradmin/proxylogin">Login</a></li>
</ul>
<?php endif; ?>

<div id="popup">
	<div class="wrapper">
		<div class="title"></div>
		<iframe></iframe>
	</div>
</div>