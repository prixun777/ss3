<?php
/* Smarty version 3.1.29, created on 2017-03-20 17:13:05
  from "/data/wwwroot/217.guojijiasu.net/resources/views/default/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58cf9d2140f890_28894814',
  'file_dependency' => 
  array (
    '252bb92521aefb0624d19af4f00bd8e12f7b1740' => 
    array (
      0 => '/data/wwwroot/217.guojijiasu.net/resources/views/default/index.tpl',
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
function content_58cf9d2140f890_28894814 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="section no-pad-bot" id="index-banner">
    <div class="container">
        <br><br>
        <h1 class="header center orange-text"><?php echo $_smarty_tpl->tpl_vars['config']->value["appName"];?>
</h1>
        <div class="row center">
            <h5 class="header col s12 light">轻松科学上网   保护个人隐私</h5>
            <?php echo $_smarty_tpl->tpl_vars['homeIndexMsg']->value;?>

        </div>
        <?php if ($_smarty_tpl->tpl_vars['user']->value->isLogin) {?>
            <div class="row center">
                <a href="/user" id="download-button" class="btn-large waves-effect waves-light orange">进入用户中心</a>
            </div>
        <?php } else { ?>
        <div class="row center">
            <a href="/auth/register" id="download-button" class="btn-large waves-effect waves-light orange">立即注册</a>
        </div>
        <?php }?>
        <br><br>
    </div>
</div>


<div class="container">
    <div class="section">

        <!--   Icon Section   -->
        <div class="row">
            <div class="col s12 m4">
                <div class="icon-block">
                    <!-- To be compatible with some old browsers(especially mobile browsers), use &#xE3E7 instead of flash_on. For more information visit the link below.
                    http://google.github.io/material-design-icons/#using-the-icons-in-html
                    -->
                    <h2 class="center light-blue-text"><i class="material-icons">&#xE3E7</i></h2>
                    <h5 class="center">Super Fast</h5>

                    <p class="light">
                        Bleeding edge techniques using Asynchronous I/O and Event-driven programming.
                    </p>
                </div>
            </div>

            <div class="col s12 m4">
                <div class="icon-block">
                    <!-- To be compatible with some old browsers(especially mobile browsers), use &#xE7EF instead of group. For more information visit the link below.
                    http://google.github.io/material-design-icons/#using-the-icons-in-html
                    -->
                    <h2 class="center light-blue-text"><i class="material-icons">&#xE7EF</i></h2>
                    <h5 class="center">Open Source</h5>

                    <p class="light">
                        Totally free and open source. A worldwide community devoted to deliver bug-free code and long-term support.
                    </p>
                </div>
            </div>

            <div class="col s12 m4">
                <div class="icon-block">
                    <!-- To be compatible with some old browsers(especially mobile browsers), use &#xE8B8 instead of settings. For more information visit the link below.
                    http://google.github.io/material-design-icons/#using-the-icons-in-html
                    -->
                    <h2 class="center light-blue-text"><i class="material-icons">&#xE8B8</i></h2>
                    <h5 class="center">Easy to work with</h5>

                    <p class="light">
                        Avaliable on multiple platforms, including PC, MAC, Mobile (Android and iOS) and Routers (OpenWRT).
                    </p>
                </div>
            </div>
        </div>

    </div>
    <br><br>

    <div class="section">

    </div>
</div>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
