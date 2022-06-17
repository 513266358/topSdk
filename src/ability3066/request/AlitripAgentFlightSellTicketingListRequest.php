<?php
namespace Topsdk\Topapi\Ability3066\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability3066\Domain\AlitripAgentFlightSellTicketingListTicketingListRequestDto;

class AlitripAgentFlightSellTicketingListRequest {

    /**
        入参对象
     **/
    private $param;


    public function getParam() : AlitripAgentFlightSellTicketingListTicketingListRequestDto{
        return $this->param;
    }

    public function setParam(AlitripAgentFlightSellTicketingListTicketingListRequestDto $param){
        $this->param = $param;
    }


    public function getApiName() : string {
        return "alitrip.agent.flight.sell.ticketing.list";
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

