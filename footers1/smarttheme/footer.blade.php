<div id="footer">
    <div id="footerLogo"><img src="<?php print $img_path ?>/img/smart_footer_logo.png" alt="dkb"> <img
                src="<?php print $img_path ?>/img/smart_pim_footer_logo.png" akt="pim"></div>
    <div id="copyright"><a href="http://dkbmed.com/#privacy" target_"blank">privacy</a> | &copy; <?=date("Y");?>
        dkbmed<br/></div>
    <div id="bottom_links"></div>
</div> <!-- Close Footer --> <?php if ($closure_region): ?>
<div id="closure-blocks"><?php print $closure_region; ?></div> <?php endif; ?> <?php print $closure; ?> </div> </div> <!-- /#page-inner, /#page -->
