<?php
namespace Topsdk\Topapi\Ability365\Domain;

class TaobaoAlitripSellerRefundRefusereturnResultDo {

    /**
        系统自动生成
     **/
    private $errorCode;

    /**
        系统自动生成
     **/
    private $errorMsg;

    /**
        处理结果
     **/
    private $result;

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

    public function getResult() : bool{
        return $this->result;
    }

    public function setResult(bool $result){
        $this->result = $result;
    }

    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }


}

