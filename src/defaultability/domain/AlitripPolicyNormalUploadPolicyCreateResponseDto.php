<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class AlitripPolicyNormalUploadPolicyCreateResponseDto {

    /**
        创建结果
     **/
    private $create_result;

    /**
        删除结果
     **/
    private $delete_result;


    public function getCreateResult() : AlitripPolicyNormalUploadResultDto{
        return $this->create_result;
    }

    public function setCreateResult(AlitripPolicyNormalUploadResultDto $createResult){
        $this->create_result = $createResult;
    }

    public function getDeleteResult() : AlitripPolicyNormalUploadResultDto{
        return $this->delete_result;
    }

    public function setDeleteResult(AlitripPolicyNormalUploadResultDto $deleteResult){
        $this->delete_result = $deleteResult;
    }


}

