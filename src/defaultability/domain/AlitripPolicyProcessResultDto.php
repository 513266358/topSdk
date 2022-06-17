<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class AlitripPolicyProcessResultDto {

    /**
        创建&删除结果参数
     **/
    private $data;

    /**
        执行结果
     **/
    private $success;

    /**
        错误码
     **/
    private $error_code;

    /**
        错误原因
     **/
    private $error_msg;


    public function getData() : AlitripPolicyProcessPolicyCreateResponseDto{
        return $this->data;
    }

    public function setData(AlitripPolicyProcessPolicyCreateResponseDto $data){
        $this->data = $data;
    }

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

