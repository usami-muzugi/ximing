<?php
include_once 'header.php';
//何种设备判定
//获取USER AGENT
$agent = strtolower($_SERVER['HTTP_USER_AGENT']);
//分析数据
$is_pc = (strpos($agent, 'windows nt')) ? true : false;   
$is_iphone = (strpos($agent, 'iphone')) ? true : false;   
$is_ipad = (strpos($agent, 'ipad')) ? true : false;   
$is_android = (strpos($agent, 'android')) ? true : false;   
//输出数据已加入到相应位置

?>


	<div class="page-banner page-banner-home">
		<div class="banner-slogan">
			<div class="container">
				<h2 class="slogan-title">突破地域限制 <?php if($is_iphone){  ?></br><?php }?>互享全球资讯</h2>
				<h2 class="slogan-desc">迄今为止，最稳定、最快捷、最智能的科学上网方式。</h2>

				<form method="post" action="user/register.php">
					<div class="register-container">
						<button class="btn btn-primary-light btn-lg" type="submit"><strong>立即注册</strong></button>
					</div>
				</form>
		</div>
	</div>

		<!-- /.banner-slogan -->
<div class="banner-image">
			<div class="container">
				<div class="responsive-image">
					<div class="browser browser-xlg desktop-size">
						<div class="browser-header">
							<div class="browser-buttons"><span></span><span></span><span></span></div>
							<div class="browser-bar" align="left"><span><small>https://www.youtube.com/watch?v=SA4t-uiccCA</small></span></div>
							<div class="browser-menu"><span></span><span></span><span></span></div>
						</div>
						<div class="browser-body">
							<div class="control-panel animate">	
							<img src="https://www.ximing.cf/files/img/desktop.png" width="970" height="590" border="0">	
							</div>
						</div>
					</div>
					<!-- /.browser -->
					<div class="phone phone-xlg mobile-size">
						<div class="phone-header">
							<div class="phone-speaker"></div>
						</div>
						<div class="phone-body">
			
							<div class="control-panel">	
							<img src="https://www.ximing.cf/files/img/phone.png" width="196" height="347" border="0">		
							</div>
						</div>
				
					</div>

					<!-- /.phone -->
					<div class="image image-lines"></div>
					<div class="image image-lines image-lines-right"></div>
				</div>

				<!-- /.responsive-image -->
			<h5>*图中速度为XIMING所测真实最大速度，实际速度可能会受用户网络环境影响</h5>
			</div>






	<div class="page-section section-center">
		<div class="container">
			<div class="services">
				<div class="row">
					<div class="col-sm-4">

						<a class="service" href="https://item.taobao.com/item.htm?id=530750548073" target="_blank">
							<i class="service-icon service-icon-compute image-shadow-sm animate zoomIn"></i>
							<div class="service-body">
								<h3><strong>针对大流量的视频用户而设计</strong></h3>
								<?php if($is_iphone || $is_ipad || $is_android){  ?>
								<p style="color:#000000;">日常观看youtube、facebook、推特、niconico等等的视频用户 </br>XIMING能给您带来优质的体验和快速的视频响应速度</p>
								<span class="btn btn-lg btn-link" style="color:#FFFFFF;"><strong>每月仅需10元</strong></span>
								<?php } elseif($is_pc) { ?>
								<p>日常观看youtube、facebook、推特、niconico等等的视频用户 </br>XIMING能给您带来优质的体验和快速的视频响应速度</p>
								<span class="btn btn-lg btn-link"><strong>每月仅需10元</strong></span>
								<?php }?>
							</div>
						</a>
						<!--/ .service -->
					</div>
					<div class="col-sm-4">
						<a class="service" href="#">
							<i class="service-icon service-icon-storage image-shadow-sm animate zoomIn"></i>
							<div class="service-body">
								<h3><strong>针对网络复杂的游戏用户而定做</strong></h3>
								<?php if($is_iphone || $is_ipad || $is_android){  ?>
								<p style="color:#000000;">日常观看youtube、facebook、推特、niconico等等的视频用户 </br>XIMING能给您带来优质的体验和快速的视频响应速度</p>
								<span class="btn btn-lg btn-link" style="color:#FFFFFF;"><strong>每月仅需20元</strong></span>
								<?php } elseif($is_pc) { ?>
								<p>日常观看youtube、facebook、推特、niconico等等的视频用户 </br>XIMING能给您带来优质的体验和快速的视频响应速度</p>
								<span class="btn btn-lg btn-link"><strong>每月仅需20元</strong></span>
								<?php }?>
							</div>
						</a>
						<!--/ .service -->
					</div>
					<div class="col-sm-4">
						<a class="service" href="https://item.taobao.com/item.htm?id=536069860580" target="_blank">
							<i class="service-icon service-icon-dedicated image-shadow-sm animate zoomIn"></i>
							<div class="service-body">
								<h3><strong>应对突发情况需要翻墙而设计</strong></h3>
								<?php if($is_iphone || $is_ipad || $is_android){  ?>
								<p style="color:#000000;">日常观看youtube、facebook、推特、niconico等等的视频用户 </br>XIMING能给您带来优质的体验和快速的视频响应速度</p>
								<span class="btn btn-lg btn-link" style="color:#FFFFFF;"><strong>流量 1元/G 不限过期时间</strong></span>
								<?php } elseif($is_pc) { ?>
								<p>日常观看youtube、facebook、推特、niconico等等的视频用户 </br>XIMING能给您带来优质的体验和快速的视频响应速度</p>
								<span class="btn btn-lg btn-link"><strong>流量 1元/G 不限过期时间</strong></span>
								<?php }?>
							</div>
						</a>
						<!--/ .service -->
					</div>
				</div>
			</div>
			<!--/ .services -->
		</div>
	</div>
	<!-- /.page-section -->

	<div class="page-section section-dark section-center ">
		<div class="container">
			<h2 class="section-title"><strong>节点分布</strong></h2>
			<small>节点不定期变动，实时节点以网站提供为准</small>
			<div class="location-map location-map-lg">
				<div class="location-container">
					<div class="location location-frankfurt animate zoomIn">
						<span class="location-name"><span>新加坡×1</span></span><span class="location-pin"></span>
					</div>
					<div class="location location-paris animate zoomIn">
						<span class="location-name"><span>香港×3</span></span><span class="location-pin"></span></div>
					<div class="location location-tokyo animate zoomIn">
						<span class="location-name"><span>日本×3</span></span><span class="location-pin"></span></div>
					</div>
					<div class="map"></div>
				</div>

				<div class="actions text-center"></div>

				<div class="actions">
					<a class="btn btn-lg btn-light btn-outline" href="locations.php">查看更多功能</a>
				</div>
			</div>
		</div>
	</div>
	<!-- /.page-section -->

		<div class="page-section section-center">
		<div class="container">

			<h2 class="section-title"><strong>快速. 稳定. 实惠</strong></h2>
			<div class="features features-icon-top features-center">
				<div class="row">
					<!-- /.feature -->
					<div class="col-sm-3 col-xs-6">
						<div class="feature"><span class="img"><img style="border:0" src="https://www.ximing.cf/files/img/yzj_2.png" alt="2016-04-19" width="100" height="100"></span>
							<h4><strong></br>基于高性能的云服务,保障用户体验</strong></h4>

						</div>
					</div>
					<!-- /.feature -->
					<div class="col-sm-3 col-xs-6">
						<div class="feature"><span class="img"><img style="border:0" src="https://www.ximing.cf/files/img/yzj_6.png" alt="2016-04-19" width="100" height="100"></span>
							<h4><strong></br>基于开源，活跃的更新速度能提高安全性和稳定性<strong></h4>
						</div>
					</div>
					<!-- /.feature -->
					<div class="clear-xs"></div>
					<div class="col-sm-3 col-xs-6">
						<div class="feature"><span class="img"><img style="border:0" src="https://www.ximing.cf/files/img/yzj_4.png" alt="2016-04-19" width="100" height="100"></span>
							<h4><strong></br>独立账号，独立端口 您可以自行修改密码<strong></h4>
						</div>
					</div>	
					<!-- /.feature -->

					<div class="col-sm-3 col-xs-6">
						<div class="feature"><span class="img"><img style="border:0" src="https://www.ximing.cf/files/img/yzj_5.png" alt="2016-04-19" width="100" height="100"></span>
							<h4><strong></br>支持 包括PC、Mac、手机（Android和iOS）和路由器（OpenWrt、梅林、极路由）</h4>
						</div>
					</div>
					<!-- /.feature -->
				</div>
			</div>
			<!-- /.features -->
			<div class="actions">
				<a class="btn btn-lg btn-primary btn-outline" href="/features/">查看更多功能</a>
			</div>
		</div>
	</div>

		
	<!-- /.page-section -->
	<div class="page-footer">
		<footer class="footer-nav">
			<div class="container">
				<div class="row">
					<div class="col-xs-3">
						<h4><strong>全部套餐</strong></h4>
						<ul>
							<li><a href="order.php">针对大流量的视频用户而设计的套餐</a></li>
							<li><a href="#">应对突发情况需要翻墙而设计的套餐</a></li>
							<li><a href="#">针对网络复杂的游戏用户的专属套餐</a></li>
						</ul>
					</div>
					<div class="col-xs-3">
						<h4><strong>软件下载与使用攻略</strong></h4>
						<ul>
							<li><a href="download.php">软件下载</a></li>
							<li><a href="help.php">使用攻略</a></li>
							<li><a href="new.php">XIMING特色</a></li>
						</ul>
					</div>
					<div class="col-xs-3">
						<h4><strong>邀请码</strong></h4>
						<ul>
							<li><a href="code.php">邀请码</a></li>
							<li><a href="http://game.ximing.cf:8383/">小蝌蚪聊天室</a></li>
						</ul>
					</div>
					<div class="col-xs-3">
						<h4><strong>关于XIMING</strong></h4>
						<ul>
							<li><a href="about/about_us.php">关于XIMING</a></li>
							<li><a href="new.php">XIMING 公告</a></li>
							<li><a href="use_policy.php">用户协议</a></li>
						</ul>
					</div>
				</div>
			</div>
		</footer>

<?php
include_once 'footer.php';
?>