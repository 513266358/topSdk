<?php
namespace Requiem\Topsdk\Ability3066\Domain;

class AlitripAgentFlightSellRefundListPageDto {

    /**
        123
     **/
    private $total;

    /**
        数据集
     **/
    private $data_list;

    /**
        成功失败标识
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


    public function getTotal() : int{
        return $this->total;
    }

    public function setTotal(int $total){
        $this->total = $total;
    }

    public function getDataList() : array{
        return $this->data_list;
    }

    public function setDataList(array $dataList){
        $this->data_list = $dataList;
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

