<?php /* Smarty version Smarty-3.1.6, created on 2017-01-19 09:20:18
         compiled from "./Application/Admin/View\Public\404.html" */ ?>
<?php /*%%SmartyHeaderCode:1406058801452e76035-45192635%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb12c88aacdb446ecfe93c53a67a0e33c95a4ee0' => 
    array (
      0 => './Application/Admin/View\\Public\\404.html',
      1 => 1478569357,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1406058801452e76035-45192635',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
    'waitSecond' => 0,
    'jumpUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_588014530f266',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588014530f266')) {function content_588014530f266($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="ThemeBucket">
  <link rel="shortcut icon" href="#" type="image/png">
  <title><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</title>
  <link href="<?php echo @COMMON_CSS_PATH;?>
style.css" rel="stylesheet">
  <link href="<?php echo @COMMON_CSS_PATH;?>
style-responsive.css" rel="stylesheet">
</head>

<body class="error-page" style="text-align: center;">

<section>
    <div class="container ">

        <section class="error-wrapper text-center">
            <h1><img alt="" src="<?php echo @COMMON_IMG_PATH;?>
404-error.png"></h1>
            <h2><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h2>
            <h3>We Couldn’t Find This Page</h3>
           <!--  <p>错误：<<?php ?>?php echo $e['file'] ?<?php ?>><br/>
            	出错行数：<<?php ?>?php echo $e['line'] ?<?php ?>><br/>
            		<<?php ?>?php echo $e['message'] ?<?php ?>>异常信息<br/>
            			<<?php ?>?php echo $e['trace'] ?<?php ?>>异常的详细Trace信息
            </p> -->
            <p style="font-family: 'microsoft yahei';"><b id="wait"><?php echo $_smarty_tpl->tpl_vars['waitSecond']->value;?>
</b>秒后跳转</p>         
            <a id="href" class="back-btn" href="<?php echo $_smarty_tpl->tpl_vars['jumpUrl']->value;?>
">立刻跳转</a>
        </section>

    </div>
</section>

<!-- Placed js at the end of the document so the pages load faster -->
<script src="<?php echo @COMMON_JS_PATH;?>
jquery-1.10.2.min.js"></script>
<script src="<?php echo @COMMON_JS_PATH;?>
jquery-migrate-1.2.1.min.js"></script>
<script src="<?php echo @COMMON_JS_PATH;?>
bootstrap.min.js"></script>
<script src="<?php echo @COMMON_JS_PATH;?>
modernizr.min.js"></script>
<!--common scripts for all pages-->
<!--<script src="js/scripts.js"></script>-->
<script type="text/javascript">
(function(){
var wait = document.getElementById('wait'),href = document.getElementById('href').href;
var interval = setInterval(function(){
  var time = --wait.innerHTML;
  if(time <= 0) {
    location.href = href;
    clearInterval(interval);
  };
}, 1000);
})();
</script>
</body>
</html><?php }} ?>