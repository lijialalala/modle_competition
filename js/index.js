var JQuery = jQuery.noConflict();
    JQuery(document).ready(function () {
        JQuery('#da-slider').cslider({
            autoplay: true,
            bgincrement: 450
        });

        var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
        };
        JQuery().UItoTop({easingType: 'easeOutQuart'});
    });
var home = JQuery(".home"),
    member = JQuery(".member"),
    vote = JQuery(".vote"),
    hearder = JQuery(".header_bg"),
    homepage = JQuery("#home_page"),
    memberpage = JQuery("#member_page"),
    votepage = JQuery("#vote_page"),
    more = JQuery(".member_more");

var onloadDifferentPage = function(){
    home.bind("click",function(){
        JQuery(".home,.member,.vote").removeClass("active");
        home.addClass("active");
        JQuery("#home_page,#member_page,#vote_page").css("display","none");
        homepage.css("display","block");    
    });

    JQuery(".member,.member_more").each(function(){
        JQuery(this).bind("click",function(){
            JQuery(".home,.member,.vote").removeClass("active");
            member.addClass("active");
            JQuery("#home_page,#member_page,#vote_page").css("display","none");
            memberpage.css("display","block");   
        });
    });
    
    vote.bind("click",function(){
        JQuery(".home,.member,.vote").removeClass("active");
        vote.addClass("active");
        JQuery("#home_page,#member_page,#vote_page").css("display","none");
        votepage.css("display","block");   
    });
};
onloadDifferentPage();