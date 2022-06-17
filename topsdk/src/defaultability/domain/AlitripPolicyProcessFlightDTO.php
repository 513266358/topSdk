<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class AlitripPolicyProcessFlightDTO {

    /**
        舱等
     **/
    private $cabin_class;

    /**
        可售航班日期
     **/
    private $allow_travel_dates;

    /**
        行程索引
     **/
    private $flight_index;

    /**
        不可售航班日期
     **/
    private $restrict_travel_dates;

    /**
        可售航班时间
     **/
    private $allow_travel_time;

    /**
        班期限制
     **/
    private $day_weeks;

    /**
        可售航班号
     **/
    private $allow_flight_num;

    /**
        舱位
     **/
    private $cabin;

    /**
        不可售航班号
     **/
    private $restrict_flight_num;


    public function getCabinClass() : string{
        return $this->cabin_class;
    }

    public function setCabinClass(string $cabinClass){
        $this->cabin_class = $cabinClass;
    }

    public function getAllowTravelDates() : array{
        return $this->allow_travel_dates;
    }

    public function setAllowTravelDates(array $allowTravelDates){
        $this->allow_travel_dates = $allowTravelDates;
    }

    public function getFlightIndex() : int{
        return $this->flight_index;
    }

    public function setFlightIndex(int $flightIndex){
        $this->flight_index = $flightIndex;
    }

    public function getRestrictTravelDates() : array{
        return $this->restrict_travel_dates;
    }

    public function setRestrictTravelDates(array $restrictTravelDates){
        $this->restrict_travel_dates = $restrictTravelDates;
    }

    public function getAllowTravelTime() : string{
        return $this->allow_travel_time;
    }

    public function setAllowTravelTime(string $allowTravelTime){
        $this->allow_travel_time = $allowTravelTime;
    }

    public function getDayWeeks() : array{
        return $this->day_weeks;
    }

    public function setDayWeeks(array $dayWeeks){
        $this->day_weeks = $dayWeeks;
    }

    public function getAllowFlightNum() : string{
        return $this->allow_flight_num;
    }

    public function setAllowFlightNum(string $allowFlightNum){
        $this->allow_flight_num = $allowFlightNum;
    }

    public function getCabin() : string{
        return $this->cabin;
    }

    public function setCabin(string $cabin){
        $this->cabin = $cabin;
    }

    public function getRestrictFlightNum() : string{
        return $this->restrict_flight_num;
    }

    public function setRestrictFlightNum(string $restrictFlightNum){
        $this->restrict_flight_num = $restrictFlightNum;
    }


}

