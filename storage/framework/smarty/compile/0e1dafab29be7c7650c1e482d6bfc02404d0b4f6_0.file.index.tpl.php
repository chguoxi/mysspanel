<?php
/* Smarty version 3.1.29, created on 2018-02-06 23:34:27
  from "/var/www/html/sspanel/resources/views/default/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a79cb0339c0c1_89692513',
  'file_dependency' => 
  array (
    '0e1dafab29be7c7650c1e482d6bfc02404d0b4f6' => 
    array (
      0 => '/var/www/html/sspanel/resources/views/default/index.tpl',
      1 => 1517909185,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a79cb0339c0c1_89692513 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="section no-pad-bot" id="index-banner">
    <div class="container">
        <br><br>

        <div class="row center">
            <h5 class="header col s12 light">轻松上网   自在畅游</h5>
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
                    <h2 class="center light-blue-text"><i class="material-icons">flash_on</i></h2>
                    <h5 class="center">飞速奔跑，拒绝等待</h5>
                    <p class="light">
                        全球服务器节点部署，自研发高速协议架构，多条线路智能切换，实现跑满你的带宽，降低外服游戏的延迟，满足海外4K视频流畅观看，平均速度和稳定性皆优于其他加速产品。                    </p>
                </div>
            </div>

            <div class="col s12 m4">
                <div class="icon-block">
                    <h2 class="center light-blue-text"><i class="material-icons">group</i></h2>
                    <h5 class="center">更少流量，更快速度</h5>
                    <p class="light">
                        独创智能分流技术，识别访问站点，实现国内网站不消耗飞速度流量，整天挂机也不必担心国内网站偷跑流量。这一切轻点按钮即可控制（此功能全端上线）。相比其他传统加速产品，飞速度让您用更少的流量消耗，获取更快的加速服务                    </p>
                </div>
            </div>

            <div class="col s12 m4">
                <div class="icon-block">
                    <h2 class="center light-blue-text"><i class="material-icons">settings</i></h2>
                    <h5 class="center">扫码秒连，省心高效</h5>

                    <p class="light">
                        无需配置，全平台客户端实现一键秒连，各国线路自动优选，并支持一个账号多设备使用。iOS客户端支持通知栏插件，省心高效，最大化便捷您的工作娱乐。安全匿名，我们也不会记录您的任何信息。遇到任何问题，可以通过微信随时随地联系我们。                    </p>
                </div>
            </div>
        </div>

    </div>
    <br><br>

    <div class="section">

    </div>
</div>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
