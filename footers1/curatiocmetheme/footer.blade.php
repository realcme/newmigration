<div id="footer">
    <div id="footer-inner">
        <div id="footer-message">
            <center> <?php print $footer_message; ?><img src="<?php print $img_path ?>/img/footerlogo.png" alt=""
                                                         class="center"/></center>
        </div>
    </div>
</div> <!-- /#footer-inner, /#footer -->
<div id="curatio-footer">
    <div class="wrap clearfix"><span class="left">Curatio CME Institute is accredited by the Accreditation Council for Continuing Medical Education (ACCME) to provide continuing medical education for physicians.</span>
        <span class="right">&copy; <?php print date('Y');?> Curatio CME Institute<br/> <a
                    href="http://www.curatiocme.com/site/?LinkServID=940B9082-5056-A25C-5635C5537CCBA743 ">Contact Us</a></span>
    </div>
    <div style="clear: both"></div>
</div> <?php if ($closure_region): ?>
<div id="closure-blocks"><?php print $closure_region; ?></div> <?php endif; ?> <?php print $closure; ?> </div></div> <!-- /#page-inner, /#page -->
