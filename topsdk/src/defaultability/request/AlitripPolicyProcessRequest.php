<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Defaultability\Domain\AlitripPolicyProcessPolicyTaskQueryDto;

class AlitripPolicyProcessRequest {

    /**
        进度请求入参
     **/
    private $policyTaskQueryDTO;


    public function getPolicyTaskQueryDTO() : AlitripPolicyProcessPolicyTaskQueryDto{
        return $this->policyTaskQueryDTO;
    }

    public function setPolicyTaskQueryDTO(AlitripPolicyProcessPolicyTaskQueryDto $policyTaskQueryDTO){
        $this->policyTaskQueryDTO = $policyTaskQueryDTO;
    }


    public function getApiName() : string {
        return "alitrip.policy.process";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->policyTaskQueryDTO)) {
            $requestParam["policy_task_query_d_t_o"] = TopUtil::convertStruct($this->policyTaskQueryDTO);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

