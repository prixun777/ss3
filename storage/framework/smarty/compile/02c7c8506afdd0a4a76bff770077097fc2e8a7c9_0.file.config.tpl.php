<?php
/* Smarty version 3.1.29, created on 2017-03-20 22:44:36
  from "/data/wwwroot/217.guojijiasu.net/resources/views/default/admin/config.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58cfead4cfe249_07633083',
  'file_dependency' => 
  array (
    '02c7c8506afdd0a4a76bff770077097fc2e8a7c9' => 
    array (
      0 => '/data/wwwroot/217.guojijiasu.net/resources/views/default/admin/config.tpl',
      1 => 1489992179,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/main.tpl' => 1,
    'file:admin/footer.tpl' => 1,
  ),
),false)) {
function content_58cfead4cfe249_07633083 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            站点配置
            <small>App Config</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div id="msg-success" class="alert alert-info alert-dismissable" style="display: none;">
                    <button type="button" class="close" id="ok-close" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-info"></i> 成功!</h4>

                    <p id="msg-success-p"></p>
                </div>

            </div>
        </div>
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">修改配置</h3>
                    </div>
                    <!-- /.box-header -->

                    <div class="box-body">
                        <form role="form">
                            <div class="form-group">
                                <label>网站名</label>
                                <input type="text" class="form-control" placeholder="Enter ..." id="app-name"
                                       value="<?php echo $_smarty_tpl->tpl_vars['conf']->value['app-name'];?>
">
                            </div>

                            <div class="form-group">
                                <label>统计代码</label>
                                <textarea class="form-control" id="analytics-code" rows="3"
                                          placeholder="Enter ..."><?php echo $_smarty_tpl->tpl_vars['conf']->value['analytics-code'];?>
</textarea>
                            </div>

                            <div class="form-group">
                                <label>邀请页公告</label>
                                <textarea class="form-control" id="home-code" rows="3"
                                          placeholder="Enter ..."><?php echo $_smarty_tpl->tpl_vars['conf']->value['home-code'];?>
</textarea>
                            </div>

                            <div class="form-group">
                                <label>用户中心公告</label>
                                <textarea class="form-control" id="user-index" rows="3"
                                          placeholder="Enter ..."><?php echo $_smarty_tpl->tpl_vars['conf']->value['user-index'];?>
</textarea>
                            </div>

                            <div class="form-group">
                                <label>用户节点公告</label>
                                <textarea class="form-control" id="user-node" rows="3"
                                          placeholder="Enter ..."><?php echo $_smarty_tpl->tpl_vars['conf']->value['user-node'];?>
</textarea>
                            </div>

                        </form>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button id="update" type="submit" name="update" value="update" class="btn btn-primary">更新配置
                        </button>
                    </div>

                </div>
            </div>
            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">其他信息</h3>
                    </div>
                    <div class="box-footer">
                    </div>
                </div>
            </div>
            <!-- /.box -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div><!-- /.content-wrapper -->

<?php echo '<script'; ?>
>
    $(document).ready(function () {
        $("#update").click(function () {
            $.ajax({
                type: "PUT",
                url: "/admin/config",
                dataType: "json",
                data: {
                    analyticsCode: $("#analytics-code").val(),
                    homeCode: $("#home-code").val(),
                    appName: $("#app-name").val(),
                    userIndex: $("#user-index").val(),
                    userNode: $("#user-node").val()
                },
                success: function (data) {
                    if (data.ret) {
                        $("#msg-success").show(100);
                        $("#msg-success-p").html(data.msg);
                        //window.setTimeout("location.href='/admin/invite'", 2000);
                    }
                    // window.location.reload();
                },
                error: function (jqXHR) {
                    alert("发生错误：" + jqXHR.status);
                }
            })
        })
    })
<?php echo '</script'; ?>
>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
