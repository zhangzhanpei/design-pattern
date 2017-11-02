<?php
/**
 * 观察者模式: 将需要订阅事件的观察者都注册到事件主体中, 当事件发生时, 通知所有已订阅该事件的观察者
 */
require_once "./subject.php";
require_once "./observer-one.php";
require_once "./observer-two.php";

$subject = new Subject(); //事件主体
$subject->attach(new ObserverOne()); //观察者订阅事件
$subject->attach(new ObserverTwo()); //观察者订阅事件
$subject->notify(); //事件发生, 通知所有该事件观察者更新
