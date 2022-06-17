<?php
namespace Topsdk\Topapi\Ability3066\Domain;

class AlitripAgentFlightSellTicketingDetailIssueList {

    /**
        证件信息
     **/
    private $cert_no;

    /**
        乘机人姓名
     **/
    private $passenger_name;

    /**
        证件类型
     **/
    private $cert_type;

    /**
        票号
     **/
    private $tickets;

    /**
        乘客类型
     **/
    private $passenger_type;

    /**
        票面价
     **/
    private $ticket_price;

    /**
        pnr
     **/
    private $pnr;

    /**
        税项对象
     **/
    private $taxes;

    /**
        优惠价格
     **/
    private $promotion;

    /**
        航段
     **/
    private $segments;

    /**
        联系电话
     **/
    private $mobile;

    /**
        乘机人生日
     **/
    private $birthday;

    /**
        政策信息
     **/
    private $sell_policy_list;


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

    public function getTickets() : array{
        return $this->tickets;
    }

    public function setTickets(array $tickets){
        $this->tickets = $tickets;
    }

    public function getPassengerType() : int{
        return $this->passenger_type;
    }

    public function setPassengerType(int $passengerType){
        $this->passenger_type = $passengerType;
    }

    public function getTicketPrice() : int{
        return $this->ticket_price;
    }

    public function setTicketPrice(int $ticketPrice){
        $this->ticket_price = $ticketPrice;
    }

    public function getPnr() : string{
        return $this->pnr;
    }

    public function setPnr(string $pnr){
        $this->pnr = $pnr;
    }

    public function getTaxes() : array{
        return $this->taxes;
    }

    public function setTaxes(array $taxes){
        $this->taxes = $taxes;
    }

    public function getPromotion() : int{
        return $this->promotion;
    }

    public function setPromotion(int $promotion){
        $this->promotion = $promotion;
    }

    public function getSegments() : array{
        return $this->segments;
    }

    public function setSegments(array $segments){
        $this->segments = $segments;
    }

    public function getMobile() : string{
        return $this->mobile;
    }

    public function setMobile(string $mobile){
        $this->mobile = $mobile;
    }

    public function getBirthday() : string{
        return $this->birthday;
    }

    public function setBirthday(string $birthday){
        $this->birthday = $birthday;
    }

    public function getSellPolicyList() : array{
        return $this->sell_policy_list;
    }

    public function setSellPolicyList(array $sellPolicyList){
        $this->sell_policy_list = $sellPolicyList;
    }


}

