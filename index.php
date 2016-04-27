<!DOCTYPE HTML>
<html>
<head>
    <title>第四季《我是歌手》</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css" media="all"/>
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <script src="js/jquery.min.js"></script>
</head>
<body>
<!-- start header -->
<div id="container">
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
    <!-- <div class="mask none"></div> -->
    <div class="header_bg" style="background-color:#fff;">
        <div class="wrap">
            <div id="content">
                <header id="topnav">
                    <nav>
                        <ul>
                            <li class="active home"><a class="scroll" href="#">主页</a></li>
                            <li class="member"><a class="scroll" href="member.php">比赛选手</a></li>
                            <li><a class="scroll" href="http://www.mgtv.com/v/2016/wsgs4/?f=bdpz"
                                   target="_blank">音乐试听</a></li>
                            <li><a class="scroll vote" href="vote.php">为他投票</a></li>
                            <li><a class="scroll" href="#contact">联系我们</a></li>
                            <?php if($_SESSION['username']==""&&$_COOKIE['username']==""){ ?>
                            <li><a class="scroll login_btn" href="#">注册/登录</a></li>
                            <?php }else{ ?>
                              <li class="post_name" style="line-height:70px;padding-left:10px;color:#C83434;font-weight:bold;"><?php echo $_COOKIE['username']; ?></li>
                              <?php } ?>
                            <div class="clear"></div>
                        </ul>
                    </nav>
                    <a href="http://weibo.com/u/3321996260?nick=2016%E6%88%91%E6%98%AF%E6%AD%8C%E6%89%8B%E7%AC%AC%E5%9B%9B%E5%AD%A3" target="_blank">
                        <div class="logo">
                            <div class="gz" style="color:#000;">关注我们</div>
                        </div>
                    </a>
                    <a href="#" id="navbtn">Nav Menu</a>

                    <div class="clear"></div>
                </header>
                <!-- @end #topnav -->
                <script type="text/javascript" src="js/menu.js"></script>
            </div>
        </div>
    </div>
    <!--start-slider-->
        <div class="slider" id="home">
            <div class="wrap">
                <!--start-da-slider-->
                <div id="da-slider" class="da-slider">
                    <div class="da-slide">
                        <h2>第四季《我是歌手》来了</h2>

                        <p>湖南卫视引进韩国MBC电视台综艺节目，推出的大型歌唱真人秀节目</p>
                        <a href="http://www.mgtv.com/v/2016/wsgs4/?f=bdpz" class="da-link" target="_blank">Learn more</a>
                    </div>
                    <div class="da-slide">
                        <h2>动情的演唱带你走进音乐的盛宴 ！</h2>

                        <p>李玟，张信哲，李克勤，黄致列，徐佳莹，容祖儿，老狼</p>
                        <a href="#portfolio" class="da-link">Learn more</a>
                    </div>
                    <div class="da-slide">
                        <h2>爆炸式的声音，点燃你的激情</h2>

                        <p>2016年4月8日晚22:00总决赛，敬请期待！</p>
                        <a href="http://www.mgtv.com/v/2016/wsgs4/?f=bdpz" class="da-link">Learn more</a>
                    </div>
                    <nav class="da-arrows">
                        <span class="da-arrows-prev"></span>
                        <span class="da-arrows-next"></span>
                    </nav>
                </div>
                <link rel="stylesheet" type="text/css" href="css/slider.css" />
                <script type="text/javascript" src="js/modernizr.custom.28468.js"></script>
                <script type="text/javascript" src="js/jquery.cslider.js"></script>
                <!---//End-da-slider-->
            </div>
        </div>
        <!---service-->
        <div class="sevice" id="service">
            <div class="wrap">
                <div class="service-grids">
                    <h2 style="text-align:center;color: #D53D3D;font-size: 2.2em;padding: 0 0 40px;">往届《我是歌手》冠军</h2>
                    <div class="images_1_of_4">
                        <img src="images/yq.png">

                        <h3>羽泉</h3>

                        <p>中国内地首席组合，由陈羽凡和胡海泉组成，组合名称各取两人名字中的一个字。1999年，羽泉推出首张创作专辑《最美》，销量就突破百万而出名。</p>

                        <div class="button"><span><a href="http://baike.baidu.com/link?url=Gr8MlUpMuL78PtCD7p03WaZW-_me63nmNbfB_G411CGuHBrjZBW4QrJ30nZxUot2I42gJqE5-2Noa3egHyWPLa&qq-pf-to=pcqq.c2c" target="_blank">阅读更多</a></span></div>
                    </div>
                    <div class="images_1_of_4">
                        <img src="images/gj2.png">

                        <h3>韩磊</h3>

                        <p>又名森布尔，1968年2月23日出生于呼和浩特市，中国男歌手。2015年1月22日，央视春晚官方确认韩磊加盟2015羊年央视春晚。</p>

                        <div class="button"><span><a href="https://www.baidu.com/link?url=YlMx5HDJpHyzPrWoH8otz7AeIC2OkOBwgTEakFVgmi-HMneUFOAWq4nMCRnjS3zrZAEP6ubDKU5MgvMoY5k3JmrYTBRCo3UATRBiYUEabgO&wd=&eqid=b4a8499d00002fb7000000045707da7d" target="_blank">阅读更多</a></span>
                        </div>
                    </div>
                    <div class="images_1_of_4">
                        <img src="images/hh.png">

                        <h3>韩红</h3>

                        <p>全国政协委员，华录百纳娱乐公司董事长兼CEO、音乐人、慈善家、导演、主持人“有宠集团”联合创始人执行董事， 先后毕业于中国音乐学院 、解放军艺术学院中共中央党校研究生。</p>

                        <div class="button">
                            <span>
                                <a href="http://baike.baidu.com/link?url=WTQTdMjXt8lkHA1ZjLWa0yer7FXRAvVnJVqaxDwhJaJ3mwYdxbho1lvmfJhEiNMjwBKNUZ_oumpS17aqfYUKkvbZcc3pW21tP2lfq-5AwJW " target="_blank">阅读更多
                                </a>
                            </span>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <!-----------portfolio-------------->
            <div class="portfolio_main" id="portfolio">

                <div class="wrap">
                    <div class="container">
                        <div class="menu">
                            <div class="hexagon_container" id="logo">
                                <div class="hexagon hexagon2">
                                    <div class="hexagon-in1">
                                        <div class="hexagon-in2 active">
                                            <h2>我是歌手</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hexagon_container" id="team">
                                <div class="hexagon hexagon2">
                                    <div class="hexagon-in1">
                                        <a href="member.php" class="member_more">
                                            <div class="hexagon-in2">
                                                <i class="fa fa-users"></i>

                                                <h2>选手</h2>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="hexagon_container" id="services">
                                <div class="hexagon hexagon2">
                                    <div class="hexagon-in1">
                                        <a href="vote.php">
                                            <div class="hexagon-in2">
                                                <i class="fa fa-thumbs-up"></i>

                                                <h2>投票</h2>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="hexagon_container" id="contact1">
                                <div class="hexagon hexagon2">
                                    <div class="hexagon-in1">
                                        <a href="http://www.mgtv.com/v/2016/wsgs4/?f=bdpz" target="_blank">
                                            <div class="hexagon-in2">
                                                <i class="fa fa-play-circle"></i>

                                                <h2>音频</h2>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="gallery-content">
                            <header>
                                <h1>第四季《我是歌手》选手</h1>
                            </header>
                            <div class="content gallery" id="page1">
                                <div class="hexagon_container">
                                    <div class="hexagon hexagon2 gallery-item">
                                        <div class="hexagon-in1">
                                            <div class="hexagon-in2"
                                                 style="background-image:url(images/lw2.png);background-size:310%;">
                                                <div class="overlay">
                                                    <a href="member.php"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hexagon_container">
                                    <div class="hexagon hexagon2 gallery-item">
                                        <div class="hexagon-in1">
                                            <div class="hexagon-in2"
                                                 style="background-image:url(images/rze2.jpg);background-size:310%;background-position: -130px center;">
                                                <div class="overlay">
                                                    <a href="member.php"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hexagon_container">
                                    <div class="hexagon hexagon2 gallery-item">
                                        <div class="hexagon-in1">
                                            <div class="hexagon-in2"
                                                 style="background-image:url(images/zxz2.jpg);background-size:310%;background-position: -130px center;">
                                                <div class="overlay">
                                                    <a href="member.php"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hexagon_container">
                                    <div class="hexagon hexagon2 gallery-item">
                                        <div class="hexagon-in1">
                                            <div class="hexagon-in2"
                                                 style="background-image:url(images/xjy2.jpg);background-size:320%;">
                                                <div class="overlay">
                                                    <a href="member.php"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hexagon_container over">
                                    <div class="hexagon hexagon2 gallery-item">
                                        <div class="hexagon-in1">
                                            <div class="hexagon-in2"
                                                 style="background-image:url(images/lkq2.jpg);background-size:320%;background-position: -130px center;">
                                                <div class="overlay">
                                                    <a href="member.php"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hexagon_container over">
                                    <div class="hexagon hexagon2 gallery-item">
                                        <div class="hexagon-in1">
                                            <div class="hexagon-in2"
                                                 style="background-image:url(images/hzl2.jpg);background-size:310%;">
                                                <div class="overlay">
                                                   <a href="member.php"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hexagon_container over">
                                    <div class="hexagon hexagon2 gallery-item">
                                        <div class="hexagon-in1">
                                            <div class="hexagon-in2" style="background-image:url(images/ll2.jpg);background-size:310%;background-position: -230px center;">
                                                <div class="overlay">
                                                    <a href="member.php"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pagination">
                                <a href="member.php">阅读更多</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!--start-contact-->
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
                            <li class="weibo"><a href="http://weibo.com/u/3321996260?nick=2016%E6%88%91%E6%98%AF%E6%AD%8C%E6%89%8B%E7%AC%AC%E5%9B%9B%E5%AD%A3"><img src="images/icon_weibo.png"></a></li>
                        </ul>
                    </div>
                    <div class="get-intouch-left-address">
                        <ul>
                            <!-- <li class="f_l"><a href="http://www.letvcloud.com/" target="_blank"><img
                                    src="images/logo1.jpg"/></a></li> -->
                            <li class="f_l" style="width:40%;"><a href="https://www.upyun.com/index.html" target="_blank"><img
                                    src="images/logo2.jpg" style="width:100%;display:block;" /></a></li>
                            <!-- <li class="f_r"><p>联系我们：we@zjstv.com</p></li> -->
                        </ul>

                    </div>
                    <div class="clear"></div>
                </div>
                <div class="form">
                    <h4 style="color:#fff;margin-left:5px">意见反馈</h4>

                    <form method="post" action="#">
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
                </div>
                <a class="mov-top" href="#home1"> <span> </span></a>

                <div class="clear"></div>
            </div>
        </div>
    </div>
</div>

<!-- scroll_top_btn -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/index.js"></script>
<a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
<script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/vendors/trianglify.min.js"></script>
    <script type="text/javascript" src="js/vendors/TweenMax.min.js"></script>
    <script type="text/javascript" src="js/vendors/ScrollToPlugin.min.js"></script>
    <!--cash.min.js重新定义了$符 所以我就把jquery中$替换成JQuery-->
    <script type="text/javascript" src="js/vendors/cash.min.js"></script>
    <script type="text/javascript" src="js/Card-polygon.js"></script>
    <script type="text/javascript" src="js/demo-3.js"></script>
</body>
</html>
