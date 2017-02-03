<?php
header("Content-Type:text/html;charset=utf-8");
/**
 * opp1
 * 一、抽象一个类
 * 在类中定义成员属性和成员方法必须要在方法和属性前加一个关键词用已修饰这个属性和方法的应用方式
 * (1)成员属性
		修饰成员属性的关键字
		public private protected
 * (2)成员方法
		修饰成员方法的关键字
		public private protecded
 * (3)查看一个类是否存在class_exists(类名)
 * (4)查看一个类有多少属性 get_class_vars(类名)
 * (5)查看一个类有多少方法 get_class_methods(类名)
 * @author gewen <821263167@qq.com>
 */

class Person{
	
	public $name = "小张";
	public $age = 30;
	public $sex = "男";
	
	function run(){
		
		return "正在跑……";
		
	}
	
	function tiao(){
		
		return "正在跳……";
		
	}
	
}

//var_dump(class_exists(One)); //查看一个类是否存在
//$vars = get_class_methods(Person);
//var_dump($res);
//$methods = get_class_vars(Person);
//var_dump($methods);

/**
 * 二、实例化一个类
 * (1)实例化一个类需要用到关键词new
 * (2)在new关键词后面添加一个类名加小括号
 * (3)调用成员属性用-> 并且去除$符号
 * (4)调用成员方法用-> 后面跟方法名
 * @author gewen <821263167@qq.com>
 */

/* $man = new Person();
var_dump($man);        //打印查看下这个对象
echo $man -> name;
echo $man -> run(); */

/**
 * 三、对象的应用 
 * 创建一个不同的对象
 * @author gewen <821263167@qq.com>
 */

//这个代表两个不同的对象
/* $man1 = new Person();
$man2 = new Person();
var_dump($man1);
var_dump($man2); */

//这个代表两个相同的对象
/* $man1 = new Person();
$man2 = $man1;
var_dump($man1);
var_dump($man2); */


 
 



