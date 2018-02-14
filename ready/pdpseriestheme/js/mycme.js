//Global killswitch
if (Drupal.jsEnabled) {
    $(document).ready(function () {
        $(".topNavItem").hover(
            function () {
                $(".dropdown4col").hide();
                $(this).parent().children("div").show();
            },
            function () {
            }
        );
        $(".dropdown4col").hover(
            function () {
            },
            function () {
                $(this).hide();
            }
        );
        $("#searchForm").submit(function (event) {
            event.preventDefault();
            var value = $("input:first").val();
            if (value.length > 0) {
                window.location = 'http://www.mycme.com/search/' + encodeURIComponent(value) + '/';
            }
            return false;
        });
        $("#searchSubmit").click(function () {
            $("#searchForm").submit();
        });
    });
}