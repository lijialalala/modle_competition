var JQuery = jQuery.noConflict();
JQuery(function () {
    var nb = JQuery('#navbtn');
    var n = JQuery('#topnav nav');

    JQuery(window).on('resize', function () {

        if (JQuery(this).width() < 570 && n.hasClass('keep-nav-closed')) {
            // if the nav menu and nav button are both visible,
            // then the responsive nav transitioned from open to non-responsive, then back again.
            // re-hide the nav menu and remove the hidden class
            JQuery('#topnav nav').hide().removeAttr('class');
        }
        if (nb.is(':hidden') && n.is(':hidden') && JQuery(window).width() > 569) {
            // if the navigation menu and nav button are both hidden,
            // then the responsive nav is closed and the window resized larger than 560px.
            // just display the nav menu which will auto-hide at <560px width.
            JQuery('#topnav nav').show().addClass('keep-nav-closed');
        }
    });
    JQuery('#navbtn').on('click', function (e) {
        e.preventDefault();
        JQuery("#topnav nav").slideToggle(350);
    });

});