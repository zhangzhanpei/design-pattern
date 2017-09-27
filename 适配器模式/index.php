<?php
/**
 * 适配器模式: 多个第三方同一功能的不同实现, 我们使用适配器模式统一它们, 方便接入我们的系统中
 */

require_once './Adapter.php';
require_once './WeiboAdapter.php';
require_once './WechatAdapter.php';

class Login
{
    private $adapter;

    public function __construct(Adapter $adapter)
    {
        $this->adapter = $adapter;
    }

    public function login(string $username, string $password) : void
    {
        $this->adapter->login($username, $password);
    }
}

//这里决定使用哪个适配器来登录
$lg = new Login(new WechatAdapter());
$lg->login('zhangsan', '123456');
