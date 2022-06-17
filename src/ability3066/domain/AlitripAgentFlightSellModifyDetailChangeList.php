<?php
namespace Topsdk\Topapi\Ability3066\Domain;

class AlitripAgentFlightSellModifyDetailChangeList {

    /**
        证件号
     **/
    private $cert_no;

    /**
        乘客姓名
     **/
    private $passenger_name;

    /**
        证件类型:0:身份证, 1:护照, 2:学生证, 3:军官证, 4:回乡证, 5:台胞证, 6:港澳通行证, 7:国际海员, 8:外国人永久居留证, 9:其他证件, 10:警官证, 11:士兵证件, 12:台湾通行证, 13:入台证, 14:户口簿, 15:出生证, 16:驾驶证, 17:港澳居民居住证, 18:台湾居民居住证,
     **/
    private $cert_type;

    /**
        乘客类型: 1:成人, 2:儿童, 3:婴儿, 4:留学生
     **/
    private $passenger_type;

    /**
        票号
     **/
    private $tickets;

    /**
        优惠;单位:分
     **/
    private $promotion;

    /**
        改签前数据
     **/
    private $before_change_segments;

    /**
        改签后数据
     **/
    private $after_change_segments;

    /**
        票面价;单位:分
     **/
    private $ticket_price;

    /**
        改签费;单位:分
     **/
    private $change_fee;

    /**
        升舱费;单位:分
     **/
    private $upgrade_fee;

    /**
        改签后pnr
     **/
    private $pnr;

    /**
        改签前票号
     **/
    private $before_change_tickets;


    public function getCertNo() : string{
        return $this->cert_no;
    }

    public function setCertNo(string $certNo){
        $this->cert_no = $certNo;
    }

    public function getPassengerName() : string{
        return $this->passenger_name;
    }

    public function setPassengerName(string $passengerName){
        $this->passenger_name = $passengerName;
    }

    public function getCertType() : int{
        return $this->cert_type;
    }

    public function setCertType(int $certType){
        $this->cert_type = $certType;
    }

    public function getPassengerType() : int{
        return $this->passenger_type;
    }

    public function setPassengerType(int $passengerType){
        $this->passenger_type = $passengerType;
    }

    public function getTickets() : array{
        return $this->tickets;
    }

    public function setTickets(array $tickets){
        $this->tickets = $tickets;
    }

    public function getPromotion() : int{
        return $this->promotion;
    }

    public function setPromotion(int $promotion){
        $this->promotion = $promotion;
    }

    public function getBeforeChangeSegments() : array{
        return $this->before_change_segments;
    }

    public function setBeforeChangeSegments(array $beforeChangeSegments){
        $this->before_change_segments = $beforeChangeSegments;
    }

    public function getAfterChangeSegments() : array{
        return $this->after_change_segments;
    }

    public function setAfterChangeSegments(array $afterChangeSegments){
        $this->after_change_segments = $afterChangeSegments;
    }

    public function getTicketPrice() : int{
        return $this->ticket_price;
    }

    public function setTicketPrice(int $ticketPrice){
        $this->ticket_price = $ticketPrice;
    }

    public function getChangeFee() : int{
        return $this->change_fee;
    }

    public function setChangeFee(int $changeFee){
        $this->change_fee = $changeFee;
    }

    public function getUpgradeFee() : int{
        return $this->upgrade_fee;
    }

    public function setUpgradeFee(int $upgradeFee){
        $this->upgrade_fee = $upgradeFee;
    }

    public function getPnr() : string{
        return $this->pnr;
    }

    public function setPnr(string $pnr){
        $this->pnr = $pnr;
    }

    public function getBeforeChangeTickets() : array{
        return $this->before_change_tickets;
    }

    public function setBeforeChangeTickets(array $beforeChangeTickets){
        $this->before_change_tickets = $beforeChangeTickets;
    }


}

