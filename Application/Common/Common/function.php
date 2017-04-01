<?php
	
	/*
		公共方法页面
		注意,这里的方法不可以和模块里的方法名目相同不然会报错
	*/
	
	
	//分类递归
	function recursive($arr,$pid=0,$level=0){
		
		$date=array();
		foreach ($arr as $value) {
			
			//我们把查询出来的那个数组用来遍历，然后如果uid=0，就把遍历的值装入我们新建的数组$date
			if ($value['pid']==$pid) {

				$value['level']=$level;
				$value['html']=str_repeat('--', $level);
				$value['nsbp']=str_repeat('&nbsp&nbsp',$level);
				
				//判断是否有子类
				$where['pid']=$value['id'];
				$rs=M('class')->where($where)->find();
				if($rs){
					$value['is_child']=true;
				}
				
				$date[]=$value;
				//把遍历的值装入我们新建的数组$date

				$date=array_merge($date,recursive($arr,$value['id'],$level+1));
				//合并数组 pid=0 切没有找到pid=id的

			}

		}

		return $date;
	}