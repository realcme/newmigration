<div id="footer">
    <div id="copyright"> &copy; 2008-<?=date("Y");?> RealCME. All rights reserved.</div>
    <div id="bottom_links">
        <ul>
            <li class="first_link"><a href="/">Home</a></li>
            <li><a href="/cms/support-center">Support</a></li>
            <li><a href="/privacy.php">Privacy Statement</a></li>
            <li><a href="/tos.php">Terms of Use</a></li>
            <li><a href="/sitemap.php">Sitemap</a></li>
            <li><a href="/cms/contact-us">Contact Us</a></li>
        </ul>
    </div>
</div> <!-- Close Footer --> <?php if ($closure_region): ?>
<div id="closure-blocks"><?php print $closure_region; ?></div> <?php endif; ?> <?php print $closure; ?> </div> </div> <!-- /#page-inner, /#page -->
<script> $(document).ready(function () {
        $("a#login_link").hide(); //$(".listing-tabs").hide(); // Activity Menu Switch $(".listing-tabs").html(" "); $(".listing-tabs").append( $(".activity-nav") ); var pageTitle = "<?php echo $get_uri[3];?>"; switch(pageTitle) { case "password": $("h1.title").html("Request New Password") break; case "register": $("h1.title").html("Create Account") } <?php/* if ( $get_uri[2] == 'user' ) { ?> var actionAttr = $("form#user-login").attr('action'); $("form#user-login").attr('action', actionAttr+"?destination=listingall" ); var actionAttr = $("form#user-register").attr('action'); $("form#user-register").attr('action', actionAttr+"?destination=listingall" ); <?php } */?> // #8402, comment:4 $('#related-activities #related-activities-title').css('margin-top', 0); $('.node').find('.next-steps-related').css('float', 'left'); $('.node').find('.next-steps-related div:empty').each(function(){ $(this).hide(); }); }); </script> <?php if (!$user->uid && ( $get_uri[2] != 'node' ) ) { ?> <?php } ?> <?php if ( isset( $_SESSION['form_error']) ) { unset($_SESSION['form_error']); } ?>
