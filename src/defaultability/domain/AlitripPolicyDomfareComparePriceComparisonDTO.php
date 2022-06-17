<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class AlitripPolicyDomfareComparePriceComparisonDTO {

    /**
        政策id
     **/
    private $policy_id_str;

    /**
        政策类型：0，普通政策；1，特殊政策；2，规则政策
     **/
    private $policy_type;

    /**
        自己投放价格，单位：分
     **/
    private $self_sale_price;

    /**
        最优价格，单位：分
     **/
    private $lowest_sale_price;

    /**
        价差，单位：分
     **/
    private $price_diff;

    /**
        销售方式：0，无；1，打包销售套餐1；2，打包销售套餐2；3，打包销售套餐3；4，返现-航司运价；5，返现-销售方包装
     **/
    private $sale_mode_code;

    /**
        产品类型：0，普通；1，小团；2，学生；3，青年；4，老年；5，地区；6，会员；10，学生认证；11，年龄
     **/
    private $product_type;

    /**
        是否销售
     **/
    private $can_sell;

    /**
        政策投放情况：0，未投放；1，已投放，非最优惠；2，已投放，且为最优惠政策
     **/
    private $policy_deploy_status;

    /**
        航班日期
     **/
    private $travel_date_str;

    /**
        出发-到达
     **/
    private $arr_dep;

    /**
        航班号
     **/
    private $flight_nos;

    /**
        舱位代码
     **/
    private $carbin_list;


    public function getPolicyIdStr() : string{
        return $this->policy_id_str;
    }

    public function setPolicyIdStr(string $policyIdStr){
        $this->policy_id_str = $policyIdStr;
    }

    public function getPolicyType() : int{
        return $this->policy_type;
    }

    public function setPolicyType(int $policyType){
        $this->policy_type = $policyType;
    }

    public function getSelfSalePrice() : int{
        return $this->self_sale_price;
    }

    public function setSelfSalePrice(int $selfSalePrice){
        $this->self_sale_price = $selfSalePrice;
    }

    public function getLowestSalePrice() : int{
        return $this->lowest_sale_price;
    }

    public function setLowestSalePrice(int $lowestSalePrice){
        $this->lowest_sale_price = $lowestSalePrice;
    }

    public function getPriceDiff() : int{
        return $this->price_diff;
    }

    public function setPriceDiff(int $priceDiff){
        $this->price_diff = $priceDiff;
    }

    public function getSaleModeCode() : int{
        return $this->sale_mode_code;
    }

    public function setSaleModeCode(int $saleModeCode){
        $this->sale_mode_code = $saleModeCode;
    }

    public function getProductType() : int{
        return $this->product_type;
    }

    public function setProductType(int $productType){
        $this->product_type = $productType;
    }

    public function getCanSell() : bool{
        return $this->can_sell;
    }

    public function setCanSell(bool $canSell){
        $this->can_sell = $canSell;
    }

    public function getPolicyDeployStatus() : int{
        return $this->policy_deploy_status;
    }

    public function setPolicyDeployStatus(int $policyDeployStatus){
        $this->policy_deploy_status = $policyDeployStatus;
    }

    public function getTravelDateStr() : array{
        return $this->travel_date_str;
    }

    public function setTravelDateStr(array $travelDateStr){
        $this->travel_date_str = $travelDateStr;
    }

    public function getArrDep() : string{
        return $this->arr_dep;
    }

    public function setArrDep(string $arrDep){
        $this->arr_dep = $arrDep;
    }

    public function getFlightNos() : string{
        return $this->flight_nos;
    }

    public function setFlightNos(string $flightNos){
        $this->flight_nos = $flightNos;
    }

    public function getCarbinList() : string{
        return $this->carbin_list;
    }

    public function setCarbinList(string $carbinList){
        $this->carbin_list = $carbinList;
    }


}

