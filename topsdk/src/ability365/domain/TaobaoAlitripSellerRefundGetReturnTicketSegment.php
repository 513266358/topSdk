<?php
namespace Topsdk\Topapi\Ability365\Domain;

class TaobaoAlitripSellerRefundGetReturnTicketSegment {

    /**
        到达机场三字码
     **/
    private $arr_airport_code;

    /**
        到达城市
     **/
    private $arr_city;

    /**
        单个航段机场建设费用（分）
     **/
    private $build_fee;

    /**
        出发机场三字码
     **/
    private $dep_airport_code;

    /**
        出发城市
     **/
    private $dep_city;

    /**
        起飞时间
     **/
    private $dep_time;

    /**
        航班号
     **/
    private $flight_no;

    /**
        航段ID
     **/
    private $id;

    /**
        单个航段机场建燃油费用
     **/
    private $oil_tax;

    /**
        改签手续费(分)
     **/
    private $refund_modify_fee;

    /**
        升舱手续费（分）
     **/
    private $refund_upgrade_fee;

    /**
        票状态是否挂起
     **/
    private $suspend;

    /**
        票号信息
     **/
    private $ticket_no;

    /**
        去程0 回程1
     **/
    private $trip_type;


    public function getArrAirportCode() : string{
        return $this->arr_airport_code;
    }

    public function setArrAirportCode(string $arrAirportCode){
        $this->arr_airport_code = $arrAirportCode;
    }

    public function getArrCity() : string{
        return $this->arr_city;
    }

    public function setArrCity(string $arrCity){
        $this->arr_city = $arrCity;
    }

    public function getBuildFee() : int{
        return $this->build_fee;
    }

    public function setBuildFee(int $buildFee){
        $this->build_fee = $buildFee;
    }

    public function getDepAirportCode() : string{
        return $this->dep_airport_code;
    }

    public function setDepAirportCode(string $depAirportCode){
        $this->dep_airport_code = $depAirportCode;
    }

    public function getDepCity() : string{
        return $this->dep_city;
    }

    public function setDepCity(string $depCity){
        $this->dep_city = $depCity;
    }

    public function getDepTime() : string{
        return $this->dep_time;
    }

    public function setDepTime(string $depTime){
        $this->dep_time = $depTime;
    }

    public function getFlightNo() : string{
        return $this->flight_no;
    }

    public function setFlightNo(string $flightNo){
        $this->flight_no = $flightNo;
    }

    public function getId() : int{
        return $this->id;
    }

    public function setId(int $id){
        $this->id = $id;
    }

    public function getOilTax() : int{
        return $this->oil_tax;
    }

    public function setOilTax(int $oilTax){
        $this->oil_tax = $oilTax;
    }

    public function getRefundModifyFee() : int{
        return $this->refund_modify_fee;
    }

    public function setRefundModifyFee(int $refundModifyFee){
        $this->refund_modify_fee = $refundModifyFee;
    }

    public function getRefundUpgradeFee() : int{
        return $this->refund_upgrade_fee;
    }

    public function setRefundUpgradeFee(int $refundUpgradeFee){
        $this->refund_upgrade_fee = $refundUpgradeFee;
    }

    public function getSuspend() : bool{
        return $this->suspend;
    }

    public function setSuspend(bool $suspend){
        $this->suspend = $suspend;
    }

    public function getTicketNo() : string{
        return $this->ticket_no;
    }

    public function setTicketNo(string $ticketNo){
        $this->ticket_no = $ticketNo;
    }

    public function getTripType() : int{
        return $this->trip_type;
    }

    public function setTripType(int $tripType){
        $this->trip_type = $tripType;
    }


}

