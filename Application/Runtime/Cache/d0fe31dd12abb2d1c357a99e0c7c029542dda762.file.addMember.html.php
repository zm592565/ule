<?php /* Smarty version Smarty-3.1.6, created on 2017-01-19 09:37:18
         compiled from "./Application/Admin/View\Member\addMember.html" */ ?>
<?php /*%%SmartyHeaderCode:190455880184ee853e6-52749488%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0fe31dd12abb2d1c357a99e0c7c029542dda762' => 
    array (
      0 => './Application/Admin/View\\Member\\addMember.html',
      1 => 1483176413,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '190455880184ee853e6-52749488',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5880184ef3455',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5880184ef3455')) {function content_5880184ef3455($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("layout/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 内容管理 <span class="c-gray en">&gt;</span> 添加分类<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
</nav>
<div class="page-container">

<form action="<?php echo U('Member/addMember');?>
" method="post" class="form form-horizontal">


		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>会员账号：</label>
			<div class="formControls col-xs-8 col-sm-3">
				<input type="text" class="input-text" value="<?php echo $_smarty_tpl->tpl_vars['rs']->value['member_name'];?>
" name="member_name">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>密码：</label>
			<div class="formControls col-xs-8 col-sm-3">
				<input type="password" class="input-text" value="<?php echo $_smarty_tpl->tpl_vars['rs']->value['member_pass'];?>
"  name="member_pass">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>确认密码：</label>
			<div class="formControls col-xs-8 col-sm-3">
				<input type="password" class="input-text" value="<?php echo $_smarty_tpl->tpl_vars['rs']->value['member_pass_enter'];?>
"  name="member_pass_enter">
			</div>
		</div>
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
				<button class="btn btn-primary radius" type="button" id="submit"><i class="Hui-iconfont">&#xe632;</i> 保存并提交</button>
				<a class="btn btn-default radius" href="<?php echo U('Member/index');?>
">&nbsp;&nbsp;取消&nbsp;&nbsp;</a>
			</div>
		</div>
	</form>
	</div>

	<?php echo $_smarty_tpl->getSubTemplate ("layout/commonfooterjs.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


	<script type="text/javascript">
	

	$(function(){

		$('#submit').click(function(){

			var member_name=$('input[name="member_name"]').val();
			var member_pass=$('input[name="member_pass"]').val();
			var member_pass_enter=$('input[name="member_pass_enter"]').val();
			var url="<?php echo U('Member/addMember');?>
";
			var returnUrl="<?php echo U('Member/index');?>
";
			if(member_name==''||member_pass==''||member_pass==''){
				layer.alert('内容填写不完整,请补充填写!')
				return false;
			}

			if (member_pass!=member_pass_enter) {
				layer.alert('密码不一致');
				return false;
			}


			$.post(url,
				{
					member_name:member_name,
					member_pass:member_pass,
					member_pass_enter:member_pass_enter
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
</html<?php }} ?>