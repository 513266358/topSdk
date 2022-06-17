<?php
namespace Topsdk\Topapi\Ability364\Domain;

class TaobaoAlitripFlightchangeGetFlightChangeDataQueryOption {

    /**
        航变信息产生时间截至,格式yyyy-MM-dd
     **/
    private $end_flight_change_time_str;

    /**
        原到达机场三字代码
     **/
    private $old_arr_airport;

    /**
        是否只查已确认的航变,1:是 2:否
     **/
    private $is_confirmed;

    /**
        是否只查自己订单航变,1:是 2:否
     **/
    private $is_get_self_only;

    /**
        原航变旅行日期开始,格式yyyy-MM-dd
     **/
    private $begin_old_dep_time_str;

    /**
        原航变旅行日期截至,格式yyyy-MM-dd
     **/
    private $end_old_dep_time_str;

    /**
        原出发机场三字代码
     **/
    private $old_dep_airport;

    /**
        航变信息产生时间开始,格式yyyy-MM-dd
     **/
    private $begin_flight_change_time_str;

    /**
        原航班号
     **/
    private $old_flt_num;

    /**
        排序,1:航变时间降序（默认） 2:航变时间升序 3:离港时间降序 4:离港时间升序
     **/
    private $qsort;

    /**
        第几页
     **/
    private $current_page;


    public function getEndFlightChangeTimeStr() : string{
        return $this->end_flight_change_time_str;
    }

    public function setEndFlightChangeTimeStr(string $endFlightChangeTimeStr){
        $this->end_flight_change_time_str = $endFlightChangeTimeStr;
    }

    public function getOldArrAirport() : string{
        return $this->old_arr_airport;
    }

    public function setOldArrAirport(string $oldArrAirport){
        $this->old_arr_airport = $oldArrAirport;
    }

    public function getIsConfirmed() : int{
        return $this->is_confirmed;
    }

    public function setIsConfirmed(int $isConfirmed){
        $this->is_confirmed = $isConfirmed;
    }

    public function getIsGetSelfOnly() : int{
        return $this->is_get_self_only;
    }

    public function setIsGetSelfOnly(int $isGetSelfOnly){
        $this->is_get_self_only = $isGetSelfOnly;
    }

    public function getBeginOldDepTimeStr() : string{
        return $this->begin_old_dep_time_str;
    }

    public function setBeginOldDepTimeStr(string $beginOldDepTimeStr){
        $this->begin_old_dep_time_str = $beginOldDepTimeStr;
    }

    public function getEndOldDepTimeStr() : string{
        return $this->end_old_dep_time_str;
    }

    public function setEndOldDepTimeStr(string $endOldDepTimeStr){
        $this->end_old_dep_time_str = $endOldDepTimeStr;
    }

    public function getOldDepAirport() : string{
        return $this->old_dep_airport;
    }

    public function setOldDepAirport(string $oldDepAirport){
        $this->old_dep_airport = $oldDepAirport;
    }

    public function getBeginFlightChangeTimeStr() : string{
        return $this->begin_flight_change_time_str;
    }

    public function setBeginFlightChangeTimeStr(string $beginFlightChangeTimeStr){
        $this->begin_flight_change_time_str = $beginFlightChangeTimeStr;
    }

    public function getOldFltNum() : string{
        return $this->old_flt_num;
    }

    public function setOldFltNum(string $oldFltNum){
        $this->old_flt_num = $oldFltNum;
    }

    public function getQsort() : int{
        return $this->qsort;
    }

    public function setQsort(int $qsort){
        $this->qsort = $qsort;
    }

    public function getCurrentPage() : int{
        return $this->current_page;
    }

    public function setCurrentPage(int $currentPage){
        $this->current_page = $currentPage;
    }


}

