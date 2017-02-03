<?php
header("Content-Type:text/html;charset=utf-8");
/**
 * 魔术方法
 * 	(1)__clone方法
 *		调用clone关键词时自动调用__clone方法
 * @author gewen <821263167@qq.com>
 */

class Demo1{
	
	public $name = "小张";
	
	public function __clone(){
		
		$this->name = "小小";
		
		
	}
	
}
/* 
$demo1 = new Demo1();
$demo2 = clone $demo1;
var_dump($demo1);
var_dump($demo2); */

/**
 * 魔术方法
	(2)__toString()
		输出实例化对象自动调用这个方法
 * @author gewen <821263167@qq.com>
 */
 
class Demo2{
	
	public function __toString(){
		
		return "这是一个小对象";
		
	}
	
}
/* 
$demo2 = new Demo2();

echo $demo2; */


/**
 * 魔术方法
 *	(3)__call
 *		调用一个不存在的方法会自动调用这个方法
 * @author gewen <821263167@qq.com>
 */
 
class Demo3{
	
	public function run(){
		
		return "正在运动……";
		
	}
	
	public function __call($k,$v){
		
		var_dump($v);
		
		return $k."这个方法不存在";
		
	}
}
/* 
$demo3 = new Demo3();
echo $demo3->asdf("asdf"); */