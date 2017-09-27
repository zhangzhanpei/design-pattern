<?php
/**
 * 适配器的具体实现
 */
require_once './Adapter.php';
require_once './Weibo.php';

class WeiboAdapter extends Weibo implements Adapter
{
    //我们适配的login方法调用第三方的登录
    public function login(string $username, string $password) : void
    {
        $this->weiboLogin($username, $password);
    }
}
