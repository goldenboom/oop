<?php
header("Content-Type:text/html;charset=utf-8");
/**
 * 一、面向对象
 * (1)$this的应用
 * @author gewen <821263167@qq.com>
 */
 

class Person{
	
	public $name = "小张";
	public $age = 30;
	public $sex = "男";

	/**
	 * (1)在run方法里调用成员属性 $name
	 * @author gewen <821263167@qq.com>
	 */
	function run(){
		
		//用$this调用内部成员属性
		//$this代表实例化的一个对象
		//var_dump($this);
		$name = $this->name;
		
		return $name."正在跑……";
		
	}
	
	/**
	 * (2)在tiao方法里调用run方法
	 * @author gewen <821263167@qq.com>
	 */
	function tiao(){
		
		//调用内部run方法$this->成员方法名
		$re = $this->run();
		return $re."正在跳……";
		
	}
	
}

//实例化类
$man = new Person();
echo $man -> run();     //调用run方法
echo $man -> tiao();	//调用tiao方法
