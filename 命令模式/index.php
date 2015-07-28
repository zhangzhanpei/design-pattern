<?php
/*
命令模式：将多个操作封装成一个命令，然后调用者调用命令
 */

//接收者
class Receiver
{
    public function doSomething()
    {
        echo '接收者执行命令';
    }
}

//命令
class Command
{
    private $receiver;

    public function __construct(Receiver $receiver)
    {
        $this->receiver = $receiver;
    }

    public function excute()
    {
        $this->receiver->doSomething();
    }
}

//调用者
class Invoker
{
    private $command;

    public function __construct(Command $command)
    {
        $this->command = $command;
    }

    public function action()
    {
        $this->command->excute();
    }
}

$receiver = new Receiver;
$command  = new Command($receiver);
//可以直接执行命令
$command->excute();

//或者通过调用者来执行
$invoker = new Invoker($command);
$invoker->action();
