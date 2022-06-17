<?php
namespace Topsdk\Topapi\Ability364\Domain;

class TaobaoAlitripFlightchangeGetResultDo {

    /**
        results
     **/
    private $results;

    /**
        errMsg
     **/
    private $err_msg;

    /**
        errCode
     **/
    private $err_code;

    /**
        success
     **/
    private $success;


    public function getResults() : array{
        return $this->results;
    }

    public function setResults(array $results){
        $this->results = $results;
    }

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

