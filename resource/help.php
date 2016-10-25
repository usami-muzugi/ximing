<?php
include_once 'header.php';
?>
	

<div class="page-banner page-banner-subpage p-b-0 text-center">
	<div class="container">
		<div class="banner-slogan banner-slogan-hero">
			<h1 class="slogan-title">使用攻略</h1>
		</div>
		<div class="banner-tabs tabs-responsive">
			<div class="tabs-container">
				<ul class="nav nav-tabs text-center">
					<li><a href="download.php"><strong>软件下载</strong></a></li>
					<li class="active"><a href="help.php"><strong>使用攻略</strong></a></li>
					<li><a href="new.php"><strong>XIMING特色</strong></a></li>
				</ul>
				<button class="btn btn-icon btn-link btn-prev" type="button" data-click="prev-tab">
					<i class="zmdi zmdi-chevron-left"></i>
				</button>
				<button class="btn btn-icon btn-link btn-next" type="button" data-click="next-tab">
					<i class="zmdi zmdi-chevron-right"></i>
				</button>
			</div>
		</div>
	</div>
</div>
<!-- /.page-banner -->

				<div class="col-sm-8">
					<br/>
						<h2> <strong>Windows下 SSR使用攻略</strong></h2>

					<ol class="standard-ol">
						<li>
							下载SSR客户端<a href="https://www.ximing.cf/download.php" target="_blank"><strong>点击这里</strong></a>（SSR默认支持Windows、MAC、IOS、Android、Linux等平台，我们这里以Windows平台的为例）


						</li>
						<li>
							Windowsocks版SSR 均为绿色非安装版解压在某一文件夹，并创建好快捷方式，放置于桌面。
				 	         		</br><span class="img"><img style="border:0" src="https://www.ximing.cf/files/img/help-1.png" alt="2016-04-19" width="85" height="74"></span><br/>
						</li>
						<li>
							双击启动SSR 用户端，任务栏会出现一个小飞机图标的应用。
				 	         		</br><span class="img"><img style="border:0" src="https://www.ximing.cf/files/img/help-2.png" alt="2016-04-19" width="69" height="123"></span><br/>
						</li>

						<li>
							打开XIMING官网，登陆进入用户中心。在用户中心左侧处，单击节点列表 查看当前用户类型下所有服务器。
				 	         		</br><span class="img"><img style="border:0" src="https://www.ximing.cf/files/img/help-3.png" alt="2016-04-19" width="227" height="452"></span>
						</li>

						<li>
							选择合适的服务器，点击右侧操作，找到 二维码 && SS链接。点击进入。
				 	         		</br><span class="img"><img style="border:0" src="https://www.ximing.cf/files/img/help-4.png" alt="2016-04-19" width="708" height="465"></span>
						</li>

						<li>
							此时切换到网页外，右键任务栏处的小飞机 点击 扫描屏幕上的二维码 扫描网页上的二维码。确认无误后，点击确定保存（你也可以自行填写 保存）
				 	         		</br><span class="img"><img style="border:0" src="https://www.ximing.cf/files/img/help-5.png" alt="2016-04-19" width="224" height="386"></span>
				 	         		</br><span class="img"><img style="border:0" src="https://www.ximing.cf/files/img/help-6.png" alt="2016-04-19" width="870" height="414"></span>
						</li>

						<li>
							此时还并未启动，右键任务栏处的小飞机 点击 服务器，选择刚刚添加的节点。再右键任务栏处的小飞机 点击启动代理。
				 	         		</br><span class="img"><img style="border:0" src="https://www.ximing.cf/files/img/help-7.png" alt="2016-04-19" width="645" height="427"></span>
						</li>

						<li>
							Windowsocks下使用SSR教程基本讲解完毕，欲想详细了解更多功能，请自行谷歌。
						</li>
					</ol>


				</div>

				<div class="col-sm-4">
					<form onsubmit="return baiduWithHttps(this)" action="https://www.baidu.com/baidu" target="_blank">
						<input name="tn" type="hidden" value="SE_zzsearchcode_shhzc78w">
							<center>
								</br>
								</br>
								<a href="https://www.baidu.com/" target="_blank">
									<img src="https://www.baidu.com/img/baidu_jgylogo3.gif" alt="Baidu" align="bottom" border="0">
								</a>
							</cnter>
							</br>
							</br>
							<input type="text"  onfocus="checkHttps" name="word"  size="30" value="www.ximing.cf">
							<input type="submit"value="百度搜索">
					</form>
					<h4>若本教程有不足之处，还请多多包涵指点建议或自行搜索</h4>
					<script>
    						function checkHttps () {
							BaiduHttps.useHttps();    
						};
						function baiduWithHttps (formname) {
							var data = BaiduHttps.useHttps();
							if (data.s === 0) {
								return true;
							}
							else {
								formname.action = 'https://www.baidu.com/baidu' + '?ssl_s=1&ssl_c' + data.ssl_code;
								return true;
							}
						};
					</script>

				</div>

				<div class="section-row row">
					<div class="col-sm-8">
							<h2><strong>关于移动设备使用SS的方法</strong></h2>
						<ol class="standard-ol">
							<li>
								安卓设备
								安卓手机请下载安装<a href="https://www.ximing.cf/Download/shadowsocks-nightly-2.6.8.apk"><strong>影梭</strong></a>。
							<li>
								IOS设备
								IOS设备请在AppStore搜索“surge”、“shadowrocket”，两款APP均为付费APP。
							</li>
							</br>
						</ol>
					</div>
				</div>

	</div>

<?php
include_once 'footer.php';
?>
