<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class AlitripPolicyRuleUploadResultDto {

    /**
        任务id
     **/
    private $data;

    /**
        任务失败错误码
     **/
    private $error_code;

    /**
        任务失败错误原因
     **/
    private $error_msg;

    /**
        是否成功
     **/
    private $success;


    public function getData() : int{
        return $this->data;
    }

    public function setData(int $data){
        $this->data = $data;
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

    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }


}

