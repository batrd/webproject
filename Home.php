<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap-4.1.3.min.css" rel="stylesheet">
	<link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="css/home.css" rel="stylesheet">
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap-4.1.3.min.js"></script>
	<script src="js/get-product.js"></script>
	<script src="js/jquery-form.js"></script>
	<title>主页</title>
</head>
<?php
header( "Content-Type: text/html;charset=utf-8" );
require 'php/contactmysql.php';
session_start();

?>

<body data-spy="scroll" data-target=".navbar" data-offset="30" id="mypage">
	<!--<div class="col-12 warning"><div class="alert alert-info alert-dismissable fade show">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>建议！</strong> pc端访问效果更佳
  </div></div>-->
	<nav class="navbar navbar-expand-md bg-dark navbar-dark position-sticky  shadow-sm" id="nav">
		<!-- Brand -->
		<a class="navbar-brand" href="#">IW Shop</a>

		<!-- Toggler/collapsibe Button -->
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar"> <span class="navbar-toggler-icon"></span> </button>

		<!-- Navbar links -->
		<div class="collapse navbar-collapse" id="collapsibleNavbar">
			<ul class="navbar-nav ">
				<li class="nav-item"> <a class="nav-link" href="#home">主页</a> </li>
				<li class="nav-item"> <a class="nav-link" href="#phone">手机</a> </li>
				<li class="nav-item"> <a class="nav-link" href="#jiadian">家电</a> </li>
				<li class="nav-item"> <a class="nav-link" href="#zhineng">智能</a> </li>
				<li class="nav-item"> <a class="nav-link" href="#peijian">配件</a> </li>
				<li class="nav-item"> <a class="nav-link" href="#zhoubian">周边</a> </li>
				<li class="nav-item"> <a class="nav-link" href="#contact">联系我们</a> </li>
			</ul>
		</div>
		<form class="float-right form-inline hidden" id="form_relogin">
			<?php if ( isset( $_SESSION[ 'user' ] ) ) {
	echo '<span><a id="loginout" onclick="loginout()" href="#" class="mr-2 text-price" data-toggle="tooltip" data-placement="bottom" title="点击退出">欢迎用户:' . $_SESSION[ 'user' ] . '</a></span>';
} else {
	echo "<label class='form-control mr-1' id='userinfo'><a href='javascript:viod(0)' data-toggle='modal' data-target='#login'>登录/注册</a></label>";}?>
			<!--<label class="form-control mr-1"><a href="#re_log.php">注册</a></label>-->

			<label class="form-control"><i class="fa fa-shopping-cart"></i><a href="#" > 购物车</a></label>
			<div class="navbar-search">
				<input type="text" class="form-control ml-1" placeholder="Search...">
				<button class="btn btn-info"><i class="fa fa-search"></i></button>
			</div>
		</form>
	</nav>
	<!-- 模态框 -->
	<div class="modal fade col-md-4 col-10 center" id="login">
		<div class="modal-dialog">
			<div class="modal-content">

				<!-- 模态框头部 -->
				<div class="modal-header bg-dark">
					<h5 class="modal-title text-white">账号登录</h5>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				<!-- 模态框主体 -->
				<div class="modal-body">
					<form id="login-form" action="php/logo.php" method="post" onSubmit="return login();">
						<div class="form-group">
							<label for="name"><i class="fa fa-user text-price"></i> 用户名
				<strong class="text-danger">请输入用户名</strong></label>
							<input type="text" id="name" name="name" class="form-control" placeholder="请输入用户名...">
						</div>
						<div class="form-group">
							<label for="pwd"><i class="fa fa-lock text-price"></i> 密码
				<strong class="text-danger">请输入密码</strong></label>
							<input type="password" id="pwd" name="pwd" class="form-control" placeholder="请输入密码...">
						</div>
						<div class="form-group">
							<input type="checkbox" checked> 记住密码
							<a href="#" class="float-right">忘记密码?</a>
						</div>

						<button type="submit" class="btn form-control btn-outline-info">登录</button>
						<div class="form-group">
							<a href="login-re.html" class="float-right text-danger">还没有账号，立即注册 <i class="fa fa-chevron-circle-right"></i></a>
						</div>
					</form>
				</div>

				<!-- 模态框底部 -->
				<!--<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">关闭</button>
      </div>-->

			</div>
		</div>
	</div>
	<div id="home">
		<div class="navbar bg-w navbar-expand-md navbar-light hidden" id="nav_1" style="position: relative">
			<div class="container justify-content-start"> <a class="navbar-brand" href="#">IW</a>
				<ul class=" navbar-nav ">
					<li class="nav-item"><a href="#x1" class="nav-link" onClick="return false;">小米手机</a> </li>
					<li class="nav-item"><a href="#d1" class="nav-link" onClick="return false;">电视</a> </li>
					<li class="nav-item"><a href="#b1" class="nav-link" onClick="return false;">笔记本</a> </li>
					<li class="nav-item"><a href="#l1" class="nav-link" onClick="return false;">路由器</a> </li>
					<li class="nav-item"><a href="#y1" class="nav-link" onClick="return false;">智能硬件</a> </li>
					<li class="nav-item"><a href="#" class="nav-link" onClick="return false;">服务</a> </li>
					<li class="nav-item"><a href="#" class="nav-link" onClick="return false;">社区</a> </li>
				</ul>
				<form class="form-inline ml-auto">
					<input type="text" class="form-control" placeholder="Search...">
					<button class="btn btn-info ml-1"><i class="fa fa-search"></i></button>
				</form>
			</div>
			<div id="x1" class=" nn">
				<div class="container-fluid">
					<div class="row text-center justify-content-center">
						<div class="col-md-11">
							<div class="row">
								<div class="col-2"> <a href="#"><img src="img/x1/x1.1.png" alt="x1" class="img-fluid" width="80%"></a>
									<h5 class="text-secondary"><small>小米MIX3</small></h5>
									<p class="text-price"><small>3299元起</small>
									</p>
								</div>
								<div class="col-2"> <a href="#"><img src="img/x1/x1.2.png" alt="x2" class="img-fluid" width="80%"></a>
									<h5 class="text-secondary"><small>小米8青春版</small></h5>
									<p class="text-price"><small>1399元起</small>
									</p>
								</div>
								<div class="col-2"> <a href="#"><img src="img/x1/x1.3.png" alt="x3" class="img-fluid" width="80%"></a>
									<h5 class="text-secondary"><small>小米8屏幕指纹版</small></h5>
									<p class="text-price"><small>3199元起</small>
									</p>
								</div>
								<div class="col-2"> <a href="#"><img src="img/x1/x1.4.png" alt="x4" class="img-fluid" width="80%"></a>
									<h5 class="text-secondary"><small>小米8</small></h5>
									<p class="text-price"><small>2699元起</small>
									</p>
								</div>
								<div class="col-2"> <a href="#"><img src="img/x1/x1.5.png" alt="x5" class="img-fluid" width="80%"></a>
									<h5 class="text-secondary"><small>小米8Se</small></h5>
									<p class="text-price"><small>1799元起</small>
									</p>
								</div>
								<div class="col-2"> <a href="#"><img src="img/x1/x1.6.png" alt="x6" class="img-fluid" width="80%"></a>
									<h5 class="text-secondary"><small>小米MAX3</small></h5>
									<p class="text-price"><small>1699元起</small>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="d1" class="nn" data-parent="#nav_1">
				<div class="container-fluid">
					<div class="row text-center justify-content-center">
						<div class="col-md-11 center">
							<div class="row">
								<div class="col-2"> <a href="#"><img src="img/d1/1.png" alt="d1" class="img-fluid" width="80%"></a>
									<h5 class="text-secondary"><small>小米电视4S 75英寸</small></h5>
									<p class="text-price"><small>7999元起</small>
									</p>
								</div>
								<div class="col-2"> <a href="#"><img src="img/d1/2.png" alt="d2" class="img-fluid" width="80%"></a>
									<h5 class="text-secondary"><small>小米4A 32英寸</small></h5>
									<p class="text-price"><small>899元起</small>
									</p>
								</div>
								<div class="col-2"> <a href="#"><img src="img/d1/3.jpg" alt="d3" class="img-fluid" width="80%"></a>
									<h5 class="text-secondary"><small>小米4A 43英寸青春版</small></h5>
									<p class="text-price"><small>1499元起</small>
									</p>
								</div>
								<div class="col-2"> <a href="#"><img src="img/d1/4.png" alt="d4" class="img-fluid" width="80%"></a>
									<h5 class="text-secondary"><small>小米4A 50英寸</small></h5>
									<p class="text-price"><small>1999元起</small>
									</p>
								</div>
								<div class="col-2"> <a href="#"><img src="img/d1/5.png" alt="d5" class="img-fluid" width="80%"></a>
									<h5 class="text-secondary"><small>小米电视4A 55英寸</small></h5>
									<p class="text-price"><small>2499元起</small>
									</p>
								</div>
								<div class="col-2"> <a href="#"><img src="img/d1/6.png" alt="d6" class="img-fluid" width="80%"></a>
									<h5 class="text-secondary"><small>查看全部</small></h5>
									<p><small>小米电视</small>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="b1" class="nn">
				<div class="container-fluid">
					<div class="row text-center justify-content-center">
						<div class="col-md-11 center">
							<div class="row">
								<div class="col-md-2"> <a href="#"><img src="img/b1/1.png" alt="b1" class="img-fluid" width="80%"></a>
									<h5 class="text-secondary"><small>小米笔记本Air 12.5</small></h5>
									<p class="text-price"><small>3599元起</small>
									</p>
								</div>
								<div class="col-md-2"> <a href="#"><img src="img/b1/2.jpg" alt="b2" class="img-fluid" width="80%"></a>
									<h5 class="text-secondary"><small>小米笔记本Air 13.3</small></h5>
									<p class="text-price"><small>4999元起</small>
									</p>
								</div>
								<div class="col-md-2"> <a href="#"><img src="img/b1/3.jpg" alt="b3" class="img-fluid" width="80%"></a>
									<h5 class="text-secondary"><small>小米笔记本15.6</small></h5>
									<p class="text-price"><small>4199元起</small>
									</p>
								</div>
								<div class="col-md-2"> <a href="#"><img src="img/b1/4.png" alt="b4" class="img-fluid" width="80%"></a>
									<h5 class="text-secondary"><small>小米笔记本Pro 15.6</small></h5>
									<p class="text-price"><small>5599元起</small>
									</p>
								</div>
								<div class="col-md-2"> <a href="#"><img src="img/b1/5.png" alt="b5" class="img-fluid" width="85%"></a>
									<h5 class="text-secondary"><small>小米游戏本</small></h5>
									<p class="text-price"><small>6699元起</small>
									</p>
								</div>
								<div class="col-md-2"> <a href="#"><img src="img/b1/6.png" alt="b6" class="img-fluid" width="80%"></a>
									<h5 class="text-secondary"><small>小米游戏本Pro</small></h5>
									<p class="text-price"><small>6999元起</small>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="l1" class="nn">
				<div class="container-fluid">
					<div class="row text-center justify-content-center">
						<div class="col-md-11 center">
							<div class="row">
								<div class="col-md-2"> <a href="#"><img src="img/l1/1.png" alt="x1" class="img-fluid" width="80%"></a>
									<h5 class="text-secondary"><small>小米路由器4</small></h5>
									<p class="text-price"><small>179元起</small>
									</p>
								</div>
								<div class="col-md-2"> <a href="#"><img src="img/l1/2.png" alt="x1" class="img-fluid" width="80%"></a>
									<h5 class="text-secondary"><small>小米路由器4Q</small></h5>
									<p class="text-price"><small>99元起</small>
									</p>
								</div>
								<div class="col-md-2"> <a href="#"><img src="img/l1/3.png" alt="x1" class="img-fluid" width="80%"></a>
									<h5 class="text-secondary"><small>小米路由器3A</small></h5>
									<p class="text-price"><small>139元起</small>
									</p>
								</div>
								<div class="col-md-2"> <a href="#"><img src="img/l1/4.png" alt="x1" class="img-fluid" width="80%"></a>
									<h5 class="text-secondary"><small>小米路由器3G</small></h5>
									<p class="text-price"><small>189元起</small>
									</p>
								</div>
								<div class="col-md-2"> <a href="#"><img src="img/l1/5.png" alt="x1" class="img-fluid" width="80%"></a>
									<h5 class="text-secondary"><small>小米路由器HD/Pro</small></h5>
									<p class="text-price"><small>499元起</small>
									</p>
								</div>
								<div class="col-md-2"> <a href="#"><img src="img/l1/6.png" alt="x1" class="img-fluid" width="80%"></a>
									<h5 class="text-secondary"><small>查看全部</small></h5>
									<p class="text-price"><small>小米路由器</small>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="y1" class="nn">
				<div class="container-fluid">
					<div class="row text-center justify-content-center">
						<div class="col-md-11 center">
							<div class="row">
								<div class="col-md-2"> <a href="#"><img src="img/y1/1.jpg" alt="y1" class="img-fluid" width="80%"></a>
									<h5 class="text-secondary"><small>米家扫地机器人</small></h5>
									<p class="text-price"><small>1699元起</small>
									</p>
								</div>
								<div class="col-md-2"> <a href="#"><img src="img/y1/2.jpg" alt="y2" class="img-fluid" width="80%"></a>
									<h5 class="text-secondary"><small>小米智能音箱</small></h5>
									<p class="text-price"><small>169元起</small>
									</p>
								</div>
								<div class="col-md-2"> <a href="#"><img src="img/y1/3.jpg" alt="y3" class="img-fluid" width="80%"></a>
									<h5 class="text-secondary"><small>米家电饭煲</small></h5>
									<p class="text-price"><small>1099元起</small>
									</p>
								</div>
								<div class="col-md-2"> <a href="#"><img src="img/y1/4.jpg" alt="y4" class="img-fluid" width="80%"></a>
									<h5 class="text-secondary"><small>米家空气净化器Pro</small></h5>
									<p class="text-price"><small>1499元起</small>
									</p>
								</div>
								<div class="col-md-2"> <a href="#"><img src="img/y1/5.jpg" alt="y5" class="img-fluid" width="80%"></a>
									<h5 class="text-secondary"><small>米家智能剃须刀</small></h5>
									<p class="text-price"><small>169元起</small>
									</p>
								</div>
								<div class="col-md-2"> <a href="#"><img src="img/y1/6.jpg" alt="y6" class="img-fluid" width="80%"></a>
									<h5 class="text-secondary"><small>查看全部</small></h5>
									<p class="text-price"><small>小米智能硬件</small>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row mb-3">
				<div class="col-12">
					<div id="demo" class="carousel slide" data-ride="carousel">
						<!-- 指示符 -->
						<ul class="carousel-indicators">
							<li data-target="#demo" data-slide-to="0" class="active"></li>
							<li data-target="#demo" data-slide-to="1"></li>
							<li data-target="#demo" data-slide-to="2"></li>
							<li data-target="#demo" data-slide-to="3"></li>
							<li data-target="#demo" data-slide-to="4"></li>
						</ul>
						<!-- 轮播图片 -->
						<div class="carousel-inner">
							<div class="carousel-item active"> <img src="img/home/1.1.jpg" alt="home_1" class="img-fluid" width="100%"> </div>
							<div class="carousel-item"> <img src="img/home/2.jpg" alt="home_2" class="img-fluid" width="100%"> </div>
							<div class="carousel-item"> <img src="img/home/3.jpg" alt="home_3" class="img-fluid" width="100%"> </div>
							<div class="carousel-item"> <img src="img/home/4.jpg" alt="home_4" class="img-fluid" width="100%"> </div>
							<div class="carousel-item"> <img src="img/home/5.jpg" alt="home_5" class="img-fluid" width="100%"> </div>
						</div>
						<!-- 左右切换按钮 -->
						<a class="carousel-control-prev" href="#demo" data-slide="prev"> <i class="fa fa-chevron-left" style="color: #ff6700;font-size: 1.5rem;"></i> </a> <a class="carousel-control-next" href="#demo" data-slide="next"> <i class="fa fa-chevron-right" style="color: #ff6700;font-size: 1.5rem;"></i> </a> </div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 col-6"> <a href="#"><img src="img/ax/2.jpg" class="img-fluid" width="100%" alt="ax_2"></a> </div>
				<div class="col-md-3 col-6"> <a href="#"><img src="img/ax/1.jpg" class="img-fluid" width="100%" alt="ax_1"></a> </div>
				<div class="col-md-3 col-6"> <a href="#"><img src="img/ax/3.jpg" class="img-fluid" width="100%" alt="ax_3"></a> </div>
				<div class="col-md-3 col-6"> <a href="#"><img src="img/ax/4.jpg" class="img-fluid" width="100%" alt="ax_4"></a> </div>
			</div>
		</div>
	</div>
	<div id="sangou">
		<div class="container-fluid" style="position: relative;">
			<div class="row">
				<div class="col-12">
					<h2><small>闪购</small></h2>
				</div>
			</div>
			<div class="control-span"> <a href="#left"><span class="fa fa-caret-left p-1"></span></a> <a href="#right"><span class="fa fa-caret-right p-1"></span></a> </div>
			<div class="row">
				<div class="col-md-2 col-2 text-center hidden" id="time">
					<div class="row flex-column">
						<h3 class="text-danger mb-3">20:00场</h3>
						<p class="text-danger"><i class="fa fa-flash fa-5x"></i>
						</p>
						<h3 class="text-secondary mb-3"><small>距开始还有</small></h3>
						<div class="row justify-content-center">
							<div class="time bg-dark text-light">00</div>
							<div class="p-1">:</div>
							<div class="time bg-dark text-light">00</div>
							<div class="p-1">:</div>
							<div class="time bg-dark text-light">00</div>
						</div>
					</div>
				</div>
				<div class="col-md-10 col-12" id="sc">
					<div class="row flex-nowrap">
						<div class="col-md-3 col-6">
							<div class="border-top border-info" align="center"> 
                            <p class="mb-0"><span class="badge badge-success mb-2">新品</span> <p>
                            <a href="#"><img src="img/phone/r_1.png" alt="r1" class="img-fluid" width="70%"></a>
								<p class="mb-2 mt-2">小米8 青春版 4+64GB</p>
								<p class="text-secondary mb-2"><small>潮流镜面渐变色，2400万自拍旗舰</small>
								</p>
								<span>1399元</span> </div>
						</div>
						<div class="col-md-3 col-6 ">
							<div class=" border-top border-danger" align="center">
                            <p class="mb-0"> <span class="badge badge-success mb-2">新品</span> </p>
                             <a href="#"><img src="img/phone/r_1.png" alt="r1" class="img-fluid" width="70%"></a>
								<p class="mb-2 mt-2">小米8 青春版 4+64GB</p>
								<p class="text-secondary mb-2"><small>潮流镜面渐变色，2400万自拍旗舰</small>
								</p>
								<span>1399元</span> </div>
						</div>
						<div class="col-md-3 col-6">
							<div class=" border-top border-dark" align="center">
                            <p class="mb-0"> <span class="badge badge-success mb-2">新品</span> </p>
                            <a href="#"><img src="img/phone/r_1.png" alt="r1" class="img-fluid" width="70%"></a>
								<p class="mb-2 mt-2">小米8 青春版 4+64GB</p>
								<p class="text-secondary mb-2"><small>潮流镜面渐变色，2400万自拍旗舰</small>
								</p>
								<span>1399元</span> </div>
						</div>
						<div class="col-md-3 col-6">
							<div class="border-top border-success" align="center">
                            <p class="mb-0"> <span class="badge badge-success mb-2">新品</span> </p>
                             <a href="#"><img src="img/phone/r_1.png" alt="r1" class="img-fluid" width="70%"></a>
								<p class="mb-2 mt-2">小米8 青春版 4+64GB</p>
								<p class="text-secondary mb-2"><small>潮流镜面渐变色，2400万自拍旗舰</small>
								</p>
								<span>1399元</span> </div>
						</div>
						<div class="col-md-3 col-6">
							<div class=" border-top border-danger" align="center">
                             <p class="mb-0"><span class="badge badge-success mb-2">新品</span></p>
                              <a href="#"><img src="img/phone/r_1.png" alt="r1" class="img-fluid" width="70%"></a>
								<p class="mb-2 mt-2">小米8 青春版 4+64GB</p>
								<p class="text-secondary mb-2"><small>潮流镜面渐变色，2400万自拍旗舰</small>
								</p>
								<span>1399元</span> </div>
						</div>
						<div class="col-md-3 col-6">
							<div class="border-top border-success" align="center">
                             <p class="mb-0"><span class="badge badge-success mb-2">新品</span> </p>
                             <a href="#"><img src="img/phone/r_1.png" alt="r1" class="img-fluid" width="70%"></a>
								<p class="mb-2 mt-2">小米8 青春版 4+64GB</p>
								<p class="text-secondary mb-2"><small>潮流镜面渐变色，2400万自拍旗舰</small>
								</p>
								<span>1399元</span> </div>
						</div>
						<div class="col-md-3 col-6">
							<div class=" border-top border-info" align="center"> 
                            <p class="mb-0"><span class="badge badge-success mb-2">新品</span> </p>
                            <a href="#"><img src="img/phone/r_1.png" alt="r1" class="img-fluid" width="70%"></a>
								<p class="mb-2 mt-2">小米8 青春版 4+64GB</p>
								<p class="text-secondary mb-2"><small>潮流镜面渐变色，2400万自拍旗舰</small>
								</p>
								<span>1399元</span> </div>
						</div>
						<div class="col-md-3 col-6">
							<div class=" border-top border-info" align="center"> 
                            <p class="mb-0"><span class="badge badge-success mb-2">新品</span> </p>
                            <a href="#"><img src="img/phone/r_1.png" alt="r1" class="img-fluid" width="70%"></a>
								<p class="mb-2 mt-2">小米8 青春版 4+64GB</p>
								<p class="text-secondary mb-2"><small>潮流镜面渐变色，2400万自拍旗舰</small>
								</p>
								<span>1399元</span> </div>
						</div>
						<div class="col-md-3 col-6">
							<div class=" border-top border-success" align="center">
                            <p class="mb-0"> <span class="badge badge-success mb-2">新品</span></p>
                              <a href="#"><img src="img/phone/r_1.png" alt="r1" class="img-fluid" width="70%"></a>
								<p class="mb-2 mt-2">小米8 青春版 4+64GB</p>
								<p class="text-secondary mb-2"><small>潮流镜面渐变色，2400万自拍旗舰</small>
								</p>
								<span>1399元</span> </div>
						</div>
						<div class="col-md-3 col-6">
							<div class=" border-top border-danger" align="center">
                             <p class="mb-0"><span class="badge badge-success mb-2">新品</span> </p>
                             <a href="#"><img src="img/phone/r_1.png" alt="r1" class="img-fluid" width="70%"></a>
								<p class="mb-2 mt-2">小米8 青春版 4+64GB</p>
								<p class="text-secondary mb-2"><small>潮流镜面渐变色，2400万自拍旗舰</small>
								</p>
								<span>1399元</span> </div>
						</div>
						<div class="col-md-3 col-6">
							<div class=" border-top border-success" align="center">
                             <p class="mb-0"><span class="badge badge-success mb-2">新品</span></p>
                              <a href="#"><img src="img/phone/r_1.png" alt="r1" class="img-fluid" width="70%"></a>
								<p class="mb-2 mt-2">小米8 青春版 4+64GB</p>
								<p class="text-secondary mb-2"><small>潮流镜面渐变色，2400万自拍旗舰</small>
								</p>
								<span>1399元</span> </div>
						</div>
						<div class="col-md-3 col-6">
							<div class=" border-top border-info" align="center">
                            <p class="mb-0"> <span class="badge badge-success mb-2">新品</span></p>
                              <a href="#"><img src="img/phone/r_1.png" alt="r1" class="img-fluid" width="70%"></a>
								<p class="mb-2 mt-2">小米8 青春版 4+64GB</p>
								<p class="text-secondary mb-2"><small>潮流镜面渐变色，2400万自拍旗舰</small>
								</p>
								<span>1399元</span> </div>
						</div>
					</div>
				</div>
			</div>
			<div class="row mt-4">
				<div class="col-12"> <a href="#phone"><img src="img/mid/1.jpg" class="img-fluid" width="100%" alt="mid_1"></a>
				</div>
			</div>
		</div>
	</div>
	<div id="phone" class="bg-light">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<h2><small>手机</small></h2>
				</div>
				<div class="col-md-2 col-5" id="more">
					<a href="#phone">查看更多 <i class="fa fa-chevron-circle-right"></i></a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2 hidden "> <a href="#"><img src="img/phone/left.jpg" class="img-fluid img-left" width="100%" alt="phone_left"></a> </div>
				<div class="col-md-10 col-12 text-center">
					<div class="row flex-wrap">
						<!--<div class="col-md-3 col-6" >
            <div class="box">
              <p class="mb-1"><span class="badge badge-success">新品</span></p>
              <a href="#"><img src="img/phone/r_8.png" class="img-fluid" width="50%" alt="phone_8"></a>
              <p class="mb-1">小米8 青春版 4+64GB</p>
              <p class="text-secondary mb-1"><small>潮流镜面渐变色，2400万自拍旗舰</small></p>
              <span class="text-price">1399元</span> </div>
          </div>
          <div class="col-md-3 col-6 " >
            <div class="box">
              <p class="mb-1"><span class="badge badge-success">新品</span></p>
              <a href="#"><img src="img/phone/r_1.png" class="img-fluid" width="50%" alt="phone_1"></a>
              <p class="mb-1">小米8 屏幕指纹版 4+64GB</p>
              <p class="text-secondary mb-1"><small>全球首款压感屏幕指纹</small></p>
              <span class="text-price">3599元</span> </div>
          </div>
          <div class="col-md-3 col-6 " >
            <div class="box">
              <p class="mb-1"><span class="badge badge-danger">减300元</span></p>
              <a href="#"><img src="img/phone/r_4.png" class="img-fluid" width="50%" alt="phone_4"></a>
              <p class="mb-1">小米8 SE 4+64GB</p>
              <p class="text-secondary mb-1"><small>AI超感光摄，三星AMLOLED屏幕</small></p>
              <span class="text-price">1499元 </span><del>1799元</del> </div>
          </div>
          <div class="col-md-3 col-6 " >
            <div class="box">
              <p class="mb-1"><span class="badge badge-danger">减600元</span></p>
              <a href="#"><img src="img/phone/r_2.png" class="img-fluid" width="50%" alt="phone_2"></a>
              <p class="mb-1">小米MIX 2s 8+256GB</p>
              <p class="text-secondary mb-1"><small>晓龙845年度处理器，艺术品...</small></p>
              <span class="text-price">3399元 </span><del>3999元</del> </div>
          </div>
          <div class="col-md-3 col-6 " >
            <div class="box">
              <p class="mb-1"><span class="badge badge-danger">减350元</span></p>
              <a href="#"><img src="img/phone/r_3.png" class="img-fluid" width="50%" alt="phone_3"></a>
              <p class="mb-1">小米6x  6+128GB</p>
              <p class="text-secondary mb-1"><small>轻薄美观的拍照手机</small></p>
              <span class="text-price">1649元 </span><del>1999元</del> </div>
          </div>
          <div class="col-md-3 col-6 " >
            <div class="box">
              <p class="mb-1"><span class="badge badge-danger">减100元</span></p>
              <a href="#"><img src="img/phone/r_5.png" class="img-fluid" width="50%" alt="phone_1"></a>
              <p class="mb-1">小米MAX 3+64GB</p>
              <p class="text-secondary mb-1"><small>超大屏幕手机</small></p>
              <span class="text-price">1599元 </span><del>1699元</del> </div>
          </div>
          <div class="col-md-3 col-6 " >
            <div class="box">
              <p class="mb-1"><span class="badge badge-danger">减130元</span></p>
              <a href="#"><img src="img/phone/r_6.png" class="img-fluid" width="50%" alt="phone_6"></a>
              <p class="mb-1">红米6 Pro 3+32GB</p>
              <p class="text-secondary mb-1"><small>潮流镜面渐变色，2400万自拍旗舰</small></p>
              <span class="text-price">869元 </span><del>999元</del> </div>
          </div>
          <div class="col-md-3 col-6" >
            <div class="box">
              <p class="mb-1"><span class="badge badge-danger">减30元</span></p>
              <a href="#"><img src="img/phone/r_7.png" class="img-fluid" width="50%" alt="phone_7"></a>
              <p class="mb-1">红米6A 2+16GB</p>
              <p class="text-secondary mb-1"><small>高性价比手机</small></p>
              <span class="text-price">569元 </span><del>699元</del> </div>
          </div>-->
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="jiadian" class="bg-light">
		<div class="container-fluid">
			<div class="row mb-4">
				<div class="col-12"> <a href="#jiadian"><img src="img/mid/2.jpg" class="img-fluid" width="100%" alt="mid_2"></a> </div>
			</div>
			<div class="row">
				<div class="col-12">
					<h2><small>家电</small></h2>
				</div>
				<div class="col-md-2 col-6 tabs">
					<div class="row justify-content-between">
						<a href="#jiadian" class="active">热门</a>
						<a href="#jiadian">电视影音</a>
						<a href="#jiadian">电脑</a>
						<a href="#jiadian">家居</a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2 hidden "> <a href="#"><img src="img/jiadian/left.jpg" class="img-fluid mb-2 img-left" width="100%" alt="jiadian_left"></a> <a href="#"><img src="img/jiadian/left_2.jpg" class="img-fluid img-left" width="100%" alt="jiadian_left2"></a> </div>
				<div class="col-md-10 col-12 text-center">
					<div class="row flex-wrap">
						<!--<div class="col-md-3 col-6" >
            <div class="box">
              <p class="mb-1"><span class="badge badge-success">新品</span></p>
              <a href="#"><img src="img/jiadian/1.jpg" class="img-fluid" width="50%" alt="jiadian_1"></a>
              <p class="mb-1">小米电视4S 75英寸</p>
              <p class="text-secondary mb-1"><small>75英寸沉浸体验</small></p>
              <span class="text-price">7999元</span>
              <div class="col-12 mm">
                <p class="text-center m-0">
                  <button class="btn btn-info">立即加入 <i class="fa fa-shopping-cart"></i></button>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-6 " >
            <div class="box">
              <p class="mb-1"><span class="badge badge-danger">减200元</span></p>
              <a href="#"><img src="img/jiadian/2.jpg" class="img-fluid" width="50%" alt="jiadian_2"></a>
              <p class="mb-1">小米电视4A 43英寸青春版</p>
              <p class="text-secondary mb-1"><small>全高清屏/人工智能语音</small></p>
              <span class="text-price">1499元 </span><del>1699元</del>
              <div class="col-12 mm">
                <p class="text-center m-0">
                  <button class="btn btn-info">立即加入 <i class="fa fa-shopping-cart"></i></button>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-6 " >
            <div class="box">
              <p class="mb-1"><span class="badge badge-success">新品</span></p>
              <a href="#"><img src="img/jiadian/3.png" class="img-fluid" width="50%" alt="jiadian_3"></a>
              <p class="mb-1">15.6笔记本 i5 4G MX110</p>
              <p class="text-secondary mb-1"><small>全面均衡的国民轻薄本</small></p>
              <span class="text-price">4199元</span>
              <div class="col-12 mm">
                <p class="text-center m-0">
                  <button class="btn btn-info">立即加入 <i class="fa fa-shopping-cart"></i></button>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-6 " >
            <div class="box">
              <p class="mb-1"><span class="badge badge-success">新品</span></p>
              <a href="#"><img src="img/jiadian/4.jpg" class="img-fluid" width="50%" alt="jiadian_4"></a>
              <p class="mb-1">13.3小米笔记本Air 四核i7 8G</p>
              <p class="text-secondary mb-1"><small>高性能独立显卡</small></p>
              <span class="text-price">5999元</span>
              <div class="col-12 mm">
                <p class="text-center m-0">
                  <button class="btn btn-info">立即加入 <i class="fa fa-shopping-cart"></i></button>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-6 " >
            <div class="box">
				<p class="mb-1"><span class="badge badge-success">新品</span></p>
              <a href="#"><img src="img/jiadian/5.png" class="img-fluid" width="50%" alt="jiadian_5"></a>
              <p class="mb-1">米家空气净化器Pro</p>
              <p class="text-secondary mb-1"><small>OLED显示屏幕/激光颗粒物传感器</small></p>
              <span class="text-price">1399元</span>
              <div class="col-12 mm">
                <p class="text-center m-0">
                  <button class="btn btn-info">立即加入 <i class="fa fa-shopping-cart"></i></button>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-6 " >
            <div class="box">
               <p class="mb-1"><span class="badge badge-success">新品</span></p>
              <a href="#"><img src="img/jiadian/6.jpg" class="img-fluid" width="50%" alt="jiadian_6"></a>
              <p class="mb-1">米家电水壶</p>
              <p class="text-secondary mb-1"><small>一杯水是家人的安心</small></p>
              <span class="text-price">99元</span>
              <div class="col-12 mm">
                <p class="text-center m-0">
                  <button class="btn btn-info">立即加入 <i class="fa fa-shopping-cart"></i></button>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-6 " >
            <div class="box">
              <p class="mb-1"><span class="badge badge-success">新品</span></p>
              <a href="#"><img src="img/jiadian/7.png" class="img-fluid" width="50%" alt="jiadian_7"></a>
              <p class="mb-1">米家LED吸顶灯</p>
              <p class="text-secondary mb-1"><small>用光线还原理想生活</small></p>
              <span class="text-price">399元</span>
              <div class="col-12 mm">
                <p class="text-center m-0">
                  <button class="btn btn-info">立即加入 <i class="fa fa-shopping-cart"></i></button>
                </p>
              </div>
            </div>
          </div>-->
						<div class="col-md-3 col-6 zz">
							<div class="boxs mb-2 col-12">
								<div class="row">
									<div class="col-7 p-4">
										<p class="text-center text-secondary mb-0">小米净水器...</p>
										<p class="text-price"><small>1998元</small>
										</p>
									</div>
									<div class="col-5"><a href="#"><img src="img/jiadian/s.jpg" class="img-fluid" width="100%" alt="jiadian_s"></a>
									</div>
								</div>
							</div>
							<div class="boxs col-12">
								<div class="row">
									<div class="col-7 p-4 p2">
										<p class="text-center mb-0">浏览更多...</p>
										<p class="text-secondary"><small>热门</small>
										</p>
									</div>
									<div class="col-5 p-3">
										<p class="text-center"><a href="#jiadian"><i class="fa fa-arrow-circle-o-right fa-3x fa-spin text-price"></i></a>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="zhineng" class="bg-light">
		<div class="container-fluid">
			<div class="row mb-4">
				<div class="col-12"> <a href="#jiadian"><img src="img/mid/3.jpg" class="img-fluid" width="100%" alt="mid_2"></a> </div>
			</div>
			<div class="row">
				<div class="col-12">
					<h2><small>智能</small></h2>
				</div>
				<div class="col-md-2 col-6 tabs">
					<div class="row justify-content-between">
						<a href="#jiadian" class="active">热门</a>
						<a href="#jiadian">出行</a>
						<a href="#jiadian">健康</a>
						<a href="#jiadian">酷玩</a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2 hidden "> <a href="#"><img src="img/zhineng/left-1.jpg" class="img-fluid mb-2 img-left" width="100%" alt="jiadian_left"></a> <a href="#"><img src="img/zhineng/left-2.jpg" class="img-fluid img-left" width="100%" alt="jiadian_left2"></a> </div>
				<div class="col-md-10 col-12 text-center">
					<div class="row flex-wrap">
						<!--<div class="col-md-3 col-6" >
            <div class="box">
              <p class="mb-1"><span class="badge badge-danger">减10元</span></p>
              <a href="#"><img src="img/zhineng/1png.png" class="img-fluid" width="50%" alt="zhineng_1"></a>
              <p class="mb-1">米家飞利浦智睿台灯二代</p>
              <p class="text-secondary mb-1"><small>感知环境光，主动优化场景照明</small></p>
              <span class="text-price">189元 </span><del>199元</del>
              <div class="col-12 mm">
                <p class="text-center m-0">
                  <button class="btn btn-info">立即加入 <i class="fa fa-shopping-cart"></i></button>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-6 " >
            <div class="box">
              <p class="mb-1"><span class="badge badge-success">新品</span></p>
              <a href="#"><img src="img/zhineng/2.jpg" class="img-fluid" width="50%" alt="zhineng_2"></a>
              <p class="mb-1">小米手环3</p>
              <p class="text-secondary mb-1"><small>微信、QQ来电等消息内容直接显示</small></p>
              <span class="text-price">169元</span>
              <div class="col-12 mm">
                <p class="text-center m-0">
                  <button class="btn btn-info">立即加入 <i class="fa fa-shopping-cart"></i></button>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-6 " >
            <div class="box">
              <p class="mb-1"><span class="badge badge-success">新品</span></p>
              <a href="#"><img src="img/zhineng/3.jpg" class="img-fluid" width="50%" alt="zhineng_3"></a>
              <p class="mb-1">小米体重秤</p>
              <p class="text-secondary mb-1"><small>高精度压力传感器/手机管理全家健康</small></p>
              <span class="text-price">99元</span>
              <div class="col-12 mm">
                <p class="text-center m-0">
                  <button class="btn btn-info">立即加入 <i class="fa fa-shopping-cart"></i></button>
                </p>
              </div>
            </div>
          </div>
			 <div class="col-md-3 col-6 " >
            <div class="box">
              <p class="mb-1"><span class="badge badge-success">新品</span></p>
              <a href="#"><img src="img/zhineng/4.png" class="img-fluid" width="50%" alt="zhineng_4"></a>
              <p class="mb-1">米家IH电饭煲 4L</p>
              <p class="text-secondary mb-1"><small>IH电磁环绕加热</small></p>
              <span class="text-price">599元</span>
              <div class="col-12 mm">
                <p class="text-center m-0">
                  <button class="btn btn-info">立即加入 <i class="fa fa-shopping-cart"></i></button>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-6 " >
            <div class="box">
              <p class="mb-1"><span class="badge badge-danger">减60元</span></p>
              <a href="#"><img src="img/zhineng/5.jpg" class="img-fluid" width="50%" alt="zhineng_5"></a>
              <p class="mb-1">车载空气净化器(USB充电版)</p>
              <p class="text-secondary mb-1"><small>高效进化车内空气</small></p>
              <span class="text-price">389元 </span><del>449元</del>
              <div class="col-12 mm">
                <p class="text-center m-0">
                  <button class="btn btn-info">立即加入 <i class="fa fa-shopping-cart"></i></button>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-6 " >
            <div class="box">
              <p class="mb-1"><span class="badge badge-success">新品</span></p>
              <a href="#"><img src="img/zhineng/6.jpg" class="img-fluid" width="50%" alt="zhineng_6"></a>
              <p class="mb-1">小米米家行车记录仪1S</p>
              <p class="text-secondary mb-1"><small>索尼 IMX307图像传感器</small></p>
              <span class="text-price">319元 </span><del>349元</del>
              <div class="col-12 mm">
                <p class="text-center m-0">
                  <button class="btn btn-info">立即加入 <i class="fa fa-shopping-cart"></i></button>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-6 " >
            <div class="box">
              <p class="mb-1"><span class="badge badge-success">新品</span></p>
              <a href="#"><img src="img/zhineng/7.jpg" class="img-fluid" width="50%" alt="zhineng_7"></a>
              <p class="mb-1">米家声波电动牙刷</p>
              <p class="text-secondary mb-1"><small>磁悬浮声波马达，定制多种刷牙模式</small></p>
              <span class="text-price">179元</span><del>199元</del>
              <div class="col-12 mm">
                <p class="text-center m-0">
                  <button class="btn btn-info">立即加入 <i class="fa fa-shopping-cart"></i></button>
                </p>
              </div>
            </div>
          </div>-->
						<div class="col-md-3 col-6 zz">
							<div class="boxs mb-2 col-12">
								<div class="row">
									<div class="col-7 p-4">
										<p class="text-center text-secondary mb-0">小米插线板...</p>
										<p class="text-price"><small>49元</small>
										</p>
									</div>
									<div class="col-5"><a href="#"><img src="img/zhineng/8.jpg" class="img-fluid" width="100%" alt="zhineng_8"></a>
									</div>
								</div>
							</div>
							<div class="boxs col-12">
								<div class="row">
									<div class="col-7 p-4 p2">
										<p class="text-center mb-0">浏览更多...</p>
										<p class="text-secondary"><small>热门</small>
										</p>
									</div>
									<div class="col-5 p-3">
										<p class="text-center"><a href="#jiadian"><i class="fa fa-arrow-circle-o-right fa-3x fa-spin text-price"></i></a>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="peijian" class="bg-light">
		<div class="container-fluid">
			<div class="row mb-4">
				<div class="col-12"> <a href="#jiadian"><img src="img/mid/4.jpg" class="img-fluid" width="100%" alt="mid_2"></a> </div>
			</div>
			<div class="row">
				<div class="col-12">
					<h2><small>配件</small></h2>
				</div>
				<div class="col-md-2 col-6 tabs">
					<div class="row justify-content-between">
						<a href="#jiadian" class="active">热门</a>
						<a href="#jiadian">保护套</a>
						<a href="#jiadian">贴膜</a>
						<a href="#jiadian">其他配件</a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2 hidden "> <a href="#"><img src="img/peijian/left-1.jpg" class="img-fluid mb-2 img-left" width="100%" alt="peijian_left1"></a> <a href="#"><img src="img/peijian/left-2.jpg" class="img-fluid img-left" width="100%" alt="peijian_left2"></a> </div>
				<div class="col-md-10 col-12 text-center">
					<div class="row flex-wrap">
						<!--<div class="col-md-3 col-6" >
            <div class="box">
              <p class="mb-1"><span class="badge badge-success">新品</span></p>
              <a href="#"><img src="img/peijian/1.jpg" class="img-fluid" width="50%" alt="peijian_1"></a>
              <p class="mb-1">小米8 屏幕指纹版保护套</p>
              <p class="text-secondary mb-1"><small>152人评价</small></p>
              <span class="text-price">49元</span>
              <div class="col-12 mm">
                <p class="text-center m-0">
                  <button class="btn btn-info">立即加入 <i class="fa fa-shopping-cart"></i></button>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-6 " >
            <div class="box">
              <p class="mb-1"><span class="badge badge-success">新品</span></p>
              <a href="#"><img src="img/peijian/2.jpg" class="img-fluid" width="50%" alt="peijian_2"></a>
              <p class="mb-1">小米8 标准版钢化膜</p>
              <p class="text-secondary mb-1"><small>916人评价</small></p>
              <span class="text-price">89元</span>
              <div class="col-12 mm">
                <p class="text-center m-0">
                  <button class="btn btn-info">立即加入 <i class="fa fa-shopping-cart"></i></button>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-6 " >
            <div class="box">
              <p class="mb-1"><span class="badge badge-success">新品</span></p>
              <a href="#"><img src="img/peijian/3.jpg" class="img-fluid" width="50%" alt="peijian_3"></a>
              <p class="mb-1">小米8 硅胶保护套</p>
              <p class="text-secondary mb-1"><small>1115人评价</small></p>
              <span class="text-price">49元</span>
              <div class="col-12 mm">
                <p class="text-center m-0">
                  <button class="btn btn-info">立即加入 <i class="fa fa-shopping-cart"></i></button>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-6 " >
            <div class="box">
              <p class="mb-1"><span class="badge badge-success">新品</span></p>
              <a href="#"><img src="img/phone/r_1.png" class="img-fluid" width="50%" alt="peijian_4"></a>
              <p class="mb-1">小米8青春版极简高透保护壳</p>
              <p class="text-secondary mb-1"><small>68人评价</small></p>
              <span class="text-price">39元</span>
              <div class="col-12 mm">
                <p class="text-center m-0">
                  <button class="btn btn-info">立即加入 <i class="fa fa-shopping-cart"></i></button>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-6 " >
            <div class="box">
              <p class="mb-1"><span class="badge badge-danger">享1折</span></p>
              <a href="#"><img src="img/peijian/5.jpg" class="img-fluid" width="50%" alt="peijain_5"></a>
              <p class="mb-1">红米Note3 炫彩翻页保护套</p>
              <p class="text-secondary mb-1"><small>9162人评价</small></p>
              <span class="text-price">0.99元</span><span>39元</span>
              <div class="col-12 mm">
                <p class="text-center m-0">
                  <button class="btn btn-info">立即加入 <i class="fa fa-shopping-cart"></i></button>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-6 " >
            <div class="box">
              <p class="mb-1"><span class="badge badge-danger">享5折</span></p>
              <a href="#"><img src="img/peijian/6.jpg" class="img-fluid" width="50%" alt="peijian_6"></a>
              <p class="mb-1">红米Note5 极简防摔保护壳</p>
              <p class="text-secondary mb-1"><small>947人评价</small></p>
              <span class="text-price">19元</span><del>39元</del>
              <div class="col-12 mm">
                <p class="text-center m-0">
                  <button class="btn btn-info">立即加入 <i class="fa fa-shopping-cart"></i></button>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-6 " >
            <div class="box">
              <p class="mb-1"><span class="badge badge-success">新品</span></p>
              <a href="#"><img src="img/peijian/7.jpg" class="img-fluid" width="50%" alt="peijian_7"></a>
              <p class="mb-1">小米8青春版 标准高透膜</p>
              <p class="text-secondary mb-1"><small>218人评价</small></p>
              <span class="text-price">19元</span>
              <div class="col-12 mm">
                <p class="text-center m-0">
                  <button class="btn btn-info">立即加入 <i class="fa fa-shopping-cart"></i></button>
                </p>
              </div>
            </div>
          </div>-->
						<div class="col-md-3 col-6 zz">
							<div class="boxs mb-2 col-12">
								<div class="row">
									<div class="col-7 p-4">
										<p class="text-center text-secondary mb-0">红米Note4X...</p>
										<p class="text-price"><small>0.99元</small>
										</p>
									</div>
									<div class="col-5"><a href="#"><img src="img/peijian/8.jpg" class="img-fluid" width="100%" alt="peijian_8"></a>
									</div>
								</div>
							</div>
							<div class="boxs col-12">
								<div class="row">
									<div class="col-7 p-4 p2">
										<p class="text-center mb-0">浏览更多...</p>
										<p class="text-secondary"><small>热门</small>
										</p>
									</div>
									<div class="col-5 p-3">
										<p class="text-center"><a href="#jiadian"><i class="fa fa-arrow-circle-o-right fa-3x fa-spin text-price"></i></a>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="zhoubian" class="bg-light">
		<div class="container-fluid">
			<div class="row mb-4">
				<div class="col-12"> <a href="#jiadian"><img src="img/mid/5.jpg" class="img-fluid" width="100%" alt="mid_2"></a> </div>
			</div>
			<div class="row">
				<div class="col-12">
					<h2><small>周边</small></h2>
				</div>
				<div class="col-md-2 col-6 tabs">
					<div class="row justify-content-between">
						<a href="#jiadian" class="active">热门</a>
						<a href="#jiadian">出行</a>
						<a href="#jiadian">居家</a>
						<a href="#jiadian">箱包</a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2 hidden "> <a href="#"><img src="img/zhoubian/left-1.jpg" class="img-fluid mb-2 img-left" width="100%" alt="zhoubian_1"></a> <a href="#"><img src="img/zhoubian/left-2.jpg" class="img-fluid img-left" width="100%" alt="zhoubian_2"></a> </div>
				<div class="col-md-10 col-12 text-center">
					<div class="row flex-wrap">
						<!--<div class="col-md-3 col-6" >
            <div class="box">
              <p class="mb-1"><span class="badge badge-danger">减70元</span></p>
              <a href="#"><img src="img/zhoubian/1.jpg" class="img-fluid" width="50%" alt="zhoubian_1"></a>
              <p class="mb-1">Ts尼龙偏光太阳镜 米家定制黑色</p>
              <p class="text-secondary mb-1"><small>7784人评价</small></p>
              <span class="text-price">129元</span><del>199元</del>
              <div class="col-12 mm">
                <p class="text-center m-0">
                  <button class="btn btn-info">立即加入 <i class="fa fa-shopping-cart"></i></button>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-6 " >
            <div class="box">
              <p class="mb-1"><span class="badge badge-success">新品</span></p>
              <a href="#"><img src="img/zhoubian/2.jpg" class="img-fluid" width="50%" alt="zhoubian_2"></a>
              <p class="mb-1">米兔招财猫足金吊坠</p>
              <p class="text-secondary mb-1"><small>440人评价</small></p>
              <span class="text-price">899元</span>
              <div class="col-12 mm">
                <p class="text-center m-0">
                  <button class="btn btn-info">立即加入 <i class="fa fa-shopping-cart"></i></button>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-6 " >
            <div class="box">
              <p class="mb-1"><span class="badge badge-success">新品</span></p>
              <a href="#"><img src="img/zhoubian/3.jpg" class="img-fluid" width="50%" alt="zhoubian_3"></a>
              <p class="mb-1">90分轻薄无缝一体织鹅绒羽绒服</p>
              <p class="text-secondary mb-1"><small>307人评价</small></p>
              <span class="text-price">299元</span>
              <div class="col-12 mm">
                <p class="text-center m-0">
                  <button class="btn btn-info">立即加入 <i class="fa fa-shopping-cart"></i></button>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-6 " >
            <div class="box">
              <p class="mb-1"><span class="badge badge-success">新品</span></p>
              <a href="#"><img src="img/zhoubian/4.jpg" class="img-fluid" width="50%" alt="zhoubian_4"></a>
              <p class="mb-1">8H记忆棉护锥腰靠</p>
              <p class="text-secondary mb-1"><small>638人评价</small></p>
              <span class="text-price">89元</span>
              <div class="col-12 mm">
                <p class="text-center m-0">
                  <button class="btn btn-info">立即加入 <i class="fa fa-shopping-cart"></i></button>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-6 " >
            <div class="box">
              <p class="mb-1"><span class="badge badge-success">新品</span></p>
              <a href="#"><img src="img/zhoubian/5.jpg" class="img-fluid" width="50%" alt="zhoubian_5"></a>
              <p class="mb-1">保温杯</p>
              <p class="text-secondary mb-1"><small>4030人评价</small></p>
              <span class="text-price">99元</span>
              <div class="col-12 mm">
                <p class="text-center m-0">
                  <button class="btn btn-info">立即加入 <i class="fa fa-shopping-cart"></i></button>
                </p>
              </div>
            </div>
          </div>
        
          <div class="col-md-3 col-6 " >
            <div class="box">
              <p class="mb-1"><span class="badge badge-success">新品</span></p>
              <a href="#"><img src="img/zhoubian/6.jpg" class="img-fluid" width="50%" alt="zhoubian_6"></a>
              <p class="mb-1">小米棒球帽 藏蓝</p>
              <p class="text-secondary mb-1"><small>901人评价</small></p>
              <span class="text-price">49元</span>
              <div class="col-12 mm">
                <p class="text-center m-0">
                  <button class="btn btn-info">立即加入 <i class="fa fa-shopping-cart"></i></button>
                </p>
              </div>
            </div>
          </div>
			  <div class="col-md-3 col-6 " >
            <div class="box">
              <p class="mb-1"><span class="badge badge-danger">减5元</span></p>
              <a href="#"><img src="img/zhoubian/7.jpg" class="img-fluid" width="50%" alt="zhoubian_7"></a>
              <p class="mb-1">贝医生巴氏牙刷(四色装)</p>
              <p class="text-secondary mb-1"><small>6035人评价</small></p>
              <span class="text-price">34.9元</span><del>39.9元</del>
              <div class="col-12 mm">
                <p class="text-center m-0">
                  <button class="btn btn-info">立即加入 <i class="fa fa-shopping-cart"></i></button>
                </p>
              </div>
            </div>
          </div>-->
						<div class="col-md-3 col-6 zz">
							<div class="boxs mb-2 col-12 ">
								<div class="row">
									<div class="col-7 p-4">
										<p class="text-center text-secondary mb-0">8H乳胶弹簧...</p>
										<p class="text-price"><small>1499元</small>
										</p>
									</div>
									<div class="col-5"><a href="#"><img src="img/zhoubian/8.jpg" class="img-fluid" width="100%" alt="zhoubian_8"></a>
									</div>
								</div>
							</div>
							<div class="boxs col-12">
								<div class="row">
									<div class="col-7 p-4 p2">
										<p class="text-center mb-0">浏览更多...</p>
										<p class="text-secondary"><small>热门</small>
										</p>
									</div>
									<div class="col-5 p-3">
										<p class="text-center"><a href="#jiadian"><i class="fa fa-arrow-circle-o-right fa-3x fa-spin text-price"></i></a>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="contact">
		<div class="container-fluid p-5">
			<div class="row justify-content-center mb-2">
				<div class="col-md-11 col-12">
					<div class="row li">
						<div class="col">
							<p class="text-center text-secondary"><i class="fa fa-wrench"></i> 预约维修服务</p>
						</div>
						<div class="col">
							<p class="text-center text-secondary"><i class="fa fa-circle-o-notch"></i> 7天无理由退货</p>
						</div>
						<div class="col">
							<p class="text-center text-secondary"><i class="fa fa-refresh"></i> 15天免费换货</p>
						</div>
						<div class="col">
							<p class="text-center text-secondary"><i class="fa fa-gift"></i> 满150包邮</p>
						</div>
						<div class="col">
							<p class="text-center text-secondary border-0"><i class="fa fa-map-marker"></i> 100多家售后网点</p>
						</div>
					</div>
				</div>
			</div>
			<hr>
			<div class="row justify-content-center">
				<div class="col-md-9 col-12 hidden">
					<div class="table-responsive-sm">
						<table class="table">
							<thead>
								<tr>
									<th>帮助中心</th>
									<th>服务支持</th>
									<th>线下门店</th>
									<th>关于IW</th>
									<th>关注我们</th>
									<th>特色服务</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><a href="#">账户管理</a>
									</td>
									<td><a href="#">售后政策</a>
									</td>
									<td><a href="#">IW百货</a>
									</td>
									<td><a href="#">了解IW</a>
									</td>
									<td><a href="#">新浪微博</a>
									</td>
									<td><a href="#">F码通道</a>
									</td>
								</tr>
								<tr>
									<td><a href="#">购物指南</a>
									</td>
									<td><a href="#">自助服务</a>
									</td>
									<td><a href="#">服务网点</a>
									</td>
									<td><a href="#">加入IW</a>
									</td>
									<td><a href="#">官方微信</a>
									</td>
									<td><a href="#">礼物码</a>
									</td>
								</tr>
								<tr>
									<td><a href="#">订单操作</a>
									</td>
									<td><a href="#">相关下载</a>
									</td>
									<td><a href="#">授权体验店</a>
									</td>
									<td><a href="#">我有疑问</a>
									</td>
									<td><a href="#">联系我们</a>
									</td>
									<td><a href="#">防伪查询</a>
									</td>
								</tr>

							</tbody>
						</table>
					</div>
				</div>
				<div class="col-md-2 col-12 text-center pl-0 ">
					<h3 class="text-price ">400-100-1234</h3>
					<small>周一至周五(8:00-18:00)</small><br>
					<small>(仅收市话费)</small><br>
					<a href="#" class="btn btn-outline-danger mt-2"><i class="fa fa-comment-o"></i>联系客服</a>
				</div>
			</div>
		</div>

		<div class="container-fluid">
			<h2 class="text-center text-secondary">留言版</h2>
			<div class="row mt-4">
				<div class="col-md-5 ">
					<p>留下你想说的话，我们会在24小时内联系你。</p>
					<p><span class="fa fa-map-marker"></span> ZheJiang.CH</p>
					<p><span class="fa fa-phone"></span> +13858653996</p>
					<p><span class="fa fa-envelope"></span> 1278710278@qq.com</p>
				</div>
				<div class="col-md-7 ">
					<form id="msg" action="php/email/Email.php" method="post" onSubmit="return sendEamil();" target="hid">
						<iframe name="hid" style="display: none;"></iframe>
						<div class="row">
							<div class="col-md-6 ">
								<input type="text" class="form-control" placeholder="Name" name="sname">
							</div>
							<div class="col-md-6 ">
								<input type="text" class="form-control" placeholder="Email" name="email">
							</div>
							<div class="col-md-12 " style="margin-top: 10px;margin-bottom: 10px;">
								<textarea class="form-control" rows="5" placeholder="connment" style="resize: none;" name="contant"></textarea>
							</div>
							<div class="col-md-2 ml-auto">
								<button type="submit" class="btn btn-outline-success form-control">Send</button>
							</div>
						</div>
					</form>

				</div>
			</div>
		</div>
	</div>
	<footer>
		<p class="mb-0"><a href="#mypage"><i class="fa fa-angle-double-up fa-2x"></i></a>
		</p>
		<p class="mb-0">Copyright © 2018 · All Rights Reserved · XieJianHui. Based on Bootstrap</p>
	</footer>
	<script src="js/home.js"></script>
	<script src="js/time.js"></script>
</body>
</html>