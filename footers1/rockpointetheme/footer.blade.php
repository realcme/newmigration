<div id="footer">
    <div id="footer-inner">
        <div id="footer-message">
            <center> <?php print $footer_message; ?><img src="<?php print $img_path ?>/img/footerlogo.png" alt=""
                                                         class="center"/></center>
        </div>
    </div>
</div> <!-- /#footer-inner, /#footer --> <?php if ($closure_region): ?>
<div id="closure-blocks"><?php print $closure_region; ?></div> <?php endif; ?> <?php print $closure; ?> </div></div> <!-- /#page-inner, /#page --> </div><!-- MasterContent -->
<script> function popUpWin(path) { //alert("popUpWin: " + path); var sURL = path; var features = 'toolbar=0,location=0,status=1,menubar=0,scrollbars=1,resizable=1,width=1024,height=800,left=' + top.window.screenLeft + ',top=' + top.window.screenTop; windownew = window.open(sURL, "new_window", features); try { windownew.focus(); } catch (ex) { } } </script>
<div class="MasterFooter"> © 2012 Rockpointe Corporation | <a
            href="javascript:top.popUpWin('http://www.rockpointe.com/INFO_CONTENT/PrivacyStatement.aspx', 700, 400)">Privacy
        Statement</a> | <a
            href="javascript:top.popUpWin('http://www.rockpointe.com/INFO_CONTENT/LegalInformation.aspx', 700, 400)">Legal
        Information</a></div> </div> <!-- Master -->
