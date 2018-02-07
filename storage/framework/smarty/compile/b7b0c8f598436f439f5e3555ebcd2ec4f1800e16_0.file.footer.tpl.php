<?php
/* Smarty version 3.1.29, created on 2018-02-06 23:34:27
  from "/var/www/html/sspanel/resources/views/default/footer.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a79cb033c2408_52668155',
  'file_dependency' => 
  array (
    'b7b0c8f598436f439f5e3555ebcd2ec4f1800e16' => 
    array (
      0 => '/var/www/html/sspanel/resources/views/default/footer.tpl',
      1 => 1517909185,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a79cb033c2408_52668155 ($_smarty_tpl) {
?>
<!-- QQ在线咨询  -->
<div id="floatTools" class="rides-cs" style="height:246px;">
    <div class="floatL">
        <a id="aFloatTools_Show" class="btnOpen" title="查看在线客服" style="top:20px;display:block" href="javascript:void(0);">展开</a>
        <a id="aFloatTools_Hide" class="btnCtn" title="关闭在线客服" style="top:20px;display:none" href="javascript:void(0);">收缩</a>
    </div>
    <div id="divFloatToolsView" class="floatR" style="display: none;height:237px;width: 140px;">
        <div class="cn">
            <h3 class="titZx">飞速度客服</h3>
            <ul>
                <li><span>客服</span> <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=14451981&site=qq&menu=yes"><img border="0" src="http://demo.lanrenzhijia.com/2014/service1031/images/online.png" alt="点击这里给我发消息" title="点击这里给我发消息"/></a> </li>

                <li style="border:none;"><span>微信: 14451981</span> </li>
            </ul>
        </div>
    </div>
</div>

<footer class="page-footer blue">
	<div class="container">
		<div class="row">
			<div class="col l6 s12">
				<h5 class="white-text">关于我们</h5>
				<p class="grey-text text-lighten-4">本站只提供基于学术科研的上网账号，请在法律允许内使用</p>


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
  Powered by <a class="orange-text text-lighten-3" href="https://github.com/hongcoo/sspanel">ss-panel</a> <?php echo $_smarty_tpl->tpl_vars['config']->value["version"];?>

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

<?php echo '<script'; ?>
 src="/assets/public/js/qqcontact.js"><?php echo '</script'; ?>
>


</body>
</html>
<?php }
}
