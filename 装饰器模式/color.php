<?php
require_once 'decorator_interface.php';

class Color implements Decorator{
	private $color;
	function __construct($color='red'){
		$this->color=$color;
	}
	function before(){
		echo "<div style='color:{$this->color}'>";
	}

	function after(){
		echo "</div>";
	}
}