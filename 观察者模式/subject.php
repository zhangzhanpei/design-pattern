<?php
/*
 * 事件主体类, 用于注册、移除、通知观察者
 */
class Subject implements \SplSubject
{
    private $observers;

    public function __construct()
    {
        $this->observers = new \SplObjectStorage();
    }

    //注册观察者
    public function attach(\SplObserver $ob)
    {
        $this->observers->attach($ob);
    }

    //移除观察者
    public function detach(\SplObserver $ob)
    {
        $this->observers->detach($ob);
    }

    //通知观察者
    public function notify()
    {
        foreach ($this->observers as $ob) {
            $ob->update($this);
        }
    }
}
