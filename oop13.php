<?php
header("Content-Type:text/html;charset=utf-8");
/**
 * 单例设计模式
 *	只能被实例化一次
 *	1)__construct是私有的
 *	2)创建一个静态方法
 *	3)
 * @author gewen <821263167@qq.com>
 */

class Demo1{
	
	private static $obj = null;
	
	private function __construct(){
		
		echo "连接数据库";
		
	}
	
	static function Connect(){
		
		if(is_null(self::$obj)){
			
			self::$obj = new self();
			
		}
		
		return self::$obj;
		
	}
	
	public function save(){
		
		echo "更新数据";
		
	}
}
$demo1 = Demo1::Connect();
$demo1 -> save();

//$demo2 = new Demo1();
