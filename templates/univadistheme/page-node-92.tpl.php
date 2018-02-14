<?php

include("responsive-header.php");

if ( DEVICE == 'phone' || DEVICE == 'tablet' ) {
    define('VIEW_FILE', 'privacypolicy-content.php');
    include("responsive-content.php");
} else {

    include("non-responsive-content.php");
}