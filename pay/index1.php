﻿<!DOCTYPE html>
<html lang="zh-cn">
	<?php
		include("../public/headers.php");
		// 	/**
		// 	 * ---------------------支付成功，用户会跳转到这里-------------------------------
		// 	 * 
		// 	 * 此页就是接口后台的return_url页的网址
		// 	 * 支付成功，平台会把用户跳转回这里。
		// 	 * 
		// 	 * --------------------------------------------------------------
		// 	 */
// 		include('define.php');

// 		//同步回调页面
// 		//接收参数
// 		$order_no = $_GET["order_no"];
// 		$subject = $_GET["subject"];
// 		$pay_type = $_GET["pay_type"];
// 		$money = $_GET["money"];
// 		$realmoney = $_GET["realmoney"];
// 		$result = $_GET["result"];
// 		$xddpay_order = $_GET["xddpay_order"];
// 		$app_id = $_GET["app_id"];
// 		$extra = $_GET["extra"];
// 		$sign = $_GET["sign"];

// 		//计算签名
// 		$mysign_forstr = "order_no=" . $order_no . "&subject=" . $subject . "&pay_type=" . $pay_type . "&money=" . $money . "&realmoney=" . $realmoney . 

// "&result=" . $result . "&xddpay_order=" . $xddpay_order . "&app_id=" . $app_id . "&extra=" . $extra . "&" . $app_secret;
// 		$mysign = strtoupper(md5($mysign_forstr));
	?>

	<!--主体开始-->
		<div class="container" style="height: 600px">
			<div class="banner bg-blue hidden-l" style="height: 300px" data-style="border-white">
				<div class="carousel">
					<div class="item">1</div>
					<div class="item">2</div>
					<div class="item">3</div>
				</div>
			</div>
			<br>
		<!--主体内容开始-->
			<div>
				<hr class="bg-blue" />
				<div class="bg-mix x12">
					<div><center><span class="icon-check-circle text-large text-green"></span></center></div>
					<div><center><h2>付款成功</h2></center></div>
					<div class="xl12 xs10 xm6 xb6 xs1-move xm2-move xb2-move"><h2>订单号：132465798798798<br>电话号码：18725955959<br>支付方式：支付宝<br>卡密：321as3d63as54dasdasdasdasd</h2></div>
				</div>
				<?php
				//验签
					// if(($sign)==null){
					// 	echo "1";
					// 	exit();
					// }
					// if ($sign == $mysign){
					// 	if ($result == "success"){
					// 		//建议业务处理放在notify.asp页面，本页仅用于显示支付结果
					// 		//此处在您数据库中查询：此笔订单号是否已经异步通知给您付款成功了。如成功了，就给他返回一个支付成功的展示。
					// 		$arr=explode(";",$extra);
					// 		$s_leixing=$arr['0'];
					// 		$s_shuliang=$arr['1'];
					// 		$s_user=$arr['2'];
					// 		echo "恭喜，支付成功!，订单号：".$order_no."<br>";
					// 		echo "手机号：<br>";
					// 		$sql_chaxun=mysqli_query($con,"select * from dingdan where users='$s_user' and d_hao='$order_no'");
					// 		$kami=mysqli_fetch_assoc($sql_chaxun);
					// 		$kami_arr=explode(";",$kami['k_hao']);
					// 		echo "你的卡密为：";
					// 		foreach ($kami_arr as $kami_neirong) {
					// 			echo $kami_neirong."<br>";
					// 		}
					// 	}
					// 	else{
					// 		echo "支付失败！";
					// 	}
					// }else{
					// 	echo "mysign_forstr=" . $mysign_forstr;	//调试时开启
					// 	echo "<br>sign=" . $sign;
					// 	echo "<br>mysign=" . $mysign;
					// 	echo "<br><br>认证失败请联系管理员！";
					// }
				?>
			</div>
		<!--主体内容结束-->
		
		</div>
	<!--主体结束-->
		<br />
		<br />
		<!--底部-->
		<br />
		<br />
		<div class="layout padding-big-top padding-big-bottom border-top bg">
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
						<a href="http://www.pintuer.com" target="_blank"><img class="logo" src="images/24-white.png" alt="拼图前端CSS框架" 

/></a>
					</div>
					<div class="navbar-body nav-navicon" id="navbar-footer">
						<div class="navbar-text navbar-left hidden-s hidden-l">版权所有 &copy; <a href="http://www.pintuer.com" 

target="_blank">Pintuer.com</a> All Rights Reserved，图ICP备：380959609</div>
					</div>
				</div>
			</div>
		</div>
	</body>

</html>