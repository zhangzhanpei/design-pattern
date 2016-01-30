<?php
require_once 'decorator_interface.php';

class FontSize implements Decorator{
	private $fontsize;
	function __construct($fontsize='14px'){
		$this->fontsize=$fontsize;
	}
	function before(){
		echo "<div style='font-size:{$this->fontsize}'>";
	}

	function after(){
		echo "</div>";
	}
}