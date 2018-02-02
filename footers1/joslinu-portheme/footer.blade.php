<div id="footer">
    <div id="logo-footer-sponsor">
        <div>Auspiciado por:</div>
        <img src="<?php print $img_path ?>/img/logo-footer-sponsor.png" alt="AstraZeneca"/></div>
    <div id="logo-footer" style="text-align: center"><img src="<?php print $img_path ?>/img/logo-footer-joslin.png"
                                                          alt="Joslin"/></div>
    <div id="footer-inner">
        <div id="footer-message"><?php print $footer_message; ?></div>
    </div>
</div> <!-- /#footer-inner, /#footer --> <?php if ($closure_region): ?>
<div id="closure-blocks"><?php print $closure_region; ?></div> <?php endif; ?> <?php print $closure; ?> </div></div> <!-- /#page-inner, /#page -->
