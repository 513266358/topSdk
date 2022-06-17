<?php
namespace Topsdk\Topapi\Ability365\Domain;

class TaobaoAlitripSellerRefundGetResultDo {

    /**
        系统自动生成
     **/
    private $errorCode;

    /**
        系统自动生成
     **/
    private $errorMsg;

    /**
        申请单详情
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

    public function getResults() : TaobaoAlitripSellerRefundGetReturnTicketDetail{
        return $this->results;
    }

    public function setResults(TaobaoAlitripSellerRefundGetReturnTicketDetail $results){
        $this->results = $results;
    }

    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }


}

