<?php
/*
单例模式（用途：比如读取单个配置文件）

self指向当前类
parent指向父类
this指向当前对象
*/

// 懒汉模式：调用getInstance时才返回实例
class Singler
{
	private static $instance;
	public static function getInstance()
	{
		if (self::$instance == null) {
			self::$instance = new Singler;//无实例时初始化一个
		}
		return self::$instance;	//直接返回实例
	}
}

// 饿汉模式：声明static $instance时就创建实例，该实例属于类，加载类的时候就已经有实例了，不用等到调用getInstance()
class Singler
{
	private static $singler = new Singler;
	public static function getInstance()
	{
		return self::$singler;	//直接返回实例
	}
}


$s1 = Singler::getInstance();
$s2 = Singler::getInstance();

if ($s1 === $s2) {
	echo '单例';
} else {
	echo '多实例';
}

echo "<br/>";

$s3 = new Singler;//直接new的是多个实例（可以将构造函数设置成私有防止直接new）
$s4 = new Singler;
if ($s3 === $s4) {
	echo '单例';
} else {
	echo '多实例';
}
