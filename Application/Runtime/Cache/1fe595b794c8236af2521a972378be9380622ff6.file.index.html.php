<?php /* Smarty version Smarty-3.1.6, created on 2017-03-05 09:01:42
         compiled from "./Application/Admin/View\From\index.html" */ ?>
<?php /*%%SmartyHeaderCode:2813358bb6376601898-45446743%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1fe595b794c8236af2521a972378be9380622ff6' => 
    array (
      0 => './Application/Admin/View\\From\\index.html',
      1 => 1464682859,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2813358bb6376601898-45446743',
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
  'unifunc' => 'content_58bb63766f816',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bb63766f816')) {function content_58bb63766f816($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("layout/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 系统管理 <span class="c-gray en">&gt;</span> 来源列表<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
</nav>

<div class="page-container">

	<form action="<?php echo U('Class/command');?>
" method="post">
	<div class="cl pd-5 bk-gray" style="border-bottom:none"><a href="<?php echo U('From/add');?>
" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加来源</a></span> <span class="r">共有数据：<strong><?php echo $_smarty_tpl->tpl_vars['count']->value;?>
</strong> 条</span> </div>
	<table class="table table-border table-bordered table-bg table-hover">
		<thead>
			<tr>
				<th scope="col" colspan="11">分类列表</th>
			</tr>
			<tr class="text-c">
				<th>ID</th>
				<th>来源名</th>
				<th>英文名</th>
				<th>链接</th>
				<th>来源信息</th>
				<th>添加时间</th>
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
				<td><?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['value']->value['name_en'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['value']->value['link'];?>
</td>
				<td><?php echo mb_substr($_smarty_tpl->tpl_vars['value']->value['name_info'],0,10);?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['value']->value['date'];?>
</td>
				<td class="td-manage">
				<a title="编辑" href="<?php echo U('From/update');?>
?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> 
				<a title="删除" href="<?php echo U('From/delone');?>
?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a>
				</td>
			</tr>		
		<?php } ?>
		<?php }else{ ?>
			<tr class="text-c">
			<td colspan="11">暂无数据...</td>
			</tr>
		<?php }?>
		</tbody>
	</table>
	</form>
	<div class="pagination" style="margin-top:20px"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("layout/commonfooterjs.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html
<?php }} ?>