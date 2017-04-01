<?php /* Smarty version Smarty-3.1.6, created on 2017-03-28 17:20:44
         compiled from "./Application/Admin/View\Class\addclass.html" */ ?>
<?php /*%%SmartyHeaderCode:2837358da2aec818ad7-37765936%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b36836b8a9aa9cabad25a6da5c769055e57ed5ec' => 
    array (
      0 => './Application/Admin/View\\Class\\addclass.html',
      1 => 1464682877,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2837358da2aec818ad7-37765936',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'class' => 0,
    'value' => 0,
    'rs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58da2aec99654',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58da2aec99654')) {function content_58da2aec99654($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("layout/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 内容管理 <span class="c-gray en">&gt;</span> 添加分类<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
</nav>
<div class="page-container">

<form action="<?php echo U('Class/addclass');?>
" method="post" class="form form-horizontal">

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>父级栏目：</label>
			<div class="formControls col-xs-6 col-sm-4"> 
				<span class="select-box">
				<select name="pid" class="select" id="select1">
					<option value="0">作为一级栏目</option>
					<?php if ($_smarty_tpl->tpl_vars['class']->value){?>
						<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['class']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['rs']->value['pid']==$_smarty_tpl->tpl_vars['value']->value['id']){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['value']->value['nsbp'];?>
<?php if ($_smarty_tpl->tpl_vars['value']->value['level']>0){?>|<?php }?><?php echo $_smarty_tpl->tpl_vars['value']->value['html'];?>
<?php echo $_smarty_tpl->tpl_vars['value']->value['class_name'];?>
</option>
						<?php } ?>
					<?php }?>
					
				</select>
				</span> 
			</div>
		</div>


		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>栏目类型：</label>
			<div class="formControls col-xs-8 col-sm-4"> <span class="select-box">
				<select name="class_type" class="select" id="select2">
					<option value="0" <?php if ($_smarty_tpl->tpl_vars['rs']->value['class_type']==0){?>selected="selected"<?php }?>>列表栏目</option>
					<option value="1" <?php if ($_smarty_tpl->tpl_vars['rs']->value['class_type']==1){?>selected="selected"<?php }?>>单页栏目</option>
				</select>
				</span> </div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>栏目名称：</label>
			<div class="formControls col-xs-8 col-sm-3">
				<input type="text" class="input-text" value="<?php echo $_smarty_tpl->tpl_vars['rs']->value['class_name'];?>
" name="class_name">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>英文名称：</label>
			<div class="formControls col-xs-8 col-sm-3">
				<input type="text" class="input-text" value="<?php echo $_smarty_tpl->tpl_vars['rs']->value['class_en'];?>
"  name="class_en">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">是否导航显示：</label>
			<div class="formControls col-xs-8 col-sm-3 skin-minimal">
				<input type="checkbox" onclick="check_box('check_menu');" id="check_menu" <?php if ($_smarty_tpl->tpl_vars['rs']->value['is_menu']==1){?>checked="checked"<?php }?> style="margin-top:7px">
			</div>
			<input type="hidden" name="is_menu" >
		</div>
		
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>栏目信息：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<textarea name="class_info" id="textarea" class="textarea"  placeholder="栏目介绍...最少输入10个字符" datatype="*10-100" dragonfly="true" nullmsg="备注不能为空！" onKeyUp="textarealength(this,200)"><?php echo $_smarty_tpl->tpl_vars['rs']->value['class_info'];?>
</textarea>
				<p class="textarea-numberbar"><em class="textarea-length">0</em>/200</p>
			</div>
		</div>
		
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
				<button class="btn btn-primary radius" type="button" id="submit"><i class="Hui-iconfont">&#xe632;</i> 保存并提交</button>
				<a class="btn btn-default radius" href="<?php echo U('Class/index');?>
">&nbsp;&nbsp;取消&nbsp;&nbsp;</a>
			</div>
		</div>
	</form>
	</div>

	<?php echo $_smarty_tpl->getSubTemplate ("layout/commonfooterjs.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


	<script type="text/javascript">
	

	$(function(){

		$('#submit').click(function(){

			var pid=$("#select1  option:selected").val();
			var class_type=$("#select2  option:selected").val();
			var class_name=$('input[name="class_name"]').val();
			var class_en=$('input[name="class_en"]').val();
			var is_menu=$('input[name="is_menu"]').val();
			var class_info=$('#textarea').val();
			var url="<?php echo U('Class/addclass');?>
";
			var returnUrl="<?php echo U('Class/index');?>
";
			if(class_name==''||class_en==''||class_info==''){
				layer.alert('内容填写不完整,请补充填写!')
				return false;
			}


			$.post(url,
				{
					pid:pid,
					class_type:class_type,
					class_name:class_name,
					class_en:class_en,
					is_menu:is_menu,
					class_info:class_info
				},
			
	          function(data){
	         	console.log(data); //  2pm
	         	if (data.state=="1") {

					layer.confirm(data.message, {
						  btn: ['继续添加','返回列表'] //按钮
						}, function(){
						  window.location.href=url;
						}, function(){
						   window.location.href=returnUrl;
					});

	         	}else{
	         		
	         		layer.confirm(data.message, {
						  btn: ['继续添加','返回列表'] //按钮
						}, function(){
						  window.location.href=url;
						}, function(){
						   window.location.href=returnUrl;
					});


	         	}

	        });

	       

		})

		

	})

	//checkbox的方法
	function check_box(id){
		var checkid="#"+id;  
		if($(checkid).is(":checked")){
			$('input[name="is_menu"]').val('1');
	    }else{  
	    	$('input[name="is_menu"]').val('0');
	    }  

	}

	
	</script>
</body>
</html<?php }} ?>