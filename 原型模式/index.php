<?php
/*
原型模式：用于创建大对象。工厂模式每次new对象时，都会进行初始化操作，消耗很大。
而原型模式则是先创建好一个对象，以后则直接内存中clone一个成为新对象，跳过初始化操作以减少消耗
 */
class Canvas
{
    //这里渲染画布背景（假设消耗很大）
    public function init()
    {
    }

    public function draw()
    {
        echo '画画';
    }
}

/*
假如我们需要多张画布来画不同的东西，常规做法就是new多个Canvas，调用多次的init。
但init消耗很大
因此我们可以创建一个原型对象，后面的多个画布只需clone一下原型对象即可，因此只需init一次
 */

$c = new Canvas; //这里$c就是原型对象
$c->init(); //初始化一次

$c1 = clone $c; //$c已经初始化过了，$c1就不用再初始化了
$c1->draw();

$c2 = clone $c;
$c2->draw();
