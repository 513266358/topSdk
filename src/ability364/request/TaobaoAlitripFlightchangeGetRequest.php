<?php
namespace Topsdk\Topapi\Ability364\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability364\Domain\TaobaoAlitripFlightchangeGetFlightChangeDataQueryOption;

class TaobaoAlitripFlightchangeGetRequest {

    /**
        查询信息封装
     **/
    private $searchOption;


    public function getSearchOption() : TaobaoAlitripFlightchangeGetFlightChangeDataQueryOption{
        return $this->searchOption;
    }

    public function setSearchOption(TaobaoAlitripFlightchangeGetFlightChangeDataQueryOption $searchOption){
        $this->searchOption = $searchOption;
    }


    public function getApiName() : string {
        return "taobao.alitrip.flightchange.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->searchOption)) {
            $requestParam["search_option"] = TopUtil::convertStruct($this->searchOption);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

