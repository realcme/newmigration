//Global killswitch
if (Drupal.jsEnabled) {
    $(document).ready(function () {
        $("#featured-bg-outer li.expanded").hover(
            function () {
                $(this).addClass("sfHover");
                $("#featured-bg-outer li.sfHover > ul.menu").show("fast");
            },
            function () {
                $("#featured-bg-outer li.expanded > ul.menu").hide();
                $("#featured-bg-outer li.expanded").removeClass("sfHover");
            }
        );
    });
}