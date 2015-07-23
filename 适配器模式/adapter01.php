<?php
class Person
{
    public function speakChinese()
    {
    }
}

//现在需要一个能说英语的人来服务
//适配器模式，我们创建一个适配器来为目标服务，而不是去改动原先的代码
//适配器分“面向类的适配器”和“面向对象的适配器”，下面是“面向类的适配器”，因为适配器从Person类上扩展了服务

//面向类的适配器
class Adapter1 extends Person
{
    public function speakEnglish()
    {
    }
}

//面向对象适配器
class Adapter2
{
    private $ap;

    public function __construct(Person $p)
    {
        $this->ap = $p;
    }

    //这里没有继承Person类，所以新增了speakChinese方法，但使用Person的speakChinese来实现
    public function speakChinese()
    {
        $this->ap->speakChinese();
    }

    //新增一个方法
    public function speakEnglish()
    {
    }
}
