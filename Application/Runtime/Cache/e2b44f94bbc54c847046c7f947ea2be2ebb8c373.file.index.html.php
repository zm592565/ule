<?php /* Smarty version Smarty-3.1.6, created on 2017-03-05 09:01:41
         compiled from "./Application/Admin/View\System\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1455658bb6375b6d015-64781322%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2b44f94bbc54c847046c7f947ea2be2ebb8c373' => 
    array (
      0 => './Application/Admin/View\\System\\index.html',
      1 => 1465798842,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1455658bb6375b6d015-64781322',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58bb6375c1bb3',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bb6375c1bb3')) {function content_58bb6375c1bb3($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("layout/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 系统管理 <span class="c-gray en">&gt;</span> 系统设置 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">

		<div id="tab-system" class="HuiTab">
			<div class="tabBar cl"><span>基本设置</span><span>其他设置</span></div>
			<div class="tabCon">
			<form action="<?php echo U('System/update');?>
" method="post" class="form form-horizontal">
			<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['rs']->value['id'];?>
">
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>网站名称：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<input type="text" name="name" placeholder="控制在25个字、50个字节以内" value="<?php echo $_smarty_tpl->tpl_vars['rs']->value['name'];?>
" class="input-text">
					</div>
				</div>
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>关键词：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<input type="text" name="keyword" placeholder="5个左右,8汉字以内,用英文,隔开" value="<?php echo $_smarty_tpl->tpl_vars['rs']->value['keyword'];?>
" class="input-text">
					</div>
				</div>
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>描述：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<input type="text" name="description" placeholder="空制在80个汉字，160个字符以内" value="<?php echo $_smarty_tpl->tpl_vars['rs']->value['description'];?>
" class="input-text">
					</div>
				</div>
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>底部版权信息：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<input type="text" name="coryright" placeholder="&copy; 2016 H-ui.net" value="<?php echo $_smarty_tpl->tpl_vars['rs']->value['coryright'];?>
" class="input-text">
					</div>
				</div>
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2">备案号：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<input type="text" name="icp" placeholder="京ICP备00000000号" value="<?php echo $_smarty_tpl->tpl_vars['rs']->value['icp'];?>
" class="input-text">
					</div>
				</div>
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2">统计代码：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<textarea class="textarea" name="count"><?php echo $_smarty_tpl->tpl_vars['rs']->value['count'];?>
</textarea>
					</div>
				</div>

				<div class="row cl">
					<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
						<button class="btn btn-primary radius" type="submit"><i class="Hui-iconfont">&#xe632;</i> 保存</button>
						<button id="canle" class="btn btn-default radius" type="button">&nbsp;&nbsp;清空&nbsp;&nbsp;</button>
					</div>
				</div>

			</form>
			</div>
			<div class="tabCon">
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2">允许访问后台的IP列表：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<textarea class="textarea" name="" id=""></textarea>
					</div>
				</div>
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2">后台登录失败最大次数：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<input type="text" class="input-text" value="5" id="" name="" >
					</div>
				</div>
			</div>
			
		</div>
		
</div>
<?php echo $_smarty_tpl->getSubTemplate ("layout/commonfooterjs.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	

<script type="text/javascript">
$(function(){

	$.Huitab("#tab-system .tabBar span","#tab-system .tabCon","current","click","0");

	$('#canle').on('click',function(){
		$(':input').val('');
	})
	


});
</script>
</body>
</html><?php }} ?>