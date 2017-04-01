<?php /* Smarty version Smarty-3.1.6, created on 2017-03-30 14:51:13
         compiled from "./Application/Admin/View\News\page_wel.html" */ ?>
<?php /*%%SmartyHeaderCode:1215358bb63623903e5-84137676%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '392a36b9bdf6d5544a4a2ad168f09c5e7a8cb533' => 
    array (
      0 => './Application/Admin/View\\News\\page_wel.html',
      1 => 1490854674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1215358bb63623903e5-84137676',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58bb63623dcce',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bb63623dcce')) {function content_58bb63623dcce($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("layout/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<body style="min-height:auto;">
<div class="container">
	<div class="row cl">
				<div class="album-item" style="margin:0px auto; margin-top:80px;width:802px;">
					<div class="album-img">
						<img src="<?php echo @ADMIN_IMG_PATH;?>
page_wel.png" style="width:800px;height:400px;"> 
					</div>
					<div class="album-title">版权所有：申通国际内容管理系统　<span class="c-999">技术支持QQ:344822559</span></div>
					<div class="album-bg">
						<div class="album-bg-Fir"></div>
						<div class="album-bg-Sec"></div>
					</div>
				</div>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("layout/commonfooterjs.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	
</body>
</html><?php }} ?>