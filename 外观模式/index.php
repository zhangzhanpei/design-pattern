<?php
/*
外观模式：为子系统的一组接口提供一个一致的界面，使得子系统更易使用
*/

class SubSystemOne
{
    public function methodOne()
    {
        echo 'methodOne';
    }
}

class SubSystemTwo
{
    public function methodTwo()
    {
        echo 'methodTwo';
    }
}

class SubSystemThree
{
    public function methodThree()
    {
        echo 'methodThree';
    }
}

class SubSystemFour
{
    public function methodFour()
    {
        echo 'methodFour';
    }
}

//外观类
class Facade
{
    private $subSystemOne;
    private $subSystemTwo;
    private $subSystemThree;
    private $subSystemFour;

    public function __construct()
    {
        $this->subSystemOne = new SubSystemOne();
        $this->subSystemTwo = new SubSystemTwo();
        $this->subSystemThree = new SubSystemThree();
        $this->subSystemFour = new SubSystemFour();
    }

    //外观类需要知道所有子系统的方法和属性，并进行组合，以备客户端调用
    public function methodA()
    {
        $this->subSystemOne->methodOne();
        $this->subSystemTwo->methodTwo();
    }

    public function methodB()
    {
        $this->subSystemThree->methodThree();
        $this->subSystemFour->methodFour();
    }
}

//客户端
$facade = new Facade();
// $facade->methodA();
$facade->methodB();