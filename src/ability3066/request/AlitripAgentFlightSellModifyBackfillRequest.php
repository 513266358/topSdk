<?php
namespace Requiem\Topsdk\Ability3066\Request;
use Requiem\Topsdk\TopUtil;
use Requiem\Topsdk\Ability3066\Domain\AlitripAgentFlightSellModifyBackfillModifyBackFillRequestDto;

class AlitripAgentFlightSellModifyBackfillRequest {

    /**
        入参
     **/
    private $param;


    public function getParam() : AlitripAgentFlightSellModifyBackfillModifyBackFillRequestDto{
        return $this->param;
    }

    public function setParam(AlitripAgentFlightSellModifyBackfillModifyBackFillRequestDto $param){
        $this->param = $param;
    }


    public function getApiName() : string {
        return "alitrip.agent.flight.sell.modify.backfill";
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

