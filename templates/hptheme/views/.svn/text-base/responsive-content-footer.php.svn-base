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


        $("div.form-item").addClass("form-group");
        $("input").addClass("input-block-level");
        $("#edit-submit").addClass("btn btn-large btn-primary");
        $("form").addClass("form-signin");

        <?php if ( VIEW_FILE == 'user-password-content.php' ) { ?>



        <?php //if ( isset($_POST['name']) ) { ?>
       <?php /*
        formAlert = '';
        <?php $formAlert = ''; ?>
            <?php foreach ( $_SESSION['form_error']['error'] as $val ) { ?>
            $formAlert .= '<div class="alert alert-danger" role="alert"><strong>Invalid Email</strong></div>';

            <?php } ?>
            formAlert = <?php echo $formAlert; ?>
        <?php } else { ?>
            formAlert = '';
        <?php } ?> */ ?>

        $("#edit-name").attr("placeholder", "Email Address");
        $("label[for='edit-name']").html('');
        $("div.form-item").prepend("<p>If you are an EpocratesCME registered user and you're visiting RealCME Health Professional for the first time, welcome! Your account is available to you as always. Just use the same email address you used on EpocratesCME and request a new password for security purposes.<br /><br />Please enter your email address below to request a new password.  Once you submit, please check your email.  Thank you!</p>");
        $("input#edit-submit").attr("value", "E-Mail New Password");


        <?php } ?>

        <?php if ( VIEW_FILE == 'user-register-content.php' ) { ?>

        $(".registration_additional_information").hide();
        /* var actionAttr = $("form#user-register").attr('action');
        $("form#user-register").attr('action', actionAttr+"?destination=listingall" );*/

        <?php } ?>

        <?php/* if ( VIEW_FILE == 'user-content.php' && !$user->uid ) { ?>
        $("form").attr("action", "/cms/user/<?=$user->uid;?>/edit/?destination=listingall");
        <?php }*/ ?>
    });

</script>
</body>
</html>