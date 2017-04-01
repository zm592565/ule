/*
 * 项目名称：悠乐登录弹出层
 * 文件介绍：首页JS效果文件
 * 开发人员：344822559@qq.com
 * 开发时间：2016-12-27
 * */

$(function(){
	
	$('#login').on('click', function(){
		
		/*login登录html代码组织*/
		var LoginHtml='<div id="login">';
			LoginHtml+='<div class="login_box">';
			LoginHtml+='<p>';
			LoginHtml+='<span>帐号</span>';
			LoginHtml+='<input type="text" placeholder="请填写登录帐号"/>';
			LoginHtml+='</p>';
			LoginHtml+='<p>';
			LoginHtml+='<span>密码</span>';
			LoginHtml+='<input type="text" placeholder="请输入登录密码"/>';
			LoginHtml+='</p>';
			LoginHtml+='</div>';
			LoginHtml+='<div class="remmber">';
			LoginHtml+='<input type="checkbox"/>';
			LoginHtml+='<span>记住帐号</span>';
			LoginHtml+='<a href="">忘记密码</a>';
			LoginHtml+='</div>';
			LoginHtml+='<div class="btn_box">';
			LoginHtml+='<button class="btn btn-warning radius mr-15">登录</button>';
			LoginHtml+='<a href="#" class="btn btn-default radius">注册</a>';
			LoginHtml+='</div>';
			LoginHtml+='</div>';

	 	layer.open({
		  type: 1,
		  title: '用户登录',
		  closeBtn: 1,
		  area: ['500px', 'auto'],
		  shadeClose: true,
		  content: LoginHtml
		});
	});
	
})