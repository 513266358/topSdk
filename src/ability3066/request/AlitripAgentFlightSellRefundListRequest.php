<?php
namespace Requiem\Topsdk\Ability3066\Request;
use Requiem\Topsdk\TopUtil;
use Requiem\Topsdk\Ability3066\Domain\AlitripAgentFlightSellRefundListRefundListRequestDto;

class AlitripAgentFlightSellRefundListRequest {

    /**
        请求对象
     **/
    private $param;


    public function getParam() : AlitripAgentFlightSellRefundListRefundListRequestDto{
        return $this->param;
    }

    public function setParam(AlitripAgentFlightSellRefundListRefundListRequestDto $param){
        $this->param = $param;
    }


    public function getApiName() : string {
        return "alitrip.agent.flight.sell.refund.list";
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

