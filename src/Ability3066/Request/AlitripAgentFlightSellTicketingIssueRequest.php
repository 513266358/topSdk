<?php
namespace Requiem\Topsdk\Ability3066\Request;
use Requiem\Topsdk\TopUtil;
use Requiem\Topsdk\Ability3066\Domain\AlitripAgentFlightSellTicketingIssueTicketingIssueRequestDto;

class AlitripAgentFlightSellTicketingIssueRequest {

    /**
        入参对象
     **/
    private $param;


    public function getParam() : AlitripAgentFlightSellTicketingIssueTicketingIssueRequestDto{
        return $this->param;
    }

    public function setParam(AlitripAgentFlightSellTicketingIssueTicketingIssueRequestDto $param){
        $this->param = $param;
    }


    public function getApiName() : string {
        return "alitrip.agent.flight.sell.ticketing.issue";
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

