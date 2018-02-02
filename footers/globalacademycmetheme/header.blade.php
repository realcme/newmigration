<div id="footer">
    <div id="footer-inner">

        <div id="footer-message">
            <center>
                <?php print $footer_message; ?><img src="<?php print $img_path ?>/img/footerlogo.png" alt=""
                                                    class="center"/>
            </center>
        </div>

    </div>
</div> <!-- /#footer-inner, /#footer -->

<?php if ($closure_region): ?>
<div id="closure-blocks"><?php print $closure_region; ?></div>
<?php endif; ?>

<?php print $closure; ?>

</div></div> <!-- /#page-inner, /#page -->


<div id="game_footer">

    <div id="footer_area">
        <div id="footer_links">
            <div id="footer_lists">

                <div id="footer_list1" style="width:100%;">
                    <div style="width:1250px;float:left;padding-left:10px;">

                        <div style="width:205px;float:left;text-align:left;">
                            <a href="http://www.globalacademycme.com" target="_new"><img
                                        src="<?php print $img_path ?>/img/game/footer.gif" border="0"
                                        style="max-width: 200px;"></a>
                        </div>
                    </div>
                </div><!-- end footer_list1 -->

                <br/>

                <div id="footer_list1">
                    <div id="c5216" class="csc-default">
                        <div class="csc-header csc-header-n1"><h2>About Us</h2></div>
                        <ul class="csc-menu csc-menu-def">
                            <li><a href="http://www.globalacademycme.com/page/about-us" title="About Us">About Us</a>
                            </li>
                            <li><a href="http://www.globalacademycme.com/page/contact-us" title="Contact Us">Contact
                                    Us</a></li>
                            <li><a href="http://www.globalacademycme.com/page/copyright-and-disclaimers"
                                   title="Privacy Policy">Copyright & Disclaimers</a></li>
                            <li><a href="http://live-frontline-game.pantheonsite.io/page/privacy-policy"
                                   title="Privacy Policy">Privacy Policy</a></li>
                        </ul>

                        <br/>
                        <br/>


                    </div>

                </div><!-- end footer_list2 -->

                <div id="footer_list1">
                    <div id="c5216" class="csc-default">
                        <div class="csc-header csc-header-n1"><h2>Follow Us</h2></div>
                        <ul class="csc-menu csc-menu-def">
                            <li><a href="https://twitter.com/GlobalAcadCME" target="_blank" title="About Us">Twitter</a>
                            </li>
                            <li><a href="https://www.facebook.com/GlobalAcademyCME" target="_blank" title="Contact Us">Facebook</a>
                            </li>
                            <li><a href="http://www.globalacademycme.com/rss" target="_blank" title="Privacy Policy">RSS
                                    Feed</a></li>
                        </ul>
                    </div>

                </div>

            </div><!-- end footer_lists -->
            <div class="footer_copyright">All content copyright &copy; 2017 Global Academy for Medical Education LLC.
                All rights reserved. No reproduction, transmission or display is permitted without the written
                permission.
            </div>
        </div><!-- footer_links -->
    </div><!-- footer_area -->

</div><!-- game_footer -->

<script>
    var dom = {};
    dom.query = jQuery.noConflict(true);
    dom.query(document).ready(function () {

        dom.query(".col a").live('click', function () {
            var url_segment = dom.query(this).attr('href');
            dom.query(location).attr('href', 'http://www.globalacademycme.com/' + url_segment);
            return false;
        });
    });

</script>

</body>
</html>
