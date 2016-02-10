<?php
/*
备忘录模式：捕获一个对象的内部状态，并在该对象外保存这个状态。这样就可以把该对象恢复到保存的状态
*/
//发起人
class Originator
{
    public $state;
    public function createMemento()
    {
        return new Memento($this->state);
    }

    public function recoverMemento(Memento $memento)
    {
        $this->state = $memento->getState();
    }

    public function show()
    {
        echo $this->state;
    }
}

//备忘录类
class Memento
{
    private $state;
    public function __construct($s)
    {
        $this->state = $s;
    }

    public function getState()
    {
        return $this->state;
    }
}

//存储备忘录的类
class Saver
{
    public $memento;
    public function set(Memento $memento)
    {
        $this->memento = $memento;
    }

    public function get()
    {
        return $this->memento;
    }
}

//客户端
$o = new Originator();
$o->state = 'On';//设置目标对象的初始状态
$o->show();

$s = new Saver();
$s->memento = $o->createMemento();//把当前目标对象存入Saver

$o->state = 'Off';//目标对象状态改变
$o->show();

$o->recoverMemento($s->memento);//把Saver中的状态还原到目标对象中
$o->show();
