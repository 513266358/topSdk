<?php
namespace Topsdk\Topapi\Ability365\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability365\Domain\TaobaoAlitripSellerOrderConfirmTripConfirmOrderParam;

class TaobaoAlitripSellerOrderConfirmRequest {

    /**
        请求参数
     **/
    private $tripConfirmOrderParam;


    public function getTripConfirmOrderParam() : TaobaoAlitripSellerOrderConfirmTripConfirmOrderParam{
        return $this->tripConfirmOrderParam;
    }

    public function setTripConfirmOrderParam(TaobaoAlitripSellerOrderConfirmTripConfirmOrderParam $tripConfirmOrderParam){
        $this->tripConfirmOrderParam = $tripConfirmOrderParam;
    }


    public function getApiName() : string {
        return "taobao.alitrip.seller.order.confirm";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->tripConfirmOrderParam)) {
            $requestParam["trip_confirm_order_param"] = TopUtil::convertStruct($this->tripConfirmOrderParam);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

