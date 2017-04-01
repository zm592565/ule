<?php /* Smarty version Smarty-3.1.6, created on 2017-03-05 09:01:32
         compiled from "./Application/Admin/View\Banner\bannerdatelist.html" */ ?>
<?php /*%%SmartyHeaderCode:3076158bb636cc630d6-16681689%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '689245db7a8068e90a41fe9d8a7c4671992075c4' => 
    array (
      0 => './Application/Admin/View\\Banner\\bannerdatelist.html',
      1 => 1476265182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3076158bb636cc630d6-16681689',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'addBtn' => 0,
    'count' => 0,
    'bclass' => 0,
    'rs' => 0,
    'value' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58bb636cd9ee3',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bb636cd9ee3')) {function content_58bb636cd9ee3($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("layout/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 广告条管理 <span class="c-gray en">&gt;</span> 内容列表<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
</nav>

<div class="page-container">

	<form name="myform" method="post">
	<input type="hidden" name="pid" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
	<div class="cl pd-5 bk-gray" style="border-bottom:none"><a href="<?php echo $_smarty_tpl->tpl_vars['addBtn']->value;?>
" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加广告</a></span> <span class="r">共有数据：<strong><?php echo $_smarty_tpl->tpl_vars['count']->value;?>
</strong> 条</span> </div>
	<table class="table table-border table-bordered table-bg table-hover">
		<thead>
			<tr>
				<th scope="col" colspan="11"><?php echo $_smarty_tpl->tpl_vars['bclass']->value;?>
列表</th>
			</tr>
			<tr class="text-c">
				<th width="40">ID</th>
				<th>广告名</th>
				<th>广告信息</th>
				<th>排序</th>
				<th>是否导航显示</th>
				<th>添加时间</th>
				<th width="100">操作</th>
			</tr>
		</thead>
		<tbody>
		<?php if ($_smarty_tpl->tpl_vars['rs']->value){?>
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
			<tr class="text-c">
				<td><?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['value']->value['banner_name'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['value']->value['banner_info'];?>
</td>
				<td><input type="text" class="input-text text-c" style="width: 100px" name="sort[<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['sort'];?>
"></td>
				<td class="td-status"><?php if ($_smarty_tpl->tpl_vars['value']->value['is_show']==1){?><span class="label label-success radius">已显示</span><?php }else{ ?><span class="label label-error radius">未显示</span><?php }?></td>
				<td><?php echo date('Y/m/d',$_smarty_tpl->tpl_vars['value']->value['time']);?>
</td>
				<td class="td-manage">
				<!-- <a title="编辑" href="#" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a>  -->
				<a title="删除" href="<?php echo $_smarty_tpl->tpl_vars['value']->value['del'];?>
" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a>
				</td>
			</tr>		
		<?php } ?>

		<tr class="active">
			<td colspan="7">
				<input type="submit" onclick="paixu()" value="排序" class="btn">
			</td>
		</tr>
		<?php }else{ ?>
			<tr class="text-c">
			<td colspan="7">暂无数据...</td>
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
	document.myform.action="<?php echo U('Banner/sort');?>
";  
}

</script>
	



</body>
</html
<?php }} ?>