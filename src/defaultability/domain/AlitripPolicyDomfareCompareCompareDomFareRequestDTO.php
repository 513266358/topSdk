<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class AlitripPolicyDomfareCompareCompareDomFareRequestDTO {

    /**
        航空公司
     **/
    private $airline_codes;

    /**
        行程类型：0，单程；1，往返；暂时仅支持单程
     **/
    private $trip_type;

    /**
        航司+航班号，多个航班号用#分隔，航班号范围用-连接，例如：HU9990-HU9995#HU9999
     **/
    private $flight_no_str;

    /**
        共享航班：0，不支持代码共享；1，支持代码共享；2，仅支持代码共享；为空表示不限制
     **/
    private $support_code_share;

    /**
        产品类型：0，普通；1，小团；2，学生；3，青年；4，老年；5，地区；6，会员；10，学生认证；11，年龄；为空表示不限制
     **/
    private $product_types;

    /**
        舱位代码，仅可传入一个值
     **/
    private $cabin_code_str;

    /**
        航程信息
     **/
    private $od_infos;

    /**
        政策投放情况：0，未投放；1，已投放，非最优惠；2，已投放，且为最优惠政策；为空表示不限制
     **/
    private $policy_deploy_status;

    /**
        销售方式：0，无；1，打包销售套餐1；2，打包销售套餐2；3，打包销售套餐3；4，返现-航司运价；5，返现-销售方包装；为空表示不限制
     **/
    private $sale_mode_codes;

    /**
        店铺id
     **/
    private $agent_id;


    public function getAirlineCodes() : array{
        return $this->airline_codes;
    }

    public function setAirlineCodes(array $airlineCodes){
        $this->airline_codes = $airlineCodes;
    }

    public function getTripType() : int{
        return $this->trip_type;
    }

    public function setTripType(int $tripType){
        $this->trip_type = $tripType;
    }

    public function getFlightNoStr() : string{
        return $this->flight_no_str;
    }

    public function setFlightNoStr(string $flightNoStr){
        $this->flight_no_str = $flightNoStr;
    }

    public function getSupportCodeShare() : int{
        return $this->support_code_share;
    }

    public function setSupportCodeShare(int $supportCodeShare){
        $this->support_code_share = $supportCodeShare;
    }

    public function getProductTypes() : array{
        return $this->product_types;
    }

    public function setProductTypes(array $productTypes){
        $this->product_types = $productTypes;
    }

    public function getCabinCodeStr() : string{
        return $this->cabin_code_str;
    }

    public function setCabinCodeStr(string $cabinCodeStr){
        $this->cabin_code_str = $cabinCodeStr;
    }

    public function getOdInfos() : array{
        return $this->od_infos;
    }

    public function setOdInfos(array $odInfos){
        $this->od_infos = $odInfos;
    }

    public function getPolicyDeployStatus() : int{
        return $this->policy_deploy_status;
    }

    public function setPolicyDeployStatus(int $policyDeployStatus){
        $this->policy_deploy_status = $policyDeployStatus;
    }

    public function getSaleModeCodes() : array{
        return $this->sale_mode_codes;
    }

    public function setSaleModeCodes(array $saleModeCodes){
        $this->sale_mode_codes = $saleModeCodes;
    }

    public function getAgentId() : int{
        return $this->agent_id;
    }

    public function setAgentId(int $agentId){
        $this->agent_id = $agentId;
    }


}

