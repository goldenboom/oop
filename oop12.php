<?php
header("Content-Type:text/html;charset=utf-8");
/**
 * 自动加载类
 * @author gewen <821263167@qq.com>
 */
function __autoload($name){
	
	include($name.".class.php");
	
}

$demo = new Person();
echo $demo->run();