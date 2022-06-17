<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class AlitripPolicyRuleUploadPolicyCreateRequestDto {

    /**
        店铺id
     **/
    private $agent_id;

    /**
        删除政策查询参数，execType必须为ADD
     **/
    private $delete_policy;

    /**
        操作类型（增量/全量），ADD上传不会删除历史政策，FULL上传会删除所有历史政策，请谨慎使用
     **/
    private $exec_type;

    /**
        需要导入的政策列表
     **/
    private $policy_list;

    /**
        政策类型：P，普通政策；T，特殊政策；G，规则政策；
     **/
    private $policy_type;

    /**
        行程类型（单程/往返）
     **/
    private $trip_type;


    public function getAgentId() : int{
        return $this->agent_id;
    }

    public function setAgentId(int $agentId){
        $this->agent_id = $agentId;
    }

    public function getDeletePolicy() : array{
        return $this->delete_policy;
    }

    public function setDeletePolicy(array $deletePolicy){
        $this->delete_policy = $deletePolicy;
    }

    public function getExecType() : string{
        return $this->exec_type;
    }

    public function setExecType(string $execType){
        $this->exec_type = $execType;
    }

    public function getPolicyList() : array{
        return $this->policy_list;
    }

    public function setPolicyList(array $policyList){
        $this->policy_list = $policyList;
    }

    public function getPolicyType() : string{
        return $this->policy_type;
    }

    public function setPolicyType(string $policyType){
        $this->policy_type = $policyType;
    }

    public function getTripType() : int{
        return $this->trip_type;
    }

    public function setTripType(int $tripType){
        $this->trip_type = $tripType;
    }


}

