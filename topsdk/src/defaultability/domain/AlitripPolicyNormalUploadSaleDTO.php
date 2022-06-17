<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class AlitripPolicyNormalUploadSaleDTO {

    /**
        提前预定天数
     **/
    private $advance_day;

    /**
        销售日期
     **/
    private $sale_date;

    /**
        销售时间
     **/
    private $sale_time;

    /**
        只能输入A-B的格式，AB都是0-365之间的整数。往返航班之间的停留天数，以天数为单位，默认不限制。空表示默认
     **/
    private $stay_day;

    /**
        销售方式：0，无；1，打包销售套餐1；2，打包销售套餐2；3，打包销售套餐3；4，返现-航司运价；5，返现-销售方包装
     **/
    private $sale_mode_code;


    public function getAdvanceDay() : string{
        return $this->advance_day;
    }

    public function setAdvanceDay(string $advanceDay){
        $this->advance_day = $advanceDay;
    }

    public function getSaleDate() : array{
        return $this->sale_date;
    }

    public function setSaleDate(array $saleDate){
        $this->sale_date = $saleDate;
    }

    public function getSaleTime() : string{
        return $this->sale_time;
    }

    public function setSaleTime(string $saleTime){
        $this->sale_time = $saleTime;
    }

    public function getStayDay() : string{
        return $this->stay_day;
    }

    public function setStayDay(string $stayDay){
        $this->stay_day = $stayDay;
    }

    public function getSaleModeCode() : int{
        return $this->sale_mode_code;
    }

    public function setSaleModeCode(int $saleModeCode){
        $this->sale_mode_code = $saleModeCode;
    }


}

