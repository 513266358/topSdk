<?php
namespace Topsdk\Topapi\Ability365\Domain;

class TaobaoAlitripSupplierModifyListPassenger {

    /**
        PNR编码
     **/
    private $pnr;

    /**
        票号
     **/
    private $ticket_no;

    /**
        证件号码
     **/
    private $cert_type;

    /**
        证件类型
     **/
    private $cert_num;

    /**
        乘机人姓名
     **/
    private $passenger_name;


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

    public function getCertType() : string{
        return $this->cert_type;
    }

    public function setCertType(string $certType){
        $this->cert_type = $certType;
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


}

