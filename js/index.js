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
    input_l = JQuery(".login_page .line input"),
    input_r = JQuery(".regist_page .line input")
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
    /**
     * 登录 
     */ 
    input_l.bind("keydown",function(){
        var user = JQuery(".login_page .user_name"),
            password = JQuery(".login_page .password"),
            repassword = JQuery(".login_page .repassword"),
            line = JQuery(".login_page .line"),
            warnning = JQuery(".login_page .warnning");
        warnning.html("");    
        if(user.val().length>14||user.val().length<4){
            warnning.append("<p style='font-size:10px;color:#c83434;float:left;margin:10px auto auto 20px;'>登录失败：帐号名应为4-14长度内的！</p>");
        }
        if(password.val().length>14||password.val().length<6){
            warnning.append("<p style='font-size:10px;color:#c83434;float:left;margin:10px auto auto 20px;'>登录失败：密码应为为6-14长度内的！</p>");
        }
        JQuery.get("./doAction.php",{name,pwd},function(data){
           if(name!==user.val()){
                warnning.append("<p style='font-size:10px;color:#c83434;float:left;margin:10px auto auto 20px;'>登录失败：不存在这个此用户！</p>");
           }
           if(pwd!==password.val()){
                warnning.append("<p style='font-size:10px;color:#c83434;float:left;margin:10px auto auto 20px;'>登录失败：密码输入错误！</p>");
           }
        },'json');
    });
    /**
     * 注册 
     */
    input_r.bind("keydown",function(){
        var user = JQuery(".regist_page .user_name"),
            password = JQuery(".regist_page .password"),
            repassword = JQuery(".regist_page .repassword"),
            line = JQuery(".regist_page .line"),
            warnning = JQuery(".regist_page .warnning");
        warnning.html("");    
        if(user.val().length>14||user.val().length<4){
            console.log(user.val());
            console.log(user.val().length);
            warnning.append("<p style='font-size:10px;color:#c83434;float:left;margin:10px auto auto 20px;'>注册失败：帐号名应为4-14长度内的！</p>");
        }
        if(password.val().length>14||password.val().length<6){
            warnning.append("<p style='font-size:10px;color:#c83434;float:left;margin:10px auto auto 20px;'>注册失败：密码应为为6-14长度内的！</p>");
        }
        if(repassword.val()!==password.val()){
            warnning.append("<p style='font-size:10px;color:#c83434;float:left;margin:10px auto auto 20px;'>注册失败：两次输入不同，请检查第二次密码输入！</p>");
        }
        JQuery.post("./doAction.php",{name:user,pwd:password},function(data){
        },'json');
    });  
      
    close.bind("click",function(){
        var warnning = JQuery(".warnning");
        main.addClass('none');
        mask.addClass('none');
        warnning.html("");
        input_l.val("");
    });
    

    
};
onloadDifferentPage();