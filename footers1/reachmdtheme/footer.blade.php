<div id="footer">
    <div id="footer-inner">
        <div id="footer-message">
            <center> <?php print $footer_message; ?><img src="<?php print $img_path ?>/img/footerlogo.png" alt=""
                                                         class="center"/></center>
        </div>
        <img src="<?php print $img_path ?>/img/reachmd_footer.gif" alt="" usemap="#footer_img"/>
        <map name="footer_img">
            <area shape="rect" coords="385,35,565,80" href="http://www.reachmd.com" alt=""/>
        </map>
    </div>
</div> <!-- /#footer-inner, /#footer --> <?php if ($closure_region): ?>
<div id="closure-blocks"><?php print $closure_region; ?></div> <?php endif; ?> <?php print $closure; ?> </div></div> <!-- /#page-inner, /#page -->
