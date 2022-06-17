<?php
namespace Topsdk\Topapi\Ability365\Domain;

class TaobaoAlitripSellerModifyListPassenger {

    /**
        乘客生日
     **/
    private $birthday;

    /**
        乘客证件号码
     **/
    private $cert_num;

    /**
        乘客姓名
     **/
    private $passenger_name;

    /**
        改签前的pnr
     **/
    private $pnr;

    /**
        改签后的票号
     **/
    private $ticket_no;

    /**
        改签前的票号
     **/
    private $old_ticket_no;


    public function getBirthday() : string{
        return $this->birthday;
    }

    public function setBirthday(string $birthday){
        $this->birthday = $birthday;
    }

    public function getCertNum() : string{
        return $this->cert_num;
    }

    public function setCertNum(string $certNum){
        $this->cert_num = $certNum;
    }

    public function getPassengerName() : string{
        return $this->passenger_name;
    }

    public function setPassengerName(string $passengerName){
        $this->passenger_name = $passengerName;
    }

    public function getPnr() : string{
        return $this->pnr;
    }

    public function setPnr(string $pnr){
        $this->pnr = $pnr;
    }

    public function getTicketNo() : string{
        return $this->ticket_no;
    }

    public function setTicketNo(string $ticketNo){
        $this->ticket_no = $ticketNo;
    }

    public function getOldTicketNo() : string{
        return $this->old_ticket_no;
    }

    public function setOldTicketNo(string $oldTicketNo){
        $this->old_ticket_no = $oldTicketNo;
    }


}

