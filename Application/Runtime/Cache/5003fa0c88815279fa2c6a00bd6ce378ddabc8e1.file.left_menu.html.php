<?php /* Smarty version Smarty-3.1.6, created on 2017-01-19 09:21:49
         compiled from "./Application/Admin/View\layout\left_menu.html" */ ?>
<?php /*%%SmartyHeaderCode:29135588014adada360-56235554%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5003fa0c88815279fa2c6a00bd6ce378ddabc8e1' => 
    array (
      0 => './Application/Admin/View\\layout\\left_menu.html',
      1 => 1483263882,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29135588014adada360-56235554',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
    'comment' => 0,
    'member' => 0,
    'admin_list' => 0,
    'sys' => 0,
    'wuliu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_588014adbaa43',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588014adbaa43')) {function content_588014adbaa43($_smarty_tpl) {?><aside class="Hui-aside">
	<input runat="server" id="divScrollValue" type="hidden" value="" />
	<div class="menu_dropdown bk_2">

		<?php if ($_smarty_tpl->tpl_vars['content']->value){?>
		<dl id="menu-article">
			<dt><i class="Hui-iconfont">&#xe616;</i> 内容管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a _href="<?php echo U('Class/index');?>
" data-title="分类管理" href="javascript:void(0)">分类管理</a></li>
					<li><a _href="<?php echo U('News/index');?>
" data-title="资讯管理" href="javascript:void(0)">资讯管理</a></li>
					<li><a _href="<?php echo U('Net/index');?>
" data-title="网点管理" href="javascript:void(0)">网点管理</a></li>
				</ul>
			</dd>
		</dl>
		<?php }?>
		<!--
		<dl id="menu-product">
			<dt><i class="Hui-iconfont">&#xe620;</i> 产品管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a _href="product-brand.html" data-title="品牌管理" href="javascript:void(0)">品牌管理</a></li>
					<li><a _href="product-category.html" data-title="分类管理" href="javascript:void(0)">分类管理</a></li>
					<li><a _href="product-list.html" data-title="产品管理" href="javascript:void(0)">产品管理</a></li>
				</ul>
			</dd>
		</dl> -->
		<?php if ($_smarty_tpl->tpl_vars['comment']->value){?>
		<dl id="menu-comments">
			<dt><i class="Hui-iconfont">&#xe622;</i> 评论留言管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<!-- <li><a _href="" data-title="评论列表" href="javascript:;">评论列表</a></li> -->
					<li><a _href="<?php echo U('FeedBack/index');?>
" data-title="留言管理" href="javascript:void(0)">留言管理</a></li>
				</ul>
			</dd>
		</dl>
        <dl id="menu-picture">
            <dt><i class="Hui-iconfont">&#xe613;</i> 广告管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a _href="<?php echo U('Banner/bannerlist');?>
" data-title="广告位添加" href="javascript:void(0)">广告位添加</a></li>
                    <li><a _href="<?php echo U('Banner/index');?>
" data-title="广告条管理" href="javascript:void(0)">广告条管理</a></li>
                </ul>
            </dd>
        </dl>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['member']->value){?>
		<dl id="menu-member">
			<dt><i class="Hui-iconfont">&#xe60d;</i> 会员管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a _href="<?php echo U('Member/index');?>
" data-title="会员列表" href="javascript:;">会员列表</a></li>
	<!-- 				<li><a _href="member-del.html" data-title="删除的会员" href="javascript:;">删除的会员</a></li>
					<li><a _href="member-level.html" data-title="等级管理" href="javascript:;">等级管理</a></li>
					<li><a _href="member-scoreoperation.html" data-title="积分管理" href="javascript:;">积分管理</a></li>
					<li><a _href="member-record-browse.html" data-title="浏览记录" href="javascript:void(0)">浏览记录</a></li>
					<li><a _href="member-record-download.html" data-title="下载记录" href="javascript:void(0)">下载记录</a></li>
					<li><a _href="member-record-share.html" data-title="分享记录" href="javascript:void(0)">分享记录</a></li> -->
				</ul>
			</dd>
		</dl>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['admin_list']->value){?>
		<dl id="menu-admin">
			<dt><i class="Hui-iconfont">&#xe62d;</i> 管理员管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
                    <li><a _href="<?php echo U('AdminRole/index');?>
" data-title="权限管理" href="javascript:void(0)">权限管理</a></li>
					<li><a _href="<?php echo U('AdminRole/group');?>
" data-title="角色管理" href="javascript:void(0)">角色管理</a></li>
					<li><a _href="<?php echo U('AdminUser/userlist');?>
" data-title="管理员列表" href="javascript:void(0)">管理员列表</a></li>
				</ul>
			</dd>
		</dl>
		<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['sys']->value){?>
		<dl id="menu-system">
			<dt><i class="Hui-iconfont">&#xe62e;</i> 系统管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a _href="<?php echo U('System/index');?>
" data-title="系统设置" href="javascript:void(0)">系统设置</a></li>
					<li><a _href="<?php echo U('From/index');?>
" data-title="来源管理" href="javascript:void(0)">来源管理</a></li>
				</ul>
			</dd>
		</dl>
        <?php }?>
		<?php if ($_smarty_tpl->tpl_vars['wuliu']->value){?>
		<dl id="menu-wuliu">
			<dt><i class="Hui-iconfont">&#xe62e;</i> 物流管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a _href="<?php echo U('Wuliu/packstate_update');?>
" data-title="物流包裹更新 " href="javascript:void(0)">运单物流更新</a></li>
					
				</ul>
			</dd>
		</dl>
		<?php }?>
		
		
	</div>
</aside>
<?php }} ?>