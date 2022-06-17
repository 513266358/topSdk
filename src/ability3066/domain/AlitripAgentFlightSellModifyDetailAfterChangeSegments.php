<?php
namespace Topsdk\Topapi\Ability3066\Domain;

class AlitripAgentFlightSellModifyDetailAfterChangeSegments {

    /**
        舱等: F:头等舱, C:商务舱, Y:经济舱, S:超级经济舱, P:超值经济舱, M:标准经济舱, W:超级经济舱
     **/
    private $cabin_class;

    /**
        航班号
     **/
    private $flight_no;

    /**
        起飞时间
     **/
    private $dep_time;

    /**
        到达城市
     **/
    private $arr_city;

    /**
        起飞城市
     **/
    private $dep_city;

    /**
        舱位
     **/
    private $cabin;

    /**
        航段序号
     **/
    private $segment_index;

    /**
        到达机场
     **/
    private $arr_airport;

    /**
        起飞机场
     **/
    private $dep_airport;

    /**
        到达时间
     **/
    private $arr_time;

    /**
        航程序号
     **/
    private $od_index;


    public function getCabinClass() : string{
        return $this->cabin_class;
    }

    public function setCabinClass(string $cabinClass){
        $this->cabin_class = $cabinClass;
    }

    public function getFlightNo() : string{
        return $this->flight_no;
    }

    public function setFlightNo(string $flightNo){
        $this->flight_no = $flightNo;
    }

    public function getDepTime() : string{
        return $this->dep_time;
    }

    public function setDepTime(string $depTime){
        $this->dep_time = $depTime;
    }

    public function getArrCity() : string{
        return $this->arr_city;
    }

    public function setArrCity(string $arrCity){
        $this->arr_city = $arrCity;
    }

    public function getDepCity() : string{
        return $this->dep_city;
    }

    public function setDepCity(string $depCity){
        $this->dep_city = $depCity;
    }

    public function getCabin() : string{
        return $this->cabin;
    }

    public function setCabin(string $cabin){
        $this->cabin = $cabin;
    }

    public function getSegmentIndex() : int{
        return $this->segment_index;
    }

    public function setSegmentIndex(int $segmentIndex){
        $this->segment_index = $segmentIndex;
    }

    public function getArrAirport() : string{
        return $this->arr_airport;
    }

    public function setArrAirport(string $arrAirport){
        $this->arr_airport = $arrAirport;
    }

    public function getDepAirport() : string{
        return $this->dep_airport;
    }

    public function setDepAirport(string $depAirport){
        $this->dep_airport = $depAirport;
    }

    public function getArrTime() : string{
        return $this->arr_time;
    }

    public function setArrTime(string $arrTime){
        $this->arr_time = $arrTime;
    }

    public function getOdIndex() : int{
        return $this->od_index;
    }

    public function setOdIndex(int $odIndex){
        $this->od_index = $odIndex;
    }


}

