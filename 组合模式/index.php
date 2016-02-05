<?php
/*
组合模式：将对象组合成树型结构以表示“部分-->整体”的关系。组合模式使得客户端使用单体对象和组合对象是一致的
总公司有人力资源部和财务部，分公司也有。客户看起来总公司和分公司的功能是一致的
HR 和 Finance 是叶子节点，无需实现add 和 remove
          总公司
        /    /   \
       HR  Fina 分公司
                /  /  \
               HR Fina ..
*/

//抽象个体：可以是部门，也可以是分公司
abstract class Component
{
    protected $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    abstract public function add(Component $c);//添加分公司 和 职能部门
    abstract public function remove(Component $c);//删除
    abstract public function show();//输出
}

//整体：公司
class Composite extends Component
{
    private $children = [];

    public function add(Component $c)
    {
        $this->children[] = $c;
    }

    public function remove(Component $c)
    {
        unset($this->children[array_search($c, $this->children, true)]);
    }

    //先输出自己的公司名称和部门，再递归输出分公司的名称和部门
    public function show()
    {
        echo $this->name . "<br/>";
        foreach ($this->children as $c) {
            $c->show();
        }
    }
}

//人力资源部
class HR extends Component
{
    public function add(Component $c)
    {

    }

    public function remove(Component $c)
    {

    }

    public function show()
    {
        echo "--" . $this->name . "<br/>";
    }
}

//财务部
class Finance extends Component
{
    public function add(Component $c)
    {

    }

    public function remove(Component $c)
    {

    }

    public function show()
    {
        echo "--" . $this->name . "<br/>";
    }
}

//客户端
$root = new Composite('总公司');
$hr = new HR('总公司人力资源部');
$root->add($hr);
$root->add(new Finance('总公司财务部'));
// $root->remove($hr);

$sub = new Composite('分公司');
$sub->add(new HR('分公司人力资源部'));
$sub->add(new Finance('分公司财务部'));

$root->add($sub);
$root->show();
