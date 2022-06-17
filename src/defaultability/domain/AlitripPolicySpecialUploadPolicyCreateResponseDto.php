<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class AlitripPolicySpecialUploadPolicyCreateResponseDto {

    /**
        创建结果
     **/
    private $create_result;

    /**
        删除结果
     **/
    private $delete_result;


    public function getCreateResult() : AlitripPolicySpecialUploadResultDto{
        return $this->create_result;
    }

    public function setCreateResult(AlitripPolicySpecialUploadResultDto $createResult){
        $this->create_result = $createResult;
    }

    public function getDeleteResult() : AlitripPolicySpecialUploadResultDto{
        return $this->delete_result;
    }

    public function setDeleteResult(AlitripPolicySpecialUploadResultDto $deleteResult){
        $this->delete_result = $deleteResult;
    }


}

