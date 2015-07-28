<?php
class Handler3 extends Handler
{
    public $nextHandler;
    protected $size     = 3;
    protected $response = '处理器3捕获处理';
}
