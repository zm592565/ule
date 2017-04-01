<?php /* Smarty version Smarty-3.1.6, created on 2017-03-30 14:51:20
         compiled from "./Application/Admin/View\News\add.html" */ ?>
<?php /*%%SmartyHeaderCode:3269258dcaae89209d6-14520497%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b4989f67560e8ffd0c3d479174e11ac5927d006' => 
    array (
      0 => './Application/Admin/View\\News\\add.html',
      1 => 1474441721,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3269258dcaae89209d6-14520497',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'class' => 0,
    'value' => 0,
    'rs' => 0,
    'from' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58dcaae8ad177',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58dcaae8ad177')) {function content_58dcaae8ad177($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("layout/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<body style="min-height:auto;">
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 资讯管理 <span class="c-gray en">&gt;</span> 添加资讯<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
</nav>
<div class="page-container">
<form action="<?php echo U('News/add');?>
" method="post" class="form form-horizontal" id="add_news">
		<input type="hidden" name="uid" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
		<input type="hidden" name="uploadurl" value="<?php echo U('Common/upload');?>
">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>父级栏目：</label>
			<div class="formControls col-xs-6 col-sm-3"> 
				<span class="select-box">
				<select name="uid" class="select" id="select1">
					<?php if ($_smarty_tpl->tpl_vars['class']->value){?>
						<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['class']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
							<?php if ($_smarty_tpl->tpl_vars['value']->value['is_child']){?>
								<option disabled="disabled" <?php if ($_smarty_tpl->tpl_vars['id']->value==$_smarty_tpl->tpl_vars['value']->value['id']){?> selected = "selected" <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['nsbp'];?>
<?php if ($_smarty_tpl->tpl_vars['value']->value['level']>0){?>|<?php }?><?php echo $_smarty_tpl->tpl_vars['value']->value['html'];?>
<?php echo $_smarty_tpl->tpl_vars['value']->value['class_name'];?>
</option>
							<?php }else{ ?>
								<option <?php if ($_smarty_tpl->tpl_vars['id']->value==$_smarty_tpl->tpl_vars['value']->value['id']){?> selected = "selected" <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['nsbp'];?>
<?php if ($_smarty_tpl->tpl_vars['value']->value['level']>0){?>|<?php }?><?php echo $_smarty_tpl->tpl_vars['value']->value['html'];?>
<?php echo $_smarty_tpl->tpl_vars['value']->value['class_name'];?>
</option>
							<?php }?>
							
						<?php } ?>
					<?php }?>
					
				</select>
				</span> 
			</div>
		</div>

		
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>标题：</label>
			<div class="formControls col-xs-8 col-sm-6">
				<input type="text" class="input-text" value="<?php echo $_smarty_tpl->tpl_vars['rs']->value['title'];?>
" name="title">
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>来源：</label>
			<div class="formControls col-xs-8 col-sm-2">
				<span class="select-box">
				<select name="fromid" class="select" id="select2">
				<?php if ($_smarty_tpl->tpl_vars['from']->value){?>

					<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['from']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</option>
					<?php } ?>
				<?php }else{ ?>
					<option value="0">暂未添加来源数据！</option>
				<?php }?>
					
				</select>
				</span> 

			</div>
			<div class="formControls col-xs-8 col-sm-2">
				<input type="text" class="input-text" value="<?php echo $_smarty_tpl->tpl_vars['rs']->value['copyfrom'];?>
" name="copyfrom">
			</div>
		</div>
		
		
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>摘要：</label>
			<div class="formControls col-xs-8 col-sm-7">
				<textarea name="digest" id="textarea" class="textarea"  placeholder="栏目介绍...最少输入10个字符" datatype="*10-100" dragonfly="true" nullmsg="备注不能为空！" onKeyUp="textarealength(this,200)"><?php echo $_smarty_tpl->tpl_vars['rs']->value['digest'];?>
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
			<div class="formControls col-xs-8 col-sm-10">
				<script id="editor" name="content" type="text/plain" style="width:100%;height:400px;"></script> 
			</div>
		</div>
		
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>缩略图上传：</label>
			<div class="formControls col-xs-8 col-sm-7" id="up_box">
				  <p><a href="javascript:void();" id="upload" class="btn btn-primary radius">浏览图片</a></p>
 
			</div>
			
		</div>
		
		
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">允许评论：</label>
			<div class="formControls col-xs-8 col-sm-3 skin-minimal">
				<input type="checkbox" onclick="check_box('is_comment');" id="is_comment" style="margin-top:7px">
			</div>
			<input type="hidden" name="is_comment" >
		</div>

		
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
				<button class="btn btn-primary radius" type="submit" id="submit"><i class="Hui-iconfont">&#xe632;</i> 保存并提交</button>
				<a class="btn btn-default radius" href="javascript:;" onclick="product_close();" >&nbsp;&nbsp;取消&nbsp;&nbsp;</a>
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
	<script type="text/javascript" src="<?php echo @ADMIN_PATH;?>
js/upload.js"></script>
	<script type="text/javascript" src="<?php echo @ADMIN_PATH;?>
js/add_news.js"></script>
	<script type="text/javascript">		
		$(function(){
			var ue = UE.getEditor('editor');
		});
		//checkbox的方法
		function check_box(id){
			var checkid="#"+id;  
			if($(checkid).is(":checked")){
				$('input[name="is_comment"]').val('1');
		    }else{  
		    	$('input[name="is_comment"]').val('0');
		    }  

		}

		function product_close(){
			var index = parent.layer.getFrameIndex(window.name); //先得到当前iframe层的索引
			parent.layer.close(index); //再执行关闭 
		}


	</script>
	
	</body>
</html><?php }} ?>