<?php
namespace Topsdk\Topapi\Ability3066\Domain;

class AlitripAgentFlightSellTicketingListTicketingListRequestDto {

    /**
        店铺id
     **/
    private $agent_ids;

    /**
        支付起始时间
     **/
    private $begin_pay_time;

    /**
        支付结束时间(支付结束时间，限制只能与起始时间相差一天)
     **/
    private $end_pay_time;

    /**
        页码
     **/
    private $page;

    /**
        状态码:1:待支付,2:待出票,3:已完成,4:已取消
     **/
    private $status;


    public function getAgentIds() : array{
        return $this->agent_ids;
    }

    public function setAgentIds(array $agentIds){
        $this->agent_ids = $agentIds;
    }

    public function getBeginPayTime() : string{
        return $this->begin_pay_time;
    }

    public function setBeginPayTime(string $beginPayTime){
        $this->begin_pay_time = $beginPayTime;
    }

    public function getEndPayTime() : string{
        return $this->end_pay_time;
    }

    public function setEndPayTime(string $endPayTime){
        $this->end_pay_time = $endPayTime;
    }

    public function getPage() : int{
        return $this->page;
    }

    public function setPage(int $page){
        $this->page = $page;
    }

    public function getStatus() : int{
        return $this->status;
    }

    public function setStatus(int $status){
        $this->status = $status;
    }


}

