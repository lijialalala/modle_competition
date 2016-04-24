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
                    500);
            },
            function () {
                JQuery(this).find('a').animate({
                        'top': 150
                    },
                    {
                        duration: 500,
                        complete: function () {
                            JQuery(this).css('top', -250);
                        }
                    });
            });
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
    subbtn_r = JQuery(".regist_page .sub_btn"),
    subbtn_l = JQuery(".login_page .sub_btn"),
    input_l = JQuery(".login_page .line input"),
    input_r = JQuery(".regist_page .line input"),
    user_l = JQuery(".login_page .user_name"),
    password_l = JQuery(".login_page .password"),
    repassword_l = JQuery(".login_page .repassword"),
    line_l = JQuery(".login_page .line"),
    warnning_l = JQuery(".login_page .warnning"),
    user_r = JQuery(".regist_page .user_name"),
    password_r = JQuery(".regist_page .password"),
    repassword_r = JQuery(".regist_page .repassword"),
    line_r = JQuery(".regist_page .line"),
    warnning_r = JQuery(".regist_page .warnning")
    ;

var onloadDifferentPage = function(){
    /*
    首页成员页的切换函数
     */
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
    /*
    点击登录注册按钮
    form里登录/注册的切换函数
     */
    login_btn.bind("click",function(){
        main.removeClass('none');
        mask.removeClass('none');
    });
    var logAndRegist = function(btn1,page1,btn2,page2){
        btn1.bind("click",function(){
            btn1.addClass('activeli');
            btn2.removeClass('activeli');
            page1.removeClass('none');
            page2.addClass('none');
        });
    };
    logAndRegist(log,log_page,regist,regist_page);
    logAndRegist(regist,regist_page,log,log_page);
    /*
    退出
     */
    var closeForm = function(){
        var warnning = JQuery(".warnning");
        main.addClass('none');
        mask.addClass('none');
        warnning.html("");
        input_l.val("");
        input_r.val("");
    };
    close.bind("click",closeForm);
/**
 * 登录
 */
    /*输入时格式验证*/
    var loginValidate = function(){
        input_l.bind("keydown",function(){
            warnning_l.html("");
            if(user_l.val().length>14||user_l.val().length<4){
                warnning_l.append("<p style='font-size:10px;color:#c83434;float:left;margin:10px auto auto 20px;'>登录失败：帐号名应为4-14长度内的！</p>");
            }
            if(password_l.val().length>14||password_l.val().length<6){
                warnning_l.append("<p style='font-size:10px;color:#c83434;float:left;margin:10px auto auto 20px;'>登录失败：密码应为为6-14长度内的！</p>");
            }
        });
    };
    loginValidate();
    /*点击提交*/
    subbtn_l.bind("click",function(){
        /*JQuery.post("./login.php",{loginname:user_l,loginpassword:password_l},function(data){
           if(name!==user_l.val()){
                warnning_l.append("<p style='font-size:10px;color:#c83434;float:left;margin:10px auto auto 20px;'>登录失败：不存在这个此用户！</p>");
           }
           if(pwd!==password_l.val()){
                warnning_l.append("<p style='font-size:10px;color:#c83434;float:left;margin:10px auto auto 20px;'>登录失败：密码输入错误！</p>");
           }
        },'json');*/
        JQuery.post("./doAction.php",{singer_name:user_l,singer_votes:password_l},function(data){
                //这里你可以处理获取的数据。我使用是json 格式。你也可以使用其它格式。或者为空，让它自己判断得了
                console.log(data);
                },'json');

        // 空表单
        if( !(user_l.val()&&password_l.val()) ){
            warnning_l.append("<p style='font-size:10px;color:#c83434;float:left;margin:10px auto auto 20px;'>登录失败：所有信息都是需要填写的！</p>");
        }else{
           closeForm();
        }

    });


/**
 * 注册
 */
    /*输入时格式验证*/
    var registValidate = function(){
        input_r.bind("keydown",function(){
            warnning_r.html("");
            if(user_r.val().length>14||user_r.val().length<4){
                warnning_r.append("<p style='font-size:10px;color:#c83434;float:left;margin:10px auto auto 20px;'>注册失败：帐号名应为4-14长度内的！</p>");
            }
            if(password_r.val().length>14||password_r.val().length<6){
                warnning_r.append("<p style='font-size:10px;color:#c83434;float:left;margin:10px auto auto 20px;'>注册失败：密码应为为6-14长度内的！</p>");
            }
        });
    };
    registValidate();
    /*点击提交*/
    subbtn_r.bind("click",function(){
        if(repassword_r.val()!=password_r.val()){
            warnning_r.append("<p style='font-size:10px;color:#c83434;float:left;margin:10px auto auto 20px;'>注册失败：两次输入不同，请检查第二次密码输入！</p>");
        }else{
              JQuery.post("./res.php",{name:user_r,pwd:password_r},function(data){
             },'json');

            // 空表单
            if( !(user_r.val()&&password_r.val()&&repassword_r.val()) ){
                warnning_r.append("<p style='font-size:10px;color:#c83434;float:left;margin:10px auto auto 20px;'>注册失败：所有信息都是需要填写的！</p>");
            }else{
                closeForm();
            }

        }
    });

};
onloadDifferentPage();
