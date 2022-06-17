<?php
namespace Topsdk\Topapi\Ability3066\Domain;

class AlitripAgentFlightSellTicketingListT {

    /**
        国内国际标识:1:国内,2:国际
     **/
    private $domestic_intl;

    /**
        飞猪订单号
     **/
    private $order_id;

    /**
        支付时间
     **/
    private $pay_time;


    public function getDomesticIntl() : int{
        return $this->domestic_intl;
    }

    public function setDomesticIntl(int $domesticIntl){
        $this->domestic_intl = $domesticIntl;
    }

    public function getOrderId() : string{
        return $this->order_id;
    }

    public function setOrderId(string $orderId){
        $this->order_id = $orderId;
    }

    public function getPayTime() : string{
        return $this->pay_time;
    }

    public function setPayTime(string $payTime){
        $this->pay_time = $payTime;
    }


}

