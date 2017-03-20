<?php
/* Smarty version 3.1.29, created on 2017-03-20 21:52:02
  from "/data/wwwroot/217.guojijiasu.net/resources/views/default/user/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58cfde82871814_47326180',
  'file_dependency' => 
  array (
    '6696d2b22c51fb1196a9aac50e34e669ccba810f' => 
    array (
      0 => '/data/wwwroot/217.guojijiasu.net/resources/views/default/user/index.tpl',
      1 => 1489992179,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:user/main.tpl' => 1,
    'file:user/footer.tpl' => 1,
  ),
),false)) {
function content_58cfde82871814_47326180 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:user/main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            用户中心
            <small>User Center</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- START PROGRESS BARS -->
        <div class="row">
            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-header">
                        <i class="fa fa-bullhorn"></i>

                        <h3 class="box-title">公告&FAQ</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col (right) -->

            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-header">
                        <i class="fa fa-exchange"></i>

                        <h3 class="box-title">流量使用情况</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="40"
                                         aria-valuemin="0" aria-valuemax="100"
                                         style="width: <?php echo $_smarty_tpl->tpl_vars['user']->value->trafficUsagePercent();?>
%">
                                        <span class="sr-only">Transfer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <dl class="dl-horizontal">
                            <dt>总流量</dt>
                            <dd><?php echo $_smarty_tpl->tpl_vars['user']->value->enableTraffic();?>
</dd>
                            <dt>已用流量</dt>
                            <dd><?php echo $_smarty_tpl->tpl_vars['user']->value->usedTraffic();?>
</dd>
                            <dt>剩余流量</dt>
                            <dd><?php echo $_smarty_tpl->tpl_vars['user']->value->unusedTraffic();?>
</dd>
                        </dl>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col (left) -->

            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-header">
                        <i class="fa fa-pencil"></i>

                        <h3 class="box-title">签到获取流量</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <p> 每<?php echo $_smarty_tpl->tpl_vars['config']->value['checkinTime'];?>
小时可以签到一次。</p>

                        <p>上次签到时间：<code><?php echo $_smarty_tpl->tpl_vars['user']->value->lastCheckInTime();?>
</code></p>
                        <?php if ($_smarty_tpl->tpl_vars['user']->value->isAbleToCheckin()) {?>
                            <p id="checkin-btn">
                                <button id="checkin" class="btn btn-success  btn-flat">签到</button>
                            </p>
                        <?php } else { ?>
                            <p><a class="btn btn-success btn-flat disabled" href="#">不能签到</a></p>
                        <?php }?>
                        <p id="checkin-msg"></p>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col (right) -->

            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-header">
                        <i class="fa  fa-paper-plane"></i>

                        <h3 class="box-title">连接信息</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <dl class="dl-horizontal">
                            <dt>端口</dt>
                            <dd><?php echo $_smarty_tpl->tpl_vars['user']->value->port;?>
</dd>
                            <dt>密码</dt>
                            <dd><?php echo $_smarty_tpl->tpl_vars['user']->value->passwd;?>
</dd>
                            <dt>自定义加密方式</dt>
                            <dd><?php echo $_smarty_tpl->tpl_vars['user']->value->method;?>
</dd>
                            <dt>上次使用</dt>
                            <dd><?php echo $_smarty_tpl->tpl_vars['user']->value->lastSsTime();?>
</dd>
                        </dl>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col (right) -->
        </div>
        <!-- /.row --><!-- END PROGRESS BARS -->
    </section>
    <!-- /.content -->
</div><!-- /.content-wrapper -->

<?php echo '<script'; ?>
>
    $(document).ready(function () {
        $("#checkin").click(function () {
            $.ajax({
                type: "POST",
                url: "/user/checkin",
                dataType: "json",
                success: function (data) {
                    $("#checkin-msg").html(data.msg);
                    $("#checkin-btn").hide();
                },
                error: function (jqXHR) {
                    alert("发生错误：" + jqXHR.status);
                }
            })
        })
    })
<?php echo '</script'; ?>
>


<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:user/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
