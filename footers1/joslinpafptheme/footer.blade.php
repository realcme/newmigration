<div id="footer">
    <div id="footer-inner">
        <div id="footer-message"><?php print $footer_message; ?></div>
        <div id="footer-brand">
            <small> Copyright &copy; Joslin Diabetes Center, Pennsylvania Academy of Family Physicians Foundation,
                Healthcourse, Inc. and Integrated Learning Partners, LLC. 2013 - 2015. All Rights Reserved. <br/> <a
                        href="<?php print base_path()?>privacypolicy">Privacy Policy</a>&nbsp; <a
                        href="<?php print base_path()?>termsofservice">Terms of Service</a>&nbsp; <a
                        href="<?php print base_path()?>support-center">Support</a></small>
            <br/><br/></div>
    </div> <!-- /#footer-inner, /#footer --> <?php if ($closure_region): ?>
    <div id="closure-blocks"><?php print $closure_region; ?></div> <?php endif; ?> <?php print $closure; ?>
</div></div> <!-- /#page-inner, /#page -->
