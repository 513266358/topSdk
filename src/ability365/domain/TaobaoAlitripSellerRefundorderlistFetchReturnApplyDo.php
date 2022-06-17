<?php
namespace Topsdk\Topapi\Ability365\Domain;

class TaobaoAlitripSellerRefundorderlistFetchReturnApplyDo {

    /**
        航线二字码
     **/
    private $airline_code;

    /**
        退票提交时间
     **/
    private $apply_time;

    /**
        到达机场三字码
     **/
    private $arr_airport_code;

    /**
        舱位
     **/
    private $cabin;

    /**
        出发机场三字码
     **/
    private $dep_airport_code;

    /**
        到达时间
     **/
    private $dep_time;

    /**
        退票成功时间
     **/
    private $first_process_time;

    /**
        航班号
     **/
    private $flight_no;

    /**
        数据项id
     **/
    private $id;

    /**
        订单号
     **/
    private $order_id;

    /**
        乘机人姓名
     **/
    private $passenger_name;

    /**
        退款成功时间
     **/
    private $pay_success_time;

    /**
        退票手续费（单位：元）
     **/
    private $refund_fee;

    /**
        退款金额（单位：元）
     **/
    private $refund_money;

    /**
        票号
     **/
    private $ticket_no;

    /**
        退票状态，1：初始，2：接受，3：确认，4：失败，5：买家处理，6：卖家处理，7：等待小二回填，8：退款成功
     **/
    private $status;

    /**
        退票原因
     **/
    private $refund_reason;

    /**
        是否自愿
     **/
    private $is_voluntary;


    public function getAirlineCode() : string{
        return $this->airline_code;
    }

    public function setAirlineCode(string $airlineCode){
        $this->airline_code = $airlineCode;
    }

    public function getApplyTime() : string{
        return $this->apply_time;
    }

    public function setApplyTime(string $applyTime){
        $this->apply_time = $applyTime;
    }

    public function getArrAirportCode() : string{
        return $this->arr_airport_code;
    }

    public function setArrAirportCode(string $arrAirportCode){
        $this->arr_airport_code = $arrAirportCode;
    }

    public function getCabin() : string{
        return $this->cabin;
    }

    public function setCabin(string $cabin){
        $this->cabin = $cabin;
    }

    public function getDepAirportCode() : string{
        return $this->dep_airport_code;
    }

    public function setDepAirportCode(string $depAirportCode){
        $this->dep_airport_code = $depAirportCode;
    }

    public function getDepTime() : string{
        return $this->dep_time;
    }

    public function setDepTime(string $depTime){
        $this->dep_time = $depTime;
    }

    public function getFirstProcessTime() : string{
        return $this->first_process_time;
    }

    public function setFirstProcessTime(string $firstProcessTime){
        $this->first_process_time = $firstProcessTime;
    }

    public function getFlightNo() : string{
        return $this->flight_no;
    }

    public function setFlightNo(string $flightNo){
        $this->flight_no = $flightNo;
    }

    public function getId() : int{
        return $this->id;
    }

    public function setId(int $id){
        $this->id = $id;
    }

    public function getOrderId() : int{
        return $this->order_id;
    }

    public function setOrderId(int $orderId){
        $this->order_id = $orderId;
    }

    public function getPassengerName() : string{
        return $this->passenger_name;
    }

    public function setPassengerName(string $passengerName){
        $this->passenger_name = $passengerName;
    }

    public function getPaySuccessTime() : string{
        return $this->pay_success_time;
    }

    public function setPaySuccessTime(string $paySuccessTime){
        $this->pay_success_time = $paySuccessTime;
    }

    public function getRefundFee() : int{
        return $this->refund_fee;
    }

    public function setRefundFee(int $refundFee){
        $this->refund_fee = $refundFee;
    }

    public function getRefundMoney() : int{
        return $this->refund_money;
    }

    public function setRefundMoney(int $refundMoney){
        $this->refund_money = $refundMoney;
    }

    public function getTicketNo() : string{
        return $this->ticket_no;
    }

    public function setTicketNo(string $ticketNo){
        $this->ticket_no = $ticketNo;
    }

    public function getStatus() : int{
        return $this->status;
    }

    public function setStatus(int $status){
        $this->status = $status;
    }

    public function getRefundReason() : string{
        return $this->refund_reason;
    }

    public function setRefundReason(string $refundReason){
        $this->refund_reason = $refundReason;
    }

    public function getIsVoluntary() : bool{
        return $this->is_voluntary;
    }

    public function setIsVoluntary(bool $isVoluntary){
        $this->is_voluntary = $isVoluntary;
    }


}

