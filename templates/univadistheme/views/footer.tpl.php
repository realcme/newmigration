</div> <!-- /container -->

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<?php /*<script src="<?=CME_BOOTSTRAP_URL?>bootstrap/js/jquery.js"></script>*/?>
<script src="http://code.jquery.com/jquery.js"></script>
<script src="<?=CME_BOOTSTRAP_URL?>bootstrap/js/bootstrap-transition.js"></script>
<script src="<?=CME_BOOTSTRAP_URL?>bootstrap/js/bootstrap-alert.js"></script>
<script src="<?=CME_BOOTSTRAP_URL?>bootstrap/js/bootstrap-modal.js"></script>
<script src="<?=CME_BOOTSTRAP_URL?>bootstrap/js/bootstrap-dropdown.js"></script>
<script src="<?=CME_BOOTSTRAP_URL?>bootstrap/js/bootstrap-scrollspy.js"></script>
<script src="<?=CME_BOOTSTRAP_URL?>bootstrap/js/bootstrap-tab.js"></script>
<script src="<?=CME_BOOTSTRAP_URL?>bootstrap/js/bootstrap-tooltip.js"></script>
<script src="<?=CME_BOOTSTRAP_URL?>bootstrap/js/bootstrap-popover.js"></script>
<script src="<?=CME_BOOTSTRAP_URL?>bootstrap/js/bootstrap-button.js"></script>
<script src="<?=CME_BOOTSTRAP_URL?>bootstrap/js/bootstrap-collapse.js"></script>
<script src="<?=CME_BOOTSTRAP_URL?>bootstrap/js/bootstrap-carousel.js"></script>
<script src="<?=CME_BOOTSTRAP_URL?>bootstrap/js/bootstrap-typeahead.js"></script>

<script>

    $(document).ready( function() {

        $("input").addClass("input-block-level");
        $("#edit-submit").addClass("btn btn-large btn-primary");
        $("form").addClass("form-signin");
        <?php if ( VIEW_FILE == 'forgot-password.php' ) { ?>

        $("#edit-name").attr("placeholder", "Email Address");
        $("label[for='edit-name']").html('');
        $("div.form-item").prepend("<p>Please enter your email address below to request a new passowrd.  Once you submit, please check your email.  Thank you!</p>");
        $("input#edit-submit").attr("value", "E-Mail New Password");
        <?php } ?>

        <?php if ( VIEW_FILE == 'register.php' ) { ?>
        $(".registration_additional_information").hide();

        <?php } ?>

        <?php if ( VIEW_FILE == 'login.php' ) { ?>

        <?php } ?>
    });

</script>

</body>
</html>