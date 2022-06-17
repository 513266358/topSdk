<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class AlitripPolicyProcessPolicyTaskQueryDto {

    /**
        店铺id
     **/
    private $agent_id;

    /**
        任务id
     **/
    private $task_id;


    public function getAgentId() : int{
        return $this->agent_id;
    }

    public function setAgentId(int $agentId){
        $this->agent_id = $agentId;
    }

    public function getTaskId() : int{
        return $this->task_id;
    }

    public function setTaskId(int $taskId){
        $this->task_id = $taskId;
    }


}

