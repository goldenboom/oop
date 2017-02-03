<?php
header("Content-Type:text/html;charset=utf-8");
/**
 * 一、类中的成员属性应用
 * (1)调用输出成员属性
 * (2)调用输出修改成员属性
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
	
	/**
	 * 正在吃方法
	 * @author gewen <821263167@qq.com>
	 */
	function chi($name){
		
		return $name."正在吃……";
		
	}
	
}

/* $man = new Person();              //实例化类
echo $man -> name;                //调用输出成员属性
echo "<br/>";
echo $man -> name = "小李";       //调用输出修改成员属性
echo "<br/>";
echo $man -> tiao(); */

/**
 * 二、调用类中的成员方法
 * (1)调用成员方法并且添加参数
 * @author gewen <821263167@qq.com>
 */

$man = new Person();              //实例化一个类
echo $man -> chi("小李子");	      //对象调用方法，并且添加一些参数


