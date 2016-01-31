<?php
/*
简单工厂模式：通过工厂类来获得对象
*/

//抽象产品类
abstract class Drink
{

}

//具体产品：牛奶
class Milk extends Drink
{

}

//具体产品：可乐
class Cola extends Drink
{

}

//工厂类
class DrinkFactory
{
    public function __construct($type)
    {
        switch ($type) {
            case 'milk':
                return new Milk();
                break;
            
            case 'cola':
                return new Cola();
                break;
        }
    }
}

//客户调用工厂类获得具体产品
$drink = new DrinkFactory('cola');