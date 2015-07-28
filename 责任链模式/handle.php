<?php
class Handler
{
    protected $nextHandler;
    protected $size;
    protected $response;

    public function handleRequest(Request $req)
    {
        if ($this->size != $req->size) {
            if ($this->nextHandler) {
                //交给下一个处理器
                $this->nextHandler->handleRequest($req);
            } else {
                echo '所有处理器都没法处理';
            }
        } else {
            echo $this->response;
        }
    }
}
