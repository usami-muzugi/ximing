<?php
require_once '_main.php';
require_once '../tool/time.php';
require_once '../tool/ip.php';
require_once '../tool/address.php';
?>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                XIMING 用户信息
                <small>XIMING User Center</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-body">
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
                            <p><a class="btn btn-success btn-flat" href="https://item.taobao.com/item.htm?spm=a230r.1.14.28.vT37Uj&id=530750548073&ns=1&abbucket=15#detail" target="_blank">---点我续费 喵喵喵！---</a></p>
                            <?php echo ' <script>alert("XIMNG提示:\\n你的帐号已到期!请及时续费!请给 XIMING 投食~~~")</script> ';?>
                            <?php }?>
                        </div><!-- /.box -->
                    </div>
                </div>
            </div>
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
<?php
require_once '_footer.php'; ?>
