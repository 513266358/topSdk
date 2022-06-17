<?php
namespace Topsdk\Topapi\Ability3066\Request;
use Topsdk\Topapi\TopUtil;

class AlitripAgentFlightSellTicketingDetailRequest {

    /**
        国内国际标识
     **/
    private $domesticIntl;

    /**
        飞猪订单号
     **/
    private $orderId;


    public function getDomesticIntl() : int{
        return $this->domesticIntl;
    }

    public function setDomesticIntl(int $domesticIntl){
        $this->domesticIntl = $domesticIntl;
    }

    public function getOrderId() : string{
        return $this->orderId;
    }

    public function setOrderId(string $orderId){
        $this->orderId = $orderId;
    }


    public function getApiName() : string {
        return "alitrip.agent.flight.sell.ticketing.detail";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->domesticIntl)) {
            $requestParam["domestic_intl"] = TopUtil::convertBasic($this->domesticIntl);
        }

        if (!TopUtil::checkEmpty($this->orderId)) {
            $requestParam["order_id"] = TopUtil::convertBasic($this->orderId);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

