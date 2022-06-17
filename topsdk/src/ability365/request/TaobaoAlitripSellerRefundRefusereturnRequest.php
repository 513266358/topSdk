<?php
namespace Topsdk\Topapi\Ability365\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoAlitripSellerRefundRefusereturnRequest {

    /**
        申请单ID
     **/
    private $applyId;

    /**
        拒绝理由
     **/
    private $reason;


    public function getApplyId() : int{
        return $this->applyId;
    }

    public function setApplyId(int $applyId){
        $this->applyId = $applyId;
    }

    public function getReason() : string{
        return $this->reason;
    }

    public function setReason(string $reason){
        $this->reason = $reason;
    }


    public function getApiName() : string {
        return "taobao.alitrip.seller.refund.refusereturn";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->applyId)) {
            $requestParam["apply_id"] = TopUtil::convertBasic($this->applyId);
        }

        if (!TopUtil::checkEmpty($this->reason)) {
            $requestParam["reason"] = TopUtil::convertBasic($this->reason);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

