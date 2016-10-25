<?php
require_once '../lib/config.php';
$code = $_GET['code'];
$uid  = $_GET['uid'];
?>

<!DOCTYPE html>
	<html style="height: 100%;">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>重置用户密码 - www.ximing.cf - XIMING</title>

	<link href="Css/global.css" rel="stylesheet">
	<link href="Css/bootstrap-grid.css" rel="stylesheet">
	<link href="Css/form.authy.css" rel="stylesheet">
	<link href="Css/flags.authy.css" rel="stylesheet">
	
</head>
<body style="position: relative; min-height: 100%; margin:0px; padding: 0px; background-color: #0b4182;">

	<div style="position: absolute; top: 0px; left: 0px; width: 100%; min-height: 100%; background: linear-gradient(0deg, #0b4182 1%, #1e88e5 100%);">
		<div class="loggedout_vcenter">
			<div style="padding: 8px;">
				<div style="min-height:420px; max-width: 420px; padding:40px; background-color:#ffffff; margin-left: auto; margin-right: auto; border-radius:4px; overflow-x: hidden;">
					<a href="/" style="display:block; height:58px; width:167px; margin:0 auto 30px auto; background-image:url(Images/logo_onwhite.png); background-size: 164px 80px; background-repeat:no-repeat;"></a>

	   <center><strong><p class="login-box-msg">重置用户密码</p></strong></center>

            <input type="hidden" id="code" name="code" class="form-control" value="<?php echo $code;?>" required autofocus>
            <input type="hidden" id="uid" name="uid" class="form-control" value="<?php echo $uid;?>" required autofocus>

            <div class="form-group has-feedback">
                <input id="email" name="Email" type="text" style="width:100%;" placeholder="邮箱" value="" required="required" autofocus/>
                <span  class="glyphicon glyphicon-envelope form-control-feedback"></span>
                <strong><p>重置密码页面有延迟</br>点下重置按钮耐心等待即可</p></strong>
            </div>

            <div class="form-group has-feedback">

	       <input id="reset" type="submit" value="重置" style="width:100%;" class="btn btn-primary btn-block btn-flat"/>
            </div>
    
            <div id="msg-success" class="alert alert-info alert-dismissable" style="display: none;">
                <button type="button" class="close" id="ok-close" aria-hidden="true">&times;</button>
	       <strong><h4><i class="icon fa fa-info"></i> 成功！请在邮箱查看邮件！</h4></strong>
                <p id="msg-success-p"></p>
            </div>
    
            <div id="msg-error" class="alert alert-warning alert-dismissable" style="display: none;">
                <button type="button" class="close" id="error-close" aria-hidden="true">&times;</button>
                <strong><h4><i class="icon fa fa-warning"></i> 出错了！请核对后再尝试！</h4></strong>
                <p id="msg-error-p"></p>
            </div>
	</br>
         <strong><a href="login.php" class="text-center">返回登陆</a></strong>

    </div><!-- /.login-box-body -->
</div><!-- /.login-box -->

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
    });
    // $("#msg-error").hide();
    // $("#msg-success").hide();
</script>

<script>
    $(document).ready(function(){
          function reset(){
               $.ajax({
                type:"GET",
                url:"_resetpwd.php?username="+$("#username").val()+"&email="+$("#email").val(),
                dataType:"json",
                success:function(data){
                    if(data.ok){
                        $("#msg-error").hide(100);
                        $("#msg-success").show(100);
                        $("#msg-success-p").html(data.msg);
                        window.setTimeout("location.href='index.php'", 2000);
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
                reset();
            }
        });
        $("#reset").click(function(){
            reset();
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
