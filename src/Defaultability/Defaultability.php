<?php
namespace Requiem\Topsdk\Defaultability;

use Requiem\Requiem\TopApiClient;
use Requiem\Topsdk\Defaultability\Request\AlitripPolicyProcessRequest;
use Requiem\Topsdk\Defaultability\Request\AlitripPolicyRuleUploadRequest;
use Requiem\Topsdk\Defaultability\Request\TaobaoKfcKeywordSearchRequest;
use Requiem\Topsdk\Defaultability\Request\AlitripPolicyNormalUploadRequest;
use Requiem\Topsdk\Defaultability\Request\AlitripPolicyDomfareCompareRequest;
use Requiem\Topsdk\Defaultability\Request\AlitripPolicySpecialUploadRequest;
use Requiem\Topsdk\Defaultability\Request\TaobaoTmcUserGetRequest;
use Requiem\Topsdk\Defaultability\Request\TaobaoOpentradeCustomizationFileUpdateRequest;
use Requiem\Topsdk\Defaultability\Request\AlitripPolicyDomfareFlowdataRequest;

class Defaultability {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        政策进度查询
    **/
    public function alitripPolicyProcess(AlitripPolicyProcessRequest $request,string $session) {
        return $this->client->executeWithSession("alitrip.policy.process", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        规则政策上传
    **/
    public function alitripPolicyRuleUpload(AlitripPolicyRuleUploadRequest $request,string $session) {
        return $this->client->executeWithSession("alitrip.policy.rule.upload", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        关键词过滤匹配
    **/
    public function taobaoKfcKeywordSearch(TaobaoKfcKeywordSearchRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.kfc.keyword.search", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        普通政策上传
    **/
    public function alitripPolicyNormalUpload(AlitripPolicyNormalUploadRequest $request,string $session) {
        return $this->client->executeWithSession("alitrip.policy.normal.upload", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        比价工具
    **/
    public function alitripPolicyDomfareCompare(AlitripPolicyDomfareCompareRequest $request,string $session) {
        return $this->client->executeWithSession("alitrip.policy.domfare.compare", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        特殊政策上传
    **/
    public function alitripPolicySpecialUpload(AlitripPolicySpecialUploadRequest $request,string $session) {
        return $this->client->executeWithSession("alitrip.policy.special.upload", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取用户已开通消息
    **/
    public function taobaoTmcUserGet(TaobaoTmcUserGetRequest $request) {
        return $this->client->execute("taobao.tmc.user.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        比价工具流量详情
    **/
    public function alitripPolicyDomfareFlowdata(AlitripPolicyDomfareFlowdataRequest $request,string $session) {
        return $this->client->executeWithSession("alitrip.policy.domfare.flowdata", $request->toMap(), $request->toFileParamMap(), $session);
    }

    /**
        更新文件地址
    **/
    public function taobaoOpentradeCustomizationFileUpdate(TaobaoOpentradeCustomizationFileUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.opentrade.customization.file.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
}
