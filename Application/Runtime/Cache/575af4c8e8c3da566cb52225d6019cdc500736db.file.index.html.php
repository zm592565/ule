<?php /* Smarty version Smarty-3.1.6, created on 2017-03-05 09:01:37
         compiled from "./Application/Admin/View\AdminRole\index.html" */ ?>
<?php /*%%SmartyHeaderCode:2244658bb63719e98e4-21286632%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '575af4c8e8c3da566cb52225d6019cdc500736db' => 
    array (
      0 => './Application/Admin/View\\AdminRole\\index.html',
      1 => 1479014921,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2244658bb63719e98e4-21286632',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'value' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58bb6371a8df5',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bb6371a8df5')) {function content_58bb6371a8df5($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("layout/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 权限管理 <span class="c-gray en">&gt;</span> 权限列表<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
</nav>

<div class="page-container">

    <div class="cl pd-5 bk-gray" style="border-bottom:none"> <span class="l"><a href="<?php echo U('AdminRole/add');?>
" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加权限</a></span>  </div>
    <table class="table table-border table-bordered table-bg">
        <thead>
        <tr>
            <th scope="col" colspan="9">权限列表</th>
        </tr>
        <tr class="text-c">
            <th >权限名</th>
            <th >权限</th>
            <th >操作</th>
        </tr>
        </thead>
        <tbody>
        <?php if ($_smarty_tpl->tpl_vars['data']->value){?>
        <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
        <tr class="text-c">
            <td><?php echo $_smarty_tpl->tpl_vars['value']->value['_name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</td>
            <td class="td-manage">
                <a title="添加子权限" alt="添加子权限" href="<?php echo U('AdminRole/add');?>
?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" class="ml-5" style="text-decoration:none" ><i class="Hui-iconfont Hui-iconfont-add"></i></a>
                <a title="修改" alt="修改" href="<?php echo U('AdminRole/edit');?>
?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"  class="ml-5" style="text-decoration:none" ><i class="Hui-iconfont">&#xe6df;</i></a>
                <a title="删除" alt="删除"  href="javascript:drop_confirm('确定要删除吗？','<?php echo U('AdminRole/delete');?>
?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a>
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