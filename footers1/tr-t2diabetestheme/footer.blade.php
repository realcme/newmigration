<div id="footer">
    <div id="footer-inner">
        <div id="footer-message">
            <center> <?php print $footer_message; ?><img src="<?php print $img_path ?>/img/footerlogo.png" alt=""
                                                         class="center"/></center>
        </div>
        <img src="<?php print $img_path ?>/img/ada_footer.jpg" usemap="#Map" border="0">
        <map name="Map" id="Map">
            <area shape="rect" coords="66,11,281,75" href="http://www.pimed.com/" target="_blank"/>
            <area shape="rect" coords="282,11,444,75" href="http://www.accelmed.org/" target="_blank"/>
            <area shape="rect" coords="517,8,681,73" href="http://www.lilly.com/Pages/home.aspx " target="_blank"/>
            <area shape="rect" coords="758,18,923,64" href="http://thomsonreuters.com/products_services/healthcare/ "
                  target="_blank"/>
            <area shape="rect" coords="276,72,283,73" href="#"/>
        </map>
    </div>
</div> <!-- /#footer-inner, /#footer --> <?php if ($closure_region): ?>
<div id="closure-blocks"><?php print $closure_region; ?></div> <?php endif; ?> <?php print $closure; ?> </div></div> <!-- /#page-inner, /#page -->
