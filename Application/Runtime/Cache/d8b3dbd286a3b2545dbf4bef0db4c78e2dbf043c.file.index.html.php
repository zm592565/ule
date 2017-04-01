<?php /* Smarty version Smarty-3.1.6, created on 2017-01-19 09:37:17
         compiled from "./Application/Admin/View\Member\index.html" */ ?>
<?php /*%%SmartyHeaderCode:141725880184d86ebf5-64076712%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8b3dbd286a3b2545dbf4bef0db4c78e2dbf043c' => 
    array (
      0 => './Application/Admin/View\\Member\\index.html',
      1 => 1483188038,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '141725880184d86ebf5-64076712',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'count' => 0,
    'member' => 0,
    'value' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5880184d9927a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5880184d9927a')) {function content_5880184d9927a($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("layout/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 会员管理 <span class="c-gray en">&gt;</span> 会员列表<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
</nav>

<div class="page-container">

	<form method="post" name="myform">
	<div class="cl pd-5 bk-gray" style="border-bottom:none"><a href="<?php echo U('Member/addMember');?>
" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加会员</a></span> <span class="r">共有数据：<strong><?php echo $_smarty_tpl->tpl_vars['count']->value;?>
</strong> 条</span> </div>
	<table class="table table-border table-bordered table-bg table-hover">
		<thead>
			<tr>
				<th scope="col" colspan="11">会员列表</th>
			</tr>
			<tr class="text-c">
				<th width="40">ID</th>
				<th>账号</th>
				<th>邮箱</th>
				<th>手机</th>
				<th>注册日期</th>
				<th>来源</th>
				<th>状态</th>
				<th>用户识别码</th>
				<th width="100">操作</th>
			</tr>
		</thead>
		<tbody>
		<?php if ($_smarty_tpl->tpl_vars['member']->value){?>
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['member']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
			<tr class="text-c">
				<td><?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['value']->value['member_name'];?>
</td>
				<td><?php if ($_smarty_tpl->tpl_vars['value']->value['memer_email']){?><?php echo $_smarty_tpl->tpl_vars['value']->value['memer_email'];?>
<?php }else{ ?>暂无<?php }?></td>
				<td><?php if ($_smarty_tpl->tpl_vars['value']->value['memer_phone']){?><?php echo $_smarty_tpl->tpl_vars['value']->value['memer_phone'];?>
<?php }else{ ?>暂无<?php }?></td>
				<td><?php echo date('Y-m-d',$_smarty_tpl->tpl_vars['value']->value['member_reg_day']);?>
</td>
				<td><?php if ($_smarty_tpl->tpl_vars['value']->value['member_from']==1){?>后台添加<?php }else{ ?>用户注册<?php }?></td>
				<td class="td-status"><?php if ($_smarty_tpl->tpl_vars['value']->value['member_state']==1){?><a href='<?php echo U("Member/updateMemberState?id=".($_smarty_tpl->tpl_vars['value']->value['id'])."&state=".($_smarty_tpl->tpl_vars['value']->value['member_state']));?>
' class="label label-success radius">正常</a><?php }else{ ?><a href='<?php echo U("Member/updateMemberState?id=".($_smarty_tpl->tpl_vars['value']->value['id'])."&state=".($_smarty_tpl->tpl_vars['value']->value['member_state']));?>
' class="label label-error radius">已冻结</a><?php }?></td>
				<td><?php echo $_smarty_tpl->tpl_vars['value']->value['member_code'];?>
</td>
				<td class="td-manage">
				<a title="修改密码" href='<?php echo U("Member/updatePass?id=".($_smarty_tpl->tpl_vars['value']->value['id']));?>
' class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> 
				<a title="删除" href='<?php echo U("Member/delUser?id=".($_smarty_tpl->tpl_vars['value']->value['id']));?>
' class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a>
				</td>
			</tr>		 
		<?php } ?>
		<?php }else{ ?>
			<tr class="text-c">
			<td colspan="10">暂无数据...</td>
			</tr>
		<?php }?>
		</tbody>	
	</table>
	</form>
	<div class="pagination" style="margin-top:20px"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("layout/commonfooterjs.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript">

$(function(){
    $("#check_bottom_all").on("click" , function(){
			
		$("table tbody tr>td #check_all").prop("checked",$(this).prop("checked"));   	

    });

})


function paixu() {
	document.myform.action="<?php echo U('Class/sort');?>
";  
}
function del(){
	document.myform.action="<?php echo U('Class/del');?>
";  
}


</script>
	



</body>
</html
<?php }} ?>