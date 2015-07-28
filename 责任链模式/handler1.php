<?php
class Handler1 extends Handler
{
    public $nextHandler;
    protected $size     = 1;
    protected $response = '处理器1捕获处理';
}
