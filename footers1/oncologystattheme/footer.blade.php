<div id="footer">
    <div id="footer-inner">
        <div id="footer-message">
            <center> <?php print $footer_message; ?><img src="<?php print $img_path ?>/img/footerlogo.png" alt=""
                                                         class="center"/></center>
        </div>
    </div>
</div> <!-- /#footer-inner, /#footer -->
<div id="user">
    <ul>
        <li class="cme-home"><a href="http://www.oncologystat.com/cme/index.html">CME Home</a></li>
    </ul>
</div>
<div id="copyright"></div> <?php if ($closure_region): ?>
<div id="closure-blocks"><?php print $closure_region; ?></div> <?php endif; ?> <?php print $closure; ?> </div></div> <!-- /#page-inner, /#page -->
