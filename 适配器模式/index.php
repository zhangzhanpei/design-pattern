<?php
/*
*适配器模式
*起初，系统的错误处理只需直接将错误信息输出到控制台
*后来，需要将错误信息分成错误码和错误信息存放到数据库
*因此，我们使用适配器将错误信息转化成数据库需要的格式，再通过LogToDB来存入数据库
*/
require 'errors.php';
// require 'LogToConsole.php';
require 'errorAdapter.php';
require 'LogToDB.php';

// $err = new Errors('404:Not Found');
// $logtoconsole = new LogToConsole($err);
$err = new ErrorAdapter('404:Not Found');
$logtoconsole = new LogToDB($err);
$logtoconsole->log();
