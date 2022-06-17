<?php
namespace Topsdk\Topapi\Ability3066\Domain;

class AlitripAgentFlightSellRefundDetailRefundList {

    /**
        乘客姓名
     **/
    private $passenger_name;

    /**
        退票费，单位:分
     **/
    private $refund_fee;

    /**
        票号
     **/
    private $tickets;

    /**
        升舱手续费，单位:分
     **/
    private $refund_upgrade_fee;

    /**
        改期手续费，单位:分
     **/
    private $refund_modify_fee;

    /**
        退票航段
     **/
    private $refund_segments;

    /**
        退款金额，单位:分（出后退:退款金额=实收金额-退票费；改后退:退款金额=实收金额+总改期费+总升舱费-退票费-改签手续费-升舱手续费）
     **/
    private $refund_amount;

    /**
        票面价，单位:分
     **/
    private $ticket_price;

    /**
        乘客类型:1 成人 ,2 儿童,3 婴儿,4 留学生
     **/
    private $passenger_type;

    /**
        税费，单位:分
     **/
    private $taxes;

    /**
        升舱总费用，单位:分
     **/
    private $total_modify_fee;

    /**
        改签总费用，单位:分
     **/
    private $total_upgrade_fee;

    /**
        实收金额：单位:分
     **/
    private $real_price;

    /**
        1:出后退,2:改后退
     **/
    private $refund_item_type;


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

    public function getRefundAmount() : int{
        return $this->refund_amount;
    }

    public function setRefundAmount(int $refundAmount){
        $this->refund_amount = $refundAmount;
    }

    public function getTicketPrice() : int{
        return $this->ticket_price;
    }

    public function setTicketPrice(int $ticketPrice){
        $this->ticket_price = $ticketPrice;
    }

    public function getPassengerType() : int{
        return $this->passenger_type;
    }

    public function setPassengerType(int $passengerType){
        $this->passenger_type = $passengerType;
    }

    public function getTaxes() : array{
        return $this->taxes;
    }

    public function setTaxes(array $taxes){
        $this->taxes = $taxes;
    }

    public function getTotalModifyFee() : int{
        return $this->total_modify_fee;
    }

    public function setTotalModifyFee(int $totalModifyFee){
        $this->total_modify_fee = $totalModifyFee;
    }

    public function getTotalUpgradeFee() : int{
        return $this->total_upgrade_fee;
    }

    public function setTotalUpgradeFee(int $totalUpgradeFee){
        $this->total_upgrade_fee = $totalUpgradeFee;
    }

    public function getRealPrice() : int{
        return $this->real_price;
    }

    public function setRealPrice(int $realPrice){
        $this->real_price = $realPrice;
    }

    public function getRefundItemType() : int{
        return $this->refund_item_type;
    }

    public function setRefundItemType(int $refundItemType){
        $this->refund_item_type = $refundItemType;
    }


}

