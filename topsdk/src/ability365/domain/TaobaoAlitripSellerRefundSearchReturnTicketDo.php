<?php
namespace Topsdk\Topapi\Ability365\Domain;

class TaobaoAlitripSellerRefundSearchReturnTicketDo {

    /**
        申请单ID
     **/
    private $apply_id;

    /**
        申请时间
     **/
    private $apply_time;

    /**
        订单号
     **/
    private $order_id;

    /**
        申请单状态（1初始 2接受 3确认 4失败 5买家处理 6卖家处理 7等待小二回填 8退款成功）
     **/
    private $status;


    public function getApplyId() : int{
        return $this->apply_id;
    }

    public function setApplyId(int $applyId){
        $this->apply_id = $applyId;
    }

    public function getApplyTime() : string{
        return $this->apply_time;
    }

    public function setApplyTime(string $applyTime){
        $this->apply_time = $applyTime;
    }

    public function getOrderId() : int{
        return $this->order_id;
    }

    public function setOrderId(int $orderId){
        $this->order_id = $orderId;
    }

    public function getStatus() : int{
        return $this->status;
    }

    public function setStatus(int $status){
        $this->status = $status;
    }


}

