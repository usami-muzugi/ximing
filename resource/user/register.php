<!doctype html>
<html style="height: 100%;">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	<title>注册 - www.ximing.cf</title>
		<meta name="keywords" content="注册 - www.ximing.cf, XIMING 账号注册,  XIMING的获取, 创建科学上网账号,账号注册">
			<meta name="description" content="创建一个XIMING账号">
	
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<meta http-equiv="Content-Language" content="en" />

		<link href="Css/core.css" rel="stylesheet">
	<link href="Css/main.css" rel="stylesheet">
	<link href="Css/panel.css" rel="stylesheet">
	<link href="Css/global.css" rel="stylesheet">
	<style>
		@font-face {
			font-family: 'icons';
			src:url('/dist/fonts/icons/icons.eot?v=254');
			src:url('/dist/fonts/icons/icons.eot?v=254') format('embedded-opentype'),
			url('/dist/fonts/icons/icons.ttf?v=254') format('truetype'),
			url('/dist/fonts/icons/icons.woff?v=254') format('woff'),
			url('/dist/fonts/icons/icons.svg?v=254') format('svg');
			font-weight: normal;
			font-style: normal;
		}
	</style>
	
	<!--[if lt IE 9]>
	<script src="Scripts/selectivizr-min.js"></script>
	<script src="Scripts/html5shiv.min.js"></script>
	<script src="Scripts/respond.min.js"></script>
	<![endif]-->
	<?php echo ' <script>alert("XIMNG提示:\\n请仔细阅读用户协议，注册即代表同意用户协议!")</script> ';?>
</head>
<body  style="position: relative; min-height: 100%; margin:0px; padding: 0px; background-color: #0b4182;">

	<div style="position: absolute; top: 0px; left: 0px; width: 100%; min-height: 100%; background: linear-gradient(0deg, #0b4182 1%, #1e88e5 100%);">
		<div class="loggedout_vcenter">
			<div style="padding: 8px;">
				<div style="min-height:420px; max-width: 420px; padding:40px; background-color:#ffffff; margin-left: auto; margin-right: auto; border-radius:4px; overflow-x: hidden;">
					<a href="/" style="display:block; height:58px; width:167px; margin:0 auto 30px auto; background-image:url(Images/logo_onwhite.png); background-size: 164px 80px; background-repeat:no-repeat;"></a>									
	<div class="textcenter">
		<center><strong>注册 然后成为一个大佬！</strong></center>
	</div>

            <div class="form-group has-feedback">
                <input type="text" id="name" class="form-control" placeholder="用户名"/>
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="text" id="email" class="form-control" placeholder="用户邮箱"/>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" id="passwd" class="form-control" placeholder="用户密码"/>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" id="repasswd" class="form-control" placeholder="重复用户密码"/>
                <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="text" id="code" value="<?php echo $_SERVER['QUERY_STRING'];?>" class="form-control" placeholder="邀请函(向站长索要或在网站邀请码上获取)"/>
                <span class="glyphicon glyphicon-send form-control-feedback"></span>
            </div>


            <div class="form-group has-feedback">
               <p>请仔细阅读<a href="../tos.php" target="_blank"><span style="text-decoration: underline;">用户协议</span></a>，注册即代表同意<a href="../tos.php" target="_blank"><span style="text-decoration: underline;">用户协议</span></a>！</p>
               <center>
                    <p>★<a href="https://www.ximing.cf/code.php"><span style="text-decoration: underline;">点击查看邀请码</span></a>★</p>
               </center>
            </div>

            <div class="form-group has-feedback">
                <button type="submit" id="reg" class="btn btn-primary btn-block btn-flat">同意用户协议并提交注册</button>
            </div>
            
            <div id="msg-success" class="alert alert-info alert-dismissable" style="display: none;">
                <button type="button" class="close" id="ok-close" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-info"></i> 注册成功!欢迎新用户加入!</h4>
                <p id="msg-success-p"></p>
            </div>
    
            <div id="msg-error" class="alert alert-warning alert-dismissable" style="display: none;">
                <button type="button" class="close" id="error-close" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-warning"></i> 注册失败！我们怀疑你并不想成为我们的一员!</h4>
                <p id="msg-error-p"></p>
            </div>

        <strong><a href="login.php" class="text-center">已注册？请登录</a></strong></br>
        <strong><a href="../" class="text-center">点此返回XIMING首页</strong></a>
    </div><!-- /.form-box -->
</div><!-- /.register-box -->

<!-- jQuery 2.1.3 -->
<script src="../asset/js/jQuery.min.js"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="../asset/js/bootstrap.min.js" type="text/javascript"></script>
<!-- iCheck -->
<script src="../asset/js/icheck.min.js" type="text/javascript"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
        // $("#msg-error").hide(100);
        // $("#msg-success").hide(100);

    });
</script>
<script>
    $(document).ready(function(){
         function register(){
            $.ajax({
                type:"POST",
                url:"_reg.php",
                dataType:"json",
                data:{
                    email: $("#email").val(),
                    name: $("#name").val(),
                    passwd: $("#passwd").val(),
                    repasswd: $("#repasswd").val(),
                    code: $("#code").val(),
                    agree: $("#agree").val()
                },
                success:function(data){
                    if(data.ok){
                        $("#msg-error").hide(10);
                        $("#msg-success").show(100);
                        $("#msg-success-p").html(data.msg);
                        window.setTimeout("location.href='login.php'", 2000);
                    }else{
                        $("#msg-error").hide(10);
                        $("#msg-error").show(100);
                        $("#msg-error-p").html(data.msg);
                    }
                },
                error:function(jqXHR){
                    $("#msg-error").hide(10);
                    $("#msg-error").show(100);
                    $("#msg-error-p").html("发生错误："+jqXHR.status);
                    // 在控制台输出错误信息
                    console.log(removeHTMLTag(jqXHR.responseText));
                }
            });
        }
        $("html").keydown(function(event){
            if(event.keyCode==13){
                register();
            }
        });
        $("#reg").click(function(){
            register();
        });
        $("#ok-close").click(function(){
            $("#msg-success").hide(100);
        });
        $("#error-close").click(function(){
            $("#msg-error").hide(100);
        });
    })
</script>
	<script type="text/javascript">
            // 过滤HTML标签以及&nbsp 来自：http://www.cnblogs.com/liszt/archive/2011/08/16/2140007.html
            function removeHTMLTag(str) {
                    str = str.replace(/<\/?[^>]*>/g,''); //去除HTML tag
                    str = str.replace(/[ | ]*\n/g,'\n'); //去除行尾空白
                    str = str.replace(/\n[\s| | ]*\r/g,'\n'); //去除多余空行
                    str = str.replace(/&nbsp;/ig,'');//去掉&nbsp;
                    return str;
            }
</script>


</body>
</html>
