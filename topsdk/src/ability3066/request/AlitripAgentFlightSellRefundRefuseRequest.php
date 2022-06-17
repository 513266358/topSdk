<?php
namespace Topsdk\Topapi\Ability3066\Request;
use Topsdk\Topapi\TopUtil;

class AlitripAgentFlightSellRefundRefuseRequest {

    /**
        申请单号
     **/
    private $applyId;

    /**
        国内国际标识:1:国内,2:国际
     **/
    private $domesticIntl;

    /**
        拒绝原因
     **/
    private $refuseReason;


    public function getApplyId() : string{
        return $this->applyId;
    }

    public function setApplyId(string $applyId){
        $this->applyId = $applyId;
    }

    public function getDomesticIntl() : int{
        return $this->domesticIntl;
    }

    public function setDomesticIntl(int $domesticIntl){
        $this->domesticIntl = $domesticIntl;
    }

    public function getRefuseReason() : string{
        return $this->refuseReason;
    }

    public function setRefuseReason(string $refuseReason){
        $this->refuseReason = $refuseReason;
    }


    public function getApiName() : string {
        return "alitrip.agent.flight.sell.refund.refuse";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->applyId)) {
            $requestParam["apply_id"] = TopUtil::convertBasic($this->applyId);
        }

        if (!TopUtil::checkEmpty($this->domesticIntl)) {
            $requestParam["domestic_intl"] = TopUtil::convertBasic($this->domesticIntl);
        }

        if (!TopUtil::checkEmpty($this->refuseReason)) {
            $requestParam["refuse_reason"] = TopUtil::convertBasic($this->refuseReason);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

