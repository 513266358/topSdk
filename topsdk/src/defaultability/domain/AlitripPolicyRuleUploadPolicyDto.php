<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class AlitripPolicyRuleUploadPolicyDto {

    /**
        航司二字码
     **/
    private $airline;

    /**
        到达机场三字码，不填代表不限，不要填ALL
     **/
    private $arr_airport;

    /**
        是否订位：1，平台订位；0，平台不订位；2，紧张订位
     **/
    private $create_pnr;

    /**
        出发机场三字码，不填代表不限，不要填ALL
     **/
    private $dep_airport;

    /**
        行程信息
     **/
    private $flights;

    /**
        商家配置号
     **/
    private $office_no;

    /**
        pata：0，不验价；1，验价
     **/
    private $pata;

    /**
        政策编码
     **/
    private $policy_code;

    /**
        政策来源：0，手工政策；1，excel政策；2，api政策
     **/
    private $policy_source;

    /**
        价格信息栏
     **/
    private $price;

    /**
        销售信息
     **/
    private $sale;

    /**
        政策状态：1，有效；2，挂起；0，删除
     **/
    private $status;

    /**
        大客户编码，请输入包含PAT在内的完整格式。
     **/
    private $account_code;

    /**
        是否共享航班：0，不支持代码共享；1，支持代码共享；2，仅支持代码共享
     **/
    private $code_share;

    /**
        共享航班号码
     **/
    private $code_share_airline;

    /**
        乘客限制
     **/
    private $passenger;

    /**
        用于匹配平台退改，如果填写，则只能填写精确的farebasis，不得带通配符；匹配不到，走平台默认退改
     **/
    private $fare_basis;

    /**
        运价类型：0，FD；1，NFD；2，特殊运价；5，IBE；11，B2T；12，旗舰店；13，官网；14，大卖家
     **/
    private $fare_source;

    /**
        政策备注
     **/
    private $memo;

    /**
        排除航线
     **/
    private $not_appl_od;


    public function getAirline() : string{
        return $this->airline;
    }

    public function setAirline(string $airline){
        $this->airline = $airline;
    }

    public function getArrAirport() : string{
        return $this->arr_airport;
    }

    public function setArrAirport(string $arrAirport){
        $this->arr_airport = $arrAirport;
    }

    public function getCreatePnr() : int{
        return $this->create_pnr;
    }

    public function setCreatePnr(int $createPnr){
        $this->create_pnr = $createPnr;
    }

    public function getDepAirport() : string{
        return $this->dep_airport;
    }

    public function setDepAirport(string $depAirport){
        $this->dep_airport = $depAirport;
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

    public function getPata() : int{
        return $this->pata;
    }

    public function setPata(int $pata){
        $this->pata = $pata;
    }

    public function getPolicyCode() : string{
        return $this->policy_code;
    }

    public function setPolicyCode(string $policyCode){
        $this->policy_code = $policyCode;
    }

    public function getPolicySource() : int{
        return $this->policy_source;
    }

    public function setPolicySource(int $policySource){
        $this->policy_source = $policySource;
    }

    public function getPrice() : AlitripPolicyRuleUploadPriceDto{
        return $this->price;
    }

    public function setPrice(AlitripPolicyRuleUploadPriceDto $price){
        $this->price = $price;
    }

    public function getSale() : AlitripPolicyRuleUploadSaleDto{
        return $this->sale;
    }

    public function setSale(AlitripPolicyRuleUploadSaleDto $sale){
        $this->sale = $sale;
    }

    public function getStatus() : int{
        return $this->status;
    }

    public function setStatus(int $status){
        $this->status = $status;
    }

    public function getAccountCode() : string{
        return $this->account_code;
    }

    public function setAccountCode(string $accountCode){
        $this->account_code = $accountCode;
    }

    public function getCodeShare() : int{
        return $this->code_share;
    }

    public function setCodeShare(int $codeShare){
        $this->code_share = $codeShare;
    }

    public function getCodeShareAirline() : string{
        return $this->code_share_airline;
    }

    public function setCodeShareAirline(string $codeShareAirline){
        $this->code_share_airline = $codeShareAirline;
    }

    public function getPassenger() : AlitripPolicyRuleUploadPassengerDto{
        return $this->passenger;
    }

    public function setPassenger(AlitripPolicyRuleUploadPassengerDto $passenger){
        $this->passenger = $passenger;
    }

    public function getFareBasis() : string{
        return $this->fare_basis;
    }

    public function setFareBasis(string $fareBasis){
        $this->fare_basis = $fareBasis;
    }

    public function getFareSource() : array{
        return $this->fare_source;
    }

    public function setFareSource(array $fareSource){
        $this->fare_source = $fareSource;
    }

    public function getMemo() : string{
        return $this->memo;
    }

    public function setMemo(string $memo){
        $this->memo = $memo;
    }

    public function getNotApplOd() : array{
        return $this->not_appl_od;
    }

    public function setNotApplOd(array $notApplOd){
        $this->not_appl_od = $notApplOd;
    }


}

