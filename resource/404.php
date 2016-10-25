<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<!-- saved from url=(0034)http://www.bilibili.com/adsdfasfas -->
<html lang="zh-cn"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Page-Enter" content="blendTrans(Duration=0.5)">
<meta http-equiv="Page-Exit" content="blendTrans(Duration=0.5)">
<?php
	/**
	 *@author mckee
	 *@blog  http://www.phpddt.com
	 */
	function get_page_url(){
		$url = (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == '443') ? 'https://' : 'http://';
		$url .= $_SERVER['HTTP_HOST'];
		$url .= isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : urlencode($_SERVER['PHP_SELF']) . '?' . urlencode($_SERVER['QUERY_STRING']);
		return $url;
	}
?>
<title>出错啦! - www.ximing.cf</title>
<style type="text/css">
body { vertical-align: middle; }
div.center { position:absolute; top:50%; left:50%; margin:-25% 0 0 -320px; width:640px; min-height: 427px; padding: 0px; }
div.errmsg { text-align:left; width:640px; line-height:150%;}
a { text-decoration: none; color:red }
a:hover { text-decoration: underline; }
</style>
</head>
<body style="direction: ltr; zoom: 1;">
<div class="center">
<img id="img_error" src="./出错啦! - bilibili.tv_files/404.png" height="427" width="640"><br>
<div class="errmsg">
<b>前端服务器：cdn-bjc-dx-w-02</b><br>            
<b>处理服务器：shd-ias-6</b><br>
<b>请求页面：<?php echo get_page_url();?></b><br>
<b>错误号：404</b><br>
<b>用户IP: <?php $ip = $_SERVER["REMOTE_ADDR"]; echo $ip ?></b><br>
<script type="text/javascript">url = '/adsdfasfas';
document.getElementById('img_error').src=("https:" == document.location.protocol ? "https://static-s.bilibili.com/error/404.png" : "http://static.hdslb.com/error/404.png");
if ("404"=='404' && url.match(/\/video\/av/))
{
	document.getElementById('img_error').src=("https:" == document.location.protocol ? "https://static-s.bilibili.com/error/404b.png" : "http://static.hdslb.com/error/404b.png");
	document.getElementById('img_error').style.width = "700px";
	document.getElementById('img_error').parentNode.style.width = "700px";
}
if (("404"=='403' && url.match(/^\/sp\//)) || ("404"=='404' && url.match(/^\/sp\//)) || ("404"=="404" && url.match(/^\/video\//)) || url=='/fatezero_2nd.html' || url=='/html/fatezero2nd.html') document.getElementById('sendReport').style.display="none";</script>
</div>
</div>
</body>
</html>