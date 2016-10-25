<?php
require_once 'lib/config.php';
include_once 'header.php';
$c = new \Ss\User\Invite();
?>

<div class="page-banner page-banner-subpage p-b-0 text-center">
	<div class="container">
		<div class="banner-slogan banner-slogan-hero">
			<h1 class="slogan-title">邀请码</h1>
	                  <h1 class="slogan-title">每日放出少量邀请码 | 获取邀请码请加入XIMING群：<a target="_blank" href="http://shang.qq.com/wpa/qunwpa?idkey=e75e4097bdb205ef448bd6048c03affa29af9548a0df59d4bd82660053263513"><img border="0" src="http://pub.idqqimg.com/wpa/images/group.png" alt="XIMING SS交流" title="XIMING SS交流"></a></h1>
		</div>
	</div>
</div>
<!-- /.page-banner -->

	<div class="container">
    <div class="section"> 
        <!--   Icon Section   -->
        <div class="row">
		            <div class="box">
                			<div class="box-header with-border">
				                    <h3 class="box-title"><strong>XIMING活动</strong></h3>
			               		    <div class="box-tools pull-right">
                				    </div>
            				</div>
             				<div class="box-body">
                				   即日起至2016-12-22，前往<a href = "https://shop122039238.taobao.com/" target="_blank"><strong>XIMING淘宝店铺</strong></a> 领取优惠券 </br>购买流量套餐的前20名用户，均能享受满10元减5元的优惠；购买包季套餐的前10名用户，均能享受满25元减5元的优惠
              				</div><!-- /.box-body -->
             			   <div class="box-footer">
                    			另，购买所有套餐均能享受10%的淘金币折扣优惠
               			  </div><!-- /.box-footer-->
         		       </div><!-- /.box -->
            <div class="row marketing">
                <h3 class="sub-header">邀请码（点击即可使用）</h3>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>邀请码编号</th>
                            <th>邀请码</th>
                            <th>状态</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $datas = $c->CodeArray(); 
                        foreach($datas as $data ){
                            ?>
                            <tr>
                                <td><?php echo $data['id'];?></td>
                                <td><a href ="user/register.php?<?php echo $data['code'];?>" target="_blank"><?php echo $data['code'];?></a></td>
                                <td>准许邀请√</td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <br>  
</div>
<?php  include_once 'ana.php';
include_once 'footer.php';?>
