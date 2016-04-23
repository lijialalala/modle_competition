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

        JQuery('.artist_l li').each(function (m) {
        JQuery(this).find('a').css('top', -250);
        JQuery(this).hover(function () {
                JQuery(this).find('a').animate({
                        'top': '0'
                    },
                    500)
            },
            function () {
                JQuery(this).find('a').animate({
                        'top': 150
                    },
                    {
                        duration: 500,
                        complete: function () {
                            Jquery(this).css('top', -250)
                        }
                    })
            })
    });
    });
var home = JQuery(".home"),
    member = JQuery(".member"),
    vote = JQuery(".vote"),
    hearder = JQuery(".header_bg"),
    homepage = JQuery("#home_page"),
    memberpage = JQuery("#member_page"),
    votepage = JQuery("#vote_page"),
    more = JQuery(".member_more"),
    login_btn = JQuery(".login_btn"),
    main = JQuery(".main"),
    mask = JQuery(".mask"),
    close = JQuery(".close"),
    log = JQuery(".log"),
    regist = jQuery(".regist"),
    log_page = JQuery(".login_page"),
    regist_page = JQuery(".regist_page"),
    sub_btn = JQuery(".sub_btn"),
    user = JQuery(".user_name"),
    password = JQuery(".password"),
    repassword = JQuery(".repassword"),
    line = JQuery(".line"),
    template = JQuery(".template")
    ;

var onloadDifferentPage = function(){
    var changePage = function(btn,page){
        btn.bind("click",function(){
            JQuery(".home,.member,.vote").removeClass("active");
            btn.addClass("active");
            JQuery("#home_page,#member_page,#vote_page").css("display","none");
            page.css("display","block");    
        });
    };
    changePage(home,homepage);
    changePage(vote,votepage);
    JQuery(".member,.member_more").each(function(){
        JQuery(this).bind("click",function(){
            JQuery(".home,.member,.vote").removeClass("active");
            member.addClass("active");
            JQuery("#home_page,#member_page,#vote_page").css("display","none");
            memberpage.css("display","block");   
        });
    });
    
    login_btn.bind("click",function(){
        main.removeClass('none');
        mask.removeClass('none');
        

    });

    log.bind("click",function(){
        log.addClass('activeli');
        regist.removeClass('activeli');
        log_page.removeClass('none');
        regist_page.addClass('none');
    });
    regist.bind("click",function(){
        regist.addClass('activeli');
        log.removeClass('activeli');
        regist_page.removeClass('none');
        log_page.addClass('none');
    });
    close.bind("click",function(){
        main.addClass('none');
        mask.addClass('none');
    });
    sub_btn.bind("click",function(){
        if(!user.val()){
            template.append("<p style='font-size:10px;color:#c83434;float:left;margin:10px auto auto 20px;'>注册失败：请输入帐号名！</p>");
        }
        if(!password.val()){
            template.append("<p style='font-size:10px;color:#c83434;float:left;margin:10px auto auto 20px;'>注册失败：请输入密码！</p>");
        }
        if(!repassword.val()||repassword.val()!==password.val()){
            template.append("<p style='font-size:10px;color:#c83434;float:left;margin:10px auto auto 20px;'>注册失败：请检查第二次密码输入！</p>");
        }
    })
    // JQuery.post("./doAction.php",{singer_name:baby,singer_votes:num},function(data){
    // console.log(baby);
    // },'json');

    
};
onloadDifferentPage();