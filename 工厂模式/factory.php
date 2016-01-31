<?php
/*
工厂方法模式：定义一个用户创建对象的接口，让子类决定实例化哪个类[Factory接口，让MilkFactory实例化Milk类，ColaFactory实例化Cola类]
每添加一个产品，都会新增一个该产品的类和该产品的工厂
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

//工厂接口
interface Factory
{
    public function createDrink();
}

//具体工厂：生产牛奶
class MilkFactory implements Factory
{
    public function createDrink()
    {
        return new Milk();
    }
}

//具体工厂：生产可乐
class ColaFactory implements Factory
{
    public function createDrink()
    {
        return new Cola();
    }
}

//用户端调用某个工厂来生产饮料
$drink = new MilkFactory();
$drink->createDrink();