<?php
class Handler2 extends Handler
{
    public $nextHandler;
    protected $size     = 2;
    protected $response = '处理器2捕获处理';
}
