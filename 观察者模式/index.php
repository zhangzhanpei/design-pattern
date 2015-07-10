<?php
require_once 'observer_interface.php';
require_once 'base_event.php';
/*
观察者模式：一旦符合某种条件，通知所有观察者更新（将所有观察者加入数组，触发通知后遍历数组，
调用所有观察者的更新方法）
在trigger中，如果不使用观察者模式，那么需要将所有更新都写到trigger中，不利于维护
使用观察者模式后，如果还有添加更多的更新，则添加观察者即可。在主程序中可以很方便的开启或停用
某些更新
一个观察者代表一串操作，比如更新数据库，写入文件等
 */

class Event extends BaseEvent
{
    public function trigger()
    {
        echo "事件发生了，通知所有观察者更新!<br/>";
        $this->notify();
    }
}

class Observer1 implements Observer
{
    public function update()
    {
        echo "ob1 开始更新!!!<br/>";
    }
}

class Observer2 implements Observer
{
    public function update()
    {
        echo "ob2 开始更新!!!<br/>";
    }
}

$ob1 = new Observer1; //实例化两个观察者
$ob2 = new Observer2;
$e   = new Event;
$e->addObserver($ob1); //将观察者加入通知队列
$e->addObserver($ob2);
$e->trigger(); //触发事件，通知观察者更新
