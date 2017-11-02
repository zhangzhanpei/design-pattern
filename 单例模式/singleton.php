<?php
/*
 * 单例模式: 保证一个类仅有一个实例, 并对外提供一个全局访问点
 */
class Singleton
{
    private static $instance;

    //禁止外部用new来实例化对象
    private function __construct()
    {
    }

    public static function getInstance()
    {
        //这里如果是多线程的情况下可能会有多个线程读到self::$instance == null, 导致创建多个实例, 可以加锁同步
        if (self::$instance == null) {
            //这里用self在继承时会出问题, 假如有B类继承了Singleton类, B类在获取实例时会获取到Singleton的实例
            //可以将Singleton类声明为final, 或使用static后期静态绑定
            self::$instance = new self();
        }
        return self::$instance;
    }
}

$s1 = Singleton::getInstance();
$s2 = Singleton::getInstance();

if ($s1 === $s2) {
    echo '单例';
} else {
    echo '多实例';
}
