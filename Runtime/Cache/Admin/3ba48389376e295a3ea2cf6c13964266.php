<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">

<head>
	<title>Admin</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="/htdocs/font_awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="/htdocs/Admin/assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="/htdocs/Admin/assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="/htdocs/Admin/assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="/htdocs/Admin/assets/vendor/chartist/css/chartist-custom.css">
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
            <!-- 导航按钮区 -->
            <h3 style="margin-left: 40px;">首页 - 页面管理</h3>
            <hr>
            <h2 class="btn btn-default btnStyleDown" style="font-size: 20px; margin-left: 40px;margin-bottom: 10px;" id="disBannerBtn">顶部展示</h2>
            <h2 class="btn btn-default" style="font-size: 20px; margin-left: 40px;margin-bottom: 10px;" id="disCompanyBtn">企业展示</h2>
            <h2 class="btn btn-default" style="font-size: 20px; margin-left: 40px;margin-bottom: 10px;" id="disServeBtn">服务范围1</h2>
            <h2 class="btn btn-default" style="font-size: 20px; margin-left: 40px;margin-bottom: 10px;" id="disSloganBtn">服务范围2</h2>
            <h2 class="btn btn-default" style="font-size: 20px; margin-left: 40px;margin-bottom: 10px;" id="disWorkBtn">工作展示</h2>
            <h2 class="btn btn-default" style="font-size: 20px; margin-left: 40px;margin-bottom: 10px;" id="disBusinesskBtn">业务范围</h2>
            <br>
            <h2 class="btn btn-default" style="font-size: 20px; margin-left: 40px;margin-bottom: 10px;" id="disYearBtn">发展历程</h2>
            <h2 class="btn btn-default" style="font-size: 20px; margin-left: 40px;margin-bottom: 10px;" id="disCaitaBtn">彩塔板块</h2>
            <h2 class="btn btn-default" style="font-size: 20px; margin-left: 40px;margin-bottom: 10px;" id="disFooterBtn">页脚部分</h2>
            <br>
            <br>
            <!-- END 导航按钮区 -->

            <!-- banner 展示图部分 -->
            <div class="form-group" style="display: none;" id='editBanner'>
                <form action="/htdocs/index.php/Admin/editIndex/bannerUpdate" method="post" enctype="multipart/form-data">
                    <table class="table table-hover" style="width: 80%;margin-left: 40px;">
                        <?php if(is_array($banner_info)): foreach($banner_info as $k=>$v): ?><tr>
                                <td>原图预览</td>
                                <td>
                                    <img src="/htdocs/Uploads/Images/Banner/banner<?php echo ($k+1); ?>.png?ran=<?php echo ($ran); ?>" height="100px">
                                    <p style="margin-top: 5px;">温馨提示：为保证上传图片与网站布局的美观，上传图片最好为：1920 * 500</p>
                                </td>
                            </tr>
                            <tr>
                                <td>上传更新 - 展示图(<?php echo ($k + 1); ?>)：</td>
                                <td><input type="file" class="form-control" name="bannerImg<?php echo ($k); ?>"></td>
                            </tr>
                            <tr>
                                <td width="200px">展示图(<?php echo ($k + 1); ?>) - 标题：</td>
                                <td><input name="banner_header[]" class="form-control" value="<?php echo ($v["banner_header"]); ?>"></td>
                            </tr>
                            <tr>
                                <td>展示图(<?php echo ($k + 1); ?>) - 描述：</td>
                                <td><input name="banner_text[]" class="form-control" value="<?php echo ($v["banner_text"]); ?>"></td>
                            </tr>
                            <tr>
                                <td collspan="2">展示图 (<?php echo ($k + 1); ?>) 最近更新时间 </td>
                                <!--<td><?php echo date("Y-m-d H:i:s", $v['banner_time']);?></td>-->
                                <td><?php echo (date("Y - m - d ------ H : i : s", $v["banner_time"])); ?></td>
                            </tr>
                            <tr><td colspan="2"><hr></td></tr><?php endforeach; endif; ?>
                        <tr align="center">
                            <td colspan="2"><input type="submit" value="更新顶部展示图板块"> &nbsp; | &nbsp; <input type="reset"></td>
                        </tr>
                    </table>
                </form>
            </div>
            <!-- <hr> -->

            <!-- 企业介绍部分 -->

            <div class="form-group" id="editCompany" style="display: none;">
                <form action="/htdocs/index.php/Admin/editIndex/companyUpdate" method="post" enctype="multipart/form-data">
                    <table class="table table-hover" style="width: 80%;margin-left: 40px;">
                        <tr>
                            <td width="200px">原企业展示图预览：</td>
                            <td>
                                <img src="/htdocs/Uploads/Images/Company/companyIndex.png?ran=<?php echo ($ran); ?>" height="200px">
                                <p style="margin-top: 5px;">温馨提示：为保证上传图片与网站布局的美观，上传图片最好为：800 * 550</p>
                            </td>
                        </tr>
                        <tr>
                            <td width="200px">上传企业展示图：</td>
                            <td><input type="file" class="form-control" name="company_img"></td>
                        </tr>
                        <tr>
                            <td width="200px">企业介绍标题：</td>
                            <td><input type="text" class="form-control" name="company_header" value="<?php echo ($company_info["company_header"]); ?>"></td>
                        </tr>
                        <tr>
                            <td width="200px">企业介绍正文：</td>
                            <td>
                                <textarea class="form-control" rows="3" name="company_text"><?php echo ($company_info["company_text"]); ?></textarea>
                                <br>
                                另起一自然段使用：“<span id="pe">&lt;\p&gt;&lt;p&gt;</span>” 作为分段落隔符 （引号内复制粘贴即可）
                            </td>
                        </tr>
                        <tr><td colspan="2"><hr></td></tr>
                        <tr align="center">
                            <td colspan="2"><input type="submit" value="更新企业展示板块"> &nbsp; | &nbsp; <input type="reset"></td>
                        </tr>
                    </table>
                </form>
            </div>
            <!-- 服务范围简介区 -->
			<div class="form-group" id="editServe" style="display: none;">
				<form action="/htdocs/index.php/Admin/editIndex/ServeUpdate" method="post" enctype="multipart/form-data">
					<table class="table table-hover" style="width: 80%;margin-left: 40px;">
					<?php if(is_array($serve_info)): foreach($serve_info as $k=>$v): ?><tr>
							<td width="200px">
								<a href="http://fontawesome.dashgame.com/" target="_blank"><i class="fa fa-<?php echo ($v["serve_icon"]); ?> fa-2x"></i></a> 
                            </td>
                            <td>
                                <div class="input-group col-xs-12">
                                    <input type="text" class="form-control" name="serve_icon[]" value="<?php echo ($v["serve_icon"]); ?>" style="width: auto;">
                                    <a href="/htdocs/Res/Help/iconHelp.png" target="_bank"><i class="fa fa-hand-o-right" style="margin-left: 40px;vertical-align: middle;"> 如何修改图标</i></a>
                                </div>
                            </td>
						</tr>
						<tr>
							<td width="200px">服务范围标题：</td>
							<td><input type="text" class="form-control" name="serve_header[]" value="<?php echo ($v["serve_header"]); ?>"></td>
						</tr>
						<tr>
							<td width="200px">服务范围正文：</td>
							<td><textarea class="form-control" rows="3" name="serve_text[]"><?php echo ($v["serve_text"]); ?></textarea></td>
						</tr>
                        <tr><td colspan="2"><hr></td></tr><?php endforeach; endif; ?>
						<tr align="center">
							<td colspan="2"><input type="submit" value="更新服务范围板块"> &nbsp; | &nbsp; <input type="reset"></td>
						</tr>
					</table>
				</form>
			</div>
			<!-- END 服务范围简介区 -->

			<!-- END 企业介绍部分 -->
            
            <!-- 服务宗旨 -->
            <div class="form-group" style="display: none;" id='editSlogan'>
                <form action="/htdocs/index.php/Admin/editIndex/sloganUpdate" method="post" enctype="multipart/form-data">
                    <table class="table table-hover" style="width: 80%;margin-left: 40px;">
                        <?php if(is_array($slogan_info)): foreach($slogan_info as $k=>$v): ?><tr>
                                <td>原图预览</td>
                                <td>
                                    <img src="/htdocs/Uploads/Images/Slogan/sloganImg<?php echo ($k+1); ?>.png?ran=<?php echo ($ran); ?>" height="100px">
                                    <p style="margin-top: 5px;">温馨提示：为保证上传图片与网站布局的美观，上传图片高度最好为：220px</p>
                                </td>
                            </tr>
                            <tr>
                                <td>上传更新 - 服务宗旨配图(<?php echo ($k + 1); ?>)：</td>
                                <td><input type="file" class="form-control" name="sloganImg<?php echo ($k); ?>"></td>
                            </tr>
                            <tr>
                                <td width="200px">服务宗旨按钮列表(<?php echo ($k + 1); ?>) - 标题：</td>
                                <td><input name="slogan_btn[]" class="form-control" value="<?php echo ($v["slogan_btn"]); ?>"></td>
                            </tr>
                            <tr>
                                <td width="200px">服务宗旨(<?php echo ($k + 1); ?>) - 标题：</td>
                                <td><input name="slogan_header[]" class="form-control" value="<?php echo ($v["slogan_header"]); ?>"></td>
                            </tr>
                            <tr>
                                <td>服务宗旨(<?php echo ($k + 1); ?>) - 描述：</td>
                                <td><input name="slogan_text[]" class="form-control" value="<?php echo ($v["slogan_text"]); ?>"></td>
                            </tr>
                            <tr><td colspan="2"><hr></td></tr><?php endforeach; endif; ?>
                        <tr align="center">
                            <td colspan="2"><input type="submit" value="更新服务宗旨板块"> &nbsp; | &nbsp; <input type="reset"></td>
                        </tr>
                    </table>
                </form>
            </div>
            <!-- END 服务宗旨 -->

            <!-- 公司展示 -->
            <div class="form-group" style="display: none;" id='editWork'>
                <form action="/htdocs/index.php/Admin/editIndex/workUpdate" method="post" enctype="multipart/form-data">
                    <table class="table table-hover" style="width: 80%;margin-left: 40px;">
                        <?php if(is_array($company_show_info)): foreach($company_show_info as $k=>$v): ?><tr>
                                <td>原图预览</td>
                                <td>
                                    <img src="/htdocs/Uploads/Images/Company_show/work<?php echo ($k+1); ?>.png?ran=<?php echo ($ran); ?>" height="100px">
                                    <p style="margin-top: 5px;">温馨提示：为保证上传图片与网站布局的美观，上传图片最好为：800 * 500</p>
                                </td>
                            </tr>
                            <tr>
                                <td>上传更新 - 公司展示图(<?php echo ($k + 1); ?>)：</td>
                                <td><input type="file" class="form-control" name="workImg<?php echo ($k); ?>"></td>
                            </tr>
                            <tr>
                                <td width="200px">公司展示图(<?php echo ($k + 1); ?>) - 标题：</td>
                                <td><input name="company_show_title[]" class="form-control" value="<?php echo ($v["company_show_title"]); ?>"></td>
                            </tr>
                            <tr>
                                <td>公司展示图(<?php echo ($k + 1); ?>) - 描述：</td>
                                <td><input name="company_show_text[]" class="form-control" value="<?php echo ($v["company_show_text"]); ?>"></td>
                            </tr>
                            <tr><td colspan="2"><hr></td></tr><?php endforeach; endif; ?>
                        <tr align="center">
                            <td colspan="2"><input type="submit" value="更新公司展示板块"> &nbsp; | &nbsp; <input type="reset"></td>
                        </tr>
                    </table>
                </form>
            </div>
            <!-- END 公司展示 -->

            <!--业务范围-->
            <div class="form-group" style="display: none;" id='editBusiness'>
                <form action="/htdocs/index.php/Admin/editIndex/businessUpdate" method="post" enctype="multipart/form-data">
                    <table class="table table-hover" style="width: 80%;margin-left: 40px;">
                        <?php if(is_array($business_info)): foreach($business_info as $k=>$v): ?><tr>
                                <td>原图预览</td>
                                <td>
                                    <img src="/htdocs/Uploads/Images/Business/business<?php echo ($k+1); ?>.png?ran=<?php echo ($ran); ?>" height="100px">
                                    <p style="margin-top: 5px;">温馨提示：为保证上传图片与网站布局的美观，上传图片最好为：360 * 189</p>
                                </td>
                            </tr>
                            <tr>
                                <td>上传更新 - 业务范围示意图(<?php echo ($k + 1); ?>)：</td>
                                <td><input type="file" class="form-control" name="businessImg<?php echo ($k); ?>"></td>
                            </tr>
                            <tr>
                                <td width="200px">业务范围(<?php echo ($k + 1); ?>)标题：</td>
                                <td><input name="business_header[]" class="form-control" value="<?php echo ($v["business_header"]); ?>"></td>
                            </tr>
                            <tr>
                                <td>范围(<?php echo ($k + 1); ?>) - 描述：</td>
                                <td><input name="business_text[]" class="form-control" value="<?php echo ($v["business_text"]); ?>"></td>
                            </tr>
                            <tr><td colspan="2"><hr></td></tr><?php endforeach; endif; ?>
                        <tr align="center">
                            <td colspan="2"><input type="submit" value="更新业务范围板块"> &nbsp; | &nbsp; <input type="reset"></td>
                        </tr>
                    </table>
                </form>
            </div>
            <!--END 业务范围-->

            <!-- 发展历程-->
            <div class="form-group" style="display: none;" id='editYear'>
                <form action="/htdocs/index.php/Admin/editIndex/yearUpdate" method="post" enctype="multipart/form-data">
                    <table class="table table-hover" style="width: 80%;margin-left: 40px;">
                        <?php if(is_array($year_info)): foreach($year_info as $k=>$v): ?><tr>
                                <td>年份 (<?php echo ($k + 1); ?>)：</td>
                                <td><input type="text" class="form-control"  name="year_num[]" value="<?php echo ($v["year_num"]); ?>"></td>
                            </tr>
                            <tr>
                                <td width="200px">年份 (<?php echo ($k + 1); ?>)标题：</td>
                                <td><input name="year_title[]" class="form-control" value="<?php echo ($v["year_title"]); ?>"></td>
                            </tr>
                            <tr>
                                <td>年份 (<?php echo ($k + 1); ?>) - 详情描述：</td>
                                <td>
                                    <textarea name="year_text[]" class="form-control" rows="3"><?php echo ($v["year_text"]); ?></textarea>
                                </td>
                            </tr>
                            <tr><td colspan="2"><hr></td></tr><?php endforeach; endif; ?>
                        <tr align="center">
                            <td colspan="2"><input type="submit" value="更新发展历程板块"> &nbsp; | &nbsp; <input type="reset"></td>
                        </tr>
                    </table>
                </form>
            </div>
            <!-- END 发展历程-->

            <!-- 彩电塔-->
            <div class="form-group" style="display: none;" id='editCaita'>
                <form action="/htdocs/index.php/Admin/editIndex/caitaUpdate" method="post" enctype="multipart/form-data">
                    <table class="table table-hover" style="width: 80%;margin-left: 40px;">
                        <tr>
                            <td>彩电塔标题：</td>
                            <td><input type="text" class="form-control"  name="caita_header" value="<?php echo ($ta_info["caita_header"]); ?>"></td>
                        </tr>
                        <tr>
                            <td>彩电塔描述：</td>
                            <td>
                                <textarea name="caita_text" class="form-control" rows="3"><?php echo ($ta_info["caita_text"]); ?></textarea>
                            </td>
                        </tr>

                        <tr><td colspan="2"><hr></td></tr>

                        <tr align="center">
                            <td colspan="2"><input type="submit" value="更新发展历程板块"> &nbsp; | &nbsp; <input type="reset"></td>
                        </tr>
                    </table>
                </form>
            </div>
            <!-- END 彩电塔-->

            <!--页脚部分-->
            <div class="form-group" style="display: none;" id='editFooter'>
                <table class="table table-hover" style="width: 80%;margin-left: 40px;">
                    <form action="/htdocs/index.php/Admin/editIndex/erweiUpdate" method="post" enctype="multipart/form-data">
                        <tr>
                            <td>原图预览：</td>
                            <td>
                                <img src="/htdocs/Uploads/Images/erwei.png?ran=<?php echo ($ran); ?>" height="100px">
                                <p style="margin-top: 5px;">温馨提示：为保证上传图片与网站布局的美观，上传图片最好为：180 * 180</p>
                            </td>
                        </tr>
                        <tr>
                            <td>上传更新 - 选择新的二维码：</td>
                            <td><input type="file" class="form-control" name="ImageErwei"></td>
                        </tr>
                        <tr><td colspan="2"><hr></td></tr>
                        <tr align="center">
                            <td colspan="2"><input type="submit" value="更新二维码"> &nbsp; | &nbsp; <input type="reset"></td>
                        </tr>
                    </form>
                    <form action="Admin/editIndex/footerUpdate" method="post" enctype="multipart/form-data">
                        <tr>
                            <td>公司简介：</td>
                            <td>
                                <textarea name="com_text" class="form-control" rows="2"><?php echo ($com_info["com_text"]); ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>通讯地址：</td>
                            <td><input type="text" class="form-control"  name="com_address" value="<?php echo ($com_info["com_address"]); ?>"></td>
                        </tr>
                        <tr>
                            <td>邮政编码：</td>
                            <td><input type="text" class="form-control"  name="com_postal" value="<?php echo ($com_info["com_postal"]); ?>"></td>
                        </tr>
                        <tr>
                            <td>联系电话：</td>
                            <td><input type="text" class="form-control"  name="com_tel" value="<?php echo ($com_info["com_tel"]); ?>"></td>
                        </tr>
                        <tr>
                            <td>邮箱地址：</td>
                            <td><input type="text" class="form-control"  name="com_email" value="<?php echo ($com_info["com_email"]); ?>"></td>
                        </tr>

                        <tr><td colspan="2"><hr></td></tr>

                        <tr align="center">
                            <td colspan="2"><input type="submit" value="更新页脚公司信息"> &nbsp; | &nbsp; <input type="reset"></td>
                        </tr>
                    </form>
                    <form action="Admin/editIndex/linkUpdate" method="post">
                        <?php if(is_array($link_out_info)): foreach($link_out_info as $key=>$v): ?><tr>
                                <td><input type="text" class="form-control"  name="link_name[]" value="<?php echo ($v["link_name"]); ?>"></td>
                                <td><input type="text" class="form-control"  name="link_url[]" value="<?php echo ($v["link_url"]); ?>"></td>
                            </tr><?php endforeach; endif; ?>


                        <tr><td colspan="2"><hr></td></tr>

                        <tr align="center">
                            <td colspan="2"><input type="submit" value="更新相关链接"> &nbsp; | &nbsp; <input type="reset"></td>
                        </tr>
                    </form>
                </table>
            </div>
            <!--END 页脚部分-->

		</div>

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
	<!--<script src="../Admin/assets/vendor/bootstrap/js/bootstrap.min.js"></script>-->
	<!--<script src="../Admin/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>-->
	<!--<script src="../Admin/assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>-->
	<!--<script src="../Admin/assets/vendor/chartist/js/chartist.min.js"></script>-->
	<!--<script src="../Admin/assets/scripts/klorofil-common.js"></script>-->
	<script type="text/javascript">
		$(function(){
            $(".dropdown").removeClass("active");
            $("#eIndex").addClass("active");

            $("#editBanner").slideDown('slow');
			$("#disBannerBtn").click(function(event) {
				/* Act on the event */
                btnDown($("#editBanner"), $(this));
            });
            $("#disCompanyBtn").click(function(event) {
                /* Act on the event */
                btnDown($("#editCompany"), $(this));
            });
            $("#disServeBtn").click(function(event) {
                /* Act on the event */
                btnDown($("#editServe"), $(this));
            });
            $("#disSloganBtn").click(function(event) {
                /* Act on the event */
                btnDown($("#editSlogan"), $(this));
			});
            $("#disWorkBtn").click(function(event) {
                /* Act on the event */
                btnDown($("#editWork"), $(this));
			});
            $("#disBusinesskBtn").click(function(event) {
                /* Act on the event */
                btnDown($("#editBusiness"), $(this));
			});
            $("#disYearBtn").click(function(event) {
                /* Act on the event */
                btnDown($("#editYear"), $(this));
			});
            $("#disCaitaBtn").click(function(event) {
                /* Act on the event */
                btnDown($("#editCaita"), $(this));
			});
            $("#disFooterBtn").click(function(event) {
                /* Act on the event */
                btnDown($("#editFooter"), $(this));
			});
            function btnDown(div,btn){
                $("div[class='form-group']").hide()
                $("h2").removeClass('btnStyleDown');
                div.slideDown('slow');
                btn.addClass('btnStyleDown');
            }
		});
	</script>
</body>

</html>