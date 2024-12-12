<?php
namespace Requiem\Topsdk\Ability365\Request;
use Requiem\Topsdk\TopUtil;

class TaobaoAlitripSellerRefundGetRequest {

    /**
        申请单ID
     **/
    private $applyId;


    public function getApplyId() : int{
        return $this->applyId;
    }

    public function setApplyId(int $applyId){
        $this->applyId = $applyId;
    }


    public function getApiName() : string {
        return "taobao.alitrip.seller.refund.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->applyId)) {
            $requestParam["apply_id"] = TopUtil::convertBasic($this->applyId);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

