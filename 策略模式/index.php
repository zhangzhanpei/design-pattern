<?php
/*
namespace必须写在第一行
策略模式：根据不同情况作出不同响应（不同于if、else写死编码，策略模式代替if、else，扩展性好）
本例中，定义了两种策略分别是female和male，female和male实现了接口action_interface
如果需要增加策略，只需写个类实现action_interface
策略模式其实就是多态
*/
require_once 'male.php';
require_once 'female.php';

class Home
{
	private $cl;

	/*首页方法/home/index
	  假如直接在index里if、else判断男女，如果其它页面也需要区分男女，个个方法都写死if、else的话，
	  假设现在多了一种情况，则需到处改if、else。
	  使用策略模式，只需在外部判断情况，然后传入Home，则仅仅需要修改外部的判断，而不影响各个页
	  面的代码。
	*/
	public function __construct(\Celue\Action $celue)
	{
		$this->cl=$celue;
	}

	public function index()
	{
		$this->cl->buy();
		$this->cl->showAD();
	}
}

//这里判断使用那种策略
$h=new Home(new \Celue\Female());
$h->index();
