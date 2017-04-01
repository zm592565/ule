<?php

	//定义前台样式路径
	define('HOME_CSS_PATH', __ROOT__.'/Public/home/css/');
	define('HOME_JS_PATH', __ROOT__.'/Public/home/js/');
	define('HOME_IMG_PATH', __ROOT__.'/Public/home/img/');
	define('HOME_LIB_PATH', __ROOT__.'/Public/home/lib/');

	/*定义前台主题*/
	define('HOME_THEME','default');


return array(
	//'配置项'=>'配置值'
	'DEFAULT_THEME'=> HOME_THEME,
	'TMPL_ENGINE_TYPE'=>'Smarty',
	'TMPL_ENGINE_CONFIG'	=> array(
	  'caching' => false,/*禁止smarty缓存*/
	 ),

);