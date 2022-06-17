<?php
namespace Topsdk\Topapi\Ability365\Domain;

class TaobaoAlitripSellerRefundGetReturnTicketDetail {

    /**
        申请单ID
     **/
    private $apply_id;

    /**
        退票原因
     **/
    private $apply_reason_type;

    /**
        退票申请时间
     **/
    private $apply_time;

    /**
        退票成功时间
     **/
    private $first_process_time;

    /**
        订单号
     **/
    private $order_id;

    /**
        退款成功时间
     **/
    private $pay_success_time;

    /**
        申退原因
     **/
    private $reason;

    /**
        退款手续费（分）
     **/
    private $refund_fee;

    /**
        退款金额（退给买家的钱）（分）
     **/
    private $refund_money;

    /**
        人的费用信息
     **/
    private $return_apply_passenge;

    /**
        申请单状态（1初始 2接受 3确认 4失败 5买家处理 6卖家处理 7等待小二回填 8退款成功）
     **/
    private $status;

    /**
        creditMoney
     **/
    private $credit_money;


    public function getApplyId() : int{
        return $this->apply_id;
    }

    public function setApplyId(int $applyId){
        $this->apply_id = $applyId;
    }

    public function getApplyReasonType() : int{
        return $this->apply_reason_type;
    }

    public function setApplyReasonType(int $applyReasonType){
        $this->apply_reason_type = $applyReasonType;
    }

    public function getApplyTime() : string{
        return $this->apply_time;
    }

    public function setApplyTime(string $applyTime){
        $this->apply_time = $applyTime;
    }

    public function getFirstProcessTime() : string{
        return $this->first_process_time;
    }

    public function setFirstProcessTime(string $firstProcessTime){
        $this->first_process_time = $firstProcessTime;
    }

    public function getOrderId() : int{
        return $this->order_id;
    }

    public function setOrderId(int $orderId){
        $this->order_id = $orderId;
    }

    public function getPaySuccessTime() : string{
        return $this->pay_success_time;
    }

    public function setPaySuccessTime(string $paySuccessTime){
        $this->pay_success_time = $paySuccessTime;
    }

    public function getReason() : string{
        return $this->reason;
    }

    public function setReason(string $reason){
        $this->reason = $reason;
    }

    public function getRefundFee() : int{
        return $this->refund_fee;
    }

    public function setRefundFee(int $refundFee){
        $this->refund_fee = $refundFee;
    }

    public function getRefundMoney() : int{
        return $this->refund_money;
    }

    public function setRefundMoney(int $refundMoney){
        $this->refund_money = $refundMoney;
    }

    public function getReturnApplyPassenge() : array{
        return $this->return_apply_passenge;
    }

    public function setReturnApplyPassenge(array $returnApplyPassenge){
        $this->return_apply_passenge = $returnApplyPassenge;
    }

    public function getStatus() : int{
        return $this->status;
    }

    public function setStatus(int $status){
        $this->status = $status;
    }

    public function getCreditMoney() : int{
        return $this->credit_money;
    }

    public function setCreditMoney(int $creditMoney){
        $this->credit_money = $creditMoney;
    }


}

