<?php
header("Content-Type:text/html;charset=utf-8");
/**
 * 关键词
 *	(1)final
		1)定义final类是不能被继承的
		2)定义final成员方法是不能被重载
 * @author gewen <821263167@qq.com>
 */

final class Demo1{}

class Demo2{
	
	final public function run(){}
	
}
 
/**
 * 关键词
 *	(2)static
		1)可以修饰成员属性和成员方法
		2)不用实例化对象直接调用成员属性和成员方法
		3)调用时用self::成员属性、self::成员方法
 * @author gewen <821263167@qq.com>
 */

class Demo3{
	
	static $name = "小张";
	
	static function run(){
		
		return self::$name;
		
	}
	
}
 
Demo3::run();
 
/**
 * 关键词
 *	(3)const
 *		1)表示常量成员属性
 *		2)调用常量成员属性用self
 *		3)外部调用可以是类名::常量成员属性
 * @author gewen <821263167@qq.com>
 */

class Demo4{
	
	const NAME = "gewen";
	
}
 
//$demo4 = new Demo4();

echo Demo4::NAME;

/**
 * 关键词
 *	(4)instanceof
		一个实例化对象是不是一个类的对象
 * @author gewen <821263167@qq.com>
 */
 
/**
 * 关键词
 *	(5)clone
 *		克隆一个对象
 * @author gewen <821263167@qq.com>
 */
 
class Demo5{
	
	public function run(){
		
		return "正在运行……";
		
	}
	
}

$demo5 = new Demo5();

$demo55 = clone $demo5;
var_dump($demo5);
var_dump($demo55);