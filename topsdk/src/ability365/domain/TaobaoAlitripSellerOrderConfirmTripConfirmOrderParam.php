<?php
namespace Topsdk\Topapi\Ability365\Domain;

class TaobaoAlitripSellerOrderConfirmTripConfirmOrderParam {

    /**
        确认项：官网投放卖家确认订单参数为orderConfirmHk
     **/
    private $confirm;

    /**
        对于此订单的描述。
     **/
    private $info;

    /**
        订单号
     **/
    private $order_id;


    public function getConfirm() : string{
        return $this->confirm;
    }

    public function setConfirm(string $confirm){
        $this->confirm = $confirm;
    }

    public function getInfo() : string{
        return $this->info;
    }

    public function setInfo(string $info){
        $this->info = $info;
    }

    public function getOrderId() : int{
        return $this->order_id;
    }

    public function setOrderId(int $orderId){
        $this->order_id = $orderId;
    }


}

