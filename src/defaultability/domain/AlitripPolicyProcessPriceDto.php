<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class AlitripPolicyProcessPriceDto {

    /**
        进位规则
     **/
    private $carry_rule;

    /**
        最低结算价
     **/
    private $lowest_price;

    /**
        票面价算法
     **/
    private $cal_fare_method;

    /**
        按航段调运价
     **/
    private $flight_price_values;

    /**
        竞价空间
     **/
    private $bid_fee;

    /**
        竞价方式
     **/
    private $bid_method;

    /**
        代理费率
     **/
    private $commission;

    /**
        留钱
     **/
    private $return_price;


    public function getCarryRule() : int{
        return $this->carry_rule;
    }

    public function setCarryRule(int $carryRule){
        $this->carry_rule = $carryRule;
    }

    public function getLowestPrice() : int{
        return $this->lowest_price;
    }

    public function setLowestPrice(int $lowestPrice){
        $this->lowest_price = $lowestPrice;
    }

    public function getCalFareMethod() : int{
        return $this->cal_fare_method;
    }

    public function setCalFareMethod(int $calFareMethod){
        $this->cal_fare_method = $calFareMethod;
    }

    public function getFlightPriceValues() : array{
        return $this->flight_price_values;
    }

    public function setFlightPriceValues(array $flightPriceValues){
        $this->flight_price_values = $flightPriceValues;
    }

    public function getBidFee() : int{
        return $this->bid_fee;
    }

    public function setBidFee(int $bidFee){
        $this->bid_fee = $bidFee;
    }

    public function getBidMethod() : int{
        return $this->bid_method;
    }

    public function setBidMethod(int $bidMethod){
        $this->bid_method = $bidMethod;
    }

    public function getCommission() : int{
        return $this->commission;
    }

    public function setCommission(int $commission){
        $this->commission = $commission;
    }

    public function getReturnPrice() : int{
        return $this->return_price;
    }

    public function setReturnPrice(int $returnPrice){
        $this->return_price = $returnPrice;
    }


}

