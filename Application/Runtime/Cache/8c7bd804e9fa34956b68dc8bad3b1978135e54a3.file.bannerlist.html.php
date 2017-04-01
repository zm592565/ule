<?php /* Smarty version Smarty-3.1.6, created on 2017-03-05 09:01:28
         compiled from "./Application/Admin/View\Banner\bannerlist.html" */ ?>
<?php /*%%SmartyHeaderCode:2072358bb6368d26be6-27382275%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c7bd804e9fa34956b68dc8bad3b1978135e54a3' => 
    array (
      0 => './Application/Admin/View\\Banner\\bannerlist.html',
      1 => 1474621315,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2072358bb6368d26be6-27382275',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'count' => 0,
    'class' => 0,
    'value' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58bb6368e75dd',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bb6368e75dd')) {function content_58bb6368e75dd($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("layout/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 内容管理 <span class="c-gray en">&gt;</span> 分类列表<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
</nav>

<div class="page-container">

	<form action="<?php echo U('Banner/command');?>
" method="post">
	<div class="cl pd-5 bk-gray" style="border-bottom:none"><a href="<?php echo U('Banner/add');?>
" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加广告位</a></span> <span class="r">共有数据：<strong><?php echo $_smarty_tpl->tpl_vars['count']->value;?>
</strong> 条</span> </div>
	<table class="table table-border table-bordered table-bg table-hover">
		<thead>
			<tr>
				<th scope="col" colspan="11">分类列表</th>
			</tr>
			<tr class="text-c">
				<th width="40">ID</th>
				<th>类名</th>
				<th>栏目信息</th>
				<th>是否导航显示</th>
				<th>添加时间</th>
				<th width="100">操作</th>
			</tr>
		</thead>
		<tbody>
		<?php if ($_smarty_tpl->tpl_vars['class']->value){?>
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['class']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
			<tr class="text-c">
				<td><?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['value']->value['class_name'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['value']->value['class_info'];?>
</td>
				<td class="td-status"><?php if ($_smarty_tpl->tpl_vars['value']->value['is_show']==1){?><span class="label label-success radius">已显示</span><?php }else{ ?><span class="label label-error radius">未显示</span><?php }?></td>
				<td><?php echo date('Y/m/d',$_smarty_tpl->tpl_vars['value']->value['time']);?>
</td>
				<td class="td-manage">
				<a title="编辑" href="<?php echo U('Banner/updatebanner');?>
?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> 
				<a title="删除" href="<?php echo U('Banner/delbanner');?>
?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a>
				</td>
			</tr>		
		<?php } ?>
		<?php }else{ ?>
			<tr class="text-c">
			<td colspan="6">暂无数据...</td>
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

</script>
	



</body>
</html
<?php }} ?>