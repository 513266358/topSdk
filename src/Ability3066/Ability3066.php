<?php
namespace Requiem\Topsdk\Ability3066;

use Requiem\Topsdk\TopApiClient;
use Requiem\Topsdk\Ability3066\Request\AlitripAgentFlightSellRefundListRequest;
use Requiem\Topsdk\Ability3066\Request\AlitripAgentFlightSellModifyBackfillRequest;
use Requiem\Topsdk\Ability3066\Request\AlitripAgentFlightSellModifyListRequest;
use Requiem\Topsdk\Ability3066\Request\AlitripAgentFlightSellTicketingListRequest;
use Requiem\Topsdk\Ability3066\Request\AlitripAgentFlightSellTicketingDetailRequest;
use Requiem\Topsdk\Ability3066\Request\AlitripAgentFlightSellTicketingIssueRequest;
use Requiem\Topsdk\Ability3066\Request\AlitripAgentFlightSellModifyRefuseRequest;
use Requiem\Topsdk\Ability3066\Request\AlitripAgentFlightSellRefundDetailRequest;
use Requiem\Topsdk\Ability3066\Request\AlitripAgentFlightSellModifyApproveRequest;
use Requiem\Topsdk\Ability3066\Request\AlitripAgentFlightSellModifyDetailRequest;
use Requiem\Topsdk\Ability3066\Request\AlitripAgentFlightSellRefundRefuseRequest;
use Requiem\Topsdk\Ability3066\Request\AlitripAgentFlightSellRefundApproveRequest;

class Ability3066 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        销售退票单列表
    **/
    public function alitripAgentFlightSellRefundList(AlitripAgentFlightSellRefundListRequest $request,string $session) {
        return $this->client->executeWithSession("alitrip.agent.flight.sell.refund.list", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        销售改签回填
    **/
    public function alitripAgentFlightSellModifyBackfill(AlitripAgentFlightSellModifyBackfillRequest $request,string $session) {
        return $this->client->executeWithSession("alitrip.agent.flight.sell.modify.backfill", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        销售改签单列表
    **/
    public function alitripAgentFlightSellModifyList(AlitripAgentFlightSellModifyListRequest $request,string $session) {
        return $this->client->executeWithSession("alitrip.agent.flight.sell.modify.list", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        销售出票列表
    **/
    public function alitripAgentFlightSellTicketingList(AlitripAgentFlightSellTicketingListRequest $request,string $session) {
        return $this->client->executeWithSession("alitrip.agent.flight.sell.ticketing.list", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        销售出票详情
    **/
    public function alitripAgentFlightSellTicketingDetail(AlitripAgentFlightSellTicketingDetailRequest $request,string $session) {
        return $this->client->executeWithSession("alitrip.agent.flight.sell.ticketing.detail", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        销售出票
    **/
    public function alitripAgentFlightSellTicketingIssue(AlitripAgentFlightSellTicketingIssueRequest $request,string $session) {
        return $this->client->executeWithSession("alitrip.agent.flight.sell.ticketing.issue", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        销售改签拒绝
    **/
    public function alitripAgentFlightSellModifyRefuse(AlitripAgentFlightSellModifyRefuseRequest $request,string $session) {
        return $this->client->executeWithSession("alitrip.agent.flight.sell.modify.refuse", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        销售退票单详情
    **/
    public function alitripAgentFlightSellRefundDetail(AlitripAgentFlightSellRefundDetailRequest $request,string $session) {
        return $this->client->executeWithSession("alitrip.agent.flight.sell.refund.detail", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        销售改签确认
    **/
    public function alitripAgentFlightSellModifyApprove(AlitripAgentFlightSellModifyApproveRequest $request,string $session) {
        return $this->client->executeWithSession("alitrip.agent.flight.sell.modify.approve", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        销售改签详情
    **/
    public function alitripAgentFlightSellModifyDetail(AlitripAgentFlightSellModifyDetailRequest $request,string $session) {
        return $this->client->executeWithSession("alitrip.agent.flight.sell.modify.detail", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        销售退票拒绝
    **/
    public function alitripAgentFlightSellRefundRefuse(AlitripAgentFlightSellRefundRefuseRequest $request,string $session) {
        return $this->client->executeWithSession("alitrip.agent.flight.sell.refund.refuse", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        销售退票确认
    **/
    public function alitripAgentFlightSellRefundApprove(AlitripAgentFlightSellRefundApproveRequest $request,string $session) {
        return $this->client->executeWithSession("alitrip.agent.flight.sell.refund.approve", $request->toMap(), $request->toFileParamMap(), $session);
    }
}