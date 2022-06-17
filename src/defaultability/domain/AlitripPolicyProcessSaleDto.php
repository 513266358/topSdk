<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class AlitripPolicyProcessSaleDto {

    /**
        销售时间
     **/
    private $sale_time;

    /**
        提前订座天数
     **/
    private $advance_day;

    /**
        销售日期
     **/
    private $sale_dates;

    /**
        停留天数
     **/
    private $stay_day;


    public function getSaleTime() : string{
        return $this->sale_time;
    }

    public function setSaleTime(string $saleTime){
        $this->sale_time = $saleTime;
    }

    public function getAdvanceDay() : string{
        return $this->advance_day;
    }

    public function setAdvanceDay(string $advanceDay){
        $this->advance_day = $advanceDay;
    }

    public function getSaleDates() : array{
        return $this->sale_dates;
    }

    public function setSaleDates(array $saleDates){
        $this->sale_dates = $saleDates;
    }

    public function getStayDay() : string{
        return $this->stay_day;
    }

    public function setStayDay(string $stayDay){
        $this->stay_day = $stayDay;
    }


}

