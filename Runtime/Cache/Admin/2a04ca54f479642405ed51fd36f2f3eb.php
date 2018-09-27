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
		<h2 class="btn btn-default btnStyleDown" style="font-size: 20px; margin-left: 40px;margin-bottom: 10px;">企业展示</h2>
		<a href="/htdocs/index.php/Admin/Pages/abOther">
			<h2 class="btn btn-default" style="font-size: 20px; margin-left: 40px;margin-bottom: 10px;">企业相关</h2>
		</a>
		<a href="/htdocs/index.php/Admin/Pages/abTeamShow">
			<h2 class="btn btn-default" style="font-size: 20px; margin-left: 40px;margin-bottom: 10px;">团队成员</h2>
		</a>

		<!--企业图文介绍-->
		<div class="form-group" id="editCompany" style="display: none;">
			<form action="/htdocs/index.php/Admin/EditPages/companyUpdate" method="post" enctype="multipart/form-data">
				<table class="table table-hover" style="width: 80%;margin-left: 40px;">
					<tr>
						<td width="200px">原企业展示图预览：</td>
						<td>
							<img src="/htdocs/Uploads/Images/Company_show/abus.png?ran=<?php echo ($ran); ?>" height="200px">
							<p style="margin-top: 5px;">温馨提示：为保证上传图片与网站布局的美观，上传图片最好为：555 * 280</p>
						</td>
					</tr>
					<tr>
						<td width="200px">上传企业展示图：</td>
						<td><input type="file" class="form-control" name="company_img"></td>
					</tr>
					<tr>
						<td width="200px">企业介绍标题：</td>
						<td><input type="text" class="form-control" name="header" value="<?php echo ($company_info[0]["header"]); ?>"></td>
					</tr>
					<tr>
						<td width="200px">企业介绍正文：</td>
						<td><textarea class="form-control" rows="3" name="contents"><?php echo ($company_info[0]["contents"]); ?></textarea></td>
					</tr>
					<tr><td colspan="2"><hr></td></tr>
					<tr align="center">
						<td colspan="2"><input type="submit" value="更新企业展示板块"> &nbsp; | &nbsp; <input type="reset"></td>
					</tr>
				</table>
			</form>
		</div>
		<!--End 企业文化图文介绍-->
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
        $("#editCompany").slideDown('slow');
	});
</script>
</body>

</html>