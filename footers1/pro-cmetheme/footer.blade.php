<div id="footer">
    <div id="copyright"> &copy; 2008-<?=date("Y");?> RealCME. All rights reserved.</div>
    <div id="bottom_links">
        <ul>
            <li class="first_link"><a href="/">Home</a></li>
            <li><a href="/cms/support-center">Support</a></li>
            <li><a href="/privacy.php">Privacy Statement</a></li>
            <li><a href="/tos.php">Terms of Use</a></li>
            <li><a href="/sitemap.php">Sitemap</a></li>
            <li><a href="/cms/contact-us">Contact Us</a></li>
        </ul>
    </div> <!--BOF client footer -->
    <div id="footer-copyright"><p>&copy;Pro-CME Copyright <?php echo date("Y"); ?></p>
        <ul class="inline">
            <li><a href="http://pro-c.me/privacy" target="_blank">Privacy Policy</a></li>
            <li>|</li>
            <li><a href="http://pro-c.me/contactus" target="_blank">Contact Us</a></li>
        </ul>
    </div> <!--EOF footer --> </div> <!-- Close Footer --> <?php if ($closure_region): ?>
<div id="closure-blocks"><?php print $closure_region; ?></div> <?php endif; ?> <?php print $closure; ?> </div> </div> <!-- /#page-inner, /#page -->
