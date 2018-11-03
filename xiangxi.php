﻿<!DOCTYPE html>
<html lang="zh-cn">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>喵酱发卡</title>
		<link rel="stylesheet" href="css/pintuer.css">
		<script src="js/jquery.js"></script>
		<script src="js/pintuer.js"></script>
		<script src="js/respond.js"></script>
		<link type="image/x-icon" href="http://www.pintuer.com/favicon.ico" rel="shortcut icon" />
		<link href="http://www.pintuer.com/favicon.ico" rel="bookmark icon" />
		<?php
			include('public/conn.php');
			$sid=$_GET['id'];
			$sql_xiangxi=mysqli_query($con,"select * from shangpin where goodid='$sid'");
			$xiangxi=mysqli_fetch_assoc($sql_xiangxi);
		?>
		<style>
			.demo-nav.fixed.fixed-top {
				z-index: 8;
				background: #EEFFEE;
				width: 100%;
				padding: 0;
				border-bottom: solid 3px #0a8;
				-webkit-box-shadow: 0 3px 6px rgba(0, 0, 0, .175);
				box-shadow: 0 3px 6px rgba(0, 0, 0, .175);
			}
		</style>
	</head>

	<body>
	<!--导航开始-->
		<div class="demo-nav padding-big-top padding-big-bottom fixed bg-back">
			<div class="container padding-top padding-bottom">
				<div class="line">
					<div class="xl12 xs3 xm3 xb2">
						<button class="button icon-navicon float-right" data-target="#header-demo"></button>
						<a target="_blank" href="http://www.pintuer.com"><img src="logo.png" alt="前端CCS框架" /></a>
					</div>
					<div class=" xl12 xs9 xm9 xb10 nav-navicon" id="header-demo">
						<div class="xs8 xm6 xb8 padding-small">
							<ul class="nav nav-menu nav-inline nav-big">
								<li><a href="http://www.pintuer.com">首页</a></li>
								<li><a href="http://www.pintuer.com">爱奇艺</a></li>
								<li><a href="http://www.pintuer.com">腾讯</a></li>
								<li><a href="http://www.pintuer.com">优酷</a></li>
								<li><a href="http://www.pintuer.com">芒果</a></li>
								<li><a href="http://www.pintuer.com">其他</a></li>
							</ul>
						</div>
					<!--搜索开始-->
						<div class="xs4 xm3 xb4">
							<form>
								<div class="input-group padding-little-top">
									<input type="text" class="input border-main" name="keywords" size="30" placeholder="搜索商品" />
									<span class="addbtn"><button type="button" class="button bg-main icon-search"></button></span>
								</div>
							</form>
						</div>
					<!--搜索结束-->
					</div>
				</div>

			</div>
		</div>
	<!--导航结束-->
	<!--主体开始-->
		<div class="container bg-white">
			<br>
			<div class="xl12 xs12 xm12 xb12 bg-white">
				<div class="xl12 xs12 xm4 xb4">
					<img class="img-responsive" src="<?php echo $xiangxi['image']; ?>" width="100%" alt=""/>
				</div>
				<div class="xl12 xs12 xm8 xb8 padding-big">
					<h2><?php echo $xiangxi['name']; ?></h2>
				</div>
				<div class="xl12 xs12 xm8 xb8 padding-big">
					<h4>售价：￥<?php echo $xiangxi['jiage']; ?></h4><p>
					<h4>库存：9999</h4><p>
					<h4><div class="x12"><div class="xl12 xs12 xm3 xm3">数量：<input type="text" class="input" value="1"></div></div></h4>
					<div class="x3"><button class="button">购买</button></div>
				</div>
			</div>
			<div class="xl12 xs12 xm12 xb12 padding-big bg-back" style="height: 400px">
				中间介绍
			</div>

			
		</div>
	<!--主体结束-->
		<br />
		<br />
		<!--底部-->
		<br />
		<br />
		<div class="xl12 xs12 xm12 xb12 layout padding-big-top padding-big-bottom border-top bg">
			<div class="container padding">
				底部
			</div>
		</div>
		<!--最底部-->
		<div class="layout bg-black bg-inverse">
			<div class="container">
				<div class="navbar">
					<div class="navbar-head">
						<button class="button bg-gray icon-navicon" data-target="#navbar-footer"></button>
						<a href="logo.png" target="_blank"><img class="logo" src="images/24-white.png" alt="拼图前端CSS框架" /></a>
					</div>
					<div class="navbar-body nav-navicon" id="navbar-footer">
						<div class="navbar-text navbar-left hidden-s hidden-l">版权所有 &copy; <a href="http://www.pintuer.com" target="_blank">Pintuer.com</a> All Rights Reserved，图ICP备：380959609</div>
					</div>
				</div>
			</div>
		</div>
	</body>

</html>