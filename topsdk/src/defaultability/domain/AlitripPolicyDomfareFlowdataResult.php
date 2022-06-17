<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class AlitripPolicyDomfareFlowdataResult {

    /**
        是否成功
     **/
    private $success;

    /**
        返回错误码
     **/
    private $error_code;

    /**
        返回的错误信息
     **/
    private $error_msg;

    /**
        返回的信息
     **/
    private $data;


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

    public function getData() : AlitripPolicyDomfareFlowdataCompareFlowDataReponseDTO{
        return $this->data;
    }

    public function setData(AlitripPolicyDomfareFlowdataCompareFlowDataReponseDTO $data){
        $this->data = $data;
    }


}

