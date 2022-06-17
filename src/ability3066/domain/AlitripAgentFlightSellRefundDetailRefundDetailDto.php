<?php
namespace Topsdk\Topapi\Ability3066\Domain;

class AlitripAgentFlightSellRefundDetailRefundDetailDto {

    /**
        申请单号
     **/
    private $apply_id;

    /**
        自愿标识:0.非自愿，1.自愿
     **/
    private $voluntary;

    /**
        申请原因
     **/
    private $reason;

    /**
        店铺id
     **/
    private $agent_id;

    /**
        国际国内标识(1国内,2国际)
     **/
    private $domestic_intl;

    /**
        关联飞猪订单号
     **/
    private $order_id;

    /**
        退票数据集
     **/
    private $refund_list;

    /**
        sla
     **/
    private $sla;

    /**
        交易币种:CNY:人民币, USD:美元, HKD:港元
     **/
    private $currency;

    /**
        申请时间
     **/
    private $apply_time;

    /**
        退票状态:待回填:1, 待退款:2,	 退款中:3,	 已完结:4,	 已拒绝:5	
     **/
    private $status;

    /**
        拒绝原因
     **/
    private $refuse_reason;

    /**
        申请原因类型:0:其他, 1:航变,2:病退 ,3:疫情
     **/
    private $apply_reason_type;

    /**
        补退单标识(1是补退单)
     **/
    private $supplement;

    /**
        紧急标识:EPIDEMIC:疫情审核通过标, REASSURING_TICKET:安心票, FLIGHTCHANGE:航变审核通过标, CALCULATED:预计算, FLIGHTCHANGECANCEL:航班取消, FLIGHTCHANGEDELAY:航班延误, ILLWITHCERTIFICATE:病退, REFUSETOTAKE:航司拒载, PREVIOUSLATTERINTERFERENCE:前后段影响, OVERBOOKING:超售, AIRLINEAUTHORIZE:航司授权, CHANGENAME:改名, REPEATBUYTICKETS:重复购票, BUYWRONGTICKETS:错购, AIRLINEVIPCARDREFUND:航司金银卡退票
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

    public function getRefundList() : array{
        return $this->refund_list;
    }

    public function setRefundList(array $refundList){
        $this->refund_list = $refundList;
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

    public function getRefuseReason() : string{
        return $this->refuse_reason;
    }

    public function setRefuseReason(string $refuseReason){
        $this->refuse_reason = $refuseReason;
    }

    public function getApplyReasonType() : int{
        return $this->apply_reason_type;
    }

    public function setApplyReasonType(int $applyReasonType){
        $this->apply_reason_type = $applyReasonType;
    }

    public function getSupplement() : int{
        return $this->supplement;
    }

    public function setSupplement(int $supplement){
        $this->supplement = $supplement;
    }

    public function getTags() : array{
        return $this->tags;
    }

    public function setTags(array $tags){
        $this->tags = $tags;
    }


}

