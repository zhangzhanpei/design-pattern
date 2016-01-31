<?php
/*
抽象工厂模式：从多类产品中各生产一份组成一个完整产品
例如吃东西[饮料类/主食类 各生产一种，形成一份套餐]
早餐：牛奶+面包
午餐：可乐+米饭
*/
//抽象产品：饮料
abstract class Drink
{

}

//抽象产品：主食
abstract class Food
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

//具体产品：面包
class Bread extends Food
{

}

//具体产品：米饭
class Rice extends Food
{

}

//抽象工厂
abstract class Eables
{
    abstract public function getDrink();
    abstract public function getFood();
}

//具体工厂：生产早餐
class BreakfastFactory extends Eables
{
    public function getDrink()
    {
        return new Milk();
    }

    public function getFood()
    {
        return new Bread();
    }
}

//具体工厂：生产午餐
class LunchFactory extends Eables
{
    public function getDrink()
    {
        return new Cola();
    }

    public function getFood()
    {
        return new Rice();
    }
}

//客户端调用工厂生产食物
$eat = new BreakfastFactory();
$eat->getDrink();
$eat->getFood();