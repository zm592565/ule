<?php /* Smarty version Smarty-3.1.6, created on 2017-01-19 09:37:08
         compiled from "./Application/Admin/View\FeedBack\index.html" */ ?>
<?php /*%%SmartyHeaderCode:141465880184497afe9-03339067%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91c9f7c0307bb73f8aa1829406c1f7df924e9af9' => 
    array (
      0 => './Application/Admin/View\\FeedBack\\index.html',
      1 => 1483263591,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '141465880184497afe9-03339067',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'feedback_list' => 0,
    'value' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58801844a8caf',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58801844a8caf')) {function content_58801844a8caf($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("layout/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 评论留言 <span class="c-gray en">&gt;</span> 留言管理<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
</nav>
<div class="page-container">
	<form action="<?php echo U('Class/command');?>
" method="post">
	<table class="table table-border table-bordered table-bg table-hover">
		<thead>
			<tr>
				<th scope="col" colspan="11">留言列表</th>
			</tr>
			<tr class="text-c">
				<th>ID</th>
				<th>发表评论人</th>
				<th>评论内容</th>
				<th>点赞数</th>
				<th>状态</th>
				<th>添加时间</th>
				<th>操作</th>
			</tr>
		</thead>
		<tbody>
		<?php if ($_smarty_tpl->tpl_vars['feedback_list']->value){?>
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['feedback_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
			<tr class="text-c">
				<td><?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['value']->value['member_name'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['value']->value['message_info'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['value']->value['admire'];?>
</td>
				<td><?php if ($_smarty_tpl->tpl_vars['value']->value['state']){?><a href='<?php echo U("FeedBack/updateMessageState?id=".($_smarty_tpl->tpl_vars['value']->value['id'])."&state=".($_smarty_tpl->tpl_vars['value']->value['state']));?>
' class="label label-success radius">显示中</a><?php }else{ ?><a href='<?php echo U("FeedBack/updateMessageState?id=".($_smarty_tpl->tpl_vars['value']->value['id'])."&state=".($_smarty_tpl->tpl_vars['value']->value['state']));?>
' class="label label-error radius">隐藏中</a><?php }?></td>
				<td><?php echo date('Y-m-d H:i:s',$_smarty_tpl->tpl_vars['value']->value['add_time']);?>
</td>
				<td class="td-manage">
					<!--<a title="编辑" href="<?php echo U('FeedBack/update');?>
?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a>-->
					<a title="删除" href="javascript:;" onclick="delOne('<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
',$(this))" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a>
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


<script type="text/javascript" >
	function delOne(id,ob){
		layer.confirm('确定删除？', function(index){
			//do something
				var data = { 'id':id };
				$.ajax({
					url: "<?php echo U('Admin/FeedBack/delOne');?>
",
					type: "post",
					data: data,
					dataType: "json",
					success:function(result){
						if(result.state == 1){
							layer.msg(result.info, { icon: 1 });
							ob.parent().parent().remove();
						}else{
							layer.msg(result.info, { icon: 2 });
						}
					},
					error:function(re){
						alert(JSON.stringify(re));
					}
				});
			layer.close(index);
		});
	}
</script>
</body>
</html
<?php }} ?>