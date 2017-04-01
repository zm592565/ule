<?php /* Smarty version Smarty-3.1.6, created on 2017-01-19 09:21:49
         compiled from "./Application/Admin/View\layout\footer.html" */ ?>
<?php /*%%SmartyHeaderCode:20678588014adde9ec4-09600698%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '342cc3f138f0cb2a7b5cc3dd8158687b774cb36f' => 
    array (
      0 => './Application/Admin/View\\layout\\footer.html',
      1 => 1478569357,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20678588014adde9ec4-09600698',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_588014ade380f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588014ade380f')) {function content_588014ade380f($_smarty_tpl) {?><footer class="footer mt-20">
	<div class="container">
		
		<?php echo @ADMIN_INFO;?>


	</div>
</footer>
<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="<?php echo @ADMIN_PATH;?>
lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="<?php echo @ADMIN_PATH;?>
lib/layer/2.1/layer.js"></script> 
<script type="text/javascript" src="<?php echo @ADMIN_PATH;?>
lib/icheck/jquery.icheck.min.js"></script> 
<script type="text/javascript" src="<?php echo @ADMIN_PATH;?>
static/h-ui/js/H-ui.js"></script> 
<script type="text/javascript" src="<?php echo @ADMIN_PATH;?>
static/h-ui/js/H-ui.admin.js"></script> 
<!--/_footer /作为公共模版分离出去-->
</body>
</html><?php }} ?>