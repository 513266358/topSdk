<?php
namespace Topsdk\Topapi\Ability364\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability364\Domain\TaobaoAlitripFlightchangeAddFlightChangeDataDO;

class TaobaoAlitripFlightchangeAddRequest {

    /**
        录入参数类
     **/
    private $flightChangeDataDo;


    public function getFlightChangeDataDo() : TaobaoAlitripFlightchangeAddFlightChangeDataDO{
        return $this->flightChangeDataDo;
    }

    public function setFlightChangeDataDo(TaobaoAlitripFlightchangeAddFlightChangeDataDO $flightChangeDataDo){
        $this->flightChangeDataDo = $flightChangeDataDo;
    }


    public function getApiName() : string {
        return "taobao.alitrip.flightchange.add";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->flightChangeDataDo)) {
            $requestParam["flight_change_data_do"] = TopUtil::convertStruct($this->flightChangeDataDo);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

