<?php
namespace Topsdk\Topapi\Ability364;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Ability364\Request\TaobaoAlitripFlightchangeAddRequest;
use Topsdk\Topapi\Ability364\Request\TaobaoAlitripFlightchangeGetRequest;

class Ability364 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        航变信息录入接口
    **/
    public function taobaoAlitripFlightchangeAdd(TaobaoAlitripFlightchangeAddRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.alitrip.flightchange.add", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取航变信息
    **/
    public function taobaoAlitripFlightchangeGet(TaobaoAlitripFlightchangeGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.alitrip.flightchange.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
}