<?php
require_once"db.php";
function fetchAll($sql,$result_type=MYSQL_ASSOC){
	$result=mysql_query($sql);
	while(@$row=mysql_fetch_array($result,$result_type)){
		$rows[]=$row;
	}
	return $rows;
}
	mysql_connect("localhost:3306","root","lsc1995")or die("数据库连接失败Error:".mysql_errno().":".mysql_error());
	mysql_set_charset("utf8");
	mysql_select_db("vote") or die("指定数据库打开失败");
	mysql_query("set character set 'utf8'");
	mysql_query("set names 'utf8'");
	$sql="SELECT * FROM `vote` WHERE 1";
	$rows=fetchAll($sql);
	$name=array();
	$num=array();
	$i=0;
	foreach($rows as $row){
		$name[$i]=$row['name'];
		$num[$i]=$row['num'];
		$i++;
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>第四季《我是歌手》投票</title>

    <link type="text/css" rel="stylesheet" href="css/vote.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="css/style.min.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript">
    var JQuery = jQuery.noConflict();
        JQuery(document).ready(function () {
            JQuery(".artist_l li .cvote").click(function () {
                var nowdo = JQuery(this);
                //歌手名
                var baby = nowdo.parent().parent().find(".tag_txt").html();
                //票数
                var nowvote = nowdo.parent().find(".cvotenum b").html();
		        var num=parseInt(nowvote)+1;
                nowdo.parent().find(".cvotenum b").html(parseInt(nowvote) + 1);
                alert("亲！您刚刚为第四季《我是歌手》的" + baby + "投了一票！谢谢您的投票！");
                JQuery.post("./doAction.php",{singer_name:baby,singer_votes:num},function(data){
                        //这里你可以处理获取的数据。我使用是json 格式。你也可以使用其它格式。或者为空，让它自己判断得了
                        console.log(data);
                        },'json');
            });
            /*登录点击提交*/
            subbtn_l.bind("click",function(){
                warnning_l.html("");
                JQuery.post("./login.php",{loginname:user_l.val(),loginpassword:password_l.val()},function(data){
                    console.log(data+"");
                   if(data){
                        warnning_l.append("<p style='font-size:10px;color:#c83434;float:left;margin:10px auto auto 20px;'>登录成功!</p>");
                   }else{
                        warnning_l.append("<p style='font-size:10px;color:#c83434;float:left;margin:10px auto auto 20px;'>登录失败：用户名不存在或者密码输入错误，请检查后重新输入！</p>");
                   }
                },'json');

                // 空表单
                if( !(user_l.val()&&password_l.val()) ){
                    warnning_l.append("<p style='font-size:10px;color:#c83434;float:left;margin:50px auto auto 20px;'>*所有信息都是需要填写的！</p>");
                }else{
                   closeForm();
                }
            });

            /*注册点击提交*/
             subbtn_r.bind("click",function(){
                warnning_r.html("");
                if(repassword_r.val()!=password_r.val()){
                    warnning_r.append("<p style='font-size:10px;color:#c83434;float:left;margin:10px auto auto 20px;'>注册失败：两次输入不同，请检查第二次密码输入！</p>");
                }else{
                      JQuery.post("./res.php",{name:user_r.val(),password:password_r.val()},function(data){

                     },'json');

                    // 空表单
                    if( !(user_r.val()&&password_r.val()&&repassword_r.val()) ){
                        warnning_r.append("<p style='font-size:10px;color:#c83434;float:left;margin:50px auto auto 20px;'>注册失败：所有信息都是需要填写的！</p>");
                    }else{
                        closeForm();
                    }

                }
            });
        });
    </script>
</head>
<body>
<div class="header_bg">
    <div class="main none">
        <div class="content">
            <ul>
                <li class="regist activeli">注册</li>
                <li class="log">登录</li>
            </ul>
            <i class="close card__btn-close fa fa-times"></i>
            <div class="wrapper">
              <div class="login_page template none">
                  <div class="line">
                      <span>帐号:</span>
                        <input type="text" class="user_name" placeholder="请输入帐号名" />
                  </div>
                  <div class="line">
                      <span>密码:</span>
                        <input type="password" class="password" placeholder="请输入密码" />
                  </div>
                  <input type="submit" class="sub_btn" value="登录" />
                  <div class="warnning"></div>
              </div>
              <div class="regist_page template">
                  <div class="line">
                      <span>帐号:</span>
                        <input type="text" class="user_name" placeholder="请输入帐号名" />
                  </div>
                  <div class="line">
                      <span>密码:</span>
                        <input type="password" class="password" placeholder="请输入密码" />
                  </div>
                  <div class="line">
                      <span>再次输入密码:</span>
                        <input type="password" class="repassword" placeholder="请再次输入密码" />
                  </div>
                  <input type="submit" class="sub_btn" value="注册" />
                  <div class="warnning"></div>
              </div>
            </div>
        </div>
        <div class="mask"></div>
    </div>
    <div class="wrap">
        <div id="content">
            <header id="topnav">
                <nav>
                    <ul>
                        <li><a class="scroll" href="index.php">主页</a></li>
                        <li><a class="scroll" href="member.php">比赛选手</a></li>
                        <li><a class="scroll" href="http://y.qq.com/topic/voice4/index.html?ADTAG=baidualdhsy"
                               target="_blank">音乐试听</a></li>
                        <li class="active"><a class="scroll" href="vote.php">为他投票</a></li>
                        <li><a class="scroll" href="#contact">联系我们</a></li>
												<?php if($_COOKIE['username']==null){ ?>
												<li><a class="scroll login_btn" href="#">注册/登录</a></li>
												<?php }else{ ?>
													<li><?php echo $_COOKIE['username']; ?></li>
													<?php } ?>
                        <div class="clear"></div>
                    </ul>
                </nav>
                <a href="http://weibo.com/lanmeishipin/" target="_blank">
                    <div class="logo">
                        <div class="gz">关注我们</div>
                    </div>
                </a>
                <a href="#" id="navbtn">Nav Menu</a>

                <div class="clear"></div>
            </header>

            <script type="text/javascript" src="js/menu.js"></script>
        </div>
    </div>
</div>
<div id="container">
    <div class="main none">
        <div class="content">
            <ul>
                <li class="regist activeli">注册</li>
                <li class="log">登陆</li>
            </ul>
            <i class="close card__btn-close fa fa-times"></i>
            <div class="wrapper">
              <div class="login_page template none">
                  <div class="line">
                      <span>帐号:</span>
                        <input type="text" class="user_name" placeholder="请输入帐号名" />
                  </div>
                  <div class="line">
                      <span>密码:</span>
                        <input type="text" class="password" placeholder="请输入密码" />
                  </div>
                  <input type="submit" class="sub_btn" value="登录" />
              </div>
              <div class="regist_page template">
                  <div class="line">
                      <span>帐号:</span>
                        <input type="text" class="user_name" placeholder="请输入帐号名" />
                  </div>
                  <div class="line">
                      <span>密码:</span>
                        <input type="text" class="password" placeholder="请输入密码" />
                  </div>
                  <div class="line">
                      <span>再次输入密码:</span>
                        <input type="text" class="repassword" placeholder="请再次输入密码" />
                  </div>
                  <input type="submit" class="sub_btn" value="注册" />
              </div>
            </div>
        </div>
    </div>
    <div class="itagBox">
        <ul class="artist_l">
            <li class="tag1">
                <div class="votetext" style="background:url(images/lkq2.jpg) no-repeat;background-position:-250px -10px;
  background-size: 390%; ">
                    <div class="tag_txt">
                        李克勤
                    </div>
                    <a href="" style="top: -250px;">
                        <p>雾之恋（第一期）</p>

                        <p>当我知道你们相爱（第二期）</p>

                        <p>遥远的她（第三期）</p>

                        <p>一起走过的日子（第四期）</p>
                    </a>
                </div>
                <div class="votedo">
                    <div class="cvotenum"><b><?php echo $num[0]; ?></b>票</div>
                    <div class="cvote">投票</div>
                </div>
            </li>
            <li class="tag1 ">
                <div class="votetext" style="background:url(images/hzl2.jpg) no-repeat;background-position: top center;
  background-size: 390%;">
                    <div class="tag_txt">
                        黄致列
                    </div>
                    <a href="" style="top: -250px;">
                        <p>那个人（第一期）</p>

                        <p>从开始到现在（第二期）</p>

                        <p>一路上有你（第三期）</p>

                        <p>Bang Bang Bang（第四期）</p>
                    </a>
                </div>
                <div class="votedo">
                    <div class="cvotenum"><b><?php echo $num[1]; ?></b>票</div>
                    <div class="cvote">投票</div>
                </div>
            </li>
            <li class="tag1">
                <div class="votetext" style="background:url(images/xjy2.jpg) no-repeat;background-position: top center;
  background-size: 390%;">
                    <div class="tag_txt">
                        徐佳莹
                    </div>
                    <a href="" style="top: -250px;">
                        <p>失落沙洲（第一期）</p>
                        <p>修炼爱情（第二期）</p>
                        <p>不醉不会（第三期）</p>
                        <p>莉莉安（第四期）</p>
                    </a>
                </div>
                <div class="votedo">
                    <div class="cvotenum"><b><?php echo $num[2]; ?></b>票</div>
                    <div class="cvote">投票</div>
                </div>
            </li>
            <li class="tag1 ">
                <div class="votetext" style="background:url(images/zxz2.jpg) no-repeat;background-position:-250px -10px;
  background-size: 390%;">
                    <div class="tag_txt">
                        张信哲
                    </div>
                    <a href="" style="top: -250px;">
                        <p>信仰（第四期）</p>
                        <p>二十年以前（第五期）</p>
                        <p>爱的箴言（第六期）</p>
                        <p>微光（第七期）</p>
                    </a>
                </div>
                <div class="votedo">
                    <div class="cvotenum"><b><?php echo $num[3]; ?></b>票</div>
                    <div class="cvote">投票</div>
                </div>
            </li>
            <li class="tag1">
                <div class="votetext" style="background:url(images/rze2.jpg) no-repeat;background-position:-250px -10px;
  background-size: 390%;">
                    <div class="tag_txt">
                        容祖儿
                    </div>
                    <a href="" style="top: -250px;">
                        <p>月半小夜曲（第七期）</p>

                        <p>想着你的感觉（第八期）</p>

                        <p>煞科（第九期）</p>
                    </a>
                </div>
                <div class="votedo">
                    <div class="cvotenum"><b><?php echo $num[4]; ?></b>票</div>
                    <div class="cvote">投票</div>
                </div>
            </li>
            <li class="tag1">
                <div class="votetext" style="background:url(images/lw2.png) no-repeat;background-position: top center;
  background-size: 390%;">
                    <div class="tag_txt">
                        李玟
                    </div>
                    <a href="" style="top: -250px;">
                        <p>想念你（第一期）</p>

                        <p>爱之初体验（第二期）</p>

                        <p>Price Tag（第三期）</p>

                        <p>你（第四期）</p>
                    </a>
                </div>
                <div class="votedo">
                    <div class="cvotenum"><b><?php echo $num[5]; ?></b>票</div>
                    <div class="cvote">投票</div>
                </div>
            </li>
            <li class="tag1">
                <div class="votetext" style="background:url(images/ll2.jpg) no-repeat;background-position:-400px -10px;
  background-size: 390%;">
                    <div class="tag_txt">
                        老狼
                    </div>
                    <a href="" style="top: -250px;">
                        <p>旅途（第十期）</p>

                        <p>冬季校园（第十一期）</p>
                    </a>
                </div>
                <div class="votedo">
                    <div class="cvotenum"><b><?php echo $num[6]; ?></b>票</div>
                    <div class="cvote">投票</div>
                </div>
            </li>
        </ul>
    </div>
</div>
<div class="contact" id="contact">
    <div class="wrap">
        <h2>联系我们</h2>

        <div class="contact-form">
            <div class="para-contact">
                <h4>鸣谢：</h4>

                <p>包括<a href="http://www.suning.com/" target="_blank">金典有机奶</a>等赞助商赞助《我是歌手》。</p>

                <div class="social_2 social_3">
                    <ul>
                        <li class="weixin"><a href="#"><img src="images/icon_weixin.png"></a></li>
                        <li class="weibo"><a href="#"><img src="images/icon_weibo.png"></a></li>
                    </ul>
                </div>
                <div class="get-intouch-left-address">
                    <ul>
                        <li class="f_l" style="width:40%;"><a href="https://www.upyun.com/index.html" target="_blank"><img
                                src="images/logo2.jpg" style="width:100%;display:block;" /></a></li>
                    </ul>

                </div>
                <div class="clear"></div>
            </div>
            <form>
                <input type="text" class="textbox" value="姓名" onFocus="this.value = '';"
                       onBlur="if (this.value == '') {this.value = '姓名';}">
                <input type="text" class="textbox" value="Email" onFocus="this.value = '';"
                       onBlur="if (this.value == '') {this.value = 'Email';}">

                <div class="clear"></div>
                <div>
                    <textarea value="Message:" onFocus="this.value = '';"
                              onBlur="if (this.value == '') {this.value = '反馈信息';}" style="font-family:'微软雅黑'">反馈信息</textarea>
                </div>
                <div class="button send_button">
                    <input type="submit" value="Send" onclick="alert("您的信息已反馈，请等待几天后的回复，谢谢！")">
                </div>
                <div class="clear"></div>
            </form>
            <a class="mov-top" href="#home1"> <span> </span></a>

            <div class="clear"></div>
        </div>
    </div>
</div>
<!-- scroll_top_btn -->
<script type="text/javascript" src="js/jquery.cslider.js"></script>
<script type="text/javascript" src="js/index.js"></script>
<a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
</body>
</html>
