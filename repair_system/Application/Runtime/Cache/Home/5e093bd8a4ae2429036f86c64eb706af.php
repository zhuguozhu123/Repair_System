<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
		<title>南苑计协维修系统</title>
		<link rel="stylesheet" type="text/css" href="/ACM/repair_system/Public/css/bootstrap.min.css">
		<style type="text/css">
			.header {
				width:100%;
				height:50px;
				line-height: 50px;
				background-color: #999;
				color:#fff;
			}
		</style>
	</head>
	<body>

		<div align="center" class="header">
			<div style="position: absolute;left:5px">
				<a href="<?php echo U('Home/CheckOrder/checkOrderView');?>" class="btn btn-warning">
					我的订单
				</a>
			</div>
			计协维修系统
		</div>

		<div>
			期末紧张<br/>线上维修服务已暂停～<br/>希望下学期能给各位带来更好的服务
		</div>
		
		<script type="text/javascript" src="/ACM/repair_system/Public/js/jquery-2.2.4.min.js"></script>
		<script type="text/javascript" src="/ACM/repair_system/Public/js/bootstrap.min.js"></script>
	</body>
</html>