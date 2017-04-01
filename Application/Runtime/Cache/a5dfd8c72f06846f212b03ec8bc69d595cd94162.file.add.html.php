<?php /* Smarty version Smarty-3.1.6, created on 2017-03-30 13:34:05
         compiled from "./Application/Admin/View\Banner\add.html" */ ?>
<?php /*%%SmartyHeaderCode:3167658dc98cd36b990-49936985%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a5dfd8c72f06846f212b03ec8bc69d595cd94162' => 
    array (
      0 => './Application/Admin/View\\Banner\\add.html',
      1 => 1474620518,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3167658dc98cd36b990-49936985',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58dc98cd4ca6c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58dc98cd4ca6c')) {function content_58dc98cd4ca6c($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("layout/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 广告管理 <span class="c-gray en">&gt;</span> 添加广告位<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
</nav>
<div class="page-container">

<form action="<?php echo U('Class/addclass');?>
" method="post" class="form form-horizontal">
		
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>广告位名称：</label>
			<div class="formControls col-xs-8 col-sm-3">
				<input type="text" class="input-text" value="<?php echo $_smarty_tpl->tpl_vars['rs']->value['class_name'];?>
" name="class_name">
			</div>
		</div>
		
		
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>广告位说明：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<textarea name="class_info" id="textarea" class="textarea"  placeholder="栏目介绍...最少输入10个字符" datatype="*10-100" dragonfly="true" nullmsg="备注不能为空！" onKeyUp="textarealength(this,200)"><?php echo $_smarty_tpl->tpl_vars['rs']->value['class_info'];?>
</textarea>
				<p class="textarea-numberbar"><em class="textarea-length">0</em>/200</p>
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">是否显示：</label>
			<div class="formControls col-xs-8 col-sm-3 skin-minimal">
				<input type="checkbox" onclick="check_box('check_menu');" id="check_menu" <?php if ($_smarty_tpl->tpl_vars['rs']->value['is_show']==1){?>checked="checked"<?php }?> style="margin-top:7px">
			</div>
			<input type="hidden" name="is_show" >
		</div>
		
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
				<button class="btn btn-primary radius" type="button" id="submit"><i class="Hui-iconfont">&#xe632;</i> 保存并提交</button>
				<a class="btn btn-default radius" href="<?php echo U('Banner/bannerlist');?>
">&nbsp;&nbsp;取消&nbsp;&nbsp;</a>
			</div>
		</div>
	</form>
	</div>



	<?php echo $_smarty_tpl->getSubTemplate ("layout/commonfooterjs.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


	<script type="text/javascript">
	

	$(function(){

		$('#submit').click(function(){
			
			var class_name=$('input[name="class_name"]').val();
			var is_show=$('input[name="is_show"]').val();
			var class_info=$('#textarea').val();
			var url="<?php echo U('Banner/add');?>
";
			var returnUrl="<?php echo U('Banner/bannerlist');?>
";
			if(class_name==''||class_info==''){
				layer.alert('内容填写不完整,请补充填写!')
				return false;
			}

			$.post(url,
				{
					class_name:class_name,
					class_info:class_info,
					is_show:is_show,
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
			$('input[name="is_show"]').val('1');
	    }else{  
	    	$('input[name="is_show"]').val('0');
	    }  

	}

	
	</script>
</body>
</html<?php }} ?>