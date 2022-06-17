<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class AlitripPolicyNormalUploadPriceDTO {

    /**
        返点，单位分，如传100表示返点为1%。支持正负数
     **/
    private $commission;

    /**
        返点，单位分，如传100表示返点为1%。支持正负数
     **/
    private $return_price;

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

