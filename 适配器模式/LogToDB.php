<?php
/*
*新增需求，需要将错误信息中的错误码和错误信息存放到数据库，使用到getErrorNum()和getErrorInfo()方法
*但Errors类中没有这两个方法，我们不直接修改原先的代码，而是创建一个适配器errorAdapter来实现两个方法
*/
class LogToDB
{
    private $errObject;

    public function __construct(Errors $errObject)
    {
        $this->errObject = $errObject;
    }

    public function log()
    {
        //这里应该是存入数据库操作，但为了演示使用输出来代替
        echo $this->errObject->getErrorNum();
        echo "<br/>";
        echo $this->errObject->getErrorInfo();
    }
}
