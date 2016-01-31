<?php
class ProxyObject implements Proxy
{
	private $ro;
	public function __construct(RealObject $ro)
	{
		$this->ro = $ro;
	}

	public function getWeather()
	{
		//这里可以鉴权/获取主从数据库的连接等
		$this->ro->getWeather();
	}
}