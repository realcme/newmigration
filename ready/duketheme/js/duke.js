//Global killswitch
if (Drupal.jsEnabled) {
    $(document).ready(function () {
        $("#dukenavigation li.expanded").hover(
            function () {
                $(this).addClass("sfHover");
                $("#dukenavigation li.sfHover > ul.menu").show("fast");
            },
            function () {
                $("#dukenavigation li.expanded > ul.menu").hide();
                $("#dukenavigation li.expanded").removeClass("sfHover");
            }
        );
    });
}