<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Defaultability\Domain\AlitripPolicyRuleUploadPolicyCreateRequestDto;

class AlitripPolicyRuleUploadRequest {

    /**
        普通政策上传参数
     **/
    private $paramPolicyCreateRequestDTO;


    public function getParamPolicyCreateRequestDTO() : AlitripPolicyRuleUploadPolicyCreateRequestDto{
        return $this->paramPolicyCreateRequestDTO;
    }

    public function setParamPolicyCreateRequestDTO(AlitripPolicyRuleUploadPolicyCreateRequestDto $paramPolicyCreateRequestDTO){
        $this->paramPolicyCreateRequestDTO = $paramPolicyCreateRequestDTO;
    }


    public function getApiName() : string {
        return "alitrip.policy.rule.upload";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->paramPolicyCreateRequestDTO)) {
            $requestParam["param_policy_create_request_d_t_o"] = TopUtil::convertStruct($this->paramPolicyCreateRequestDTO);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

