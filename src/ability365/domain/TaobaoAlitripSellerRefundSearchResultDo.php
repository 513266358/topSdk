<?php
namespace Topsdk\Topapi\Ability365\Domain;

class TaobaoAlitripSellerRefundSearchResultDo {

    /**
        错误码
     **/
    private $errorCode;

    /**
        错误信息
     **/
    private $errorMsg;

    /**
        ReturnTicketDo
     **/
    private $results;

    /**
        调用是否成功
     **/
    private $success;


    public function getErrorCode() : string{
        return $this->errorCode;
    }

    public function setErrorCode(string $errorCode){
        $this->errorCode = $errorCode;
    }

    public function getErrorMsg() : string{
        return $this->errorMsg;
    }

    public function setErrorMsg(string $errorMsg){
        $this->errorMsg = $errorMsg;
    }

    public function getResults() : array{
        return $this->results;
    }

    public function setResults(array $results){
        $this->results = $results;
    }

    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }


}

