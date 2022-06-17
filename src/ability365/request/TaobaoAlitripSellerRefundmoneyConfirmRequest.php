<?php
namespace Topsdk\Topapi\Ability365\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoAlitripSellerRefundmoneyConfirmRequest {

    /**
        申请单id
     **/
    private $applyId;


    public function getApplyId() : int{
        return $this->applyId;
    }

    public function setApplyId(int $applyId){
        $this->applyId = $applyId;
    }


    public function getApiName() : string {
        return "taobao.alitrip.seller.refundmoney.confirm";
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

