<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class AlitripPolicyDomfareCompareResult {

    /**
        是否成功
     **/
    private $success;

    /**
        调用错误码
     **/
    private $error_code;

    /**
        错误码详情
     **/
    private $error_msg;

    /**
        比价结果列表
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

    public function getData() : AlitripPolicyDomfareCompareCompareDomFareReponseDTO{
        return $this->data;
    }

    public function setData(AlitripPolicyDomfareCompareCompareDomFareReponseDTO $data){
        $this->data = $data;
    }


}

