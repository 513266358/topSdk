<?php
namespace Topsdk\Topapi\Ability3066\Domain;

class AlitripAgentFlightSellRefundApproveResultDto {

    /**
        执行结果
     **/
    private $success;

    /**
        错误码:000:系统异常, 001:请求参数不合法, 002:权限不足, 003:操作失败, 004:流量管控
     **/
    private $error_code;

    /**
        错误信息
     **/
    private $error_msg;


    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }

    public function getErrorCode() : string{
        return $this->error_code;
    }

    public function setErrorCode(string $errorCode){
        $this->error_code = $errorCode;
    }

    public function getErrorMsg() : string{
        return $this->error_msg;
    }

    public function setErrorMsg(string $errorMsg){
        $this->error_msg = $errorMsg;
    }


}

