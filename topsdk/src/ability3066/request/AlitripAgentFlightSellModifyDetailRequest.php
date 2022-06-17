<?php
namespace Topsdk\Topapi\Ability3066\Request;
use Topsdk\Topapi\TopUtil;

class AlitripAgentFlightSellModifyDetailRequest {

    /**
        申请单号
     **/
    private $applyId;

    /**
        国内国际标识:1:国内,2:国际
     **/
    private $domesticIntl;


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


    public function getApiName() : string {
        return "alitrip.agent.flight.sell.modify.detail";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->applyId)) {
            $requestParam["apply_id"] = TopUtil::convertBasic($this->applyId);
        }

        if (!TopUtil::checkEmpty($this->domesticIntl)) {
            $requestParam["domestic_intl"] = TopUtil::convertBasic($this->domesticIntl);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

