<?php /* Smarty version Smarty-3.1.6, created on 2017-03-05 09:01:29
         compiled from "./Application/Admin/View\Banner\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1272058bb63694c8cf5-29061847%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9a8a135b18135d1631de6b37c7956aa07690b59' => 
    array (
      0 => './Application/Admin/View\\Banner\\index.html',
      1 => 1474623048,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1272058bb63694c8cf5-29061847',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58bb636955992',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bb636955992')) {function content_58bb636955992($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("layout/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 广告管理 <span class="c-gray en">&gt;</span> 广告列表<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
</nav>

<div class="page-container" style="padding:0px">
	
	<table class="table">
		<tr>
			<td width="200"  class="va-t">
				<ul id="treeDemo" class="ztree">
				</ul>	

			</td>
			<td class="va-t" style="padding:0px;padding-right:8px">
			<IFRAME ID="testIframe" Name="testIframe" FRAMEBORDER=0 SCROLLING=AUTO width=100% SRC="<?php echo U('News/page_wel');?>
"></IFRAME>

			</td>
		</tr>
	</table>

	
</div>

<?php echo $_smarty_tpl->getSubTemplate ("layout/commonfooterjs.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<script type="text/javascript">		
		$(function(){
			
			var t = $("#treeDemo");
			t = $.fn.zTree.init(t, setting, zNodes);
			var a=$(window.parent.document.body).height();
			$("#testIframe").attr('height',a-180);
			
			demoIframe = $("#testIframe");
			var zTree = $.fn.zTree.getZTreeObj("tree");

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



		var setting = {
				view: {
					dblClickExpand: true,
					showLine: false,
					selectedMulti: false,
					showLine: true,
					expandSpeed : "fast",
				},
				data: {
					simpleData: {
						enable:true,
						idKey: "id",
						pIdKey: "pId",
						rootPId: ""
					}
				},
				callback: {


					beforeClick: function(treeId, treeNode) {
						var zTree = $.fn.zTree.getZTreeObj("tree");

						if (treeNode.isParent) {
							zTree.expandNode(treeNode);
							return false;
						} else {
							demoIframe.attr("src",zNodes.url);
							return true;
						}
					}
				}
			};

			var zNodes =<?php echo $_smarty_tpl->tpl_vars['rs']->value;?>
;
					
			var code;
					
			function showCode(str) {
				if (!code) code = $("#code");
				code.empty();
				code.append("<li>"+str+"</li>");
			}
	</script>
</body>
</html
<?php }} ?>