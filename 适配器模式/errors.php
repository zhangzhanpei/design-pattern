<?php
/**
* 基础错误类，返回错误信息
*/
class Errors
{
    private $errorStr;

    public function __construct($errorStr)
    {
        $this->errorStr = $errorStr;
    }

    public function getErrors()
    {
        return $this->errorStr;
    }
}
