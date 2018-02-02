<div id="footer">
    <div id="footer-inner">
        <div id="footer-message">
            <div style="float:left; color: black">
                <small> Association of Reproductive Health Professionals - East<br/> 1901 L Street, NW, Suite 300,
                    Washington, DC 20036<br/> (202) 466-3825 | <a href="mailto:ARHP@arhp.org">ARHP@arhp.org</a></small>
            </div>
            <div style="float:left;padding-left:20px; color: black">
                <small> Association of Reproductive Health Professionals - West<br/> 1330 Broadway, Suite 1100, Oakland,
                    CA 96412<br/> (510) 986-8990 | <a href="mailto:ARHP@arhp.org">ARHP@arhp.org</a><br/></small>
            </div>
            <div style="clear: both;"><br/></div>
            <center> <?php print $footer_message; ?><img src="<?php print $img_path ?>/img/footerlogo.png" alt=""
                                                         class="center"/></center>
        </div>
    </div>
</div> <!-- /#footer-inner, /#footer --> <?php if ($closure_region): ?>
<div id="closure-blocks"><?php print $closure_region; ?></div> <?php endif; ?> <?php print $closure; ?> </div></div> <!-- /#page-inner, /#page -->
