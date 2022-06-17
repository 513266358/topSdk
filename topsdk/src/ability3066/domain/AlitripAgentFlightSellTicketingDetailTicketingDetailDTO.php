<?php
namespace Topsdk\Topapi\Ability3066\Domain;

class AlitripAgentFlightSellTicketingDetailTicketingDetailDTO {

    /**
        店铺id
     **/
    private $agent_id;

    /**
        国内国际标识
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

    /**
        出票时间
     **/
    private $issue_time;

    /**
        出票对象
     **/
    private $issue_list;

    /**
        sla
     **/
    private $sla;

    /**
        佣金
     **/
    private $commission;

    /**
        币种
     **/
    private $currency;

    /**
        订单标签
     **/
    private $tags;

    /**
        订单状态
     **/
    private $status;

    /**
        退改签规则
     **/
    private $refund_modify_rule;


    public function getAgentId() : int{
        return $this->agent_id;
    }

    public function setAgentId(int $agentId){
        $this->agent_id = $agentId;
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

    public function getIssueTime() : string{
        return $this->issue_time;
    }

    public function setIssueTime(string $issueTime){
        $this->issue_time = $issueTime;
    }

    public function getIssueList() : array{
        return $this->issue_list;
    }

    public function setIssueList(array $issueList){
        $this->issue_list = $issueList;
    }

    public function getSla() : string{
        return $this->sla;
    }

    public function setSla(string $sla){
        $this->sla = $sla;
    }

    public function getCommission() : int{
        return $this->commission;
    }

    public function setCommission(int $commission){
        $this->commission = $commission;
    }

    public function getCurrency() : string{
        return $this->currency;
    }

    public function setCurrency(string $currency){
        $this->currency = $currency;
    }

    public function getTags() : array{
        return $this->tags;
    }

    public function setTags(array $tags){
        $this->tags = $tags;
    }

    public function getStatus() : int{
        return $this->status;
    }

    public function setStatus(int $status){
        $this->status = $status;
    }

    public function getRefundModifyRule() : string{
        return $this->refund_modify_rule;
    }

    public function setRefundModifyRule(string $refundModifyRule){
        $this->refund_modify_rule = $refundModifyRule;
    }


}

