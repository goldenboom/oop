<?php
header("Content-Type:text/html;charset=utf-8");
/**
 * 多态应用：就是方法的重写
 *	(1)定义一个接口多种形态
 *	(2)用一个接口定义一个规范
 *	(3)让其它的类来继承这个规范
 *	(4)最终再调用这个规范的方法
 * @author gewen <821263167@qq.com>
 */

interface Usb{
	
	function run();
	
}

class Computer{
	
	public function UseUsb($obj){
		
		return $obj -> run();
		
	}
	
}

//手机
class Phone implements Usb{
	
	public function run(){
		
		return "手机正在使用……";
		
	}
	
}

//键盘
class Jianpan implements Usb{
	
	public function run(){
		
		return "键盘正在使用……";
		
	}
	
}

//鼠标
class Shubiao implements Usb{
	
	public function run(){
		
		return "鼠标正在使用";
		
	}
	
}

$demo = new Computer();

echo $demo->UseUsb(new Phone());