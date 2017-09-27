<?php
/**
 * 微信登录
 */
class Wechat
{
    public function wechatLogin(array $config) : void
    {
        echo "username = {$config['username']}, password = {$config['password']}";
    }
}
