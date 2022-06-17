<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class AlitripPolicySpecialUploadPolicyQueryParamDTO {

    /**
        大客户编码
     **/
    private $account_code;

    /**
        航司二字码
     **/
    private $airline;

    /**
        到达机场三字码
     **/
    private $arr_airport;

    /**
        去程舱位
     **/
    private $cabin_list1;

    /**
        回程舱位
     **/
    private $cabin_list2;

    /**
        出发机场三字码
     **/
    private $dep_airport;

    /**
        根据政策编码模糊查询,暂时不支持
     **/
    private $fuzzy_query;

    /**
        政策编码
     **/
    private $policy_code;

    /**
        政策来源：0，手工政策；1，excel政策；2，api政策
     **/
    private $policy_source;

    /**
        销售起始日期
     **/
    private $sale_start_date;

    /**
        销售截止日期
     **/
    private $sales_end_date;

    /**
        政策状态：1，有效；2，挂起；0，删除
     **/
    private $status;

    /**
        行程截止日期
     **/
    private $travel_end_date;

    /**
        行程起始日期
     **/
    private $travel_start_date;


    public function getAccountCode() : string{
        return $this->account_code;
    }

    public function setAccountCode(string $accountCode){
        $this->account_code = $accountCode;
    }

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

    public function getCabinList1() : string{
        return $this->cabin_list1;
    }

    public function setCabinList1(string $cabinList1){
        $this->cabin_list1 = $cabinList1;
    }

    public function getCabinList2() : string{
        return $this->cabin_list2;
    }

    public function setCabinList2(string $cabinList2){
        $this->cabin_list2 = $cabinList2;
    }

    public function getDepAirport() : string{
        return $this->dep_airport;
    }

    public function setDepAirport(string $depAirport){
        $this->dep_airport = $depAirport;
    }

    public function getFuzzyQuery() : bool{
        return $this->fuzzy_query;
    }

    public function setFuzzyQuery(bool $fuzzyQuery){
        $this->fuzzy_query = $fuzzyQuery;
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

    public function getSaleStartDate() : string{
        return $this->sale_start_date;
    }

    public function setSaleStartDate(string $saleStartDate){
        $this->sale_start_date = $saleStartDate;
    }

    public function getSalesEndDate() : string{
        return $this->sales_end_date;
    }

    public function setSalesEndDate(string $salesEndDate){
        $this->sales_end_date = $salesEndDate;
    }

    public function getStatus() : int{
        return $this->status;
    }

    public function setStatus(int $status){
        $this->status = $status;
    }

    public function getTravelEndDate() : string{
        return $this->travel_end_date;
    }

    public function setTravelEndDate(string $travelEndDate){
        $this->travel_end_date = $travelEndDate;
    }

    public function getTravelStartDate() : string{
        return $this->travel_start_date;
    }

    public function setTravelStartDate(string $travelStartDate){
        $this->travel_start_date = $travelStartDate;
    }


}

