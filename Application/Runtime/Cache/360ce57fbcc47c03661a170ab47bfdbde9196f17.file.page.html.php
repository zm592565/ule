<?php /* Smarty version Smarty-3.1.6, created on 2017-03-05 09:01:23
         compiled from "./Application/Admin/View\News\page.html" */ ?>
<?php /*%%SmartyHeaderCode:1759858bb6363441ba4-96103024%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '360ce57fbcc47c03661a170ab47bfdbde9196f17' => 
    array (
      0 => './Application/Admin/View\\News\\page.html',
      1 => 1465399042,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1759858bb6363441ba4-96103024',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'rs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58bb636351bd1',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bb636351bd1')) {function content_58bb636351bd1($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("layout/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<body style="min-height:auto;">
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 资讯管理 <span class="c-gray en">&gt;</span> 单页编辑<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
</nav>
</nav>
<div class="page-container">
<form action="<?php echo U('News/pagedetail');?>
" method="post" class="form form-horizontal">
		<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">

		
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>标题：</label>
			<div class="formControls col-xs-8 col-sm-6">
				<input type="text" class="input-text" value="<?php echo $_smarty_tpl->tpl_vars['rs']->value['title'];?>
" name="title">
			</div>
		</div>

		
		
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>摘要：</label>
			<div class="formControls col-xs-8 col-sm-7">
				<textarea name="zhai" id="textarea" class="textarea"  placeholder="栏目介绍...最少输入10个字符" datatype="*10-100" dragonfly="true" nullmsg="备注不能为空！" onKeyUp="textarealength(this,200)"><?php echo $_smarty_tpl->tpl_vars['rs']->value['zhai'];?>
</textarea>
				<p class="textarea-numberbar"><em class="textarea-length">0</em>/200</p>
			</div>
		</div>
		
		
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>关键词：</label>
			<div class="formControls col-xs-8 col-sm-6">
				<input type="text" class="input-text" value="<?php echo $_smarty_tpl->tpl_vars['rs']->value['keyword'];?>
" name="keyword">
			</div>
		</div>
		
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>正文：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<script id="editor" name="content" type="text/plain" style="width:100%;height:400px;"><?php echo $_smarty_tpl->tpl_vars['rs']->value['content'];?>
</script> 
			</div>
		</div>
		
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
				<button class="btn btn-primary radius" type="submit" id="submit"><i class="Hui-iconfont">&#xe632;</i> 保存并提交</button>
			</div>
		</div>
	</form>
	</div>

	<?php echo $_smarty_tpl->getSubTemplate ("layout/commonfooterjs.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	
	<script type="text/javascript" src="<?php echo @ADMIN_PATH;?>
lib/ueditor/1.4.3/ueditor.config.js"></script>
	<script type="text/javascript" src="<?php echo @ADMIN_PATH;?>
lib/ueditor/1.4.3/ueditor.all.min.js"> </script>
	<script type="text/javascript" src="<?php echo @ADMIN_PATH;?>
lib/ueditor/1.4.3/lang/zh-cn/zh-cn.js"></script>
	<script type="text/javascript">		
		$(function(){
			var ue = UE.getEditor('editor');
		});

	</script>
	
	</body>
</html><?php }} ?>