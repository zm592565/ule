<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $html_title;?></title>
<link href="css/install.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
<link href="css/perfect-scrollbar.min.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/perfect-scrollbar.min.js"></script>
<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
</head>

<body>
<?php defined('InShopNC') or exit('Access Invalid!');?>
<?php echo $html_header;?>
<div class="main">
  <div class="text-box" id="text-box">
    <div class="license">
      <h1>悠乐cms【内容管理系统】电商系统安装协议</h1>
      
     <div style="text-align: center;" ><img src="./images/logo.jpg"></div>
      <p>悠乐cms系统最终用户授权协议、商业授权与技术服务的详细内容，均由悠乐独家提供。悠乐拥有在不事先通知的情况下，修改授权协议和服务价目表的权利，修改后的协议或价目表对自改变之日起的新授权用户生效。</p>
      <p>一旦您开始安装悠乐cms电商系统，即被视为完全理解并接受本协议的各项条款，在享有上述条款授予的权利的同时，受到相关的约束和限制。协议许可范围以外的行为，将直接违反本授权协议并构成侵权，我们有权随时终止授权，责令停止损害，并保留追究相关责任的权利。</p>
      <p></p>
      <p align="right">悠乐CMS网站管理系统 QQ:344822559</p>
    </div>
  </div>
  <div class="btn-box"><a href="index.php?step=1" class="btn btn-primary">同意协议进入安装</a><a href="javascript:window.close()" class="btn">不同意</a></div>
</div>
<?php ECHO $html_footer;?>
<script type="text/javascript">
$(document).ready(function(){
	//自定义滚定条
	$('#text-box').perfectScrollbar();
});
</script>
</body>
</html>
