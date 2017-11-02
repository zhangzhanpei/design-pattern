<?php
class ObserverOne implements \SplObserver
{
    //观察者收到通知后的操作
    public function update(\SplSubject $subject)
    {
        echo 'Observer1 触发更新';
    }
}
