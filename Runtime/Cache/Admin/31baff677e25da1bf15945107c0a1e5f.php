<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">

<head>
	<title>Notifications</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="/htdocs/font_awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="/htdocs/Admin/assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="/htdocs/Admin/assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="/htdocs/Admin/assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="/htdocs/Admin/assets/vendor/toastr/toastr.min.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="/htdocs/Admin/assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="/htdocs/Admin/assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="shortcut icon" href="/htdocs/Admin/assets/img/favicon.png">
	<script src="/htdocs/Admin/assets/vendor/jquery/jquery.min.js"></script>
	<style>
		.btnStyleDown{
			background-color: #00AAFF;
			color: white;
		}
		p{text-indent: 2em;}
	</style>
</head>

<body>
<!-- WRAPPER -->
<div id="wrapper">
	<!-- 导航栏 -->
	<!-- 导航栏 -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="brand" style="height: 81px">
        <span style="color: #2B333E; font-weight: bold; font-size: 25px; line-height: 0px">沈阳价格价业鉴证服务中心 </span>
        <span style="color: #00AAFF; font-weight: bold; font-size: 20px; line-height: 0px"> Shenyang Price Assessment Service Center</span>

        <span style="margin-left: 20px"><a style="float: right;" href="/htdocs/index.php/Admin/Index/logout"> 退出后台管理 </a></span>
    </div>
</nav>
<!-- END 导航栏杆 -->
	<!-- END 导航栏杆 -->
    <!--//左侧导航栏-->
    <!-- 左侧工具栏杆 -->
<div id="sidebar-nav" class="sidebar">
    <div class="sidebar-scroll">
        <nav>
            <ul class="nav">
                <li>
                    <a href="/htdocs/Admin/Pages/index" class="dropdown" id="eIndex">
                        <i class="lnr lnr-home"></i>
                        <span>首页设置</span>
                    </a>
                </li>
                <li>
                    <a href="/htdocs/Admin/Pages/aboutus" class="dropdown" id="eAbouts">
                        <i class="lnr lnr-code"></i>
                        <span>关于我们</span>
                    </a>
                </li>
                <li>
                    <a href="/htdocs/Admin/Pages/collaborate" class="dropdown" id="eCom">
                        <i class="lnr lnr-dice"></i>
                        <span>合作单位</span>
                    </a>
                </li>
                <li>
                    <a href="/htdocs/Admin/Pages/server" class="dropdown" id="eServer">
                        <i class="lnr lnr-chart-bars"></i>
                        <span>服务内容</span>
                    </a>
                </li>
                <li>
                    <a href="/htdocs/Admin/Pages/example" class="dropdown" id="eEx">
                        <i class="lnr lnr-cog"></i>
                        <span>合作案例</span>
                    </a>
                </li>
                <li>
                    <a href="/htdocs/Admin/Pages/comnew" class="dropdown" id="eNew">
                        <i class="lnr lnr-alarm"></i>
                        <span>公司动态</span>
                    </a>
                </li>
                <li>
                    <a href="/htdocs/Admin/Pages/law" class="dropdown" id="eLaw">
                        <i class="lnr lnr-dice"></i>
                        <span>法律法规</span>
                    </a>
                </li>
                <li>
                    <a href="/htdocs/Admin/Pages/callus" class="dropdown" id="eMes">
                        <i class="lnr lnr-alarm"></i>
                        <span>留言信息</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
<!-- END LEFT SIDEBAR -->
	<!-- MAIN -->
	<div class="main">
		<!--//主窗口部分-->
		<h3 style="margin-left: 40px;">关于我们 - 页面管理</h3>
		<hr>
        <a href="/htdocs/index.php/Admin/Pages/aboutus">
            <h2 class="btn btn-default " style="font-size: 20px; margin-left: 40px;margin-bottom: 10px;">企业展示</h2>
        </a>
        <a href="/htdocs/index.php/Admin/Pages/abOther">
            <h2 class="btn btn-default" style="font-size: 20px; margin-left: 40px;margin-bottom: 10px;">企业相关</h2>
        </a>
		<h2 class="btn btn-default btnStyleDown" style="font-size: 20px; margin-left: 40px;margin-bottom: 10px;">团队成员</h2>

        <div id="disTeam" style="display: none;">
        <h3 style="margin-left: 40px;">浏览团队成员</h3>
        <table class="table table-hover" style="width: 80%;margin-left: 40px;">
			<tr>
				<th>头像</th><th>姓名</th><th>职位</th><th>描述</th><th>操作</th>
			</tr>
			<?php if(is_array($team_info)): foreach($team_info as $k=>$v): ?><tr>
					<td><img src="/htdocs/Uploads/Images/team/<?php echo ($v["imgpath"]); ?>?ran=<?php echo ($ran); ?>" height="50px"></td>
                    <td><?php echo ($v["name"]); ?></td>
                    <td><?php echo ($v["post"]); ?></td>
                    <td style="width: 600px"><p><?php echo ($v["about"]); ?></p></td>
                    <td align="center" style="width: 100px">
                        <a href="/htdocs/index.php/Admin/Pages/abTeamEdit?id=<?php echo ($v["id"]); ?>">修改</a> |
                        <a href="/htdocs/index.php/Admin/EditPages/abTeamDel?id=<?php echo ($v["id"]); ?>">删除</a>
                    </td>
				</tr><?php endforeach; endif; ?>
            <tr>
                <td colspan="5">
                    <a href="/htdocs/index.php/Admin/Pages/abTeamEdit" style="float: right;">
                        <h2 class="btn btn-default" style="font-size: 10px; margin-left: 40px;margin-bottom: 10px;">添加团队成员</h2>
                    </a>
                </td>
            </tr>
		</table>
        </div>
        <hr>
	</div>
	<!-- END MAIN -->
	<div class="clearfix"></div>
	<footer>
		<div class="container-fluid">
			<p class="copyright">
				<a href="http://www.spasc.cn/" title="沈阳价格价业鉴证服务中心">沈阳价格价业鉴证服务中心 - Shenyang Price Assessment Service Center</a>
			</p>
		</div>
	</footer>
</div>
<!-- END WRAPPER -->
<!-- Javascript -->
<script src="/htdocs/Admin/assets/vendor/jquery/jquery.min.js"></script>
<script src="/htdocs/Admin/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="/htdocs/Admin/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="/htdocs/Admin/assets/vendor/toastr/toastr.min.js"></script>
<script src="/htdocs/Admin/assets/scripts/klorofil-common.js"></script>
<script>
    $(function(){
        $(".dropdown").removeClass("active");
        $("#eAbouts").addClass("active");
        $("#disTeam").slideDown('slow');
    });
</script>
</body>

</html>