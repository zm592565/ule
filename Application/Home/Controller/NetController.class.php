<?php
namespace Home\Controller;
use Think\Controller;

/*网点查询类*/
class NetController extends CommonController {
    public function index(){
        


        $rs=M('net')->where('is_show=1')->order('sort asc')->select();

        $this->assign('rs',$rs);



        /*注入快捷导航*/
        $quick=A('News')->quick_menu(24);
        $this->assign('qucik',$quick);


    	$index = A('Index');
        $this->assign('header',$index->header());
        $this->display();
        $this->assign('footer',$index->footer());

    }



}