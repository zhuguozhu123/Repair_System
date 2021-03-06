<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>南苑计协维修系统</title>
		<link rel="stylesheet" type="text/css" href="/repair_system/Public/css/bootstrap.min.css">
		<link rel="stylesheet" href="/repair_system/Public/css/indexFrame.css">
	</head>
	<body>
		<div align="center" style="border-bottom:1px solid #eee">
			<h3>新增管理员</h3>
		</div>
		<div align="center" style="width:85%;margin-top:20px">
			<form class="form-horizontal">
				<div class="form-group">
			    	<label for="inputEmail3" class="col-sm-2 control-label">姓名</label>
			    	<div class="col-sm-10">
			      		<input type="text" id="name" class="form-control">
			    	</div>
			 	</div>
			 	<div class="form-group">
			    	<label for="inputEmail3" class="col-sm-2 control-label">学号</label>
			    	<div class="col-sm-10">
			      		<input type="text" id="student_number" class="form-control">
			    	</div>
			 	</div>
			 	<div class="form-group">
			    	<label for="inputEmail3" class="col-sm-2 control-label">手机号</label>
			    	<div class="col-sm-10">
			      		<input type="text" id="mobile" class="form-control">
			    	</div>
			 	</div>
			 	<div class="form-group">
			    	<label for="inputEmail3" class="col-sm-2 control-label">权限</label>
			    	<div class="col-sm-10">
			      		<!-- <input type="text" id="auth" class="form-control"> -->
			      		<select style="width:60%;float:left;height:30px;border:none;background-color: #fff;border:1px #eee solid" name="" id="auth">
			      			<option value="4">部长级权限</option>
			      			<option value="3">副部长级权限</option>
			      			<option value="2">干事级权限</option>
			      			<option value="1">老干事级权限</option>
			      		</select>
			    	</div>
			 	</div>
			 	<div class="form-group">
			    	<label for="inputEmail3" class="col-sm-2 control-label">密码</label>
			    	<div class="col-sm-10">
			      		<input type="text" id="password" class="form-control">
			    	</div>
			 	</div>
			</form>

			<div align="center">
				<button onclick="submit()" class="btn btn-primary">
					提交
				</button>
			</div>
		</div>

		<div style="visibility: hidden" hidden>
			<div id="addAdminAjax">
				<?php echo U('backgroundAdmin/User/addAdminAjax');?>
			</div>
		</div>
		<script type="text/javascript" src="/repair_system/Public/js/jquery-2.2.4.min.js"></script>
		<script type="text/javascript" src="/repair_system/Public/js/bootstrap.min.js"></script>
		<script type="text/javascript">
			var submit = function(){
				var data = {};
				var getData = function(){
					data = {
						name:$('#name').val(),
						student_number:$('#student_number').val(),
						mobile:$('#mobile').val(),
						auth:$('#auth').val(),
						password:$('#password').val(),
					}
					for(var i in data){
						if(data[i] == null || data[i] == ''){
							alert('信息缺失');
							return false;
						}
					}
					return true;
				}

				if(getData()){
					$.ajax({
						url:$('#addAdminAjax').html(),
						type:'post',
						data:data,
						success:function(res){
							if(!res.success){
								alert(res.errmsg);
								return ;
							}else {
								alert(res.msg);
								window.history.back();
							}
						},
						error:function(err){
							console.log(err);
							alert("网络错误");
						}
					})
				}

			}
		</script>
	</body>
</html>