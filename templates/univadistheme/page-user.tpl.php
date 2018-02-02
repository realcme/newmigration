<?php

include("responsive-header.php");

if ( DEVICE == 'phone' || DEVICE == 'tablet' /*|| DEVICE == 'computer'*/ ) {
    define('VIEW_FILE', 'user-content.php');
    include("responsive-content.php");
} else {

    include("non-responsive-content.php");
}