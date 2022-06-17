<?php
namespace Topsdk\Topapi\Ability3066\Domain;

class AlitripAgentFlightSellRefundListRefundListRequestDto {

    /**
        退票申请起始时间
     **/
    private $end_apply_time;

    /**
        退票申请结束时间(提交申请结束时间，限制只能与起始时间相差一天)
     **/
    private $begin_apply_time;

    /**
        页码
     **/
    private $page;

    /**
        退票单状态:1:待回填费用,2:待退款,3:退款中,4:已完成,5:已拒绝
     **/
    private $status;

    /**
        店铺id集合
     **/
    private $agent_ids;


    public function getEndApplyTime() : string{
        return $this->end_apply_time;
    }

    public function setEndApplyTime(string $endApplyTime){
        $this->end_apply_time = $endApplyTime;
    }

    public function getBeginApplyTime() : string{
        return $this->begin_apply_time;
    }

    public function setBeginApplyTime(string $beginApplyTime){
        $this->begin_apply_time = $beginApplyTime;
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

    public function getAgentIds() : array{
        return $this->agent_ids;
    }

    public function setAgentIds(array $agentIds){
        $this->agent_ids = $agentIds;
    }


}

