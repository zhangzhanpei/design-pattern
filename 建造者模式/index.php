<?php
/*
建造者模式：将复杂对象的构建和表示分离，使得同样的构建过程能创建不同的表示。例如：
葱+姜+鱼+蒸 = 清蒸鱼
糖+醋+鱼+煎 = 糖醋鱼
每个步骤加起来就是构建过程
*/

//产品类
class Product
{
    private $parts = [];
    public function addPart($part)
    {
        $this->parts[] = $part;
    }

    public function show()
    {
        print_r($this->parts);
    }
}

//建造者抽象类
abstract class Builder
{
    abstract public function buildPartA();
    abstract public function buildPartB();
    abstract public function buildResult();
}

//具体建造类：产品一
class FirstProductBuilder extends Builder
{
    private $p;

    public function __construct(Product $p)
    {
        $this->p = $p;
    }

    public function buildPartA()
    {
        $this->p->addPart('部件A');
    }

    public function buildPartB()
    {
        $this->p->addPart('部件B');
    }

    public function buildResult()
    {
        $this->p->show();
    }
}

//具体建造类：产品二
class SecondProductBuilder extends Builder
{
    private $p;

    public function __construct(Product $p)
    {
        $this->p = $p;
    }

    public function buildPartA()
    {
        $this->p->addPart('零件A');
    }

    public function buildPartB()
    {
        $this->p->addPart('零件B');
    }

    public function buildResult()
    {
        $this->p->show();
    }
}

//指挥者
class Director
{
    public function __construct(Builder $builder)
    {
        $builder->buildPartA();
        $builder->buildPartB();
    }
}

//客户端调用
$builderOne = new SecondProductBuilder(new Product());//这里用户指定了建造类型，不必知道建造过程和细节
$director = new Director($builderOne);
$builderOne->buildResult();