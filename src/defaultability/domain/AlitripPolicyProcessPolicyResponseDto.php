<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class AlitripPolicyProcessPolicyResponseDto {

    /**
        修改时间
     **/
    private $gmt_modified;

    /**
        店铺id
     **/
    private $agent_id;

    /**
        政策代码
     **/
    private $policy_code;

    /**
        共享航司二字码
     **/
    private $code_share_airline;

    /**
        下浮
     **/
    private $down;

    /**
        紧张阈值
     **/
    private $create_pnr_limit;

    /**
        支持共享航班
     **/
    private $code_share;

    /**
        价格控制
     **/
    private $price;

    /**
        降落机场
     **/
    private $arr_airport;

    /**
        上浮
     **/
    private $up;

    /**
        航空公司二字码
     **/
    private $airline;

    /**
        库存
     **/
    private $stock;

    /**
        大客户编码
     **/
    private $account_code;

    /**
        政策来源
     **/
    private $policy_source;

    /**
        浮动单位
     **/
    private $float_unit;

    /**
        运价渠道
     **/
    private $fare_sources;

    /**
        票面价（元）
     **/
    private $fare_price;

    /**
        pata
     **/
    private $pata;

    /**
        创建时间
     **/
    private $gmt_create;

    /**
        到达机场
     **/
    private $dep_airport;

    /**
        是否订位
     **/
    private $create_pnr;

    /**
        行程类型
     **/
    private $trip_type;

    /**
        销售限制
     **/
    private $sale;

    /**
        farebasis
     **/
    private $fare_basis;

    /**
        乘客限制
     **/
    private $passenger;

    /**
        错误代码
     **/
    private $err_code;

    /**
        政策类型
     **/
    private $policy_type;

    /**
        舱位条件
     **/
    private $is_white;

    /**
        行程限制
     **/
    private $flights;

    /**
        商家配置号
     **/
    private $office_no;

    /**
        政策状态
     **/
    private $status;

    /**
        错误信息
     **/
    private $err_msg;


    public function getGmtModified() : string{
        return $this->gmt_modified;
    }

    public function setGmtModified(string $gmtModified){
        $this->gmt_modified = $gmtModified;
    }

    public function getAgentId() : int{
        return $this->agent_id;
    }

    public function setAgentId(int $agentId){
        $this->agent_id = $agentId;
    }

    public function getPolicyCode() : string{
        return $this->policy_code;
    }

    public function setPolicyCode(string $policyCode){
        $this->policy_code = $policyCode;
    }

    public function getCodeShareAirline() : string{
        return $this->code_share_airline;
    }

    public function setCodeShareAirline(string $codeShareAirline){
        $this->code_share_airline = $codeShareAirline;
    }

    public function getDown() : int{
        return $this->down;
    }

    public function setDown(int $down){
        $this->down = $down;
    }

    public function getCreatePnrLimit() : int{
        return $this->create_pnr_limit;
    }

    public function setCreatePnrLimit(int $createPnrLimit){
        $this->create_pnr_limit = $createPnrLimit;
    }

    public function getCodeShare() : int{
        return $this->code_share;
    }

    public function setCodeShare(int $codeShare){
        $this->code_share = $codeShare;
    }

    public function getPrice() : AlitripPolicyProcessPriceDto{
        return $this->price;
    }

    public function setPrice(AlitripPolicyProcessPriceDto $price){
        $this->price = $price;
    }

    public function getArrAirport() : string{
        return $this->arr_airport;
    }

    public function setArrAirport(string $arrAirport){
        $this->arr_airport = $arrAirport;
    }

    public function getUp() : int{
        return $this->up;
    }

    public function setUp(int $up){
        $this->up = $up;
    }

    public function getAirline() : string{
        return $this->airline;
    }

    public function setAirline(string $airline){
        $this->airline = $airline;
    }

    public function getStock() : AlitripPolicyProcessStockDto{
        return $this->stock;
    }

    public function setStock(AlitripPolicyProcessStockDto $stock){
        $this->stock = $stock;
    }

    public function getAccountCode() : string{
        return $this->account_code;
    }

    public function setAccountCode(string $accountCode){
        $this->account_code = $accountCode;
    }

    public function getPolicySource() : int{
        return $this->policy_source;
    }

    public function setPolicySource(int $policySource){
        $this->policy_source = $policySource;
    }

    public function getFloatUnit() : int{
        return $this->float_unit;
    }

    public function setFloatUnit(int $floatUnit){
        $this->float_unit = $floatUnit;
    }

    public function getFareSources() : array{
        return $this->fare_sources;
    }

    public function setFareSources(array $fareSources){
        $this->fare_sources = $fareSources;
    }

    public function getFarePrice() : int{
        return $this->fare_price;
    }

    public function setFarePrice(int $farePrice){
        $this->fare_price = $farePrice;
    }

    public function getPata() : int{
        return $this->pata;
    }

    public function setPata(int $pata){
        $this->pata = $pata;
    }

    public function getGmtCreate() : string{
        return $this->gmt_create;
    }

    public function setGmtCreate(string $gmtCreate){
        $this->gmt_create = $gmtCreate;
    }

    public function getDepAirport() : string{
        return $this->dep_airport;
    }

    public function setDepAirport(string $depAirport){
        $this->dep_airport = $depAirport;
    }

    public function getCreatePnr() : int{
        return $this->create_pnr;
    }

    public function setCreatePnr(int $createPnr){
        $this->create_pnr = $createPnr;
    }

    public function getTripType() : int{
        return $this->trip_type;
    }

    public function setTripType(int $tripType){
        $this->trip_type = $tripType;
    }

    public function getSale() : AlitripPolicyProcessSaleDto{
        return $this->sale;
    }

    public function setSale(AlitripPolicyProcessSaleDto $sale){
        $this->sale = $sale;
    }

    public function getFareBasis() : string{
        return $this->fare_basis;
    }

    public function setFareBasis(string $fareBasis){
        $this->fare_basis = $fareBasis;
    }

    public function getPassenger() : AlitripPolicyProcessPassengerDto{
        return $this->passenger;
    }

    public function setPassenger(AlitripPolicyProcessPassengerDto $passenger){
        $this->passenger = $passenger;
    }

    public function getErrCode() : string{
        return $this->err_code;
    }

    public function setErrCode(string $errCode){
        $this->err_code = $errCode;
    }

    public function getPolicyType() : int{
        return $this->policy_type;
    }

    public function setPolicyType(int $policyType){
        $this->policy_type = $policyType;
    }

    public function getIsWhite() : int{
        return $this->is_white;
    }

    public function setIsWhite(int $isWhite){
        $this->is_white = $isWhite;
    }

    public function getFlights() : array{
        return $this->flights;
    }

    public function setFlights(array $flights){
        $this->flights = $flights;
    }

    public function getOfficeNo() : string{
        return $this->office_no;
    }

    public function setOfficeNo(string $officeNo){
        $this->office_no = $officeNo;
    }

    public function getStatus() : int{
        return $this->status;
    }

    public function setStatus(int $status){
        $this->status = $status;
    }

    public function getErrMsg() : string{
        return $this->err_msg;
    }

    public function setErrMsg(string $errMsg){
        $this->err_msg = $errMsg;
    }


}

