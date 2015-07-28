<?php
/*
责任链模式：一个基础处理器和多个具体处理器，每个具体处理器负责各自的职责，多个处理器成链式，请求从第一个处理器开始，
由处理器判断是否能够处理，如果不能，则把请求交给下一个处理器
 */
require 'handle.php';
require 'handler1.php';
require 'handler2.php';
require 'handler3.php';
require 'request.php';

$h1 = new Handler1();
$h2 = new Handler2();
$h3 = new Handler3();

$h1->nextHandler = $h2;
$h2->nextHandler = $h3;

$req = new Request(2);

$h1->handleRequest($req);
