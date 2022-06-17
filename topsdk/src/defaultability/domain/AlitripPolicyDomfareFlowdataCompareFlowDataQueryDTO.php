<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class AlitripPolicyDomfareFlowdataCompareFlowDataQueryDTO {

    /**
        店铺id
     **/
    private $agent_id;


    public function getAgentId() : int{
        return $this->agent_id;
    }

    public function setAgentId(int $agentId){
        $this->agent_id = $agentId;
    }


}

