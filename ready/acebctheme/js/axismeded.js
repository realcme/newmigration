//Global killswitch
if (Drupal.jsEnabled) {
    $(document).ready(function () {
        $(".topNavItem").hover(
            function () {
                $(".subnavdropdown").hide();
                $(this).parent().children("div").show();
            },
            function () {
            }
        );
        $(".subnavdropdown").hover(
            function () {
            },
            function () {
                $(this).hide();
            }
        );
    });
}