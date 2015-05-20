<?php
/*
抽象工厂模式：一次创建多个相互之间有联系的产品
例如吃东西
早餐：牛奶+面包+苹果
午餐：可乐+米饭+梨
*/
abstract class Eables
{
    abstract public function getDrink();
    abstract public function getFood();
}

class BreakfastFactory extends Eables
{
    public function getDrink()
    {
        return new Drink1;
    }

    public function getFood()
    {
        return new Food1;
    }
}

class LunchFactory extends Eables
{
    public function getDrink()
    {
        return new Drink2;
    }

    public function getFood()
    {
        return new Food2;
    }
}

abstract class Drink
{
}
abstract class Food
{
}

class Drink1 extends Drink
{
    public function __construct()
    {
        echo '牛奶';
    }
}
class Drink2 extends Drink
{
    public function __construct()
    {
        echo '可乐';
    }
}
class Food1 extends Food
{
    public function __construct()
    {
        echo '面包';
    }
}
class Food2 extends Food
{
    public function __construct()
    {
        echo '米饭';
    }
}

$eat = new LunchFactory;
$eat->getDrink();
$eat->getFood();