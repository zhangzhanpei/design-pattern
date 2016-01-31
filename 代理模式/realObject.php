<?php
class RealObject implements Proxy
{
	public function getWeather()
	{
		echo '原始对象获取天气信息';
	}
}