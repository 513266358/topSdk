<?php
namespace Topsdk\Topapi\Ability3066\Domain;

class AlitripAgentFlightSellTicketingDetailResultDto {

    /**
        出参对象
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
        错误信息
     **/
    private $error_msg;


    public function getData() : AlitripAgentFlightSellTicketingDetailTicketingDetailDTO{
        return $this->data;
    }

    public function setData(AlitripAgentFlightSellTicketingDetailTicketingDetailDTO $data){
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

