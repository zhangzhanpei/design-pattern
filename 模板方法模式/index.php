<?php
/*
模板方法模式：定义一个操作中算法的骨架，将一些步骤延迟到子类
*/

abstract class TemplateMethod
{
    abstract public function methodOne();
    abstract public function methodTwo();

    //这里定义了一个操作的算法骨架，但其中的步骤有各种不同的实现
    public function callMethods()
    {
        $this->methodOne();
        $this->methodTwo();
    }
}

class TemplateMethodOne extends TemplateMethod
{
    public function methodOne()
    {
        echo "实现一步骤一<br/>";
    }

    public function methodTwo()
    {
        echo "实现一步骤二<br/>";
    }
}

class TemplateMethodTwo extends TemplateMethod
{
    public function methodOne()
    {
        echo "实现二步骤一<br/>";
    }

    public function methodTwo()
    {
        echo "实现二步骤二<br/>";
    }
}

//客户端
$tm = new TemplateMethodOne();
$tm->callMethods();//这里调用子类一的步骤实现