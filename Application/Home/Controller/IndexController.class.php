<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends CommonController {
    public function index(){
    	echo $header=self::header();
    	echo $index_data=self::index_data();
    	echo $footer=self::footer();

    }

    public function header(){
	   
    	/*把栏目写入缓存*/
        $menu=S('header_menu');
        if (empty($menu)) {
            $where['pid']=0;
            $where['is_menu']=1;
            $rs=M('class')->where($where)->order('sort asc')->select();
            $index_menu=array();
            foreach ($rs as $key => $value) {
                /*自定义首页导航链接*/
                switch ($value['id']) {
                    case '19':
                        $index_menu[$key]['url']=U('News/index');/*新闻资讯*/
                        break;
                    case '24':
                        $index_menu[$key]['url']=U('Api/index');/*业务查询*/
                        break;
                    case '4':
                        $index_menu[$key]['url']=U('News/pageshow?id=5');/*关于我们*/
                        break;
                    case '9':
                        $index_menu[$key]['url']=U('News/pageshow?id=10');/*国际服务*/
                        break;
                     case '15':
                        $index_menu[$key]['url']=U('News/pageshow?id=17');/*客户服务*/
                        break;
                   
                }

                $index_menu[$key]['id']=$value['id'];
                $index_menu[$key]['class_name']=$value['class_name'];
                
            }
            $menu = $index_menu;
            S('header_menu',$index_menu);
        }
        $this->assign('header_menu',$menu);
        $this->assign('home',U('Index/index'));
    	return $this->display('public/header');
    }



    public function index_data(){ 	

        // // 1. 初始化
        //  $ch = curl_init();
        //  // 2. 设置选项，包括URL
        //  curl_setopt($ch,CURLOPT_URL,"http://www.devdo.net");
        //  curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        //  curl_setopt($ch,CURLOPT_HEADER,0);
        //  // 3. 执行并获取HTML文档内容
        //  $output = curl_exec($ch);
        //  if($output === FALSE ){
        //  echo "CURL Error:".curl_error($ch);
        //  }
        //  // 4. 释放curl句柄
        //  curl_close($ch);


        $this->display();

    }


    public function footer(){


        $where['pid']=0;
        $rs=M('class')->where($where)->limit(5)->select();
        $data_arr=array();
        foreach ($rs as $key => $value) {
            if ($value['pid']==0) {
                $data_arr[$key]['top']=$value;
               
                $mast=array();
                $list=M('class')->where('pid='.$value['id'])->limit(5)->select();
                foreach ($list as $keys => $values) {
                    
                    if ($values['class_type']==1) {

                        switch ($values['id']) {
                            case 29:
                                $mast[$keys]['url']=U('Api/index');/*包裹追踪*/
                                break;
                            case 28:
                                $mast[$keys]['url']=U('Net/index');/*网点查询*/
                                break;
                            default:
                                $mast[$keys]['url']=U('News/pageshow?id='.$values['id']); 
                                break;
                        }


                        
                       
                    }else{
                        $mast[$keys]['url']=U('News/index?id='.$values['id']);
                    }



                    $mast[$keys]['class_name']=$values['class_name'];

                }

                $data_arr[$key]['list']=$mast;
            }
        }


        



        $this->assign('footer_menu',$data_arr);

    	return $this->display('public/footer');
    }




   





}