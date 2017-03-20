<?php
/* Smarty version 3.1.29, created on 2017-03-20 22:55:53
  from "/data/wwwroot/217.guojijiasu.net/resources/views/default/code.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58cfed798fbf66_25626189',
  'file_dependency' => 
  array (
    '31f075c0fb2ece408e47f107fa0aa94c3d4e70fa' => 
    array (
      0 => '/data/wwwroot/217.guojijiasu.net/resources/views/default/code.tpl',
      1 => 1489992179,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_58cfed798fbf66_25626189 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="section no-pad-bot" id="index-banner">
    <div class="container">
        <br><br>
        <div class="row center">
            <h5>邀请码实时刷新</h5>
            <h5>如遇到无邀请码请找已经注册的用户获取。</h5>
            <?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

        </div>
    </div>
</div>

<div class="container">
    <div class="section">
        <!--   Icon Section   -->
        <div class="row">
            <div class="row marketing">
                <h2 class="sub-header">邀请码</h2>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>###</th>
                            <th>邀请码 (点击邀请码进入注册页面)</th>
                            <th>状态</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
$_from = $_smarty_tpl->tpl_vars['codes']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_code_0_saved_item = isset($_smarty_tpl->tpl_vars['code']) ? $_smarty_tpl->tpl_vars['code'] : false;
$_smarty_tpl->tpl_vars['code'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['code']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['code']->value) {
$_smarty_tpl->tpl_vars['code']->_loop = true;
$__foreach_code_0_saved_local_item = $_smarty_tpl->tpl_vars['code'];
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['code']->value->id;?>
</td>
                                <td><a href="/auth/register?code=<?php echo $_smarty_tpl->tpl_vars['code']->value->code;?>
"><?php echo $_smarty_tpl->tpl_vars['code']->value->code;?>
</a></td>
                                <td>可用</td>
                            </tr>
                        <?php
$_smarty_tpl->tpl_vars['code'] = $__foreach_code_0_saved_local_item;
}
if ($__foreach_code_0_saved_item) {
$_smarty_tpl->tpl_vars['code'] = $__foreach_code_0_saved_item;
}
?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <br>
</div>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
