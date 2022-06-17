<?php
namespace Topsdk\Topapi\Ability3066\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability3066\Domain\AlitripAgentFlightSellModifyListModifyListRequestDto;

class AlitripAgentFlightSellModifyListRequest {

    /**
        入参
     **/
    private $param;


    public function getParam() : AlitripAgentFlightSellModifyListModifyListRequestDto{
        return $this->param;
    }

    public function setParam(AlitripAgentFlightSellModifyListModifyListRequestDto $param){
        $this->param = $param;
    }


    public function getApiName() : string {
        return "alitrip.agent.flight.sell.modify.list";
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

