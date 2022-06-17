<?php
namespace Topsdk\Topapi\Ability3066\Domain;

class AlitripAgentFlightSellModifyListT {

    /**
        申请单号
     **/
    private $apply_id;

    /**
        国内国际标识(1:国内,2:国际)
     **/
    private $domestic_intl;

    /**
        飞猪订单号
     **/
    private $order_id;

    /**
        申请时间
     **/
    private $apply_time;


    public function getApplyId() : string{
        return $this->apply_id;
    }

    public function setApplyId(string $applyId){
        $this->apply_id = $applyId;
    }

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

    public function getApplyTime() : string{
        return $this->apply_time;
    }

    public function setApplyTime(string $applyTime){
        $this->apply_time = $applyTime;
    }


}

