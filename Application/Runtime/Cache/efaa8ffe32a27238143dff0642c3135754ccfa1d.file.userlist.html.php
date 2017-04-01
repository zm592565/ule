<?php /* Smarty version Smarty-3.1.6, created on 2017-03-05 09:01:39
         compiled from "./Application/Admin/View\AdminUser\userlist.html" */ ?>
<?php /*%%SmartyHeaderCode:238358bb63730db297-08730463%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'efaa8ffe32a27238143dff0642c3135754ccfa1d' => 
    array (
      0 => './Application/Admin/View\\AdminUser\\userlist.html',
      1 => 1478569357,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '238358bb63730db297-08730463',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'result' => 0,
    'value' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58bb63731cb76',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bb63731cb76')) {function content_58bb63731cb76($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("layout/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 管理员管理 <span class="c-gray en">&gt;</span> 管理员列表<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
</nav>

<div class="page-container">

	<div class="cl pd-5 bk-gray" style="border-bottom:none"> <span class="l"><a href="<?php echo U('AdminUser/add');?>
" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加管理员</a></span> <span class="r">共有数据：<strong>54</strong> 条</span> </div>
	<table class="table table-border table-bordered table-bg">
		<thead>
			<tr>
				<th scope="col" colspan="9">管理员列表</th>
			</tr>
			<tr class="text-c">
				<th width="40">ID</th>
				<th width="150">登录名</th>
				<th width="90">真实姓名</th>
				<th width="150">邮箱</th>
				<th>角色</th>
				<th width="130">上次登录时间</th>
				<th width="100">是否已启用</th>
				<th width="100">操作</th>
			</tr>
		</thead>
		<tbody>
		<?php if ($_smarty_tpl->tpl_vars['result']->value){?>
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
			<tr class="text-c">
				<td><?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['value']->value['user'];?>
</td>
				<td><?php if ($_smarty_tpl->tpl_vars['value']->value['name']){?><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
<?php }else{ ?>无数据<?php }?></td>
				<td><?php if ($_smarty_tpl->tpl_vars['value']->value['email']){?><?php echo $_smarty_tpl->tpl_vars['value']->value['email'];?>
<?php }else{ ?>无数据<?php }?></td>
				<td><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['value']->value['last_time'];?>
</td>
				<td class="td-status"><?php if ($_smarty_tpl->tpl_vars['value']->value['state']){?><span class="label label-success radius">已启用</span><?php }else{ ?><span class="label label-default radius">已冻结</span><?php }?></td>
				<td class="td-manage">
				<?php if ($_smarty_tpl->tpl_vars['value']->value['state']==0){?>
				<a style="text-decoration:none" href="<?php echo $_smarty_tpl->tpl_vars['value']->value['freezeurl'];?>
" title="解除冻结"><i class="Hui-iconfont">&#xe605;</i></a><?php }else{ ?>
				<a style="text-decoration:none" href="<?php echo $_smarty_tpl->tpl_vars['value']->value['freezeurl'];?>
" title="冻结"><i class="Hui-iconfont">&#xe60e;</i></a>
				<?php }?>
				 <a title="编辑" href="<?php echo $_smarty_tpl->tpl_vars['value']->value['updateurl'];?>
" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a>
				 <a title="删除" href="javascript:drop_confirm('确定要删除吗？','<?php echo $_smarty_tpl->tpl_vars['value']->value['delurl'];?>
')" id="delid" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a>

				  </td>
			</tr>
		<?php } ?>
		<?php }else{ ?>
		<tr class="text-c">
		<td colspan="8">暂无数据...</td>
		</tr>
		<?php }?>
		</tbody>
	</table>

	<div class="pagination" style="margin-top:20px"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("layout/commonfooterjs.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<script type="text/javascript">
	
		function drop_confirm(message,pathurl){
			if(confirm(message)){
				window.location.href=pathurl;
			}else{
				return false;
			}
		}
		</script>

</body>
</html><?php }} ?>