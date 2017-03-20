<?php
/* Smarty version 3.1.29, created on 2017-03-20 22:34:20
  from "/data/wwwroot/217.guojijiasu.net/resources/views/default/admin/node/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58cfe86c804e28_18946504',
  'file_dependency' => 
  array (
    'b16a1497a656ac37222c02a01bc62979fae9466a' => 
    array (
      0 => '/data/wwwroot/217.guojijiasu.net/resources/views/default/admin/node/index.tpl',
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
function content_58cfe86c804e28_18946504 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            节点列表
            <small>Node List</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <p> <a class="btn btn-success btn-sm" href="/admin/node/create">添加</a> </p>
                <div class="box">
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tr>
                                <th>ID</th>
                                <th>节点</th>
                                <th>加密</th>
                                <th>描述</th>
                                <th>排序</th>
                                <th>操作</th>
                            </tr>
                            <?php
$_from = $_smarty_tpl->tpl_vars['nodes']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_node_0_saved_item = isset($_smarty_tpl->tpl_vars['node']) ? $_smarty_tpl->tpl_vars['node'] : false;
$_smarty_tpl->tpl_vars['node'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['node']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['node']->value) {
$_smarty_tpl->tpl_vars['node']->_loop = true;
$__foreach_node_0_saved_local_item = $_smarty_tpl->tpl_vars['node'];
?>
                            <tr>
                                <td>#<?php echo $_smarty_tpl->tpl_vars['node']->value->id;?>
</td>
                                <td> <?php echo $_smarty_tpl->tpl_vars['node']->value->name;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['node']->value->method;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['node']->value->info;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['node']->value->sort;?>
</td>
                                <td>
                                    <a class="btn btn-info btn-sm" href="/admin/node/<?php echo $_smarty_tpl->tpl_vars['node']->value->id;?>
/edit">编辑</a>
                                    <a class="btn btn-danger btn-sm" id="delete" value="<?php echo $_smarty_tpl->tpl_vars['node']->value->id;?>
" href="/admin/node/<?php echo $_smarty_tpl->tpl_vars['node']->value->id;?>
/delete">删除</a>
                                </td>
                            </tr>
                            <?php
$_smarty_tpl->tpl_vars['node'] = $__foreach_node_0_saved_local_item;
}
if ($__foreach_node_0_saved_item) {
$_smarty_tpl->tpl_vars['node'] = $__foreach_node_0_saved_item;
}
?>
                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
        </div>

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->


<?php echo '<script'; ?>
>
    $(document).ready(function(){
        function delete(){
            $.ajax({
                type:"DELETE",
                url:"/admin/node/",
                dataType:"json",
                data:{
                    name: $("#name").val()
                },
                success:function(data){
                    if(data.ret){
                        $("#msg-error").hide(100);
                        $("#msg-success").show(100);
                        $("#msg-success-p").html(data.msg);
                        window.setTimeout("location.href='/admin/node'", 2000);
                    }else{
                        $("#msg-error").hide(10);
                        $("#msg-error").show(100);
                        $("#msg-error-p").html(data.msg);
                    }
                },
                error:function(jqXHR){
                    $("#msg-error").hide(10);
                    $("#msg-error").show(100);
                    $("#msg-error-p").html("发生错误："+jqXHR.status);
                }
            });
        }
        $("html").keydown(function(event){
            if(event.keyCode==13){
                login();
            }
        });
        $("#delete").click(function(){
            delete();
        });
        $("#ok-close").click(function(){
            $("#msg-success").hide(100);
        });
        $("#error-close").click(function(){
            $("#msg-error").hide(100);
        });
    })
<?php echo '</script'; ?>
>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
