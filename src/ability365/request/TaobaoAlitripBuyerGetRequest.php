<?php
namespace Topsdk\Topapi\Ability365\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability365\Domain\TaobaoAlitripBuyerGetRequestAxbDo;

class TaobaoAlitripBuyerGetRequest {

    /**
        敏感信息查询请求参数
     **/
    private $requestAxb;


    public function getRequestAxb() : TaobaoAlitripBuyerGetRequestAxbDo{
        return $this->requestAxb;
    }

    public function setRequestAxb(TaobaoAlitripBuyerGetRequestAxbDo $requestAxb){
        $this->requestAxb = $requestAxb;
    }


    public function getApiName() : string {
        return "taobao.alitrip.buyer.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->requestAxb)) {
            $requestParam["request_axb"] = TopUtil::convertStruct($this->requestAxb);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

