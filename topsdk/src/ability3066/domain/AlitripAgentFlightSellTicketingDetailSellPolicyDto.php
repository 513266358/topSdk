<?php
namespace Topsdk\Topapi\Ability3066\Domain;

class AlitripAgentFlightSellTicketingDetailSellPolicyDto {

    /**
        政策ID
     **/
    private $policy_id;

    /**
        销售政策备注
     **/
    private $remark;

    /**
        政策代码-新后台使用字段
     **/
    private $policy_code;

    /**
        机票政策类型：0，默认；1，自定义
     **/
    private $policy_type;

    /**
        销售方式：1-3 机+X，4-5返现
     **/
    private $sale_mode_code;

    /**
        政策备注
     **/
    private $memo;

    /**
        政策代码-老后台单子使用
     **/
    private $out_id;


    public function getPolicyId() : string{
        return $this->policy_id;
    }

    public function setPolicyId(string $policyId){
        $this->policy_id = $policyId;
    }

    public function getRemark() : string{
        return $this->remark;
    }

    public function setRemark(string $remark){
        $this->remark = $remark;
    }

    public function getPolicyCode() : string{
        return $this->policy_code;
    }

    public function setPolicyCode(string $policyCode){
        $this->policy_code = $policyCode;
    }

    public function getPolicyType() : int{
        return $this->policy_type;
    }

    public function setPolicyType(int $policyType){
        $this->policy_type = $policyType;
    }

    public function getSaleModeCode() : int{
        return $this->sale_mode_code;
    }

    public function setSaleModeCode(int $saleModeCode){
        $this->sale_mode_code = $saleModeCode;
    }

    public function getMemo() : string{
        return $this->memo;
    }

    public function setMemo(string $memo){
        $this->memo = $memo;
    }

    public function getOutId() : string{
        return $this->out_id;
    }

    public function setOutId(string $outId){
        $this->out_id = $outId;
    }


}

