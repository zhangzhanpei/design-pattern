<?php
/*
装饰器模式：在运行时修改某个方法或添加功能。原理：把原来要添加功能的类传入装饰器，在装饰器中对它进行修改
传统做法：继承该类然后重写该方法

例子：需要修改draw方法，能够设置文字的颜色和大小
一项功能封装为一个装饰器，比如color和fontsize两个装饰器。使用一个数组来存储需要的装饰器，然后在draw
方法中逐个调用装饰器的功能；需要更多功能就创建更多的装饰器即可
*/
require_once 'color.php';
require_once 'font_size.php';

class Canvas{
	private $decorators = array();

	function draw(){//这个就是要在运行时修改的方法
		self::beforeDecorator();
		echo '这里输出一句话！！！';
		self::afterDecorator();
	}

	function addDecorator(Decorator $decorator){//把需要的装饰器都存入数组
		$this->decorators[]=$decorator;
	}

	function beforeDecorator(){//调用装饰器功能
		foreach ($this->decorators as $d) {
			$d->before();
		}
	}

	function afterDecorator(){//调用装饰器功能
		$afterDecorator=array_reverse($this->decorators);//反转数组，让html标签能够一一闭合
		foreach ($afterDecorator as $d) {
			$d->after();
		}
	}
}

$c=new Canvas;
$c->addDecorator(new Color('green'));
$c->addDecorator(new FontSize('36px'));
$c->draw();