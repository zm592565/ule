<?php /* Smarty version Smarty-3.1.6, created on 2017-03-05 09:59:31
         compiled from "./Application/Admin/View\AdminRole\add_group.html" */ ?>
<?php /*%%SmartyHeaderCode:2749958bb7103a64f46-60782367%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'adec753921613e8fe49fd6ec8fef458c6cedb05c' => 
    array (
      0 => './Application/Admin/View\\AdminRole\\add_group.html',
      1 => 1478999836,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2749958bb7103a64f46-60782367',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58bb7103b52d6',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bb7103b52d6')) {function content_58bb7103b52d6($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("layout/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 权限管理 <span class="c-gray en">&gt;</span> 添加权限<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
</nav>
<div class="page-container">

<form action="<?php echo U('AdminRole/add_group');?>
" method="post" class="form form-horizontal">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>用户组名：</label>
			<div class="formControls col-xs-8 col-sm-3">
				<input type="text" class="input-text" value="" name="title">
			</div>
		</div>
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
				<button class="btn btn-primary radius" type="button" id="submit"><i class="Hui-iconfont">&#xe632;</i> 保存并提交</button>
				<a class="btn btn-default radius" href="<?php echo U('AdminRole/group');?>
">&nbsp;&nbsp;取消&nbsp;&nbsp;</a>
			</div>
		</div>
	</form>
	</div>

	<?php echo $_smarty_tpl->getSubTemplate ("layout/commonfooterjs.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<script type="text/javascript">
	$(function(){

		$('#submit').click(function(){
            var url="<?php echo U('AdminRole/add_group');?>
";
            var returnUrl="<?php echo U('AdminRole/group');?>
";
			var title=$('input[name="title"]').val();
			if(title=='' ){
				layer.alert('内容填写不完整,请补充填写!')
				return false;
			}
			$.post(url,
				{
                    title:title
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


	
	</script>
</body>
</html><?php }} ?>