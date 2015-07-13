<?php
/*
多态：用父类或接口作为参数，调用父类或接口的方法时，会去调用实际传入的对象的相应方法
也就是父类的引用指向子类对象
 */
class Move
{
    public function run()
    {
    }
}

class Car extends Move
{
    public function run()
    {
        print('小汽车行驶中...');
    }
}

class Horse extends Move
{
    public function run()
    {
        print('骏马快速奔跑中...');
    }
}

class Humen
{
    public function run()
    {
        print('人在走路');
    }
}

//这里传入会移动的对象（php传参时只有对象和array能进行类型约束）
function main(Move $object)
{
    $object->run(); //调用run方法
}

main(new Car); //传入Car对象，则调用到Car的run()方法
main(new Humen); //传入Humen对象，但Humen没有继承自Move，会报错
