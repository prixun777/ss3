<?php
/* Smarty version 3.1.29, created on 2017-03-20 22:34:22
  from "/data/wwwroot/217.guojijiasu.net/resources/views/default/admin/node/create.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58cfe86e92bda5_42090127',
  'file_dependency' => 
  array (
    '08aa54626241aed258654f045daa77971e2d9e00' => 
    array (
      0 => '/data/wwwroot/217.guojijiasu.net/resources/views/default/admin/node/create.tpl',
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
function content_58cfe86e92bda5_42090127 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            添加节点
            <small>Add Node</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div id="msg-success" class="alert alert-success alert-dismissable" style="display: none;">
                    <button type="button" class="close" id="ok-close" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-info"></i> 成功!</h4>

                    <p id="msg-success-p"></p>
                </div>
                <div id="msg-error" class="alert alert-warning alert-dismissable" style="display: none;">
                    <button type="button" class="close" id="error-close" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-warning"></i> 出错了!</h4>

                    <p id="msg-error-p"></p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-body">
                        <div class="form-horizontal">
                            <div class="row">
                                <fieldset class="col-sm-6">
                                    <legend>连接信息</legend>
                                    <div class="form-group">
                                        <label for="title" class="col-sm-3 control-label">节点名称</label>

                                        <div class="col-sm-9">
                                            <input class="form-control" id="name" value="">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="server" class="col-sm-3 control-label">节点地址</label>

                                        <div class="col-sm-9">
                                            <input class="form-control" id="server" value="">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="method" class="col-sm-3 control-label">加密方式</label>

                                        <div class="col-sm-9">
                                            <select class="form-control" id="method">
                                            <?php
$_from = $_smarty_tpl->tpl_vars['method']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_cipher_0_saved_item = isset($_smarty_tpl->tpl_vars['cipher']) ? $_smarty_tpl->tpl_vars['cipher'] : false;
$_smarty_tpl->tpl_vars['cipher'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['cipher']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['cipher']->value) {
$_smarty_tpl->tpl_vars['cipher']->_loop = true;
$__foreach_cipher_0_saved_local_item = $_smarty_tpl->tpl_vars['cipher'];
?>
                                               <option value="<?php echo $_smarty_tpl->tpl_vars['cipher']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['cipher']->value;?>
</option>  
                                            <?php
$_smarty_tpl->tpl_vars['cipher'] = $__foreach_cipher_0_saved_local_item;
}
if ($__foreach_cipher_0_saved_item) {
$_smarty_tpl->tpl_vars['cipher'] = $__foreach_cipher_0_saved_item;
}
?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="rate" class="col-sm-3 control-label">流量比例</label>

                                        <div class="col-sm-9">
                                            <input class="form-control" id="rate" value="1">
                                        </div>

                                    </div>

                                    <div class="form-group">
                                        <label for="method" class="col-sm-3 control-label">自定义加密</label>

                                        <div class="col-sm-9">
                                            <select class="form-control" id="custom_method">
                                                <option value="0" selected="selected">
                                                    不支持
                                                </option>
                                                <option value="1">
                                                    支持
                                                </option>
                                            </select>

                                            <p class="help-block">
                                                <a href="https://github.com/orvice/ss-panel/wiki/v3-custom-method">如何使用自定义加密?</a>|
                                                <a href="https://github.com/orvice/ss-panel/wiki/v3-traffic-rate">如何设置流量比例?</a>
                                            </p>
                                        </div>
                                    </div>

                                </fieldset>
                                <fieldset class="col-sm-6">
                                    <legend>描述信息</legend>
                                    <div class="form-group">
                                        <label for="type" class="col-sm-3 control-label">是否显示</label>

                                        <div class="col-sm-9">
                                            <select class="form-control" id="type">
                                                <option value="1" selected="selected">显示</option>
                                                <option value="0">隐藏</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="status" class="col-sm-3 control-label">节点状态</label>

                                        <div class="col-sm-9">
                                            <input class="form-control" id="status" value="">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="sort" class="col-sm-3 control-label">排序</label>

                                        <div class="col-sm-9">
                                            <input class="form-control" id="sort" type="number" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="info" class="col-sm-3 control-label">节点描述</label>

                                        <div class="col-sm-9">
                                            <textarea class="form-control" id="info" rows="3"></textarea>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" id="submit" name="action" value="add" class="btn btn-primary">添加</button>
                    </div>
                </div>
                <!-- /.box -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div><!-- /.content-wrapper -->

<?php echo '<script'; ?>
>
    $(document).ready(function () {
        function submit() {
            $.ajax({
                type: "POST",
                url: "/admin/node",
                dataType: "json",
                data: {
                    name: $("#name").val(),
                    server: $("#server").val(),
                    method: $("#method").val(),
                    custom_method: $("#custom_method").val(),
                    rate: $("#rate").val(),
                    info: $("#info").val(),
                    type: $("#type").val(),
                    status: $("#status").val(),
                    sort: $("#sort").val()
                },
                success: function (data) {
                    if (data.ret) {
                        $("#msg-error").hide(100);
                        $("#msg-success").show(100);
                        $("#msg-success-p").html(data.msg);
                        window.setTimeout("location.href='/admin/node'", 2000);
                    } else {
                        $("#msg-error").hide(10);
                        $("#msg-error").show(100);
                        $("#msg-error-p").html(data.msg);
                    }
                },
                error: function (jqXHR) {
                    $("#msg-error").hide(10);
                    $("#msg-error").show(100);
                    $("#msg-error-p").html("发生错误：" + jqXHR.status);
                }
            });
        }

        $("html").keydown(function (event) {
            if (event.keyCode == 13) {
                login();
            }
        });
        $("#submit").click(function () {
            submit();
        });
        $("#ok-close").click(function () {
            $("#msg-success").hide(100);
        });
        $("#error-close").click(function () {
            $("#msg-error").hide(100);
        });
    })
<?php echo '</script'; ?>
>


<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
