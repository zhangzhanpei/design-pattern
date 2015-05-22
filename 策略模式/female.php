<?php
namespace Celue;

require_once 'action_interface.php';

class Female implements Action
{
	function buy()
    {
		echo "买了个包包<br/>";
	}

	function showAD()
    {
		echo "展示给女士的漂亮衣服<br/>";
	}
}
