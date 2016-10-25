<?php
require_once '_main.php';

$invite = new \Ss\User\Invite($uid);
$code = $invite->CodeArray();
?>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                邀请
                <small>Invite</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header">
                            <h3 class="box-title">邀请函</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <p>当前您可以生成<code><?php   echo $U->InviteNum();  ?></code>个邀请函。  </p>
                            <?php  if($U->InviteNum() !=0){ ?>
                                <button id="invite" class="btn btn-sm btn-info">生成我的邀请函</button>
                            <?php } ?>

                            <div id="msg-error" class="alert alert-warning alert-dismissable" style="display:none">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <h4><i class="icon fa fa-warning"></i> 出错了!邀请非法：我们怀疑你并不想邀请用户来这儿!</h4>
                                <p id="msg-error-p"></p>
                            </div>

                        </div><!-- /.box -->

                        <div class="box-header">
                            <h3 class="box-title">我的邀请函</h3>
                        </div><!-- /.box-header -->

                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>邀请函编号</th>
                                    <th>邀请函</th>
                                    <th>状态</th>
                                </tr>
                                </thead>

                                <tbody>
                                <?php
                                $a = 0;
                                foreach($code as $data ){
                                    ?>
                                    <tr>
                                        <td><?php echo $a;$a++; ?></td>
                                        <td><?php echo $data['code'];?></td>
                                        <td>准许邀请√</td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="box box-solid">
                        <div class="box-body">

                            <div class="callout callout-warning">
                                <h4>注意！</h4>
                                <p>邀请函请给认识的、或者需要的用户。</p>
                                <p>邀请有记录，你們媒體千萬要記著，不要"見得風，就是雨"，媒體本身也要判斷，明白嗎?</p>
                                <p>假使這些完全無中生有的東西，你再把他邀請一遍，你等於...你也有責任吧</p>
                            </div>

                            <div class="callout callout-info">
                                <h4>说明</h4>
                                <p>用户注册72小时后，才可以生成邀请函。</p>
                                <p>邀请函暂时无法购买，请珍惜。</p>
                                <p>公共页面不定期发放邀请函，如果用完邀请函可以关注公共邀请。</p>
                            </div>

                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div><!-- /.col (right) -->




                </div>
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
<?php
require_once '_footer.php'; ?>

<script>
    $(document).ready(function(){
        $("#invite").click(function(){
            $.ajax({
                type:"GET",
                url:"_invite.php",
                dataType:"json",
                success:function(data){
                    if(data.ok){
                        window.location.reload();
                    }else{
                        $("#msg-error").show();
                        $("#msg-error-p").html(data.msg);
                    }
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
<audio autoplay="autoplay"><source src="/files/music/alive/invite.m4r" type="audio/mpeg" /></audio>