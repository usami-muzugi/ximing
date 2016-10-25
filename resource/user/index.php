<?php
require_once '_main.php';
require_once '../tool/ip.php';
require_once '../tool/time.php';
require_once '../tool/address.php';
$node = new Ss\Node\Node();
?>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                用户中心
                <small>利用者センター</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- START PROGRESS BARS -->
		            <div class="box">
                			<div class="box-header with-border">
				                    <h3 class="box-title"><strong>XIMING活动</strong></h3>
			               		    <div class="box-tools pull-right">
                  				  	  <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="缩小"><i class="fa fa-minus"></i></button>
                       				 	  <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="别"><i class="fa fa-times"></i></button>
                				    </div>
            				</div>
             				<div class="box-body">
                				   即日起至2016-12-22，前往<a href = "https://shop122039238.taobao.com/" target="_blank"><strong>XIMING淘宝店铺</strong></a> 领取优惠券 </br>购买流量套餐的前20名用户，均能享受满10元减5元的优惠；购买包季套餐的前10名用户，均能享受满25元减5元的优惠
              				</div><!-- /.box-body -->
             			   <div class="box-footer">
                    			另，购买所有套餐均能再享受5%的淘金币折扣优惠
               			  </div><!-- /.box-footer-->
         		       </div><!-- /.box -->
            <div class="row">
                <div class="col-md-6">
                    <div class="box box-solid">
                        <div class="box-header">
                            <h3 class="box-title">
                            公告&FAQ 
                            <small> XIMINGの情報 </small>
                            </h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <p>● XIMING官网：<a href="#"> https://www.ximing.cf</a> | 备用镜像站：<a href="game.ximing.cf/" target="_blank">备用镜像站</a>; 为了您的访问快捷，请添加到浏览器书签里！</p> 
                            <HR style="border:1 dashed #987cb9" width="80%" color=#987cb9 SIZE=1>
                            <p>● 客户端下载地址与使用方法说明请 <a href="https://shop122039238.taobao.com/" target="_blank"> 点击这里</a></p>
                            <p>● 增值服务购买请进入 <a href="https://shop122039238.taobao.com/" target="_blank"> XIMING淘宝店铺</a></p>
                            <p>● 请在左侧节点列表自行选择适合您的最佳服务器</p>
                            <p>● 本站用户类型详情请查看<a href="https://item.taobao.com/item.htm?spm=a230r.1.14.28.vT37Uj&id=530750548073&ns=1&abbucket=15#detail" target="_blank"> 购买链接 </a></p>
                            <p>● 重大事宜与节点变更公告会优先在XIMING群发布，之后再汇总到网站 最新公告 里。<span class="label label-danger">没时间解释了!快上车!</span>这里是XIMING群：<a target="_blank" href="http://shang.qq.com/wpa/qunwpa?idkey=e75e4097bdb205ef448bd6048c03affa29af9548a0df59d4bd82660053263513"><img border="0" src="http://pub.idqqimg.com/wpa/images/group.png" alt="XIMING SS交流" title="XIMING SS交流"></a> </p>
                            <HR style="border:1 dashed #987cb9" width="80%" color=#987cb9 SIZE=1>
                            <?php
                            $node1 = $node->NodesArray(4);
                            foreach($node1 as $row){
                            ?>
                            <p><?php echo $row['node_info']; ?></p>
                            <?php }?>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div><!-- /.col (right) -->

                <div class="col-md-6">
                    <div class="box box-solid">
                        <div class="box-header">
                            <h3 class="box-title">
                            流量使用情况
                            <small>データ使用量</small>
                            </h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <p> 已用流量：<?php echo $transfers."MB";?> </p>
                            <div class="progress progress-striped">
                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $used_100; ?>%">
                                    <span class="sr-only">Transfer</span>
                                </div>
                            </div>
                            <p> 可用流量：<?php echo $all_transfer ."GB";?> </p>
                            <p> 剩余流量：<?php echo  $unused_transfer."GB";?> </p>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div><!-- /.col (left) -->

                <div class="col-md-6">
                    <div class="box box-solid">
                        <div class="box-header">
                            <h3 class="box-title">
                            签到获取流量
                            <small>データを得る</small>
                            </h3>
                              </div><!-- /.box-header -->
                           <div class="box-body">
                            <?php if ($oo->get_plan() == "流量" or $final_time < 0 ) { ?>
                <p><a class="btn btn-success btn-flat disabled" href="#">不能签到</a></p>
                <?php } else { ?>
                <p> 24小时内可以签到一次。</p>
                <p> 每次签到可获取0.22-0.65GB</p>
                <?php  if($oo->is_able_to_check_in())  { ?>
                <p id="checkin-btn"> <button id="checkin" class="btn btn-success  btn-flat">签到</button></p>
                <?php  }else{ ?>
                <p><a class="btn btn-success btn-flat disabled" href="#">不能签到</a> </p>
                <?php  } ?>
                <p id="checkin-msg" ></p>
                <p>上次签到时间：<code><?php echo date('Y-m-d H:i:s',$oo->get_last_check_in_time());?></code></p>
                <?php } ?>
                <HR style="border:1 dashed #987cb9" width="80%" color=#987cb9 SIZE=1>
                <h4> 无法签到说明：</h4>
                <p> 一、XIMING账号为 流量账号或试用账号</p>
                <p> 二、XIMING账号已到期</p>
                <p> 三、当日已签到</p>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div><!-- /.col (right) -->

                <div class="col-md-6">
                    <div class="box box-solid">
                        <div class="box-header">
                            <h3 class="box-title">
                            Shadowsocks 账号信息
                            <small>Shadowsocks のアカウント情報</small>
                            </h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <p> Shadowsocks端口：<code><?php echo $oo->get_port();?></code> </p>
                            <p> Shadowsocks密码：<code><?php echo $oo->get_pass();?></code> </p>
                            <?php if (date('Y-m-d H:i:s',$unix_time) == "1970-01-01 08:00:00"){?>
                            <p> Shadowsocks 最后使用时间：<span class="label label-danger">从未使用；三天内若无数据流量产生，系统将自动删除帐号</span> </p>
                            <?php } else {?>
                            <p> Shadowsocks 最后使用时间：<code><?php echo date('Y-m-d H:i:s',$unix_time);?></code> </p>
                            <?php }?>
                            <p> 加密方式：<code>aes-256-cfb</code> </p>
                            <p> 用户类别：<span class="label label-info"> <?php echo $oo->get_plan();?> </span> </p>
                            <HR style="border:1 dashed #987cb9" width="80%" color=#66CCFF SIZE=1>
                            <p> ● 若出现网站帐号能登入但SS帐号不能使用，首先确定账户是否到期，再判断SS帐号是否配置正常；若以上均为正常，关于连接的问题请找站长</p>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div><!-- /.col (right) -->
                
                <div class="col-md-6">
                    <div class="box box-solid">
                        <div class="box-header">
                            <h3 class="box-title">
                            XIMING 帐号信息
                            <small>XIMING のアカウント情報</small>
                            </h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <center>
                            <p>  账号状态：</p>
                            </center>
                            <div class="progress progress-striped">
                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $huahua_time ?>%">
                                    <span class="sr-only">Transfer</span>
                                </div>
                            </div>
                            <HR style="border:1 dashed #987cb9" width="80%" color=#987cb9 SIZE=1>
                            <p> 用户名：<?php echo $U->GetUserName(); ?></p>
                            <p> 用户邮箱：<?php echo $user_email; ?></p>
                            <p> 登陆设备：
                                <?php if($is_pc){  ?>
                                  <code>PC</code>
                                <?php }?>
                                <?php if($is_iphone){  ?>
                                  <code>iPhone</code>
                                <?php }?>
                                <?php if($is_ipad){  ?>
                                  <code>iPad</code>
                                <?php }?>
                                <?php if($is_android){  ?>
                                  <code>Android</code>
                                <?php }?>
                            </p>
                            <p> 此次登陆网站网路地址：<code><?php echo $ip; ?></code> </p>
                            <p> 此次登陆网站物理地址：<code><?php echo getIPLoc_sina($_SERVER["REMOTE_ADDR"]); ?></code> </p>
                            <p> 用户类别：<span class="label label-info"> <?php echo $oo->get_plan();?> </span> </p>
                            <?php if ($oo->get_money() =="0000-00-00") { ?>
                            <p>当前状态：<span class="label label-danger">试用；试用期3天</span> </p>
                            <?php }  elseif($oo->get_money() > date("Y-m-d",time())) {?>
                            <p>当前状态：<span class="label label-info">可用;剩余：<?php echo $final_time;?>天</span> </p>
                            
                            <HR style="border:1 dashed #987cb9" width="80%" color=#987cb9 SIZE=1>

                            <p>● 当帐号到期时，会显示自助续费淘宝链接和二维码。请自助续费（需确认收货）后联系销售，否者将会当过期试用帐号处理。</p>

                            <p>● 或者点击下面的链接提前给 XIMING投食~~~喵喵喵！</p>
                            <p><a class="btn btn-success btn-flat" href="https://item.taobao.com/item.htm?spm=a230r.1.14.28.vT37Uj&id=530750548073&ns=1&abbucket=15#detail" target="_blank">---点我投食 喵喵喵！---</a></p>
                            <?php } else { ?>
                            <p>当前状态：<span class="label label-danger">到期，已过期<?php echo $miaomiaomiao_time;?>天，请及时续费</span> </p>
                            <p><span class="label label-danger">● 若出现网站帐号能登入但SS帐号不能使用，联系购买续费即可开启</span> </p>
                            <HR style="border:1 dashed #987cb9" width="80%" color=#987cb9 SIZE=1>
                            <p>续费 支持以下支付方式： </p>
                            <p><span class="label label-info">● 淘宝购买 √</span> <span class="label label-info">● 微信转账 √</span> <span class="label label-info">● 支付宝转账 √</span> <span class="label label-info">● QQ红包 √</span> <span class="label label-info">● 比特币 √</span> <span class="label label-info">● Paypal √</span> <span class="label label-danger">● Py交易 ×</span> </p>
                            <HR style="border:1 dashed #987cb9" width="80%" color=#987cb9 SIZE=1>
                            <p><span class="label label-info">● XIMING自助续费淘宝二维码</span> </p>
                            <p>● 旺旺长时间不在线，请及时联系销售... </p>
                            <p>● 手机扫码即可打开店铺</p>
                            <p>● <code>购买请留言带上 续费/新购 | 邮箱号 | 端口号</code></p>
                            <span class="img"><img style="border:0" src="https://www.ximing.cf/files/img/XIMING.png" alt="续命交易" width="200" height="200"></span>
                            <p><span class="label label-info">● XIMING自助续费淘宝链接</span> </p>
                            <p><a class="btn btn-success btn-flat" href="https://item.taobao.com/item.htm?spm=a230r.1.14.28.vT37Uj&id=530750548073&ns=1&abbucket=15#detail" target="_blank">---点我续费---</a></p>
                            <?php echo ' <script>alert("XIMNG提示:\\n你的帐号已到期!请及时续费!请给 XIMING 投食~~~")</script> ';?>
                            <?php }?>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div><!-- /.col (left) -->
            </div><!-- /.row -->
            <!-- END PROGRESS BARS -->
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
<?php
require_once '_footer.php'; ?>

<script>
    $(document).ready(function(){
        $("#checkin").click(function(){
            $.ajax({
                type:"GET",
                url:"_checkin.php",
                dataType:"json",
                success:function(data){
                    $("#checkin-msg").html(data.msg);
                    $("#checkin-btn").hide();
                },
                error:function(jqXHR){
                    alert("发生错误："+jqXHR.status);
                    // 在控制台输出错误信息
                    console.log(removeHTMLTag(jqXHR.responseText));
                }
            })
        })
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
