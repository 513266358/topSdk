<?php
namespace Topsdk\Topapi\Ability365\Domain;

class TaobaoAlitripSupplierModifyListBbSyncOrderDto {

    /**
        申请单id
     **/
    private $apply_id;

    /**
        改签后舱位
     **/
    private $cabin;

    /**
        改签前舱位
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
        乘机人信息
     **/
    private $passenger;

    /**
        改签前PNR编码
     **/
    private $pnr;

    /**
        改签前票号
     **/
    private $ticket_no;


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

    public function getModifyAfterFlight() : TaobaoAlitripSupplierModifyListFlight{
        return $this->modify_after_flight;
    }

    public function setModifyAfterFlight(TaobaoAlitripSupplierModifyListFlight $modifyAfterFlight){
        $this->modify_after_flight = $modifyAfterFlight;
    }

    public function getModifyBeforeFlight() : TaobaoAlitripSupplierModifyListFlight{
        return $this->modify_before_flight;
    }

    public function setModifyBeforeFlight(TaobaoAlitripSupplierModifyListFlight $modifyBeforeFlight){
        $this->modify_before_flight = $modifyBeforeFlight;
    }

    public function getPassenger() : TaobaoAlitripSupplierModifyListPassenger{
        return $this->passenger;
    }

    public function setPassenger(TaobaoAlitripSupplierModifyListPassenger $passenger){
        $this->passenger = $passenger;
    }

    public function getPnr() : string{
        return $this->pnr;
    }

    public function setPnr(string $pnr){
        $this->pnr = $pnr;
    }

    public function getTicketNo() : string{
        return $this->ticket_no;
    }

    public function setTicketNo(string $ticketNo){
        $this->ticket_no = $ticketNo;
    }


}

