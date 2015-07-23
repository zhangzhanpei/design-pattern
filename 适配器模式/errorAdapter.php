<?php
/**
* LogToDB使用到getErrorNum()、getErrorInfo()两个方法，但Errors里没有，因此我们创建了以下的适配器供LogToDB使用
*/
class ErrorAdapter extends Errors
{
    private $errorNum, $errorInfo;

    public function __construct($errorStr)
    {
        parent::__construct($errorStr);
        list($this->errorNum, $this->errorInfo) = explode(':', $errorStr);
    }

    public function getErrorNum()
    {
        return $this->errorNum;
    }

    public function getErrorInfo()
    {
        return $this->errorInfo;
    }
}
