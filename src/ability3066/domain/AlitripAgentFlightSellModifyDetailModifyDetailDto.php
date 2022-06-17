<?php
namespace Topsdk\Topapi\Ability3066\Domain;

class AlitripAgentFlightSellModifyDetailModifyDetailDto {

    /**
        申请单号
     **/
    private $apply_id;

    /**
        是否自愿:0:非自愿，1:自愿
     **/
    private $voluntary;

    /**
        申请原因
     **/
    private $reason;

    /**
        国际国内标识:1:国内,2:国际
     **/
    private $domestic_intl;

    /**
        关联飞猪订单号
     **/
    private $order_id;

    /**
        支付时间
     **/
    private $pay_time;

    /**
        改签数据
     **/
    private $change_list;

    /**
        sla
     **/
    private $sla;

    /**
        币种:CNY:人民币, USD:美元, HKD:港元
     **/
    private $currency;

    /**
        申请时间
     **/
    private $apply_time;

    /**
        改签单状态: 1:待回填, 2:待用户支付, 3:待出票, 4:已完成, 5:已拒绝
     **/
    private $status;

    /**
        佣金;单位:分
     **/
    private $commission;

    /**
        拒绝原因
     **/
    private $refuse_reason;

    /**
        订单标签:REASSURING_TICKET:安心票
     **/
    private $tags;


    public function getApplyId() : string{
        return $this->apply_id;
    }

    public function setApplyId(string $applyId){
        $this->apply_id = $applyId;
    }

    public function getVoluntary() : int{
        return $this->voluntary;
    }

    public function setVoluntary(int $voluntary){
        $this->voluntary = $voluntary;
    }

    public function getReason() : string{
        return $this->reason;
    }

    public function setReason(string $reason){
        $this->reason = $reason;
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

    public function getPayTime() : string{
        return $this->pay_time;
    }

    public function setPayTime(string $payTime){
        $this->pay_time = $payTime;
    }

    public function getChangeList() : array{
        return $this->change_list;
    }

    public function setChangeList(array $changeList){
        $this->change_list = $changeList;
    }

    public function getSla() : string{
        return $this->sla;
    }

    public function setSla(string $sla){
        $this->sla = $sla;
    }

    public function getCurrency() : string{
        return $this->currency;
    }

    public function setCurrency(string $currency){
        $this->currency = $currency;
    }

    public function getApplyTime() : string{
        return $this->apply_time;
    }

    public function setApplyTime(string $applyTime){
        $this->apply_time = $applyTime;
    }

    public function getStatus() : int{
        return $this->status;
    }

    public function setStatus(int $status){
        $this->status = $status;
    }

    public function getCommission() : int{
        return $this->commission;
    }

    public function setCommission(int $commission){
        $this->commission = $commission;
    }

    public function getRefuseReason() : string{
        return $this->refuse_reason;
    }

    public function setRefuseReason(string $refuseReason){
        $this->refuse_reason = $refuseReason;
    }

    public function getTags() : array{
        return $this->tags;
    }

    public function setTags(array $tags){
        $this->tags = $tags;
    }


}

