<?php
header("Content-Type:text/html;charset=utf-8");
/**
 * 对象串行化
 * @author gewen <821263167@qq.com>
 */
 
class Demo1{
	
	public $name = "小张";
	public $age = 30;
	public $sex = "男";
	
	public function run(){
		
		return "正在运行……";
		
	}
	
	public function __sleep(){
		
		$arr = array("name");
		return($arr);
		
	}
	
	public function __wakeup(){
		
		$this->age = 50;
		
	}
	
}

$demo1 = new Demo1();
//echo $demo1 -> run();
$con = serialize($demo1);

$demo2 = unserialize($con);
echo $demo2 -> run();
echo $demo2 -> age;