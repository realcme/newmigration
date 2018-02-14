// Global killswitch
if (Drupal.jsEnabled) {
    $(document).ready(function () {

        if ((navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPod/i)) || (navigator.userAgent.match(/iPad/i))) {
            $(".has-sub").click(function () {
                $("#healthcoursenav ul li > ul").toggle();
            });
        }

    });

}