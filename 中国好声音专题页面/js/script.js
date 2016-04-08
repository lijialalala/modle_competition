$(document).ready(function () {
    $('.artist_l li').each(function (m) {
        $(this).find('a').css('top', -250);
        $(this).hover(function () {
                $(this).find('a').animate({
                        'top': '0'
                    },
                    300)
            },
            function () {
                $(this).find('a').animate({
                        'top': 150
                    },
                    {
                        duration: 300,
                        complete: function () {
                            $(this).css('top', -250)
                        }
                    })
            })
    });
});