<?php
namespace Topsdk\Topapi\Ability365\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoAlitripSellerRefundConfirmreturnRequest {

    /**
        退票申请单
     **/
    private $applyId;


    public function getApplyId() : int{
        return $this->applyId;
    }

    public function setApplyId(int $applyId){
        $this->applyId = $applyId;
    }


    public function getApiName() : string {
        return "taobao.alitrip.seller.refund.confirmreturn";
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

