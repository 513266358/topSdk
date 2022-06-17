<?php
namespace Topsdk\Topapi\Ability3066\Domain;

class AlitripAgentFlightSellTicketingIssueTicketingIssueRequestDto {

    /**
        国内国际标识:1:国内,2:国际
     **/
    private $domestic_intl;

    /**
        飞猪订单号
     **/
    private $order_id;

    /**
        出票信息
     **/
    private $issue_list;


    public function getDomesticIntl() : int{
        return $this->domestic_intl;
    }

    public function setDomesticIntl(int $domesticIntl){
        $this->domestic_intl = $domesticIntl;
    }

    public function getOrderId() : string{
        return $this->order_id;
    }

    public function setOrderId(string $orderId){
        $this->order_id = $orderId;
    }

    public function getIssueList() : array{
        return $this->issue_list;
    }

    public function setIssueList(array $issueList){
        $this->issue_list = $issueList;
    }


}

