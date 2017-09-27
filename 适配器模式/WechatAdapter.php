<?php
require_once './Adapter.php';
require_once './Wechat.php';

class WechatAdapter extends Wechat implements Adapter
{
    public function login(string $username, string $password) : void
    {
        $this->wechatLogin(['username' => $username, 'password' => $password]);
    }
}
