<?php
abstract class BaseEvent
{

    private $observers = array();

    //添加观察者
    public function addObserver(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    //通知所有观察者更新
    public function notify()
    {
        foreach ($this->observers as $ob) {
            $ob->update();
        }
    }
}
