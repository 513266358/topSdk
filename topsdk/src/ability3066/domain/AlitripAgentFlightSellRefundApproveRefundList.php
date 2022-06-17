<?php
namespace Topsdk\Topapi\Ability3066\Domain;

class AlitripAgentFlightSellRefundApproveRefundList {

    /**
        乘客信息,必填
     **/
    private $passenger_name;

    /**
        退票费,必填,单位:分
     **/
    private $refund_fee;

    /**
        票号,必填
     **/
    private $tickets;

    /**
        升舱手续费,改后退订单必填,单位:分
     **/
    private $refund_upgrade_fee;

    /**
        改期手续费,改后退订单必填,单位:分
     **/
    private $refund_modify_fee;

    /**
        退票航段
     **/
    private $refund_segments;

    /**
        乘客类型:1:成人, 2:儿童, 3:婴儿, 4:留学生
     **/
    private $passenger_type;


    public function getPassengerName() : string{
        return $this->passenger_name;
    }

    public function setPassengerName(string $passengerName){
        $this->passenger_name = $passengerName;
    }

    public function getRefundFee() : int{
        return $this->refund_fee;
    }

    public function setRefundFee(int $refundFee){
        $this->refund_fee = $refundFee;
    }

    public function getTickets() : array{
        return $this->tickets;
    }

    public function setTickets(array $tickets){
        $this->tickets = $tickets;
    }

    public function getRefundUpgradeFee() : int{
        return $this->refund_upgrade_fee;
    }

    public function setRefundUpgradeFee(int $refundUpgradeFee){
        $this->refund_upgrade_fee = $refundUpgradeFee;
    }

    public function getRefundModifyFee() : int{
        return $this->refund_modify_fee;
    }

    public function setRefundModifyFee(int $refundModifyFee){
        $this->refund_modify_fee = $refundModifyFee;
    }

    public function getRefundSegments() : array{
        return $this->refund_segments;
    }

    public function setRefundSegments(array $refundSegments){
        $this->refund_segments = $refundSegments;
    }

    public function getPassengerType() : int{
        return $this->passenger_type;
    }

    public function setPassengerType(int $passengerType){
        $this->passenger_type = $passengerType;
    }


}

