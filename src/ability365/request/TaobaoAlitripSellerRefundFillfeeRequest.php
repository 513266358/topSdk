<?php
namespace Topsdk\Topapi\Ability365\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoAlitripSellerRefundFillfeeRequest {

    /**
        申请单ID
     **/
    private $applyId;

    /**
        费对于关系，格式：{apply_fee_id:123,value:费用,金额单位分}
     **/
    private $feePriceMap;

    /**
        改签费用，格式：{detail_id:123,value:费用,金额单位分}
     **/
    private $modifyFee;

    /**
        票价信息，格式：{apply_fee_id：123,value:费用,金额单位分}
     **/
    private $ticketPriceMap;

    /**
        升舱费用，格式：{detail_id:123,value:费用,金额单位分}
     **/
    private $upgradeFee;


    public function getApplyId() : int{
        return $this->applyId;
    }

    public function setApplyId(int $applyId){
        $this->applyId = $applyId;
    }

    public function getFeePriceMap() : array{
        return $this->feePriceMap;
    }

    public function setFeePriceMap(array $feePriceMap){
        $this->feePriceMap = $feePriceMap;
    }

    public function getModifyFee() : array{
        return $this->modifyFee;
    }

    public function setModifyFee(array $modifyFee){
        $this->modifyFee = $modifyFee;
    }

    public function getTicketPriceMap() : array{
        return $this->ticketPriceMap;
    }

    public function setTicketPriceMap(array $ticketPriceMap){
        $this->ticketPriceMap = $ticketPriceMap;
    }

    public function getUpgradeFee() : array{
        return $this->upgradeFee;
    }

    public function setUpgradeFee(array $upgradeFee){
        $this->upgradeFee = $upgradeFee;
    }


    public function getApiName() : string {
        return "taobao.alitrip.seller.refund.fillfee";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->applyId)) {
            $requestParam["apply_id"] = TopUtil::convertBasic($this->applyId);
        }

        if (!TopUtil::checkEmpty($this->feePriceMap)) {
            $requestParam["fee_price_map"] = TopUtil::convertStruct($this->feePriceMap);
        }

        if (!TopUtil::checkEmpty($this->modifyFee)) {
            $requestParam["modify_fee"] = TopUtil::convertStruct($this->modifyFee);
        }

        if (!TopUtil::checkEmpty($this->ticketPriceMap)) {
            $requestParam["ticket_price_map"] = TopUtil::convertStruct($this->ticketPriceMap);
        }

        if (!TopUtil::checkEmpty($this->upgradeFee)) {
            $requestParam["upgrade_fee"] = TopUtil::convertStruct($this->upgradeFee);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

