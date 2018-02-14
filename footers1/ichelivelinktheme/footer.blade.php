<div id="footer">
    <div id="footer-inner">
        <div id="footer-message">
            <center> <?php print $footer_message; ?><img src="<?php print $img_path ?>/img/footerlogo.png" alt=""
                                                         class="center"/></center>
        </div>
    </div>
</div> <!-- /#footer-inner, /#footer --> <?php if ($closure_region): ?>
<div id="closure-blocks"><?php print $closure_region; ?></div> <?php endif; ?> <?php print $closure; ?> </div>
<div id="iche-footer"><a target="ifrmContent" href="text/text_home_Copyright.aspx" onclick="linkOnClick('')"
                         class="bottom_nav" id="lnkCopyright"><span
                id="lblCopyrightDate">Copyright &copy; 1997&ndash;<?php print date('Y') ?> </span> Institute for
        Continuing Healthcare Education, Inc.</a> <a style="display: none;" class="bottom_nav" id="lnkTermsOfUse">Terms
        of use</a> <a style="display: none;" class="bottom_nav" id="lnkPrivacyPolicy">Privacy policy</a>&nbsp;&nbsp;
</div> </div> <!-- /#page-inner, /#page -->
