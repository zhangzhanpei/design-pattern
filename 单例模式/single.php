<?php
/*
单例模式：保证一个类仅有一个实例，并对外提供一个全局访问点[场景：读取单个配置文件/数据库单一连接]
多线程时仍然可能生成多个实例，要在getInstance()中判断实例部分加锁[php-fpm为阻塞单线程模型，无需考虑这个问题]
*/

class Singler
{
    private static $instance;

    //禁止外部用new来实例化对象
    private function __construct()
    {

    }

    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}

$s1 = Singler::getInstance();
$s2 = Singler::getInstance();

if ($s1 === $s2) {
    echo '单例';
} else {
    echo '多实例';
}
