<?php
namespace Topsdk\Topapi\Ability364\Domain;

class TaobaoAlitripFlightchangeAddResultDo {

    /**
        错误信息
     **/
    private $err_msg;

    /**
        错误码
     **/
    private $err_code;

    /**
        是否成功
     **/
    private $success;


    public function getErrMsg() : string{
        return $this->err_msg;
    }

    public function setErrMsg(string $errMsg){
        $this->err_msg = $errMsg;
    }

    public function getErrCode() : string{
        return $this->err_code;
    }

    public function setErrCode(string $errCode){
        $this->err_code = $errCode;
    }

    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }


}

