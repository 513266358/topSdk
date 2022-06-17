<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class AlitripPolicyDomfareFlowdataCompareFlowDataReponseDTO {

    /**
        店铺id
     **/
    private $agent_id;

    /**
        当日已使用量
     **/
    private $current_amount;

    /**
        当日分配给商家的总调用量
     **/
    private $total_limit;


    public function getAgentId() : int{
        return $this->agent_id;
    }

    public function setAgentId(int $agentId){
        $this->agent_id = $agentId;
    }

    public function getCurrentAmount() : int{
        return $this->current_amount;
    }

    public function setCurrentAmount(int $currentAmount){
        $this->current_amount = $currentAmount;
    }

    public function getTotalLimit() : int{
        return $this->total_limit;
    }

    public function setTotalLimit(int $totalLimit){
        $this->total_limit = $totalLimit;
    }


}

