<?php
namespace Topsdk\Topapi\Ability3066\Domain;

class AlitripAgentFlightSellModifyApproveModifyItemDTO {

    /**
        乘客姓名
     **/
    private $passenger_name;

    /**
        票号
     **/
    private $tickets;

    /**
        pnr(必填),无编码出票时可不填
     **/
    private $pnr;

    /**
        改签后航段
     **/
    private $after_change_segments;

    /**
        改签费用
     **/
    private $modify_fee;

    /**
        升舱费用
     **/
    private $upgrade_fee;

    /**
        改前航段
     **/
    private $before_change_segments;


    public function getPassengerName() : string{
        return $this->passenger_name;
    }

    public function setPassengerName(string $passengerName){
        $this->passenger_name = $passengerName;
    }

    public function getTickets() : array{
        return $this->tickets;
    }

    public function setTickets(array $tickets){
        $this->tickets = $tickets;
    }

    public function getPnr() : string{
        return $this->pnr;
    }

    public function setPnr(string $pnr){
        $this->pnr = $pnr;
    }

    public function getAfterChangeSegments() : array{
        return $this->after_change_segments;
    }

    public function setAfterChangeSegments(array $afterChangeSegments){
        $this->after_change_segments = $afterChangeSegments;
    }

    public function getModifyFee() : int{
        return $this->modify_fee;
    }

    public function setModifyFee(int $modifyFee){
        $this->modify_fee = $modifyFee;
    }

    public function getUpgradeFee() : int{
        return $this->upgrade_fee;
    }

    public function setUpgradeFee(int $upgradeFee){
        $this->upgrade_fee = $upgradeFee;
    }

    public function getBeforeChangeSegments() : array{
        return $this->before_change_segments;
    }

    public function setBeforeChangeSegments(array $beforeChangeSegments){
        $this->before_change_segments = $beforeChangeSegments;
    }


}

