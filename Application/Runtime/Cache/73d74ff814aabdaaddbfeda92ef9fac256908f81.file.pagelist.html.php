<?php /* Smarty version Smarty-3.1.6, created on 2017-03-30 14:51:18
         compiled from "./Application/Admin/View\News\pagelist.html" */ ?>
<?php /*%%SmartyHeaderCode:1754358dcaae69c3220-76250753%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73d74ff814aabdaaddbfeda92ef9fac256908f81' => 
    array (
      0 => './Application/Admin/View\\News\\pagelist.html',
      1 => 1476264145,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1754358dcaae69c3220-76250753',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'rs' => 0,
    'news' => 0,
    'value' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58dcaae6ba19c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58dcaae6ba19c')) {function content_58dcaae6ba19c($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'F:\\wamp\\www\\ule\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\modifier.truncate.php';
?><?php echo $_smarty_tpl->getSubTemplate ("layout/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<body>
<div class="page-container" style="padding:0px">
		<div class="cl pd-5 bk-gray" style="border:none">
		<a href="javascript:;" onclick="article_add('添加资讯','<?php echo U('News/add');?>
?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
')" target="_blank" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加资讯</a></span> 
	
		<span class="r">
			<form action="" method="post">
				<span class="l" style="padding-right: 10px;">
				<span class="select-box" style="width: 150px;">
					<select name="class_type" class="select" id="select2">
						<option value="0" <?php if ($_smarty_tpl->tpl_vars['rs']->value['class_type']==0){?>selected="selected"<?php }?>>列表栏目</option>
						<option value="1" <?php if ($_smarty_tpl->tpl_vars['rs']->value['class_type']==1){?>selected="selected"<?php }?>>单页栏目</option>
					</select>
				</span>
				</span>
				 <span class="r">
				 	<button name="" id="" class="btn btn-success" type="submit"><i class="Hui-iconfont">&#xe665;</i> 检索</button>
				 </span>
			</form>
		</span> 
	</div>
	<form method="post" name="myform">
	<table class="table table-border table-bordered table-bg table-hover">
		<input type="hidden" name="pid" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
		<thead>
			<tr>
				<th scope="col" colspan="11">资讯列表</th>
			</tr>
			<tr class="text-c">
				<th width="25"><input type="checkbox" id="check_all"></th>
				<th width="40">ID</th>
				<th width="150">标题</th>
				<th width="90">所属类</th>
				<th width="100">来源</th>
				<th>摘要</th>
				<th width="50">排序</th>
				<th width="80">是否允许评论</th>
				<th width="130">添加时间</th>
				<th>阅读量</th>
				<th>操作</th>
			</tr>
		</thead>
		<tbody>
		<?php if ($_smarty_tpl->tpl_vars['news']->value){?>
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['news']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
			<tr class="text-c">
				<td><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" name="id[]"></td>
				<td><?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
</td>
				<td title="<?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['value']->value['title'],20,"...",true);?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['value']->value['class_name'];?>
</td>
				<td><?php if ($_smarty_tpl->tpl_vars['value']->value['copyfrom']){?><?php echo $_smarty_tpl->tpl_vars['value']->value['copyfrom'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
<?php }?></td>
				<td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['value']->value['digest'],20,"...",true);?>
</td>
				<td><input type="text" name="sort[<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['sort'];?>
" class="input-text"></td>
				<td class="td-status"><?php if ($_smarty_tpl->tpl_vars['value']->value['is_comment']==1){?><span class="label label-success radius">允许</span><?php }else{ ?><span class="label label-error radius">禁止</span><?php }?></td>
				<td><?php echo date('Y-m-d H:i:s',$_smarty_tpl->tpl_vars['value']->value['time']);?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['value']->value['count'];?>
</td>
				<td class="td-manage">
				<a title="编辑" href="<?php echo U('News/update');?>
?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> 
				<a title="删除" href="<?php echo U('News/delone');?>
?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a>
				</td>
			</tr>		
		<?php } ?>
			<tr class="active">
				<td colspan="11">
					<input type="submit" onclick="paixu()" value="排序" class="btn">
					<input type="submit" onclick="del()" value="批量删除" class="btn">
				</td>
			</tr>
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


<script type="text/javascript">		
		$(function(){
			
			var a=$(window.parent.document.body).height();
			$("#testIframe").attr('height',a-140);
			
			demoIframe = $("#testIframe");

		});
		//checkbox的方法
		function check_box(id){
			var checkid="#"+id;  
			if($(checkid).is(":checked")){
				$('input[name="is_comment"]').val('1');
		    }else{  
		    	$('input[name="is_comment"]').val('0');
		    }  

		}

		function article_add(title,url){
			var index = layer.open({
				type: 2,
				title: title,
				content: url
			});
			layer.full(index);
		}

			function picture_add(title,url){
				var index = layer.open({
					type: 2,
					title: title,
					content: url
				});
				layer.full(index);
			}

			function product_add(title,url){
				var index = layer.open({
					type: 2,
					title: title,
					content: url
				});
				layer.full(index);
			}

			function member_add(title,url,w,h){
				layer_show(title,url,w,h);
			}


			function paixu() {
				document.myform.action="<?php echo U('News/sort');?>
";  
			}
			function del(){
				document.myform.action="<?php echo U('News/del');?>
";  
			}

	</script>
</body>
</html
<?php }} ?>