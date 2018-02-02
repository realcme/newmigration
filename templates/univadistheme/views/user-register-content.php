<?php
if ( isset($_SESSION['form_error']['messages']['error']) ) {
    foreach ($_SESSION['form_error']['messages']['error'] as $val) {
        echo "<div class=\"alert alert-danger\" role=\"alert\"><strong>$val</strong></div>";
    }
}

if ( isset($_SESSION['form_error']['messages']['status']) ) {
    foreach ($_SESSION['form_error']['messages']['status'] as $val) {
        echo "<div class=\"alert alert-success\" role=\"alert\"><strong>$val</strong></div>";
    }
}

print $content;
?>