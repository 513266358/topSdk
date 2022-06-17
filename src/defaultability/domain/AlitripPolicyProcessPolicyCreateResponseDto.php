<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class AlitripPolicyProcessPolicyCreateResponseDto {

    /**
        政策进度类型
     **/
    private $policy_process_type;

    /**
        修改日期
     **/
    private $gmt_modified;

    /**
        店铺id
     **/
    private $agent_id;

    /**
        创建日期
     **/
    private $gmt_create;

    /**
        成功数量
     **/
    private $success_amount;

    /**
        操作人id
     **/
    private $agent_sub_id;

    /**
        操作人昵称
     **/
    private $agent_sub_nick;

    /**
        错误信息
     **/
    private $error_policy_list;

    /**
        失败excel的地址
     **/
    private $url;

    /**
        总数量
     **/
    private $total_amount;

    /**
        政策类型
     **/
    private $policy_type;

    /**
        失败数量
     **/
    private $fail_amount;

    /**
        属性信息
     **/
    private $attributes;

    /**
        任务状态：0，未开始；1，执行中；2，上传执行完成；3，删除执行完成；4，任务执行完成
     **/
    private $task_status;

    /**
        任务id
     **/
    private $task_id;


    public function getPolicyProcessType() : int{
        return $this->policy_process_type;
    }

    public function setPolicyProcessType(int $policyProcessType){
        $this->policy_process_type = $policyProcessType;
    }

    public function getGmtModified() : string{
        return $this->gmt_modified;
    }

    public function setGmtModified(string $gmtModified){
        $this->gmt_modified = $gmtModified;
    }

    public function getAgentId() : int{
        return $this->agent_id;
    }

    public function setAgentId(int $agentId){
        $this->agent_id = $agentId;
    }

    public function getGmtCreate() : string{
        return $this->gmt_create;
    }

    public function setGmtCreate(string $gmtCreate){
        $this->gmt_create = $gmtCreate;
    }

    public function getSuccessAmount() : int{
        return $this->success_amount;
    }

    public function setSuccessAmount(int $successAmount){
        $this->success_amount = $successAmount;
    }

    public function getAgentSubId() : int{
        return $this->agent_sub_id;
    }

    public function setAgentSubId(int $agentSubId){
        $this->agent_sub_id = $agentSubId;
    }

    public function getAgentSubNick() : string{
        return $this->agent_sub_nick;
    }

    public function setAgentSubNick(string $agentSubNick){
        $this->agent_sub_nick = $agentSubNick;
    }

    public function getErrorPolicyList() : array{
        return $this->error_policy_list;
    }

    public function setErrorPolicyList(array $errorPolicyList){
        $this->error_policy_list = $errorPolicyList;
    }

    public function getUrl() : string{
        return $this->url;
    }

    public function setUrl(string $url){
        $this->url = $url;
    }

    public function getTotalAmount() : int{
        return $this->total_amount;
    }

    public function setTotalAmount(int $totalAmount){
        $this->total_amount = $totalAmount;
    }

    public function getPolicyType() : int{
        return $this->policy_type;
    }

    public function setPolicyType(int $policyType){
        $this->policy_type = $policyType;
    }

    public function getFailAmount() : int{
        return $this->fail_amount;
    }

    public function setFailAmount(int $failAmount){
        $this->fail_amount = $failAmount;
    }

    public function getAttributes() : string{
        return $this->attributes;
    }

    public function setAttributes(string $attributes){
        $this->attributes = $attributes;
    }

    public function getTaskStatus() : int{
        return $this->task_status;
    }

    public function setTaskStatus(int $taskStatus){
        $this->task_status = $taskStatus;
    }

    public function getTaskId() : int{
        return $this->task_id;
    }

    public function setTaskId(int $taskId){
        $this->task_id = $taskId;
    }


}

