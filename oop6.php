<?php
header("Content-Type:text/html;charset=utf-8");
/**
 * 一、继承
 *	(1)防问类型控制
 *		public    在类中可以访问，也可以在子类中的应用，也可以实例化对象调用
 *		private   在类中可以访问，不能继承在子类中，也不能实例化对象调用
 *		protected 在类中可以访问，也可以继承在子类中，不能实例化对象调用
 *  (2)子类中重载父类的方法
 *		parent::__construct()
 * @author gewen <821263167@qq.com>
 */

class Person{
	
	public $name = "小张";
	protected $age = 30;
	private $sex = "男";
	
	public function __construct($name){
		
		$this->name = $name;
		
	}
	
	public function run(){
		
		return $this->name."正在跑……";
		
	}
	
	private function tiao(){
		
		return "正在跳……";
		
	}
	
	protected function chi(){
		
		return "正在吃……";
		
	}
	
}

class NanPerson extends Person{
	
	public function __construct($age){
	
		parent::__construct("小明");
		
		echo $this->age = $age;
		
	}
	
	public function getAge(){
		
		return $this->age;
		
	}
	
}

$man = new NanPerson(60);

echo $man -> run();
//echo $man->getAge("小明");