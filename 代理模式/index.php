<?php
/*
代理模式：客户端不直接访问原始对象，而是通过代理去访问
远程代理：原始对象可能在不同的位置上，如数据库读写分离。客户端不需要知道主从服务器的信息，只需把sql交给代理即可
保护代理：访问原始对象需要不同的权限，可以在代理中进行鉴权
*/
require_once "Proxy.php";
require_once "proxyObject.php";
require_once "realObject.php";

$po = new ProxyObject(new RealObject());
$po->getWeather();

/*
适配器模式：适配器是为原始对象提供一套不同的接口以适应业务，而代理是提供同一套接口
装饰器模式：装饰器的目的是添加功能，而代理是控制原始对象的访问
*/