<?php
namespace Topsdk\Topapi\Ability364\Domain;

class TaobaoAlitripFlightchangeAddFlightChangeDataDO {

    /**
        航班最新到达机场三字码, 字符长度3；仅当flightChangeType=2，该参数必填
     **/
    private $new_arr_airport;

    /**
        原到达机场三字代码, 字符长度3
     **/
    private $old_arr_airport;

    /**
        原航变日期 ,格式:yyyy-MM-dd
     **/
    private $old_dep_time_str;

    /**
        航变类型,1:航班取消 2:航班变更
     **/
    private $flight_change_type;

    /**
        原航班号（如果是二次航变，该参数为第一航变后最新的航班号。eg:第一航变 航班号从CA123变更到CA456，那第二次航变的原航班应该为CA456）
     **/
    private $old_flt_num;

    /**
        航班最新计划起飞时间,仅当flightChangeType=2，该参数必填；录入格式:yyyy-MM-dd HH: mm
     **/
    private $new_dep_time_str;

    /**
        航班最新出发机场三字码, 字符长度3；仅当flightChangeType=2，该参数必填
     **/
    private $new_dep_airport;

    /**
        原出发机场三字代码, 字符长度3
     **/
    private $old_dep_airport;

    /**
        变更到的最新航班号,仅当flightChangeType=2,该参数必填
     **/
    private $new_flt_num;

    /**
        业务类型,0:国内机票 1:国际机票
     **/
    private $biz_type;

    /**
        飞猪机票订单号，如果输入了该参数，平台只会给该指定订单发送航变，如果不输入该参数，则会处理代理商的所有订单；正常的延误航变该参数一般不需要，如果是航班保护，大部分情况该参数应该都是必填的，因为航班保护基本每个订单保护的新航班可能都不一样。
     **/
    private $order_id;

    /**
        最新到达时间
     **/
    private $new_arr_time_str;


    public function getNewArrAirport() : string{
        return $this->new_arr_airport;
    }

    public function setNewArrAirport(string $newArrAirport){
        $this->new_arr_airport = $newArrAirport;
    }

    public function getOldArrAirport() : string{
        return $this->old_arr_airport;
    }

    public function setOldArrAirport(string $oldArrAirport){
        $this->old_arr_airport = $oldArrAirport;
    }

    public function getOldDepTimeStr() : string{
        return $this->old_dep_time_str;
    }

    public function setOldDepTimeStr(string $oldDepTimeStr){
        $this->old_dep_time_str = $oldDepTimeStr;
    }

    public function getFlightChangeType() : int{
        return $this->flight_change_type;
    }

    public function setFlightChangeType(int $flightChangeType){
        $this->flight_change_type = $flightChangeType;
    }

    public function getOldFltNum() : string{
        return $this->old_flt_num;
    }

    public function setOldFltNum(string $oldFltNum){
        $this->old_flt_num = $oldFltNum;
    }

    public function getNewDepTimeStr() : string{
        return $this->new_dep_time_str;
    }

    public function setNewDepTimeStr(string $newDepTimeStr){
        $this->new_dep_time_str = $newDepTimeStr;
    }

    public function getNewDepAirport() : string{
        return $this->new_dep_airport;
    }

    public function setNewDepAirport(string $newDepAirport){
        $this->new_dep_airport = $newDepAirport;
    }

    public function getOldDepAirport() : string{
        return $this->old_dep_airport;
    }

    public function setOldDepAirport(string $oldDepAirport){
        $this->old_dep_airport = $oldDepAirport;
    }

    public function getNewFltNum() : string{
        return $this->new_flt_num;
    }

    public function setNewFltNum(string $newFltNum){
        $this->new_flt_num = $newFltNum;
    }

    public function getBizType() : int{
        return $this->biz_type;
    }

    public function setBizType(int $bizType){
        $this->biz_type = $bizType;
    }

    public function getOrderId() : int{
        return $this->order_id;
    }

    public function setOrderId(int $orderId){
        $this->order_id = $orderId;
    }

    public function getNewArrTimeStr() : string{
        return $this->new_arr_time_str;
    }

    public function setNewArrTimeStr(string $newArrTimeStr){
        $this->new_arr_time_str = $newArrTimeStr;
    }


}

