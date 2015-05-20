<?php
/*
工厂模式：将复杂对象的new动作交由工厂类来做
好处：调用者无需知道复杂对象的实例化过程，只要调用factory就能获得实例
例子：假如要获得一个汽车，而Car类又依赖于Engine,Tire等类，如果不使用factory，那么调用者就必须亲自去实例化Engine,Tire等
*/
class Engine
{
}

class Tire
{
}

class Car
{
    public function __construct(Engine engine, Tire tire)
    {
    }
}

class Factory
{
    public function createCar()
    {
        $engine = new Engine;
        $tire = new Tire;
        $car = new Car($engine, $tire);
        return $car;
    }
}
