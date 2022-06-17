<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class AlitripPolicySpecialUploadPriceDto {

    /**
        代理费率
     **/
    private $commission;

    /**
        留钱，单位为分
     **/
    private $return_price;

    /**
        最低票面价，单位为分
     **/
    private $lowest_price;


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


}

