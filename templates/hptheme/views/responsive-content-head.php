<?php
global $user, $brand, $cookie_domain;

define('CMEBRAND', $brand);
define('CMEBASEURL', ltrim($cookie_domain, '.') );
define(CME_BOOTSTRAP_URL, "http://".CMEBRAND.'.'.CMEBASEURL.'/cms/sites/all/themes/zen/'.CMEBRAND.'theme/');
define('VIEWSDIR', 'views');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>RealCME Health Professional | New Password</title>
    <meta name="apple-itunes-app" content="app-id=399842586"></meta>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Le styles -->
    <link href="<?=CME_BOOTSTRAP_URL?>bootstrap/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
        body {
            padding-top: 0px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }

        .form-signin {
            max-width: 300px;
            padding: 19px 29px 29px;
            margin: 0 auto 20px;
            background-color: #fff;
            border: 1px solid #e5e5e5;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
            -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
            box-shadow: 0 1px 2px rgba(0,0,0,.05);
        }
        .form-signin .form-signin-heading,
        .form-signin .checkbox {
            margin-bottom: 10px;
        }
        .form-signin input[type="text"],
        .form-signin input[type="password"] {
            font-size: 20px;
            height: 50px;
            margin-bottom: 15px;
            padding: 7px 9px;
            font-family: 'Montserrat', sans-serif !important;
        }

        p, label {
            font-family: 'Montserrat', sans-serif;
        }

        div.description {
            font-family: 'Montserrat', sans-serif;
            font-size: 8pt;
            margin-bottom: 20px;
        }

        h2 {
            font-size: 20px;
        }

        #node-92 {
            padding-left: 10px;
            padding-right: 10px;
        }

        .error {
            border: solid 1px red !important;
        }

        <?php if ( VIEW_FILE == 'user-content.php' && in_array('administrator', $user->roles) ) { ?>
        form fieldset:nth-child(7) {
            display: none;
        }
        <?php } ?>


    </style>
    <link href="<?=CME_BOOTSTRAP_URL?>bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="../assets/ico/favicon.png">

</head>

<body>

<?php include("responsive-content-header.php"); ?>

<div class="container">

