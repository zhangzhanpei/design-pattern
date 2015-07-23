<?php
/*
*最初的错误处理类，直接将错误信息打印出来
*/
class LogToConsole
{
    private $errObject;

    public function __construct(Errors $errObject)
    {
        $this->errObject = $errObject;
    }

    public function log()
    {
        echo $this->errObject->getErrors();
    }
}
