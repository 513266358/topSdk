<?php
namespace Topsdk\Topapi\Ability365\Domain;

class TaobaoAlitripSellerOrderConfirmTripOrderConfirmResultVo {

    /**
        错误码
     **/
    private $error_code;

    /**
        错误描述
     **/
    private $error_msg;

    /**
        订单是否成功
     **/
    private $is_order_success;

    /**
        返回结果，此接口无值
     **/
    private $results;


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

    public function getIsOrderSuccess() : bool{
        return $this->is_order_success;
    }

    public function setIsOrderSuccess(bool $isOrderSuccess){
        $this->is_order_success = $isOrderSuccess;
    }

    public function getResults() : array{
        return $this->results;
    }

    public function setResults(array $results){
        $this->results = $results;
    }


}

