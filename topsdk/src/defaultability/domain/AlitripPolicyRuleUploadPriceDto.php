<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class AlitripPolicyRuleUploadPriceDto {

    /**
        返点，单位分，如传100表示返点为1%。支持正负数
     **/
    private $commission;

    /**
        返点，单位分，如传100表示返点为1%。支持正负数
     **/
    private $return_price;

    /**
        最低票面价，单位为分
     **/
    private $lowest_price;

    /**
        进位规则：1，进到十位；2，四舍五入到十位；3，四舍五入到个位；4，三舍四入到十位
     **/
    private $carry_rule;

    /**
        票面价计算方式：1，票面价减比例；2，标准价减比例；3，票面价减Y舱比例；4，直减金额；5，票面价原价；6，最低外放舱位减比例；7，最低外放舱位减Y舱比例；8，指定舱位减比例；9，指定舱位减Y舱比例，10，标准价折扣减比例；11，按航司旗舰店最低价；12，按指定舱位旗舰店价格；13，按指定舱位官网代购价格；14，按官网代购最低价；15，按旗舰店接口和官网代购最低价
     **/
    private $cal_fare_method;

    /**
        票面价计算属性
     **/
    private $flight_price_values;

    /**
        最小票面价，单位：元
     **/
    private $min_price_limit;

    /**
        最大票面价，单位：元
     **/
    private $max_price_limit;


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

    public function getLowestPrice() : int{
        return $this->lowest_price;
    }

    public function setLowestPrice(int $lowestPrice){
        $this->lowest_price = $lowestPrice;
    }

    public function getCarryRule() : int{
        return $this->carry_rule;
    }

    public function setCarryRule(int $carryRule){
        $this->carry_rule = $carryRule;
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

    public function getMinPriceLimit() : int{
        return $this->min_price_limit;
    }

    public function setMinPriceLimit(int $minPriceLimit){
        $this->min_price_limit = $minPriceLimit;
    }

    public function getMaxPriceLimit() : int{
        return $this->max_price_limit;
    }

    public function setMaxPriceLimit(int $maxPriceLimit){
        $this->max_price_limit = $maxPriceLimit;
    }


}

