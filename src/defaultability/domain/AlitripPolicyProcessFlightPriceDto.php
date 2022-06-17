<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class AlitripPolicyProcessFlightPriceDto {

    /**
        直减金额
     **/
    private $down_fare;

    /**
        直减比例
     **/
    private $down_percent;

    /**
        验舱
     **/
    private $validate_cabin;

    /**
        指定舱位
     **/
    private $fare_cabin;

    /**
        行程索引
     **/
    private $flight_index;


    public function getDownFare() : int{
        return $this->down_fare;
    }

    public function setDownFare(int $downFare){
        $this->down_fare = $downFare;
    }

    public function getDownPercent() : int{
        return $this->down_percent;
    }

    public function setDownPercent(int $downPercent){
        $this->down_percent = $downPercent;
    }

    public function getValidateCabin() : int{
        return $this->validate_cabin;
    }

    public function setValidateCabin(int $validateCabin){
        $this->validate_cabin = $validateCabin;
    }

    public function getFareCabin() : string{
        return $this->fare_cabin;
    }

    public function setFareCabin(string $fareCabin){
        $this->fare_cabin = $fareCabin;
    }

    public function getFlightIndex() : string{
        return $this->flight_index;
    }

    public function setFlightIndex(string $flightIndex){
        $this->flight_index = $flightIndex;
    }


}

