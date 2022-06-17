<?php
namespace Topsdk\Topapi\Ability3066\Domain;

class AlitripAgentFlightSellModifyListModifyListRequestDto {

    /**
        店铺id
     **/
    private $agent_ids;

    /**
        申请结束时间(提交申请结束时间，限制只能与起始时间相差一天)
     **/
    private $end_apply_time;

    /**
        申请开始时间
     **/
    private $begin_apply_time;

    /**
        页码
     **/
    private $page;

    /**
        改签单状态:1:待回填费用或行程,2:待用户支付,3:待出票,4:已完成,5:已拒绝
     **/
    private $status;


    public function getAgentIds() : array{
        return $this->agent_ids;
    }

    public function setAgentIds(array $agentIds){
        $this->agent_ids = $agentIds;
    }

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


}

