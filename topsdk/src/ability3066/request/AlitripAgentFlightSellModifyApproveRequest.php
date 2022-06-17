<?php
namespace Topsdk\Topapi\Ability3066\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability3066\Domain\AlitripAgentFlightSellModifyApproveModifyApproveRequestDto;

class AlitripAgentFlightSellModifyApproveRequest {

    /**
        入参对象
     **/
    private $param;


    public function getParam() : AlitripAgentFlightSellModifyApproveModifyApproveRequestDto{
        return $this->param;
    }

    public function setParam(AlitripAgentFlightSellModifyApproveModifyApproveRequestDto $param){
        $this->param = $param;
    }


    public function getApiName() : string {
        return "alitrip.agent.flight.sell.modify.approve";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->param)) {
            $requestParam["param"] = TopUtil::convertStruct($this->param);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

