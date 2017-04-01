<?php
	
	namespace Home\Controller;
	use Think\Controller;

	class CommonController extends Controller{

		protected function _initialize(){

		      	//从数据库ule_site读取后台配置名称,写入缓存
		      	$sys_all=S('sys_all');
		      	if (empty($sys_all)) {
		      		$m=M('site');
		      		$db=$m->where('id=1')->find();
                    $sys_all = $db;
		      		S('sys_all',$db);
		      	}
		      	define('WEB_SITE', $sys_all['site_name']);/*名称*/
		      	define('WEB_KEYWORD', $sys_all['site_keywords']);
		      	define('WEB_DESCRIPTION', $sys_all['site_description']);

		}

		


	}

	



?>