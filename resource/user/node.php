<?php
require_once '_main.php';
$node = new Ss\Node\Node();
?>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                节点列表
                <small>ノードリスト</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- START PROGRESS BARS -->
		<!-- Default box -->
		            <div class="box">
                			<div class="box-header with-border">
				                    <h3 class="box-title"><strong>XIMING活动</strong></h3>
			               		    <div class="box-tools pull-right">
                  				  	  <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="缩小"><i class="fa fa-minus"></i></button>
                       				 	  <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="别..."><i class="fa fa-times"></i></button>
                				    </div>
            				</div>
             				<div class="box-body">
                				   即日起至2016-12-22，前往<a href = "https://shop122039238.taobao.com/" target="_blank"><strong>XIMING淘宝店铺</strong></a> 领取优惠券 </br>购买流量套餐的前20名用户，均能享受满10元减5元的优惠；购买包季套餐的前10名用户，均能享受满25元减5元的优惠
              				</div><!-- /.box-body -->
             			   <div class="box-footer">
                    			另，购买所有套餐均能享受10%的淘金币折扣优惠
               			  </div><!-- /.box-footer-->
         		       </div><!-- /.box -->

            <div class="row">
                <div class="col-md-6">
                    <div class="box box-solid">
                        <div class="box-header">
                            <i class="fa fa-th-list"></i>
                            <h3 class="box-title">
                            普通节点　
                <small>普通にリスト</small>
                            </h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <div class="callout callout-warning">
                                <h4>注意!</h4>
                                <p> ● 严禁在任何地方公开节点地址！违反规则将以<a href="../tos.php" target="_blank">用户协议</a>处罚办法执行</p>
                                <p> ● 除美国洛杉矶服务器外均支持UDP协议</p>
                                <p> ● 测PING得到的结果可能大于真实值，测试时请断开SS。否则得到的测试结果和真实值出入较大！</p>
                            </div><?php
                            $node0 = $node->NodesArray(0);
                            foreach($node0 as $row){
                                ?>
                                <div class="nav-tabs-custom">
                                    <ul class="nav nav-tabs pull-right">
                                        <li class="dropdown">
                                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                                操作 <span class="caret"></span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li role="presentation"><a role="menuitem" target="_blank" tabindex="-1" href="node_json.php?id=<?php echo $row['id']; ?>">配置文件</a></li>
                                                <li role="presentation"><a role="menuitem" target="_blank" tabindex="-1" href="node_qr.php?id=<?php echo $row['id']; ?>">二维码 & SS链接</a></li>
                                            </ul>
                                        </li>
                                        <li class="pull-left header"><i class="fa fa-angle-right"></i> <?php echo $row['node_name']; ?></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab_1-1">
                                            <p> <a class="btn btn-xs bg-purple btn-flat margin" href="#">地址:</a> <code><?php echo $row['node_server']; ?></code>
                                                <a class="btn btn-xs bg-orange btn-flat margin" href="#"><?php echo $row['node_status']; ?></a>
                                                <a class="btn btn-xs bg-green btn-flat margin" href="#"><?php echo $row['node_method']; ?></a>
                                                <a class="btn btn-xs bg-red btn-flat margin" href="ping.php?ip=<?php echo $row['node_server']; ?>" target="_blank">测PING</a>
                                            </p>
                                            <p> <?php echo $row['node_info']; ?></p>
                                        </div><!-- /.tab-pane -->
                                    </div><!-- /.tab-content -->
                                </div><!-- nav-tabs-custom -->
                            <?php }?>
                        </div><!-- /.box-body -->


                    </div><!-- /.box -->
                </div><!-- /.col (left) -->

                <div class="col-md-6">
                    <div class="box box-solid">
                        <div class="box-header">
                            <i class="fa fa-th-list"></i>
                            <h3 class="box-title">高速节点　<small>高速のリスト</small></h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <div class="callout callout-warning">
                                <h4>注意!</h4>
                                <p> ● 同样严禁在任何地方公开节点地址！违反规则的将以<a href="../tos.php" target="_blank">用户协议</a>处罚办法执行</p>
                                <p> ● 所有服务器均支持UDP协议</p>
                                <p> ● 测PING得到的结果可能大于真实值，测试时请断开SS。否则得到的测试结果和真实值出入较大！</p>
                            </div>
			 <?php if ($oo->get_plan() != "站长" && $oo->get_plan() != "游戏" && $oo->get_plan() != "付费" && $oo->get_plan() != "流量" && $oo->get_plan() != "测试") { ?>
                            <p><a class="btn btn-danger btn-flat disabled" href="#">仅供付费用户使用；成为付费用户即可享受更优质的节点！</a></p>
                            <p><a class="btn btn-success btn-flat" href="https://shop122039238.taobao.com/">XIMING淘宝店铺</a></p>
                            <?php } else { ?>
			 <?php
                            $node1 = $node->NodesArray(1);
                            foreach($node1 as $row){
                                ?>
                                <div class="nav-tabs-custom">
                                    <ul class="nav nav-tabs pull-right">
                                        <li class="dropdown">
                                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                                操作 <span class="caret"></span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li role="presentation"><a role="menuitem" target="_blank" tabindex="-1" href="node_json.php?id=<?php echo $row['id']; ?>">配置文件</a></li>
                                                <li role="presentation"><a role="menuitem" target="_blank" tabindex="-1" href="node_qr.php?id=<?php echo $row['id']; ?>">二维码 & SS链接</a></li>
                                            </ul>
                                        </li>
                                        <li class="pull-left header"><i class="fa fa-angle-right"></i> <?php echo $row['node_name']; ?></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab_1-1">
                                            <p> <a class="btn btn-xs bg-purple btn-flat margin" href="#">地址:</a> <code><?php echo $row['node_server']; ?></code>
                                                <a class="btn btn-xs bg-orange btn-flat margin" href="#"><?php echo $row['node_status']; ?></a>
                                                <a class="btn btn-xs bg-green btn-flat margin" href="#"><?php echo $row['node_method']; ?></a>
                                                <a class="btn btn-xs bg-red btn-flat margin" href="ping.php?ip=<?php echo $row['node_server']; ?>" target="_blank">测PING</a>
                                            </p>
                                            <p> <?php echo $row['node_info']; ?></p>
                                        </div><!-- /.tab-pane -->
                                    </div><!-- /.tab-content -->
                                </div><!-- nav-tabs-custom -->
                            <?php }?>
                        </div><!-- /.box-body -->
                        <?php }?>
                    </div><!-- /.box -->
                </div><!-- /.col (right) -->
                

                 
               
            </div><!-- /.row -->
            <!-- END PROGRESS BARS -->
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
<?php
require_once '_footer.php'; ?>
