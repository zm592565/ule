<?php /* Smarty version Smarty-3.1.6, created on 2017-03-30 14:23:45
         compiled from "./Application/Admin/View\Public\upload.html" */ ?>
<?php /*%%SmartyHeaderCode:2831458dc98d4490264-73598650%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6332ccb57aae198a0a25182ba37e2b07eace28eb' => 
    array (
      0 => './Application/Admin/View\\Public\\upload.html',
      1 => 1490855019,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2831458dc98d4490264-73598650',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58dc98d4519c4',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58dc98d4519c4')) {function content_58dc98d4519c4($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
	<title>上传缩略图</title>
	<link rel="stylesheet" type="text/css" href="<?php echo @ADMIN_PATH;?>
static/h-ui/css/H-ui.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo @ADMIN_PATH;?>
static/h-ui/css/style.css" />
	<link href="<?php echo @ADMIN_PATH;?>
lib/Hui-iconfont/1.0.7/iconfont.css" rel="stylesheet" type="text/css" />
	<style type="text/css">
		@media(max-width:767px) {
			.upload-url {
				width: 300px;
				display: inline-block;
			}
		}
	</style>
</head>
<body id="uploader">

	<div class="cl radius bg_white pd-20 box-shadow">
		<form method="post" action="<?php echo U('Common/upload');?>
" id="upload_form" class="form form-horizontal" enctype="multipart/form-data">
			<div  class="cl text-c row upimg_input">
				<span class="btn-upload form-group">
				  <input class="input-text upload-url radius" type="text" name="uploadfile-1" id="uploadfile-1" readonly>  <a href="javascript:void();" style="height: auto" class="btn btn-primary radius">浏览文件</a>
				  <input type="file" multiple name="photo[]" class="input-file">
				</span>
			</div>

			<div class="cl text-c pd-15">
				<p>缩略图尺寸为<span class="c-warning">300*300px</span>,图片大小不得超过<span class="c-warning">512KB</span></p>		
			</div>

			<div class="cl text-c row">

				<span class="form-group">
					<a href="javascript:void();" class="btn btn-primary radius btn_upload_add"><i class="Hui-iconfont">&#xe600;</i>增加上传框</a>
					<input type="button" onclick="ajaxUpload();" name="submit" value="上传" class="btn btn-success radius">
				</span>	
			</div>
			
		</form>
	</div>
<?php echo $_smarty_tpl->getSubTemplate ("layout/commonfooterjs.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript" src="<?php echo @ADMIN_PATH;?>
js/upload.js"></script>
</body>
</html><?php }} ?>