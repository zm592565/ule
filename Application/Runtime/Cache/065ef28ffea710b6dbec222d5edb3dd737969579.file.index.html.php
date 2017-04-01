<?php /* Smarty version Smarty-3.1.6, created on 2017-03-05 09:00:52
         compiled from "./Application/Admin/View\Login\index.html" */ ?>
<?php /*%%SmartyHeaderCode:3146758bb6344104dc0-87593647%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '065ef28ffea710b6dbec222d5edb3dd737969579' => 
    array (
      0 => './Application/Admin/View\\Login\\index.html',
      1 => 1474508660,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3146758bb6344104dc0-87593647',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'actionUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58bb6344250f3',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bb6344250f3')) {function content_58bb6344250f3($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>悠乐科技-后台管理系统</title>
		<link rel="stylesheet" href="<?php echo @COMMON_CSS_PATH;?>
global.css" />
		<link rel="stylesheet" href="<?php echo @ADMIN_CSS_PATH;?>
login.css" />
		<script type="text/javascript" src="<?php echo @COMMON_JS_PATH;?>
jquery-1.11.2.min.js" ></script>
		<script src="<?php echo @ADMIN_JS_PATH;?>
login.js" type="text/javascript"></script>
		<script type="text/javascript" src="<?php echo @ADMIN_LAYER_PATH;?>
layer.js"></script>
		

		 <!--[if !IE]><!-->
	    <script>
	        // 针对IE10
	        if (/*@cc_on!@*/false) {
	            document.documentElement.className += ' ie' + document.documentMode;
	        }
	        // 针对IE11及非IE浏览器，
	        // 因为IE11下document.documentMode为11，所以html标签上会加ie11样式类；
	        // 而非IE浏览器的document.documentMode为undefined，所以html标签上会加ieundefined样式类。
	        if (/*@cc_on!@*/true) {
	            document.documentElement.className += ' ie' + document.documentMode;
	        }
	    </script>
	    <!--<![endif]-->
		<!--[if lt IE 9]>
		<script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	    <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body class="login-body">
		<div id="login">
			<a href="#"></a>
			<form id="login_action" method="post" action="<?php echo $_smarty_tpl->tpl_vars['actionUrl']->value;?>
" name="login">
				<p id="input_user"><input type="text" name="user"></p>
				<p class="pass"><input type="password" name="pass"></p>
				<p class="code"><input class="code_box" type="text" name="code"><img style="cursor: pointer;" src="<?php echo @__CONTROLLER__;?>
/VerifyImg" onclick="javascript:this.src='<?php echo @__CONTROLLER__;?>
/VerifyImg?tm='+Math.random();" alt="" /></p>
				<p><input type="submit" value="" class="submit_btn"  name="send"></p>	
			</form>
			<span>版权所有<a href="#">申通国际物流</a>intl.sto.cn</span>
			
		</div>
		
	</body>
</html>
<?php }} ?>