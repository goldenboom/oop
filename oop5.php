<?php
header("Content-Type:text/html;charset=utf-8");
/**
 * 面向对象封装
 * @author gewen <821263167@qq.com>
 */
 
class Person{
	
	private $name = "小张";
	private $age = 30;
	private $sex = "男";
	
	public function run(){
		
		return $this->name."正在跑……";
		
	}
	
	public function tiao(){

		return "正在跳……";
		
	}
	
	private function chi(){
		
		return "正在吃……";
		
	}
	
	public function getName($name){
		
		//添加一些条件限制
		if($name == "小张"){
			
			return $this->name;
			
		}else{
			
			return $this->name = $name;
			
		}
		
	}
	
	//魔术方法__set
	public function __set($k,$v){
		
		$this->$k = $v;
		
		return;
		
	}
	
	public function __get($k){
		
		return $this->$k;
		
	}
	
	//判断一个属性是否存在
	public function __isset($k){
		
		return isset($this->$k);
		
	}
	
	public function __unset($k){
		
		unset($this->$k);
		
	}
	
}

$man = new Person();         //实例化一个对象
//echo $man->name;             //会报错
//echo $man->chi();            //会报错
//echo $man -> getName("小李");      //调用私有成员属性
//$man -> name = "小张";
//echo $man->run();
//echo $man -> age;
//var_dump(isset($man->asdf));
unset($man->name);
echo $man -> run();


