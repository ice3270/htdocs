<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <title>沈阳价业价格鉴证服务中心</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Free Bootstrap Business Template">
    <meta name="author" content="The Develovers">
    <!-- CSS -->
    <link href="/htdocs/Home/assets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="/htdocs/Home/assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="/htdocs/Home/assets/css/main.css" rel="stylesheet" type="text/css">
    <link href="/htdocs/Home/assets/css/my-custom-styles.css" rel="stylesheet" type="text/css">
    <!-- IE 9 Fallback-->
    <!--[if IE 9]>
		<link href="/htdocs/Home/assets/css/ie.css" rel="stylesheet">
	<![endif]-->
    <!-- GOOGLE FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400italic,400,600,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300,300italic,400italic,700,400,300' rel='stylesheet' type='text/css'>
    <!-- FAVICONS -->
    <link rel="shortcut icon" href="/htdocs/Home/assets/ico/favicon.png">
    <style>
        p{
            text-indent: 2em;  /*em是相对单位，2em即现在一个字大小的两倍*/
        }
    </style>
</head>

<body>
    <!-- WRAPPER -->
    <div class="wrapper">
        <!-- 导航栏 -->
        <nav class="navbar navbar-default " role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav">
                <span class="sr-only">Toggle Navigation</span>
                <i class="fa fa-bars"></i>
            </button>
            <a href="/htdocs" class="navbar-brand navbar-logo">
                <img src="/htdocs/Home/assets/img/logo/LogoTestHeader.png" alt="Repute Lite - Free Bootstrap Business Template" style="width: 220px">
            </a>
        </div>
        <!-- MAIN NAVIGATION -->
        <div id="main-nav" class="navbar-collapse collapse navbar-mega-menu">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown active" id="pageIndex">
                    <a href="/htdocs/">首页 </a>
                </li>
                <li class="dropdown" id="pageAbout">
                    <a href="/htdocs/Home/Pages/about_us">关于我们 </a>
                </li>
                <li class="dropdown" id="pageServer">
                    <a href="/htdocs/Home/Pages/server">服务内容 </a>
                </li>
                <li class="dropdown" id="pageEx">
                    <a href="/htdocs/Home/Pages/ex">合作案例 </a>
                </li>
                <li class="dropdown" id="pageDown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">最新动态 <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="/htdocs/Home/Pages/com_new">最新动态</a></li>
                        <li><a href="/htdocs/Home/Pages/law">法律法规</a></li>
                    </ul>
                </li>
                <li>
                    <a href="/htdocs/Home/Pages/callus" class="special-menu-item" target="_blank">
                        <i class="fa fa-paper-plane-o"></i>
                        联系我们
                    </a>
                </li>
            </ul>
        </div>
        <!-- END MAIN NAVIGATION -->
    </div>
</nav>
        <!-- END 导航条 -->

        <!-- PAGE CONTENT -->
        <div class="page-content">
            <div class="container">
                <section>
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="section-heading"><?php echo ($us_info[0]["header"]); ?></h2>
                            <p><?php echo ($us_info[0]["contents"]); ?></p>
                        </div>
                        <div class="col-md-6">
                            <img src="/htdocs/Uploads/Images/Company_show/abus.png" alt="" width="555" height="280">
                        </div>
                    </div>
                    <br>
                    <hr>
                    <h2 class="section-heading"><?php echo ($us_info[1]["header"]); ?></h2>
                    <p class="lead" style="text-indent: 0px;"><span class="dropcap dropcap-big"> > </span><?php echo ($us_info[1]["contents"]); ?></p>
                    <br>
                    <h2 class="section-heading"><?php echo ($us_info[2]["header"]); ?></h2>
                    <p class="lead" style="text-indent: 0px;"><span class="dropcap dropcap-big"> > </span><?php echo ($us_info[2]["contents"]); ?></p>
                    <hr>
                </section>
                <h2 class="section-heading">我们的团队</h2>
                <!-- TEAM -->
                <section class="team">
                    <div class="section-content">
                        <?php if(is_array($team_info)): foreach($team_info as $k=>$v): if($k % 2 == 0): ?><div class="col-md-5" style="height: 245px">
                            <?php else: ?>
                                <div class="col-md-5 col-md-offset-2" style="height: 245px"><?php endif; ?>
                                    <div class="team-member media">
                                        <img width="120px" height="120px" src="/htdocs/Uploads/Images/team/<?php echo ($v["imgpath"]); ?>" class="media-object img-circle pull-left" alt="" />
                                        <div class="media-body">
                                            <h3 class="media-heading team-name"><?php echo ($v["name"]); ?></h3>
                                            <strong><?php echo ($v["post"]); ?></strong>
                                            <hr class="pull-left">
                                            <div class="clearfix"></div>
                                            <p><?php echo ($v["about"]); ?></p>
                                        </div>
                                    </div>
                                </div><?php endforeach; endif; ?>
                        <?php if($k % 2 == 0): ?><div class="col-md-5 col-md-offset-2">
                                <div class="team-member media">
                                    <img width="120px" height="120px" src="/htdocs/Uploads/Images/team/shenlue.png" class="media-object img-circle pull-left" alt="" />
                                    <div class="media-body">
                                        <h3 class="media-heading team-name">More</h3>
                                        <strong>. . . . . .</strong>
                                        <hr class="pull-left">
                                        <div class="clearfix"></div>
                                        <p style="text-indent: 0px;">. . . . . .</p>
                                    </div>
                                </div>
                            </div><?php endif; ?>
                    </div>
                </section>
                <!-- END TEAM -->

                <!-- OUR CLIENTS -->
                <section class="clients no-margin">
                    <div class="container">
                        <h2 class="section-heading">合作单位</h2>
                        <ul class="list-inline list-client-logo">
                            <?php if(is_array($data)): foreach($data as $k=>$v): if(is_array($v)): foreach($v as $key=>$vv): ?><img src="/htdocs/Uploads/Images/FriendCom/<?php echo ($vv["imgpathname"]); ?>"  width="60px" height="60px" style="margin: 15px"><?php endforeach; endif; endforeach; endif; ?>
                        </ul>
                    </div>
                </section>
                <!-- END OUR CLIENTS -->
            </div>
        </div>
        <!-- END PAGE CONTENT -->
        <!-- 页脚部分 -->
        <footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <!-- COLUMN 1 -->
                <a href="/htdocs">
                    <img src="/htdocs/Home/assets/img/logo/LogoTestHeader.png" class="logo" alt="Repute" style="width: 220px;">
                </a>
                <div style="height: 80px; overflow:hidden; margin-bottom: 10px;">
                    <p><?php echo ($com_info["com_text"]); ?></p>
                </div>
                <div>
                    <div style="height: 180px;float: left;">
                        <div style="margin:auto">
                            <h3 style="font-size: 20px;" class="footer-heading">关注我们</h3>
                            <span><li class="fa fa-hand-o-right fa-5x"></li></span>
                        </div>
                    </div>
                    <div style="width: 180px; height: 180px; margin-left: 40px; float: left;">
                        <img src="/htdocs/Uploads/Images/erwei.png?ran=<?php echo ($ran); ?>" width="180" alt="二维码">
                    </div>
                </div>
                <!-- END COLUMN 1 -->
            </div>

            <div class="col-md-4">
                <!-- COLUMN 2 -->
                <div class="row">
                    <div class="col-xs-6">
                        <h3 class="footer-heading">站内链接</h3>
                        <ul class="list-unstyled footer-nav">
                            <?php if(is_array($link_in_info)): foreach($link_in_info as $key=>$v): ?><!--<li><a href="<?php echo ($v["link_url"]); ?>"><?php echo ($v["link_name"]); ?></a></li>-->
                                <li><a href="/htdocs/<?php echo ($v["link_url"]); ?>"><?php echo ($v["link_name"]); ?></a></li><?php endforeach; endif; ?>
                        </ul>
                    </div>
                    <div class="col-xs-6">
                        <h3 class="footer-heading">相关链接</h3>
                        <ul class="list-unstyled footer-nav">
                            <?php if(is_array($link_out_info)): foreach($link_out_info as $key=>$v): ?><li><a href="http://<?php echo ($v["link_url"]); ?>"><?php echo ($v["link_name"]); ?></a></li><?php endforeach; endif; ?>
                        </ul>
                    </div>
                    <div class="col-xs-6" style="width: 400px;">
                        <h3 class="footer-heading">邮寄地址及联系方式</h3>
                        <ul class="list-unstyled">
                            <li>通讯地址：<?php echo ($com_info["com_address"]); ?></li>
                            <li>邮政编码：<?php echo ($com_info["com_postal"]); ?></li>
                            <li>办公电话：<?php echo ($com_info["com_tel"]); ?></li>
                            <li>Email：<?php echo ($com_info["com_email"]); ?></li>
                        </ul>
                    </div>
                </div>
                <!-- END COLUMN 2 -->
            </div>

            <div class="col-md-4">
                <h3 class="footer-heading">公司地址</h3>
                <p style="text-indent: 0px;"><?php echo ($com_info["com_address"]); ?></p>
                <div id="allmap">
                    <!--<iframe src="/htdocs/Home/View/Index/baiduMap.html" height="261px" width="396">-->
                    <iframe src="/htdocs/Home/View/Index/baiduMap.html" height="261px" width="100%">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- COPYRIGHT -->
    <div class="text-center copyright">
        <a href="http://www.spasc.cn/" title="沈阳价格价业鉴证服务中心">沈阳价格价业鉴证服务中心 - Shenyang Price Assessment Service Center </a> -
        <a href="/htdocs/index.php/Admin/"> 后台管理登录</a>
    </div>
    <!-- END COPYRIGHT -->
</footer>
        <!-- END 页脚部分 -->
    </div>
    <!-- END WRAPPER -->
    <!-- JAVASCRIPTS -->
    <script src="/htdocs/Home/assets/js/jquery-2.1.1.min.js"></script>
    <script src="/htdocs/Home/assets/js/bootstrap.min.js"></script>
    <script src="/htdocs/Home/assets/js/plugins/fitvids/jquery.fitvids.js"></script>
    <script src="/htdocs/Home/assets/js/repute-scripts.js"></script>
    <script>
        $(function() {
            $(".dropdown").removeClass("active");
            $("#pageAbout").addClass("active");
        });
    </script>
</body>

</html>