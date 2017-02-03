<?php
header("Content-Type:text/html;charset=utf-8");
/**
 * 抽象类和接口
 * (1)抽象类定义
 * 		1)用关键词abstract定义抽象
 *		2)可以添加成员属性和成员方法
 *		3)定义抽象方法就是必须加abstract,没有方法体
 *		4)抽象类就相当于一个模板的样子
 *		5)不要写私有(private)关键词
 *		6)不能实例化对象
 * (2)接口定义
		1)接口用关键词interface
		2)必须是public权限
		3)不能实例化对象
		4)成员属性必须是const,调用常量成员属性用self
		5)可以调用多个接口
 * @author gewen <821263167@qq.com>
 */
abstract class Person{
	
	protected $name = "小三";
	
	abstract function run();
	
}

class Man extends Person{
	
	public function run(){
		
		return $this->name;
		
	}
	
}
/* 
$demo = new Man();
echo $demo->run(); */


interface One{
	
	const NAME = "gewen";
	
	public function tiao();
	
}

class Ceshi implements One{
	
	public function tiao(){
		
		return self::NAME."正在跳……";
		
	}
	
}
/* 
$demo = new Ceshi();
echo $demo -> tiao();
 */



