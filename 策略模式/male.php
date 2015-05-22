<?php
namespace Celue;

require_once 'action_interface.php';

class Male implements Action
{
	function buy()
    {
		echo "买了个树莓派2<br/>";
	}
    
	function showAD()
    {
		echo "展示给男生的广告<br/>";
	}
}
