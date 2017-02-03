<?php
header("Content-Type:text/html;charset=utf-8");

/**
 * 类中魔术方法
 * (1)构造函数应用
 * 		初始化对象时自动调用这个初始化方法
 * (2)析构函数应用
 *		不用这个对象时自动调用这个析构方法,主要是为了关闭文件和释放结果集
 * @author gewen <821263167@qq.com>
 */

class Person{
	
	public $name = "小张";
	public $age = 30;
	public $sex = "男";

	//创建一个构造函数
	public function __construct(){
		
		echo "构造方法";
		
	}
	
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
	
	//创建一个析构函数
	public function __destruct(){
		
		echo "销毁这个对象时调用的方法";
		
	}
	
}

$man = new Person();         //实例化这个对象

