<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class AlitripPolicyRuleUploadPolicyCreateResponseDto {

    /**
        创建结果
     **/
    private $create_result;

    /**
        删除结果
     **/
    private $delete_result;


    public function getCreateResult() : AlitripPolicyRuleUploadResultDto{
        return $this->create_result;
    }

    public function setCreateResult(AlitripPolicyRuleUploadResultDto $createResult){
        $this->create_result = $createResult;
    }

    public function getDeleteResult() : AlitripPolicyRuleUploadResultDto{
        return $this->delete_result;
    }

    public function setDeleteResult(AlitripPolicyRuleUploadResultDto $deleteResult){
        $this->delete_result = $deleteResult;
    }


}

