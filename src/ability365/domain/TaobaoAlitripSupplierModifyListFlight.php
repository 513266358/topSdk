<?php
namespace Topsdk\Topapi\Ability365\Domain;

class TaobaoAlitripSupplierModifyListFlight {

    /**
        到达日期
     **/
    private $dep_date;

    /**
        航班号
     **/
    private $flight_no;

    /**
        出发机场三字码
     **/
    private $dep_airport;

    /**
        到达机场三字码
     **/
    private $arr_airport;

    /**
        航空公司二字码
     **/
    private $air_line_code;


    public function getDepDate() : string{
        return $this->dep_date;
    }

    public function setDepDate(string $depDate){
        $this->dep_date = $depDate;
    }

    public function getFlightNo() : string{
        return $this->flight_no;
    }

    public function setFlightNo(string $flightNo){
        $this->flight_no = $flightNo;
    }

    public function getDepAirport() : string{
        return $this->dep_airport;
    }

    public function setDepAirport(string $depAirport){
        $this->dep_airport = $depAirport;
    }

    public function getArrAirport() : string{
        return $this->arr_airport;
    }

    public function setArrAirport(string $arrAirport){
        $this->arr_airport = $arrAirport;
    }

    public function getAirLineCode() : string{
        return $this->air_line_code;
    }

    public function setAirLineCode(string $airLineCode){
        $this->air_line_code = $airLineCode;
    }


}

