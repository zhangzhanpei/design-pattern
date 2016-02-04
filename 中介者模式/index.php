<?php
/*
中介者模式：使用一个中介者来封装对象之间的交互，使得各对象间无需直接调用，达到松散耦合
如下例：许多员工相互间无需全都认识，需要其他员工帮忙时直接与主管进行交互，再由主管与目标员工进行交互
*/
//抽象中介者
abstract class Mediator
{
    abstract public function send($msg, Employee $receiver);
}

//抽象员工类
abstract class Employee
{
    protected $mediator;
    public function __construct(Mediator $m)
    {
        $this->mediator = $m;
    }
}

//具体员工类：小A
class EmployeeA extends Employee
{
    public function get($msg)
    {
        echo "小A收到信息：" . $msg . "<br/>";
    }

    public function send($msg, $receiver)
    {
        $this->mediator->send($msg, $receiver);
    }
}

//具体员工类：小B
class EmployeeB extends Employee
{
    public function get($msg)
    {
        echo "小B收到信息：" . $msg . "<br/>";
    }

    public function send($msg, $receiver)
    {
        $this->mediator->send($msg, $receiver);
    }
}

//具体中介者：主管
class Director extends Mediator
{
    public function send($msg, Employee $receiver)
    {
        $receiver->get($msg);
    }
}

$d = new Director();
$ea = new EmployeeA($d);//生成员工时，员工都要认识主管
$eb = new EmployeeB($d);

$ea->send("吃了吗", $eb);//员工通过主管给其他员工发消息
$eb->send("吃过啦", $ea);