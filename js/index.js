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
    warnning_r = JQuery(".regist_page .warnning"),
    postform1 = JQuery(".postform1"),
    post_name = JQuery(".post_name"),
    post_email = JQuery(".post_email"),
    post_para = JQuery(".post_para"),
    post_btn = JQuery(".post_btn");

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
            if(user_l.val().trim().length!=0){
                reg=/^[a-zA-Z]+$/;
                if(!reg.test(user_l.val().trim()) ){
                warnning_l.append("<p style='font-size:10px;color:#c83434;float:left;margin:10px auto auto 20px;'>*账号名应为数字或字母，不能含有符号！</p>");
                }
            }
            if(password_l.val().length>14||password_l.val().length<6){
                warnning_l.append("<p style='font-size:10px;color:#c83434;float:left;margin:10px auto auto 20px;'>*密码应为为6-14长度内的！</p>");
            }
        });
    };
    loginValidate();
    /*点击提交*/
    subbtn_l.bind("click",function(){
        warnning_l.html("");
        JQuery.post("./login.php",{loginname:user_l.val(),loginpassword:password_l.val()},function(data){
           if(data){
             alert("登陆成功");
                warnning_l.append("<p style='font-size:10px;color:#c83434;float:left;margin:10px auto auto 20px;'>登录成功!</p>");
           }else{
             alert("登陆失败");
                warnning_l.append("<p style='font-size:10px;color:#c83434;float:left;margin:10px auto auto 20px;'>登录失败：用户名不存在或者密码输入错误，请检查后重新输入！</p>");
           }
          location.reload(true);
        },'json');

        // 空表单
        if( !(user_l.val()&&password_l.val()) ){
            warnning_l.append("<p style='font-size:10px;color:#c83434;float:left;margin:10px auto auto 20px;'>*所有信息都是需要填写的！</p>");
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
            if(user_r.val().trim().length!=0){
                reg=/^[a-zA-Z]+$/;
                if(!reg.test(user_r.val().trim()) ){
                warnning_r.append("<p style='font-size:10px;color:#c83434;float:left;margin:10px auto auto 20px;'>*账号名应为数字或字母，不能含有符号！</p>");
                }
            }
            if(password_r.val().length>14||password_r.val().length<6){
                warnning_r.append("<p style='font-size:10px;color:#c83434;float:left;margin:10px auto auto 20px;'>*密码应为为6-14长度内的！</p>");
            }
        });
    };
    registValidate();
    /*点击提交*/
    subbtn_r.bind("click",function(){
        warnning_r.html("");
        if(repassword_r.val()!=password_r.val()){
            warnning_r.append("<p style='font-size:10px;color:#c83434;float:left;margin:10px auto auto 20px;'>注册失败：两次输入不同，请检查第二次密码输入！</p>");
        }else{
              JQuery.post("./res.php",{name:user_r.val(),password:password_r.val()},function(data){
                alert("成功注册");
             },'json');

            // 空表单
            if( !(user_r.val()&&password_r.val()&&repassword_r.val()) ){
                warnning_r.append("<p style='font-size:10px;color:#c83434;float:left;margin:10px auto auto 20px;'>注册失败：所有信息都是需要填写的！</p>");
            }else{
                closeForm();
            }

        }
    });
/*
 * 留言form提交
 */
    post_btn.bind("click",function(){
        //获取不同form的class名中的数字 从1-7 七个表单

        event.preventDefault();
        var num = JQuery(this).parent().parent().parent().attr("class").replace(/[^0-9]/ig,"");
        if(post_para.val()!="*Message"){
            JQuery.post("./leaveMessage.php",{para:post_para.val(),which:num},function(data){
              alert("插入成功");
              location.reload(true);
            },'json');
        }
    });

};

onloadDifferentPage();
