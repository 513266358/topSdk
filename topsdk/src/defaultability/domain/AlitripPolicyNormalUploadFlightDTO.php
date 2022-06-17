<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class AlitripPolicyNormalUploadFlightDTO {

    /**
        允许航班号，支持录入多个航班与航班范围，范围之间用“-”链接，多个用英文”,”分隔。最多支持8000字符
     **/
    private $allow_flight_num;

    /**
        允许航班日期
     **/
    private $allow_travel_date;

    /**
        允许航班起飞时间
     **/
    private $allow_travel_time;

    /**
        舱位，多个用英文”,”分隔
     **/
    private $cabin;

    /**
        舱等
     **/
    private $cabin_class;

    /**
        班期
     **/
    private $day_week;

    /**
        行程类型标记：0，单程；1，往返
     **/
    private $flight_index;

    /**
        禁止航班号
     **/
    private $restrict_flight_num;

    /**
        禁止航班日期
     **/
    private $restrict_travel_date;


    public function getAllowFlightNum() : string{
        return $this->allow_flight_num;
    }

    public function setAllowFlightNum(string $allowFlightNum){
        $this->allow_flight_num = $allowFlightNum;
    }

    public function getAllowTravelDate() : array{
        return $this->allow_travel_date;
    }

    public function setAllowTravelDate(array $allowTravelDate){
        $this->allow_travel_date = $allowTravelDate;
    }

    public function getAllowTravelTime() : string{
        return $this->allow_travel_time;
    }

    public function setAllowTravelTime(string $allowTravelTime){
        $this->allow_travel_time = $allowTravelTime;
    }

    public function getCabin() : string{
        return $this->cabin;
    }

    public function setCabin(string $cabin){
        $this->cabin = $cabin;
    }

    public function getCabinClass() : string{
        return $this->cabin_class;
    }

    public function setCabinClass(string $cabinClass){
        $this->cabin_class = $cabinClass;
    }

    public function getDayWeek() : array{
        return $this->day_week;
    }

    public function setDayWeek(array $dayWeek){
        $this->day_week = $dayWeek;
    }

    public function getFlightIndex() : int{
        return $this->flight_index;
    }

    public function setFlightIndex(int $flightIndex){
        $this->flight_index = $flightIndex;
    }

    public function getRestrictFlightNum() : string{
        return $this->restrict_flight_num;
    }

    public function setRestrictFlightNum(string $restrictFlightNum){
        $this->restrict_flight_num = $restrictFlightNum;
    }

    public function getRestrictTravelDate() : array{
        return $this->restrict_travel_date;
    }

    public function setRestrictTravelDate(array $restrictTravelDate){
        $this->restrict_travel_date = $restrictTravelDate;
    }


}

