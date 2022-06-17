<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class AlitripPolicyNormalUploadPolicyDto {

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
        舱位条件:0,白名单；1，黑名单
     **/
    private $is_white;

    /**
        政策备注
     **/
    private $memo;

    /**
        排除航线
     **/
    private $not_appl_od;

    /**
        是否验价：0，不验价；1，验价
     **/
    private $pata;

    /**
        共享航班：0，不支持代码共享；1，支持代码共享；2，仅支持代码共享
     **/
    private $code_share;

    /**
        字符；最多200；可输入多个航司二字码,英文逗号分隔；航司二字码
     **/
    private $code_share_airline;


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

    public function getPrice() : AlitripPolicyNormalUploadPriceDTO{
        return $this->price;
    }

    public function setPrice(AlitripPolicyNormalUploadPriceDTO $price){
        $this->price = $price;
    }

    public function getSale() : AlitripPolicyNormalUploadSaleDTO{
        return $this->sale;
    }

    public function setSale(AlitripPolicyNormalUploadSaleDTO $sale){
        $this->sale = $sale;
    }

    public function getStatus() : int{
        return $this->status;
    }

    public function setStatus(int $status){
        $this->status = $status;
    }

    public function getIsWhite() : int{
        return $this->is_white;
    }

    public function setIsWhite(int $isWhite){
        $this->is_white = $isWhite;
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

    public function getPata() : int{
        return $this->pata;
    }

    public function setPata(int $pata){
        $this->pata = $pata;
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


}

