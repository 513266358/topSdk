<?php
namespace Topsdk\Topapi\Ability365\Domain;

class TaobaoAlitripSellerModifyListSyncOrderDo {

    /**
        申请单id
     **/
    private $apply_id;

    /**
        改签后的舱位
     **/
    private $cabin;

    /**
        改签前的舱位
     **/
    private $last_cabin;

    /**
        改签备注信息
     **/
    private $memo;

    /**
        改签后航班信息
     **/
    private $modify_after_flight;

    /**
        改签前航班信息
     **/
    private $modify_before_flight;

    /**
        订单id
     **/
    private $order_id;

    /**
        乘客信息
     **/
    private $passenger;

    /**
        改签费(单位分)
     **/
    private $modify_fee;

    /**
        升舱费(单位分)
     **/
    private $upgrade_fee;

    /**
        申请单状态。1：初始状态，2：已改签成功，3：已拒绝，4：未付款（已回填退票费），5：已付款
     **/
    private $status;


    public function getApplyId() : int{
        return $this->apply_id;
    }

    public function setApplyId(int $applyId){
        $this->apply_id = $applyId;
    }

    public function getCabin() : string{
        return $this->cabin;
    }

    public function setCabin(string $cabin){
        $this->cabin = $cabin;
    }

    public function getLastCabin() : string{
        return $this->last_cabin;
    }

    public function setLastCabin(string $lastCabin){
        $this->last_cabin = $lastCabin;
    }

    public function getMemo() : string{
        return $this->memo;
    }

    public function setMemo(string $memo){
        $this->memo = $memo;
    }

    public function getModifyAfterFlight() : TaobaoAlitripSellerModifyListFlight{
        return $this->modify_after_flight;
    }

    public function setModifyAfterFlight(TaobaoAlitripSellerModifyListFlight $modifyAfterFlight){
        $this->modify_after_flight = $modifyAfterFlight;
    }

    public function getModifyBeforeFlight() : TaobaoAlitripSellerModifyListFlight{
        return $this->modify_before_flight;
    }

    public function setModifyBeforeFlight(TaobaoAlitripSellerModifyListFlight $modifyBeforeFlight){
        $this->modify_before_flight = $modifyBeforeFlight;
    }

    public function getOrderId() : int{
        return $this->order_id;
    }

    public function setOrderId(int $orderId){
        $this->order_id = $orderId;
    }

    public function getPassenger() : TaobaoAlitripSellerModifyListPassenger{
        return $this->passenger;
    }

    public function setPassenger(TaobaoAlitripSellerModifyListPassenger $passenger){
        $this->passenger = $passenger;
    }

    public function getModifyFee() : int{
        return $this->modify_fee;
    }

    public function setModifyFee(int $modifyFee){
        $this->modify_fee = $modifyFee;
    }

    public function getUpgradeFee() : int{
        return $this->upgrade_fee;
    }

    public function setUpgradeFee(int $upgradeFee){
        $this->upgrade_fee = $upgradeFee;
    }

    public function getStatus() : int{
        return $this->status;
    }

    public function setStatus(int $status){
        $this->status = $status;
    }


}

