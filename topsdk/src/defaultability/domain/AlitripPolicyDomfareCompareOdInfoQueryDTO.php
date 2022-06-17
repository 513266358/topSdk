<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class AlitripPolicyDomfareCompareOdInfoQueryDTO {

    /**
        0，去程；1，返程；暂时仅支持单程，默认为0
     **/
    private $index;

    /**
        起飞机场
     **/
    private $dep_airport;

    /**
        降落机场
     **/
    private $arr_airport;

    /**
        起飞开始时间
     **/
    private $dep_start_date;

    /**
        起飞结束时间
     **/
    private $dep_end_date;


    public function getIndex() : int{
        return $this->index;
    }

    public function setIndex(int $index){
        $this->index = $index;
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

    public function getDepStartDate() : string{
        return $this->dep_start_date;
    }

    public function setDepStartDate(string $depStartDate){
        $this->dep_start_date = $depStartDate;
    }

    public function getDepEndDate() : string{
        return $this->dep_end_date;
    }

    public function setDepEndDate(string $depEndDate){
        $this->dep_end_date = $depEndDate;
    }


}

