<?php /* Smarty version Smarty-3.1.6, created on 2017-03-05 09:01:25
         compiled from "./Application/Admin/View\Net\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1008258bb63659628a5-03431928%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ef691d0652798ee08d8286095605e294bc7cda1' => 
    array (
      0 => './Application/Admin/View\\Net\\index.html',
      1 => 1476321622,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1008258bb63659628a5-03431928',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'count' => 0,
    'result' => 0,
    'value' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58bb6365a7697',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bb6365a7697')) {function content_58bb6365a7697($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("layout/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 内容管理 <span class="c-gray en">&gt;</span> 网点列表<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
</nav>

<div class="page-container">

	<form method="post" name="myform">
	<div class="cl pd-5 bk-gray" style="border-bottom:none"><a href="<?php echo U('Net/add');?>
" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加网点</a></span> <span class="r">共有数据：<strong><?php echo $_smarty_tpl->tpl_vars['count']->value;?>
</strong> 条</span> </div>
	<table class="table table-border table-bordered table-bg table-hover table-striped">
		<thead>
			<tr>
				<th scope="col" colspan="11">分类列表</th>
			</tr>
			<tr class="text-c">
				<th><input type="checkbox"></th>
				<th>ID</th>
				<th>国家</th>
				<th>所在城市</th>
				<th>负责人</th>
				<th>客服经理</th>
				<th>客服电话</th>
				<th>添加时间</th>
				<th>排序</th>
				<th>操作</th>
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
				<td><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" name="id[]"></td>
				<td><?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['value']->value['nation'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['value']->value['city_cn'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['value']->value['charge'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['value']->value['manager'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['value']->value['tel'];?>
</td>
				<td><?php echo date('Y-m-d H:i:s',$_smarty_tpl->tpl_vars['value']->value['add_time']);?>
</td>
				<td><input class="input-text text-c" style="width: 20%" type="text" name="sort[<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['sort'];?>
"></td>
				<td class="td-manage">
				<?php if ($_smarty_tpl->tpl_vars['value']->value['is_show']){?>
				<a title="隐藏" href="<?php echo U('Net/isShow');?>
?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" class="ml-5" style="text-decoration:none;color: red">
				<i class="Hui-iconfont Hui-iconfont-yanjing"></i></a>
				<?php }else{ ?>
				<a title="显示" href="<?php echo U('Net/isShow');?>
?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" class="ml-5" style="text-decoration:none;color: green">
				<i class="Hui-iconfont Hui-iconfont-yanjing"></i></a>
				<?php }?>
				<a title="编辑" href="<?php echo U('Net/update');?>
?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> 
				<a title="删除" href="<?php echo U('Net/delone');?>
?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a>
				</td>
			</tr>		
		<?php } ?>

			<tr class="active">
				<td colspan="10">
					<input type="submit" value="排序" class="btn" onclick="paixu()">
					<input type="submit" value="批量删除" class="btn" onclick="del()">
				</td>
			</tr>

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
	function paixu() {
		document.myform.action="<?php echo U('Net/sort');?>
";  
	}
	function del(){
		document.myform.action="<?php echo U('Net/del');?>
";  
	}
</script>
	

</body>
</html
<?php }} ?>