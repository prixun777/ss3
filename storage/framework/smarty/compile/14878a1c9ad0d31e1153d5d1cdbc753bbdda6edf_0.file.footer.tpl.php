<?php
/* Smarty version 3.1.29, created on 2017-03-20 17:13:05
  from "/data/wwwroot/217.guojijiasu.net/resources/views/default/footer.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58cf9d21426b80_97952559',
  'file_dependency' => 
  array (
    '14878a1c9ad0d31e1153d5d1cdbc753bbdda6edf' => 
    array (
      0 => '/data/wwwroot/217.guojijiasu.net/resources/views/default/footer.tpl',
      1 => 1489992179,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58cf9d21426b80_97952559 ($_smarty_tpl) {
?>
<footer class="page-footer orange">
	<div class="container">
		<div class="row">
			<div class="col l6 s12">
				<h5 class="white-text">关于</h5>
				<p class="grey-text text-lighten-4">本站提供某种帐号用于科学上网.</p>


			</div>
			<div class="col l3 s12">
				<h5 class="white-text">用户</h5>
				<ul>
				<?php if ($_smarty_tpl->tpl_vars['user']->value->isLogin) {?>
					<li><a class="white-text" href="/user">用户中心</a></li>
					<li><a class="white-text" href="/user/logout">退出</a></li>
				<?php } else { ?>
					<li><a class="white-text" href="/auth/login">登录</a></li>
					<li><a class="white-text" href="/auth/register">注册</a></li>
				<?php }?>
				</ul>
			</div>
			<div class="col l3 s12">
				<h5 class="white-text">页面</h5>
				<ul>
					<li><a class="white-text" href="/code">邀请码</a></li>
					<li><a class="white-text" href="/tos">TOS</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="footer-copyright">
		<div class="container">
			&copy; <?php echo $_smarty_tpl->tpl_vars['config']->value["appName"];?>
  Powered by <a class="orange-text text-lighten-3" href="https://github.com/orvice/ss-panel">ss-panel</a> <?php echo $_smarty_tpl->tpl_vars['config']->value["version"];?>

		 Theme by <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>
		</div>
		<div style="display:none;">
			<?php echo $_smarty_tpl->tpl_vars['analyticsCode']->value;?>

		</div>
	</div>
</footer>


<!--  Scripts-->
<?php echo '<script'; ?>
 src="/assets/public/js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/assets/materialize/js/materialize.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/assets/materialize/js/init.js"><?php echo '</script'; ?>
>

</body>
</html>
<?php }
}
