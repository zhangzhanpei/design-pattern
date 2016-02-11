<?php
/*
状态模式：当对象的内部状态改变时允许改变其行为
好处：将特定的状态和该状态相关的行为封装在一起，将各种状态区分开来便于扩展
与责任链模式的区别：在设置下一个对象的时候，责任链模式是在客户端设置的，比较灵活。而状态模式是在状态中设置的，不能改变顺序。但是如果要多处设置时，责任链模式每次都要人工设置，容易出错
*/

//抽象状态
abstract class State
{
    abstract public function todo(Work $w);
}

//早上
class MorningState extends State
{
    public function todo(Work $w)
    {
        if ($w->time < 12) {
            echo "当前时间：$w->time 点，上午写代码！<br/>";
        } else {
            $w->setState(new AfterNoonState());
            $w->todo();
        }
    }
}

//下午
class AfterNoonState extends State
{
    public function todo(Work $w)
    {
        if ($w->time < 18) {
            echo "当前时间：$w->time 点，下午开会！<br/>";
        } else {
            $w->setState(new EveningState());
            $w->todo();
        }
    }
}

//晚上
class EveningState extends State
{
    public function todo(Work $w)
    {
        if ($w->time < 22) {
            echo "当前时间：$w->time 点，晚上打LOL！<br/>";
        } else {
            echo "当前时间：$w->time 点，睡觉！<br/>";
        }
    }
}

//工作类
class Work
{
    public $state;
    public $time;

    public function __construct()//初始化状态
    {
        $this->state = new MorningState();
    }

    public function setState(State $s)//改变状态
    {
        $this->state = $s;
    }

    public function todo()//调用新设置状态的todo
    {
        $this->state->todo($this);
    }
}

//客户端
$w = new Work();
$w->time = 9;
$w->todo();
$w->time = 14;
$w->todo();
$w->time = 19;
$w->todo();
$w->time = 23;
$w->todo();
