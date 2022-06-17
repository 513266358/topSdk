<?php
namespace Topsdk\Topapi\Ability365;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Ability365\Request\TaobaoAlitripSellerRefundorderlistFetchRequest;
use Topsdk\Topapi\Ability365\Request\TaobaoAlitripSellerRefundmoneyConfirmRequest;
use Topsdk\Topapi\Ability365\Request\TaobaoAlitripBuyerGetRequest;
use Topsdk\Topapi\Ability365\Request\TaobaoAlitripSellerRefundConfirmreturnRequest;
use Topsdk\Topapi\Ability365\Request\TaobaoAlitripSellerRefundGetRequest;
use Topsdk\Topapi\Ability365\Request\TaobaoAlitripSellerRefundFillfeeRequest;
use Topsdk\Topapi\Ability365\Request\TaobaoJipiaoAgentOrderTicketRequest;
use Topsdk\Topapi\Ability365\Request\TaobaoAlitripSellerRefundRefusereturnRequest;
use Topsdk\Topapi\Ability365\Request\TaobaoAlitripSellerRefundSearchRequest;
use Topsdk\Topapi\Ability365\Request\TaobaoAlitripSellerModifyListRequest;
use Topsdk\Topapi\Ability365\Request\TaobaoAlitripSupplierModifyListRequest;
use Topsdk\Topapi\Ability365\Request\TaobaoAlitripSellerOrderConfirmRequest;

class Ability365 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        【机票代理商】——退票订单列表提取
    **/
    public function taobaoAlitripSellerRefundorderlistFetch(TaobaoAlitripSellerRefundorderlistFetchRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.alitrip.seller.refundorderlist.fetch", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        【机票代理商订单】确认退款
    **/
    public function taobaoAlitripSellerRefundmoneyConfirm(TaobaoAlitripSellerRefundmoneyConfirmRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.alitrip.seller.refundmoney.confirm", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        敏感信息查询
    **/
    public function taobaoAlitripBuyerGet(TaobaoAlitripBuyerGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.alitrip.buyer.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        【机票代理商】确认退票
    **/
    public function taobaoAlitripSellerRefundConfirmreturn(TaobaoAlitripSellerRefundConfirmreturnRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.alitrip.seller.refund.confirmreturn", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        【机票代理商】退票申请单详情
    **/
    public function taobaoAlitripSellerRefundGet(TaobaoAlitripSellerRefundGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.alitrip.seller.refund.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        机票代理商】回填手续费
    **/
    public function taobaoAlitripSellerRefundFillfee(TaobaoAlitripSellerRefundFillfeeRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.alitrip.seller.refund.fillfee", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        【机票代理商订单】订单回填票号/成功订单
    **/
    public function taobaoJipiaoAgentOrderTicket(TaobaoJipiaoAgentOrderTicketRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.jipiao.agent.order.ticket", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        【机票代理商】拒绝退票
    **/
    public function taobaoAlitripSellerRefundRefusereturn(TaobaoAlitripSellerRefundRefusereturnRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.alitrip.seller.refund.refusereturn", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        【机票代理商】退票申请单列表
    **/
    public function taobaoAlitripSellerRefundSearch(TaobaoAlitripSellerRefundSearchRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.alitrip.seller.refund.search", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        【机票代理商订单】改签订单列表
    **/
    public function taobaoAlitripSellerModifyList(TaobaoAlitripSellerModifyListRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.alitrip.seller.modify.list", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        【机票代理商订单】改签通知单列表
    **/
    public function taobaoAlitripSupplierModifyList(TaobaoAlitripSupplierModifyListRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.alitrip.supplier.modify.list", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        代理商确认机票订单接口
    **/
    public function taobaoAlitripSellerOrderConfirm(TaobaoAlitripSellerOrderConfirmRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.alitrip.seller.order.confirm", $request->toMap(), $request->toFileParamMap(), $session);
    }
}