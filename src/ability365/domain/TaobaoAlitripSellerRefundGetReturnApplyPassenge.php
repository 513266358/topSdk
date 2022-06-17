<?php
namespace Topsdk\Topapi\Ability365\Domain;

class TaobaoAlitripSellerRefundGetReturnApplyPassenge {

    /**
        优惠后票面价
     **/
    private $discount_ticket_price;

    /**
        人ID
     **/
    private $id;

    /**
        乘机人姓名
     **/
    private $passenger_name;

    /**
        乘机人类型
     **/
    private $passenger_type;

    /**
        退款手续费
     **/
    private $refund_fee;

    /**
        退款金额
     **/
    private $refund_money;

    /**
        退款航段信息
     **/
    private $return_ticket_segment;

    /**
        票价信息(分)
     **/
    private $ticket_price;

    /**
        优惠券金额
     **/
    private $voucher_price;


    public function getDiscountTicketPrice() : int{
        return $this->discount_ticket_price;
    }

    public function setDiscountTicketPrice(int $discountTicketPrice){
        $this->discount_ticket_price = $discountTicketPrice;
    }

    public function getId() : int{
        return $this->id;
    }

    public function setId(int $id){
        $this->id = $id;
    }

    public function getPassengerName() : string{
        return $this->passenger_name;
    }

    public function setPassengerName(string $passengerName){
        $this->passenger_name = $passengerName;
    }

    public function getPassengerType() : int{
        return $this->passenger_type;
    }

    public function setPassengerType(int $passengerType){
        $this->passenger_type = $passengerType;
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

    public function getReturnTicketSegment() : array{
        return $this->return_ticket_segment;
    }

    public function setReturnTicketSegment(array $returnTicketSegment){
        $this->return_ticket_segment = $returnTicketSegment;
    }

    public function getTicketPrice() : int{
        return $this->ticket_price;
    }

    public function setTicketPrice(int $ticketPrice){
        $this->ticket_price = $ticketPrice;
    }

    public function getVoucherPrice() : int{
        return $this->voucher_price;
    }

    public function setVoucherPrice(int $voucherPrice){
        $this->voucher_price = $voucherPrice;
    }


}

